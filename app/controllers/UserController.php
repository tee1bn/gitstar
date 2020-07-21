<?php

use Filters\Filters\SupportTicketFilter;
use Filters\Filters\WalletFilter;
use Illuminate\Database\Capsule\Manager as DB;
use v2\Models\Document;
use v2\Models\HeldCoin;
use v2\Models\HotWallet;
use v2\Models\InvestmentPackage;
use v2\Models\PayoutWallet;
use v2\Models\Commission;
use v2\Models\Wallet;
use v2\Models\Withdrawal;
use v2\Security\TwoFactor;
use v2\Shop\Shop;
use Filters\Filters\WithdrawalFilter;


/**
 *
 */
class UserController extends controller
{


    public function __construct()
    {


        if (!$this->admin()) {
            $this->middleware('current_user')
                ->mustbe_loggedin()
                ->must_have_verified_email();
            // ->must_have_verified_company();
        }

    }


    public function choose_membership($membership_id)
    {
        $auth = $this->auth();
        $membership = SubscriptionPlan::find($membership_id);

        if ($membership==null) {
            return;
        }

        $subscription_id = $membership_id;


        $personal_settings = $auth->SettingsArray;
        $personal_settings['membership_choice'] = $membership_id;

        $auth->save_settings($personal_settings);

        if ($membership_id < 2) {
            
            Redirect::back();
        }

        $response = SubscriptionPlan::create_subscription_request($subscription_id, $auth->id);

        Redirect::back();

    }



    public function investment_detail($investment_id)
    {
        $auth = $this->auth();
        $pack = HotWallet::where('id', $investment_id)->where('user_id', $auth->id)->first();

        if ($pack == null) {
            Session::putFlash();
            
        }


        $this->view('auth/investment_detail', compact('pack'));
    }


    public function membership_orders()
    {
        $this->view('auth/membership_orders');
    }


    public function direct_ranks()
    {
        $direct_ranks = $this->auth()->referred_members_downlines(1)[1];
        $direct_ranks = User::whereIn('id', collect($direct_ranks)->where('rank', '>', -1)->pluck('id')->toArray())->get();
        $this->view('auth/direct_ranks', compact('direct_ranks'));
    }

    public function send_email_code()
    {
        echo "<pre>";

        $this->create_email_code();
    }


    public function resources($category_key = null)
    {

        $category = Document::$categories[$category_key] ?? null;

        $documents = Document::where('category', $category)->get();
        $title = "$category";

        if ($documents->isEmpty()) {
            $documents = Document::get();
            $title = "All Documents";
        }

        $this->view('auth/resources', compact('title', 'documents'));

    }

    public function faqs()
    {
        $this->view('auth/faqs');
    }

    public function supportmessages($value = '')
    {
        $this->view('auth/support-messages');
    }

    public function sell_hotwallet_coins_the_right_way()
    {

        
        
    }

    public function sell_hotwallet_coins()
    {
        $auth = $this->auth();
        //put held coins to cash in payout wallet

      /*  Session::putFlash("danger", "This action cannot be completed now, please try later.");
        Redirect::back();*/


        $today = date("Y-m-d H:i:s");

        //get all users with roi to be splitted today
        $investments = HotWallet::
        where('wallet_for_hot_wallet.type', 'credit')
        ->where('wallet_for_hot_wallet.user_id', $auth->id)
        ->where('wallet_for_hot_wallet.earning_category', 'hot_wallet')
        ->where('wallet_for_hot_wallet.order_id', '!=', null)
        ->where('wallet_for_hot_wallet.admin_id', null)  // removes simulate package from gettting splited
        ->where('wallet_for_hot_wallet.amount', '>' , 0)
        ->where('wallet_for_hot_wallet.split_at', '=',  null)
        ->where('wallet_for_hot_wallet.sold', '=',  null)
        ->where('wallet_for_hot_wallet.identifier', 'like',  '%split_investment%')
        // ->whereDate('wallet_for_hot_wallet.paid_at', '<=',  $date_x_days_ago)
        ;


        $amount = $investments->sum('amount');
        $comment = "Sold $amount to company";


        DB::beginTransaction();


        try {
            

            foreach ($investments->get() as $key => $investment) {
                $investment->sell_to_payout();
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();

            print_r($e->getMessage());

            
        }


        Redirect::back();


    }


    public function submit_2fa()
    {
        $auth = $this->auth();

        if ($_POST['code'] == '') {
            Session::putFlash('danger', "Invalid Code");
            Redirect::back();
        }

        $this->verify_2fa_only();


        $existing_settings = $auth->SettingsArray;

        $twofa_recovery = MIS::random_string(10);
        if (!$auth->has_2fa_enabled()) {
            $existing_settings['enable_2fa'] = 1;
            $existing_settings['2fa_recovery'] = $twofa_recovery;
            Session::putFlash('success', "2FA enabled successfully");

        } else {
            $existing_settings['enable_2fa'] = 0;
            Session::putFlash('success', "2FA disabled successfully");
        }

        $auth->save_settings($existing_settings);

        Redirect::back();
    }

    public function two_factor_authentication()
    {

        $auth = $this->auth();
        $_2FA = new TwoFactor($auth);

        if ($auth->has_2fa_enabled()) {

            $image = null;
        } else {


            if (!$_2FA->hasLogin(@$code)) {
                $image = $_2FA->getQrCode();
            }
        }

        $this->view('auth/two-factor-authentication', compact('image'));
    }

    public function submit_make_deposit()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $min_deposit = $rules_settings->settingsArray['min_deposit_usd'];

        $this->validator()->check(Input::all(), array(
            'amount' => [
                'required' => true,
                'positive' => true,
                'min_value' => $min_deposit,
            ],
            'payment_method' => [
                'required' => true,
            ],
        ));


        if (!$this->validator->passed()) {

            Session::putFlash('danger', Input::inputErrors());
            Redirect::back();
        }

        DB::beginTransaction();

        try {
            

            $deposit = Wallet::create([
                'user_id' => $this->auth()->id,
                'amount' => Input::get('amount'),
                'earning_category' => 'deposit',
                'comment' => 'Funding Account',
                'type' => 'credit',
                'status' => 'pending',
                'payment_method' => $_POST['payment_method'],
            ]);

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();
            Session::putFlash("danger","We could not initialize the payment process. Please try again");
            Redirect::back();
        }

        $callback_param = http_build_query([
            'item_purchased' => $deposit->name_in_shop,
            'order_unique_id' => $deposit->id,
            'payment_method' => $deposit->payment_method,
        ]);


        $callback_url = "shop/checkout?$callback_param";


        /*		$deposit->mark_paid();
                $shop = new Shop();
                $shop->empty_cart_in_session();
        */

        Redirect::to("$callback_url");


        // $this->deposit_checkout($deposit->id);

    }



    public function notifications($notification_id = 'all')
    {

        $auth = $this->auth();
        $per_page= 50;
        $page = $_GET['page']??1;

        switch ($notification_id) {
            case 'all':
            $notifications = Notifications::all_notifications($auth->id, $per_page, $page);
            $total = Notifications::all_notifications($auth->id)->count();
                break;
            
            default:
            
            $total = null;

            $notifications = Notifications::where('user_id', $auth->id)->where('id', $notification_id)->first();

            Notifications::mark_as_seen([$notifications->id]);


            if ($notifications == null) {
                Session::putFlash("danger", "Invalid Request");
                Redirect::back();
            }



            if ($notifications->DefaultUrl != $notifications->UsefulUrl) {

                Redirect::to($notifications->UsefulUrl);
            }

            break;
        }



        $this->view('auth/notifications', compact('notifications','per_page','total'));
    }



    public function commission_history()
    {

        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = Commission::for($auth->id)->latest();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $balance = $query->sum('amount');

        $total = $query->count();

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $balance = Commission::availableBalanceOnUser($auth->id);

        $note = MIS::filter_note($records->count() , $data, $total,  $sieve, 1);

        $this->view('auth/commission_history', compact('records', 'balance', 'sieve', 'data', 'per_page', 'note'));
    }




    public function company()
    {
        $company = $this->auth()->company;
        $this->view('auth/company', compact('company'));
    }


    public function order($order_id = null)
    {

        $order = SubscriptionOrder::where('id', $order_id)->where('user_id', $this->auth()->id)->first();
        echo $this->buildView('auth/order_detail', compact('order'));

    }

    public function download_invoice($order_id = null)
    {
        $order = HotWallet::where('id', $order_id)->where('user_id', $this->auth()->id)->first();
        if ($order == null) {
            Session::putFlash("danger", "Invalid Request.");
            Redirect::back();
        }

        $order->getInvoice();
    }


    public function products()
    {
        $this->view('auth/products');
    }


    public function products_orders()
    {
        $this->view('auth/products_orders');
    }


    public function view_cart()
    {

        $cart = json_decode($_SESSION['cart'], true)['$items'];

        if (count($cart) == 0) {
            Session::putFlash("info", "Your cart is empty.");
            Redirect::to('user/shop');
        }
        $this->view('auth/view_cart');
    }


    public function shop()
    {

        $products = $this->auth()->accessible_products();

        $this->view('auth/shop', compact('products'));
    }


    public function scheme()
    {

        $subscription = $this->auth()->subscription;

        if ($subscription == null) {

            Redirect::back();
        }

        $this->view('auth/subscription_confirmation', compact('subscription'));
    }


    public function download($ebook_id)
    {

        $ebook = Ebooks::find($ebook_id);
        $ebook->download();
    }


    public function create_upgrade_request($subscription_id = null)
    {

        $subscription_id = $_REQUEST['subscription_id'];

        $response = SubscriptionPlan::create_subscription_request($subscription_id, $this->auth()->id);


        header("content-type:application/json");
        echo $response;

        Redirect::back();
    }


    public function deposit_orders_history()
    {
        $deposit_orders = Wallet::Category('deposit')->where('user_id', $this->auth()->id)->Credit()->Pending()->Unpaid()->latest()->get();

        $this->view('auth/deposit_orders_history', compact('deposit_orders'));
    }


    public function invoices()
    {
        $packs = InvestmentPackage::for ($this->auth()->id)->latest()->get();

        $this->view('auth/invoices', compact('packs'));
    }


    public function hot_wallet()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $setting = $rules_settings->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];


        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = HotWallet::for ($auth->id)->Category(['hot_wallet'])->where('cost', null)->latest();

        $total = $query->count();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $hot_wallet_balance = HotWallet::availableBalanceOnUser($auth->id, 'hot_wallet');

        $note = MIS::filter_note($records->count() , $data, $total,  $sieve, 1);

        $this->view('auth/hot_wallet', compact('records', 'hot_wallet_balance', 'trucash_exchange', 'sieve', 'data', 'per_page','note'));
    }


    public function cold_wallet()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $setting = $rules_settings->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];


        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = HeldCoin::for($auth->id)->latest();
        $total= $query->count();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $cold_wallet_balance = HeldCoin::availableBalanceOnUser($auth->id);


        $note = MIS::filter_note($records->count() , $data, $total,  $sieve, 1);

        $this->view('auth/cold_wallet', compact('records', 'cold_wallet_balance', 'trucash_exchange', 'sieve', 'data', 'per_page','note'));
    }



    public function trucash_purchase_history()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $setting = $rules_settings->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];


        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve, ['comment' => 'purchase ']);

        $query = HeldCoin::for($auth->id)->latest();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $cold_wallet_balance = HeldCoin::availableBalanceOnUser($auth->id);

        $this->view('auth/trucash_purchase_history', compact('records', 'cold_wallet_balance', 'trucash_exchange', 'sieve', 'data', 'per_page'));
    }

    

    public function payout_wallet()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $setting = $rules_settings->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];


        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = PayoutWallet::for ($auth->id)->latest();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $cold_wallet_balance = PayoutWallet::availableBalanceOnUser($auth->id);

        $this->view('auth/payout_wallet', compact('records', 'cold_wallet_balance', 'trucash_exchange', 'sieve', 'data', 'per_page'));
    }


    public function transfer_history()
    {

        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $setting = $rules_settings->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];


        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = Wallet::for ($auth->id)->latest()->where('payment_method', 'transfer');

        $total_transfer_from_deposit = $query->count();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $data = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);


        $records = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered



        $query = PayoutWallet::for ($auth->id)->latest();


        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve, ['comment'=> 'Transfer']);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WalletFilter($sieve);

        $p_data = $query->Filter($filter)->count();
        $total_transfer_from_payout = $query->Filter($filter)->count();

        $sql = $query->Filter($filter);

        $from_payout_wallet = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered



        $records =$records->concat($from_payout_wallet)->sortByDesc('created_at');



        $total = $total_transfer_from_payout + $total_transfer_from_deposit;
        $data = $data + $p_data;


        $note = MIS::filter_note($records->count() , $data, $total,  $sieve, 1);


        $this->view('auth/transfer_history', compact('records','note', 'trucash_exchange', 'sieve', 'data', 'per_page'));
    }


    public function your_packs()
    {
        $packs = InvestmentPackage::for ($this->auth()->id)->latest()->get();
        $this->view('auth/your_packs', compact('packs'));
    }


    public function select_pack()
    {
        $investment = InvestmentPackage::find($_POST['investment_id']);

        if ($investment == null) {
            Session::putFlash('danger', "Invalid Request");
            Redirect::back();
        }

        $wallet = new Wallet;

        $this->view('auth/select_pack', compact('investment', 'wallet'));
    }

    public function submit_investment()
    {

        echo "<pre>";

        $investment = InvestmentPackage::find($_POST['investment_id']);


        $amount = $_POST['amount'];


        $investment->in_range($_POST['amount']);


        if (($investment == null) || (!$investment->in_range($amount))) {
            Session::putFlash('danger', "Invalid Request");
            Redirect::back();
        }


        $this->validator()->check(Input::all(), array(
            'amount' => [
                'required' => true,
                'positive' => true,
                'min_value' => $investment->DetailsArray['min_capital'],
                'max_value' => $investment->DetailsArray['max_capital'],
            ],
            'wallet' => [
                'required' => true,
            ],
            'investment_id' => [
                'required' => true,
            ],
        ));


        if (!$this->validator->passed()) {
            Session::putFlash('danger', Input::inputErrors());
            Redirect::back();
        }

        $auth = $this->auth();


        //ensure more not more than set number than one same pack is not running
        $has_this_running =  InvestmentPackage::user_has_more_than_x_running($auth->id, $investment->id);
        if ($has_this_running) {

         Session::putFlash('danger', "Max number of <code>$investment->name</code> is currently running. Please choose another pack");
         Redirect::to("user/purchase-investment");

        }


        DB::beginTransaction();

        $wallet_to_use = Wallet::$wallets[$_POST['wallet']];
        $wallet_class = $wallet_to_use['class'];
        $wallet_category = $wallet_to_use['category'];


        try {

            //debit user
            $comment = "Purchased $investment->name for $amount";
            //make debit first
            $debit = $wallet_class::createTransaction(
                'debit',
                $auth->id,
                null,
                $amount,
                'completed',
                $wallet_category,
                $comment,
                null,
                null,
                null);

            if ($debit == false) {

                throw new Exception("Could not debit", 1);
            }

            $debit->update([
                'payment_method' => 'pack',
            ]);


            //now create record for package investment
            $investment->setAmount($amount);
            $schedule = $investment->spread('weekly');
            $i_details = [
                'investment' => $investment->toArray(),
                'annual_worth' => $investment->getWorth('annual'),
                'total_worth' => $investment->getWorth('annual'),
                'capital' => $amount,
                'annual_roi' => $investment->DetailsArray['annual_roi_percent'],
                'weekly_worth' => $investment->getWorth('weekly'),
                'spread' => $schedule['spread'],
                'is_complete' => 0
            ];



            $i_details['split_dates'] = $schedule['split_dates'];

            $extra_detail = json_encode($i_details);

            $today = date("Y-m-d H:i:s");

            $roi = HotWallet::createTransaction(
                'credit',
                $auth->id,
                null,
                0.00,
                'completed',
                'investment',
                $comment,
                null,
                $debit->id,
                null,
                $extra_detail,
                $today
            );

            $roi->update([
                            'cost' => $amount,
                            'split_at' => $schedule['split_dates'][0]
                        ]);

            $roi->give_referral_commission();


            if ($roi == false) {
                throw new Exception("Could not creeate roi", 1);
            }


            DB::commit();
            Session::putFlash('success', "$investment->name purchased successfully");

        } catch (Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            Session::putFlash('danger', 'Action Failed');
        }


        Redirect::to("user/purchase-investment");
    }


    public function submit_buy_trucash()
    {

        echo "<pre>";



        $amount = $_POST['amount'];


        $this->validator()->check(Input::all(), array(
            'amount' => [
                'required' => true,
                'positive' => true,
            ],
            'wallet' => [
                'required' => true,
            ],
        ));


        if (!$this->validator->passed()) {
            Session::putFlash('danger', Input::inputErrors());
            Redirect::back();
        }

        $auth = $this->auth();


        DB::beginTransaction();

        $wallet_to_use = Wallet::$wallets[$_POST['wallet']];
        $wallet_class = $wallet_to_use['class'];
        $wallet_category = $wallet_to_use['category'];


        try {

            //debit user
            $comment = "Purchased $amount$ TruCash ";
            //make debit first
            $debit = $wallet_class::createTransaction(
                'debit',
                $auth->id,
                null,
                $amount,
                'completed',
                $wallet_category,
                $comment,
                null,
                null,
                null);

            if ($debit == false) {

                throw new Exception("Could not debit", 1);
            }

            $debit->update([
                'payment_method' => 'trucash',
            ]);


            //now create record for trucash purchase
            $today = date("Y-m-d H:i:s");
            $roi = HeldCoin::createTransaction(
                'credit',
                $auth->id,
                null,
                $amount,
                'completed',
                'heldcoin',
                $comment,
                null,
                $debit->id,
                null,
                $extra_detail,
                $today
            );


            if ($roi == false) {
                throw new Exception("Could not creeate roi", 1);
            }


            DB::commit();
            Session::putFlash('success', "$amount$ TruCash purchased successfully");

        } catch (Exception $e) {
            DB::rollback();
            print_r($e->getMessage());
            Session::putFlash('danger', 'Action Failed');
        }


        Redirect::to("user/purchase-investment");
    }


    public function purchase_investment()
    {
        $shop = new Shop;
        $wallet = new Wallet;
        $this->view('auth/purchase_investment', compact('shop', 'wallet'));
    }

    public function account_plan()
    {
        $wallet = new Wallet;
        $this->view('auth/account_plan', compact('wallet'));
    }


    public function reports()
    {
        $this->view('auth/report');
    }


    public function make_withdrawal_request()
    {

        $settings = SiteSettings::site_settings();
        $min_withdrawal = $settings['minimum_withdrawal'];

        $currency = Config::currency();
        $amount = $_POST['amount'];


        if ($amount < $min_withdrawal) {
            Session::putFlash('info', "Sorry, Minimum Withdrawal is  $currency$min_withdrawal. ");
            Redirect::back();
        }


        LevelIncomeReport::create_withdrawal_request($this->auth()->id, $amount);

        Redirect::back();

    }


    public function submit_user_transfers()
    {
        echo "<pre>";



        $rules_settings = SiteSettings::find_criteria('rules_settings');
        $transfer_fee = $rules_settings->settingsArray['user_transfer_fee_percent'];
        $min_transfer = $rules_settings->settingsArray['min_transfer_usd'];


        $this->validator()->check(Input::all(), array(
            'amount' => [
                'required' => true,
                'positive' => true,
                'min_value' => $min_transfer,
            ],
            'wallet' => [
                'required' => true,
            ],

            'username' => [
                'required' => true,
                'exist' => 'User|username',
            ],
        ));


        if (!$this->validator->passed()) {

            Session::putFlash('danger', Input::inputErrors());
            Redirect::back();
        }

        $auth = $this->auth();
        $from = $auth->id;
        $amount = Input::get('amount');
        $username = Input::get('username');
        $wallet = Input::get('wallet');

        $to = User::where('username', $username)->first()->id;


        $wallet_to_use = Wallet::$wallets[$_POST['wallet']];
        $wallet_class = $wallet_to_use['class'];
        $wallet_category = $wallet_to_use['category'];


        $transfer = $wallet_class::makeTransfer($from, $to, $amount, $wallet_category, 'deposit');
        $currency = Config::currency();
        $formatted_amount = MIS::money_format($amount);

        if ($transfer == true) {

            Session::putFlash('success', "$currency$formatted_amount transfer initiated successfully to $username");

        } else {

            Session::putFlash('danger', "Transfer Failed");

        }

        Redirect::back();


    }


    





    public function user_transfers()
    {
        $auth = $this->auth();
        $wallet = new Wallet;
        $deposit_balance = Wallet::availableBalanceOnUser($auth->id, 'deposit');

        $this->view('auth/user-transfers', compact('wallet', 'deposit_balance'));
    }


    public function make_deposit()
    {
        $auth = $this->auth();
        $shop = new Shop;
        $deposits = Wallet::for ($auth->id)->Category('deposit')->Paid()->Credit()->Completed()->latest()->get();
        $deposit_balance = Wallet::availableBalanceOnUser($auth->id, 'deposit');

        $this->view('auth/make_deposit', compact('shop', 'deposit_balance', 'deposits'));
    }


    public function my_wallet()
    {
        $this->view('auth/my_wallet');
    }


    public function make_withdrawal()
    {
        $this->view('auth/make_withdrawal');
    }


    public function withdrawals()
    {

        $query = Withdrawal::where('user_id', $this->auth()->id)->latest();


        $sieve = $_REQUEST;
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  WithdrawalFilter($sieve);

        $data = $query->Filter($filter)->count();

        $withdrawals = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered




        $this->view('auth/withdrawal-history', compact('withdrawals', 'sieve', 'data', 'per_page'));



        // $this->view('auth/withdrawal-history', compact('withdrawals'));
    }


    public function update_testimonial()
    {

        echo "<pre>";
        $testimony_id = Input::get('testimony_id');
        $testimony = Testimonials::find($testimony_id);

        $attester = $this->auth()->lastname . ' ' . $this->auth()->firstname;


        $testimony->update([
            'attester' => $attester,
            'user_id' => $this->auth()->id,
            'content' => Input::get('testimony'),
            'approval_status' => 0
        ]);


        Session::putFlash('success', 'Testimonial updated successfully. Awaiting approval');

        Redirect::back();
    }


    public function create_testimonial()
    {
        if (Input::exists() || true) {

            $auth = $this->auth();

            $testimony = Testimonials::create([
                'attester' => $auth->lastname . ' ' . $auth->firstname,
                'user_id' => $auth->id,
                'content' => Input::get('testimony')]);

        }
        Redirect::to("user/edit_testimony/{$testimony->id}");
    }


    public function edit_testimony($testimony_id = null)
    {
        if (($testimony_id != null)) {
            $testimony = Testimonials::find($testimony_id);
            if (($testimony != null) && ($testimony->user_id == $this->auth()->id)) {

                $this->view('auth/edit_testimony', ['testimony' => $testimony]);
                return;
            } else {
                Session::putFlash('danger', 'Invalid Request');
                Redirect::back();
            }

        }

    }


    public function view_testimony()
    {
        $this->view('auth/view-testimony');
    }


    public function testimony()
    {
        $this->view('auth/testimony');
    }


    public function documents()
    {
        $show = false;
        $this->view('auth/documents', compact('show'));
    }


    public function news()
    {
        $this->view('auth/news');
    }

    public function language()
    {
        $this->view('auth/language');
    }


    public function profile()
    {
        $this->view('auth/profile');
    }


    public function earnings($from = null, $to = null)
    {
        $query = LevelIncomeReport::where('status', 'Credit')->where('owner_user_id', $this->auth()->id)->latest();
        if (($from != null) && ($to != null)) {
            $query = $query->whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to);
        }


        $earnings = $query->get();
        $earnings_total = $query->sum('amount_earned');
        $this->view('auth/earnings', [
            'earnings' => $earnings,
            'earnings_total' => $earnings_total,
        ]);
    }


    public function upload_payment_proof()
    {
        $order_id = $_POST['order_id'];
        $order = SubscriptionOrder::find($order_id);
        $order->upload_payment_proof($_FILES['payment_proof']);
        Session::putFlash('success', "#$order_id Proof Uploaded Successfully!");
        Redirect::back();

    }


    public function upload_ph_payment_proof()
    {
        $directory = 'uploads/images/payment_proofs';

        $handle = new Upload($_FILES['payment_proof']);
        $match = Match::find(Input::get('match_id'));

        //if it is image, generate thumbnail
        if (explode('/', $handle->file_src_mime)[0] == 'image') {

            $handle->Process($directory);
            $original_file = $directory . '/' . $handle->file_dst_name;

            (new Upload($match->payment_proof))->clean();
            $match->update(['payment_proof' => $original_file]);


            Session::putFlash('success', 'Proof Uploaded Successfully!');
            Redirect::back();

        }

    }


    public function contact_us()
    {
        $this->view('auth/contact-us');

    }


    public function support()
    {
        $auth = $this->auth();

        $sieve = $_REQUEST;
        $sieve = array_merge($sieve);

        $query = SupportTicket::where('user_id', $auth->id)->latest();
        // ->where('status', 1);  //in review
        $sieve = array_merge($sieve);
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $filter = new  SupportTicketFilter($sieve);

        $data = $query->Filter($filter)->count();

        $tickets = $query->Filter($filter)
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $this->view('auth/support', compact('tickets', 'sieve', 'data', 'per_page'));

    }


    public function view_ticket($ticket_id)
    {

        $support_ticket = SupportTicket::find($ticket_id);

        $this->view('auth/support-messages', [
            'support_ticket' => $support_ticket
        ]);


    }


    public function index()
    {
        $settings = SiteSettings::site_settings();
        $this->view('auth/dashboard', compact('settings'));
    }


    public function accounts()
    {
        $this->view('auth/accounts');
    }


    public function change_password()
    {
        $this->accounts();
    }


    public function dashboard()
    {

        $settings = SiteSettings::site_settings();
        $this->view('auth/dashboard', compact('settings'));
    }

    public function broadcast()
    {

        $auth = $this->auth();

        $sieve = $_REQUEST;
        $query = BroadCast::Published()->latest();
        // ->where('status', 1);  //in review
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
        $per_page = 50;
        $skip = (($page - 1) * $per_page);

        $data = $query->count();

        $news = $query
            ->offset($skip)
            ->take($per_page)
            ->get();  //filtered


        $this->view('auth/broadcast', compact('news', 'sieve', 'data', 'per_page'));

    }


}


?>