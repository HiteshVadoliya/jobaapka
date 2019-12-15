<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Profile</h3>
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
                     <li><a href="javascript:;">Jobseeker</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Profile</a></li>
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
               <div class="candidate-profile">
                <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                  <div class="candidate-single-profile-info">
                     <div class="single-resume-feild resume-avatar">
                        <div class="resume-image">
                            <?php
                            $img_src = base_url().IMG_PROFILE.'author.jpg';
                            if($jobseeker_data['img_src']!="") {
                              if(file_exists(IMG_PROFILE.$jobseeker_data['img_src'])) {
                                $img_src = base_url().IMG_PROFILE.$jobseeker_data['img_src'];
                              } 
                            }
                            ?>
                           <img id="image_replace" src="<?= $img_src ?>" alt="<?= $jobseeker_data['fname'] ?>" title="<?= $jobseeker_data['fname'] ?>" >
                           <!-- <img src="<?= FRONT_IMG2 ?>author.jpg" alt="resume avatar"> -->
                           <div class="resume-avatar-hover">
                              <div class="resume-avatar-upload">
                                 <p>
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                 </p>
                                 <input type="file" name="img_src" id="img_src">
                                 <input type="hidden" value="<?= $jobseeker_data['img_src'] ?>" name="img_src_old" id="img_src_old">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="candidate-single-profile-info">
                     
                        <div class="resume-box">
                           <h3>My Profile</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">Full name :</label>
                                 <input type="text" value="<?= $jobseeker_data['fname']; ?>" id="fname" name="fname">
                              </div>
                              <div class="single-input">
                                 <label for="p_title">Email ID :</label>
                                 <input type="text" value="<?= $jobseeker_data['email']; ?>" id="email" name="email" readonly>
                              </div>
                           </div>

                           <div class="single-resume-feild ">
                              <div class="single-input">
                                 <label for="name">NUMBER  :</label>
                                 <input type="text" value="<?= $jobseeker_data['mobile']; ?>" id="mobile" name="mobile">
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
        $("#frm").validate({                       
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
        });
    });
    

    $("#frm").on('submit',function(){
        var val_form = $("#frm").valid();
        if(!val_form) { return false; }
        $(".close").trigger("click");
        var btn_old_val = $(".custom_submit").text();
        $(".custom_submit").html(btn_old_val+'...');
        
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('JobSeeker_Process/profile') ?>",
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
                  $("#image_replace").attr("src",res.img_src);
                }
               $(".custom_submit").html(btn_old_val);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>