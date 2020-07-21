<?php
$page_title = "Transfer History";
include 'includes/header.php';
;?>


<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-6 mb-2">
        <?php include 'includes/breadcrumb.php';?>

        <h3 class="content-header-title mb-0">Transfer History</h3>
      </div>
      <div class="content-header-right col-6">
              <div class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
                 <a class="btn btn-outline-dark" href="Javascript:void(0);">
                       Credit: <?=$currency;?><?=MIS::money_format($records->where('type','credit')->sum('amount'));?>
               </a>
               <a class="btn btn-outline-dark" href="Javascript:void(0);">
                     Debit: <?=$currency;?><?=MIS::money_format($records->where('type','debit')->sum('amount'));?>
             </a>
          </div>
      </div>

        </div>
        <div class="content-body">

          <section id="video-gallery" class="card">
            <div class="card-header">
              <?php include_once 'template/default/composed/filters/auth_wallet.php';?>
              <!-- <h4 class="card-title">Transfer History</h4> -->
              <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
               <?=$note;?>
              </div>
            </div>
            <div class="card-content">


              <div class="card-body table-responsive">

                <table id="myTabl" class="table tabl">
                  <thead>
                    <tr>

                      <th>#ID</th>
                      <th>Date</th>
                      <th>Amt(<?=$currency;?>)</th>
                      <th>Description</th>
                      <th>Type</th>
                      <th>Status</th>
                      <th>*</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php $i=1; foreach ($records as $record):?>
                    <tr>
                      <td><?=$record->id;?></td>
                      <td><span class="badge badge-primary"><?=date("M j, Y h:ia" , strtotime($record->created_at));?></span></td>
                      <td><?=MIS::money_format($record['amount']);?></td>
                      <td><?=$record->comment;?></td>
                      <td><?=($record['displayedType']);?></td>
                      <td><?=($record['displayedStatus']);?></td>
                      <td>


                            <!-- for sender -->
                        <?php if ($record->is_pending() && ($record->type=='debit')) :?>


                        <div class="dropdown">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Action
                          </button>
                          <div class="dropdown-menu">


                          <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                              new ConfirmationDialog('<?=domain;?>/deposits/sender_push_transfer/<?=$record->id;?>/cancelled/<?=$record->name_in_shop;?>/s','This transfer will be cancelled and marked as cancelled?')">
                                      <span type='span' class='label label-xs label-primary'>Decline</span>
                          </a>

                        </div>
                      </div>

                        <?php endif ;?>


                        <!-- for receiver -->
                        <?php if ($record->is_pending() && ($record->type=='credit')) :?>



                        <div class="dropdown">
                          <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Action
                          </button>
                          <div class="dropdown-menu">


                          <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                              new ConfirmationDialog('<?=domain;?>/deposits/push_transfer/<?=$record->id;?>/completed/deposit','This will be accepted and marked as completed?')">
                                      <span type='span' class='label label-xs label-primary'>Accept</span>
                          </a>

                          <a  class="dropdown-item"  href="javascript:void;"  onclick="$confirm_dialog = 
                              new ConfirmationDialog('<?=domain;?>/deposits/push_transfer/<?=$record->id;?>/cancelled/deposit','This will be cancelled marked as cancelled?')">
                                      <span type='span' class='label label-xs label-primary'>Decline</span>
                          </a>

                          </div>

                        </div>
                        <?php endif ;?>


                        
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
