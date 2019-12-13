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
               <div class="banner-search">
                  <h2>Search Job.</h2>

                  <h4>We have 1542 job offers for you! </h4>
                  <form>
                     <div class="banner-form-box">
                        <div class="banner-form-input">
                           <input type="text" placeholder="Put your Job Keywords here">
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
                  <a href="https://www.ideators.tech/our-partners-jobaapka" target="_blank"><img src="<?= IMG_HOME ?>/job_1.png" style="border-radius: 1%;" /></a>
               </div>
               <div class="col-md-4">
                  <a href="https://skillshop.exceedlms.com/student/award/33034979" target="_blank"><img src="<?= IMG_HOME ?>/job_2.png" style="border-radius: 1%;" /></a>
               </div>
               <div class="col-md-4">
                  <a href="http://www.burgerkingindia.in/" target="_blank"><img src="<?= IMG_HOME ?>/job_3.png" style="border-radius: 1%;" /></a>
               </div>
                <!-- <div class="single-happy-freelancer">
                   <img src="<?= IMG_HOME ?>/1.png" alt="testimonial 1" style="border-radius: 1%;" />
                </div>
                <div class="single-happy-freelancer">
                   <img src="<?= IMG_HOME ?>/2.png" alt="testimonial 1" style="border-radius: 1%;" />
                </div>
                <div class="single-happy-freelancer">
                   <img src="<?= IMG_HOME ?>/3.jpg" alt="testimonial 1" style="border-radius: 1%;" />
                </div> -->
                
             
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
               <h2>BROWSE JOBS BY INDUSTRY <span></span></h2>
               <p>EMPLOYERS/RECRUITERS HAVE STARTED JOINING US</p>
            </div>
         </div>
      </div>
      <div class="row">         
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder account_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-briefcase"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Accounting & Finance</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>account_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder design_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-pencil-square-o"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Design, Art & Multimedia</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>design_art.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder restaurant_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-cutlery"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Restaurant / Food Service</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>restaurent.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
      </div>
      <div class="row">         
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder account_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-briefcase"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Accounting & Finance</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>account_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder design_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-pencil-square-o"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Design, Art & Multimedia</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>design_art.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder restaurant_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-cutlery"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Restaurant / Food Service</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>restaurent.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
      </div>
      <div class="row">         
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder account_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-briefcase"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Accounting & Finance</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>account_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder design_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-pencil-square-o"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Design, Art & Multimedia</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>design_art.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder restaurant_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-cutlery"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Restaurant / Food Service</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>restaurent.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-2 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder tech_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-code"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Programming & Tech</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>programing_cat.jpg" alt="category" />
            </a>
         </div>
      </div>

      <!-- <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder data_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-bar-chart"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Data Science & Analitycs</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>data_cat.png" alt="category" />
            </a>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder writing_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-pencil"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Writing / Translations</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>writing_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder edu_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-graduation-cap"></i>
               </div>
               <div class="category-holder-text">
                  <h3>Education / Training</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>edu_cat.jpg" alt="category" />
            </a>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <a href="#" class="single-category-holder sale_cat">
               <div class="category-holder-icon">
                  <i class="fa fa-bullhorn"></i>
               </div>
               <div class="category-holder-text">
                  <h3>sales / marketing</h3>
               </div>
               <img src="<?= FRONT_IMG2 ?>sale_cat.png" alt="category" />
            </a>
         </div>
      </div> -->
      <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="#" class="jobguru-btn">browse all INDUSTRY</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Categories Area End -->
 
 <!-- Inner Hire Area Start -->
<section class="jobguru-inner-hire-area section_100">
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
              <!--  <div class="single-happy-freelancer">
                  <div class="happy-freelancer-img">
                     <img src="<?= FRONT_IMG2 ?>/testimonial-1.jpg" alt="testimonial 1" />
                  </div>
                  <div class="happy-freelancer-text">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                     <div class="happy-freelancer-info">
                        <h4>jonathon doe</h4>
                        <p>web designer</p>
                     </div>
                  </div>
               </div>
               <div class="single-happy-freelancer">
                  <div class="happy-freelancer-img">
                     <img src="<?= FRONT_IMG2 ?>/testimonial-2.jpg" alt="testimonial 1" />
                  </div>
                  <div class="happy-freelancer-text">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                     <div class="happy-freelancer-info">
                        <h4>sraboni neela</h4>
                        <p>web designer</p>
                     </div>
                  </div>
               </div>
               <div class="single-happy-freelancer">
                  <div class="happy-freelancer-img">
                     <img src="<?= FRONT_IMG2 ?>/testimonial-3.jpg" alt="testimonial 1" />
                  </div>
                  <div class="happy-freelancer-text">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                     <div class="happy-freelancer-info">
                        <h4> asif haider</h4>
                        <p>web designer</p>
                     </div>
                  </div>
               </div>
               <div class="single-happy-freelancer">
                  <div class="happy-freelancer-img">
                     <img src="<?= FRONT_IMG2 ?>/testimonial-2.jpg" alt="testimonial 1" />
                  </div>
                  <div class="happy-freelancer-text">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus molestie, justo nec convallis sollicitudin, sapien lorem dictum lacus, non consequat odio ipsum nec est.</p>
                     <div class="happy-freelancer-info">
                        <h4>sandy Pitter</h4>
                        <p>web designer</p>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Happy Freelancer End -->
 

 
 
<!-- Job Tab Area Start -->
<section class="jobguru-job-tab-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="site-heading">
               <h2>Companies & <span>job offers</span></h2>
               <p>It's easy. Simply post a job you need completed and receive competitive bids from freelancers within minutes</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class=" job-tab">
               <ul class="nav nav-pills job-tab-switch" id="pills-tab" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" id="pills-companies-tab" data-toggle="pill" href="#pills-companies" role="tab" aria-controls="pills-companies" aria-selected="true">top Companies</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="false">job openning</a>
                  </li>
               </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-companies" role="tabpanel" aria-labelledby="pills-companies-tab">
                  <div class="top-company-tab">
                     <ul>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-4.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">jamulai - consulting & finance Co.</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                 <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                 <p class="rating-company">4.9</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">view profile</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-2.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">Buildo - construction Co.</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                 <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                 <p class="rating-company">4.2</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">view profile</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-3.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">palms - school & college.</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                 <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                 <p class="rating-company">4.6</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">view profile</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-1.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">finance - consulting & business Co.</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-briefcase"></i>32 open position</p>
                                 <p class="varify"><i class="fa fa-check"></i>Verified</p>
                                 <p class="rating-company">4.9</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">view profile</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <div class="top-company-tab">
                     <ul>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-1.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">Regional Sales Manager</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $1200-$2000</p>
                                 <p class="rating-company">4.1</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">bid now</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-4.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">C Developer (Senior) C .Net</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                 <p class="rating-company">3.1</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">bid now</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-3.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">Asst. Teacher</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>3 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                 <p class="rating-company">4.3</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">bid now</a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="<?= FRONT_IMG2 ?>company-logo-2.png" alt="company list 1" />
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">civil engineer</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>30 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $2000-$2500</p>
                                 <p class="rating-company">3.7</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="#" class="jobguru-btn">bid now</a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="load-more">
               <a href="#" class="jobguru-btn">browse more listing</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Job Tab Area End -->
 
 

 

 

 
 

 
 
