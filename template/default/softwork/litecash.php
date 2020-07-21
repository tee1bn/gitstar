<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <title> <?=$this->name;?> </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


        <link rel="stylesheet" href="<?=$this->assets;?>/css/slick.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/slick-theme.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/animate.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/fonticons.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/magnific-popup.css">
        <link rel="stylesheet" href="<?=$this->assets;?>/css/bootsnav.css">


        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="<?=$this->assets;?>/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="<?=$this->assets;?>/css/style.css">
        <!--<link rel="stylesheet" href="<?=$this->assets;?>/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="<?=$this->assets;?>/css/responsive.css" />

        <script src="<?=$this->assets;?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">    
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                           
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">

<?=$this->name;?>
                           <!--  <img src="<?=$this->assets;?>/images/logo.png" class="logo logo-display m-top-10" alt="">
                            <img src="<?=$this->assets;?>/images/logo.png" class="logo logo-scrolled" alt="">
 -->
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="#hello">Home</a></li>                    
                            <li><a href="#about">About us</a></li>                    
                            <li><a href="#service">Core policies</a></li>                    
                            <li><a href="<?=$this->doman;?>/login">Login</a></li>                    
                            <li><a href="<?=$this->domain;?>/register">Register</a></li>                    
                            <li><a href="#contact">Contact us</a></li>  
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>  

            </nav>


            <!--Home Sections-->

            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">Fastest growing,<br> peer to peer Network!<br/>
                                </h1>
                            </div>

                            <div class="home_btns m-top-40">
                                <a href="#about" class="btn btn-primary m-top-20">GET STARTED</a>
                                <a href="https://t.me/joinchat/H2N8XxCjdkBQEcDWXL9P0Q" target="_blank" class="btn btn-default m-top-20">OUR TELEGRAM</a>
                            </div>

                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--About Sections-->
            <section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">
                                    <h2>ABOUT US</h2>
                                    <div class="separator_left"></div>

                                    <p><?=$this->name;?> is a community of like minds helping each other. As a participant you plegde to provide help to another participant who needs your help. After you do, your investment(i.e help) will now grow at 100% ROI in 10 days. which you can decide to withdraw even before the 10th day. Then you will be paired with another participant(s) who will provide you with help that covers your investment and interest...it is simple, but we are different with outstanding feature to stand test  of time. Take time to read through.  </p>

                                    <div class="about_btns m-top-40">
                                        <a href="#contact" class="btn btn-primary">know us more</a>
                                    </div><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <h6><i class="fa fa-angle-right"></i> NO CURRENCY BARRIER </h6>
                                        <div>
                                            <div class="content">
                                                <p>Unlike others, we support all currencies of the world including cryptos to involve larger network of participant for durability. With our default currency to be naira, other currencies are made available on mass request. </p>

                                            </div>
                                        </div> <!-- End off accordion item-1 -->

                                        <h6 class="open"><i class="fa fa-angle-right"></i> FLEXIBILITY</h6>
                                        <div class="open">
                                            <div class="content">
                                                <p>Our System supporting participants customising their investment period to suit their current financial need. You can choose to invest for 3, 5, 10.... days. </p>
                                            </div>
                                        </div> <!-- End off accordion item-2 -->

                                        <h6> <i class="fa fa-angle-right"></i> WE ARE DISCIPLINED  </h6>
                                        <div>
                                            <div class="content">
                                                <p>We do not joke with fellow participants and do not tolerate unfaithful participants, either through unfufilled pledges, elaspe time for Match execution or participants who try to beat our system.  </p>
                                            </div>
                                        </div> <!-- End off accordion item-3 -->

                                        <h6><i class="fa fa-angle-right"></i> LIFE SUPPORT </h6>
                                        <div>
                                            <div class="content">
                                                <p>Our Support team is everly online and ready to resolve conflicts and issues raised from time to time. </p>
                                            </div>
                                        </div> <!-- End off accordion item-4 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->


                <div class="container">
                    <div class="row">
                                        <div class="main_featured m-top-100">

                     <div class="col-sm-12">
                            <div class="head_title text-center">
                                <h2>CORE VALUES</h2>
                                <div class="separator_auto"></div>
                                <p>These are our key drives that support our vision, to show that wealth is grown not gained through side hustles and passive incomes. </p>
                            </div>
                        </div>
                        </div>
                        <div class="about_bottom_content">
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-fire-burn"></i>
                                        </div>
                                        <h6 class="m-top-20"> AUTHENTICATION AND TRANSPARENCY  </h6>
                                    </div>
                                    <p class="m-top-20">Emails and Phones are verified to ensure maximum safety of fellow participants. Also sms, emails and dashboad notifications per system activity.
                                        </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-speech-comments"></i>
                                        </div>
                                        <h6 class="m-top-20">DECENT ROI</h6>
                                    </div>
                                    <p class="m-top-20">With 100% in 10 days, you can grow your income, expand your business, improve your relationships, do better in church, mosque etc. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-heart"></i>
                                        </div>
                                        <h6 class="m-top-20">AUTOMATIC MATCHING</h6>
                                    </div>
                                    <p class="m-top-20">Yes we prefer blind matching with no bias... All matching and balances are done automatically.   </p>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off About section -->


            <!--Video section-->
         <!--    <section id="video" class="video">
                <div class="overlay"></div>
                <div class="main_video roomy-100 m-top-100 m-bottom-100 text-center">
                    <div class="video_text text-center">
                        <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="video-link"><span class="fa fa-play"></span></a>
                    </div>
                </div>
            </section> -->

            <!--End off video section -->



         


            <!--Service Section-->
            <section id="service" class="service">
                <div class="container">
                    <div class="row">
                        <div class="main_service roomy-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                                <div class="head_title text-center">
                                    <h2>CORE POLICIES</h2>
                                    <div class="separator_auto"></div>
                                    <p>If your idea or what you are thinking is not exactly listed, feel free to clear your doubts with us. We will be glad to help you link to reliable hands. </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-light-bulb"></i>
                                    <h6 class="m-top-30">NO GREEDINESS</h6>
                                    <div class="separator_small"></div>
                                    <p>We frown at greedy participants who try to get more from the system at the expense of the system. Thererfore there is limit to amount of help a participant can provide. But no limit to amount of help  gettable from matured pledges. 
                                     </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-imac"></i>
                                    <h6 class="m-top-30">RE-COMMITTMENT</h6>
                                    <div class="separator_small"></div>
                                    <p>For durability, particpants must re provide certain percentage of last PH for sustainability of the sytem. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-video"></i>
                                    <h6 class="m-top-30">SIDE ATTRACTIONS </h6>
                                    <div class="separator_small"></div>
                                    <p>Yes name them, All of this activities listed earn the participants bonuses which are automatically added to amount at GH in the default currency. -Referral bonus 10%, Ontime Execution (within 12 hrs) 10% , Writing of letter of happiness 5%, providing video of Happiness 10%, referral of upto 25people attracts ugrade of account to FAITHFUL. </p>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section> <!--End off Featured section-->


            <!--Impress section-->
            <section id="impress" class="impress roomy-100">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_impress text-center">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="text-white text-uppercase">Impressed?  Let’s work together</h2>
                                <p class="m-top-40 text-white">Our paticipants brag about our services especially the free time they enjoy with their money working for them. The early birds catches the worm, Fortunes favours the BOLD!</p>

                                <div class="impress_btns m-top-30">
                                    <a href="<?=$this->domain;?>/register" class="btn btn-primary m-top-20">JOIN US</a>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!-- End off Impress section-->


        

            <!--Skill Sections-->
            <section id="skill" class="skill roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_skill">
                            <div class="col-md-6">
                                <div class="skill_content wow fadeIn">
                                    <h2>Super powers</h2>
                                    <div class="separator_left"></div>

                                    <p>Our top proud skillsLorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                                        quis nostrud exerci tation ullamcorper suscipit lobortis 
                                        nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                        sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                        Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                                        ullamcorper suscipit lobortis nisl ut aliquip 
                                        ex ea commodo consequat. </p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill_bar sm-m-top-50">    
                                    <div class="teamskillbar clearfix m-top-20" data-percent="95%">
                                        <h6>PHP / LARAVEL</h6>
                                        <div class="teamskillbar-bar"></div>
                                    </div> <!-- End Skill Bar -->
                                                               
                                    <div class="teamskillbar clearfix m-top-50" data-percent="96%">
                                        <h6>SEO / ELECTRONIC MARKETING</h6>
                                        <div class="teamskillbar-bar"></div>
                                    </div> <!-- End Skill Bar -->

                                    <div class="teamskillbar clearfix m-top-50" data-percent="85%">
                                        <h6>SQL / DATABASE DESIGN</h6>
                                        <div class="teamskillbar-bar"></div>
                                    </div> <!-- End Skill Bar -->
                                    <div class="teamskillbar clearfix m-top-50" data-percent="80%">
                                        <h6>JAVASCRIPT / JQUERY</h6>
                                        <div class="teamskillbar-bar"></div>
                                    </div> <!-- End Skill Bar -->

                                    <div class="teamskillbar clearfix m-top-50" data-percent="89%">
                                        <h6>HTML / CSS / BOOTSTRAP</h6>
                                        <div class="teamskillbar-bar"></div>
                                    </div> <!-- End Skill Bar -->
                                    
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
                <br />
                <br />
                <br />
                <hr />
                <br />
                <br />
                <br />
                <div class="container">
                    <div class="row">
                        <div class="skill_bottom_content text-center">
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">3468</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Total Users</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">4638</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Happy Users</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">3468</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Blocked Users</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">3468</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Pay Outs</em></h5>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Skill section -->



          
        

            <!--Pricing Section-->
         <!--    <section id="pricing" class="pricing lightbg">
                <div class="container">
                    <div class="row">
                        <div class="main_pricing roomy-100">
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="head_title text-center">
                                    <h2>OUR PRICING</h2>
                                    <div class="separator_auto"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt tation ullamcorper 
                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item">
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase">STARTER</h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white">$19</h3>
                                            <p class="text-white">per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><i class="fa fa-check-circle text-primary"></i> <span>10</span> user</li>
                                            <li class="disabled"><i class="fa fa-times-circle"></i> Unlimited Bandwidth</li>
                                            <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>

                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="#contact" class="btn btn-primary">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_top_border"></div>
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase">PREMIUM</h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white">$39</h3>
                                            <p class="text-white">per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><i class="fa fa-check-circle text-primary"></i> <span>50</span> user</li>
                                            <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>
                                            <li class="disabled"><i class="fa fa-times-circle"></i> Full Statistics</li>
                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="#contact" class="btn btn-primary">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="pricing_item sm-m-top-30">
                                    <div class="pricing_head p-top-30 p-bottom-100 text-center">
                                        <h3 class="text-uppercase">bUSINESS</h3>
                                    </div>
                                    <div class="pricing_price_border text-center">
                                        <div class="pricing_price">
                                            <h3 class="text-white">$99</h3>
                                            <p class="text-white">per month</p>
                                        </div>
                                    </div>

                                    <div class="pricing_body bg-white p-top-110 p-bottom-60">
                                        <ul>
                                            <li><i class="fa fa-check-circle text-primary"></i> Unlimited Users</li>
                                            <li><i class="fa fa-check-circle text-primary"></i> Unlimited Bandwidth</li>
                                            <li><i class="fa fa-check-circle text-primary"></i> Full Statistics</li>
                                        </ul>
                                        <div class="pricing_btn text-center m-top-40">
                                            <a href="#contact" class="btn btn-primary">CHOOSE PLAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>

             --> <!--End off Pricing section -->



            <!--client brand section-->
<!--             <section id="cbrand" class="cbrand">
                <div class="container">
                    <div class="row">
                        <div class="main_cbrand text-center roomy-100">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img src="<?=$this->assets;?>/images/clients/1.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img src="<?=$this->assets;?>/images/clients/2.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img class="" src="<?=$this->assets;?>/images/clients/5.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img src="<?=$this->assets;?>/images/clients/4.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img src="<?=$this->assets;?>/images/clients/3.jpg" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="cbrand_item m-bottom-10">
                                    <a href="#"><img src="<?=$this->assets;?>/images/clients/1.jpg" alt="" /></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 -->
            <!-- End off Cbrand section -->


            <!--Subscribe section-->
            <section id="subscribe" class="subscribe roomy-100 fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_subscribe text-center">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="text-white">SUBSCRIBE US</h2>
                                <p class="m-top-30 text-white">Why not relax while we fetch the infomation you need delivered at your mail.</p>
                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="subscribe_btns m-top-40">

                                    <form class="form-inline">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="inputEmail2" placeholder="Email Address">
                                        </div>
                                        <button type="submit" onclick="subscribe()" class="btn btn-primary">SUBSCRIBE</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!-- End off Impress section-->



            <!--Blog Section-->
       <!--      <section id="blog" class="blog">
                <div class="container">
                    <div class="row">
                        <div class="main_blog text-center roomy-100">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="head_title text-center">
                                    <h2>RECENT BLOGS</h2>
                                    <div class="separator_auto"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt tation ullamcorper 
                                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog_item m-top-20">
                                    <div class="blog_item_img">
                                        <img src="<?=$this->assets;?>/images/Blog/1.jpg" alt="" />
                                    </div>
                                    <div class="blog_text roomy-40">
                                        <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                        <p><em><a href="#">May 15, 2016</a> /<a href="#">admin</a>/<a href="#"> Co-working</a></em></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog_item m-top-20">
                                    <div class="blog_item_img">
                                        <img src="<?=$this->assets;?>/images/Blog/2.jpg" alt="" />
                                    </div>
                                    <div class="blog_text roomy-40">
                                        <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                        <p><em><a href="#">May 15, 2016</a> /<a href="#">admin</a>/<a href="#"> Co-working</a></em></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="blog_item m-top-20">
                                    <div class="blog_item_img">
                                        <img src="<?=$this->assets;?>/images/Blog/3.jpg" alt="" />
                                    </div>
                                    <div class="blog_text roomy-40">
                                        <h6>PLEASUARE WITHOUT CONSCIENCE</h6>
                                        <p><em><a href="#">May 15, 2016</a> /<a href="#">admin</a>/<a href="#"> Co-working</a></em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>

 -->

            <!--Maps Section-->
            <div class="main_maps text-center fix">
                <div class="overlay"></div>
                <div class="maps_text">
                    <h3 class="text-white" onclick="showmap()">FIND US ON THE MAP <i class="fa fa-angle-down"></i></h3>
                    <div id="map_canvas" class="mapheight"></div>
                </div>
            </div><!-- End off Maps Section-->

     <section id="testimonial" class="testimonial fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_testimonial roomy-100">
                            <div class="head_title text-center">
                                <h2 class="text-white">OUR TESTIMONIALS</h2>
                            </div>
                            <div class="testimonial_slid text-center">
                                <div class="testimonial_item">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                        <div class="test_authour m-top-30">
                                            <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial_item">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                        <div class="test_authour m-top-30">
                                            <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial_item">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                        <div class="test_authour m-top-30">
                                            <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial_item">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy 
                                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                                            Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

                                        <div class="test_authour m-top-30">
                                            <h6 class="text-white m-bottom-20">JOHN DOE - THEMEFOREST USER</h6>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End off row-->
                </div><!--End off container -->
            </section> 

            <!--Contact Us Section-->
            <section id="contact" class="contact bg-mega fix">
                <div class="container">
                    <div class="row">
                        <div class="main_contact roomy-100 text-white">
                            <div class="col-md-4">
                                <div class="rage_widget">
                                    <div class="widget_head">
                                        <h3 class="text-white"><?=$this->name;?></h3>
                                        <div class="separator_small"></div>
                                    </div>
                                    <p>Just tell us your name, email or phone and a brief request. voila! you are set in the movement. <br/>Our Customer service is top notch!. We will get back to you in less than an hour.  </p>

                                    <div class="widget_socail m-top-30">
                                        <ul class="list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 sm-m-top-30">
                                <form class="" action="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group"> 
                                                <input id="first_name" name="first_name" type="text" placeholder="Name" class="form-control" required="">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                    <div class="form-group">  
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" required="">
                                    </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">  
                                                <textarea class="form-control" rows="6" placeholder="Brief us on your request. We will get in touch with you." required=""></textarea>
                                            </div>
                                            <div class="form-group text-center">
                                                <a href="#" onclick="contact()" class="btn btn-primary">SEND</a>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!--End off Contact Section-->


            <!-- scroll up-->
            <div class="scrollup">
                <a href="#"><i class="fa fa-chevron-up"></i></a>
            </div><!-- End off scroll up -->


            <footer id="footer" class="footer bg-black">
                <div class="container">
                    <div class="row">
                        <div class="main_footer text-center p-top-40 p-bottom-30">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                <?=$this->name;?> &copy;      <?=date("Y");?>. All Rights Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </footer>




        </div>

            <!-- JS includes -->

            <script src="<?=$this->assets;?>/js/vendor/jquery-1.11.2.min.js"></script>
            <script src="<?=$this->assets;?>/js/vendor/bootstrap.min.js"></script>

            <script src="<?=$this->assets;?>/js/jquery.magnific-popup.js"></script>
            <script src="<?=$this->assets;?>/js/jquery.easing.1.3.js"></script>
            <script src="<?=$this->assets;?>/js/slick.min.js"></script>
            <script src="<?=$this->assets;?>/js/jquery.collapse.js"></script>
            <script src="<?=$this->assets;?>/js/bootsnav.js"></script>


            <!-- paradise slider js -->


            <script src="http://maps.google.com/maps/api/js?key=AIzaSyD_tAQD36pKp9v4at5AnpGbvBUsLCOSJx8"></script>
            <script src="<?=$this->assets;?>/js/gmaps.min.js"></script>

            <script>
                            function showmap() {
                                var mapOptions = {
                                    zoom: 8,
                                    scrollwheel: false,
                                    center: new google.maps.LatLng(-34.397, 150.644),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
                                $('.mapheight').css('height', '350');
                                $('.maps_text h3').hide();
                            }

            </script>





            <script src="<?=$this->assets;?>/js/plugins.js"></script>
            <script src="<?=$this->assets;?>/js/main.js"></script>

    </body>

</html>
