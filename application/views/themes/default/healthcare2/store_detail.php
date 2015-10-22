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

</script>
<div id="maincontainer">
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
        <div>
              <img src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>"/>
            </div>       
         
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <div>
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-<?php echo $i; ?>.jpg" alt="" />
                </div>
<?php
                    }
                }
        }
}
else{?>

    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-1.jpg" alt="" />
    </div>
    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-1.jpg" alt="" />
    </div>
    <div>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-1.jpg" alt="" />
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
              <?php if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?> 
            <li class="span3">
              <a class="prdocutname"  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>"
                 
                 title="<?php echo $best->deal_title; ?>"><?php echo $best->deal_title; ?></a>
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
                <div class="shortlinks">
                 <a class="details"  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#" onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
              <a class="compare" href="#" onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">&nbsp;</a>
            
                </div>
                <div class="pricetag">
                  <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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
            
          <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
          <div class="brandcarousalrelative">
            <ul id="brandcarousal">
   
               <?php 
if(count($this->get_product_categories) > 0) {
?>
        <div class="sidewidt">
<!--          <h2 class="heading2"><span>Best Seller</span></h2>-->
          <ul class="bestseller">
               <?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
              <li><a> <img  width="50" height="50" 
                          
                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>      
                          
           <img style="margin-left:5px;" src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="margin-left:5px;" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>               
                          
                          
                          </a></li>
           
              <?php
     if($displayed >= 5){
         break;
     }
     $displayed++;
     
        }
    }
 ?> 
            </ul>
            <div class="clearfix"></div>
                   <?php

 } 
   ?>   
            
            <a id="prev" class="prev" href="#">&lt;</a>
            <a id="next" class="next" href="#">&gt;</a>
          </div>
   
        </section>
      </div>
      <aside class="span3">
        <!-- Category-->
        <section id="latest" class="row">
    
        <div class="sidewidt">
          <h2 class="heading2"><span>Categories</span></h2>
          <ul class="nav nav-list categories">
              
            <li>
              <a href="category.html">Men Accessories</a>
            </li>
            <li>
              <a href="category.html">Women Accessories</a>
            </li>
            <li>
              <a href="category.html">Electronics </a>
            </li>
            <li>
              <a href="category.html">Computers </a>
            </li>
            <li>
              <a href="category.html">Home and Furniture</a>
            </li>
            <li>
              <a href="category.html">Others</a>
            </li>
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
                <a> <img  width="50" height="50" 
                          
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
              
              <a class="productname" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>"> <?php echo $best->deal_title; ?></a>
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
        <div class="sidewidt">
          <h2 class="heading2"><span>Testimonials</span></h2>
          <div class="flexslider" id="testimonialsidebar">
            <ul class="slides">
              <li>
                " Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s."<br>
                <span class="pull-right orange">By : Themeforest</span>
              </li>
              <li>
                " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker   of Lorem Ipsum."<br>
                <span class="pull-right orange">By : Envato</span>
              </li>
              <li>
                " Lorem Ipsum is simply dummy text of the printing and  industry. Lorem  has been the industry's standard dummy text ever since the 1500s."<br>
                <span class="pull-right orange">By : Themeforest</span>
              </li>
              <li>
                " It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker."<br>
                <span class="pull-right orange">By : Envato</span>
              </li>
            </ul>
          </div>
        </div>
        <!-- BMust Have-->
        <div class="sidewidt mt20">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainsliderside">
            <ul class="slides">
              <li>
                <img src="img/product1a.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2a.jpg" alt="" />
              </li>
            </ul>
          </div>
        </div>
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

