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
<!--[if lt IE 9]>			
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/respond.min.js"></script>
<![endif]-->
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
<style>
        .buy_it{
            background:#3acf87;
        }
        .buy_it:hover{
            background:#606060;
        }
        
        .product .mediaholder img{
            width:<?php echo PRODUCT_LIST_WIDTH; ?>px;
            height: <?php echo PRODUCT_LIST_HEIGHT; ?>px;
        }
</style>
<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>
<!--header start-->
<!--header start-->

<div id="wrapper">

<!-- Top Bar
================================================== -->
<div id="top-bar">
	<div class="container">

		<!-- Top Bar Menu -->
		<div class="six columns">
			<ul class="top-bar-menu">
         <?php if(isset($this->merchant_cms)){if(count($this->merchant_cms)>0) {  if(($this->merchant_cms->current()->warranty_status ==1) || ($this->merchant_cms->current()->return_policy_status ==1) || ($this->merchant_cms->current()->terms_conditions_status ==1)) { ?>
                        <?php if($this->merchant_cms->current()->warranty_status ==1) { ?>
                        <li><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/warranty.html'; ?>"><?php echo $this->Lang["WARRANTY"]; ?></a></li>

                        <?php } ?>
                         <?php if($this->merchant_cms->current()->return_policy_status ==1) { ?>
                        <li><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/return_policy.html'; ?>" title=" <?php echo $this->Lang["RET_POLICY"]; ?>"> <?php echo $this->Lang["RET_POLICY"]; ?></a></li>

                        <?php } ?>
                         <?php if($this->merchant_cms->current()->terms_conditions_status ==1) { ?>
                        <li><a href="<?php echo PATH.$this->storeurl.'/merchant-cms/'.base64_encode($this->merchant_cms->current()->merchant_id).'/shipping.html'; ?>" title="<?php echo $this->Lang["SHIP_ING"]; ?>"><?php echo $this->Lang["SHIP_ING"]; ?></a></li>
      
                        <?php } ?>                                          
            <?php } }} ?>
                            <li>
        <a href="<?php echo PATH ?>refer-friends.html" title="<?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>">
                    <?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?></a>
                            </li>
        <?php  if($this->session->get('user_auto_key')) { ?>
        <li  class="store_credit"> <a href="<?php echo PATH; ?>storecredits-products.html"> <?php echo $this->Lang["STR_CRDS"]; ?></a></li>
        <?php } ?>
        
 
			</ul>
		</div>
                
		<div class="ten columns float-rt" id="merchant_login">
			<ul class="top-bar-menu text-right"  style="float:right;">
                            <li><strong><?php echo $this->Lang['MERCHANT_ACC']; ?> ::</strong></li>
                    <li><a  href="<?php echo PATH . 'merchant-login.html'; ?>" title="<?php  echo $this->Lang['MER_LOIN']; ?>"><?php echo $this->Lang['MER_LOIN']; ?></a></li>
                    <li>|</li>
                    <li><a  href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="<?php  echo $this->Lang['MER_REGI']; ?>"><?php echo $this->Lang['MER_REGI']; ?></a></li>
			</ul>
		</div>

	</div>
</div>

<div class="clearfix"></div>



<!-- Header
================================================== -->
<div class="container">


	<!-- Logo -->
	<div class="four columns">
		<div id="logo2">                 
			<h1>
            <?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
     <a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
            <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
    <?php /* <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/> */ ?></a>
      <?php } } ?>
                        </h1>
		</div>
	</div>


	<!-- Additional Menu -->
	<div class="twelve columns">
		<div id="additional-menu">
			<ul>
       <li><a href="<?php echo PATH;?>">Home</a></li>

        <?php if ($this->session->get('UserID')) { ?>
                <li class=""><span><?php echo $this->Lang['WELCOME']; ?> </span> <a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><b class="wel_usr"><?php echo $this->session->get('UserName');  if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?></b></a></li>                                                                

                <li><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><?php echo $this->Lang['MY_ACC']; ?></a> </li>


        <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>


                <?php /*<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

                <li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li> */ ?>
                <li  class="" >
                <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?>
                <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>								
                <li class=""> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li> 


        <?php } ?>
                <li><a href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?></a> </li>

                <li><a href="<?php echo PATH; ?>logout.html" title="<?php echo $this->Lang['LOGOUT']; ?>"><?php echo $this->Lang['LOGOUT']; ?></a> </li>
        <?php } else { ?>

        <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
                <?php /*<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

                <li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li> */ ?>

                <li  class="" >
                <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?>
                <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>								
                <li class=""> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li> 

        <?php } ?>

                <li><a id="login" href="javascript:showlogin();" title="<?php echo $this->Lang['LOGIN']; ?>"><?php echo $this->Lang['LOGIN']; ?></a></li>

                <li><a href="javascript:showsignup();" title="<?php echo $this->Lang['SIGN_UP']; ?>"><?php echo $this->Lang['SIGN_UP']; ?></a> </li>
                <li class="head_fb"><a style="cursor:pointer;" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>"><img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/f_connect.png" alt="f_connect"/></a></li>	
        <?php } ?>
        <?php if (FB_PAGE) { ?>
        <!-- <li><a class="faceb" href="<?php echo FB_PAGE; ?>" target="blank" title="<?php echo $this->Lang['FB']; ?>">&nbsp;</a></li>-->
        <?php }if (TWITTER_PAGE) { ?>
        <!-- <li><a class="twitt" href="<?php echo TWITTER_PAGE; ?>" target="blank" title="<?php echo $this->Lang['TW']; ?>">&nbsp;</a></li>-->
        <?php }if (LINKEDIN_PAGE) { ?>
        <!--  <li><a class="linked" href="<?php echo LINKEDIN_PAGE; ?>" target="blank" title="<?php echo $this->Lang['LINK']; ?>">&nbsp;</a></li>-->
        <?php } if ($this->city_id) { 
        }  ?>
			</ul>
		</div>
	</div>


	<!-- Shopping Cart -->
	<div class="twelve columns">
<?php if ($this->product_setting) { ?>
		<div id="cart">
			<!-- Button -->
			<div class="cart-btn">
                        <a class="button adc" href="<?php echo PATH; ?>cart.html"  title="<?php echo $this->Lang['CART']; ?>(<?php
                        if ($this->session->get('count') != '') {
                                echo $this->session->get('count');
                        } else {
                                echo '0';
                        }
                        ?>)">      
                        <span>
                           <?php
		           if ($this->session->get('count') != "") {
			           echo $this->session->get('count');
		           } else {
			           echo "0";
		           }
		           ?>
                            </span><?php echo $this->Lang['CART']; ?>(s)</a>
			</div>
                        <div class="cart_window_products1" ></div>

		</div>
<?php } ?>
            
		<!-- Search -->
		<nav class="top-search">
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
<form id="myform" action="<?php echo PATH.$this->storeurl; ?>/products.html">

<?php } ?>                    
                            
    <div class="cities" style="margin-right: 10px;z-index: 999;">
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
                            
				<button><i class="fa fa-search"></i></button>
<?php $search = $this->input->get('q'); ?>
    <input type="text" size="6" name="q" class="ssearch-field" onkeyup="lookup(this.value);" <?php if (isset($search) && ($search != '')) { ?> value="<?php echo $search; ?>" <?php } else { ?>
           AUTOCOMPLETE="OFF" placeholder="<?php echo $srch; ?> ..." <?php } ?> />
</form>
		</nav>

	</div>

</div>

<!-- Navigation
================================================== -->
<div class="container">
	<div class="sixteen columns">
		
		<a href="#menu" class="menu-trigger"><i class="fa fa-bars"></i> Menu</a>

		<nav id="navigation">
			<ul class="menu" id="responsive">
    <?php if(isset($this->is_home)||isset($this->is_product)||isset($this->is_todaydeals)||isset($this->is_auction)){ ?>
    <?php if(isset($this->is_details)){ ?>

    <?php } else { ?>


    <?php } } else { ?>

    <?php } ?>
    <li>

            <a  <?php
            if (isset($this->is_home)) {
                    echo "class='current homepage'";
            }
            else{
                echo "class='homepage'";
            }
            ?> href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?>
            </a>
    </li>

    
    
    
        <?php if ($this->product_setting) { ?>

        <li>
<a class="<?php if (isset($this->is_product)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>"><?php echo $this->Lang['PRODUCTS']; ?></a>
<div class="mega">
<div class="mega-container">
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
            foreach ($this->categeory_list_product as $d) {
                $check_sub_cat = $d->product_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
                <div class="one-column">
                    <ul>
                        <li><span class="mega-headline"><?php echo ucfirst($d->category_name); ?></span></li>
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                            <li><a href="<?php echo PATH.$this->storeurl.'/products/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
                            <?php 
                                    }
                                }

                            }
                        }?>
                    </ul>
                </div>
        <?php }} ?>

    <div class="clearfix"></div>
</div>
</div>
         </li>
        <?php 
        } 
        ?>
         
         
        <?php if ($this->deal_setting) { ?>

        <li>
<a class="<?php if (isset($this->is_todaydeals)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>">
<?php echo $this->Lang['DEALS']; ?></a>
<div class="mega">
<div class="mega-container">
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
            foreach ($this->categeory_list_deal as $d) {
                $check_sub_cat = $d->deal_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
        
                <div class="one-column">
                    <ul>
                        <li><span class="mega-headline"><?php echo ucfirst($d->category_name); ?></span></li>
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                            <li><a href="<?php echo PATH.$this->storeurl.'/deal/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
                            <?php 
                                    }
                                }

                            }
                        }?>
                    </ul>
                </div>
        <?php }} ?>

    <div class="clearfix"></div>
</div>
</div>
         </li>
        <?php 
        }
        ?>
         
         <?php if ($this->auction_setting) { ?>

        <li>
<a class="<?php if (isset($this->is_auction)){ echo "";} ?>" href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>">
<?php echo $this->Lang['AUCTION']; ?></a>
<div class="mega">
<div class="mega-container">
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
            foreach ($this->categeory_list_auction as $d) {
                $check_sub_cat = $d->auction_count;
                if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
                <div class="one-column">
                    <ul>
                        <li><span class="mega-headline"><?php echo ucfirst($d->category_name); ?></span></li>
                            <?php if(count($this->subcategories_list)>0){
                                foreach($this->subcategories_list as $sub_cate){
                                    if($sub_cate->main_category_id == $d->category_id){
                            ?>
                            <li><a href="<?php echo PATH.$this->storeurl.'/auction/c/'.base64_encode("sub").'/'.$sub_cate->category_url.'.html'; ?>" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li>
                            <?php 
                                    }
                                }

                            }
                        }?>
                    </ul>
                </div>
        <?php }} ?>

    <div class="clearfix"></div>
</div>
</div>
         </li>
        <?php 
        }
        ?>
         
        <?php if ($this->past_deal_setting) { ?>

	        <li>
		        <a  <?php
		        if (isset($this->is_soldout)) {
			        echo "class=''";
		        }
		        ?> href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>">
			        <?php echo $this->Lang['SOLD_OUT2']; ?>
		        </a>
	        </li>
        <?php } ?>

        <?php if ($this->store_setting) { ?>
	        <li>
		        <a href="<?php echo PATH; ?>stores.html" title="<?php echo $this->Lang['STORES']; ?>">
			        <?php echo $this->Lang['STORES']; ?>
		        </a></li>
        <?php } ?>
        <?php if (($this->deal_setting == 1 || $this->product_setting == 1 || $this->auction_setting == 1 ) && $this->map_setting) { ?>
	        <li>
		        <a <?php
		        if (isset($this->is_map)) {
			        echo "class=''";
		        }
		        ?> href="<?php echo PATH; ?>near-map.html" title="<?php echo $this->Lang['NEAR_MAP']; ?>">
			        <?php echo $this->Lang['NEAR_MAP']; ?>
		        </a>
	        </li>
        <?php } ?>

        <?php if ($this->blog_setting) { ?>
        <li>
	        <a <?php
	        if (isset($this->is_blog)) {
		        echo "class=''";
	        }
	        ?> href="<?php echo PATH; ?>blog" title="<?php echo $this->Lang['BLOG']; ?>">
		        <?php echo $this->Lang['BLOG']; ?>
	        </a>
        </li>
        <?php } ?>

			</ul>
		</nav>
	</div>
</div>




<?php /*}*/ ?>

<div class='popup_block'><?php echo new View("themes/" . THEME_NAME . '/users/login_popup'); ?></div>
<div class='popup_block1'><?php echo new View("themes/" . THEME_NAME . '/users/sign_up_popup'); ?></div>
<div class='popup_block2'><?php echo new View("themes/" . THEME_NAME . '/users/forget_popup'); ?></div>

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

