<?php
$page_title = "Referral Program";
include 'includes/header.php';?>

 <?php  include 'includes/breadcrumbs.php';?>

<!-- 
<section class="flat-recent-market style2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top-title center">
					<h2>Referral</h2>
					<p>Bitcoin is received, stored, and sent using software known as a 'Bitcoin Wallet'</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="iconbox style1 center">
					<div class="icon">
						<img src="<?=$this_folder;?>/images/icon/account.png" alt="">
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">MINNING MACHINE</a></h4>
						<p>In Aenean lacus purus, pretium sit met sapien. Nam enetum faucibus, morbi tempor, dictum et dapibus volutpat.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="iconbox style1 center">
					<div class="icon">
						<img src="<?=$this_folder;?>/images/icon/payment.png" alt="">
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">TRADING BOT</a></h4>
						<p>In Aenean lacus purus, pretium sit met sapien. Nam enetum faucibus, morbi tempor, dictum et dapibus volutpat.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="iconbox style1 center">
					<div class="icon">
						<img src="<?=$this_folder;?>/images/icon/orders.png" alt="">
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">SIGNALS</a></h4>
						<p>In Aenean lacus purus, pretium sit met sapien. Nam enetum faucibus, morbi tempor, dictum et dapibus volutpat.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 -->

<?php 

$settings = SiteSettings::all()->keyBy('criteria');
$direct_bonus_setting = $settings['direct_bonus']->settingsArray;
$direct_bonus = $direct_bonus_setting['direct_bonus'];

$binary_bonus_setting = $settings['binary_bonus']->settingsArray;
$binary_bonus = $binary_bonus_setting['binary_bonus'];

$packs = v2\Models\InvestmentPackage::available()->get()->keyBy('pack_id');

;?>

		


<section class="flat-recent-market">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrap-recent-text">
					<h2 class="title">DIRECT BONUS</h2>
					<div class="content-text">
						<p>
						You earn a commission of <?=$direct_bonus[1]['first_x_days_percent'];?>% for each investment range that your direct line acquires and 
						<?=$direct_bonus[2]['first_x_days_percent'];?>% for each package of services acquired by your second level. 
						<p>
							Note: On your direct line, <?=$direct_bonus[1]['first_x_days_percent'];?>% of direct bonus is valid only for 
							<?=$direct_bonus[1]['x_days'];?>days, from day <?=($direct_bonus[1]['x_days'] + 1);?>,
							  the company sets you <?=$direct_bonus[1]['after_x_days_percent'];?>% of your first level
						</p>


						<a href="<?=domain;?>/register" class="read-more" title="">GET STARTED</a>
					</div>
				</div>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="single-image center">
					<img src="<?=$this_folder;?>/images/page/laptop-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="flat-recent-market">
	<div class="container">
		<div class="row">

			<div class="col-md-6">

<!-- 				<div class="single-image center">
					<img src="<?=$this_folder;?>/images/page/laptop-1.png" alt="">
				</div>
 -->			

 			<table class="table ceter">
 				<thead class="center">
 					<th>Pack</th>
 					<th>Volume Commission</th>
 				</thead>
 				<tbody>
 					<?php for ($i=1; $i <= 7 ; $i++) :
 						$pack_identifier= "pack_$i";
 						?>
 					<tr>
 						<td>Pack <?=$i;?> - <?=$packs[$i]->name;?></td>
 						<td><?=$binary_bonus[1][$pack_identifier];?>%</td>
 					</tr>
 				<?php endfor;?>
 				</tbody>
 			</table>


			</div>


			<div class="col-md-6">
				<div class="wrap-recent-text">
					<h2 class="title">BINARY BONUS</h2>
					<div class="content-text">
						<p>Depending on each package of services purchased, the distributor will receive a percentage or another, from 5% to 25%.</p>

						<p>To receive commissions on this bonus, you must be an Active and Qualified Distributor, with one active person on the left and another active person on the right personally sponsored.</p>

						<p>Each dollar of the price of the service package is equivalent to one point in the binary. 
						The volume of points that will be reflected in the binary is only for the acquisition of the service packages.</p>

						<p>The volume of the points expires after 45 days if the distributor is not active with a service package and / or 
						has the qualified binary.</p>


						<a href="<?=domain;?>/register" class="read-more" title="">GET STARTED</a>
					</div>
				</div>
			</div><!-- /.col-md-6 -->
		</div>
	</div>
</section>



<section class="flat-why-choose style3 bg-browse">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top-title center">
					<h2>MATCHING BONUS</h2>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row">

			<div class="col-md-12">


				<?php $matching_bonus = $settings['matching_bonus']->settingsArray ;?>


				<div class="table-price">
					<table class="table">
						<thead>
							<td></td>
							<td>1ST GENERATION</td>
							<td>2ND GENERATION</td>
							<td>3RD GENERATION</td>
						</thead>
						<tbody>
							<?php  foreach([3,4,5,6,7] as $key => $pack_id) :

								?>
								<tr>
									<td>Pack <?=$pack_id;?></td>
									<?php for ($i=1; $i <=3 ; $i++) :?>
										<td><?=$matching_bonus[$i]["pack_$pack_id"];?>%</td>
									<?php endfor ;?>
								</tr>
							<?php endforeach ;?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="flat-recent-market">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrap-recent-text">
					<h2 class="title">SPEAKER BONUS</h2>
					<div class="content-text">
						<p>
							During the presentations or webinars, the speaker receives from 1% to 5% of the investment packages, purchased or sold by the participants and their structures, within seven days after the presentation.
						</p>


						<a href="<?=domain;?>/register" class="read-more" title="">GET STARTED</a>
					</div>
				</div>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="single-image center">
					<img src="<?=$this_folder;?>/images/page/laptop-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="flat-recent-market">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="single-image center">
					<img src="<?=$this_folder;?>/images/page/laptop-1.png" alt="">
				</div>
			</div>

			<div class="col-md-6">
				<div class="wrap-recent-text">
					<h2 class="title">OFFICE BONUS</h2>
					<div class="content-text">
						<p>
						By opening an office representing Taurus Capital in your city or country, you receive an additional 3% of all investment packages sold. </p>
						<p> The opening of the office is only possible in coordination with the management of the company and under the standards of Taurus Capital.
							turnover of country or city 3%
						</p>

						<a href="<?=domain;?>/register" class="read-more" title="">GET STARTED</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="flat-recent-market">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="wrap-recent-text">
					<h2 class="title">AUTO BONUS</h2>
					<div class="content-text">
						<p>
							The car of your dreams is a bonus for the fruit of your work. In this account, the billing funds of your first 3 generations are computed 2% of the turnover of the first line 0.25% of the turnover of the second line
						</p>

						<a href="<?=domain;?>/register" class="read-more" title="">GET STARTED</a>
					</div>
				</div>
			</div><!-- /.col-md-6 -->
			<div class="col-md-6">
				<div class="single-image center">
					<img src="<?=$this_folder;?>/images/page/laptop-1.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>

