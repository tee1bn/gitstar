<?php
$page_title = "Home";
 include 'includes/header.php';


        $setting =  SiteSettings::find_criteria('rules_settings')->settingsArray;
        $trucash_exchange = $setting['one_trucash_is_x_usd'];

 ;?>


		
		<!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
        <div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
            <div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                <div class="slotholder"></div>
                <ul>

                    <li data-index="rs-3050" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?=$this_folder;?>/images/slides/slide-05.jpg"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption title-slide color-white letter-spacing3px" 
                            id="slide-3049-layer-1" 
                            data-x="['right','right','right','right']" data-hoffset="['35','35','35','35']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-95','-90','-90','-70']" 
                            data-fontsize="['50','45','40','35']"
                            data-lineheight="['72','64','50','40']"
                            data-fontweight="['700','600','600','500']"
                            data-width="['1200','800','700','500']"
                            data-height="none"
                            data-whitespace="normal"
                 
                            data-type="text" 
                            data-responsive_offset="on"                             

                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[10,10,10,10]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 16; white-space: nowrap;">INVESTING IN CRYPTOCURRENCY WITH TAURUS CAPITAL IS TOO EASY
                        </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption sub-title color-white" 
                            id="slide-3049-layer-4" 
                            data-x="['right','right','right','right']" data-hoffset="['35','35','35','35']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['30','50','30','30']"
                            data-fontsize="['18',18','16','14']" 
                            data-lineheight="['32','28','28','24']"
                            data-fontweight="['500','400','400','400']"
                            data-width="['700','700','600','400']"
                            data-height="none"
                            data-whitespace="normal"
                 
                            data-type="text" 
                            data-responsive_offset="on" 

                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['right','right','right','right']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"

                            style="z-index: 17; white-space: nowrap;">Putting your money to work with us is the easiest and safest way to invest in cryptocurrencies.
                        </div>

                        <a href="<?=domain;?>/register" target="_self" class="tp-caption flat-button-slider bg-blue" 

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['right','right','right','right']" data-hoffset="['235','235','235','235']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['123','140','140','110']"
                        data-fontsize="['14','14','14','14']" 
                        data-width="['auto']"
                        data-height="['auto']">GET STARTED
                        </a><!-- END LAYER LINK -->

                        <a style="width: 185px!important" href="<?=domain;?>/login" target="_self" class="tp-caption flat-button-slider bg-white" 

                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                     
                        data-x="['right','right','right','right']" data-hoffset="['35','35','35','35']" 
                        data-y="['middle','middle','middle','middle']" data-voffset="['123','140','140','110']"  
                        data-fontsize="['14',14','14','14']"
                        data-width="['auto']"
                        data-height="['auto']">
                            SIGN IN 
                        </a>
                    </li>

                </ul>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

        <section class="flat-recent-market style2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrap-recent-text style3">
                            <h2 class="title">ABOUT US</h2>
                            <div class="content-text">
                                <p>Taurus Capital is a program of
                                online investment.</p>

                                <p>
                                It was constituted by a group of
                                entrepreneurs from 7 different industries which together add more than 50 years of experience.</p>

                                <p>
                                Since 2001 they have worked in
                                the different financial markets and
                                are intimately linked with the
                                development of important
                                cryptocurrencies, projects based 
                                On blockchain and platforms
                                exchanges.</p>


                                <a href="<?=domain;?>/about" class="read-more" title="">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-image">
                            <div class="about-image">
                                <div class="about-1">
                                    <img src="<?=$this_folder;?>/images/page/about-1.jpg" alt="">
                                </div>
                                <div class="about-2">
                                    <img src="<?=$this_folder;?>/images/page/about-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





            <section class="flat-work">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="top-title center">
                                <h2>HOW IT WORKS</h2>
                                <p>By enabling this easy and secure way to invest in bitcoin we hope to have the eliminated the boundaries<br> that earlier prevented individuals and companies to grow</p>
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
                                        <h4><a href="<?=domain;?>/register" title="">CREAT ACCOUNT</a></h4>
                                    <p>
                                        It is very easy to create an account in Taurus Capital, you just have to put a username (without spaces), an email, a WhatsApp number (includes the area code of your country) and put a strong password.
                                    </p>
                                    <p>
                                        &nbsp;
                                    </p>
                                    <p>
                                        You will receive a verification email and you will only have to click (check the spam folder if you do not see it in your inbox)

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox style1 center">
                               <div class="icon">
                                    <img src="<?=$this_folder;?>/images/icon/payment.png" alt="">
                                </div>
                                <div class="iconbox-content">
                                <h4><a href="<?=domain;?>/user/make-deposit" title="">MAKE PAYMENT</a></h4>
                                                                       <p>Taurus Capital accepts several payment methods, once inside its board you must make the deposit.
                                                                       </p>
                                                                       <p>
                                                                           &nbsp;
                                                                       </p>
                                                                           
                                                                       </p>
                                                                           We recommend bitcoin, but you can also pay via skrill or paypal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iconbox style1 center">
                                <div class="icon">
                                    <img src="<?=$this_folder;?>/images/icon/orders.png" alt="">
                                </div>
                                <div class="iconbox-content">
                                  <h4><a href="<?=domain;?>/user/purchase-investment" title="">choose & buy investment ranges</a></h4>
                                                                       <p>
                                                                           taurus capital is very flexible for new investors, you can choose to start with as little as $ 10 and go up to $ 50,000. 
                                                                       </p>
                                                                       <p>
                                                                           &nbsp;
                                                                       </p>


                                                                       <p>

                                                                           you must take into account that like any business, the greater your investment, the higher the returns.
                                                                           
                                                                       </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.flat-work -->




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
        		</div>


        		<div class="row">

               <!--      <div class="col-md-3">
                                    <img src="<?=$this_folder;?>/images/page/about-1.jpg" alt="">

                    </div>
 -->
                    <?php


                    $binary_bonuses = SiteSettings::find_criteria('binary_bonus')->settingsArray['binary_bonus'][1];
                    foreach (v2\Models\InvestmentPackage::available()->get()->take(4) as $key => $investment) :
                            $identifier = "pack_$investment->pack_id";
                            $binary_bonus = $binary_bonuses[$identifier];

                        ?>


        			<div class="col-md-3 pack-card">
        				<div class="price-wrapper center basic pack-body">
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
        	</div>
        </section>



        <style type="text/css">
            .floating-coin{

                position: absolute;
                top: -161px;
                right: 147px;
                width: 400px;
                height: 430px;
            }
        </style>
      


        <section class="flat-recent-market" style="color: white;background: linear-gradient(45deg, #005757, #030a21);">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-image center">
                                    <img class="floating-coin" src="<?=asset;?>/images/logo/icons/floating-coin.png" alt="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="wrap-recent-text">
                                    <h2 class="title text-white">TRUCASH TOKEN</h2>
                                    <div class="content-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat pretium tincidunt. Donec ultricies pulvinar velit, eget euismod sapien. Duis pharetra sed ante blandit posuere. Etiam placerat metus.</p>
                                        <p>Proin at metus congue, semper nunc sed, sollicitudin dui. Nunc utcon dimentum mi. In pharetra ipsum leo, velas porttitor elit posuere eu. Pellentesque aliquam, neque at maximus rhoncus, ante tortor.</p>
                                        <br>
                                        <a href="<?=domain;?>/trucash" class="read-more" title="">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


	
        <section class="flat-why-choose style2 bg-browse">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top-title center">
                                    <h2>TRUCASH (TCH)</h2>
                                    <p>TCH is an open source token based on the Libra blockchain (Facebook).</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-sm-6">
                                <div class="iconbox inline-left style7">
                                    <div class="icon">
                                        <img src="images/icon/security-1.png" alt="">
                                    </div>
                                    <div class="iconbox-content">

                                        <h4><a href="#" title="">TRUCASH</a></h4>
                                        <p>It is another source of income for our partners becasue the amount of this cryptocurrency is limited and the need to obtain it is constantly growing. That means that the more the transactions, the more supply and demand increase and you could increase your profits by more than 4,000%.</p>



                                    </div>
                                </div><!-- /.iconbox style7 -->
                                <div class="iconbox inline-left style7">
                                    <div class="icon">
                                        <img src="images/icon/insurance-1.png" alt="">
                                    </div>
                                    <div class="iconbox-content">


                                        <h4><a href="#" title="">TECHNICAL DATA</a></h4>
                                        <p>Trucash uses the latest technologies to process fast transfers, with a combination of CPU / GPU and POW / POS (proof of stake) logic efficiently at the right time.</p>
                                    </div>
                                </div><!-- /.iconbox style7 -->
                                <div class="iconbox inline-left style7">
                                    <div class="icon">
                                        <img src="images/icon/mobile-app-1.png" alt="">
                                    </div>
                                    <div class="iconbox-content">
                                        <h4><a href="#" title="">OBJECTIVE</a></h4>
                                        <p>The objective has been to build a cryptocurrency with real value, the triple ecosystem is based on a volume of operations. 

                                        </p>
                                        <a href="<?=domain;?>/trucash" class="text-warning">Learn more about Trucash</a>


                                    </div>
                                </div><!-- /.iconbox style7 -->
                            </div><!-- /.col-md-4 col-sm-6 -->
                            <div class="col-md-4">
                                <div class="coin-convert">
                                    <div class="title">
                                        <h2>TRUCASH to USD</h2>
                                        <p class="sub-title"><?=tch;?>/USD <?=$trucash_exchange;?></p>
                                    </div>
                                    <div class="desc">
                                        Trucash conversion with United state dollars
                                    </div>
                                    <form action="#" class="form-conver">
                                        <div class="field-row">
                                            <div class="one-half">
                                                <input type="text" class="form-input" id="number_currency" onkeyup ="cal(this.value);" value="1">
                                            </div>
                                            <div class="one-half">
                                                <select name="currency-select" id="currency_sellect">
                                                    <option value="tch">Trucash (TCH)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="field-row">
                                            <div class="one-half">
                                                <span id="result_currency">0.1</span>
                                            </div>
                                            <div class="one-half">
                                                <select name="currency-select" id="currency_price">
                                                    <option value="usd">US Dollar (USD)</option>
                                                </select>  
                                            </div>
                                        </div>
                                        <div class="btn-submit">
                                            <button type="button"><i class="fa fa-refresh"></i> INVERT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <script>

                    cal = function($tch){
                        $usd = $tch * (<?=$trucash_exchange;?>);
                        document.getElementById('result_currency').innerHTML = $usd;
                    }

                </script>



                <section class="flat-recent-market style2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="top-title center">
                                    <h2>WHY CHOOSE US</h2>
                                </div>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col-md-6">
                                <div class="single-image">
                                    <div class="about-image">
                                        <div class="about-1">
                                            <img src="<?=$this_folder;?>/images/page/pic-3.jpg" alt="">
                                        </div>
                                        <div class="about-2">
                                            <img src="<?=$this_folder;?>/images/page/about-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="wrap-recent-text styl">
                                    <!-- <h2 class="title">ABOUT US</h2> -->
                                    <div class="content-text">
                                       <p>&nbsp;At Taurus capital each partner is important, investing in digital markets is very easy with us.</p>

                                       <p>We have a unique trading strategy that combines the guarantee of Crypto-mining with the best Traders in the world.</p>

                                       <P>&nbsp;</P>

                                       <p>Because our servers are mining the most profitable cryptocurrencies on the market, we can obtain them between 10% and 30% below their price and market them with a guaranteed profitability 365 days a year.</p>

                                       <P>&nbsp;</P>
                                       <p>While our traders receive a part of the profits obtained from mining to carry out the best operations and take advantage of market movements to gain both on the rise and the fall. We are using new technologies to build a radically better financial system that enables us to support consistent profitability for our partners.<br />
                                       &nbsp;</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>







		<section class="flat-price-coin">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="top-title center">
							<h2>CRYPTOCURRENCY PRICES</h2>
							<p>The Bitcoin ecosystem at a glance. Any of our service with free test credits or actual Bitcoins.</p>
						</div>
						<div class="table-price" style="height: 500px;">

							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container">
							  <div class="tradingview-widget-container__widget"></div>
							  <!-- <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank">
							  	<span class="blue-text">Cryptocurrency Markets</span></a> by TradingView
                              </div> -->
							  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
							  {
							  "width": "100%",
							  "height": "100%",
							  "defaultColumn": "overview",
							  "screener_type": "crypto_mkt",
							  "displayCurrency": "USD",
							  "colorTheme": "light",
							  "locale": "en"
							}
							  </script>
							</div>
							<!-- TradingView Widget END -->
						</div><!-- /.table-price -->
					</div>
				</div>
			</div>
		</section><!-- /.flat-price-coin -->

	
		<section class="flat-counter style2">
			<div class="container">
				<div class="wrap-counter">
					<div class="row">
						<div class="col-md-3 col-6">
							<div class="square style2 inline-left center">
								<div class="counter-box">
									<div class="icon">
										<i class="fa fa-flag" aria-hidden="true"></i>
									</div>
									<div class="content left">
										<div class="numb-count" data-from="0" data-to="50" data-speed="2000" data-waypoint-active="yes">50</div>
										<div class="text color-default">
											PROJECTS
										</div>
									</div>
								</div>	
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-sm-6 -->
						<div class="col-md-3 col-6">
							<div class="square style2 inline-left center">
								<div class="counter-box">
									<div class="icon">
										<i class="fa fa-suitcase" aria-hidden="true"></i>
									</div>
									<div class="content left">
										<div class="numb-count" data-from="0" data-to="70" data-speed="2000" data-waypoint-active="yes">70</div>
										<div class="text">
											PACKS
										</div>
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-sm-6 -->
						<div class="col-md-3 col-6">
							<div class="square style2 inline-left center">
								<div class="counter-box">
									<div class="icon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<div class="content left">
										<div class="numb-count" data-from="0" data-to="120" data-speed="2000" data-waypoint-active="yes">120</div>
										<div class="text">
											ACCOUNTS
										</div>
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-sm-6 -->
						<div class="col-md-3 col-6">
							<div class="square style2 inline-left center">
								<div class="counter-box">
									<div class="icon">
										<i class="fa fa-link" aria-hidden="true"></i>
									</div>
									<div class="content left">
										<div class="numb-count" data-from="0" data-to="220" data-speed="2000" data-waypoint-active="yes">220</div>
									<div class="text">
										TRANSACTIONS
									</div>
									</div>
								</div>
							</div><!-- /.square -->
						</div><!-- /.col-md-3 col-sm-6 -->
					</div>
				</div><!-- /.counter -->
			</div>
		</section><!-- /.flat-counter style2 -->
<!-- 
		<section class="flat-call-back">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-call-back style1">
							<div class="title">
								<h2>Robert Kiyosarki</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan tristique lorem, nec vehicula sem aliquam ut. in ante tempus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->



<?php include 'includes/footer.php';?>
