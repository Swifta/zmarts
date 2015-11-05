<?php $this->load_map = FALSE;?>


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
  <?php if(!isset($this->url_cat)){ ?>
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
            <!--<div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>-->
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
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
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No Product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
  
    </div>
  </section>
  <?php }?> <!-- ending if of url_cat variable -->
  
  
  <!-- Latest Product-->
  <?php if(!isset($this->url_cat)){ ?>
  <section id="featured" class="row mt40">
    <div class="container">
    
     <?php 
		  $this->get_product_categories =  $this->get_recent_product_categories;
		  $k_p = count( $this->get_product_categories);
	 ?>
     
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No Featured Products</span><span class="subtext"> Please check the products section <a href="<?php echo PATH.$this->storeurl; ?>products.html"> here</a> or check back later.</span></h1>
	 <?php } else{?>
     <h1 class="heading1"><span class="maintext">Newest Products</span><span class="subtext"> See some of our newest products.For more, check this <a href="<?php echo PATH.$this->storeurl; ?>/products.html">link </a></span></h1>
	 <?php } ?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_p > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test">New</span>
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
        <!--<div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon  <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>-->
            
            
            
            
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
            
       	    <div class="pricetag">
              <span class="spiral"></span><a  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
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
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No Product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
 
    </div>
  </section>
  <?php }?> <!-- ending if of url_cat variable -->
  
 <!-- ALL Product-->
  <section id="featured" class="row mt40">
    <div class="container">
    
     <?php 
		  $this->get_product_categories =  $this->all_products;
		  $k_p = count( $this->get_product_categories);
	 ?>
     
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No More Products</span></h1>
	 <?php } else{?>
     <h1 class="heading1"><span class="maintext">Product(s)<?php if(isset($this->url_cat)){?> <span class="subtext"> in the category - </span><span class="maintext"><?php echo $this->url_cat;?></span> <?php }else{?> <span class="subtext"> in - </span><span class="maintext">All Categories</span><?php }?></span></h1>
	 <?php } ?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_p > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { ?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        
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
            
            <!--<div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>-->
            
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
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
			     <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No Product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
    
    </div>
  </section>
 
  <i id="more_products_0">
  </i>
  
  <section >
  <div class="more_button btn_form" id="id_btn_load_more" style="margin: 0 auto;">
  		 <a href="#" class="view_more1" id="id_more_text" title="load more items" ><i class="icon-ellipsis-horizontal icon-2x"></i></a>
  </div>
  
  </section>
  
  <!-- Section  Banner Start-->
  
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt40" style=" display:none;">
    
    <h1 class="heading1"><span class="maintext">Popular Offers</span></h1>
    <div class="brandcarousalrelative">
       <ul id="brandcarousal" >
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
</div>

<script type="text/javascript">
$(document).ready(function(e) {
	$('#id_btn_load_more').css({'text-align':'center'});
	$('a.active').removeClass('active');
	$('.sasa-products').addClass('active');
	
    $('.thumb-icon').css('padding-left', 0);
	 $('.thumb-icon').focus(function(e) {
		 
		  $('.thumb-icon').css('text-decoration', 'none');
        
    });
	
	
	
	 $('.thumb-icon').hover(function (e){
		  $('.thumb-icon').css('text-decoration', 'none');
		 }, function (e){
			  $('.thumb-icon').css('text-decoration', 'none');
	});
	
	 $('.thumb-icon').css('padding-left', 0);
	 $('.thumb-icon').focus(function(e) {
		 
		  $('.thumb-icon').css('text-decoration', 'none');
        
    });
	
	
	
	 $('.view_more1').hover(function (e){
		  $('.view_more1').css('text-decoration', 'none');
		 }, function (e){
			  $('.view_more1').css('text-decoration', 'none');
	});
	
	
	
});
</script>


<!-- Pagination JS start 
	 @Live
 -->
 
 <script type="text/javascript">
    $(document).ready(function() {
		
		
       /* $('#size_filter').hide();
        $('#color_filter').hide();
        $('#discount_filter').hide();
        $('#price_filter').hide();
        $('#pricetext_filter').hide();*/
		
        $('a.view_more1').live("click", function(e) {
           
			
			/*var size = "";*/
		/*	$(".size input:checked").each(function() {
				size += this.value+',';
			});
			var color = "";
			$(".color input:checked").each(function() {
				color += this.value+',';
			});
			var discount = "";
			$(".discount input:checked").each(function() {
				discount += this.value+',';
			});
			var price = "";
			$(".price input:checked").each(function() {
				price += this.value+',';
			});
			var price_text = $("#amount1").val();
			if(price_text==undefined){
			        var price_text = "";
			}*/
			
			var size = "";
			var color = "";
			var discount = "";
			var price = "";
			var price_text = "";
			
			<?php
				   $sub = "";
				   $sub_cat = "";
				   $sec = "";
				   $sec_cat = "";
				   $third_cat = "";
				   
				   
				   ?>
			
			
            offset = document.getElementById('offset').value;
            var record = document.getElementById('record').value;
            var record1 = document.getElementById('record1').value;
			var load_count = document.getElementById('load_count').value;
			var new_content_id_no = parseInt(load_count) - 1;
			var store_url =  document.getElementById('store_url').value;
			var main_cat = document.getElementById('main_cat').value;
			
            var url = '<?php echo PATH; ?>' + 'sasa/all_products_1?offset=' + offset + '&record=' + record+'&size='+size+'&color='+color+'&discount='+discount+'&price='+price+'&main='+main_cat+'&sub='+'<?php echo $sub_cat; ?>'+'&sec='+'<?php echo $sec_cat; ?>'+'&third='+'<?php echo $third_cat; ?>'+'&price1='+price_text+'&load_count='+load_count+'&store_url_title='+store_url;
			$('#id_more_text').html("...loading...");
            $.post(url, function(check) {
                if (check) {
					
					$('#id_more_text').html('<i class="icon-ellipsis-horizontal icon-2x"></i>');
                    $('#more_products_'+new_content_id_no).replaceWith(check);
                    $('#id_btn_load_more').show();
                   // $('.wloader_img').hide();
                    offset = parseInt(offset) + 6;
                    $("#offset").val(offset);
					load_count = parseInt(load_count) + 1;
					$('#load_count').val(load_count);
                    if (offset >= record1) {
                       $('#id_btn_load_more').hide();
                    }} });  }); });
</script>
<!-- Pagination JS end -->






<!-- Pagination hidden fields 
	@Live
-->
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="record" id="record" value="8">
<input type="hidden" name="record" id="record1" value="<?php echo $this->all_products_count; ?>"> 
<input type="hidden" name="load_count" id="load_count" value="1">
<input type="hidden" name="store_url" id="store_url" value="<?php echo $this->storeurl?>">
<input type="hidden" name="main_cat" id="main_cat" value="<?php echo $this->url_cat?>">

<script type="text/javascript">
	$('#id_btn_load_more').hide();
	var t_products = $('#record1').val();
	t_products = parseInt(t_products);
	if(t_products > 8){
		$('#id_btn_load_more').show();
	}	
</script>

