<link rel="stylesheet" type="text/css" href="<?= ADMIN_CSS_JS.'fileupload/css/jquery.dm-uploader.css' ?>">
<link rel="stylesheet" type="text/css" href="<?= ADMIN_CSS_JS.'fileupload/css/styles.css' ?>">
<link rel="stylesheet" type="text/css" href="<?= ADMIN_CSS_JS.'css/bootstrap-tagsinput.css' ?>">
<style type="text/css">
.dm-uploader { padding: 0; }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= ucfirst($type)." ".$MainTitle ?>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                <?php
                $error = $this->session->flashdata('error');
                if($error)
                {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                <?php //$this->load->view(ADMIN_LINK.'includes/msg'); ?>
            </div>

            
            <div class="col-md-12">
                <?php if(validation_errors()){ ?>
                <div class="alert alert-danger alert-dismissable">
                <?php  echo validation_errors(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>
            <?php } ?>
            </div>
            
            <div class="col-md-12">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php if(isset($edit)) { ?>
                    <form enctype="multipart/form-data"  role="form" id="frm" name="frm" action="<?php echo ADMIN_LINK.$url; ?>/save" method="post" role="form">
                        <input type="hidden" name="editid" id="editid" value="<?= $edit[$tbl_id] ?>">
                    <?php } else { ?>
                    <form enctype="multipart/form-data" role="form" id="frm" name="frm" action="<?php echo ADMIN_LINK.$url; ?>/save" method="post" role="form">
                    <?php } ?>
                        <input type="hidden" name="type" id="type" value="<?= $type ?>">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control required" value="<?php if(isset($edit) && $edit['title']!='' ) { echo $edit['title']; } else { set_value('fname'); } ?>" id="title" name="title" maxlength="128">
                                    </div>
                                    

                                    <div class="form-group">
                                        <label for="title">Description</label>
                                        <textarea name="descr" id="descr" rows="30" class="form-control"><?php if(isset($edit) && $edit['descr']!='') { echo $edit['descr']; } else { echo set_value('descr'); } ?></textarea>                                       
                                    </div>

                                    <?php /*
                                    <div class="mb-3 dm-uploader" id="image">
                                       <div class="row">
                                          <div class="col-md-10 col-sm-12">
                                             <div class="from-group mb-2">
                                                <label>Image</label>
                                                <input type="text" class="form-control" aria-describedby="fileHelp" placeholder="No image uploaded..." readonly="readonly" />
                                                <div class="progress mb-2 d-none">
                                                   <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0">0%</div>
                                                </div>
                                             </div>
                                             <div class="form-group">
                                                <div role="button" class="btn btn-primary mr-2">
                                                   <?php
                                                   if(isset($edit)) {
                                                   ?>
                                                   <input type="hidden" name="old_Img" id="old_Img" value="<?php echo $edit['img_src']; ?>">
                                                   <?php
                                                   }
                                                   ?>
                                                   <input type="hidden" name="img_path" id="img_path" class="myclass">
                                                   <i class="fa fa-folder-o fa-fw"></i> Browse Files
                                                   <input type="file" title='Click to Select Profile Image' />
                                                </div>
                                                <small class="status text-muted">Select a file or drag it over this area..</small>
                                             </div>
                                          </div>
                                          <div class="col-md-2 d-md-block d-sm-none">
                                             <?php
                                             if(isset($edit) && $edit['img_src'] != '' && file_exists($img_path.$edit['img_src'])) {
                                             ?>
                                             <img src="<?php echo base_url().$img_path.$edit['img_src']; ?>" alt="..." class="img-thumbnail">
                                             <?php
                                             }
                                             else {
                                             ?>
                                             <img src="<?php echo PUBLIC_FILE.'backend/default-image.png'; ?>" alt="..." class="img-thumbnail">
                                             <?php
                                             }
                                             ?>
                                          </div>
                                       </div>
                                    </div>
                                    */?>
                                </div>

                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            

        </div>    
    </section>
    
</div>
<script src="<?php echo ADMIN_CSS_JS; ?>bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="<?= ADMIN_CSS_JS.'fileupload/js/jquery.dm-uploader.js'; ?>"></script>
<script src="<?= ADMIN_CSS_JS.'fileupload/js/file_upload.js'; ?>"></script>
<script src="<?= ADMIN_CSS_JS.'js/bootstrap-tagsinput.min.js'; ?>"></script>

<!-- <script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script> -->
<<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/ckeditor.js' ?>"></script>
<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/adapters/jquery.js' ?>"></script>
<script>
    $(document).ready(function() {      
        $('#descr').ckeditor();
    });
  </script>
<script type="text/javascript">
    $(document).ready(function(){
        var addUserForm = $("#frm");
        var validator = addUserForm.validate({
            rules:{
                title :{ required : true },
                url :{ required : true, url:true },
            },
            messages:{
                title :{ required : "This field is required" },
                url :{ required : "This field is required" },
            }
        });
    });
</script>

<script type="text/javascript">
$(function(){

   /* Image */
   $('#image').dmUploader({ //
      url: '<?= base_url(ADMIN.$Controller.'/upload_files'); ?>',
      maxFileSize: 100000000, // 3 Megs max
      multiple: false,
      allowedTypes: 'image/*',
      content: 'application/json',
      extFilter: ['jpg','jpeg','png'],
      onDragEnter: function(){
         // Happens when dragging something over the DnD area
         this.addClass('active');
      },
      onDragLeave: function(){
         // Happens when dragging something OUT of the DnD area
         this.removeClass('active');
      },
      onInit: function(){
         // Plugin is ready to use
         ui_add_log('Penguin initialized :)', 'info');
         //this.find('input[type="text"]').val('');
      },
      onComplete: function(){
         // All files in the queue are processed (success or error)
         ui_add_log('All pending tranfers finished');
      },
      onNewFile: function(id, file){
         // When a new file is added using the file selector or the DnD area
         ui_add_log('New file added #' + id);
         if (typeof FileReader !== "undefined"){
            var reader = new FileReader();
            var img = this.find('img');
            reader.onload = function (e) {
                img.attr('src', e.target.result);
            }
            reader.readAsDataURL(file);
         }
         ui_multi_add_file(id, file, this);
      },
      onBeforeUpload: function(id){
         // about tho start uploading a file
         ui_add_log('Starting the upload of #' + id);
         /*ui_single_update_progress(this, 0, true);      
         ui_single_update_active(this, true);
         ui_single_update_status(this, 'Uploading...');*/
         ui_multi_update_file_progress(id, 0, '', true);
         ui_multi_update_file_status(id, 'uploading', 'Uploading...');
      },
      onUploadProgress: function(id, percent){
         // Updating file progress
         /*ui_single_update_progress(this, percent);*/
         ui_multi_update_file_progress(id, percent);
      },
      onUploadSuccess: function(id, data) {
         $(id).find('.status').html('');
         var customData = jQuery.parseJSON(data);
         // console.log(customData.path);
         var response = JSON.stringify(data);
         // A file was successfully uploaded
         ui_add_log('Server Response for file #' + id + ': ' + response);
         ui_add_log('Upload of file #' + id + ' COMPLETED', 'success');
         /*ui_single_update_active(this, false);*/
         // You should probably do something with the response data, we just show it
         // this.find('input[type="text"]').val(customData.path);
         /*let resumeVal = $('#resumeFile').val();
         let newArr = [];
         if(resumeVal != '') {
            // console.log(resumeVal);
            newArr = jQuery.parseJSON(resumeVal);
            newArr.push(customData.path);
         }
         else {
            newArr.push(customData.path);
         }
         newArr = JSON.stringify(newArr);*/
         // $('#resumeFile').val(newArr);
         $('#img_path').val(customData.path);
         $('#img_path-error').hide();

         // $('.brochure').val(customData.path);
         /*ui_single_update_status(this, 'Upload completed.', 'success');*/
         ui_multi_update_file_status(id, 'success', 'Upload Complete');
         ui_multi_update_file_progress(id, 100, 'success', false);
      },
      onUploadError: function(id, xhr, status, message){
         // Happens when an upload error happens
         /*ui_single_update_active(this, false);
         ui_single_update_status(this, 'Error: ' + message, 'danger');*/
         ui_multi_update_file_status(id, 'danger', message);
         ui_multi_update_file_progress(id, 0, 'danger', false);
      },
      onFallbackMode: function(){
         // When the browser doesn't support this plugin :(
         ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
      },
      onFileSizeError: function(file){
         ui_single_update_status(this, 'File excess the size limit', 'danger');
         ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
      },
      onFileTypeError: function(file){
         ui_single_update_status(this, 'Please Select Image Only', 'danger');
         ui_add_log('File \'' + file.name + '\' cannot be added: must be an image (type error)', 'danger');
      },
      onFileExtError: function(file){
         ui_single_update_status(this, 'Please Select Image Only', 'danger');
         ui_add_log('File \'' + file.name + '\' cannot be added: must be an image (extension error)', 'danger');
      }
   });


});
</script>
<!-- File item template -->
<script type="text/html" id="files-template">
   <li class="media">
      <hr class="mt-1 mb-1" />
      <div class="media-body mb-1">
         <p class="mb-2">
            <strong>%%filename%%</strong> - Status: <span class="text-muted">Waiting</span>
         </p>
         <div class="progress mb-2">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
      </div>
   </li>
</script>