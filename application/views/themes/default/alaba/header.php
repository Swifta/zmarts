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

<style>
        .buy_it{
            background:#474747;
        }
        .buy_it:hover{
            background:#cc2828;
        }
        
        .pp_wrap img{
            width: 242px;
            height: 242px;
        }
</style>
<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>



<!--boxed layout-->
<div class="wide_layout relative"> <!--this div closed at the footer-->
<!--[if (lt IE 9) | IE 9]>
        <div style="background:#fff;padding:8px 0 10px;">
        <div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
<![endif]-->
<!--markup header-->
<header role="banner" class="type_5">
        <!--header top part-->
        <section class="h_top_part">
                <div class="container">
                        <div class="row clearfix">
                                <div class="col-lg-3 col-md-3 col-sm-3 t_xs_align_c">
                                        <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
         <?php if(isset($this->merchant_cms)){if(count($this->merchant_cms)>0) {  if(($this->merchant_cms->current()->warranty_status ==1) || ($this->merchant_cms->current()->return_policy_status ==1) || ($this->merchant_cms->current()->terms_conditions_status ==1)) { ?>
                        <?php if($this->merchant_cms->current()->warranty_status ==1) { ?>
                        <li><a class="default_t_color" href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/warranty.html'; ?>"><?php echo $this->Lang["WARRANTY"]; ?></a></li>

                        <?php } ?>
                         <?php if($this->merchant_cms->current()->return_policy_status ==1) { ?>
                        <li><a class="default_t_color" href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/return_policy.html'; ?>" title=" <?php echo $this->Lang["RET_POLICY"]; ?>"> <?php echo $this->Lang["RET_POLICY"]; ?></a></li>

                        <?php } ?>
                         <?php if($this->merchant_cms->current()->terms_conditions_status ==1) { ?>
                        <li><a class="default_t_color" href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/shipping.html'; ?>" title="<?php echo $this->Lang["SHIP_ING"]; ?>"><?php echo $this->Lang["SHIP_ING"]; ?></a></li>
      
                        <?php } ?>                                          
            <?php } }} ?>
                            <li>
        <a href="<?php echo PATH ?>refer-friends.html" title="<?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>">
                    <?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?></a>
                            </li>
                                        </ul>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 t_align_c t_xs_align_c">
							<?php if ($this->session->get('UserID')) { ?>                                                          
		        <?php  if($this->session->get('user_auto_key')) { ?>
                                    <p> <b><a style="color:red" href="<?php echo PATH; ?>storecredits-products.html"> <?php echo $this->Lang["STR_CRDS"]; ?></a></b></p>
                                                        <?php } }?>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 t_align_r t_xs_align_c">
                                        <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                        <li><a href="<?php echo PATH;?>">Home</a></li>
							<?php if ($this->session->get('UserID')) { ?>
								<li> &nbsp;&nbsp;<strong><?php echo $this->Lang['WELCOME']; ?> </strong> <a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName');  if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><b class="wel_usr"><?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?></b></a></li>	
								<li><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><?php echo $this->Lang['MY_ACC']; ?></a> </li>

						<?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
								<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare) > 1 ){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

								<li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>></li>

						<?php } ?>
						                <li><a href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?></a> </li>
   		<!-- 
    		Adding Zenith Offer Label to the header.
    		@Live
   		-->
	<li ><a id="leo_id" href="javascript:load_club();" title="<?php echo $this->Lang['ZENITH_OFFER']; ?>"><?php echo $this->Lang['ZENITH_OFFER']; ?></a></li>
	
                                                                <li><a href="<?php if($this->session->get("count") > 0){ echo 'javascript:logout_click();'; }else{ echo PATH."logout.html"; } ?>" title="<?php echo $this->Lang['LOGOUT']; ?>"><?php echo $this->Lang['LOGOUT']; ?></a> </li>
							<?php } else { ?>
							<?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
								<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare) > 1){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>
																
								<li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>></li>
								
							<?php } ?>
                            
<!--	<li><a id="login" href="javascript:showlogin();" title="<?//php echo $this->Lang['LOGIN']; ?>"><?//php echo $this->Lang['LOGIN']; ?></a></li>-->

	 <li><a id="" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="Sell on Zmart">Sell on Zmart</a></li>
<!--	<li><a href="javascript:showsignup();" title="<?//php echo $this->Lang['SIGN_UP']; ?>"><?//php echo $this->Lang['SIGN_UP']; ?></a> </li>-->
    <!-- 
    	Adding Zenith Offer Label to the header.
    	@Live
    -->

	<li style="color:green;font-weight: bold;"><a href="javascript:load_club();" title="<?php echo $this->Lang['ZENITH_OFFER']; ?>"><?php echo $this->Lang['ZENITH_OFFER']; ?></a></li>
								<!--<li><a href="javascript:showsignup();" title="<?php echo $this->Lang['SIGN_UP']; ?>"><?php echo $this->Lang['SIGN_UP']; ?></a> </li>-->
								<li><a  style="cursor:pointer;" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>"><img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/f_connect.png" alt="f_connect"/></a></li>
							<?php } ?>
                                        </ul>
                                </div>
                        </div>
                </div>
        </section>
        <!--header bottom part-->
        <section class="h_bot_part">
        <div class="menu_wrap" style="padding: 0px;" >
                        <div class="container">
                                <div class="clearfix row m_top_0 m_bottom_0">
        <div class="col-sm-2 t_md_align_c m_top_0 m_bottom_0 m_md_bottom_0" style="padding-top: 6px;">
<?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
<a class="logo d_md_inline_b" href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
<?php } } ?>
        </div>
    <div class="col-sm-10 clearfix t_sm_align_c" style="padding-top:20px;">
            <div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">
                    <!--button for responsive menu-->
                    <button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5">
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                            <span class="centered_db r_corners"></span>
                    </button>
                    <!--main menu-->
                    <nav role="navigation" class="f_left f_xs_none d_xs_none m_right_5 m_md_right_0 m_sm_right_0">	
                            <ul class="horizontal_list main_menu type_2 clearfix">
<?php if(isset($this->is_home)||isset($this->is_product)||isset($this->is_todaydeals)||isset($this->is_auction)){ ?>
<?php if(isset($this->is_details)){ ?>

<?php } else { ?>


<?php } } else { ?>

<?php } ?>
                                    <li class="<?php
            if (isset($this->is_home)) {
                    echo "current";
            }
            ?> relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="<?php echo PATH.$this->storeurl; ?>" 
                                         title="<?php echo $this->Lang['HOME']; ?>" class="tr_delay_hover color_dark tt_uppercase r_corners">
                                            <b><?php echo $this->Lang['HOME']; ?></b></a>
                                    </li>
                                    
                                    
        <?php if ($this->product_setting) { ?>

<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
    <a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>" 
       class="tr_delay_hover color_dark tt_uppercase r_corners"><b><?php echo $this->Lang['PRODUCTS']; ?></b></a>
    <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
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
        <?php if($this->categeory_list_product){  
            $first = true;
            foreach ($this->categeory_list_product as $d) {
                $check_sub_cat = $d->product_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
                    <div class="f_left f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php 
                if(strlen($d->category_name) > 16){
                    echo substr(ucfirst($d->category_name), 0, 16);
                }
                else{
                    echo ucfirst($d->category_name);
                }
                ?></b>
                        <ul class="sub_menu <?php if($first){echo "first";$first=false;} ?>">
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                            <li><a href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" 
                                   title="<?php echo ucfirst($sub_cate->category_name);?>"><?php
                if(strlen($sub_cate->category_name) > 14){
                    echo substr(ucfirst($sub_cate->category_name), 0, 14)."..";
                }
                else{
                    echo ucfirst($sub_cate->category_name);
                }                                   
                                   //echo ucfirst($sub_cate->category_name);
                                   ?></a></li>
                            <?php 
                                    }
                                }

                            }
                        ?>
                        </ul>
                    </div>
                        <?php
                        }?>

        <?php }} ?>
    </div>
         </li>
        <?php 
        } 
        ?>                                    

         
        <?php if ($this->deal_setting) { ?>

        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
    <a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>" 
       class="tr_delay_hover color_dark tt_uppercase r_corners"><b><?php echo $this->Lang['DEALS']; ?></b></a>
    <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
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
        
        <?php if($this->categeory_list_deal){
            $first = true;
            foreach ($this->categeory_list_deal as $d) {
                $check_sub_cat = $d->deal_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
                    <div class="f_left f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php 
                if(strlen($d->category_name) > 16){
                    echo substr(ucfirst($d->category_name), 0, 16);
                }
                else{
                    echo ucfirst($d->category_name);
                }
                ?>
                </b>
                   <ul class="sub_menu <?php if($first){echo "first";$first=false;} ?>">
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                       <li><a href="<?php echo PATH.$this->storeurl.'/deal/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php 
                       echo ucfirst($sub_cate->category_name);?>"><?php 
                if(strlen($sub_cate->category_name) > 14){
                    echo substr(ucfirst($sub_cate->category_name), 0, 14)."..";
                }
                else{
                    echo ucfirst($sub_cate->category_name);
                } 
                       //echo ucfirst($sub_cate->category_name);
                 ?></a></li>
                            <?php 
                                    }
                                }

                            }
                        ?>
                        </ul>
                    </div>
                        <?php
                        }?>

        <?php }} ?>
    </div>
         </li>
        <?php 
        }
        ?>
         
 
        <?php if ($this->auction_setting) { ?>
        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
    <a href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>" 
       class="tr_delay_hover color_dark tt_uppercase r_corners"><b><?php echo $this->Lang['AUCTION']; ?></b></a>
    <div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
        <?php $au = 0; $aut = 0; $val = "";
        foreach ($this->categeory_list_auction as $d) {
        //$check_sub_cat = common::get_subcat_count($d->category_id, 4, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
        $check_sub_cat = $d->auction_count;
        $val .= $check_sub_cat.","; 
        if($check_sub_cat != 0){
        $aut = $au + 1;
        $au ++;
        } }
        $arr_auction = explode(",", substr($val,0,-1));
        ?>
        
        <?php if($this->categeory_list_auction){  
            $first = true;
            foreach ($this->categeory_list_auction as $d) {
                $check_sub_cat = $d->auction_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
                    <div class="f_left f_xs_none">
                <b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b">
                <?php 
                if(strlen($d->category_name) > 16){
                    echo substr(ucfirst($d->category_name), 0, 16);
                }
                else{
                    echo ucfirst($d->category_name);
                }
                ?>
                </b>
                        <ul class="sub_menu <?php if($first){echo "first";$first=false;} ?>">
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                            <li><a href="<?php echo PATH.$this->storeurl.'/auction/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php 
                            echo ucfirst($sub_cate->category_name);?>"><?php 
                if(strlen($sub_cate->category_name) > 14){
                    echo substr(ucfirst($sub_cate->category_name), 0, 14)."..";
                }
                else{
                    echo ucfirst($sub_cate->category_name);
                }
                            //echo ucfirst($sub_cate->category_name);
                           ?></a></li>
                            <?php 
                                    }
                                }

                            }
                        ?>
                        </ul>
                    </div>
                        <?php
                        }?>

        <?php }} ?>
    </div>
         </li>
        <?php 
        }
        ?>
         
        <?php if ($this->past_deal_setting) { ?>

	        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
		        <a class="tr_delay_hover color_dark tt_uppercase r_corners" href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>">
                            <b><?php echo $this->Lang['SOLD_OUT2']; ?></b>
		        </a>
	        </li>
        <?php } ?>
        <?php if ($this->store_setting) { ?>
	        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
		        <a class="tr_delay_hover color_dark tt_uppercase r_corners" href="<?php echo PATH; ?>stores.html" title="<?php echo $this->Lang['STORES']; ?>">
                            <b><?php echo $this->Lang['STORES']; ?></b>
		        </a></li>
        <?php } ?>
        <?php if (($this->deal_setting == 1 || $this->product_setting == 1 || $this->auction_setting == 1 ) && $this->map_setting) { ?>
	        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
		        <a class="tr_delay_hover color_dark tt_uppercase r_corners" href="<?php echo PATH; ?>near-map.html" title="<?php echo $this->Lang['NEAR_MAP']; ?>">
                            <b> <?php echo $this->Lang['NEAR_MAP']; ?></b>
		        </a>
	        </li>
        <?php } ?>

        <?php /*if ($this->blog_setting) { ?>
        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
	        <a class="tr_delay_hover color_dark tt_uppercase r_corners" href="<?php echo PATH; ?>blog" title="<?php echo $this->Lang['BLOG']; ?>">
                    <b><?php echo $this->Lang['BLOG']; ?></b>
	        </a>
        </li>
        <?php }*/ ?>
        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="#" 
                    title="<?php echo $this->Lang['MERCHANT_ACC']; ?>" class="tr_delay_hover color_dark tt_uppercase r_corners">
                 <i class="fa fa-user f_size_ex_large"></i>
                </a>
                <!--sub menu-->
                <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
                        <ul class="sub_menu">
                                <li><a class="color_dark tr_delay_hover" href="<?php echo PATH . 'merchant-login.html'; ?>" title="<?php  echo $this->Lang['MER_LOIN']; ?>"><?php echo $this->Lang['MER_LOIN']; ?></a></li>
                                <li><a class="color_dark tr_delay_hover" href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="<?php  echo $this->Lang['MER_REGI']; ?>"><?php echo $this->Lang['MER_REGI']; ?></a></li>
                        </ul>
                </div>
        </li>
    </ul>
</nav>
                    <button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
                            <i class="fa fa-search"></i>
                    </button>
<?php
$ajax_type = 0;
$srch = $this->Lang['SEARCH'];
?>
                    <!--search form-->
                    <div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">
                            <div class="container vc_child h_inherit relative w_inherit">
<?php
$ajax_type = 0;
$srch = $this->Lang['SEARCH'];

if (isset($this->is_product)) {
$ajax_type = 1; // userd in auto suggestion search
$srch = $this->Lang['SRCH_PRD'];
?>
<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
}else if (isset($this->is_deals)) {
$ajax_type = 2; // userd in auto suggestion search
$srch = $this->Lang['SRCH_DEAL'];
?>
<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/today-deals.html">
	<?php
} else if (isset($this->is_auction)) {
	$ajax_type = 3; // userd in auto suggestion search
	$srch = $this->Lang['SRCH_AUC'];
	?>
	<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/auction.html">
		<?php
	} elseif (isset($this->is_store_details)) {
$ajax_type = 5; // userd in auto suggestion search
$srch = $this->Lang['SRCH_STR_DET'];
?>
<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
} elseif (isset($this->is_store)) {
$ajax_type = 4; // userd in auto suggestion search
$srch = $this->Lang['SRCH_STR'];
?>
<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/products.html">
<?php
}  else {
		$srch = $this->Lang['SRCH_PRD'];
	?>
<form id="myform" role="search" class="d_inline_middle full_width" action="<?php echo PATH.$this->storeurl; ?>/products.html">

<?php } ?>  
<div class="row">
    <div class="cities" style="z-index: 999;float: left;" class="col-sm-6">
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
<?php $search = $this->input->get('q'); ?>
    <div class="col-sm-6">
<input type="text" name="search" name="q" onkeyup="lookup(this.value);" <?php if (isset($search) && ($search != '')) { ?> value="<?php echo $search; ?>" <?php } else { ?>
           AUTOCOMPLETE="OFF" placeholder="<?php echo $srch; ?> ..." <?php } ?> class="f_size_large p_hr_0">
    </div></div>
                                    </form>
                                    <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                            <i class="fa fa-times"></i>
                                    </button>
                            </div>
                    </div>
            </div>
<?php if ($this->product_setting) { ?>
            <ul class="f_right horizontal_list d_sm_inline_b f_sm_none clearfix t_align_l site_settings">
                    <!--shopping cart-->
                    <li class="m_left_5 relative container3d" id="shopping_button">
                            <a role="button" href="<?php echo PATH; ?>cart.html"title="<?php echo $this->Lang['CART']; ?>(<?php
	        if ($this->session->get('count') != '') {
		        echo $this->session->get('count');
	        } else {
		        echo '0';
	        }
                ?>)" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                    <span class="d_inline_middle shop_icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="count tr_delay_hover type_2 circle t_align_c">
                           <?php
                                if ($this->session->get('count') != "") {
                                        echo $this->session->get('count');
                                } else {
                                        echo "0";
                                }
		           ?>
                                            </span>
                                    </span>
                                    <b></b>
                            </a>
                    </li>
            </ul>
<?php } ?>
    </div>
                                </div>
                        </div>
                        <hr class="divider_type_6">
                </div>
        </section>
</header>





<div class='popup_block'><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1'><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2'><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>
<div class='popup_block3_0'><?php echo new View("themes/" . THEME_NAME . '/users/zenith_verify_account_popup'); ?></div>
<div class='popup_block3_1'><?php echo new View("themes/" . THEME_NAME . '/users/zenith_open_account_popup'); ?></div>
<div class='popup_block4'><?php echo new View("themes/" . THEME_NAME . '/users/fb_popup'); ?></div>

<link rel="stylesheet" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/sweetalert.css" type="text/css" /> 
<script src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/sweetalert.min.js"></script>
<script>
function logout_click(){
    //alert("here");
    //<?php echo PATH; ?>logout.html
    swal({   
        title: "Are you sure?",   
        text: "Your Shopping Cart is not empty. It Will be Emptied",   
        type: "warning",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Yes, Logout!",   
        cancelButtonText: "No, Proceed!",   
        closeOnConfirm: false,   
        closeOnCancel: true 
    }, function(isConfirm){   
        if (isConfirm) {     
            location.href = "<?php echo PATH; ?>logout.html"; 
        } else {     
            location.href = "<?php echo PATH; ?>"; 
        } 
    });
}
</script>
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
<script>
$("#cart_window1").mouseover(function(){

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

$("#cart_window1").mouseout(function(){
	$(".cart_window_products1").css({"display":"none"});
});


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

