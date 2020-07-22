<?php
$page_title = "Withdrawals";
include 'includes/header.php';
;?>


<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-6 mb-2">
        <?php include 'includes/breadcrumb.php';?>

        <h3 class="content-header-title mb-0">Withdrawals</h3>
      </div>

          <div class="content-header-right col-6">
            <small class="float-right"><?=$note;?></small>
            <div class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
            </div>
          </div>
        </div>
        <div class="content-body">

          <section id="video-gallery" class="card">
            <div class="card-header">
              <?php include_once 'template/default/composed/filters/withdrawals.php';?>

              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                  <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                  <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-content">


              <div class="card-body table-responsive">

                <table id="myTabl" class="table table-striped">
                  <thead>
                    <tr>
                      <th>#ID</th>
                      <th>User</th>
                      <th class="text-right">Amount<br>- Fee(<?=$currency;?>)<br>Payable</th>
                      <!-- <th>Payable(<?=$currency;?>)</th> -->
                      <th>Method</th>
                      <th>Status<br>
                      Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($withdrawals as $withdrawal):
                    $detail = $withdrawal->MethodDetailsArray;
                    ?>
                    <tr>
                      <td><?=$withdrawal->id;?></td>
                      <td><?=$withdrawal->user->DropSelfLink;?></td>
                      <td class="text-right"><?=MIS::money_format($withdrawal['amount']);?><br>-<?=MIS::money_format($withdrawal['fee']);?>
                      <hr><?=MIS::money_format($withdrawal['AmountToPay']);?></td>
                      <td>
                        <?=$withdrawal->withdrawal_method->method;?>
                        <?=$withdrawal->withdrawalDetails;?>
                      </td>
                      <td><?=$withdrawal->DisplayStatus;?>
                      <span class="badge badge-primary"><?=date("M j, Y h:ia" , strtotime($withdrawal->created_at));?></span></td>
                      <td>

                        <div class="dropdown">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Action
                          </button>
                          <div class="dropdown-menu">

                              <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                                  new ConfirmationDialog('<?=domain;?>/withrawals/push/<?=$withdrawal->id;?>/pending','This will be marked as pending?')">
                                          <span type='span' class='label label-xs label-primary'>Pend</span>
                              </a>

                              <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                                  new ConfirmationDialog('<?=domain;?>/withrawals/push/<?=$withdrawal->id;?>/completed','This will be marked as completed ?')">
                                          <span type='span' class='label label-xs label-primary'>Complete</span>
                              </a>
                              <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                                  new ConfirmationDialog('<?=domain;?>/withrawals/push/<?=$withdrawal->id;?>/declined','This will be marked as declined?')">
                                          <span type='span' class='label label-xs label-primary'>Decline</span>
                              </a>


                           <!--    <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                                  new ConfirmationDialog('<?=domain;?>/withrawals/process/<?=$withdrawal->id;?>/livepay','This will automatically  process with Livepay.io ?')">
                                          <span type='span' class='label label-xs label-primary'>Process with LivePay</span>
                              </a> -->



                          </div>
                        </div>


                        
                      </td>
                      
                    </tr>
                  <?php endforeach ;?>

                </tbody>
              </table>

            </div>

          </div>
        </section>

       
        <ul class="pagination">
            <?= $this->pagination_links($data, $per_page);?>
        </ul>

      </div>
    </div>
  </div>
  <!-- END: Content-->

  <?php include 'includes/footer.php';?>
