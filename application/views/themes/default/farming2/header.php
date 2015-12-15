
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
if (isset($this->is_product)) {
    $type = "products";
} else if (isset($this->is_auction)) {
    $type = "auction";
} else {
    $type = "deal";
}
/** For Front end language  start * */
$Directory = opendir(DOCROOT . "application/vendor/language/frontend_language");
$DL = array();
while (false !== ($dirname = readdir($Directory))) {
    if (strlen($dirname) > 2) {
        $ext = pathinfo($dirname, PATHINFO_EXTENSION);
        if ($ext == "php" || $ext == ".php" || $ext == "PHP") {
            $DL[] = $dirname;
        }
    }
}
sort($DL);
$this->language_List = str_replace(".php", "", $DL);

/** For Front end language  end * */
?>

 <script>
    $(document).ready(function() {
        $('.submit-link2').click(function(e) {
            $('input[name="c"]').val($(this).attr('id').replace('sample123-', ''));
            $('input[name="c_t"]').val('<?php echo base64_encode("main"); ?>');
            e.preventDefault();
            $(this).closest('form').submit();
        });
    });
</script>

<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>
<!--header start-->
<!--header start-->
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
                                                    <?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { 
                                                    if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
                    foreach($this->footer_merchant_details as $admin){?>
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> <?php echo $stores->phone_number;?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?php echo $admin->email;?></a></li>
                                                                <li> <a id="" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart">Sell on Zmart</a>
                                                             </li>
                                                              <li><a class="shoppingcart" href="javascript:load_club();" title="Enjoy amazing discounts with offers from Zenith Bank"><i class="icon-briefcase icon-large"></i>Zenith Offers</a> </li>
							</ul>
                                                   <?php  }}
                                                    } }?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
                                                           
       
        
								<li><a target="_blank" href="https://www.facebook.com/Zenithbank" title="facebook" ><i class="fa fa-facebook"></i></a></li>
								<li><a target="_blank" href="http://twitter.com/Zenithbank" title="Twitter" ><i class="fa fa-twitter"></i></a></li>
								<li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a target="_blank" href="https://plus.google.com/110325758209488608823" title="G+"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4" style="margin-top:-30px;">
						<div class="logo pull-left">
						<?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
                    <a href=href="<?php echo PATH.$stores->store_url_title.'/';?>"  class="logo pull-left" ><img src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>" 
                      alt="<?php echo $this->Lang['LOGO']; ?>"  title="<?php echo $stores->store_name; ?>"></a> 
                    <!-- Top Nav Start -->
                   
      <?php } } ?>	
                                                   
						</div>
                                            
						<div class="btn-group pull-right">
							<div class="btn-group">
								                                                     <?php
$ajax_type = 0;
$srch = $this->Lang['SEARCH'];

if (isset($this->is_product)) {
$ajax_type = 1; // userd in auto suggestion search
$srch = $this->Lang['SRCH_PRD'];
?>
<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
}else if (isset($this->is_deals)) {
$ajax_type = 2; // userd in auto suggestion search
$srch = $this->Lang['SRCH_DEAL'];
?>
<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/today-deals.html">
	<?php
} else if (isset($this->is_auction)) {
	$ajax_type = 3; // userd in auto suggestion search
	$srch = $this->Lang['SRCH_AUC'];
	?>
	<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/auction.html">
		<?php
	} elseif (isset($this->is_store_details)) {
$ajax_type = 5; // userd in auto suggestion search
$srch = $this->Lang['SRCH_STR_DET'];
?>
<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
} elseif (isset($this->is_store)) {
$ajax_type = 4; // userd in auto suggestion search
$srch = $this->Lang['SRCH_STR'];
?>
<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
}  else {
		$srch = $this->Lang['SRCH_PRD'];
	?>
    <form id="myform" class="form-search top-search" action="<?php echo PATH.$this->storeurl; ?>/products.html">

<?php } ?>
         <div class="cities pull-right" style="float:left;margin-top:-100px;z-index: 2299;border:1px solid white;width:150%;padding-top:5px;z-index: 20;">
		<ul>
	        <li>
                <?php
                $catid = 0;
                $cat_name = $this->Lang['AL_CAT'];
                foreach ($this->category_list as $d) {
                        if ($d->category_id == $this->input->get('d_id')) {
                                $cat_name = $d->category_name;
                                $catid = $d->category_id;
                        }
                }
                ?>
                <a data-caty="<?php echo $catid; ?>" id="search_cat" style="cursor:pointer;" title="<?php echo ucfirst($cat_name); ?>"><?php echo ucfirst($cat_name); ?></a>

                <div class="drop_down">
                <ul>
                <?php
                foreach ($this->category_list as $d) {
                $cat = ($type == "products") ? 'product' : (($type == "auction") ? 'auction' : 'deal');
                ?>
                <li><a onclick="ChangeCategory('<?php echo $d->category_name; ?>', '<?php echo $d->category_id; ?>')" style="cursor:pointer;" title="<?php echo ucfirst($d->category_name); ?>" ><b><?php echo ucfirst($d->category_name); ?></b></a>
                </li>
                <?php } ?>
                </ul>
                </div>
	        </li>
        </ul>
        <input type="hidden" name="d_id" id="cat" value="" />
        </div>
							</div>
							
<!--							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>-->
						</div>-->
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
                                                             <?php  if($this->session->get('user_auto_key')) { ?>
        <li  class="myaccount"> <a href="<?php echo PATH; ?>storecredits-products.html" style=" font-size: 12px;"><?php echo $this->Lang["STR_CRDS"]; ?></a></li>

        <?php } ?>
         <?php if ($this->session->get('UserID')) { 
              $item_count_session = $this->session->get('count');
	      $item_count = ($item_count_session == '')? 0: $item_count_session;
             ?>
       <li> <a  href="#"><i class="fa fa-user"></i><span style="color:#000; font-size:10px;">Hi, <b><?php echo common::truncate_item_name($this->user_name, 7);?></b><?php if(isset($this->auto_key) && !empty($this->auto_key)){?> <span> (</span><span style="color:#F25C27;"><?php echo $this->auto_key;?></span><span>) </span><?php }?></span></a><li>
                      
								<li><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><i class="fa fa-user"></i><?php echo $this->Lang['MY_ACC']; ?></a></li>
							 <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>


               

               
                <li  class="fa fa-star" >
                <?php $compare = $this->session->get("product_compare"); 
               
                if(is_array($compare) && count($compare)>1){  ?>
                <a style="font-size: 12px;" href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>								
                <li class="fa fa-star"> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li> 


        <?php } ?>   
                                                                
                                                               <li><a href="<?php echo PATH;?>wishlist.html"><i class="fa fa-star"></i>Wishlist  <span class="label label-success">(<span id="id_sasa_wish"><?php echo common::get_wishlist_count(); ?></span> )</span></a>  </li>
                            
                                                                
								
                                                                <li><a href="<?php echo PATH; ?>logout.html" title="<?php echo $this->Lang['LOGOUT']; ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo PATH; ?>cart.html"><i class="fa fa-shopping-cart"></i> Cart(<?php echo $item_count ; ?>)</a></li>
								<li><a href="<?php echo PATH; ?>logout.html" title="<?php echo $this->Lang['LOGOUT']; ?>"><i class="fa fa-lock"></i> <?php echo $this->Lang['LOGOUT']; ?></a></li>
        
         <?php } else ?>
                                                               <?php  { ?>
                                                                    
								<li><a href=""><i class=""></i>Customer ::</a></li>
								<li><a href="javascript:show_register();"><i class="fa fa-shopping-cart"></i>Register</a></li>
                                                                <li><a href=""><i class=""></i>|</a></li>
								<li><a href="javascript:show_login();"><i class="fa fa-lock"></i> Login</a></li>
                                                               <?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
                                                             <?php if(isset($this->is_home)||isset($this->is_product)||isset($this->is_todaydeals)||isset($this->is_auction)){ ?>
                        <?php if(isset($this->is_details)){ ?>
                        
                        <?php } else { ?>
                        
		        
		        <?php } } else { ?>
		        
		        <?php } ?>
								<li  <?php
				        if (isset($this->is_home)) {
					        echo "class='active'";
				        }
				        ?>
                                                                    
                                                                    
              ><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>" class="active"><?php echo $this->Lang['HOME']; ?></a></li>
								  <?php if ($this->product_setting) { ?>
                                                                <li class="dropdown"><a href="<?php echo PATH.$this->storeurl; ?>/products.html" >Product<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                         <?php $pr = 0; $pro = 0; $val_pro ="";
        foreach ($this->categeory_list_product as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 3, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        //$val_pro .= $check_sub_cat.","; 
		        $check_sub_cat = $d->product_count;
		        if($check_sub_cat != 0){
		        $pro = $pr + 1;
		        $pr ++;
		        } }
		        $arr_product = explode(",", substr($val_pro,0,-1));
        ?>
                                        
<!--                                        <li><a href="shop.html"><?php echo ucfirst($d->category_name); ?> </a></li>-->
                                         <?php if($this->categeory_list_product){  
            foreach ($this->categeory_list_product as $d) {
                $check_sub_cat = $d->product_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
<!--										<li><a href="product-details.html">Product Details</a></li> -->
                                                                   <li><a><?php echo ucfirst($d->category_name); ?> </a>
                                                                    <ul>
                                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
<!--                                           <li style="margin-left:-10px;"><a href="<?php //echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php //echo ucfirst($sub_cate->category_name);?>"><?php //echo ucfirst($sub_cate->category_name);?></a></li>
                                     -->
 <?php 
                                    }
                                }

                            }
                        }?>


                                        </ul>
                                                                      
                                                                    <?php }} ?>
                                                                   
                                                                   
                                                                   
                                                                   </li>
                                                                   
									 <?php } ?> 
                                    </ul>
                                                                     
                                </li> 
                                                                 
                                
                                
                                	   <?php if ($this->deal_setting) { ?>
                                                                <li class="dropdown"><a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>" ><?php echo $this->Lang['DEALS']; ?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                         <?php $de = 0; $dea = 0;  $val_de ="";
        foreach ($this->categeory_list_deal as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 2, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        $check_sub_cat = $d->deal_count;
		        $val_de .= $check_sub_cat.","; 
		        if($check_sub_cat != 0){
		        $dea = $de + 1;
		        $de ++;
		        } }
		        $arr_deal = explode(",", substr($val_de,0,-1));
        ?>
                                        
<!--                                        <li><a href="shop.html"><?php echo ucfirst($d->category_name); ?> </a></li>-->
                                         <?php if($this->categeory_list_deal){  
            foreach ($this->categeory_list_deal as $d) {
                $check_sub_cat = $d->deal_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
<!--										<li><a href="product-details.html">Product Details</a></li> -->
                                                                   <li><a><?php echo ucfirst($d->category_name); ?> </a>
                                                                    <ul>
                                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            
                            ?>
<!--                                           <li style="margin-left:-10px;"><a href="<?php //echo PATH.$this->storeurl.'/deal/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php //echo ucfirst($sub_cate->category_name);?>"><?php //echo ucfirst($sub_cate->category_name);?></a></li>
                                     -->
 <?php 
                                    }
                                }

                            }
                        }?>


                                        </ul>
                                                                      
                                                                    <?php }} ?>
                                                                   
                                                                   
                                                                   
                                                                   </li>
                                                                   
									 <?php } ?> 
                                    </ul>
                                                                     
                                </li> 
                                
                                <?php if ($this->auction_setting) { ?>
                                                                <li class="dropdown"><a href="<?php echo PATH.$this->storeurl; ?>/today-auction.html" title="<?php echo $this->Lang['AUCTION']; ?>" ><?php echo $this->Lang['AUCTION']; ?><i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                         <?php $de = 0; $dea = 0;  $val_de ="";
        foreach ($this->categeory_list_auction as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 2, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        $check_sub_cat = $d->auction_count;
		        $val_de .= $check_sub_cat.","; 
		        if($check_sub_cat != 0){
		        $dea = $de + 1;
		        $de ++;
		        } }
		        $arr_deal = explode(",", substr($val_de,0,-1));
        ?>
                                        
<!--                                        <li><a href="shop.html"><?php echo ucfirst($d->category_name); ?> </a></li>-->
                                         <?php if($this->categeory_list_deal){  
            foreach ($this->categeory_list_auction as $d) {
                $check_sub_cat = $d->auction_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
<!--										<li><a href="product-details.html">Product Details</a></li> -->
                                                                   <li><a><?php echo ucfirst($d->category_name); ?> </a>
                                                                    <ul>
                                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            
                            ?>
<!--                                           <li style="margin-left:-10px;"><a href="<?php //echo PATH.$this->storeurl.'/auction/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php //echo ucfirst($sub_cate->category_name);?>"><?php //echo ucfirst($sub_cate->category_name);?></a></li>
                                     -->
 <?php 
                                    }
                                }

                            }
                        }?>


                                        </ul>
                                                                      
                                                                    <?php }} ?>
                                                                   
                                                                   
                                                                   
                                                                   </li>
                                                                   
									 <?php } ?> 
                                    </ul>
                                                                     
                                </li> 
                                
                                
<!--                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a>
                                            <ul>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                                                                </ul>
                                                                                </li>
                                    </ul>
                                </li> -->
                                
<!--								<li class="dropdown"><a href="#">DEALS<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">AUCTION</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
                                
<!--                                <li class="dropdown"><a href="#">AUCTIONS<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">AUCTION</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
                                <?php if ($this->past_deal_setting) { ?>
								<li  accesskey="<?php
		        if (isset($this->is_soldout)) {
			        echo "class='active'";
		        }
		        ?>>">
                                                                    <a href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>"><?php echo $this->Lang['SOLD_OUT2']; ?></a></li><?php } ?>
								 <?php if ($this->store_setting) { ?>
                                                                <li <?php
		        if (isset($this->is_store)) {
			        echo "class=''";
		        }
		        ?>
                                                                    ><a href="<?php echo PATH; ?>stores.html" title="<?php echo $this->Lang['STORES']; ?>"><?php echo $this->Lang['STORES']; ?></a></li><?php } ?>
                                                                 <?php if (($this->deal_setting == 1 || $this->product_setting == 1 || $this->auction_setting == 1 ) && $this->map_setting) { ?>
                                                                <li  <?php
		        if (isset($this->is_map)) {
			        echo "class='active'";
		        }
		        ?>><a href="<?php echo PATH; ?>near-map.html" title="<?php echo $this->Lang['NEAR_MAP']; ?>"><?php echo $this->Lang['NEAR_MAP']; ?></a></li><?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">

        <input type="text" class="input-medium search-query  input-medium search-query" size="35" style="border:1px solid #119717;; width:220px;height:40px; border-radius:0px;" name="q" onkeyup="lookup(this.value);" <?php if (isset($search) && ($search != '')) { ?> value="<?php echo $search; ?>" <?php } else { ?>  AUTOCOMPLETE="OFF" placeholder="<?php echo $srch; ?> ..." <?php } ?>  placeholder="Search Hereâ€¦"/>
                            
   <div id="suggestions" class="search_suggestions"></div>
<!--							<input type="text" placeholder="Search"/>-->
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header>

<div class='popup_block pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>
<div class='popup_block3_0 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_verify_account_popup'); ?></div>
<div class='popup_block3_1 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/zenith_open_account_popup'); ?></div>
<div class='popup_block4 pop' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/users/fb_popup'); ?></div>

<script type="text/javascript">
    $(document).ready(function() {
        $(".show1").click(function() {
            $(".arro").toggle("slow", "linear");
            $(".drop_down").toggle("slow", "linear");
        });


    });
    
    function lookup(inputString) {
		var myString = inputString;
		var str = myString;
		var input_string=str.replace(/[^A-Za-z0-9-.]/g, " ");
        if (input_string.length == 0) {
            $('#suggestions').fadeOut(); // Hide the suggestions box
        } else {
            $.post("<?php echo PATH; ?>welcome/ajax_search/" + input_string + "/" + '<?php echo $ajax_type; ?>'+ ' / <?php echo $this->storeid;?>', function(data) { // Do an AJAX call
                $('#suggestions').fadeIn(); // Show the suggestions box
                $('#suggestions').html(data); // Fill the suggestions box
            });
        }
    }
    
    function lookup(inputString) {
		var myString = inputString;
		var str = myString;
		//var input_string=str.replace(/[^A-Za-z0-9-.]/g, " ");
		var input_string=str.replace(/[^a-zA-Z0-9-.,()\s]/g,'');
        if (input_string.length == 0) {
            $('#suggestions').fadeOut(); // Hide the suggestions box
        } else {
            $.post("<?php echo PATH; ?>welcome/ajax_search/" + input_string + "/" + '<?php echo $ajax_type; ?>'+ ' / <?php echo $this->storeid;?>', function(data) { // Do an AJAX call
                $('#suggestions').fadeIn(); // Show the suggestions box
                $('#suggestions').html(data); // Fill the suggestions box
            });
        }
    }


    function changelang(lang) {

        if (lang != "" && lang != "undefined") {

            var dataString = "language=" + lang;
            var url = '<?php echo PATH; ?>welcome/setlanguage';
            $.ajax(
                    {
                        type: 'POST',
                        url: url,
                        data: dataString,
                        success: function(result)
                        {
                            location.reload(true);
                        }


                        ,
                        error: function()
                        {
                            alert('Language cannot be set.');
                        }
                    });

        } else {
            alert("Please select language!");
        }

    }

    function ChangeCategory(catname, catid) {

        $("#search_cat").html(catname);
        $("#search_cat").attr("title", catname);
        $("#search_cat").attr("data-caty", catid);
        $('input[name=d_id]#cat').val(catid);
    }



</script>

<script>
    /*global jQuery:false */
jQuery(document).ready(function($) {
"use strict";

		//add some elements with animate effect
		$(".box").hover(
			function () {
			$(this).find('span.badge').addClass("animated fadeInLeft");
			$(this).find('.ico').addClass("animated fadeIn");
			},
			function () {
			$(this).find('span.badge').removeClass("animated fadeInLeft");
			$(this).find('.ico').removeClass("animated fadeIn");
			}
		);
		
	(function() {

		var $menu = $('.head_menu'),                        
			optionsList = '<option value="" selected>Go to..</option>';

		$menu.find('li').each(function() {
			var $this   = $(this),
				$anchor = $this.children('a'),
				depth   = $this.parents('ul').length - 1,
				indent  = '';

			if( depth ) {
				while( depth > 0 ) {
					indent += ' - ';
					depth--;
				}

			}
			$(".head_menu li").parent().addClass("bold");

			optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
		}).end()
		.after('<label class="head_categoryicon"><select class="head_category">' + optionsList + '</select></label>');
		
		$('select.head_category').on('change', function() {
			window.location = $(this).val();
		});
		
	})();

		//Navi hover
		$('ul.head_menu li.dropdown').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
		});
		
});

$("#cart_window").mouseover(function(){

	var url=Path+'/payment_product/cart_window_products';
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
					$(".cart_window_products1").css({"display":"block"});
					$(".cart_window_products1").html(check);
				}
			});
});

$("#cart_window").mouseout(function(){
	
	$(".cart_window_products1").hide();
	});


</script>
