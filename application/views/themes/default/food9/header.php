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
		<div class="ten columns">
			<ul class="top-bar-menu">
				<li><i class="fa fa-phone"></i> (564) 123 4567</li>
				<li><i class="fa fa-envelope"></i> <a href="#">mail@example.com</a></li>
				<li>
					<div class="top-bar-dropdown">
						<span>English</span>
						<ul class="options">
							<li><div class="arrow"></div></li>
							<li><a href="#">English</a></li>
							<li><a href="#">Polish</a></li>
							<li><a href="#">Deutsch</a></li>
						</ul>
					</div>
				</li>
				<li>
					<div class="top-bar-dropdown">
						<span>USD</span>
						<ul class="options">
							<li><div class="arrow"></div></li>
							<li><a href="#">USD</a></li>
							<li><a href="#">PLN</a></li>
							<li><a href="#">EUR</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>

		<!-- Social Icons -->
		<div class="six columns">
			<ul class="social-icons">
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="dribbble" href="#"><i class="icon-dribbble"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
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
			<h1><a href="index.html"><img src="images/logo.png" alt="Trizzy" /></a></h1>
		</div>
	</div>


	<!-- Additional Menu -->
	<div class="twelve columns">
		<div id="additional-menu">
			<ul>
				<li><a href="shopping-cart.html">Shopping Cart</a></li>
				<li><a href="wishlist.html">WishList <span>(2)</span></a></li>
				<li><a href="checkout-billing-details.html">Checkout</a></li>
				<li><a href="my-account.html">My Account</a></li>
			</ul>
		</div>
	</div>


	<!-- Shopping Cart -->
	<div class="twelve columns">

		<div id="cart">

			<!-- Button -->
			<div class="cart-btn">
				<a href="#" class="button adc">$178.00</a>
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
