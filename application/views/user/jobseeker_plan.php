<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>JOBSEEKER</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="breadcromb-box-pagin my_breadcum2">
      <ul>
         <li>INSTANT ACCOUNT CREATION WITH ONLY MINIMUM INFO</li>
         <li>&nbsp;</li>
         <li>FREE REGISTRATION TO SEARCH RIGHT JOBS</li>
      </ul>
   </div>
   <br><br>
   <div class="breadcromb-box-pagin my_breadcum3">
      <ul>
         <li></li>
         <li>LOWEST PRICE SERVICES</li>
         <li></li>
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
                     <div class="col-md-12 col-md-offset-3 companyBox moreBox">
                                

                                <div class="row">                           
                                   <div class="col-md-8 companyBox moreBox" style="margin: 0 auto;">
                                      <div class="single-browse-company single-browse-company-custom">
                                          <p><strong>Jobseekers Package</strong></p>
                                          <p><strong>Single Plan for all Jobseekers/Candidates</strong></p>
                                          <p><strong>Rs. 500 (INR)</strong></p>
                                          <hr>
                                          <div style="text-align: left;background: #e1e1e1;padding: 10px;font-weight: 700;">
                                            <p style="color: blue;">Resume Writing for Fresher - 2 years of experience people</p>
                                            <p style="color: blue;">Interview Preparation for Freshers  - 2 years of experience people</p>
                                            <p style="color: blue;">Interview Preparation conducted in a batch of 15-20 people at our office (Video conferencing comming soon)</p>
                                            <p style="color: blue;">2nd job personal assistance for freshers & experience</p>
                                            <p style="color: blue;">Job assistance till you get 2nd job or for 6 months after losing previouse job</p>
                                            <p style="color: blue;">Previous job not required to have obtained by the candidate through our portal</p>
                                            <p style="color: green;">Resume Writing for More than 2 year experience people(Optional)</p>
                                            <p style="color: green;">Interview Preparation for More than 2 yrs experience people(optional)</p>
                                          </div>
                                          <hr>
                                          <?php
                                          if(isset($_SESSION) &&  $_SESSION[PREFIX.'id']!="") {
                                            if($_SESSION[PREFIX.'type']=='employer') {
                                              ?>
                                              <td class="single-login-field">
                                               <a style="background: blue;" href="javascript:void(0)" class="btn btn-success btn-sm other_login" >Get Now</a>
                                              </td>
                                              <?php
                                            } else {
                                            ?>
                                            <td class="single-login-field">
                                             <a style="background: blue;" href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="500" data-id="3">Get Now</a>
                                            </td>
                                            <?php
                                            }
                                          } else {
                                            ?>
                                            <td class="single-login-field not_login_plan">
                                             <a style="background: blue;" href="<?= base_url('signup/jobseeker') ?>" class="btn btn-success btn-sm " >Get Now</a>
                                            </td>
                                            <?php
                                          }
                                          ?>
                                          <div>
                                          <center>
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
                                          </center>
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
                                 <div class="row" style="display: none;">                           
                                    <div class="col-md-5 companyBox moreBox" style="margin: 0 auto;">
                                       <div class="single-browse-company single-browse-company-custom">
                                         <table class="table table-responsive plan_table_1">
                                             <tr>
                                               <td><h4>Complete job care plan <br><?= $plan['title']; ?> Per Month</h4></td>
                                               <td></td>
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
                                                  if($_SESSION[PREFIX.'type']=='employer') {
                                                    ?>
                                                    <td class="single-login-field">
                                                     <a href="javascript:void(0)" class="btn btn-success btn-sm other_login " >Buy Now</a>
                                                    </td>
                                                    <?php
                                                  } else {
                                                  ?>
                                                  <td class="single-login-field">
                                                   <a href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="<?= $plan['title']; ?>" data-id="3">Buy Now</a>
                                                  </td>
                                                  <?php
                                                  }
                                                } else {
                                                  ?>
                                                  <td class="single-login-field not_login_plan_">
                                                   <a href="<?= base_url('signup/jobseeker') ?>" class="btn btn-success btn-sm " >Buy Now</a>
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
<input type="hidden" name="org_price" id="org_price" value="500">
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
     $.notify({message: "You are login as Employer. Please login as Jobseeker." },{type: 'danger'});
   });
  </script>