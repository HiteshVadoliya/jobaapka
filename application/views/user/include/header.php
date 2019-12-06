<!-- Header Area Start -->
<div class="col-md-12 custom_row_1">
   <div class="row">
      <table class="table ">
         <tr>
            <td><p><a href="tel:+918657430699" ><i class="fa fa-phone"></i> Mo : +91 8657430699</p></a></td>
            <td><p title="<?= $site_address ?>"> <i class="fa fa-map-marker"></i> Thane (West), Maharashtra Pin – 400601</p></td>
            <td class="top_nav" >
               <span><i class="fa fa-facebook"></i></span>
               <span><i class="fa fa-twitter"></i></span>
               <span><i class="fa fa-linkedin"></i></span>
               <span><i class="fa fa-google-plus"></i></span>
               <span><i class="fa fa-skype"></i></span>
            </td>
         </tr>
      </table>
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

            <div class="col-lg-2">
               <div class="header-right-menu">
                  <ul>
                     <li><a href="<?= base_url('whyus') ?>" class="post-jobs">WHY US</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-lg-8" style="text-align: center;">
               <div class="header-menu">
                  <nav id="navigation">
                     <ul id="jobguru_navigation">
                        <li class="active"><a href="<?= base_url('home'); ?>">HOME</a></li>
                        <!-- <li ><a href="<?= base_url('employer/profile'); ?>">EMPLOYER</a></li> -->

                        <li class=" has-children">
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
                        </li>

                        <li ><a href="<?= base_url('jobseeker/dashboard'); ?>">JOBSEEKER </a></li>
                        <!-- <li ><a href="<?= base_url('about'); ?>">ABOUT US</a></li>
                        <li ><a href="<?= base_url('whyus'); ?>">WHY US</a></li> -->
                        <li ><a href="<?= base_url('contact'); ?>">CONTACT US</a></li>
                        <li ><a href="<?= base_url('choose_signup'); ?>">JOIN US</a></li>
                        <li ><a href="<?= base_url('login'); ?>">SIGN IN</a></li>
                        
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