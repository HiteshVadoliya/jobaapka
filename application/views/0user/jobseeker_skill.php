 
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
                           <h3>CV, PROFILE AND SKILLS</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Upload CV * :</label>
                                 <input type="file" id="Phone">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Profile Title :</label>
                                 <input type="text" value="" id="Email">
                              </div>
                           </div>
                           <div class="single-resume-feild s">
                              <div class="single-input">
                                 <label for="Phone">Skills :</label>
                                 <textarea></textarea>
                              </div>
                           </div>

                           <label for="Phone">Experience :</label>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Year :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Month :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option selected>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    
                                 </select>
                              </div>
                           </div>


                           <div class="single-resume-feild ">
                              <div class="single-input">
                                 <label for="Phone">Designation level :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                 </select>
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-resume-feild ">
                                    <label for="Email">Job Type :</label><br>
                                    <input type="checkbox" name=""> Type 1
                                    <input type="checkbox" name=""> Type 2
                                    <input type="checkbox" name=""> Type 3
                                    <input type="checkbox" name=""> Type 4
                              </div>
                           </div>

                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-resume-feild ">
                                    <label for="Email">Salary :</label><br>
                                    <input type="checkbox" name=""> 5000
                                    <input type="checkbox" name=""> 10000
                                    <input type="checkbox" name=""> 15000
                                    <input type="checkbox" name=""> 20000
                              </div>
                           </div>

                           

                           <!-- <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Salary:</label>
                                 <input type="text" value="+88-123-4467-9" id="Phone">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Email:</label>
                                 <input type="text" value="demo@mail.com" id="Email">
                              </div>
                           </div> -->


                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Current Job Function  * :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Interested Locations :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                 </select>
                              </div>
                           </div>


                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Interested Industries  :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Preferred Job categories  :</label>
                                 <select id="contry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
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
 