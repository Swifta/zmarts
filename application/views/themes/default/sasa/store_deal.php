<?php $this->load_map = FALSE;?>

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

<script type="text/javascript">
 	$(document).ready(function(e) {
		
        $('a.active').removeClass('active');
		$('.sasa-deals').addClass('active');
    });
 </script>

<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider">
    <div class="container">
      <div class="flexslider" id="mainslider" style="padding: 10px; background:#720808;">
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
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'bootstrap/themes/images/gaming/banners/0_gaming_1_banner.jpg'; ?>" alt="store banner" title="store banner" /> </a>
             </li>
             <li> 
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'bootstrap/themes/images/gaming/banners/0_gaming_2_banner.jpg'; ?>" alt="store banner" title="store banner" /> </a>
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
  
  <!-- Featured Deals-->
  <?php if(!isset($this->url_cat)){ ?>
  <section id="featured" class="row mt40">
    <div class="container">
    
     <?php 
	 
	
		  $this->get_product_categories =  $this->best_seller;
		  $k_p = count( $this->get_product_categories);
		?>
	 
	
     
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No FEATURED Deals</span></h1>
	 <?php } else{?>
     <h1 class="heading1"><span class="maintext">Featured DEALS</span><span class="subtext">Our most featured deals.</span></h1>
	 <?php } ?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_p > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/deal/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="offer tooltip-test">Offer</span>
        <a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>">
       
       <?php if (file_exists(DOCROOT . 'images/deals/1000_800/'.$products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
        
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
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
			     <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No deals yet.">No Deal</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no deal found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_deal.jpg&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Deal yet."><b>No Deal</b></a>
                  <br /><br /></li>
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
  <?php }?> <!-- ending if of url_cat variable -->
  
  <!-- ALL Deals -->
  <section id="featured" class="row mt40">
    <div class="container">
    
     <?php 
		  $this->get_product_categories =  $this->all_deals_list;
		  $k_p = count( $this->get_product_categories);
		  
		?>
	 
	
     
     <?php if($k_p == 0){?>
     <h1 class="heading1"><span class="maintext">No More Other Deals</span></h1>
	 <?php } else{?>
     <h1 class="heading1"><span class="maintext">Deal(s)<?php if(isset($this->url_cat)){?> <span class="subtext"> in the category - </span><span class="maintext"><?php echo $this->url_cat;?></span> <?php }else{?> <span class="subtext"> in - </span><span class="maintext">All Categories</span><?php }?></span></h1>
	 <?php } ?>
     
     <ul class="thumbnails swifta">
      <?php if ($k_p > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { ?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/deal/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="offer tooltip-test">Offer</span>
        <a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>">
       
       <?php if (file_exists(DOCROOT . 'images/deals/1000_800/'.$products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
        
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=350" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        <!--<div class="shortlinks">
              <a class="details" href="<?php echo PATH . $products->store_url_title . '/deal/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
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
            </div>-->    

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
			     <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No deals yet.">No Deal</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no deal found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_deal.jpg&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No deals yet."><b>No Deal</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
    
  
    </div>
  </section>
  
  <!-- Section  End-->
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt40" style=" display:none;">
    
    <h1 class="heading1"><span class="maintext">Popular Offers</span></h1>
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
  
  
  <!--<section id="newslettersignup" class="mt40">
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
  </section>-->
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

