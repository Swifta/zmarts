<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<style>
    
    .nop{
        
       margin-left:150px;
    }
</style>


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
 function mycarousel_initCallback(carousel) {
        // Pause autoscrolling if the user moves with the cursor over the clip.
        carousel.clip.hover(function() {
            carousel.stopAuto();
        }, function() {
            carousel.startAuto();
        });
    }
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>
<!--Carousel Script-->
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel2').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel3').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel4').jcarousel({
            wrap: 'circular'
        });
    });

</script>

<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel5').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel6').jcarousel({
            wrap: 'circular'
        });
    });
</script>

<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?></a>
<!--            <a href="#">Home</a>-->
          <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>"><?php echo $this->Lang["AUCTION"]; ?></a></li>
<!--        <li class="active">Category</li>-->
<div class="btn-group pull-right" style="margin-top: -4px;">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
       
        <!-- Sidebar End-->
        <!-- Category-->
         <?php
$font_color = "#000000";
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
        <div class="span12">          
          <!-- Category Products-->
          <section id="category">
               
            <div class="row">
              <div class="span12">
               <!-- Sorting-->
<!--                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>-->
               <!-- Category-->
            <section id="categorygrid">
                  <ul class="thumbnails grid">
                      <?php if (count($this->all_auction_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_auction_list as $products){
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/auction/1000_800/'. $products->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
   
                      <li class="span3">
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
                            
                        <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="link"></a>
                </div>
                <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
<!--                        <a href="#"><img alt="" src="img/product1.jpg"></a>-->
                        <div class="shortlinks" style="margin-top:-20px;">
                         <a class="details"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
                          
                          <a class="compare" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span>
                          <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Buy Now" class="productcart">Buy now</a>
                          <div class="price">
                           <?php echo $symbol . " " . number_format($products->deal_value); ?>
                          </div>
                        </div>
                         
<!--                     <div class="auction_timer" style="background-color: #fff;">                                                                                                                                           
                      <span time="<?php echo $products->enddate; ?>" class="kkcoun margint-down" ></span>        
                      <p><?php echo $this->Lang['AUC_CLOSE_T']; ?>: <?php echo date('d-m-Y h:i:s A', $products->enddate); ?></p>
                </div>-->
                        
                      </div>
                             <div class="ratings">

<?php $avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                            
                           <?php $q = 0;
                                                    foreach ($this->all_payment_list as $payment) {
                                                        ?>
                                                        <?php
                                                        if ($payment->auction_id == $products->deal_id) {
                                                            $firstname = $payment->firstname;
                                                            $transaction_time = $payment->transaction_date;
                                                            $q = 1;
                                                        }
                                                    }
                                                    ?>
                                <?php if ($q == 1) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . number_format($products->deal_value); ?></span></p>                                                                    


                                <?php } ?>
                                <?php if ($q == 0) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . number_format($products->deal_price); ?></span></p>                                                                    	
                                <?php } ?> 
                    </li>
                   
                   
              
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
                   
                   
                   
                    
                  </ul>
                  <ul class="thumbnails list row">
                                       <?php if (count($this->all_auction_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_auction_list as $products){
			$symbol = CURRENCY_SYMBOL; ?>
<?php
$image_src_instance = "";
$image_src_realsize_instance = "";
if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { 
    $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
    $size = getimagesize($image_url); 
        //($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)
    if(true) { 
        $image_src_instance = PATH . 'resize.php?src='.PATH.'images/auction/1000_800/'. $products->deal_key . '_1' . '.png&w='.PRODUCT_LIST_WIDTH.'&h='.PRODUCT_LIST_HEIGHT;
    }
    $image_src_realsize_instance = PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png';
}
else{
    $image_src_instance = PATH.'themes/'.THEME_NAME.'/images/noimage_products_list.png';
    $image_src_realsize_instance = $image_src_instance;
}
?>
   
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                         <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                   <img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" class="link"></a>
                </div>
                  
                          </div>
                          <div class="span6">
                            <a class="prdocutname"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"
                 
                 title="<?php echo $products->deal_title; ?>"><?php 
                 
                 echo $products->deal_title; ?></a>
                            <div class="productdiscrption"> <p class="price"><?php //echo $products->deal_description; ?></p> </div>
                            <div class="pricetag">
                              <span class="spiral"></span> <a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Buy now" class="productcart">Buy now</a>
                              <div class="price">
                               <p class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>        
                              </div>
                            </div>
                            <div class="shortlinks">
                               <a class="details"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
                          
                          <a class="compare" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">COMPARE</a>
                       
                            </div>
                            <?php $q = 0;
                                                    foreach ($this->all_payment_list as $payment) {
                                                        ?>
                                                        <?php
                                                        if ($payment->auction_id == $products->deal_id) {
                                                            $firstname = $payment->firstname;
                                                            $transaction_time = $payment->transaction_date;
                                                            $q = 1;
                                                        }
                                                    }
                                                    ?>
                                <?php if ($q == 1) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo substr(ucfirst($firstname), 0, 10) . '..'; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['BID']; ?> : <span><?php echo $symbol . " " . number_format($products->deal_value); ?></span></p>                                                                    


                                <?php } ?>
                                <?php if ($q == 0) { ?>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['LAST_BID']; ?> : <span><?php echo $this->Lang['NOT_YET_BID']; ?></span></p>
                                                    <p style="font:12px arial;color:#111;"><?php echo $this->Lang['CLOSE_T']; ?> : <span><?php echo $symbol . " " . number_format($products->deal_price); ?></span></p>                                                                    	
                                <?php } ?> 
                          </div>
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
                                <p class="text-center"><?php echo $this->Lang['NO_AUC_FOUND'];?></p>
<?php }?>
                   
                     
                  </ul>
<!--                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>-->
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
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