<div class="col-lg-3 col-md-12 dashboard-left-border">
   <div class="dashboard-left">
      <ul class="dashboard-menu">
         <li class="<?php if($active_menu=="dashboard") { echo "active"; } ?> ">
            <a href="<?= base_url('jobseeker/dashboard'); ?>">
            <i class="fa fa-tachometer"></i>
            Dashboard
            </a>
         </li>
         <li class="<?php if($active_menu=="profile") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/profile'); ?>"><i class="fa fa-user-circle" aria-hidden="true"></i>MY PROFILE</a></li>
         <li class="<?php if($active_menu=="contact") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/contact'); ?>"><i class="fa fa-address-book-o" aria-hidden="true"></i>CONTACT INFO</a></li>
         <li class="<?php if($active_menu=="skill") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/skill'); ?>"><i class="fa fa-file-text" aria-hidden="true"></i>CV, PROFILE AND SKILLS</a></li>
         <li class="<?php if($active_menu=="jobalert") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/jobalert'); ?>"><i class="fa fa-bell-o" aria-hidden="true"></i>JOB ALERTS </a></li>
         <li class="<?php if($active_menu=="applied_job") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/applied_job'); ?>"><i class="fa fa-briefcase" aria-hidden="true"></i>APPLIED JOBS  </a></li>
         <li class="<?php if($active_menu=="shortlisted") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/shortlisted'); ?>"><i class="fa fa-chain-broken" aria-hidden="true"></i>SHORTLISTED JOBS  </a></li>
         <li class="<?php if($active_menu=="shortlisted-") { echo "active"; } ?> " ><a href="javascript:;"><i class="fa fa-history" aria-hidden="true"></i>EMPLOYMENT HISTORY</a></li>
         <li class="<?php if($active_menu=="education") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/education'); ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i>EDUCATION</a></li>
         <li class="<?php if($active_menu=="other") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/other'); ?>"><i class="fa fa-ravelry" aria-hidden="true"></i>OTHER</a></li>
        <!--  <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li>
         <li><a href="manage-jobs.html"><i class="fa fa-briefcase"></i>manage jobs</a></li>
         <li><a href="candidate-earnings.html"><i class="fa fa-rocket"></i>earnings</a></li> -->
         <li class="<?php if($active_menu=="change_password") { echo "active"; } ?> "><a href="<?= base_url('jobseeker/change_password'); ?>"><i class="fa fa-lock"></i>CHANGE PASSWORD</a></li>
         <li><a href="<?= base_url('logout/'); ?>"><i class="fa fa-power-off"></i>LOGOUT</a></li>
      </ul>
   </div>
</div>