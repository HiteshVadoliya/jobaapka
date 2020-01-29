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
                <!-- <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data"> -->
                  
                  <div class="candidate-single-profile-info">
                     
                        <div class="resume-box after-add-more">
                           <h3>History</h3>
                           <button class="btn btn-success add-more float-right add_history add_history_plus" type="button"><i class="fa fa-plus"></i> </button>
                              <button class="btn btn-danger add-more float-right add_history add_history_delete" type="button" style="display: none;"><i class="fa fa-times"></i> </button>
                           <div class="input-group-btn"> 
                              <form name="frm_history" id="frm_history" action="javascript:;" method="post" style="display: none;">
                                <div class="single-resume-feild">
                                   <div class="single-input">
                                      <label for="name">Title :</label>
                                      <input type="text" value="" id="title_history" name="title_history">
                                   </div>                                   
                                </div>

                                <div class="single-resume-feild ">
                                   <div class="single-input">
                                      <label for="name">Description :</label>
                                      <textarea id="descr_history" name="descr_history"></textarea>
                                   </div>
                                </div>
                                <input type="hidden" name="history_update_id" id="history_update_id">
                                <div class="submit-resume">
                                   <button type="submit" class="custom_submit">Update</button>
                                </div>
                                <br/>
                              </form>
                              
                            </div>
                            <table class="table " >
                              
                                <tr>
                                  <td style="width: 10%;"><strong>Sr.</strong></td>
                                  <td style="width: 20%;"><strong>Title</strong></td>
                                  <td style="width: 20%;"><strong>Description</strong></td>
                                  <td style="width: 20%;"><strong>Action</strong></td>
                                </tr>
                              
                                <?php
                                $h = 1;
                                if($history_data && !empty($history_data)) {
                                  foreach ($history_data as $h_key => $h_value) {
                                    ?>
                                    <tr class="del_his_<?= $h_value['id']; ?>">
                                      <td><?= $h; $h++; ?></td>
                                      <td><?= $h_value['title']; ?></td>
                                      <td><?= nl2br($h_value['descr']); ?></td>
                                      <td>
                                        <a href="javascript:;" class="get_history"  data-editid="<?= $h_value['id'] ?>"><i class="fa fa-pencil"></i></a>
                                        <a href="javascript:;" class="del_his" data-delid="<?= $h_value['id'] ?>">&nbsp;&nbsp;<i class="fa fa-trash"></i></a>
                                      </td>
                                    </tr>
                                    <?php
                                  }
                                  ?>
                                  <?php
                                }
                                ?>
                                                           
                            </table>
                        </div>

                        <!-- <div class=""></div> -->

                        
                        
                        
                  </div>
                <!-- </form> -->

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

    $(".add_history").on("click",function(){
      $("#frm_history").fadeToggle( "slow", "linear" );
      $(".add_history").fadeToggle( "slow", "linear" );
      $(".custom_submit").html("insert");
      $("#frm_history")[0].reset();
    });

    $(".get_history").on("click", function(){
      var eid = $(this).attr("data-editid");
      $(".custom_submit").html("Update");
      $.ajax({
            url: "<?php echo base_url()."JobSeeker_Process/get_history/" ?>",
            method: "POST",
            dataType: "json",
            data :{eid:eid},
            success: function(data) {
              console.log(data);
              if(data.id) {
                $("#frm_history")[0].reset();
                $("#title_history").val(data.title);
                $("#descr_history").val(data.descr);
                $("#history_update_id").val(data.id);
                $("#frm_history").css( "display", "block" );
                $(".add_history_delete").css( "display", "block" );
                $(".add_history_plus").css( "display", "none" );
              } else {
                
              }
            },
            error: function(data) {
                console.log(data);
            }
        });
    });

    $(function(){
        $("#frm_history").validate({                       
            rules: {                
                "title_history" : { required : true },
                "descr_history" : { required : true },
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
    

    $("#frm_history").on('submit',function(){
        var val_form = $("#frm_history").valid();
        if(!val_form) { return false; }
        var btn_old_val = $(".custom_submit").html();
        $(".custom_submit").html(btn_old_val+'...');
        $(".custom_submit").attr("disabled", true);
        $.ajax({
            type: "POST",            
            url: "<?php echo base_url('JobSeeker_Process/history') ?>",
            data: $("#frm_history").serialize(),
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
                $("#frm_history")[0].reset();
               $(".custom_submit").html(btn_old_val);
               $(".custom_submit").attr("disabled", false);

               var url = '<?php echo base_url('jobseeker/history'); ?>';
               window.location = url;
            },
            error: function (error) {}
        });
        return false;
    });

    $(".del_his").on("click", function(){
      var r = confirm("Are you sure to delete?");
      if(!r) { return false; }

      var did = $(this).attr("data-delid");
      $.ajax({
            url: "<?php echo base_url()."JobSeeker_Process/delete_history/" ?>",
            method: "POST",
            dataType: "json",
            data :{jobid:did},
            success: function(data) {
              if(data.result) {
                $(".del_his_"+did).remove();
                $.notify({message: 'Delete Successfully.' },{type: 'success'});
              } else {
                $.notify({message: 'Something Went wrong..' },{type: 'danger'});
              }
            },
            error: function(data) {
                console.log(data);
            }
        });
    });
   /* $(document).ready(function() {
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
    });*/
 </script>