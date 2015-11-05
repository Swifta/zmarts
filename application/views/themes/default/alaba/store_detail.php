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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                    <!--hot product-->
                                    <span class="hot_stripe type_2"><img src="images/hot_product_type_2.png" alt=""></span>
                                    <img src="images/product_img_5.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Eget elementum vel</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                    <img src="images/product_img_6.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                                    <span class="clearfix p_buttons d_block tr_all_hover">
                                            <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light p_hr_0"><i class="fa fa-heart-o"></i></span>
                                            <span class="box_s_none button_type_5 tr_delay_hover f_left r_corners color_light m_left_5 p_hr_0"><i class="fa fa-files-o"></i></span>
                                    </span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Ut tellus dolor dapibus</a></h5>
                                    <div class="clearfix m_bottom_15">
                                            <p class="scheme_color f_size_large f_left">$57.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                    <img src="images/product_img_7.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Cursus eleifend elit aenean aucto.</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                    <!--sale product-->
                                    <span class="hot_stripe type_2"><img src="images/sale_product_type_2.png" alt=""></span>
                                    <img src="images/product_img_8.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Aliquam erat volutpat</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15"><s>$79.00</s> $36.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative hit tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                    <!--hot product-->
                                    <span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
                                    <img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Eget elementum vel</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15">$102.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                    <img src="images/product_img_2.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Ut tellus dolor dapibus</a></h5>
                                    <div class="clearfix m_bottom_15">
                                            <p class="scheme_color f_size_large f_left">$57.00</p>
                                            <!--rating-->
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
                                    <div class="clearfix">
                                            <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">Add to Cart</button>
                                            <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 m_left_5 p_hr_0"><i class="fa fa-files-o"></i></button>
                                            <button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></button>
                                    </div>
                            </figcaption>
                    </figure>
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative wrapper pp_wrap">
                                    <img src="images/product_img_3.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Cursus eleifend elit aenean aucto.</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15">$99.00</p>
                                            <!--rating-->
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
                    <figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
                            <!--product preview-->
                            <a href="#" class="d_block relative pp_wrap">
                                    <!--sale product-->
                                    <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
                                    <img src="images/product_img_4.jpg" class="tr_all_hover" alt="">
                                    <span data-popup="#quick_view_product" class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none">Quick View</span>
                            </a>
                            <!--description and price of product-->
                            <figcaption>
                                    <h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis">Aliquam erat volutpat</a></h5>
                                    <div class="clearfix">
                                            <p class="scheme_color f_left f_size_large m_bottom_15"><s>$79.00</s> $36.00</p>
                                            <!--rating-->
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
            </div>
            <!--banners-->
            <section class="row clearfix m_bottom_45 m_sm_bottom_35">
                    <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                            <a href="#" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
                                    <img src="images/banner_img_1.png" alt="">
                                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                            <span class="d_inline_middle">
                                                    <span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
                                                    <span class="d_block divider_type_2 centered_db m_bottom_5"></span>
                                                    <span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b>Colored Fashion</b></span>
                                                    <span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                            </span>
                                    </span>
                            </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
                            <a href="#" class="d_block banner wrapper r_corners type_2 relative">
                                    <img src="images/banner_img_2.png" alt="">
                                    <span class="banner_caption d_block vc_child t_align_c w_sm_auto">
                                            <span class="d_inline_middle">
                                                    <span class="d_block scheme_color banner_title type_2 m_bottom_0 m_mxs_bottom_5"><b>-50%</b></span>
                                                    <span class="d_block divider_type_2 centered_db m_bottom_0 d_sm_none"></span>
                                                    <span class="d_block color_light tt_uppercase m_bottom_15 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
                                                    <span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
                                            </span>
                                    </span>
                            </a>
                    </div>
            </section>
            <!--product brands-->
            <div class="clearfix m_bottom_25 m_sm_bottom_20">
                    <h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
                    <div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
                            <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
                    </div>
            </div>
            <!--product brands carousel-->
            <div class="product_brands m_sm_bottom_35 m_xs_bottom_0">
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
                <a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>
            </div>
    </div>
</div>
Hello