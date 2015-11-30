<script type="text/javascript">
	$(document).ready(function(e) {
		$('.megamenu > li').removeClass('active');
        $('#id_leo_home').addClass('active');
    });
</script>
<script type="text/javascript">
$(document).ready(function(e) {
	
    $('.kkcountdown').kkcountdown({
		
        addClass: 'swifta little-space',
		daysText:'Day(s) - ',
		hoursText: 'h : ',
		minutesText: 'm : ',
		secondsText: 's'});
		
});
</script>
<?php $this->load_map = false; ?>
<!-- start slider -->

<div id="fwslider">
        <div class="slider_container">
            
            
          <!-- <?php  if (count($this->banner_details) > 0) {
	   ?>
                <?php if(count($this->banner_details) != 1) {   ?>                         
                             
					<?php foreach ($this->banner_details as $banner) { ?>                                        
                                    
                                   
                                   <?php 
								   			$banner->redirect_url = trim($banner->redirect_url);
											if( $banner->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
												  <a  href="<?php echo PATH."leo_zenith.html";	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_self">
											<?php }else{ ?>
                                                                                           
                                   <a  href="<?php echo $banner->redirect_url;	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_blank"><?php } ?>
                            <div class="slide"> 
                                          <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/banner_images/' . $banner->banner_id .  '.png' ?>&w=1570&h=561" alt="<?php echo $banner->image_title; ?>" title="<?php echo $banner->image_title; ?>" />
                                        
                                         
                                         
                                      <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                        <h4 class="title"><?php echo $banner->image_title; ?></h4>
                        <p class="description">Click banner for more details!</p>
                       
                    </div>
                </div>
                </div>  
                      </a>                   
                                      
                                    
                                
                                  
                                    
                                   
                                 <?php } ?>                             
                                                                                            
								                                                           
                                                    
                        <?php } 
}  ?>-->




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
						 
                       <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank">  <div class="slide">  <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>&w=1570&h=561" alt="store banner" title="store banner" />
                    <div class="slide_content">
                    	<div class="slide_content_wrap">
                        
                        <h4 class="title"><?php echo $banner->image_title; ?></h4>
                        <p class="description">Click banner for more details!</p>
                       
                    </div>
                	</div> 
                       
                       </div></a>
                        
						<?php
					}
				?>
                                  <?php } ?>
                                          
                                 <?php } ?>        
 		 <?php }?> 
         <?php if(!$has_personalized || !$has_banners ){?>
			 
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <div class="slide"> <img src="<?php echo PATH."resize.php" ?>?src=<?php echo PATH . 'bootstrap/themes/images/gaming/banners/0_gaming_1_banner.jpg'; ?>&w=1570&h=561" alt="store banner" title="store banner" /> <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                        <h4 class="title"><?php echo $banner->image_title; ?></h4>
                        <p class="description">Click banner for more details!</p>
                       
                    </div>
                </div></div></a>
              
                <a  href="<?php echo $banner_link;?>"  title = "store banner" target="_blank"> <div class="slide"> <img src="<?php echo PATH."resize.php"?>?src=<?php echo PATH . 'bootstrap/themes/images/gaming/banners/0_gaming_2_banner.jpg'; ?>&w=1570&h=561" alt="store banner" title="store banner" /><div class="slide_content">
                    <div class="slide_content_wrap">
                        
                        <h4 class="title"><?php echo $banner->image_title; ?></h4>
                        <p class="description">Click banner for more details!</p>
                       
                    </div>
                </div> </div></a>
            
		 <?php }?> 
            
            
            
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
         <div class="clear clearfix"></div>
    </div>

<!--/slider -->
<div class="main">
  <div class="wrap">
    <div class="section group">
      <div class="cont span_2_of_3">
        <h2 class="head">New Arrivals</h2>
        <div class="top-box"> 
      	<!--  <div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>--> 
        <!-- <div class="col_1_of_3 span_1_of_3">
			   	 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic1.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>-->
           <?php 
		   		$this->get_product_categories =  $this->get_recent_product_categories;
		   ?>
         
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        	</div>
         <div class="top-box">
         <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3">
            <div class="inner_content clearfix">
             <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285; ?>&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285; ?>&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
                <!--<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
               		<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                
                
              </div>
               </a>
               
              
              <div class="sale-box"><span class="on_sale title_shop">Newest</span></div>
              <div class="price">
                <div class="cart-left">
                
                  <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p></a>
                  <div class="price1"> <?php if($products->deal_price > $products->deal_value){?> <span class="reducedfrom"><?php echo $symbol . " " . number_format($products->deal_price); ?></span><?php }?> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                  
                </div>
                <div class="cart-right"> 
                <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="fa fa-balance-scale <?php echo $products->deal_id;?>-to-compare"></i></a>
                <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="fa fa-heart <?php echo $products->deal_id;?>-to-wish"></i></a>
              	
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><i class="fa fa-shopping-cart"></i></a>
                </div>
                
                <div class="clear"></div>
              </div>
            </div>
            </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          
          
          <?php }else {
			  
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
                 <?php $just_opened = true; ?>
                 
				 <div class="section group" style="">
			  <div class="col_1_of_3 span_1_of_3" style=" width: 100%;">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div style=" text-align:center; vertical-align: middle; background:#FFF; width: 100%; height: 100px; ">
                    
                    <p style="padding-top:4%;"><b>No products found in this category</b></p>
						
					</div>
                    	
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php } ?>
        
        
        
        
     	
     
        
        
        <h2 class="head">Popular Products</h2>
        <div class="section group">
          <?php if(count($this->best_seller) > 0) {
			  $k = 1;
			  $just_opened = false;
			  ?>
          <?php foreach($this->best_seller as $products) {
			  	$just_opened = false;
				
			    $symbol = CURRENCY_SYMBOL; ?>
          <?php if($k %4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="section group">
        	<?php 
		 	$k = 1;
		    $just_opened = true;?>
         <?php }?>
         
         
            <div class="col_1_of_3 span_1_of_3">
            <div class="inner_content clearfix">
             <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285; ?>&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285; ?>&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
                <!--<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
               		<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                
                
              </div>
               </a>
               
               <!--<p style="background: #F00; width:101%; display:inline-block; text-align:center;">xyz</p>-->
              <div class="sale-box"><span class="on_sale title_shop">Newest</span></div>
              <div class="price">
                <div class="cart-left">
                
                  <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p></a>
                  <div class="price1"> <?php if($products->deal_price > $products->deal_value){?> <span class="reducedfrom"><?php echo $symbol . " " . number_format($products->deal_price); ?></span><?php }?> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                  
                </div>
                <div class="cart-right"> 
                <!--<a href="#"><i class="fa fa-balance-scale"></i></a>
                <a href="#"><i class="fa fa-heart"></i></a>-->
                
                <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="fa fa-balance-scale <?php echo $products->deal_id;?>-to-compare"></i></a>
                <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="fa fa-heart <?php echo $products->deal_id;?>-to-wish"></i></a>
              	
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><i class="fa fa-shopping-cart"></i></a>
                </div>
                
                <div class="clear"></div>
              </div>
            </div>
            </div>
          <?php $k++;
		  } ?>
          <!-- Ending 1st foreach -->
          
          <?php }else {
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 <?php $just_opened = true; ?>
				 <div class="section group" style="">
			  <div class="col_1_of_3 span_1_of_3" style=" width: 100%;">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div style=" text-align:center; vertical-align: middle; background:#FFF; width: 100%; height: 100px; ">
                    
                    <p style="padding-top:4%;"><b>No products found in this category</b></p>
						
					</div>
                    	
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          <!-- Ending 1st if -->
         <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php   } ?>
       
         
         
         
         
            
        <?php  $this->get_product_categories = $this->get_deals_categories?>
        <h2 class="head">Hot Deals</h2>
        <div class="top-box"> 
 
       
          
          <?php if (count($this->get_product_categories) > 0) {
			  
			  $k = 1;
			  $just_opened = false;
			   ?>
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="top-box">
        <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> 
            <div class="inner_content clearfix">
            <a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <!--<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <!--<img src="<?php echo PATH .'images/deals/1000_800/'.$products->deal_key.'_1'.'.png'?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
               <!-- <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                	<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              </a>
            <p style="font: 12px/15px arial; color: #888;width:101%; display:inline-block; text-align:center;"><i class="fa fa-clock-o">&nbsp;</i><span class="kkcountdown" data-time="<?php echo $products->enddate?>"> </span></p>
            
            
              <div class="sale-box"><span class="on_sale title_shop">Deals</span></div>
              <div class="price">
                <div class="cart-left">
                <a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p>
                  </a>
                  <div class="price1"> <?php if($products->deal_price > $products->deal_value){?> <span class="reducedfrom"><?php echo $symbol . " " . number_format($products->deal_price); ?></span><?php }?> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"><a href="<?php echo PATH . $products->store_url_title . '/deals/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Buy now"><i class="fa fa-tag fa-3x"></i></a> </div>
                <div class="clear"></div>
              </div>
            </div>
             </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php }else { ?>
			     <!-- Ending 1st if, beginning else -->
                 <?php $just_opened = true; ?>
				 <div class="section group" style="">
			  <div class="col_1_of_3 span_1_of_3" style=" width: 100%;">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div style=" text-align:center; vertical-align: middle; background:#FFF; width: 100%; height: 100px; ">
                    
                    <p style="padding-top:4%;"><b>No deals found in this category</b></p>
						
					</div>
                    	
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          
         
        <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php   } ?>
        
        
           <?php  $this->get_product_categories = $this->get_auction_categories?>
        
        <h2 class="head">Popular Auctions</h2>
        <div class="top-box"> 
         
        
          
          <?php if (count($this->get_product_categories) > 0) {
			  
			  $k = 1;
			  $just_opened = false;
			   ?>
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="top-box">
        <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3">
          
            <div class="inner_content clearfix">
             <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <!--<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <!--<img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
               <!-- <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              </a>
              <p style="font: 12px/15px arial; color: #888;width:101%; display:inline-block; text-align:center;"><i class="fa fa-clock-o">&nbsp;</i><span class="kkcountdown" data-time="<?php echo $products->enddate?>"> </span></p>
              <div class="sale-box"><span class="on_sale title_shop">Auctions</span></div>
              <div class="price">
                <div class="cart-left">
                <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p>
                  </a>
                  <div class="price1"> <?php if($products->deal_price > $products->deal_value){?> <span class="reducedfrom"><?php echo $symbol . " " . number_format($products->deal_price); ?></span><?php }?> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"><a title="Bid now" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="fa fa-legal fa-3x"></i> </a></div>
                <div class="clear"></div>
              </div>
            </div>
            </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
         
          
          <?php }else { ?>
			     <!-- Ending 1st if, beginning else -->
                 <?php $just_opened = true; ?>
				 <div class="section group" style="">
			  <div class="col_1_of_3 span_1_of_3" style=" width: 100%;">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div style=" text-align:center; vertical-align: middle; background:#FFF; width: 100%; height: 100px; ">
                    
                    <p style="padding-top:4%;"><b>No auctions found in this category</b></p>
						
					</div>
                    	
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          
          <!--<div class="clear"></div>
        </div>-->
        <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php   } ?>
        
        
  <div class="clients">
  <?php $k = count($this->get_sub_store_details);?>
    <h2 class="heading1 m3"><span class="subtext"> <?php if( $k == 0 ){?> No store branch(es) yet.<?php }else{?>  Our other branch(es). Feel free to drop by sometime.<?php } ?></span></h2>
  
     <ul id="flexiselDemo3">
       
       <?php if ($k > 0) { ?> 
		
	
     <?php foreach ($this->get_sub_store_details as $stores) {
		 
		  ?>
    									
								<li>
                                           
                                                        <?php if (file_exists(DOCROOT . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png')) { ?>
                                                            <a href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>">
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png' ?>&w=150&h=130" alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" /></a>
            <?php } else { ?>
                                                            <a href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="<?php echo $stores->store_name; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_stores_list.png&w=150&h=130"   alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" ></a>
        <?php } ?>                                                   
                                                   		<div class="branch_details">
                                                        Name: <a style="font:bold 11px arial;" href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>"><?php echo common::truncate_item_name($stores->store_name, 12); ?></a>
                                                        <br />
                                                        <a  href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="visit branch">Visit</a>
                                                        <p style="font:11px/15px arial;color:#666;"><?php common::truncate_about_us($stores->about_us,80); ?></p>                                         
                                                         
                                                        
                                                    </div>                                                                                                                        
                                               
                                            
                                <?php   ?>
            </li>
								<?php } ?>
                             <?php } else { ?>
								 <li><a href="#" title="No other branches yet">
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH;?>themes/default/images/sasa/no_branch.png&w=150&h=130" alt="No other branch." title="No other branch" /> 
                                                                <div class="branch_details" style="text-align:left; margin-left:30px">
                                                        <p><b>No branch yet</b></p>  
                                </div>
                                                                </a></li>
                                 
								  
								 
							<?php }?> 
                                
      
      
      
     
    
    
   
    </ul>
  </div>
        
        
        
      
        
      </div>
      
     
      </div>
      </div>
      
      <div class="rsidebar span_1_of_left">
        <div class="top-border"> </div>
        <div class="border">
	             <link href="<?php echo PATH."themes/default/css/leo/";?>default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="<?php echo PATH."themes/default/css/leo/";?>nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="<?php echo PATH."themes/default/js/leo/";?>jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
              
              <?php if (count($this->ads_details) > 0) { ?>   
                                    <?php foreach ($this->ads_details as $ads) { ?>    
            <?php if ($ads->ads_position == "rs1" && $ads->page_position==3) {  ?>
            					    
                                  <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
									  
                                      <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
									  
								 <?php  }else{?>
								 
                                 <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
								  
								  <?php }?>
                                     
										 
                                 
              <?php } ?>
              <?php if ($ads->ads_position == "rs2" && $ads->page_position==3){  ?>   
                         <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
                                  
									   <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                       <img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png" />
                                       
                                       
                                       </a> 
                                       
                                      <?php  }else{?>
                                      
                                       <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                       <img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " />
                                       
                                       </a> 
                                       
                                       <?php }?>
                                     
										
            <?php } ?>
        <?php } ?>
    <?php } ?>
    
    
    
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
						
                       <a  href="<?php echo $ads_link;?>"  title = "store banner" target="_blank"> <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/ads/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>&w=287&h=246" alt="store banner" title="store banner" /> </a>
                         
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
									  
                                       <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                               
                                      <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a>
									  
								 <?php  }else{?>
								 
                                 <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>">
                                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png&w=287&h=246" /></a>
								  
								  <?php }?>      
        <?php } ?>
    <?php } else {?>
			
	<?php }?>
      <?php } ?>
			 
                
				
              </div>
             </div>
             <!-- <div class="btn"><a href="<?php echo PATH."leo_zenith.html"; ?>">Zenith Offer(Check it Out)</a></div>-->
             </div>
        <div class="top-border"> </div>
        <div class="sidebar-bottom">
          <h2 class="m_1">Newsletters<br>
            Subscription</h2>
          <p class="m_text">Be the first to know about hot deals and products by subscribing to our newsletter</p>
          <div class="subscribe">
            <form onsubmit="return false;">
              <div class="subscribe_lft_txt_field">
                <input  id="subscribe" name="subscribe" placeholder="Enter your valid email" type="text" class="textbox">
                <!--<input type="submit" value="<?php echo $this->Lang['SUBSCRIBE'];?>" onclick="return check_subscribe();"/>--> 
                <em style="color:#F00;" id="email_subscriber_error"></em> </div>
              <input onclick="return check_subscribe();"  type="submit" value="Subscribe">
            </form>
             
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>


<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>