<?php include 'header_nav.php';?>
<?php include 'datatable.php';?>

<!-- Dropzone.js -->
    <link href="<?php echo $asset;?>dropzone/dist/min/dropzone.min.css" rel="stylesheet">

<style>

  #formdiv{
    text-align: center;
    
  }
  
  #formdiv img{
    width: 300px;
    height: 300px;
}

  
    #formdiv #add_more ,  #formdiv #upload{
    width: 149px;
}

  #formdiv #img{
    width: 40px;
    height: 20px;
    vertical-align: top;
    margin-left: -44px;
}
</style>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Upload Pictures</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

     

      

              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Images gallery</h2>
                    <ul class="nav navbar-right panel_toolbox">
                
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <!-- Add content to the page ... -->
                      
     

             
<?php

include 'image_files.php';
?>


</table>

<div class="row col-md-12">
<div class=" pagination col-md-4">

showing <?php echo "$per_page of $total_files images";?>
</div>
<div class="col-md-8">

<ul class="pagination">


<?php







$back =$actual_page-1;

$next =$actual_page+1;

$domainz = $this->domain.'/'.'admin-media/';

echo"<br/>";
    
if($actual_page>1){
echo"    <li><a href='$domainz$back'><i class='fa fa-chevron-left'></i></a></li>
   ";
}


for($pgnum =1 ; $pgnum<= $pages; $pgnum++ ){

echo ($pgnum==$data['page']) ? "<li  class='active'><a href='$domainz$pgnum'>$pgnum</a></li>" : "<li><a href='$domainz$pgnum'>$pgnum</a></li>";


}
if($actual_page<$pages){

echo"       <li><a href='$domainz$next'><i class='fa fa-chevron-right'></i></a></li>
   ";

}







?>

 
</ul>
</div>
</div>


                  </div>





                </div>
              </div>
            </div>




              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Upload Images</h2>
                    <ul class="nav navbar-right panel_toolbox">
                
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <!-- Add content to the page ... -->
                      

    <p>Drag multiple files to the box below for multi upload or click to select files. </p>

       <form id="adverts" action="<?=$this->domain;?>/admin-upload/upload-pictures" method="post"  class="dropzone">

          </form>



            </div>
            
        </div>




                  </div>





                </div>
              </div>
            </div>


<!--  -->
          </div>
        </div>
        <!-- /page content -->
    
<!-- moda for delete -->



<div id="my_delete_modal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Delete</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Are you sure?</h4>
                          <p>This item will be permanenly deleted with no possibility of restoration.</p>
                        
                        </div>
                        <div class="modal-footer">
                        <a href="#"><button type="button" class="btn btn-default">Yes</button></a>

                          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>

                      </div>
                    </div>
                  </div>
<!-- modal to view media-->
    

<div id="my_media_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Media</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>



  <!-- Dropzone.js -->
    <script src="<?php echo $asset;?>/dropzone/dist/dropzone.js"></script>



          <?php include 'footer.php' ;?>



  </body>
</html>