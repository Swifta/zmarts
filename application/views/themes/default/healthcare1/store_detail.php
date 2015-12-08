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

<script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jquery.jcarousel.min.js "></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").kkCountDowndetail({
            colorText: '#7b7b7b',
            addClass: 'shadow'
        });
    });
</script>

<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>

<!-- Header End -->
<div id="maincontainer">
  <!-- Slider Start-->
  <section class="slider" style="margin-top:-30px">
    <div class="container">
      <div class="flexslider" id="mainslider">
        
      <div class="slides" style="overflow: hidden; position: relative;">
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
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>"/>
    </a>
</li>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <li>
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/healthcare1/banners/banner-<?php echo $i; ?>.jpg" alt="" />
                </li>
<?php
                    }
                }
        }
}
else{?>

    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/healthcare1/banners/banner-1.jpg" alt="" />
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/healthcare1/banners/banner-2.jpg"  alt="" />
            <div class="intro">
                    <h1>Mid season sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
            </div>
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/healthcare1/banners/banner-3.jpg"  alt="" />
    </li>

<!-- display default banners-->
<?php
}
?></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
    </div>
  </section>

  <!-- Slider End-->
  
  <!-- Section Start-->
  <section class="container otherddetails">
    <div class="otherddetailspart">
      <div class="innerclass free">
        <h2>Free shipping</h2>
        All over in world over $200 </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass payment">
        <h2>Easy Payment</h2>
        Payment Gatway support </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass shipping">
        <h2>24hrs Shipping</h2>
        Free For UK Customers </div>
    </div>
    <div class="otherddetailspart">
      <div class="innerclass choice">
        <h2>Over 5000 Choice</h2>
        50,000+ Products </div>
    </div>
  </section>
  <!-- Section End-->
  <div class="container">
    <div class="row">
      <!-- Featured Product-->
      <div class="span6">
                
        <?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";


?>
       <?php 
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0) ) { 
?> 
        <section id="featured" class="row mt40">
          <h1 class="heading1"><span class="maintext">Featured Products</span></h1>
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
     if($displayed >= 4){
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
      </div>
      
      <!-- Latest Product-->
    <?php 
		   		$this->get_product_categories =  $this->get_recent_product_categories;
		   ?>
           <?php 
if((count($this->get_product_categories)>0) ) { 
?> 
      <div class="span6">
        <section id="latest" class="row mt40">
          <h1 class="heading1"><span class="maintext">Latest Products</span></h1>
          <ul class="thumbnails">
              <?php if((count($this->get_product_categories)>0) ) {
    $displayed = 1;	
    foreach($this->get_product_categories as $best) {  
     $symbol = CURRENCY_SYMBOL;
    
 ?> 
            <li class="span3">
                <a class="prdocutname"  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>"
                 
                 title="<?php echo $best->deal_title; ?>"><?php 
                 
                 echo common::truncate_item_name($best->deal_title); ?></a>
              <div class="thumbnail">
                <span class="new tooltip-test">New</span>
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
     if($displayed >= 4){
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
      </div>
    </div>
  </div>
  
  <section id="popularbrands" class="container mt0">
    <div class="row">
      <div class="span6">
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
  </section>
  
  <!-- Popular Brands-->
  <section id="popularbrands" class="container mt0">
    <div class="row">
      <div class="span9">
        <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
         <?php 
if(count($this->get_product_categories) > 0) {
?>
        <div class="brandcarousalrelative">
          
          <ul id="brandcarousal">
                <?php if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?> 
            <li style="border:none;margin-top: 5px;">
                <a class="prdocutname" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
             <?php echo common::truncate_item_name($best->deal_title); ?></a>
          <div class="thumbnail">
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
            
            
              
      </li>
<?php
     if($displayed >= 8){
         break;
     }
     $displayed++;
     
        }
    }
           ?>
          </ul>
     <div class="clearfix"></div>
          <a id="prev" class="prev" href="#">&lt;</a>
          <a id="next" class="next" href="#">&gt;</a>
        </div>
        
                <?php

 } 
   ?>  
      </div>
      <div class="span3">
<!--        <div class="sidewidt">
          <h1 class="heading1"><span class="maintext">Testimonials</span></h1>
          <div class="flexslider" id="testimonialsidebar">
            <ul class="slides">
              <li>
                " Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>
                <span class="pull-right orange">By : Themeforest</span>
              </li>
              <li>
                " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently ."<br>
                <span class="pull-right orange">By : Envato</span>
              </li>
              <li>
                " Lorem Ipsum is simply dummy text of the printing and  industry. Lorem  has been the industry's standard dummy text ever since the 1500s."<br>
                <span class="pull-right orange">By : Themeforest</span>
              </li>
              <li>
                " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently."<br>
                <span class="pull-right orange">By : Envato</span>
              </li>
            </ul>
          </div>
        </div>-->
      </div>
    </div>
  </section>
</div>
<!-- /maincontainer -->

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

<script type="text/javascript">
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
</script>
