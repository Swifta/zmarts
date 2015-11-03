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
        
        .product .mediaholder img{
            width:<?php echo PRODUCT_LIST_WIDTH; ?>px;
            height: <?php echo PRODUCT_LIST_HEIGHT; ?>px;
        }
</style>
<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>



<!--boxed layout-->
<div class="wide_layout relative w_xs_auto"> <!--this div closed at the footer-->
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
                                <div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
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
                                <div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
							<?php if ($this->session->get('UserID')) { ?>                                                          
		        <?php  if($this->session->get('user_auto_key')) { ?>
                                    <p> <b><a style="color:red" href="<?php echo PATH; ?>storecredits-products.html"> <?php echo $this->Lang["STR_CRDS"]; ?></a></b></p>
                                                        <?php } }?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
                                        <ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
                        <li><a href="<?php echo PATH;?>">Home</a></li>
							<?php if ($this->session->get('UserID')) { ?>
								<li> &nbsp;&nbsp;<strong><?php echo $this->Lang['WELCOME']; ?> </strong> <a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName');  if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><b class="wel_usr"><?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?></b></a></li>	
								<li><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><?php echo $this->Lang['MY_ACC']; ?></a> </li>

						<?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
								<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare) > 1 ){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

								<li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li>

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
																
								<li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li>
								
							<?php } ?>
                            
	<li><a id="login" href="javascript:showlogin();" title="<?php echo $this->Lang['LOGIN']; ?>"><?php echo $this->Lang['LOGIN']; ?></a></li>

	
	<li><a href="javascript:showsignup();" title="<?php echo $this->Lang['SIGN_UP']; ?>"><?php echo $this->Lang['SIGN_UP']; ?></a> </li>
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
        <div class="menu_wrap">
                        <div class="container">
                                <div class="clearfix row">
        <div class="col-sm-2 t_md_align_c m_md_bottom_0">
<?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
<a class="logo d_md_inline_b" href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
<img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
<?php } } ?>
        </div>
    <div class="col-sm-10 clearfix t_sm_align_c">
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

        <?php if ($this->blog_setting) { ?>
        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0">
	        <a class="tr_delay_hover color_dark tt_uppercase r_corners" href="<?php echo PATH; ?>blog" title="<?php echo $this->Lang['BLOG']; ?>">
                    <b><?php echo $this->Lang['BLOG']; ?></b>
	        </a>
        </li>
        <?php } ?>
        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="#" class="tr_delay_hover color_dark tt_uppercase r_corners"><b><?php echo $this->Lang['MERCHANT_ACC']; ?></b></a>
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
                    <!--search form-->
                    <div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">
                            <div class="container vc_child h_inherit relative w_inherit">
                                    <form role="search" class="d_inline_middle full_width">
                                            <input type="text" name="search" placeholder="Type text and hit enter" class="f_size_large p_hr_0">
                                    </form>
                                    <button class="close_search_form tr_all_hover d_xs_none color_dark">
                                            <i class="fa fa-times"></i>
                                    </button>
                            </div>
                    </div>
            </div>
            <ul class="f_right horizontal_list d_sm_inline_b f_sm_none clearfix t_align_l site_settings">
                    <!--shopping cart-->
                    <li class="m_left_5 relative container3d" id="shopping_button">
                            <a role="button" href="#" class="button_type_3 color_light bg_scheme_color d_block r_corners tr_delay_hover box_s_none">
                                    <span class="d_inline_middle shop_icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="count tr_delay_hover type_2 circle t_align_c">3</span>
                                    </span>
                                    <b>$355</b>
                            </a>
                            <div class="shopping_cart top_arrow tr_all_hover r_corners">
                                    <div class="f_size_medium sc_header">Recently added item(s)</div>
                                    <ul class="products_list">
                                            <li>
                                                    <div class="clearfix">
                                                            <!--product image-->
                                                            <img class="f_left m_right_10" src="images/shopping_c_img_1.jpg" alt="">
                                                            <!--product description-->
                                                            <div class="f_left product_description">
                                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                                    <span class="f_size_medium">Product Code PS34</span>
                                                            </div>
                                                            <!--product price-->
                                                            <div class="f_left f_size_medium">
                                                                    <div class="clearfix">
                                                                            1 x <b class="color_dark">$99.00</b>
                                                                    </div>
                                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                            </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="clearfix">
                                                            <!--product image-->
                                                            <img class="f_left m_right_10" src="images/shopping_c_img_2.jpg" alt="">
                                                            <!--product description-->
                                                            <div class="f_left product_description">
                                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                                    <span class="f_size_medium">Product Code PS34</span>
                                                            </div>
                                                            <!--product price-->
                                                            <div class="f_left f_size_medium">
                                                                    <div class="clearfix">
                                                                            1 x <b class="color_dark">$99.00</b>
                                                                    </div>
                                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                            </div>
                                                    </div>
                                            </li>
                                            <li>
                                                    <div class="clearfix">
                                                            <!--product image-->
                                                            <img class="f_left m_right_10" src="images/shopping_c_img_3.jpg" alt="">
                                                            <!--product description-->
                                                            <div class="f_left product_description">
                                                                    <a href="#" class="color_dark m_bottom_5 d_block">Cursus eleifend elit aenean auctor wisi et urna</a>
                                                                    <span class="f_size_medium">Product Code PS34</span>
                                                            </div>
                                                            <!--product price-->
                                                            <div class="f_left f_size_medium">
                                                                    <div class="clearfix">
                                                                            1 x <b class="color_dark">$99.00</b>
                                                                    </div>
                                                                    <button class="close_product color_dark tr_hover"><i class="fa fa-times"></i></button>
                                                            </div>
                                                    </div>
                                            </li>
                                    </ul>
                                    <!--total price-->
                                    <ul class="total_price bg_light_color_1 t_align_r color_dark">
                                            <li class="m_bottom_10">Tax: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$0.00</span></li>
                                            <li class="m_bottom_10">Discount: <span class="f_size_large sc_price t_align_l d_inline_b m_left_15">$37.00</span></li>
                                            <li>Total: <b class="f_size_large bold scheme_color sc_price t_align_l d_inline_b m_left_15">$999.00</b></li>
                                    </ul>
                                    <div class="sc_footer t_align_c">
                                            <a href="#" role="button" class="button_type_4 d_inline_middle bg_light_color_2 r_corners color_dark t_align_c tr_all_hover m_mxs_bottom_5">View Cart</a>
                                            <a href="#" role="button" class="button_type_4 bg_scheme_color d_inline_middle r_corners tr_all_hover color_light">Checkout</a>
                                    </div>
                            </div>
                    </li>
            </ul>
    </div>
                                </div>
                        </div>
                        <hr class="divider_type_6">
                </div>
        </section>
</header>
<!--slider-->
<section class="revolution_slider">
        <div class="r_slider">
                <ul>
                        <li class="f_left" data-transition="curtain-1" data-slotamount="7" data-custom-thumb="images/slide_02.jpg">
                                <img src="images/fw_slide_03.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
                                <div class="caption sfl str f_size_large color_light tt_uppercase slider_title_3" data-x="736" data-y="97" data-speed="500" data-start="2500">Meet New Theme</div>
                                <div class="caption sfr stl slider_divider" data-x="787" data-y="129" data-speed="500" data-start="2500"></div>
                                <div class="caption lft stb color_light slider_title tt_uppercase t_align_c" data-x="588" data-y="140" data-speed="1500" data-easing="easeOutBounce"><b>Attractive &amp; Elegant<br>HTML Theme</b></div>
                                <div class="caption sft stb color_light slider_title_2" data-x="761" data-y="272" data-speed="900" data-start="2300">$<b>15.00</b></div>
                                <div class="caption sft stb color_light" data-x="742" data-y="335" data-speed="900" data-start="2600">
                                        <a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Buy Now</a>
                                </div>
                        </li>
                        <li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="images/slide_01.jpg">
                                <img src="images/fw_slide_02.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
                                <div class="caption lft ltb f_size_large tt_uppercase slider_title_3 scheme_color" data-x="264" data-y="126" data-speed="300" data-start="1700">New arrivals</div>
                                <div class="caption sfb stt slider_divider type_2" data-x="298" data-y="153" data-speed="400" data-start="1700"></div>
                                <div class="caption lft ltb color_light slider_title tt_uppercase t_align_c" data-x="95" data-y="170" data-speed="500" data-easing="ease" data-start="1400"><b><span class="scheme_color">Spring/Summer 2014</span><br><span class="color_dark">Ready-To-Wear</span></b></div>
                                <div class="caption lfb ltt color_light" data-x="206" data-y="318" data-speed="500" data-start="1700">
                                        <a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">View Collection</a>
                                </div>
                        </li>
                        <li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="images/slide_03.jpg">
                                <img src="images/fw_slide_01.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
                                <div class="caption lft ltt" data-x="center" data-y="58" data-speed="1500" data-start="1200" data-easing="easeOutBounce">
                                        <img src="images/slider_layer_img.png" alt="">
                                </div>
                                <div class="caption sfb stb color_light slider_title tt_uppercase t_align_c" data-x="center" data-y="246" data-speed="1000" data-easing="ease" data-start="2500"><b class="color_dark">up to 70% off</b></div>
                                <div class="caption sfb stb color_light" data-x="center" data-y="352" data-speed="1000" data-start="2900">
                                        <a href="#" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">Shop Now</a>
                                </div>
                        </li>
                </ul>
        </div>
</section>