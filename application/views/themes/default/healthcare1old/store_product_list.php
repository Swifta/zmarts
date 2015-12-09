<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
<?php if (count($this->all_products_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_products_list as $products) {
			$symbol = CURRENCY_SYMBOL; ?>
                                    <li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
            <i class="wloader_img">&nbsp;</i>
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                    <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                             <?php } else { ?>
                                            <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                            <?php } ?></a>
            <?php } else { ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
            <?php } ?>    
                                                                
            </p>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $products->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" 
               title="<?php echo $products->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $products->deal_title; ?></a>
            <br/>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Add to cart</a>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
            <p class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>        
                                                                
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
                                <p class="text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></p>
<?php }?>
</div>
<div class="clearfix">

<?php if (count($this->all_products_list) > 0) { ?>  
                       
	<?php
		$l = 1;
                $start = 1;
		foreach ($this->all_products_list as $products) {
                    if($start > 4){
			$symbol = CURRENCY_SYMBOL; ?>
                                    <li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
                <i class="wloader_img">&nbsp;</i>
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
                $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
                $size = getimagesize($image_url);
                ?>
                        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                        <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                 <?php } else { ?>
                                                <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                                <?php } ?></a>
                <?php } else { ?>
                        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
                <?php } ?>    
                                                                
            </p>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $products->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" 
               title="<?php echo $products->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $products->deal_title; ?></a>
            <br/>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Add to cart</a>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
            <p class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>        
                                                                
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
        <p class="text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></p>
<?php }?>

</div>
<div class="clearfix">


<?php if (count($this->all_products_list) > 0) { ?>  
                       
	<?php
		$l = 1;
                $start = 1;
		foreach ($this->all_products_list as $products) {
                    if($start > 8){
			$symbol = CURRENCY_SYMBOL; ?>
                                    <li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
                <i class="wloader_img">&nbsp;</i>
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
                $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
                $size = getimagesize($image_url);
                ?>
                        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                        <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                 <?php } else { ?>
                                                <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                                <?php } ?></a>
                <?php } else { ?>
                        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
                <?php } ?>    
                                                                
            </p>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $products->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" 
               title="<?php echo $products->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $products->deal_title; ?></a>
            <br/>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Add to cart</a>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
            <p class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>        
                                                                
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
        <p class="text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></p>
<?php }?>

        </div>