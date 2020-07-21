<?php
$page_title = "Contact";
 include 'includes/header.php';?>

 
 <?php  include 'includes/breadcrumbs.php';?>

		<section class="flat-address-box">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-map-marker"></i>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<h2>Address</h2>
								<p>291 Proin Road, Lake Charles, Maine 11292</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-phone"></i>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<h2>Phone number</h2>
								<p>+1 234 800 8080</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="address-box center">
							<div class="box-header">
								<div class="icon">
									<i class="fa fa-envelope-open"></i>
								</div>
							</div><!-- /.box-header -->
							<div class="box-content">
								<h2>Email:</h2>
								<p>infodeercreative@gmail.com</p>
							</div><!-- /.box-content -->
						</div><!-- /.address-box -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-address-box -->

<!-- 		<section class="flat-map">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<section class="pdmap" id="flat-map">
				            <div class="flat-maps" data-address="383 Fourth Street, Old Town, ME 04468, Hoa Kỳ" data-height="500" data-image="images/icon/map.png" data-name="Themesflat Map"></div>
				            <div class="gm-map">                
				                <div class="map box-shadow"></div>                        
				            </div>
				        </section>
			        </div>
				</div>
			</div>
		</section>
 -->
		<section class="flat-row flat-contact-form">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>CONTACT US</h2>
							<p>We'll help you resolve your issues quickly and easily.</p>
						</div>
						<div class="form-contact-form">
							<form class="form ajax_form" id="contact" method="post" action="<?=domain;?>/home/contact_us">
							    <div class="row">
							            <div class="form-group col-md-4">
							                <input class="form-control" id="name" type="text" required="" name="full_name" placeholder="Your Name">
							            </div>
							            <div class="form-group col-md-4">
							                <input class="form-control" id="email" type="text" required="" name="email" placeholder="Email">
							            </div>
							            <div class="form-group col-md-4">
							                <input class="form-control" id="sub" type="text" required="" name="phone" placeholder="Phone">
							            </div>
							        <div class="col-md-12 col-lg-12">
							            <div class="form-group">

							                <textarea class="form-control" id="message" rows="4" name="comment" required=""
							                 placeholder="Your Message"></textarea>
							            </div>
							        </div>
							        <div class="col-md-12">
							            <br>
							            <?=MIS::use_google_recaptcha();?>
							        </div>


							        <div class="col-md-4 mt-30">
							           	<button type="submit" class="flat-button-form border-radius-2">SEND MESSAGE</button>

							        </div>
							    </div>
							</form>                     


						</div><!-- /.form-contact-form -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-contact-form -->
<?php include 'includes/footer.php';?>
