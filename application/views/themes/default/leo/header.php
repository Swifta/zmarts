<script src="<?php echo PATH; ?>js/coffee.js" type="text/javascript"></script>
<?php if(!isset($this->get_product_categories)){ ?>



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
<link rel="stylesheet" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/sweetalert.css" type="text/css" /> 
<script type="text/javascript" src="<?php echo PATH."themes/default/js/leo/"?>jquery.flexisel.js"></script>

<script src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/sweetalert.min.js"></script>
<script>
                                    function logout_click(){
                                        //alert("here");
                                        //<?php echo PATH; ?>logout.html
                                        swal({   
                                            title: "Are you sure?",   
                                            text: "Cart has items in. If you logout now, your cart will be emptied. Log out now?",   
                                            type: "warning",   
                                            showCancelButton: true,   
                                            confirmButtonColor: "#DD6B55",   
                                            confirmButtonText: "Yes, Logout!",   
                                            cancelButtonText: "No, Cancel!",   
                                            closeOnConfirm: false,   
                                            closeOnCancel: true 
                                        }, function(isConfirm){   
                                            if (isConfirm) {     
                                                location.href = "<?php echo PATH; ?>logout.html"; 
                                            } else {     
                                                return false;
                                            } 
                                        });
                                    }
                                    </script>



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
					<li><a id="" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart" style="color:#fff;">Sell on Zmart</a></li>
                                    <li><a  title="<?php echo $this->Lang['HELP']; ?>" href="<?php echo PATH; ?>Help.php"><?php echo $this->Lang['HELP']; ?></a></li> |
					<li><a href="#"><?php echo $this->Lang['CUSS_SUPP']; ?> <?php
								if (PHONE1) { 	echo PHONE1;	} else { }?></a></li> |
<!--					<li><a  href="<?php //echo PATH ?>refer-friends.html" title="<?php //echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>">
								<?php //echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?></a></li>-->
								<?php  if($this->session->get('user_auto_key')) { ?> |
					<li  ><div class="store_credit"><a href="<?php echo PATH; ?>storecredits-products.html" > <?php echo $this->Lang["STR_CRDS"]; ?></a></div></li>  <?php } ?>
					
                    
                    
				</ul>
			</div>
            
                   <div class="box swifta">
                         <?php if(empty($this->UserID)){?>
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" >Customer</option>
							<option value="1"><a  href="javascript:show_register();" title="Customer Signup">Register</a></option>
							<option value="2"><a  href="javascript:show_login();" title="Customer Login">Login</a></option>
                                                        <li></li>
				

						</select>
                       <?php  }else {}?>
                       
   				    </div>
                   
                    
                    
   			 </div>
             
			 <div class="cssmenu">
				<ul>
					
					<!--<li><a href="checkout.html">Wishlist</a></li> |-->
					
                   
                    
                    <?php if ($this->session->get('UserID')) { ?>
                      <li><a title="Hi <?php echo $this->session->get('UserName');?>, click to go to your account." href="<?php echo PATH."users/my-account.html"; ?>">Hi <?php echo common::truncate_item_name($this->session->get('UserName'), 7)?>
                      
                      <?php if($this->session->get('user_auto_key')) {?>
                      <b>
                      <?php
						   echo "(".$this->session->get('user_auto_key').")"; ?>
                      </b><?php } ?>
                      
                      </a></li> |
                      <!--<li class="active"><a href="<?php echo PATH."users/my-account.html"; ?>">Account</a></li> |-->
                      <li><a title="go to <?php echo SITENAME;?> home" href="<?php echo PATH; ?>"><?php echo SITENAME;?></a></li> |
                      <li><a title="subscribe for extreme offers" href="javascript:load_club();" >Zenith Offers</a></li> |
                   	  <li><a title="log out" href="<?php $cart_count = $this->session->get('count');if(isset($cart_count) && $cart_count > 0){?> javascript:logout_click();"
							<?php }else {?><?php echo PATH;?>leo_logout.html"<?php } ?> >Logout</a></li>

                    
					 
                    <?php }else{ ?>
                    
                    <li><a title="go to <?php echo SITENAME;?> home" href="<?php echo PATH; ?>"><?php echo SITENAME;?></a></li> |
                    <li><a href="javascript:load_club();" >Zenith Offers</a></li> |
                      
<!--                    <a id="" href="<?php //echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart" style="color:#fff;">Sell on Zmart</a>-->
<!--                    <li><a href="javascript:show_login();">Login</a></li> |-->
<!--                    <li><a href="javascript:show_register();">Signup</a></li>-->
                   
                    <?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
<div class="header-bottom" id = "id_dummy_leo_add_to_cart">
	    <div class="wrap">
        <div style=" width: 100%; margin: 0 auto;">
        	<div class="header-bottom-left swifta">
            
         	</div>
          
				
		</div>
        	<div class="clear"></div>
        	<div class="header-bottom-right">
            <div class="logo">
                <?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
 <a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
	     <?php if(file_exists(DOCROOT .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png')){?> 	<img alt="<?php echo $this->Lang['LOGO']; ?>" 	src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>      <?php }else{ ?>         <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/>      <?php } ?>
	
<?php /* <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/> */ ?></a>
<?php } } ?>
					
                    
				</div>
            <div class="menu swifta">
	            <ul class="megamenu skyblue">
			<li id="id_leo_home" ><a title="store home" href="<?php echo PATH.$stores->store_url_title; ?>">Home</a></li>
            
				<!--<li><a class="color4" href="#">Products</a>
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
                 <li id="id_leo_product" ><a title="products" class="color5" href="<?php echo PATH.$stores->store_url_title; ?>/products.html">Products</a>
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
                 	
                    <?php  foreach ($this->categeory_list_product as $d) {?>
                                <?php $check_sub_cat = $d->product_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "products";
								$categories = $d->category_url; ?>
                                
                                
                             <div class="col1">
							<div class="h_nav">
								<h4><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></a>
                                
                                </h4>
								<ul>
                                
                                
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                 
                 <?php  }?><!-- Ending 2nd if -->
					 
                <?php }else{ ?> <!-- (Ending 1st if) Products custom menu ending here -->
                		<div class="col1">
							<div class="h_nav">
								<h4>NO Products</h4>
								<ul>
									<li><a title="no products yet" href="#">Sorry, No products in this store yet.</a></li>
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
           		 <li id="id_leo_deal"><a title="deals" class="color5" href="<?php echo PATH.$stores->store_url_title; ?>/today-deals.html">Deals</a>
                <div class="megapanel">
               
               
                
                 <?php 
				 if(count($this->categeory_list_deal)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_deal as $d) {?>
                                <?php $check_sub_cat = $d->deal_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "deal";
								$categories = $d->category_url; ?>
                                
                                
                             <div class="col1">
							<div class="h_nav">
								<h4><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></a>
                                
                                </h4>
								<ul>
                                
                                
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                
                <?php }else{ ?> <!-- (Ending 1st if) Products custom menu ending here -->
                		<div class="col1">
							<div class="h_nav">
								<h4>NO DEALS</h4>
								<ul>
									<li><a title="no deals yet" href="#">Sorry, No Deals in this store yet.</a></li>
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
                <!-- DEALS END HERE -->
                
                 <!-- AUCTIONS START HERE -->
                 <li id="id_leo_auction"><a title="auctions" class="color5" href="<?php echo PATH.$stores->store_url_title; ?>/auction.html">Auctions</a>
                <div class="megapanel">
               
               
                
                 <?php 
				 if(count($this->categeory_list_auction)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_auction as $d) {?>
                                <?php $check_sub_cat = $d->auction_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "auction";
								$categories = $d->category_url; ?>
                                
                                
                             <div class="col1">
							<div class="h_nav">
								<h4><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></a>
                                
                                </h4>
								<ul>
                                
                                
									<!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
								</ul>	
							</div>							
						</div>
                        
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                
                <?php }else{ ?> <!-- (Ending 1st if) Products custom menu ending here -->
                		<div class="col1">
							<div class="h_nav">
								<h4>NO AUCTIONS</h4>
								<ul>
									<li><a title="no auctions yet" href="#">Sorry, No Auctions in this store yet.</a></li>
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
                <!-- AUCTIONS END HERE -->
                <li><a title="sold out items" class="color5" href="<?php echo PATH?>soldout.html">Soldout</a>
                </li>
                <li><a title="other stores" class="color5" href="<?php echo PATH?>stores.html">Stores</a>
                </li>
                
                <li><a title="items that may be near you" class="color5" href="<?php echo PATH?>near-map.html">Near Map</a>
                </li>
                
              
				
			</ul>
				</div>
            
            
            <div class="search header_item_offset" style="border-right:none;">	  
         		<!--<div class="box swifta">
                
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" >Merch... | Prod...</option>
							<option value="1">Register</option>
							<option value="2">Login</option>
						</select>
   				    </div>-->
                    <ul  id="id_swifta_select" style="position:relative;">
                    <li class="main"><a href="#"><span id="id_selected_category">ALL</span></a><i class="fa fa-caret-down"></i></li>
                    <li class="sub_main">
                    <ul style="position:absolute; display:none; z-index: 999;">
                    
                    <?php if(count($this->categeory_list_product)>0){?>
                 			 <li style="text-align:center;"><a title="products" class="item-type">--- Products ---</a></li>
                    <?php  foreach ($this->categeory_list_product as $d) {?>
                                <?php $check_sub_cat = $d->product_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            <li><a title="Products | <?php echo $d->category_name;?>" href="javascript:select_category(1, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');"><?php echo ucfirst(common::truncate_item_name($d->category_name, 17))?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                    
                    <?php if(count($this->categeory_list_deal)>0){?>
                 			 <li style="text-align:center;"><a title="deals" class="item-type">--- Deals ---</a></li>
                    <?php  foreach ($this->categeory_list_deal as $d) {?>
                                <?php $check_sub_cat = $d->deal_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            
                                            <li><a title="Deals | <?php echo $d->category_name;?>" href="javascript:select_category(2, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');"><?php echo ucfirst(common::truncate_item_name($d->category_name, 17))?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                         
                    <?php if(count($this->categeory_list_auction)>0){?>
                 			 <li style="text-align:center;"><a title="auctions" class="item-type">--- Auctions ---</a></li>
                    <?php  foreach ($this->categeory_list_auction as $d) {?>
                                <?php $check_sub_cat = $d->auction_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            <li><a title="Auctions | <?php echo $d->category_name;?>" href="javascript:select_category(3, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');"><?php echo ucfirst(common::truncate_item_name($d->category_name, 17))?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                           
                    
                   
                    </ul>
                    </li>
                    </ul>
                
		 </div>
         	<div class="search header_item_offset">	  
         		<form  onsubmit="validate();return false;">
                <!--<input type="text" class="input-medium search-query" id="s_q" placeholder="Search">-->
                <input type="hidden" value="0" id="id_sasa_item_type" />
                <input type="hidden" value="0" id="id_sasa_category_type" />
                            
				<input type="text" id = "s_q"  name="q" class="input-medium search-query" placeholder="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<!--<input  type="submit" value="Subscribe" id="submit" style="display:inline">-->
                <a onclick="validate_search();" href="#"><i class="fa fa-search" style="padding: 7px;"></i></a>
                </form>
				<div id="response"> </div>
		 </div>
         	
            <div class="tag-list  cart">
       <!--<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>-->
        
        <?php 
		if($this->session->get('UserID')){?>
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon"  href="<?php echo PATH;?>wishlist.html"><i class="fa fa-heart" title="go to wishlist"></i> </a>
				<!--<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>-->
			</li>
		</ul>
       <?php }?>
        <ul class="icon1 sub-icon1 profile_img">
        <li><a class="active-icon" href="#"><i class="fa fa-balance-scale" title="comparison list"></i> </a>
        <ul class="sub-icon1 list">
        <?php 
			
			
				$this->p_comp = new Products_Model();
			$comp_list = $this->session->get("product_compare");
			if($comp_list && count($comp_list) > 0){
				$total_prods = count($comp_list); ?>
                <?php if($total_prods >1){?>
                <li><p><a href="<?php echo PATH; ?>product-compare.html" title="go to comparison page">Compare now</a></p></li>
                <?php } ?>
				<?php foreach($comp_list as $p_comp_id){
					
					$cate_detail = $this->p_comp->get_category_details($p_comp_id);
					if(count($cate_detail)){
						$product_title = $cate_detail[0]->deal_title; ?>
						<li title="<?php echo $product_title; ?>"><h3><?php echo common::truncate_item_name($product_title); ?></h3><a href="#"></a></li>
                        <li><p><a onclick="remove_from_compare(<?php echo $p_comp_id; ?>, '', 'detail'); return false;" href="#">Remove</a></p></li>
                        <?php
					
					}
				}
			
			}else{?>
            
            <li><h3>No items</h3><a href=""></a></li>
			<li><p><a href="#">No items added to compare yet.</a></p></li>
            
			<?php }?>
        </ul>
        </li>
			<!--<li><a class="active-icon" href="#"><i class="fa fa-balance-scale fa-lg" title="comparison list"></i> </a>
				<ul class="sub-icon1 list">
                	
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                    
                    
				</ul>
			</li>-->
		</ul>
        
        <!--<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon" href="#"><i class="fa fa-caret-down" title="add to favorite"></i> </a>
				<ul class="sub-icon1 list">
					<li><h3>sed diam nonummy</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>-->
		<ul class="icon1 sub-icon1 profile_img" style="displayx:none;">
			<li><!--<a class="active-icon c2" href="#"> </a>-->
            <a class="active-icon" href="#"><i class="fa fa-shopping-cart fa-lg" title="cart items"></i> </a>
            
				<ul class="sub-icon1 list" id="id_cart_state">
                <?php 
					$this->payment_products = new Payment_Product_Model();
					$item_count = 0;
					//var_dump($_SESSION);
					//exit;
					
					
				 ?>
               
                <?php foreach($_SESSION as $key=>$value)
                    { ?>
                    <?php if(is_array($value))
							continue;
					?>
                    	<?php $d_id = "";?>
                    	<?php if(!is_array($value)){
                            if($key == "product_cart_id".$value){
							$item_count = 1;
							$d_id =  $value;
							 $p_ds=$this->payment_products->get_product_details_cart($d_id);
							 
							 ?>
                            <!--<li><a href="#"><h3><?php echo  $p_ds->current()->url_title?></h3></a></li>
							<li><p>Your cart has no items for checkout just yet. <a href="#id_dummy_leo_add_to_cart" target="_self"> continue shopping!</a></p></li>-->
							 <i id = "id_item_no_<?php echo $d_id; ?>"><li><a href="#"><h3 title="<?php echo $p_ds->current()->url_title; ?>"><?php echo common::truncate_item_name($p_ds->current()->url_title); ?></h3></a></li><li><p><a onclick="leo_remove_cart_item(<?php echo $d_id ?>); return false;" href="#">Remove</a></p></li></i>
                             
                            <?php }}?>
					
                    
                    <?php }?>
                    
                    <?php if($item_count == 0){?>
							<li><a href="#"><h3>No Items</h3></a></li>
							<li><p>Your cart has no items for checkout just yet. <a href="#id_dummy_leo_add_to_cart" target="_self"> continue shopping!</a></p></li>
						<?php }?>
                   
				</ul>
                
               
			</li>
            
		</ul>
	    <ul class="last"  id="id_cart_item_count"><li ><a  title="go to cart" href="<?php echo PATH."cart.html"?>" >Cart(<?php if($this->session->get('count')){echo $this->session->get('count'); }else { echo "0"; }?>)</a></li></ul>
        <input type="hidden" id="id_cart_add_last_state" value="0" />
        <input type="hidden" id="id_cart_remove_last_state" value="0" />
	  </div>
	  		
   		    </div>
    	<div class="clear"></div>
     
     </div>
	</div>
    
    <script type="text/javascript">
		$('#id_swifta_select ul li a').click(function(e) {
            $('#id_swifta_select li.sub_main ul').css('display', 'none');
        });
		$('#id_swifta_select').hover(function(e){
			$('#id_swifta_select li.sub_main ul').css('display', 'inline-block');
			}, function(e){
				
				$('#id_swifta_select li.sub_main ul').css('display', 'none');
				
			});
			
			$('#id_swifta_select li.sub_main ul').hover(function(e){}, function(e){
				
			});
	</script>
    
    
    <script type="text/javascript">
	function select_category(type_id, category_url, category_name){
		
		$('#id_selected_category').attr('title', category_name);
		type_id = parseInt(type_id);
		switch(type_id){
			case 1:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("products");
				
				category = "Products <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 7);
				
				break;
			}
			
			case 2:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("today-deals");
				
				category = "Deals <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 7);
				
				break;
			}
			
			case 3:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("auction");
				
				
				
				category = "Auctions <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 7);
				
				break;
			}
			default:{
				$('#id_sasa_category_type').val("");
				$('#id_sasa_item_type').val("");
				category = "<span style='color: #ccc;' title = 'ALL'>ALL</span> "
				break;
			}
		}
		
		$('#id_selected_category').html(category);
		$('#s_q').trigger('focus');
		$('ul.category').trigger('mouseout');
		
		
		
	
	}
	
    function validate_search(){
			
			
			$('#s_q').css('border-color', '#FFF');
			
			$('#s_q').attr('title', 'Search');
				
			q = $('#s_q').val();
			
			
			if(!q || q == 'Search'){
				
				$('#s_q').css('border-color', '#F00');
				$('#s_q').attr('title', 'Value required for search');
				return false;
			}
			
			
			var category = $('#id_sasa_category_type').val();
			var item_type = $('#id_sasa_item_type').val();
			
			
			url = "<?php echo PATH;?>";
			if(category && category != "0" && item_type && item_type != "0"){
				url = url+"<?php echo $this->storeurl?>/"+item_type+".html/?q="+q+"&c="+category;
			}else{
			
					<?php if(isset($this->type)){?>
						url = url+"<?php echo $this->storeurl."/".$this->type;?>.html/?q="+q;
					<?php }else{?>
						url = url+"<?php echo $this->storeurl;?>/?q="+q;
					<?php }?>
			}
			/*alert(url);
			return false;*/
			/*window.location.href = "<?php echo PATH.$this->storeurl?>/products.html?q="+q;*/
			window.location.href = url;
			
			
			
		}
		
		
		
		function truncate_item_name(name, length){
			lenght = parseInt(length);
			
			if(name.length <= length)
			return name;
			
			name = name.substr(0, length);
			return name+"...";
		}
 </script>
    
   
    
    
    
    
    
   


    
    
    

