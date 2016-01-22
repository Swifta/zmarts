<?php 
$nosize = "";
$c = 0; $i = 0; 
?>

	<head>
           <script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
        $('.error_size').hide();
        $('.error_color').hide();
        $('.error_all').hide();
        if($('#messagedisplay')){
            $('#messagedisplay').animate({opacity: 1.0}, 8000)
            $('#messagedisplay').fadeOut('slow');
        }
        if($('#error_messagedisplay')){
            $('#error_messagedisplay').animate({opacity: 1.0}, 8000)
            $('#error_messagedisplay').fadeOut('slow');
        }
    });
</script>


<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/jquery.jcarousel.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/skin.css" media="all">
<script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jquery.jcarousel.min.js "></script>
<script src="<?php echo PATH; ?>js/magiczoomplus.js" type="text/javascript"></script>
<script src="<?php echo PATH; ?>js/magicscroll.js" type="text/javascript"></script>
<link href="<?php echo PATH; ?>/css/magiczoomplus.css" rel="stylesheet" type="text/css" />
<link href="<?php echo PATH; ?>/css/magicscroll.css" rel="stylesheet" type="text/css" />


<script type="text/javascript">
    $(document).ready(function () {
        //jCarousel Plugin
        $('#carousel').jcarousel({
            horizontal: true,
            scroll: 1,
            auto: 2,
            wrap: 'last',
            initCallback: mycarousel_initCallback
        });
    });
    //Carousel Tweaking
    function mycarousel_initCallback(carousel) {
        carousel.clip.hover(function() {
            carousel.stopAuto();
        }, function() {
            carousel.startAuto();
        });
    }
</script>
		<title>Flatastic - Product Page Sidebar</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox-1.3.4.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<script src="js/modernizr.js"></script>
	</head>
	<body>
            <?php
foreach ($this->product_deatils as $products) {
    $symbol = CURRENCY_SYMBOL;
?>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>" class="default_t_color"><?php echo $this->Lang['HOME']; ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li class="m_right_10"><a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>" class="default_t_color"><?php echo $this->Lang["PRODUCTS"]; ?></a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
						<li><a  class="default_t_color"><?php echo ucfirst($products->deal_title); ?></a></li>
					</ul>
				</div>
			</section>
                         <div  id="messagedisplay1" style="display:none;">
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
                </div>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
							<div class="clearfix m_bottom_30 t_xs_align_c">
						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
						 <?php $image_count = "";
                                for ($i = 1; $i <= 5; $i++) { ?>
                                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
                                        $image_count +=1;
                                    }
                                } ?>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) { ?>

                                            <?php break;
                                        }
                                    } if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) {     +
                                     $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png';
                                $size = getimagesize($image_url);  ?>	
                                                    <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
							<div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
								<img id="zoom_image" src="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png'; ?>" data-zoom-image="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png'; ?>" class="tr_all_hover" alt=""
                                                                      <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
                                        <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>" />
                                        <?php } else { ?>
                                          <img src="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png' ?>" />
                                        <?php } ?>
                                                                     
                                                                     
                                                                     >
                                                                      <?php if ($products->purchase_count >= $products->user_limit_quantity) { ?>
                                                                     <?php } ?>
                                <?php } else { ?>
								
                                                                     <img id="zoom_image" src="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png'; ?>" data-zoom-image="images/preview_zoom_1.jpg" class="tr_all_hover" alt=""                                                                  
                                                                     >
                                                                      <?php if ($products->purchase_count >= $products->user_limit_quantity) { ?>
                                                                        <?php } ?>
                                    <?php } ?>  
                                                                     
                                                                     
                                                                     <a href="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png'; ?> class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">
									<i class="fa fa-expand"></i>
								</a>
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap">
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel_single d_inline_middle">
									<a href="#" data-image="<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png'; ?>" data-zoom-image="images/preview_zoom_1.jpg"><img src="images/quick_view_img_10.jpg" alt=""></a>
									<a href="#" data-image="images/quick_view_img_8.jpg" data-zoom-image="images/preview_zoom_2.jpg"><img src="images/quick_view_img_11.jpg" alt=""></a>
									<a href="#" data-image="images/quick_view_img_9.jpg" data-zoom-image="images/preview_zoom_3.jpg"><img src="images/quick_view_img_12.jpg" alt=""></a>
									<a href="#" data-image="images/quick_view_img_16.jpg" data-zoom-image="images/preview_zoom_4.jpg"><img src="images/quick_view_img_13.jpg" alt=""></a>
									<a href="#" data-image="images/quick_view_img_17.jpg" data-zoom-image="images/preview_zoom_5.jpg"><img src="images/quick_view_img_14.jpg" alt=""></a>
									<a href="#" data-image="images/quick_view_img_18.jpg" data-zoom-image="images/preview_zoom_6.jpg"><img src="images/quick_view_img_15.jpg" alt=""></a>
								</ul>
								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
						</div>
						<div class="p_top_10 t_xs_align_l">
							<!--description-->
							<h2 class="color_dark fw_medium m_bottom_10"><?php echo ucfirst($products->deal_title); ?></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
				<link href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/jRating.jquery.css" rel="stylesheet" type="text/css"/>
                                        <script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jRating.jquery.js"></script>

                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $(".basic<?php echo $products->deal_id; ?>").jRating({
                                                    bigStarsPath : '<?php echo PATH; ?>/images/star_03.png', // path of the icon stars.png
                                                    smallStarsPath : '<?php echo PATH; ?>/images/small.png', // path of the icon small.png
                                                    phpPath : '<?php echo PATH; ?>product-rating.html', // path of the php file jRating.php
                                                    length : 5,
                                                    rateMax : 5,
                                                    step:true,
                                                    //decimalLength:1,
                                                    showRateInfo: false,
                                                    canRateAgain : true,
                                                    nbRates : 10,
                                                    onError : function(){
                                                        //$('.jStar').css({backgroundColor: 'white'});
                                                        showlogin();
                                                    }
                                                });
                                            });
                                        </script>	
                                        
                                        <label class="basic<?php echo $products->deal_id; ?>" id="<?php echo $this->avg_rating; ?>" title="<?php echo $this->avg_rating; ?> / 5">
                                            <!--
                                                    Check the images folder for 'black_star.png' and 'white_star.png'
                                            -->
                                        </label>
                                        <span><?php echo $this->sum_rating; ?> <?php echo $this->Lang['RATINGS']; ?></span>

								</ul>
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
<!--							<table class="description_table m_bottom_10">
								<tr>
									<td>Manufacturer:</td>
									<td><a href="#" class="color_dark">Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class="color_green">in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>-->
<!--							<h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Product Length:</td>
									<td><span class="color_dark">10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>-->
 <?php 
									 $gift_name = $gift_desc = "";
									 $gift_id = $gift_type = $gift_amount = 0;
									  if (($this->session->get('UserID')&& $this->session->get('prime_customer')==1) || ($this->uri->last_segment() =="merchant-preview.html" || $this->uri->last_segment() == "admin-preview.html" || $this->uri->last_segment() == "admin-manage-preview.html" || $this->uri->last_segment() == "merchant-manage-preview.html" || $this->uri->last_segment() == "store-admin-preview.html" || $this->uri->last_segment() == "store-admin-manage-preview.html")) {
									 if ($products->product_offer==2) { 
									 $this->gift_list=$this->products->get_gift_list($products->merchant_id);
									 if(count($this->gift_list)>0){
										 foreach($this->gift_list as $gft){
											 if($gft->gift_id==$products->gift_offer){
												 $gift_name = $gft->gift_name;
												 $gift_desc = $gft->gift_description;
												 $gift_id = $gft->gift_id;
												 $gift_type = $gft->gift_type;
												 $gift_amount = $gft->gift_Amount;
											 }
										 }
									 }
									 if($gift_name!=""){?>
									  <div class="buy_get_offer">
										  <div class="offr_txt">
											  <span><?php echo $this->Lang['OFFER']; ?></span>
										  </div>
										  <div class="empty_bg">&nbsp;</div>
										  <div class="offr_tag">
											  <span><?php echo $this->Lang['GIFT']. "  <a class='show_gift'>".$gift_name."</a>";?></span>
										  </div>
									  </div>
									  
									  
									 <?php }} ?>
<?php if ($products->product_offer==1) { ?>
									  <div class="buy_get_offer">
										  <div class="offr_txt">
											  <span><?php echo $this->Lang['OFFER']; ?></span>
										  </div>
										  <div class="empty_bg">&nbsp;</div>
										  <div class="offr_tag">
											  <span><?php echo $this->Lang['BUY_ONE']. "  ".$products->bulk_discount_buy."  ".$this->Lang['GET']."  ".$products->bulk_discount_get;?></span>
										  </div>
									  </div>
									 <?php }
									 } ?>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10"><?php //echo ucfirst($products->deal_description); ?></p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
                                                            
<!--								<s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
							--></div>
							<table class="description_table type_2 m_bottom_15">
								
                                                                <tr>
                                                                    <td style="display:none;">
                                                                     <div class="clearfix">
                                            <?php if (count($this->product_size) > 0) { ?>
                                                <?php
                                                $c = 0;
                                                foreach ($this->product_size as $size) {
                                                    if ($size->size_name == "None") {
                                                        $nosize = 1;
                                                    } else {
                                                        $c = 1;
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <?php if ($c != 0) { ?>
                                            <div class="choose_your_size">
                                                <h3 class="select_color_title"><?php //echo $this->Lang['CHOO_Y_SIZE']; ?></h3>

                                                <ul>
            <?php $nosize = "";
            foreach ($this->product_size as $size) { ?>
                              <?php if ($size->quantity != 0) { ?><li  class="size_<?php echo $size->size_id; ?> <?php if ($size->quantity != 0) {
                                            if ($this->session->get('product_size_qty' . $products->deal_id) == $size->size_id) { ?> act <?php }
                                        } ?>" ><a onclick="select_size('<?php echo $size->size_id; ?>', '<?php echo $products->deal_id; ?>', '<?php echo $size->quantity; ?>');" > <?php //echo $size->size_name; ?> </a></li> <?php } else { ?><li><a class="sold_out" > <?php echo $size->size_name; ?> </a></li><?php }
                                } ?>

                                                </ul>
                                            </div>
        <?php } ?>
    <?php } ?> </td>
                                                            <?php $color_count = 0;
    if (count($this->product_color) > 0) {
        $color_count = 1; ?>          
                                                                     <td>
                                                                         
                                                                         <div class="chose_color">
                                            <h3 class="select_color_title" <?php if ($c == 0) { ?>  <?php } ?>><?php echo $this->Lang['CHOOSE_COLOR']; ?> </h3>
                                            <ul>
                                                <?php foreach ($this->product_color as $color) { ?>
                                                    <li>
                                                        <a onclick="select_color('<?php echo $color->color_code_id; ?>', '<?php echo $products->deal_id; ?>');"  title="<?php echo $color->color_code_name; ?>" class="color_<?php echo $color->color_code_id; ?> <?php if ($this->session->get('product_color_qty' . $products->deal_id) == $color->color_code_id) { ?> active <?php } ?>">
                                                            <span class="choose_color" style="background:#<?php echo $color->color_name; ?>;"></span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                                <?php } ?>  
                                                                         
                                                                     </td>
                                                                       <input type="hidden" name="nosize" id="no_size" value="<?php echo $nosize; ?>">
                                    <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>" />
                                    <input type="hidden" name="select_color" id="sel_color" value="<?php echo $this->session->get('product_color_qty' . $products->deal_id); ?>" />
                                    <input type="hidden" name="select_size" id="sel_size" value="<?php echo $this->session->get('product_size_qty' . $products->deal_id); ?>" />
                                    <input type="hidden" name="select_quantity" id="sel_quant" value="<?php echo $this->session->get('product_quantity_qty' . $products->deal_id); ?>" />
                               
                                                                </tr>
                                                                  
    
                                                                <?php $color_count = 0;
    if (count($this->product_color) > 0) {
        $color_count = 1; ?>
                                                                <tr>
                                                                    
                                                                    <div class="chose_color">
                                            <h3 class="select_color_title" <?php if ($c == 0) { ?>  <?php } ?>><?php echo $this->Lang['CHOOSE_COLOR']; ?> </h3>
                                            <ul>
                                                <?php foreach ($this->product_color as $color) { ?>
                                                    <li>
                                                        <a onclick="select_color('<?php echo $color->color_code_id; ?>', '<?php echo $products->deal_id; ?>');"  title="<?php echo $color->color_code_name; ?>" class="color_<?php echo $color->color_code_id; ?> <?php if ($this->session->get('product_color_qty' . $products->deal_id) == $color->color_code_id) { ?> active <?php } ?>">
                                                            <span class="choose_color" style="background:#<?php echo $color->color_name; ?>;"></span>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                                <?php } ?>                  <input type="hidden" name="nosize" id="no_size" value="<?php echo $nosize; ?>">
                                    <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>" />
                                    <input type="hidden" name="select_color" id="sel_color" value="<?php echo $this->session->get('product_color_qty' . $products->deal_id); ?>" />
                                    <input type="hidden" name="select_size" id="sel_size" value="<?php echo $this->session->get('product_size_qty' . $products->deal_id); ?>" />
                                    <input type="hidden" name="select_quantity" id="sel_quant" value="<?php echo $this->session->get('product_quantity_qty' . $products->deal_id); ?>" />
                               
  
                              
    </tr>
    <tr>
     <div class="deal_bought_detail product_bought_detail clearfix" style=" background-color: #fafbfb;"> 
         <li></li>
                        <?php    $count_del = "0";
                        if(count($this->delivery_details) > 0 ) { ?>
                                <ul class="product_buy_notes">
                                        <?php foreach($this->delivery_details as $del) { if(strlen($del->text) > 0 ) { $count_del = "1"; ?>
                                                <li><?php echo $del->text ; ?> </li>
                                        <?php } } ?>
                                </ul>
<!--         <li> I am Coming Home</li>-->
         
                        <?php } ?>
            <?php if (count($this->product_size) > 0) { ?>
                                                <?php
                                                $c = 0;
                                                foreach ($this->product_size as $size) {
                                                    if ($size->size_name == "None") {
                                                        $nosize = 1;
                                                    } else {
                                                        $c = 1;
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <?php if ($c != 0) { ?>
                                            <div class="choose_your_size">
                                                <h3 class="select_color_title"><?php echo $this->Lang['CHOO_Y_SIZE']; ?></h3>

                                                <ul>
            <?php $nosize = "";
            foreach ($this->product_size as $size) { ?>
                              <?php if ($size->quantity != 0) { ?><li  class="size_<?php echo $size->size_id; ?> <?php if ($size->quantity != 0) {
                                            if ($this->session->get('product_size_qty' . $products->deal_id) == $size->size_id) { ?> act <?php }
                                        } ?>" ><a onclick="select_size('<?php echo $size->size_id; ?>', '<?php echo $products->deal_id; ?>', '<?php echo $size->quantity; ?>');" > <?php echo $size->size_name; ?> </a></li> <?php } else { ?><li><a class="sold_out" > <?php echo $size->size_name; ?> </a></li><?php }
                                } ?>

                                                </ul>
                                            </div>
        <?php } ?>
    <?php } ?>
                        <?php  if($count_del == '1'){ ?> 
                        <div class="deal_bought_price product_bought_price" >
                        <?php } else { ?>
                        <div class="deal_bought_price product_bought_price product_left_price_details" >
                        <?php } ?>
                        <?php if($products->deal_percentage>0 && $products->deal_percentage!=''){ ?>
                        <span>(<?php echo round($products->deal_percentage); ?>% <?php echo $this->Lang['OFFER']; ?>)</span>
                        <?php } ?>
						 <?php if($products->deal_price!=0) { ?>	
                        <strike><?php echo $symbol . "" . number_format($products->deal_price); ?> </strike>
							<b><?php echo $symbol . "" . number_format($products->deal_value); ?></b>
						<?php } else  { ?>
							<strike></strike>
							<b><?php echo $symbol."".number_format($products->deal_value); ?> </b>
						<?php } ?> 
                        <?php  if($products->Including_tax  == 1){ ?>
                        <p><?php echo $this->Lang['INCLU_OF_TAXES']; ?></p>
                        <?php } ?>
                        <?php  if($products->shipping  == 1){ ?>
                        <p><?php echo $this->Lang['FREE_SHIPP_PROD']; ?></p>
                        <?php } elseif($products->shipping  == 2){ ?>
                        <p><?php echo $this->Lang['FLAT_SHIPP_T_PRO_AMO']; ?>( <?php echo $symbol . " " . number_format($this->userflat_amount); ?> )</p>
                        <?php } elseif($products->shipping  == 3){ ?>
                        <p><?php echo $this->Lang['PER_PRO_SHIPP_PRODUCT_SHIPP']; ?>( <?php  echo $symbol . " " .number_format($products->shipping_amount); ?> )</p>
                        <?php } elseif($products->shipping  == 4){ ?>
                        <p><?php echo $this->Lang['PER_ITEM_PRODU_SHIPPING_AMOU']; ?>( <?php  echo $symbol . " " .number_format($products->shipping_amount); ?> )</p>
                        <?php } elseif($products->shipping  == 5){ ?>
                        <p><?php echo $this->Lang['ARAMEX_SHIPP_PROD']; ?></p>
                        <?php } ?>
                        <div class="product_buy_but">      
	  <div class="clearfix">
                                 <?php 
                                $preview_type = "edit";
                                if($products->deal_status==2){
				$preview_type = "preview";} ?>
                                <?php if ($this->uri->last_segment() != "admin-manage-preview.html" && $this->uri->last_segment() != "merchant-manage-preview.html"){ 
                                if($this->uri->last_segment() == "admin-preview.html"){ ?>
                                 <a href="<?php echo PATH; ?>/admin/confirm-product-status/<?php echo $products->deal_id; ?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['SUBMIT']; ?>"><?php echo $this->Lang['SUBMIT']; ?></a>
                                 <a href="<?php echo PATH; ?>/admin/edit-products/<?php echo base64_encode($products->deal_id); ?>/<?php echo $products->deal_key;?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['GO_BACK']; ?>"><?php echo $this->Lang['GO_BACK']; ?></a>
                                <?php } elseif($this->uri->last_segment() =="merchant-preview.html") { ?>
                                <a href="<?php echo PATH; ?>/merchant/confirm-product-status/<?php echo $products->deal_id; ?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['SUBMIT']; ?>"><?php echo $this->Lang['SUBMIT']; ?></a>
                                <a href="<?php echo PATH; ?>/merchant/edit-products/<?php echo base64_encode($products->deal_id); ?>/<?php echo $products->deal_key;?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['GO_BACK']; ?>"><?php echo $this->Lang['GO_BACK']; ?></a>
                                <?php }else if($this->uri->last_segment() == "store-admin-preview.html"){ ?>
                                <a href="<?php echo PATH; ?>/store-admin/confirm-product-status/<?php echo $products->deal_id; ?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['SUBMIT']; ?>"><?php echo $this->Lang['SUBMIT']; ?></a>
                                 <a href="<?php echo PATH; ?>/store-admin/edit-products/<?php echo base64_encode($products->deal_id); ?>/<?php echo $products->deal_key;?>/<?php echo base64_encode($preview_type);?>.html" class="buy_it" style="cursor:pointer;" id="allselect_nosize_1" title="<?php echo $this->Lang['GO_BACK']; ?>"><?php echo $this->Lang['GO_BACK']; ?></a>
								<?php }else{ //} ?>
                                <?php //if ($products->deal_status == "1"){ ?>
                                <?php if ($products->purchase_count >= $products->user_limit_quantity) { ?>
                                 <a class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large"style="cursor:pointer" <?php echo $this->Lang['SOLD_OUT']; ?>></a>
                                <?php } else { ?>
                                 <a  class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large" style="cursor:pointer;" id="allselect_nosize_1" onclick="check_validation('<?php echo $products->deal_id; ?>');" title="<?php echo $this->Lang['ADD_TO_CART']; ?>"><?php echo $this->Lang['ADD_TO_CART']; ?></a>
                                <?php } ?>
                                
                                <?php }
                                } ?>
                                
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span><i class="fa fa-heart-o f_size_big"></i></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span><i class="fa fa-files-o f_size_big"></i></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
						
                            </div>
                            
                            <span class="error_size" style="display:none;"><?php echo $this->Lang['SELECT_SIZE_LIST']; ?></span>
                            <span class="error_color" style="display:none;"><?php echo $this->Lang['SELECT_COLOR_LIST']; ?></span>
                            <span class="error_all" style="display:none;"><?php echo $this->Lang['PLS_COLOR_SIZE_FROM_LI']; ?></span>
                        </div>
                        </div>
                        </div>
         
                            <div class="deal_share clearfix">
                                <div class="social_share">
                                    <ul>
                                        <li>  <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo PATH . $products->store_url_title.'/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?> &amp;layout=button_count&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden;  height:21px; width:82px;" allowTransparency="true"></iframe></li>
                                        <li>
                                            <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                            <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo PATH . $products->store_url_title.'/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" data-count="horizontal"><?php echo $this->Lang['TWEET']; ?></a></li>

                                        <li> <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                                            {parsetags: 'explicit'}
                                            </script>

                                            <!-- Place this tag where you want the +1 button to render -->
                                            <div class="g-plusone" data-size="medium" data-href="<?php echo PATH . $products->store_url_title.'/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"></div>
                                            <!-- Place this render call where appropriate -->
                                            <script type="text/javascript">gapi.plusone.go();</script> </li>
                                         <li>
											<span class="ig-follow" data-id="<?php echo INSTAGRAM_ID; ?>" data-handle="<?php echo INSTAGRAM_USER; ?>" data-count="true" data-size="small" data-username="false"></span>
											<script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>
                                         </li>
                                    </ul>
                                </div>                                
                            </div>
                        </div>	
     </div>
                        </div>
    <tr>
<!--									<td class="v_align_m">Quantity:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>-->
								</tr>
							</table>
<!--							<div class="d_ib_offset_0 m_bottom_20">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span><i class="fa fa-heart-o f_size_big"></i></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span><i class="fa fa-files-o f_size_big"></i></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>-->
 <?php if(count($this->merchant_cms)>0) { ?>
                    <div class="bid_advance_block">
						
                        <?php if(($this->merchant_cms->current()->about_us_status ==1) || ($this->merchant_cms->current()->return_policy_status ==1) || ($this->merchant_cms->current()->terms_conditions_status ==1)) { ?>
                        <li>
                            <h2 class="deal_sub_title"><?php echo "Store Info"; ?></h2>
                            <?php if($this->merchant_cms->current()->about_us_status ==1) { ?>
                            <div  class="bid_advance_detail">
                                <label><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/warranty.html'; ?>"><?php echo $this->Lang["WARRANTY"]; ?></a></label>
                            </div>
                            <?php } ?>
                            <?php if($this->merchant_cms->current()->return_policy_status ==1) { ?>
                            <div  class="bid_advance_detail">
                                 <label><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/return_policy.html'; ?>"><?php echo $this->Lang["RET_POLICY"]; ?></a></label>
                            </div>
                              <?php } ?>
                            <?php if($this->merchant_cms->current()->terms_conditions_status ==1) { ?>
                            <div  class="bid_advance_detail">
                                 <label><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/shipping.html'; ?>"><?php echo $this->Lang["SHIP_ING"]; ?></a></label>
                            </div>
                            <?php } ?>
                        </li>
                        <?php } ?>
                        
                        <li>
                            <h2 class="deal_sub_title"><?php echo $this->Lang['SHIP_DET']; ?></h2>
                            <div  class="bid_advance_detail">
                                <label><?php echo $this->Lang['SHIP_FEE']; ?> : </label>
                                <?php  if($products->shipping  == 1){ ?>
								<span><?php echo $this->Lang['FREE_SHIPP_PROD']; ?></span>
								<?php } elseif($products->shipping  == 2){ ?>
								<span><?php echo $this->Lang['FLAT_SHIPP_T_PRO_AMO']; ?>( <?php echo $symbol . " " . $this->userflat_amount; ?> )</span>
								<?php } elseif($products->shipping  == 3){ ?>
								<span><?php echo $this->Lang['PER_PRO_SHIPP_PRODUCT_SHIPP']; ?>( <?php  echo $symbol . " " .$products->shipping_amount; ?> )</span>
								<?php } elseif($products->shipping  == 4){ ?>
								<span><?php echo $this->Lang['PER_ITEM_PRODU_SHIPPING_AMOU']; ?>( <?php  echo $symbol . " " .$products->shipping_amount; ?> )</span>
								<?php } elseif($products->shipping  == 5){ ?>
								<span><?php echo $this->Lang['ARAMEX_SHIPP_PROD']; ?></span>
								<?php } ?>
                            </div>
                            <div  class="bid_advance_detail">
                                <label><?php echo $this->Lang['SHIPPING_INFO']; ?> : </label>
                                <span><?php  echo $products->delivery_period." days "; ?></span>
                            </div>
                        </li>
                    </div>
                    <?php } ?>
							<p class="d_inline_middle">Share this:</p>
							<div class="d_inline_middle m_left_5 addthis_widget_container">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
					<!--tabs-->
					<div class="tabs m_bottom_45">
						<!--tabs navigation-->
						<nav>
							<ul class="tabs_nav horizontal_list clearfix">
								<li class="f_xs_none"><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Description</a></li>
<!--								<li class="f_xs_none"><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Specifications</a></li>
								<li class="f_xs_none"><a href="#tab-3" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Reviews</a></li>
								<li class="f_xs_none"><a href="#tab-4" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Custom Tab</a></li>
							--></ul>
						</nav>
						<section class="tabs_content shadow r_corners">
							<div id="tab-1">
								<p class="m_bottom_10"> <div class="deal_descripe clearfix">
                        <h2 class="deal_sub_title"><?php echo ucfirst($products->deal_title); ?></h2>
                        <?php echo nl2br($products->deal_description); ?>
                    </div></p>
								<p class="m_bottom_15"> </p>
								<hr class="m_bottom_15">
								Tags: <a href="#" class="color_dark">black</a>, <a href="#" class="color_dark">dresses</a>, 
								<a href="#" class="color_dark">woman</a>, <a href="#" class="color_dark">sexy</a>
							</div>
<!--							<div id="tab-2">
								<h5 class="fw_medium m_bottom_15">Item specifics:</h5>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_15">
										<div class="table_sm_wrap">
											<table class="description_table type_3 m_xs_bottom_10">
												<tr>
													<td>Condition:</td>
													<td>New with tags</td>
												</tr>
												<tr>
													<td>Country of Manufacture:</td>
													<td>China</td>
												</tr>
												<tr>
													<td>Style:</td>
													<td>Flared Pleated Mini Skirt</td>
												</tr>
												<tr>
													<td>Skirt Length:</td>
													<td>38CM/14.82"</td>
												</tr>
												<tr>
													<td>Waist:</td>
													<td>66-80CM/25.9"-31.4"</td>
												</tr>
												<tr>
													<td>Occasion:</td>
													<td>casual</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="table_sm_wrap">
											<table class="description_table type_3 m_xs_bottom_10">
												<tr>
													<td>Brand:</td>
													<td>Chanel</td>
												</tr>
												<tr>
													<td>Size Type:</td>
													<td>Regular</td>
												</tr>
												<tr>
													<td>Bottoms Size (Women's):</td>
													<td>One size</td>
												</tr>
												<tr>
													<td>Material:</td>
													<td>Cotton Blend</td>
												</tr>
												<tr>
													<td>Length:</td>
													<td>Mini</td>
												</tr>
												<tr>
													<td>Pattern:</td>
													<td>Plaids &amp; Checks</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>-->
							
<!--							<div id="tab-4">
								<div class="iframe_video_wrap">
									<iframe src="http://www.youtube.com/embed/Du8ld5hrqN0?wmode=transparent"></iframe>
								</div>
							</div>-->
						</section>
					</div>
                                        
                                        
                                       
                                         <?php if (count($this->all_products_list) > 0) { ?>
                    <div class="deal_list_slide_outer">
                        <h2 class="deal_sub_title"><?php echo $this->products_list_name; ?></h2>                        
                            <div class="deal_list_slide clearfix">
                                <div id="welcomeHero">
                                    <div id="slideshow-carousel"  <?php if (count($this->all_products_list) <= 5) { ?> class="deallist_slider_center" <?php } ?>>
                                        <ul id="carousel"  <?php if (count($this->all_products_list) > 5) { ?> class="jcarousel jcarousel-skin-tango" <?php } ?>>
            <?php
            $deal_offset = $this->input->get('offset');
            foreach ($this->all_products_list as $products_list) {
                $symbol = CURRENCY_SYMBOL;
                ?>
                                                <li>

                                                    <div class="new_prdt_listing">
                                                        <div class="new_prdt_listing_img wloader_parent">
                                                            <i class="wloader_img">&nbsp;</i>
                                                            <?php if (file_exists(DOCROOT . 'images/category/icon/' . $products_list->category_url . '.png')) { ?>

                <?php } else { ?>

                <?php } ?>
                                                                <div class="new_prdt_listing_img1">
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products_list->deal_key . '_1' . '.png')) { 
                
                   $image_url = PATH . 'images/products/1000_800/' . $products_list->deal_key . '_1' . '.png';
                                $size = getimagesize($image_url); ?>
                                                                <a href="<?php echo PATH . $products_list->store_url_title.'/product/' . $products_list->deal_key . '/' . $products_list->url_title . '.html'; ?>" title="<?php echo $products_list->deal_title; ?>" >
                                                                
                                                                <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                                                                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products_list->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products_list->deal_title; ?>" title="<?php echo $products_list->deal_title; ?>" />
                                                                    <?php } else { ?>
                                 <img src="<?php echo PATH .'images/products/1000_800/'.$products_list->deal_key.'_1'.'.png'?>" />
                                <?php } ?>
                                                                    
                    <?php /* <img title=" " alt="" src="<?php echo PATH.'images/products/290_215/'.$products_list->deal_key.'_1'.'.png'?>"> */ ?>
                                                                </a>
                <?php } else { ?>

                                                                <a href="<?php echo PATH . $products_list->store_url_title.'/product/' . $products_list->deal_key . '/' . $products_list->url_title . '.html'; ?>" title="<?php echo $products_list->deal_title; ?>">
                                                                   <img src="<?php echo PATH.'resize.php';?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                                                </a>
                <?php } ?>
                <?php $url = PATH . $products_list->store_url_title.'/product/' . $products_list->deal_key . '/' . $products_list->url_title . '.html'; ?>
                                                <?php /*                                            <div class="normal_view">
                                                  <div class="normal_view2">
                                                  <div class="view_mid">
                                                  <a title="<?php echo $this->Lang['ADD_TO_CART']; ?>"  onclick="redirect_url('<?php echo $url; ?>');" > <?php echo $this->Lang['ADD_TO_CART']; ?></a>
                                                  </div>
                                                  </div>
                                                  </div> */ ?>
                                                                </div>
                                                        </div>
                                                        <div class="new_prdt_listing_details">
                                                            <h2>
                                                                <a class="cursor" onclick="redirect_url('<?php echo $url; ?>');" title="<?php echo $products_list->deal_title; ?>"><?php echo substr(ucfirst($products_list->deal_title), 0, 100); ?></a>
                                                            </h2>
                                                            <div class="new_price_details">
																<?php if($products_list->deal_price!=0) { ?>	
																	<p><?php echo $symbol . "" . $products_list->deal_price; ?> </p>
																	<span><?php echo $symbol . "" . $products_list->deal_value; ?></span>
																<?php } else  { ?>
																	<p> </p>
																	<span><?php echo $symbol."".$products_list->deal_value; ?> </span>
																<?php } ?> 
                                                           
                                                        </div>
                                                        </div>
                                                        
                                                        <div class="new_list_bottom">
                                                        <div class="new_list_bottom_stars">
                                                                <img alt="" src="<?php echo PATH;?>/themes/<?php echo THEME_NAME;?>/images/new/gray.png">
                                                        </div>
                                                        <div class="new_list_bottom_icons">
                                                                <div class="new_wishlist"><a onclick="addToWishList('199','Test product');" title="Add to wishlist"></a></div>
                                                                <div class="new_compare"> <a onclick="addToCompare('199','','detail');" title="Add to compare"></a></div>
                                                                <div class="new_cart"><a href="<?php echo PATH . $products_list->store_url_title.'/product/' . $products_list->deal_key . '/' . $products_list->url_title . '.html'; ?>" title="Add to Cart"></a></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </li>

            <?php } $deal_offset++; ?>




                                        </ul>
                                    </div>
                                </div>

                            </div>
                            </div>
                                         <?php } ?>
                                        
                                        
                                        
                                        
                                        
                                        <div class="bot_mid_det specification"  style="display:none;">
                        <?php if (!empty($this->attribute_groups)) { ?>
                            <ul>
                            <?php foreach ($this->attribute_groups as $attribute_group) { ?>
                                    <li>
                                        <p style="color:#0078CA;font: bold 14px/35px arial;background: #F7F7F7;text-align: left; padding:0 0 0 9px; width: 99%;"><?php echo ucfirst($attribute_group['name']); ?></p>
                                    </li>
            <?php foreach ($attribute_group['attribute'] as $key => $attribute) { ?>
                                        <ul>
                                            <li>
                                                <label class="left_right"><?php echo ucfirst($attribute['name']); ?></label>
                <?php foreach ($this->product_compare as $c) { ?>
                    <?php if (isset($this->product_compare[$c['deal_id']]['attribute'][$key])) { ?>
                                                        <p class="total_shif"><?php echo $this->product_compare[$c['deal_id']]['attribute'][$key]; ?></p>
                    <?php } else { ?>
                                                        <p>---</p>
                    <?php } ?>
                <?php } ?>
                                            </li>
                                        </ul>
            <?php } ?>
                                <?php } ?>
                            </ul>
                            <?php } else { ?>
                            <p> --- </p>
                            <?php } ?>
                    </div>
                                        
                                        
<!--							




<div class="clearfix">
						<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none">Related Products</h2>
						<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
						</div>
					</div>-->
<!--					<div class="related_projects m_bottom_15 m_sm_bottom_0 m_xs_bottom_15">
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								hot product
								<span class="hot_stripe type_2"><img src="images/hot_product_type_2.png" alt=""></span>
								<img src="images/product_img_5.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Eget elementum vel</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								<img src="images/product_img_7.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Cursus eleifend elit aenean elit aenean</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								sale product
								<span class="hot_stripe type_2"><img src="images/sale_product_type_2.png" alt=""></span>
								<img src="images/product_img_8.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Aliquam erat volutpat</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$36.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								hot product
								<span class="hot_stripe type_2"><img src="images/hot_product_type_2.png" alt=""></span>
								<img src="images/product_img_3.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Eget elementum vel</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								<img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Cursus eleifend elit aenean...</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
						<figure class="r_corners photoframe shadow relative d_xs_inline_b tr_all_hover">
							product preview
							<a href="#" class="d_block relative pp_wrap">
								sale product
								<span class="hot_stripe type_2"><img src="images/sale_product_type_2.png" alt=""></span>
								<img src="images/product_img_9.jpg" class="tr_all_hover" alt="">
								<span data-popup="#quick_view_product" class="t_md_align_c button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
							</a>
							description and price of product
							<figcaption class="t_xs_align_l">
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Aliquam erat volutpat</a></h5>
								<div class="clearfix">
									<p class="scheme_color f_left f_size_large m_bottom_15">$36.00</p>
									rating
									<ul class="horizontal_list f_right clearfix rating_list tr_all_hover">
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li class="active">
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
										<li>
											<i class="fa fa-star-o empty tr_all_hover"></i>
											<i class="fa fa-star active tr_all_hover"></i>
										</li>
									</ul>
								</div>
								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Add to Cart</button>
							</figcaption>
						</figure>
					</div>-->
							<hr class="divider_type_3 m_bottom_15">
							<a href="category_grid.html" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>Back to: Woman</a>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
                                                                        
									<ul class="categories_list">
										<li class="active" >
                                                                                    
											<a  href="<?php echo PATH.$this->storeurl;?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>" class="f_size_large scheme_color d_block relative"  >
												<b <?php if (isset($this->is_product)) echo "active"; ?>><?php echo $this->Lang['PRODUCTS']; ?></b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
                                                                                    <?php $pr = 0; $pro = 0; $val_pro ="";
        foreach ($this->categeory_list_product as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 3, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        //$val_pro .= $check_sub_cat.","; 
		        $check_sub_cat = $d->product_count;
		        if($check_sub_cat != 0){
		        $pro = $pr + 1;
		        $pr ++;
		        } }
		        $arr_product = explode(",", substr($val_pro,0,-1));
        ?>    
											<ul>
                                                                                            <?php if($this->categeory_list_product){  
					foreach ($this->categeory_list_product as $d) {
						$check_sub_cat = $d->product_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														<?php echo ucfirst($d->category_name); ?><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
                                                                                                        <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1; ?>
										
													<ul>
                                                                            <?php    foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
														<li><a href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>" class="color_dark d_block"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												
                                                                                                                                                   <?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                        <?php  break;}
									}
									
									} ?>
									
													</ul>
                                                                <?php     } ?>
												</li>												
											  <?php }}}?>  </ul>
                                                                                    
										</li>
										 
									
                                                                                <li class="active" >
                                                                                    
											 <a  href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>" class="f_size_large scheme_color d_block relative"  >
												<b <?php if (isset($this->is_todaydeals)) echo "active"; ?>><?php echo $this->Lang['DEALS']; ?></b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
                                                                                    <?php $de = 0; $dea = 0;  $val_de ="";
        foreach ($this->categeory_list_deal as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 2, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        $check_sub_cat = $d->deal_count;
		        $val_de .= $check_sub_cat.","; 
		        if($check_sub_cat != 0){
		        $dea = $de + 1;
		        $de ++;
		        } }
		        $arr_deal = explode(",", substr($val_de,0,-1));
        ?>
											<ul>
                                                                                            <?php if($this->categeory_list_deal){  
					foreach ($this->categeory_list_deal as $d) {
						$check_sub_cat = $d->deal_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														<?php echo ucfirst($d->category_name); ?><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
                                                                                                        <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1; ?>
										
													<ul>
                                                                            <?php    foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
														<li><a href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>" class="color_dark d_block"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												
                                                                                                                                                   <?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                        <?php break;}
									}
									
									} ?>
									
													</ul>
                                                                <?php     } ?>
												</li>												
											  <?php }}}?>  </ul>
                                                                                    
										</li>
                                                                                
                                                                                <li class="active" <?php if (isset($this->is_todaydeals)) echo "active"; ?>>
                                                                                    
											<a  href="<?php echo PATH.$this->storeurl;?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>" class="f_size_large scheme_color d_block relative"  >
												<b <?php if (isset($this->is_auction)) echo "active"; ?>><?php echo $this->Lang['AUCTION']; ?></b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
                                                                                    <?php $pr = 0; $pro = 0; $val_pro ="";
        foreach ($this->categeory_list_auction as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 3, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        //$val_pro .= $check_sub_cat.","; 
		        $check_sub_cat = $d->auction_count;
		        if($check_sub_cat != 0){
		        $pro = $pr + 1;
		        $pr ++;
		        } }
		        $arr_product = explode(",", substr($val_pro,0,-1));
        ?>    
											<ul>
                                                                                            <?php if($this->categeory_list_auction){  
					foreach ($this->categeory_list_auction as $d) {
						$check_sub_cat = $d->auction_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														<?php echo ucfirst($d->category_name); ?><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
                                                                                                        <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1; ?>
										
													<ul>
                                                                            <?php    foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
														<li><a href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>" class="color_dark d_block"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												
                                                                                                                                                   <?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                        <?php  break;}
									}
									
									} ?>
									
													</ul>
                                                                <?php     } ?>
												</li>												
											  <?php }}}?>  </ul>
                                                                                    
										</li>
                                                                                
                                                                                 
                                                                              
                                                                               
										<li class="active">
													<a  href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>" class="d_block f_size_large color_dark relative">
														<b><?php echo $this->Lang['SOLD_OUT2']; ?></b><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a></li>	
                                                                                          
                                                                                
                                                                                <li class="active">
													 <a href="<?php echo PATH; ?>stores.html" title="<?php echo $this->Lang['STORES']; ?>" class="d_block f_size_large color_dark relative">
														<b><?php echo $this->Lang['STORES']; ?></b><span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a></li>
</ul>
                                                                                    
										
                                                                                    
										
								</div>
                                                           
							</figure>
							<!--compare products-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Compare Products</h3>
								</figcaption>
								<div class="widget_content">
									You have no product to compare.
								</div>
							</figure>
							<!--banner-->
							<a href="#" class="d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
							<!--Bestsellers-->
<!--							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Bestsellers</h3>
								</figcaption>
								<div class="widget_content">
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
										rating
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
										<p class="scheme_color">$61.00</p>
									</div>
									<hr class="m_bottom_15">
									
									
								</div>
							</figure>-->
							<!--tags-->
							
                                                        <figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Tags</h3>
								</figcaption>
								<div class="widget_content">
									<div class="tags_list">
										<a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
										<a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">short,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">top,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
									</div>
								</div>
							</figure>
						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
			
		</div>
		<!--social widgets-->
		<ul class="social_widgets d_xs_none">
			<!--facebook-->
			<li class="relative">
				<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
				</div>
			</li>
			<!--twitter feed-->
			<li class="relative">
				<button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Latest Tweets</h3>
					<div class="twitterfeed m_bottom_25"></div>
					<a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
				</div>	
			</li>
			<!--contact form-->
			<li class="relative">
				<button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Contact Us</h3>
					<p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
					<form id="contactform" class="mini">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="Your name">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="Email">
						<textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="cf_message"></textarea>
						<button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
					</form>
				</div>	
			</li>
			<!--contact info-->
			<li class="relative">
				<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Store Location</h3>
					<ul class="c_info_list">
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_15">
								<i class="fa fa-map-marker f_left color_dark"></i>
								<p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
							</div>
							<iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-phone f_left color_dark"></i>
								<p class="contact_e">800-559-65-80</p>
							</div>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-envelope f_left color_dark"></i>
								<a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
							</div>
						</li>
						<li>
							<div class="clearfix">
								<i class="fa fa-clock-o f_left color_dark"></i>
								<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
							</div>
						</li>
					</ul>
				</div>	
			</li>
		</ul>
		<!--custom popup-->
		<div class="popup_wrap d_none" id="quick_view_product">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar">
						<!--left popup column-->
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle">Share this:</div>
							<div class="d_inline_middle m_left_5 m_mxs_left_0">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class="f_right half_column">
							<!--description-->
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li>
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
								</ul>
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
								<table class="description_table m_bottom_10">
									<tr>
										<td>Manufacturer:</td>
										<td><a href="#" class="color_dark">Chanel</a></td>
									</tr>
									<tr>
										<td>Availability:</td>
										<td><span class="color_green">in stock</span> 20 item(s)</td>
									</tr>
									<tr>
										<td>Product Code:</td>
										<td>PS06</td>
									</tr>
								</table>
							<h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Product Length:</td>
									<td><span class="color_dark">10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
								<s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
							</div>
<!--							<table class="description_table type_2 m_bottom_15">
								<tr>
									<td class="v_align_m">Size:</td>
									<td class="v_align_m">
										<div class="custom_select f_size_medium relative d_inline_middle">
											<div class="select_title r_corners relative color_dark">s</div>
											<ul class="select_list d_none"></ul>
											<select name="product_name">
												<option value="s">s</option>
												<option value="m">m</option>
												<option value="l">l</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class="v_align_m">Quantity:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>
								</tr>
							</table>-->
							<div class="clearfix m_bottom_15">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small"><a onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST']; ?>"><?php echo $this->Lang['ADD_WISH_LIST']; ?></a></span></button>
                                                                <button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small"><a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>"><?php echo $this->Lang['ADD_COMPARE']; ?></a></span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			
		</div>
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/elevatezoom.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/jquery.fancybox-1.3.4.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>
<?php
} 
?> 
<script>
function redirect_url(url){
	window.location.href = url;
}
    $('.show_gift').click(function(){
    $('#fade').css({'visibility' : 'visible','display' : 'block'});
    $('.popup_block7').show();
    });
    $('.offer_close').click(function(){
        $('.popup_block7').hide();
        $('#fade').css({'visibility' : 'hidden','display' : 'none'});
     });
</script>

