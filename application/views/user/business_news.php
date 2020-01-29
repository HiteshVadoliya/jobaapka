<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
      <div class="breadcromb-top section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Business News</h3>
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
                        <li class="active-breadcromb"><a href="javascript:;">Business News</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Breadcromb Area End -->

   <!-- Top Job Area Start -->
   <section class="jobguru-top-job-area browse-page section_70">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-12">
               <div class="job-grid-right hwt_ajax">
                  
                  <!-- <div class="candidate-list-page">
                     <div class="single-candidate-list">
                        <div class="main-comment business_service">
                           <div class="candidate-image">
                              <img src="<?= base_url().IMG_BUSINESS ?>1.jpg" alt="author">
                           </div>
                           <div class="candidate-text">
                              <div class="candidate-info">
                                 <div class="candidate-title">
                                    <h3><a href="#">Tammy Dixon</a></h3>
                                 </div>
                              </div>
                              <div class="candidate-text-inner">
                                 <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam eu velit cursus, tempor ipsum in, tempus lectus. Nullam tempus nisi id nisl luctus, non tempor justo molestie.</p>
                              </div>
                              <div class="candidate-text-bottom">
                                 <div class="candidate-text-box">
                                    <p class="open-icon"><i class="fa fa-calendar"></i> Jan 2020</p>
                                 </div>
                                 <div class="candidate-action">
                                    <a href="#" class="jobguru-btn-2">view Details</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Top Job Area End -->

<script type="text/javascript">
   $(document).ready(function(){
      get_data(0);
   });
   function get_data(pagno) {
      $.ajax({
        url: "<?php echo base_url()."Home/get_business/" ?>" +pagno,
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
