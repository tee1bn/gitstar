<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo $admin_img; ?>/admin_images/logo.png" />

    <title><?=$this->website;?> </title>

     <?php





$asset = $this->domain.'/public/vendors/';






      include 'head.php';?>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchr" id="signup"></a>
      <a class="hiddenancor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?php echo $this->domain?>/admin_auth/login">
              <h1>Login </h1>
              <div>
                <input type="text" class="form-control" name="user" placeholder="Username" required="required" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
              </div>
              <div>
                <button onclick="this.submit()" class="btn btn-default submit"> Log in</button>
           </div>

              <div class="clearfix"></div>

              <div class="separator">
                         <div class="clearfix"></div>
                <br />

                <div>
                  <h1> <?=$this->website;?></h1>
                  <p>©2016 All Rights Reserved. <?=$this->website;?> </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
