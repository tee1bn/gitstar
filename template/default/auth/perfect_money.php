<?php
$page_title = "Perfect Money ";
 include 'includes/header.php';?>


    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php include 'includes/breadcrumb.php';?>

            <h3 class="content-header-title mb-0">Perfect Money </h3>
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
          <h4 class="card-title">Perfect Money </h4>
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
        

        {"live":{"account_id":"2948786","passphrase":"808Q8nz0BzJzVTWFEgZlPHsor","merchant_usd_account":"U24438459","merchant_btc_account":"B23647267"},"test":{"account_id":"93-C2INS","passphrase":"LM==","merchant_usd_account":"e3242","merchant_btc_account":"e3242"},"mode":{"mode":"live","available":1}}

        <form action="https://perfectmoney.is/acct/confirm.asp">
          <div class="form-group">
            <label>Your Perfect Money Login ID (Account ID) e.g 1000</label>
            <input type="" name="AccountID" class="form-control" placeholder="eg 1000" value="2948786">
          </div>

          <div class="form-group">
            <label>Your Perfect Money Account Password</label>
            <input type="" name="PassPhrase" class="form-control" placeholder="eg U12334" value="Tauruscapital123.">
          </div>

          <div class="form-group">
            <label>The Account you want to pay from e.g B12340</label>
            <input type="" name="Payer_Account" class="form-control" placeholder="eg U12334" value="B23647267">
          </div>


          <div class="form-group">
            <input type="" name="Payee_Account" class="form-control" placeholder="Payee_Account" value="B23647267">
            <input type="" name="Amount" class="form-control" placeholder="Amount" value="2">
            <input type="" name="Memo" class="form-control" placeholder="Memo" value="Funding Account">
            <input type="" name="PAYMENT_ID" class="form-control" placeholder="PAYMENT_ID" value="<?=uniqid();?>">
          </div>



          <div class="form-group">
            <button class="btn"> Submit</button>
          </div>



        </form>



      </div>
    </div>
      </section>


    <!--   <section id="video-gallery" class="card">
        <div class="card-header">
          <h4 class="card-title">blank</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
            </div>
        </div>
      </section> -->


        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include 'includes/footer.php';?>
