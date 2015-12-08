<style>
    footer{
        
        background-color:  #fafbfb;
    }
    
</style>
<footer id="footer" class="type_2">
     <?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
				<div class="footer_top_part">
					<div class="container t_align_c m_bottom_20">
						<!--social icons-->
<!--						<ul class="clearfix d_inline_b horizontal_list social_icons">
							<li class="facebook m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
								<a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="twitter m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="google_plus m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li class="rss m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-rss"></i>
								</a>
							</li>
							<li class="pinterest m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li class="instagram m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="linkedin m_left_5 m_bottom_5 m_sm_left_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li class="vimeo m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-vimeo-square"></i>
								</a>
							</li>
							<li class="youtube m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-youtube-play"></i>
								</a>
							</li>
							<li class="flickr m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-flickr"></i>
								</a>
							</li>
							<li class="envelope m_left_5 m_bottom_5 relative">
								<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
								<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
									<i class="fa fa-envelope-o"></i>
								</a>
							</li>
						</ul>-->
					</div>
					<hr class="divider_type_4 m_bottom_50">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">About</h3>
								<p class="m_bottom_15">
                                                                    <a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img class="margin-top-10" alt="<?php echo $this->Lang['LOGO']; ?>" 
         src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
                                                                    
                                                                </p>
							<p class="margin-top-15">
    <?php 
    if(strlen($stores->about_us) > 0){
        echo substr($stores->about_us, 0, 99).".....";
    }else{
echo $stores->about_us; 
    }
    ?> 
</p>	
                                                        </div>
							<div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">The Service</h3>
                                                                <?php if ($this->session->get('UserID')) { ?>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><?php echo $this->Lang['MY_ACC']; ?><i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover"  href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?><i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Categories<i class="fa fa-angle-right"></i></a></li>
								</ul>
                                                              <?php  } 
                                                               else { ?>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Categories<i class="fa fa-angle-right"></i></a></li>
								</ul>
                                                              <?php  } ?>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">Shopping Guide</h3>
								<ul class="vertical_list">
                                                                    <li><a  class="color_light tr_delay_hover" href="<?php echo PATH; ?>" title="Home">Home<i class="fa fa-angle-right"></i></a></li>
									
                                                                 <?php if ($this->cms_setting == 0) {
            foreach ($this->get_all_cms_title as $d) { ?>
            <?php if($d->cms_title != "Help"){ ?>
               <li><a <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?> <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?>  class="color_light tr_delay_hover"> <?php echo $d->cms_title; ?><i class="fa fa-angle-right"></i></a></li>
                                                                                


 <?php } ?>
                        <?php }
                    } ?>
                                                                </ul>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">Catalog</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">New Collection<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Best Sellers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Specials<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<h3 class="color_light_2 m_bottom_20">Contact Us</h3>
								 <?php
                    if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                    foreach($this->footer_merchant_details as $admin){ ?>
                                                                <ul class="c_info_list">
                                                                   
                   						<li class="m_bottom_10">
										<div class="clearfix m_bottom_15">
											<i class="fa fa-map-marker f_left"></i>
											<p class="contact_e"><?php echo $admin->address1; ?>,<br><?php echo $admin->address2; ?></p>
										</div>
									</li>
									<li class="m_bottom_10">
										<div class="clearfix m_bottom_10">
											<i class="fa fa-phone f_left"></i>
											<p class="contact_e"><?php echo $admin->phone_number;?></p>
										</div>
									</li>
									<li class="m_bottom_10">
										<div class="clearfix m_bottom_10">
											<i class="fa fa-envelope f_left"></i>
											<a class="contact_e color_light" href="mailto:<?php echo $admin->email; ?>" title="<?php echo $admin->email; ?>"><?php echo $admin->email; ?></a>
										</div>
									</li>
									<li>
										<div class="clearfix">
											<i class="fa fa-clock-o f_left"></i>
											<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
										</div>
									</li>
								</ul>
                                                                <?php  } } 
                                                                
                                                                 else if(count($this->admin_details)>0) { foreach($this->admin_details as $admin) { ?>
                                                                <ul class="c_info_list">
                                                                   
                   						<li class="m_bottom_10">
										<div class="clearfix m_bottom_15">
											<i class="fa fa-map-marker f_left"></i>
											<p class="contact_e"><?php echo $admin->address1; ?>,</p>
										</div>
									</li>
									<li class="m_bottom_10">
										<div class="clearfix m_bottom_10">
											<i class="fa fa-phone f_left"></i>
											<p class="contact_e"><?php //echo $admin->phone_number;?></p>
										</div>
									</li>
									<li class="m_bottom_10">
										<div class="clearfix m_bottom_10">
											<i class="fa fa-envelope f_left"></i>
											<a class="contact_e color_light" href="mailto:<?php //echo $admin->email; ?>" title="<?php //echo $admin->email; ?>"><?php //echo $admin->email; ?></a>
										</div>
									</li>
									<li>
										<div class="clearfix">
											<i class="fa fa-clock-o f_left"></i>
											<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
										</div>
									</li>
								</ul>
                                                                 <?php  } } ?>
							</div>
						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; .<?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> .<span class="color_light"><?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></span></p>
						<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
<!--							<li><img src="images/payment_img_1.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_2.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_3.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_4.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_5.png" alt=""></li>-->
						</ul>
					</div>
				
                                </div>
                                    <?php
    }
}
?>
			</footer>
		</div>
		<!--social widgets-->
                <?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
		<ul class="social_widgets d_xs_none">
			<!--facebook-->
			<li class="relative">
				<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
<!--					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
                                        -->
<script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;

                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));														
                </script>
                <div width="100%" class="fb-comments" data-href="<?php echo PATH . $stores->store_url_title.'/'; ?>" data-num-posts="10" ></div>
                                </div>
			</li>
			<!--twitter feed-->
<!--			<li class="relative">
				<button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Latest Tweets</h3>
					<div class="twitterfeed m_bottom_25"></div>
					<a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
				</div>	
			</li>-->
			<!--contact form-->
<!--			<li class="relative">
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
			</li>-->
			<!--contact info-->
			<li class="relative">
				<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Store Location</h3>
					<ul class="c_info_list">
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_15">
								<i class="fa fa-map-marker f_left color_dark"></i>
								<p class="contact_e"><?php echo $admin->address1; ?>,<br><?php echo $admin->address2; ?>,.</p>
							</div>
							<?php //foreach ($this->get_store_details as $store) { ?>

                <div id="map_main" style="height:306px;"></div>
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                <script type="text/javascript">
                    var latlng = new google.maps.LatLng(<?php //echo $store->latitude; ?>,<?php //echo $store->longitude; ?>);
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
                        content: '<b><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $stores->store_name); ?></b><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $stores->address1); ?></p><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $stores->address2); ?></p><p><?php //echo $stores->city_name; ?>,<?php // echo $stores->country_name; ?></p>'
                    });

                    google.maps.event.addListener(marker, 'click', function() { 
                        infowindow.open(map, marker);
                    });
                    marker.setMap(map);

                </script>

        <?php //} ?></li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-phone f_left color_dark"></i>
								<p class="contact_e"><?php echo PHONE1;?>,<?php echo PHONE2;?></p>
							</div>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-envelope f_left color_dark"></i>
								<a class="contact_e default_t_color" href="mailto:<?php echo CONTACT_EMAIL; ?>" title="<?php echo CONTACT_EMAIL; ?>"><?php echo  CONTACT_EMAIL; ?></a>
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
                <?php }} ?>
		<!--custom popup-->
<!--		<div class="popup_wrap d_none" id="quick_view_product">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar">
						left popup column
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
							</div>
							carousel
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
							<div class="d_inline_middle m_left_5">
								 AddThis Button BEGIN 
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								 AddThis Button END 
							</div>
						</div>
						right popup column
						<div class="f_right half_column">
							description
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
							<div class="m_bottom_10">
								rating
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
		</div>-->
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Log In</h3>
<!--				<form>
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_15">
							<input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">
								<a href="#" class="color_dark">Forgot your password?</a><br>
								<a href="#" class="color_dark">Forgot your username?</a>
							</div>
						</li>
					</ul>
				</form>-->
				<footer class="bg_light_color_1 t_mxs_align_c">
<!--					<h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
					<a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
				--></footer>
<button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>

<script src="<?php echo PATH; ?>js/jquery.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/public.js'; ?>"></script>   
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery-2.1.0.min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/retina.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.flexslider-min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/waypoints.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.isotope.min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/owl.carousel.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.tweet.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.custom-scrollbar.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/scripts.js"></script> 

<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery-2.1.0.min.js"></script> 


<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery-ui.min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery-migrate-1.2.1.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/elevatezoom.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.tweet.min.js"></script> 

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.fancybox-1.3.4.js"></script> 


                
		
		








