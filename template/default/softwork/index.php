<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    
<head>
        <meta charset="utf-8">
        <title> <?=$this->name;?> Landing page</title>
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
                            <li><a href="#about">About</a></li>                    
                            <li><a href="#service">Services</a></li>                    
                            <!-- <li><a href="#pricing">Pricing</a></li>                     -->
                            <!-- <li><a href="#blog">Blog</a></li>                     -->
                            <li><a href="#contact">Get quote</a></li>  
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
                                <h1 class="text-white">Automation, Error Free,<br/>
                                More Time, Cash...<br/>
                                at <?=$this->name;?>
                                </h1>
                            </div>

                            <div class="home_btns m-top-40">
                                <a href="#about" class="btn btn-primary m-top-20">GET STARTED</a>
                                <a href="#contact" class="btn btn-default m-top-20">GET QUOTE</a>
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

                                    <p>In 2011, the CEO of <?=$this->name;?> envisioned that by 2020, most businesses will go online and flourish.  Ever since, resources have been pulled in motion to help individuals, companies, organisations, just name it streamline activities to flourish online which require lots of monotonous manual efforts into slim eloquent automated tasks.  </p>

                                    <div class="about_btns m-top-40">
                                        <a href="#contact" class="btn btn-primary">know us more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <h6><i class="fa fa-angle-right"></i> UNIQUE DESIGN </h6>
                                        <div>
                                            <div class="content">
                                                <p>Unlike others, any of our packages devloped e.g website, database structure etc is completely unique to your brand. We dont do one size fits all at <?=$this->name;?>. </p>

                                            </div>
                                        </div> <!-- End off accordion item-1 -->

                                        <h6 class="open"><i class="fa fa-angle-right"></i> EXPERIENCE TEAM</h6>
                                        <div class="open">
                                            <div class="content">
                                                <p>Our team consisting of top notch technical experts down to earth to ensure your idea works plus experienced counsel in on best adjustment to what will be profitable in this information age.</p>
                                            </div>
                                        </div> <!-- End off accordion item-2 -->

                                        <h6> <i class="fa fa-angle-right"></i> GREAT SERVICE </h6>
                                        <div>
                                            <div class="content">
                                                <p>We enjoy working with every irrespective of how you can communicate because an idea is profitable only  </p>
                                            </div>
                                        </div> <!-- End off accordion item-3 -->

                                        <h6><i class="fa fa-angle-right"></i> LIFE SUPPORT </h6>
                                        <div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                                    magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
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
                                <p>These are our key drives that support our vision, to show lots of routine tasks are needless by getting them automated with codes. </p>
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
                                        <h6 class="m-top-20"> WE’RE CREATIVE</h6>
                                    </div>
                                    <p class="m-top-20">We deliver innovative, secure, accurate and reliable automated experience based on sound standard and business practices. 
                                        </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-speech-comments"></i>
                                        </div>
                                        <h6 class="m-top-20">WE'RE FRIENDLY</h6>
                                    </div>
                                    <p class="m-top-20">Since we do your business to be in business, you call the shots -we take business relationship seriously. Your business is truly our business. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_bottom_item m-top-20">
                                    <div class="ab_head">
                                        <div class="ab_head_icon">
                                            <i class="icofont icofont-heart"></i>
                                        </div>
                                        <h6 class="m-top-20">WE LOVE MINIMALISM</h6>
                                    </div>
                                    <p class="m-top-20">We bring your ideas to life with minimum efforts at your end. We automate it one time, you reap its continual benefits thereafter.   </p>
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
                                    <h2>OUR SERVICES</h2>
                                    <div class="separator_auto"></div>
                                    <p>If your idea or what you are thinking is not exactly listed, feel free to clear your doubts with us. We will be glad to help you link to reliable hands. </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-light-bulb"></i>
                                    <h6 class="m-top-30">WEB DEVELOPMENT</h6>
                                    <div class="separator_small"></div>
                                    <p>Ranging from: custom web development, Search engine optimization, e-commerce, payment gateway integration and database development. We will listen to your keen need and deliver a satisfactory package with proper documentation. 
                                     </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-imac"></i>
                                    <h6 class="m-top-30">TRAININGS</h6>
                                    <div class="separator_small"></div>
                                    <p>We take delight in training youngsters in coding for web applications and we do it eloquently. Are you and individual or a corporate organisation. Request a callback and we shall gladly come to train. You will begin to boss computer in no time. </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service_item">
                                    <i class="icofont icofont-video"></i>
                                    <h6 class="m-top-30">DIGITAL MARKETING</h6>
                                    <div class="separator_small"></div>
                                    <p>Majority of your clients spend at least 5hours on the  average per day on their phone and electronic devices. We will get them to know and find your business through building websites, social media promotion etc, Bill boards are no go area... </p>
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
                                <p class="m-top-40 text-white">Our clients brag about our services especially the free time they enjoy with our solution doing the rest of the work. Do you want to accomplish more?</p>

                                <div class="impress_btns m-top-30">
                                    <a href="#" class="btn btn-primary m-top-20">INVITE US</a>
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
                                    <h5><em>Projects Finished</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">4638</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Happy Clients</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">3468</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Hours of work</em></h5>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="skill_bottom_item">
                                    <h2 class="statistic-counter">3468</h2>
                                    <div class="separator_small"></div>
                                    <h5><em>Cup of coffee</em></h5>
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
                                <p class="m-top-30 text-white">Why not relax while we fectch the infomation you need delivered at your mail.</p>
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
                                                <a href="#" onclick="contact()" class="btn btn-primary">REQUEST QUOTE or CALLBACK</a>
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
