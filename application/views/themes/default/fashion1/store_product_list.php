<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
<style>
    
    .nop{
        margin-left: 150px;
        
    }
    
</style>
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
<!--products-->
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
}	?>   	
<?php if (count($this->all_products_list) > 0) { ?>  
 <section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>" class="default_t_color"><?php echo $this->Lang['HOME']; ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li class="m_right_10"><a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>" class="default_t_color"><?php echo $this->Lang["PRODUCTS"]; ?></a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
						<li><a  class="default_t_color"><?php //echo ucfirst($products->deal_title); ?></a></li>
					</ul>
				</div>
			</section>
<section class="products_container category_grid clearfix m_bottom_15">
								<!--product item-->
								
								<!--product item-->
                       
                                                                <?php
			$k = 1;
			foreach ($this->all_products_list as $products) {
				$symbol = CURRENCY_SYMBOL;?>
								<div class="product_item featured w_xs_full">
                                                                    
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
                                                                                

  <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
										$image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
										$size = getimagesize($image_url);
										?>
                                                                                
                                                                                
                                                                                
                                                                                <a class="d_block relative wrapper pp_wrap m_bottom_15" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
											<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
												<img class="tr_all_hover" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
												 <?php } else { ?>
				 <img class="tr_all_hover" src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
				<?php } ?>
												<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									<?php } else { ?>
											<a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
										<?php } ?>   
<!--										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_2.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>-->
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>" class="color_dark"><?php echo substr(ucfirst($products->deal_title), 0, 25)."..."; ?></a></h5>
											<div class="clearfix m_bottom_15">
												<!--rating-->
												<ul class="horizontal_list type_2 m_bottom_10 d_inline_b clearfix rating_list tr_all_hover">
													<?php $avg_rating = $products->avg_rating;
if($avg_rating!=''){
	$avg_rating = round($avg_rating); ?>
	<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
	<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
												</ul>
												<p class="scheme_color f_size_large"><?php echo $symbol . " " . $products->deal_value; ?> <?php echo CURRENCY_CODE; ?></p>
											</div>
											<div class="clearfix">
												<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"><a class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $this->Lang['ADD_TO_CART']; ?>"><?php echo $this->Lang['ADD_TO_CART']; ?></a></button>
											</div>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
												 
                                                                                                    <li class="m_right_15 f_md_none m_md_right_0"><a class="color_dark" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">Add to Wishlist</a>
 	</li>
													<li class="f_md_none"><a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<?php $k++; } ?>
							
						</section>
<?php } ?>
						<!--right column-->
<!--						<aside class="col-lg-3 col-md-3 col-sm-3">
							widgets
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Filter</h3>
								</figcaption>
								<div class="widget_content">
									filter form
									<form>
										checkboxes
										<fieldset class="m_bottom_15">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Manufacturers</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<input type="checkbox" name="" id="checkbox_1" class="d_none"><label for="checkbox_1">Chanel</label><br>
											<input type="checkbox" checked name="" id="checkbox_2" class="d_none"><label for="checkbox_2">Calvin Klein</label><br>
											<input type="checkbox" name="" id="checkbox_3" class="d_none"><label for="checkbox_3">Prada</label><br>
										</fieldset>
										price
										<fieldset class="m_bottom_20">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Price</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<div id="price" class="m_bottom_10"></div>
											<div class="clearfix range_values">
												<input class="f_left first_limit" readonly name="" type="text" value="$0">
												<input class="f_right last_limit t_align_r" readonly name="" type="text" value="$250">
											</div>
										</fieldset>
										size
										<fieldset class="m_bottom_15">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Size</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<input type="radio" name="size" id="radio_1" class="d_none"><label for="radio_1">S</label><br>
											<input type="radio" name="size" checked id="radio_2" class="d_none"><label for="radio_2">M</label><br>
											<input type="radio" name="size" id="radio_3" class="d_none"><label for="radio_3">L</label><br>
										</fieldset>
										color
										<fieldset class="m_bottom_25 m_sm_bottom_20">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Color</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<ul class="horizontal_list clearfix">
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color red r_corners color_dark active"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color blue r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color green r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color grey r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color yellow r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
											</ul>
										</fieldset>
										<fieldset class="m_bottom_25">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Weight</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<div class="clearfix">
												<input type="text" name="" class="r_corners f_left type_2">
												<input type="text" name="" class="r_corners f_left type_2 m_left_10">
											</div>
										</fieldset>
										<button type="reset" class="color_dark bg_tr text_cs_hover tr_all_hover"><i class="fa fa-refresh lh_inherit m_right_10"></i>Reset</button>
									</form>
								</div>
							</figure>
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									Categories list
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large scheme_color d_block relative">
												<b>Women</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											second level
											<ul>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													third level
													<ul>
														<li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Party Dresses</a></li>
													</ul>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Men</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											second level
											<ul class="d_none">
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													third level
													<ul class="d_none">
														<li><a href="#" class="color_dark d_block">Evening</a></li>
														<li><a href="#" class="color_dark d_block">Casual</a></li>
														<li><a href="#" class="color_dark d_block">Party</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Kids</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
										</li>
									</ul>
								</div>
							</figure>
							compare products
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Compare Products</h3>
								</figcaption>
								<div class="widget_content">
									You have no product to compare.
								</div>
							</figure>
							banner
							<a href="#" class="d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
							Bestsellers
							<figure class="widget shadow r_corners wrapper m_bottom_30">
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
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Elementum vel</a>
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
										<p class="scheme_color">$57.00</p>
									</div>
									<hr class="m_bottom_15">
									<div class="clearfix m_bottom_5">
										<img src="images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
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
										<p class="scheme_color">$24.00</p>
									</div>
								</div>
							</figure>
							tags
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
						</aside>-->
			