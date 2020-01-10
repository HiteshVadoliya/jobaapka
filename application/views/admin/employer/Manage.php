<link rel="stylesheet" href="<?= ADMIN_CSS_JS; ?>css/jquery-confirm.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/backend/datatables.net/css/dataTables.bootstrap.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $MainTitle." Manage "; ?>
      </h1>
    </section>
    <section class="content">
      <div class="msgsuccess"></div>
        <div class="row">

            <!-- <div class="col-xs-12 text-right">              
                <div class="form-group">
                    <a class="btn btn-primary " href="<?= ADMIN_LINK.$url."/add/" ?>" ><i class="fa fa-plus"></i> Add New <?= $MainTitle; ?></a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= $MainTitle; ?> List</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body table-responsive ">
                    <!-- <select class="hwt_filter" name="order_by" id="order_by" style="padding: 3px;" >
                      <option value="ASC">ASC</option>
                      <option value="DESC">DESC</option>
                    </select> -->

                    <!-- <select class="hwt_filter" name="order_by_with" id="order_by_with" style="padding: 3px;" >
                      <option value="plan_status">Plan</option>
                    </select> -->

                    <select class="hwt_filter" name="active_deactive" id="active_deactive" style="padding: 3px;" >
                      <option value="">Sort by Plan</option>
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                    <br/><br/>
                    <table class="table table-bordered table-striped" id="posts">
                        <thead>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Action</th>
                        </thead>        
                   </table>
                  
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div>
        </div>


    </section>
</div>

<script src="<?php echo base_url(); ?>public/backend/datatables.net/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>public/backend/datatables.net/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script>
  $(".hwt_filter").change(function(){
    
    var order_by =  $("#order_by").find(":selected").val();
    var order_by_with =  $("#order_by_with").find(":selected").val();
    var active_deactive =  $("#active_deactive").find(":selected").val();
    
      $('#posts').DataTable({
          "processing": true,
          "serverSide": true,
          "bDestroy": true,
          "ajax":{
             "url": "<?php echo ADMIN_LINK.$Controller ?>/ajax_list",
             "dataType": "json",
             "type": "POST",
             "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', order_by:order_by, order_by_with:order_by_with, active_deactive:active_deactive }
          },
        "columns": [
                { "data": "title" },
                { "data": "from_email" },
                { "data": "action","bSortable": false  },
             ]   

    });
    
  });

    $(document).ready(function () {
        $('#posts').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
           "url": "<?php echo ADMIN_LINK.$Controller ?>/ajax_list",
           "dataType": "json",
           "type": "POST",
           "data":{  '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>' }
                       },
          "columns": [
                  { "data": "title" },
                  { "data": "from_email" },
                  { "data": "action","bSortable": false  },
               ]   

      });

    
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.1.0/jquery-confirm.min.js"></script>
<script type="text/javascript">
  $(document).on("click",".rowDelete",function(){
        
        var id = $(this).attr("data-id");
        $.confirm({
            
              title: 'Confirm Delete!',
              content: 'Are you sure to delete ?',
              buttons: {
                  confirm: function () {
                  
                      
                      $.ajax(
                      {
                          url: '<?php echo ADMIN_LINK.$Controller ?>/delete',
                          dataType: "JSON",
                          method:"POST",
                          data: {
                              "id": id
                          },
                          success: function ()
                          {
                              $('#posts').DataTable().ajax.reload();
                              $('.msgsuccess').html('<div class="alert alert-success">Data has been deleted successfully!</div>');
                          }
                      });

                  },
                  cancel: function () {
                     
                  }
              }
        });        
  });  


  $(document).on("click",".rowStatus",function(){
          
        
        var id = $(this).attr("data-id");             
        var status = $(this).attr("data-status");             
        $.ajax(
        {
            url: '<?php echo ADMIN_LINK.$Controller ?>/changeStatus',
            dataType: "JSON",
            method:"POST",
            data: {
                "id": id,
                "status": status,
            },
            success: function (response)
            { 
                 $('#posts').DataTable().ajax.reload();
            }
        });
              
  });   
</script>
