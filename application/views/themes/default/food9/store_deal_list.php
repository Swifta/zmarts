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

<?php if (count($this->all_deals_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_deals_list as $deals_categories){
			$symbol = CURRENCY_SYMBOL; ?>
		<div class="four columns">
			<figure class="product">
                            <div class="product-discount"><?php echo round($deals_categories->deal_percentage); ?>% OFF</div>
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Buy Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals_categories->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals_categories->deal_title) > 18){
                    echo substr($deals_categories->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals_categories->deal_title;
                }
                ?></h5>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <span class="category product-price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></span>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
					</section>
			</figure>
		</div>
			<?php 
                        if($l == 4){
                            break;
                        }
                        $l++;
                        
                    } 
                        ?>

		<?php }else{?>
                                <p class="text-center"><?php echo $this->Lang['NO_DEALS'];?></p>
<?php }?>



	<?php if (count($this->all_deals_list) > 0) { ?>                                    
			<?php $l = 1;
                        $start = 1;
				foreach ($this->all_deals_list as $deals_categories) {
                                    if($start > 4){
					$symbol = CURRENCY_SYMBOL;?>
		<div class="four columns">
			<figure class="product">
                            <div class="product-discount"><?php echo round($deals_categories->deal_percentage); ?>% OFF</div>
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Buy Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals_categories->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals_categories->deal_title) > 18){
                    echo substr($deals_categories->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals_categories->deal_title;
                }
                ?></h5>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <span class="category product-price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></span>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
					</section>
			</figure>
		</div>
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


	<?php if (count($this->all_deals_list) > 0) { ?>                                    
			<?php $l = 1;
                        $start = 1;
				foreach ($this->all_deals_list as $deals_categories) {
                                    if($start > 8){
					$symbol = CURRENCY_SYMBOL;?>
		<div class="four columns">
			<figure class="product">
                            <div class="product-discount"><?php echo round($deals_categories->deal_percentage); ?>% OFF</div>
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Buy Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals_categories->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals_categories->deal_title) > 18){
                    echo substr($deals_categories->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals_categories->deal_title;
                }
                ?></h5>
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <span class="category product-price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></span>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
					</section>
			</figure>
		</div>
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
