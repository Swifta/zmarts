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
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" 
                                           title="<?php echo $deals1->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Bid Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals1->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals1->deal_title) > 18){
                    echo substr($deals1->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals1->deal_title;
                }
                ?></h5>
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
                                                    <br />
                                                    <?php /*<a class="buy_it list_buy_it bid_it" href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $this->Lang['BID_NOW1']; ?>"><?php echo $this->Lang['BID_NOW1']; ?></a> */ ?>
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
                                <p class="text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></p>
<?php }?>


<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 4){
			$symbol = CURRENCY_SYMBOL;?>
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" 
                                           title="<?php echo $deals1->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Bid Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals1->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals1->deal_title) > 18){
                    echo substr($deals1->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals1->deal_title;
                }
                ?></h5>
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
                                                    <br />
                                                    <?php /*<a class="buy_it list_buy_it bid_it" href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $this->Lang['BID_NOW1']; ?>"><?php echo $this->Lang['BID_NOW1']; ?></a> */ ?>
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
                <?php }}else{?>
<div class="text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>

<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 8){
			$symbol = CURRENCY_SYMBOL;?>
		<div class="four columns">
			<figure class="product">
				<div class="mediaholder">
                                    <i class="wloader_img">&nbsp;</i>
					<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" 
                                           title="<?php echo $deals1->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals1->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
	<a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Bid Now</a>
				</div>

					<section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $deals1->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                <h5><?php 
                if(strlen($deals1->deal_title) > 18){
                    echo substr($deals1->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals1->deal_title;
                }
                ?></h5>
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
                                                    <br />
                                                    <?php /*<a class="buy_it list_buy_it bid_it" href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $this->Lang['BID_NOW1']; ?>"><?php echo $this->Lang['BID_NOW1']; ?></a> */ ?>
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
                <?php }}else{?>
<div class="text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>


