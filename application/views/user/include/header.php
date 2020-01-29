<!-- Header Area Start -->
<?php
$bg_nav = "";
if(FILE_NAME!="index.php" && FILE_NAME!="contact" && FILE_NAME!="home") {
   $bg_nav = "#9bc4e1";
}
?>
<div class="col-md-12 custom_row_1" style="background: <?= $bg_nav; ?>;">
   <div class="row">

   <div class="col-lg-3">
      <p style="margin-top: 9px;"><a href="tel:<?= $site_phone ?>"  style="color: #777;" ><i class="fa fa-phone"></i> <?= $site_phone ?></p></a>
   </div>

   <div class="col-lg-3">
      <p style="margin-top: 9px;" title="<?= $site_address ?>"> <i class="fa fa-map-marker"></i> Thane (West), Maharashtra Pin – 400601</p>
   </div>
   <div class="col-lg-3">
      <p style="margin-top: 9px;" title="<?= $site_address ?>"> <a class="gplus" href="mailto:<?= $site_email; ?>"><i class="fa fa-envelope" style="margin-left: 90px;"></i> <?= $site_email; ?></a></p>
   </div>

   <div class="col-lg-3 footer-bottom">
      <ul class="social-icons" style="float: right;">

                  <li><a class="facebook" href="<?= $site_fb; ?>"><i class="fa fa-facebook"  style="margin-left: 5px;"></i></a></li>
                  <li><a class="twitter" href="<?= $site_twitter; ?>"><i class="fa fa-twitter"  style="margin-left: 5px;"></i></a></li>
                  <!-- <li><a class="gplus" href="#"><i class="fa fa-google-plus" style="margin-left: 5px;"></i></a></li> -->
                  <li><a class="gplus" href="mailto:<?= $site_email; ?>"><i class="fa fa-envelope" style="margin-left: 5px;"></i></a></li>
                  <li><a class="linkedin" href="<?= $site_instagram; ?>"><i class="fa fa-linkedin" style="margin-left: 5px;"></i></a></li>
                  <?php /*<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>*/ ?>
               </ul>
   </div>

      
   </div>
</div>
<header class="jobguru-header-area stick-top forsticky <?php if($active_menu!='home') { echo 'page-header'; } ?> ">
   <div class="menu-animation">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-2">
               <div class="site-logo">
                  <a href="<?= base_url(); ?>">
                  <img src="<?= FRONT_IMG ?>logo/<?= $site_logo ?>" alt="<?= $site_title ?>" class="non-stick-logo" />
                  <img src="<?= FRONT_IMG ?>logo/<?= $site_logo ?>" alt="<?= $site_title ?>" class="stick-logo" />
                  </a>
               </div>
               <!-- Responsive Menu Start -->
               <div class="jobguru-responsive-menu"></div>
               <!-- Responsive Menu Start -->
            </div>

            <div class="col-lg-4">
               <div class="header-right-menu">
                  <ul>
                     <li><a href="<?= base_url('whyus') ?>" class="post-jobs animate-flicker">WHY US</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-lg-6" >
               <div class="header-menu">
                  <nav id="navigation">
                     <ul id="jobguru_navigation">
                        <li class="active"><a href="<?= base_url('home'); ?>">HOME</a></li>
                        <?php
                        if(isset($_SESSION[PREFIX.'id'])) {
                           if($_SESSION[PREFIX.'type']=="employer") {
                           ?>
                           <li><a href="<?= base_url('employer_info'); ?>">EMPLOYER </a></li>
                           <?php
                           } else { 
                           ?>
                           <li><a href="<?= base_url('employer_info'); ?>">EMPLOYER </a></li>
                           <?php
                           }
                        } else {
                           ?>
                           <li><a href="<?= base_url('employer_info'); ?>">EMPLOYER </a></li>
                           <?php
                        }
                        ?>
                        <!-- <li class="active"><a href="javascript:;">EMPLOYER</a></li> -->
                        <!-- <li ><a href="<?= base_url('employer/profile'); ?>">EMPLOYER</a></li> -->

                        <!-- <li class="has-children ">
                           <a href="<?= base_url('employer/profile'); ?>">EMPLOYER</a>
                            <ul>
                              <li><a href="<?= base_url('employer/profile'); ?>">COMPANY DETAILS</a></li>
                              <li><a href="<?= base_url('employer/postjob'); ?>">POST A JOB</a></li>
                              <li><a href="<?= base_url('employer/jobslisted'); ?>">JOBS LISTED</a></li>
                              <li><a href="<?= base_url('employer/jobalert'); ?>">OTHER COMPANY JOB POSTS ALERT </a></li>
                              <li><a href="<?= base_url('employer/shortlisted'); ?>">OTHER COMPANY JOB POSTS SHORTLIST</a></li>
                              <li><a href="javascript:;">SEARCH JOBSEEKERS</a></li>
                              <li><a href="<?= base_url('employer/application'); ?>">JOB APPLICANTS</a></li>
                              <li><a href="<?= base_url('employer/alerts'); ?>">JOBSEEKER PROFILE ALERTS</a></li>
                              <li><a href="<?= base_url('employer/consultin'); ?>">TECHNOLOGY CONSULTING </a></li>
                           </ul> 
                        </li> -->
                        <?php
                        if(isset($_SESSION[PREFIX.'id'])) {
                           if($_SESSION[PREFIX.'type']=="jobseeker") {
                              ?>
                              <li><a href="<?= base_url('jobseeker_info'); ?>">JOBSEEKER </a></li>
                              <?php
                           } else {
                           ?>
                           <li><a href="<?= base_url('jobseeker_info'); ?>">JOBSEEKER </a></li>
                           <?php
                           }
                        } else {
                           ?>
                           <li><a href="<?= base_url('jobseeker_info'); ?>">JOBSEEKER </a></li>
                           <?php
                        }
                        ?>
                        <!-- <li ><a href="<?= base_url('about'); ?>">ABOUT US</a></li>
                        <li ><a href="<?= base_url('whyus'); ?>">WHY US</a></li> -->
                        <li ><a href="<?= base_url('contact'); ?>">CONTACT US</a></li>
                        <?php
                        if(isset($_SESSION[PREFIX.'id']) && !empty($_SESSION[PREFIX.'id'])) {
                           ?>
                           <li class="has-children "> <!-- has-children -->
                              <a href="<?= base_url($_SESSION[PREFIX.'type'].'/profile'); ?>">PROFILE</a>
                               <ul>
                                 <li><a href="<?= base_url($_SESSION[PREFIX.'type'].'/profile'); ?>"><?= strtoupper($_SESSION[PREFIX.'name']) ?></a></li>
                                 <li><a href="<?= base_url('logout'); ?>">LOGOUT</a></li>
                              </ul> 
                           </li>
                           <?php
                        } else {
                           ?>
                           <li ><a href="<?= base_url('choose_login'); ?>">JOIN US</a></li>
                           <!-- <li ><a href="<?= base_url('login'); ?>">SIGN IN</a></li> -->
                           <li class="has-children " ><a href="<?= base_url('choose_login'); ?>">SIGN IN</a>
                               <ul>
                                 <li><a href="<?= base_url('login/employer'); ?>">EMPLOYER</a></li>
                                 <li><a href="<?= base_url('login/jobseeker'); ?>">JOBSEEKER</a></li>
                              </ul> 
                           </li>
                           <?php
                        }
                        ?>
                        
                        <!-- <li class=" has-children">
                           <a href="#">for candidates</a>
                           <ul>
                              <li class="has-inner-child">
                                 <a href="#">browse jobs</a>
                                 <ul>
                                    <li><a href="browse-jobs.html">full page grid</a></li>
                                    <li><a href="job-grid-sidebar.html">grid sidebar</a></li>
                                    <li><a href="job-list-sidebar.html">list sidebar</a></li>
                                 </ul>
                              </li>
                              <li><a href="browse-categories.html">Browse Categories</a></li>
                              <li><a href="browse-companies.html">browse companies</a></li>
                              <li><a href="single-candidates.html">candidates details</a></li>
                              <li><a href="submit-resume.html">submit resume</a></li>
                              <li class="has-inner-child">
                                 <a href="#">candidate dashboard</a>
                                 <ul>
                                    <li><a href="candidate-dashboard.html">Candidate dashboard</a></li>
                                    <li><a href="candidate-profile.html">Candidate profile</a></li>
                                    <li><a href="message.html">messages</a></li>
                                    <li><a href="manage-jobs.html">manage jobs</a></li>
                                    <li><a href="candidate-earnings.html">earnings</a></li>
                                    <li><a href="change-password.html">change password</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="has-children">
                           <a href="#">for employers</a>
                           <ul>
                              <li><a href="browse-candidates.html">Browse Candidates</a></li>
                              <li><a href="single-company.html">company details</a></li>
                              <li><a href="post-job.html">Post A job</a></li>
                              <li class="has-inner-child">
                                 <a href="#">employer dashboard</a>
                                 <ul>
                                    <li><a href="employer-dashboard.html">employer dashboard</a></li>
                                    <li><a href="company-profile.html">company profile</a></li>
                                    <li><a href="message.html">messages</a></li>
                                    <li><a href="manage-candidates.html">manage candidates</a></li>
                                    <li><a href="transaction.html">transaction</a></li>
                                    <li><a href="change-password.html">change password</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="has-children">
                           <a href="#">pages</a>
                           <ul>
                              <li><a href="about.html">About us</a></li>
                              <li class="has-inner-child">
                                 <a href="#">blog</a>
                                 <ul>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="single-blog.html">single blog</a></li>
                                 </ul>
                              </li>
                              <li><a href="job-page.html">job page</a></li>
                              <li><a href="login.html">login</a></li>
                              <li><a href="register.html">register</a></li>
                              <li><a href="contact.html">contact us</a></li>
                           </ul>
                        </li> -->
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- <div class="col-lg-4">
               <div class="header-right-menu">
                  <ul>
                     <li><a href="javascript:;" class="post-jobs">Post jobs</a></li>
                     <li><a href="<?= base_url('/signup'); ?>"><i class="fa fa-user"></i>JOIN US</a></li>
                     <li><a href="<?= base_url('/login'); ?>"><i class="fa fa-lock"></i>SIGN IN</a></li>
                  </ul>
               </div>
            </div> -->
            <!-- <div class="col-lg-2">
               <div class="header-right-menu">
                  <ul>
                     <li><a href="javascript:;" class="post-jobs">Share</a></li>
                  </ul>
               </div>
            </div> -->
         </div>
      </div>
   </div>
</header>
<!-- Header Area End -->

