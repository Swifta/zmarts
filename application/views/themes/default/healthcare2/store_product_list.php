<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<style>
.center {
     float: none;
     margin-left:auto;
     margin-right:auto;
     width: 400px;
}
</style>

<div id="maincontainer" >
  <section id="product" class="span5 center">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <li><p><a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?></a></p></li>
          <span class="divider">/</span>
        </li>
        
  <li><p><a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>"><?php echo $this->Lang["PRODUCTS"]; ?></a></p></li>
         <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
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
          </div>-->
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
<!--        </aside>-->
        <!-- Sidebar End-->
        <!-- Category-->
        <?php
$font_color = "#000000";
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
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span12">
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
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                       <?php if (count($this->all_products_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_products_list as $products) {
			$symbol = CURRENCY_SYMBOL; ?>
                    <li class="span3">
                       
<!--                      <a class="prdocutname" href="product.html">Product Name Here</a>-->
 <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" 
               title="<?php echo $products->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php //echo $font_color; ?>"> <?php echo common::truncate_item_name($products->deal_title);  ?></a>
            
                       <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                    <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                             <?php } else { ?>
                                            <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                            <?php } ?></a>
            <?php } else { ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
            <?php } ?>    
                    
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
<!--                        <a href="#"><img alt="" src="img/product1.jpg"></a>-->
                        <div class="shortlinks" style="margin-top:-4px;">
                         <a class="details"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
                          <a class="wishlist" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php echo addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">&nbsp;</a>
                          
                          <a class="compare" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">COMPARE</a>
                        </div>
                        <div class="pricetag">
                          <span class="spiral"></span>
                          <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Add to cart" class="productcart">Add to cart</a>
                          <div class="price">
                           <?php echo $symbol . " " . number_format($products->deal_value); ?>
                          </div>
                        </div>
                      </div>
                    <div class="seller_listing_content">
                
                <div class="ratings">
<?php 
$avg_rating = $products->avg_rating;
if($avg_rating!=''){
$avg_rating = round($avg_rating); ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/star_<?php echo $avg_rating;?>.png"/>
<?php } else { ?>
<img alt="" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/gray.png"/>
<?php } ?>
                </div>
                <!--<p style="font:18px arial;color: #000;"><?php echo $symbol . " " . $products->deal_value; ?></p>-->
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
                  <ul class="thumbnails list row">
                    <?php if (count($this->all_products_list) > 0) { ?> 
                   
	<?php
		$l = 1;
		foreach ($this->all_products_list as $products) {
			$symbol = CURRENCY_SYMBOL; ?>
                    
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">
                            <span class="offer tooltip-test" >Offer</span>
                           <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { 
            $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
            $size = getimagesize($image_url);
            ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
                    <?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                             <?php } else { ?>
                                            <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                            <?php } ?></a>
            <?php } else { ?>
                    <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>"  alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>"></a>
            <?php } ?>    
                       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" 
               title="<?php echo $products->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> <?php echo $products->deal_title; ?></a>
            
                  
                          </div>
                          <div class="span6">
                            <a class="prdocutname"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"
                 
                 title="<?php echo $products->deal_title; ?>"><?php 
                 
                 echo $products->deal_title; ?></a>
                            <div class="productdiscrption"> <p class="price"><?php //echo $products->deal_description; ?></p> </div>
                            <div class="pricetag">
                              <span class="spiral"></span> <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="Add to cart" class="productcart">Add to cart</a>
                              <div class="price">
                               <p class="price"><?php echo $symbol . " " . number_format($products->deal_value); ?></p>        
                              </div>
                            </div>
                           <div class="shortlinks" style="">
                 <a class="details"  href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#" onclick="addToWishList('<?php echo $products->deal_id; ?>','<?php  addslashes($products->deal_title); ?>');" title="<?php echo $this->Lang['ADD_WISH_LIST'];?>">wishlist</a>
              <a class="compare" href="#" onclick="addToCompare('<?php echo $products->deal_id; ?>','','detail');" title="<?php echo $this->Lang['ADD_COMPARE']; ?>">compare</a>
            
                </div>-->
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


