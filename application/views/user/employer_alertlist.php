<!-- Breadcromb Area Start -->---
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Alerts</h3>
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
                     <li><a href="<?= base_url() ?>">home</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Alerts</a></li>
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
            <div class="row">
              <div class="col-md-12 col-lg-12">
                  <div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Search</h3>
                        </div>
                        <div class="new-job-submission">
                           <form name="frm" id="frm" action="javascript:;" method="post" >
                              <div class="resume-box">
                                 
                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">Job Title :</label>
                                       <input type="text" name="job_title" id="job_title" value="">
                                    </div>
                                    <div class="single-input">
                                       <label for="j_type">Location :</label>
                                       <select id="job_job_location" name="job_job_location[]" class="selectpicker form-control" data-live-search="true">
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
                              </div>
                              <div class="single-input submit-resume">
                                 <button type="submit" class="custom_submit" >Search</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
         </div>
            </div>
            <div class="job-grid-right hwt_ajax">
            </div>
            <br>
            <hr>
            <h2>Short listed Company</h2>
            <div class="job-grid-right hwt_ajax2">
            </div>
         </div>
         <input type="hidden" value="<?= $job_view_id; ?>" name="job_view_id" id="job_view_id">
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
<!-- <div class="loadermain_f">
    <div><img style="width:10%" src="<?php echo base_url().IMG_SRC.'hwt.svg'; ?>"><br><span style="color: #fff;">Loading Please Wait...</span></div>
</div> -->
<script type="text/javascript">

   /*$(document).ready(function(){
      get_data(0);
   });*/
   $(document).on("click",".custom_submit",function(){
        var job_title = $("#job_title").val();
        if(job_title=='') {
          alert('Please enter Job Title ');
          return false;
        }
        get_data(0);
   });
   function get_data(pagno) {
      // $(".loadermain_f").show();
      var job_view_id = $("#job_view_id").val();
      var url = "<?php echo base_url()."Employer_Process/get_result_employer/" ?>" +pagno;
      var frm_data = $("#frm").serialize();
      $.ajax({
        url: url,
        method: "POST",
        dataType: "html",
        data :{type:'job_applicants',job_view_id:job_view_id,frm_data:frm_data},
        success: function(data) {
            $(".hwt_ajax").html(data);
            // $(".loadermain_f").hide();
        },
        error: function(data) {
            console.log(data);
        }
    });
   }

   $(document).ready(function(){
      get_data2(0);
   });
   function get_data2(pagno) {
      var url = "<?php echo base_url()."Employer_Process/get_shortlisted_employer/" ?>" +pagno;
      $.ajax({
        url: url,
        method: "POST",
        dataType: "html",
        data :{},
        success: function(data) {
            $(".hwt_ajax2").html(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
   }
</script>
 