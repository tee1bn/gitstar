<?php

namespace v2\Models;

use  v2\Models\Wallet;
use  v2\Models\HotWallet;
use Illuminate\Database\Eloquent\Model as Eloquent;

class InvestmentPackage extends Eloquent 
{
	
	protected $fillable = [
				'name',	'details','pack_id', 'features','availablity','category'
				];
	
	protected $table = 'investment_ranges';

	private $amount ;

	public static $categories = [
		1=> [
			'name'=>"REGULAR",
		],
		2=>	[
			'name'=>"CO-FOUNDER PACKS",
		],
	];


	public static function is_roi_complete_on($investment_id)
	{

		$investment =  HotWallet::find($investment_id);
		$detail = $investment->ExtraDetailArray;
		
		//check if this is complete to avoid duplicate rois
		$is_complete = self::for($investment->user_id, $detail['investment']['pack_id'], 1)->first();
		if ($is_complete != null) {
			return true;
		}

		return false;
	}



	public static function setRoi($investment_id, $request_date = null, $update=true)
	{
		$today =date("Y-m-d H:i:s");

		if ($request_date==null) {
			$request_date = $today;
		}


		$investment =  HotWallet::find($investment_id);
		$detail = $investment->ExtraDetailArray;

		
		//check if this is complete to avoid duplicate rois
		if (self::is_roi_complete_on($investment_id)) {
			return false;
		}

		$response = self::getRoi($investment_id, $request_date);

		$roi = $response['roi'];
		$last_pay_date = $response['last_pay_date'];

		//update last paydate
		$detail['last_pay_date'] = $last_pay_date;

		$total_return = array_sum($detail['spread']);


		if ($update==false) {
			return  $roi;
		}


		//set as complete if so
		if ($total_return == $roi) {

			$detail['is_complete'] = 1;
			$investment->update([
								 'amount'=> $roi,
								 // 'paid_at'=> $request_date,
								 'extra_detail'=> json_encode($detail),
								]);

		}else{
			$investment->update([
								 'amount'=> $roi,
								 'extra_detail'=> json_encode($detail),
								]);
		}

		return $investment;
	}


	public static function getRoi($investment_id, $request_date = null)
	{	

		if ($request_date==null) {
			$request_date = date("Y-m-d");
		}

		$investment =  HotWallet::find($investment_id);

		$detail = $investment->ExtraDetailArray;

		$next_roi = [];
		foreach ($detail['spread'] as $date => $value) {
			if (strtotime($request_date) >= strtotime($date) ) {
				$next_roi[$date] = $value;
			}
		}


		$spread_dates = array_keys($next_roi);
		$last_pay_date = end($spread_dates);

		$roi = array_sum($next_roi);

		$response = compact('last_pay_date','roi');

		return $response; 

		return $roi;

	}


	public static function user_has_investment_running($user_id, $investment_id)
	{
		$investments = self::running_for($user_id);

		$investments = collect($investments)->pluck('investment')->pluck('id')->toArray();

		return in_array($investment_id, $investments);
	}


	public static function user_has_more_than_x_running($user_id, $investment_id, $max_number=3)
	{
		$investments = self::running_for($user_id);

		$investments = collect($investments)->pluck('investment')->pluck('id');

		$filtered = $investments->filter(function ($value, $key) use ($investment_id) {
		    return $value == $investment_id;
		});


		return $filtered->count() >=  $max_number;
	}


	public static function running_for($user_id)
	{
		$running_investments =  InvestmentPackage::for($user_id, null, 0)->get();
		$detail = [];
		foreach ($running_investments as $key => $investment) {

				$detail[$investment->id] = $investment->ExtraDetailArray;
		}

		return $detail;
	}


	public static function for($user_id, $pack_id=null, $is_complete=null, $running= null)
	{

		if ($user_id==null) {

			$query = HotWallet::Category('investment')->Credit()->where('cost', '!=', null);

		}else{

			$query = HotWallet::for($user_id)->Category('investment')->Credit()->where('cost', '!=', null);

		}
		

		if ($pack_id != null) {


			$investment = self::where('pack_id', $pack_id)->first();

		$identfier = <<<EOL
		 {"investment":{"id":$investment->id,"pack_id":$investment->pack_id
EOL;		

		$identfier = trim($identfier);
		
			$query->where('extra_detail', 'like', "%$identfier%");
		}


		if ($is_complete == null) {


		}elseif ($is_complete == 0) {

			$query->UnCompleteInvestment();

		}elseif ($is_complete == 1) {

			$query->CompleteInvestment();

		}


		if ($running == null) {


		}elseif ($running == 0) {

			$query->NotRunning();

		}elseif ($running == 1) {

			$query->Running();

		}





		return $query;

	}


	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	public function in_range($amount)
	{
		$setting = ($this->DetailsArray);
		$min_capital = $setting['min_capital'];
		$max_capital = $setting['max_capital'];

		if (($min_capital <= $amount) && ($amount <= $max_capital)) {

			return true;
		}else{

			return false;

		}
	}


	public function is_available()
	{
		return (bool) ($this->availablity =='on');
	}



	public function scopeAvailable($query)
	{
		return $query->where('availablity', 'on');
	}


	public function getReturn()
	{
		return $this->roi_percent * 0.01 * $this->price;
	}




	public function spread($interval, $cumulative= false, $value_date = null)
	{

		switch ($interval) {
			case 'annual':
			$return =  ($this->DetailsArray['annual_roi_percent'] * 0.01 * $this->amount);
				break;
			

			case 'weekly':

				$interval_of_week = 9; // 9 days because sat and sun nothing happens
				$total_return = $this->getWorth('annual');
				$weekly_return = $this->getWorth('weekly');

				$today = $value_date ?? date("Y-m-d") ;

				$end_of_waiting = date("$today", strtotime("+$interval_of_week days"));

				$weekly = date("Y-m-d", strtotime("$end_of_waiting +$interval_of_week days"));


				$idle_week_days = [6,7];

				$week = date("N", strtotime($weekly));
				if(in_array($week, $idle_week_days)){
					$weekly = date("Y-m-d", strtotime("$weekly +1 days"));
				}

				$spreads = [];
				$spreads[$weekly] = 0;




				$weekly = date("Y-m-d", strtotime("$weekly +$interval_of_week days"));

				$week = date("N", strtotime($weekly));
				if(in_array($week, $idle_week_days)){
					$weekly = date("Y-m-d", strtotime("$weekly +1 days"));
				}



				do{

					$week = date("N", strtotime($weekly));
					if(in_array($week, $idle_week_days)){
						$weekly = date("Y-m-d", strtotime("$weekly +1 days"));
						continue;
					}


					$last_sum = array_sum($spreads);
					$possible_sum = $last_sum + $weekly_return;

					if ($possible_sum > $total_return) {
						$weekly_return = $total_return - $last_sum;
						$weekly_return = round($weekly_return, 2);
						$spreads[$weekly] =  $weekly_return;
						break;
					}

					$spreads[$weekly] =  round($weekly_return,2);
					$amount_in_spread = array_sum($spreads);


					$weekly = date("Y-m-d", strtotime("$weekly +$interval_of_week days"));

				}while($amount_in_spread < $total_return);


				$return = $spreads;

				break;
			
			default:
				# code...
				break;
		}


		foreach ($return as $date => $amount) {
			$cumulative_spread[] = $amount;
			$cumulative_spreads[$date] = round(array_sum($cumulative_spread),2);
		}

		if ($cumulative) {
			$return = $cumulative_spreads;
		}


		    $spread_dates = array_keys($return);
            $split_dates =[];
            $split_every_x_week = 4;
            foreach ($spread_dates as $key => $value) {
                if ($key == 0) {continue;}

                if (($key % $split_every_x_week) == 0) {
                    $split_dates[] = $value;
                }
            }

            $i_details['split_dates'] = $split_dates;



		$response = [
				'spread'=> $return,
				'split_dates'=> $split_dates,
		];

		return $response;
	}



	public function getWorth($interval)
	{

		switch ($interval) {
			case 'annual':
			$return =  ($this->DetailsArray['annual_roi_percent'] * 0.01 * $this->amount);
				break;
			
			case 'weekly':
			$return =  ($this->DetailsArray['weekly_roi_percent'] * 0.01 * $this->amount);
				break;
			
			default:
				# code...
				break;
		}
		return $return;
	}


	public function getDetailsArrayAttribute()
	{
	    if ($this->details == null) {
	        return [];
	    }

	    return json_decode($this->details, true);
	}







}