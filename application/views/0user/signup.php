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
                     </div>
                     <br/>
                     <div class="row social_login_icon " style="text-align: center;">
                        
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'fb.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'linkedin.png' ?>"></a></div>
                        <div class="col-md-4"><a href=""><img src="<?= base_url().IMG_SIGNUP.'google.png' ?>"></a></div>
                        <!-- FACEBOOK with logo ,LINKEDIN with logo,GOOGLE with logo     -->
                     </div>

                     <form>
                        
                        
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-user-circle-o inner-text" aria-hidden="true"></i>
                           <input type="text" placeholder="Name" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                           <input type="email" placeholder="Email Addresss" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" placeholder="Choose Password" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" placeholder="Confirm Password" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-mobile inner-text" aria-hidden="true" class="signup_class"></i>
                           <input type="text" placeholder="Mobile Number">
                        </div>
                        <div class="single-login-field">
                           <select class="form-control signup_class" >
                              <option>Current job function</option>
                              <option>Location 1</option>
                              <option>Location 2</option>
                           </select>
                        </div>
                        <div class="single-login-field">
                              <select class="form-control signup_class" >
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
                              <select class="form-control signup_class" >
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
                        <div class="remember-row single-login-field clearfix">
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
                        <a href="<?= base_url('login') ?>">Already have an account? Sign in</a>
                        <br>
                        <a href="#">Forgot Email/Password?</a>
                     </div>
                  </div>
                  <?php } else if($signup_type=="employer") { ?>
                  <div class="login-box" id="signup">
                     <div class="login-title">
                        <h3>SIGN UP WITH</h3>
                     </div>
                     <form>                        
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-building-o inner-text" aria-hidden="true"></i>
                           <input type="text" placeholder="COMPANY NAME" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-user-circle-o inner-text" aria-hidden="true"></i>
                           <input type="text" placeholder="Name" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-envelope-open inner-text" aria-hidden="true"></i>
                           <input type="email" placeholder="Email Addresss" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" placeholder="Choose Password" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-lock inner-text" aria-hidden="true"></i>
                           <input type="password" placeholder="Confirm Password" class="signup_class">
                        </div>
                        <div class="single-login-field inner-addon left-addon">
                           <i class="fa fa-mobile inner-text" aria-hidden="true" class="signup_class"></i>
                           <input type="text" placeholder="Mobile Number">
                        </div>
                        <div class="single-login-field">
                           <select class="form-control signup_class" >
                              <option>Company industry</option>
                              <option>Industry 1</option>
                              <option>Industry 2</option>
                           </select>
                        </div>
                        <div class="single-login-field">
                           <select class="form-control signup_class" >
                              <option>Current job function</option>
                              <option>Location 1</option>
                              <option>Location 2</option>
                           </select>
                        </div>
                        
                        <div class="remember-row single-login-field clearfix">
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
                        <a href="#">Forgot Email/Password?</a>
                     </div>
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </section>
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