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
                  <h3>COMPANY DETAILS</h3>
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
                           <!-- <div class="resume-avatar-hover">
                              <div class="resume-avatar-upload">
                                 <p>
                                    <i class="fa fa-pencil"></i>
                                    Edit
                                 </p>
                                 <input type="file" name="img_src" id="img_src">
                                 <input type="hidden" value="<?= $employer['img_src'] ?>" name="img_src_old" id="img_src_old">
                              </div>
                           </div> -->
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
                                 <input type="text" value="<?= $employer['email']; ?>" id="email" name="email" readonly>
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

               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="company_a" role="tabpanel" aria-labelledby="company_a_tab">
                     <div class="row">                           
                        <div class="col-lg-12 col-md-12  companyBox moreBox">
                           <div class="single-browse-company">                                 
                              <div class="container">
                                  <div class="row">
                                      <div class="col-xs-12 col-md-4 col-md-4-offset">
                                          <div class="panel panel-primary">
                                              <div class="panel-heading">
                                                  <h3 class="panel-title">
                                                      </h3>
                                              </div>
                                              <div class="panel-body">
                                                  <div class="the-price">
                                                      <h5>Most affordable and unique <br>
                                                       <small>6 month plan</small></h5>
                                                  </div>
                                                  <table class="table">
                                                      <tr>
                                                          <td>
                                                              Unlimited CV <br/>Download/Access
                                                          </td>
                                                      </tr>
                                                      <tr class="active">
                                                          <td>
                                                              Post unlimited jobs
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>
                                                              One Free technology consulting<br/> for your business issues
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
 
