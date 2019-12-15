<div class="col-lg-3 col-md-12 dashboard-left-border">
   <div class="dashboard-left">
      <ul class="dashboard-menu">
         <li class="<?php if($active_menu=="dashboard") { echo "active"; } ?> ">
            <a href="<?= base_url('jobseeker/dashboard'); ?>">
            <i class="fa fa-tachometer"></i>
            Dashboard
            </a>
         </li>
         <li class="<?php if($active_menu=="profile") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/profile'); ?>"><i class="fa fa-users"></i>My Profile</a></li>
         <li class="<?php if($active_menu=="contact") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/contact'); ?>"><i class="fa fa-users"></i>CONTACT INFO</a></li>
         <li class="<?php if($active_menu=="skill") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/skill'); ?>"><i class="fa fa-users"></i>CV, PROFILE AND SKILLS</a></li>
         <li class="<?php if($active_menu=="jobalert") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/jobalert'); ?>"><i class="fa fa-users"></i>Job Alerts </a></li>
         <li class="<?php if($active_menu=="applied_job") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/applied_job'); ?>"><i class="fa fa-users"></i>Applied Jobs  </a></li>
         <li class="<?php if($active_menu=="shortlisted") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/shortlisted'); ?>"><i class="fa fa-users"></i>Shortlisted Jobs  </a></li>
         <li class="<?php if($active_menu=="shortlisted") { echo "active"; } ?> " ><a href="javascript:;"><i class="fa fa-users"></i>EMPLOYMENT HISTORY</a></li>
         <li class="<?php if($active_menu=="education") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/education'); ?>"><i class="fa fa-users"></i>EDUCATION</a></li>
         <li class="<?php if($active_menu=="other") { echo "active"; } ?> " ><a href="<?= base_url('jobseeker/other'); ?>"><i class="fa fa-users"></i>OTHER</a></li>
        <!--  <li><a href="message.html"><i class="fa fa-envelope-open"></i>messages</a></li>
         <li><a href="manage-jobs.html"><i class="fa fa-briefcase"></i>manage jobs</a></li>
         <li><a href="candidate-earnings.html"><i class="fa fa-rocket"></i>earnings</a></li> -->
         <li class="<?php if($active_menu=="change_password") { echo "active"; } ?> "><a href="<?= base_url('jobseeker/change_password'); ?>"><i class="fa fa-lock"></i>change password</a></li>
         <li><a href="<?= base_url('logout/'); ?>"><i class="fa fa-power-off"></i>LogOut</a></li>
      </ul>
   </div>
</div>