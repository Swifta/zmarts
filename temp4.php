<script>

var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".htop_nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		}
	});
        $(".htop_nav1 li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		}
	});
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".htop_nav").slideToggle();
	});
        $(".toggleMenu1").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".htop_nav1").slideToggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 1025 ) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".htop_nav").hide();
		} else {
			$(".htop_nav").show();
		}
		$(".htop_nav li").unbind('mouseenter mouseleave');
		$(".htop_nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
                
                $(".toggleMenu1").css("display", "inline-block");
		if (!$(".toggleMenu1").hasClass("active")) {
			$(".htop_nav1").hide();
		} else {
			$(".htop_nav1").show();
		}
		$(".htop_nav1 li").unbind('mouseenter mouseleave');
		$(".htop_nav1 li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 1025) {
		$(".toggleMenu").css("display", "none");
		$(".htop_nav").show();
		$(".htop_nav li").removeClass("hover");
		$(".htop_nav li a").unbind('click');
		$(".htop_nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
                
                $(".toggleMenu1").css("display", "none");
		$(".htop_nav1").show();
		$(".htop_nav1 li").removeClass("hover");
		$(".htop_nav1 li a").unbind('click');
		$(".htop_nav1 li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}


</script>