<section id="gallery-tab">
   <div class="container mb-5">
      <h3 class="gallery-heading">choose your workshop</h3>
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-12 col-12">
            <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
               <?php
               if(count($hwt_workshop) > 0 ) {
                  foreach ($hwt_workshop as $work_key => $work_value) {
                     ?>
                        <div class="card">
                           <div class="card-header" role="tab" id="headingTwo<?= $work_value['id'] ?>">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo<?= $work_value['id']; ?>"
                                 aria-expanded="false" aria-controls="collapseTwo<?= $work_value['id']; ?>">
                                 <p class="mb-0">
                                    <?= $work_value['title']; ?> <i class="more-less fa fa-angle-down pull-right"></i>
                                 </p>
                              </a>
                           </div>
                           <div id="collapseTwo<?= $work_value['id']; ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo<?= $work_value['id'] ?>"
                              data-parent="#accordionEx1">
                              <div class="card-body">
                                 <h2><?= $work_value['title']; ?></h2>
                                 <?= nl2br($work_value['descr']); ?>
                              </div>
                           </div>
                        </div>
                     <?php
                  } 
               ?>
               <?php } ?>
               <!-- <div class="card">
                  <div class="card-header" role="tab" id="headingTwo2">
                     <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo21"
                        aria-expanded="false" aria-controls="collapseTwo21">
                        <p class="mb-0">
                           PIVATE CLASS "resin basics" <i class="fa fa-angle-down pull-right"></i>
                        </p>
                     </a>
                  </div>
                  <div id="collapseTwo21" class="collapse" role="tabpanel" aria-labelledby="headingTwo21"
                     data-parent="#accordionEx1">
                     <div class="card-body">
                        <h2>PRIVATE CLASS "resin basics"</h2>
                        <a href="#" class="btn btn-warning">view the date and book</a>
                        <h4>course info:</h4>
                        <h5>what you learn.</h5>
                        <ul>
                           <li>General knowledge about resin and its processing</li>
                           <li>proper use of Resin during the painting process</li>
                           <li>Information about preparation and follow-up</li>
                           <li>Information on the basic equipment of a Resin artist</li>
                           <li>Basic techniques about painting with resin</li>
                        </ul>
                        <h5>what you get.</h5>
                        <ul>
                           <li>Create your first resin artwork under instruction (50x50cm)</li>
                           <li>Wide range of additional color options during the course</li>
                           <li>Handout with all important information about “Resin"</li>
                           <li>U can bring of course your own colors and materials to the workshop</li>
                           <li>Resin has to be paid for this class seperately (30 Euro)</li>
                           <li>If necessary, the complete basic equipment for you worried (not included in the course price – is organized separately)</li>
                        </ul>
                        <h5>description.</h5>
                        <p>MRS.COLORBERRY (Stephanie Walberer and her assistant) already have several years of experience working with Resin and they will help you make your first artwork with Resin. In addition, you will get properties and peculiarities of the resin taught, which are shown alternately with theory and practice:</p>
                        <ul>
                           <li>What is Resin and what security measures must I follow?</li>
                           <li>Which substrates are suitable for working with Resin?</li>
                           <li>What colors / additives can I put in the resin? What special features are there?</li>
                           <li>Create your own artwork and use the colors of your choice</li>
                           <li>Learn the secrets of a super smooth resin coating</li>
                           <p>The workshop is specially designed for all beginners, trendsetters and Resin artists who want to refresh their knowledge. Resin is a unique, sticky and not exactly easy medium, which you will love after a short time.</p>
                        </ul>
                        <p>The resin takes 24 hours to cure completely – so you can only pick up your picture with me the next day.</p>
                        <a href="#" class="btn btn-warning">view the date and book</a>
                     </div>
                  </div>
               </div> -->
            </div>
            <div class="container mt-5 mb-2" id="workshop-slider">
               <div class="row blog">
                  <div class="col-md-12 p-0">
                     <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators mb-2">
                           <?php
                           $total_team = count($hwt_workshop_slider);
                           $per_page = 3;
                           $loop = ceil($total_team/$per_page);
                           for ($i=0; $i < $loop; $i++) { 
                              ?>
                                 <li data-target="#blogCarousel" data-slide-to="<?= $i; ?>" class="<?php if($i==0) { echo 'active'; } ?> "></li>
                              <?php
                           }
                           ?>
                        </ol>

                        <div class="carousel-inner">
                           <?php
                           $ii = 0;
                           $j = 0;
                           foreach ($hwt_workshop_slider as $t_key => $t_value) {
                              if($t_value['img_src']!='' && file_exists(IMG_WORKSHOPSLIDER.$t_value['img_src'])) {
                                 $team_img = base_url().IMG_WORKSHOPSLIDER.$t_value['img_src'];
                              } else {
                                 $team_img = IMG_WORKSHOPSLIDER."default.jpg";
                              }

                              if(($ii%$per_page)==0) { ?> 
                              <div class="carousel-item <?php if($ii==0) { echo 'active'; } ?>">
                                 <div class="row">
                              <?php } ?>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                       <a href="#">
                                       <img src="<?= $team_img ?>" class="img-fluid" alt="Image" style="max-width:100%;">
                                       </a>
                                    </div>
                              <?php

                              if($j==$per_page-1 || $ii==$total_team-1) {
                                 ?>
                                    </div>
                                 </div>
                                 <?php
                                 $j=0;
                              } else {

                              $j++;
                              }
                              ?>
                              <?php
                              $ii++;
                              } 
                              ?>
                           
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container p-0">
               <div class="workshop-social-icon mt-5 mb-1">
                  <a href="<?= $site_fb ?>"><span class="fa fa-facebook-square fa-2x"></span></a>
                  <a href="<?= $site_instagram ?>"><span class="fa fa-twitter-square fa-2x"></span></a>
                  <a href="<?= $site_instagram ?>"><span class="fa fa-instagram fa-2x"></span></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="ofr-box">
               <h5>Special offer</h5>
               <hr>
               <a href="#">new resin book</a>
            </div>
         </div>
      </div>
   </div>
</section>