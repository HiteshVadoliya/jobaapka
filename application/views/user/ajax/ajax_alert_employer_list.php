<!-- end job head -->
<div class="job-sidebar-list-single ">
  <?php
  if(isset($jobs) && !empty($jobs)) {
   /* echo "<pre>";
    print_r($jobs);
    echo "</pre>";*/

     foreach ($jobs as $j_key => $j_value) {
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
                <a title="Shortlist" href="javascript:;" class="jobguru-btn add_shortlist" data-empid="<?= $j_value['employer_id'] ?>"><i class="fa fa-star"></i></a>
                <a title="View Profile" href="<?= base_url('employer/employer_profile_view/'.$j_value['employer_id']); ?>" class="jobguru-btn"><i class="fa fa-eye"></i></a>
                <a title="View Jobs" href="<?= base_url('employer/view_employer_jobs/'.$j_value['employer_id']); ?>" class="jobguru-btn"><i class="fa fa-bars"></i></a>
              </div>
              
           </div>
        </div>
        
        <?php
     }
  } else {
    ?>
    <p><center>No Result Found</center></p>
    <?php
  }
  ?>                 
</div>

<div class="container">
<div class="pull-right" id='pagination'><?php echo $page_link ?></div>
</div>
<script type="text/javascript">

  $(".add_shortlist").on("click", function(){

    var empid = $(this).attr("data-empid");

    $.ajax({
          url: "<?php echo base_url()."Employer_Process/add_shortlist/" ?>",
          method: "POST",
          dataType: "json",
          data :{empid:empid},
          success: function(data) {

            if(data.result) {
              $.notify({message: data.message },{type: 'success'});
            } else {
              $.notify({message: data.message },{type: 'danger'});
            }
            if(data.result_type=="Add") {
              //$(".add_shortlist").addClass("shortlist_active");
            } else {
              //$(".add_shortlist").removeClass("shortlist_active");
            }
          },
          error: function(data) {
              //console.log(data);
          }
      });
  });
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