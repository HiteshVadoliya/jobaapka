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
                 <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Company name : <?= $j_value['job_location']; ?></p>
                 <p class="open-icon"><i class="fa fa-clock-o"></i>Recruiter Company name ???????</p>
                 <p class="open-icon"><i class="fa fa-history" aria-hidden="true"></i> Experience : <?= $j_value['job_exp_year']." year ".$j_value['job_exp_month']." month " ?></p>
                 <p class="varify"><i class="fa fa-money" aria-hidden="true"></i> Fixed price : <?= CURR_SYMBOL.$j_value['job_salary']; ?></p>
                 <p class="company-state"><i class="fa fa-map-marker"></i> Location : <?php echo $this->HWT->get_explode("location","title",$j_value['job_job_location']); ?></p>
                 <!-- <p class="rating-company">4.1</p> -->
              </div>
              <div class="company-list-btn">
                 <a title="View Job" href="<?= base_url("view_job/".$j_value['job_id']) ?>" class="jobguru-btn">View</a>
              </div>
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