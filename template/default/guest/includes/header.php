<!DOCTYPE html>

<html>
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">

	<meta name="author" content="">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="<?=@$page_description;?>">
    <meta name="keywords" content="<?=@$page_keywords;?>">
    <meta name="author" content="<?=@$page_author;?>">
    <title><?=@$page_title;?> | <?=project_name;?></title>


	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/stylesheet/bootstrap.min.css">

	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/revolution/css/settings.css">

    <!-- Fancy box -->
	<link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/stylesheet/fancybox.css">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/stylesheet/style.css">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/stylesheet/colors/color1.css" id="colors">  

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="<?=$this_folder;?>/stylesheet/responsive.css">

	
    <link href="<?=$logo;?>" rel="shortcut icon">

</head>
	<body>
		<div class="boxed">
		<!-- Preloader -->
	 <!--    <div id="loading-overlay">
	        <div class="loader"></div>
	    </div> -->
		
		<div class="themesflat-top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="flat-infomation">
							<li class="email"><a href="mailto:themesflat@gmail.com" title="email">Email: infodeercreative@gmail.com</a></li>
							<li class="phone"><a href="%2b61383766284.html" title="phone">Call Us: +1 234 800 8080</a></li>
						</ul><!-- /.flat-infomation -->
						<ul class="box-account">
							<li class="login">
								<a href="<?=domain;?>/login" title="">Login</a>
							</li>
							<li class="sign-in">
								<a href="<?=domain;?>/register" title="">Signup</a>
							</li>
						</ul><!-- /.box-account -->
						<div class="clearfix"></div><!-- /.clearfix -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.themesflat-top -->

		<header id="header" class="header bg-color">
			<div class="container">
				<div class="row">
					<div class="header-wrap">
						<div id="logo" style="float: left;margin-top:26px;">
							<a href="<?=domain;?>" title="">
								<img src="<?=$logo;?>" alt="<?=project_name;?>" style="height: 46px;" />
							</a>
						</div><!-- /#logo -->
<!-- 						<div class="flat-show-search">
							<div class="show-search">
                                <i class="fa fa-search"></i>                                             
                            </div>
                            <div class="top-search">                        
                                <form action="#" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search...">
                                        <input type="submit" value="" id="searchsubmit">
                                    </div>
                                </form>
                            </div> 
                        </div>	
 -->						



                                    <?php

                                        $main_menu =  [

                                                [
                                                    'menu' => 'Home',
                                                    'link' =>  domain,
                                                    'show'=> true,
                                                    ],
/*
                                                [
                                                    'menu' => 'How it works',
                                                    'link' =>  domain."/w/how-it-works",
                                                    'show'=> true,
                                                    ],
*/





                                                 [
                                                    'menu' => 'About',
                                                    'link' =>  '#',
                                                    'show'=> true,
                                                    'submenu' => [
                                                          
                                                        [
                                                            'menu'       => 'About us',
                                                            'link'       => "$domain/about",
                                                            'show'=>true,
                                                        ],

                                                  
                                                      ]
      
                                                    ],




                                                 [
                                                    'menu' => 'Investments / Our Pricing',
                                                    'link' =>  '#',
                                                    'show'=> true,
                                                    'submenu' => [
/*
                                                        [
                                                            'menu'       => 'Our Services',
                                                            'link'       => "$domain/services",
                                                            'show'=>true,
                                                        ],*/
                                                        [
                                                            'menu'       => 'Packages',
                                                            'link'       => "$domain/packages",
                                                            'show'=>true,
                                                        ],
                                                        [
                                                            'menu'       => 'Products',
                                                            'link'       => "$domain/products",
                                                            'show'=>true,
                                                        ],

                                                        [
                                                            'menu'       => 'Tru Cash',
                                                            'link'       => "$domain/trucash",
                                                            'show'=>true,
                                                        ],

/*
                                                        [
                                                            'menu'       => 'Payment Method',
                                                            'link'       => "$domain/payment-method",
                                                            'show'=>true,
                                                        ],
*/
                                                      ]                                                    
                                                    ],     


                                                 [
                                                    'menu' => 'partners',
                                                    'link' =>  '#',
                                                    'show'=> true,
                                                    'submenu' => [

                                                    	[
                                                    	    'menu'       => 'Referral Program',
                                                    	    'link'       => "$domain/referral",
                                                    	    'show'=>true,
                                                    	],

                                                    	[
                                                    	    'menu'       => 'Leadership Program',
                                                    	    'link'       => "$domain/leadership-program",
                                                    	    'show'=>true,
                                                    	],

                                                    	
                                              
                                                      ]                                                    
                                                    ],     

                                                 [
                                                    'menu' => 'News',
                                                    'link' =>  '#',
                                                    'show'=> true,
                                                    ],     


/*
	-contact
	-faqs
	-how to be part
*/


                                                    [
                                                    'menu' => 'Support',
                                                    'link' =>  '#',
                                                    'show'=> true,
                                                    'submenu' => [

                                                        [
                                                            'menu'       => 'Contact',
                                                            'link'       => "$domain/contact",
                                                            'show'=>true,
                                                        ],
                                                        [
                                                            'menu'       => 'FAQs',
                                                            'link'       => "$domain/faqs",
                                                            'show'=>true,
                                                        ],
                                                        [
                                                            'menu'       => 'How to be part',
                                                            'link'       => "$domain/how-to-be-part",
                                                            'show'=>true,
                                                        ],

                                                      ]                                                    
                                                    ],

                                                    [
                                                    'menu' => 'Legal',
                                                    'link' =>  "#",
                                                    'show'=> false,
                                                    'submenu' => [

                                                        [
                                                            'menu'       => 'Terms & Conditions',
                                                            'link'       => "$domain/terms",
                                                            'show'=>false,
                                                        ],
                                                     
                                                        [
                                                            'menu'       => 'Privacy',
                                                            'link'       => "$domain/privacy",
                                                            'show'=>false,
                                                        ],

                                                        [
                                                            'menu'       => 'User Agreement',
                                                            'link'       => "$domain/user-agreement",
                                                            'show'=>false,
                                                            'submenu' => [


                                                            ]
                                                        ],

                                                      ]                                                    
                                                    ],

                                      
                                                ];




                                    ;?>


						<div class="nav-wrap">
							<div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
							<nav id="mainnav" class="mainnav">
								<ul class="menu">

																

									<?php foreach ($main_menu as  $menu):
									    if ($menu['show'] == false) {
									        continue;
									    }
									    ?>
									    <?php if (is_array(@$menu['submenu'])):?>


									    <li><a  href="#"><?=$menu['menu'];?></a>
									        <ul class="sub-menu">
									                    
									            <?php foreach ($menu['submenu'] as  $submenu):
									           
									                ?>



									                <?php if (is_array(@$submenu['submenu'])):?>


									                <li><a  href="#"><?=$submenu['menu'];?></a>
									                    <ul class="sub-menu">
									                                
									                        <?php foreach ($submenu['submenu'] as  $submenu):
									                       
									                            ?>
									                            <li>
									                                <a <?=$submenu['target']??'';?> 
									                                href="<?=$submenu['link'];?>">
									                                <?=$submenu['menu'];?>
									                                </a>


									                                

									                            </li>
									                                

									                        <?php endforeach;?>
									                    </ul>
									                </li>

									                <?php else:?>



									                <li>
									                    <a <?=$submenu['target']??'';?> 
									                    href="<?=$submenu['link'];?>">
									                    <?=$submenu['menu'];?>
									                    </a>
									                </li>

									            <?php endif;?>
									                    

									            <?php endforeach;?>
									        </ul>
									    </li>

									    <?php else:?>

									    <li>
									        <a <?=$menu['target']??'';?> href="<?=$menu['link'];?>">
									        <?=$menu['menu'];?>
									        </a>

									    </li>

									    <?php endif;?>
									<?php endforeach ;?>

<!-- 
									<li class="active">
                                        <a href="<?=domain;?>" title="">HOME</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/about" title="">ABOUT</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/packages" title="">packages</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/referral" title="">referral</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/trucash" title="">Tru Cash</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/how-to-be-part" title="">How to be part</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/products" title="">Products</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/services" title="">services</a>
                                    </li>
                                    <li>
                                        <a href="<?=domain;?>/contact" title="">contact</a>
                                    </li>
                                   -->
								</ul><!-- /.menu -->
							</nav><!-- /#mainnav -->
						</div><!-- /.nav-wrap -->
					</div><!-- /.header-wrap -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</header><!-- /#header -->
		

		        		<style type="text/css">
		   .pack-head-cal{
			    border-radius: 69%;
			    height: 70px;
			    background: white;
			    position: relative;
			    top: 27px;
			    padding: 5px;
			    left: -93px;
			}

		   .pack-head{

		    border-radius: 69%;
		    height: 70px;
		    background: white;
		    position: relative;
		    top: -36px;
			padding: 5px;
		    }

		    .pack-body{

			    padding-left: 0px !important;
			    padding-right: 0px !important;
			    padding-top: 0px !important;
			    padding-bottom: 0px !important;

    			margin-bottom: 40px;
    		 }

		    .pack-body-cal{

			    padding-left: 0px !important;
			    padding-right: 0px !important;
			    padding-top: 0px !important;
			    padding-bottom: 0px !important;

    			margin-bottom: 0px;
    		 }

		    .pack-header{
		    	background: linear-gradient(45deg, black, #237020);    
		    		padding-top: 38px;
		    	margin: 5px;
		    	color: white;
		    	padding-bottom: 10px !important;
		    	border-radius: 10px;
		    }

		    .pack-header-no-bg{

    			background: linear-gradient(45deg, #e1e1e1, #d5ddd4);
    	    	padding-top: 38px;
		    	margin: 5px;
		    	color: grey;
		    	padding-bottom: 10px !important;
		    	border-radius: 10px;
		    	height: 130px;
		    }

		    .pack-title{
		    	color: white !important;
		   		margin-bottom: 5px !important;
		    }

		    .pack-title-cal{
		    	color: black !important;
		   		margin-bottom: 5px !important;
		    }

		    .price-desc>ul>li{
		    	padding:5px;

		    	font-size: 16px;
		    	font-weight:700;
		    	text-transform: uppercase;
		    }
		    .pack-main{
		    	color: white !important;
		    	font-weight: 900 !important;

		    }
		      .pack-main-cal{
		    	color: black !important;
		    	font-weight: 900 !important;
		    	font-size: 20px !important;

		    }

		    .pack-center{
		    	height: 0px;
		    }

		    .pack-card-cal{
		    	padding-left: 1px;
		    	padding-right: 1px;
		    	border: none !important;

		    }

		    #testimonial-slider-1 .flex-control-thumbs .flex-active {

		    	
		    }


	
		        		</style>
