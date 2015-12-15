<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("body").kkCountDowndetail({
            colorText: '#7b7b7b',
            addClass: 'shadow'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("body").kkCountDown({
            colorText:'#000000',
            colorTextDay:'#000000'	
        });
         $('.submit-link')
               .click(function(e){ 
			$('input[name="c"]').val(btoa($(this).attr('id').replace('sample-','')));
			$('input[name="c_t"]').val('<?php echo base64_encode("main"); ?>');
                       e.preventDefault();
                       $(this).closest('form')
                               .submit();                                               
                });
        });
//$(function() {
//$(".slidetabs").tabs(".images > div", {
//	effect: 'fade',
//	fadeOutSpeed: "medium",
//	rotate: true
//}).slideshow();
//});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>



<!-- banner start-->
<!-- Slider
================================================== -->
<div class="container">

	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>
<?php
$arr_effects = array();
$arr_effects[0] = "fade";
$arr_effects[1] = "zoomout";
$arr_effects[2] = "fadetotopfadefrombottom";
shuffle($arr_effects);
$banner_check ="";
if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
                $tabs=0;
                for ($i = 1; $i <= 3; $i++) {
                    if (file_exists(DOCROOT . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png')) { 
                            $banner_link="";

                            if($m->banner_1_link !="" || $m->banner_2_link !="" || $m->banner_3_link !="") { 
                                $banner_check = 1;
                                if($i==1) { 
                                    $banner_link = $m->banner_1_link; 
                                } else if($i==2) { 
                                    $banner_link = $m->banner_2_link; 
                                } else if($i==3) { 
                                    $banner_link = $m->banner_3_link; 
                                }
                                
                            }
?>
<li data-transition="<?php echo $arr_effects[$i-1]; ?>" data-slotamount="7" data-masterspeed="1500" >                                                                                
    <a href="<?php echo $banner_link; ?>"  title = "<?php echo $banner_link; ?>">
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" 
             data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
    </a>
</li>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <li data-transition="<?php echo $arr_effects[$i-1]; ?>" data-slotamount="7" data-masterspeed="1500" >
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/food/banners/<?php echo $i; ?>.jpg" alt="" />
                </li>
<?php
                    }
                }
        }
}
else{?>

    <li data-transition="<?php echo $arr_effects[0]; ?>" data-slotamount="7" data-masterspeed="1500" >
            <img src="<?php echo PATH; ?>bootstrap/themes/images/food/banners/1.jpg" alt="" 
                 data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"/>
    </li>
    <li data-transition="<?php echo $arr_effects[1]; ?>" data-slotamount="7" data-masterspeed="1500" >
            <img src="<?php echo PATH; ?>bootstrap/themes/images/food/banners/2.jpg" alt="" 
                 data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"/>
    </li>
    <li data-transition="<?php echo $arr_effects[2]; ?>" data-slotamount="7" data-masterspeed="1500" >
            <img src="<?php echo PATH; ?>bootstrap/themes/images/food/banners/3.jpg" alt="" 
                 data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"/>
    </li>

<!-- display default banners-->
<?php
}
?>

			</ul>
		</div>
	</div>
</div>

            <!-- banner end-->
            
            
 <?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";

//    if(count($this->merchant_personalised_details)>0) { 
//            foreach($this->merchant_personalised_details as $m) {  
//                    $font_color = "color:".$m->font_color.";";
//                    $bg_color ="background:".$m->bg_color.";";
//                    $font_size = $m->font_size."px";
//            } 
//    }
    
?>
<!--for adverts -->
<!-- Featured
================================================== -->
<div class="container" >
            <?php 
            $ads_check = "";
            if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {
		 ?>        
            <div class="advertice_part">
                <ul>
					<?php for ($i = 1; $i <= 3; $i++) { ?>
										<?php if (file_exists(DOCROOT . 'images/merchant/ads/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png')) {
											$ads_link="";
											if($m->ads_1_link !="" || $m->ads_2_link !="" || $m->ads_3_link !="") {  $ads_check = 1;
											if($i==1) { $ads_link = $m->ads_1_link; } else if($i==2) { $ads_link = $m->ads_2_link; } else if($i==3) { $ads_link = $m->ads_3_link; } } ?>
                        <div class="one-third column">
                            <a class="img-caption" href="<?php echo $ads_link; ?>" title="<?php echo $ads_link; ?>">
                                <figure>
                              <img alt="" src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>"/>
                              </figure>
                            </a>
                        </div>
                    <?php }else{?>
	<div class="one-third column">
		<a href="#" class="img-caption" >
			<figure>
				<img src="<?php echo PATH; ?>bootstrap/themes/images/food/ads/<?php echo $i; ?>.jpg" alt="" />
			</figure>
		</a>
	</div>
                    <?php }}?> 
                   
                </ul>  
            </div>
            <?php  } } ?>


</div>
<div class="clearfix"></div>
<!--for adverts -->



<!-- New Arrivals
================================================== -->
<div class="container">

	<!-- Headline -->
	<div class="sixteen columns">
		<h3 class="headline">Best Seller</h3>
		<span class="line margin-bottom-0"></span>
	</div>

	<!-- Carousel -->
	<div id="new-arrivals" class="showbiz-container sixteen columns" >

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

		<!-- Products -->
		<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
			<div class="overflowholder">

				<ul>
<?php 
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0)) { 
    

if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li>
    <figure class="product">
            <div class="mediaholder">
   <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">     
       <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
            //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
        if(true) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
            <div class="cover">
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
            </div> 
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
            <div class="cover">
                <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
            </div>
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
            <div class="cover">
                    <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
            </div> 
        <?php } ?>
    </a>
<a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="Add to cart" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
        </div>
                <section>
                    <span class="product-category text-center">
                        <div class="ratings text-center">
        <?php 
        $avg_rating = $best->avg_rating;
        if($avg_rating!=''){
        $avg_rating = round($avg_rating); ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </div>                        
                    </span>
                        <h5><a class="pro_tit" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" 
               title="<?php echo $best->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> 
                   <?php 
                   if(strlen($best->deal_title) > 18){
                       echo substr($best->deal_title, 0, 17)."..";
                   }
                   else{
                   echo $best->deal_title; 
                   }
                   ?>
                            </a></h5>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <span class="category product-price"><?php echo $symbol . " " . number_format($best->deal_value); ?></span>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>

                </section>
    </figure>
</li>
<?php
     if($displayed >= 15){
         break;
     }
     $displayed++;
     
        }
    }
}
 ?>


<!-- Product #3 -->
<!--
<li>
        <figure class="product">
                <div class="product-discount">SALE</div>
                <div class="mediaholder">
                        <a href="single-product-page.html">
                                <img alt="" src="images/shop_item_03.jpg"/>
                                <div class="cover">
                                        <img alt="" src="images/shop_item_03_hover.jpg"/>
                                </div>
                        </a>
                        <a href="#" class="product-button"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
                </div>

                <a href="single-product-page.html">
                        <section>
                                <span class="product-category">Suits</span>
                                <h5>Wool Two-Piece Suit</h5>
                                <span class="product-price-discount">$499.00<i>$399.00</i></span>
                        </section>
                </a>
        </figure>
</li>
-->

				</ul>
				<div class="clearfix"></div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>



<!-- Product Lists
================================================== -->
<div class="container margin-bottom-25">

	<!-- Best Sellers -->
	<div class="one-third column">

		<!-- Headline -->
		<h3 class="headline">Related Products</h3>
		<span class="line margin-bottom-0"></span>
		<div class="clearfix"></div>
		<ul class="product-list">
<?php 
if(count($this->get_product_categories) > 0) {
?>
<?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
?>
    <li>
   <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img style="width:80px;height:80px" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img style="width:80px;height:80px" src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="width:80px;height:80px" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>
            
<div class="product-list-desc">
   <?php 
   if(strlen($products->deal_title) > 18){
       echo substr($products->deal_title, 0, 17)."..";
   }
   else{
   echo $products->deal_title; 
   }
   ?>
    <i><?php echo $symbol . " " . number_format($products->deal_value); ?></i>
</div>
    </a>
            </li>               
<?php
     if($displayed >= 3){
         break;
     }
     $displayed++;
     
        }
    }
 ?>

<li><div class="clearfix"></div></li>
<?php
}
?>
		</ul>

	</div>


	<!-- Top Rated -->
	<div class="one-third column">

		<!-- Headline -->
		<h3 class="headline">Related Deals</h3>
		<span class="line margin-bottom-0"></span>
		<div class="clearfix"></div>


		<ul class="product-list discount">
                    
<?php 
if(count($this->get_deals_categories) > 0) {
    

if(($this->deal_setting)) {
    $displayed = 1;	
    foreach($this->get_deals_categories as $deals_categories) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img style="width:80px;height:80px" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img style="width:80px;height:80px" src="<?php echo PATH .'images/deals/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="width:80px;height:80px" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } ?>

           <!-- <div class="deal_of_icon">
                <p><?php echo round($deals_categories->deal_percentage); ?>%</p>
                <p>OFF</p>
            </div>-->
        <div class="product-list-desc">
               <?php 
   if(strlen($products->deal_title) > 18){
       echo substr($products->deal_title, 0, 17)."..";
   }
   else{
   echo $products->deal_title; 
   }
   ?>
    <i><i><?php echo round($deals_categories->deal_percentage); ?>% OFF<b><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></b></i></i>
            <!--<div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>-->
        </div>
   </a>
</li>
<?php
     if($displayed >= 3){
         break;
     }
     $displayed++;
     
        }
    }
    
}
 ?>

<li><div class="clearfix"></div></li>

		</ul>

	</div>


	<!-- Weekly Sales -->
	<div class="one-third column">

		<!-- Headline -->
		<h3 class="headline">Related Auction</h3>
		<span class="line margin-bottom-0"></span>
		<div class="clearfix"></div>


		<ul class="product-list discount">
                    
<?php 
if(count($this->get_auction_categories) > 0) {
?>
    <div class="active item">
                <ul class="thumbnails text-center">

<?php if(($this->auction_setting)) {
    $displayed = 1;	
    foreach($this->get_auction_categories as $deals1) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li>
<a href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
<?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png')) { 
$image_url = PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png';
$size = getimagesize($image_url);
?>

<?php if(($size[0] > AUCTION_LIST_WIDTH) && ($size[1] > 130)) { ?>
<img style="width:80px;height:80px" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $deals1->deal_key . '_1' . '.png'; ?>&w=<?php echo AUCTION_LIST_WIDTH; ?>&h=130" alt="<?php echo $deals1->deal_title; ?>" alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" />
                        <?php } else { ?>
<img style="width:80px;height:80px" src="<?php echo PATH .'images/auction/1000_800/'.$deals1->deal_key.'_1'.'.png'?>" />
<?php } ?>

                    <?php /* <img src="<?php echo PATH.'images/auction/220_160/'.$deals1->deal_key.'_1'.'.png';?>"  alt="<?php echo $deals1->deal_title; ?>" title="<?php echo $deals1->deal_title; ?>" border="0" /> */ ?>

                <?php } else { ?>
<?php } ?>      
<div class="product-list-desc">                                                              
<?php $type = "";$categories = $deals1->category_url;?>
<?php echo substr(ucfirst($deals1->deal_title), 0, 20); ?>
    <br />
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

<?php if ($q == 0) { ?>
    <i><?php echo $symbol . " " . number_format($deals1->deal_price); ?></i>                                                                  	
<?php } ?> 

<span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>
</div>
</a>
</li>
<?php
     if($displayed >= 3){
         break;
     }
     $displayed++;
     
        }
    }
 ?>
        </ul>
    </div>
<?php

 }
 ?>
		</ul>

	</div>

</div>
<div class="clearfix"></div>

<section  id="messagedisplay1" style="display:none;">      
    <div class="session_wrap">
        <div class="session_container">
            <div class="success_session">
                <p><span ><?php echo $this->Lang['COMM_POST_SUCC']; ?>.</span></p>
                <div class="close_session_2">
                    <a class="closestatus cur" title="<?php echo $this->Lang['CLOSE']; ?>"  onclick="return closeerr();" >&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
</section>    

<!-- Latest Articles
================================================== -->
<div class="container" >

	<!-- Headline -->
	<div class="sixteen columns" >
		<h3 class="headline">Find Us</h3>
		<span class="line margin-bottom-30"></span>
	</div>

	<!-- Post #1 -->
	<div class="one-third column">
        <?php foreach ($this->get_store_details as $store) { ?>

                <div id="map_main" style="height:306px;"></div>
                <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
                <script type="text/javascript">
                    var latlng = new google.maps.LatLng(<?php echo $store->latitude; ?>,<?php echo $store->longitude; ?>);
                    var myOptions = {
                        zoom: 12,
                        center: latlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        navigationControl: true,
                        mapTypeControl: true,
                        scaleControl: true
                    };

                    var map = new google.maps.Map(document.getElementById("map_main"), myOptions);
                    var marker = new google.maps.Marker({
                        position: latlng,
                        animation: google.maps.Animation.BOUNCE
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: '<b><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->store_name); ?></b><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->address1); ?></p><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->address2); ?></p><p><?php echo $store->city_name; ?>,<?php echo $store->country_name; ?></p>'
                    });

                    google.maps.event.addListener(marker, 'click', function() { 
                        infowindow.open(map, marker);
                    });
                    marker.setMap(map);

                </script>

        <?php } ?>
	</div>

	<!-- Post #2 -->
	<div class="one-third column">
            <?php foreach ($this->get_store_details as $store) { ?> 
                <strong><?php echo ucfirst($store->store_name) ; ?>  </strong>, <br />                 
                <?php /* <h2 class="deal_sub_title store_address_title"><?php echo $this->Lang['ADDRES']; ?></h2> */ ?>                        
                    <!--<h3><?php echo $store->store_name; ?>,</h3>-->
                    <?php echo $store->address1; ?>,<br />
                    <?php echo $store->address2; ?>,    <br />                                
                    <?php echo $store->city_name; ?>, <?php echo $store->country_name; ?>. <br />                  
                    <strong><?php echo $this->Lang['MOBILE']; ?></strong>: <?php echo $store->phone_number; ?>,  <br />
                    <strong><?php echo $this->Lang['WEBSITE']; ?></strong>: <a href="<?php echo $store->website; ?>" target="blank" class="deal_web_link"> <?php echo $store->website; ?></a>    
            <?php } ?> 
	</div>

	<!-- Post #3 -->
	<div class="one-third column">
            <div class="title_outer">
                <h2 class="title_inner2"><?php echo $this->Lang['COMM']; ?></h2>  
            </div>                    
                <div class="fbok_comment wloader_parent" style="min-height:220px;">
                    <i class="wloader_img">&nbsp;</i>
                    <div id="fb-root"></div>
                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;

                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));														
                    </script>
                    <div width="100%" class="fb-comments" data-href="<?php echo PATH . $store->store_url_title.'/'; ?>" data-num-posts="10" ></div>
                </div>  
	</div>

</div>

<div class="margin-top-50"></div>


<div class="container" >
	<div class="sixteen columns">
	
		<!-- Headline -->
		<h3 class="headline"><?php echo $this->Lang['BRANCHES']; ?></h3><span class="line margin-bottom-25"></span><div class="clearfix"></div>

<div class="feature_box">
<?php if (count($this->get_sub_store_details) > 0) { ?>                                                                           
                <div class="slider_wrap">
                    <ul <?php if (count($this->get_sub_store_details) > 2) { ?> id="mycarousel" class="jcarousel-skin-tango2" <?php } else { ?> <?php } ?> >


                     <?php foreach ($this->get_sub_store_details as $stores) { ?>

                            <li>

                                <div class="branch_listing">                                                                                                                        
                                    <div class="branch_listing_img">      
                                        <i class="wloader_img">&nbsp;</i>
                                        <?php if (file_exists(DOCROOT . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png')) { ?>
                                            <a href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>">
                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/merchant/290_215/' . $stores->merchant_id . '_' . $stores->store_id . '.png' ?>&w=150&h=130" alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" />
<?php /* <img  src="<?php echo PATH.'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png';?>"   alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>"> */ ?></a>
<?php } else { ?>
                                            <a href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="<?php echo $stores->store_name; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_stores_list.png&w=150&h=130"   alt="<?php echo $stores->store_name; ?>" title="<?php echo $stores->store_name; ?>" ></a>
<?php } ?>                                                   
                                    </div>
                                    <div class="branch_details">
                                        <a style="font:bold <?php echo $font_size; ?>  arial;<?php echo $font_color; ?> " href="<?php echo PATH . $stores->store_url_title . '/'; ?>" title="<?php echo $stores->store_name; ?>"><?php echo substr(ucfirst($stores->store_name), 0, 100) ; ?></a>
                                        <p style="font:11px/15px arial;color:#666;"><?php echo substr($stores->about_us,0,150); ?></p>
                                        <!--<h3> <a title="<?php echo $stores->address1; ?>"><?php echo $stores->address1; ?></a></h3>-->                                                                                                                                                                                                                                                                                              
                                        <div class="branch_details_but">
                                          <a href="<?php echo PATH . $stores->store_url_title.'/'; ?>" title="<?php echo $this->Lang['VIEW_DETAILS']; ?>"><?php echo $this->Lang['VIEW_DETAILS']; ?></a>                                                                                                                                                      
                                        </div>

                                    </div>                                                                                                                        
                                </div> 
                            </li>
                    <?php } ?>   


                        </ul>
                    </div>                                                                 
            <?php }else{  ?>
                <div class="span12 text-center">
                        <p><?php echo $this->Lang["BRANCH_CURR_NT_AVAIL"]; ?></p>
                </div>
          <?php  } ?>
</div>
		
	
	</div>

</div>
<br />
        
            

<script>
function check_color(){
	$('.sub_cont_inner').css('border','none');
	$('.sub_cont_inner').css('border-bottom','2px solid #404040');
}
</script>

