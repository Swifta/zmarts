

<?php 
	$this->img_assets_base_url = PATH."themes/".THEME_NAME."/images/sasa";
	$this->js_base_url = PATH."themes/".THEME_NAME."/js/sasa";
		$this->UserID = $this->session->get('UserID');
	$this->auto_key = $this->session->get('user_auto_key');
	$this->user_name = $this->session->get('UserName');
	$this->cart_item_count = $this->session->get('count');
?>



<!--<?php 
			
			
			$this->p_comp = new Products_Model();
			$this->total_comp_count = 0;
			$comp_list = $this->session->get("product_compare");
			if($comp_list && count($comp_list) > 0){
				$total_prods = count($comp_list);
				$this->total_comp_count = $total_prods;
			?>
                
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
            
			<?php }?>-->


 <?php 

 	$this->best_item = common::get_single_best_seller($this->store_id,$this->merchant_id);
	
	
  ?>
  
 <script src="<?php echo $this->js_base_url; ?>/jquery.js"></script>
 
 <script src="<?php echo PATH; ?>js/coffee.js" type="text/javascript"></script>
 
 

 

 
 
<header>
    <div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> <a href="<?php echo PATH.$this->storeurl; ?>" class="logo pull-left">
     <?php if(file_exists(DOCROOT .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png')){?>
	<img alt="<?php echo $this->Lang['LOGO']; ?>" 	src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
     <?php }else{ ?>
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/>
     <?php } ?>
                    </a> 
                    <!-- Top Nav Start -->
                    <div class="pull-left">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <li><a class="home" title="go to <?php echo SITENAME;?> home page" href="<?php echo PATH;?>"><i class="icon-home icon-large"></i><?php echo SITENAME;?></a> </li>
                                    
<!--                                    <li><a class="myaccount" href="<?php //echo PATH ?>refer-friends.html" title="<?php //echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT; ?>"><i class="icon-user icon-large"></i><?php //echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?> </a> </li>-->
                                    <li><a class="shoppingcart" href="javascript:load_club();" title="Enjoy amazing discounts with offers from Zenith Bank"><i class="icon-briefcase icon-large"></i>Zenith Offers</a> </li>
                               
                                    <li><a class="checkout" title="get help" href="<?php echo PATH; ?>help.php"><i class="icon-question icon-large"></i><?php echo $this->Lang['HELP']; ?></a> </li>
                                     <li><a id="" class="myaccount" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart">Sell on Zmart</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->
                    <div class="pull-right swifta support">
                        <!--<form class="form-search top-search">
                            <label  class="input-medium search-query" style="color:#FFF;" placeholder="Search Here…" >HELLO</label>
                           
                        </form>-->
                         <span class="shoppingcart" href="#"><i class="icon-phone-sign icon-large"></i><?php echo $this->Lang['CUSS_SUPP']; ?> <?php
								if (PHONE1) { 	echo PHONE1;	} else { }?></span>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="headerdetails">
            <div class="pull-left">
                <ul class="nav language pull-left">
                        <!--<li class="dropdown hover"> <a href="#" class="dropdown-toggle" data-toggle="">US Doller <b class="caret"></b></a>
                        <ul class="dropdown-menu currency">
                            <li><a href="#">US Doller</a> </li>
                            <li><a href="#">Euro </a> </li>
                            <li><a href="#">British Pound</a> </li>
                        </ul>
                    </li>-->
                    	<li class="dropdown hover search swifta in"> <a href="#" class="dropdown-toggle" data-toggle="">Search in</a>
                    </li>
                   
                    <li class="dropdown hover category"> <a href="#" class="dropdown-toggle" data-category = "1", data-item-type = "2"  data-toggle=""><span id="id_selected_category" >ALL</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu language category">
                            <li><a href="javascript:select_category(0);">ALL</a> </li>
                            
                            <?php if(count($this->categeory_list_product)>0){?>
                 			 <li><a >---Products---</a> </li>
                    <?php  foreach ($this->categeory_list_product as $d) {?>
                                <?php $check_sub_cat = $d->product_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            <li><a href="javascript:select_category(1, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');"><?php echo ucfirst($d->category_name)?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                         
                         
                            <?php if(count($this->categeory_list_deal)>0){?>
                 			 <li><a >---Deals---</a> </li>
                    <?php  foreach ($this->categeory_list_deal as $d) {?>
                                <?php $check_sub_cat = $d->deal_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            <li><a href="javascript:select_category(2, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');")><?php echo ucfirst($d->category_name)?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                         
                         
                         <?php if(count($this->categeory_list_auction)>0){?>
                 			 <li><a >---Auctions---</a> </li>
                    <?php  foreach ($this->categeory_list_auction as $d) {?>
                                <?php $check_sub_cat = $d->auction_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                            <li><a href="javascript:select_category(3, '<?php echo $d->category_url; ?>', '<?php echo $d->category_name; ?>');"><?php echo ucfirst($d->category_name)?></a> </li>
                                
                                <?php } ?>
                         <?php } ?>
                         
                         <?php } ?>
                           
                        </ul>
                    </li>
                    <li class="dropdown hover swifta search input">
                        <form class="form-search top-search swifta">
                            <input type="text" class="input-medium search-query" id="s_q" placeholder="Search">
                            <input type="hidden" value="0" id="id_sasa_item_type" />
                            <input type="hidden" value="0" id="id_sasa_category_type" />
                            <a onclick="validate_search();" href="#"><i class="icon-search icon-large" style="padding: 10px;"></i></a>
                        </form>
                    </li>
                </ul>
            </div>
            
            <div class="pull-right">
                <ul class="nav topcart pull-left">
               <?php 
					$item_count_session = $this->session->get('count');
					$item_count = ($item_count_session == '')? 0: $item_count_session;
					
					if($item_count == 0){ ?>
                    <li class="dropdown hover carticon "> <a href="#" class="dropdown-toggle" > Shopping Cart <span class="label label-orange font14">0 item(s)</span> - <?php echo CURRENCY_SYMBOL;?> 00.00 <b class="caret"></b></a>
                        <ul class="dropdown-menu topcartopen ">
                            <li>
                                <table>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="name"><a href="#">No items added to cart yet.</a></td>
                                            
                                          
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </li>
					<?php }else { ?> 
					<?php
					
					$total_cost = 0;
					$this->total_cart_value  = 0;
					$this->payment_products = new Payment_Product_Model();
			   ?>
               <li class="dropdown hover carticon "> <a href="#" class="dropdown-toggle" title="cart items" > Shopping Cart <span class="label label-orange font14"><?php echo $item_count; ?> item(s)</span> - <?php echo CURRENCY_SYMBOL;?> <i  id="id_total_cart_value"> 00.00</i> <b class="caret"></b></a>
                <ul class="dropdown-menu topcartopen ">
                            <li><table>
                                    <tbody>
                <?php foreach($_SESSION as $key=>$value)
                    { ?>
                    <?php if(is_array($value))
							continue;
					?>
                    
                    	<?php $d_id = "";
						
						 $d_id =  $value;
						 
						// var_dump($this->session->get('count'));
					     
						
						
						?>
                    	<?php if($value && $key == "product_cart_id".$value){?>
                        
                        <?php
							
							$item_count += 1;
							$p_ds=$this->payment_products->get_cart_products1($this->session->get($key));
							$cart_item = $p_ds->current();
							$this->total_cart_value = $this->total_cart_value+ $cart_item->deal_value;
							
						?>
                         <tr>
                                            <td class="image" ><a href="#" title="<?php echo $cart_item->deal_title; ?>"><!--<img title="<?php echo $cart_item->deal_title; ?>" alt="<?php echo $cart_item->deal_title; ?>" width="50" height="50" src="<?php echo $this->img_assets_base_url?>/prodcut-40x40.jpg"  />-->
                                            		  <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $cart_item->deal_key . '_1' . '.png')) { ?>
													<img width="50" src="<?php echo PATH . 'images/products/1000_800/' . $cart_item->deal_key . '_1' . '.png'; ?>"/>
													   <?php } else { ?>
													   <img width="50" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png"/>
													   <?php } ?>
                                            </a></td>
                                            <td class="name" style="white-space:nowrap; vertical-align:middle"><a href="#" title="<?php echo $cart_item->deal_title; ?>" ><?php echo common::truncate_item_name($cart_item->deal_title, 14);?></a></td>
                                            <td class="quantity" style="vertical-align:middle;">x&nbsp;1</td>
                                            <td class="total" style="white-space:nowrap; vertical-align:middle;"><?php echo CURRENCY_SYMBOL." ".number_format($cart_item->deal_value); ?></td>
                                            <td class="remove"><a onclick="leo_remove_cart_item(<?php echo $cart_item->deal_id;?>);" href="#" title="remove from cart"><i class="icon-remove"></i></a></td></tr>
                                            
                            <?php } ?>
                  <?php } ?>
                
                  </tbody></table></li>
                  			<li style="text-align:center;"><div class="well pull-rightx buttonwrap"> <a class="btn btn-orange" href="<?php echo PATH;?>cart.html">View Cart</a> <a class="btn btn-orange" href="<?php echo PATH;?>cart.html">Checkout</a> </div>
                  </li></ul>
                  </li>
                  
                <?php } ?>
                  
              
                
                   
                </ul>
            </div>
            
            
        </div>
        <div id="categorymenu">
            <nav class="subnav">
                <ul class="nav-pills categorymenu">
                    <li><a class="active"  href="<?php echo PATH.$this->storeurl;?>">Home</a></li>
                    <li><a class="sasa-products" href="<?php echo PATH.$this->storeurl;?>/products.html">Products</a>
                        <div>
                            <ul>
                            
                            
                             <?php if(count($this->categeory_list_product)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_product as $d) {?>
                                <?php $check_sub_cat = $d->product_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "products";
								$categories = $d->category_url; ?>
                                
                                
                            
                             <li><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name); ?>
                             
                             <?php if($d->category_name == "Electronics"){?>
                             <span class="label label-info">
                            
                             ( <?php echo $check_sub_cat; ?>)
                             
                           	 </span>
							 <?php } else
                              if($d->category_name == "Men"){?>
                             <span class="label label-warning">
                            
                             ( <?php echo $check_sub_cat; ?>)
                             
                           	 </span>
							 <?php } else if($d->category_name == "Women"){?>
                             <span class="label label-success">
                            
                             ( <?php echo $check_sub_cat; ?>)
                             
                           	 </span>
							 <?php } else {?>
                              ( <?php echo $check_sub_cat; ?>)
							 <?php }?>
                              
                            
                             
                             </a></li>
                                
                          
                                
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                              </ul>
                            <ul> <li>
                            <?php $products = $this->best_item;?>
                             <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=166&h=250" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=166&h=250" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
        
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=166&h=250" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
                               <!--<img style="display:block" src="<?php echo PATH?>/themes/default/images/leo/no_prod.png" alt="" title="" >--> </li>
                            </ul>
                                
                 
                 <?php  }else { ?>
                 		<ul>
                 		 <li><a href="#">Sorry! No products in this store yet.</a> </li>
                          </ul>
                        <ul>
                                <li><img style="display:block" src="<?php echo PATH?>/themes/default/images/leo/no_prod.png" alt="" title="" > </li>
                          </ul>
				<?php }?><!-- Ending 2nd if -->
                 
                 
                 
                 
                 
                              <!--  <li><a href="product.html">Product style 1</a> </li>
                                <li><a href="product2.html">Product style 2</a> </li>
                                <li><a href="#"> Women's Accessories</a> </li>
                                <li><a href="#">Men's Accessories <span class="label label-success">Sale</span> </a> </li>
                                <li><a href="#">Dresses </a> </li>
                                <li><a href="#">Shoes <span class="label label-warning">(25)</span> </a> </li>
                                <li><a href="#">Bags <span class="label label-info">(new)</span> </a> </li>
                                <li><a href="#">Sunglasses </a> </li>-->
                           
                        </div>
                    </li>
                    
                    
                    
                    <li><a class = "sasa-deals" href="<?php echo PATH.$this->storeurl; ?>/today-deals.html">Deals</a>
                        <div>
                            <ul>
                            
                             <?php 
				 			if(count($this->categeory_list_deal)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_deal as $d) {?>
                                <?php $check_sub_cat = $d->deal_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "deal";
								$categories = $d->category_url; ?>
                                
                                
                            <li><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></a></li>
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                
                <?php }else{ ?> <!-- (Ending 1st if) Products custom menu ending here -->
                			<li><a href="#">Sorry! No deals in this store yet.</a> </li>
               				 <?php } ?> <!-- End else of 1st if -->
                            </ul>
                            <ul>
                                <li><img style="display:block" src="<?php echo PATH?>themes/default/images/leo/no_deal.jpg" alt="" title="" > </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li><a class = "sasa-auctions" href="<?php echo PATH.$this->storeurl; ?>/auction.html">Auctions</a>
                        <div>
                            <ul>
                            
                             <?php if(count($this->categeory_list_auction)>0){?>
                 	
                    <?php  foreach ($this->categeory_list_auction as $d) {?>
                                <?php $check_sub_cat = $d->auction_count;?>
                                
                                <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {?>
                                
                                <?php $type = "auction";
								$categories = $d->category_url; ?>
                                
                                
                            <li><a href="<?php echo PATH.$this->storeurl."/".$type."/c/".base64_encode("main")."/". $d->category_url."."."html?c = $categories";?>"> <?php echo ucfirst($d->category_name)?> 
                            
                           ( <?php echo $check_sub_cat; ?>)
                             
                           
                             </a></li>
                                
                           
                                
                                
                                <?php } ?> <!-- Ending 3rd if -->
                                
                                <?php } ?> <!-- Ending 1st foreach -->
                                
                
                <?php }else{ ?>
                
                		<li><a href="#" title="No auction yet">Sorry! No auctions in this store yet.</a></li>
                		
                	<?php } ?>
                            
                              <!--  <li><a href="product.html">Product style 1</a> </li>
                                <li><a href="product2.html">Product style 2</a> </li>
                                <li><a href="#"> Women's Accessories</a> </li>
                                <li><a href="#">Men's Accessories <span class="label label-success">Sale</span> </a> </li>
                                <li><a href="#">Dresses </a> </li>
                                <li><a href="#">Shoes <span class="label label-warning">(25)</span> </a> </li>
                                <li><a href="#">Bags <span class="label label-info">(new)</span> </a> </li>
                                <li><a href="#">Sunglasses </a> </li>-->
                            </ul>
                            <ul>
                                <li><img style="display:block" src="<?php echo PATH."resize.php?src=";?><?php echo PATH?>themes/default/images/leo/no_auc.png&w=166&h=250" alt="" title="" > </li>
                            </ul>
                        </div>
                    </li>
                    <?php if(isset($this->autokey) && isset($this->UserID)){?>
                    <li><a href="<?php echo PATH?>storecredits-products.html">Store Credits</a> </li>
                    <?php } ?>
                    
                    <li><a href="<?php echo PATH?>soldout.html">Soldout</a> </li>
                    <li><a href="<?php echo PATH?>stores.html">Stores</a> </li>
                    <li><a href="<?php echo PATH?>near-map.html">Near Me Map</a> </li>
                  
                    <li><a href="myaccount.html">Customer</a>
                        <?php if(empty($this->UserID)){?>
                        <div>
                            <ul>
                                <li><a  href="javascript:showlogin();" title="Customer Login">Login</a></li>
				
				<li><a  href="javascript:showsignup();" title="Customer Signup">Register</a></li>
<!--                                <li><a href="<?php //echo PATH;?>merchant-signup-step1.html">Register</a> </li>
                                <li><a href="<?php //echo PATH;?>merchant-login.html">Login</a> </li>-->
                                
                            </ul>
                        </div>
                         <?php  }else {?>
                        
                         <?php  } ?>
                    </li>
                   
                       
                  
                    <li>
                     <?php if(!empty($this->UserID)){?>
                    <a class="sasa-account" href="#"><span style="color:#000; font-size:10px;">Hi, <b><?php echo common::truncate_item_name($this->user_name, 7);?></b><?php if(isset($this->auto_key) && !empty($this->auto_key)){?> <span> (</span><span style="color:#F25C27;"><?php echo $this->auto_key;?></span><span>) </span><?php }?></span></a>
                    <?php } else {?>
                    	<a class="sasa-account" href="#" title="manage account.">Account</a>
					<?php }?>
                        <div>
                            <ul>
                            <?php if(!empty($this->UserID)){?>
                                <li><a href="<?php echo PATH;?>users/my-account.html">My Account</a> </li>
                            <?php }?>
                            <?php if(empty($this->UserID)){?>
                                <li><a href="javascript:show_register();">Register</a> </li>
                                <li><a href="javascript:show_login();">Login</a> </li>
                            <?php } ?>
                            <?php if(!empty($this->UserID)){?>
                                <li><a href="javascript:showforgotpassword();">Forgot password</a> </li>
                                <li><a href="<?php echo PATH;?>wishlist.html">Wishlist  <span class="label label-success">(<span id="id_sasa_wish"><?php echo common::get_wishlist_count(); ?></span> )</span></a> </li>
                             <?php } ?>
                                <li><a href="<?php echo PATH;?>product-compare.html">Compare <span class="label label-info">(<span id="id_sasa_compare"><?php echo $this->total_comp_count; ?></span> )</span></a> </li>
                              <?php if(!empty($this->UserID)){?>
                                <li><a href="<?php if(empty($this->cart_item_count) || $this->cart_item_count == 0 ){?> <?php echo PATH; ?>logout.html<?php } else{?>javascript:logout_click();<?php } ?>">Logout</a> </li>
                              <?php } ?>
                               
                            </ul
                        ></div>
                    </li>
                    
                     
                </ul>
            </nav>
        </div>
    </div>
</header>

<i style="display:none;" id="id_parent_assets"></i>
<input type="hidden" id="id_root" value="<?php echo PATH; ?>">

<div class='popup_block pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>
<div class='popup_block3_0 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_verify_account_popup'); ?></div>
<div class='popup_block3_1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_open_account_popup'); ?></div>
<div class='popup_block4 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/fb_popup'); ?></div>

 <link rel="stylesheet" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/sweetalert.css" type="text/css" /> 
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
<script type="text/javascript">
	function select_category(type_id, category_url, category_name){
		
		type_id = parseInt(type_id);
		switch(type_id){
			case 1:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("products");
				
				category = "Products <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 10);
				
				break;
			}
			
			case 2:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("today-deals");
				
				category = "Deals <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 10);
				
				break;
			}
			
			case 3:{
				$('#id_sasa_category_type').val(category_url);
				$('#id_sasa_item_type').val("auction");
				
				category = "Auctions <span style='color: #ccc;' title = '"+category_name+"'>|</span> "+truncate_item_name(category_name, 10);
				
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