 
<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>Contact</h3>
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
                     <li><a href="javascript:;">Jobseeker</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">Contact</a></li>
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
               <div class="candidate-profile">
                  
                  <div class="candidate-single-profile-info">
                     <form name="frm" id="frm" action="javascript:;" method="post" >
                        <div class="resume-box">
                           <h3>Contact Information</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Phone">Mobile:</label>
                                 <input type="text" value="<?= $jobseeker_data['mobile']; ?>" id="mobile" name="mobile">
                              </div>
                              <div class="single-input">
                                 <label for="Email">Email:</label>
                                 <input type="text" value="<?= $jobseeker_data['email']; ?>" id="email" name="email" readonly>
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="contry">contry:</label>
                                 <select id="country_id" name="country_id">
                                    <option value="">Select Country</option>
                                    <?php
                                    if(isset($collection['countries']) && !empty($collection['countries']))
                                    {
                                      $countries = $collection['countries'];
                                      $selected_ctr = "";
                                      foreach ($countries as $j_key => $j_value) {
                                        $selected_ctr = ($j_value['id']==$jobseeker_data['country_id']) ? 'selected' : '';
                                        ?>
                                        <option value="<?= $j_value['id'] ?>" <?= $selected_ctr ?> ><?= $j_value['country_name']; ?></option>
                                        <?php
                                      }
                                    }
                                    ?>
                                    
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="City">City:</label>
                                 <input type="text" value="<?= $jobseeker_data['city'] ?>" id="city" name="city">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Zip">Zip:</label>
                                 <input type="text" value="<?= $jobseeker_data['zip'] ?>" id="zip" name="zip">
                              </div>
                              <div class="single-input">
                                 <label for="Address22">Address:</label>
                                 <input type="text" value="<?= $jobseeker_data['address'] ?>" id="address" name="address">
                              </div>
                           </div>
                        </div>
                        
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->

<script type="text/javascript">
   $(function(){

       $("#frm").validate({                       
           rules: {                
               country_id : { required : true },
               email : { required : true,email:true },
               mobile : { required : true },
               zip : { required : true },
               address : { required : true },
           },
           messages: {
              country_id : { required : "Please selecte country." },
              email : { required : "Please enter Email ." },
              mobile : { required : "Please enter Mobile ." },              
              zip : { required : "Please enter Zipcode ." },              
              address : { required : "Please enter Address ." },              
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
       var btn_old_val = $(".custom_submit").text();
       $(".custom_submit").html(btn_old_val+'...');
       
       $.ajax({
           type: "POST",            
           url: "<?php echo base_url('JobSeeker_Process/contact') ?>",
           data: $("#frm").serialize(),
           dataType: 'json',
           success: function(res) {
               if(res.response) {
                 $.notify({message: res.msg },{type: 'success'});
               }
              $(".custom_submit").html(btn_old_val);
           },
           error: function (error) {}
       });
       return false;
   });
</script>
 