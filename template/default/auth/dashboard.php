<?php
$page_title = "Dashboard";
include 'includes/header.php';

use v2\Models\Wallet;
use v2\Models\Withdrawal;
use v2\Models\InvestmentPackage;


$user = $auth;


$pack = InvestmentPackage::for($user->id)->latest()->first();
if ($pack != null) {
  $display_growth = $pack->maturity * 0.01 * $pack->ExtraDetailArray['annual_roi'] ;
}else{
  $display_growth = 0;
}


$balances = Withdrawal::payoutBalanceFor($user->id);

$today = date("Y-m-d");

$week = MIS::date_range($today, 'week', true);

$month = MIS::date_range($today, 'month', true);



$daterange = SiteSettings::binary_daterange();

$already_paid = v2\Models\Commission::where('user_id', $user->id)->Completed()->Paid()->sum('binary_points');


$left_volume = ($user->total_volumes(0, 'binary', $daterange)) - $already_paid;
$right_volume = ($user->total_volumes(1, 'binary' , $daterange)) - $already_paid;



$monthly_left_volume = ($user->total_volumes(0, 'binary', $month));
$monthly_right_volume = ($user->total_volumes(1, 'binary' , $month));

$total_monthly_volume = $monthly_left_volume + $monthly_right_volume;



//for the rank
$total_left_volume = ($user->total_volumes(0, 'binary'));
$total_right_volume = ($user->total_volumes(1, 'binary'));
$total_volumes = $total_left_volume + $total_right_volume;



$weaker_leg_volumes = min($total_left_volume, $total_right_volume);



$TheRank = $user->TheRank;


$action = str_replace('_', ' ',  $TheRank['next']['rank_qualifications']['rating']['activity']['action']);

$qualifiers_left =  $user->total_member_qualifiers_by_path(0, 'binary');

$qualifiers_right =  $user->total_member_qualifiers_by_path(1, 'binary');



;?>

<style>
  .card{
    border-radius: 10px;
  }
  .small-padding{

    padding-top: 2px !important;
    padding-bottom: 2px !important;
    background: #073f2d;  

  }


</style>


<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-6 mb-2">
        <?php include 'includes/breadcrumb.php';?>

        <h3 class="content-header-title mb-0">Dashboard </h3>
      </div>

      <div class="content-header-right col-6">
        <div class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
          <a class="btn custom-warning" href="Javascript:void(0);">
            <span class="badge custom-green">
              <?=$user->subscription->payment_plan->name;?>
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <br>
      <div class="row match-height">   


        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary"> <?=$currency;?> <?=MIS::money_format($balances['deposit_balance']);?></h3>
                    <span>DEPOSIT</span>
                  </div>
                  <div class="media-right media-middle">
                    <img class="nav-icon" src="<?=$icon;?>/10.png">
                    <!-- <i class="icon-wallet secondary font-large-2 float-right"></i> -->
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary"><?=$currency;?> <?=MIS::money_format($balances['total_earnings']);?></h3>
                    <span>EARNINGS</span>
                  </div>
                  <div class="media-right media-middle">
                    <img class="nav-icon" src="<?=$icon;?>/11.png">
                    <!-- <i class="icon-social-dropbox secondary font-large-2 float-right"></i> -->
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary"><?=$currency;?> <?=MIS::money_format($balances['commission_balance']);?></h3>
                    <span>COMMISSION</span>
                  </div>
                  <div class="media-right media-middle">
                    <img class="nav-icon" src="<?=$icon;?>/8.png">
                    <!-- <i class="icon-layers secondary font-large-2 float-right"></i> -->
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary"><?=$currency;?> <?=$balances['held_wallet'];?> => <?=tch;?><?=$balances['held_wallet_in_trucash'];?> </h3>
                    <span>COLD WALLET</span>
                    <a href="#" class="">
                      <p class="text-bold-400 mb-0 text-white">
                        Price: <?=tch;?>/USD <?=$balances['trucash_exchange'];?><br>
                        <!-- <?=$currency;?><?=$balances['held_wallet'];?> => <?=tch;?><?=$balances['held_wallet_in_trucash'];?>  -->
                      </p>
                    </a>

                  </div>
                  <div class="media-right media-middle">
                    <img src="<?=$asset;?>/images/logo/small-taurus.png" alt="element 01"  style="height: 50px;width: 50px;" class="img-fluid">
                    <!-- <i class="icon-shield secondary font-large-2 float-right"></i> -->
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary"><?=$currency;?> <?=MIS::money_format($balances['hot_wallet']);?></h3>
                    <span>HOT WALLET</span>

                    <small>Sellable Coins:  <?=$currency;?> <?=MIS::money_format($balances['available_hot_wallet']);?> </small>

                    <?php if ($balances['available_hot_wallet'] > 0) :?>
                      <button class="btn  btn-sm" onclick="$confirm_dialog = new ConfirmationDialog('<?=domain;?>/user/sell_hotwallet_coins',
                      'Do you want to sell  <?=$currency;?><?=MIS::money_format($balances['available_hot_wallet']);?> ? ');">Sell</button>
                    <?php endif;?>
                  </div>
                  <div class="media-right media-middle">
                    <img src="<?=$asset;?>/images/logo/small-gold.png" alt="element 01"  style="height: 50px;width: 50px;" class="img-fluid">
                    <!-- <i class="icon-social-dropbox secondary font-large-2 float-right"></i> -->
                  </div>                        
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <div class="media">
                  <div class="media-body text-left w-100">
                    <h3 class="secondary">
                      <?php $sponsor = $user->referred_members_uplines(1) ;
                          echo ($sponsor[1]['username']) ?? 'Nil';
                      ;?></h3>
                      <span>SPONSOR</span>
                    </div>
                    <div class="media-right media-middle">
                      <i class="icon-user secondary font-large-2 float-right"></i>
                    </div>                        
                  </div>
                </div>
              </div>
            </div>
          </div>




        </div>


        <div class="row match-height">   

          <div class="col-md-6">
            <?php if ($pack != null) :?>

              <div class="card text-white text-center" style="" >
                <div class="card-content">
                  <div class="card-body">

                    <img src="<?=$asset;?>/images/logo/packs/<?=$pack->ExtraDetailArray['investment']['pack_id'];?>.png"
                    alt=" <?=$pack->ExtraDetailArray['investment']['name'];?>" width="190" class="float-left img-fluid">
                    <br>
                    <h4 class="card-title mt-1">YOUR FINANCE PACK <br>
                     <span class="badge badge-dark"> <?=$pack->ExtraDetailArray['investment']['name'];?> </span> - 
                     <?=$currency;?><?=$pack->ExtraDetailArray['capital'];?>
                   </h4>
                   <div class="progress progress-sm mt-1 mb-0">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?=$pack->maturity;?>%"><?=$display_growth;?>%</div>
                    
                    
                    <!--  <div class="progress-bar bg-success" role="progressbar" style="width: <?=$pack->maturity;?>%" 
                      aria-valuenow="<?=$pack->maturity;?>" aria-valuemin="0" aria-valuemax="100"></div> -->
                    </div>
                    <p class="card-text">Your Pack Expires when it reaches <?=$pack->ExtraDetailArray['annual_roi'];?>% return.</p>
                    <a href="<?=domain;?>/user/purchase-investment" class="btn custom-warning btn-whiteen-3">Upgrade Your Package</a>
                  </div>
                </div>
              </div>
              <?php else :?>

                <div class="card text-white text-center" >
                  <div class="card-content">
                    <div class="card-body">
                      <img src="<?=$asset;?>/images/logo/small-gold.png" style="padding: 10px;" alt="element 01" width="190" class="float-left img-fluid">
                      <h4 class="card-title mt-1">YOUR FINANCE PACK <br>

                      </h4>
                      <p class="card-text">Your latest will show here when you make a purchase .</p>
                      <a href="<?=domain;?>/user/purchase-investment" class="btn custom-warning btn-whiteen-3">Buy a Package</a>
                    </div>
                  </div>
                </div>


              <?php endif ;?>




            </div>

            <div class="col-md-6">


              <div class="card  text-center col-12">
                <div class="card-content">
                  <div class="card-body">
                    <div class="row">

                      <div class="col-md-12 mb-2">           
                          <center class="card-body custom-warning" style="
                          border-radius: 5px !important;
                          padding-top: 5px;
                          padding-bottom: 5px; ">
                          <div class="media " >
                            <div class="media-body w-100">
                              &nbsp;
                              <span>Referral Link</span>
                            </div>
                          </div>
                          <div onclick="copy_text('<?=$user->referral_link();?>')"
                           class="col-md-5 progress progress-sm mt-1 mb-0 " style="color: black ;display: inline; height: 17px;margin: 3px !important;"><?=$user->referral_link();?>
                          <!-- <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> -->
                        </div><button onclick="copy_text('<?=$user->referral_link();?>')" class="btn btn-sm custom-warning float-eft">Copy</button>
                      </center>
                        </div>
                      <div class="col-md-6" style="border-right: 1px solid #d6ae56;">           
                        
                          <br>
                        <div style="">

                        <h6 style="color: #d6ae56;">Current rank</h6>
                        <h6 class="card-title" style="margin-bottom: 0px;text-shadow: 2px 2px black;font-weight: 700;">
                          <?=$TheRank['name'];?>
                        </h6>

                        </div>                  


                      </div>
                      <div class="col-md-6"> 
                          

                        <!-- <br class="custom-warning">
                        <small>Current rank</small>
                        <h6 class="card-title" style="margin-bottom: 0px;text-shadow: 2px 2px black;font-weight: 700;">
                          <?=$TheRank['name'];?>
                        </h6>
                        <br class="custom-warning"> -->
                        <ul class="list-group list-group-flush">
                          <li class="small-padding list-group-item"> Next: <span class="badge custom-warning"><?=$TheRank['next']['name'];?></span></li>

                          <?php if($action != ''):?>
                            <li class="small-padding list-group-item" style="text-transform: capitalize;">Action: <?=$action;?></li>
                          <?php endif;?>

                          <?php if($TheRank['next']['rank_qualifications']['points_volume']['points'] != ''):?>
                            <li  class="small-padding list-group-item">Points Volume: <?=$weaker_leg_volumes;?>/<?=$TheRank['next']['rank_qualifications']['points_volume']['points'];?></li>
                          <?php endif;?>


                     



                          <?php


                          //inteam
                          $in_team_text = "";
                          foreach ($TheRank['next']['rank_qualifications']['rating']['in_team'] as $key => $team_requirement) {
                            if ($team_requirement['count'] =='') {continue;}
                            $in_team_rank =  $TheRank['all_ranks'][$team_requirement['member_rank']]['name'];
                            $in_team_text .= "<br>$team_requirement[count] $in_team_rank";
                          }

                          //binary gain
                          $binary_gains_text = $TheRank['next']['rank_qualifications']['binary_gains'];



                          $direct_lines = $TheRank['next']['rank_qualifications']['rating']['direct_line'];

                            //direct_line
                          $direct_line_text = '';
                          foreach ($direct_lines as $key => $direct_line){

                            $direct_line_text .= "$direct_line[count] $direct_line[position] ";
                          }
                          

                          if ( strlen(trim($direct_line_text)) != 0):?>

                            <li  class="small-padding list-group-item">Direct Line: 

                              <?=$direct_line_text;?>

                            </li>
                          <?php endif;?>

                          <?php if ($in_team_text != ''):?>
                            <li  class="small-padding list-group-item">In Team: 
                              <?=$in_team_text;?>
                            </li>
                          <?php endif;?>

                          <?php if ($binary_gains_text != ''):?>
                            <li  class="small-padding list-group-item">Binary Gain: 
                              <?=$binary_gains_text;?>
                            </li>
                          <?php endif;?>

                        </ul>
                     
                  </div>


                </div>

              </div>
            </div>
          </div>


        </div>

      </div>

      <div class="row">


        <div class="col-md-6">

          <div class="col-md-12">
            <h4>FINANCIAL STATS</h4>
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 media-middle">
                    <h1 class="secondary"><?=$currency;?><?=MIS::money_format($balances['completed_withdrawal']);?></h1>
                  </div>
                  <div class="media-body p-2">
                    <h4>Completed Withdrawals</h4>
                  </div>
                  <div class="media-right p-2 media-middle">
                    <img class="nav-icon" src="<?=$icon;?>/completed-withdrawal.png">
                    <!-- <i class="icon-wallet font-large-2 white"></i> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 media-middle">
                    <h1 class="secondary"><?=$currency;?><?=MIS::money_format($balances['rank_bonus']);?></h1>
                  </div>
                  <div class="media-body p-2">
                    <h4>Career/Rank Bonus</h4>
                  </div>
                  <div class="media-right p-2 media-middle">
                    <img class="nav-icon" src="<?=$icon;?>/career.png">
                    <!-- <i class="icon-wallet font-large-2 white"></i> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 media-middle">
                    <h1 class="secondary"><?=$currency;?><?=MIS::money_format($balances['available_payout_balance']);?></h1>
                  </div>
                  <div class="media-body p-2">
                    <h4>PAYOUT AVAILABLE</h4>
                  </div>
                  <div class="media-right p-2 media-middle">
                    <i class="icon-wallet font-large-2 white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>

        <div class="col-md-6">
          <h4>CAREER INFORMATION</h4>
          <div class="match-height">
            <div class="card" style="padding: 2px;">
              <div class="card-content">
              <!--   <div class="card-body">
                    <h4 class="card-title">Binary Information</h4>
                </div>
              -->
              <div class="row">
                <div class="col-6">

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item use-bg">
                      Total Direct Referrals
                      <span class="badge  custom-warning">
                        <?php 
                          $downlines = $user->referred_members_downlines(1,'placement');
                          $direct_lines = $downlines[1] ?? [];
                          echo count($direct_lines);
                          ;?>
                      </span> 
                    </li>

                  </ul>

                </div>
                <div class="col-6">

                  <ul class="list-group list-group-flush">
                    <li class="list-group-item use-bg">
                      Binary Volume
                      <span class="badge  custom-warning" title="Total Monthly Volume"> <!-- total amount this person has been paid this month -->
                        <?=$currency;?><?=MIS::money_format($total_monthly_volume);?>
                      </span> 
                    </li>

                  </ul>

                </div>
                <div class="col-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item use-bg">
                      <span class="badge  custom-warning float-right" title="Weekly Left volume "><?=($left_volume);?></span> Volume Left
                    </li>
                    <li class="list-group-item use-bg">
                      <span class="badge  custom-warning float-right" title="Life Left volume "><?=($total_left_volume);?></span>Life Volume Left
                    </li>
                    <li class="list-group-item use-bg">
                     Member Left Qualifier<br>
                     <?=$qualifiers_left['qualifiers_text'];?>
                   </li>
                 </ul>

               </div>
               <div class="col-6">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item use-bg">
                    <span class="badge  custom-warning float-right" title="Weekly Right volume"><?=($right_volume);?></span> Volume Right
                  </li>

                  <li class="list-group-item use-bg">
                    <span class="badge  custom-warning float-right" title="Life Right volume"><?=($total_right_volume);?></span>Life Volume Right
                  </li>
                  <li class="list-group-item use-bg">
                    Member Right Qualifier<br>
                    <?=$qualifiers_right['qualifiers_text'];?>                                    
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
</div>
</div>  



</div>
</div>
</div>
<!-- END: Content-->

<?php include 'includes/footer.php';?>

