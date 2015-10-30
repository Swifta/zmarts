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

<?php if (count($this->all_products_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_products_list as $products) {
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/products/1000_800/'. $products->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <span><?php echo $symbol . " " . number_format($products->deal_value); ?></span>
                <h4>
                   <?php 
                   if(strlen($products->deal_title) > 18){
                       echo substr($products->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $products->deal_title; 
                   }
                   ?>
                </h4>
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $products->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>
                <div class="icon">
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="one tooltip" title="Add to cart"></a>
                    <a href="#" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
                </div>
            </div>
        </div>

    </div>
			<?php 
                        if($l == 4){
                            break;
                        }
                        $l++;
                        
                    } 
                        ?>

<?php }else{?>
      <div class="span12 text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></div>
<?php }?>


<?php if (count($this->all_products_list) > 0) { ?>  
                       
	<?php
		$l = 1;
                $start = 1;
		foreach ($this->all_products_list as $products) {
                    if($start > 4){
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/products/1000_800/'. $products->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <span><?php echo $symbol . " " . number_format($products->deal_value); ?></span>
                <h4>
                   <?php 
                   if(strlen($products->deal_title) > 18){
                       echo substr($products->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $products->deal_title; 
                   }
                   ?>
                </h4>
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $products->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>
                <div class="icon">
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="one tooltip" title="Add to cart"></a>
                    <a href="#" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
                </div>
            </div>
        </div>

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
        <div class="span12 text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></div>
<?php }?>



<?php if (count($this->all_products_list) > 0) { ?>  
                       
	<?php
		$l = 1;
                $start = 1;
		foreach ($this->all_products_list as $products) {
                    if($start > 8){
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/products/1000_800/'. $products->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <span><?php echo $symbol . " " . number_format($products->deal_value); ?></span>
                <h4>
                   <?php 
                   if(strlen($products->deal_title) > 18){
                       echo substr($products->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $products->deal_title; 
                   }
                   ?>
                </h4>
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $products->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>
                <div class="icon">
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="one tooltip" title="Add to cart"></a>
                    <a href="#" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
                </div>
            </div>
        </div>

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
        <div class="span12 text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></div>
<?php }?>
