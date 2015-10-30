<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

 <style>
                   .centers{
                       float: none;
                       margin-left:-90px;;
                       margin-right:0 auto;
                       width: 300px;
                   }
                   
               </style>
<div id="maincontainer">          
      <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
           
          <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?></a>
          <span class="divider">/</span>
        </li>
       <li class="active"><?php echo $this->title_display; ?></li>
       <div class="btn-group pull-right" style="margin-top:-4px;">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
<!--        <aside class="span3">
          Category  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.html">Men Accessories</a>
                <ul>
                 <li>
                <a href="category.html">Women Accessories</a>
                
              </li>
              <li>
                <a href="category.html">Computers </a>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
                </ul>
              </li>
              <li>
                <a href="category.html">Women Accessories</a>
                <ul>
                 <li>
                <a href="category.html">Women Accessories</a>
              </li>
              <li>
                <a href="category.html">Computers </a>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
                </ul>
              </li>
              <li>
                <a href="category.html">Computers </a>
                <ul>
                 <li>
                <a href="category.html">Women Accessories</a>
              </li>
              <li>
                <a href="category.html">Computers </a>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
                </ul>
              </li>
              <li>
                <a href="category.html">Home and Furniture</a>
              </li>
              <li>
                <a href="category.html">Others</a>
              </li>
            </ul>
          </div>
           Best Seller   
         
          <div class="sidewidt">
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
          </div>
           Latest Product   
          <div class="sidewidt">
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
          </div>
            Must have   
          <div class="sidewidt">
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
          </div>
        </aside>-->
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Sorting-->
<!--                <div class="sorting well">
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
                </div>-->
               <!-- Category-->
               <?php
$font_color = "";
$bg_color ="";
$font_size ="";
if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
		$font_color = "color:".$m->font_color.";";
		$bg_color ="background:".$m->bg_color.";";
		$font_size = $m->font_size."px";
	} 
}
?>

              
                <section id="categorygrid" >
                  <ul class="thumbnails grid" >
                      <?php if (count($this->all_deals_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_deals_list as $deals_categories){
		$symbol = CURRENCY_SYMBOL; ?>
                    <li class="span3">
                       <a class="prdocutname"  href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>"
                 
                          title="<?php echo $deals_categories->deal_title; ?>"><?php 
                 
                 echo substr($deals_categories->deal_title,0,50); ?></a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
<!--                        <a href="#"><img alt="" src="img/product1.jpg"></a>-->
                      <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(true) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(true) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
                        <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" class="product-button"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                         <h5><?php 
                if(strlen($deals_categories->deal_title) > 18){
                    echo substr($deals_categories->deal_title, 0, 16)."..";
                }
                else{
                    echo $deals_categories->deal_title;
                }
                ?></h5>
                        <div class="shortlinks">
                            <a class="details"  href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" href="#">WISHLIST</a>
                          <a class="compare" onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" href="#">COMPARE</a>
                          
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                             <p class="price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>        
                          </div>
                        </div>
                      </div>
                      
                    </li>
           
  <?php 
                        if($l == 4){
                            break;
                        }
                        $l++;
                        
                    } 
                        ?>

		<?php }else{?>
                                <p class="text-center"><?php echo $this->Lang['NO_DEALS'];?></p>
<?php }?>
                   
                  </ul>
                  <ul class="thumbnails list row">
                        <?php if (count($this->all_deals_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_deals_list as $products) {
			$symbol = CURRENCY_SYMBOL; ?>
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                                    <a href="#"><img alt="" src="img/product1.jpg"></a>-->
                      <a href="<?php echo PATH . $deals_categories->store_url_title . '/deals/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
                                           title="<?php echo $deals_categories->deal_title; ?>">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(true) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?> 
                        <div class="cover">
            <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
            <?php if(true) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $deals_categories->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
                   <?php } else { ?>
                            <img src="<?php echo PATH .'images/products/1000_800/'.$deals_categories->deal_key.'_1'.'.png'?>" />
                <?php } ?>
            <?php } else { ?>
                    <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $deals_categories->deal_title; ?>" title="<?php echo $deals_categories->deal_title; ?>" />
            <?php } ?>
                        </div>
					</a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname"  href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>"
                 
                          title="<?php echo $deals_categories->deal_title; ?>"><?php 
                 
                 echo substr($deals_categories->deal_title,0,50); ?></a>
                            <div class="productdiscrption"></div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <p class="price"><?php echo $symbol . " " . number_format($deals_categories->deal_value); ?></p>  
                              </div>
                            </div>
                            <div class="shortlinks">
                              <a class="details"  href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $deals_categories->deal_id; ?>','<?php echo addslashes($deals_categories->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>" href="#">WISHLIST</a>
                          <a class="compare" onclick="addToCompare('<?php echo $deals_categories->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>" href="#">COMPARE</a>
                          
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                      
                   <?php 
                        if($l == 4){
                            break;
                        }
                        $l++;
                        
                    } 
                        ?>

		<?php }else{?>
                                <p class="text-center"><?php echo $this->Lang['NO_PRODUCTS'];?></p>
<?php }?>
                  </ul>
<!--                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>-->
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
