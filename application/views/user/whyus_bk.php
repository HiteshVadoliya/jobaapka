<!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Why us</h3>
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
                           <li class="active-breadcromb"><a href="javascript:;">Why us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Single Candidate Bottom Start -->
      <section class="single-candidate-bottom-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-12">
                  <div class="single-candidate-bottom-left">
                     <div class="single-candidate-widget">
                        <h3><?= $hwt_whyus['title'] ?></h3>
                        <?= $hwt_whyus['descr']; ?>
                     </div>

                     
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- Single Candidate Bottom End -->

      <?php $this->load->view(USER."our_clients"); ?>