<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
$(function() {
$(".slidetabs").tabs(".images > div", {
	effect: 'fade',
	fadeOutSpeed: "medium",
	rotate: true
}).slideshow();
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>
<!--Carousel Script-->
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel2').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel3').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel4').jcarousel({
            wrap: 'circular'
        });
    });

</script>

<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel5').jcarousel({
            wrap: 'circular'
        });
    });

</script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel6').jcarousel({
            wrap: 'circular'
        });
    });
</script>
<style>
    
    .nop{
        margin-left: 150px;
        
    }
    
</style>
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?></a>
<!--            <a href="#">Home</a>-->
          <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>"><?php echo $this->Lang["PRODUCTS"]; ?></a></li>
<!--        <li class="active">Category</li>-->
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
         <div class="sidewidt">
          <h2 class="heading2"><span>Categories</span></h2>
          <ul class="nav nav-list categories">
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
                <!--<li><a><?php //echo ucfirst($d->category_name); ?></a></li>-->
<!--            <li>
              <a href="category.html">Men Accessories</a>
            </li>-->
            
           
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
        </div>           
         <!--  Best Seller -->  
         
<!--          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>-->
          <!-- Latest Product -->  
<!--          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>-->
          <!--  Must have -->  
<!--          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>-->
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
                <?php if ($this->product_setting) { ?>     
            <div class="row">
              <div class="span9">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>
               <!-- Category-->
                <section id="categorygrid">
                    <?php if (count($this->all_auction_list) > 0) { ?>      
                  <ul   <?php if (count($this->all_auction_list) > 4) { ?> id="mycarousel2" class="" <?php } else { ?> <?php } ?>>                         
                                        <?php
                                        $l = 1;
                                        foreach ($this->all_auction_list as $products) {
                                            $symbol = CURRENCY_SYMBOL;
                                            ?>
                                            <li <?php if($l==4) { ?> class="span3" <?php } ?>>
                      
<!--                    <li class="span3">-->
                        
                      <a class="prdocutname" href="product.html">Product Name Here</a>
                     
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
<!--                        <a href="#"><img alt="" src="img/product1.jpg"></a>-->
                        <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
                                                        $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
                                                        $size = getimagesize($image_url);
                                                        ?>
                                                            <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                                                            <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                                                                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                                                 <?php } else { ?>
                                 <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                                <?php } ?>
                                                                
                                                                <?php /* <img src="<?php echo PATH.'images/products/290_215/'.$products->deal_key.'_1'.'.png';?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"> */ ?></a>
                                                        <?php } else { ?>
                                                            <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
                                                        <?php } ?>       
                        <div class="shortlinks" style="margin-top:-20px;">
                         <a class="details"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
                          
                          <a class="compare" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">Buy Now</a>
                          <div class="price">
                            <?php echo $symbol . " " . number_format($products->deal_value); ?>
                          </div>
                        </div>
                      </div>
                    </li>
                    
                    
                    
                  
                    
                   
                    
                  
                  </ul>
                     
                  
                     <?php $l++; } ?>
                 
                       <?php }else{ ?> 
                              <div class="no_product_found nop"><?php echo $this->Lang['NO_PRODUCT_SOLD_OUT'];?></div>

                             <?php }?>
                               <?php }?>        
                  <div class="pagination pull-right" id ="hide" >
                   
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
function store_subscriber_validate1(store_url)
{
	var email = $("#store_subscriber1").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var x=0;
	if(email == '') {
			$('.sub_cont_inner').css('border','1px solid red');
			x++;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			x++;
			$('.sub_cont_inner').css('border','1px solid red');
		}else {
			x=0;
			$('#email_subscriber_error1').html('');
		}
		if(x==0){
		var url= Path+'users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('.sub_cont_inner').css('border','1px solid red');
				$("#store_subscriber1").val('');
				$("#store_subscriber1").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				return false;
			}
			add_store_email_subscriber(email,store_url);
			
		});
	}
	
}
function add_store_email_subscriber(email,store_url)
{
	var store_id=$("#subscriber_store_id1").val();
	var url= Path+'stores/user_subscriber_signup/?email='+email+'&store_id='+store_id+'&store_url='+store_url;
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
			window.location.href=Path+store_url+'/';
			
		},
		error:function()
		{
			
		}
	});
}
function check_color(){
	$('.sub_cont_inner').css('border','none');
	$('.sub_cont_inner').css('border-bottom','2px solid #404040');
}
</script>
