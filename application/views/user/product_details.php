<!--start-single-->
<div class="single contact">
	<div class="container">
		<div class="single-main">
			<div class="col-md-9 single-main-left">
			<div class="sngl-top">
				<div class="col-md-5 single-top-left">	
					<div class="flexslider">
						  <ul class="slides">
							<li data-thumb="<?= base_url().IMG_PRODUCT.$hwt_product['img_src']; ?>">
								<div class="thumb-image"> <img src="<?= base_url().IMG_PRODUCT.$hwt_product['img_src']; ?>" data-imagezoom="true" class="img-responsive" alt=""/> </div>
							</li>
						  </ul>
					</div>
					<!-- FlexSlider -->
					<script src="<?= FRONT_JS ?>imagezoom.js"></script>
					<script defer src="<?= FRONT_JS ?>jquery.flexslider.js"></script>
					<link rel="stylesheet" href="<?= FRONT_CSS; ?>flexslider.css" type="text/css" media="screen" />

					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				</div>	
				<div class="col-md-7 single-top-right">
					<div class="single-para simpleCart_shelfItem">
					<h2><?= $hwt_product['title'] ?></h2>
						<!--  <div class="star-on">
							<ul class="star-footer">
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i> </i></a></li>
								</ul>
						<div class="clearfix"> </div> 
						</div> -->
						
						<h5 class="item_price">Size : <?= $hwt_product['size'] ?></h5>
						<!-- <h5 class="item_price">Code : <?= $hwt_product['code'] ?></h5> -->
						<?= nl2br($hwt_product['descr']); ?>
						
						<ul class="tag-men">
							<li><span>Size</span>
							<span class="women1">: <?= $hwt_product['size'] ?></span></li>
							<!-- <li><span>Code</span>
							<span class="women1">: #<?= $hwt_product['code'] ?></span></li> -->
						</ul>
							<!-- <a href="#" class="add-cart item_add">BUY NOW</a> -->
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
			<br/><br/><br/>
			<h2>&nbsp;&nbsp;&nbsp;Other Watches</h2>
			<div class="latestproducts">
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
					      <div class="col-md-3 product-left p-left " style="margin-bottom: 10px;">
					        <div class="product-main simpleCart_shelfItem">
					          <a target="_blanck" href="<?= $p_d_url; ?>" class="mask"><img class="img-responsive zoom-img" src="<?= $img_f ?>" alt="" /></a>
					          <div class="product-bottom">
					            <h3><?= $title ?></h3>
					            <h5>Size : <?= $size ?></h5>
					            
					          </div>
					          <div class="srch"><span># <?=$code?></span>
					          </div>
					        </div>
					      </div>
					      
					    <?php

					  }
					}
					?>

					<!-- <div class="col-md-4 product-left p-left"> 
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= FRONT_IMG; ?>/p-1.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-left p-left"> 
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= FRONT_IMG; ?>/p-2.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 product-left p-left"> 
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="<?= FRONT_IMG; ?>/p-3.png" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div> -->
					<div class="clearfix"></div>
				</div>
			</div>

			
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--end-single -->