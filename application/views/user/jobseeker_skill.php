 
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>CV, PROFILE AND SKILLS</h3>
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
                     <li><a href="javascript:;">JobSeeker</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">CV, PROFILE AND SKILLS</a></li>
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
                     <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                        <div class="resume-box">
                           <h3>CV, PROFILE AND SKILLS</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Upload CV * :</label>
                                 <input type="file" id="img_src" name="img_src">
                                 <input type="hidden" value="<?= $skill['img_src']; ?>" name="img_src_old" id="img_src_old">
                                 <?php
                                 $img_src = "";
                                 if($skill['img_src']!="") {
                                   if(file_exists(IMG_PROFILE.$skill['img_src'])) {
                                     $img_src = base_url().IMG_PROFILE.$skill['img_src'];
                                   } 
                                 }
                                 if($img_src!="") {
                                  ?>
                                    <a href="<?= $img_src ?>">View CV</a>
                                  <?php
                                 }
                                 ?>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Profile Title :</label>
                                 <input type="text" value="<?= $skill['title']; ?>" id="title" name="title">
                              </div>
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="Phone">Skills :</label>
                                 <textarea name="skill" id="skill"><?= $skill['skill']; ?></textarea>
                              </div>
                           </div>

                           <label for="Phone">Experience :</label>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Year :</label>
                                 <select name="exp_year" id="exp_year">
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
                                 <select name="exp_month" id="exp_month">
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

                           
                           <div class="single-resume-feild ">
                              <div class="single-input">
                                 <label for="Phone">Designation level :</label>
                                 <select id="designation" name="designation[]" class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Select Designation</option> -->
                                    <?php
                                    if(isset($collection['designation_level']) && !empty($collection['designation_level']))
                                    {
                                      $designation_level = $collection['designation_level'];
                                      foreach ($designation_level as $d_key => $d_value) {
                                        $selected_des = $this->HWT->hwt_selected( $d_value['id'], $skill['designation']);
                                        ?>
                                        <option value="<?= $d_value['id'] ?>" <?= $selected_des ?> ><?= $d_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="single-resume-feild  ">
                              <div class="single-resume-feild ">
                                    <label for="Email">Job Type :</label><br>
                                    <?php
                                    if(isset($collection['job_type']) && !empty($collection['job_type']))
                                    {
                                      $job_type = $collection['job_type'];
                                      $selected_type = "";
                                      foreach ($job_type as $job_key => $job_value) {
                                        $selected_type = $this->HWT->hwt_checked( $job_value['id'], $skill['job_type']);
                                        ?>
                                        
                                          <input type="checkbox" name="job_type[]" <?= $selected_type; ?> value="<?= $job_value['id'] ?>"> <?= $job_value['title']; ?>
                                        
                                        <?php
                                      }
                                    }
                                    ?>
                                    
                              </div>
                           </div>

                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-resume-feild ">
                                    <label for="Email">Salary :</label><br>
                                    <?php
                                    if(isset($collection['salary']) && !empty($collection['salary']))
                                    {
                                      $salary = $collection['salary'];
                                      $selected_sal = "";
                                      foreach ($salary as $job_key => $salary_value) {
                                        $selected_sal = $this->HWT->hwt_checked( $salary_value['id'], $skill['salary']);
                                        ?>
                                        <input type="checkbox" name="salary[]" <?= $selected_sal ?> value="<?= $salary_value['id'] ?>"> <?= $salary_value['title']; ?>
                                        <?php
                                      }
                                    }
                                    ?>
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
                                 <select name="job_function[]" id="job_function"  class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Current job function</option> -->
                                    <?php
                                    if(isset($collection['job_function']) && !empty($collection['job_function']))
                                    {
                                      $job_function = $collection['job_function'];
                                      foreach ($job_function as $j_key => $j_value) {
                                        $selected_job = $this->HWT->hwt_selected( $j_value['id'], $skill['job_function']);
                                        ?>
                                        <option value="<?= $j_value['id'] ?>" <?= $selected_job ?> ><?= $j_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Interested Locations :</label>
                                 <select id="location" name="location[]" class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Select Location</option> -->
                                    <?php
                                    if(isset($collection['location']) && !empty($collection['location']))
                                    {
                                      $location = $collection['location'];
                                      $selected_loc = "";
                                      foreach ($location as $l_key => $l_value) {
                                        $selected_loc = $this->HWT->hwt_selected( $l_value['id'], $skill['location']);
                                        ?>
                                        <option value="<?= $l_value['id'] ?>" <?= $selected_loc ?> ><?= $l_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>


                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Interested Industries  :</label>
                                 <select id="industry" name="industry[]" class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Select Industries</option> -->
                                    <?php
                                    if(isset($collection['industry']) && !empty($collection['industry']))
                                    {
                                      $industry = $collection['industry'];
                                      $selected_ind = "";
                                      foreach ($industry as $i_key => $i_value) {
                                        $selected_ind =  $this->HWT->hwt_selected( $i_value['id'], $skill['industry']);
                                        ?>
                                        <option value="<?= $i_value['id'] ?>" <?= $selected_ind ?> ><?= $i_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>                                    
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Email">Preferred Job categories  :</label>
                                 <select id="category" name="category[]" class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Select Categories</option> -->
                                    <?php
                                    if(isset($collection['category']) && !empty($collection['category']))
                                    {
                                      $category = $collection['category'];
                                      $selected_cat = "";
                                      foreach ($category as $cat_key => $cat_value) {
                                        $selected_cat = $this->HWT->hwt_selected( $cat_value['cat_id'], $skill['category']);
                                        ?>
                                        <option value="<?= $cat_value['cat_id'] ?>" <?= $selected_cat ?> ><?= $cat_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           <div class="single-resume-feild single-input-tag">
                              <div class="single-input">
                                <label for="Email">Tag :</label>
                                  <input name="jobseeker_tags" id="jobseeker_tags" class="form-control tagsinput_text" type="text" value="<?= $skill['jobseeker_tags']; ?>" data-role="tagsinput" style="display: none;" />
                              </div>
                            </div>


                        </div>
                        
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div>

                      

                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

 
<script type="text/javascript">
   $(function(){

       $("#frm").validate({                       
           rules: {                
               title : { required : true },
               skill : { required : true },
               exp_year : { required : true },
               exp_month : { required : true },
               designation : { required : true },
               job_type : { required : true },
               salary : { required : true },
               job_function : { required : true },
               location : { required : true },
               industry : { required : true },
               category : { required : true },
           },
           messages: {
              title : { required : "Please enter Title." },
              skill : { required : "Please enter SKill." },
              exp_year : { required : "Please select Year." },
              exp_month : { required : "Please select month." },
              designation : { required : "Please select designation." },
              job_type : { required : "Please select Job Type." },
              salary : { required : "Please Select Salary." },
              job_function : { required : "Please select job function." },
              location : { required : "Please select Location." },
              industry : { required : "Please enter Industry." },
              category : { required : "Please select category." },
           },
           errorPlacement: function(error, element) {
              if (element.attr("name") == "descr") {
                   error.insertAfter(".desc_error");
               }
               else{
                   error.insertAfter(element);
               }
           }
       });
   });
   

   $("#frm").on('submit',function(){
       var val_form = $("#frm").valid();
       if(!val_form) { return false; }
       $(".close").trigger("click");
       var btn_old_val = $(".custom_submit").text();
       $(".custom_submit").html(btn_old_val+'...');
       
       $.ajax({
           type: "POST",            
           url: "<?php echo base_url('JobSeeker_Process/skill') ?>",
           // data: $("#frm").serialize(),
           data: new FormData(this),
           contentType: false,  
           cache: false,  
           processData:false,  
           dataType: "json",
           success: function(res) {
               if(res.response) {
                 $.notify({message: res.msg },{type: 'success'});
               }
              $(".custom_submit").html(btn_old_val);
           },
           error: function (error) {}
       });
       return false;
   });
   
</script>


