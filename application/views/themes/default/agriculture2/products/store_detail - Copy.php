<?php $this->load_map = TRUE;?>


<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider">
        <ul class="slides">
         <?php  if (count($this->banner_details) > 0) {?>
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
                        <?php } 
}  ?>
         
          <!--<li>
            <img src="<?php echo $this->img_assets_base_url;?>/banner1.jpg" alt="" />
          </li>-->
          <!--<li>
            <img src="<?php echo $this->img_assets_base_url;?>/banner2.jpg" alt="" />
          </li>-->
          <!--<li>
            <img src="<?php echo $this->img_assets_base_url;?>/banner1.jpg" alt="" />
          </li>-->
          <!--<li>
            <img src="<?php echo $this->img_assets_base_url;?>/banner2.jpg" alt="" />
          </li>-->
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
	 ?>
     <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
     <ul class="thumbnails swifta">
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 25); ?></a>
        <div class="thumbnail">
        <span class="sale tooltip-test">Sale</span>
        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>">
       
       <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
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
        <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
    
  
     <!-- <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
     	  <ul class="thumbnails">
        <li class="col-lg-3  col-sm-6">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1.jpg"></a>
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
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2.jpg"></a>
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
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product1.jpg"></a>
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
            <a href="#"><img alt="" src="<?php echo $this->img_assets_base_url;?>/product2.jpg"></a>
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
      </ul> -->
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
		  $this->get_product_categories =  $this->best_seller;
	 ?>
     <h1 class="heading1"><span class="maintext">Newest Products</span><span class="subtext"> Checkout our newest Products</span></h1>
     <ul class="thumbnails swifta">
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="product.html" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 25); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a href="#">
       
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
        <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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
		  $this->get_product_categories =  $this->best_seller;
	 ?>
     <h1 class="heading1"><span class="maintext">HOTTEST DEALS</span><span class="subtext"> Some of our hottest deals, and more here.</span></h1>
     <ul class="thumbnails swifta">
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="#"><?php echo common::truncate_item_name($products->deal_title, 25); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a href="#">
       
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
        <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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
		  $this->get_product_categories =  $this->best_seller;
	 ?>
     <h1 class="heading1"><span class="maintext">AUCTIONS</span><span class="subtext"> Checkout out our other amazing auctions here</span></h1>
     <ul class="thumbnails swifta">
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="product.html" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 25); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a href="#">
       
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
        <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    </div>
  </section>
  
  <!-- Section  Banner Start-->
  <section class="container smbanner">
    <div class="row">
    
    <?php if (count($this->ads_details) > 0) { ?>   
                                    <?php foreach ($this->ads_details as $ads) { ?>    
            <?php if ($ads->ads_position == "rs1" && $ads->page_position==3) {  ?>
            					    
                                  <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
									  
                                      <div class="col-lg-3 col-sm-6"> <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                      <!--<img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " />-->
                                      <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></div>
									  
								 <?php  }else{?>
								 
                                 <div class="col-lg-3 col-sm-6"> <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                 <!--<img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " />-->
                                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a></div>
								  
								  <?php }?>
                                     
										 
                                 
              <?php } ?>
              <?php if ($ads->ads_position == "rs2" && $ads->page_position==3){  ?>   
                         <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
                                  
									    <div class="col-lg-3 col-sm-6"><a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                       <!--<img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png" />-->
                                       <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" />
                                       
                                       
                                       </a> </div>
                                       
                                      <?php  }else{?>
                                      
                                        <div class="col-lg-3 col-sm-6"><a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                       <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" />
                                       
                                       </a> </div>
                                       
                                       <?php }?>
                                     
										
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
      <!--<div class="col-lg-3 col-sm-6"><a href="#"><img src="<?php echo $this->img_assets_base_url;?>/smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="col-lg-3 col-sm-6"><a href="#"><img src="<?php echo $this->img_assets_base_url;?>/smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="col-lg-3 col-sm-6"><a href="#"><img src="<?php echo $this->img_assets_base_url;?>/smbanner.jpg" alt="" title=""></a>
      </div>
      <div class="col-lg-3 col-sm-6"><a href="#"><img src="<?php echo $this->img_assets_base_url;?>/smbanner.jpg" alt="" title=""></a>
      </div>-->
    </div>
  </section>
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt40">
    <?php $k = count($this->get_sub_store_details);?>
    <h1 class="heading1"><span class="maintext">branch(es)</span><span class="subtext"> <?php if( $k == 0 ){?> No store branch(es) yet.<?php }else{?>  Our other branch(es). Feel free to drop by sometime.<?php } ?></span></h1>
    <div class="brandcarousalrelative">
      
      
     
       <ul id="brandcarousal" <?php if( $k <= 5 ){?> class="swifta override branch" <?php } ?> >
       <?php if ($k > 0) { ?> 
		
	
     <?php foreach ($this->get_sub_store_details as $stores) { ?>
    									 <li>

                                           
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
                                               
                                            </li>
                                <?php  } ?>
                             <?php } else { ?>
								 <li><a href="#" title="No other branches yet">
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH;?>themes/default/images/sasa/no_branch.png&w=150&h=130" alt="No other branch." title="No other branch" /> </a>
                                 <div class="branch_details">
                                                       
                                                        <p style="font:11px/15px arial;color:#666;">No branch yet</p>  
                                </div></li>
								  
								 
							<?php }?> 
                                
        <!--<li><img src="<?php echo $this->img_assets_base_url;?>/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand4.jpg" alt="" title=""/></li>-->
        <!--<li><img src="<?php echo $this->img_assets_base_url;?>/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand4.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand1.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand2.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand3.jpg" alt="" title=""/></li>
        <li><img src="<?php echo $this->img_assets_base_url;?>/brand4.jpg" alt="" title=""/></li>-->
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
      <div class="pull-right">
        <form class="form-horizontal">
          <div class="input-prepend">
            <input type="text" placeholder="Subscribe to Newsletter" id="inputIcon" class="input-xlarge">
            <input value="Subscribe" class="btn btn-orange" type="submit">
            Sign in </div>
        </form>
      </div>
    </div>
  </section>
</div>

