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
    


<!--product item-->
<div class="product_item hit w_xs_full" style="border:1px solid blue;">
        <figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">
                <!--product preview-->
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>" class="d_block relative wrapper pp_wrap m_bottom_15">
                    <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>" class="tr_all_hover" alt="">
                </a>
                <!--description and price of product-->
                <figcaption>
                            <h5 class="m_bottom_10">
                                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>" class="color_dark">
                   <?php 
                   if(strlen($products->deal_title) > 18){
                       echo substr($products->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $products->deal_title; 
                   }
                   ?>
                        </a></h5>
                        <!--rating-->
                        <p class="clearfix">
        <?php 
        $avg_rating = $products->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                   
                        </p>
                        <p class="scheme_color f_size_large m_bottom_15"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>	
                        <button onclick="location.href='<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>';"href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"
                           class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
                        <div class="clearfix m_bottom_5 m_top_10">
                                <ul class="horizontal_list d_inline_b l_width_divider">
                                        <li class="m_right_15 f_md_none m_md_right_0">
                                            <a href="#" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" class="color_dark">Add to Wishlist</a></li>
                                        <li class="f_md_none">
                                            <a href="#" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" class="color_dark">Add to Compare</a></li>
                                </ul>
                        </div>
                </figcaption>
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
