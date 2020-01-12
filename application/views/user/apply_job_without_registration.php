<!-- Single Candidate Start -->
<section class="single-candidate-page section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-lg-6">
            <div class="single-candidate-box">
               <div class="single-candidate-img">
                  <?php
                  $img_src = base_url().IMG_COMPANY_LOGO.'company_page_logo.jpg';
                  if($jobs['img_src']!="") {
                    if(file_exists(IMG_COMPANY_LOGO.$jobs['img_src'])) {
                      $img_src = base_url().IMG_COMPANY_LOGO.$jobs['img_src'];
                    } 
                  }
                  ?>
                  <img src="<?= $img_src ?>" alt="<?= $jobs['job_title']; ?>" title="<?= $jobs['job_title']; ?>" />
               </div>
               <div class="single-candidate-box-right">
                  <h4><?= $jobs['job_title']; ?></h4>
                  <div class="job-details-meta">
                     <!-- <p><i class="fa fa-file-text"></i> Applications 1</p> -->
                     <!-- <p><i class="fa fa-calendar"></i> July 29, 2017</p> -->
                     <p title="job post date"><i class="fa fa-calendar"></i> <?= date("M d, Y", strtotime($jobs['created_at'])); ?></p>
                     <p title="job expire date"><i class="fa fa-calendar"></i> <?= date("M d, Y", strtotime($jobs['created_at']. DAY)); ?></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="col-md-3 col-lg-6">
            <div class="single-candidate-action shortlist "  >
               <a class="candidate-contact add_shortlist <?= $shortlist_active ?> " data-jobid="<?= $jobs['job_id'] ?>"><i class="fa fa-star"></i>Shortlist</a>
            </div>
         </div> -->
      </div>
   </div>
</section>
<!-- Single Candidate End -->
 
 
<!-- Single Candidate Bottom Start -->
<section class="single-candidate-bottom-area section_70">
   <div class="container">
      <div class="row">
        

         <div class="col-md-8 col-lg-9">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  
                  <div class="candidate-single-profile-info">
                     <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                        <div class="resume-box">
                           <h3><?php if(isset($view_job_details) && $view_job_details['name']!="") { echo 'View Details'; } else { echo 'Apply For Job'; } ?></h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Name * :</label>
                                 <input type="text" value="<?php if(isset($view_job_details) && $view_job_details['name']!="") { echo $view_job_details['name']; } ?>" id="name" name="name">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Current Email id * :</label>
                                 <input type="text" value="<?php if(isset($view_job_details) && $view_job_details['email']!="") { echo $view_job_details['email']; } ?>" id="email" name="email">
                              </div>
                           </div>

                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Current Mobile No * :</label>
                                 <input type="text" value="<?php if(isset($view_job_details) && $view_job_details['mobile']!="") { echo $view_job_details['mobile']; } ?>" id="mobile" name="mobile">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Current Location * :</label>
                                 <select id="location" name="location[]" class="selectpicker form-control" multiple data-live-search="true">
                                    <!-- <option value="">Select Location</option> -->
                                    <?php
                                    if(isset($collection['location']) && !empty($collection['location']))
                                    {
                                      $location = $collection['location'];
                                      $selected_loc = "";
                                      foreach ($location as $l_key => $l_value) {
                                        $selected_loc = $this->HWT->hwt_selected( $l_value['id'], $view_job_details['location']);
                                        ?>
                                        <option value="<?= $l_value['id'] ?>" <?= $selected_loc ?> ><?= $l_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                                 <span class="location"></span>
                              </div>
                           </div>


                           <div class="single-resume-feild feild-flex-2">
                            Experience
                           </div>
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
                                   $selected_year = ($view_job_details['exp_year']==$e_key) ? 'selected' : '';
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
                                     $selected_month = ($view_job_details['exp_month']==$m_key) ? 'selected' : '';
                                     ?>
                                     <option value="<?= $m_value ?>" <?= $selected_month; ?> ><?= $m_value; ?></option>
                                     <?php
                                   }
                                 }
                                 ?>
                              </select>
                           </div>
                           </div>


                           <div class="single-resume-feild">
                              <div class="single-input">
                               
                                  <?php if(isset($view_job_details) && $view_job_details['name']!="") { 
                                    $img_src = "";
                                    if($view_job_details['img_src']!="") {
                                      if(file_exists(IMG_PROFILE.$view_job_details['img_src'])) {
                                        $img_src = base_url().IMG_PROFILE.$view_job_details['img_src'];
                                      } 
                                    }
                                    if($img_src!="") {
                                      ?>
                                       <label for="Phone">Download CV :</label>
                                       <a href="<?= $img_src ?>">Download CV</a>
                                      <?php
                                    }                                    
                                    ?>
                                 <?php } else { ?>
                                  <label for="Phone">Upload CV :</label>
                                  <input type="file" id="img_src" name="img_src">
                                 <?php } ?>
                              </div>
                           </div>
                           <div class="single-resume-feild ">
                              <div class="single-input">
                                 <label for="Phone">Details :</label>
                                 <textarea name="details" id="details"><?php if(isset($view_job_details) && $view_job_details['details']!="") { echo $view_job_details['details']; } ?></textarea>
                              </div>
                           </div>
                        </div>
                        <input type="hidden" name="job_id" id="job_id" value="<?= $job_id ?>">
                        
                        <?php if(!isset($view_job_details)) { ?>
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit apply_job">Apply</button>
                        </div>
                        <?php } ?>

                     </form>
                  </div>
               </div>
            </div>
         </div>


         <div class="col-md-4 col-lg-3">
            <div class="single-candidate-bottom-right">
               
               <div class="single-candidate-widget-2">
                  <h3>Job overview</h3>
                  <ul class="job-overview">
                     <li>
                        <h4><i class="fa fa-money" aria-hidden="true"></i> Offerd Salary</h4>
                        <p><?= CURR_SYMBOL.$jobs['job_salary']; ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-map-marker"></i> Location</h4>
                        <p><?= $this->HWT->get_explode("location","title",$jobs['job_job_location']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-industry" aria-hidden="true"></i> Industry</h4>
                        <p><?= $this->HWT->get_explode("industry","title",$jobs['job_industry']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-tasks" aria-hidden="true"></i> Job Function</h4>
                        <p><?= $this->HWT->get_explode("job_function","title",$jobs['job_job_function']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa fa-graduation-cap"></i> Education</h4>
                        <p><?= $this->HWT->get_explode("education","title",$jobs['job_education']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-history" aria-hidden="true"></i> Experience</h4>
                        <p><?= $jobs['job_exp_year']." year ".$jobs['job_exp_month']." month " ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-clock-o"></i> Date Posted</h4>
                        <p><?= date("M d, Y", strtotime($jobs['job_date'])); ?></p>
                     </li>
                  </ul>
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Single Candidate Bottom End -->
<script type="text/javascript">
  
  $(function(){
      $("#frm").validate({                       
          rules: {                
              name : { required : true },
              email : { required : true,email:true },
              mobile : { required : true },
              exp_year : { required : true },
              exp_month : { required : true },
              "location[]" : { required : true },
          },
          messages: {
             fname : { required : "Please enter name." },
             email : { required : "Please enter Email ." },
             mobile : { required : "Please enter Mobile ." },              
          },
          errorPlacement: function(error, element) {
             if (element.attr("name") == "location[]") {
                  error.insertAfter(".location");
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

    $.ajax({
          url: "<?php echo base_url()."Job_Process/apply_job_without_registration/" ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,  
          cache: false,  
          processData:false,  
          dataType: "json",
          success: function(data) {

            if(data.response) {
              $.notify({message: data.msg },{type: 'success'});
            } else {
              $.notify({message: data.msg },{type: 'danger'});
            }
            $(".custom_submit").html(btn_old_val);
            $("#frm")[0].reset();

            //var url = '<?php echo base_url('employer/profile'); ?>';
            //setTimeout(function(){ window.location = url; }, 2000);

          },
          error: function(data) {
              console.log(data);
          }
      });
  });

  $(".not_login").on("click",function(){
    $.notify({message: "Please login to apply this job." },{type: 'danger'});
  });
</script>