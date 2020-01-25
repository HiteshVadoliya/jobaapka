<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Dashboard</h3>
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
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">home</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Dashboard</a></li>
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
               <div class="welcome-dashboard">
                  <h3>Welcome <?= ucwords($_SESSION[PREFIX.'name']); ?></h3>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex widget_bg_blue">
                        <div class="widget-icon">
                           <i class="fa fa-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4><?= $applied_job; ?></h4>
                           <a href="<?= base_url('jobseeker/applied_job/'); ?>"><h2>Applied Job</h2></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex  widget_bg_purple">
                        <div class="widget-icon">
                           <i class="fa fa-chain-broken" aria-hidden="true"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4><?= $shortlist; ?></h4>
                           <a href="<?= base_url('jobseeker/shortlisted/'); ?>"><h2>Shortlisted Job</h2></a>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="col-lg-4 col-md-12 col-sm-12">
                     <div class="widget_card_page grid_flex widget_bg_dark_red">
                        <div class="widget-icon">
                           <i class="fa fa-users"></i>
                        </div>
                        <div class="widget-page-text">
                           <h4>45</h4>
                           <h2>Jobs Applied</h2>
                        </div>
                     </div>
                  </div> -->
               </div>
               <?php
               $plan = $this->HWT->get_one_row("plan","*",array("id"=>1));
               ?>
               <input type="hidden" name="org_price" id="org_price" value="<?= $plan['title'] ?>">
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                     <div class="row">                           
                        <div class="col-lg-12 col-md-12  companyBox moreBox">
                           <div class="single-browse-company" >                                 
                              <div class="modal-body ">
                                <div class="container">
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
                                           
                                         <td class="single-login-field">
                                          <a href="<?= base_url('jobseeker_plan'); ?>" class="btn btn-success btn-sm " >Buy Now</a>
                                         </td>
                                             
                                          
                                        </tr>
                                    </table>

                                    
                                </div>
                              </div>
                           </div>
                        </div>                                                 
                     </div>
                  </div>
               </div>

               <?php if(isset($plan_history) && !empty($plan_history)) { ?>
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                     <div class="row">                           
                        <div class="col-lg-12 col-md-12  moreBox">
                           <div class="single-browse-company">                                 
                              <div class="container">
                                  <div class="row">
                                      <div class="col-xs-12 col-md-12 col-md-12-offset">
                                                  <h3 class="panel-title">
                                                    Plan History
                                                  </h3>
                                          <div class="panel panel-primary">
                                              <div class="panel-heading">
                                              </div>
                                              <div class="panel-body">
                                                  <table class="table table-striped">
                                                    <tr>
                                                      <th>Sr.</th>
                                                      <th>Payment Id</th>
                                                      <th>Payment Date</th>
                                                      <th>Expiry Date</th>
                                                      <th>Amount</th>
                                                    </tr>
                                                    <?php
                                                    foreach ($plan_history as $p_key => $p_value) { ?>
                                                      <tr>
                                                        <th><?= $p_key+1; ?></th>
                                                        <th><?= $p_value['payment_id'] ?></th>
                                                        <th><?= $p_value['plan_purchase_date'] ?></th>
                                                        <th><?= $p_value['plan_expiry_date'] ?></th>
                                                        <th><?= CURR_SYMBOL.$p_value['amount'] ?></th>
                                                      </tr>
                                                    <?php } ?>
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
              <?php } ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
<!-- https://www.tutsmake.com/integrate-razorpay-with-php-codeigniter/ -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
 var SITEURL = "<?php echo base_url() ?>";
 $('body').on('click', '.buy_now', function(e){
   // var totalAmount = $(this).attr("data-amount")*100;;
   var totalAmount = $("#org_price").val()*100;;
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

</script>