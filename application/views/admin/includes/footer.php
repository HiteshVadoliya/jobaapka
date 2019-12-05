

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b><?=$site_name;?></b> Admin System | Version 1.0
        </div>
        <strong>Copyright &copy; <?= date('Y') ?> <a href="<?php echo base_url(); ?>"><?=$site_name;?></a>.</strong> All rights reserved.
    </footer>
    
    <!-- jQuery UI 1.11.2 -->
    <!-- <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo ADMIN_CSS_JS; ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo ADMIN_CSS_JS; ?>/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo ADMIN_CSS_JS; ?>/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo ADMIN_CSS_JS; ?>/js/validation.js" type="text/javascript"></script>
    

    <script type="text/javascript">
        var windowURL = window.location.href;
        pageURL = windowURL.substring(0, windowURL.lastIndexOf('/'));
        var x= $('a[href="'+pageURL+'"]');
            x.addClass('active');
            x.parent().addClass('active');
        var y= $('a[href="'+windowURL+'"]');
            y.addClass('active');
            y.parent().addClass('active');
    </script>



    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(5000, 0).slideUp(5000, function(){
                $(this).remove(); 
            });
        }, 4000);

        $(document).ready(function() {

            var url = window.location;
            // Will only work if string in href matches with location
            $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
            // Will also work for relative and absolute hrefs
            $('.treeview-menu li a').filter(function() {
                return this.href == url;
            }).parent().parent().parent().addClass('active');


            $('.treeview-menu li a[href="' + url + '"]').parent().parent().addClass('active');
            // Will also work for relative and absolute hrefs
            $('.treeview-menu li a').filter(function() {
                return this.href == url;
            }).parent().parent().parent().parent().parent().addClass('active');


        });

            
    </script>
  </body>
</html>