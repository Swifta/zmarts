<?php
$font_color = "";
$bg_color ="";
$font_size ="";

if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
		$font_color = "color:".$m->font_color.";";
		$bg_color ="background:".$m->bg_color.";";
		$font_size = $m->font_size."px";
	} 
}
?>

<div class="clearfix">
	<?php if (count($this->all_deals_list) > 0) { ?>                                    
			<?php $l = 1;
				foreach ($this->all_deals_list as $deals_categories) {
					$symbol = CURRENCY_SYMBOL;?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
            <div class="deal_of_icon">
                <p><?php echo round($deals_categories->deal_percentage); ?>%</p>
                <p>OFF</p>
            </div>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $deals_categories->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $deals_categories->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
               title="<?php echo $deals_categories->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> 
                   <?php 
                   if(strlen($deals_categories->deal_title) > 40){
                        echo substr($deals_categories->deal_title, 0, 38)."...";
                   }else{
                        echo $deals_categories->deal_title;
                   }
                   ?>
             </a>
            <br/>
            <a href="<?php echo PATH .$deals_categories->store_url_title. '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Buy Now</a>
            <p class="price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>
        </div>
</li>
				<?php 
                        if($l == 4){
                            break;
                        }
                                $l++; 
                                
                   } 
                                ?>
<?php }else{?>
<div class="text-center"><?php echo $this->Lang['NO_DEALS'];?></div>
<?php }?>

</div>




<div class="clearfix">
	<?php if (count($this->all_deals_list) > 0) { ?>                                    
			<?php $l = 1;
                        $start = 1;
				foreach ($this->all_deals_list as $deals_categories) {
                                    if($start > 4){
					$symbol = CURRENCY_SYMBOL;?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
            <div class="deal_of_icon">
                <p><?php echo round($deals_categories->deal_percentage); ?>%</p>
                <p>OFF</p>
            </div>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $deals_categories->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $deals_categories->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
               title="<?php echo $deals_categories->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> 
                   <?php 
                   if(strlen($deals_categories->deal_title) > 40){
                        echo substr($deals_categories->deal_title, 0, 38)."...";
                   }else{
                        echo $deals_categories->deal_title;
                   }
                   ?>
             </a>
            <br/>
            <a href="<?php echo PATH .$deals_categories->store_url_title. '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Buy Now</a>
            <p class="price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>
        </div>
</li>
			<?php 

                        if($l == 4){
                            break;
                        }
                        $l++; 
                        
                        
                    } 
                    $start++;
                        ?>

                <?php
                } 
                
                        }
                else{
                    ?>
<div class="text-center"><?php echo $this->Lang['NO_DEALS'];?></div>
<?php }?>                   

</div>

<div class="clearfix">

	<?php if (count($this->all_deals_list) > 0) { ?>                                    
			<?php $l = 1;
                        $start = 1;
				foreach ($this->all_deals_list as $deals_categories) {
                                    if($start > 8){
					$symbol = CURRENCY_SYMBOL;?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
            <div class="deal_of_icon">
                <p><?php echo round($deals_categories->deal_percentage); ?>%</p>
                <p>OFF</p>
            </div>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $deals_categories->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $deals_categories->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
               title="<?php echo $deals_categories->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> 
                   <?php 
                   if(strlen($deals_categories->deal_title) > 40){
                        echo substr($deals_categories->deal_title, 0, 38)."...";
                   }else{
                        echo $deals_categories->deal_title;
                   }
                   ?>
             </a>
            <br/>
            <a href="<?php echo PATH .$deals_categories->store_url_title. '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Buy Now</a>
            <p class="price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>
        </div>
</li>
			<?php 

                        if($l == 4){
                            break;
                        }
                        $l++; 
                        
                        
                    } 
                    $start++;
                        ?>

                <?php
                } 
                
                        }
                else{
                    ?>
<div class="text-center"><?php echo $this->Lang['NO_DEALS'];?></div>
<?php }?>                   
</div>