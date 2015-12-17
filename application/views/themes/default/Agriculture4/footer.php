

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
	
	$s_store_name = $this->about_us_footer->current()->store_name;
	
	$s_about_us = $this->about_us_footer->current()->about_us;
	$s_about_us_more = common::truncate_about_us($this->about_us_footer->current()->about_us, 80);
	
	
	
 ?>
 

<footer id="footer">
  <section class="footersocial">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 aboutus col-sm-6">
          <h2>About Us </h2>
          <p> <a href="<?php echo PATH.$this->storeurl; ?>" ><img src="<?php echo PATH .'images/merchant/290_215/'.$this->merchant_id.'_'.$this->store_id.'.png'?>" alt="<?php echo $this->storeurl ?>" title="<?php echo $this->storeurl ?>"></a> <br /><br /><?php echo $s_about_us_more;?> 
              
            <br>
           </p>
        </div>
        <div class="col-lg-3 contact col-sm-6">
          <h2>Contact Us </h2>
          <ul>
            <li class="phone swifta support"><a href="#"><i class="icon-phone icon-large"></i> <?php echo $m_phone_number;?></a></li>
            <li class="mobile swifta support"><a href="#"><i class="icon-mobile-phone icon-large"></i><?php echo $a_phone_number;?></a></li>
            <li class="email  swifta support"><a href="#"><i class="icon-envelope icon-large"></i> <?php echo $m_email;?> </a></li>
            <li class="email  swifta support"><a href="#"><i class="icon-envelope-alt icon-large"></i> <?php echo $a_email;?></a></li>
          </ul>
        </div>
        <div class="col-lg-3 contact col-sm-6">
        <?php if($this->load_map){?> 
        		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
          <h2>ON MAP</h2>
          <div>
          
          <div class="clearfix wloader_parent">
                            <i class="wloader_img">&nbsp;</i>
                            <div id="map_main" style="height:126px;">Google maps loading...</div>
                        </div>
          </div>
        <?php }else{?>
        	<h2>SHOP GUIDE</h2>
          	<ul>
            <li class="phone swifta support"><a href="<?php echo PATH.$this->storeurl;?>"><i class="icon-home icon-large"></i> store home</a></li>
           
            <li class="mobile swifta support"><a href="<?php echo PATH.$this->storeurl;?>/today-deals.html"><i class="icon-tags icon-large"></i>deals</a></li>
            <li class="email  swifta support"><a href="<?php echo PATH.$this->storeurl;?>/auction.html"><i class="icon-legal icon-large"></i> auctions</a></li>
            <li class="email  swifta support"><a href="<?php echo PATH;?>near-map.html"><i class="icon-map-marker icon-large"></i> near me map</a></li>
          </ul>
         <?php } ?>
        </div>
        <div class="col-lg-3 facebook col-sm-6">
          <h2>Address</h2>
         <div id="fb-root">
         <ul>
            <li class="phone"> <?php echo $m_address1." - ".$m_address2.", ";?></li>
            <li class="mobile">  <?php echo $m_city_name;?>,</li>
            <li class="email"> <?php echo $m_country_name?>.</li>
          </ul>
         </div>

        <!--<div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-show-faces="true" data-colorscheme="light" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>-->
        </div>
      </div>
    </div>
  </section>
  <section class="footerlinks">
    <div class="container">
      <div class="info">
        <ul>
          <li><a href="<?php echo PATH."disclaimer.php";?>">Disclainer</a>
          </li>
          <li><a href="<?php echo PATH."terms-and-conditions.php";?>">Terms &amp; Conditions</a>
          </li>
          
        </ul>
      </div>
      <div id="footersocial" class="swifta">
        <a target="_blank" href="https://www.facebook.com/Zenithbank" title="Facebook" class="facebook swifta support"><span><i class="icon-facebook icon-large"></i></span></a>
        <a target="_blank" href="http://twitter.com/Zenithbank" title="Twitter" class="twitter swifta support"><span><i class="icon-twitter icon-large"></i></span></a>
        <a target="_blank" href="https://plus.google.com/110325758209488608823" title="G+" class="linkedin swifta support"><span><i class="icon-google-plus icon-large"></i></span></a>
        
         <a target="_blank" href=" https://www.youtube.com/user/ZenithDirect" title="Youtube" class="linkedin swifta support"><span><i class="icon-youtube icon-large"></i></span></a>
        
       
        
        <!--<a href="#" title="rss" class="rss swifta support"><span><i class="icon-rss icon-large"></i></span></a>-->
       <!-- <span><i class="icon-facebook icon-large"></i><a href="#" title="Googleplus" class="googleplus">Googleplus</a></span>
        <span><i class="icon-facebook icon-large"></i><a href="#" title="Skype" class="skype">Skype</a></span>
        <span><i class="icon-facebook icon-large"></i><a href="#" title="Flickr" class="flickr">Flickr</a></span>-->
      </div>
    </div>
  </section>
  <section class="copyrightbottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 textright"> <?php echo SITENAME; ?> &copy; <?php echo date('Y');?> All rights reserved.</div>
      </div>
    </div>
  </section>
  <a id="gotop" href="#">Back to top</a>
</footer>



<!-- javascript
    ================================================== -->
 <!-- Placed at the end of the document so the pages load faster  -->
 
 
<!--<script src="<?php echo $this->js_base_url;?>/jquery.js"></script>--> 
<script src="<?php echo $this->js_base_url;?>/bootstrap.js"></script> 
<script src="<?php echo $this->js_base_url;?>/respond.min.js"></script> 
<script src="<?php echo $this->js_base_url;?>/application.js"></script> 
<script src="<?php echo $this->js_base_url;?>/bootstrap-tooltip.js"></script> 
<script defer src="<?php echo $this->js_base_url;?>/jquery.fancybox.js"></script> 
<script defer src="<?php echo $this->js_base_url;?>/jquery.flexslider.js"></script> 
<script type="text/javascript" src="<?php echo $this->js_base_url;?>/jquery.tweet.js"></script> 
<script  src="<?php echo $this->js_base_url;?>/cloud-zoom.1.0.2.js"></script> 
<script  type="text/javascript" src="<?php echo $this->js_base_url;?>/jquery.validate.js"></script> 
<script type="text/javascript"  src="<?php echo $this->js_base_url;?>/jquery.carouFredSel-6.1.0-packed.js"></script> 
<script type="text/javascript"  src="<?php echo $this->js_base_url;?>/jquery.mousewheel.min.js"></script> 
<script type="text/javascript"  src="<?php echo $this->js_base_url;?>/jquery.touchSwipe.min.js"></script> 
<script type="text/javascript"  src="<?php echo $this->js_base_url;?>/jquery.ba-throttle-debounce.min.js"></script> 
<script src="<?php echo $this->js_base_url;?>/jquery.isotope.min.js"></script> 
<script defer src="<?php echo $this->js_base_url;?>/custom.js"></script>


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

<?php 

	/*var_dump($this->footer_merchant_details->current());
	var_dump($this->admin_details->current());
	var_dump($this->about_us_footer->current());*/
	

?>


 
 <script type="application/javascript" >
	   $(document).ready(function(e) {
		   
		    <?php if(isset($this->total_cart_value)){?> 
				$('#id_total_cart_value').text("<?php echo number_format($this->total_cart_value, 2, '.', ',');?>");
			<?php }?>
        
    	});
      
</script>
 
 <!--
    Add Item to cart 
	@Live
-->

 
 <script type="text/javascript">

	function leo_add_to_cart(deal_id){
		
		add_item_to_cart1(deal_id);
	}
		
</script>  


 <script type="text/javascript">
	function add_item_to_cart1(deal_id){
		
		<?php if(!isset($this->c)){$c = 0;}else{$c = $this->c;} ?>
		<?php if(!isset($this->color_count)){$color_count = 0;}else{$color_count = $this->color_count;} ?>
		
		
		
	url = "<?php echo PATH ?>/leo/cart_items?deal_id="+deal_id;
			var sel_color = $('#sel_color').val();
			var sel_size = $('#sel_size').val();
			
	<?php if($c != 0 || $color_count != 0){?>
			
			if(!sel_size || sel_size == 0){
				url = "<?php echo PATH ?>/leo/cart_items?sel_size=error";
			}else if(!sel_color || sel_color == 0){
				url = "<?php echo PATH ?>/leo/cart_items?sel_color=error";
			}
		<?php }?>
		 
	
    $.ajax({
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
						check_temp = -99;
					}
					
					check = check_temp;
					
					if(check < 0){
						
					switch(check){
						case -1:{
							
							
							location.reload();
							break;
						}
						case -2:{
							
							
							location.reload();
							break;
						}
						
						default:{
							
							
							location.reload();
							return false;
							
						}
					}
					
					}else{
					
						window.location.reload();
						return false;
						
					}
					window.location.reload();
					return false;
		          
		        },
		        error:function()
		        {
					
					location.reload();
					return false;
		        }

	         
			});
			
}

</script>



<!--
    Remove Item from cart 
	@Live
-->
<script type="text/javascript">
	
	function leo_remove_cart_item(rm_id){
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
							 $('.'+product_id+'-to-compare').removeClass('icon-bar-chart');
							 $('.'+product_id+'-to-compare').addClass('icon-ok-sign');
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
							
							$('.'+product_id+'-to-compare').css({'color':'#000'});
							$('.'+product_id+'-to-compare').removeClass('icon-bar-chart');
							$('.'+product_id+'-to-compare').addClass('icon-remove-sign');
							$('.'+product_id+'-to-compare-link').attr('href', '#id_sasa_compare');
							if(response == -1){
								$('.'+product_id+'-to-compare-link').attr('title', 'Item attribute mismatch. select of same category as in your list.');
							}else{
								$('.'+product_id+'-to-compare-link').attr('title', 'error additing item.');
							}
							
							$('i.'+product_id+'-to-compare').hover(function (e){
						    $('.'+product_id+'-to-compare').css({'color':'#000'});
								 }, function (e){
						    $('.'+product_id+'-to-compare').css({'color':'#000'});
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
					 $('.'+product_id+'-to-wish').removeClass('icon-heart');
					 $('.'+product_id+'-to-wish').addClass('icon-ok-sign');
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
					$('.'+product_id+'-to-wish').removeClass('icon-heart');
					$('.'+product_id+'-to-wish').addClass('icon-ok-sign');
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
				
				$('.'+product_id+'-to-wish').css({'color':'#000'});
				$('.'+product_id+'-to-wish').removeClass('icon-heart');
				$('.'+product_id+'-to-wish').addClass('icon-remove-sign');
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

<script type="text/javascript" >

    function buy_now(url_buy_now){
		
		<?php 
			
			if(!isset($_SESSION['UserID'])){?>
				show_login();
				return false;
		<?php }?>
		
		window.location.href = url_buy_now;
	}
</script>


<?php 
		$absolute_url = common::full_url($_SERVER);
		$this->session->set('leo_redirect_url', $absolute_url);
		
?>


<script type="text/javascript">
	function check_subscribe(){
		

					
	var email = $("#subscribe").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	$('#email_subscriber_error').text('');
	
	$('#subscribe').attr('placeholder','Enter email');
	var x=0;
	
	
	if(email == '') {
		$('.subscribe_lft_txt_field').css('border','1px solid red');
		$('#subscribe').attr('placeholder','Enter required');
		x++;
	}else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length){
		x++;
		$('.subscribe_lft_txt_field').css('border','1px solid red');
		$('#subscribe').attr('placeholder','Invalid email address');
	}else {
		x=0;
		
	}
	
	$('#email_subscriber_error').html('');
	if(x > 0){
		
		$('#email_subscriber_error').html('<?php echo $this->Lang["INV_EMAIL"];?>');
		$('#subscribe').attr('placeholder','invalid email');
		
		$('#subscribe').val('');
		
	}else if(x == 0){
		
		var url= '<?php echo PATH; ?>users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('.subscribe_lft_txt_field').css('border','1px solid red');
				$("#subscribe").val('');
				$("#subscribe").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				$('#email_subscriber_error').text('<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				$('#subscribe').attr('placeholder','Email already used here');
				
				
				
				
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
						
						$('#subscribe').attr('placeholder','Subscription successful');
						$('.subscribe_lft_txt_field').css('border','1px solid #5CB85C');
						$('#subscribe').css('color', '#5CB85C');
						$('#subscribe').val('');
						
						//window.location.href= "<?php echo PATH.$this->storeurl;?>";
						
					},
					error:function()
					{
						
						$('#subscribe').attr('placeholder','Error subscribing');
						//window.location.href= "<?php echo PATH.$this->storeurl;?>";
						
					}
				});
			}
		});
	}}
</script>


<script type="text/javascript">
$(document).ready(function(e) {
	 setInterval(function() {
				$('#next').trigger('click');
      			}, 5000);
				
				$('#popularbrands').css('display', 'block');
   
});
</script>




 