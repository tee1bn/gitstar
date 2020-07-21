<div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">

              <a href="#" class="site_title"><i class="fa fa-paw"></i><span><b>
              
    <?=$this->name;?>
                  </b></span>


              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=$this->domain;?>/public/img/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, Admin </span>
                <h2 style="text-transform: capitalize;">                  
                    <?=$_SESSION["$this->website.__admin__surname"];?>
                    <?=$_SESSION["$this->website.__admin__name"];?>
<!--                     <?=$this->blogger_name;?>
 -->
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo $this->domain ;?>/admin-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    
                  </li>
                      
            <li><a href="<?php echo $this->domain ;?>/admin-users"><i class="fa fa-group"></i> Users</a>
                    
                  </li>
                      
 <li><a href="<?php echo $this->domain ;?>/admin-media"><i class="fa fa-camera"></i> Media</a>
                    
                  </li>
                     
                      <li class="active"><a><i class="fa fa-group"></i> Business <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                    
<li><a href="<?php echo $this->domain ;?>/admin-newsletter"><i class="fa fa-envelope"></i> Newletters</a>
                    
                  </li>
                      
<li><a href="#"><i class="fa fa-group"></i> Editors</a>
                    
                  </li>
                      
<li><a href="#"><i class="fa fa-group"></i> Stakers</a>
                    
                  </li>
                      
<li><a href="#"><i class="fa fa-group"></i> Sub Admins</a>
                    
                  </li>
                      
                      </ul>
                      </li>


             <li class="active"><a><i class="fa fa-calendar-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: block;">
                    


<li><a href="<?php echo $this->domain ;?>/admin-blog-post"><i class="fa fa-bullhorn"></i> Posts</a>
                    
                  </li>
                      
<li><a href="<?php echo $this->domain ;?>/admin-blog-comments"><i class="fa fa-comments-o"></i> Comments</a>
                    
                  </li>
                      

                  
                  
                    </ul>
                  </li>        
                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?= $this->domain ;?>/admin_auth/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>