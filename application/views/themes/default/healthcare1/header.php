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
<?php if (($this->uri->last_segment() == "near-map.html") || ($this->uri->last_segment() == "nearmap.html")) { } else {} ?>
<!--header start-->
<!--header start-->

<header>
 <div class="headerstrip">
        <div class="container">
            <div class="row">
                <div class="span2"> <div class="logo">
    <h1>
            <?php if(count($this->about_us_footer)>0) { foreach($this->about_us_footer as $stores) { ?>
     <a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
            <img alt="<?php echo $this->Lang['LOGO']; ?>" 	src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>

    <?php /* <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/> */ ?></a>
      <?php } } ?>
    </h1>
    </div>
                    <!-- Top Nav Start -->
                    <div class="pull-left">
                        <div class="navbar" id="topnav">
                            <div class="navbar-inner">
                                <ul class="nav" >
                                    <?php  if($this->session->get('user_auto_key')) { ?>
        <li  class="store_credit"> <a href="<?php echo PATH; ?>storecredits-products.html"> <?php echo $this->Lang["STR_CRDS"]; ?></a></li>
        <?php } ?>
                                    <li><a class="home active" href="<?php echo PATH;?>">Home</a></li>
                                    <li class="mnav_dnone"></li>
        <?php if ($this->session->get('UserID')) { ?>
                <li class="wel_txt"><span><?php echo $this->Lang['WELCOME']; ?> </span> <a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->session->get('UserName'); if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?>"><b class="wel_usr"><?php echo $this->session->get('UserName');  if($this->session->get('user_auto_key')) { echo "(".$this->session->get('user_auto_key').")"; } ?></b></a></li>                                                                
                <li class="mnav_dnone"></li>
                <li><a class="myaccount" href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><?php echo $this->Lang['MY_ACC']; ?></a> </li>
                <li class="mnav_dnone"></li>
                 <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>


                <?php /*<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

                <li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li> */ ?>
                <li  class="addcomper" >
                <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?>
                <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>								
                <li class="mnav_dnone"> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li> 


        <?php } ?>   
                <li><a href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?></a> </li>
                <li class="mnav_dnone"></li>
                <li><a href="<?php echo PATH; ?>logout.html" title="<?php echo $this->Lang['LOGOUT']; ?>"><?php echo $this->Lang['LOGOUT']; ?></a> </li>
        <?php } else { ?>
              <?php if(isset($this->is_home) || isset($this->is_product) ) { ?>
                <?php /*<li  <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="compare_show" <?php } else { ?> class="compare_add" <?php } ?>>  <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a></li>

                <li <?php $compare = $this->session->get("product_compare"); if(is_array($compare) && count($compare)>1){  ?> class="mnav_dnone compare_show" <?php } else { ?> class="mnav_dnone compare_add" <?php } ?>>|</li> */ ?>

                <li  class="addcomper" >
                <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?>
                <a href="<?php echo PATH; ?>product-compare.html" title="<?php echo $this->Lang['MY_COMP']; ?>"><?php echo $this->Lang['MY_COMP']; ?></a><?php } ?></li>								
                <li class="mnav_dnone"> <?php $compare = $this->session->get("product_compare"); 
                if(is_array($compare) && count($compare)>1){  ?> | <?php } ?></li> 

        <?php } ?>

                <li><a id="login" href="javascript:showlogin();" title="<?php echo $this->Lang['LOGIN']; ?>"><?php echo $this->Lang['LOGIN']; ?></a></li>
                <li class="mnav_dnone"></li>
                <li><a href="javascript:showsignup();" title="<?php echo $this->Lang['SIGN_UP']; ?>"><?php echo $this->Lang['SIGN_UP']; ?></a> </li>
                <li class="head_fb"><a style="cursor:pointer;" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>"><img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/f_connect.png" alt="f_connect"/></a></li>	
        
                    <?php } ?>
                
        <?php if (FB_PAGE) { ?>
        <!-- <li><a class="faceb" href="<?php echo FB_PAGE; ?>" target="blank" title="<?php echo $this->Lang['FB']; ?>">&nbsp;</a></li>-->
        <?php }if (TWITTER_PAGE) { ?>
        <!-- <li><a class="twitt" href="<?php echo TWITTER_PAGE; ?>" target="blank" title="<?php echo $this->Lang['TW']; ?>">&nbsp;</a></li>-->
        <?php }if (LINKEDIN_PAGE) { ?>
        <!--  <li><a class="linked" href="<?php echo LINKEDIN_PAGE; ?>" target="blank" title="<?php echo $this->Lang['LINK']; ?>">&nbsp;</a></li>-->
        <?php } if ($this->city_id) { ?>
                <?php
                /*foreach ($this->all_city_list as $CX) {
                        if ($this->city_id == $CX->city_id) {  ?>
                                <!-- <li><a class="rss" href="<?php echo PATH . 'deals/rss/' . $this->city_id . '/' . $CX->city_url; ?>" target="blank" title="">&nbsp;</a></li>-->
                                <?php if (!$this->session->get('UserID')) { ?>
                                <li><a  style="cursor:pointer;" onclick="facebookconnect();" title="<?php echo $this->Lang['FB_CONN']; ?>"><img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/f_connect.png" alt="f_connect"/></a></li>
                                <?php } ?>
                                <?php
                        }
                } */
        }  ?>                   
                
                <li class="">
        <a href="<?php echo PATH ?>refer-friends.html" title="<?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . '' . REFERRAL_AMOUNT . '*'; ?>">
                    <?php echo $this->Lang['REFER_FRIENDS'] . ' ' . CURRENCY_SYMBOL . ' ' . REFERRAL_AMOUNT . '*'; ?></a>
            </li>
                                    <li><a class="shoppingcart" href="#"></a> </li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Nav End -->
                    <div class="pull-right">

                </div>
            </div>
        </div>
    </div>
    
    </header>
    <div class="container">
        <div class="headerdetails">
            <div class="pull-left">
                                       <div>
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
    <div class="cities" style="float:left;margin-left:10px;z-index: 2299;border:1px solid white;width:40%;padding-top:5px;">
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
<!--                        <form class="form-search top-search">-->
<div class="" style="float:left;width:50%; padding-top: -20px;">
<?php $search = $this->input->get('q'); ?>
     <input type="text" class="input-medium search-query" size="6" style="border:1px solid #eb4800" name="q" class="input-medium search-query" onkeyup="lookup(this.value);" <?php if (isset($search) && ($search != '')) { ?> value="<?php echo $search; ?>" <?php } else { ?>  AUTOCOMPLETE="OFF" placeholder="<?php echo $srch; ?> ..." <?php } ?>  placeholder="Search Hereâ€¦"/>
                            
   <div id="suggestions" class="search_suggestions"></div>		
</div>

                           
                        </form>
                    </div>
                
            
            </div>
            <div class="pull-right">
                 <div class="merchant_log text-center" style="margin:1px auto;">
             <!--<p class="text-center"><?php echo $this->Lang['MERCHANT_ACC']; ?></p>-->
            <ul>
                <li><p><?php echo $this->Lang['MERCHANT_ACC']; ?></p></li>
                    <li><a  href="<?php echo PATH . 'merchant-login.html'; ?>" title="<?php  echo $this->Lang['MER_LOIN']; ?>"><?php echo $this->Lang['MER_LOIN']; ?></a></li>
                    <li>|</li>
                    <li><a  href="<?php echo PATH . 'merchant-signup-step1.html'; ?>" title="<?php  echo $this->Lang['MER_REGI']; ?>"><?php echo $this->Lang['MER_REGI']; ?></a></li>
            </ul>
	</div>
                             <ul class="nav topcart pull-left">
                    <li class="dropdown hover carticon "> <a href="<?php echo PATH; ?>cart.html" class="dropdown-toggle" > Shopping Cart <span class="label label-orange font14">1 item(s)</span> - $589.50 <b class="caret"></b></a>
                        <ul class="dropdown-menu topcartopen ">
                            <li>
                                
                               <?php if ($this->product_setting) { ?>
        <div class="add_cart">
        <div class="cart_mid" id="cart_window">
	        <a href="<?php echo PATH; ?>cart.html"  title="<?php echo $this->Lang['CART']; ?>(<?php
	        if ($this->session->get('count') != '') {
		        echo $this->session->get('count');
	        } else {
		        echo '0';
	        }
                ?>)"> <span><?php
		           if ($this->session->get('count') != "") {
			           echo $this->session->get('count');
		           } else {
			           echo "0";
		           }
		           ?></span><?php echo $this->Lang['CART']; ?>(s)</a>
            <div class="cart_window_products1" style="display:none"></div>
        </div>
        </div>
        
        <?php } ?>
                                <div class="well pull-right buttonwrap"> <a class="btn btn-orange" href="#">View Cart</a> <a class="btn btn-orange" href="#">Checkout</a> </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
      <div id="categorymenu">
            <nav class="subnav">
                <ul class="nav-pills categorymenu">
                    
                     <?php if(isset($this->is_home)||isset($this->is_product)||isset($this->is_todaydeals)||isset($this->is_auction)){ ?>
                        <?php if(isset($this->is_details)){ ?>
                        
                        <?php } else { ?>
                        
		        
		        <?php } } else { ?>
		        
		        <?php } ?>
                    
                    <li <?php
				        if (isset($this->is_home)) {
					        echo "class='active'";
				        }
				        ?>>

				        <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?>
				        </a>
                        
                        
                        
                
                    </li>
                      <?php if ($this->product_setting) { ?>

                    <li class="<?php if (isset($this->is_product)) echo "active"; ?>">
                        <a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>">
                <?php echo $this->Lang['PRODUCTS']; ?>
            </a>
                        <div>
                              <ul>
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
                <!--<li><a><?php echo ucfirst($d->category_name); ?></a></li>-->
								<!--<ul>-->
									<?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a href="javascript:filtercategory_store('<?php echo $sub_cate->category_url; ?>', 'products', '<?php echo base64_encode("sub"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
									<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==PHP_INT_MAX){?>
									<li ><a href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'products', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									<?php break;}
									}
									
									}
									}?>
								<!--</ul>-->
					<?php }}}?>
            </ul>
                            <ul>
                                <li><img style="display:block" src="img/proudctbanner.jpg" alt="" title="" > </li>
                            </ul>
                        </div>
                    </li>
                          <?php } ?>
                    <li><a  href="category.html">Categories</a> </li>
                    <li><a href="shopping-cart.html">Shopping Cart</a> </li>
                    <li><a href="checkout.html">Checkout</a> </li>
                    <li><a href="compare.html">Compare</a> </li>
                    <li><a href="blog.html">Blog</a>
                        <div>
                            <ul>
                                <li><a href="blog.html">Blog page</a> </li>
                                <li><a href="bloglist.html">Blog List VIew</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="portfoliolist.html">Portfolio</a>
                        <div>
                            <ul>
                                <li><a href="portfolio.html">Portfolio</a> </li>
                                <li><a href="portfoliolist.html">Portfolio List</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="myaccount.html">My Account & other</a>
                        <div>
                            <ul>
                                <li><a href="myaccount.html">My Account</a> </li>
                                <li><a href="login.html">Login</a> </li>
                                <li><a href="register.html">Register</a> </li>
                                <li><a href="wishlist.html">Wishlist</a> </li>
                                <li><a href="contact.html">Contact</a> </li>
                                <li><a href="page-404.html">404</a> </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="features.html">Features</a> </li>
                </ul>
            </nav>
        </div>
    </div>
   


		
        <!--header end-->

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
