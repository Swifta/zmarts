<?php $this->load_map = TRUE;?>

<script type="text/javascript">
$(document).ready(function(e) {
	
    $('.kkcountdown').kkcountdown({
		
        addClass: 'swifta little-space',
		daysText:'D',
		hoursText: 'H',
		minutesText: 'm',
		secondsText: 's'});
		
});
</script>

<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>" class="default_t_color"><?php echo $this->Lang['HOME']; ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li class="m_right_10"><a href="<?php echo PATH.$this->storeurl; ?>/deal.html" title="<?php echo $this->Lang['DEALS']; ?>" class="default_t_color"><?php echo $this->Lang["DEALS"]; ?></a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
						<li><a  class="default_t_color"><?php //echo ucfirst($products->deal_title); ?></a></li>
					</ul>
				</div>
			</section>
					<div class="row clearfix">
<!--						<aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
							widgets
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									Categories list
									<ul class="categories_list">
										<li class="active" >
                                                                                    
											<a href="#" class="f_size_large scheme_color d_block relative">
												<b <?php if (isset($this->is_product)) echo "active"; ?>><?php echo $this->Lang['PRODUCTS']; ?></b>
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
							
							wishlist
							
							Bestsellers
  
							tags
							
						</aside>-->
					
							<!--banners-->
<!--							<div class="row clearfix m_bottom_45">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_3.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_4.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>Free<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
											</span>
										</span>
									</a>
								</div>
							</div>-->
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
}
?>
							<div class="clearfix">
								<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">Deals</h2>
								<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--bestsellers carousel-->
                                                         <?php 
		   		$this->all_deals_list =  $this->all_deals_list;
		   ?>
           <?php 
if((count($this->all_deals_list)>0) ) { 
?> 
							<div class="nc_carousel m_bottom_30 m_sm_bottom_20">
  <?php if (count($this->all_deals_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_deals_list as $deals_categories){
		$symbol = CURRENCY_SYMBOL; ?>

<?php //if((count($this->all_deals_list)>0) ) {
    //$displayed = 1;	
    //foreach($this->all_deals_list as $best) {  
    // $symbol = CURRENCY_SYMBOL;
    
 ?> 
								<figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
									<!--product preview-->
									
                                                                        
                                                                          <a class="d_block relative pp_wrap m_bottom_15" href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(true) { ?>
                <img class="tr_all_hover" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img class="tr_all_hover" src="<?php echo PATH .'images/deals/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img class="tr_all_hover" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        
					</a>
                                                                        
                                                                        
                                                                        
                                                                        
                                     
                                                                        
                                                                        <!--description and price of product-->
									<figcaption class="p_vr_0">
                                                                           
										<h5 class="m_bottom_10"><a href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>" class="color_dark"><?php 
                 
                 echo $deals_categories->deal_title ?></a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<?php $avg_rating = $deals_categories->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>

											</ul>
											<p class="scheme_color f_size_large m_bottom_15"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"> <a class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15" href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>">Buy now</a></button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" class="color_dark">Add to Compare</a></li>
												
											</ul>
										</div>
									</figcaption>
								</figure>
 <?php
     if($l >= 4){
         break;
     }
     $l++;
     
        }
    }
 ?>
							</div>
                                                          <?php
 }
 ?>
							<!--product brands-->
							<div class="clearfix m_bottom_25 m_sm_bottom_20">
								<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
								<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--product brands carousel-->
                                                         
 
						</section>
					</div>
				</div>
			</div>
<script type="text/javascript">
$(document).ready(function(e) {
    $('.thumb-icon').css('padding-left', 0);
	 $('.thumb-icon').focus(function(e) {
		 
		  $('.thumb-icon').css('text-decoration', 'none');
        
    });
	
	
	
	 $('.thumb-icon').hover(function (e){
		  $('.thumb-icon').css('text-decoration', 'none');
		 }, function (e){
			  $('.thumb-icon').css('text-decoration', 'none');
	});
	
});
</script>