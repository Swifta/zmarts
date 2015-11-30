
<?php $this->get_product_categories = $this->all_products_list;?>
<?php  if (count($this->get_product_categories) > 0) { ?>
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {?>
						 
						
<?php
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          </div>
          <div class="clear"></div>
        	
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
          
          <?php } ?>
          <!-- Ending 3rd if -->
          <?php } ?>
          
          <div class="top-box" id="more_products_<?php echo $this->load_count?>">
   
  		  </div>
   		  <div class="clear"></div>
<!-- Ending else of 1st if -->

        
        