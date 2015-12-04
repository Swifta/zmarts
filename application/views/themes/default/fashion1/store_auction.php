<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	
<script src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jquery(1).js"  type="text/javascript"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
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
          <section class="breadcrumbs" style="margin-top: px;">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>" class="default_t_color"><?php echo $this->Lang['HOME']; ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="<?php echo PATH.$this->storeurl; ?>/auction.html"  title="<?php echo $this->Lang['AUCTION']; ?>" class="default_t_color"><?php echo $this->Lang["AUCTION"]; ?></a></li>
					</ul>
				</div>
			</section>                            
                                   
<div class="page_content_offset" style="<?php echo $bg_color; ?>">
				<div class="container">
					<!--banners-->
                                      
			
                 
                                        
                                        
                                        
                                        
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
                                        
					<div class="row clearfix">
                                            
						
						<section class="col-lg-9 col-md-9 col-sm-9">
							
							<!--products-->
							
							<!--banners-->
							
							
							
							<div class="nc_carousel m_bottom_30 m_sm_bottom_20 owl-carousel owl-theme" style="display: block; opacity: 1;">
                                                            <!--bestsellers carousel-->
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
								<div class="owl-wrapper-outer"><div class="owl-wrapper" style="display: block; width: 3396px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
                                                                        <div class="owl-item" style="width: 283px;"><div class="owl-wrapper-outer autoHeight" style=""><div class="owl-wrapper-outer"><div class="owl-wrapper" style="display: block; width: 3396px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
                                                                                        
                                                                                        
                                                                                        
                                                                                           
                                                                                        
                                                                                        
                                                                                        <div class="owl-item" style="width: 283px;"><figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative animate_vertical_finished">
									<!--product preview-->
                                                                        <?php 
                   if(strlen($products->deal_title) > 18){
                       echo substr($products->deal_title, 0, 17)."..";
                   }
                   else{
                       echo $products->deal_title; 
                   }
                   ?>
									<a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>" class="d_block relative wrapper pp_wrap m_bottom_15">
										<img src="<?php echo $image_src_instance; ?>" alt="<?php echo $products->deal_title; ?>" class="tr_all_hover" alt="">
										<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
									</a>
									<!--description and price of product-->
									<figcaption class="p_vr_0">
										<h5 class="m_bottom_10"><a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>" class="color_dark"><?php 
                 
                 echo $products->deal_title; ?></a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<?php $avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15"> <?php echo $symbol . " " . number_format($products->deal_value); ?></p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15" title="Buy Now"><a class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" >Buy Now</a></button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" class="color_dark">Add to Wishlist</a></li>
												<li class="f_md_none"><a onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" class="color_dark">Add to Compare</a></li>
											</ul>
										</div>
									</figcaption>
								</figure></div></div></div></div></div><div class="owl-item" style="width: 283px;"><div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div></div></div>
								
								
								
							<div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page"><span class=""></span></div></div></div>
                                                        
                                                        
                                                              <?php 
                        if($l == 4){
                           // break;
                        }
                        $l++;
                        
                    } 
                        ?>

		<?php } ?>
						
                                                        </div>
                                                        
                                                        
                                                   	
								
								
								
								
								
								
								
								
								
							
						</section>
					</div>
				</div>
			</div>