
  
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

            <br/><br/>
            <div class="dashboard-right">
               <div class="candidate-profile">
                <form action="javascript:;" method="post" enctype="multipart/form-data">
                  <div class="resume-box">
                     <h3>Profile Picture</h3>
                  <div class="candidate-single-profile-info">
                     <div class="single-resume-feild resume-avatar">
                      <div class="row">
                        <div class="col-md-6 text-center">
                        <div id="upload-demo" style="width:350px"></div>
                        </div>
                        <div class="col-md-6" style="">
                        <div id="upload-demo-i" style="background:#e1e1e1;width:250px;padding:30px;height:250px;margin-top:30px"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4" style="padding-top:30px;">
                        <strong>Select Image:</strong>
                        <input type="file" id="upload">
                        <br/>
                        <button class="btn btn-success upload-result">Upload and Save Image</button>
                        </div>
                      </div>
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
        var btn_old_val = $(".custom_submit").html();
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
                  // $("#image_replace").attr("src",res.img_src);
                }
               $(".custom_submit").html(btn_old_val);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>
 <!-- <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> -->
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
 <script type="text/javascript">
 $uploadCrop = $('#upload-demo').croppie({
     enableExif: true,
     viewport: {
         width: 200,
         height: 200,
         type: 'circle'
     },
     boundary: {
         width: 300,
         height: 300
     }
 });
      
 $('#upload').on('change', function () { 
  var reader = new FileReader();
     reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
          
     }
     reader.readAsDataURL(this.files[0]);
 });
      
 $('.upload-result').on('click', function (ev) {
  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {
      
    $.ajax({
      url: '<?php echo base_url('/my-form-upload'); ?>',
      type: "POST",
      data: {"image":resp},
      success: function (data) {
        html = '<img src="' + resp + '" />';
        $("#upload-demo-i").html(html);
        $(".resume-image").html(html);
      }
    });
  });
 });
     
 </script>
 
