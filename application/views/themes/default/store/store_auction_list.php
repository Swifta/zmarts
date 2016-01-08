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


<?php if (count($this->all_auction_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_auction_list as $deals1){
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/auction/1000_800/'. $deals1->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
            
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $deals1->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <h4>
                   <?php 
                   if(strlen($deals1->deal_title) > 18){
                       echo substr($deals1->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $deals1->deal_title; 
                   }
                   ?>
                </h4>
                                                    <?php $q = 0;
                                                    foreach ($this->all_payment_list as $payment) {
                                                        ?>
                                                        <?php
                                                        if ($payment->auction_id == $deals1->deal_id) {
                                                            $firstname = $payment->firstname;
                                                            $transaction_time = $payment->transaction_date;
                                                            $q = 1;
                                                        }
                                                    }
                                                    ?>
                                <?php if ($q == 1) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_value); ?></span></p>                                                                    


                                <?php } ?>
                                <?php if ($q == 0) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_price); ?></span></p>                                                                    	
                                <?php } ?> 
                <div class="ratings">

<?php $avg_rating = $deals1->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
               <div class="auction_timer">                                                                                                                                           
                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                </div>
                <div class="icon">
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="one tooltip" title="Buy Now"></a>
                    <a href="#" onclick="addToWishList('<?php echo $deals1->deal_id; ?>','<?php echo addslashes($deals1->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $deals1->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
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
    <div class=" span12text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>


<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 4){
			$symbol = CURRENCY_SYMBOL;?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/auction/1000_800/'. $deals1->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
            
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $deals1->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <h4>
                   <?php 
                   if(strlen($deals1->deal_title) > 18){
                       echo substr($deals1->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $deals1->deal_title; 
                   }
                   ?>
                </h4>
                                                    <?php $q = 0;
                                                    foreach ($this->all_payment_list as $payment) {
                                                        ?>
                                                        <?php
                                                        if ($payment->auction_id == $deals1->deal_id) {
                                                            $firstname = $payment->firstname;
                                                            $transaction_time = $payment->transaction_date;
                                                            $q = 1;
                                                        }
                                                    }
                                                    ?>
                                <?php if ($q == 1) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_value); ?></span></p>                                                                    


                                <?php } ?>
                                <?php if ($q == 0) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_price); ?></span></p>                                                                    	
                                <?php } ?> 
                <div class="ratings">

<?php $avg_rating = $deals1->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
               <div class="auction_timer">                                                                                                                                           
                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                </div>
                <div class="icon">
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="one tooltip" title="Buy Now"></a>
                    <a href="#" onclick="addToWishList('<?php echo $deals1->deal_id; ?>','<?php echo addslashes($deals1->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $deals1->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
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
                <?php }}else{?>
<div class="span12 text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>

<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 8){
			$symbol = CURRENCY_SYMBOL;?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/auction/1000_800/'. $deals1->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
            
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $deals1->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <h4>
                   <?php 
                   if(strlen($deals1->deal_title) > 18){
                       echo substr($deals1->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $deals1->deal_title; 
                   }
                   ?>
                </h4>
                                                    <?php $q = 0;
                                                    foreach ($this->all_payment_list as $payment) {
                                                        ?>
                                                        <?php
                                                        if ($payment->auction_id == $deals1->deal_id) {
                                                            $firstname = $payment->firstname;
                                                            $transaction_time = $payment->transaction_date;
                                                            $q = 1;
                                                        }
                                                    }
                                                    ?>
                                <?php if ($q == 1) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_value); ?></span></p>                                                                    


                                <?php } ?>
                                <?php if ($q == 0) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . number_format($deals1->deal_price); ?></span></p>                                                                    	
                                <?php } ?> 
                <div class="ratings">

<?php $avg_rating = $deals1->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
               <div class="auction_timer" >                                                                                                                                           
                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                </div>
                <div class="icon">
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="one tooltip" title="Buy Now"></a>
                    <a href="#" onclick="addToWishList('<?php echo $deals1->deal_id; ?>','<?php echo addslashes($deals1->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $deals1->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
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
                <?php }}else{?>
<div class="span12 text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>


