 
      <?php include 'header_nav.php' ;?>
          <?php include 'datatable.php' ;?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Newsletter</h3>
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
                    <h2>Newsletter</h2>
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
                          <th>Email</th>
                          <th>Created at</th>
                          <th>Action</th>
            </tr>
          </thead>


            <?php
                     
                      $i = 1;

                     foreach ($data['newsletter'] as $key):
                 $date =  strtoupper( date("M j, Y", date_timestamp_get($key->created_at)));
                  $content = substr($key->content , 0 , 70) ?>

                      
                          <tr>
                          <td><?=$i;?></td>
                          <td><?=$key->email;?></td>
                          <td><?=$date;?></td>
                          <td>
<div class='btn-group btn-group-xs'>
  <button type='button' class='btn btn-danger' onclick="confirm_delete(<?=$key->id;?> ,'<?=$key->email?>' );" data-toggle='modal' data-target='#delete_newsletter_modal'><i class='fa fa-trash'></i></button>
</div>
                          </td>
                          </tr>
           
                     
                           
                    <?php $i++; endforeach; ?>   
        
                      </tbody>
                    </table>


</div>
</div>
</div>
</div>

   <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Message all subscribers</h2>
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


<form method="post" action="<?php echo $domain ;?>saving/message">


  <div class="col-lg-12 form-group has-feedback">
    <textarea class="form-control  has-feedback-left" name="message" id="inputSuccess2" rows="3" placeholder="Brief content of Message" required=""></textarea>
    <span class="fa fa-edit form-control-feedback left" aria-hidden="true"></span>
  </div>

  <div class="col-lg-4 form-group has-feedback">
    <input class="form-control has-feedback-left" id="inputSuccess2" type="submit" value="Send">
  </div>

</form>





<div id='delete_newsletter_modal' class='modal fade bs-example-modal-sm' tabindex='-1' role='dialog' aria-hidden='true'>
  <div class='modal-dialog modal-sm'>
    <div class='modal-content'>

      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>×</span>
        </button>
        <h4 class='modal-title' id='myModalLabel2'>Delete Newsletter</h4>
      </div>
      <div class='modal-body'>
        <h4>Are you sure?</h4>
        <p><span id='newsletter_email' style="font-weight: bold;"></span> will be permanenly deleted with no possibility of restoration.</p>

      </div>
      <div class='modal-footer'>

        <button type='button' id='confirm_button' class='btn btn-default'>Yes</button>

        <button type='button' class='btn btn-default' data-dismiss='modal'>No</button>
      </div>

    </div>
  </div>
</div>
           



</div>
</div>
</div>
</div>

<script>
  

    function confirm_delete( newsletter_id , email){

 $("#newsletter_email").html(email);
 $("#confirm_button").attr("onclick", "delete_newsletter("+newsletter_id+")" );

    }

    function delete_newsletter(newsletter_id){

  

dataString = "newsletter_id="+newsletter_id;

        $.ajax({
            type: "POST",
            url: "<?=$this->domain;?>/admin-delete/newsletter/",
            data: dataString,
            cache: false,
            success: function(data) {
flash (data['type'] , data['message']);

            },
            error: function (data) {
                // alert("fail");
            }

            

        });


        

    }










</script>



























        <!-- /page content -->
          

          <?php include 'footer.php' ;?>

