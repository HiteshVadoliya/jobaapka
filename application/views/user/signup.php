<style type="text/css">
  #frmCheckPassword {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
  .demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
  #password-strength-status {padding: 5px 10px;color: #FFFFFF; border-radius:4px;margin-top:5px;}
  .medium-password{background-color: #E4DB11;border:#BBB418 1px solid;}
  .weak-password{background-color: #FF6600;border:#AA4502 1px solid;}
  .strong-password{background-color: #12CC1A;border:#0FA015 1px solid;}
</style>
<!-- //https://codepen.io/samsurysites/pen/vKsaL -->
<!--Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>SIGN UP</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">SIGN UP</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->

      <section class="jobguru-login-area section_70 signup_section">
         <div class="container">
            <div class="row">
                  <?php if($signup_type=="jobseeker") { ?>
                  <div class="col-md-6">  
                    <div class="login-box" id="signup">
                         <div class="login-title">  
                            <h3>SIGN UP WITH</h3>
                            <br/>
                            <div class="footer-bottom" style="text-align: center;">
                            <ul class="social-icons" >
                               <li style="float: none;"><a href="<?= $authUrl ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></li>
                               <li style="float: none;"><a href="<?= $link_url; ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></li>
                               <li style="float: none;"><a href="<?=base_url()?>Home/login_with_google" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></li>                           
                            </ul>
                         </div>                        
                       </div>

                       <form name="frm" id="frm" action="javascript:;" method="post" >
                          <input type="hidden" name="type" id="type" value="jobseeker">
                          <div class="single-login-field inner-addon left-addon">
                             <i class="fa fa-user-circle-o inner-text" aria-hidden="true"></i>
                             <input type="text" id="name" name="name" placeholder="Name" class="signup_class">
                          </div>
                          <div class="single-login-field inner-addon left-addon">
                             <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                             <input type="email" id="email" name="email" placeholder="Email Addresss" class="signup_class">
                          </div>
                          <div class="single-login-field inner-addon left-addon">
                             <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                             <input type="password" name="password" id="password" placeholder="Choose Password" class="signup_class" onKeyUp="checkPasswordStrength();">
                            <div id="password-strength-status"></div>
                          </div>
                          <div class="single-login-field inner-addon left-addon">
                             <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                             <input type="password" id="c_password" name="c_password" placeholder="Confirm Password" class="signup_class">
                          </div>
                          <div class="single-login-field inner-addon left-addon">
                             <i class="fa fa-mobile inner-text" aria-hidden="true" class="signup_class"></i>
                             <input type="text" name="mobile" id="mobile" placeholder="Mobile Number">
                          </div>
                          <div class="single-login-field">
                             <select name="job_location" id="job_location" class="form-control signup_class" >
                                <option value="">Company location</option>
                                <?php
                                if(isset($collection['job_function']) && !empty($collection['job_function']))
                                {
                                  $job_function = $collection['job_function'];
                                  foreach ($job_function as $j_key => $j_value) {
                                    ?>
                                    <option value="<?= $j_value['id'] ?>" ><?= $j_value['title']; ?></option>
                                    <?php
                                  }
                                }
                                ?>
                             </select>
                          </div>
                          <div class="single-login-field">
                                <select name="exp_year" id="exp_year" class="form-control signup_class" >
                                   <option value="">Experience in years</option>
                                   <?php
                                   if(isset($collection['exp_year']) && !empty($collection['exp_year']))
                                   {
                                     $exp_year = $collection['exp_year'];
                                     foreach ($exp_year as $e_key => $e_value) {
                                       ?>
                                       <option value="<?= $e_value ?>" ><?= $e_value; ?></option>
                                       <?php
                                     }
                                   }
                                   ?>
                                </select>                              
                          </div>
                          <div class="single-login-field">
                                <select name="exp_month" id="exp_month" class="form-control signup_class" >
                                   <option value="">Experience in month</option>
                                   <?php
                                   if(isset($collection['exp_month']) && !empty($collection['exp_month']))
                                   {
                                     $exp_month = $collection['exp_month'];
                                     foreach ($exp_month as $m_key => $m_value) {
                                       ?>
                                       <option value="<?= $m_value ?>" ><?= $m_value; ?></option>
                                       <?php
                                     }
                                   }
                                   ?>
                                </select>                              
                          </div>
                          <div class=" single-login-field clearfix">
                             <p class="checkbox remember">
                                <input class="checkbox-spin" type="checkbox" id="Freelance">
                                <label for="Freelance"><span></span>accept terms & conditions</label>
                             </p>
                          </div>

                          <div class="single-login-field">
                             <button type="submit">COMPLETE REGISTRATION</button>
                          </div>
                       </form>
                       <div class="dont_have">
                          <a href="<?= base_url('login/jobseeker') ?>">Already have an account? Sign in</a>
                          <br>
                          <a href="<?= base_url('forgot_password'); ?>">Forgot Email/Password?</a>
                       </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="login-box" id="signup">
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
                               <td class="single-login-field not_login_plan">
                                <a href="javascript:void(0)" class="btn btn-success btn-sm " >Buy Now</a>
                               </td>
                               <?php
                             }
                             ?>
                            
                          </tr>
                      </table>
                    </div>
                  </div>


                  <?php } else if($signup_type=="employer") { ?>
                    <div class="col-md-6">
                      <div class="login-box" id="signup">
                         <div class="login-title">
                            <h3>SIGN UP WITH</h3>
                            <br/>
                            <div class="footer-bottom" style="text-align: center;">
                            <ul class="social-icons" >

                                        <li style="float: none;"><a href="<?= $authUrl ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></li>
                                        <li style="float: none;"><a href="<?= $link_url; ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></li>
                                        <li style="float: none;"><a href="<?=base_url()?>Home/login_with_google" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></li>
                                        
                                     </ul>
                         </div>
                         </div>
                          <form name="frm_2" id="frm_2" action="javascript:;" method="post" >
                         <input type="hidden" name="type" id="type" value="employer">                        
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-building-o inner-text" aria-hidden="true"></i>
                               <input type="text" name="company_name" id="company_name" placeholder="COMPANY NAME" class="signup_class">
                            </div>
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-user-circle-o inner-text" aria-hidden="true"></i>
                               <input type="text" id="name" name="name" placeholder="Name" class="signup_class">
                            </div>
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                               <input type="email" id="email" name="email" placeholder="Email Addresss" class="signup_class">
                            </div>
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                               <input type="password" name="password" id="password" placeholder="Choose Password" class="signup_class"onKeyUp="checkPasswordStrength();">
                            <div id="password-strength-status"></div>
                            </div>
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                               <input type="password" name="c_password" id="c_password" placeholder="Confirm Password" class="signup_class">
                            </div>
                            <div class="single-login-field inner-addon left-addon">
                               <i class="fa fa-mobile inner-text" aria-hidden="true" class="signup_class"></i>
                               <input type="text" name="mobile" id="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="single-login-field">
                               <select name="industry" id="industry" class="form-control signup_class" >
                                  <option>Company industry</option>
                                  <?php
                                  if(isset($collection['industry']) && !empty($collection['industry']))
                                  {
                                    $industry = $collection['industry'];
                                    foreach ($industry as $i_key => $i_value) {
                                      ?>
                                      <option value="<?= $i_value['id'] ?>" ><?= $i_value['title']; ?></option>
                                      <?php
                                    }
                                  }
                                  ?>
                               </select>
                            </div>
                            <div class="single-login-field">
                               <select name="job_function" id="job_function" class="form-control signup_class" >
                                  <option value="">Company location</option>
                                  <?php
                                  if(isset($collection['job_function']) && !empty($collection['job_function']))
                                  {
                                    $job_function = $collection['job_function'];
                                    foreach ($job_function as $j_key => $j_value) {
                                      ?>
                                      <option value="<?= $j_value['id'] ?>" ><?= $j_value['title']; ?></option>
                                      <?php
                                    }
                                  }
                                  ?>
                               </select>
                            </div>
                            
                            <div class="single-login-field clearfix">
                               <p class="checkbox remember">
                                  <input class="checkbox-spin" type="checkbox" id="Freelance">
                                  <label for="Freelance"><span></span>accept terms & conditions</label>
                               </p>
                            </div>

                            <div class="single-login-field">
                               <button type="submit">COMPLETE REGISTRATION</button>
                            </div>
                         </form>
                         <div class="dont_have">
                            <a href="<?= base_url('login/employer') ?>">Already have an account? Sign in</a><br>
                            <a href="<?= base_url('forgot_password'); ?>">Forgot Email/Password?</a>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="login-box" id="signup">
                        <table class="table table-responsive plan_table_1">
                            <tr>
                              <td><h4>Most affordable and unique <br><?= $plan['period']; ?> month plan</h4></td>
                              <td>&nbsp;</td>
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
                               <?php
                               if(isset($_SESSION) &&  $_SESSION[PREFIX.'id']!="") {
                                 ?>
                                 <td class="single-login-field">
                                  <a href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="<?= $plan['title']; ?>" data-id="3">Buy Now</a>
                                 </td>
                                 <?php
                               } else {
                                 ?>
                                 <td class="single-login-field not_login_plan">
                                  <a href="javascript:void(0)" class="btn btn-success btn-sm " >Buy Now</a>
                                 </td>
                                 <?php
                               }
                               ?>
                              
                            </tr>
                        </table>
                      </div>
                    </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </section>
<script type="text/javascript">


    $(function(){
        $("#frm").validate({           
            
            rules: {
                
                name : { required : true },
                email : { required : true },
                password : { required : true },
                password: "required",
                c_password: { required : true ,equalTo: "#password" },
                mobile : { required : true },
                job_location : { required : true },
                exp_year : { required : true },
                exp_month : { required : true },
            },
            messages: {

               name : { required : "Please enter name." },
               email : { required : "Please enter Email ." },
               password : { required : "Please enter Password." },
               c_password : { required : "Please enter Confirm Password." },
               mobile : { required : "Please enter Mobile Number" },
               job_location : { required : "Please select Job Location." },
               exp_year : { required : "Please select year of Experience." },
               exp_month : { required : "Please enter month of Experience." },
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
            url: "<?php echo base_url('Home/register_process') ?>",
            data: $("#frm").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.result=='success') {
                  $.notify({message: 'Registration Successful, Please Confirm Your Email' },{type: 'success'});
                } else if(res.result=='duplicate'){
                    $.notify({message: 'Email Already Registered' },{type: 'danger'});
                } else if(res.result=='Already'){
                    $.notify({message: 'This email is Already Registered' },{type: 'danger'});
                } else if(res.result=='ValidationError'){
                     $.notify({message: 'Validation Error' },{type: 'danger'});
                }
                 $("#frm")[0].reset(); 
            },
            error: function (error) {}
        });
        return false;
    });

    $(function(){
        $("#frm_2").validate({           
            
            rules: {
                
                name : { required : true },
                company_name : { required : true },
                email : { required : true },
                password : { required : true },
                password: "required",
                c_password: { required : true ,equalTo: "#password" },
                mobile : { required : true },
                
            },
            messages: {

               name : { required : "Please enter name." },
               company_name : { required : "Please enter Comapny Name." },
               email : { required : "Please enter Email ." },
               password : { required : "Please enter Password." },
               c_password : { required : "Please enter Confirm Password." },
               mobile : { required : "Please enter Mobile Number" },
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
    

    $("#frm_2").on('submit',function(){
        var val_form = $("#frm_2").valid();
        if(!val_form) { return false; }
        $(".close").trigger("click");
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('Home/register_process') ?>",
            data: $("#frm_2").serialize(),
            dataType: 'json',
            success: function(res) {
                if(res.result=='success') {
                  $.notify({message: 'Registration Successful, Please Confirm Your Email' },{type: 'success'});
                } else if(res.result=='duplicate'){
                    $.notify({message: 'Email Already Registered' },{type: 'danger'});
                } else if(res.error=='Already'){
                    $.notify({result: 'This email is Already Registered' },{type: 'danger'});
                } else if(res.error=='ValidationError'){
                     $.notify({result: 'Validation Error' },{type: 'danger'});
                }
                $("#frm_2")[0].reset(); 
            },
            error: function (error) {}
        });
        return false;
    });
</script>
<script type="text/javascript">
  function checkPasswordStrength() {
  var number = /([0-9])/;
  var alphabets = /([a-zA-Z])/;
  var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
  if($('#password').val().length<6) {
  $('#password-strength-status').removeClass();
  $('#password-strength-status').addClass('weak-password');
  $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
  } else {    
  if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {            
  $('#password-strength-status').removeClass();
  $('#password-strength-status').addClass('strong-password');
  $('#password-strength-status').html("Strong");
  } else {
  $('#password-strength-status').removeClass();
  $('#password-strength-status').addClass('medium-password');
  $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
  }}}
</script>
      <!-- Login Area End

<div class="login-box" id="signup">
   <div class="login-title">
      <h3>Sign up</h3>
   </div>
   <form>
      
      
      <div class="single-login-field inner-addon left-addon">
         <i class="fa fa-user-circle-o inner-text" aria-hidden="true"></i>
         <input type="text" placeholder="Name">
      </div>
      <div class="single-login-field inner-addon left-addon">
         <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
         <input type="email" placeholder="Email Addresss">
      </div>
      <div class="single-login-field inner-addon left-addon">
         <i class="fa fa-lock inner-text" aria-hidden="true"></i>
         <input type="password" placeholder="Choose Password">
      </div>
      <div class="remember-row single-login-field clearfix">
         <p class="checkbox remember">
            <input class="checkbox-spin" type="checkbox" id="Freelance">
            <label for="Freelance"><span></span>accept terms & conditions</label>
         </p>
      </div>
      <div class="single-login-field">
         <button type="submit">Sign in</button>
      </div>
   </form>
   <div class="dont_have">
      <a href="<?= base_url('login') ?>">Already have an account? Sign in</a>
   </div>
</div>
-->   