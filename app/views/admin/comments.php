 
      <?php include 'header_nav.php' ;?>
      <?php include 'datatable.php' ;?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Comments</h3>
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
                    <h2>Comments</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">





                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                          <tr>
              <th>S/N</th>
                          <th>Name</th>                          
                          <th>Email</th>
                          <th>Comment</th>  
                          <th>Attached Post</th>

                         <th>Created at</th>
                          <th>Approval</th>
            </tr>
          </thead>


            <?php
                     
                      $i = 1;

                     foreach ($data['comments'] as $key) {


if($key->status == 1){
  
     $approve =" <button type='button' class='btn btn-success'><i class='fa fa-check'></i></button>";
}else{
  $approve ="  <button type='button' class='btn btn-warning'><i class='fa fa-times'></i></button>";
}
                 $date =  strtoupper( date("M j, Y", date_timestamp_get($key->created_at)));
                  $content = substr($key->content , 0 , 70) ;

                      echo "
                          <tr>
                          <td>$i</td>
                          <td>$key->name</td>
                          <td>$key->email</td>
                          <td>$content ...</td>
                          <td>".$key->post->title."</td>

                          <td>$date</td>
                          <td>

<div class='btn-group btn-group-xs'>
$approve
  <button type='button' class='btn btn-danger'  data-toggle='modal' data-target='#delete_comment_modal$i'><i class='fa fa-trash'></i></button>
</div>
                          </td>
                          </tr>



<div id='delete_comment_modal$i' class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>

      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <h4 class='modal-title' id='myModalLabel2'>Delete Comment</h4>
      </div>
      <div class='modal-body'>
        <h4>Are you sure?</h4>
        <p>This item will be permanenly deleted with no possibility of restoration.</p>

      </div>
      <div class='modal-footer'>
<form method='post' action='$domain delete/comment'>
      <input type='hidden' value='$key->id' name= 'comment_id'/>
        <button type='submit' class='btn btn-default'>Yes</button>
        </form>
        <button type='button' class='btn btn-default' data-dismiss='modal'>No</button>
      </div>

    </div>
  </div>
</div>

                      ";


                      $i++ ;
                           }
                     ?>   
        
                      </tbody>
                    </table>

















                  </div>
                </div>
              </div>
            </div>
        
        <!-- /page content -->



           <?php include 'footer.php' ;?> 































