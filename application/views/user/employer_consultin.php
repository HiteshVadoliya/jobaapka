<!-- Breadcromb Area Start -->
<section class="jobguru-breadcromb-area">
   <div class="breadcromb-top section_100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcromb-box">
                  <h3>TECHNOLOGY CONSULTING</h3>
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
                     <li><a href="#">home</a></li>
                     <li class="active-breadcromb"><a href="#">TECHNOLOGY CONSULTING</a></li>
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
         <div class="col-md-12 col-lg-12">
                  <div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>TECHNOLOGY CONSULTING</h3>
                        </div>
                        <div class="new-job-submission">
                           <form name="frm" id="frm" action="javascript:;" method="post" enctype="multipart/form-data">
                              <p>
                                 <p>DON’T JUST HIRE BUT ALSO GROW YOUR ORGANIZATION WITH US</p>
                                 <br>
                                 <p>WE DEVELOP EFFECTIVE PROGRAM/APP/WEBSITE AND OTHER SOFTWARE TOOLS THAT WILL LEAD TO BETTER MONITORING OF YOUR MULTIPLE RESOURCES AND HELP YOU TO CUT COSTS,BOTH OF WHICH GRADUALLY HELP IN IMPROVING YOUR BUSINESS.</p>
                                 <br>
                                 <p>THE BIG NEWS IS ,YOU DON’T HAVE TO PAY ANYTHING FOR THIS CONSULTATION SEPARATELY.THIS IS TOTALLY FREE AND ABSOLUTELY AT YOUR COMFORT AND CONVENIENCE AND YOU CAN ANYTIME CHANGE YOUR APPOINTMENT TIME WITHIN AND UPTO 6 MONTHS FROM </p>
                                 <br>

                                 <center><strong>ALL YOU HAVE TO DO IS FILL THE BELOW FORM FOR ONE FULLY FREE TECHNOLOGY CONSULTING SESSION FROM US.</strong></center>
                                 <br>



                              <div class="resume-box">
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">CONTACT PERSON NAME  :</label>
                                       <input type="text" id="con_contact" name="con_contact">
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">EMAIL ID  :</label>
                                       <input type="text" placeholder="" id="con_email" name="con_email">
                                    </div>
                                 </div>

                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">MOBILE NUMBER  :</label>
                                       <input type="text" id="con_mobile" name="con_mobile">
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">COMPANY NAME  :</label>
                                       <input type="text" placeholder="" name="con_company_name" id="con_company_name">
                                    </div>
                                 </div>

                                 <div class="single-resume-feild ">
                                    <div class="single-input">
                                       <label for="j_title">PROBLEMS YOU ARE FACING CURRENTLY  :</label>
                                       <textarea placeholder="" name="con_problem" id="con_problem" ></textarea>
                                    </div>
                                 </div>

                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_reg">PREFERRED APPOINTMENT PLACE  :</label>
                                       <select name="con_appointment" id="con_appointment">
                                          <option value='your_office'>YOUR OFFICE</option>
                                          <option value="our_office">OUR OFFICE</option>
                                          <option value="online">ONLINE VIDEOCONFERENCING </option>
                                       </select>
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">OFFICE ADDRESS :</label>
                                       <input type="text" placeholder="" id="con_office_address" name="con_office_address">
                                    </div>
                                     
                                 </div>

                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="Location">PREFERRED APPOINTMENT TIME :</label>
                                       <input type="text" placeholder="" name="con_appointment_time" id="con_appointment_time">
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">ANY OTHER THING YOU WANT TO TELL US (OPTIONAL) :</label>
                                       <input type="text" placeholder="" id="con_other" name="con_other">
                                    </div>
                                     
                                 </div>
                                 
                              </div>
                              <div class="single-input submit-resume">
                                 <button type="submit" class="custom_submit">BOOK MY CONSULTATION</button>
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
                con_contact : { required : true },
                con_email : { required : true },
                con_mobile : { required : true },
                con_company_name : { required : true },
                con_problem : { required : true },
                con_appointment : { required : true },
                con_office_address : { required : true },
                con_appointment_time : { required : true },
                // con_other : { required : true },
            },
            messages: {
               con_contact : { required : "Please enter contact." },
               con_email : { required : "Please enter email." },
               con_mobile : { required : "Please select mobile." },
               con_company_name : { required : "Please select company name." },
               con_problem : { required : "Please select problem." },
               con_appointment : { required : "Please select appointment." },
               con_office_address : { required : "Please Select office address." },
               con_appointment_time : { required : "Please select appointment time." },
               // con_other : { required : "Please select other." },
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
            url: "<?php echo base_url('Employer_Process/consultin') ?>",
            // data: $("#frm").serialize(),
            data: new FormData(this),
            contentType: false,  
            cache: false,  
            processData:false,  
            dataType: "json",
            success: function(res) {
                if(res.response) {
                  $.notify({message: res.msg },{type: 'success'});
                }
                $("#frm")[0].reset();
               $(".custom_submit").html(btn_old_val);
            },
            error: function (error) {}
        });
        return false;
    });
    
 </script>