<?php $this->js_base_url = PATH."themes/".THEME_NAME."/js/sasa"; ?>
<script defer src="<?php echo $this->js_base_url;?>/custom.js"></script>
<?php $this->get_product_categories = $this->all_products_list;
	   $k_p = count( $this->get_product_categories);?>
		  
       <section class="row mt40">
    	<div class="container">
   
     
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
			     <li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Product yet.">No Product</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no product found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_prod.png&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
    
    
    </div>
  	</section>
    <section class="row mt40" id="more_products_<?php echo $this->load_count?>">
   
    </section>
    
    
    
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
	
});
</script>


        
        