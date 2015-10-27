<!-- FOOTER -->
<div class="shipping-wrap">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="shipping">
                    <p><span>FREE SHIPPING </span> Offered by MAXSHOP - lorem ipsum dolor sit amet mauris accumsan vitate odio tellus</p>
                    <a href="#" class="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-wrap">
    <div class="container">
        <div class="row">

            <div class="footer clearfix">

                <div class="span3">
                    <div class="widget">
                        <h3>Customer Service</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="span3">
                    <div class="widget">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="span3">
                    <div class="widget">
                        <h3>My Account</h3>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>

                <div class="span3">
                    <div class="widget">
                        <h3>Contact us</h3>
                        <ul>
                            <li>support@maxshop.com</li>
                            <li>+38649 123 456 789 00</li>
                            <li>Lorem ipsum address street no 24 b41</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <footer class="clearfix">
                <div class="span5">
                    <p>© 2013 Maxshop Design, All Rights Reserved</p>
                </div>
                <div class="span2 back-top">
                    <a href="#"> <img src="images/back.png" alt=""></a>
                </div>
                <div class="span5">
                    <div class="social-icon">
                        <a class="rss" href=""></a>
                        <a class="twet" href=""></a>
                        <a class="fb" href=""></a>
                        <a class="google" href=""></a>
                        <a class="pin" href=""> </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- FOOTER -->
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery-1.9.1.min.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery-ui.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.cycle.all.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/modernizr.custom.17475.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.elastislide.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.carouFredSel-6.0.4-packed.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.selectBox.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/cjquery.tooltipster.min.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/jquery.prettyPhoto.js'; ?>"></script>
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/js/custom.js'; ?>"></script>

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
