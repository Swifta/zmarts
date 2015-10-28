<style>
    
    
    .button {
    background-color: #4ecdc4;
    text-align: center;
    border: none;
    color:#fff;
}

.newstb{
    height:25px;
    margin-top: 8px;
    
}

/*.button a {
    color: #ffffff;
    display: block;
    font-size: 14px;
    text-decoration: none;
    text-transform: uppercase;
}*/
</style>


<footer id="footer">
    <?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
    
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="span3 aboutus">
<!--          <h2>About Us </h2>-->
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


          
        </div>
        <div class="span3">
          <h2>Address</h2>
          <?php
                    if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                    foreach($this->footer_merchant_details as $admin){
                    ?>			
			<ul class="">
                            <li>
                           <?php echo $admin->address1; ?>, </li>
                          <li> <?php echo $admin->address2; ?>, </li>
                           <li><?php echo $admin->city_name; ?>, </li>
                           <li><?php echo $admin->country_name; ?>.
                            </li>
				<li><?php echo $admin->phone_number;?></li>
				<li><a href="mailto:<?php echo $admin->email; ?>" title="<?php echo $admin->email; ?>"><?php echo $admin->email; ?></a></li>
			</ul>
            <?php  } }
            else if(count($this->admin_details)>0) { foreach($this->admin_details as $admin) { ?>
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
        <div class="span3 twitter">
          <h2>Shopping Guide</h2>
          <div id="">
              <li><a href="<?php echo PATH; ?>" title="Home">Home</a></li>
                         <?php if ($this->cms_setting == 0) {
            foreach ($this->get_all_cms_title as $d) { ?>
            <?php if($d->cms_title != "Help"){ ?>
                                    <li> <a <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?> title="<?php echo $d->cms_title; ?>"> <?php echo $d->cms_title; ?></a></li>
                            <?php } ?>
                        <?php }
                    } ?>
          </div>
        </div>
        <div class="span3 facebook">
          <h2>Newsletter </h2>
         <div id="fb-root"></div>
          
			<span class="line"></span>
			<div class="clearfix"></div>
			<p>Subscribe to receive our news everyday !</p>
            <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
            <input class="newsletter newstb" type="text" name="store_subscriber" id="store_subscriber1"  placeholder="Enter Email Address" onkeypress="return check_color();"/>
		
                <button class="newsletter-btn button" type="submit" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');">Join</button>
                
        
        </div>
      </div>
    </div>
  </section>
    <?php
    }
}
?>
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="#">Privacy Policy</a>
          </li>
          <li><a href="#">Terms &amp; Conditions</a>
          </li>
          <li><a href="#">Affiliates</a>
          </li>
          <li><a href="#">Newsletter</a>
          </li>
        </ul>
      </div>
      <div id="footersocial">
        <a href="#" title="Facebook" class="facebook">Facebook</a>
        <a href="#" title="Twitter" class="twitter">Twitter</a>
        <a href="#" title="Linkedin" class="linkedin">Linkedin</a>
        <a href="#" title="rss" class="rss">rss</a>
        <a href="#" title="Googleplus" class="googleplus">Googleplus</a>
        <a href="#" title="Skype" class="skype">Skype</a>
        <a href="#" title="Flickr" class="flickr">Flickr</a>
      </div>
    </div>
      
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="span6"> All images are copyright to their owners. </div>
        <div class="span6 textright"><?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">Back to top</a>
</footer>
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

<script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery-2.0.3.min.js"></script>

 
                
                
   <script src="<?php echo PATH; ?>js/jquery.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/bootstrap.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/respond.min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/application.js"></script> 
<script src="<?php echo PATH; ?>js/bootstrap-tooltip.js"></script> 
<script defer src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.fancybox.js"></script> 
<script defer src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.tweet.js"></script> 
<script  src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/cloud-zoom.1.0.2.js"></script> 
<script  type="text/javascript" src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.validate.js"></script> 
<script type="text/javascript"  src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.carouFredSel-6.1.0-packed.js"></script> 
<script type="text/javascript"  src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.touchSwipe.min.js"></script> 
<script type="text/javascript"  src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.ba-throttle-debounce.min.js"></script> 
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/jquery.isotope.min.js"></script> 
<script defer src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/custom.js"></script>
