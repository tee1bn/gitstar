<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="<?=@$page_keywords;?>">
  <meta name="description" content="<?=@$page_description;?>">
  <meta name="author" content="<?=$page_author;?>">
  <title><?=@$page_title;?> | <?=project_name;?></title>
  <link rel="apple-touch-icon" href="<?=$logo;?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?=$logo;?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <link href="<?=$this_folder;?>/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=$this_folder;?>/asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=$this_folder;?>/asset/css/style.css" rel="stylesheet">



  <!-- Main Stylesheet File -->
  <link href="<?=$this_folder;?>/asset/css/style.css" rel="stylesheet">


</head>

<?php
$phone= '+234 8123351819, +234 8137990656';
$email= "hello@$_SERVER[HTTP_HOST]";
$address = '<address>17, Isikalu lane, Apapa, Lagos, Nigeria</address>
';

;?>









<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:<?=$email;?>"><?=$email;?></a>
        <i class="fa fa-phone"></i><a href="tel:<?=$phone;?>"> <?=$phone;?></a>
      </div>
  <!--     <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div> -->
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1 style="font-family: Raleway; font-size: 25px;">
    <img src="<?=$this_folder;?>/asset/img/gitstarlogo.png" alt="gitstarlogo" title="" style="
    height: 35px;
    width:  35px;
" />
    <a href="<?=domain;?>" class="scrollto" style="text-transform:uppercase;">Git<span>Star Digital</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
<!--          <a href="#body"><img src="<?=$this_folder;?>/asset/img/logo.png" alt="" title="" /></a>
 -->      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?=domain;?>">Home</a></li>
          <li><a href="<?=domain;?>#about">About Us</a></li>
          <li><a href="<?=domain;?>#services">Services</a></li>
          <li><a href="<?=domain;?>#portfolio">Portfolio</a></li>
          <!-- <li><a href="#team">Team</a></li> -->
        <!--   <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="<?=domain;?>#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  