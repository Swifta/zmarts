<div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="<?php echo PATH."themes/default/images/leo/";?>2.png"><span class="f-text">Free Shipping within Nigeria!</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="<?php echo PATH."themes/default/images/leo/";?>3.png"><span class="f-text" style="text-decoration:none; color:#FFF;">Call us! <?php
								if (PHONE1) { 	echo PHONE1;	} else { }?>  </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="wrap">
	                <div class="copy">
			           <p>© 2015  <a href="<?php echo PATH; ?>" target="_blank"><?php echo SITENAME; ?></a></p>
		            </div>
		       <div class="f-list2">
				<ul>
					<li class="active"><a href="about.html">About Us</a></li> |
					<li><a href="<?php echo PATH.$this->storeurl; ?>"><?php echo $this->storeurl;?></a></li> |
					<li><a href="<?php echo PATH."near-map.html"; ?>">Near Me Products</a></li> |
					<li><a href="<?php echo PATH."contactus.html"; ?>">Contact Us</a></li> 
				</ul>
			  </div>
				<div class="clear"></div>
		      </div>
			</div>
            
		</div>
        
        <script type="text/javascript">
				
	function check_subscribe(){
		

					
	var email = $("#subscribe").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	$('#email_subscriber_error').text('');
	var x=0;
	
	
	if(email == '') {
		$('.subscribe_lft_txt_field').css('border','1px solid red');
		x++;
	}else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
		x++;
		$('.subscribe_lft_txt_field').css('border','1px solid red');
	}else {
		x=0;
		
	}
	
	$('#email_subscriber_error').html('');
	if(x > 0){
		
		$('#email_subscriber_error').html('<?php echo $this->Lang["INV_EMAIL"];?>');
		
	}else if(x == 0){
		
		var url= '<?php echo PATH; ?>users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('.subscribe_lft_txt_field').css('border','1px solid red');
				$("#subscribe").val('');
				$("#subscribe").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				$('#email_subscriber_error').text('<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				return false;
			}else{
				
				var url= "<?php echo PATH; ?>users/user_subscriber/?email="+email;
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
						<?php $this->respose = "Operation was successful!";?>
						window.location.href= "<?php echo PATH.$this->storeurl;?>";
						
					},
					error:function()
					{
						<?php $this->error_respose = "Error in connection. Please check your network.";?>
						window.location.href= "<?php echo PATH.$this->storeurl;?>";
						
					}
				});
			}
		});
	}
}
            
		</script>

