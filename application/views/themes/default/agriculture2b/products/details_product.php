<?php 

	$this->load_map = FALSE;

?>

<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="col-lg-5">
          <!--<ul class="thumbnails mainimage">
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo $this->img_assets_base_url; ?>/product1big.jpg">
                <img src="<?php echo $this->img_assets_base_url; ?>/product1big.jpg" alt="" title="">
              </a>
            </li>
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo $this->img_assets_base_url; ?>/product2big.jpg">
                <img  src="<?php echo $this->img_assets_base_url; ?>/product2big.jpg" alt="" title="">
              </a>
            </li>
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo $this->img_assets_base_url; ?>/product1big.jpg">
                <img src="<?php echo $this->img_assets_base_url; ?>/product1big.jpg" alt="" title="">
              </a>
            </li>
            <li>
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo $this->img_assets_base_url; ?>/product2big.jpg">
                <img  src="<?php echo $this->img_assets_base_url; ?>/product2big.jpg" alt="" title="">
              </a>
            </li>
          </ul>-->
          <ul class="thumbnails mainimage details">
		   <?php $image_count = 1;
           $products = $this->product;
           for ($i = 1; $i <= 5; $i++) { ?>
                    <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
                     $image_count +=1;
                }
            } ?>
            
             <?php if($image_count == 1 ){?>
               		
                     
                      <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" >
                       <img  src="<?php echo PATH?>resize.php?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_DETAIL_WIDTH;?>&h=<?php echo PRODUCT_DETAIL_HEIGHT; ?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
             		
              </a></li>
              
            
                
                <?php }else { ?>
          
          <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
              
                
              <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
              <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH .'images/products/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>">
              <img  style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" src="<?php echo PATH .'images/products/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              
              </a></li>
			  <?php } else { ?>
              <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>">
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>"   src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
          
              
               </a></li>              <?php } ?>
              <?php }  ?>
              
               <?php }?>
               <?php } ?>
          </ul>
          <span>Mouse move on Image to zoom</span>
          
          
          <?php if($image_count > 1){ ?>
          <!--<ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?php echo $this->img_assets_base_url; ?>/product1.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?php echo $this->img_assets_base_url; ?>/product2.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?php echo $this->img_assets_base_url; ?>/product1.jpg" alt="" title="">
              </a>
            </li>
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="<?php echo $this->img_assets_base_url; ?>/product2.jpg" alt="" title="">
              </a>
            </li>
          </ul>-->
           <ul class="thumbnails mainimage">
          <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
              
              <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
               <li class="producthtumb">
              <a class="thumbnail" >
              <img  style="width:100px; height:130" src="<?php echo PATH .'images/products/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              
              </a></li>
			  <?php } else { ?>
               <li class="producthtumb">
              <a class="thumbnail" >
              
              <img style="width:100px; height:130px"   src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=100&h=130" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
          
              
               </a></li>              <?php } ?>
              <?php }  ?>
              
               <?php }?>
               </ul>
               
               
          <?php }else{?>
			  
			   
			  
			 <?php } ?><!-- Ending the first if the second image count -->
        </div>
         <!-- Right Details-->
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="productname"><span class="bgnone"><?php echo $this->product->deal_title;?></span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span><?php echo CURRENCY_SYMBOL.$this->product->deal_value; ?></div>
                  <?php if($this->product->deal_value < $this->product->deal_price){?>
               			 <div class="productpageoldprice">Old price : <?php echo CURRENCY_SYMBOL.$this->product->deal_price; ?></div>
                 <?php } ?>
                
                <?php //var_dump($this->product); ?>
                <ul class="swifta rate" title="<?php echo $this->avg_rating;?>/5 on average">
                
                  <li title="1/5" ><a class="off first" href="#" onclick="rate_this(1, '<?php echo $this->product->deal_id;?>');"><i class="icon-star"></i></a></li>
                  <li title="2/5"  class="off second"><a href="#" onclick="rate_this(2, '<?php echo $this->product->deal_id;?>');"><i class="icon-star"></i></a></li>
                  <li title="3/5" class="off third"><a href="#" onclick="rate_this(3, '<?php echo $this->product->deal_id;?>');"><i class="icon-star"></i></a></li>
                  <li title="4/5"  class="off fourth"><a href="#" onclick="rate_this(4, '<?php echo $this->product->deal_id;?>');"><i class="icon-star"></i></a></li>
                  <li title="5/5" class="off fifth"><a href="#" onclick="rate_this(5, '<?php echo $this->product->deal_id;?>');"><i class="icon-star"></i></a></li>
                  
                 
                  
                  <script type="text/javascript">
				  	$(document).ready(function(e) {
                        mark_rating(<?php echo " ".$this->sum_rating; ?>);
                    });
				  </script>
                  


                                    
                </ul>
               <?php  if($this->sum_rating == 0){?>
                <span ><span id="id_you_plus">you have not rated this yet. </span> <span id="id_rate"></span>.</span>
                <?php }else{?> 
                <span ><span id="id_you_plus">you rated this at </span> <span id="id_rate"><?php echo " ".$this->sum_rating; ?></span>.</span>
				<?php } ?>
              </div>
              
              
              
              
               <?php if(isset($this->product_size) && count($this->product_size) > 0){?>
           		<?php $nosize = "";
					   $c = 0; $i = 0; ?>
           		<?php foreach($this->product_size as $size){?>
                		
               			 <?php if($size->size_name == "None"){
						 			$nosize = 1;
						 } else {?>
                         		<?php $c = 1; break; ?>
                         <?php } ?>
                		
				<?php }?>
                
                <?php if($c != 0){?>
                		
          		   <div class="quantitybox">
                	<select class="selectsize swifta" id="id_size_pick">
                    <option selected="selected" value="0">SELECT SIZE</option>
          
                		<?php foreach ($this->product_size as $size) { ?>
                        			
                        			 <?php if ($size->quantity != 0) { ?>
                                     	<?php $i++;?>
                                        <option 
                                        <?php if(strcmp($size->size_id, $this->session->get('product_size_qty' . $this->product->deal_id)) == 0){?>
                                        	  selected="selected"
                                        <?php } ?>
                                        onclick="javascript:select_size('<?php echo $size->size_id;?>', '<?php echo $this->product->deal_id?>', '<?php echo $size->quantity?>' ); return false;"  value="<?php echo $size->size_id;?>"><?php echo $size->size_name; ?></option>
                                     <?php }else {?>
                                      <!-- Size sold out -->
									 <?php } ?>
                                     
                        <?php } ?>
                        
                        </select>
                       
				<?php }?>
                
                
		  <?php };?>
          
          
          
          
           <?php $color_count = 0;
		 	if (count($this->product_color) > 0) {
       		 $color_count = 1; ?>
             <?php if($c != 0){?>
             		 <select class="selectqty swifta" id="id_color_pick">
                     <option value="0" style="background: #FFF;">SELECT NEW COLOR</option>
             		<?php foreach($this->product_color as $color){?>
                    
                    
                    
                    	 <option onclick="leo_paint('<?php echo "#".$color->color_name;?>'); select_color('<?php echo $color->color_code_id;?>', '<?php echo $this->product->deal_id;?>');" data-color = "<?php echo "#".$color->color_name;?>" value="<?php echo $color->color_code_id;?>"  style="background: #<?php echo $color->color_name;?>">&nbsp;</option>
                         
                         <?php if($color->color_code_id == $this->session->get('product_color_qty'.$this->product->deal_id)){?>
                    	
                         <script type="application/javascript">
						  $(document).ready(function(e) {
                            leo_paint('<?php echo "#".$color->color_name;?>');
                        });
                         </script>
                    	
                    <?php } ?>
                         
                         
                         
                         
                         
                         
					<?php }?>
                  </select> 
             <?php } ?>
             
		 <?php }?>
          
          
          
          
          
             
               
                
                
                <div class="clear"></div>
                <!--<div class="control-group">
                  <div class="controls">
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList2" value="option2">
                      Option two can also be checked and included in form results </label>
                    <label class="checkbox">
                      <input type="checkbox" name="optionsCheckboxList3" value="option3">
                      Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results </label>
                    `
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Option one is this and that—be sure to include why it's great </label>
                    <label class="radio">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Option two can be something else and selecting it will deselect option one </label>
                  </div>
                </div>-->
              </div>
              <ul class="productpagecart product">
                <li><a class="cart" onclick="leo_add_to_cart(<?php echo $this->product->deal_id;?>);" href="#">Add to Cart</a>
                </li>
                <li><a class="wish" href="#" onclick="add_to_wishlist('<?php echo $this->product->deal_id;?>');" title="add to wishlist" >Add to Wishlist</a>
                </li>
                <li><a class="comare" title="add to compare" onclick="javascript:add_to_compare('<?php echo $this->product->deal_id; ?>','','detail');" href="#" >Add to Compare</a>
                </li>
              </ul>
         <!-- Product Description tab & comments-->
         <div class="productdesc product">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#description">Description</a>
                  </li>
                  <li><a href="#specification">More Info</a>
                  </li>
                 <!-- <li><a href="#review">Review</a>
                  </li>
                  <li><a href="#producttag">Tags</a>
                  </li>-->
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active swifta" id="description" style="overflow:scroll; max-height:300px;">
                    <!--<h2>h2 tag will be appear</h2>-->
                    <?php echo $this->product->deal_description;?>
                    <br>
                    <br>
                    <!--<ul class="listoption3">
                      <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit </li>
                      <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                    </ul>-->
                  </div>
                  <div class="tab-pane " id="specification">
                    <!--<ul class="productinfo">
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                      <li>
                        <span class="productinfoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="productinfoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="productinfoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>
                    </ul>-->
                     <ul class="productinfo">
                     
                     <?php if($this->product->meta_description){?>
                      <li>
                        <?php echo $this->product->meta_description; ?>
                      <li>
					 
					 <?php }else{?>
                     <li>
                         No more information on this item.
                      <li>
                      <?php } ?>
                      
                     </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="col-lg-3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="col-lg-3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-orange" value="continue">
                    </form>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
    <input type="hidden" name="nosize" id="no_size" value="<?php echo $nosize; ?>">
             <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>" />
             <input type="hidden" name="select_color" id="sel_color" value="<?php echo $this->session->get('product_color_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_size" id="sel_size" value="<?php echo $this->session->get('product_size_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_quantity" id="sel_quant" value="<?php echo $this->session->get('product_quantity_qty' . $this->product->deal_id); ?>" />
  
  
<?php 
	$this->c = $c;
	$this->color_count = $color_count;
 ?>
  
  
  <!--  Related Products-->
   <?php 
		  $this->get_product_categories = $this->all_products_list;
		  $k = count($this->get_product_categories);
		  if($k > 0){
	 ?>
  <section id="related" class="row">
    <div class="container">
    
      <h1 class="heading1"><span class="maintext">Related Products</span><span class="subtext"> <?php echo $k;?> item(s) related to this item.</span></h1>
      <!--<ul class="thumbnails">
        <li class="col-lg-3 col-sm-3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="img/product1.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="img/product2.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="img/product1.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="col-lg-3 col-sm-3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="img/product2.jpg"></a>
            <div class="shortlinks">
              <a class="details" href="#">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>-->
      
      <ul class="thumbnails swifta">
     
      <?php if (count($this->get_product_categories) > 0) { $k = 1;?>
      <?php foreach ($this->get_product_categories as $products) { if($k >=5)continue;?>
      
      <?php $symbol = CURRENCY_SYMBOL;?>
      
       <li class="col-lg-3  col-sm-6">
       <!--<a class="prdocutname" href="product.html" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>-->
       <a class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>"><?php echo common::truncate_item_name($products->deal_title, 20); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">
       
       <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) {?>
		   <?php  $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';?>
		   <?php $size = getimagesize($image_url); ?>
			<?php if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                     
              <!-- VALID IMAGE SIZE, DON'T SCALE -->
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                                  
             <?php }else{ ?>
             
             <!-- INVALID IMAGE SIZE, SCALE -->
             <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
             
             
             <?php } ?>
             
        <?php } else { ?>
   
        	<!-- NO IMAGE SLOT -->
            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=270&h=200" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
        <?php } ?>
        </a>
        <!--<div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon" style="background-image: none;padding-left: -1px;" href="#"><i class="icon-heart"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail');"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>-->
            <div class="shortlinks">
              <a class="details thumb-icon" style="background-image:none; padding-left: -1px;" href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"> <i class="icon-th-list"></i>&nbsp DETAILS</a>
              <a class="wishlist thumb-icon <?php echo $products->deal_id;?>-to-wish-link" style="background-image: none;padding-left: -1px;" href="javascript:add_to_wishlist('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-heart <?php echo $products->deal_id;?>-to-wish"></i>&nbsp WISHLIST</a>
              <a class="compare thumb-icon <?php echo $products->deal_id;?>-to-compare-link" style="background:none; padding-left: -1px;" href="javascript:add_to_compare('<?php echo $products->deal_id; ?>','','detail', 1);"><i class="icon-bar-chart <?php echo $products->deal_id;?>-to-compare"></i>&nbsp;COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title;?>" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew"><?php echo $symbol . " " . number_format($products->deal_value); ?></div>
                <?php if($products->deal_value < $products->deal_price){?>
                <div class="priceold"><?php echo $symbol . " " . number_format($products->deal_price); ?></div>
                <?php } ?>
              </div>
            </div>
       </div>
      </li>
      
      <?php $k++;} ?>
          <!-- Ending 1st foreach -->
           <?php }else {?>
			     <!-- Ending 1st if, beginning else -->
                 <!--<li class="col-lg-3  col-sm-6">
      			  <a class="prdocutname" href="#" title="No Product yet.">No Product</a>
                  <div class="thumbnail">
       			  
       			  <a href="#">
                  <img title="no product found" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH."themes/default/images/leo/";?>no_prod.png&w=287&h=246" alt=""/>
                  </a></div><br /><br /></li>-->
                  <li class="col-lg-3  col-sm-6" style="width:100%; backgroundx: #F00; text-align:center;">
      			  <a class="prdocutname" href="#" title="No Product yet."><b>No product</b></a>
                  <br /><br /></li>
           <?php } ?>
          <!-- Ending else of 1st if -->
          </ul>
      
          <!-- 
          Pagination required here as well (Fetch is not limited)
          Need more study though :)
          @Live
           -->
    </div>
  </section>
  <?php } ?> <!-- Ending if or related products -->
  <!-- Popular Brands-->
  <!--<section id="popularbrands" class="container">
    <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span></h1>
    <div class="brandcarousalrelative">
      <ul id="brandcarousal">
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
        <li><img src="img/brand1.jpg" alt="" title=""/></li>
        <li><img src="img/brand2.jpg" alt="" title=""/></li>
        <li><img src="img/brand3.jpg" alt="" title=""/></li>
        <li><img src="img/brand4.jpg" alt="" title=""/></li>
      </ul>
      <div class="clearfix"></div>
      <a id="prev" class="prev" href="#">&lt;</a>
      <a id="next" class="next" href="#">&gt;</a>
    </div>
  </section>-->
</div>





<!-- 
	Update hidden fields for size and color
    @Live
 -->
 
 <script type="text/javascript">
 	$(document).ready(function(e) {
		
		$('#id_size_pick').change(function(e) {
        //$('#sel_size').val($(this).val());
		
    });
	
	
		$('#id_color_pick').change(function(e) {
        //$('#sel_color').val($(this).val());
		
		
    });
	

        
    });
	
	
	function leo_paint(color){
		
		$('#id_color_pick').css({"background-color":color});
		
	}
	
	function select_size(size_id, product_id, quantity){
		
	var size_sel = $("#sel_size").val();
	if(size_sel!=size_id){
		var url = "<?php echo PATH; ?>products/addmore_size/"+size_id+"/"+product_id+'/'+quantity;
		$.post(url, function(check){
			
			$('#sel_size').val(check);	
			return false;
				
				
		});
   }
	}

	
	function select_color(color_id, product_id){
		
	var color_sel = $("#sel_color").val();
	
		
	if(color_sel != color_id){
		
		var url = "<?php echo PATH;?>products/addmore_color/"+color_id+"/"+product_id;
		 $.post(url,function(check){
			 $('#sel_color').val(check);
			 return false;
			
			if(check && !isNaN(check)){
				
				 var obj_arr = $('.color a div');
				 
				 for(i = 0; i < obj_arr.length; i++){
					 $(obj_arr[i]).css({'border-color':'#4CB1CA'});
				 }
				 
				 $('#'+'id_leo_selected_color_'+color_id).css({'border-color':'#777'});
				 $("#sel_color").val(color_id);
				
				 
			 }
			 
			 /*$('#'+'id_leo_selected_color_'+color_id).css({'border-color':'#777'});
			 alert(check);*/
			 return false;
			 
			  $(".color_"+check).addClass("active");

			  $(".color_"+color_sel).removeClass("active");
			  $("#sel_color").val(color_id);
			  $('.error_size').hide();
                                $('.error_color').hide();
                                $('.error_all').hide();
		});
	}
	
	
	}
 	
 </script>
 
 <script type="text/javascript">
 
 function rate_this(rate, deal_id){
	
	<?php if(!isset($_SESSION['UserID'])){?> show_login(); return false;<?php } ?>
	 var url = "<?php echo PATH."sasa/product_rating";?>";
	
	 
	 $.post(url, {action:'rating', deal_id:deal_id, rate:rate, idBox:1}, function(status){
		  
		 
		try{
			status = parseInt(status);
			rate = parseInt(rate);
			
		}catch(e){
			status = -999;
			rate = -999;
		}
		
		switch(status){
			case 1: {
				$('#id_you_plus').text('you rate this at ');
				$('#id_rate').text(rate);
				
				break;
			}
			
			case 0: {
				$('#id_you_plus').html('you now rate this at ');
				$('#id_rate').text(rate);
				break;
			}
			default: {
				break;
			}
		}
		
		
		mark_rating(rate);
		 	
			
		 });
 }
 
 
 function mark_rating(rate){
	 
	 try{
			
			rate = parseInt(rate);
			
		}catch(e){
			rate = -999;
		}
		
	 
	 switch(rate){
			case 1: {
				
				
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				break;
			}
			
			case 2: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				
				break;
			}
			
			case 3: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				
				break;
			}
			
			
			case 4: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				$('.off.fourth i').css({'color': '#F25C27'});
				$('.off.fourth').addClass('on');
				
				
				break;
			}
			
			
			case 5: {
				
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				
				$('.off.first i').css({'color': '#F25C27'});
				$('.off.first').addClass('on');
				
				$('.off.second i').css({'color': '#F25C27'});
				$('.off.second').addClass('on');
				
				$('.off.third i').css({'color': '#F25C27'});
				$('.off.third').addClass('on');
				
				$('.off.fourth i').css({'color': '#F25C27'});
				$('.off.fourth').addClass('on');
				
				$('.off.fifth i').css({'color': '#F25C27'});
				$('.off.fifth').addClass('on');
				
				break;
			}
			
			
			case 0: {
				
				$('.off.on').removeClass('on');
				$('.off i').css({'color':'#999'});
				
				break;
			}
			default: {
				break;
			}
		}
 }
 
 
 $(document).ready(function(e) {
	 
	 $('.on').blur(function(e) {
        $('a.on.off i').css({'color': '#F25C27'});
		
    });
	 
	 	$('.off.first').hover(function(e){
			// alert("HOVER IN");
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.on i').css({'color': '#F25C27'});
		},
		
	 function(e){
		 // alert("HOVER OUT OUT");
		  	
			$('.off i').css({'color': '#999'});
			$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.second').hover(function(e){
			
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.third').hover(function(e){
			 $('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		
		 $('.off.fourth').hover(function(e){
			
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
			$('.off.fourth i').css({'color': '#F25C27'});
		},
		
	 function(e){
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
		});
		
		 $('.off.fifth').hover(function(e){
			$('.off.first i').css({'color': '#F25C27'});
			$('.off.second i').css({'color': '#F25C27'});
			$('.off.third i').css({'color': '#F25C27'});
			$('.off.fourth i').css({'color': '#F25C27'});
			$('.off.fifth i').css({'color': '#F25C27'});
		},
		
	 function(e){
		
		$('.off i').css({'color': '#999'});
		$('.off.on i').css({'color': '#F25C27'});
			
		});
		
		
    
});
 	
 </script>
 
 <script type="text/javascript">
 	$(document).ready(function(e) {
        $('a.active').removeClass('active');
		$('.sasa-products').addClass('active');
    });
 </script>
 
 <script type="text/javascript">
$(document).ready(function(e) {
    $('.thumb-icon').css('padding-left', 0);
	 $('.thumb-icon').focus(function(e) {
		 
		  $('.thumb-icon').css('text-decoration', 'none');
        
    });
	
	
	
	 $('.thumb-icon').hover(function (e){
		  $('.thumb-icon').css('text-decoration', 'none');
		 }, function (e){
			  $('.thumb-icon').css('text-decoration', 'none');
	});
	
});
</script>

