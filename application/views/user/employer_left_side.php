<div class="col-lg-3 col-md-12 dashboard-left-border">
	<div class="dashboard-left">
	   <ul class="dashboard-menu">	      
	      <li class="<?php if($active_menu=="profile") { echo "active"; } ?> " ><a href="<?= base_url('employer/profile'); ?>"><i class="fa fa-users"></i>COMPANY DETAILS </a></li>
	      <li class="<?php if($active_menu=="postjob") { echo "active"; } ?> " ><a href="<?= base_url('employer/postjob'); ?>"><i class="fa fa-users"></i>POST A JOB</a></li>
	      <li class="<?php if($active_menu=="jobslisted") { echo "active"; } ?> " ><a href="<?= base_url('employer/jobslisted'); ?>"><i class="fa fa-users"></i>JOBS LISTED</a></li>
	      <li class="<?php if($active_menu=="jobalert") { echo "active"; } ?> " ><a href="<?= base_url('employer/jobalert'); ?>"><i class="fa fa-users"></i>OTHER COMPANY JOB POSTS ALERT</a></li>
	      <li class="<?php if($active_menu=="shortlisted") { echo "active"; } ?> " ><a href="<?= base_url('employer/shortlisted'); ?>"><i class="fa fa-users"></i>OTHER COMPANY JOB POSTS SHORTLIST</a></li>
	      <li class="<?php if($active_menu=="consultin") { echo "active"; } ?> " ><a href="javascript:;"><i class="fa fa-users"></i>SEARCH JOBSEEKERS</a></li>
	      <li class="<?php if($active_menu=="consultin") { echo "active"; } ?> " ><a href="javascript:;"><i class="fa fa-users"></i>JOB APPLICANTS</a></li>
	      <li class="<?php if($active_menu=="consultin") { echo "active"; } ?> " ><a href="javascript:;"><i class="fa fa-users"></i>JOBSEEKER PROFILE ALERTS</a></li>
	      <li class="<?php if($active_menu=="consultin") { echo "active"; } ?> " ><a href="<?= base_url('employer/consultin'); ?>"><i class="fa fa-users"></i>TECHNOLOGY CONSULTING</a></li>
	      
	      <li class="<?php if($active_menu=="change_password") { echo "active"; } ?> "><a href="<?= base_url("employer/change_password") ?>"><i class="fa fa-lock"></i>change password</a></li>
	      <li><a href="<?= base_url('logout'); ?>"><i class="fa fa-power-off"></i>LogOut</a></li>
	   </ul>
	</div>
</div>