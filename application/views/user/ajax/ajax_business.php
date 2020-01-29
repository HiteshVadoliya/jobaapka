<!-- end job head -->
<div class="candidate-list-page ">
  <?php

  if(isset($jobs) && !empty($jobs)) {
     foreach ($jobs as $j_key => $j_value) {
        ?>
        <div class="single-candidate-list">
           <div class="main-comment business_service">
              <div class="candidate-image">
                 <img src="<?= base_url().IMG_BUSINESS.'/thumb/'.$j_value['img_src'] ?>" alt="author">
              </div>
              <div class="candidate-text">
                 <div class="candidate-info">
                    <div class="candidate-title">
                       <h3><a href="<?= base_url('business_details/'.$j_value['id']); ?>"><?= $j_value['title']; ?></a></h3>
                    </div>
                 </div>
                 <div class="candidate-text-inner">
                   <?php echo $this->HWT->char_limit($j_value['descr'],28);  ?>
                 </div>
                 <div class="candidate-text-bottom">
                    <div class="candidate-text-box">
                       <p class="open-icon"><i class="fa fa-calendar"></i> <?= date("M, Y",strtotime($j_value['date'])); ?></p>
                    </div>
                    <div class="candidate-action">
                       <a href="<?= base_url('business_details/'.$j_value['id']); ?>" class="jobguru-btn-2">view Details</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        
        <?php
     }
  } else {
    ?>
    <h2><center>No Article Found</center></h2>
    <?php
  }
  ?>                 
</div>

<div class="container">
<div class="pull-right" id='pagination'><?php echo $page_link ?></div>
</div>
<script type="text/javascript">
   $('#pagination').on('click','li a',function(e){
    e.preventDefault(); 
    var pageno = $(this).attr('data-ci-pagination-page');
    get_data(pageno);
  });
</script>