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
                        <h3>WELCOME TO JOBAAPKA</h3>
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
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <section class="jobguru-browse-company-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                <center><h2>APPLYING FOR ALL JOBS ANYTIME AND EVERYTIME <u>IS ALWAYS FREE</u></h2></center>
                  
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                        <div class="row">                           
                           <div class="col-lg-6 col-md-12 companyBox moreBox" style="display: block;">
                              <div class="single-browse-company">                                 
                                 <h3>
                                 Create profile <br /><br />
                                 <a href="<?= base_url('signup/jobseeker'); ?>" class="post-jobs">Create profile</a>
                                 </h3>
                              </div>
                           </div>
                          <div class="col-lg-6 col-md-12 companyBox moreBox" style="display: block;">
                             <div class="single-browse-company">                                
                                <h3>                                   
                                Sign in <br /><br />
                                <a href="<?= base_url('login/'); ?>" class="post-jobs" >Sign in</a>                              
                                </h3>
                             </div>                            
                          </div>                           
                        </div>
                     </div>
                  </div>

                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                        <div class="row">                           
                           <div class="col-lg-4 col-md-12  companyBox moreBox">
                              <div class="single-browse-company">                                 
                                 <h3>
                                 <a href="<?= base_url('signup/jobseeker'); ?>" class="post-jobs">CHECK OUT OUR PREMIUM FEATURES</a>
                                 </h3>
                              </div>
                           </div>


                                                    
                        </div>
                     </div>
                  </div>

                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                        <div class="row">                           
                           <div class="col-lg-12 col-md-12  companyBox moreBox">
                              <div class="single-browse-company">                                 
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-xs-12 col-md-3 col-md-4-offset">
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
                                                                 New Job or Personal Job assistance for 6 months after you lose a job
                                                             </td>
                                                         </tr>
                                                         
                                                         <tr class="active">
                                                             <td>
                                                                 
                                                             </td>
                                                         </tr>
                                                     </table>
                                                 </div>
                                                 <div class="panel-footer">
                                                     <a href="javascript:;" class="btn btn-success" role="button">Buy Now</a>
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
      </section>