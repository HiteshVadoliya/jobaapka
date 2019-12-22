<!-- end job head -->
<div class="job-sidebar-list-single ">
  <?php
 
  if(isset($users) && !empty($users)) {
     foreach ($users as $u_key => $u_value) {
        ?>
        <div class="sidebar-list-single job_<?= $u_value['id'] ?>">
           <div class="top-company-list  ">
              
              <div class="company-list-details">
                 <h3><a href="javascript:;"><?= $u_value['fname'] ?></a></h3>
                 <p class="company-state"><i class="fa fa-mobile" aria-hidden="true"></i> Number : <?= $u_value['mobile']; ?></p>
                 <p class="open-icon"><i class="fa fa-envelope"></i>Email : <?= $u_value['mobile']; ?>
              </div>
              
              <div class="company-list-btn">
                 <a title="View Full Profile" href="<?= base_url("view_jobseeker/".$u_value['id']) ?>" class="jobguru-btn"><i class="fa fa-user" ></i> </a>
              </div>
           </div>
        </div>
        
        <?php
     }
  } else {
    ?>
    <h1><center>No Applicant Found</center></h1>
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