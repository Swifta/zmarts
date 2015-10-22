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
<?php if (count($this->all_auction_list) > 0) { ?>
	<?php $l = 1;
		foreach ($this->all_auction_list as $deals1) {
			$symbol = CURRENCY_SYMBOL;?>
                                <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                                <p>
                                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
                                $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
                                $size = getimagesize($image_url);
                                ?>
                                                    <a href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                                                                       <?php if(($size[0] > AUCTION_LIST_WIDTH) && ($size[1] > 130)) { ?>
                                                        <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png'; ?>&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130" alt="<?php echo $deals1->deal_title; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" />
                                                        <?php } else { ?>
                                <img src="<?php echo PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                                <?php } ?>

                                                    <?php /* <img src="<?php echo PATH.'images/auction/220_160/'.$deals1->deal_key.'_1'.'.png';?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" /> */ ?></a>

                                                <?php } else { ?>
                                                    <a  href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_auctions_list.png&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>"  border="0" /></a>
                                <?php } ?>      
                                                </p>


                                            <div class="seller_listing_content">

                                                <div class="ratings">

                                <?php $avg_rating = $deals1->avg_rating;
                                if($avg_rating!=''){
                                $avg_rating = round($avg_rating); ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
                                <?php } else { ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
                                <?php } ?>
                                                </div>
                                            </div>
                                               <div class="auction_timer">                                                                                                                                           
                                                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                                                </div>

                                                <?php $type = "";$categories = $deals1->category_url;?>
                                                <a class="pro_tit" style="font-size:<?php echo $font_size; ?> arial;<?php echo $font_color; ?>" class="cursor" 
                                                   href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><?php echo substr(ucfirst($deals1->deal_title), 0, 50); ?></a>           
                                                <br /><a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="Bid Now"
                                   class="category btn btn-success">Bid Now</a><br />

                                                <div class="price">
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
                                                </div>
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
<div class="text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></div>
<?php }?>
</div>



<div class="clearfix">
<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 4){
			$symbol = CURRENCY_SYMBOL;?>
                                <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                                <p>
                                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
                                $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
                                $size = getimagesize($image_url);
                                ?>
                                                    <a href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                                                                       <?php if(($size[0] > AUCTION_LIST_WIDTH) && ($size[1] > 130)) { ?>
                                                        <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png'; ?>&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130" alt="<?php echo $deals1->deal_title; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" />
                                                        <?php } else { ?>
                                <img src="<?php echo PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                                <?php } ?>

                                                    <?php /* <img src="<?php echo PATH.'images/auction/220_160/'.$deals1->deal_key.'_1'.'.png';?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" /> */ ?></a>

                                                <?php } else { ?>
                                                    <a  href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_auctions_list.png&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>"  border="0" /></a>
                                <?php } ?>      
                                                </p>


                                            <div class="seller_listing_content">

                                                <div class="ratings">

                                <?php $avg_rating = $deals1->avg_rating;
                                if($avg_rating!=''){
                                $avg_rating = round($avg_rating); ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
                                <?php } else { ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
                                <?php } ?>
                                                </div>
                                            </div>
                                               <div class="auction_timer">                                                                                                                                           
                                                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                                                </div>

                                                <?php $type = "";$categories = $deals1->category_url;?>
                                                <a class="pro_tit" style="font-size:<?php echo $font_size; ?> arial;<?php echo $font_color; ?>" class="cursor" 
                                                   href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><?php echo substr(ucfirst($deals1->deal_title), 0, 50); ?></a>           
                                                <br /><a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="Bid Now"
                                   class="category btn btn-success">Bid Now</a><br />

                                                <div class="price">
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
                                                </div>
                                            </div>
                                </li>
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
</div>

<div class="clearfix">
<?php if (count($this->all_auction_list) > 0) { ?>
	<?php
        $l = 1;
        $start = 1;
		foreach ($this->all_auction_list as $deals1) {
                    if($start > 8){
			$symbol = CURRENCY_SYMBOL;?>
                                <li class="span3">
                                        <div class="product-box">
                                            <span class="sale_tag"></span>
                                                <p>
                                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
                                $image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
                                $size = getimagesize($image_url);
                                ?>
                                                    <a href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                                                                       <?php if(($size[0] > AUCTION_LIST_WIDTH) && ($size[1] > 130)) { ?>
                                                        <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png'; ?>&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130" alt="<?php echo $deals1->deal_title; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" />
                                                        <?php } else { ?>
                                <img src="<?php echo PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
                                <?php } ?>

                                                    <?php /* <img src="<?php echo PATH.'images/auction/220_160/'.$deals1->deal_key.'_1'.'.png';?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" /> */ ?></a>

                                                <?php } else { ?>
                                                    <a  href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_auctions_list.png&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>"  border="0" /></a>
                                <?php } ?>      
                                                </p>


                                            <div class="seller_listing_content">

                                                <div class="ratings">

                                <?php $avg_rating = $deals1->avg_rating;
                                if($avg_rating!=''){
                                $avg_rating = round($avg_rating); ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
                                <?php } else { ?>
                                <img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
                                <?php } ?>
                                                </div>
                                            </div>
                                               <div class="auction_timer">                                                                                                                                           
                                                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                                                </div>

                                                <?php $type = "";$categories = $deals1->category_url;?>
                                                <a class="pro_tit" style="font-size:<?php echo $font_size; ?> arial;<?php echo $font_color; ?>" class="cursor" 
                                                   href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>"><?php echo substr(ucfirst($deals1->deal_title), 0, 50); ?></a>           
                                                <br /><a href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="Bid Now"
                                   class="category btn btn-success">Bid Now</a><br />

                                                <div class="price">
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
                                                </div>
                                            </div>
                                </li>
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
</div>

