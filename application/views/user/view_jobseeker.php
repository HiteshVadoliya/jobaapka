Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Profile</h3>
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
                     <li class="active-breadcromb"><a href="javascript:;">Profile</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcromb Area End -->
 
 
<!-- Submit Resume Area Start -->
<section class="jobguru-submit-resume-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="submit-resume-box">
               <form>
                  <div class="resume-box">
                     <?php
                     $img_src = base_url().IMG_PROFILE.'author.jpg';
                     if($jobseeker_data['img_src']!="") {
                       if(file_exists(IMG_PROFILE.$jobseeker_data['img_src'])) {
                         $img_src = base_url().IMG_PROFILE.$jobseeker_data['img_src'];
                       } 
                     }
                     ?>
                     <div class="single-resume-feild resume-avatar">
                        <div class="resume-image">
                           <img src="<?= $img_src ?>" alt="<?= $jobseeker_data['fname'] ?>" />
                           <div class="resume-avatar-hover">
                                 
                           </div>
                        </div>
                     </div>
                     <h3>Personal Information</h3>
                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="name">Name:</label>
                           <input type="text" value="<?= $jobseeker_data['fname']; ?>" readonly>
                        </div>
                        <div class="single-input">
                           <label for="p_title">Email ID:</label>
                           <input type="text" value="<?= $jobseeker_data['email']; ?>" readonly>
                        </div>
                     </div>

                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="name">Profile Title:</label>
                           <input type="text" value="<?= $skill['title']; ?>" readonly>
                        </div>
                        
                     </div>
                    
                     
                     <div class="single-resume-feild feild-flex-2" >
                        <div class="single-input">
                           <label for="Phone">Year :</label>
                           <select name="exp_year" id="exp_year" disabled="">
                           <option value="">Experience in years</option>
                           <?php
                           if(isset($collection['exp_year']) && !empty($collection['exp_year']))
                           {
                             $exp_year = $collection['exp_year'];
                             $selected_year = "";
                             foreach ($exp_year as $e_key => $e_value) {
                                $selected_year = ($skill['exp_year']==$e_key) ? 'selected' : '';
                               ?>
                               <option value="<?= $e_key ?>" <?= $selected_year ?> ><?= $e_value; ?></option>
                               <?php
                             }
                           }
                           ?>
                           </select>
                        </div>
                        <div class="single-input">
                           <label for="Email">Month :</label>
                           <select name="exp_month" id="exp_month" disabled="">
                              <option value="">Experience in month</option>
                              <?php
                              if(isset($collection['exp_month']) && !empty($collection['exp_month']))
                              {
                                $exp_month = $collection['exp_month'];
                                foreach ($exp_month as $m_key => $m_value) {
                                  $selected_month = ($skill['exp_month']==$m_key) ? 'selected' : '';
                                  ?>
                                  <option value="<?= $m_value ?>" <?= $selected_month; ?> ><?= $m_value; ?></option>
                                  <?php
                                }
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <!-- <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="Email">NUMBER:</label>
                           <p><?= $jobseeker_data['mobile']; ?></p>
                        </div>
                        <div class="single-input">
                           <label for="Phone">City:</label>
                           <p><?= $jobseeker_data['city'] ?></p>
                        </div>
                     </div> -->

                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="name">Designation level:</label>
                           <?php
                           if(isset($collection['designation_level']) && !empty($collection['designation_level']))
                           {
                             $designation_level = $collection['designation_level'];
                             foreach ($designation_level as $d_key => $d_value) {
                               $selected_des = $this->HWT->hwt_selected( $d_value['id'], $skill['designation']);
                               if($selected_des) {

                                  ?>
                                  <option value="<?= $d_value['id'] ?>" <?= $selected_des ?> ><?= $d_value['title']; ?></option>
                                  <?php
                               }
                             }
                           }
                           ?>
                        </div>
                        <div class="single-input">
                           <label for="p_title">Job Type:</label>
                           <?php
                           if(isset($collection['job_type']) && !empty($collection['job_type']))
                           {
                             $job_type = $collection['job_type'];
                             $selected_type = "";
                             foreach ($job_type as $job_key => $job_value) {
                               $selected_type = $this->HWT->hwt_checked( $job_value['id'], $skill['job_type']);
                               if($selected_type) {
                                 ?>
                                 <input type="checkbox" name="job_type[]" <?= $selected_type; ?> value="<?= $job_value['id'] ?>"> <?= $job_value['title']; ?>
                                 <?php
                               }
                               ?>
                               
                               
                               <?php
                             }
                           }
                           ?>
                        </div>
                     </div>


                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="name">Salary:</label>
                           <?php
                           if(isset($collection['salary']) && !empty($collection['salary']))
                           {
                             $salary = $collection['salary'];
                             $selected_sal = "";
                             foreach ($salary as $job_key => $salary_value) {
                               $selected_sal = $this->HWT->hwt_checked( $salary_value['id'], $skill['salary']);
                               if($selected_sal) {
                                  ?>
                                  <input type="checkbox" name="salary[]" <?= $selected_sal ?> value="<?= $salary_value['id'] ?>"> <?= $salary_value['title']; ?>
                                  <?php
                               }
                             }
                           }
                           ?>
                        </div>
                        <div class="single-input">
                           <label for="p_title">Current Job Function:</label>
                           <?php
                           if(isset($collection['job_function']) && !empty($collection['job_function']))
                           {
                             $job_function = $collection['job_function'];
                             foreach ($job_function as $j_key => $j_value) {
                               $selected_job = $this->HWT->hwt_selected( $j_value['id'], $skill['job_function']);
                               if($selected_job) {
                                  ?>
                                  <option value="<?= $j_value['id'] ?>" <?= $selected_job ?> ><?= $j_value['title']; ?></option>
                                  <?php
                               }
                             }
                           }
                           ?>
                        </div>
                     </div>

                     <?php
                     $img_src_cv = "";
                     if($skill['img_src']!="") {
                       if(file_exists(IMG_PROFILE.$skill['img_src'])) {
                         $img_src_cv = base_url().IMG_PROFILE.$skill['img_src'];
                       } 
                     }
                     if($img_src_cv!='') {
                        ?>
                           <div class="submit-resume">
                              <a href="<?= $img_src_cv ?>" class="btn btn-primary">Download Resume</a>
                           </div>
                        <?php
                     } else {
                        ?>
                        <center>CV not available</center>
                        <?php
                     }
                     ?>
                     
                  </div>
                  <?php /*
                  <div class="resume-box">
                     <h3>Education</h3>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="Degree">Degree:</label>
                           <input type="text" placeholder="Degree's Title" id="Degree">
                        </div>
                     </div>
                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="datepicker_form">From:</label>
                           <input type="text" placeholder="02.10.2015" id="datepicker_form" class="datepicker">
                        </div>
                        <div class="single-input">
                           <label for="datepicker_to">To:</label>
                           <input type="text" placeholder="06.11.2017" id="datepicker_to" class="datepicker">
                        </div>
                     </div>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="Institute"> Institute:</label>
                           <input type="text" placeholder="Institution Name" id="Institute">
                        </div>
                     </div>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="edu_info">Additional Information: <span>(optional)</span></label>
                           <textarea id="edu_info" placeholder="Education Experience Brief"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="resume-box">
                     <h3>Work Experience</h3>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="j_post">Job Post:</label>
                           <input type="text" placeholder="Job Post Title" id="j_post">
                        </div>
                     </div>
                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="datepicker_form2">From:</label>
                           <input type="text" placeholder="02-10-2015" id="datepicker_form2" class="datepicker">
                        </div>
                        <div class="single-input">
                           <label for="datepicker_to2">To:</label>
                           <input type="text" placeholder="06-11-2017" id="datepicker_to2" class="datepicker">
                        </div>
                     </div>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="Company"> Company:</label>
                           <input type="text" placeholder="Company Name" id="Company">
                        </div>
                     </div>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="work_info">Additional Information: <span>(optional)</span></label>
                           <textarea id="work_info" placeholder="Work Experience Brief"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="resume-box">
                     <h3>Skills & Portfolio</h3>
                     <div class="single-resume-feild ">
                        <div class="single-input">
                           <label for="skill">Skills:</label>
                           <input type="text" placeholder="Comma separate a list of relevant skills" id="skill">
                        </div>
                     </div>
                     <div class="single-resume-feild feild-flex-2">
                        <div class="single-input">
                           <label for="Portfolio">Portfolio:</label>
                           <input type="text" placeholder="Portfolio Demo URL" id="Portfolio">
                        </div>
                        <div class="single-input">
                           <label for="w_screen">Works Screenshot</label>
                           <div class="product-upload">
                              <p>
                                 <i class="fa fa-upload"></i>
                                 Max file size is 3MB,Suitable files are .jpg & .png
                              </p>
                              <input type="file" id="w_screen">
                           </div>
                        </div>
                     </div>
                  </div>
                  */ ?>
                  <!-- <div class="submit-resume">
                     <button type="submit">Save Resume</button>
                  </div> -->
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Submit Resume Area End