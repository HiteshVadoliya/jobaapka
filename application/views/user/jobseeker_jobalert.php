 
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Job Alert</h3>
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
                     <li class="active-breadcromb"><a href="javascript:;">Job Alert</a></li>
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
         
         <div class="col-md-12 col-lg-9">
            <div class="job-grid-right hwt_ajax">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
<script type="text/javascript">
   $(document).ready(function(){
      get_data(0);
   });
   function get_data(pagno) {
      $.ajax({
        url: "<?php echo base_url()."JobSeeker_Process/get_result_job_alert/" ?>" +pagno,
        method: "POST",
        dataType: "html",
        data :{},
        success: function(data) {
            $(".hwt_ajax").html(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
   }
</script>
 