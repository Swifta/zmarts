<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("body").kkCountDowndetail({
            colorText: '#7b7b7b',
            addClass: 'shadow'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("body").kkCountDown({
            colorText:'#000000',
            colorTextDay:'#000000'	
        });
         $('.submit-link')
               .click(function(e){ 
			$('input[name="c"]').val(btoa($(this).attr('id').replace('sample-','')));
			$('input[name="c_t"]').val('<?php echo base64_encode("main"); ?>');
                       e.preventDefault();
                       $(this).closest('form')
                               .submit();                                               
                });
        });
//$(function() {
//$(".slidetabs").tabs(".images > div", {
//	effect: 'fade',
//	fadeOutSpeed: "medium",
//	rotate: true
//}).slideshow();
//});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>

<div class="wrapper">
    <div class="container">
        <div class="row ">

            <!-- SLIDER -->
            <div class="span9 slider">
                <div class="slider-slides">
<?php
$banner_check ="";
if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
                $tabs=0;
                for ($i = 1; $i <= 3; $i++) {
                    if (file_exists(DOCROOT . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png')) { 
                            $banner_link="";

                            if($m->banner_1_link !="" || $m->banner_2_link !="" || $m->banner_3_link !="") { 
                                $banner_check = 1;
                                if($i==1) { 
                                    $banner_link = $m->banner_1_link; 
                                } else if($i==2) { 
                                    $banner_link = $m->banner_2_link; 
                                } else if($i==3) { 
                                    $banner_link = $m->banner_3_link; 
                                }
                                
                            }
?>
<div class="slides">                                                                               
    <a href="<?php echo $banner_link; ?>"  title="<?php echo $banner_link; ?>">
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>" 
             data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
    </a>
</div>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <div class="slides">
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/manufacturing/banners/<?php echo $i; ?>.jpg" alt="" />
                </div>
<?php
                    }
                }
        }
}
else{?>

    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/manufacturing/banners/1.jpg" alt="" />
    </div>
    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/food/manufacturing/2.jpg" alt="" />
    </div>
    <div class="slides">
        <img src="<?php echo PATH; ?>bootstrap/themes/images/food/manufacturing/3.jpg" alt="" />
    </div>

<!-- display default banners-->
<?php
}
?>
                </div>
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
                <div class="slider-btn"></div>
            </div>
            <!-- SLIDER -->

            <!-- SPECIAL-OFFER -->
            <div class="span3">
                <div class="offers">
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x171" alt=""></a>
                        <div class="overlay">
                            <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                        </div>
                    </figure>
                </div>

                <div class="offers">
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x171" alt=""></a>
                        <div class="overlay">
                            <h1>SUMMER<span> COLLECTION 35% OFF</span> <small>  - Limited Offer</small></h1>
                        </div>
                    </figure>
                </div>
            </div>
            <!-- SPECIAL-OFFER -->

        </div>
    </div>
</div>

<!-- PRODUCT-OFFER -->
<div class="product_wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2>Featured Products <span></span></h2>
            </div>
        </div>
        <div class="row">

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom prettyPhoto"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="span3 product">

                <div>
                    <figure>
                        <a href="#"><img src="http://placehold.it/270x186" alt=""></a>
                        <div class="overlay">
                            <a href="http://placehold.it/270x186" class="zoom"></a>
                            <a href="#" class="link"></a>
                        </div>
                    </figure>
                    <div class="detail">
                        <span>$244.00</span>
                        <h4>Brown Wood Chair</h4>
                        <div class="icon">
                            <a href="#" class="one tooltip" title="Add to wish list"></a>
                            <a href="#" class="two tooltip " title="Add to cart"></a>
                            <a href="#" class="three tooltip" title="Add to compare"></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- PRODUCT-OFFER -->

<!-- CLIENTS -->
<div class="clients-wrap">
    <div class="container">
        <div class="row heading-wrap">
            <div class="span12 heading">
                <h2>Our Brands <span></span></h2>
            </div>
        </div>

        <div class="row">
            <div class="span12 clients">
                <ul class="elastislide-list clearfix" id="carousel">
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                    <li><a href="#"><img src="http://placehold.it/141x28" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- CLIENTS -->

<!-- CATEGORIES -->
<div class="categories-wrap">
    <div class="container">
        <div class="row">

            <div class="span4">
                <div class="categories">
                    <figure>
                        <img src="http://placehold.it/370x133" alt="">
                        <div class="cate-overlay">
                            <a href="#">Single Seat</a>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="span4">
                <div class="categories">
                    <figure>
                        <img src="http://placehold.it/370x133png" alt="">
                        <div class="cate-overlay">
                            <a href="#">Surfaces</a>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="span4">
                <div class="categories">
                    <figure>
                        <img src="http://placehold.it/370x133" alt="">
                        <div class="cate-overlay">
                            <a href="#">Storage</a>
                        </div>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- CATEGORIES -->