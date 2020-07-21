

      <!--   <section class="flat-team">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="top-title center">
        					<h2>OUR EXPERTS</h2>
        					<p>Our team can help you buy bitcoins, choose a bitcoin wallet.</p>
        				</div>
        			</div>
        			<div class="col-md-4">
        				<div class="team-member style1 center">
        					<div class="team-image">
        						<a href="#" title=""><img src="<?=$this_folder;?>/images/team/01.jpg" alt=""></a>
        					</div>
        					<div class="team-info">
        						<div class="name">
        							<a href="#" title="">Arnold  Palmer</a>
        						</div>
        						<div class="position">
        							BitCoin Consultant
        						</div>
        						<ul class="social">
        							<li>
        								<a href="#" title="Facebook">
        									<i class="fa fa-facebook" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Twitter">
        									<i class="fa fa-twitter" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Instagram">
        									<i class="fa fa-instagram" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Google Plus">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Linkedin">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4">
        				<div class="team-member style1 center">
        					<div class="team-image">
        						<a href="#" title=""><img src="<?=$this_folder;?>/images/team/02.jpg" alt=""></a>
        					</div>
        					<div class="team-info">
        						<div class="name">
        							<a href="#" title="">Bruno Alves</a>
        						</div>
        						<div class="position">
        							General Director
        						</div>
        						<ul class="social">
        							<li>
        								<a href="#" title="Facebook">
        									<i class="fa fa-facebook" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Twitter">
        									<i class="fa fa-twitter" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Instagram">
        									<i class="fa fa-instagram" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Google Plus">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Linkedin">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        						</ul>
        					</div>
        				</div>
        			</div>
        			<div class="col-md-4">
        				<div class="team-member style1 center">
        					<div class="team-image">
        						<a href="#" title=""><img src="<?=$this_folder;?>/images/team/03.jpg" alt=""></a>
        					</div>
        					<div class="team-info">
        						<div class="name">
        							<a href="#" title="">Kelly Brook</a>
        						</div>
        						<div class="position">
        							Assistant Manager
        						</div>
        						<ul class="social">
        							<li>
        								<a href="#" title="Facebook">
        									<i class="fa fa-facebook" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Twitter">
        									<i class="fa fa-twitter" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Instagram">
        									<i class="fa fa-instagram" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Google Plus">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        							<li>
        								<a href="#" title="Linkedin">
        									<i class="fa fa-google-plus" aria-hidden="true"></i>
        								</a>
        							</li>
        						</ul>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section> -->


    <?php
        $testimonials = Testimonials::approved()->get()->take(6);

     if ($testimonials->count() > 0):?>
		<section class="flat-testimonial bg-browse">
			<div class="container">

                <div class="col-md-12">
                    <div class="top-title center">
                        <h2>TESTIMONIALS</h2>
                        <p>What users say about us.</p>
                    </div>
                </div>

				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider">
                        	<ul class="slides">
                                <?php 
                                if ($testimonials->count() < 2) {
                                    $testimonials->push($testimonials->first());
                                }

                                foreach ($testimonials as $testimonial) :?>

                                <li class="flex-active-slide" 
                                data-thumb="<?=domain;?>/<?=$testimonial->profilepic;?>">
                                    <div class="testimonials center">
                                    	<div class="logo-testimonial">
                                    		<span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    	</div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "<?=$testimonial->content;?>"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name"> <?=$testimonial->attester;?></div>
                                            <!-- <div class="author-info">Sale Manager</div> -->
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach;?>

                            </ul>
	                    </div>
					</div>
				</div>
			</div>
		</section>
    <?php endif;?>



		<section class="flat-call-back">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-call-back">
							<div class="title">
								<h2>Start Your Business NOW for Only:
                                    $1,000 Today</h2>
								<p>
                                    Get in agreement with the person who invited you, without excuses you can start up with 
                                    $10
                                    </p>
							</div>
							<div class="btn-call-back">
								<a href="<?=domain;?>/register" title="">Get Started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<!-- 
		<section class="flat-testimonial style1 bg-browse">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="testimonial-slider-1" class="style1">
                        	<ul class="slides">
                                <li class="flex-active-slide" data-thumb="<?=$asset;?>/images/guest/robert-kiyorsaki.jfif">
                                    <div class="testimonials">
                                    	<div class="logo-testimonial">
                                    		<span class="fs1" aria-hidden="true" data-icon="{"></span>
                                    	</div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "With a heavy focus on collecting and analyzing data, your services can help organizations that are looking for a robust analytical tool and consider content management a key concern. Everyone I've worked with, from my account manager to technical support, they really care about my success"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name">Robert T. Kiyorsaki</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex-active-slide" data-thumb="<?=$asset;?>/images/guest/robert-kiyorsaki.jfif">
                                    <div class="testimonials">
                                        <div class="logo-testimonial">
                                            <span class="fs1" aria-hidden="true" data-icon="{"></span>
                                        </div>
                                        <div class="message">
                                            <blockquote class="whisper">
                                               "With a heavy focus on collecting and analyzing data, your services can help organizations that are looking for a robust analytical tool and consider content management a key concern. Everyone I've worked with, from my account manager to technical support, they really care about my success"
                                            </blockquote>
                                        </div>
                                        <div class="testimonial-author">
                                            <div class="author-name">Robert T. Kiyorsaki</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
	                    </div>
					</div>
				</div>
			</div>
		</section>
 -->


		<footer id="footer_background">
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-widgets">
							<div class="col-md-4">
								<div class="widget widget-about">
									<div class="widget-text">
										<div id="logo-f">
											<a href="#" title="">
												<img src="<?=$logo;?>" alt="<?=project_name;?>" style="height: 56px;" >
											</a>
										</div>
										<br>
										<p>Taurus Capital is a program of online investment.

                                                It was constituted by a group of entrepreneurs from 7 different industries which together add more than 50 years of experience.
										</p>
									</div>
							
								</div>
							</div>
							<div class="col-md-4">
								<div class="widget widget_nav_menu">
									<h3 class="widget-title">QUICK LINK</h3>
									<ul class="menu-footer one-half">
										<li><a href="<?=domain;?>"><i class="fa fa-angle-double-right"></i> Home</a></li>
										<li><a href="<?=domain;?>/about"><i class="fa fa-angle-double-right"></i> About</a></li>
										<li><a href="<?=domain;?>/packages"><i class="fa fa-angle-double-right"></i> Packages</a></li>
										<li><a href="<?=domain;?>/products"><i class="fa fa-angle-double-right"></i> Products</a></li>
										<li><a href="<?=domain;?>/trucash"><i class="fa fa-angle-double-right"></i> Trucash</a></li>
									</ul>
									<ul class="menu-footer one-half">
										<li><a href="<?=domain;?>/faqs"><i class="fa fa-angle-double-right"></i> FAQs</a></li>
										<li><a href="<?=domain;?>/contact"><i class="fa fa-angle-double-right"></i> Contact</a></li>
                                        <li><a href="<?=domain;?>/referral"><i class="fa fa-angle-double-right"></i> Referral Program</a></li>
                                        <li><a href="<?=domain;?>/leadership-program"><i class="fa fa-angle-double-right"></i> Leadership Program</a></li>
                                      <!--   <li><a href="<?=domain;?>/register"><i class="fa fa-angle-double-right"></i> Sign up</a></li>
                                        <li><a href="<?=domain;?>/login"><i class="fa fa-angle-double-right"></i> Sign in</a></li> -->
								    </ul>

									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="widget widget_contact">
									<h3 class="widget-title">CONTACT</h3>

									<ul class="contact-list">
										<li>
											Address: <span>9291 Proin Road, Lake Charles Maine 11292</span>
										</li>
										<li>
											Phone: <span>+1 234 800 8080</span>
										</li>
										<li>
											Email: <span>info.deercreative@gmail.com</span>
										</li>
									</ul>
									<div class="widget widget_themesflat_socials">            
										<ul class="themesflat-shortcode-socials">
									        <li class="facebook">
						                        <a href="#" target="_blank" rel="alternate" title="" style="padding-top: 12px;">
						                            <i class="fa fa-facebook"></i>                            
						                        </a>
						                    </li>
						                    <li class="twitter">
						                        <a href="#" target="_blank" rel="alternate" title="" style="padding-top: 12px;">
						                            <i class="fa fa-twitter"></i>                            
						                        </a>
						                    </li>
						                    <li class="google-plus">
						                        <a href="#" target="_blank" rel="alternate" title="t;" style="padding-top: 12px;">
						                            <i class="fa fa-google-plus"></i>                            
						                        </a>
						                    </li>
						                    <li class="instagram">
						                        <a href="#" target="_blank" rel="alternate" title="" style="padding-top: 12px;">
						                            <i class="fa fa-instagram"></i>                            
						                        </a>
						                    </li>
						                    <li class="linkedin">
						                        <a href="#" target="_blank" rel="alternate" title="" style="padding-top: 12px;">
						                            <i class="fa fa-linkedin"></i>                            
						                        </a>
						                    </li>
						                </ul>       
								    </div>
								</div><!-- /.widget_contact -->
							</div>
						</div><!-- /.footer-widgets -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.footer -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="menu-ft-bottom">
								<li>
									<a href="<?=domain;?>/terms" title="">Terms of Service</a>
								</li>
								<li>
									<a href="<?=domain;?>/privacy" title="">Privacy Policy</a>
								</li>
								<li>
									<a href="<?=domain;?>/cookies" title="">Cookies</a>
								</li>
							</ul>
							<div class="copyright">
								<p>© Copyright <a href="<?=domain;?>" title=""><?=project_name;?></a> developed by 
                                    <a target="_blank" href="https://gitstardigital.com" title="">Gitstar Digital</a> <?=date("Y");?></p>
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.footer-bottom -->	
		</footer><!-- /#footer_background -->
		
		<div class="button-go-top">
			<a href="#" title="" class="go-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div><!-- /.button-go-top -->
	
	</div> <!-- /.boxed -->

	<!-- Javascript -->
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/tether.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/owl.carousel.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery.easing.js"></script>
    
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery-countTo.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/waypoints.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/jquery.fancybox.js"></script>
	<!-- <script type="text/javascript" src="<?=$this_folder;?>/javascript/kinetic.js"></script> -->
    <script type="text/javascript" src="<?=$this_folder;?>/javascript/main.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/slider_v1.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?=$this_folder;?>/revolution/js/extensions/revolution.extension.video.min.js"></script>



	</body>

</html>