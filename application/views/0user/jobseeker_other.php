<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Dashboard</h3>
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
                     <li><a href="#">home</a></li>
                     <li><a href="#">candidates</a></li>
                     <li class="active-breadcromb"><a href="#">Dashboard</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcromb Area End -->
 
 
<!-- Candidate Dashboard Area Start -->
<section class="candidate-dashboard-area section_70">
   <div class="container">
      <div class="row">
         <?php $this->load->view(USER."jobseeker_left_side"); ?>
         
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  
                  <div class="candidate-single-profile-info">
                     <form>
                        <div class="resume-box">
                           <h3>OTHER DETAILS </h3>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Any specific Role or Requirement you want  :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" ></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Projects/Internships  :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" ></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Particular Talents/Achievements - :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" ></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Awards/Recognition :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" ></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Profile Completeness   :</label>
                                 <span>35%</span>
                              </div>                              
                           </div>

                           
                           
                        </div>
                        
                        <div class="submit-resume">
                           <button type="submit">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
 