                       

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php 
  $invoice = $order->invoice();
;?>

<style>
        table tbody tr:nth-child(even){ 
        background: lightgray !important;
    }

    table tbody tr td , table thead tr td { 
        padding: 5px;

    }

    table tbody tr , table thead tr { 
        line-height: 15px;
    }

    
    table thead td {
     background-color: #88b988a6;
    text-align: center;
}
    </style>                          


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="invoice-title">
                    <h2>
                                <img style="width: 150px;" src="<?=$logo;?>"> 
                                <!-- <span style="position: relative; top: -20px;"> <?=project_name;?></span> -->
                    </h2>
                    
                    <?=CMS::fetch('full_contact');?>

                </div>
                <hr>
                <div class="row">


                  <table class="table" style="width: 100%;">
                      <tbody>
                        <tr>
                          <td style="text-align: left;">
                            <address>
                            <strong></strong><br>
                              Invoice #<?=$invoice['invoice_id'];?><br>
                                Status: <?=$invoice['payment_status'];?><br>
                                Order: <?=$invoice['order_id'];?><br>

                                <strong>Order Date:</strong><br>
                                <?=$order->created_at->toFormattedDateString();?>
                                <br><br>
                            </address>

                          </td>
                          <td style="text-align: right;">
                          </td>
                          <td style="text-align: right;">
                            
                            <address>
                              <?php 
                                  $user = $order->user;
                              ;?>

                                <strong>
                                  <?=$user->fullname;?>
                                 </strong>
                                <br>Phone: 
                                <a href="tel:<?=$user->phone;?>">
                                 <?=$user->phone;?>
                                </a>
                                <br>Email: 
                                <a href="mailto:<?=$user->email;?>">
                                    <?=$user->email;?>
                                </a>
                              
                                <br>Address: 
                                    <?=$user->fullAddress;?>
                                
                            </address>



                            <strong>Generated Date:</strong><br>
                            <?=date("M d, Y");?><br><br>

                          </td>
                        </tr>
                      </tbody>
                  </table>

                </div>

                <hr>


                <div class="row">
                    <div class="col-xs-6">
                     <!--    <address>
                            <strong>Generated Date:</strong><br>
                            <?=date("M d, Y");?><br><br>
                        </address> -->
                    </div>
                    <div class="col-xs-6 text-right">
    <!--                     <address>
                            <strong>Generated Date:</strong><br>
                            March 7, 2014<br><br>
                        </address>
     -->                </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Summary</strong></h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsie">

                          <table class="table table-striped table-bordered" style="width: 100%; border:;">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th style="text-align: left;">Item &amp; Description</th>
                                <th style="text-align: right;">Rate</th>
                                <th style="text-align: right;">Qty</th>
                                <th style="text-align: right;">Amount (<?=$currency;?>)</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($invoice['summary'] as $key => $summary) :?>

                              <tr>
                                <th scope="row">1</th>
                                <td>
                                  <p><?=$summary['item'];?> </p>
                                  <p><small class="text-mute"> <?=$summary['description'];?></small></p>
                                </td>
                                <td style="text-align: right;">
                                  <?=MIS::money_format($summary['rate']);?>
                                </td>
                                <td style="text-align: right;"><?=$summary['qty'];?></td>
                                <td style="text-align: right;">
                                  <?=MIS::money_format($summary['amount'] );?>
                              </td>
                              </tr>

                            <?php endforeach  ;?>
                            </tbody>
                          </table>


                          <div style="width: 40%; float: right;">
                            
                          <table class="table" style="width: 100%; border:;">
                            <tbody>
                              <tr>
                                <td style="text-align: right;">Sub Total</td>
                                <td class="" style="text-align: right;">
                                  <?=$currency;?>
                                <?=MIS::money_format($invoice['subtotal']['subtotal'] );?>
                                </td>
                              </tr>
                            <?php foreach ($invoice['subtotal']['lines'] as $key => $line) :?>
                              <tr>
                                <td style="text-align: right;"><?=$line['name'];?></td>
                                <td class="" style="text-align: right;">
                                  <?=$currency;?>
                                    <?=(MIS::money_format($line['value']));?>
                                </td>
                              </tr>
                            <?php endforeach  ;?>

                              <tr>
                                <td class="text-bold-800" style="text-align: right;">Total</td>
                                <td class="text-bold-800 " style="text-align: right;"> 
                                  <?=$currency;?>
                                  <?=MIS::money_format($invoice['subtotal']['total']);?>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


