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
                                        <label for="title">URL</label>
                                        <input type="text" class="form-control required" value="<?php if(isset($edit) && $edit['url']!='' ) { echo $edit['url']; } else { set_value('fname'); } ?>" id="url" name="url" maxlength="128">
                                    </div>


                                    <div class="form-group">
                                        <label for="title">Profile</label>
                                        <input type="file" name="img_src" id="img_src" class="form-control">
                                    </div>
                                    <?php if(isset($edit) && $edit['img_src']!='') { ?> 
                                    <div class="form-group">
                                        <img src="<?php echo base_url().$img_path.$edit['img_src']; ?>" >
                                    </div>
                                    <?php } ?>
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
<!-- <script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script> -->
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