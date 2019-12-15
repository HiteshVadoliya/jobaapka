<!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Contact us</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Contact Page Start -->
      <section class="jobguru-contact-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="contact-left">
                     <h3>Contact information</h3>
                     <div class="contact-details">
                        <p><i class="fa fa-map-marker"></i> <?= nl2br($site_address) ?> </p>
                        <div class="single-contact-btn">
                           <h4>Email Us</h4>
                           <a href="mailto:<?= $site_email ?>" class="jobguru-btn-2"><?= $site_email ?></a>
                        </div>
                        <div class="single-contact-btn">
                           <h4>Call Us</h4>
                           <a href="tel:<?= $site_phone ?>" class="jobguru-btn-2"><?= $site_phone ?></a>
                        </div>
                        <div class="social-links-contact">
                           <h4>Follow Us:</h4>
                           <ul>
                              <li><a href="<?= $site_fb ?>"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="<?= $site_twitter ?>"><i class="fa fa-twitter"></i></a></li>
                              <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                              <li><a href="<?= $site_instagram ?>"><i class="fa fa-google-plus"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="contact-right">
                     <h3>Feel free to contact us!</h3>
                     <div class="my-msg alert alert-success col-md-12 " style="display: none;"></div>
                     <form name="frm_1" id="frm_1" action="javascript:;">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" name="fname" id="fname" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="email" id="email" name="email" placeholder="Email Address">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <input type="text" id="subject" name="subject" placeholder="Subject">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <textarea name="descr" id="descr" placeholder="Write here your message"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="single-contact-field">
                                 <button type="submit"><i class="fa fa-paper-plane"></i> Send Message</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <br/>
               <br/>
               <div class="col-md-12">
                  <div style="width: 100%"><iframe width="100%" height="600" zoom="9" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=A-403%2C%204th%20flr.%2C%20%20Krishna%20Plaza%2C%20%20%20Opp.%20CKP%20Bank%2C%20%20Above%20Krishna%20Sweets%2C%20%20%20Near%20Thane%20Railway%20Station%2C%20%20Thane%20(West)%2CMaharashtra%20%20%20Pin%20%E2%80%93%20400601%20+(Job%20Aapka)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">latitude longitude finder</a></iframe></div><br />
               </div>
            </div>
         </div>
      </section>
      <!-- Contact Page End -->
<script type="text/javascript">
   $("#frm_1").validate({
         rules: {
            fname: { required: true},  
            email: { required: true,email:true},  
            subject: { required: true},  
            // lname: { required: true},  
            descr: { required: true},  
         },
         messages: { 
            fname: "Name is required." ,
            subject: "Subject is required." ,
            descr: "Please give description." ,
            email: "Email is required." ,
         },
         submitHandler: function(form) {
              $.ajax({
                  url: '<?php echo base_url('Home/contact_send') ?>',
                  type: 'POST',
                  data: $(form).serialize(),
                  dataType : 'json',
                  success: function(response) {
                          if(response.error=='Success') {
                           // $(".my-msg").html(response.msg);
                           $(".my-msg").html('Mail send successfully');
                           $(".my-msg").css('display','block');
                        } else {
                           $(".my-msg").html('Something Went wrong...!');
                           // $(".my-msg").html(response.msg);
                           $(".my-msg").css('display','block');
                        }

                       $("#fname").val('');
                       $("#subject").val('');
                       $("#email").val('');
                       $("#descr").val('');
                      // $('#'+form.id+' .ht-response-data').html(response);
                  }            
              });
          }
            
   });
</script>