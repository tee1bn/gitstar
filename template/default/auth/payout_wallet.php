<?php
$page_title = "Payout Wallet";
include 'includes/header.php';
;?>


<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-6 mb-2">
        <?php include 'includes/breadcrumb.php';?>

        <h3 class="content-header-title mb-0">Payout Wallet</h3>
      </div>
      <div class="content-header-right col-6">
              <div class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
                <a class="btn btn-outline-primary" href="Javascript:void(0);">
                      Current Bal: <?=$currency;?><?=MIS::money_format($cold_wallet_balance);?>
              </a>
                <a class="btn btn-outline-primary" href="Javascript:void(0);">
                      Sub Total: <?=$currency;?><?=MIS::money_format($records->sum('amount'));?>
              </a>
          </div>
      </div>

        </div>
        <div class="content-body">

          <section id="video-gallery" class="card">
            <div class="card-header">
              <?php include_once 'template/default/composed/filters/auth_wallet.php';?>
              <!-- <h4 class="card-title">Payout Wallet</h4> -->
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

                <table id="myTabl" class="table table-stripe">
                  <thead>
                    <tr>

                      <th>#ID</th>
                      <th>Date <br> Clearance</th>
                      <th>Commision Amount(<?=$currency;?>)</th>
                      <th>Token Amount (<?=tch;?>)</th>
                      <th>Token Price (1<?=tch;?>)</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php foreach ($records as $record):?>
                    <tr>
                      <td><?=$record->id;?></td>
                      <td><span class="badge badge-primary"><?=date("M j, Y h:ia" , strtotime($record->created_at));?></span><br>
                        <span class="badge badge-secondary"><?=date("M j, Y h:ia" , strtotime($record->paid_at));?></span>
                      </td>
                      <td><?=MIS::money_format($record['amount']);?><?=$record->displayedType;?></td>
                      <td><?=MIS::money_format($record['TokenAmount']);?></td>
                      <td><?=($trucash_exchange);?><?=($currency);?></td>
                      <td><?=$record->comment;?></td>
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
