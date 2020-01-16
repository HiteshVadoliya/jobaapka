<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Other</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">home</a></li>
                     <li><a href="javascript:;">JobSeeker</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Other</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Breadcromb Area End -->
 
 
<!-- Candidate Dashboard Area Start -->
<section class="candidate-dashboard-area section_70">
   <div class="container">
      <div class="row">
         <?php $this->load->view(USER."jobseeker_left_side"); ?>
         
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  
                  <div class="candidate-single-profile-info">
                     <form name="frm" id="frm" action="javascript:;" method="post" >
                        <div class="resume-box">
                           <h3>OTHER DETAILS </h3>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Any specific Role or Requirement you want  :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" name="specific_role"  id="specific_role" ><?= $other['specific_role']; ?></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Projects/Internships  :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" id="project" name="project" ><?=  $other['project']; ?></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Particular Talents/Achievements - :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" id="achivement" name="achivement" ><?= $other['achivement'] ?></textarea>
                              </div>                              
                           </div>
                           <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Awards/Recognition :</label>
                                 <textarea placeholder="1000 chars max shown in placeholder" name="awards" id="awards" ><?= $other['awards']; ?></textarea>
                              </div>                              
                           </div>
                           <!-- <div class="single-resume-feild">
                              <div class="single-input">
                                 <label for="name">Profile Completeness :</label>
                                 <span>35%</span>
                              </div>                              
                           </div> -->                           
                        </div>
                        
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
<script type="text/javascript">
   $(function(){

       $("#frm").validate({                       
           rules: {                
               specific_role : { required : true },
               project : { required : true },
               achivement : { required : true },
               awards : { required : true },
           },
           messages: {
              specific_role : { required : "Please enter Details." },
              project : { required : "Please enter Details." },
              achivement : { required : "Please enter Details." },
              awards : { required : "Please enter Details." },
           },
           errorPlacement: function(error, element) {
              if (element.attr("name") == "descr") {
                   error.insertAfter(".desc_error");
               }
               else{
                   error.insertAfter(element);
               }
           }
       });
   });
   

   $("#frm").on('submit',function(){
       var val_form = $("#frm").valid();
       if(!val_form) { return false; }
       $(".close").trigger("click");
       var btn_old_val = $(".custom_submit").html();
       $(".custom_submit").html(btn_old_val+'...');
       $(".custom_submit").attr("disabled", true);
       
       $.ajax({
           type: "POST",            
           url: "<?php echo base_url('JobSeeker_Process/other') ?>",
           data: $("#frm").serialize(),
           dataType: 'json',
           success: function(res) {
               if(res.response) {
                 $.notify({message: res.msg },{type: 'success'});
               }
              $(".custom_submit").html(btn_old_val);
              $(".custom_submit").attr("disabled", false);
           },
           error: function (error) {}
       });
       return false;
   });
   
</script>


 