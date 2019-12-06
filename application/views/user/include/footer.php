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
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> HOME</a></li>
                     <li><a href="<?= base_url('about'); ?>"><i class="fa fa-angle-double-right "></i> ABOUT US</a></li>
                     <li><a href="<?= base_url('whyus'); ?>"><i class="fa fa-angle-double-right "></i> WHY US </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> REGISTER </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> LOGIN</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> FAQS </a></li>
                     <li><a href="<?= base_url('contact'); ?>"><i class="fa fa-angle-double-right "></i> CONTACT US</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3>EMPLOYER</h3>
                  <ul>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> EMPLOYER</a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> EMPLOYER PLAN </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> JOBSEEKER </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> PLAN Address  </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> TERMS AND CONDITIONS </a></li>
                     <li><a href="#"><i class="fa fa-angle-double-right "></i> PRIVACY POLICY </a></li>
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
                  <p><i class="fa fa-map-marker"></i> <?= nl2br($site_address) ?> </p>
                  <p><i class="fa fa-phone"></i> <?= $site_phone ?></p>
                  <p><i class="fa fa-envelope-o"></i> <?= $site_email ?></p>
               </div>
            </div>

            <div class="col-lg-3 col-md-6">
               <div class="single-footer-widget">
                  <h3>BUSINESS NEWS</h3>
                  <form>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="single-contact-field">
                              <input type="text" placeholder="Enter your email ID to stay tuned with the latest corporate news">
                           </div>
                        </div>
                     </div>
                  </form>
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
                  <p>2020 <i class="fa fa-trademark"></i> LOGO ALL RIGHTS RESERVED <img src="<?= FRONT_IMG."logo/".$site_logo; ?>">

                     <!-- Copyright &copy; <?= date('Y'); ?> <?= $site_title ?>. All Rights Reserved</p> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Footer Area End