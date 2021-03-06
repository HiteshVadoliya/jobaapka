<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>History</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="breadcromb-box-pagin my_breadcum2">
      <ul>
         <li>INSTANT ACCOUNT CREATION WITH ONLY MINIMUM INFO</li>
         <li>&nbsp;</li>
         <li>FREE REGISTRATION TO SEARCH RIGHT JOBS</li>
      </ul>
   </div>
   <br><br>
   <div class="breadcromb-box-pagin my_breadcum3">
      <ul>
         <li></li>
         <li>LOWEST PRICE SERVICES</li>
         <li></li>
      </ul>
   </div>
   <div class="breadcromb-bottom">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box-pagin">
                  <ul>
                     <li><a href="<?= base_url(); ?>">home</a></li>
                     <li><a href="javascript:;">Jobseeker</a></li>
                     <li class="active-breadcromb"><a href="javascript:;">History</a></li>
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
         <?php $history = json_decode($jobseeker_data['history']); ?>
         <div class="col-lg-9 col-md-12">
            <div class="dashboard-right">
               <div class="candidate-profile">
                <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                  
                  <div class="candidate-single-profile-info">
                     
                        <div class="resume-box after-add-more">
                           <h3>History</h3>

                           <div class="input-group-btn"> 
                              <button class="btn btn-success add-more float-right" type="button"><i class="fa fa-plus"></i> Add</button>
                            </div>
                            <table>
                              <tr>
                                <td>Designation</td>
                                <td>Description</td>
                                <td>Action</td>
                              </tr>
                              <tr>
                                <td>Designation</td>
                                <td>Description</td>
                                <td>
                                  <a href=""></a>
                                </td>
                              </tr>                              
                            </table>
                          <?php
                          if(isset($history) && !empty($history)) {
                            $i = 0;
                            foreach ($history as $h_key => $h_value) {
                              if(!empty($h_value)) {
                              ?>
                               <div class="single-resume-feild ">
                                  <div class="single-input <?php if($i!='0') { echo 'control-group'; } ?>">
                                     <label for="Phone">History :</label>
                                     <textarea name="history[]" ><?= $h_value; ?></textarea>
                                      <?php if($i!=0) {?> 
                                      <button class="btn btn-danger remove float-right" type="button"><i class="fa fa-remove"></i> Remove</button>
                                      <?php } ?>
                                  </div>
                               </div>
                              <?php
                              }
                              $i++;
                            }
                          } else {
                            ?>
                             <div class="single-resume-feild ">
                                <div class="single-input">
                                   <label for="Phone">History :</label>
                                   <textarea name="history[]" ></textarea>
                                </div>
                             </div>
                            <?php
                          }
                          ?>
                        </div>

                        <!-- <div class=""></div> -->

                        
                        
                        <div class="submit-resume">
                           <button type="submit" class="custom_submit">Update</button>
                        </div>
                  </div>
                </form>

                <div class="copy " style="display: none;">
                  <div class="single-input control-group">
                     <label for="Phone">History :</label>
                     <textarea name="history[]"></textarea>
                     <button class="btn btn-danger remove float-right" type="button"><i class="fa fa-remove"></i> Remove</button>
                     <br/>
                  </div>                          
                </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Candidate Dashboard Area End -->
 
 <script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").append(html);
      });

      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
    $(function(){
        $("#frm").validate({                       
            rules: {                
                "history[]" : { required : true },
            },
            messages: {
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
        $(".custom_submit").attr("disabled", true);
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('JobSeeker_Process/history') ?>",
            data: $("#frm").serialize(),
            data: new FormData(this),
            // data: $("#frm").serialize(),
           contentType: false,  
           cache: false,  
           processData:false,  
           dataType: "json",
            success: function(res) {
                if(res.response) {
                  $.notify({message: res.msg },{type: 'success'});
                }
               $(".custom_submit").html(btn_old_val);
               $(".custom_submit").attr("disabled", false);
            },
            error: function (error) {}
        });
        return false;
    });
 </script>