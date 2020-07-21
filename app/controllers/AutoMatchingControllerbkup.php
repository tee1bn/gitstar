<?php
// error_reporting(E_ERROR | E_PARSE);

use v2\Models\Commission;
use v2\Models\InvestmentPackage;
use v2\Models\HotWallet;
use v2\Models\HeldCoin;
use v2\Models\PayoutWallet;
use v2\Models\BinaryTracker;
use Illuminate\Database\Capsule\Manager as DB;


/**
 */
class AutoMatchingController extends controller
{


    public function __construct()
    {

        $this->settings = SiteSettings::all()->keyBy('criteria');

        // echo "<pre>";


        // print_r($this->settings->toArray());
        $this->reject_days = [27, 28, 29, 30, 31];


    }


    public function cal_on_investment($value='')
    {
        $query = HotWallet::Category('investment')->Completed()->Credit()->latest();

        foreach ($query->get() as $key => $pack) {
            $pack->give_referral_commission();
        }
    }




    public function auth_cron()
    {
        $auth = $this->auth();
        if (!$auth) {
            return;
        }

        $user_id = $auth->id;
        $this->cron($user_id);
    }


    public function cron($user_id)
    {

        $this->set_roi($user_id);
        $this->rank_user($user_id);
        $this->membership_renewal($user_id);
        $this->split_hotwallet($user_id);
        $this->split_commissions($user_id);

    }


    public function simlulated_cron($date = null)
    {
        $users = User::all();

        foreach ($users as $key => $user) {

            $user_id = $user->id;
            $this->set_roi($user_id, $date);
            // $this->split_hotwallet($user_id, $date);
            $this->split_commissions($user_id, $date);
            $this->membership_renewal($user_id);
            $this->rank_user($user_id);
        }

    }

    //this updates roi on investments throiut the week
    public function set_roi_for_all_investment_package()
    {
        $today = date("Y-m-d");
        $date_range = MIS::date_range($today, 'week');

        $per_page = 50;
        $investments_to_update_this_week =  HotWallet::Credit()
                                                    ->where('cost','!=', null)
                                                    ->Completed()
                                                    ->Category('investment')
                                                    ->UnCompleteInvestment()
                                                    ->whereDate('updated_at', '<', $date_range['start_date'])
                                                     ->take($per_page)
                                                    ;

            foreach ($investments_to_update_this_week->get() as  $investment) {

                InvestmentPackage::setRoi($investment->id);
            }


    }


    public function set_roi($user_id = null, $date = null)
    {
        if ($user_id == 0) {
            $user_id = null;
        }

        if ($date == null) {
            $date = date("Y-m-d H:i:s");
        }


        $month = MIS::date_range($date, 'month', true);

        $investments = InvestmentPackage::for($user_id, null, 0 ,1)->get();


        foreach ($investments as $key => $investment) {
            InvestmentPackage::setRoi($investment->id, $date);
        }

    }


    public function split_all_hotwallet()
    {

    }


    public function split_hotwallet($user_id = null, $date = null)
    {


        //ensure this is done monthly
        $day = date("d");

        if (!in_array($day, $this->reject_days)) {
            return;
        }


        HotWallet::split_investment($user_id);


        return;
    }


    public function split_commissions($user_id = null, $date = null)
    {

        $daterange = SiteSettings::commission_daterange();

        Commission::SplitCommission($user_id, $daterange);
    }


    public function membership_renewal($user_id = null)
    {
        User::find($user_id)->renew_subscription();
    }


    public function rank_user($user_id)
    {   
        $ranking = new Rank;
        $ranking->setUser(User::find($user_id))->determineRank()->setUserRank();
    }


    public function index()
    {
        // print_r($this->settings->toArray());

    }




    ///group cron


    // $this->set_roi($user_id, $date);
    // $this->split_hotwallet($user_id, $date);
    // $this->split_commissions($user_id, $date);
    // $this->membership_renewal($user_id);
    // $this->rank_user($user_id);



    function g_split_commissions()
    {

        //ensure this is done every friday

        /*  $day = date("N");
        if (!in_array($day, $this->reject_days_commission)) {
            return;
        }
        */


        //get identifuier for first split
        $identifier = <<<EOL
         {"reason":"split_commission","iteration":"1"
EOL;
    
        $identifier = trim($identifier);


        $daterange = SiteSettings::commission_daterange();
        echo "<pre>";
        print_r($daterange);

        $per_page = 50;

        //get all users with commission to be splitted
        $investments = Commission::select('wallet_for_commissions.user_id', DB::raw('sum(wallet_for_commissions.amount) as sum_amount'))
        ->where('wallet_for_commissions.type', 'credit')
        // ->where('wallet_for_commissions.earning_category', 'commission')
        ->where('wallet_for_commissions.amount', '>' , 0)
        ->groupBy('wallet_for_commissions.user_id');



        // get already_splitted commission
        $already_splitted = HeldCoin::Credit()
                                    ->Category(['commission'])
                                    ->whereDate('paid_at','>=',  $daterange['start_date'])->whereDate('paid_at', '<=',$daterange['end_date'])
                                    ->where('extra_detail', 'like', "%$identifier%")
                                    ;
                                    
        //get users left                                    
        $people_to_split_commission = $investments
                     ->leftJoinSub($already_splitted, 'already_splitted', function ($join) {
                    $join->on('wallet_for_commissions.user_id', '=', 'already_splitted.user_id');
                })->where('already_splitted.user_id','=', NULL)

                     ->take($per_page)
                     ; 



                     print_r($people_to_split_commission->get()->toArray());
              
                     //split
                foreach ($people_to_split_commission->get() as $key => $user) {
                    Commission::SplitCommission($user['user_id'], $daterange);
                }


    }


    



    function g_split_investment_first_time()
    {

        return;

        //ensure this is done monthly
        $day = date("d");
        if (!in_array($day, $this->reject_days)) {
            return;
        }



        //get identifuier for first split
        $identifier = <<<EOL
         {"reason":"split_investment","iteration":"1"
EOL;
    
        $identifier = trim($identifier);
        
        $today = date("Y-m-d");
        $daterange = MIS::date_range($today, 'month', true);
      

        $per_page = 50;

        //get all users with roi to be splitted
        $investments = HotWallet::select('wallet_for_hot_wallet.user_id', DB::raw('sum(wallet_for_hot_wallet.amount) as sum_amount'))
        ->where('wallet_for_hot_wallet.type', 'credit')
        ->where('wallet_for_hot_wallet.earning_category', 'investment')
        ->where('wallet_for_hot_wallet.admin_id', null)  // removes simulate package from gettting splited
        ->where('wallet_for_hot_wallet.amount', '>' , 0)
        ->groupBy('wallet_for_hot_wallet.user_id');


        // get already_splitted roi
        $already_splitted = HeldCoin::Credit()
                                    ->Category(['hot_wallet'])
                                    ->whereDate('paid_at','>=',  $daterange['start_date'])->whereDate('paid_at', '<=',$daterange['end_date'])
                                    ->where('extra_detail', 'like', "%$identifier%")
                                    ;
                                    
        //get users left                                    
        $people_to_split_investment = $investments
                     ->leftJoinSub($already_splitted, 'already_splitted', function ($join) {
                    $join->on('wallet_for_hot_wallet.user_id', '=', 'already_splitted.user_id');
                })->where('already_splitted.user_id','=', NULL)

                     ->take($per_page)
                     ; 


                     //split
                foreach ($people_to_split_investment->get() as $key => $user) {
                    HotWallet::split_investment($user['user_id']);
                }


    }

    function g_split_investment_second_time()
    {
        return;

        //ensure this is done monthly
        $day = date("d"); 
        if (!in_array($day, $this->reject_days)) {
            return;
        }


                //get identifuier for first split
                $identifier = <<<EOL
                 {"reason":"split_investment","iteration":"2"
EOL;
            
                $identifier = trim($identifier);
                
                $today = date("Y-m-d");
                
                $daterange = MIS::date_range($today, 'month', true);
              

                $per_page = 50;

                //get all users with roi to be splitted
                $investments = HotWallet::select('wallet_for_hot_wallet.user_id', DB::raw('sum(wallet_for_hot_wallet.amount) as sum_amount'))
                ->where('wallet_for_hot_wallet.type', 'credit')
                ->where('wallet_for_hot_wallet.earning_category', 'investment')
                ->where('wallet_for_hot_wallet.admin_id', null)  // removes simulate package from gettting splited
                ->where('wallet_for_hot_wallet.amount', '>' , 0)
                ->groupBy('wallet_for_hot_wallet.user_id');


                // get already_splitted roi
                $already_splitted = HeldCoin::Credit()
                                            ->Category(['hot_wallet'])
                                            ->whereDate('paid_at','>=',  $daterange['start_date'])->whereDate('paid_at', '<=',$daterange['end_date'])
                                            ->where('extra_detail', 'like', "%$identifier%")
                                            ;
                                            
                //get users left                                    
                $people_to_split_investment = $investments
                             ->leftJoinSub($already_splitted, 'already_splitted', function ($join) {
                            $join->on('wallet_for_hot_wallet.user_id', '=', 'already_splitted.user_id');
                        })->where('already_splitted.user_id','=', NULL)

                             ->take($per_page)
                             ; 



                             echo "<pre>";
                             print_r($people_to_split_investment->get()->toArray());

                             //split
                        foreach ($people_to_split_investment->get() as $key => $user) {
                            HotWallet::split_investment($user['user_id']);
                        }


            

    }



    public function get_binary_bonus($value='')
    {
        # code...
    }


    public function g_cut_binary_bonus()
    {

        echo "<pre>";
        $binary_bonus_settings = $this->settings['binary_bonus']->settingsArray;

        $daterange = SiteSettings::binary_daterange();

        // print_r($daterange);
        $start_date = $daterange['start_date'];
        $end_date = $daterange['end_date'];



        $per_page = 50;

        //those with cut binary_bonus
        $cut_binary_bonuses = Commission::select('wallet_for_commissions.user_id', DB::raw('sum(wallet_for_commissions.amount) as sum_amount'))
        ->where('wallet_for_commissions.type', 'credit')
        ->where('wallet_for_commissions.earning_category', 'binary_bonus')
        ->where('wallet_for_commissions.amount', '>' , 0)
        ->whereDate('paid_at','>=',  $start_date)->whereDate('paid_at', '<=',$end_date)
        ->groupBy('wallet_for_commissions.user_id');


        $today = date("Y-m-d");
        ///since only active subscription are stored in this table
        $active_subscriptions = SubscriptionOrder::Paid()->whereDate('expires_at','>' , $today);

        $users = User::query()->select('*','users.id as user_id');
        
        $active_members = $users
                ->joinSub($active_subscriptions, 'active_subscriptions', function ($join) {
                    $join->on('users.id', '=', 'active_subscriptions.user_id');
                });
                // ->select('*','users.id as user_id', 'active_subscriptions.id as sub_id'); 
      

        $users_expecting_binary_bonus = $active_members 
                                ->leftJoinSub($cut_binary_bonuses, 'cut_binary_bonuses', function ($join) {
                                    $join->on('users.id', '=', 'cut_binary_bonuses.user_id');
                        })->where('cut_binary_bonuses.user_id','=', NULL)
                                ->take($per_page);



        $pay_date = date("Y-m-d 20:00:00" , strtotime("$end_date +1 day"));

      

        foreach ($users_expecting_binary_bonus->get() as $key => $user) {
            $user->id = $user->user_id;

            $packs = InvestmentPackage::for($user->user_id, null,  0, 1)->latest()->get();
            if ($packs->isEmpty()) {continue;}

            $pack_detail = [];
            foreach ($packs as $key => $pack) {
                $pack_detail[] = $pack->ExtraDetailArray['investment']['pack_id'];
            }


            $highest_pack = max($pack_detail);

            $percent_picker = "pack_$highest_pack";

            $percent = $binary_bonus_settings['binary_bonus'][1][$percent_picker];



            $total_volume_left = $user->total_volumes(0 , 'binary', $daterange);
            $total_volume_right = $user->total_volumes(1 , 'binary', $daterange);

            $already_paid = Commission::where('user_id', $user->id)->Completed()->Paid()->sum('binary_points');

            $weekly_left_point =  $total_volume_left - $already_paid;
            $weekly_right_point =  $total_volume_right - $already_paid;



            $leg_array = [
                "$weekly_left_point" => 0,
                "$weekly_right_point" => 1
            ];

                        


            $cut_binary_point =  min($weekly_right_point , $weekly_left_point);

            $leg = $leg_array[$cut_binary_point];

            //zero entitled binary bonus
            if ($cut_binary_point == 0) {continue;}


            $binary_bonus_earned = $percent * 0.01 * $cut_binary_point;


            //CHECK LIMIT OF BINARYGAIN 
            //already paid binary gain today
            $today  = date("Y-m-d");
            $paid_binary_gain_today = Commission::where('user_id', $user->user_id)->Completed()->Paid()->whereDate('created_at', $today)->sum('amount');

            $max_binary_per_day = $user->TheRank['rank_qualifications']['binary_gains'] ?? 10000000;

                $possible_new_value = $paid_binary_gain_today + $binary_bonus_earned;

                if ($possible_new_value > $max_binary_per_day) {


                $offset =  $possible_new_value - $max_binary_per_day;

                $binary_bonus_earned = $offset;

                }else{

                }


                if ($binary_bonus_earned <= 0) {continue;}
            
            $extra_detail = json_encode([
                'reason' => 'binary_bonus',
                'leg' => $leg,
                'points' => $cut_binary_point,
                'daterange' => $daterange
            ]);


            //update balance and credit user

            $identifier="BB#{$user->id}#R$start_date#$end_date";        
                        //do not pay bonus if no pack is running or if not active binary(instead accumulate)
            if ($packs->isEmpty()  ||  (! $user->is_qualified_distributor())) {

                continue;
            }

            DB::beginTransaction();


            try {
                    //credit Binary Bonus
                    $comment = "Binary Bonus, $percent% on $cut_binary_point points";
                    $binary_bonus_commission = Commission::createTransaction(
                        'credit',
                        $user['id'],
                        null,
                        $binary_bonus_earned,
                        'completed',
                        'binary_bonus',
                        $comment,
                        $identifier, 
                        null, 
                        null,
                        $extra_detail,
                        $pay_date
                    );

                    $binary_bonus_commission->update([
                        'binary_leg' => $leg,
                        'binary_points' => $cut_binary_point,

                    ]);

                    $left_update =  $weekly_left_point - $cut_binary_point;
                    $right_update =  $weekly_right_point - $cut_binary_point;
                


                    //matching bonus
                    $matching_bonus = $this->settings['matching_bonus']->settingsArray;
                    $uplines = collect($user->referred_members_uplines(3 ,'enrolment'));


                    print_r($matching_bonus);
                    foreach ($matching_bonus as $level => $bonus) {



                        if (! isset($uplines[$level])) {continue;}
                        $receiver = $uplines[$level];

                        //ensure receiver is qualified for compensational bonuses
                        if (! $receiver->can_received_compensation()) {continue;}



                        $packs = InvestmentPackage::for($receiver->id, null,  0, 1)->latest()->get();
                        if ($packs->isEmpty()) {continue;}


                        $pack_detail = [];
                        foreach ($packs as $key => $pack) {
                            $pack_detail[] = $pack->ExtraDetailArray['investment']['pack_id'];
                        }

                        if (count($pack_detail) == 0) {continue;}

                        $highest_pack = max($pack_detail);

                        if ($highest_pack < 3) {continue;}

                        $pack_id = "pack_$highest_pack";




                        if (! isset($bonus[$pack_id])) {continue;}




                          $percent = $bonus[$pack_id];
                        echo "$pack_id for $receiver->id  on $user->user_id level $level percent: $percent<br>";
                        if ($percent == 0) {continue;}


                        $matching_bonus_earned = $percent * 0.01 * $binary_bonus_earned;
                        $identifier="MB#O$binary_bonus_commission->id#B$user->id#L$level#R$receiver[id]";
                        $extra_detail = json_encode([
                            'reason' => 'matching_bonus',
                            'binary_bonus_id' => $binary_bonus_commission->id
                        ]);

                        $paid_at = date("Y-m-d H:i:s");

                        //credit Matching Bonus
                        $comment = "Level $level Matching Bonus, $percent on $binary_bonus_earned binary bonus";
                        $matching_bonus_commission =Commission::createTransaction(
                            'credit',
                            $receiver['id'],
                            $user['id'],
                            $matching_bonus_earned,
                            'completed',
                            'matching_bonus',
                            $comment,
                            $identifier, 
                            $binary_bonus_commission->id, 
                            null,
                            $extra_detail,
                            $pay_date
                        );

                        if ($matching_bonus_commission == false) {
                            throw new Exception("Could give matching_bonus_commission", 1);
                        }
                    }





                    DB::commit();
            } catch (Exception $e) {
                    DB::rollback();

                    print_r($e->getMessage());
                
            }



      /*              print_r($binary_bonus_settings);
            print_r($weekly_right_point);
            echo "\n";
            print_r($weekly_left_point);
            echo "\n";*/


        }



    }

}


?>