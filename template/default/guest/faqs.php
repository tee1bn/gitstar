<?php
$page_title = "Frequently asked questions";
 include 'includes/header.php';?>




 <?php  include 'includes/breadcrumbs.php';?>

		<section class="flat-faqs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="accordion">


							  <?php 

							  $faqs = SiteSettings::where('criteria','faqs')->first()->settingsArray;

							    $i=1;
							    foreach ($faqs as $key => $faq) :
							    if ((@$faq['question'] == '') || ($faq['answer'] == '') ) {continue;}
							    ?>

								<div class="accordion-toggle">
									<div class="toggle-title">
										<?=$faq['question'];?>
									</div>
									<div class="toggle-content">
										<?=$faq['answer'];?>
										<div class="clearfix"></div>
									</div>
								</div>

							<?php endforeach;?>



						</div><!-- /.accordion -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-faqs -->



		<?php include 'includes/footer.php';?>
