<?php 

	$this->load_map = FALSE;
	$deals = $this->product;

?>

<script type="text/javascript">
$(document).ready(function(e) {
	
    $('.kkcountdown').kkcountdown({
		
        addClass: 'swifta',
		daysText:'Day(s)',
		hoursText: 'hour(s)',
		minutesText: 'min(s)',
		secondsText: 'sec(s)'});
		
});
</script>


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
                    <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
                     $image_count +=1;
                }
            } ?>
            
             <?php if($image_count == 1 ){?>
               		
                     
                      <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" >
                       <img  src="<?php echo PATH?>resize.php?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png&w=<?php echo PRODUCT_DETAIL_WIDTH;?>&h=<?php echo PRODUCT_DETAIL_HEIGHT; ?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
             		
              </a></li>
              
            
                
                <?php }else { ?>
          
          <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
              
                
              <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
              <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH .'images/auction/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>">
              <img  style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" src="<?php echo PATH .'images/auction/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              
              </a></li>
			  <?php } else { ?>
              <li><a rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>">
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>"   src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
          
              
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
             
              
              <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
               <li class="producthtumb">
              <a class="thumbnail" >
              <img  style="width:100px; height:130" src="<?php echo PATH .'images/auction/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              
              </a></li>
			  <?php } else { ?>
               <li class="producthtumb">
              <a class="thumbnail" >
              
              <img style="width:100px; height:130px"   src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=100&h=130" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
          
              
               </a></li>              <?php } ?>
              <?php }  ?>
              
               <?php }?>
               </ul>
               
               
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
               <?php  if(isset($_SESSION['UserID'])){if($this->sum_rating == 0){?>
                <span ><span id="id_you_plus">you have not rated this yet. </span> <span id="id_rate"></span>.</span>
                <?php }else{?> 
                <span ><span id="id_you_plus">you rated this at </span> <span id="id_rate"><?php echo " ".$this->sum_rating; ?></span>.</span>
				<?php }}else {?>
					
					<span ><span id="id_you_plus"></span> <span id="id_rate"><?php echo " ".$this->sum_rating; ?></span> rating(s) so far.</span>
                    <script type="text/javascript">
						$(document).ready(function(e) {
                            mark_rating("<?php echo " ".$this->avg_rating; ?>");
							
                        });
					</script>
					
				<?php }?>
                
                
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
                        </div>
				<?php }?>
                
               
		  <?php };?>
          
          
          
          
           <?php $color_count = 0;
		 	if (isset($this->product_color) && count($this->product_color) > 0) {
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
              
              <!-- Highest bidder and amount -->
          <?php $deals = $this->product; $symbol= CURRENCY_SYMBOL;?>
         			 <?php 
		  
		  $this->highest_bidder = null;
		   $highest_bid_amount = 0;
		   
		  if( count($this->transaction_details) > 0){
			  
			 	$this->highest_bidder =  $this->transaction_details[0];
			 
		 		 $highest_bid_amount =  $this->highest_bidder->bid_amount;
				 $next_bid_amount  = $highest_bid_amount + $deals->bid_increment;
				 
		  }else{
			  
			  	$next_bid_amount  = $deals->deal_value + $deals->bid_increment;
		  }
		  ?>
          
              
              
               <!-- Winning bidder -->
        	 
             
               <?php if (count($this->transaction_details)) { ?>
                                            <?php
                                            $i = 0;
                                            $saving = 0;
											
                                            foreach ($this->transaction_details as $tran) {
                                              ?>
            <?php if ($i == 0) { ?>
            
            <div class="bid winner"><b>Winning Bidder: </b><i><?php echo ucfirst($tran->firstname); ?></i></div>
            <!--<li class="leads_topper"><p><?php echo $this->Lang['LAED_BIDD']; ?>: </p><span><?php echo ucfirst($tran->firstname); ?></span></li>-->
                        <?php
            } $i++;
        }
    } else {
        ?> <div class="bid winner"><b>Winning Bidder: </b><i>No bidder yet. (Be the 1st)</i></div>
                                        <!--<li class="leads_topper"><p><?php echo $this->Lang['LAED_BIDD']; ?>:<span> <?php echo $this->Lang['NOT_YET_BID']; ?></span></p></li>-->
                                        <?php } ?>
         
          
              
              <ul class="productpagecart btn_form deal_details">
              
              
        	
                <li><a class="cart" style="background-image:none; text-align:center; padding:15px;" onclick="bid_now('<?php if (isset($this->UserID)) {
                                    echo $this->UserID;
                                } ?>','<?php echo $deals->deal_key; ?>','<?php echo $deals->url_title; ?>'); return false" href="#">BID NOW</a>
                </li>
                <!--<li><a class="wish" href="#" onclick="add_to_wishlist('<?php echo $this->product->deal_id;?>');" title="add to wishlist" >Add to Wishlist</a>
                </li>-->
                <!--<li><a class="comare" title="add to compare" onclick="javascript:add_to_compare('<?php echo $this->product->deal_id; ?>','','detail');" href="#" >Add to Compare</a>
                </li>-->
              </ul>
              
              
               <?php if ($deals->winner == 0 && $deals->auction_status != 0){?>
			    <?php ?>
   <?php } else { ?>
                                    
            
          	  <div class="close_time"><b>Auction Close Time: </b><i><?php echo date('d-m-Y h:i:s A', $deals->enddate); ?></i></div>
          
          	  <!-- Auction timer -->
              
          
              <div class="timer-container"><span class="kkcountdown" data-time="<?php echo $deals->enddate?>"> </span></div>
			  
         
          
           <?php } ?>
          
              
              
              
               
         
         
         
         
         <!-- Product Description tab & comments-->
         <div class="productdesc">
                <ul class="nav nav-tabs" id="myTab">
                
                 <li><a class="active" href="#description">Bid Guide</a>
                 
                 
                  </li>
                  
                     <li><a  href="#specification">Bid History</a>
                  </li>
                  
                  <li ><a href="#review">Description</a>
                  </li>
                  
                  <li><a href="#producttag">More Info</a>
                  </li>
                  
                 <!-- <li><a href="#review">Review</a>
                  </li>
                  <li><a href="#producttag">Tags</a>
                  </li>-->
                </ul>
                <div class="tab-content">
                  <div class="swifta tab-pane active" id="description" style="overflow:auto; max-height:300px;">
                    <!--<h2>h2 tag will be appear</h2>-->
                    
                    <ul class="productinfo">
                    <?php if ($deals->winner != 0 && $deals->auction_status == 1) {?>
           			
                    <li>
                        <span class="productinfoleft"> No Bid Guide. This auction is either past due or sold-out. </span></li>
                     
                    
           			<?php }else{?>
           
           					<li>
                        	<span class="productinfoleft"> Starting Bid:</span> <?php echo $symbol . " " . number_format($deals->deal_value); ?> </li>
                        	<li>
                            <span class="productinfoleft"> Bid Increment:</span> <?php echo $symbol . " " . number_format($deals->bid_increment); ?> </li>
                      		
                            <li>
                        	<span class="productinfoleft"> Retail Price:</span><?php echo $symbol . " " . number_format($deals->deal_price); ?></li>
                      		
                            
                            <li>
                        	<span class="productinfoleft"> Auction Type:</span> <?php echo $this->Lang['RESE_AUC']; ?> </li>
                      		
                      		
                            <li>
                        	<span class="productinfoleft"> Next Min. Bid Amount:</span> <?php echo $symbol . " " . number_format($next_bid_amount); ?></li>
                      		
			   		<?php } ?>
                    <!--  <li>
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
                        <span class="productinfoleft"> Reward Points:</span> 60 </li>-->
                    </ul>
                  </div>
                  <div class="tab-pane " id="specification" style="overflow:auto; max-height:300px;">
                  
                    <div class="rsingle span_1_of_single swifta">
        
        <script>
                                            setInterval(function()
                                            {
                                                var url ="<?php echo PATH; ?>leo/bid_history/<?php echo $deals->deal_id; ?>";
                                                $.post(url,function(check){
                                                    $("div#show_bid_history").html(check);
													
													 <?php 
		  
		  												$this->highest_bidder = null;
		  											    $highest_bid_amount = 0;
		   
		  												if( count($this->transaction_details) > 0){
			  
			 											$this->highest_bidder =  $this->transaction_details[0];
			 
		 		 										$highest_bid_amount =  $this->highest_bidder->bid_amount;
														
													    $next_bid_amount  = $highest_bid_amount + $deals->bid_increment;
				 
														  }else{
															  
																$next_bid_amount  = $deals->deal_value + $deals->bid_increment;
														  }
														  ?>
														  
														  $('#next_bid_bid').html(<?php echo $symbol." ".number_format($next_bid_amount); ?>);
														  $('#next_bid_place').html(<?php echo $symbol." ".number_format($next_bid_amount); ?>);
                                                });
                                            }, 10000);//time in milliseconds
                                        </script>
                                        
        <div class="close_time bid_guide" id="show_bid_history">
        <?php echo new View("themes/" . THEME_NAME . "/sasa/auction/bid_history"); ?>
        </div>
         
      </div>
                    
                    
                    
                   
          
          
                     
                  </div>
                  <div class="tab-pane" id="review" style="overflow:auto; max-height:300px;">
                    
                    <ul class="productinfo">
                     
                     <?php if($this->product->deal_description){?>
                      <li>
                        <?php echo $this->product->deal_description; ?>
                      </li>
					 
					 <?php }else{?>
                     <li>
                         No description on this item.
                      </li>
                      <?php } ?>
                      
                     </ul>
                    
                  </div>
                  <div class="tab-pane" id="producttag" style="overflow:auto; max-height:300px;">
                    <ul class="productinfo">
                     
                     <?php if($this->product->meta_description){?>
                      <li>
                        <?php echo $this->product->meta_description; ?>
                      </li>
					 
					 <?php }else{?>
                     <li>
                         No more information on this item.
                      </li>
                      <?php } ?>
                      
                     </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php if (isset($this->product_color)) {?>
  
    <input type="hidden" name="nosize" id="no_size" value="<?php echo $nosize; ?>">
             <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>" />
             <input type="hidden" name="select_color" id="sel_color" value="<?php echo $this->session->get('product_color_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_size" id="sel_size" value="<?php echo $this->session->get('product_size_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_quantity" id="sel_quant" value="<?php echo $this->session->get('product_quantity_qty' . $this->product->deal_id); ?>" />
  <?php } ?>
  
  
<?php 
	if (!isset($this->product_color)) {
		$this->c = 0;
		$this->color_count =0;
	}
 ?>
  
  
  <!--  Related Products-->
   <?php 
		  $this->get_product_categories = $this->all_deals_list;
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
       <a title ="<?php echo $products->deal_title; ?>" class="prdocutname" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>"><?php echo common::truncate_item_name($products->deal_title, 25); ?></a>
        <div class="thumbnail">
        <span class="new tooltip-test" ></span>
        <a title ="<?php echo $products->deal_title; ?>" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">
       
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
        <div class="shortlinks">
              <a class="details" href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>">DETAILS</a>
              <a class="wishlist" href="#">WISHLIST</a>
              <a class="compare" href="#">COMPARE</a>
            </div>
        <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
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

<div class="popup_auction btn_form" style="display:none; background: #FFF;" >


<form method="POST" name="auction_bid"  onsubmit="return check();">
                                                      
                                                            <div class="place_sign_up" style="text-align:center">
                                                                <div class="place_sign_midd clearfix">                                    
                                                                    <a class="close2" onclick="show_place_my_bid();" style="cursor:pointer;" title="<?php echo $this->Lang['CLOSE']; ?>"></a>
                                                                    <div class="logo_c">
                                                                    <div class="place_midd_top clearfix">
                                                                        <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"><img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png" /></a>                                        
                                                                    </div>
                                                                    </div>
                                    <?php if ($deals->startdate < time()) { ?>
                                        <?php if ($this->UserID) {  ?>
                                                                            
                                                                                <div class="place_bott_top">
                                                                                    <h3>Place a bid</h3>
                                                                                    <p><b>Please enter bid amount below</b></p>
                                                                                </div>
                                                                                <div class="place_bott_mid" style="text-align:center">
                                                                                   
                                                                                   <table style="text-align:center; margin: 0 auto; margin-bottom: 50px;">
                                                                                   <tr><td><div class="place_bot_left">
                                                                                        <p><label   title="minimum amount" >current  top bid is at amount <i id="next_bid_place"><?php echo $symbol." ".number_format($highest_bid_amount); ?>.</i></label></p>
                                                                                    </div></td></tr>
                                                                                    <tr><td><label style="margin-right: 10px; color: #888;"><?php echo $symbol; ?></label><input class="place_input"  id="new_bid" name="bid_deal_current_value" placeholder="enter bid amount" type="text" AUTOCOMPLETE="OFF" value="" maxlength="7" autofocus /></td></tr>
                                                                                    
                                                                                  
                                                                                     <tr><td colspan="2" style="  
                                                                                    padding-top: 10px; padding-right: 8px; text-align: center;  padding-left: 10px;"><input class="sign_submit" id="update" type="submit" value="<?php echo $this->Lang['UPDATE']; ?>" title="<?php echo $this->Lang['UPDATE']; ?>"/></td></tr>
                                                                                   
                                                                                   </table>
                                                                                    
                                                                                    
                                                                                    <div class="place_bot_center">
                                                                                    
                                                                                        
                                                                                       
                                                                                            
                                                                                             
                                                                                            
                                                                                       
                                                                                        <input type="hidden" id="old_bid" name="bid_deal_value" value="<?php echo $deals->deal_price; ?>" >
                                                                                        <input type="hidden"  name="bid_deal_id" id="bid_deal_id" value="<?php echo $deals->deal_id; ?>" >
                                                                                        <input type="hidden"  name="bid_deal_key" value="<?php echo $deals->deal_key; ?>" >
                                                                                        <input type="hidden"  name="bid_title" value="<?php echo $deals->deal_title; ?>" >
                                                                                        <input type="hidden"  name="bid_url_title" value="<?php echo $deals->url_title; ?>" >
                                                                                        <input type="hidden" name="shipping_amount" value="<?php echo $deals->shipping_fee; ?>" >
                                                                                        <input type="hidden" name="end_time" value="<?php echo $deals->enddate; ?>" >
                                                                                         <input type="hidden" name="store_url" value="<?php echo $deals->store_url_title; ?>" >
                                                                                        <p></p>
                                                                                        
                                                                                    </div>
                                                                                    <div class="place_bot_rgt">
                                                                                        <div class="gren_left">
                                                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                            
                                                                           
                                        <?php } else {?>
																<div class="place_bott_top">
                                                                                    <h3>You need to be logged in to bid on this auction.</h3>
                                                                                    <p>Please login below</p>
                                                                                </div>
                                                                <div class="place_bott_mid" style="text-align:center">
                                                                
                                                               						   <table style="text-align:center; margin: 0 auto; margin-bottom: 50px;">
                                                                                   
                                                                                     <tr><td colspan="2" style="padding-top: 10px; padding-right: 8px; text-align:right;"><input class="sign_submit" id="update" type="submit" onclick="leo_login(); return false;" value="LOGIN" title="Login"/></td></tr>
                                                                                   
                                                                                   </table>
                                                                                   
                                                                                   <!--<table style="text-align:center; margin: 0 auto; margin-bottom: 50px;">
                                                                                   <tr><td><div class="place_bot_left">
                                                                                        <p><label   title="minimum amount" >enter min. of <?php echo $symbol . " "; ?><?php echo number_format($deals->deal_price); ?> and more</label></p>
                                                                                    </div></td></tr>
                                                                                    <tr><td><label style="margin-right: 10px; color: #888;"><?php echo $symbol; ?></label><input class="place_input"  id="new_bid" name="bid_deal_current_value" type="text" AUTOCOMPLETE="OFF" value="" maxlength="7" autofocus /></td></tr>
                                                                                     <tr><td colspan="2" style="padding-top: 10px; padding-right: 8px; text-align:right;"><input class="sign_submit" id="update" type="submit" value="<?php echo $this->Lang['UPDATE']; ?>" title="<?php echo $this->Lang['UPDATE']; ?>"/></td></tr>
                                                                                   
                                                                                   </table>-->
                                                                                    
                                                                                    
                                                                                    <div class="place_bot_center">
                                                                                    
                                                                                        
                                                                                       
                                                                                            
                                                                                             
                                                                                            
                                                                                       
                                                                                        <input type="hidden" id="old_bid" name="bid_deal_value" value="<?php echo $deals->deal_price; ?>" >
                                                                                        <input type="hidden"  name="bid_deal_id" id="bid_deal_id" value="<?php echo $deals->deal_id; ?>" >
                                                                                        <input type="hidden"  name="bid_deal_key" value="<?php echo $deals->deal_key; ?>" >
                                                                                        <input type="hidden"  name="bid_title" value="<?php echo $deals->deal_title; ?>" >
                                                                                        <input type="hidden"  name="bid_url_title" value="<?php echo $deals->url_title; ?>" >
                                                                                        <input type="hidden" name="shipping_amount" value="<?php echo $deals->shipping_fee; ?>" >
                                                                                        <input type="hidden" name="end_time" value="<?php echo $deals->enddate; ?>" >
                                                                                         <input type="hidden" name="store_url" value="<?php echo $deals->store_url_title; ?>" >
                                                                                        <p></p>
                                                                                        
                                                                                    </div>
                                                                                    <div class="place_bot_rgt">
                                                                                        <div class="gren_left">
                                                                                            
                                                                                    </div>
                                                                                </div>
                                                                            </div>
											<?php }
									 } ?>
                                                                </div>
                                                            </div>
                                                       
                                                        
                                                        
                                                       
                                                    </form>
                                                    
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
 
 
 
 <!-- Deal Rating
	@Live
 -->
 
 <script type="text/javascript">
 
 function rate_this(rate, deal_id){
	
	
	<?php if(!isset($_SESSION['UserID'])){?> show_login(); return false;<?php } ?>
	 var url = "<?php echo PATH."sasa/auction_rating";?>";
	
	 
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

	function bid_now(userid,auction_key,auction_title){
		
		if(!userid){
			
	       show_login();
			
		}else{
			var cssLink = $("<link rel='stylesheet' type='text/css' href='<?php echo PATH."themes/".THEME_NAME."/css/leo/style.css";?>' >");
			var jsScript = $("<script  type='text/javascript' src='<?php echo PATH."themes/".THEME_NAME."/js/public.js";?>' >");
			$('#id_parent_assets').append(cssLink);
			$('#id_parent_assets').append(jsScript);
	        $('#fade').css({'visibility' : 'visible', 'z-index':9999});
			$('.popup_auction').css({'z-index':999999});
			show_auction(userid,auction_key,auction_title);
		}
	}
	
	function leo_login(){
		
		window.location.href = "<?php echo PATH;?>leo_login.html";
		
	}
</script>

<script type="text/javascript">
 	$(document).ready(function(e) {
        $('a.active').removeClass('active');
		$('.sasa-auctions').addClass('active');
    });
 </script>





