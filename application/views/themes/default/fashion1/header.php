<style>
header{
    background-color: #fafbfb;
    }
    
</style>
<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/fashion1/css/jquery.fancybox-1.3.4.css" media="all">

<?php 
			$item_count_session1 = $this->session->get('count');
			$item_count1 = ($item_count_session1 == '')? 0: $item_count_session1;
			
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
<!--						<li title="<?php //echo $product_title; ?>"><h3><?php //echo ($product_title); ?></h3><a href="#"></a></li>
                        <li><p><a onclick="remove_from_compare(<?php //echo $p_comp_id; ?>, '', 'detail'); return false;" href="#">Remove</a></p></li>-->
                        <?php
					
					}
				}
			
			}else{?>
            
<!--            <li><h3>No items</h3><a href=""></a></li>-->
<!--			<li><p><a href="#">No items added to compare yet.</a></p></li>-->
            
			<?php }?>

<!--<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/css/jquery.fancybox-1.3.4.css"></script> 	-->
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name ?>/js/modernizr.js"></script> 		
<!--<script src="js/modernizr.js"></script>-->
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

<script src="<?php echo PATH; ?>bootstrap/themes/js/common.js"></script>
<script src="<?php echo PATH; ?>bootstrap/themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
           
        $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                
        });
        });
</script>
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

<script src="<?php echo PATH; ?>bootstrap/themes/js/common.js"></script>
<script src="<?php echo PATH; ?>bootstrap/themes/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
           
        $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                
        });
        });
</script>


<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>
<header role="banner">
				<!--header top part-->
				<section class="h_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-3 t_xs_align_c">
							<?php if (!$this->session->get('UserID')) { ?>
<!--								<p  class="f_size_small">Welcome visitor can you  <a id="login" href="javascript:showlogin();"><?//php echo $this->Lang['LOGIN']; ?></a> or <a  href="javascript:showsignup();" title="<?//php echo $this->Lang['SIGN_UP']; ?>"><?//php echo $this->Lang['SIGN_UP']; ?></a>-->
                                                               <p  class="f_size_small">Welcome visitor you can | <a id="" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart">Sell on Zmart</a>
                                                               
                                                                    | <a class="myaccount" style="cursor:pointer;" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>"><img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/f_connect.png" alt="f_connect"/></a>
                                                                </p>
							               
                                                                                                                         
                                                         <?php  } ?>	
                                                        </div>
							<nav class="col-lg-4 col-md-4 col-sm-6 t_align_c t_xs_align_c">
								<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                                                                     <?php  if($this->session->get('user_auto_key')) { ?>
                                                                     <li  class="default_t_color"> <a href="<?php echo PATH; ?>storecredits-products.html"> <?php echo $this->Lang["STR_CRDS"]; ?></a></li>
                                                                        <?php } ?>
                                                                     <?php if ($this->session->get('UserID')) { ?>
                                                                     <li class="default_t_color"><span style="color:#000000;"><?php echo $this->Lang['WELCOME']; ?> </span> <a class="myaccount" href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><b class="wel_usr"><?php echo $this->session->get('UserName');  if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?></b></a></li>                                                                
                                                                    
									<li><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>" class="default_t_color"><?php echo $this->Lang['MY_ACC']; ?></a></li>
									 <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
                                                                        
                                                                        <li>
                                                                            <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?>
                                                                            <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>" class="default_t_color"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>
									<li> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li>
                                                                        
                                                                      <?php  }?>
<!--                                                                      <li><a href="orders_list.html" class="default_t_color">Orders List</a></li>-->
									<li><a href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?></a></li>
									<li><a href="<?php echo PATH; ?>logout.html" title="<?php echo $this->Lang['LOGOUT']; ?>" class="default_t_color"><?php echo $this->Lang['LOGOUT']; ?></a></li>
								<?php }  else { ?>
                                                                        <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
                                                                
                                                                <li> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?><a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>
									<li><?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li>
								
                                                                
                                                                 <?php } ?>
                                                                 <?php } ?>
                                                                </ul>
							</nav>
							<div class="col-lg-4 col-md-4 col-sm-3 t_align_r t_xs_align_c">
								<ul class="horizontal_list clearfix d_inline_b t_align_l f_size_small site_settings type_2">
									<li class="container3d relative">
                                                                             <?php if ($this->session->get('UserID')) { ?>
                                                                             <a id="" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart">Sell on Zmart</a>
                                                                             <?php } ?>
<!--										<a role="button" href="<?php //echo PATH ?>refer-friends.html" title="<?php //echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>" class="color_dark" id="lang_button"><img class="d_inline_middle m_right_10" alt="">Refer Friends. Get N 2000*</a>-->
<!--										<ul class="dropdown_list type_2 top_arrow color_light">
											<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_en.jpg" alt="">English</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_fr.jpg" alt="">French</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_g.jpg" alt="">German</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_i.jpg" alt="">Italian</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><img class="d_inline_middle" src="images/flag_s.jpg" alt="">Spanish</a></li>
										</ul>-->
									</li>
									<li class="m_left_20 relative container3d">
										<a role="button" href="javascript:load_club();" title="Enjoy amazing discounts with offers from Zenith Bank"  class="color_dark" id="currency_button"><span class="scheme_color"></span>Zenith Offer</a>
<!--										<ul class="dropdown_list type_2 top_arrow color_light">
											<li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">$</span> US Dollar</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#8364;</span> Euro</a></li>
											<li><a href="#" class="tr_delay_hover color_light"><span class="scheme_color">&#163;</span> Pound</a></li>
										</ul>-->
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!--header bottom part-->
				<section class="h_bot_part container">
					<div class="clearfix row">
						<?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
						<div class="col-lg-6 col-md-6 col-sm-2 t_xs_align_c" style="margin-top:-30px;">
							<a href="<?php echo PATH.$stores->store_url_title.'/';?>" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"  alt="<?php echo $this->Lang['LOGO']; ?>"  title="<?php echo $stores->store_name; ?>">
							<?php ?></a>
                                                      <div class="col-lg-3 col-md-3 col-sm-3 t_align_r t_xs_align_c m_xs_bottom_15 pull-right" style="margin-top:30px;">
									<div class="merchant_log">
                                                                             <?php if(empty($this->UserID)){?>
			<p>Customer </p>
			<ul>
                             <ul>
				<li><a  href="javascript:showlogin();" title="Customer Login">Login</a></li>
				<li>|</li>
				<li><a  href="javascript:showsignup();" title="Customer Signup">Register</a></li>
			</ul>
                            <?php  }else {?>
                        
                         <?php  } ?>
<!--			<li><a   href="<?//php echo PATH . 'merchant-signup-login.html'; ?>"Zenith Offer><?//php echo $this->Lang['MER_LOIN']; ?></a></li>
				
                           
				<li>|</li>
				<li><a  href="<?//php echo PATH . 'merchant-signup-step1.html'; ?>" title="<?//php  echo $this->Lang['MER_REGI']; ?>"><?//php echo $this->Lang['MER_REGI']; ?></a></li>
			--></ul>
		
		</div>	
								</div>
                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c m_xs_bottom_15 pull-left" style="margin-top:-35px;">
								<div class="cities " style="z-index: 2299;border:0px solid white;width:65%;padding-top:5px;z-index: 200;">
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
                                                    
						</div>
                                            
						<div class="col-lg-6 col-md-6 col-sm-8">
							<div class="row clearfix">
								<div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c m_xs_bottom_15" >
									<dl class="l_height_medium">
										<dt class="f_size_small">Call us now:</dt>
										<dd class="f_size_ex_large color_dark"><b><?php echo $stores->phone_number;?></b></dd>
									</dl>
								</div><?php } } ?>
								<div class="col-lg-6 col-md-6 col-sm-6"> 
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
    <form id="myform" class="r_corners f_size_medium full_width" action="<?php echo PATH.$this->storeurl; ?>/products.html">

<?php } ?>
									<form class="relative type_2" role="search">
                                                                            <?php $search = $this->input->get('q'); ?>
										<input type="text" class="r_corners f_size_medium full_width" name="q" onkeyup="lookup(this.value);" <?php if (isset($search) && ($search != '')) { ?> value="<?php echo $search; ?>" <?php } else { ?>  AUTOCOMPLETE="OFF" placeholder="<?php echo $srch; ?> ..." <?php } ?>  placeholder="Search">
										<button class="f_right search_button tr_all_hover f_xs_none">
<!--											<i class="fa fa-search"></i>-->
										</button>
									</form>
        <div id="suggestions" class="search_suggestions"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--main menu container-->
				<div class="container">
					<section class="menu_wrap type_2 relative clearfix t_xs_align_c m_bottom_20">
						<!--button for responsive menu-->
						<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_15">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
						</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none t_xs_align_l">	
							<ul class="horizontal_list main_menu clearfix">
								<li class="current relative f_xs_none m_xs_bottom_5" ><a href="<?php echo PATH.$stores->store_url_title.'/';?>" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
									<!--sub menu-->
									<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
										<ul class="sub_menu">
											
											</ul>
									</div>
								</li>
								<li class="relative f_xs_none m_xs_bottom_5"  style ="margin-left:-20px;" <?php if (isset($this->is_product)) echo "active"; ?>><a href="<?php echo PATH.$this->storeurl;?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>" class="tr_delay_hover color_light tt_uppercase"><b><?php echo $this->Lang['PRODUCTS']; ?></b></a>
									<!--sub menu-->
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
									<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                                                            <?php if($this->categeory_list_product){  
					foreach ($this->categeory_list_product as $d) {
						$check_sub_cat = $d->product_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
										<div class="f_left f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php echo ucfirst($d->category_name); ?></b>
											<ul class="sub_menu first">
                                                                                            <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a class="color_dark tr_delay_hover" href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>"  title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                <li ><a class="color_dark tr_delay_hover" href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'products', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									
                                                                                                <?php break;}
									}
									
									}
									}?>
											</ul>
										</div>
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Accessories</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Bags and Purces</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Belts</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Scarves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Gloves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Jewellery</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sunglasses</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Hair Accessories</a></li>
											</ul>
										</div>-->
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Short Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sleeveless</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tanks</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tunics</a></li>
											</ul>
										</div>-->

										
                                                                                <?php }}}?>
<?php //if(file_exists(DOCROOT.'images/category/icon/'.$d->category_url.'.png')){ ?>
<img alt="" class="d_sm_none f_right m_bottom_10" src="<?php //echo PATH.'images/category/icon/'.$d->category_url.'.png'; ?>"/><?php //}?>
									</div>
								</li>
									<li class="relative f_xs_none m_xs_bottom_5"  style ="margin-left:-20px;" <?php if (isset($this->is_todaydeals)) echo "active"; ?>><a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>" class="tr_delay_hover color_light tt_uppercase"><b> <?php echo $this->Lang['DEALS']; ?></b></a>
									<!--sub menu-->
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
									<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                                                            <?php if($this->categeory_list_deal){  
					foreach ($this->categeory_list_deal as $d) {
						$check_sub_cat = $d->deal_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
										<div class="f_left f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php echo ucfirst($d->category_name); ?></b>
											<ul class="sub_menu first">
                                                                                            <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a class="color_dark tr_delay_hover" href="<?php echo PATH.$this->storeurl.'/deal/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                <li ><a class="color_dark tr_delay_hover" href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'products', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									
                                                                                                <?php break;}
									}
									
									}
									}?>
											</ul>
										</div>
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Accessories</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Bags and Purces</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Belts</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Scarves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Gloves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Jewellery</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sunglasses</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Hair Accessories</a></li>
											</ul>
										</div>-->
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Short Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sleeveless</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tanks</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tunics</a></li>
											</ul>
										</div>-->

										
                                                                                <?php }}}?>
<?php //if(file_exists(DOCROOT.'images/category/icon/'.$d->category_url.'.png')){ ?>
<img alt="" class="d_sm_none f_right m_bottom_10" src="<?php //echo PATH.'images/category/icon/'.$d->category_url.'.png'; ?>"/><?php //}?>
									</div>
								</li>
								<li <?php if (isset($this->is_auction)) echo "active"; ?> class="relative f_xs_none m_xs_bottom_5"  style ="margin-left:-20px;" <?php if (isset($this->is_todaydeals)) echo "active"; ?>><a href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>" class="tr_delay_hover color_light tt_uppercase"><b> <?php echo $this->Lang['AUCTION']; ?></b></a>
								 
                                                                    <!--sub menu-->
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
									<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
                                                                            <?php if($this->categeory_list_auction){  
					foreach ($this->categeory_list_auction as $d) {
						$check_sub_cat = $d->auction_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
										<div class="f_left f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php echo ucfirst($d->category_name); ?></b>
											<ul class="sub_menu first">
                                                                                            <?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a class="color_dark tr_delay_hover" href="<?php echo PATH.$this->storeurl.'/auction/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li>
												<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
                                                                                                <li ><a class="color_dark tr_delay_hover" href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'products', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									
                                                                                                <?php break;}
									}
									
									}
									}?>
											</ul>
										</div>
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Accessories</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Bags and Purces</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Belts</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Scarves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Gloves</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Jewellery</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sunglasses</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Hair Accessories</a></li>
											</ul>
										</div>-->
<!--										<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
											<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">Tops</b>
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="#">Evening Tops</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Long Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Short Sleeved</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Sleeveless</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tanks</a></li>
												<li><a class="color_dark tr_delay_hover" href="#">Tunics</a></li>
											</ul>
										</div>-->

										
                                                                                <?php }}}?>
<?php //if(file_exists(DOCROOT.'images/category/icon/'.$d->category_url.'.png')){ ?>
<img alt="" class="d_sm_none f_right m_bottom_10" src="<?php //echo PATH.'images/category/icon/'.$d->category_url.'.png'; ?>"/><?php //}?>
									</div>
								</li>
								<li accesskey="<?php
		        if (isset($this->is_soldout)) {
			        echo "class='active'";
		        }
		        ?>
                                                                     class="relative f_xs_none m_xs_bottom_5" style ="margin-left:-20px;"><a href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>" class="tr_delay_hover color_light tt_uppercase"><b><?php echo $this->Lang['SOLD_OUT2']; ?> </b></a>
									<!--sub menu-->
									
								</li>
								<li  <?php
		        if (isset($this->is_store)) {
			        echo "class=''";
		        }?>
                                                                    class="relative f_xs_none m_xs_bottom_5" style ="margin-left:-20px;"><a <a href="<?php echo PATH; ?>stores.html" class="tr_delay_hover color_light tt_uppercase" title="<?php echo $this->Lang['STORES']; ?>"><b> <?php echo $this->Lang['STORES']; ?></b></a> 
									<!--sub menu-->
									
								</li>
                                                                <li  <?php
		        if (isset($this->is_map)) {
			        echo "class='active'";
		        }
		        ?>
                                                                    class="relative f_xs_none m_xs_bottom_5" style ="margin-left:-20px;"><a  href="<?php echo PATH; ?>near-map.html" title="<?php echo $this->Lang['NEAR_MAP']; ?>" class="tr_delay_hover color_light tt_uppercase"><b> <?php echo $this->Lang['NEAR_MAP']; ?></b></a></li>
							
								</ul>
						</nav>
						<ul class="f_right horizontal_list clearfix t_align_l t_xs_align_c site_settings d_xs_inline_b f_xs_none">
							<!--like-->
							<li class="d_sm_none d_xs_block">
                                                            
<!--								<a role="button" href="<?php echo PATH;?>wishlist.html" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c"><span style="color:white;" id="id_sasa_wish"><?php //echo count($this->total_comp_count);   ?><?php echo($comp_list); ?></span></span></a>
						-->
                                                        </li>
							<li class="m_left_5 d_sm_none d_xs_block">
<!--								<a role="button" href="#" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-files-o f_size_ex_large"></i><span class="count circle t_align_c">0</span></a>
							--></li>
							<!--shopping cart-->
                                                        <?php 
					$item_count_session = $this->session->get('count');
					$item_count = ($item_count_session == '')? 0: $item_count_session;
					
					if($item_count == 0){ ?>
							<li class="m_left_5 relative container3d" id="shopping_button">
                                                            
								<a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
									<span class="d_inline_middle shop_icon">
										<i class="fa fa-shopping-cart"></i>
										<span class="count tr_delay_hover type_2 circle t_align_c"><?php echo $item_count; ?></span>
									</span>
									<b><?php echo $item_count; ?> item(s)</span> - <?php echo CURRENCY_SYMBOL;?></b>
								</a>
								<div class="shopping_cart top_arrow tr_all_hover r_corners">
									<div class="f_size_medium sc_header">Recently added item(s)</div>
									<ul class="products_list">
                                                                            
										<li>
                                                                                     <li class="dropdown hover carticon "> <a href="#" class="dropdown-toggle" title="cart items" > Shopping Cart <span class="label label-orange font14"><?php echo $item_count; ?> item(s)</span> - <?php echo CURRENCY_SYMBOL;?> <i  id="id_total_cart_value"> 00.00</i> <b class="caret"></b></a>
              
											<div class="clearfix">
												<!--product image-->
                                                                                                
<!--												<img class="f_left m_right_10" src="images/shopping_c_img_1.jpg" alt="">
												product description-->
												<div class="f_left product_description">
<!--													<a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
													<span class="f_size_medium">Product Code PS34</span>-->
												</div>
												<!--product price-->
												<div class="f_left f_size_medium">
<!--													<div class="clearfix">
														1 x <b class="color_dark">$99.00</b>
													</div>
													<button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
												</div>-->
											</div>
										</li>
										
										
									</ul>
									<!--total price-->
									<ul class="total_price bg_light_color_1 t_align_r color_dark">
<!--										<li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$0.00</span></li>
										<li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>
										<li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">$999.00</b></li>
									--></ul>
									<div class="sc_footer t_align_c">
<!--										<a href="#" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
										<a href="#" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
									--></div>
								</div>
							</li>
                                                        <?php }else { ?> 
                                                        <?php
					
					$total_cost = 0;
					$this->total_cart_value  = 0;
					$this->payment_products = new Payment_Product_Model();
			   ?>
                                                        <li class="m_left_5 relative container3d" id="shopping_button">
                         
								<a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
									<span class="d_inline_middle shop_icon">
										<i class="fa fa-shopping-cart"></i>
										<span class="count tr_delay_hover type_2 circle t_align_c"><?php echo $item_count ; ?></span>
									</span>
									<b><?php echo $item_count; ?> item(s)</span> - <?php echo CURRENCY_SYMBOL;?></b>
								</a>
                                                                                         
								<div class="shopping_cart top_arrow tr_all_hover r_corners">
									<div class="f_size_medium sc_header">Recently added item(s)</div>
									<ul class="products_list">
                                                                            
										<li>
											
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
                                                        
                                                                                    
                                                                                    <div class="clearfix">
												<!--product image-->
<!--												<img class="f_left m_right_10" src="images/shopping_c_img_1.jpg" alt="">-->
                                                                                                <a href="#" title="<?php echo $cart_item->deal_title; ?>"><!--<img title="<?php echo $cart_item->deal_title; ?>" alt="<?php echo $cart_item->deal_title; ?>" width="50" height="50" src="<?php //echo $this->img_assets_base_url?>/prodcut-40x40.jpg"  />-->
                                            		  <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $cart_item->deal_key . '_1' . '.png')) { ?>
													<img class="f_left m_right_10" width="50" src="<?php echo PATH . 'images/products/1000_800/' . $cart_item->deal_key . '_1' . '.png'; ?>"/>
													   <?php } else { ?>
													   <img class="f_left m_right_10" width="50" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png"/>
													   <?php } ?>
                                            </a>
												<!--product description-->
												<div class="f_left product_description">
													<a href="#"  class="color_dark m_bottom_5 d_block" title="<?php echo $cart_item->deal_title; ?>"><?php echo $cart_item->deal_title, 25;?></a>
<!--													<span class="f_size_medium">Product Code PS34</span>-->
												</div>
												<!--product price-->
												<div class="f_left f_size_medium">
													<div class="clearfix">
														&nbsp; 1 x <b class="color_dark"><?php echo  CURRENCY_SYMBOL. " " . number_format($cart_item->deal_value); ?></b>
													</div>
<!--													<button onclick="leo_remove_cart_item(<?php //echo $cart_item->deal_id;?>);" href="#" title="remove from cart" class="close_product color_dark tr_hover" ><i class="fa fa-times" ></i></button>
												-->
                                                                                                </div>
											</div>
                                                                                    
                                                                                    <?php } ?>
			<?php } ?>
										</li>
										
										
									</ul>
									<!--total price-->
									<ul class="total_price bg_light_color_1 t_align_r color_dark">
<!--										<li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$0.00</span></li>
										<li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>-->
										<li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15"><?php echo CURRENCY_SYMBOL." ".number_format($cart_item->deal_value); ?></b></li>
									</ul>
									<div class="sc_footer t_align_c">
										<a  role="button" href="<?php echo PATH;?>cart.html" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
										<a  role="button" href="<?php echo PATH;?>cart.html" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
									</div>
								</div>
							</li>
                                                           <?php } ?>
                  			
                                                </ul>
				</div>
			</header>
<div class='popup_block'><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1'><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2'><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>

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
