
<?php if(!isset($this->get_product_categories)){?>

<script type="text/javascript" src="<?php echo PATH; ?>themes/default/leo/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>themes/default/leo/css3-mediaqueries.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>themes/default/leo/js/fwslider.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>themes/default/leo/js/jquery.easydropdown.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>themes/default/toastr/jquery.jnotify.js"></script>
<?php }?>

<script src="<?php echo PATH."themes/default/js/leo/";?>js/jquery1.min.js"></script>
<script type="text/javascript" src="<?php echo PATH."themes/default/js/leo/";?>megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="<?php echo PATH."themes/default/js/leo/";?>jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<script src="<?php echo PATH."themes/default/js/leo/";?>slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<script src="<?php echo PATH."themes/default/js/leo/";?>jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 360,
					thumb_image_height: 360,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<script type="text/javascript" src="<?php echo PATH."themes/default/js/leo/"?>jquery.flexisel.js"></script>



<div class="header-top">
	   <div class="wrap"> 
			  <!--<div class="header-top-left">
			  	   <div class="box swifta">
                   
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" >Language :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   				    </div>
                    
                    <div class="swifta box">
                  
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" >Language :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   				    </div>
                    
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label">Currency :</option>
							<option value="1">$ Dollar</option>
							<option value="2">€ Euro</option>
						</select>
   				    </div>
                    
                    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label">Help :</option>
							<option value="1">$ Dollar</option>
							<option value="2">€ Euro</option>
						</select>
   				    </div>
                    
                    
                    
   				    <div class="clear"></div>
                    
                    
                    
                    
   			 </div>-->
             <div class="header-top-left swifta">
			  	   
                    
                    
                    
   				   <div class="cssmenu">
				<ul>
					<li><a  title="<?php echo $this->Lang['HELP']; ?>" href="<?php echo PATH; ?>Help.php"><?php echo $this->Lang['HELP']; ?></a></li> |
					<li><a href="#"><?php echo $this->Lang['CUSS_SUPP']; ?> <?php
								if (PHONE1) { 	echo PHONE1;	} else { }?></a></li> |
					<li><a  href="<?php echo PATH ?>refer-friends.html" title="<?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>">
								<?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?></a></li>
								<?php  if($this->session->get('user_auto_key')) { ?> |
					<li  ><div class="store_credit"><a href="<?php echo PATH; ?>storecredits-products.html" > <?php echo $this->Lang["STR_CRDS"]; ?></a></div></li>  <?php } ?>
					
                    
                    
				</ul>
			</div>
                    
                    
                    
                    
   			 </div>
             
			 <div class="cssmenu">
				<ul>
					
					<!--<li><a href="checkout.html">Wishlist</a></li> |-->
					
                   
                    
                    <?php if ($this->session->get('UserID')) { ?>
                      <li><a href="<?php echo PATH."users/my-account.html"; ?>">Hi <?php echo $this->session->get('UserName')?>
                      
                      <?php if($this->session->get('user_auto_key')) {?>
                      <b>
                      <?php
						   echo "(".$this->session->get('user_auto_key').")"; ?>
                      </b><?php } ?>
                      
                      </a></li> |
                      <li class="active"><a href="<?php echo PATH."users/my-account.html"; ?>">Account</a></li> |
                      <li><a href="<?php echo PATH; ?>cart.html">Checkout</a></li> |
                      <li><a href="<?php echo PATH;?>leo_zenith.html" >Zenith Offers</a></li> |
                   	  <li><a href="<?php echo PATH;?>logout.html">Logout</a></li>
                    
					 
                    <?php }else{ ?>
                    
                    <li><a href="<?php echo PATH; ?>cart.html">Checkout</a></li> |
                    <li><a href="<?php echo PATH;?>leo_zenith.html" >Zenith Offers</a></li> |
                    <li><a href="<?php echo PATH;?>leo_login.html">Log In</a></li> |
                    <li><a href="<?php echo PATH;?>leo_sign.html">Sign Up</a></li>
                   
                    <?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
<div class="header-bottom" id = "id_dummy_leo_add_to_cart">
	    <div class="wrap">
			<div class="header-bottom-left swifta">
				<div class="logo">
                <?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
 <a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
	<img alt="<?php echo $this->Lang['LOGO']; ?>" 	src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
	
<?php /* <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/> */ ?></a>
<?php } } ?>
					
                    
				</div>
				<div class="menu swifta">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="<?php echo PATH.$stores->store_url_title; ?>">Home</a></li>
			<!-- <li><a class="color4" href="#">Products</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Contact Lenses</h4>
								<ul>
									<li><a href="womens.html">Daily-wear soft lenses</a></li>
									<li><a href="womens.html">Extended-wear</a></li>
									<li><a href="womens.html">Lorem ipsum </a></li>
									<li><a href="womens.html">Planned replacement</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sun Glasses</h4>
								<ul>
									<li><a href="womens.html">Heart-Shaped</a></li>
									<li><a href="womens.html">Square-Shaped</a></li>
									<li><a href="womens.html">Round-Shaped</a></li>
									<li><a href="womens.html">Oval-Shaped</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Eye Glasses</h4>
								<ul>
									<li><a href="womens.html">Anti Reflective</a></li>
									<li><a href="womens.html">Aspheric</a></li>
									<li><a href="womens.html">Bifocal</a></li>
									<li><a href="womens.html">Hi-index</a></li>
									<li><a href="womens.html">Progressive</a></li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				</li>-->	
           	 
                
                 <!-- PRODUCTS START HERE -->
                 <li><a class="color5" href="#">Products</a>
                <div class="megapanel">
                <?php 
				
				
				if($this->product_setting) {
				?>
                <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
				
				
				
                 $cat1 = array_unique($cat);
				 
				?>
                
                 <?php 
				 if(count($this->categeory_list_product)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_product as $d) {
                                $check_sub_cat = $d->product_count;
								 /*   COUNT OF SUBCATEGORY   */
								//$subcate_count = common::get_subcat_count1($d->category_id,$d->type);
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
                                <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
                                
                                <?php $type = "products";
								$categories = $d->category_url; ?>
                                
                                
                                
                                <?php //$s_url = $s."/".$type."/c"."/".$key_smthing."/".$d->category_url."html";?>
                                
                                <?php //var_dump($d); exit;?>
                                
                                
                                
                                
                                	<div class="col1">
							<div class="h_nav">
								<h4><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/".$categories."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></a>
                                
								<!--<?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?>-->
                                
                                </h4>
								<ul>
                                
                                <?php if(count($this->subcategories_list)>0){
										
								?> 
                                
                                <?php foreach($this->subcategories_list as $sub_cate){?>
                                <?php if($sub_cate->main_category_id == $d->category_id){?>
                                
                               <!--<li><a href="<?php echo PATH.$type."/c/".base64_encode("main")."/".$categories."html";?>"> <?php echo ucfirst($sub_cate->category_name);?></a></li>-->
                               
                               <!--<?php echo base64_encode("main"); ?>-->
                                
                                <?php } ?> <!-- Ending 5th if -->
                                
                                <?php } ?> <!-- Ending 2nd foreach -->
                                
                                <?php } ?> <!-- Ending 4th if -->
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                 
                 <?php }?><!-- Ending 2nd if -->
					 
                <?php }else{ ?> <!-- (Ending 1st if) Products custom menu ending here -->
                		<div class="col1">
							<div class="h_nav">
								<h4>NO DEALS</h4>
								<ul>
									<li><a href="mens.html">Sorry, No products in this store yet.</a></li>
									<!--<li><a href="mens.html">Aspheric</a></li>
									<li><a href="mens.html">Bifocal</a></li>
									<li><a href="mens.html">Hi-index</a></li>
									<li><a href="mens.html">Progressive</a></li>-->
								</ul>
							</div>												
						</div>
                <?php } ?> <!-- End else of 1st if -->
                </div>
                </li>	
                <!-- PRODUCTS END HERE -->
                
                <!-- DEALS START HERE -->
           		 <li><a class="color5" href="#">Deals</a>
                <div class="megapanel">
                
                <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
                 $cat1 = array_unique($cat);
				 
				?>
                
                
                 <?php 
				 if(count($this->categeory_list_deal)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_deal as $d) {
                                $check_sub_cat = $d->deal_count;
								 /*   COUNT OF SUBCATEGORY   */
								//$subcate_count = common::get_subcat_count1($d->category_id,$d->type);
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
                                <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
                                
                                <?php $type = "products";
								$categories = $d->category_url; ?>
                                
                                
                                
                            <div class="col1">
							<div class="h_nav">
								<h4> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></h4>
								<ul>
                                
                                <?php if(count($this->subcategories_list)>0){
										
								?> 
                                
                                <?php foreach($this->subcategories_list as $sub_cate){?>
                                <?php if($sub_cate->main_category_id == $d->category_id){?>
                                
                               <li><a href="mens.html"> <?php echo ucfirst($sub_cate->category_name);?></a></li>
                                
                                <?php } ?> <!-- Ending 5th if -->
                                
                                <?php } ?> <!-- Ending 2nd foreach -->
                                
                                <?php } ?> <!-- Ending 4th if -->
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                 
                 <?php } else {?><!-- Ending 2nd if and starting else of 2nd if-->
                 
              			 <div class="col1">
							<div class="h_nav">
								<h4>No Deals</h4>
								<ul>
									<li><a style="text-decoration:none; text-transform:none;" href="#">Sorry, store has no deals yet.</a></li>
									<!--<li><a href="mens.html">Aspheric</a></li>
									<li><a href="mens.html">Bifocal</a></li>
									<li><a href="mens.html">Hi-index</a></li>
									<li><a href="mens.html">Progressive</a></li>-->
								</ul>	
							</div>												
						</div>
                 
                 <?php } ?> <!-- Ending else of 2nd if-->
                 
					 
                
                		
                
                </div>
                </li>
                <!-- DEALS END HERE -->
                
                 <!-- AUCTIONS START HERE -->
                 <li><a class="color5" href="#">Auctions</a>
                <div class="megapanel">
                
                <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
                 $cat1 = array_unique($cat);
				 
				?>
                
                 <?php 
				 if(count($this->categeory_list_auction)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_auction as $d) {
                                $check_sub_cat = $d->auction_count;
								 /*   COUNT OF SUBCATEGORY   */
								//$subcate_count = common::get_subcat_count1($d->category_id,$d->type);
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
                                <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
                                
                                <?php $type = "products";
								$categories = $d->category_url; ?>
                                
                                
                                
                            <div class="col1">
							<div class="h_nav">
								<h4> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></h4>
								<ul>
                                
                                <?php if(count($this->subcategories_list)>0){
										
								?> 
                                
                                <?php foreach($this->subcategories_list as $sub_cate){?>
                                <?php if($sub_cate->main_category_id == $d->category_id){?>
                                
                               <li><a href="mens.html"> <?php echo ucfirst($sub_cate->category_name);?></a></li>
                                
                                <?php } ?> <!-- Ending 5th if -->
                                
                                <?php } ?> <!-- Ending 2nd foreach -->
                                
                                <?php } ?> <!-- Ending 4th if -->
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                 
                 <?php } else {?><!-- Ending 2nd if and starting else of 2nd if-->
                 
              			 <div class="col1">
							<div class="h_nav">
								<h4>No Auctions</h4>
								<ul>
									<li><a style="text-decoration:none; text-transform:none;" href="#">Sorry, store has no auctions yet.</a></li>
									<!--<li><a href="mens.html">Aspheric</a></li>
									<li><a href="mens.html">Bifocal</a></li>
									<li><a href="mens.html">Hi-index</a></li>
									<li><a href="mens.html">Progressive</a></li>-->
								</ul>	
							</div>												
						</div>
                 
                 <?php } ?> <!-- Ending else of 2nd if-->
                 
					 
                
                		
                
                </div>
                </li>
                <!-- AUCTIONS END HERE -->
				
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" disabled="disabled" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input disabled="disabled" type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <!--<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>-->
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list" id="id_cart_state">
                <?php 
					$this->payment_products = new Payment_Product_Model();
					$item_count = 0;
					
					
				 ?>
               
                <?php foreach($_SESSION as $key=>$value)
                    { ?>
                    	<?php $d_id = "";?>
                    	<?php if($value && $key == "product_cart_id".$value){
							$item_count = 1;
							$d_id =  $value;
							 $p_ds=$this->payment_products->get_product_details_cart($d_id);
							 
							 ?>
                            <!--<li><a href="#"><h3><?php echo  $p_ds->current()->url_title?></h3></a></li>
							<li><p>Your cart has no items for checkout just yet. <a href="#id_dummy_leo_add_to_cart" target="_self"> continue shopping!</a></p></li>-->
							 <i id = "id_item_no_<?php echo $d_id; ?>"><li><a href="#"><h3 title="<?php echo $p_ds->current()->url_title; ?>"><?php echo common::truncate_item_name($p_ds->current()->url_title); ?></h3><a href=""></a></li><li><p><a onclick="leo_remove_cart_item(<?php echo $d_id ?>); return false;" href="#">Remove</a></p></li></i>
                             
                             <?php }?>
					
                    
                    <?php }?>
                    
                  
                    
                    <?php if($item_count == 0){?>
							<li><a href="#"><h3>No Items</h3></a></li>
							<li><p>Your cart has no items for checkout just yet. <a href="#id_dummy_leo_add_to_cart" target="_self"> continue shopping!</a></p></li>
						<?php }?>
                   
				</ul>
                
               
			</li>
            
		</ul>
	    <ul class="last"  id="id_cart_item_count"><li ><a href="<?php echo PATH."cart.html"?>" >Cart(<?php if($this->session->get('count')){echo $this->session->get('count'); }else { echo "0"; }?>)</a></li></ul>
        <input type="hidden" id="id_cart_add_last_state" value="0" />
        <input type="hidden" id="id_cart_remove_last_state" value="0" />
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
    
    
   


    
    
    

