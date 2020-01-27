<?php
  $ii = 0;
  $j = 0;
  $total_team = count($hwt_industry);
  $per_page = 6;
  
  foreach ($hwt_industry as $t_key => $t_value) {
     if($t_value['img_src']!='' && file_exists(IMG_INDUSTRY.$t_value['img_src'])) {
        $ind_img = base_url().IMG_INDUSTRY.$t_value['img_src'];
     } else {
        $ind_img = DEFAULT_IMG;
     }
     if(($ii%$per_page)==0) { ?>
     <div class="row hwt_ajax_industry2">
     <?php } ?>
        <div class="col-lg-2 col-md-6 col-sm-6">
           <a href="<?= base_url("job_list/?ind=".base64_encode($t_value['id'])); ?>" class="single-category-holder account_cat">
              <div class="category-holder-icon">
                 <i class="fa fa-briefcase"></i>
              </div>
              <div class="category-holder-text">
                 <h3><?= $t_value['title']."++++".$t_value['id']; ?></h3>
              </div>
              <img src="<?= $ind_img ?>" alt="<?= $t_value['title']; ?>" />
           </a>
        </div>
     <?php
     if($j==$per_page-1 || $ii==$total_team-1) {
        ?>
        </div>
        <?php
        $j=0;
     } else {

     $j++;
     }
     ?>
     <?php
     $ii++;
     } 
     ?>

     <?php if($count>12) { ?>    
      <a href="javascript:;" class="load_more_industry2" data-pg="36" style="margin: 0 auto;">Load More2...</a>
     <?php } ?>

 <script type="text/javascript">
   /*$(document).ready(function(){
      get_data(0);
   });*/
   $(".load_more_industry2").on("click",function(){
    var data_pg = $(this).attr("data-pg");
      get_data_industry2(data_pg);
      console.log(data_pg);
   });
   
   function get_data_industry2(pagno) {
      $.ajax({
        url: "<?php echo base_url()."Home/get_industry/" ?>" +pagno,
        method: "POST",
        dataType: "html",
        data :{},
        success: function(data) {
            // $(".hwt_ajax_industry").html("");
            // $(".hwt_ajax_industry").append(data);
            $(data).insertAfter(".hwt_ajax_industry2");
        },
        error: function(data) {
            console.log(data);
        }
    });
   }
</script>