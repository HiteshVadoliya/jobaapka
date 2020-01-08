<!-- end job head -->
<div class="job-sidebar-list-single ">
  <?php

  if(isset($jobs) && !empty($jobs)) {
     foreach ($jobs as $j_key => $j_value) {
      $employer_data = $this->HWT->get_one_row("hwt_user","*",array("id"=>$j_value['employer_id']));
      
        ?>
        <div class="sidebar-list-single job_<?= $j_value['job_id'] ?>">
           <div class="top-company-list  ">
             
              <div class="company-list-details">
                 <h3><a href="javascript:;"><?= $j_value['job_title'] ?></a></h3>
                 <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Company name : <?= $employer_data['company_name']; ?></p>
                 <p class="open-icon"><i class="fa fa-history" aria-hidden="true"></i> Experience : <?= $j_value['job_exp_year']." year ".$j_value['job_exp_month']." month " ?></p>
                 <p class="varify"><i class="fa fa-money" aria-hidden="true"></i> Fixed price : <?= CURR_SYMBOL.$j_value['job_salary']; ?></p>
                 <p class="company-state"><i class="fa fa-map-marker"></i> Location : <?php echo $this->HWT->get_explode("location","title",$j_value['job_job_location']); ?></p>
                 <!-- <p class="rating-company">4.1</p> -->
              </div>
              <div class="company-list-btn">
                 <a title="View Job" href="<?= base_url("view_job/".$j_value['job_id']) ?>" class="jobguru-btn"><i class="fa fa-eye"></i></a>
                 <a title="Delete" href="javascript:;" class="jobguru-btn delete_shortlist " data-jobid="<?= $j_value['job_id']; ?>"><i class="fa fa-trash"></i></a>
              </div>
              
           </div>
        </div>
        
        <?php
     }
  } else {
    ?>
    <h2><center>you are yet applied for any job</center></h2>
    <?php
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
$(".delete_shortlist").on("click", function(){
	var r = confirm("Are you sure to remove from applied job?");
	if(!r) { return false; }

	var did = $(this).attr("data-jobid");
	$.ajax({
        url: "<?php echo base_url()."JobSeeker_Process/delete_appliedjob/" ?>",
        method: "POST",
        dataType: "json",
        data :{jobid:did},
        success: function(data) {
        	if(data.result) {
        		$(".job_"+did).remove();
        		$.notify({message: 'Removed Successfully.' },{type: 'success'});
            get_data(0);
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