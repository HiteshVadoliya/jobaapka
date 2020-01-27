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
                           <li class="active-breadcromb"><a href="javascript:;">Login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <section class="jobguru-browse-company-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                <?php /*<center><h2>Sign up as Employer and Jobseeker to be as per signup shown</h2></center> */ ?>
                  
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                        <div class="row choose_signup">                           
                           <div class="col-lg-6 col-md-12 companyBox moreBox" style="display: block;">
                              <div class="single-browse-company">                                 
                                 <h3>
                                 Login as <br /><br />JOBSEEKER/CANDIDATE <br /><br />
                                 <a href="<?= base_url('login/jobseeker'); ?>" class="post-jobs">Create Profile</a>
                                 </h3>
                              </div>
                           </div>
                          <div class="col-lg-6 col-md-12 companyBox moreBox" style="display: block;">
                             <div class="single-browse-company">                                
                                <h3>                                   
                                Login as <br /><br />EMPLOYER/RECRUITER <br /><br />
                                <a href="<?= base_url('login/employer'); ?>" class="post-jobs" >Create Account</a>                              
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