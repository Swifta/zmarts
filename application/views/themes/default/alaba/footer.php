<!--markup footer-->
<footer id="footer">
    
    <?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
    
        <div class="footer_top_part p_vr_0">
                <div class="container">
                        <div class="row clearfix">
                                <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_40">
<a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img class="margin-top-10" alt="<?php echo $this->Lang['LOGO']; ?>" 
         src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
        <p class="m_bottom_15">
    <?php 
    if(strlen($stores->about_us) > 400){
        echo substr($stores->about_us, 0, 400).".....";
    }else{
echo $stores->about_us; 
    }
    ?>
        </p>
        <!--                                <a href="#" class="color_light">Read More <i class="fa fa-angle-right m_left_5"></i></a> -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_40">
                                        <h3 class="color_light_2 m_bottom_20">Shopping Guide</h3>
                                        <ul class="vertical_list">
                                                <li><a class="color_light tr_delay_hover" href="<?php echo PATH; ?>">Home<i class="fa fa-angle-right"></i></a></li>
                         <?php if ($this->cms_setting == 0) {
            foreach ($this->get_all_cms_title as $d) { ?>
            <?php if($d->cms_title != "Help"){ ?>
                                    <li> <a class="color_light tr_delay_hover" <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?> title="<?php echo $d->cms_title; ?>"> <?php echo $d->cms_title; ?>
                                        <i class="fa fa-angle-right"></i></a></li>
                            <?php } ?>
                        <?php }
                            } ?>
                                        </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30 m_bottom_40">

                                        <h3 class="color_light_2 m_bottom_20">Address</h3>
                                        <ul class="vertical_list">
            <?php
            if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                foreach($this->footer_merchant_details as $admin){
            ?>
                            <li><?php echo $admin->address1; ?>, </li>
                          <li> <?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.</li>
                            <li><?php echo $admin->phone_number;?></li>
                            <li><a href="mailto:<?php echo $admin->email; ?>" title="<?php echo $admin->email; ?>"><?php echo $admin->email; ?></a></li>
            <?php 
            
                }
            }else if(count($this->admin_details)>0) { foreach($this->admin_details as $admin) { ?>
                            <li><?php echo $admin->address1; ?>, </li>
                           <li><?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.</li>
			<li><?php echo PHONE1;?>,<?php echo PHONE2;?></li>
			<li><a class="foot_mail_icon" href="mailto:<?php echo CONTACT_EMAIL; ?>" title="<?php echo CONTACT_EMAIL; ?>"><?php echo  CONTACT_EMAIL; ?></a></li>
            <?php } } ?>
                                        </ul>
                                </div>
                        </div>
                </div>
                <hr class="divider_type_4 m_bottom_25">
                <div class="container">
                        <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_10">
                                        <!--social icons-->
                                        <ul class="clearfix horizontal_list social_icons">
                                            <?php if (FB_PAGE) { ?>
                                                <li class="facebook m_bottom_5 relative">
                                                        <span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo $this->Lang['FB']; ?></span>
                                                        <a href="<?php echo FB_PAGE; ?>" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
                                                                <i class="fa fa-facebook"></i>
                                                        </a>
                                                </li>
                                            <?php }if (TWITTER_PAGE) {  ?>
                                                <li class="twitter m_left_5 m_bottom_5 relative">
                                                        <span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo $this->Lang['TW']; ?></span>
                                                        <a href="<?php echo TWITTER_PAGE; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                                                <i class="fa fa-twitter"></i>
                                                        </a>
                                                </li>
                                            <?php }if (INSTAGRAM_PAGE) { ?>
                                                <li class="instagram m_left_5 m_bottom_5 relative">
                                                        <span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo $this->Lang['INST']; ?></span>
                                                        <a href="<?php echo INSTAGRAM_PAGE; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                                                <i class="fa fa-instagram"></i>
                                                        </a>
                                                </li>
                                            <?php }if (LINKEDIN_PAGE) {?>
                                                <li class="linkedin m_bottom_5 m_left_5 m_sm_left_5 relative">
                                                        <span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo $this->Lang['LINK']; ?></span>
                                                        <a href="<?php echo LINKEDIN_PAGE; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                                                <i class="fa fa-linkedin"></i>
                                                        </a>
                                                </li>
                                            <?php }if (YOUTUBE_URL) {  ?>
                                                <li class="youtube m_left_5 m_bottom_5 relative">
                                                        <span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo $this->Lang['YOU_TUBE']; ?></span>
                                                        <a href="<?php echo YOUTUBE_URL; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
                                                                <i class="fa fa-youtube-play"></i>
                                                        </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_30">
                                        <h3 class="color_light_2 d_inline_middle m_md_bottom_15 d_xs_block">Newsletter</h3>
                                        <form id="newsletter2" class="d_inline_middle m_left_5 subscribe_form_2 m_md_left_0">
                                            <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
                                                <input type="email" name="store_subscriber" id="store_subscriber1" placeholder="Enter Email Address" onkeypress="return check_color();" class="r_corners f_size_medium w_sm_auto m_mxs_bottom_15" name="newsletter-email">
                                                <button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover m_left_5 m_mxs_left_0" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');">Subscribe</button>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
        <!--copyright part-->
        <div class="footer_bottom_part">
                <div class="container clearfix t_mxs_align_c">
                        <p class="f_left f_mxs_none m_mxs_bottom_10"><?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></p>
                        <!--<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
                                <li><img src="images/payment_img_1.png" alt=""></li>
                                <li class="m_left_5"><img src="images/payment_img_2.png" alt=""></li>
                                <li class="m_left_5"><img src="images/payment_img_3.png" alt=""></li>
                                <li class="m_left_5"><img src="images/payment_img_4.png" alt=""></li>
                                <li class="m_left_5"><img src="images/payment_img_5.png" alt=""></li>
                        </ul>-->
                </div>
        </div>
<?php
    }
}
?>
</footer>



</div> <!--this is the end of the wrapper div -->


<!--
http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266
-->

<ul class="social_widgets d_xs_none">
 <?php foreach ($this->get_store_details as $store) { ?>   
        <!--facebook-->
        <li class="relative">
                <button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
                <div class="sw_content">
                    <figure>
                    <div class="title_outer">
                        <h2 class="title_inner2"><?php echo $this->Lang['COMM']; ?></h2>  
                    </div>                    
                        <div class="fbok_comment wloader_parent" style="min-height:220px;">
                            <i class="wloader_img">&nbsp;</i>
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;

                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));														
                            </script>
                            <div width="100%" class="fb-comments" data-href="<?php echo PATH . $store->store_url_title.'/'; ?>" data-num-posts="10" ></div>
                        </div> 
                    </figure>
                        <!--<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
                        <iframe src="" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>-->
                </div>
        </li>
 <?php } ?>
        <!--twitter feed-->
        <li class="relative">
                <button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
                <div class="sw_content">
                        <h3 class="color_dark m_bottom_20">Latest Tweets</h3>
                        <div class="twitterfeed m_bottom_25"></div>
                        <a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="<?php echo TWITTER_PAGE; ?>">Follow on Twitter</a>
                </div>	
        </li>
        <!--contact form-->
        <!--<li class="relative">
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
                    <figure>
        <?php foreach ($this->get_store_details as $store) { ?>

                <div id="map_main" style="height:306px;"></div>
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                <script type="text/javascript">
                    var latlng = new google.maps.LatLng(<?php echo $store->latitude; ?>,<?php echo $store->longitude; ?>);
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
                        content: '<b><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->store_name); ?></b><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->address1); ?></p><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $store->address2); ?></p><p><?php echo $store->city_name; ?>,<?php echo $store->country_name; ?></p>'
                    });

                    google.maps.event.addListener(marker, 'click', function() { 
                        infowindow.open(map, marker);
                    });
                    marker.setMap(map);

                </script>

        <?php } ?>
                    </figure>
                </div>	
        </li>
</ul>


<button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
<!--scripts include-->
<!--<script src="/js/jquery-2.1.0.min.js"></script>-->

<script>
    var Path = "<?php echo PATH; ?>";
function store_subscriber_validate1(store_url)
{
	var email = $("#store_subscriber1").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var x=0;
	if(email == '') {
			//$('.sub_cont_inner').css('border','1px solid red');
			x++;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			x++;
			//$('.sub_cont_inner').css('border','1px solid red');
		}else {
			x=0;
			//$('#email_subscriber_error1').html('');
		}
	if(x==0){
		var url= Path+'users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				//$('.sub_cont_inner').css('border','1px solid red');
				$("#store_subscriber1").val('');
				$("#store_subscriber1").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				return false;
			}
			add_store_email_subscriber(email,store_url);
			
		});
	}
	return false;
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
</script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/retina.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/waypoints.min.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/jquery.tweet.min.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/jquery.custom-scrollbar.js"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name; ?>/js/scripts.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
