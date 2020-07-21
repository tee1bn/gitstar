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

class BinaryTracker extends Eloquent 
{
	use Filterable;
	
	protected $fillable = [
					'user_id',	
					'left_leg',
					'right_leg',
					'points',
					'start_date',
					'end_date',
					'identifier'
				];
	
	protected $table = 'binary_tracker';


	

	public function user()
	{
		return $this->belongsTo('User', 'user_id');

	}
	





}
?>
