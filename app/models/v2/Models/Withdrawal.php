<?php
namespace v2\Models;

include_once 'app/controllers/home.php';
use v2\Models\Wallet;
use v2\Models\Commission;
use v2\Models\HotWallet;
use v2\Models\HeldCoin;
use v2\Models\PayoutWallet;
use  Filters\Traits\Filterable;

use SiteSettings;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Withdrawal extends Eloquent 
{
	use Filterable;
	
	protected $fillable = [
		'user_id',
		'amount',
		'fee',
		'withdrawal_method_id',
		'method_details',
		'detail',
		'admin_id',
		'completed_at',
		'status'
	];
	
	protected $table = 'users_withdrawals';


	public static $statuses = [
							'pending'=> 'pending',
							'completed'=> 'completed',
							 'declined'=> 'declined'
							];





	public static function payoutBalanceFor($user_id)
	{

		

		$rules_settings =  SiteSettings::find_criteria('rules_settings');
		$setting = $rules_settings->settingsArray;
		$withdrawal_fee = $setting['withdrawal_fee_percent'];
		$min_withdrawal = $setting['min_withdrawal_usd'];


		$commission_balance =  Commission::bookBalanceOnUser($user_id);
		$hot_wallet =  HotWallet::bookBalanceOnUser($user_id,'hot_wallet');
		$rank_bonus =  Commission::bookBalanceOnUser($user_id,'rank');
		$available_hot_wallet =  HotWallet::availableBalanceOnUser($user_id, 'hot_wallet'); //what user can sell to company
		$deposit_balance    =  Wallet::bookBalanceOnUser($user_id, 'deposit');

		
		

		$commission_credits = Commission::onUser($user_id)->Credit()->Cleared()->sum('amount') ;


		$hotwallet_credits = HotWallet::onUser($user_id)->Category('investment')->Credit()->Cleared()->where('cost','!=', null) ->sum('amount');


		// $hotwallet_credits = HotWallet::availableBalanceOnUser($user_id,'investment');


		// $commission_credits = Commission::availableBalanceOnUser($user_id);
		

		 
		$total_earnings = $hotwallet_credits  +  $commission_credits;

		$trucash_exchange = $setting['one_trucash_is_x_usd'];

		$held_wallet = HeldCoin::availableBalanceOnUser($user_id);
		$held_wallet_in_trucash = round(($held_wallet / $trucash_exchange), 2);





		$completed_withdrawal = self::where('user_id' , $user_id)->Completed()->sum('amount');
		$pending_withdrawal = self::where('user_id' , $user_id)->Pending()->sum('amount');


		$total_amount_withdrawn = $completed_withdrawal + $pending_withdrawal ;

		$payout_wallet    =  PayoutWallet::availableBalanceOnUser($user_id);

		$payout_balance = $payout_wallet  - $total_amount_withdrawn;

		$payout_book_balance = $payout_wallet  - $completed_withdrawal;

		$available_payout_balance = ($payout_balance >= $min_withdrawal)? $payout_balance: $payout_balance ;



		$state = compact(
			'held_wallet',
			'held_wallet_in_trucash',
			'hot_wallet',
			'available_hot_wallet',
			'withdrawal_fee',
			'min_withdrawal',
			'commission_balance',
			'deposit_balance',
			'total_earnings',
			'trucash_exchange',
			'payout_balance',
			'payout_book_balance',
			'available_payout_balance',
			'rank_bonus',
			'completed_withdrawal'
		);

		return $state;


	}
	




	public function getDetailArrayAttribute()
	{
		if ($this->detail == null) {
			return [];
		}

		return json_decode($this->detail, true);
	}



	

	public function admin()
	{
		return $this->belongsTo('Admin', 'admin_id');

	}
	




	public function getAmountToPayAttribute()
	{
		$payable = $this->amount - $this->fee;
		return $payable;
	}

	public function is_pending()
	{
		return $this->status == 'pending';
	}

	public function is_complete()
	{
		return $this->status == 'completed';
	}
	public function scopeCompleted($query)
	{
		return $query->where('status','completed');
	}



	public function mark_completed($verification=null)
	{
		$controller = new home;

		$withdrawal->update([
			'status'=> 'completed',
			'admin_id'=> $controller->admin()->id,
			'detail' =>  $verification
		]);


		return true;
	}


	public function scopePending($query)
	{
		return $query->where('status','pending');
	}



	public function scopeDeclined($query)
	{
		return $query->where('status','declined');
	}


	public function getDisplayStatusAttribute()
	{

		switch ($this->status) {
			case 'completed':
			$return = "<span class='badge badge-success'>completed</span>";

			break;
			case 'pending':
			$return = "<span class='badge badge-warning'>pending</span>";

			break;
			case 'declined':
			$return = "<span class='badge badge-danger'>declined</span>";

			break;
			
			default:
				# code...
			break;
		}

		return $return;
	}



	public function getwithdrawalDetailsAttribute()
	{
		$method =  UserWithdrawalMethod::$method_options[$this->withdrawal_method->method];
		$detail = $method['display'];
		$line = '';
		$method_details = json_decode($this->MethodDetailsArray['details'], true);

		foreach ($detail as $key => $label) {
			$value = $method_details[$key];
			$line .= "<li>
						$label:
						$value
					</li>";
		}

		return $line;
	}


	public function getMethodDetailsArrayAttribute()
	{
		if ($this->method_details == null) {
			return [];
		}

		return json_decode($this->method_details, true);
	}



	
	public function user()
	{
		return $this->belongsTo('User', 'user_id');

	}


	
	public function withdrawal_method()
	{
		return $this->belongsTo('v2\Models\UserWithdrawalMethod', 'withdrawal_method_id');

	}



}
?>
