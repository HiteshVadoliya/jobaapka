<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Post A Job</h3>
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
                     <li><a href="<?=base_url(); ?>">Employer</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Post A Job</a></li>
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
         <div class="col-md-12 col-lg-12">
                  <div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">

                           <?php $action_btn = (isset($edit)) &&  !empty($edit['job_id']) ? 'UPDATE' : 'POST';  ?>
                           <h3><?= ucfirst( strtolower($action_btn)) ?> A new job</h3>
                        </div>
                        <div class="new-job-submission">
                           <form name="frm" id="frm" action="javascript:;" method="post" >
                              <div class="resume-box">
                                 <!-- <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">Date field :</label>
                                       <input  class="datepicker" type="text" id="job_date" name="job_date" value="<?= (isset($edit) && !empty($edit['job_date'])) ? $edit['job_date'] : '';  ?>" autocomplete="off">
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">Application deadline date :</label>
                                       <input class="datepicker" type="text" placeholder="max 6 months from date of posting" id="job_date_expired" name="job_date_expired" value="<?= (isset($edit) && !empty($edit['job_date_expired'])) ? $edit['job_date_expired'] : '';  ?>" autocomplete="off"   >
                                    </div>
                                 </div> -->

                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Job Title :</label>
                                       <textarea placeholder="500 chars (this will also be the meta title of the page for seo purpose till whatever length is sourceable)" id="job_title" name="job_title"><?= (isset($edit) && !empty($edit['job_title'])) ? $edit['job_title'] : '';  ?></textarea>
                                    </div>
                                 </div>

                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_reg">Industry :</label>
                                       <select id="job_industry" name="job_industry[]" class="selectpicker form-control" multiple data-live-search="true">
                                          <?php
                                          if(isset($collection['industry']) && !empty($collection['industry']))
                                          {
                                            $industry = $collection['industry'];
                                            $selected_ind = "";
                                            foreach ($industry as $i_key => $i_value) {
                                             if(isset( $edit ) && !empty($edit['job_industry']) ) {

                                              $selected_ind =  $this->HWT->hwt_selected( $i_value['id'], $edit['job_industry']);
                                             }
                                              ?>
                                              <option value="<?= $i_value['id'] ?>" <?= $selected_ind ?> ><?= $i_value['title']; ?></option>
                                              <?php
                                            }
                                          }
                                          ?> 
                                       </select>
                                       <span class="job_industry"></span>     
                                    </div>
                                    <div class="single-input">
                                       <label for="j_type">Location :</label>
                                       <select id="job_job_location" name="job_job_location[]" class="selectpicker form-control" multiple data-live-search="true">
                                          <?php
                                          if(isset($collection['location']) && !empty($collection['location']))
                                          {
                                            $location = $collection['location'];
                                            $selected_loc = "";
                                            foreach ($location as $l_key => $l_value) {
                                             if( isset($edit) && !empty($edit['job_job_location']) ) {
                                                 $selected_loc = $this->HWT->hwt_selected( $l_value['id'], $edit['job_job_location']);
                                              }
                                              ?>
                                              <option value="<?= $l_value['id'] ?>" <?= $selected_loc ?> ><?= $l_value['title']; ?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                       </select>
                                       <span class="job_job_location"></span>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_category">Job Function :</label>
                                       <select id="job_job_function" name="job_job_function[]" class="selectpicker form-control" multiple data-live-search="true">
                                          <?php
                                          if(isset($collection['job_function']) && !empty($collection['job_function']))
                                          {
                                            $job_function = $collection['job_function'];
                                            $selected_job = "";
                                            foreach ($job_function as $j_key => $j_value) {
                                             if(isset($edit) && !empty($edit['job_job_function'])) {
                                                 $selected_job = $this->HWT->hwt_selected( $j_value['id'], $edit['job_job_function']);
                                              }
                                              ?>
                                              <option value="<?= $j_value['id'] ?>" <?= $selected_job ?> ><?= $j_value['title']; ?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                       </select>
                                       <span class="job_job_function"></span>
                                    </div>
                                    <div class="single-input">
                                       <label for="j_category">Education :</label>
                                       <select id="job_education" name="job_education[]" class="selectpicker form-control" multiple data-live-search="true">
                                          <?php
                                          if(isset($collection['education']) && !empty($collection['education']))
                                          {
                                            $education = $collection['education'];
                                            $selected_edu = "";
                                            foreach ($education as $j_key => $j_value) {
                                             if(isset($edit) && !empty($edit['job_education'])) {
                                                 $selected_edu = $this->HWT->hwt_selected( $j_value['id'], $edit['job_education']);
                                              }
                                              ?>
                                              <option value="<?= $j_value['id'] ?>" <?= $selected_edu ?> ><?= $j_value['title']; ?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                       </select>
                                       <span class="job_education"></span>
                                    </div>
                                    
                                 </div>
                                 <div style="text-align: left;">
                                 Experience 
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_category">Experience Year:</label>
                                       <select id="job_exp_year" name="job_exp_year">
                                          <option value="">Experience in years</option>
                                          <?php
                                          if(isset($collection['exp_year']) && !empty($collection['exp_year']))
                                          {
                                            $exp_year = $collection['exp_year'];
                                            $selected_year = "";
                                            foreach ($exp_year as $e_key => $e_value) {
                                             if(isset($edit) && !empty($edit['job_exp_year'])) {
                                               $selected_year = ($edit['job_exp_year']==$e_key) ? 'selected' : '';
                                            }
                                              ?>
                                              <option value="<?= $e_key ?>" <?= $selected_year ?> ><?= $e_value; ?></option>
                                              <?php
                                            }
                                          }
                                          ?>
                                          </select>
                                       
                                    </div>
                                    <div class="single-input">
                                       <label for="j_category">Experience Month:</label>
                                       <select id="job_exp_month" name="job_exp_month">
                                          <option value="">Experience in month</option>
                                          <?php
                                          if(isset($collection['exp_month']) && !empty($collection['exp_month']))
                                          {
                                            $exp_month = $collection['exp_month'];
                                            $selected_month = "";
                                            foreach ($exp_month as $m_key => $m_value) {
                                             if(isset($edit) && !empty($edit['job_exp_month'])) {
                                              $selected_month = ($edit['job_exp_month']==$m_key) ? 'selected' : '';
                                             }
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
                                       <label for="j_title">Salary  :</label>


                                       <!-- <div class="single-job-sidebar sidebar-salary">
                                          <div class="job-sidebar-box">
                                             <p>
                                                <input type="text" name="job_salary" id="amount" readonly value="<?= (isset($edit) && !empty($edit['job_salary'])) ? $edit['job_salary'] : '';  ?>">
                                             </p>
                                             <div id="slider"></div>
                                          </div>
                                       </div> -->
                                       <input type="text" name="job_salary" id="job_salary" value="<?= (isset($edit) && !empty($edit['job_salary'])) ? $edit['job_salary'] : '';  ?>">
                                    </div>
                                 </div>

                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Skills :</label>
                                       <textarea placeholder="500 chars" name="job_skill" id="job_skill" ><?= (isset($edit) && !empty($edit['job_skill'])) ? $edit['job_skill'] : '';  ?></textarea>
                                    </div>
                                 </div>

                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Additional Skills (optional)  :</label>
                                       <textarea placeholder="250 chars" name="job_additional_skill" id="job_additional_skill" ><?= (isset($edit) && !empty($edit['job_additional_skill'])) ? $edit['job_additional_skill'] : '';  ?></textarea>
                                    </div>
                                 </div>

                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Job Description :</label>
                                       <textarea placeholder="2000 chars (this will also be the meta title of the page for seo purpose till whatever length is sourceable)" name="job_descr" id="job_descr" ><?= (isset($edit) && !empty($edit['job_descr'])) ? $edit['job_descr'] : '';  ?></textarea>
                                    </div>
                                 </div>

                                <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Additonal Roles and Responsibilities(optional)  :</label>
                                       <textarea placeholder="1000 chars" name="job_additional_role" id="job_additional_role" ><?= (isset($edit) && !empty($edit['job_additional_role'])) ? $edit['job_additional_role'] : '';  ?></textarea>
                                    </div>
                                 </div>

                                 <div class="single-resume-feild ">
                                    <div class="single-input single-input-tag">
                                       <label for="j_title">tag:</label>
                                       <input name="employer_tags" id="employer_tags" class=" tagsinput_text_ tags" type="text" value="<?= (isset($edit) && !empty($edit['employer_tags'])) ? $edit['employer_tags'] : '';  ?>" data-role="tagsinput" style="display: none;" onkeypress="return runScript(event)"/>
                                    </div>
                                 </div>


                                 
                              </div>
                              <div class="single-input submit-resume">
                                 <?php
                                 $action = (isset($edit)) &&  !empty($edit['job_id']) ? 'edit' : 'add'; 
                                 
                                 $editid = (isset($edit)) &&  !empty($edit['job_id']) ? $edit['job_id'] : ''; 
                                 ?>
                                 <input type="hidden" name="action" value="<?= $action ?>">
                                 <input type="hidden" name="editid" value="<?= $editid ?>">
                                 <button type="submit" class="custom_submit" ><?= $action_btn; ?> THIS JOB NOW</button>
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
<script type="text/javascript">
  
   $(function(){

       $("#frm").validate({                       
           rules: {                
               /*job_date : { required : true },
               job_date_expired : { required : true },*/
               job_title : { required : true },
               "job_industry[]" : { required : true },
               "job_job_location[]" : { required : true },
               "job_job_function[]" : { required : true },
               "job_education[]" : { required : true },
               job_exp_year : { required : true },
               job_exp_month : { required : true },
               job_salary : { required : true },
               job_skill : { required : true },
               // job_additional_skill : { required : true },
               job_descr : { required : true },
               // job_additional_role : { required : true },
           },
           messages: {
              title : { required : "Please enter Title." },
              /*job_date : { required : "Please select date" },
              job_date_expired : { required : "Please select expiry date" },*/
              job_title : { required : "Please enter title" },
              job_industry : { required : "Please select industry" },
              job_job_location : { required : "Please select location" },
              job_job_function : { required : "Please select function" },
              job_education : { required : "Please select education" },
              job_exp_year : { required : "Please select experience in year" },
              job_exp_month : { required : "Please select experience in month" },
              job_salary : { required : "Please select salary" },
              job_skill : { required : "Please enter job_skill" },
              // job_additional_skill : { required : "Please enter job_additional_skill" },
              job_descr : { required : "Please enter Description" },
              // job_additional_role : { required : "Please enter job_additional_role" },
           },
           errorPlacement: function(error, element) {
               if (element.attr("name") == "job_industry[]") {
                   error.insertAfter(".job_industry");
               } else if (element.attr("name") == "job_job_location[]") {
                   error.insertAfter(".job_job_location");
               } else if (element.attr("name") == "job_job_function[]") {
                   error.insertAfter(".job_job_function");
               } else if (element.attr("name") == "job_education[]") {
                   error.insertAfter(".job_education");
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
       var btn_old_val = $(".custom_submit").html();
       $(".custom_submit").html(btn_old_val+'...');
       $(".custom_submit").attr("disabled", true);
       $.ajax({
           type: "POST",            
           url: "<?php echo base_url('Employer_Process/post_job') ?>",
           data: $("#frm").serialize(),
           dataType: 'json',
           success: function(res) {
               if(res.error) {
                 $.notify({message: res.message },{type: 'success'});
               }
              $(".custom_submit").html(btn_old_val);
              $(".custom_submit").attr("disabled", false);

              $("#frm")[0].reset();
              var url = '<?php echo base_url('employer/jobslisted'); ?>';
              setTimeout(function(){ window.location = url; }, 3000);                  
           },
           error: function (error) {}
       });
       return false;
   });
   
</script>