<!-- FOOTER -->
<style>
    .cb{
        
       /* background-color: #144f5d;*/
    }
    </style>
<?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>

<div class="footer-wrap">
    <div class="con">
        <div class="row">

            <div class="footer clearfix">

                <div class="span3">
                    <div class="widget">
<a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img class="margin-top-10" alt="<?php echo $this->Lang['LOGO']; ?>" 
         src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
                        <ul>
<li>
    <?php 
    if(strlen($stores->about_us) > 400){
        echo substr($stores->about_us, 0, 400).".....";
    }else{
echo $stores->about_us; 
    }
    ?> 
</li>
                        </ul>
                    </div>
                </div>

                <div class="span3">
                    <div class="widget">
			<h3>Shopping Guide</h3>
			<ul>
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
                </div>

                <div class="span3">
                    <div class="widget">
                    <?php
                    if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                    foreach($this->footer_merchant_details as $admin){
                    ?>
			<!-- Headline -->
			<h3>Address</h3>

			<ul>
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
			<h3>Address</h3>

			<ul>
                            <li>
                           <?php echo $admin->address1; ?>, </li>
                           <li><?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.
                            </li>
			<li><?php echo PHONE1;?>,<?php echo PHONE2;?></li>
			<li><a class="foot_mail_icon" href="mailto:<?php echo CONTACT_EMAIL; ?>" title="<?php echo CONTACT_EMAIL; ?>"><?php echo  CONTACT_EMAIL; ?></a></li>
			</ul>
            <?php break;} } ?>
                    </div>
                </div>

                <div class="span3">
                    <div class="widget">
			<!-- Headline -->
			<h3>Newsletter</h3>
                        <ul>
			<li>Subscribe to receive our news everyday !</li>
                        </ul>
            <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
                <input class="newsletter" type="text" name="store_subscriber" id="store_subscriber1"  placeholder="Enter Email Address" onkeypress="return check_color();"/>
                <button class="btn btn-success cb"  type="submit" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');">Join</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <footer class="clearfix">
                <div class="span5">
                    <p><?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></p>
                </div>
                <div class="span2 back-top">
                    <a href="#"> <img src="<?php echo PATH; ?>bootstrap/img/back.png" alt=""></a>
                </div>
                <div class="span5">
                    <div class="social-icon">
            <?php if (FB_PAGE) { ?>
                <a class="fb" href="<?php echo FB_PAGE; ?>"  target="blank" title="<?php echo $this->Lang['FB']; ?>"></a>
            <?php }if (TWITTER_PAGE) { ?>
                <a class="twet" href="<?php echo TWITTER_PAGE; ?>" target="blank" title="<?php echo $this->Lang['TW']; ?>"></a>
            <?php }if (LINKEDIN_PAGE) { ?>
                <!--<a class="linkedin" href="<?php echo LINKEDIN_PAGE; ?>" target="blank" title="<?php echo $this->Lang['LINK']; ?>"></a>-->
            <?php }if (YOUTUBE_URL) { ?>
                <a class="google" href="<?php echo YOUTUBE_URL; ?>" target="blank" title="<?php echo $this->Lang['YOU_TUBE']; ?>"></a>
            <?php } ?>
            <?php if (INSTAGRAM_PAGE) { ?>
                <a class="instagram" href="<?php echo INSTAGRAM_PAGE; ?>" target="blank" title="<?php echo $this->Lang['INST']; ?>"></a>
            <?php } ?>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

<?php
break;
    }
}
?>
<!-- FOOTER -->
<?php if(false){ ?>
<script src="<?php echo PATH.'bootstrap/themes/js/jquery-2.1.4.min.js'; ?>"></script>
<?php } ?>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery-ui.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.cycle.all.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/modernizr.custom.17475.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.elastislide.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.carouFredSel-6.0.4-packed.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.selectBox.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.tooltipster.min.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.prettyPhoto.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/custom.js'; ?>"></script>
<?php if(false){ ?>
<script src="<?php echo PATH.'bootstrap/themes/js/jquery-xyx.js'; ?>"></script>
<?php } ?>
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
