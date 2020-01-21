<!-- Banner Area Start -->
<section class="jobguru-banner-area">
   <div class="banner-slider owl-carousel">
      <?php
      if(!empty($hwt_slider)) {
        foreach ($hwt_slider as $s_key => $s_value) {
          if(file_exists(IMG_SLIDER.'Thumb/'.$s_value['img_src'])) {
            $img = base_url().IMG_SLIDER.'Thumb/'.$s_value['img_src'];
            ?>
            <div class="banner-single-slider" style="background: url(<?php echo $img ?>);" >
               <div class="slider-offset"></div>
            </div>
            <?php
          }
        }
      }
      ?> 
      
      <!-- <div class="banner-single-slider slider-item-2">
         <div class="slider-offset"></div>
      </div> -->
   </div>
   <div class="banner-text">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner-search home_search">
                  <h2>Search Job.</h2>

                  <h4>We are about to brings lots of jobs for you!! </h4>
                  <form name="search" id="search" method="get" action="<?= base_url("job_list/"); ?>">
                     <div class="banner-form-box">
                        <div class="banner-form-input">
                           <input name="q" id="q" type="text" placeholder="Put your Job Keywords here" autocomplete="off">
                        </div>
                        <div class="banner-form-input">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Banner Area End -->
 
 



 <!-- Happy Freelancer Start -->
 <section class="jobguru-happy-freelancer-area" style="padding: 5px 0;">
    <div class="container">
       <?php /*<div class="row">
          <div class="col-md-12">
             <div class="site-heading">
                <h4>Job Aapka </h4>
                
             </div>
          </div>
       </div> */ ?>
        <div class="col-md-12 home_image ">
            <div class="row">
            
               <div class="col-md-4">
                  <a href="https://www.ideators.tech/our-partners-jobaapka" target="_blank"><img src="<?= IMG_HOME ?>/job_1.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">ideators</span></a>
                  
               </div>
               <div class="col-md-4">
                  <a href="https://skillshop.exceedlms.com/student/award/33034979" target="_blank"><img src="<?= IMG_HOME ?>/job_2.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">skillshop</span></a>
               </div>
               <div class="col-md-4">
                  <a href="http://www.burgerkingindia.in/" target="_blank"><img src="<?= IMG_HOME ?>/job_3.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">burgerkingindia</span></a>
               </div>
               
          </div>
       </div>
       <div class="col-md-12 home_image ">
            <div class="row">
              <div class="col-md-12 center_text">
                <center><h3>Job Aapka,A new venture, From Ideators,a Google ads certified and Burger King, BI developer Company</h3></center>
              </div>
            </div>
        </div>
       
    </div>
 </section>
 
<!-- Categories Area Start -->
<section class="jobguru-categories-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>EMPLOYERS/RECRUITERS HAVE STARTED JOINING US <span></span></h2>
               <p>BROWSE JOBS BY INDUSTRY</p>
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
      

      <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="<?= base_url("industry"); ?>" class="jobguru-btn">browse all INDUSTRY</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Categories Area End -->
 
 <!-- Inner Hire Area Start -->
<section class="jobguru-inner-hire-area section_100" id="ideators_div">
   <div class="hire_circle"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="inner-hire-left">
               <h3>Hire an employee</h3>
               <p>placerat congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandit nunc.congue dui rhoncus sem et blandit .et consectetur Fusce nec nunc lobortis lorem ultrices facilisis. Ut dapibus placerat blandi </p>
               <a href="#" class="jobguru-btn-3">sign up as company</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Inner Hire Area End -->





 
 
<!-- Job Tab Area Start -->
<section class="jobguru-job-tab-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>Popular <span>Jobs.</span></h2>
               <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class=" job-tab">
               <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">Hiring Companies</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">Job Opening</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                  <div class="top-company-tab">
                     <ul>
                        <?php
                        if(isset($hwt_employer) && !empty($hwt_employer)) {
                           foreach ($hwt_employer as $e_key => $e_value) {

                              
                              $img_src_c = base_url().IMG_COMPANY_LOGO.'company_page_logo.jpg';
                              if($e_value['img_src']!="") {
                                if(file_exists(IMG_COMPANY_LOGO.$e_value['img_src'])) {
                                  $img_src_c = base_url().IMG_COMPANY_LOGO.$e_value['img_src'];
                                } 
                              }
                              
                              ?>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="<?= $img_src_c; ?>" alt="<?= $e_value['fname']; ?>" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                       <h3><a href=""><?= $e_value['fname'] ?></a></h3>
                                       <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Name : <?= $e_value['company_name']; ?></p>
                                      <p class="open-icon"><i class="fa fa-phone"></i>Number : <?= $e_value['mobile']; ?><p>
                                      <p class="open-icon"><i class="fa fa-envelope" aria-hidden="true"></i> Email : <?= $e_value['email']; ?></p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="<?= base_url('employer/employer_profile_view/'.$e_value['id']); ?>" class="jobguru-btn">view profile</a>
                                    </div>
                                 </div>
                              </li>
                              <?php
                           }
                        }
                        ?>
                       
                     </ul>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <div class="top-company-tab">
                     <ul>
                        <?php
                        if(isset($hwt_jobseeker) && !empty($hwt_jobseeker)) {
                           foreach ($hwt_jobseeker as $j_key => $j_value) {

                              $img_src_j = base_url().IMG_COMPANY_LOGO.'company_page_logo.jpg';
                              if($j_value['img_src']!="") {
                                if(file_exists(IMG_COMPANY_LOGO.$j_value['img_src'])) {
                                  $img_src_j = base_url().IMG_COMPANY_LOGO.$j_value['img_src'];
                                } 
                              }
                              ?>
                              <li>
                                 <div class="top-company-list">
                                    <div class="company-list-logo">
                                       <a href="#">
                                       <img src="<?= $img_src_j ?>" alt="<?= $j_value['fname'] ?>" />
                                       </a>
                                    </div>
                                    <div class="company-list-details">
                                        <h3><a href="javascript:;"><?= $j_value['job_title'] ?></a></h3>
                                      <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Company name : <?= $j_value['company_name']; ?></p>
                                      <p class="open-icon"><i class="fa fa-history" aria-hidden="true"></i> Experience : <?= $j_value['job_exp_year']." year ".$j_value['job_exp_month']." month " ?></p>
                                      <p class="varify"><i class="fa fa-money" aria-hidden="true"></i> Fixed price : <?= CURR_SYMBOL.$j_value['job_salary']; ?></p>
                                      <p class="company-state"><i class="fa fa-map-marker"></i> Location : <?php echo $this->HWT->get_explode("location","title",$j_value['job_job_location']); ?></p>
                                    </div>
                                    <div class="company-list-btn">
                                       <a href="<?= base_url("view_job/".$j_value['job_id']) ?>" class="jobguru-btn">View Job</a>
                                    </div>
                                 </div>
                              </li>
                              <?php
                           }
                        }
                        ?>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="#" class="jobguru-btn">browse more listing</a>
            </div>
         </div>
      </div> -->
   </div>
</section>
<!-- Job Tab Area End -->
 
 <!-- Happy Freelancer Start -->
<section class="jobguru-happy-freelancer-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>Testimonial </h2>
               <!-- <p>A better career is out there. We'll help you find it. We're your first step to becoming everything you want to be.</p> -->
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="happy-freelancer-slider owl-carousel">
               <?php
               if(isset($hwt_testimonial) && !empty($hwt_testimonial)) {
                  foreach ($hwt_testimonial as $t_key => $t_value) {
                     if(file_exists(IMG_TESTIMONIAL.'Thumb/'.$t_value['img_src'])) {
                       $t_img = base_url().IMG_TESTIMONIAL.'Thumb/'.$t_value['img_src'];
                       ?>
                       <div class="single-happy-freelancer">
                          <div class="happy-freelancer-img">
                             <img src="<?= $t_img ?>" alt="<?= $t_value['post'] ?>" />
                          </div>
                          <div class="happy-freelancer-text">
                             <p><?= $t_value['descr'] ?></p>
                             <div class="happy-freelancer-info">
                                <h4><?= $t_value['company_name'] ?></h4>
                                <p><?= $t_value['post'] ?></p>
                             </div>
                          </div>
                       </div>
                       <?php
                     }
                  }
               }
               ?>
              
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Happy Freelancer End -->
 

 

 

 
 

 
 
