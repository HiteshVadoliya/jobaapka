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
         <?php //$this->load->view(USER."employer_left_side"); ?>
         
         <div class="col-md-12 col-lg-12">
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
                           
                        </div>
                     </div>
                  </div>
                  <div class="candidate-single-profile-info">
                     
                        <div class="resume-box">
                           <h3>company profile</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">Full name :</label>
                                 <input type="text" value="<?= $employer['fname']; ?>" id="fname" name="fname" readonly>
                              </div>
                              <div class="single-input">
                                 <label for="name">MOBILE NUMBER  :</label>
                                 <input type="text" value="<?= $employer['mobile']; ?>" id="mobile" name="mobile" readonly>
                              </div>
                              
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Start">OFFICIAL EMAIL ID :</label>
                                 <input type="text" value="<?= $employer['email']; ?>" id="email" name="email" readonly>
                              </div>
                              <div class="single-input">
                                 <label for="member">YOUR COMPANY NAME :</label>
                                 <input type="text" value="<?= $employer['company_name'] ?>" id="company_name" name="company_name" readonly>
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Location">INDUSTRY :</label>
                                    <?php
                                    if(isset($collection['industry']) && !empty($collection['industry']))
                                    {
                                      $industry = $collection['industry'];
                                      $selected_ind = "";
                                      foreach ($industry as $i_key => $i_value) {
                                        $selected_ind =  $this->HWT->hwt_selected( $i_value['id'], $employer['industry']);
                                        if(!empty($selected_ind)) {
                                          echo $i_value['title'].",<br>";
                                        }
                                      }
                                    }
                                    ?>
                              </div>
                              <div class="single-input">
                                 <label for="Location">LOCATION :</label>
                                    <?php
                                    if(isset($collection['location']) && !empty($collection['location']))
                                    {
                                      $location = $collection['location'];
                                      $selected_loc = "";
                                      foreach ($location as $l_key => $l_value) {
                                        $selected_loc = $this->HWT->hwt_selected( $l_value['id'], $employer['job_location']);
                                        if(!empty($selected_loc)) {
                                          echo $l_value['title'].",<br>";
                                        }
                                      }
                                    }
                                    ?>
                              </div>
                           </div>
                           
                        </div>
                        
                        <!-- <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div> -->
                  </div>
                </form>
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
        var btn_old_val = $(".custom_submit").text();
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