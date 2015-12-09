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

<!--slider-->
<section class="revolution_slider">
    <div class="r_slider">
        <ul>
<?php
$font_color = "";
$bg_color ="";
$font_size ="";
$array_transition = array("curtain-1", "cube");

    
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
    <li class="f_left" data-transition="<?php shuffle($array_transition);echo $array_transition[0]; ?>" data-slotamount="7" data-custom-thumb="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>">
        <a href="<?php echo $banner_link; ?>"  title="<?php echo $banner_link; ?>">    
        <img src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" alt="<?php echo $this->Lang['LOGO']; ?>" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
        </a>
    </li>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
    <li class="f_left" data-transition="<?php shuffle($array_transition);echo $array_transition[0]; ?>" data-slotamount="7" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/<?php echo ($i+3); ?>.jpg">
            <img src="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/<?php echo ($i+3); ?>.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
    </li>
<?php
                    }
                }
        }
}
else{?>
            
    <li class="f_left" data-transition="<?php shuffle($array_transition);echo $array_transition[0]; ?>" data-slotamount="7" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/4.jpg">
            <img src="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/4.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
    </li>
            
    <li class="f_left" data-transition="<?php shuffle($array_transition);echo $array_transition[0]; ?>" data-slotamount="7" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/5.jpg">
            <img src="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/5.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
    </li>

    <li class="f_left" data-transition="<?php shuffle($array_transition);echo $array_transition[0]; ?>" data-slotamount="7" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/6.jpg">
            <img src="<?php echo PATH; ?>bootstrap/themes/images/electronics/banners/6.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
    </li>

<!-- display default banners-->
<?php
}
?>

            </ul>
        </div>
</section>


<!--content-->
<div class="page_content_offset">
    <div class="container">
         
<div class="clearfix">
        <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">Best Seller</h2>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners bestsellers_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners bestsellers_next"><i class="fa fa-angle-right"></i></button>
        </div>
</div>
<!--bestsellers carousel-->
<div class="bestsellers_carousel m_bottom_30 m_xs_bottom_15">
    
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
    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
            <!--product preview-->
            <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>"
               class="d_block relative pp_wrap">
                    <!--hot product-->
                    <!--<span class="hot_stripe type_2"><img src="<?php echo $image_src_realsize_instance; ?>" alt=""></span>-->
                    <img src="<?php echo $image_src_instance; ?>" class="tr_all_hover" alt="">
            </a>
            <!--description and price of product-->
            <figcaption>
                <h5 class="m_bottom_10"><a class="color_dark ellipsis"
                    href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
                   <?php 
                   if(strlen($best->deal_title) > 28){
                       echo substr($best->deal_title, 0, 27)."..";
                   }
                   else{
                       echo $best->deal_title; 
                   }
                   ?>
            </a></h5>
                    <div class="clearfix">
                        <p class="scheme_color f_left f_size_large m_bottom_15">
<?php echo $symbol . " " . number_format($best->deal_value); ?>
                        </p>
                        <p class="f_right clearfix rating_list">
        <?php
            $avg_rating = $best->avg_rating;
            if($avg_rating != ''){
            $avg_rating = round($avg_rating);
        ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </p>
                    </div>
                <div class="clearfix">
                    <a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">Add to Cart</a>
                    <a onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></a>
                    <a onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></a>
                </div>

            </figcaption>
    </figure>
<?php
        }
    }
}
?>
    </div>


<div class="clearfix">
        <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">Related Deals </h2>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners deals_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners deals_next"><i class="fa fa-angle-right"></i></button>
        </div>
</div>

<!--deals carousel-->
<div class="deals_carousel m_bottom_30 m_xs_bottom_15">
    
<?php 
if((count($this->get_deals_categories)>0)) { 
    

if(count($this->deal_setting)>0) {
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
    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
            <!--product preview-->
            <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>"
               title="<?php echo $deals_categories->deal_title; ?>"
               class="d_block relative pp_wrap">
                    <!--hot product-->
                    <!--<span class="hot_stripe type_2"></span>-->
                    <img src="<?php echo $image_src_instance; ?>" class="tr_all_hover" alt="">
            </a>
            <!--description and price of product-->
            <figcaption>
                <h5 class="m_bottom_10"><a class="color_dark ellipsis"
                    href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
                   <?php 
                   if(strlen($deals_categories->deal_title) > 28){
                       echo substr($deals_categories->deal_title, 0, 27)."..";
                   }
                   else{
                       echo $deals_categories->deal_title; 
                   }
                   ?>
            </a></h5>
                    <div class="clearfix">
                        <p class="scheme_color f_left f_size_large m_bottom_15">
<?php echo $symbol . " " . number_format($deals_categories->deal_value); ?>
                        </p>
                        <p class="f_right clearfix rating_list">
        <?php
            $avg_rating = $deals_categories->avg_rating;
            if($avg_rating != ''){
            $avg_rating = round($avg_rating);
        ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </p>
                    </div>
                <div class="clearfix">
            <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
                </div>
                <div class="clearfix">
                    <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">Buy Now</a>
                    <a onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></a>
                    <a onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></a>
                </div>

            </figcaption>
    </figure>
<?php
        }
    }
}
?>
    </div>


<div class="clearfix">
        <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">Related Auction</h2>
        <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners auction_prev"><i class="fa fa-angle-left"></i></button>
                <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners auction_next"><i class="fa fa-angle-right"></i></button>
        </div>
</div>

<!--auction carousel-->
<div class="auction_carousel m_bottom_30 m_xs_bottom_15">
    
<?php 
if((count($this->get_auction_categories)>0)) { 
    

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
    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
            <!--product preview-->
            <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>"
               title="<?php echo $deals1->deal_title; ?>"
               class="d_block relative pp_wrap">
                    <!--hot product-->
                    <!--<span class="hot_stripe type_2"></span>-->
                    <img src="<?php echo $image_src_instance; ?>" class="tr_all_hover" alt="">
            </a>
            <!--description and price of product-->
            <figcaption>
                <h5 class="m_bottom_10"><a class="color_dark ellipsis"
                    href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" title="<?php echo $deals1->deal_title; ?>">
                   <?php 
                   if(strlen($deals1->deal_title) > 28){
                       echo substr($deals1->deal_title, 0, 27)."..";
                   }
                   else{
                       echo $deals1->deal_title; 
                   }
                   ?>
            </a></h5>
                    <div class="clearfix">
                        <p class="scheme_color f_left f_size_large m_bottom_15">
<?php echo $symbol . " " . number_format($deals1->deal_value); ?>
                        </p>
                        <p class="f_right clearfix rating_list">
        <?php
            $avg_rating = $deals1->avg_rating;
            if($avg_rating != ''){
            $avg_rating = round($avg_rating);
        ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
        <?php } else { ?>
        <img style="margin:0px auto; text-align: center;" alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
        <?php } ?>
                        </p>
                    </div>
                <div class="clearfix">
                    <div class="auction_timer">                                                                                                                                           
                           <span time="<?php echo $deals1->enddate; ?>" class="kkcount-down" ></span>                                                                
                     </div>
                </div>
                <div class="clearfix">
                    <a href="<?php echo PATH . $deals1->store_url_title . '/auction/' . $deals1->deal_key . '/' . $deals1->url_title . '.html'; ?>" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">Buy Now</a>
                    <a onclick="addToWishList('<?php echo $deals1->deal_id; ?>','<?php echo addslashes($deals1->deal_title); ?>');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></a>
                    <a onclick="addToCompare('<?php echo $deals1->deal_id; ?>','','detail');" class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></a>
                </div>

            </figcaption>
    </figure>
<?php
        }
    }
}
?>
    </div>

<!--ads banners-->
<section class="row clearfix m_bottom_45 m_sm_bottom_35">
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
        <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                <a href="<?php echo $ads_link; ?>" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                        <img src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>" alt="">
                        <!--<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                <span class="d_inline_middle">
                                        <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                                        <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                                        <span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b>Colored Fashion</b></span>
                                        <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                </span>
                        </span>-->
                </a>
        </div>         
                    <?php }else{?>
        <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
            <img src="<?php echo PATH; ?>bootstrap/themes/images/electronics/ads/<?php echo ($i+2); ?>.jpg" alt="">
            <!--<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                    <span class="d_inline_middle">
                            <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                            <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                            <span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b>Colored Fashion</b></span>
                            <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                    </span>
            </span>-->
        </div>  
                    <?php }}?> 
            <?php  } } ?>
</section>

    </div>
</div>
