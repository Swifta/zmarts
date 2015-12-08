
 <script type="text/javascript">
 	
 	function show_login(){
		
		
		$('.pop').css({'display':'none'});
		$('#fade').css({'visibility':'hidden'}); 
		
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	       	$('.popup_block').css({'display' : 'block', 'z-index':99999});
			
	}
	
	function show_register(){
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	       $('.popup_block1').css({'display' : 'block', 'z-index':99999});
			
	}
	
	function showforgotpassword(){
		
		var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
		var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	        $('.popup_block2').css({'display' : 'block', 'z-index':99999});
			
	}
	
	function showfbsignup(){
			var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/style.css";?>' >");
			var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
	        $('.popup_block4').css({'display' : 'block', 'z-index':99999});
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

	function leo_add_to_cart(deal_id = "0"){
		add_item_to_cart1(deal_id);
	}
		
</script>  


 <script type="text/javascript">
	function add_item_to_cart1(deal_id = "0"){
		
		
		
		<?php if(!isset($this->c)){$c = 0;}else{$c = $this->c;} ?>
		<?php if(!isset($this->color_count)){$color_count = 0;}else{$color_count = $this->color_count;} ?>
		
		
		
	url = "<?php echo PATH ?>/leo/cart_items?deal_id="+deal_id;
			var sel_color = $('#id_color_pick').val();
			var sel_size = $('#id_size_pick').val();
			
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

<!-- Rating
	@Live
 -->
 
 <script type="text/javascript">
 
 function rate_this(rate, deal_id){
	
	 var url = "<?php echo PATH."sasa/product_rating";?>";
	 
	 $.post(url, {action:'rating', deal_id:deal_id, rate:rate, idBox:1}, function(status){
		 
		 
		try{
			status = parseInt(status);
			rate = parseInt(rate);
			
		}catch(e){
			status = -999;
			rate = -999;
		}
		
		switch(status){
			case 1: {
				$('#id_you_plus').text('you rate this at ');
				$('#id_rate').text(rate);
				
				break;
			}
			
			case 0: {
				$('#id_you_plus').html('you now rate this at ');
				$('#id_rate').text(rate);
				break;
			}
			default: {
				break;
			}
		}
		
		
		mark_rating(rate);
		 	
			
		 });
 }
 
 
 function mark_rating(rate){
	 
	 try{
			
			rate = parseInt(rate);
			
		}catch(e){
			rate = -999;
		}
		
	 
	 switch(rate){
			case 1: {
				
				
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				break;
			}
			
			case 2: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				
				break;
			}
			
			case 3: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				
				break;
			}
			
			
			case 4: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				$('.off.fourth i').css({'color': '#F25C27'});
				$('.off.fourth').addClass('on');
				
				
				break;
			}
			
			
			case 5: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				$('.off.fourth i').css({'color': '#F25C27'});
				$('.off.fourth').addClass('on');
				
				$('.off.fifth i').css({'color': '#F25C27'});
				$('.off.fifth').addClass('on');
				
				break;
			}
			
			
			case 0: {
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				break;
			}
			default: {
				break;
			}
		}
 }
 
 
 $(document).ready(function(e) {
	 
	 $('.on').blur(function(e) {
        $('a.on.off i').css({'color': '#F25C27'});
		
    });
	 
	 	$('.off.first').hover(function(e){
			// alert("HOVER IN");
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.on i').css({'color': '#F25C27'});
		},
		
	 function(e){
		 // alert("HOVER OUT OUT");
		  	
			$('.off i').css({'color': '#999'});
			$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.second').hover(function(e){
			
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.third').hover(function(e){
			 $('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.fourth').hover(function(e){
			
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
			$('.off.fourth i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		 $('.off.fifth').hover(function(e){
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
			$('.off.fourth i').css({'color': '#F25C27'});
			$('.off.fifth i').css({'color': '#F25C27'});
		},
		
	 function(e){
		
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
			
		});
		
		
    
});
 	
 </script>

 