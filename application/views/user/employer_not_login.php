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
   
   <div class="breadcromb-bottom">
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
   </div>
</section>
<!-- Breadcromb Area End -->
       
       
<section class="jobguru-browse-company-area section_70 without_login">
   <div class="container">
      <div class="row">

         
         <div class="col-md-12">
            <div class="tab-content plan_text">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row row--stars">                           
                     <div class="col-lg-12 col-md-12 ">
                          <div class="">
                            <p class="cell">
                              <center><span class="underline underline--stars">WE OFFER <u>UNLIMITED</u> JOB POSTINGS AND <u>UNLIMITED</u> CV DOWNLOADS FOR <u>COMPLETE <?= $plan['period']; ?> MONTHS</u></span></center>
                            </p>
                          </div>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="tab-content">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-6 col-md-12 companyBox moreBox">
                        <div class="single-browse-company single-browse-company-custom">                                 
                           <h3>
                           <a class="button create_profile_button" href="<?= base_url('signup/employer'); ?>">Create Account</a>
                           </h3>
                        </div>
                     </div>
                    <div class="col-lg-6 col-md-12 companyBox moreBox">
                       <div class="single-browse-company single-browse-company-custom">                                
                          <h3>                                   
                          <a href="<?= base_url('login/'); ?>" class="button login_button" >Signin</a>
                          </h3>
                       </div>                            
                    </div>                           
                  </div>
               </div>
            </div>

            <div class="tab-content" id="myTabContent">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-lg-12 col-md-12">
                        <div class="single-browse-company single-browse-company-custom" style="background: none;">                                 
                           <h3>
                           <!-- <a class="button plan_button " href="javascript:;" data-toggle="modal" data-target="#jobseeker_plan_modal">GROW YOUR BUSINESS WITH US</a> -->
                           <a class="button plan_button section_1_click" href="javascript:;">GROW YOUR BUSINESS WITH US</a>
                           <a class="button plan_button section_2_click" href="javascript:;">MANAGE YOUR BUSINESS EASILY</a>
                           </h3>
                        </div>
                     </div>                   
                  </div>
               </div>
            </div>

            <?php
            $style = "";
            if(isset($_SESSION) && $_SESSION[PREFIX.'type']=='employer') {
              $style = "display:block";
            }
            ?>

            <div class="tab-content" id="section_1_click" style="<?= $style ?>";>
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-md-6 col-md-offset-2 companyBox moreBox" style="margin: 0 auto;">
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
                                <td class="single-login-field">
                                  <a href="<?= base_url('employer_plan'); ?>" class="plan_know_more" type="button" name="" value="know more">know more</a>
                                  </td>
                                <td></td>
                              </tr>
                          </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="tab-content" id="section_2_click">
               <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                  <div class="row">                           
                     <div class="col-md-4 companyBox moreBox">
                        <div class="single-browse-company ">
                          <table class="table table-responsive plan_table_1" cellspacing="0" cellpadding="0">
                            <tr><td><h5>Employee Attendance Tracking</h5></td></tr>
                            <tr><td class="plan_1_text">Easy to use tool</td></tr>
                            <tr><td class="plan_1_text">Records Leaves and Generates Salary slips</td></tr>
                            <tr><td class="plan_1_text plan_1_text_color">Lifetime validity</td></tr>
                            <tr>
                            <td class="single-login-field">
                              <button class="plan_know_more plan_3_action" type="button" name="" value="know more" data-toggle="modal" data-target="#plan_first_popup">GET A FREE DEMO</button>
                              </td>
                            </tr>
                          </table>
                        </div>
                     </div>
                     <div class="col-md-4 companyBox moreBox">
                        <div class="single-browse-company ">
                          <table class="table table-responsive plan_table_1" cellspacing="0" cellpadding="0">
                            <tr><td><h5>Billing/Quotation Tool</h5></td></tr>
                            <tr><td class="plan_1_text">Print Invoices Quickly</td></tr>
                            <tr><td class="plan_1_text">Get Revenue Report</td></tr>
                            <tr><td class="plan_1_text plan_1_text_color">Lifetime validity</td></tr>
                            <tr>
                            <td class="single-login-field">
                              <button class="plan_know_more plan_3_action" type="button" name="" value="know more" data-toggle="modal" data-target="#plan_first_popup">GET A FREE DEMO</button>
                            </td>
                            </tr>
                          </table>
                        </div>
                     </div>
                     <div class="col-md-4 companyBox moreBox">
                        <div class="single-browse-company ">
                          <table class="table table-responsive plan_table_1" cellspacing="0" cellpadding="0">
                            <!-- <tr><td><h5>Employee Attendance Tracking</h5></td></tr> -->
                            <tr><td class="plan_1_text">GET COMBO OFFER <br>ATTENDANCE TRACKING <br> + <br>BILLING TOOL</td></tr>
                            <tr>
                            <td class="single-login-field">
                              <button class="plan_know_more plan_3_action" type="button" name="" value="know more" data-toggle="modal" data-target="#plan_first_popup">GET A FREE DEMO</button>
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
   </div>
</section>


<div class="modal fade" id="plan_first_popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog " role="document">
    <form name="frm_demo" id="frm_demo" method="post" action="javascript:;">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="container">
            <div class="row section_1">
              <div class="col-md-12 col-sm-12 demo_alert" style="display: none;">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <strong>Success</strong> Mail Send Successfully
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
                <div class="col-md-12 col-sm-12">
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Organization name :</label> -->
                          <input type="text" value="" id="organization_name" name="organization_name" placeholder="Organization name">
                       </div>
                    </div>
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Concerned person name :</label> -->
                          <input type="text" value="" id="fname" name="fname" placeholder="Concerned person name">
                       </div>
                    </div>
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Email id :</label> -->
                          <input type="text" value="" id="demo_email" name="demo_email" placeholder="Email id">
                       </div>
                    </div>
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Contact number :</label> -->
                          <input type="text" value="" id="demo_contact" name="demo_contact" placeholder="Contact number">
                       </div>
                    </div>
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Suitable Date :</label> -->
                          <input  class="datepicker" type="text" id="demo_date" name="demo_date" value="" autocomplete="off" placeholder="Suitable Date">
                       </div>
                    </div>
                    <div class="single-resume-feild feild-flex-2">
                       <div class="single-input">
                          <!-- <label for="name">Suitable Time for Online Demo :</label> -->
                          <select name="demo_time" id="demo_time">
                            <option value="">Suitable Time for Online Demo</option>
                            <?php
                            for ($i=1; $i < 25 ; $i++) { 
                              ?>
                              <option value="<?= $i ?>"><?= $i; ?></option>
                              <?php
                            }
                            ?>
                          </select>
                       </div>
                    </div>
                    
                </div>                
            </div>
            <div class="row section_2" style="display: none;">
              <center>
                <a href="javascript:;" class="btn btn-primary reschedule_demo ">Reschedule Demo</a>
                <a href="<?= base_url("employer_plan"); ?>" class="btn btn-primary">Order Now</a>
              </center>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary custom_submit submit_first_form">Submit</button>
      </div>
    </div>
    </form>
  </div>
  
</div>

<?php /*
<div class="modal fade" id="jobseeker_plan_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Most affordable and unique</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body plan-modal-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="pricingTable">
                        <div class="pricing-content">
                            <div class="pricingTable-header">
                                <h3 class="title">Most affordable and unique <br/><small><?= $plan['period']; ?> month plan</small></h3>
                            </div>
                            <div class="inner-content">
                                <div class="price-value">
                                    <span class="currency"><?= CURR_SYMBOL; ?></span>
                                    <span class="amount"><?= $plan['title']; ?></span>
                                    <span class="duration">Per Month</span>
                                </div>
                                <ul>
                                    <li>Unlimited CV <br/>Download/Access</li>
                                    <li>Post unlimited jobs</li>
                                    <li>One Free technology consulting <br/>for your business issues</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricingTable-signup">
                            <a href="javascript:;">Buy Now</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
*/ ?>

<script type="text/javascript">
  
  $('.plan_3_action').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
  /*$('#jobseeker_plan_modal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })*/
</script>
<script type="text/javascript">
  $(".section_2_click").on("click",function(){
    $("#section_1_click").css('display','none');
    $("#section_2_click").fadeToggle( "slow", "linear" );;
  });
  $(".section_1_click").on("click",function(){
    $("#section_2_click").css('display','none');
    $("#section_1_click").fadeToggle( "slow", "linear" );;
  });
  $(".reschedule_demo").on("click",function(){
    $(".section_1").css('display','block');
    $(".section_2").css('display','none');
    // $(".section_1").fadeToggle( "slow", "linear" );;
  });
</script>
<script type="text/javascript">
  $(function(){
      $("#frm_demo").validate({                       
          rules: {                
              fname : { required : true },
              organization_name : { required : true },
              email : { required : true,email:true },
              demo_contact : { required : true },
              demo_date : { required : true },
              demo_time : { required : true },
          },
          messages: {
             fname : { required : "Please enter name." },
             organization_name : { required : "Please enter name." },
             email : { required : "Please enter Email ." },
             demo_contact  : { required : "Please enter contact" },
             demo_date  : { required : "Please enter date" },
             demo_time  : { required : "Please enter time" },
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
  

  // $("#frm_demo").on('submit',function(){
  $(".submit_first_form").on('click',function(){
      var val_form = $("#frm_demo").valid();
      if(!val_form) { return false; }
      // $(".close").trigger("click");
      var btn_old_val = $(".custom_submit").html();
      $(".custom_submit").html(btn_old_val+'...');
      // $(".custom_submit").attr("disabled", true);
      
      $.ajax({
          type: "POST",            
          url: "<?php echo base_url('Employer_Process/employer_demo') ?>",
          // data: new FormData(this),
          data: $("#frm_demo").serialize(),
         // contentType: false,  
         // cache: false,  
         // processData:false,  
         dataType: "json",
          success: function(res) {
              if(res.response) {
                $.notify({message: res.msg },{type: 'success'});
                $(".demo_alert").css("display","block");
                setTimeout(function(){
                  $(".demo_alert").css("display","none");
                  $(".section_1").css("display","none");
                  $(".section_2").fadeToggle( "slow", "linear" );;
                },3000);
              }
              $("#frm_demo")[0].reset();
            
             $(".custom_submit").html(btn_old_val);
             $(".custom_submit").attr("disabled", false);
          },
          error: function (error) {}
      });
      return false;
  });
  // $('#plan_first_popup').modal('show', {backdrop: 'static', keyboard: false});

</script>