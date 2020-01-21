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
                              <li><a href="<?= $site_instagram ?>"><i class="fa fa-linkedin"></i></a></li>
                              <!-- <li><a href=""><i class="fa fa-google-plus"></i></a></li> -->
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
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" id="subject" name="subject" placeholder="Subject">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-contact-field">
                                 <input type="text" id="contact" name="contact" placeholder="Contact">
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
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.0741941275664!2d72.97511531744382!3d19.191961500000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9269ecc48bb%3A0x16219b996c6cc5a1!2sKrishna%20Plaza%2C%20Near%20Thane%20Railway%20Station%2C%20Naupada%20Thane!5e0!3m2!1sen!2sin!4v1579637378244!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                  </div>
                     </div>
                  </div>
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