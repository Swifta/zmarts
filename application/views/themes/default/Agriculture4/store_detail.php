<?php $this->load_map = true;?>

<script type="text/javascript">
$(document).ready(function(e) {
	
    $('.kkcountdown').kkcountdown({
		
        addClass: 'swifta little-space',
		daysText:'D',
		hoursText: 'H',
		minutesText: 'm',
		secondsText: 's'});
		
});
</script>

<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
   
      <div class="flexslider" id="mainslider" style="padding: 2px; background:#cccccc;">
        <ul class="slides" >
        
        <!-- <?php  if (count($this->banner_details) > 0) {?>
         	<?php if(count($this->banner_details) != 1) {   ?>   
            	<?php foreach ($this->banner_details as $banner) { ?>
                 <li>
               <?php  $banner->redirect_url = trim($banner->redirect_url);
											if( $banner->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
												  <a  href="<?php echo PATH."leo_zenith.html";	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_self">
											<?php }else{ ?>
                                                                                           
                                  <a  href="<?php echo $banner->redirect_url;	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_blank"><?php } ?>
                                   
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/banner_images/' . $banner->banner_id .  '.png' ?>&w=1168&h=523" alt="<?php echo $banner->image_title; ?>" title="<?php echo $banner->image_title; ?>" />
            
          
                                   </a></li>
                                          
                                 <?php } ?>        
                        <?php } }  ?>-->
        
       
       	 <?php $has_personalized = false;
		 		$has_banners = false;
		 ?>
         <?php  if (count($this->merchant_personalised_details) > 0) {?>
         <?php $has_personalized = TRUE;
		 ?>
		 <?php foreach ($this->merchant_personalised_details as $m) { ?>
                <?php for($i = 0; $i< 4; $i++){?>
                
                <?php 
					$banner_link = "#";
					
					if (file_exists(DOCROOT . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png')) {?>
						
					<?php $has_banners = TRUE;
						if($i == 0)
							$banner_link = $m->banner_1_link;
						else if($i == 1)
							$banner_link = $m->banner_2_link;
						else
							$banner_link = $m->banner_3_link;
						?>
						<li> 
                       <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>&w=1168&h=523" alt="store banner" title="store banner" /> </a>
                         </li>
						<?php
					}
				?>
                                  <?php } ?>
                                          
                                 <?php } ?>        
 		 <?php }?> 
         <?php if(!$has_personalized || !$has_banners ){?>
			 <li> 
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'bootstrap/themes/images/agriculture4/banners/0_gaming_1_banner.jpg'; ?>" alt="store banner" title="store banner" /> </a>
             </li>
             <li> 
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'bootstrap/themes/images/agriculture4/banners/0_gaming_2_banner.jpg'; ?>" alt="store banner" title="store banner" /> </a>
             </li>
		 <?php }?> 
        
        </ul>
      </div> 
   
    </div>
  </section>
  <!-- Slider End-->
  
  <!-- Section Start-->
  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>Free shipping</h2>
        All over Nigeria </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>Installment Payments</h2>
        Convinient options (Pay Later/Cash on Delivery) </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>Support</h2>
       24hr customer care service </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>Variety</h2>
        Products, Deals, Auctions </div>
    </div>
  </section>
  <!-- Section End-->
  
  <!-- Featured Product-->
  <section id="featured" class="row mt40">
    <div class="container">
    
     <?php 
		  $this->get_product_categories =  $this->best_seller;
		  $k_p = count( $this->get_product_categories);
	 ?>
     
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No Featured Products</span><span class="subtext"> Please check the products section <a href="<?php echo PATH.$this->storeurl; ?>products.html"> here</a> or check back later.</span></h1>
	 <?php } else{?>
     <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See some of our most featured products.For more, check this <a href="<?php echo PATH.$this->storeurl; ?>/products.html">link </a></span></h1>
	 <?php } ?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_p > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="sale tooltip-test">Sale</span>
        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>">
       
       <?php if (file_exists(DOCROOT . 'images/products/1000_800/'.$products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
        
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        <!--<div class="shortlinks">
              <a class="details" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>-->
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew"><?php echo $symbol . " " . number_format($products->deal_value); ?></div>
                <?php if($products->deal_value < $products->deal_price){?>
                <div class="priceold"><?php echo $symbol . " " . number_format($products->deal_price); ?></div>
                <?php } ?>
              </div>
            </div>
       </div>
      </li>
      
      <?php $k++;} ?>
          <!-- Ending 1st foreach -->
           <?php }else {?>
			     <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Product yet.">No Product</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no product found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_prod.png&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
  
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <!--<h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        <li class="col-lg-3 col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="new tooltip-test" >New</span>
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>-->
       <?php 
		  $this->get_product_categories =  $this->get_recent_product_categories;
		  $k_p = count($this->get_product_categories);
	 ?>
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No new Products.</span><span class="subtext"> Checkout our products section <a href="<?php echo PATH.$this->storeurl; ?>/products.html">here</a> or check back later.</span></h1>
	 <?php }else{?>
     <h1 class="heading1"><span class="maintext">Newest Products</span><span class="subtext"> Checkout our newest products. For more, check this <a href="<?php echo PATH.$this->storeurl; ?>/products.html">link</a></span></h1>
	 <?php }?>
     
     <ul class="thumbnails swifta">
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <!--<a class="prdocutname" href="product.html" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>-->
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">
       
       <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
   
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        <!--<div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon" style="background-image: none;padding-left: -1px;" href="#"><i class="icon-heart"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail');"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>-->
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew"><?php echo $symbol . " " . number_format($products->deal_value); ?></div>
                <?php if($products->deal_value < $products->deal_price){?>
                <div class="priceold"><?php echo $symbol . " " . number_format($products->deal_price); ?></div>
                <?php } ?>
              </div>
            </div>
       </div>
      </li>
      
      <?php $k++;} ?>
          <!-- Ending 1st foreach -->
           <?php }else {?>
			     <!-- Ending 1st if, beginning else -->
                 <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Product yet.">No Product</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no product found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_prod.png&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    </div>
  </section>
  
  <!-- HOTTEST DEALS -->
  <section id="latest" class="row">
    <div class="container">
      <!--<h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        <li class="col-lg-3 col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="new tooltip-test" >New</span>
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>-->
       <?php 
		  $this->get_product_categories =  $this->get_top_sellingdeals_categories;
		  $k_d = count($this->get_product_categories );
	 ?>
     <?php if($k_d == 0){?>
     <h1 class="heading1"><span class="maintext">NO DEALS</span><span class="subtext">No deals in this category yet. Check the deals section <a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html">here</a> or check back later.</span></h1>
	 <?php } else {?>
		<h1 class="heading1"><span class="maintext">HOTTEST DEALS</span><span class="subtext"> Some of our hottest deals, and more on this <a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html">link</a>.</span></h1> 
	 <?php }?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_d > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a title="<?php echo $products->deal_title;?>" class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a title="<?php echo $products->deal_title;?>" href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">
       
       <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
   
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        <div class="shortlinks little-space">
          <!--    <a class="details" href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#"></a>
              <a class="compare" href="#">COMPARE</a>-->
            <div style="display:inline;" class="timer-container little-space deal"><span class="kkcountdown" data-time="<?php echo $products->enddate?>"> </span></div>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart deal" style="background-image:none;">BUY NOW</a>
              <div class="price">
                <div class="pricenew"><?php echo $symbol . " " . number_format($products->deal_value); ?></div>
                <?php if($products->deal_value < $products->deal_price){?>
                <div class="priceold"><?php echo $symbol . " " . number_format($products->deal_price); ?></div>
                <?php } ?>
              </div>
            </div>
       </div>
      </li>
      
      <?php $k++;} ?>
          <!-- Ending 1st foreach -->
           <?php }else {?>
			     <!-- Ending 1st if, beginning else -->
                 <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Deal yet.">No Deal</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  
                  <img title="No deal found." src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_deal.jpg&w=287&h=246" alt="NO deal found"/>
                 
                  </a></div><br /><br/></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Deals yet."><b>No Deal</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    </div>
  </section>
  
  <!-- HOTTEST AUCTIONS -->
  <section id="latest" class="row">
    <div class="container">
      <!--<h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        <li class="col-lg-3 col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="new tooltip-test" >New</span>
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2a.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>-->
       <?php 
		  $this->get_product_categories =  $this->get_recent_auction_categories;
		  $k_c = count( $this->get_product_categories);
	 ?>
     <?php if($k_c == 0){?>
     <h1 class="heading1"><span class="maintext">AUCTIONS</span><span class="subtext"> No Auctions in this category yet. Please check in the auctions section <a href="<?php echo PATH.$this->storeurl; ?>/auction.html">here</a> or check back later.</span></h1>
     <?php } else {?>
     <h1 class="heading1"><span class="maintext">AUCTIONS</span><span class="subtext"> Checkout out our other amazing auctions on this <a href="<?php echo PATH.$this->storeurl; ?>/auction.html">link</a></span></h1>
	 <?php }?>
     <ul class="thumbnails swifta">
      <?php if ($k_c > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" title="<?php echo $products->deal_title; ?>" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" ><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a title="<?php echo $products->deal_title; ?>" href = "<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">
       
       <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
   
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        
         <div class="shortlinks little-space">
          <!--    <a class="details" href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#"></a>
              <a class="compare" href="#">COMPARE</a>-->
            <div style="display:inline;" class="timer-container little-space deal"><span class="kkcountdown" data-time="<?php echo $products->enddate?>"> </span></div>
            </div>  
         <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart deal" style="background-image:none;">BID NOW</a>
              <div class="price">
                <div class="pricenew"><?php echo $symbol . " " . number_format($products->deal_value); ?></div>
                <?php if($products->deal_value < $products->deal_price){?>
                <div class="priceold"><?php echo $symbol . " " . number_format($products->deal_price); ?></div>
                <?php } ?>
              </div>
            </div>
            
       </div>
      </li>
      
      <?php $k++;} ?>
          <!-- Ending 1st foreach -->
           <?php }else {?>
			     <!-- Ending 1st if, beginning else -->
                  <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Auctions yet.">No Auction</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no auction found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_auc.png&w=287&h=246" alt=""/>
                  </a></div></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Auctions yet."><b>No Auction</b></a>
                  <br /><br /></li>
                 
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    </div>
  </section>
  
  <!-- Section  Banner Start-->
  <section class="container smbanner">
  <br />
  <br />
  
  <?php $k = count($this->get_sub_store_details);?>
    <h1 class="heading1"><span class="maintext">branch(es)</span><span class="subtext"> <?php if( $k == 0 ){?> No store branch(es) yet.<?php }else{?>  Our other branch(es). Feel free to drop by sometime.<?php } ?></span></h1>
  
    <div class="row" style="padding-left:30px;">
    <!--<?php if (count($this->ads_details) > 0) { ?>   
                                    <?php foreach ($this->ads_details as $ads) { ?>    
            
            					    
                                  <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
									  
                                       <li><a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                               
                                      <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></li>
									  
								 <?php  }else{?>
								 
                                 <li> <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></li>
								  
								  <?php }?>      
        <?php } ?>
    <?php } else {?>
			<li><div style="width: 100%;text-align:center; vertical-align:middle"><a href="#"><b>NO ADS</b></a></div></li>
	<?php }?>-->
    
    
    
       
       <?php if ($k > 0) { ?> 
		
	
     <?php foreach ($this->get_sub_store_details as $stores) { ?>
    									

                                           
                                                        <?php if (file_exists(DOCROOT . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png')) { ?>
                                                            <a href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>">
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png' ?>&w=150&h=130" alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" /></a>
            <?php } else { ?>
                                                            <a href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="<?php echo $stores->store_name; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_stores_list.png&w=150&h=130"   alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" ></a>
        <?php } ?>                                                   
                                                   		<div class="branch_details">
                                                        Name: <a style="font:bold 11px arial;" href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>"><?php echo common::truncate_item_name($stores->store_name, 12); ?></a>
                                                        <p style="font:11px/15px arial;color:#666;"><?php common::truncate_about_us($stores->about_us,80); ?></p>                                         
                                                        <div class="branch_details_but">
                                                          <a href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="visit branch">Visit</a>                                                                                                                                                      
                                                        </div>
                                                        
                                                    </div>                                                                                                                        
                                               
                                            
                                <?php  } ?>
                             <?php } else { ?>
								 <a href="#" title="No other branches yet">
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH;?>themes/default/images/sasa/no_branch.png&w=150&h=130" alt="No other branch." title="No other branch" /> 
                                                                <div class="branch_details" style="text-align:left; margin-left:30px">
                                                        <p><b>No branch yet</b></p>  
                                </div>
                                                                </a>
                                 
								  
								 
							<?php }?> 
                                
      
      
      
     
    
    
    </div>
  </section>
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt40" style=" display:none;">
   
    
    <h1 class="heading1"><span class="maintext">Popular offers</span></h1>
    <div class="brandcarousalrelative">
       <ul id="brandcarousal" >
       
        <?php $has_personalized = false;
		 		$has_ads = false;
		 ?>
         
         <?php  if (count($this->merchant_personalised_details) > 0) {?>
         <?php $has_personalized = TRUE;
		 ?>
		 <?php foreach ($this->merchant_personalised_details as $m) { ?>
                <?php for($i = 1; $i< 4; $i++){?>
                
                <?php 
					$ads_link = "#";
					
					if (file_exists(DOCROOT . 'images/merchant/ads/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png')) {?>
						
					<?php $has_ads = TRUE;
						if($i == 0)
							$ads_link = $m->ads_1_link;
						else if($i == 1)
							$ads_link = $m->ads_2_link;
						else
							$ads_link = $m->ads_3_link;
						?>
						<li> 
                       <a  href="<?php echo $ads_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/ads/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>&w=287&h=246" alt="store banner" title="store banner" /> </a>
                         </li>
						<?php
					}
				?>
                                  <?php } ?>
                                          
                                 <?php } ?>        
 		 <?php }?> 
         
         <?php if(!$has_personalized || !$has_ads ){?>
			
      
     <?php if (count($this->ads_details) > 0) { ?>   
                                    <?php foreach ($this->ads_details as $ads) { ?>    
            
            					    
                                  <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
									  
                                       <li><a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                               
                                      <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></li>
									  
								 <?php  }else{?>
								 
                                 <li> <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></li>
								  
								  <?php }?>      
        <?php } ?>
    <?php } else {?>
			<li><div style="width: 100%;text-align:center; vertical-align:middle"><a href="#"><b>NO ADS</b></a></div></li>
	<?php }?>
      <?php } ?>
      
      </ul>
      <div class="clearfix"></div>
     
      <a id="prev" class="prev" href="#">&lt;</a>
      <a id="next" class="next" href="#">&gt;</a>
      
    </div>
    
    
    
    
    
    
  </section>
  
  <!-- Newsletter Signup-->
  <section id="newslettersignup" class="mt40">
    <div class="container">
      <div class="pull-left newsletter">
        <h2> Newsletters Signup</h2>
        Sign up to Our Newsletter & get attractive Offers by subscribing to our newsletters. </div>
      <div class="pull-right subscribe_lft_txt_field">
        <form class="form-horizontal" onsubmit="return false;">
          <div class="input-prepend">
            <input type="text" placeholder="Subscribe to Newsletter" name="subscribe" id="subscribe" class="input-xlarge textbox">
            <input onclick="return check_subscribe();" value="Subscribe" class="btn btn-orange icon-ok-sign" type="submit">
            <em style="color:#F00;" id="email_subscriber_error"></em> 
            </div>
        </form>
        
      </div>
      
    </div>
  </section>


<script type="text/javascript">
$(document).ready(function(e) {
    $('.thumb-icon').css('padding-left', 0);
	 $('.thumb-icon').focus(function(e) {
		 
		  $('.thumb-icon').css('text-decoration', 'none');
        
    });
	
	
	
	 $('.thumb-icon').hover(function (e){
		  $('.thumb-icon').css('text-decoration', 'none');
		 }, function (e){
			  $('.thumb-icon').css('text-decoration', 'none');
	});
	
});
</script>



