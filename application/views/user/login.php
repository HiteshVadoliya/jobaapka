<!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Login</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">Login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="jobguru-login-area section_70 login_section ">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="login-box" id="signup">
                     <div class="login-title">
                        <h3>Sign in</h3>
                        
                        <br/>
                        <div class="footer-bottom" style="text-align: center;">
                        <ul class="social-icons" >
                          <li style="float: none;"><a href="<?= $authUrl; ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></li>
                          <li style="float: none;"><a href="<?php echo $link_url; ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></li>
                          <li style="float: none;"><a href="<?=base_url()?>Home/login_with_google" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></li>
                       </ul>
                     </div>
                     </div>
                     <form name="frm" id="frm" action="javascript:;" method="post" >
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                           <input type="text" name="email" id="email" placeholder="Email" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" id="password" name="password" placeholder="Enter Password" class="signup_class">
                        </div>
                        
                        <div class="remember-row single-login-field clearfix">
                           <!-- <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>Keep Me Signed In</label>
                           </p> -->
                           <p class="lost-pass">
                              <a href="<?= base_url('forgot_password'); ?>">forgot password?</a>
                           </p>
                        </div>
                        <div class="single-login-field">
                           <button type="submit">Sign in</button>
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="<?= base_url('signup/'.$type) ?>">Don't have an account?</a>
                     </div>
                     
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="login-box" id="signup">
                     <?php if($type=="employer") { ?>
                     <table class="table table-responsive plan_table_1">
                          <tr>
                            <td><h4>Most affordable and unique <br><?= $plan['period']; ?> month plan</h4></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">Unlimited CV Download/Access</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">Post unlimited jobs</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">One Free technology consulting for your business issues</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                            <td class="single-login-field">
                              <a href="<?= base_url('employer_plan'); ?>" class="plan_know_more" type="button" name="" value="know more">know more</a>
                              </td>
                            <td></td>
                          </tr>
                     </table>
                    <?php } else { ?>
                      <table class="table table-responsive plan_table_1">
                          <tr>
                            <td><h4>Complete job care plan <br><?= $plan['title']; ?> Per Month</h4></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">CV Writing</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">Interview Preparation</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                            <td class="plan_1_text">New Job or Personal Job <br>assistance for <?= $plan['period']; ?> months <br>after you lose a job</td>
                            <td><i class="fa fa-check icon"></i></td>
                          </tr>
                          <tr>
                             <?php
                             if(isset($_SESSION) &&  $_SESSION[PREFIX.'id']!="") {
                               ?>
                               <td class="single-login-field">
                                <a href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="<?= $plan['title']; ?>" data-id="3">Buy Now</a>
                               </td>
                               <?php
                             } else {
                               ?>
                               <td class="single-login-field not_login_plan_">
                                <a href="<?= base_url("jobseeker_info") ?>" class="btn btn-success btn-sm " >Buy Now</a>
                               </td>
                               <?php
                             }
                             ?>
                            
                          </tr>
                      </table>
                    <?php } ?>
                     
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
                
                name : { required : true },
                email : { required : true },
            },
            messages: {

               name : { required : "Please enter name." },
               email : { required : "Please enter Email ." },
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
            url: "<?php echo base_url('Home/login_process') ?>",
            data: $("#frm").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.error=='success') {
                  $.notify({message: res.error_msg },{type: 'success'});
                  if(res.type=='jobseeker') {
                  var url = '<?php echo base_url('jobseeker/dashboard'); ?>';
                  } else {
                  var url = '<?php echo base_url('employer/profile'); ?>';
                  }
                  setTimeout(function(){ window.location = url; }, 2000);                  
                } else if(res.error=='verification'){
                    $.notify({message: res.error_msg },{type: 'danger'});
                } else if(res.error=='not_in'){
                    $.notify({message: res.error_msg },{type: 'danger'});
                }
                $("#frm")[0].reset(); 
            },
            error: function (error) {}
        });
        return false;
    });
</script>