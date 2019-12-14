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

      <section class="jobguru-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <?php if($signup_type=="jobseeker") { ?>
                  <div class="login-box" id="signup">
                     <div class="login-title">  
                        <h3>SIGN UP WITH</h3>
                        <br/>
                        <div class="footer-bottom" style="text-align: center;">
                        <ul class="social-icons" >
                           <li style="float: none;"><a href="<?= $authUrl ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></li>
                           <li style="float: none;"><a href="" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></li>
                           <li style="float: none;"><a href="<?=base_url()?>Home/login_with_google" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></li>                           
                        </ul>
                     </div>
                 

                        
                     </div>
                     

                     
                     <?php /*<div class="row social_login_icon " style="text-align: center;">
                        
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></div>
                        <!-- FACEBOOK with logo ,LINKEDIN with logo,GOOGLE with logo     -->
                     </div>*/ ?>

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
                           <input type="password" name="password" id="password" placeholder="Choose Password" class="signup_class">
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
                              <option>Current job function</option>
                              <option>Location 1</option>
                              <option>Location 2</option>
                           </select>
                        </div>
                        <div class="single-login-field">
                              <select name="exp_year" id="exp_year" class="form-control signup_class" >
                                 <option>Experience in years</option>
                                 <option>0</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                                 <option>7</option>
                                 <option>8</option>
                                 <option>9</option>
                                 <option>10</option>
                              </select>                              
                        </div>
                        <div class="single-login-field">
                              <select name="exp_month" id="exp_month" class="form-control signup_class" >
                                 <option>Experience in month</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                                 <option>6</option>
                                 <option>7</option>
                                 <option>8</option>
                                 <option>9</option>
                                 <option>10</option>
                              </select>                              
                        </div>
                        <div class=" single-login-field clearfix">
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="" required>
                              <label for="Freelance"><span></span>accept terms & condition</label>
                           </p>
                        </div>

                        <div class="single-login-field">
                           <button type="submit">COMPLETE REGISTRATION</button>
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="<?= base_url('login') ?>">Already have an account? Sign in</a>
                        <br>
                        <a href="<?= base_url('forgot_password'); ?>">Forgot Email/Password?</a>
                     </div>
                  </div>
                  <?php } else if($signup_type=="employer") { ?>
                  <div class="login-box" id="signup">
                     <div class="login-title">
                        <h3>SIGN UP WITH</h3>
                        <br/>
                        <div class="footer-bottom" style="text-align: center;">
                        <ul class="social-icons" >

                                    <li style="float: none;"><a href="<?= $authUrl ?>" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></li>
                                    <li style="float: none;"><a href="" style="width: 45px; height: 46px;"><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></li>
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
                           <input type="password" name="password" id="password" placeholder="Choose Password" class="signup_class">
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
                              <option>Industry 1</option>
                              <option>Industry 2</option>
                           </select>
                        </div>
                        <div class="single-login-field">
                           <select name="job_function" id="job_function" class="form-control signup_class" >
                              <option>Current job function</option>
                              <option>Location 1</option>
                              <option>Location 2</option>
                           </select>
                        </div>
                        
                        <div class="single-login-field clearfix">
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>accept terms & condition</label>
                           </p>
                        </div>

                        <div class="single-login-field">
                           <button type="submit">COMPLETE REGISTRATION</button>
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="<?= base_url('login') ?>">Already have an account? Sign in</a><br>
                        <a href="<?= base_url('forgot_password'); ?>">Forgot Email/Password?</a>
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
                if(res.message=='success') {
                  $.notify({message: 'Registration Successful, Please Confirm Your Email' },{type: 'success'});
                } else if(res.message=='duplicate'){
                    $.notify({message: 'Email Already Registered' },{type: 'danger'});
                } else if(res.error=='Already'){
                    $.notify({message: 'This email is Already Registered' },{type: 'danger'});
                } else if(res.error=='ValidationError'){
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
                if(res.message=='success') {
                  $.notify({message: 'Registration Successful, Please Confirm Your Email' },{type: 'success'});
                } else if(res.message=='duplicate'){
                    $.notify({message: 'Email Already Registered' },{type: 'danger'});
                } else if(res.error=='Already'){
                    $.notify({message: 'This email is Already Registered' },{type: 'danger'});
                } else if(res.error=='ValidationError'){
                     $.notify({message: 'Validation Error' },{type: 'danger'});
                }
                 $("#frm")[0].reset(); 
            },
            error: function (error) {}
        });
        return false;
    });
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
            <label for="Freelance"><span></span>accept terms & condition</label>
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