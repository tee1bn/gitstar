<?php
$icon = "$asset/images/logo/icons";

;?>
<style>
  .nav-icon{
    height: 35px;
    width: 35px;
  }
  .side-icon{
    height: 25px;
    width: 25px;
    object-fit: cover;
  }
</style>

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

      <li class=" navigation-header menu-item"><span>GENERAL</span><i class="ft-droplet ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="UI"></i>
      </li>          
      
      <li>
        <a class="menu-item" href="<?=domain;?>/user/dashboard">                  
          <img class="side-icon" src="<?=$icon;?>/13.png"> Dashboard</a>
        </li>



        <li class=" nav-item">
          <a href="#">
            <img class="side-icon" src="<?=$icon;?>/15.png">
            <!-- <i class="fa fa-list"></i> -->
            <span class="menu-title" data-i18n="">Transactions</span></a>
            <ul class="menu-content">
             <li><a class="menu-item" href="<?=domain;?>/user/make-deposit"> Make Deposit</a>
              
               <li><a class="menu-item" href="<?=domain;?>/user/user-transfers">User Transfer</a>
                 <li><a class="menu-item" href="<?=domain;?>/user/make-withdrawal">Make Withdrawal</a>
                 </li>
               </ul>
             </li> 



             <li class=" nav-item"><a href="#">
              <!-- <i class="fa fa-briefcase"></i> -->
              <img class="side-icon" src="<?=$icon;?>/2.png">

              <span class="menu-title" data-i18n="">Purchases</span></a>
              <ul class="menu-content">
                <li><a class="menu-item" href="<?=domain;?>/user/purchase-investment"> Packages</a>
                <li><a class="menu-item" href="<?=domain;?>/user/products"> Products</a>
                  
                  <li><a class="menu-item" href="<?=domain;?>/user/your_packs">Your Packs</a>
                  </li>
                </ul>
              </li> 
              
              <li class=" nav-item"><a href="#">
                <!-- <i class="fa fa-credit-card"></i> -->
                <img class="side-icon" src="<?=$icon;?>/trucash.png">
                <span class="menu-title" data-i18n="">TruCash Wallet</span></a>

                <ul class="menu-content">
                  <li><a class="menu-item" href="<?=domain;?>/user/hot-wallet"> Hot Wallet</a>
                    
                    <li><a class="menu-item" href="<?=domain;?>/user/cold-wallet">Cold Wallet</a>
                    </li>
                  </ul>
                </li> 
                


                <li class=" nav-item"><a href="#"><i class="fa fa-sitemap"></i><span class="menu-title" data-i18n="">Referral Program</span></a>
                 <ul class="menu-content">
                   <!-- <li><a class="menu-item" href="<?=domain;?>/genealogy/placement_list"> List</a> -->
                     <li><a class="menu-item" href="<?=domain;?>/genealogy/placement_list/<?=$auth->username;?>/1/placement/1">Direct Referral</a></li>
                     <li><a class="menu-item" href="<?=domain;?>/genealogy/placement/<?=$auth->username;?>/binary/2">Binary Tree</a>

                     </li>

                     <li><a class="menu-item" href="<?=domain;?>/user/direct-ranks">Direct Ranks</a>
                     </li>
<!-- 
                   <li><a class="menu-item" href="<?=domain;?>/genealogy/direct-ranks">Other Bonus etc</a>
                   </li> -->

                   

                 </ul>
               </li>

               <li class=" nav-item"><a href="#"><i class="ft-clock"></i><span class="menu-title" data-i18n="">History</span></a>
                 <ul class="menu-content">

                  <li><a class="menu-item" href="<?=domain;?>/user/trucash-purchase-history"> Trucash Purchase</a>

                  <li><a class="menu-item" href="<?=domain;?>/user/commission-history"> Commission History</a>

                  <li><a class="menu-item" href="<?=domain;?>/user/transfer-history"> Transfer History</a>

                  <li><a class="menu-item" href="<?=domain;?>/user/payout-wallet"> Payout Wallet</a>

                    
                    <li><a class="menu-item" href="<?=domain;?>/user/withdrawals">Withdrawals</a>
                    </li>

                    <li><a class="menu-item" href="<?=domain;?>/user/invoices">Invoices</a>
                    </li>

                    <li><a class="menu-item" href="<?=domain;?>/user/deposit_orders_history">Order History</a>
                    </li>

                    

                  </ul>
                </li> 


                <li class=" nav-item"><a href="#"><i class="ft-folder"></i><span class="menu-title" data-i18n="">
                Resources & Downloads</span></a>
                <ul class="menu-content">

                  <li><a class="menu-item" href="<?=domain;?>/user/resources/business-presentations"> Business Presentations</a>

                    
                    <li><a class="menu-item" href="<?=domain;?>/user/resources/tutorials">Tutorials</a>
                    </li>

                    <li><a class="menu-item" href="<?=domain;?>/user/resources/promotional-items">Promotional Items</a>
                    </li>

                    <li><a class="menu-item" href="<?=domain;?>/user/resources/digital-marketing">Digital Marketing</a>
                    </li>

                    <li><a class="menu-item" href="<?=domain;?>/user/faqs">FAQ</a>
                    </li>            
                  </ul>
                </li> 


                <li class=" nav-item"><a href="#"><i class="ft-user"></i><span class="menu-title" data-i18n="">
                My Account</span></a>
                <ul class="menu-content">

                  <li><a class="menu-item" href="<?=domain;?>/user/account-plan"> Account Plan</a>

                    <li><a class="menu-item" href="<?=domain;?>/user/profile"> My Profile</a>

                      
                     <!--  <li>
                        <a class="menu-item" href="<?=domain;?>/user/two-factor-authentication">2FA 
                         <span class="float-right">
                           
                           <?=$auth->TwofaDisplay;?>
                         </span>
                       </a>
                     </li> -->

                     <li><a class="menu-item" href="<?=domain;?>/user/my-wallet">My Wallet</a>
                     </li>

                     <li><a class="menu-item" href="<?=domain;?>/user/change-password">Change Password</a>
                     </li>

                   </li>            
                 </ul>
               </li> 



               <li class=" nav-item"><a href="#">                
                <img class="side-icon" src="<?=$icon;?>/support.png">
                <span class="menu-title" data-i18n="">Support</span></a>
                <ul class="menu-content">
                  <li><a class="menu-item" href="<?=domain;?>/user/support"> Support Tickets</a>
                    <li><a class="menu-item" href="<?=domain;?>/user/contact-us"> Contact us</a>
                      <!-- <li><a class="menu-item" href="<?=domain;?>/user/broadcast">News</a></li> -->
                      
                    </ul> 
                  </li>

<!-- 

              <li>
              <a class="menu-item" href="<?=domain;?>/user/company"><i class="fa fa-building-o"></i> My Company</a>
            </li>

         


              <li>
                <a class="menu-item" href="<?=domain;?>/user/earnings"><i class="icon-wallet"></i> Wallet</a>
              </li>


              <li>
                <a class="menu-item" href="<?=domain;?>/user/documents"><i class="fa fa-folder"></i> Documents</a>
              </li>

          


          <li class=" navigation-header"><span>COMMUNICATION</span><i class="ft-droplet ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="UI"></i>
          </li>
              
            <li><a class="menu-item" href="<?=domain;?>/user/testimony"><i class="fa fa-certificate"></i>Testimonials</a></li>

            <li><a class="menu-item" href="<?=domain;?>/user/language"><i class="fa fa-lists"></i>Language</a></li>

            <li><a class="menu-item" href="content-grid.html"><i class="fa fa-certificate"></i>Support</a></li>




          <li class=" nav-item"><a href="#"><i class="fa fa-certificate"></i><span class="menu-title" data-i18n="">Testimonial</span></a>
            <ul class="menu-content">
              <li><a class="menu-item" href="content-typography.html">View Testimonials</a>
        
              <li><a class="menu-item" href="content-helper-classes.html">Helper classes</a>
              </li>
            </ul>
          </li> -->
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
