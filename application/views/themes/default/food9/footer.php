<!-- Footer
================================================== -->
<div id="footer">

	<!-- Container -->
	<div class="container">
<?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
		<div class="four columns">
<a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img class="margin-top-10" alt="<?php echo $this->Lang['LOGO']; ?>" 
         src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
<p class="margin-top-15">
    <?php 
    if(strlen($stores->about_us) > 0){
        echo substr($stores->about_us, 0, 99).".....";
    }else{
echo $stores->about_us; 
    }
    ?> 
</p>
                        <div class="footer_one_social">
                            <ul class="foot_social_icons">
                                        <?php if (FB_PAGE) { ?>
                                    <li><a class="facebook1" href="<?php echo FB_PAGE; ?>"  target="blank" title="<?php echo $this->Lang['FB']; ?>"></a></li>
                                <?php }if (TWITTER_PAGE) { ?>
                                    <li><a class="twitter1" href="<?php echo TWITTER_PAGE; ?>" target="blank" title="<?php echo $this->Lang['TW']; ?>"></a></li>
                                <?php }if (LINKEDIN_PAGE) { ?>
                                    <li><a class="linke_in" href="<?php echo LINKEDIN_PAGE; ?>" target="blank" title="<?php echo $this->Lang['LINK']; ?>"></a></li>
                                <?php }if (YOUTUBE_URL) { ?>
                                    <li><a class="youtube" href="<?php echo YOUTUBE_URL; ?>" target="blank" title="<?php echo $this->Lang['YOU_TUBE']; ?>"></a></li>
            <?php } ?>
            <?php if (INSTAGRAM_PAGE) { ?>
                                    <li><a class="instagram" href="<?php echo INSTAGRAM_PAGE; ?>" target="blank" title="<?php echo $this->Lang['INST']; ?>"></a></li>
            <?php } ?>
                                 <?php if(CITY_SETTING) {
             if ($this->city_id) { ?>
                <?php foreach ($this->all_city_list as $CX) {
                    if ($this->city_id == $CX->city_id) { ?>
                                            <li><a class="rss_1" href="<?php echo PATH . 'deals/rss/' . $this->city_id . '/' . $CX->city_url; ?>" target="blank" title="<?php echo $this->Lang['RSS_FEED']; ?>"></a></li>

                    <?php }
                }
            } 

            }  else { ?>

            <li><a class="rss_1" href="<?php echo PATH . 'rss'; ?>" target="_blank" title="<?php echo $this->Lang['RSS_FEED']; ?>"></a></li>

          <?php  }?>   

                            </ul>
                        </div>
		</div>

		<div class="four columns">

			<!-- Headline -->
			<h3 class="headline footer">Shopping Guide</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
                        <li><a href="<?php echo PATH; ?>" title="Home">Home</a></li>
                         <?php if ($this->cms_setting == 0) {
            foreach ($this->get_all_cms_title as $d) { ?>
            <?php if($d->cms_title != "Help"){ ?>
                                    <li> <a <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?> title="<?php echo $d->cms_title; ?>"> <?php echo $d->cms_title; ?></a></li>
                            <?php } ?>
                        <?php }
                    } ?>
			</ul>

		</div>

		<div class="four columns">
                    <?php
                    if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                    foreach($this->footer_merchant_details as $admin){
                    ?>
			<!-- Headline -->
			<h3 class="headline footer">Address</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
                            <li>
                           <?php echo $admin->address1; ?>, </li>
                          <li> <?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.
                            </li>
				<li><?php echo $admin->phone_number;?></li>
				<li><a href="mailto:<?php echo $admin->email; ?>" title="<?php echo $admin->email; ?>"><?php echo $admin->email; ?></a></li>
			</ul>
            <?php 
            
                    }
            }else if(count($this->admin_details)>0) { foreach($this->admin_details as $admin) { ?>
			<!-- Headline -->
			<h3 class="headline footer">Address</h3>
			<span class="line"></span>
			<div class="clearfix"></div>

			<ul class="footer-links">
                            <li>
                           <?php echo $admin->address1; ?>, </li>
                           <li><?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.
                            </li>
			<li><?php echo PHONE1;?>,<?php echo PHONE2;?></li>
			<li><a class="foot_mail_icon" href="mailto:<?php echo CONTACT_EMAIL; ?>" title="<?php echo CONTACT_EMAIL; ?>"><?php echo  CONTACT_EMAIL; ?></a></li>
			</ul>
            <?php } } ?>
		</div>

		<div class="four columns">

			<!-- Headline -->
			<h3 class="headline footer">Newsletter</h3>
			<span class="line"></span>
			<div class="clearfix"></div>
			<p>Subscribe to receive our news everyday !</p>
            <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
                <button class="newsletter-btn" type="submit" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');">Join</button>
                <input class="newsletter" type="text" name="store_subscriber" id="store_subscriber1"  placeholder="Enter Email Address" onkeypress="return check_color();"/>
		</div>
<?php
    }
}
?>
	</div>
	<!-- Container / End -->

</div>
<!-- Footer / End -->

<!-- Footer Bottom / Start -->
<div id="footer-bottom">

	<!-- Container -->
	<div class="container">

		<div class="eight columns"><span><?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></span></div>
		<div class="eight columns">
<!--			<ul class="payment-icons">
				<li><img src="images/visa.png" alt="" /></li>
				<li><img src="images/mastercard.png" alt="" /></li>
				<li><img src="images/skrill.png" alt="" /></li>
				<li><img src="images/moneybookers.png" alt="" /></li>
				<li><img src="images/paypal.png" alt="" /></li>
			</ul> -->
		</div>

	</div>
	<!-- Container / End -->

</div>
<!-- Footer Bottom / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>

<script>
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
