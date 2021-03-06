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
            <div class="tab-content plan_text">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row row--stars">                           
                     <div class="col-lg-12 col-md-12 ">
                          <div class="">
                            <p class="cell">
                              <center><span class="underline underline--stars">WE OFFER <u>UNLIMITED</u> JOB POSTINGS AND <u>UNLIMITED</u> CV DOWNLOADS FOR <u>COMPLETE <?= $plan['period']; ?> MONTHS</u></span></center>
                            </p>
                          </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="tab-content">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-6 col-md-12 companyBox moreBox">
                        <div class="single-browse-company single-browse-company-custom">                                 
                           <h3>
                           <a class="button create_profile_button" href="<?= base_url('signup/employer'); ?>">Create Account</a>
                           </h3>
                        </div>
                     </div>
                    <div class="col-lg-6 col-md-12 companyBox moreBox">
                       <div class="single-browse-company single-browse-company-custom">                                
                          <h3>                                   
                          <a href="<?= base_url('login/'); ?>" class="button login_button" >Signin</a>
                          </h3>
                       </div>                            
                    </div>                           
                  </div>
               </div>
            </div>

            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-12 col-md-12">
                        <div class="single-browse-company single-browse-company-custom" style="background: none;">                                 
                           <h3>
                           <a class="button plan_button " href="javascript:;" data-toggle="modal" data-target="#jobseeker_plan_modal">GROW YOUR BUSINESS WITH US</a>
                           </h3>
                        </div>
                     </div>


                                              
                  </div>
               </div>
            </div>

            
         </div>
      </div>
   </div>
</section>


<div class="modal fade" id="jobseeker_plan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Most affordable and unique</h5>
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
                                <h3 class="title">Most affordable and unique <br/><small><?= $plan['period']; ?> month plan</small></h3>
                            </div>
                            <div class="inner-content">
                                <div class="price-value">
                                    <span class="currency"><?= CURR_SYMBOL; ?></span>
                                    <span class="amount"><?= $plan['title']; ?></span>
                                    <span class="duration">Per Month</span>
                                </div>
                                <ul>
                                    <li>Unlimited CV <br/>Download/Access</li>
                                    <li>Post unlimited jobs</li>
                                    <li>One Free technology consulting <br/>for your business issues</li>
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

<script type="text/javascript">
  $('#jobseeker_plan_modal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
</script>