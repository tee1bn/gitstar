 
      <?php include 'header_nav.php' ;?>
      <?php include 'datatable.php' ;?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Registration</h3>
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
                    <h2>Register new user</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<!--                       Add content to the page ...
 --> 
    <form method="post" action="<?=$this->domain?>/admin_save/register_user">

                      <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" id="inputSuccess2" name="name" placeholder="Firstname" type="text" required="">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" id="inputSuccess2" name="surname" placeholder="Surname" type="text" required="">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" id="inputSuccess2" name="username" placeholder="Username" type="text" required="">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>


                        <div class="col-xs-12 form-group has-feedback">
               <input class="form-control has-feedback-left" name="phone" maxlength="11" placeholder="Phone (0812-------)" type="text" required="">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                     
                      <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" name="email" placeholder="Email" type="email">
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>

                       <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" name="password" maxlength="16" placeholder="Password" type="password" required="">
                        <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                      </div> 
                        <div class="col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" name="confirm_password" maxlength="16" placeholder="Confirm Password" type="password" required="">
                        <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    
                    <div class="col-xs-9 form-group has-feedback">
                        <input class="form-control  has-feedback-left" type="submit" value="Add Editor">
                      </div>

                      </form>





                  </div>
                </div>
              </div>
            </div>

























<!-- 
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      Add content to the page ...
                  </div>
                </div>
              </div>
            </div>

 -->




























          </div>
        </div>
        <!-- /page content -->

           <?php include 'footer.php' ;?> 































