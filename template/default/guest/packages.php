
<?php
$page_title = "Packages";
include 'includes/header.php';?>


 <?php  include 'includes/breadcrumbs.php';?>

<section class="flat-pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
							<div class="top-title center">
								<h2>OUR INVESTMENT RANGES</h2>
								<p> We strive to produce a balanced profit-taking all sides into account.
			                        <a href="<?=domain;?>/packages">See all investment ranges</a></p>
							</div>

			</div>
		</div><!-- /.row -->
		<div class="row">

			<?php


			$settings = SiteSettings::all()->keyBy('criteria');
			$direct_bonus_setting = $settings['direct_bonus']->settingsArray;
			$direct_bonus = $direct_bonus_setting['direct_bonus'];

			$binary_bonus_setting = $settings['binary_bonus']->settingsArray;
			$binary_bonus = $binary_bonus_setting['binary_bonus'];

			$packs = v2\Models\InvestmentPackage::available()->get()->keyBy('pack_id');





			$binary_bonuses = $binary_bonus[1];



			foreach ($packs as $key => $investment) :
				$identifier = "pack_$investment->pack_id";
			$binary_bonus = $binary_bonuses[$identifier];

			?>


			<div class="col-md-3 pack-card">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">
						<center class="pack-center">
							<img src="<?=domain;?>/template/default/app-assets/images/logo/Logo-head.png" class="pack-head">
						</center>
						<div class="price-header pack-header">
							<h3 class="title pack-title">Pack <?=$investment->pack_id;?></h3>	
							<div class="price-number pack-main">
								<?=$investment->DetailsArray['annual_roi_percent'];?>%
							</div>					
							<span class="price-subprice"><?=$investment->name;?></span>
						</div>
						<div class="price-contet">
							<div class="price-desc">
								<ul>
									<li><span class="fs1" aria-hidden="true" ></span> Invest 
										<?=$currency;?><?=MIS::money_format($investment->DetailsArray['min_capital']);?> - 
										<?=MIS::money_format($investment->DetailsArray['max_capital']);?></li>
										<li><span class="fs1" aria-hidden="true" ></span>  <?=$investment->DetailsArray['weekly_roi_percent'];?>% Weekly profit</li>
										<li><span class="fs1" aria-hidden="true" ></span> Binary Earning <?=$binary_bonus;?>%</li>
									</ul>
								</div>
								<a class="btn-outline-success btn" href="<?=domain;?>/user/purchase-investment">BUY</a>				
								<p>&nbsp;</p>
								<br>

							</div>
						</div>
					</div>
				</div>
			<?php endforeach;?>


		</div>

	</div><!-- /.container -->
</section>

<section class="flat-why-choose style2 bg-browse" style="display: none !important;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top-title center">
					<h2>HOW DOES IT WORK?</h2>
					<p>You choose an investment range in which you can participate and we: </p>
				</div>
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
		<div class="row">

			<div class="col-md-4">
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/security-1.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">01</a></h4>
						<p> We mine a portfolio of the most profitable cryptocurrencies on the market</p>
					</div>
				</div><!-- /.iconbox style7 -->
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/insurance-1.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">02</a></h4>
						<p>Therefore we obtain cryptocurrencies between 10% to 30% below their price.</p>
					</div>
				</div><!-- /.iconbox style7 -->
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/mobile-app-1.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">03</a></h4>
						<p> We sell part of the cryptocurrencies to the market and another part of our traders and bots make financial operations.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/wallet-1.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">04</a></h4>
						<p>Thus we doubled the capital in the short term several times.</p>
					</div>
				</div>
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/exchange-1.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">05</a></h4>
						<p>We invest 30% of the generated profits in the medium term in the increase of the mining capacity, Supplement industry, Renewable and sustainable energy market, development of our projects.</p>
					</div>
				</div>
				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/buying.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">06</a></h4>
						<p>In such a way that we manage to optimize returns with the constant flow of external partners and the distribution of capital in the short and medium term.</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">

				<div class="iconbox inline-left style7">
					<div class="icon">
						<!-- <img src="<?=$this_folder;?>images/icon/buying.png" alt=""> -->
					</div>
					<div class="iconbox-content">
						<h4><a href="#" title="">07</a></h4>
						<p>From the 2nd year the company earns more because once the mining servers and the trading bots are purchased, these are used for several years, but the package of services you acquire only lasts 365 days.</p>										
					</div>


				</div>

				<p>Over time it becomes even more sustainable since a new entry would double the company&#39;s profits.</p>

			</div>


		</div>
			
			<div class="col-md-12" style="padding-top: 40px;">

				<div class="coin-convert">
					
					<div class="title">
						<h2>QUICK START BONUS</h2>
						<!-- <p class="sub-title">CURRENCY CALCULATOR</p> -->
					</div>

					<p>
					You earn a commission of <?=$direct_bonus[1]['first_x_days_percent'];?>% for each investment range that your direct line acquires and 
					<?=$direct_bonus[2]['first_x_days_percent'];?>% for each package of services acquired by your second level. 
					<p>
						Note: On your direct line, <?=$direct_bonus[1]['first_x_days_percent'];?>% of direct bonus is valid only for 
						<?=$direct_bonus[1]['x_days'];?>days, from day <?=($direct_bonus[1]['x_days'] + 1);?>,
						  the company sets you <?=$direct_bonus[1]['after_x_days_percent'];?>% of your first level
					</p>

<!-- 

					<p>

						Immediately earn a commission of 20% for each investment range that your direct line acquires and 5% for each package of services acquired by your second level.

						Note: 20% of fast start is valid only for 30 days, from day 31 the company sets you 12% of your first level
					</p>
 -->
				</div>
			</div>
	</div>
</section>
<section class="flat-pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top-title center">
					<h2>EXAMPLES TO CALCULATE EARNINGS</h2>
					<!-- <p> We strive to produce a balanced news feed taking all sides into account</p> -->
				</div>
			</div>
		</div><!-- /.row -->

		<?php


		$binary_bonuses = SiteSettings::find_criteria('binary_bonus')->settingsArray['binary_bonus'][1];
		foreach (v2\Models\InvestmentPackage::available()->whereIn('pack_id', [7,3,1])->get()->sortByDesc('pack_id') as $key => $investment) :
			$identifier = "pack_$investment->pack_id";
		$binary_bonus = $binary_bonuses[$identifier];

		$capitals = [
			7 => 30000,
			3 => 1000,
			1 => 199,
		];

		$capital = $capitals[$investment->pack_id];
		$investment->setAmount($capital);

		$annual = $investment->getWorth('annual');
		$weekly = $investment->getWorth('weekly');
		$monthly = ($weekly * 4) 
		?>

		<div class="row">
			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">
						<center class="pack-center">
							<img src="<?=domain;?>/template/default/app-assets/images/logo/Logo-head.png" class="pack-head-cal">
						</center>

						<div class="price-header pack-header"  style="height: 130px;">
							<h3 class="title pack-title">Pack <?=$investment->pack_id;?></h3>	
							<div class="price-number pack-main">
								<?=$investment->DetailsArray['annual_roi_percent'];?>%
							</div>					
							<span class="price-subprice"><?=$investment->name;?></span>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">

						<div class="price-header pack-header-no-bg">
							<h3 class="title pack-title-cal">INVESTMENT</h3>	
							<div class="price-number pack-main-cal">
								<?=$currency;?><?=MIS::money_format($capital);?>
							</div>					
							<!-- <span class="price-subprice">Exclusive</span> -->
						</div>

					</div>
				</div>
			</div>
			
			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">

						<div class="price-header pack-header-no-bg">
							<h3 class="title pack-title-cal">WEEKLY PROFITABILITY</h3>	
							<div class="price-number pack-main-cal">
								<?=$investment->DetailsArray['weekly_roi_percent'];?>%
							</div>					
							<!-- <span class="price-subprice">Exclusive</span> -->
						</div>

					</div>
				</div>
			</div>
			
			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">

						<div class="price-header pack-header-no-bg">
							<h3 class="title pack-title-cal">MONTHLY WITHDRAWAL</h3>	
							<div class="price-number pack-main-cal">
								<?=$currency;?><?=MIS::money_format($monthly);?>
							</div>					
							<!-- <span class="price-subprice">Exclusive</span> -->
						</div>

					</div>
				</div>
			</div>
			
			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">

						<div class="price-header pack-header-no-bg">
							<h3 class="title pack-title-cal">ANNUAL RETURN</h3>	
							<div class="price-number pack-main-cal">
								<?=$currency;?><?=MIS::money_format($annual);?>
							</div>					
							<!-- <span class="price-subprice">Exclusive</span> -->
						</div>

					</div>
				</div>
			</div>
			
			<div class="col-md-2 pack-card-cal">
				<div class="price-wrapper center basic pack-body-cal">
					<div class="content-post">

						<div class="price-header pack-header-no-bg">
							<h3 class="title pack-title-cal">BINARY TREE</h3>	
							<div class="price-number pack-main-cal">
								<?=$binary_bonus;?>%
							</div>					
							<!-- <span class="price-subprice">Exclusive</span> -->
						</div>

					</div>
				</div>
			</div>				
		</div>

	<?php endforeach;?>


</div><!-- /.container -->
</section>


 <?php  include 'includes/payment-method.php';?>


<?php include 'includes/footer.php';?>

