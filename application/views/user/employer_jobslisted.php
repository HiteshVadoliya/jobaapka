<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Job Listed</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcromb-box-pagin my_breadcum">
        <ul>
           <li>QUICK ACCOUNT CREATION WITH LITTLE INFO</li>
           <li>MOST AFFORDABLE</li>
           <li>MORE THAN JUST HIRING SERVICES</li>
        </ul>
     </div>
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url() ?>">home</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Job Listed</a></li>
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
            <div class="job-grid-right hwt_ajax">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
<!-- <div class="loadermain_f">
    <div><img style="width:10%" src="<?php echo base_url().IMG_SRC.'hwt.svg'; ?>"><br><span style="color: #fff;">Loading Please Wait...</span></div>
</div> -->
<script type="text/javascript">

   $(document).ready(function(){
      get_data(0);
   });
   function get_data(pagno) {
      // $(".loadermain_f").show();
      $.ajax({
        url: "<?php echo base_url()."Employer_Process/get_result/" ?>" +pagno,
        method: "POST",
        dataType: "html",
        data :{},
        success: function(data) {
            $(".hwt_ajax").html(data);
            // $(".loadermain_f").hide();
        },
        error: function(data) {
            console.log(data);
        }
    });
   }
</script>
 