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
				$('#s_q').css('border-color', '#F00');
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