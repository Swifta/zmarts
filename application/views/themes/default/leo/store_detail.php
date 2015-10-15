<!-- start slider -->

<div id="fwslider">
        <div class="slider_container">
            <!--<div class="slide"> -->
                <!-- Slide image -->
                    <!--<img src="<?php echo PATH."themes/default/images/leo/banner.jpg";?>" alt=""/>-->
                <!-- Slide image -->
                <!-- Texts container -->
                <!--<div class="slide_content">-->
                    <!--<div class="slide_content_wrap">-->
                        <!-- Text title -->
                        <!--<h4 class="title">Aluminium Club</h4>-->
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <!--<p class="description">Experiance ray ban</p>-->
                        <!-- /Text description -->
                    <!--</div>-->
               <!-- </div>-->
                 <!-- /Texts container -->
           <!-- </div>-->
            <!-- /Duplicate to create more slides -->
            <!--<div class="slide">
                <img src="<?php echo PATH."themes/default/images/leo/banner1.jpg";?>"  alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">consectetuer adipiscing </h4>
                        <p class="description">diam nonummy nibh euismod</p>
                    </div>
                </div>
            </div>-->
            <!--/slide -->
            
            
            <?php  if (count($this->banner_details) > 0) {
	   ?>
                <?php if(count($this->banner_details) != 1) {   ?>                         
                             
					<?php foreach ($this->banner_details as $banner) { ?>                                        
                                    
                                   
                                   <?php 
								   			$banner->redirect_url = trim($banner->redirect_url);
											if( $banner->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
												  <a  href="<?php echo PATH."leo_zenith.html";	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_self">
											<?php }else{ ?>
                                                                                           
                                   <a  href="<?php echo $banner->redirect_url;	 ?>"  title = "<?php echo $banner->image_title; ?>" target="_blank"><?php } ?>
                            <div class="slide">    
										 
                                       
                                         
                                           <img  style="max-height:560px;" src="<?php echo PATH . 'images/banner_images/' . $banner->banner_id . '.png'; ?>" alt="<?php echo $banner->image_title; ?>">
                                        
                                         
                                         
                                      <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title"><?php echo $banner->image_title; ?></h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description">Click banner for more details!</p>
                        <!-- /Text description -->
                    </div>
                </div>
                </div>  
                      </a>                   
                                      
                                    
                                
                                  
                                    
                                   
                                 <?php } ?>                             
                                                                                            
								                                                           
                                                    
                        <?php } 
}  ?>
            
            
            
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
         <div class="clear clearfix"></div>
    </div>

<!--/slider -->
<div class="main">
  <div class="wrap">
    <div class="section group">
      <div class="cont span_2_of_3">
        <h2 class="head">Featured Products</h2>
        <div class="top-box"> 
          <!--<div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>--> 
          <!--<div class="col_1_of_3 span_1_of_3">
			   	 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic1.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>-->
          
          <?php  if (count($this->get_product_categories) > 0) { ?>
          <?php if ($this->product_setting) { ?>
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="top-box">
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $products->store_url_title . '/store-product-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                <?php } ?>
                <?php } else { ?>
                <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop">Featured</span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo $products->deal_title; ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php } ?>
          <!-- Ending 2nd if -->
          
          <?php }else {
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>no_prod.png" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">NONE FOUND</span></div>	
                   <!--<div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>-->				
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          
          <div class="clear"></div>
        </div>
        
        <!--<div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic6.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			  <div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic7.jpg" alt=""/>
					</div>
					 <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="reducedfrom">$66.00</span>
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			  <div class="col_1_of_3 span_1_of_3">
				  <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic8.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
            
		    <h2 class="head">Staff Pick</h2>
		    <div class="top-box1">
			 <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic8.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			 <div class="col_1_of_3 span_1_of_3">
					 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic4.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			 <div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic2.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
		    <div class="clear"></div>
			</div>--> 
        
        <!--<h2 class="head">New Products</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic5.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>-->
        
        <h2 class="head">Popular Products</h2>
        <div class="section group">
          <?php if(count($this->best_seller) > 0) {
			  $k = 1;
			  ?>
          <?php foreach($this->best_seller as $best) {  $symbol = CURRENCY_SYMBOL; ?>
          <?php if($k %4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="section group">
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $best->store_url_title . '/store-product-item-details/' . $best->deal_key . '/' . $best->url_title . '.html'; ?>" title="<?php echo $best->deal_title; ?>">
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $best->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
                <?php } else { ?>
                <img src="<?php echo PATH .'images/products/1000_800/'.$best->deal_key.'_1'.'.png'?>" />
                <?php } ?>
                <?php } else { ?>
                <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $best->deal_title; ?>" title="<?php echo $best->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop">Popular</span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo $best->deal_title; ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($best->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++;} ?>
          <!-- Ending 1st foreach -->
          
          <?php }else {
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>no_prod.png" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">NONE FOUND</span></div>	
                   <!--<div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>-->				
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          <!-- Ending 1st if -->
          <div class="clear"></div>
        </div>
        
        <!--<h2 class="head">New Products</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic5.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic2.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic3.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>-->
        
        <h2 class="head">All Products</h2>
        <div class="top-box"> 
          <!--<div class="col_1_of_3 span_1_of_3"> 
			   <a href="single.html">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic.jpg" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                 </a>
				</div>--> 
          <!--<div class="col_1_of_3 span_1_of_3">
			   	 <a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>pic1.jpg" alt=""/>
					</div>
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>-->
          
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php if ($this->product_setting) { ?>
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        </div>
        <div class="top-box">
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $products->store_url_title . '/store-product-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>"><!--<a href="<?php echo PATH . $products->store_url_title . '/store-product-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">-->
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
                <?php } ?>
                <?php } else { ?>
                <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop">All</span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo $products->deal_title; ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php } ?>
          <!-- Ending 2nd if -->
          
          <?php }else { ?>
			     <!-- Ending 1st if, beginning else -->
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>no_prod.png" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">NONE FOUND</span></div>	
                   <!--<div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>-->				
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
          
          <div class="clear"></div>
        </div>
      </div>
      <div class="rsidebar span_1_of_left">
        <div class="top-border"> </div>
        <div class="border">
          <link href="<?php echo PATH."themes/default/css/leo/";?>default.css" rel="stylesheet" type="text/css" media="all" />
          <link href="<?php echo PATH."themes/default/css/leo/";?>nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
          <script src="<?php echo PATH."themes/default/js/leo/";?>jquery.nivo.slider.js"></script> 
          <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
          <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider"> 
              <!--<img src="<?php echo PATH."themes/default/images/leo/t-img1.jpg";?>"  alt="" />
               	<img src="<?php echo PATH."themes/default/images/leo/";?>t-img2.jpg"  alt="" />
                <img src="<?php echo PATH."themes/default/images/leo/";?>t-img3.jpg"  alt="" />-->
              
              <?php if (count($this->get_product_categories) > 0) { ?>
              <?php if ($this->product_setting) { ?>
              <?php if (count($this->get_product_categories) > 0) { ?>
              <?php
                     $k = 1;
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
                     ?>
              <?php if($k == 4){
						 break;
					  }?>
              <a href="<?php echo PATH . $products->store_url_title . '/product/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } else { ?>
              <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
              <?php } ?>
              <?php } else { ?>
              <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } ?>
              </a>
              <?php $k++; } ?>
              <!-- Ending 1st foreach -->
              
              <?php } ?>
              <!-- Ending 3rd if -->
              
              <?php } ?>
              <!-- Ending 2nd if -->
              
              <?php }else {
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH."themes/default/images/leo/";?>no_prod.png" alt=""/>
					</div>
                    <div class="sale-box"><span class="on_sale title_shop">NONE FOUND</span></div>	
                   <!--<div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>-->				
                   </div>
                   </a>
				</div>
			  
			  
			<div class="clear"></div>
			</div>
			 
			 <?php } ?>
          <!-- Ending else of 1st if -->
              
            </div>
          </div>
          <div class="btn"><a href="single.html">Check it Out</a></div>
        </div>
        <div class="top-border"> </div>
        <div class="sidebar-bottom">
          <h2 class="m_1">Newsletters<br>
            Subscription</h2>
          <p class="m_text">Be the first to know about hot deals and products by subscribing to our newsletter</p>
          <div class="subscribe">
            <form onsubmit="return false;">
              <div class="subscribe_lft_txt_field">
                <input  id="subscribe" name="subscribe" placeholder="Enter your valid email" type="text" class="textbox">
                <!--<input type="submit" value="<?php echo $this->Lang['SUBSCRIBE'];?>" onclick="return check_subscribe();"/>--> 
                <em style="color:#F00;" id="email_subscriber_error"></em> </div>
              <input onclick="return check_subscribe();"  type="submit" value="Subscribe">
            </form>
             
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
