<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Job List</h3>
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
                     <li class="active-breadcromb"><a href="javascript:;">Job List</a></li>
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
        <div class="col-md-12 col-lg-3">
          <form name="filter_form" id="filter_form" action="javascript:;" method="post">
          <div class="job-grid-sidebar">
             <!-- Single Job Sidebar Start -->
             <div class="single-job-sidebar sidebar-location">
                <h3>Job Title</h3>
                <div class="job-sidebar-box">
                    <p>
                       <input type="text" name="job_title" id="job_title" placeholder="Job Title" value="<?php if(isset($q) && $q!="") { echo $q; } ?>" >
                    </p>
                </div>
             </div>
             <!-- Single Job Sidebar End -->
              
             <!-- Single Job Sidebar Start -->
             <div class="single-job-sidebar sidebar-keywords">
                <h3>Industry</h3>
                <div class="job-sidebar-box">
                   
                      <select id="job_industry" name="job_industry[]" class="selectpicker form-control" multiple data-live-search="true">
                        <?php
                        if(isset($collection['industry']) && !empty($collection['industry']))
                        {
                          $industry = $collection['industry'];
                          $selected_ind = "";
                          foreach ($industry as $i_key => $i_value) {
                           if(isset( $ind ) && !empty($ind) ) {

                            $selected_ind =  $this->HWT->hwt_selected( $i_value['id'], $ind);
                           }
                            ?>
                            <option value="<?= $i_value['id'] ?>" <?= $selected_ind ?> ><?= $i_value['title']; ?></option>
                            <?php
                          }
                        }
                        ?> 
                     </select>
                   
                </div>
             </div>

             <div class="single-job-sidebar sidebar-keywords">
                <h3>Location</h3>
                <div class="job-sidebar-box">
                   
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
                   
                </div>
             </div>

             <div class="single-job-sidebar sidebar-keywords">
                <h3>Job Function</h3>
                <div class="job-sidebar-box">
                   
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
                   
                </div>
             </div>

             <div class="single-job-sidebar sidebar-keywords">
                <h3>Education</h3>
                <div class="job-sidebar-box">
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
                   
                </div>
             </div>

             <div class="single-job-sidebar sidebar-keywords">
                <h3>Experience</h3>
                <div class="job-sidebar-box">
                   
                      <select id="job_exp_year" name="job_exp_year" class="form-control">
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

                        <select id="job_exp_month" name="job_exp_month" class="form-control">
                           <option value="0">Experience in month</option>
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
              
             <!-- Single Job Sidebar Start -->
             <div class="single-job-sidebar sidebar-salary">
                <h3>Filter by Salary</h3>
                <div class="job-sidebar-box">
                   <p>
                      <input type="text" id="amount" name="job_salary" readonly>
                   </p>
                   <div id="slider"></div>
                </div>
             </div>
             <!-- Single Job Sidebar End -->

             <div class="single-job-sidebar sidebar-salary">
                 <h3>Apply Filter</h3>
                 <div class="job-sidebar-box">
                    <div class="single-input submit-resume">
                       <button type="submit" name="apply_filter" id="apply_filter" class="custom_submit">Apply Filter</button>
                    </div>
                 </div>
              </div>
              
          </div>
          </form>
       </div>
         <div class="col-md-12 col-lg-9">
            <div class="job-grid-right hwt_ajax">
            </div>
         </div>
      </div>
   </div>
</section>

<script type="text/javascript">

  $(".change_filter").on("change",function(){
      get_data(0);
  });

  $("#apply_filter").on("click",function(){
      get_data(0);
  });
   $(document).ready(function(){
      get_data(0);
   });
   function get_data(pagno) {
    // let search = '<?php echo json_encode($search) ?>';
      $.ajax({
        url: "<?php echo base_url()."Job_Process/get_result/" ?>" +pagno,
        method: "POST",
        data: $("#filter_form").serialize(),
        dataType: 'html',
        success: function(data) {
            $(".hwt_ajax").html(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
   }
</script>
 