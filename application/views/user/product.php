<div class="prdt"> 
	<div class="container">
		<div class="prdt-top">
			<div class="col-md-12 prdt-left">
				<h2>&nbsp;&nbsp;&nbsp; 
					<?php
					if($cat_name!="") {
						echo $cat_name;
					} else {
						echo "Watch List";
					}
					?>
				</h2><br/>
				<div class="product-one">

					<?php
					if(!empty($hwt_featured)) {

					  foreach ($hwt_featured as $f_key => $f_value) {
					    if(file_exists(IMG_PRODUCT.'Thumb/'.$f_value['img_src'])) {
					      $img_f = base_url().IMG_PRODUCT.'Thumb/'.$f_value['img_src'];
					    }
					    $title = $f_value['title'];
					    $size = $f_value['size'];
					    $id = $f_value['id'];
					    $code = $f_value['code'];

					    $p_d_url = base_url('watch_details/'.$id);
					    ?>
					      <div class="col-md-3 product-left nth_clear_4 " style="margin-bottom: 10px;">
					        <div class="product-main simpleCart_shelfItem">
					          <a target="_blanck" href="<?= $p_d_url; ?>" class="mask"><img class="img-responsive zoom-img" src="<?= $img_f ?>" alt="" /></a>
					          <div class="product-bottom">
					            <h3><?= $title ?></h3>
					            <h5>Size : <?= $size ?></h5>
					            
					          </div>
					          <!-- <div class="srch"><span># <?=$code?></span> -->
					          </div>
					        </div>
					    <?php

					  }
					} else {
						?>
						<center><h2>No Watch Found</h2></center>
						<?php
					}

					?>

					<div class="clearfix"></div>
				</div>
				
			</div>	
			<div class="col-md-3 prdt-right" style="display: none;">
				<div class="w_sidebar">
					<section  class="sky-form">
						<h4>Catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>All Accessories</label>
							</div>
							<div class="col col-4">								
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Women Watches</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kids Watches</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Men Watches</label>			
							</div>
						</div>
					</section>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>