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
            <div class="col-md-6 col-md-offset-3">
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
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php if(isset($edit)) { ?>
                    <form enctype="multipart/form-data" role="form" id="frm" name="frm" action="<?php echo ADMIN_LINK.$url; ?>/save" method="post" role="form">
                        <input type="hidden" name="editid" id="editid" value="<?= $edit["id"] ?>">
                    <?php } else { ?>
                    <form enctype="multipart/form-data" role="form" id="frm" name="frm" action="<?php echo ADMIN_LINK.$url; ?>/save" method="post" role="form">
                    <?php } ?>
                        <input type="hidden" name="type" id="type" value="edit">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Title 1</label>
                                        <input type="text" name="title" id="title" class="form-control" value="<?php if(isset($edit) && $edit['title']!='') { echo $edit['title']; } else { echo set_value('title'); } ?>">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Description 1</label>
                                        <textarea name="descr" id="descr" rows="10" class="form-control"><?php if(isset($edit) && $edit['descr']!='') { echo $edit['descr']; } else { echo set_value('descr'); } ?></textarea>                                       
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title 2</label>
                                        <input type="text" name="title_2" id="title_2" class="form-control" value="<?php if(isset($edit) && $edit['title_2']!='') { echo $edit['title_2']; } else { echo set_value('title_2'); } ?>">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Description 2</label>
                                        <textarea name="descr_2" id="descr_2" rows="10" class="form-control"><?php if(isset($edit) && $edit['descr_2']!='') { echo $edit['descr_2']; } else { echo set_value('descr_2'); } ?></textarea>                                       
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title 3</label>
                                        <input type="text" name="title_3" id="title_3" class="form-control" value="<?php if(isset($edit) && $edit['title_3']!='') { echo $edit['title_3']; } else { echo set_value('title_3'); } ?>">                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Description 3</label>
                                        <textarea name="descr_3" id="descr_3" rows="10" class="form-control"><?php if(isset($edit) && $edit['descr_3']!='') { echo $edit['descr_3']; } else { echo set_value('descr_3'); } ?></textarea>                                       
                                    </div>

                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
            

        </div>    
    </section>
    
</div>
   <!-- include summernote css/js -->
<!-- CK Editor -->
<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/ckeditor.js' ?>"></script>
<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/adapters/jquery.js' ?>"></script>
<script>
    $(document).ready(function() {      
        $('#descr').ckeditor();
        $('#descr_2').ckeditor();
        $('#descr_3').ckeditor();
    });
  </script>
<script type="text/javascript">
    $(document).ready(function(){
        var addUserForm = $("#frm");
        var validator = addUserForm.validate({
            rules:{
                title :{ required : true },
                descr :{ required : true },
                title_2 :{ required : true },
                descr_2 :{ required : true },
                title_3 :{ required : true },
                descr_3 :{ required : true },
            },
            messages:{
                title :{ required : "This field is required" },
                descr :{ required : "This field is required" },
            }
        });
    });
    
</script>