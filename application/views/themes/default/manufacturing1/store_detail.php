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


<div class="wrapper">
    <div class="container">
        <div class="row ">

            <!-- SLIDER -->
            <div class="span9 slider">
                <div class="slider-slides">
<?php
$font_color = "";
$bg_color ="";
$font_size ="";

    
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
<div class="slides">                                                                               
    <a href="<?php echo $banner_link; ?>"  title="<?php echo $banner_link; ?>">
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" 
             data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
    </a>
</div>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <div class="slides">
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/manufacturing/banners/<?php echo $i; ?>.jpg" alt="" />
                </div>
<?php
                    }
                }
        }
}
else{?>

    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/manufacturing/banners/1.jpg" alt="" />
    </div>
    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/food/manufacturing/2.jpg" alt="" />
    </div>
    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/food/manufacturing/3.jpg" alt="" />
    </div>

<!-- display default banners-->
<?php
}
?>
    </div>
    <a href="#" class="next"></a>
    <a href="#" class="prev"></a>
    <div class="slider-btn"></div>
</div>
<!-- SLIDER -->

            <!-- SPECIAL-OFFER -->
            <div class="span3">
            <?php 
            $ads_check = "";
            if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {
		 ?>        
					<?php for ($i = 1; $i <= 2; $i++) { ?>
										<?php if (file_exists(DOCROOT . 'images/merchant/ads/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png')) {
											$ads_link="";
											if($m->ads_1_link !="" || $m->ads_2_link !="" || $m->ads_3_link !="") {  $ads_check = 1;
											if($i==1) { $ads_link = $m->ads_1_link; } else if($i==2) { $ads_link = $m->ads_2_link; } else if($i==3) { $ads_link = $m->ads_3_link; } } ?>
                <div class="offers">
                    <figure>
                            <a class="img-caption" href="<?php echo $ads_link; ?>" title="<?php echo $ads_link; ?>">
                              <img alt="" src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>"/>
                            </a>
                    </figure>
                </div>
                    <?php }else{?>
                <div class="offers">
                    <figure>
				<img src="<?php echo PATH; ?>bootstrap/themes/images/manufacturing/ads/<?php echo $i; ?>.jpg" alt="" />
			</figure>
                </div>
                    <?php }}?> 
            <?php  } } ?>

            </div>
            <!-- SPECIAL-OFFER -->

        </div>
    </div>
</div>

<!-- PRODUCT-OFFER -->
<div class="product_wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2>Best Seller <span></span></h2>
            </div>
        </div>
        <div class="row">
<?php 
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0)) { 
    

if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/products/1000_800/'. $best->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $best->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <span><?php echo $symbol . " " . number_format($best->deal_value); ?></span>
                <h4>
                   <?php 
                   if(strlen($best->deal_title) > 18){
                       echo substr($best->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $best->deal_title; 
                   }
                   ?>
                </h4>
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
                <div class="icon">
                    <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" class="one tooltip" title="Add to cart"></a>
                    <a href="#" onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
                </div>
            </div>
        </div>

    </div>
<?php
     if($displayed >= 8){
         break;
     }
     $displayed++;
     
        }
    }
}
 ?>

        </div>
    </div>
</div>
<!-- PRODUCT-OFFER -->



<!-- DEALS -->
<div class="product_wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2>Related Deals <span></span></h2>
            </div>
        </div>
        <div class="row">
            
            
                    
<?php 
if(count($this->get_deals_categories) > 0) {
    

if(($this->deal_setting)) {
    $displayed = 1;	
    foreach($this->get_deals_categories as $deals_categories) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/deals/1000_800/'. $deals_categories->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/deals/1000_800/'.$deals_categories->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
            
    <div class="span3 product">

        <div>
            <figure>
                <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $deals_categories->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="link"></a>
                </div>
            </figure>
            <div class="detail">
                <span><small><?php echo round($deals_categories->deal_percentage); ?>% OFF</small><br/><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></span>
                <h4>
                   <?php 
                   if(strlen($deals_categories->deal_title) > 18){
                       echo substr($deals_categories->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $deals_categories->deal_title; 
                   }
                   ?>
                </h4>
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
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
                <div class="icon">
                    <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="one tooltip" title="Buy Now"></a>
                    <a href="#" onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" class="two tooltip " title="Add to wish list"></a>
                    <a href="#" onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" class="three tooltip" title="Add to compare"></a>
                </div>
            </div>
        </div>

    </div>

<?php
     if($displayed >= 4){
         break;
     }
     $displayed++;
     
        }
    }
    
}
 ?>

        </div>
    </div>
</div>
<!-- DEALS -->


<!-- AUCTION -->
<div class="product_wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2>Related Auction <span></span></h2>
            </div>
        </div>
        <div class="row">
            
            
                    
<?php 
if(count($this->get_auction_categories) > 0) {
    

if(($this->auction_setting)) {
    $displayed = 1;	
    foreach($this->get_auction_categories as $deals1) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
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
     if($displayed >= 4){
         break;
     }
     $displayed++;
     
        }
    }
    
}
 ?>

        </div>
    </div>
</div>
<!-- AUCTION -->


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


<!-- CATEGORIES -->
<div class="categories-wrap">
    <div class="container">
        <div class="row">

            <div class="span5">

                    <figure>
        <?php foreach ($this->get_store_details as $store) { ?>

                <div id="map_main" style="height:306px;"></div>
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
                    </figure>

            </div>

            <div class="span2">

                    <figure>
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
                    </figure>

            </div>

            <div class="span5">
                    <figure>
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
                    </figure>
            </div>

        </div>
    </div>
</div>
<!-- CATEGORIES -->

<div class="clearfix" style="margin-top: 10px;"></div>
<!-- BRANCHES -->
<div class="clients-wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2><?php echo $this->Lang['BRANCHES']; ?><span></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="span12 clients">
<?php if (count($this->get_sub_store_details) > 0) { ?>                 
                <ul <?php if (count($this->get_sub_store_details) > 2) { ?> id="carousel" class="elastislide-list clearfix" <?php } else { ?> <?php } ?> >
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
             <?php }else{  ?>
                <p class="text-center" style="text-align: center"><?php echo $this->Lang["BRANCH_CURR_NT_AVAIL"]; ?></p>
          <?php  } ?>               
            </div>
        </div>
    </div>
</div>
<!-- BRANCHES -->