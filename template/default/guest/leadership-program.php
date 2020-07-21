<?php
$page_title = "Leadership Program";
include 'includes/header.php';?>

 <?php  include 'includes/breadcrumbs.php';?>


				<?php $leadership_ranks = SiteSettings::find_criteria('leadership_ranks')->settingsArray ;	;?>

				<section class="flat-price-coin">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="top-title center">
									<h2>LEADERSHIP PROGRAM</h2>
									<!-- <p>The Bitcoin ecosystem at a glance. Any of our service with free test credits or actual Bitcoins.</p> -->
								</div>
								<div class="table-price">
									<table>
										<thead>
											<tr>
												<th>SN</th>
												<th>RANKS</th>
												<th>REWARDS</th>
											</tr>
										</thead>
										<tbody>
											<?php $i=1; foreach ($leadership_ranks['all_ranks'] as $key => $rank) :
												$qualification = $leadership_ranks['rank_qualifications'][$key];
												$cash_reward = $qualification['cash_rewards']['amount'];
												$perks = implode(",", $qualification['cash_rewards']['perks']);
											?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$rank['name'];?></td>
												<td><?=$currency;?><?=$cash_reward;?> <?=($perks != '')? "/$perks": '';?></td>
											</tr>
											<?php $i++; endforeach ;?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</section>


<?php include 'includes/footer.php';?>

