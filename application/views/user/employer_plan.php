<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>EMPLOYER</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   
     <div class="breadcromb-box-pagin my_breadcum">
        <ul>
           <li>QUICK ACCOUNT CREATION WITH LITTLE INFO</li>
           <li>MOST AFFORDABLE</li>
           <li>MORE THAN JUST HIRING SERVICES</li>
        </ul>
     </div>
   
   <!-- <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">Home</a></li>
                  </ul>                  
               </div>
            </div>
         </div>
      </div>
   </div> -->
</section>
<!-- Breadcromb Area End -->

<!-- Happy Freelancer Start -->
 <section class="jobguru-happy-freelancer-area" style="padding: 5px 0;">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="site-heading">
              <BR>
                <h4>Our Plan</h4>
                <small>GROW YOUR BUSINESS WITH OUR PLAN</small>
             </div>
          </div>
       </div>
        <div class="col-md-12 home_image ">
            <div class="row">
            
               <div class="col-md-4">
                  <a href="javascript:;"><img src="<?= IMG_HOME ?>/1.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">ONLY ONE SINGLE PLAN</span></a>
                  
               </div>
               <div class="col-md-4">
                  <a href="javascript:;"><img src="<?= IMG_HOME ?>/2.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">INNOVATIVE AND MOST AFFORDABLE EVER</span></a>
               </div>
               <div class="col-md-4">
                  <a href="javascript:;"><img src="<?= IMG_HOME ?>/3.png" style="border-radius: 1%;" /><br>
                  <span class="home_page_logo_title">6 MONTHS VALIDITY</span></a>
               </div>
               
          </div>
       </div>
       
    </div>
 </section>
        
       
<section class="jobguru-browse-company-area section_70 without_login">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="tab-content">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-md-6 col-md-offset-3 companyBox moreBox">
                        
                                <div class="row">                           
                                   <div class="col-md-12 companyBox moreBox" style="margin: 0 auto;">
                                      <div class="single-browse-company single-browse-company-custom">
                                          <p><strong>Employer Package</strong></p>
                                          <p><strong>Single Plan for all Employer/Recruiters/Consultants</strong></p>
                                          <p><strong>Rs. 1000 (INR)</strong></p>
                                          <hr>
                                          <div style="text-align: left;background: #e1e1e1;padding: 10px;font-weight: 700;">
                                          <p style="color: blue">Complete 6 Months Validity from the date of your registration</p>
                                          <p style="color: green">View unlimited number of Resumes</p>
                                          <p style="color: green">Download unlimited number of Resumes</p>
                                          <p style="color: green">Post as many jobs as you want</p>
                                          <p style="color: green">No Daily/Weekly or Monthly limit</p>
                                          <p style="color: green">Free Technology consulting with our tech team to address your business needs beyond recrutment and hiring</p>
                                          <p style="color: green">Consulting session at your convenience at your office, out office or video conference with prior appointment anytime in 6 month </p>
                                          <p style="color: green">Right recommendation to address your issue through technology after our discussion with you</p>
                                          <p style="color: green">(Testimonial from our Clients Burger king and indiabulls Real Estate)</p>
                                          </div>
                                          <hr>
                                          <?php
                                          if(isset($_SESSION) &&  $_SESSION[PREFIX.'id']!="") {
                                            if($_SESSION[PREFIX.'type']=='jobseeker') {
                                              ?>
                                              <td class="single-login-field">
                                               <a style="background: blue;" href="javascript:void(0)" class="btn btn-success btn-sm other_login" >Subscribe now</a>
                                              </td>
                                              <?php
                                            } else {
                                            ?>
                                            <td class="single-login-field">
                                             <a style="background: blue;" href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="1000" data-id="3">Subscribe now</a>
                                            </td>
                                            <?php
                                            }
                                          } else {
                                            ?>
                                            <td class="single-login-field not_login_plan">
                                             <a style="background: blue;" href="<?= base_url('signup/employer') ?>" class="btn btn-success btn-sm " >Subscribe now</a>
                                            </td>
                                            <?php
                                          }
                                          ?>
                                          <div>
                                            <table>
                                              <tr>
                                                <td style="text-align: left;">CALL BACK FOR ANY CLARIFICATION</td>
                                                <td style="text-align: right;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EMAIL FOR ANY ASSISTANCE</td>
                                              </tr>
                                              <tr>
                                                <td><a style="background: blue;" href="tel:8657430699" class="btn btn-success btn-sm " >Call Us : 8657430699</a></td>
                                                <td><a style="background: blue;" href="mailTo:info@jobaapka.com" class="btn btn-success btn-sm " >Email Us : info@jobaapka.com</a></td>
                                              </tr>
                                            </table>
                                          </div>
                                      </div>
                                   </div>
                                </div>
                                <!-- <div class="row">                           
                                   <div class="col-md-12 companyBox moreBox" style="margin: 0 auto;">
                                      <div class="single-browse-company single-browse-company-custom">
                                         <h4>Employee Attendance Tracking - 5000</h4>
                                         <br/>
                                         <h4>Billing/Quotation Tool - 5000</h4>
                                         <br/>
                                         <h4>Get Combo offer - 7000</h4>
                                         <br/>
                                      </div>
                                   </div>
                                </div> -->
                                 <div class="row">                           
                                    <div class="col-md-12 companyBox moreBox" style="margin: 0 auto;">
                                       <div class="single-browse-company single-browse-company-custom">
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
                                                <?php
                                                if(isset($_SESSION) &&  $_SESSION[PREFIX.'id']!="") {
                                                  if($_SESSION[PREFIX.'type']=='jobseeker') {
                                                  ?>
                                                  <td class="single-login-field">
                                                   <a href="javascript:void(0)" class="btn btn-success btn-sm other_login" >Buy Now</a>
                                                  </td>
                                                  <?php
                                                  } else {
                                                  ?>
                                                  <td class="single-login-field">
                                                   <a href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="1000" data-id="3">Buy Now</a>
                                                  </td>
                                                  <?php
                                                  }
                                                } else {
                                                  ?>
                                                  <td class="single-login-field not_login_plan_">
                                                   <a href="<?= base_url('signup/employer') ?>" class="btn btn-success btn-sm " >Buy Now</a>
                                                  </td>
                                                  <?php
                                                }
                                                ?>
                                               
                                             </tr>
                                         </table>
                                       </div>
                                    </div>
                                 </div>
                              
                           
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<input type="hidden" name="org_price" id="org_price" value="1000">
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">

  
  
   var SITEURL = "<?php echo base_url() ?>";
   $('body').on('click', '.buy_now', function(e){
     // var totalAmount = $(this).attr("data-amount")*100;
     var totalAmount = $("#org_price").val()*100;
     var product_id =  $(this).attr("data-id");
     var fName = '<?php echo $_SESSION[PREFIX.'name']; ?>';
     var options = {
     "key": "rzp_test_GqCz63X5qjspr9",
     "amount": totalAmount, //(6*100), // 2000 paise = INR 20
     "name": fName,
     "description": "Payment",
     "image": "https://www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
     "handler": function (response){
           $.ajax({
             url: SITEURL + 'razorPaySuccess',
             type: 'post',
             dataType: 'json',
             data: {
                 razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
             }, 
             success: function (msg) {
                window.location.href = SITEURL + 'RazorThankYou';
             }
         });
       
     },

     "theme": {
         "color": "#28a745"
     }
   };
   var rzp1 = new Razorpay(options);
   rzp1.open();
   e.preventDefault();
   });
   $(".other_login").on("click",function(){
     $.notify({message: "You are login as Jobseeker. Please login as Employer." },{type: 'danger'});
   });
  </script>