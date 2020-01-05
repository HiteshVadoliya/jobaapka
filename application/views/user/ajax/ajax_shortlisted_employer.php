<!-- end job head -->
<div class="job-sidebar-list-single ">
  <?php

  if(isset($jobs) && !empty($jobs)) {
     foreach ($jobs as $j_key => $j_value) {
      $employer_data = $this->HWT->get_one_row("hwt_user","*",array("id"=>$j_value['employer_id']));
      
        ?>
        <div class="sidebar-list-single job_<?= $j_value['employer_id'] ?>">
           <div class="top-company-list  ">
             
              <div class="company-list-details">
                 <h3><a href="javascript:;"><?= $j_value['fname'] ?></a></h3>
                 <p class="company-state"><i class="fa fa-building-o" aria-hidden="true"></i> Name : <?= $j_value['company_name']; ?></p>
                 <p class="open-icon"><i class="fa fa-phone"></i>Number : <?= $j_value['mobile']; ?><p>
                 <p class="open-icon"><i class="fa fa-envelope" aria-hidden="true"></i> Email : <?= $j_value['email']; ?></p>
              </div>
              <div class="company-list-btn">
                <a title="View Profile" href="<?= base_url('employer/employer_profile_view/'.$j_value['employer_id']); ?>" class="jobguru-btn"><i class="fa fa-eye"></i></a>

                 <a title="Delete" href="javascript:;" class="jobguru-btn delete_shortlist " data-empid="<?= $j_value['employer_id']; ?>"><i class="fa fa-trash"></i></a>
              </div>
              
           </div>
        </div>
        
        <?php
     }
  } else {
    ?>
    <h2>you are yet to shortlist a jobseeker profile</h2>
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
	  get_data2(pageno);
	});
$(".delete_shortlist").on("click", function(){
	var r = confirm("Are you sure to remove from shortlist?");
	if(!r) { return false; }

	var did = $(this).attr("data-empid");
	$.ajax({
        url: "<?php echo base_url()."Employer_Process/delete_shortlist/" ?>",
        method: "POST",
        dataType: "json",
        data :{empid:did},
        success: function(data) {
        	if(data.result) {
        		$(".job_"+did).remove();
        		$.notify({message: 'Removed Successfully from shortlist.' },{type: 'success'});
            get_data2(0);
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