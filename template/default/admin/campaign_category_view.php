<?php
$page_title = "";
 include 'includes/header.php';?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php include 'includes/breadcrumb.php';?>

            <h3 class="content-header-title mb-0"><?=$campaign_category->title;?></h3>
          </div>
          
         <!--  <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
              </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="ft-pie-chart"></i></a>
            </div>
          </div> -->
        </div>
        <div class="content-body">

      <section id="video-gallery" class="card">
        <div class="card-header">

          <div class="dropdown" style="display: inline;">
            <button type="button" class="btn btn-dark btn-sm dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-filter"></i>
            </button>
              <div class="dropdown-menu">

            </div>
          </div>

          <h4 class="card-title" style="display: inline;"></h4>


          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
            </div>
        </div>
         <div class="card-content">
          <div class="card-body">

              <table class="table ">
                <thead>
                  <th>SN</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Rows</th>
                  <th>By/Date</th>
                  <th>Action</th>
                </thead>
                <tbody>

                  <?php $i=1;  foreach ($campaigns_categories as $key => $category) :?>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?=$category->title;?></td>
                    <td><small><?=$category->description;?></small></td>
                    <td><?=$category->rows();?></td>
                    <td>
                      <?=$category->admin->fullname;?><br>
                       <small class="badge badge-dark"><?=date("M j Y h:iA", strtotime($category->created_at));?></small>
                     </td>
                    <td>
                      
                      <div class="dropdown">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                          
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" target="_blank" href="<?=$category->AdminViewUrl;?>">
                              <span type='span' class='label label-xs label-primary'>View</span>
                            </a>

                        </div>
                      </div>

                    </td>
                  </tr>
                  <?php endforeach  ;?>
                </tbody>
              </table>
            

              
          </div>
        </div>
      </section>


        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include 'includes/footer.php';?>
