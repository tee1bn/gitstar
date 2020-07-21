<?php
$page_title = "Your Packs";
include 'includes/header.php';
;?>


<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <?php include 'includes/breadcrumb.php';?>

        <h3 class="content-header-title mb-0">Your Packs</h3>
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
            <!-- <div class="card-header">
              <h4 class="card-title">Your Packs</h4>
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div> -->
            <div class="card-content">


              <div class="card-body table-responsive">

                <table id="myTable" class="table table-stripe">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>Name</th>
                      <th>Invested(<?=$currency;?>)</th>
                      <th>Returned (<?=$currency;?>)</th>
                      <th>Target (<?=$currency;?>)</th>
                      <th>Maturity</th>
                      <th>Status</th>
                      <th>Purchase Date  <br> Last Paid Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($packs as $pack):
                    $detail = $pack->ExtraDetailArray;
                    ?>
                    <tr>
                      <td><?=$pack->id;?></td>
                      <td><?=$detail['investment']['name'];?></td>
                      <td><?=MIS::money_format($detail['capital']);?></td>
                      <td><?=MIS::money_format($pack['Returns']);?></td>
                      <td><?=MIS::money_format($detail['total_worth']);?></td>
                      <td><?=$pack->maturity;?>%</td>
                      <td><?=$pack->roiStatus;?></td>
                      <td>
                        <span class="badge badge-dark"><?=date("M j, Y h:ia" , strtotime($pack->paid_at));?></span>
                        <br>
                        <span class="badge badge-primary"><?=date("M j, Y h:ia" , strtotime($detail['last_pay_date']));?></span>
                      </td>
                      <td>
                        <a href="<?=domain;?>/user/investment_detail/<?=$pack->id;?>" class ="btn-sm btn btn-dark">Detail</a>
                      </td>
                      
                    </tr>
                  <?php endforeach ;?>

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
