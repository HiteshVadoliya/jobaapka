<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Change Password</h3>
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
                     <li class="active-breadcromb"><a href="javascript:;">Change Password</a></li>
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
         <?php $this->load->view(USER."employer_left_side"); ?>
         
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="candidate-profile">
                  <div class="candidate-single-profile-info">
                     <form name="frm" id="frm" action="javascript:;" method="post" >
                        <div class="resume-box">
                           <h3>Change Password</h3>
                           <div class="single-resume-feild ">
                              <div class="single-input">
                                 <label for="name">Current Password :</label>
                                 <input type="password" value="" id="curr_password" name="curr_password" autocomplete="off">
                              </div>
                           </div>

                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">New Password :</label>
                                 <input type="password" value="" id="password" name="password" autocomplete="off">
                              </div>
                              <div class="single-input">
                                 <label for="p_title">Confirm New Password :</label>
                                 <input type="password" value="" id="c_password" name="c_password" autocomplete="off">
                              </div>
                           </div>                           
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
                curr_password : { required : true },
                password : { required : true },
                c_password: { required : true ,equalTo: "#password" },
            },
            messages: {
               curr_password : { required : "Please enter current Password." },
               password : { required : "Please enter new password." },
               c_password : { required : "Please enter new password again." },              
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
            url: "<?php echo base_url('Employer_Process/password') ?>",
            data: $("#frm").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.response) {
                  $.notify({message: res.msg },{type: 'success'});
                  $("#frm")[0].reset();
                }
               $(".custom_submit").html(btn_old_val);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>