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
										 
                                       
                                         
                                           <!--<img  style="max-height:560px;" src="<?php echo PATH . 'images/banner_images/' . $banner->banner_id . '.png'; ?>" alt="<?php echo $banner->image_title; ?>">-->
                                           
                                            <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/banner_images/' . $banner->banner_id .  '.png' ?>&w=1570&h=561" alt="<?php echo $banner->image_title; ?>" title="<?php echo $banner->image_title; ?>" />
                                        
                                        
                                         
                                         
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
     <?php  if(isset($this->url_cat)){ ?>
     
     
     
     
      	  <h2 class="head"><?php echo $this->url_cat; ?></h2>
          <div class="top-box">
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {?>
						 
						
<?php
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        	</div>
         <div class="top-box">
         <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $products->store_url_title . '/store-auction-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <!--<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
                <?php } else { ?>
                <!--<img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                
                <?php } ?>
                <?php } else { ?>
                <!--<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop"><?php echo $this->url_cat; ?></span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
          <?php }else{ ?>
          <!-- Ending 3rd if -->
                 <?php $just_opened = true; ?>
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="<?php echo PATH . 'resize.php?src='; ?><?php echo PATH."themes/default/images/leo/";?>no_auc.png&w=285&h=285" alt="no auction found"/>
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
          <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php } ?>
      
      
      
      
      
     <?php }else{ ?> <!-- Ending if of category url -->
     
     
     
     
     	<h2 class="head">Hot Auctions</h2>
        <div class="top-box"> 
      	
        <!-- <div class="col_1_of_3 span_1_of_3">
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
          <?php $this->get_product_categories = $this->best_seller;?>
         
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {?>
						 
						
<?php
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        	</div>
         <div class="top-box">
         <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $products->store_url_title . '/store-auction-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <!--<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <!--<img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
                <!--<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop">HOT</span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
        
          <?php }else {
			  
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
                 <?php $just_opened = true; ?>
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<!--<img src="<?php echo PATH."themes/default/images/leo/";?>no_auc.png" alt=""/>-->
                        <img src="<?php echo PATH . 'resize.php?src='; ?><?php echo PATH."themes/default/images/leo/";?>no_auc.png&w=285&h=285" alt="no auction found"/>
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
          <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php } ?>
        
     
     
        <h2 class="head">All Auctions</h2>
        <div class="top-box"> 
      	
        <!-- <div class="col_1_of_3 span_1_of_3">
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
          <?php $this->get_product_categories = $this->get_recent_product_categories;?>
         
         
          <?php if (count($this->get_product_categories) > 0) { ?>
          <?php
                     $k = 1;
					 $just_opened = false;
					 
                     foreach ($this->get_product_categories as $products) {?>
						 
						
<?php
                     $symbol = CURRENCY_SYMBOL;
					 $just_opened = false;
                     ?>
          <?php if($k % 4 == 0){?>
          <div class="clear"></div>
        	</div>
         <div class="top-box">
         <?php 
		 	$k = 1;
		    $just_opened = true;?>
          <?php }?>
          <div class="col_1_of_3 span_1_of_3"> <a href="<?php echo PATH . $products->store_url_title . '/store-auction-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
            <div class="inner_content clearfix">
              <div class="product_image" >
                <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                <!--<img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } else { ?>
                <!--<img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
                <?php } else { ?>
                <!--<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />-->
                <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=285&h=285" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
                <?php } ?>
              </div>
              <div class="sale-box"><span class="on_sale title_shop">All</span></div>
              <div class="price">
                <div class="cart-left">
                  <p class="title swifta" style="text-wrap:normal;"><?php echo common::truncate_item_name($products->deal_title); ?></p>
                  <div class="price1"> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span> </div>
                </div>
                <div class="cart-right"> </div>
                <div class="clear"></div>
              </div>
            </div>
            </a> </div>
          <?php $k++; } ?>
          <!-- Ending 1st foreach -->
          
        
          <?php }else {
			  
			  ?>
			     <!-- Ending 1st if, beginning else -->
                 
                 <?php $just_opened = true; ?>
                 
				 <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="#">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<!--<img src="<?php echo PATH."themes/default/images/leo/";?>no_auc.png" alt=""/>-->
                        <img src="<?php echo PATH . 'resize.php?src='; ?><?php echo PATH."themes/default/images/leo/";?>no_auc.png&w=285&h=285" alt="no auction found"/>
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
          <?php if($just_opened || $k < 5){?>
          
          		<div class="clear"></div>
        		</div>
                
        <?php } ?>
        
        
        
        
  
   
   <?php } ?>  <!-- Ending else of category url if -->
        
        
      </div>
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
                
                
                 <!--<?php if (count($this->get_product_categories) > 0) { ?>
             
              
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
                   
                     
                     <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
                                                 <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
												<?php } else { ?>
												 <img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
												<?php } ?>
                                                <?php } else { ?>
														<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
												<?php } ?>
                     
                     </a>
                    
                     
                                  
                    <?php $k++; } ?> <!-- Ending 1st foreach -->
              
             <?php } ?> <!-- Ending 3rd if -->
             
             <?php } ?> <!-- Ending 2nd if -->
             
             
              <?php if (count($this->ads_details) > 0) { ?>   
                                    <?php foreach ($this->ads_details as $ads) { ?>    
            <?php if ($ads->ads_position == "rs1" && $ads->page_position==3) {  ?>
            					    
                                  <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
									  
                                      <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
									  
								 <?php  }else{?>
								 
                                 <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
								  
								  <?php }?>
                                     
										 
                                 
              <?php } ?>
              <?php if ($ads->ads_position == "rs2" && $ads->page_position==3){  ?>   
                         <?php 
								  	$ads->redirect_url = trim($ads->redirect_url);
									
								  if($ads->redirect_url == '#" onclick="javascript:load_club();return false;'){?>
                                  
									   <a href="<?php echo PATH."leo_zenith.html"; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a> 
                                       
                                      <?php  }else{?>
                                      
                                       <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a> 
                                       
                                       <?php }?>
                                     
										
            <?php } ?>
        <?php } ?>
    <?php } ?>
			 
                
				
              </div>
             </div>
              <div class="btn"><a href="<?php echo PATH."leo_zenith.html"; ?>">Check it Out</a></div>
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