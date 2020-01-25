<style type="text/css">
  
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}
.input-field:focus {
  border: 2px solid dodgerblue;
}
.input-container .fa {
  font-size: 22px;
}

</style>
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>COMPANY DETAILS</h3>
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
                     <li><a href="<?= base_url(); ?>">home</a></li>
                     <li class="active-breadcromb"><a href="#">COMPANY DETAILS</a></li>
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
         <?php $this->load->view(USER."employer_left_side"); ?>
         
         <div class="col-md-12 col-lg-9">
            <div class="dashboard-right">
               <div class="candidate-profile">
                <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                  <div class="candidate-single-profile-info">
                     <div class="single-resume-feild resume-avatar">
                        <div class="resume-image company-resume-image">
                            <?php
                            $img_src = base_url().IMG_COMPANY_LOGO.'company_page_logo.jpg';
                            if($employer['img_src']!="") {
                              if(file_exists(IMG_COMPANY_LOGO.$employer['img_src'])) {
                                $img_src = base_url().IMG_COMPANY_LOGO.$employer['img_src'];
                              } 
                            }
                            ?>
                           <img id="image_replace" src="<?= $img_src ?>" alt="<?= $employer['company_name'] ?>" title="<?= $employer['company_name'] ?>" >
                           <div class="resume-avatar-hover">
                              <div class="resume-avatar-upload">
                                 <p>
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                 </p>
                                 <input type="file" name="img_src" id="img_src">
                                 <input type="hidden" value="<?= $employer['img_src'] ?>" name="img_src_old" id="img_src_old">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="candidate-single-profile-info">
                     
                        <div class="resume-box">
                           <h3>company profile</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">Full name :</label>
                                 <input type="text" value="<?= $employer['fname']; ?>" id="fname" name="fname">
                              </div>
                              <div class="single-input">
                                 <label for="name">MOBILE NUMBER  :</label>
                                 <input type="text" value="<?= $employer['mobile']; ?>" id="mobile" name="mobile">
                              </div>
                              
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Start">OFFICIAL EMAIL ID :</label>
                                 <div class="input-container">
                                   <i class="fa fa-check icon "></i>
                                   <input class="input-field" type="text" value="<?= $employer['email']; ?>" id="email" name="email" readonly>
                                 </div>
                                 <!-- <input type="text" value="<?= $employer['email']; ?>" id="email" name="email" readonly> -->
                              </div>
                              <div class="single-input">
                                 <label for="member">YOUR COMPANY NAME :</label>
                                 <input type="text" value="<?= $employer['company_name'] ?>" id="company_name" name="company_name">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Location">INDUSTRY :</label>
                                 <select id="industry" name="industry" class="selectpicker form-control"  data-live-search="true">
                                    <?php
                                    if(isset($collection['industry']) && !empty($collection['industry']))
                                    {
                                      $industry = $collection['industry'];
                                      $selected_ind = "";
                                      foreach ($industry as $i_key => $i_value) {
                                        $selected_ind =  $this->HWT->hwt_selected( $i_value['id'], $employer['industry']);
                                        ?>
                                        <option value="<?= $i_value['id'] ?>" <?= $selected_ind ?> ><?= $i_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Location">LOCATION :</label>
                                 <select id="location" name="location" class="selectpicker form-control"  data-live-search="true">
                                    <?php
                                    if(isset($collection['location']) && !empty($collection['location']))
                                    {
                                      $location = $collection['location'];
                                      $selected_loc = "";
                                      foreach ($location as $l_key => $l_value) {
                                        $selected_loc = $this->HWT->hwt_selected( $l_value['id'], $employer['job_location']);
                                        ?>
                                        <option value="<?= $l_value['id'] ?>" <?= $selected_loc ?> ><?= $l_value['title']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                 </select>
                              </div>
                           </div>
                           
                        </div>
                        
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div>
                  </div>
                </form>
               </div>
               <br/><br/>
               <?php
               $plan = $this->HWT->get_one_row("plan","*",array("id"=>1))
               ?>
               <input type="hidden" name="org_price" id="org_price" value="<?= $plan['title'] ?>">
               <div class="tab-content " id="myTabContent">
                  <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                     <div class="row">                           
                        <div class="col-lg-12 col-md-12 ">
                           <div class="single-browse-company" >                                 
                              <div class="container ">
                                  <div class="modal-body ">
                                    <div class="container">
                                        
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
                                                 <td class="single-login-field">
                                                  <a href="<?= base_url('employer_plan'); ?>" class="btn btn-success btn-sm " >Buy Now</a>
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
               <?php /*
               <br/><br/>
               <div class="dashboard-right">
                  <div class="candidate-profile">
                   <form action="javascript:;" method="post" enctype="multipart/form-data">
                     <div class="resume-box">
                        <h3>Upload Logo</h3>
                         <div class="candidate-single-profile-info">
                            <div class="single-resume-feild resume-avatar">
                             <div class="row">
                               <div class="col-md-6 text-center">
                               <div id="upload-demo" style="width:350px"></div>
                               </div>
                               <div class="col-md-6" style="">
                               <div id="upload-demo-i" style="background:#e1e1e1;width:250px;padding:30px;height:250px;margin-top:30px"></div>
                               </div>
                             </div>
                             <div class="row">
                               <div class="col-md-4" style="padding-top:30px;">
                               <strong>Select Image:</strong>
                               <input type="file" id="upload">
                               <br/>
                               <button class="btn btn-success upload-result">Upload and Save Image</button>
                               </div>
                             </div>
                            </div>
                         </div>
                   </form>
                  </div>
               </div>
               */ ?>

               <div class="tab-content">
                   <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                      <div class="row">                           
                         <div class="col-lg-12 col-md-12  moreBox">
                            <div class="single-browse-company">                                 
                               <div class="container">
                                   <div class="row">
                                       <div class="col-xs-12 col-md-12 col-md-12-offset">
                                           <div class="panel panel-primary">
                                               <div class="panel-body">
                                                  <div class="tab-content" id="section_2_click_">
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
                                                       <th>Purchase Date</th>
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
<script type="text/javascript">
  $(".reschedule_demo").on("click",function(){
    $(".section_1").css('display','block');
    $(".section_2").css('display','none');
    // $(".section_1").fadeToggle( "slow", "linear" );;
  });
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
</script>
<!-- Candidate Dashboard Area End -->
<script type="text/javascript">
    $(function(){
        $("#frm").validate({                       
            rules: {                
                fname : { required : true },
                email : { required : true,email:true },
                mobile : { required : true },
                company_name : { required : true },
                industry : { required : true },
                location : { required : true },
            },
            messages: {
               fname : { required : "Please enter name." },
               email : { required : "Please enter Email ." },
               mobile : { required : "Please enter Mobile ." },
               company_name  : { required : "Please enter company name" },
               industry  : { required : "Please enter industry" },
               location  : { required : "Please enter location" },
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
        var btn_old_val = $(".custom_submit").html();
        $(".custom_submit").html(btn_old_val+'...');
        $(".custom_submit").attr("disabled", true);
        
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('Employer_Process/profile') ?>",
            data: new FormData(this),
            // data: $("#frm").serialize(),
           contentType: false,  
           cache: false,  
           processData:false,  
           dataType: "json",
            
            success: function(res) {
                if(res.response) {
                  $.notify({message: res.msg },{type: 'success'});
                  $("#image_replace").attr("src",res.img_src);
                }
               $(".custom_submit").html(btn_old_val);
               $(".custom_submit").attr("disabled", false);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>
 <!-- <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> -->
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
  <!-- <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css"> -->
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
 <script type="text/javascript">
 $uploadCrop = $('#upload-demo').croppie({
     enableExif: true,
     viewport: {
         width: 200,
         height: 200,
         type: 'circle'
     },
     boundary: {
         width: 300,
         height: 300
     }
 });
      
 $('#upload').on('change', function () { 
  var reader = new FileReader();
     reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
          
     }
     reader.readAsDataURL(this.files[0]);
 });
      
 $('.upload-result').on('click', function (ev) {
  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {
      
    $.ajax({
      url: '<?php echo base_url('/my-form-upload'); ?>',
      type: "POST",
      data: {"image":resp},
      success: function (data) {
        html = '<img src="' + resp + '" />';
        $("#upload-demo-i").html(html);
        $(".resume-image").html(html);
      }
    });
  });
 });
     
 </script>
 <!-- https://www.tutsmake.com/integrate-razorpay-with-php-codeigniter/ -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
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

</script>
