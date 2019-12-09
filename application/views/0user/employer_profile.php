<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>COMPANY DETAILS</h3>
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
                     <li class="active-breadcromb"><a href="#">COMPANY DETAILS</a></li>
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
         <?php $this->load->view(USER."employer_left_side"); ?>
         
         <div class="col-md-12 col-lg-9">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  <div class="candidate-single-profile-info">
                     <div class="single-resume-feild resume-avatar">
                        <div class="resume-image company-resume-image">
                           <img src="<?= FRONT_IMG2 ?>company_page_logo.jpg" alt="resume avatar">
                           <div class="resume-avatar-hover">
                              <div class="resume-avatar-upload">
                                 <p>
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                 </p>
                                 <input type="file">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="candidate-single-profile-info">
                     <form>
                        <div class="resume-box">
                           <h3>company profile</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">Full name :</label>
                                 <input type="text" value="" id="name">
                              </div>
                              <div class="single-input">
                                 <label for="name">MOBILE NUMBER  :</label>
                                 <input type="text" value="" id="name">
                              </div>
                              
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Start">OFFICIAL EMAIL ID :</label>
                                 <input type="text" value="" id="Start">
                              </div>
                              <div class="single-input">
                                 <label for="member">YOUR COMPANY NAME :</label>
                                 <input type="text" value="" id="member">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Location">INDUSTRY :</label>
                                 <select id="contry">
                                    <option>Industry 1</option>
                                    <option>Industry 2</option>
                                    <option>Industry 3</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Location">LOCATION :</label>
                                 <select id="contry">
                                    <option>Location 1</option>
                                    <option>Location 2</option>
                                    <option>Location 3</option>
                                 </select>
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
 