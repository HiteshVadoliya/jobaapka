 
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
         <?php $this->load->view(USER."jobseeker_left_side.php"); ?>
         
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  
                  <div class="candidate-single-profile-info">
                     <form>
                        <div class="resume-box">
                           <h3>Contact Information</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Phone:</label>
                                 <input type="text" value="+88-123-4467-9" id="Phone">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Email:</label>
                                 <input type="text" value="demo@mail.com" id="Email">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="contry">contry:</label>
                                 <select id="contry">
                                    <option>Arab Amirats</option>
                                    <option>America</option>
                                    <option>Netherlands</option>
                                    <option>Russia</option>
                                    <option selected>Bangladesh</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Brazil</option>
                                    <option>Africa</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="City">City:</label>
                                 <input type="text" value="Dhaka" id="City">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Zip">Zip:</label>
                                 <input type="text" value="6100" id="Zip">
                              </div>
                              <div class="single-input">
                                 <label for="Address22">Address:</label>
                                 <input type="text" value="New york city,22/A Street,01" id="Address22">
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
 