<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>WELCOME TO JOBAAPKA</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcromb-box-pagin my_breadcum2">
      <ul>
         <li>INSTANT ACCOUNT CREATION WITH ONLY MINIMUM INFO</li>
         <li>&nbsp;</li>
         <li>FREE REGISTRATION TO SEARCH RIGHT JOBS</li>
      </ul>
   </div>
   <br><br>
   <div class="breadcromb-box-pagin my_breadcum3">
      <ul>
         <li></li>
         <li>LOWEST PRICE SERVICES</li>
         <li></li>
      </ul>
   </div>
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">home</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcromb Area End -->
       
       
<section class="jobguru-browse-company-area section_70 without_login">
   <div class="container">
      <div class="row">

         
         <div class="col-md-12">
          <!-- <center><h2>APPLYING FOR ALL JOBS ANYTIME AND EVERYTIME <u>IS ALWAYS FREE</u></h2></center> -->

            <div class="tab-content plan_text">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row row--stars">                           
                     <div class="col-lg-12 col-md-12 ">
                          <div class="">
                            <p class="cell">
                              <center><span class="underline underline--stars">APPLYING FOR ALL JOBS ANYTIME AND EVERYTIME <u>IS ALWAYS FREE</u></span></center>
                            </p>
                          </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php if($_SESSION[PREFIX.'type']!='jobseeker') { ?>
            <div class="tab-content">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-6 col-md-12 companyBox moreBox">
                        <div class="single-browse-company single-browse-company-custom">                                 
                           <h3>
                           <!-- <a href="<?= base_url('signup/jobseeker'); ?>" class="post-jobs">Create profile</a> -->
                           <a class="button create_profile_button" href="<?= base_url('signup/jobseeker'); ?>">Create Profile</a>
                           </h3>
                        </div>
                     </div>
                    <div class="col-lg-6 col-md-12 companyBox moreBox">
                       <div class="single-browse-company single-browse-company-custom">                                
                          <h3>                                   
                          <!-- <a href="<?= base_url('login/'); ?>" class="post-jobs" >Sign in</a>                               -->
                          <a href="<?= base_url('login/'); ?>" class="button login_button" >Signin</a>                              
                          </h3>
                       </div>                            
                    </div>                           
                  </div>
               </div>
            </div>
            <?php } ?>

            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-12 col-md-12">
                        <div class="single-browse-company single-browse-company-custom" style="background: none;">                                 
                           <h3>
                           <a class="button plan_button section_1_click" href="javascript:;" >CHECK OUT OUR PREMIUM FEATURES</a>
                           </h3>
                        </div>
                     </div>


                                              
                  </div>
               </div>
            </div>

            <?php
            $style = "";
            if(isset($_SESSION) && $_SESSION[PREFIX.'type']=='jobseeker') {
              $style = "display:block";
            }
            ?>

            <div class="tab-content" id="section_1_click" style="<?= $style ?>";>
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-md-6 col-md-offset-2 companyBox moreBox" style="margin: 0 auto;">
                        <div class="single-browse-company single-browse-company-custom">
                          <table class="table table-responsive plan_table_1">
                              <tr>
                                <td><h4>Complete job care plan <br><?= $plan['title']; ?> Per Month</h4></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td class="plan_1_text">CV Writing</td>
                                <td><i class="fa fa-check icon"></i></td>
                              </tr>
                              <tr>
                                <td class="plan_1_text">Interview Preparation</td>
                                <td><i class="fa fa-check icon"></i></td>
                              </tr>
                              <tr>
                                <td class="plan_1_text">New Job or Personal Job <br>assistance for <?= $plan['period']; ?> months <br>after you lose a job</td>
                                <td><i class="fa fa-check icon"></i></td>
                              </tr>
                              <tr>
                                <td class="single-login-field">
                                  <a href="<?= base_url('jobseeker_plan'); ?>" class="plan_know_more" type="button" name="" value="know more">know how</a>
                                  </td>
                                <td></td>
                              </tr>
                          </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">
  $(".section_1_click").on("click",function(){
    $("#section_1_click").fadeToggle( "slow", "linear" );;
  });
</script>
<?php /*
<div class="modal fade" id="jobseeker_plan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complete job care plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body plan-modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="pricingTable">
                        <div class="pricing-content">
                            <div class="pricingTable-header">
                                <h3 class="title">Complete job care plan</h3>
                            </div>
                            <div class="inner-content">
                                <div class="price-value">
                                    <span class="currency"><?= CURR_SYMBOL; ?></span>
                                    <span class="amount"><?= $plan['title']; ?></span>
                                    <span class="duration">Per Month</span>
                                </div>
                                <ul>
                                    <li>CV Writing</li>
                                    <li>Interview Preparation</li>
                                    <li>New Job or Personal Job <br>assistance for <?= $plan['period']; ?> months <br>after you lose a job</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricingTable-signup">
                            <a href="javascript:;">Buy Now</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
*/ ?>

<script type="text/javascript">
  $('#jobseeker_plan_modal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>