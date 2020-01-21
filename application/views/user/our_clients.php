<!-- Happy Freelancer Start -->
<section class="jobguru-happy-freelancer-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h4>OUR CLIENTS ACROSS DIFFERENT INDUSTRIES </h4>
               <!-- <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p> -->
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="happy-freelancer-slider owl-carousel">
               <?php
               if(isset($hwt_our_clients) && !empty($hwt_our_clients)) {
                 foreach ($hwt_our_clients as $c_key => $c_value) {
                   if(file_exists(IMG_CLIENT.'Thumb/'.$c_value['img_src'])) {
                     $c_img = base_url().IMG_CLIENT.'Thumb/'.$c_value['img_src'];
                     ?>
                     <div class="single-happy-freelancer">
                        <img src="<?= $c_img ?>" alt="" style="border-radius: 1%;" />
                     </div>
                     <?php
                   }
                 }
               }
               ?>
            </div>
            <a href="<?= base_url('whyus'); ?>">Why us</a><br>
            <a href="javascript:;">Jobseeker learn here what we have in store for you</a><br>
            <a href="javascript:;">Employer know here what we have to offer you</a>
         </div>
      </div>
   </div>
</section>
<!-- Happy Freelancer End -->