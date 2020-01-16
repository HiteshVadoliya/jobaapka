 <style type="text/css">
  
      
  .panel
  {
      text-align: center;
      box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35);
  }
  .panel:hover { box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px 5px rgba(130, 130, 130, 0.35); }
  .panel-body
  {
      padding: 0px;
      text-align: center;
  }

  .the-price
  {
      background-color: rgba(220,220,220,.17);
      box-shadow: 0 1px 0 #dcdcdc, inset 0 1px 0 #fff;
      padding: 20px;
      margin: 0;
  }

  .the-price h1
  {
      line-height: 1em;
      padding: 0;
      margin: 0;
  }

  .subscript
  {
      font-size: 25px;
  }

  /* CSS-only ribbon styles    */
  .cnrflash
  {
      /*Position correctly within container*/
      position: absolute;
      top: -9px;
      right: 4px;
      z-index: 1; /*Set overflow to hidden, to mask inner square*/
      overflow: hidden; /*Set size and add subtle rounding      to soften edges*/
      width: 100px;
      height: 100px;
      border-radius: 3px 5px 3px 0;
  }
  .cnrflash-inner
  {
      /*Set position, make larger then      container and rotate 45 degrees*/
      position: absolute;
      bottom: 0;
      right: 0;
      width: 145px;
      height: 145px;
      -ms-transform: rotate(45deg); /* IE 9 */
      -o-transform: rotate(45deg); /* Opera */
      -moz-transform: rotate(45deg); /* Firefox */
      -webkit-transform: rotate(45deg); /* Safari and Chrome */
      -webkit-transform-origin: 100% 100%; /*Purely decorative effects to add texture and stuff*/ /* Safari and Chrome */
      -ms-transform-origin: 100% 100%;  /* IE 9 */
      -o-transform-origin: 100% 100%; /* Opera */
      -moz-transform-origin: 100% 100%; /* Firefox */
      background-image: linear-gradient(90deg, transparent 50%, rgba(255,255,255,.1) 50%), linear-gradient(0deg, transparent 0%, rgba(1,1,1,.2) 50%);
      background-size: 4px,auto, auto,auto;
      background-color: #aa0101;
      box-shadow: 0 3px 3px 0 rgba(1,1,1,.5), 0 1px 0 0 rgba(1,1,1,.5), inset 0 -1px 8px 0 rgba(255,255,255,.3), inset 0 -1px 0 0 rgba(255,255,255,.2);
  }
  .cnrflash-inner:before, .cnrflash-inner:after
  {
      /*Use the border triangle trick to make         it look like the ribbon wraps round it's        container*/
      content: " ";
      display: block;
      position: absolute;
      bottom: -16px;
      width: 0;
      height: 0;
      border: 8px solid #800000;
  }
  .cnrflash-inner:before
  {
      left: 1px;
      border-bottom-color: transparent;
      border-right-color: transparent;
  }
  .cnrflash-inner:after
  {
      right: 0;
      border-bottom-color: transparent;
      border-left-color: transparent;
  }
  .cnrflash-label
  {
      /*Make the label look nice*/
      position: absolute;
      bottom: 0;
      left: 0;
      display: block;
      width: 100%;
      padding-bottom: 5px;
      color: #fff;
      text-shadow: 0 1px 1px rgba(1,1,1,.8);
      font-size: 0.95em;
      font-weight: bold;
      text-align: center;
  }

</style>
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
               $plan = $this->HWT->get_one_row("plan","*",array("id"=>1))
               ?>
               <input type="hidden" name="org_price" id="org_price" value="<?= $plan['title'] ?>">
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                     <div class="row">                           
                        <div class="col-lg-12 col-md-12  companyBox moreBox">
                           <div class="single-browse-company">                                 
                              <div class="container">
                                  <div class="row">
                                      <div class="col-xs-12 col-md-4 col-md-4-offset">
                                          <div class="panel panel-primary">
                                              <div class="panel-heading">
                                                  <h3 class="panel-title">
                                                      </h3>
                                              </div>
                                              <div class="panel-body">
                                                  <div class="the-price">
                                                      <h5>Complete job care plan</h5>
                                                  </div>
                                                  <table class="table">
                                                      <tr>
                                                          <td>
                                                              CV Writing
                                                          </td>
                                                      </tr>
                                                      <tr class="active">
                                                          <td>
                                                              Interview Preparation
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              New Job or Personal Job assistance for <?= $plan['period'] ?> months after you lose a job
                                                          </td>
                                                      </tr>
                                                      
                                                      <tr class="active">
                                                          <td>
                                                              
                                                          </td>
                                                      </tr>
                                                  </table>
                                              </div>

                                              <div class="panel-footer">
                                                <?php
                                                if($jobseeker_data['plan_status']=="1") {
                                                  ?>
                                                  <a href="javascript:void(0)" class="btn btn-success btn-sm " >Plan Expire on <?php echo $plan_history[0]['plan_expiry_date']; ?> </a>
                                                  
                                                  <?php
                                                } else {
                                                  ?>
                                                  <a href="javascript:void(0)" class="btn btn-success btn-sm buy_now" data-amount="<?= $plan['title']; ?>" data-id="3">Buy Now</a>
                                                  <?php
                                                }
                                                ?>
                                                <!-- <a href="javascript:;" class="btn btn-success" role="button">Buy Now</a> -->
                                                <br/>
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