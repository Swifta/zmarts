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
<section class="container">
     <?php
$font_color = "";
$bg_color ="";
$font_size ="";
$array_transition = array("curtain-1", "cube");
?>
				<div class="row clearfix">
					<!--slider-->
					<div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
						<div class="flexslider animate_ftr long">
                                                    

							<ul class="slides">
                                                         <?php        $banner_check ="";
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
//                                else if($i==4) { 
//                                    $banner_link = $m->banner_4_link; 
//                                }
                                
                            }
?>
								<li >
                                                                    
									<img  src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>" data-custom-thumb="images/slide_01.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
								<?php
                    }
                    else{
                        //echo "No Image file";
?>
                                                                <li>
                                                                    
									<img src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/banners/banner-<?php echo $i; ?>.jpg" alt="" />
								<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
                                                                </li>
								 <?php
                    }
                }
        }
} else{?>
                                                                
                                                                <li>
                                                                    
									<img src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/banners/banner-1.jpg" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/healthcare2/banners/banner-1.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
                                                                <li>
                                                                    
									<img src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/banners/banner-2.jpg" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/healthcare2/banners/banner-2.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
                                                                <li>
                                                                    
									<img src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/banners/banner-3.jpg" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/healthcare2/banners/banner-3.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
                                                                 <li>
                                                                    
									<img src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/banners/banner-4.jpg" alt="<?php echo $this->Lang['LOGO']; ?>" title = "<?php echo $banner_link; ?>" data-custom-thumb="<?php echo PATH; ?>bootstrap/themes/images/healthcare2/banners/banner-4.jpg">
									<section class="slide_caption t_align_c d_xs_none">
										<div class="f_size_large color_light tt_uppercase slider_title_3 m_bottom_10">Meet New Theme</div>
										<hr class="slider_divider d_inline_b m_bottom_10">
										<div class="color_light slider_title_4 tt_uppercase t_align_c m_bottom_45 m_md_bottom_20"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
										<div class="color_light slider_title_2 m_bottom_45 m_sm_bottom_20">$<b>15.00</b></div>
										<a href="#" role="button" class="d_sm_inline_b button_type_4 bg_scheme_color color_light r_corners tt_uppercase tr_all_hover">Buy Now</a>
									</section>
								</li>
                                                                <?php
}
?>
							</ul>
                                                   
						</div>
					</div>
					<!--banners-->
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
                                        <div class="col-lg-3 col-md-3 col-sm-3 t_xs_align_c s_banners">
<!--						<a href="#" class="d_block d_xs_inline_b m_bottom_20 animate_ftr animate_horizontal_finished">
							<img src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>" alt="">
						</a>-->
						<a   href="<?php echo $ads_link; ?>" class="d_block d_xs_inline_b m_xs_left_5 animate_ftr m_mxs_left_0 animate_horizontal_finished">
							 <img height="160px" src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>" alt="">
						</a>
					</div>
                                         <?php }else{?>
                                         <div class="col-lg-3 col-md-3 col-sm-3 t_xs_align_c s_banners">
<!--						<a href="#" class="d_block d_xs_inline_b m_bottom_20 animate_ftr animate_horizontal_finished">
							<img src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>" alt="">
						</a>-->
						<a href="<?php //echo $ads_link; ?>" class="d_block d_xs_inline_b m_xs_left_5 animate_ftr m_mxs_left_0 animate_horizontal_finished">
							<img height="160px" src="<?php echo PATH; ?>bootstrap/themes/images/electronics/ads/<?php echo ($i+2); ?>.jpg" alt="">
						</a>

					</div>
                                         <?php }}?> 
            <?php  } } ?>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<!--banners-->
					<section class="row clearfix">
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
						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
							<a href="<?php echo $ads_link; ?>" class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30 animate_horizontal_finished">
							
                                                            <img height="160px" width="600px" src="<?php echo PATH; ?>images/merchant/ads/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_ads.png'; ?>" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
										<span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
                                            <?php }else{?>
                                            <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
                                              
							<a href="<?php //echo $ads_link; ?>" class="d_block banner animate_ftr wrapper r_corners relative m_xs_bottom_30 animate_horizontal_finished">
							
                                                            <img height="50px" width="50px" src="<?php echo PATH; ?>bootstrap/themes/images/fashion1/ads/<?php echo ($i+2); ?>.jpg" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">New Collection!</span>
										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
										<span class="d_block color_light tt_uppercase m_bottom_25 m_xs_bottom_10 banner_title"><b>Colored Fashion</b></span>
										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
                                            <?php }}?> 
            <?php  } } ?>
<!--						<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_50 m_sm_bottom_35">
							<a href="#" class="d_block banner animate_ftr wrapper r_corners type_2 relative animate_horizontal_finished">
								<img src="images/banner_img_2.png" alt="">
								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
									<span class="d_inline_middle">
										<span class="d_block scheme_color banner_title type_2 m_bottom_5 m_mxs_bottom_5"><b>-50%</b></span>
										<span class="d_block divider_type_2 centered_db m_bottom_5 d_sm_none"></span>
										<span class="d_block color_light tt_uppercase m_bottom_15 banner_title_3 m_md_bottom_5 d_mxs_none">On All<br><b>Sunglasses</b></span>
										<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>-->
					</section>
					<div class="row clearfix">
						<aside class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
							<!--widgets-->
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
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Compare Products</h3>
								</figcaption>
                                                            <?php 
if(count($this->get_product_categories) > 0) {
?>
								<div class="widget_content">
                                                                    <?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
									<div class="clearfix m_bottom_15 relative cw_product">
<!--										<img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">-->
                                                                                 <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <img  width="50" height="50" 
                          
                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>      
                          
           <img  class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0"  src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0"  src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>               
                          
                          
                          <?php echo substr($products->deal_title, 0, 17)."..";  ?></a>
										<a href="#" class="color_dark d_block bt_link"> <?php echo substr($products->deal_title, 0, 17)."..";  ?></a>
<!--										<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
									--></div>
									<hr class="m_bottom_15">
                                                                         <?php
     if($displayed >= 3){
         break;
     }
     $displayed++;
     
        }
    }
 ?>
<!--									<div class="clearfix m_bottom_25 relative cw_product">
										<img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Elemenum vel</a>
										<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
									</div>-->
									<a href="#" class="color_dark"><i class="fa fa-files-o m_right_10"></i>Go to Compare</a>
								</div>
                                                            <?php           } 
   ?>
						
							</figure>
							<!--wishlist-->
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Wishlist</h3>
								</figcaption>
								<div class="widget_content">
									You have no product to compare.
								</div>
							</figure>
							<!--banner-->
<!--							<a href="#" class="widget animate_ftr d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>-->
							<!--Bestsellers-->
                                                         <?php 
if(count($this->get_product_categories) > 0) {
?>
							<figure class="widget animate_ftr shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Bestsellers</h3>
								</figcaption>
                                                             <?php if($this->product_setting) {
    $displayed = 1;	
    foreach($this->get_product_categories as $products) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?>
								<div class="widget_content">
									<div class="clearfix m_bottom_15">

										
                                                                                <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <img  width="50" height="50" 
                          
                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>      
                          
           <img class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0"  src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0"  src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
        <?php } ?>               
                          
                          
                          <?php echo substr($products->deal_title, 0, 17)."..";  ?></a>
                                                                           <!--rating-->
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
										
												<?php $avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
												
                                                                                    
										</ul>
										<p class="scheme_color"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>
									</div>
									<hr class="m_bottom_15">
									
									
									
								</div>
                                                             <?php
     if($displayed >= 3){
         break;
     }
     $displayed++;
     
        }
    }
 ?>
							</figure>
                                              <?php           } 
   ?>
							<!--tags-->
							<figure class="widget animate_ftr shadow r_corners wrapper">
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
						<section class="col-lg-9 col-md-9 col-sm-9">
                                                   
							<h2 class="tt_uppercase color_dark m_bottom_10 heading5 animate_ftr">Featured products</h2>
							<!--products-->
							<section class="products_container a_type_2 category_grid clearfix m_bottom_25">
								<!--product item-->
                                                                     <?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";


?>
        <?php $i = 1;
if((count($this->best_seller)>0) || (count($this->get_product_categories)>0)) { 
?> 
        <?php if((count($this->best_seller)>0) || strnlen($this->best_seller >10)) {
    $displayed = 1;	
    ?>
                                                                      <?php      foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
    
 ?> 

        							<div class="product_item hit w_xs_full">
                                                        
									<figure class="r_corners photoframe animate_ftb type_2 t_align_c tr_all_hover shadow relative">
										<!--product preview-->
<!--										<a href="#" class="d_block relative pp_wrap m_bottom_15">
											hot product
											<span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
											<img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>-->
	
                                                                                 <a class="d_block relative pp_wrap m_bottom_15" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
       <span class="hot_stripe"><img src="<?php echo PATH; ?>themes/default/css/fashion1/images/hot_product.png" alt=""></span>
 <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
            $size = getimagesize($image_url); 
        if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } else { ?>
         <img style="height: 200px;" src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
        <?php } ?>
        <?php } else { ?>
            <img style="height: 200px;" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
        <?php } ?>
            <?php $bestb = ""; ?>
<!--            <span role="button" data-sfid="<?php //$best->deal_title; ?>" data-popup="#quick_view_product<?php //echo $i; ?>" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">view more</span>
               -->
            </a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a  href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>" class="color_dark"><?php 
                 
                 echo $best->deal_title ?></a></h5>
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
												<?php $avg_rating = $best->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
             
											</ul>
											<p class="scheme_color f_size_large m_bottom_15"><?php echo $symbol . " " . number_format($best->deal_value); ?></p>	
                                                                                        <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"  ><a class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>">Add to Cart </a></button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
                                                                                                    
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
                                                                            
                                                                        
                                                                        
                                                                       
									</figure>
                                                        
								</div>
                                                                 
                                                                  <?php        // if($displayed >= 3){
        //break;
  //   }
  //   $displayed++;
     
     //   } ?>
                                                               
                                                                       
                                                                   
                                                                  <?php
    
   // }
 ?>
								<!--product item-->
								
								<!--product item-->
								
								<div class="popup_wrap d_none" id="quick_view_product<?php echo $i; ?>">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar">
						<!--left popup column-->
                                                
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
	     
                                                            <span class="hot_stripe"><img src="<?php echo PATH; ?>themes/default/css/fashion1/images/hot_product.png" alt=""></span>
								
                                                                <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" class="tr_all_hover" alt="">
							
   
                                                        </div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
									<li data-src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>"><img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" alt=""></li>
								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle">Share this:</div>
							<div class="d_inline_middle m_left_5">
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
									 <?php if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
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
									<td><span class="color_dark"><?php echo $best->deal_title; ?></span></td>
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
							<table class="description_table type_2 m_bottom_15">
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
							</table>
   
							<div class="clearfix m_bottom_15">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
 
					</div>
				</div>
			</section>
                                                                   
		</div>
                                                                
                                                                     <?php
    if($displayed >= 3){
        // break;
     }
     $displayed++;
     
        }
    }
 ?>
							</section>
                                                        <?php
 }
 ?>
							<!--banners-->
							<div class="row clearfix m_bottom_45">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="<?php echo PATH; ?>themes/default/css/fashion1/images/banner_img_3.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
											</span>
										</span>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
										<span class="d_inline_middle">
											<img class="d_inline_middle m_md_bottom_5" src="<?php echo PATH; ?>themes/default/css/fashion1/images/banner_img_4.png" alt="">
											<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
												<b>Good<br class="d_none d_sm_block"> Shipping</b><br><span class="color_dark">On All Items</span>
											</span>
										</span>
									</a>
								</div>
							</div>
							<div class="clearfix">
								<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">Deals</h2>
								<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none m_mxs_bottom_5">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners nc_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners nc_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--bestsellers carousel-->
                                                         ;
		  
							<div class="nc_carousel m_bottom_30 m_sm_bottom_20">
<?php 
if(count($this->get_deals_categories) > 0) {
    

if(($this->deal_setting)) {
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

							<figure class="r_corners photoframe animate_ftb long tr_all_hover type_2 t_align_c shadow relative">
									<!--product preview-->
			
                                                                        <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
                   <span class="hot_stripe"><img src="<?php //echo $image_src_instance; ?>" alt=""></span>
                                                                           
                <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" title="<?php echo $deals_categories->deal_title; ?>">
                   <img class="tr_all_hover" src="<?php echo $image_src_instance; ?>" alt="<?php echo $deals_categories->deal_title; ?>">
                </a>
                <div class="overlay">
                    <a  href="<?php echo $image_src_realsize_instance; ?>" class="zoom prettyPhoto"></a>
                    <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="link"></a>
                </div>
                                                                             
<!--                                                    <span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>                     
                                                                        -->
                                                                        
                                                                        
                                                                        </a>
                                                                        
                                                                        
                                                                        <!--description and price of product-->
									<figcaption class="p_vr_0">
                                                                           
										<h5 class="m_bottom_10"><a href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>" class="color_dark"><?php 
                 
                 echo $best->deal_title ?></a></h5>
										<div class="clearfix">
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
												<?php $avg_rating = $best->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>

											</ul>
                                                                                         <div class="time_price">                                                
                <span class="kkcount-down-detail" time="<?php echo $deals_categories->enddate; ?>" >
                </span>                                                    
            </div>
											<p class="scheme_color f_size_large m_bottom_15"><?php echo $symbol . " " . number_format($best->deal_value); ?></p>
										</div>
										<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"> <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Buy Now</a></button>
										<div class="clearfix m_bottom_5">
											<ul class="horizontal_list d_inline_b l_width_divider">
												<li class="m_right_15 f_md_none m_md_right_0"><a href="#" onclick="addToWishList('<?php echo $best->deal_id; ?>','<?php echo addslashes($best->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" onclick="addToCompare('<?php echo $best->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" class="color_dark">Add to Compare</a></li>
												
											</ul>
										</div>
									</figcaption>
								</figure>
 <?php
     if($displayed >= 4){
         break;
     }
     $displayed++;
     
        }
    }
    
}
 ?>
                                                           
							
                                                        </div>
                                                          
 <button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
							<!--product brands-->
							<div class="clearfix m_bottom_25 m_sm_bottom_20">
								<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
								<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
								</div>
							</div>
							<!--product brands carousel-->
                                                         <?php 
if(count($this->get_product_categories) > 0) {
?>
							<div class="product_brands with_sidebar m_sm_bottom_35">
                                                            <?php if(count($this->best_seller)>0) {
    $displayed = 1;	
    foreach($this->best_seller as $best) {  
     $symbol = CURRENCY_SYMBOL;
     
 ?> 
<!--								<a href="#" class="d_block t_align_c animate_fade"><img src="images/brand_logo.jpg" alt=""></a>-->
								<a class="d_block t_align_c animate_fade" href="<?php echo PATH . $best->store_url_title . '/product/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
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
							   <?php
     if($displayed >= 8){
         break;
     }
     $displayed++;
     
        }
    }
           ?>
                                                        </div>
                                                      <?php

 } 
   ?>  
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