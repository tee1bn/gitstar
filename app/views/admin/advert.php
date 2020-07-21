 
<?php 
@session_start();

$asset = $this->domain.'/public/vendors/';

$editor_image_asset =  $this->domain.'/public/files/editors/';

$site_images =$this->domain.'/public/files/site_images/';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?=$this->website;?></title>

<link rel="shortcut icon" href="<?=$site_images; ?>logo.png" />

  </head>

  <body class="nav-sm fixed_footer" style="width:11.69in ; height:16.53in ; background:white;     margin: auto; ">
    <div class="container body">

<!-- sidebar -->
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
           
         <div class="col-xs-5"><span
              style="
   
    margin-top: 2px;
    padding-left: 18px;
    font-size: 24px;
    font-family: geneva;
    font-weight: bold;" 
              ><?=$this->website;?> Telegraph</span> <small>
             
              for week <?=$data['week'];?>, <?=$data['year']?></small></div>

                <div class="pagination col-xs-5" style="padding-bottom: 5px;">
<ul class="pagination hidden-print">

 <li><a href="<?=$this->domain."/home/poolsadvert/".( ($data['page'] ==1)? 1 :$data['page']-1);?>"> 
 Prev</a>
</li>


 

 <?php for ($page=1; $page <= $data['total_no_of_pages'] ; $page++):?>

<li class=" <?=($page==$data['page'])? active :'';?>"><a href="<?=$this->domain."/home/poolsadvert/$page";?>"><?=$page;?></a>
</li>
<?php endfor ;?>





 <li><a href="<?=$this->domain."/home/poolsadvert/".(($data['page'] == $data['total_no_of_pages'])? $data['total_no_of_pages'] :$data['page']+1);?>">
  Next</a>
 </li>
 </ul>
</div>   

 <div class="col-xs-2">
 <a class="hidden-print" href="<?=$this->domain."/public/files/editors/advert_pdf/".$data['year']."_".$data['week'].".pdf";?>">
  <button onclick="" class="btn btn-default pull-right btn-xs hidden-print" style="margin-right: 0px;"><i class="fa fa-download"></i> Get Copy</button></a>
                        </div>
         </nav>
          </div>
        </div>
      <?php include 'datatable.php' ;?>

<style>
.nav-sm .container.body .right_col {
margin-left: 0px; 
}
.nav-sm footer {
 margin-left: 0px;
}
.pagination{
  margin: 0px;
  padding-top: 5px;
  /*float:right ;*/
}
img{
  margin: 0px;
      padding: 0px;

}
</style>
      


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
        
<?php



 foreach ($data['files_per_page'] as  $image):?>


<!-- <a  target="_blank" href="<?=$this->domain."/".$data['directory']."/".$image['image_name'];?>"> -->
<img style="width: 3.70in; height:5.33in;" src="<?=$this->domain."/".$data['directory']."/".$image['image_name'];?>" >
<!-- </a> -->


<?php endforeach; ?>

          </div>
        </div>
        <!-- /page content -->

<script>
  function generate_pdf() {
    dataString = ''

    $.ajax({
      type: "POST",
      url: "<?=$this->domain;?>/generate_pdf/generate/",

      data: dataString,
      cache: false,
      success: function(data) {

alert(data);

        // $("#no_of_likes").html(data['likes']);



      },
      error: function (data) {
        // alert("fail");
      }

      

    });




  }


</script>
          
</div>
</div>

<!-- footer content -->
<footer>
  <div class="pull-right">
    <b>Autosoft</b> Admin developed by <a href="#">tee1bn</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


























