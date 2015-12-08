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

<!--<script type="text/javascript" src="<?php //echo PATH; ?>themes/<?php //echo THEME_NAME; ?>/js/jquery.jcarousel.min.js "></script>
<script type="text/javascript" src="<?php //echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>-->

<div id="maincontainer" src="..\zmarttt\zmarts_new\images\zmarts.jpg">
  <div class="container">
    <div class="row">
      <div class="span9">
        <!-- Slider Start-->
        <section class="slider">
          <div id="sliderindex5" >
           <?php 
$banner_check ="";
if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
                $tabs=0;
                for ($i = 1; $i <= 4; $i++) {
                    if (file_exists(DOCROOT . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png')) { 
                            $banner_link="";

                            if($m->banner_1_link !="" || $m->banner_2_link !="" || $m->banner_3_link !="" || $m->banner_4_link !="") { 
                                $banner_check = 1;
                                if($i==1) { 
                                    $banner_link = $m->banner_1_link; 
                                } else if($i==2) { 
                                    $banner_link = $m->banner_2_link; 
                                } else if($i==3) { 
                                    $banner_link = $m->banner_3_link; 
                                }
                                else if($i==4) { 
                                    $banner_link = $m->banner_4_link; 
                                }
                                
                            }
?>
        <div>
              <img src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>"/>
            </div>       
         
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <div>
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/entertainment1/banners/banner-<?php echo $i; ?>.jpg" alt="" />
                </div>
<?php
                    }
                }
        }
}
else{?>

    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/entertainment1/banners/banner-1.jpg" alt="" />
    </div>
    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/entertainment1/banners/banner-2.jpg" alt="" />
    </div>
    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/entertainment1/banners/banner-3.jpg" alt="" />
    </div>

<!-- display default banners-->
<?php
}
?>
          </div>
          <div id="pager" class="sliderindex5pager">
            <a href="#" class=""><span></span></a>
            <a href="#" class=""><span></span></a>
            <a href="#" class=""><span></span></a>
            <a href="#" class=""><span></span></a>
          </div>
        </section>
        <!-- Slider End-->
        <!-- Featured Product-->
        
        <?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";


?>
        
        <?php 
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0)) { 
?> 
        <section id="featured" class="row mt60">
            
          <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
          <ul class="thumbnails">
              <?php if((count($this->best_seller)>0) || strnlen($this->best_seller >10)) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
    
 ?> 
            <li class="span3">
              <a class="prdocutname"  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>"
                 
                 title="<?php echo $best->deal_title; ?>"><?php 
                 
                 echo common::truncate_item_name($best->deal_title); ?></a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img style="margin-left:50px;" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img style="margin-left:50px; height: 200px;" src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="margin-left:50px;height: 200px;" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } ?>
            
          
               
            </a>
                
                <div class="shortlinks" style="margin-top: -20px; background-color: #3a3c3c; color: white;">
                 <a class="details"  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#" onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">wishlist</a>
              <a class="compare" href="#" onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">compare</a>
            <div class="seller_listing_content">
                
                <div class="ratings" style=" margin-top: -65px;">

<?php $avg_rating = $best->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
            </div>   
                </div>
                <div class="pricetag">
                  <span class="spiral"></span><a class="productcart"  href="<?php echo PATH . $best->store_url_title. '/auction/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>">ADD TO CART</a>
                  <div class="price">
                    <div class="pricenew"><?php echo $symbol . " " . number_format($best->deal_value); ?></div>
                  </div>
                </div>
              </div>
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
        </section>
        <?php
 }
 ?>
        <!-- Popular Brands-->
 
        <section id="popularbrands" class="mt0">
            
          <h1 class="heading1"><span class="maintext">Related Auctions</span><span class="subtext"> See Our Related Auction Brands</span></h1>
          <div class="brandcarousalrelative">
            <?php 
if(count($this->get_auction_categories) > 0) {
?>
              <ul id="brandcarousal">
   <?php if(($this->auction_setting)) {
    $displayed = 1;	
    foreach($this->get_auction_categories as $deals1) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>

              <li class="span3" style="margin:0px; border:none;">
              <a class="prdocutname"  href="<?php echo PATH . $deals1->store_url_title . '/product/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>"
                 
                 title="<?php echo $deals1->deal_title; ?>"><?php 
                 
                 echo common::truncate_item_name($deals1->deal_title); ?></a>
              <div class="thumbnail">
                <span class="sale tooltip-test">Sale</span>
                <a class="thumbnail" href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
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

<?php } ?>

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
                                                                                                                                                       
                      <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down"></span>                                                                
               


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
<!--                <div class="shortlinks" style="margin-top: -20px; background-color: #3a3c3c; color: white;">
                 <a class="details"  href="<?php //echo PATH . $deals1->store_url_title . '/product/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#" onclick="addToWishList('<?php //echo $deals1->deal_id; ?>','<?php // addslashes($deals1->deal_title); ?>');" title="<?php //echo $this->Lang['ADD_WISH_LIST'];?>">wishlist</a>
              <a class="compare" href="#" onclick="addToCompare('<?php //echo $deals1->deal_id; ?>','','detail');" title="<?php //echo $this->Lang['ADD_COMPARE']; ?>">compare</a>
            
                </div>-->

                <div class="pricetag">
                  <span class=""></span><a class="productcart"  href="<?php echo PATH . $deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>">BID NOW</a>
                  <div class="price">
                      
                    <div class="pricenew"><?php echo $symbol . " " . number_format($deals1->deal_value); ?></div>
                  </div>
                  
                </div>
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
<!--                    <p style="font:12px arial;color:#111; font-weight: bold;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                    <p style="font:12px arial;color:#111;font-weight: bold;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . $deals1->deal_value; ?></span></p>                                                                    -->


<?php } ?>
<?php if ($q == 0) { ?>
<!--                    <p style="font:12px arial;color:#111;font-weight: bold;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                    <p style="font:12px arial;color:#111;font-weight: bold;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . $deals1->deal_price; ?></span></p>                                                                    	-->
<?php } ?>     
                    <br />
                    <?php /*<a class="buy_it list_buy_it bid_it" href="<?php echo PATH .$deals1->store_url_title. '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $this->Lang['BID_NOW1']; ?>"><?php echo $this->Lang['BID_NOW1']; ?></a> */ ?>                                                                   
                </div>
<span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>
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
              <?php

 }
 ?>
            <div class="clearfix"></div>
                     
            
            <a id="prev" class="prev" href="#">&lt;</a>
            <a id="next" class="next" href="#">&gt;</a>
          </div>
   
        </section>
        
        <div class="row feature_box">
    <div class="span4">
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
    </div>
    <div class="span2">
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
    <div class="span3">

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
                     <h2 class="inner_commen_title" style="text-transform:uppercase;"> <?php echo $this->Lang['BRANCHES']; ?><span class="right_top_ae">&nbsp; </span></h2>                                                                        
    <div class="span5">
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
<!--    <div class="span3">
           
    </div>
    <div class="span4">

                          
                      
    </div>-->
 <?php }else{  ?>
                <h2 class="inner_commen_title" style="text-transform:uppercase;"> <?php echo $this->Lang['BRANCHES']; ?><span class="right_top_ae">&nbsp; </span></h2>
                <div class="span12">
                        <p style="margin-left:-20px;"><?php echo $this->Lang["BRANCH_CURR_NT_AVAIL"]; ?></p>
                </div>
          <?php  } ?>
                
                
</div>
      </div>
      <aside class="span3">
        <!-- Category-->
        <section id="latest" class="row">
     
        <div class="sidewidt">
          <h2 class="heading2"><span>Categories</span></h2>
          <ul class="nav nav-list categories">
              
               <li <?php
				        if (isset($this->is_home)) {
					        echo "class='active'";
				        }
				        ?>>

				        <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?>
				        </a>
                        
                        
                        
                    </li>
               <?php if ($this->product_setting) { ?>
                    <li class="<?php if (isset($this->is_product)){ echo "";} ?>">
                        <a class="<?php if (isset($this->is_product)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>"><?php echo $this->Lang['PRODUCTS']; ?></a></li>
                           
               <?php }?>
                  <?php if ($this->deal_setting) { ?>
                    <li class="<?php if (isset($this->is_todaydeals)){ echo "";} ?>">
                        <a class="<?php if (isset($this->is_todaydeals)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>"><?php echo $this->Lang['DEALS']; ?></a></li>
                          
                          <?php }?>       
                           
                              <?php if ($this->auction_setting) { ?>
                    <li class="<?php if (isset($this->is_auction)){ echo "";} ?>">
                        <a class="<?php if (isset($this->is_auction)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>"><?php echo $this->Lang['AUCTION']; ?></a></li>
         
                          <?php }?> 
                              
               <?php if ($this->blog_setting) { ?>
                        <li <?php
	        if (isset($this->is_blog)) {
		        echo "class='active'";
	        }
	        ?>
                            accesskey=""><a href="<?php echo PATH; ?>blog" title="<?php echo $this->Lang['BLOG']; ?>">
		        <?php echo $this->Lang['BLOG']; ?>
                            </a></li>

                     <?php } ?>            
              
          </ul>
        </div>           
        <!-- Best Seller-->
          <?php 
if(count($this->get_product_categories) > 0) {
?>
        <div class="sidewidt">
          <h2 class="heading2"><span>Best Seller</span></h2>
          <ul class="bestseller">
               <?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
            <li>
                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <img  width="50" height="50" 
                          
                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>      
                          
           <img style="margin-left:-10px;" src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="margin-left:-10px;" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>               
                          
                          
                          <?php echo $products->deal_title; ?></a>
              
              <a class="productname" href="<?php //echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php //echo $products->deal_title; ?>"> <?php //echo $products->deal_title; ?></a>
<!--              <span class="procategory">Women Accessories</span>-->
              <span class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></span>
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
        <!-- Testimonial-->
<!--        <div class="sidewidt">
        
        </div>-->
        <!-- BMust Have-->
        <?php 
if(count($this->get_product_categories) > 0) {
?>
        <div class="sidewidt mt20">
          <h2 class="heading2"><span>Best Deals</span></h2>
          <div class="flexslider" id="mainsliderside">
            <ul class="slides">
              <?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
              <li>
               <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <img  width="50" height="50" 
                   <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>      
                          
           <img style="margin-left:5px;" src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="margin-left:5px;" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>               
                          
                          
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
          
        </div>
        <?php

 } 
   ?> 
      </aside>
    </div>
  </div>
</div>


<!-- banner start-->


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

?>


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

  


<!--</section>-->
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

<!--<script type="text/javascript">
$(document).ready(function(){
jQuery.noConflict();
jQuery("body").kkCountDown({
    colorText:'#444!important',
    colorTextDay:'#444!important',
    addClass : 'shadow',
    dayText:"<?php echo $this->Lang['DAY_TEXT']; ?>",
    daysText:"<?php echo $this->Lang['DAYS_TEXT']; ?>"
});
});
</script>-->
