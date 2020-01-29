<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
      <div class="breadcromb-top section_100">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Business Details</h3>
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
                        <li class="active-breadcromb"><a href="javascript:;">Business Details</a></li>
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
               <div class="single-candidate-bottom-left">
                  <div class="single-candidate-widget">
                     <h3><?= $business['title']; ?></h3>
                     <h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;<?= date('M, Y',strtotime($business['date'])); ?></h6>                     
                  </div>
                  <div class="single-candidate-widget">
                     <img src="<?= base_url().IMG_BUSINESS.'/thumb/'.$business['img_src'] ?>">
                  </div>
                  <div class="single-candidate-widget clearfix">
                     <?= $business['descr']; ?>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Top Job Area End -->