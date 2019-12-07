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
      <section class="jobguru-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box" id="signup">
                     <div class="login-title">
                        <h3>Sign in</h3>
                     </div>
                     <form>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                           <input type="text" placeholder="Email" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" placeholder="Choose Password" class="signup_class">
                        </div>
                        
                        <div class="remember-row single-login-field clearfix">
                           <!-- <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>Keep Me Signed In</label>
                           </p> -->
                           <p class="lost-pass">
                              <a href="#">forgot password?</a>
                           </p>
                        </div>
                        <div class="single-login-field">
                           <button type="submit">Sign in</button>
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="<?= base_url('signup/jobseeker') ?>">Don't have an account?</a>
                     </div>
                     <br/>
                     <div class="row social_login_icon " style="text-align: center;">
                        
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></div>
                        <!-- FACEBOOK with logo ,LINKEDIN with logo,GOOGLE with logo     -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
       