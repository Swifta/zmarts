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
		<div id="logo">                 
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
	<div class="twelve columns" style="margin-top:-20px;">
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

			<div class="cart-list">

			<div class="arrow"></div>

				<div class="cart-amount">
					<span>2 items in the shopping cart</span>
				</div>

					<ul>
						<li>
							<a href="#"><img src="images/small_product_list_08.jpg" alt="" /></a>
							<a href="#">Converse All Star Trainers</a>
							<span>1 x $79.00</span>
							<div class="clearfix"></div>
						</li>

						<li>
							<a href="#"><img src="images/small_product_list_09.jpg" alt="" /></a>
							<a href="#">Tommy Hilfiger <br /> Shirt Beat</a>
							<span>1 x $99.00</span>
							<div class="clearfix"></div>
						</li>
					</ul>

				<div class="cart-buttons button">
					<a href="shopping-cart.html" class="view-cart" ><span data-hover="View Cart"><span>View Cart</span></span></a>
					<a href="checkout-billing-details.html" class="checkout"><span data-hover="Checkout">Checkout</span></a>
				</div>
				<div class="clearfix">

				</div>
			</div>

		</div>

		<!-- Search -->
		<nav class="top-search">
			<form action="#" method="get">
				<button><i class="fa fa-search"></i></button>
				<input class="search-field" type="text" placeholder="Search" value=""/>
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

				<li><a href="index.html" class="current homepage" id="current">Home</a></li>

				<li class="dropdown">
					<a href="#">Shop</a>
					<ul>
						<li><a href="shop-with-sidebar.html">Shop With Sidebar</a></li>
						<li><a href="shop-full-width.html">Shop Full Width</a></li>
						<li><a href="checkout-billing-details.html">Checkout Pages</a></li>
						<li><a href="shop-categories-grid.html">Categories Grid</a></li>
						<li><a href="single-product-page.html">Single Product Page</a></li>
						<li><a href="variable-product-page.html">Variable Product Page</a></li>
						<li><a href="wishlist.html">Wishlist Page</a></li>
						<li><a href="shopping-cart.html">Shopping Cart</a></li>
					</ul>
				</li>


				<li>
					<a href="#">Features</a>
					<div class="mega">
						<div class="mega-container">

							<div class="one-column">
								<ul>
									<li><span class="mega-headline">Example Pages</span></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="404-page.html">404 Page</a></li>
								</ul>
							</div>

							<div class="one-column">
								<ul>
									<li><span class="mega-headline">Featured Pages</span></li>
									<li><a href="index-2.html">Business Homepage</a></li>
									<li><a href="shop-with-sidebar.html">Default Shop</a></li>
									<li><a href="blog-masonry.html">Masonry Blog</a></li>
									<li><a href="variable-product-page.html">Variable Product</a></li>
									<li><a href="portfolio-dynamic-grid.html">Dynamic Grid</a></li>
								</ul>
							</div>

							<div class="one-column hidden-on-mobile">
								<ul>
									<li><span class="mega-headline">Paragraph</span></li>
									<li><p>This <a href="#">Mega Menu</a> can handle everything. Lists, paragraphs, forms...</p></li>
								</ul>
							</div>

							<div class="one-fourth-column hidden-on-mobile">
								<a href="#" class="img-caption margin-reset">
									<figure>
										<img src="images/menu-banner-01.jpg" alt="" />
										<figcaption>
											<h3>Jeans</h3>
											<span>Pack for Style</span>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="one-fourth-column hidden-on-mobile">
								<a href="#" class="img-caption margin-reset">
									<figure>
										<img src="images/menu-banner-02.jpg" alt="" />
										<figcaption>
											<h3>Sunglasses</h3>
											<span>Nail the Basics</span>
										</figcaption>
									</figure>
								</a>
							</div>

							<div class="clearfix"></div>
						</div>
					</div>
				</li>


				<li class="dropdown">
					<a href="#">Shortcodes</a>
					<ul>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="icons.html">Icons</a></li>
					</ul>
				</li>


				<li class="dropdown">
					<a href="#">Portfolio</a>
					<ul>
						<li><a href="portfolio-3-columns.html">3 Columns</a></li>
						<li><a href="portfolio-4-columns.html">4 Columns</a></li>
						<li><a href="portfolio-dynamic-grid.html">Dynamic Grid</a></li>
						<li><a href="single-project.html">Single Project</a></li>
					</ul>
				</li>
				

				<li class="dropdown">
					<a href="#">Blog</a>
					<ul>
						<li><a href="blog-standard.html">Blog Standard</a></li>
						<li><a href="blog-masonry.html">Blog Masonry</a></li>
						<li><a href="blog-single-post.html">Single Post</a></li>
					</ul>
				</li>


				<li class="demo-button">
				  <a href="#">Get This Theme</a>
				</li>

			</ul>
		</nav>
	</div>
</div>
