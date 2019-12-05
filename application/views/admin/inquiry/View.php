<style type="text/css">
    /* Person */
    .person {
        border: 1px solid black;
        padding: 10px;
        min-width: 150px;
        background-color: #FFFFFF;
        display: inline-block;
    }

    .person.female {
        border-color: #F45B69;
    }

    .person.male {
        border-color: #456990;
    }

    .person div {
        text-align: center;
    }

    .person .name {
        font-size: 16px;
    }

    .person .parentDrop, .person .spouseDrop, .person .childDrop {
        border: 1px dashed #000000;
        width: auto;
        min-width: 80px;
        min-height: 80px;
        display: inline-block;
        vertical-align: top;
        position: relative;
        padding-top: 15px;
    }

    .person .parentDrop>span,
    .person .spouseDrop>span,
    .person .childDrop>span {
        position: absolute;
        top: 2px;
        left: 2px;
        font-weight: bold;
    }
    .parentDrop>.person,
    .spouseDrop>.person,
    .childDrop>.person {
        margin-top: 20px;
    }

    /* Tree */
    .tree ul {
        padding-top: 20px;
        position: relative;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .tree li {
        display: table-cell;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }



    /*We will use ::before and ::after to draw the connectors*/
    .tree li::before, .tree li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 1px solid #ccc;
        width: 50%;
        height: 20px;
    }

    .tree li::after {
        right: auto;
        left: 50%;
        border-left: 1px solid #ccc;
    }

    /*We need to remove left-right connectors from elements without 
    any siblings*/
    .tree li:only-child::after, .tree li:only-child::before {
        display: none;
    }

    /*Remove space from the top of single children*/
    .tree li:only-child {
        padding-top: 0;
    }

    /*Remove left connector from first child and 
    right connector from last child*/
    .tree li:first-child::before, .tree li:last-child::after {
        border: 0 none;
    }
    /*Adding back the vertical connector to the last nodes*/
    .tree li:last-child::before {
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }

    .tree li:first-child::after {
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }

    /*Time to add downward connectors from parents*/
    .tree ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 1px solid #ccc;
        width: 0;
        height: 20px;
    }

    .tree li .parent {
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        margin-top: 10px;
    }
    .tree li .parent::before {
        content: '';
        position: absolute;
        top: 40px;
        left: 50%;
        border-left: 1px solid #ccc;
        border-right: 1px solid #ccc;
        width: 3px;
        height: 10px;
    }
    .tree li .family {
        position: relative;
    }
    .tree li .family .spouse {
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: 95px;
    }
    .tree li .family .spouse::before {
        content: '';
        position: absolute;
        top: 50%;
        left: -10px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        width: 10px;
        height: 3px;
    }

    /*Time for some hover effects*/
    /*We will apply the hover effect the the lineage of the element also*/
    .tree li .child:hover,
    .tree li .child:hover+.parent .person,
    .tree li .parent .person:hover,
    .tree li .child:hover+.parent .person+ul li .child,
    .tree li .parent .person:hover+ul li .child,
    .tree li .child:hover+.parent .person+ul li .parent .person,
    .tree li .parent .person:hover+ul li .parent .person {
        background: #c8e4f8;
        color: #000;
        border: 1px solid #94a0b4;
    }
    /*Connector styles on hover*/
    .tree li .child:hover+.parent::before,
    .tree li .child:hover+.parent .person+ul li::after,
    .tree li .parent .person:hover+ul li::after,
    .tree li .child:hover+.parent .person+ul li::before,
    .tree li .parent .person:hover+ul li::before,
    .tree li .child:hover+.parent .person+ul::before,
    .tree li .parent .person:hover+ul::before,
    .tree li .child:hover+.parent .person+ul ul::before,
    .tree li .parent .person:hover+ul ul::before {
        border-color: #94a0b4;
    }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= "View ".$MainTitle ?>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                
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
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <table class="table">
                                            
                                            <tr>
                                                <th>Write Your Name</th>
                                                <td><?php echo $view['fname']." ".$view['lname'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Write Your Email</th>
                                                <td><?php echo $view['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Contact</th>
                                                <td><?php echo $view['contact'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>How Can We Help You?</th>
                                                <td><?php echo nl2br($view['descr']); ?></td>
                                            </tr>

                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input onclick="window.history.go(-1); return false;"  type="reset" class="btn btn-default" value="Back" />
                        </div>
                    </form>
                </div>
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
            },
            messages:{
                title :{ required : "This field is required" },
            }
        });
    });
</script>