
<!DOCTYPE html>
<html ng-app="app" class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="<?=@$page_description;?>">
    <meta name="keywords" content="<?=@$page_keywords;?>">
    <meta name="author" content="<?=@$page_author;?>">
    <title><?=@$page_title;?> | <?=project_name;?></title>
    <link rel="apple-touch-icon" href="<?=$logo;?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$logo;?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="<?=asset;?>/vendors/css/tables/datatable/datatables.min.css">    
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/weather-icons/climacons.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- tree css -->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/binary-tree.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/colors/palette-gradient.min.css">
    <!-- link(rel='stylesheet', type='text/css', href=app_assets_path+'/css'+rtl+'/pages/users.css')-->
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=asset;?>/fonts/feather/style.min.css">
    <script src="<?=asset;?>/js/jquery1.12.min.js"></script>
  </head>
  <!-- END: Head-->


    <script src="<?=asset;?>/angulars/angularjs.js"></script>
    <script src="<?=asset;?>/angulars/angular-sanitize.js"></script>
    <script>
        let $base_url = "<?=domain;?>";
        var app = angular.module('app', ['ngSanitize']);
        
/*       var console = {};
        console.log = function(){};
*/
    </script>
    <?php
      $dark = "black ";
      $light = "#073f2d";

    ;?>

<style type="text/css">



  .investment-name{

    background: #0f5334;
    padding: 7px;
    border-radius: 3px;
  }
  .price-range{

    padding: 2px;
    background: #d6ae56;
    border-radius: 4px;
    color: #0f5334;
  }

  .custom-warning{

    border-color: #d6ae56!important;
    background-color: #d6ae56;
    color: white !important;
  }
.card-header, .paginate_button>a{

    //border-color: <?=$light;?>!important;
    background-color: <?=$light;?> !important;
    color: white !important;
  }

  .has-sub > a:hover , .has-sub > a:visited , .nav-item > a:hover, .is-shown a:hover, .menu-item a:hover , .hover a:hover  {
      background: #063429 !important;
  }

   ul.menu-popout{
    margin: 0px !important;
    padding:  0px !important;
    padding:  0px !important;
   }

   .menu-popout>li>a{

    background: <?=$light;?> !important;
   }

   .menu-popout>li>a:hover{
    background: #063429 !important;
  }

li.open > a {
      background: #063429 !important;
  }


  .card-body{


  }
  .card-body, .card{

    background: <?=$light;?>;
    border-radius: 8px;
  }

  input, select, textarea{

      border: none !important;
      background: #063429 !important;
      color: white !important;
  }



  body{
    color:white !important;
  }

  .btn{

    border-color: #d6ae56!important;
    background-color: transparent;
    color: #d6ae56 !important;
  }



  .custom-green{
    border-color: <?=$light;?> !important;
    background: <?=$light;?> !important;
    color: white !important;
  }

  .custom-blue{
    border-color: #4a68ff !important;
    background: #4a68ff !important;
    color: white !important;
  }

  a>i, table{
    color: white !important;
  }
  label{
    color: white !important;
  }



.card-header  .dropdown-menu{
  background: #0a2921 !important;
  border-color: #0a2921 !important;
}

.hover{
  color: red !important;
}
  .nav-item > a , .is-shown> a, .menu-item, .content-header-title, .hover   {
    color:white !important;
  }
  .navbar-wrapper{
          background: #0d2123 !important;
          border-color: <?=$light;?> !important;

  }
  .content-wrapper, .app-content{
    /*background: #000000c4!important;*/
    height: auto;
/*
    position: absolute;
    bottom: 0px;
    right: : 0px;
    height: 120%;
    width: 90%;*/
  }

  .main-menu-content, .navigation,.has-sub,.is-shown,.main-menu,.hover ,.navbar-collapse, .navbar-container {
    background: <?=$light;?> !important;
    border-color: <?=$light;?> !important;

  }

   .app-content{
    background-image : url(<?=$asset;?>/images/logo/80.jpg) !important;
    color: white!important;
/*    
    background: <?=$dark;?> !important;
    border-color: <?=$dark;?> !important;
*/  }


  .use-bg{

    background: <?=$light;?>;  
  }

  .brand-logo:hover{
    background: black !important;
  }
  
</style>





  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <!-- <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow"> -->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
      
      <div class="navbar-wrapper">
        <div class="navbar-header" style="background: black; border-color:red !important;">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
              <i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="#" style="padding: 0px;">
              <img class="brand-logo" alt="<?=project_name;?> logo" src="<?=$logo;?>"
               style=":hover:green!important; height: 52px;width: 181px; object-fit: contain;background: none;">
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>


              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li id="translator" class="nav-item" style="position: relative;top: 20px;"><div><?php  'template/default/app-assets/translator.php';?> </div></li>

            <!--   <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore <?=project_name;?>...">
                </div>
              </li> -->
            </ul>
            <ul class="nav navbar-nav float-right">

              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-warning badge-up">
                <?php 
                $unseen_notifications = Notifications::unseen_notifications($auth->id);
                echo $unseen_notifications->count();
              ;?></span></a>

                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-dark float-right m-0">
                      <?=$unseen_notifications->count();?>
                     New</span></h6>
                  </li>
                  <li class="scrollable-container media-list">


                    <?php 

                     foreach ($unseen_notifications as $notification):?>

                    <a href="<?=$notification->DefaultUrl;?>">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-dark"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading"><?=$notification->heading;?></h6>
                          <div class="notification-text font-small-3 text-muted" style="color: black !important;">
                            <?=$notification->SmallIntro;?>
                          </div>
                            <small><time class="media-meta text-muted" ><?=date("M j Y, h:ia", strtotime($notification->created_at));?></time></small>
                        </div>
                      </div>
                    </a>

                    <?php endforeach ;?>
                    <?php if ($unseen_notifications->count() == 0) :?>
                        <center style="padding: 30px;">Your no notifcations.</center>
                    <?php endif ;?>
                  </li>

                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="<?=domain;?>/user/notifications">See all notifications</a></li>
              
                </ul>
              </li>




          <!--     <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-warning badge-up">3</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag badge badge-warning float-right m-0">4 New</span></h6>
                  </li>
                  <li class="scrollable-container media-list"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                </ul>
              </li> -->


              <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span class="avatar avatar-online"><img src="<?=domain;?>/<?=$auth->profilepic;?>" alt="avatar">
                    <i></i></span><span class="user-name"><?=$auth->fullname;?> <?=$auth->username;?></span></a>

                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="Javascript:void(0);">
                    <!-- <i class="ft-box"></i>  -->
                    <span class="badge custom-warning">
                      <?=$auth->subscription->payment_plan->name;?> 
                    </span>
                  </a>
                  <a class="dropdown-item" href="<?=domain;?>/user/profile">
                    <i class="ft-user"></i> Profile 
                  </a>
                  <!-- <a class="dropdown-item" href="<?=domain;?>/user/package"><i class="ft-briefcase"></i> Package</a> -->

                  <!-- <a class="dropdown-item" href="<?=domain;?>/user/company"><i class="fa fa-building-o"></i> Company</a> -->
                  <a class="dropdown-item" href="<?=domain;?>/user/change-password"><i class="ft-lock"></i> Change Password</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=domain;?>/login/logout">
                    <i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->

    <style>
      
    .card-group,.card-header{

    border: 1px solid #c985294a;
    }
    </style>

<script>
    $(function() {
        $('#myTable').DataTable();
    });
</script>

  <?php include 'sidebar.php';?>
  