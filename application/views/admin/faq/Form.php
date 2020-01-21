
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
                                        <label for="title">Question</label>
                                        <input type="text" class="form-control required" value="<?php if(isset($edit) && $edit['title']!='' ) { echo $edit['title']; } else { set_value('title'); } ?>" id="title" name="title" maxlength="128">
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Answer</label>
                                        <textarea name="descr" id="descr" rows="30" class="form-control"><?php if(isset($edit) && $edit['descr']!='') { echo $edit['descr']; } else { echo set_value('descr'); } ?></textarea>                                       
                                    </div>

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
<<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/ckeditor.js' ?>"></script>
<script src="<?php echo PUBLIC_FILE.'backend/ckeditor/adapters/jquery.js' ?>"></script>
<script>
    $(document).ready(function() {      
        $('#descr').ckeditor();
    });
    $(".multi_delete").on("click",function(){
      var did = $(this).attr('data-value');
      $(".delete_"+did).hide();
      console.log("delete_"+did);
    });
  </script>
<script type="text/javascript">
    $(document).ready(function(){
        var addUserForm = $("#frm");
        var validator = addUserForm.validate({
            rules:{
                title :{ required : true },
                // post :{ required : true },
                descr :{ required : true },
                // code :{ required : true },
            },
            messages:{
                title :{ required : "Please enter title" },
                // post :{ required : "Please enter Post" },
                descr :{ required : "Please enter Post" },
                // code :{ required : "Please enter Code" },
            }
        });
    });
</script>