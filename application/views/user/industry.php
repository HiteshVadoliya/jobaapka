<!--Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Industry</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">Industry</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
<!-- Categories Area Start -->
<section class="jobguru-categories-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>BROWSE JOBS BY INDUSTRY <span></span></h2>
               <p>EMPLOYERS/RECRUITERS HAVE STARTED JOINING US</p>
            </div>
         </div>
      </div>

      <?php
      $ii = 0;
      $j = 0;
      $total_team = count($hwt_industry);
      $per_page = 6;
      
      foreach ($hwt_industry as $t_key => $t_value) {
         if($t_value['img_src']!='' && file_exists(IMG_INDUSTRY.$t_value['img_src'])) {
            $ind_img = base_url().IMG_INDUSTRY.$t_value['img_src'];
         } else {
            $ind_img = DEFAULT_IMG;
         }
         if(($ii%$per_page)==0) { ?>
         <div class="row">
         <?php } ?>
            <div class="col-lg-2 col-md-6 col-sm-6">
               <a href="<?= base_url("job_list/?ind=".base64_encode($t_value['id'])); ?>" class="single-category-holder account_cat">
                  <div class="category-holder-icon">
                     <i class="fa fa-briefcase"></i>
                  </div>
                  <div class="category-holder-text">
                     <h3><?= $t_value['title']; ?></h3>
                  </div>
                  <img src="<?= $ind_img ?>" alt="<?= $t_value['title']; ?>" />
               </a>
            </div>
         <?php
         if($j==$per_page-1 || $ii==$total_team-1) {
            ?>
            </div>
            <?php
            $j=0;
         } else {

         $j++;
         }
         ?>
         <?php
         $ii++;
         } 
         ?>
   </div>
</section>
<!-- Categories Area End -->
 

 

 

 
 

 
 
