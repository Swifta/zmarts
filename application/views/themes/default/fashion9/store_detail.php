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
$(function() {
$(".slidetabs").tabs(".images > div", {
	effect: 'fade',
	fadeOutSpeed: "medium",
	rotate: true
}).slideshow();
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>



<!-- banner start-->

<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
            <ul class="slides">

<?php 
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
<li>                                                                                
    <a href="<?php echo $banner_link; ?>"  title = "<?php echo $banner_link; ?>">
        <img style="width:1280px;height:425px" alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>"/>
    </a>
</li>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <li>
                        <img style="width:1280px;height:425px" src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-<?php echo $i; ?>.jpg" alt="" />
                </li>
<?php
                    }
                }
        }
}
else{?>

    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-1.jpg" alt="" />
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-2.jpg" alt="" />
            <div class="intro">
                    <h1>Mid season sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
            </div>
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-3.jpg" alt="" />
    </li>

<!-- display default banners-->
<?php
}
?>
            </ul>
    </div>
</section>
            <!-- banner end-->
            <?php /*if(count($this->merchant_personalised_details)==0 || $banner_check==0){?>
            <div class="banner">
                <div class="slider_home">
                    <img alt="Banner image" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME ?>/images/fashion_banner.png"/>
                </div>
            </div>
            <?php }*/?>
            
            
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
<section>
<?php 
/*
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
        <li>
            <div class="advertice_inner">
                <a href="<?php echo $ads_link; ?>" title="<?php echo $ads_link; ?>">
                  <img alt="" src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>"/>  
                </a>
            </div>
        </li>
        <?php }else{?>
                                    <li><img alt="Banner image" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME ?>/images/fashion_add.png"/></li>
        <?php }}?> 

    </ul>  
</div>
<?php  } } */?>
</section>
<!--end of for adverts-->
<!--<section class="header_text">
        We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
        <br/>Don't miss to use our cheap abd best bootstrap templates.
</section>-->

<section class="main-content" style="<?php echo $bg_color; ?>">
<div class="row">
    <div class="span12">
     <div class="row">
            <div class="span12">
                    <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Best <strong>Seller</strong></span></span></span>
                            <span class="pull-right">
                                    <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                            </span>
                    </h4>
                    <div id="myCarousel" class="myCarousel carousel slide">
                        <div class="carousel-inner">
<?php 
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0)) { 
?>
    <div class="active item">
                <ul class="thumbnails text-center">

<?php if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $best->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $best->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" 
               title="<?php echo $best->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $best->deal_title; ?></a>
            <br/>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Add to cart</a>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
            <p class="price"><?php echo $symbol . " " . number_format($best->deal_value); ?></p>
        </div>
</li>
<?php
     if($displayed >= 5){
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
 
 if((count($this->best_seller)>5) || (count($this->get_product_categories)>0)) {
 ?>
    <div class="item">
                <ul class="thumbnails text-center">

<?php 
    if(count($this->best_seller)>5) {

    $displayed = 1;
    $start = 1;
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     if($start > 5){
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
            <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $best->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $best->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" 
               title="<?php echo $best->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $best->deal_title; ?></a>
            <br/>
            <div class="cmpr">
            <a onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            </div>
            <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="Add to cart" class="category btn btn-success">Add to cart</a>
             <div class="wish">
            <a onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
            </div>
            <p class="price"><?php echo $symbol . " " . number_format($best->deal_value); ?></p>
        </div>
</li>
<?php
        $displayed++;
     }
     if($displayed > 5){
         break;
     }
     
     $start++;
     
            }
        }
?>
                </ul>
    </div>
<?php
 }
 ?>
                        </div>
                    </div>
                
                
                
                
                
                    </div>
                </div>
        <br/>
        
        
        <!--related products below-->
        
        <div class="row">
            <div class="span12">
                    <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Related <strong>Products</strong></span></span></span>
                            <span class="pull-right">
                                    <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                            </span>
                    </h4>
                    <div id="myCarousel-2" class="myCarousel carousel slide">
                        <div class="carousel-inner">
<?php 
if(count($this->get_product_categories) > 0) {
?>
    <div class="active item">
                <ul class="thumbnails text-center">

<?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>
    </a>
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
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $best->deal_value; ?></p>-->
            </div>
            
            <a class="pro_tit" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $products->url_title . '.html'; ?>" 
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
     if($displayed >= 5){
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
 
 if(count($this->get_product_categories) > 5) {
 ?>
    <div class="item">
                <ul class="thumbnails">

<?php 
    if(count($this->get_product_categories) > 5) {

    $displayed = 1;
    $start = 1;
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     if($start > 5){
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>
    </a>
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
        $displayed++;
     }
     if($displayed > 5){
         break;
     }
     
     $start++;
     
            }
        }
?>
                </ul>
    </div>
<?php
 }
 ?>
                        </div>
                    </div>
                
                
                
                
                
                    </div>
                </div>
        
        
        <!--related deals below-->
        
        <div class="row">
            <div class="span12">
                    <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Related <strong>Deals</strong></span></span></span>
                            <span class="pull-right">
                                    <a class="left button" href="#myCarousel-3" data-slide="prev"></a><a class="right button" href="#myCarousel-3" data-slide="next"></a>
                            </span>
                    </h4>
                    <div id="myCarousel-3" class="myCarousel carousel slide">
                        <div class="carousel-inner">
<?php 
if(count($this->get_deals_categories) > 0) {
?>
    <div class="active item">
                <ul class="thumbnails text-center">

<?php if(($this->deal_setting)) {
    $displayed = 1;	
    foreach($this->get_deals_categories as $deals_categories) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/deals/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
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
     if($displayed >= 5){
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

 if(count($this->get_deals_categories) > 5) {
 ?>
    <div class="item">
                <ul class="thumbnails text-center">

<?php 
    if(count($this->get_deals_categories) > 5) {

    $displayed = 1;
    $start = 1;
    foreach($this->get_deals_categories as $deals_categories) {  
     $symbol = CURRENCY_SYMBOL;
     if($start > 5){
 ?>
<li class="span3">
        <div class="product-box">
            <span class="sale_tag"></span>
            <p>
   <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } else { ?>
         <img src="<?php echo PATH .'images/deals/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
        <?php } ?>
    </a>
            </p>
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
        $displayed++;
     }
     if($displayed > 5){
         break;
     }
     
     $start++;
     
            }
        }
?>
                </ul>
    </div>
<?php
 }
 ?>
                        </div>
                    </div>
                
                
                
                
                
                    </div>
                </div>
        <br />
        
        <!--end of deal-->

        
        
        <div class="row">
            <div class="span12">
                    <h4 class="title">
                            <span class="pull-left"><span class="text"><span class="line">Related <strong>Auction</strong></span></span></span>
                            <span class="pull-right">
                                    <a class="left button" href="#myCarousel-4" data-slide="prev"></a><a class="right button" href="#myCarousel-4" data-slide="next"></a>
                            </span>
                    </h4>
                    <div id="myCarousel-4" class="myCarousel carousel slide">
                        <div class="carousel-inner">
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
                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . $deals1->deal_value; ?></span></p>                                                                    


<?php } ?>
<?php if ($q == 0) { ?>
                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . $deals1->deal_price; ?></span></p>                                                                    	
<?php } ?>     
                    <br />
                    <?php /*<a class="buy_it list_buy_it bid_it" href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $this->Lang['BID_NOW1']; ?>"><?php echo $this->Lang['BID_NOW1']; ?></a> */ ?>                                                                   
                </div>
            </div>
</li>
<?php
     if($displayed >= 5){
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
                        </div>
                    </div>
 
                    </div>
                </div>
  <!--end of Aution-->
        
        
            </div>
        </div>
</section>

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

            <?php /* if($ads_check==0){?>
            <div class="empty_add">
                <ul>
                    <li><img alt="Banner image" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME ?>/images/fashion_add.png"/></li>
                    <li><img alt="Banner image" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME ?>/images/fashion_add.png"/></li>
                    <li><img alt="Banner image" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME ?>/images/fashion_add.png"/></li>
                </ul>
            </div>
            <?php }*/?>
<!--<section class="header_text">
<?php foreach ($this->get_store_details as $store) { ?> 
    <strong><?php echo ucfirst($store->store_name) ; ?>  </strong>                  
    <?php /* <h2 class="deal_sub_title store_address_title"><?php echo $this->Lang['ADDRES']; ?></h2> */ ?>                        
        <h3><?php echo $store->store_name; ?>,</h3>
        ,<?php echo $store->address1; ?>,
        <?php echo $store->address2; ?>,                                    
        <?php echo $store->city_name; ?>, <?php echo $store->country_name; ?>. <br />                  
        <strong><?php echo $this->Lang['MOBILE']; ?></strong>: <?php echo $store->phone_number; ?>,  <br />
        <strong><?php echo $this->Lang['WEBSITE']; ?></strong>: <a href="<?php echo $store->website; ?>" target="blank" class="deal_web_link"> <?php echo $store->website; ?></a>    
<?php } ?>
</section>-->
<div class="row feature_box">
    <div class="span5">
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
    <div class="span3">
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
    <div class="span4">

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

<div class="row feature_box">
<?php if (count($this->get_sub_store_details) > 0) { ?>     
                <h2 class="inner_commen_title text-center" style="text-transform:uppercase;"> <?php echo $this->Lang['BRANCHES']; ?><span class="right_top_ae">&nbsp; </span></h2>                                                                        
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
                <h2 class="inner_commen_title text-center" style="text-transform:uppercase;"> <?php echo $this->Lang['BRANCHES']; ?><span class="right_top_ae">&nbsp; </span></h2>
                <div class="span12 text-center">
                        <p><?php echo $this->Lang["BRANCH_CURR_NT_AVAIL"]; ?></p>
                </div>
          <?php  } ?>
</div>
    
        
        
<!--</section>-->
            
            
            
<div class="store_subscribe_part_outer" style="background:white;">
    <div class="store_subscribe_part" style="background:white;">
        <div class="store_subscribe_part_inner" style="background:white;">
            <h2>Subscribe</h2>
            <p>Subscribe to receive our news everyday !</p>
            <div class="sub_cont">
                <div class="sub_cont_inner">
                    <input type="text" name="store_subscriber" id="store_subscriber1"  placeholder="Enter Email Address" onkeypress="return check_color();" />
                     <input type="submit" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');" value=""/>
                    <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
                </div>  
                <em id="email_subscriber_error1"></em>
            </div>
        </div>
    </div>    
</div>

<script>
function store_subscriber_validate1(store_url)
{
	var email = $("#store_subscriber1").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var x=0;
	if(email == '') {
			$('.sub_cont_inner').css('border','1px solid red');
			x++;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			x++;
			$('.sub_cont_inner').css('border','1px solid red');
		}else {
			x=0;
			$('#email_subscriber_error1').html('');
		}
		if(x==0){
		var url= Path+'users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('.sub_cont_inner').css('border','1px solid red');
				$("#store_subscriber1").val('');
				$("#store_subscriber1").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				return false;
			}
			add_store_email_subscriber(email,store_url);
			
		});
	}
	
}
function add_store_email_subscriber(email,store_url)
{
	var store_id=$("#subscriber_store_id1").val();
	var url= Path+'stores/user_subscriber_signup/?email='+email+'&store_id='+store_id+'&store_url='+store_url;
	$.ajax(
	{
		type:'POST',
		url:url,
		cache:false,
		async:true,
		global:false,
		dataType:"html",
		success:function(check)
		{
			window.location.href=Path+store_url+'/';
			
		},
		error:function()
		{
			
		}
	});
}
function check_color(){
	$('.sub_cont_inner').css('border','none');
	$('.sub_cont_inner').css('border-bottom','2px solid #404040');
}
</script>

