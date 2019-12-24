<!-- end job head -->
<div class="job-sidebar-list-single ">
  <?php
  if(isset($jobs) && !empty($jobs)) {
     foreach ($jobs as $j_key => $j_value) {
        ?>
        <div class="sidebar-list-single job_<?= $j_value['job_id'] ?>">
           <div class="top-company-list  ">
              <!-- <div class="company-list-logo">
                 <a href="#">
                 <img src="<?= FRONT_IMG2 ?>company-logo-1.png" alt="company list 1">
                 </a>
              </div> -->
              <div class="company-list-details">
                 <h3><a href="javascript:;"><?= $j_value['job_title'] ?></a></h3>
                 <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Company name : <?= $j_value['company_name']; ?></p>
                 <p class="open-icon"><i class="fa fa-clock-o"></i>Recruiter Company name ???????</p>
                 <p class="open-icon"><i class="fa fa-history" aria-hidden="true"></i> Experience : <?= $j_value['job_exp_year']." year ".$j_value['job_exp_month']." month " ?></p>
                 <p class="varify"><i class="fa fa-money" aria-hidden="true"></i> Fixed price : <?= CURR_SYMBOL.$j_value['job_salary']; ?></p>
                 <p class="company-state"><i class="fa fa-map-marker"></i> Location : <?php echo $this->HWT->get_explode("location","title",$j_value['job_job_location']); ?></p>
                 <!-- <p class="rating-company">4.1</p> -->
              </div>
              <?php
              if($type=='job_applicants') {

                 $wh = array("isDelete"=>0,"status"=>1,"applied_job !="=>"","type"=>"jobseeker","applied_job !="=>"");
                 $res3 = $this->HWT->get_hwt( "hwt_user", "*", $wh );
                 $users_array = array();
                 foreach ($res3 as $key => $value) {
                     
                     $check_in = explode(",", $value['applied_job']);
                     if(in_array($j_value['job_id'], $check_in)) {
                         if (($key = array_search($j_value['job_id'], $check_in)) !== false) {
                             $users_array[] = $value['id'];

                         }
                     }
                 }
              ?>
              <div class="company-list-btn">
                 <a title="View Applicants" href="<?= base_url("employer/applicants/".$j_value['job_id']) ?>" class="jobguru-btn"><i class="fa fa-bars" ></i> <?= count($users_array); ?></a>
              </div>
              <?php
              } else {
              ?>
              <div class="company-list-btn">
                 <a title="Edit" href="<?= base_url("employer/postjob/".$j_value['job_id']) ?>" class="jobguru-btn"><i class="fa fa-pencil" ></i></a>
                 <a title="Delete" href="javascript:;" class="jobguru-btn delete_job " data-jobid="<?= $j_value['job_id'] ?>" ><i class="fa fa-trash"></i></a>
              </div>
              <?php } ?>
           </div>
        </div>
        
        <?php
     }
  }
  ?>                 
</div>

<div class="container">
<div class="pull-right" id='pagination'><?php echo $page_link ?></div>
</div>
<script type="text/javascript">
	 $('#pagination').on('click','li a',function(e){
	  e.preventDefault(); 
	  var pageno = $(this).attr('data-ci-pagination-page');
	  get_data(pageno);
	});
$(".delete_job").on("click", function(){
	var r = confirm("Are you sure to delete?");
	if(!r) { return false; }

	var did = $(this).attr("data-jobid");
	$.ajax({
        url: "<?php echo base_url()."Employer_Process/delete_job/" ?>",
        method: "POST",
        dataType: "json",
        data :{did:did},
        success: function(data) {
        	if(data.result) {
        		$(".job_"+did).remove();
        		$.notify({message: 'Job Deleted Successfully.' },{type: 'success'});
        	} else {
        		$.notify({message: 'Something Went wrong..' },{type: 'danger'});
        	}
        },
        error: function(data) {
            console.log(data);
        }
    });
});
</script>