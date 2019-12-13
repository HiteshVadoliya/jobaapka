<!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Forgot Password</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">Forgot Password</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="jobguru-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box" id="signup">
                     <div class="login-title">
                        <h3>Set New Password</h3>
                        
                     </div>
                     <form name="frm" id="frm" action="javascript:;" method="post" >
                        <input type="hidden" name="email" id="email" value="<?= $email ?>">
                        <input type="hidden" name="verify_string" id="verify_string" value="<?= $verify_string; ?>">
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" name="password" id="password" placeholder="Set New Password" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" name="c_password" id="c_password" placeholder="Confirm New Password" class="signup_class">
                        </div>
                        <br/>
                        <div class="single-login-field">
                           <button type="submit">Update</button>
                        </div>
                     </form>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
<script type="text/javascript">


    $(function(){
        $("#frm").validate({
                
            rules: {
                password : { required : true },
                c_password: { required : true ,equalTo: "#password" },
            },
            messages: {
               password : { required : "Please enter Password ." },
               c_password : { required : "Please enter Password ." },
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
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('Home/set_new_password_process') ?>",
            data: $("#frm").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.error=='success') {
                  $.notify({message: res.error_msg },{type: 'success'});
                  var url = '<?php echo base_url('login'); ?>';
                  setTimeout(function(){ window.location = url; }, 2000);
                } else if(res.error=='wrong'){
                    $.notify({message: res.error_msg },{type: 'danger'});
                }
                $("#frm")[0].reset(); 
            },
            error: function (error) {}
        });
        return false;
    });
</script>