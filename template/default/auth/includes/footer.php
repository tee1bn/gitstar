<?php 

$personal_settings = $auth->SettingsArray;

if ((! isset($personal_settings['membership_choice'])) && ($auth->account_plan==null)) :?>

<div class="modal" id="myModal" style="display:block;">
  <div class="modal-dialog modal-lg  bg-dark">
    <div class="modal-content"style="background: black;">

      <!-- Modal Header -->
      <div class="modal-header"  style="background: black; border-color: black; ">
        <h4 class="modal-title"> Please select Membership type </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body text-center" style="background: black;">
        <a href="<?=domain;?>/user/choose_membership/2" class="btn btn-warning btn-block text-white" style="color:white !important;">I want to be a Gold Member</a> <br>
        <a href="<?=domain;?>/user/choose_membership/1" class="btn btn-dark btn-block ">I want to be a Black Member</a>
      </div>

    
    </div>
  </div>
</div>

<?php endif;?>





    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border" style="
    background: <?=$light;?>;
    border-color: <?=$light;?>">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; <?=date("Y");?> <a class="text-bold-800 grey darken-2" href="<?=domain;?>"><?=project_name;?>      </a></span><span class="float-md-right d-none d-lg-block">
        
        <!-- Built By <a href="http://gitstardigital.com" target="_blank">Gitstar Digital</a> -->
      </span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=$asset;?>/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->


    <!-- datatables -->
   <!-- BEGIN: Page Vendor JS-->
    <script src="<?=asset;?>/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/buttons.flash.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/jszip.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/pdfmake.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/vfs_fonts.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/buttons.html5.min.js"></script>
    <script src="<?=asset;?>/vendors/js/tables/buttons.print.min.js"></script>
    <!-- END: Page Vendor JS-->    <!-- datatables -->


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=$asset;?>/vendors/js/extensions/jquery.knob.min.js"></script>
    <script src="<?=$asset;?>/js/scripts/extensions/knob.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/raphael-min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/morris.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="<?=$asset;?>/data/jvector/visitor-data.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/chart.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/extensions/unslider-min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/fonts/simple-line-icons/style.min.css">
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=$asset;?>/js/core/app-menu.min.js"></script>
    <script src="<?=$asset;?>/js/core/app.min.js"></script>
    <script src="<?=$asset;?>/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=$asset;?>/js/scripts/pages/dashboard-analytics.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>