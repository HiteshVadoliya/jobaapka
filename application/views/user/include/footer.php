<!--Footer Area Start -->
<footer class="jobguru-footer-area">
   <div class="footer-top section_50">
      <div class="container">
         <div class="row">
            <?php /*
            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <div class="footer-logo">
                     <a href="index.html">
                     <img src="<?= FRONT_IMG ?>logo/<?= $site_logo ?>" alt="<?= $site_title; ?>" />
                     </a>
                  </div>
                  <p>Aliquip exa consequat dui aut repahend vouptate elit cilum fugiat pariatur lorem dolor cit amet consecter adipisic elit sea vena eiusmod nulla</p>
                  <ul class="footer-social">
                     <li><a href="<?= $site_fb ?>" class="fb"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="<?= $site_twitter ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
                     <!-- <li><a href="<?= $site_instagram ?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li> -->
                     <li><a href="<?= $site_instagram ?>" class="gp"><i class="fa fa-google-plus"></i></a></li>
                     <!-- <li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li> -->
                  </ul>
               </div>
            </div>
            */ ?>
            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3>main links</h3>
                  <ul>
                     <li><a href="<?= base_url(); ?>"><i class="fa fa-angle-double-right "></i> HOME</a></li>
                     <li><a href="<?= base_url('about'); ?>"><i class="fa fa-angle-double-right "></i> ABOUT US</a></li>
                     <li><a href="<?= base_url('whyus'); ?>"><i class="fa fa-angle-double-right "></i> WHY US </a></li>
                     <li><a href="<?= base_url('choose_signup') ?>"><i class="fa fa-angle-double-right "></i> REGISTER </a></li>
                     <li><a href="<?= base_url('choose_login') ?>"><i class="fa fa-angle-double-right "></i> LOGIN</a></li>
                     <li><a href="<?= base_url('faq') ?>"><i class="fa fa-angle-double-right "></i> FAQS </a></li>
                     <li><a href="<?= base_url('business_news'); ?>"><i class="fa fa-angle-double-right "></i> BUSINESS NEWS </a></li>
                     <li><a href="<?= base_url('contact'); ?>"><i class="fa fa-angle-double-right "></i> CONTACT US</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3><a target="_blank" href="https://www.ideators.tech/our-partners-jobaapka" class="ideators_">ABOUT IDEATORS</a></h3>
                  <ul>
                     <li><a href="<?= base_url('employer_info') ?>"><i class="fa fa-angle-double-right "></i> EMPLOYER</a></li>
                     <li><a href="<?= base_url('employer_info') ?>"><i class="fa fa-angle-double-right "></i> EMPLOYER PLAN </a></li>
                     <li><a href="<?= base_url('jobseeker_info') ?>"><i class="fa fa-angle-double-right "></i> JOBSEEKER </a></li>
                     <li><a href="<?= base_url('jobseeker_info') ?>"><i class="fa fa-angle-double-right "></i> JOBSEEKER PLAN  </a></li>
                     <li><a href="<?= base_url('terms') ?>"><i class="fa fa-angle-double-right "></i> TERMS AND CONDITIONS </a></li>
                     <li><a href="<?= base_url('policy') ?>"><i class="fa fa-angle-double-right "></i> PRIVACY POLICY </a></li>
                     <li><a href="<?= base_url('sitemap') ?>"><i class="fa fa-angle-double-right "></i> SITEMAP </a></li>
                  </ul>
               </div>
            </div>

            <!-- <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3>recent post</h3>
                  <div class="latest-post-footer clearfix">
                     <div class="latest-post-footer-left">
                        <img src="<?= FRONT_IMG2 ?>/footer-post-2.jpg" alt="post" />
                     </div>
                     <div class="latest-post-footer-right">
                        <h4><a href="#">Website design trends for 2018</a></h4>
                        <p>January 14 - 2018</p>
                     </div>
                  </div>
                  <div class="latest-post-footer clearfix">
                     <div class="latest-post-footer-left">
                        <img src="<?= FRONT_IMG2 ?>/footer-post-3.jpg" alt="post" />
                     </div>
                     <div class="latest-post-footer-right">
                        <h4><a href="#">UI experts and modern designs</a></h4>
                        <p>January 12 - 2018</p>
                     </div>
                  </div>
               </div>
            </div> -->
            
            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget footer-contact">
                  <h3>Contact Info</h3>
                  <br/>
                  <a href="javascript:;"><i class="fa fa-map-marker"></i> <?= nl2br($site_address) ?> </a>
                  <br/>
                  <ul class="social-icons- social-icons-footer">

                      <li><a class="facebook" href="<?= $site_fb; ?>"><i class="fa fa-facebook"  style="margin-left: 5px;"></i></a></li>
                      <li><a class="twitter" href="<?= $site_twitter; ?>"><i class="fa fa-twitter"  style="margin-left: 5px;"></i></a></li>
                      <!-- <li><a class="gplus" href="#"><i class="fa fa-google-plus" style="margin-left: 5px;"></i></a></li> -->
                      <!-- <li><a class="gplus" href="mailto:<?= $site_email; ?>"><i class="fa fa-envelope" style="margin-left: 5px;"></i></a></li> -->
                      <li><a class="linkedin" href="<?= $site_instagram; ?>"><i class="fa fa-linkedin" style="margin-left: 5px;"></i></a></li>
                      <?php /*<li><a class="skype" href="#"><i class="fa fa-skype"></i></a></li>*/ ?>
                   </ul>
               </div>
            </div>

            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3>NEWSLETTER</h3>
                  <form name="news_frm" id="news_frm" action="javascript:;" method="post">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="single-contact-field">
                              <input name="news_email" id="news_email" type="text" style="width: 80%;" placeholder="Enter your email ID">
                              <!-- Enter your email ID to stay tuned with the latest corporate news -->
                           </div>
                           <input type="submit" class="custom_submit jobguru-btn-2" name="send" value="send">
                        </div>
                     </div>
                  </form>
                  <br/>
                  <h3>ALERT</h3>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="single-contact-field">
                              <i class="fa fa-bell alert_bell"></i>
                           </div>
                        </div>
                     </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="footer-copyright">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="copyright-left">
                  <a href="tel:<?= $site_phone ?>"><i class="fa fa-phone"></i> <?= $site_phone ?></a>&nbsp;&nbsp;
                  <a href="mailto:<?= $site_email ?>"><i class="fa fa-envelope-o"></i> <?= $site_email ?></a>
                  <p>2020 <i class="fa fa-trademark"></i> ALL RIGHTS RESERVED <img src="<?= FRONT_IMG."logo/footer_logo.png"; ?>">

                     <!-- Copyright &copy; <?= date('Y'); ?> <?= $site_title ?>. All Rights Reserved</p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>

<script type="text/javascript">
  
  $(".ideators").click(function() {
      $([document.documentElement, document.body]).animate({
          scrollTop: $("#ideators_div").offset().top
      }, 2000);
  });
  $(function(){
      $("#news_frm").validate({                       
          rules: {                
              news_email : { required : true,email:true },
          },
          messages: {
             news_email : { required : "Please enter Email." },
          },
          errorPlacement: function(error, element) {
             if (element.attr("name") == "location[]") {
                  error.insertAfter(".location");
              }
              else{
                  error.insertAfter(element);
              }
          }
      });
  });

  $("#news_frm").on('submit',function(){

    var val_form = $("#news_frm").valid();
    if(!val_form) { return false; }
    $(".close").trigger("click");    
    var btn_old_val = $(".custom_submit").html();
    $(".custom_submit").html(btn_old_val+'...');
    $(".custom_submit").attr("disabled", true);

    $.ajax({
          url: "<?php echo base_url()."Home/subscription/" ?>",
          method: "POST",
          data: new FormData(this),
          contentType: false,  
          cache: false,  
          processData:false,  
          dataType: "json",
          success: function(data) {
            
            
            if(data.result) {
              $.notify({message: data.message },{type: 'success'});
            } else {
              $.notify({message: data.message },{type: 'danger'});
            }
            $("#news_frm")[0].reset();
            $(".custom_submit").html(btn_old_val);
            $(".custom_submit").attr("disabled", false);

            

          },
          error: function(data) {
              console.log(data);
          }
      });
  });

  $(".not_login").on("click",function(){
    $.notify({message: "Please login to apply this job." },{type: 'danger'});
  });
</script>
<?php 
if(isset($_SESSION['FAIL'])) {
   ?>
   <script type="text/javascript">
      $.notify({message: '<?php echo $_SESSION['FAIL']; ?>' },{type: 'danger'});
   </script>
   <?php
   unset($_SESSION['FAIL']);
}
if(isset($_SESSION['SUCCESS'])) {
   ?>
   <script type="text/javascript">
      $.notify({message: '<?php echo $_SESSION['SUCCESS']; ?>' },{type: 'success'});
   </script>
   <?php
   unset($_SESSION['SUCCESS']);
}
?>
<!-- Footer Area End