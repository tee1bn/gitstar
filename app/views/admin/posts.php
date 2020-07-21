 
<?php include 'header_nav.php' ;?>
<?php include 'datatable.php' ;?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Posts</h3>
      </div>

      <div class="title_right">
        <div class="col-lg-5 col-sm-5 col-xs-12 form-group pull-right top_search">
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
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add category and Tags</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>

            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
<!--                       Add content to the page ...
-->                  




<form method="post" action="<?php echo $domain;?>saving/category">

  <div class="input-group">
    <input type="text" placeholder='Add a category' name="category" class="form-control" required="">
    <span class="input-group-btn">
      <input class="btn btn-primary" id="inputSuccess2" type="submit" value="Add">
    </span>
  </div>

</form>







</div>
</div>
</div>
</div>


<div class="row">
  <div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Delete category and Tags</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
<!--                       Add content to the page ...
-->                  




<form method='post' action='<?php echo $domain;?>delete/category'>

  <div class='input-group'>
  
    <select class='select2_single form-control' name='category_id' select2-hidden-accessible' tabindex='-1' aria-hidden='true' required="">

    <option>Category</option>

<?php
/*
  $categoryzz = $this->model('site_identity' ,'categories')->all();


              foreach ($categoryzz as $category_) {


        echo"<option value=".$category_->id.">".$category_->category."</option>";

         }
*/      ?>
</select>

    <span class='input-group-btn'>
      <input class='btn btn-danger' id='inputSuccess2' type='submit' value='Delete'>
    </span>
  </div>

</form>



  

</div>
</div>
</div>
</div>


<div class="row">
  <div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Post blogs</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
<!--                       Add content to the page ...
-->                  
<form method="post" action="<?= $this->domain;?>/admin-saves/post">
  <div class="col-md-12 input-group">
    <input class="form-control has-feedback-left" id="inputSuccess2" name="title" placeholder="Post title" type="text" required="">
    <span class="fa fa-chain form-control-feedback left" aria-hidden="true"></span>
  </div>


  <div class="col-md-12 input-group">
    <select class="select2_single form-control select2-hidden-accessible" name="category" tabindex="-1" aria-hidden="true">
      <option>Category</option>

      <?php
              foreach ($categoryzz as $category_) {


        echo"<option value=".$category_->id.">".$category_->category."</option>";

              }
      ?>

    </select>
  </div>



  <div class="col-md-12 input-group">
    <input class="form-control has-feedback-left" id="inputSuccess2"  name="image_path" placeholder="Featured image" type="text" required="">
    <span class="fa fa-picture-o form-control-feedback left" aria-hidden="true"></span>
  </div>


  <div class="col-md-12 input-group">
    <textarea class="form-control  has-feedback-left" id="inputSuccess2" name="content" rows="3" placeholder="Content of post" required=""></textarea>
    <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
  </div>


  <div class="col-md-4 input-group">
    <input class="form-control has-feedback-left" id="inputSuccess2" type="submit" value="Publish">
  </div>
</form>





</div>
</div>
</div>
</div>














<div class="row">


  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
      <h2>View all Posts</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>

        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content table-responsive">


        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>S/N</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Content</th>
                          <th>Created at</th>
                          <th>Action</th>
            </tr>
          </thead>


            <?php
                     
                      $i = 1;

                     foreach ($data['posts'] as $key) {
                 $date =  strtoupper( date("M j, Y", date_timestamp_get($key->created_at)));
                  $content = substr($key->content , 0 , 150) ;

                      echo "
                          <tr>
                          <td>$i</td>
                          <td>$key->title</td>
                          <td>".$key->category->category."</td>
                          <td>$content ...</td>
                          <td>$date</td>
                          <td>
<div class='btn-group btn-group-xs'>
  <button type='button' class='btn btn-primary'  data-toggle='modal' data-target='#edit_post_modal$i'><i class='fa fa-edit'></i></button>
  <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete_post_modal$i'><i class='fa fa-trash'></i></button>
</div>
                          </td>
                          </tr>
                      ";

                      echo "


<div id='delete_post_modal$i' class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>

      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <h4 class='modal-title' id='myModalLabel2'>Delete Post</h4>
      </div>
      <div class='modal-body'>
        <h4>Are you sure?</h4>
        <p>This item will be permanenly deleted with no possibility of restoration.</p>

      </div>
      <div class='modal-footer'>
      <form method='post' action='$domain delete/post'>
      <input type='hidden' value='$key->id' name= 'post_id'/>
        <button type='submit' class='btn btn-default'>Yes</button>
        </form>
        <button type='button' class='btn btn-default' data-dismiss='modal'>No</button>
      </div>

    </div>
  </div>
</div>


<!-- edit posts modal -->



<div id='edit_post_modal$i' class='modal fade bs-example-modal-lg' tabindex='-1' role='dialog' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
    <div class='modal-content'>

      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <h4 class='modal-title' id='myModalLabel2'>Edit Post</h4>
      </div>
      <div class='modal-body'>
       <form method='post' action='$domain update/post'>
       <input name='id' value='$key->id' type='text'>

        <div class='col-md-12 form-group has-feedback'>
          <input class='form-control has-feedback-left' id='inputSuccess2' placeholder='Post title' name='title' value='$key->title' type='text'>
          <span class='fa fa-chain form-control-feedback left' aria-hidden='true'></span>
        </div>


        <div class='col-md-12 form-group has-feedback'>
          <select class='select2_single form-control select2-hidden-accessible' name='category' tabindex='-1' aria-hidden='true'>
            <option>Category</option>";
            $selected = '';
              foreach ($categoryzz as $category_) {
        if( $category_->category == $key->category->category){$selected = 'selected';

      }
        echo "<option value='$category_->id'". $selected."> $category_->category</option>
        ";            $selected = '';

      }
      echo"
                </select>
        </div>



        <div class='col-md-12 form-group has-feedback'>
            <label for='sel2'>Tags (hold shift to select more than one)</label>

        <select multiple id='sel2' class='select2_single form-control select2-hidden-accessible' tabindex='-1' name='tags[]' aria-hidden='true'>
            ";
foreach ($array as $tag) {

              echo'<option value='.$tag->id.'>'.$tag->tags.'</option>
              ';
            }
            
            echo"          </select>


        </div>


        <div class='col-md-12 form-group has-feedback'>
          <input class='form-control has-feedback-left' id='inputSuccess2' placeholder='Featured image' name='featured_image' value='$key->image_path' type='text'>
          <span class='fa fa-picture-o form-control-feedback left' aria-hidden='true'></span>
        </div>


        <div class='col-md-12 form-group has-feedback'>
          <textarea class='form-control  has-feedback-left' id='inputSuccess2' rows='3' placeholder='Content of post' name='content'>$key->content</textarea>
          <span class='fa fa-edit form-control-feedback left' aria-hidden='true'></span>
        </div>

     </div>
      <div class='modal-footer'>
        <input class='btn btn-primary' id='inputSuccess2' type='submit' value='Update'>

        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
      </div>

    </form>

  </div>
</div>
</div>



<!-- edit posts modal -->






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
















</div>
</div>
<!-- /page content -->



<?php include 'footer.php' ;?> 


