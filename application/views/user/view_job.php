Single Candidate Start -->
<section class="single-candidate-page section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-9 col-lg-6">
            <div class="single-candidate-box">
               <div class="single-candidate-img">
                  <?php
                  $img_src = base_url().IMG_COMPANY_LOGO.'company_page_logo.jpg';
                  if($jobs['img_src']!="") {
                    if(file_exists(IMG_COMPANY_LOGO.$jobs['img_src'])) {
                      $img_src = base_url().IMG_COMPANY_LOGO.$jobs['img_src'];
                    } 
                  }
                  ?>
                  <img src="<?= $img_src ?>" alt="<?= $jobs['job_title']; ?>" title="<?= $jobs['job_title']; ?>" />
               </div>
               <div class="single-candidate-box-right">
                  <h4><?= $jobs['job_title']; ?></h4>
                  <div class="job-details-meta">
                     <!-- <p><i class="fa fa-file-text"></i> Applications 1</p> -->
                     <!-- <p><i class="fa fa-calendar"></i> July 29, 2017</p> -->
                     <p><i class="fa fa-calendar"></i> <?= date("M d, Y", strtotime($jobs['job_date'])); ?></p>
                     <p><i class="fa fa-calendar"></i> <?= date("M d, Y", strtotime($jobs['job_date_expired'])); ?></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="col-md-3 col-lg-6">
            <div class="single-candidate-action">
               <a href="#" class="candidate-contact"><i class="fa fa-star"></i>Bookmarks</a>
            </div>
         </div> -->
      </div>
   </div>
</section>
<!-- Single Candidate End -->
 
 
<!-- Single Candidate Bottom Start -->
<section class="single-candidate-bottom-area section_70">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-lg-9">
            <div class="single-candidate-bottom-left">
               <div class="single-candidate-widget">
                  <h3>Skills</h3>
                  <?= nl2br($jobs['job_skill']); ?>
               </div>
               <div class="single-candidate-widget clearfix">
                  <h3>Additional Skills</h3>
                  <?= nl2br($jobs['job_additional_skill']); ?>
               </div>
               <div class="single-candidate-widget clearfix">
                  <h3>Job Description</h3>
                  <?= nl2br($jobs['job_descr']); ?>
               </div>
               <div class="single-candidate-widget clearfix">
                  <h3>Additonal Roles And Responsibilities</h3>
                  <?= nl2br($jobs['job_additional_role']); ?>
               </div>
               <div class="single-candidate-widget clearfix">
                  <h3>share this post</h3>
                  <ul class="share-job">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-lg-3">
            <div class="single-candidate-bottom-right">
               <div class="single-candidate-widget-2">
                  <a href="#" class="jobguru-btn-2">
                  <i class="fa fa-paper-plane-o"></i>
                  Apply Now
                  </a>
               </div>
               <div class="single-candidate-widget-2">
                  <h3>Job overview</h3>
                  <ul class="job-overview">
                     <li>
                        <h4><i class="fa fa-money" aria-hidden="true"></i> Offerd Salary</h4>
                        <p><?= CURR_SYMBOL.$jobs['job_salary']; ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-map-marker"></i> Location</h4>
                        <p><?= $this->HWT->get_explode("location","title",$jobs['job_job_location']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-industry" aria-hidden="true"></i> Industry</h4>
                        <p><?= $this->HWT->get_explode("industry","title",$jobs['job_industry']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-tasks" aria-hidden="true"></i> Job Function</h4>
                        <p><?= $this->HWT->get_explode("job_function","title",$jobs['job_job_function']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa fa-graduation-cap"></i> Education</h4>
                        <p><?= $this->HWT->get_explode("education","title",$jobs['job_education']); ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-history" aria-hidden="true"></i> Experience</h4>
                        <p><?= $jobs['job_exp_year']." year ".$jobs['job_exp_month']." month " ?></p>
                     </li>
                     <li>
                        <h4><i class="fa fa-clock-o"></i> Date Posted</h4>
                        <p><?= date("M d, Y", strtotime($jobs['job_date'])); ?></p>
                     </li>
                  </ul>
               </div>
               <div class="single-candidate-widget-2">
                  <h3>Quick Contacts</h3>
                  <form>
                     <p>
                        <input type="text" placeholder="Your Name">
                     </p>
                     <p>
                        <input type="email" placeholder="Your Email Address">
                     </p>
                     <p>
                        <textarea placeholder="Write here your message"></textarea>
                     </p>
                     <p>
                        <button type="submit">Send Message</button>
                     </p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Single Candidate Bottom End