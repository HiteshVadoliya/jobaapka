<!DOCTYPE html>
<html lang="en-US">
<head>
      <title><?php echo $pageTitle; ?></title>      
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="jobguru | Job Board HTML Templates from Themescare">
      <meta name="keyword" content="Job, freelancer, employee, marketplace">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <!-- Favicon -->
      <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png"> -->
      <!--Bootstrap css-->
      <!-- <link rel="stylesheet" href="<?= FRONT_CSS; ?>bootstrap.css"> -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>owl.carousel.min.css">
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>responsive.css">

      <script src="<?= FRONT_JS; ?>jquery-3.0.0.min.js"></script>
      <link rel="stylesheet" href="<?= FRONT_CSS; ?>custom.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> 

      <script src="<?= FRONT_JS; ?>bootstrap-notify.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

      <link rel="stylesheet" href="<?= FRONT ?>tagsinput/bootstrap-tagsinput.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/github.css">
   </head>


   <body>
        

    

    <!-- container -->
    <div class="main"> 
        
        <?php echo $header; ?>

        <?= $content_body; ?>
        
        <?php echo $footer; ?>

    </div> 

    
   <!--Jquery js-->
         
         <!--Popper js-->
         <script src="<?= FRONT_JS; ?>popper.min.js"></script>

         
         <!--Bootstrap js-->
         <!-- <script src="<?= FRONT_JS; ?>bootstrap.min.js"></script> -->
         <!--Bootstrap Datepicker js-->
         <script src="<?= FRONT_JS; ?>bootstrap-datepicker.min.js"></script>
         <!--Perfect Scrollbar js-->
         <script src="<?= FRONT_JS; ?>jquery-perfect-scrollbar.min.js"></script>
         <!--Owl-Carousel js-->
         <script src="<?= FRONT_JS; ?>owl.carousel.min.js"></script>
         <!--SlickNav js-->
         <script src="<?= FRONT_JS; ?>jquery.slicknav.min.js"></script>
         <!--Magnific js-->
         <script src="<?= FRONT_JS; ?>jquery.magnific-popup.min.js"></script>
         <!--Select2 js-->
         <script src="<?= FRONT_JS; ?>select2.min.js"></script>
         <!--jquery-ui js-->
         <script src="<?= FRONT_JS; ?>jquery-ui.min.js"></script>
         <!--Main js-->
         <script src="<?= FRONT_JS; ?>jarallax.min.js"></script>
         <script src="<?= FRONT_JS; ?>jarallax-video.min.js"></script>
         <script src="<?= FRONT_JS; ?>main.js"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
         <!--Start of Tawk.to Script-->
         <?php if($_SERVER["HTTP_HOST"]!='localhost') { ?>
         <script type="text/javascript">
         var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
         (function(){
         var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
         s1.async=true;
         s1.src='https://embed.tawk.to/5d43e3837d27204601c8e580/default';
         s1.charset='UTF-8';
         s1.setAttribute('crossorigin','*');
         s0.parentNode.insertBefore(s1,s0);
         })();
         </script>
         <?php } ?>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
         <script src="<?= FRONT ?>tagsinput/bootstrap-tagsinput.min.js"></script>

         <script type="text/javascript">
           $('#datepicker').datepicker({
              weekStart: 1,
              daysOfWeekHighlighted: "6,0",
              autoclose: true,
              todayHighlight: true,
          });
          $('#datepicker').datepicker("setDate", new Date());

          $(document).ready(function() {
            setTimeout(function() {
               $('.bootstrap-tagsinput input').keydown(function( event ) {
                   if ( event.which == 13 ) {
                       $(this).blur();
                       $(this).focus();
                       return false;
                   }
               });
            }, 2000);
          });
            
         </script>

<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5e27109146492a001309b6a4&product=sticky-share-buttons"></script>
        <!--  -->         
         <!--End of Tawk.to Script-->
      </body>
   </html>

