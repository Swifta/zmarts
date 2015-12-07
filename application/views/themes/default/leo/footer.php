<?php 
	$d_count = count($this->footer_merchant_details);
	$m_phone_number =  $this->footer_merchant_details->current()->phone_number;
	$m_email =  $this->footer_merchant_details->current()->email;
	$m_address1 =  $this->footer_merchant_details->current()->address1;
	$m_address2 =  $this->footer_merchant_details->current()->address2;
	$m_city_latitude =  $this->footer_merchant_details->current()->city_latitude;
	$m_city_longitude = $this->footer_merchant_details->current()->city_longitude;
	$m_city_name =  $this->footer_merchant_details->current()->city_name;
	$m_country_name = $this->footer_merchant_details->current()->country_name;
	$a_phone_number =  $this->admin_details->current()->phone_number;
	$a_email = $this->admin_details->current()->email;
	$s_website = PATH.$this->storeurl;
	$s_terms_conditions = PATH."";
	foreach($this->about_us_footer as $f)  
		$this->about_us_footer = $f;        
	    
	$s_store_name = $this->about_us_footer->store_name;
	
	$s_about_us = $this->about_us_footer->about_us;
	$s_about_us_more = common::truncate_about_us($this->about_us_footer->about_us, 100);
	
	
	
 ?>

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
        
        
        
		<div class="footer-middle">
			<div class="wrap">
		   
		   <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3 id="id_swifta_about_us">About Us</h3>
						<p style="color: #FFF;font-size: 0.85em;line-height: 1.8em;"> <a href="<?php echo PATH.$this->storeurl; ?>" ><img src="<?php echo PATH .'images/merchant/290_215/'.$this->merchant_id.'_'.$this->store_id.'.png'?>" alt="<?php echo $this->storeurl ?>" title="<?php echo $this->storeurl ?>"></a> <br /><br /><?php echo $s_about_us_more;?> 
              
            <br>
           </p>
						
 				  </div>
                  
                  
                  
                  
                  
                  
                  
				   <div class="col_1_of_f_2 span_1_of_f_2">
                   
        
        			<h3>Shop Guide</h3>
                        
                        
				       <div class="recent-tweet">
							<div class="fa fa-home fa-2x" style="color:#FFF;">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<a href="#"><p>store home</p></a>
							</div>
							<div class="clear"> </div>
					   </div>
                       <div class="recent-tweet">
							<div class="fa fa-tags fa-2x" style="color:#FFF;">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<a href="<?php echo PATH.$this->storeurl;?>/today-deals.html"><p>Deals</p></a>
							</div>
							<div class="clear"> </div>
					   </div>
                       <div class="recent-tweet">
							<div class="fa fa-legal fa-2x" style="color:#FFF;">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<a href="<?php echo PATH.$this->storeurl;?>/auction.html"><p>Auctions</p></a>
							</div>
							<div class="clear"> </div>
					   </div>
                       <div class="recent-tweet">
							<div class="fa fa-map fa-2x" style="color:#FFF;">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<a href="<?php echo PATH;?>near-map.html"><p>Items Near Me</p></a>
							</div>
							<div class="clear"> </div>
					   </div>
					   <!--<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
					  </div>-->
        
        		 
						
				</div>
                
                
                
                
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   
                    
                   <?php if($this->load_map){?> 
                    <h3 id="id_zmart_address">On Map</h3>
        		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
 				<script type="text/javascript">
 <?php if($this->load_map){ ?>
 $(document).ready(function(e) {
	 
	 							var latlng = null;
	 							try {
    
                                		latlng = new google.maps.LatLng(<?php echo $m_city_latitude; ?>,<?php echo $m_city_longitude; ?>);
										
								}catch(e){
									$('#map_main').text("Sorry! We could not reach google maps. Please try again later.");
									return false;
								}
								
								
									
									
								
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
                                    content: '<b><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $s_store_name); ?></b><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $m_address1); ?></p><p><?php echo preg_replace("/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s", '', $m_address2); ?></p><p><?php echo $m_city_name; ?>,<?php echo $m_country_name; ?></p>'
                                });
                            
                                google.maps.event.addListener(marker, 'click', function() { 
                                    infowindow.open(map, marker);
                                });
								
								
                                marker.setMap(map);
								
								
			});	
			
			<?php } ?>				
                            
       </script>
         
          <div>
          
          <div class="clearfix wloader_parent">
                            <i class="wloader_img">&nbsp;</i>
                            <div id="map_main" style="height:126px;">Google maps loading...</div>
                        </div>
          </div>
        <?php }else{?>
         <h3 id="id_zmart_address">Address</h3>
        					<ul class="f-list1">
                        
                        
                            <li class="phone"> <a href="#id_zmart_address"> <?php echo $m_address1." - ".$m_address2.", ";?></a></li>
                            <li class="mobile"> <a href="#id_zmart_address"> <?php echo $m_city_name;?>,</a></li>
                            <li class="email"> <a href="#id_zmart_address"><?php echo $m_country_name?>.</a></li>
         
						   <!-- <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>-->
			         	</ul>
        		   <?php } ?>
						
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3 id="id_zmart_contact_us">Contact us</h3>
                   
                   
						<div class="company_address">
					                <p><i class="fa fa-phone fa-large" style="margin-right: 10px;"></i> <?php echo $m_phone_number;?>,</p>
							   		<p><i class="fa fa-mobile-phone fa-large" style="margin-right: 10px;"></i><?php echo $a_phone_number;?>,</p>
							   		<p><i class="fa fa-envelope fa-large" style="margin-right: 10px;"></i><?php echo $m_email;?></p>
					   				<p><i class="fa fa-envelope-o fa-large" style="margin-right: 10px;"></i><?php echo $a_email;?></p>
                            
                            
					   		
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="https://www.facebook.com/Zenithbank" target="_blank"><i class="fa fa-facebook fa-2x" style="color:#FFF; margin-right: 10px;"></i> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Twitter"><a href="https://twitter.com/Zenithbank" target="_blank"><i class="fa fa-twitter fa-2x" style="color:#FFF; margin-right: 10px;"></i> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Google+"><a href="https://plus.google.com/110325758209488608823" target="_blank"><i class="fa fa-google-plus fa-2x" style="color:#FFF; margin-right: 10px;"></i> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Youtube"><a href="https://www.youtube.com/user/ZenithDirect" target="_blank"><i class="fa fa-youtube fa-2x" style="color:#FFF; margin-right: 10px;"></i> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
		  </div>
		</div>
        
        
        
        
		<div class="footer-bottom">
			<div class="wrap">
	                <div class="copy">
			           <p><a title="<?php echo SITENAME; ?>" href="<?php echo PATH; ?>" target="_blank"><?php echo SITENAME; ?></a> &copy; <?php echo date('Y');?>, All rights reserved.  </p>
		            </div>
		       <div class="f-list2">
				<ul>
					<li><a title="about us" href="#id_swifta_about_us">About Us</a></li> |
					<li><a title="<?php echo $s_store_name;?>" href="<?php echo PATH.$this->storeurl; ?>"><?php echo common::truncate_item_name($s_store_name, 25);?></a></li> |
					<li><a title="Items that may be near your" href="<?php echo PATH."near-map.html"; ?>">Near Me Items</a></li> |
					<li><a title="contact us" href="#id_zmart_contact_us">Contact Us</a></li> 
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
        
        
        
        
<!--
    Remove Item from cart 
	@Live
-->
<script type="text/javascript">
	
	function leo_remove_cart_item(rm_id){
			
			
			var cart_last_add = parseInt($('#id_cart_add_last_state').val());
			var cart_last_remove = parseInt($('#id_cart_remove_last_state').val());
			
			
			/*if(cart_last_add == cart_last_remove)
				return false;*/
			
				
			item_add_count =  cart_last_add;
			item_remove_count = cart_last_remove+1;
			item_count = item_add_count-item_remove_count; 
			$('#id_cart_remove_last_state').val(item_remove_count);
			/*$('#id_cart_item_count').html('<li ><a href="#" >Cart('+item_count+')</a></li>');*/
			id_item_no_rm = "id_item_no_"+rm_id;
			$('#'+id_item_no_rm).remove();
			
			
				
				
			remove_item_from_cart1(rm_id);
			
			
			
		}
	



</script>
<script type="text/javascript">

function remove_item_from_cart1(deal_id){
		
			url = "<?php echo PATH ?>/leo/cart_product_remove?deal_id="+deal_id;
	
    $.ajax(
	       {
		        type:'GET',
		        url:url,
		        cache:false,
		        async:true,
		        global:false,
		        dataType:"text",
		        success:function(check)
		        {
					
					check_temp = -99;
						
					try{
						check_temp = parseInt(check);
					}catch(err){
						
					}
					
					check = check_temp;
					if(check < 0)
					switch(check){
						case -1:{
							
							<?php //$this->error_response = 'Invalid item Data.';?>
							location.reload();
							break;
						}
						
						
						default:{
							
            				<?php //$this->error_response = 'Invalid response';?>
							location.reload();
							return false;
							
						}
					}
					
					else
					
					$('#id_cart_item_count').html('<li ><a href="#" >Cart('+check+')</a></li>');
					
					if(check == 0){
				$('#id_cart_state').html('<li><a href="#"><h3>No Items</h3></a></li><li><p>Your cart has no items for checkout just yet. <a href="#id_dummy_leo_add_to_cart" target="_self"> continue shopping!</a></p></li>');
				
					}
					
					
					location.reload();
					
					return false;
		          
		        },
		        error:function()
		        {
					
					<?php //$this->error_response = 'Error in connection. Please check your network.';?>
					location.reload();
					return false;
		        }

	         
			});
			
}
</script> 

<?php 
		$absolute_url = common::full_url($_SERVER);
		$this->session->set('leo_redirect_url', $absolute_url);
		
?>

<script type="text/javascript">
		function validate(){
			$('#s_q').css('border-color', '#FFF');
			$('#s_q').attr('title', 'Search');
				
			q = $('#s_q').val();
			if(!q || q == 'Search'){
				alert(q);
				$('#s_q').css('border-color', '#777');
				$('#s_q').attr('title', 'Value required for search');
				return false;
			}
			
			
			
			
			url = "<?php echo PATH;?>";
			
			<?php if(isset($this->type)){?>
				url = url+"<?php echo $this->storeurl."/".$this->type;?>.html/?q="+q;
			<?php }else{?>
				url = url+"<?php echo $this->storeurl;?>/?q="+q;
			<?php }?>
			//alert(url);
			/*window.location.href = "<?php echo PATH.$this->storeurl?>/products.html?q="+q;*/
			window.location.href = url;
			
			
			
		}
    </script>
    
<script type="text/javascript" >
	function add_to_compare(product_id = "", tis = "", t = ""){
		
		
	var a = "false";
		

	if(tis && tis != ""){
	        a = $(tis).is(':checked');
	} else {
	        a = "true";
	}

		var targeturl = "<?php echo PATH; ?>products/add_compare/?product_id="+product_id+'&title='+'&abc=false'+'&action=true'+'&act='+a+'&type='+t;

			$.post(targeturl,function(response)
			{
				//console.log(response); return false;
				if(response)
				{
					
					window.location.reload();
					return false;
                                        
				}
				else
				{
					return false;
				}
			});

		

		
	}
	
	
	function remove_from_compare(product_id = "", tis = "", t = ""){
		
		
	var a = "false";
		

	if(tis && tis != ""){
	        a = $(tis).is(':checked');
	} else {
	        a = "true";
	}
	
	var action = 'false';

		var targeturl = "<?php echo PATH; ?>products/add_compare/?product_id="+product_id+'&title='+'&abc=false'+'&action='+action+'&act='+a+'&type='+t;

			$.post(targeturl,function(response)
			{
				//console.log(response); return false;
				if(response)
				{
					
					window.location.reload();
					return false;
				}
				else
				{
					return false;
				}
			});

		
	}
		
	
	function add_to_wishlist(product_id, deal_title){
		
		
		
		var targeturl = "<?php echo PATH;?>products/add_wishlist/?product_id="+product_id;
		
		$.post(targeturl,function(response)
		{
			
			
			window.location.reload();
			return false;
			
			if(response == "1")
			{
				$('#success_message').html(success_message1("Success: You have added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;'>wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "2")
			{
				$('#success_message').html(error_message1("Error: You have already added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;' >wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "3")
			{
				//$('#success_message').html(success_message1("You must <a onclick='showlogin()' title='login' style='color: #0078CA;text-decoration: underline;' >login</a>&nbsp;or&nbsp;<a onclick='showsignup()' title='create an account' style='color: #0078CA;text-decoration: underline;'>create an account</a> to save the product to your wish list!"));
				//animate_flash(8000);
				showlogin();
			}
			else
			{
				$('#success_message').html(error_message1("Error: No Data Found"));
				animate_flash(8000);
			}
		});
		
		
	}
	
	
	function remove_from_wishlist(product_id, deal_title){
		
		
		
		
		
		var targeturl = "<?php echo PATH;?>leo/remove_wishlist/?product_id="+product_id;
		
		$.post(targeturl,function(response)
		{
			alert(response);
			window.location.reload();
			return false;
			
			if(response == "1")
			{
				$('#success_message').html(success_message1("Success: You have added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;'>wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "2")
			{
				$('#success_message').html(error_message1("Error: You have already added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;' >wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "3")
			{
				//$('#success_message').html(success_message1("You must <a onclick='showlogin()' title='login' style='color: #0078CA;text-decoration: underline;' >login</a>&nbsp;or&nbsp;<a onclick='showsignup()' title='create an account' style='color: #0078CA;text-decoration: underline;'>create an account</a> to save the product to your wish list!"));
				//animate_flash(8000);
				showlogin();
			}
			else
			{
				$('#success_message').html(error_message1("Error: No Data Found"));
				animate_flash(8000);
			}
		});
		
		
	
	}
</script>

<script type="text/javascript">

function show_more(){
	$($('.more_content')[0]).css({'display':'inline'});
}

function show_less(){
	
	$($('.more_content')[0]).css({'display':'none'});
	
}

$(document).ready(function(e) {
	
$($('.more_control')[0]).click(function(e) {
    show_more();
	$(this).css({'display':'none'});
	$($('.less_control')[0]).css({'display':'inline'});
		
});

$($('.less_control')[0]).click(function(e) {
    show_less();
	$(this).css({'display':'none'});
	$($('.more_control')[0]).css({'display':'inline'});
	
	
		
});


    
});


</script>

<i style="display:none;" id="id_parent_assets"></i>
<input type="hidden" id="id_root" value="<?php echo PATH; ?>">
<div class='popup_block pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>
<div class='popup_block3_0 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_verify_account_popup'); ?></div>
<div class='popup_block3_1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_open_account_popup'); ?></div>
<div class='popup_block4 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/fb_popup'); ?></div>


<script type="text/javascript">
 	
 	function show_login(){
		
		
		$('.pop').css({'display':'none'});
		$('#fade').css({'visibility':'hidden'}); 
		
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	       	$('.popup_block').css({'display' : 'block'});
			$('.popup_block').css({'z-index':99999});
			$('.popup_block1').css({'z-index':99999});
			$('.popup_block2').css({'z-index':99999});
			$('.popup_block3_0').css({'z-index':99999});
			$('.popup_block3_1').css({'z-index':99999});
			
	}
	
	function show_register(){
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	      	$('.popup_block1').css({'display' : 'block'});
		    $('.popup_block').css({'z-index':99999});
			$('.popup_block1').css({'z-index':99999});
			$('.popup_block2').css({'z-index':99999});
			$('.popup_block3_0').css({'z-index':99999});
			$('.popup_block3_1').css({'z-index':99999});
			
	}
	
	function showforgotpassword(){
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	        $('.popup_block2').css({'display' : 'block'});
			$('.popup_block').css({'z-index':99999});
			$('.popup_block1').css({'z-index':99999});
			$('.popup_block2').css({'z-index':99999});
			$('.popup_block3_0').css({'z-index':99999});
			$('.popup_block3_1').css({'z-index':99999});
			
	}
	
	function showfbsignup(){
			var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
			var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	        $('.popup_block4').css({'display' : 'block'});
			$('.popup_block').css({'z-index':99999});
			$('.popup_block1').css({'z-index':99999});
			$('.popup_block2').css({'z-index':99999});
			$('.popup_block3_0').css({'z-index':99999});
			$('.popup_block3_1').css({'z-index':99999});
	}
	
	function load_club(){
	/* 
	 *	Check session to see if user is logged and is of type 4 (customer)
	 * If user is logged in but of any other type other than 4. return false.
	 * If not logged in, prompt for login/signup
	 * On logging in, check for club memebrship status.
	 * If member already, notify.
	 * If not member, prompt for membership signup
	 * #Live
	 */
	 
	 /*
	 	Loading parent assets
		@Live
	 */
	var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
	var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
	$('#id_parent_assets').append(cssLink);
	$('#id_parent_assets').append(jsScript);

	$('.popup_block').css({'z-index':99999});
	$('.popup_block1').css({'z-index':99999});
	$('.popup_block2').css({'z-index':99999});
	$('.popup_block3_0').css({'z-index':99999});
	$('.popup_block3_1').css({'z-index':99999});
	 
	  <?php 
	 if(isset($_SESSION['UserID'])){
		
		 if(isset($_SESSION['UserType']) && strcmp($_SESSION['UserType'], "4") == 0 && isset($_SESSION['Club']) && strcmp($_SESSION['Club'], "0") == 0 ){ 
			 ?>
			 
			 javascript:showmembershipsignup(); 
			 
		 <?php }else if(isset($_SESSION['Club']) && strcmp($_SESSION['Club'], "1") == 0){?>
			 alert("You are already a Zenith Club member. Please enjoy the offers!");
			 return;
			 <?php
		 }else{?>
		 alert("Sorry, something went wrong. Please contact the site administrator.");
		 return;
		 <?php }
	 }else{?>
		javascript:showlogin("1");
		
	<?php }?>
	

	 }
	
	
 </script>
<script type="text/javascript">
$(document).ready(function(){
	
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer

$('.close').click(function(e) {
			$('.pop').css({'display' : 'none'});
			$('#fade').css({'visibility' : 'hidden'});
        });
}); 

$('.close').css({'z-index': 99999, 'opacity':1});

$(document).keyup(function(e) { 
        if (e.keyCode == 27) { // esc keycode
           
			$('.pop').css({'display' : 'none'});
			$('#fade').css({'visibility' : 'hidden'});
			
		return false;
        }
 });
</script>

<!-- 
	wishlist and compare
    @Live
 -->

<script type="text/javascript" >

	function add_to_compare(product_id, tis, t, async){
		
		
	var a = "false";
		

	if(tis && tis != ""){
	        a = $(tis).is(':checked');
	} else {
	        a = "true";
	}

		var targeturl = "<?php echo PATH; ?>leo/add_compare/?product_id="+product_id+'&title='+'&abc=false'+'&action=true'+'&act='+a+'&type='+t;

			$.post(targeturl,function(response)
			{
				//console.log(response); return false;
				//alert(response);
				if(response)
				{
					
					
					if(async){
						
						response = parseInt(response);
						prev_count = $('#id_sasa_compare').text();
						prev_count = parseInt(prev_count);
						
						if(response == 1 || response == 2){
							if(response == 1){
							 $('#id_sasa_compare').text(prev_count+1);
							  $('.'+product_id+'-to-compare-link').attr('title', 'Item added successfully.');
							}else{
							  $('.'+product_id+'-to-compare-link').attr('title', 'Item already added.');
							}
							 
							 $('.'+product_id+'-to-compare').css({'color':'#0C3'});
							// $('.'+product_id+'-to-compare').removeClass('icon-bar-chart');
							// $('.'+product_id+'-to-compare').addClass('icon-ok-sign');
							 $('.'+product_id+'-to-compare-link').attr('href', '#id_sasa_compare');
							
							 
							 
							 $('i.'+product_id+'-to-compare').hover(function (e){
								  $('.'+product_id+'-to-compare').css({'color':'#0C3'});
								 }, function (e){
									  $('.'+product_id+'-to-compare').css({'color':'#0C3'});
							});
							
							//$('.sasa-account').trigger('focus');
							//$('.sasa-account').trigger('mouseover');
							//$('.sasa-account').trigger('mouseenter');
							
									 
									// alert(response);
									exit;
							 
						}else{
							
							response = parseInt(response);
							
							$('.'+product_id+'-to-compare').css({'color':'#777'});
							//$('.'+product_id+'-to-compare').removeClass('fa-balance-scale');
							//$('.'+product_id+'-to-compare').addClass('fa-times-circle');
							$('.'+product_id+'-to-compare-link').attr('href', '#id_sasa_compare');
							if(response == -1){
								$('.'+product_id+'-to-compare-link').attr('title', 'Item attribute mismatch. select of same category as in your list.');
							}else{
								$('.'+product_id+'-to-compare-link').attr('title', 'error additing item.');
							}
							
							$('i.'+product_id+'-to-compare').hover(function (e){
						    $('.'+product_id+'-to-compare').css({'color':'#777'});
								 }, function (e){
						    $('.'+product_id+'-to-compare').css({'color':'#777'});
							});
							
							//$('.sasa-account').trigger('focus');
							//$('.sasa-account').trigger('mouseenter');
							//$('.sasa-account').trigger(');
							
									 
						   // alert(response);
							exit;
							 
							
						}
						
					}else{
						
						window.location.reload();
						return false;
					}
                                        
				}
				else
				{
					return false;
				}
			});

		

		
	}
	
	
	function remove_from_compare(product_id, tis, t){
		
		
	var a = "false";
		

	if(tis && tis != ""){
	        a = $(tis).is(':checked');
	} else {
	        a = "true";
	}
	
	var action = 'false';

		var targeturl = "<?php echo PATH; ?>products/add_compare/?product_id="+product_id+'&title='+'&abc=false'+'&action='+action+'&act='+a+'&type='+t;

			$.post(targeturl,function(response)
			{
				//console.log(response); return false;
				if(response)
				{
					
					window.location.reload();
					return false;
				}
				else
				{
					return false;
				}
			});

		
	}
		
	
	function add_to_wishlist(product_id, deal_title, async){
		
		
		
		var targeturl = "<?php echo PATH;?>products/add_wishlist/?product_id="+product_id;
		
		$.post(targeturl,function(response)
		{
			if(async && !isNaN(response)){
				
				response = parseInt(response);
				prev_count = $('#id_sasa_wish').text();
				prev_count = parseInt(prev_count);
				
				if(response == 1){
					//success
					$('#id_sasa_wish').text(prev_count+1);
					$('.'+product_id+'-to-wish-link').attr('title', 'Item added successfully.');
					
					 $('.'+product_id+'-to-wish').css({'color':'#0C3'});
					 //$('.'+product_id+'-to-wish').removeClass('fa-heart');
					 //$('.'+product_id+'-to-wish').addClass('fa-check-circle');
					 $('.'+product_id+'-to-wish-link').attr('href', '#id_sasa_wish');
					 
					 $('i.'+product_id+'-to-wish').hover(function (e){
						  $('.'+product_id+'-to-wish').css({'color':'#0C3'});
						 }, function (e){
							  $('.'+product_id+'-to-wish').css({'color':'#0C3'});
					});
					
					exit;
					
				}else if(response == 2){
					
					//already in list
					$('.'+product_id+'-to-wish-link').attr('title', 'Item already in list.');
					$('.'+product_id+'-to-wish').css({'color':'#0C3'});
					//$('.'+product_id+'-to-wish').removeClass('fa-heart');
					//$('.'+product_id+'-to-wish').addClass('fa-check-circle');
					$('.'+product_id+'-to-wish-link').attr('href', '#id_sasa_wish');
					 
					$('i.'+product_id+'-to-wish').hover(function (e){
						  $('.'+product_id+'-to-wish').css({'color':'#0C3'});
						 }, function (e){
							  $('.'+product_id+'-to-wish').css({'color':'#0C3'});
					});
					
					exit;
					
					
				}else if(response == 3){
					$('.'+product_id+'-to-wish-link').attr('title', 'You need to be logged.');
					//not logged in
				}else if(response == 0){
					$('.'+product_id+'-to-wish-link').attr('title', 'Invalid item datails.');
					//item details invalid
				}
				
				$('.'+product_id+'-to-wish').css({'color':'#777'});
				//$('.'+product_id+'-to-wish').removeClass('fa-heart');
				//$('.'+product_id+'-to-wish').addClass('fa-times-circle');
				$('.'+product_id+'-to-compare-wish').attr('href', '#id_sasa_wish');
				
				exit;
				
				
				
			}else{
			
			window.location.reload();
			
			}
			
			
		});
		
		
	}
	
	
	function remove_from_wishlist(product_id, deal_title){
		
		var targeturl = "<?php echo PATH;?>leo/remove_wishlist/?product_id="+product_id;
		
		$.post(targeturl,function(response)
		{
			alert(response);
			window.location.reload();
			return false;
			
			if(response == "1")
			{
				$('#success_message').html(success_message1("Success: You have added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;'>wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "2")
			{
				$('#success_message').html(error_message1("Error: You have already added "+ title +" to your <a href="+Path+"wishlist.html title='wish list' style='color: #0078CA;text-decoration: underline;' >wish list</a>!"));
				animate_flash(8000);
			}
			else if(response == "3")
			{
				//$('#success_message').html(success_message1("You must <a onclick='showlogin()' title='login' style='color: #0078CA;text-decoration: underline;' >login</a>&nbsp;or&nbsp;<a onclick='showsignup()' title='create an account' style='color: #0078CA;text-decoration: underline;'>create an account</a> to save the product to your wish list!"));
				//animate_flash(8000);
				showlogin();
			}
			else
			{
				$('#success_message').html(error_message1("Error: No Data Found"));
				animate_flash(8000);
			}
		});
		
		
	
	}
</script>
 
