 
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Education</h3>
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
                     <li class="active-breadcromb"><a href="javascript:;">Education</a></li>
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
         <?php $this->load->view(USER."jobseeker_left_side.php"); ?>
         
         <div class="col-lg-9 col-md-12">
                           <div class="dashboard-right">
                              <div class="manage-jobs">
                                 <div class="manage-jobs-heading">
                                    <h3>EDUCATIONAL BACKGROUND</h3>
                                 </div>
                                 <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                                    <div class="candidate-single-profile-info">
                        
                                       <div class="resume-box">
                                          
                                          <div class="single-resume-feild ">
                                             <div class="single-input">
                                                <label for="name">Post Graduation  :</label>
                                                <textarea name="post_graduation" id="post_graduation" ><?= (isset($edu) && !empty($edu['post_graduation'])) ? $edu['post_graduation'] : ''; ?></textarea>
                                             </div>
                                          </div>

                                          <div class="single-resume-feild ">
                                             <div class="single-input">
                                                <label for="name">Graduation  :</label>
                                                <textarea name="graduation" id="graduation" class="form-control" ><?= (isset($edu) && !empty($edu['graduation'])) ? $edu['graduation'] : ''; ?></textarea>
                                             </div>
                                          </div>

                                          <div class="single-resume-feild ">
                                             <div class="single-input">
                                                <label for="name">Other :</label>
                                                <textarea name="other" id="other" class="form-control" ><?= (isset($edu) && !empty($edu['other'])) ? $edu['other'] : ''; ?></textarea>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       
                                       <div class="submit-resume">
                                          <button type="submit" class="custom_submit">Update</button>
                                       </div>
                                    </div>
                               </form>
                              </div>
                           </div>
                        </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->

<script type="text/javascript">
    $(function(){
        /*$("#frm").validate({                       
            rules: {                
                fname : { required : true },
                email : { required : true,email:true },
                mobile : { required : true },
            },
            messages: {
               fname : { required : "Please enter name." },
               email : { required : "Please enter Email ." },
               mobile : { required : "Please enter Mobile ." },              
            },
            errorPlacement: function(error, element) {
               if (element.attr("name") == "descr") {
                    error.insertAfter(".desc_error");
                }
                else{
                    error.insertAfter(element);
                }
            }
        });*/
    });
    

    $("#frm").on('submit',function(){
       /* var val_form = $("#frm").valid();
        if(!val_form) { return false; }*/
        $(".close").trigger("click");
        var btn_old_val = $(".custom_submit").text();
        $(".custom_submit").html(btn_old_val+'...');
        
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('JobSeeker_Process/education') ?>",
            data: $("#frm").serialize(),
            data: new FormData(this),
            // data: $("#frm").serialize(),
           contentType: false,  
           cache: false,  
           processData:false,  
           dataType: "json",
            success: function(res) {
                if(res.response) {
                  $.notify({message: res.msg },{type: 'success'});
                }
               $(".custom_submit").html(btn_old_val);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>
 