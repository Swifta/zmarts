<script type="text/javascript">
	$(document).ready(function(e) {
		$('.megamenu > li').removeClass('active');
        $('#id_leo_auction').addClass('active');
    });
</script>
<script type="text/javascript">
$(document).ready(function(e) {
	
    $('.kkcountdown').kkcountdown({
		
        addClass: 'swifta little-space',
		daysText:'Day(s) - ',
		hoursText: 'h : ',
		minutesText: 'm : ',
		secondsText: 's'});
		
});
</script>
<?php 
$this->load_map = false;
$deals = $this->product;
?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").kkCountDowndetail({
            colorText: '#7b7b7b',
            addClass: 'shadow'
        });
    });
</script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<?php $symbol = CURRENCY_SYMBOL; ?>
<div class="mens">
  <div class="main">
  
  
  
  
  
    <div class="wrap">
      <ul class="breadcrumb breadcrumb__t">
        <a class="home" href="<?php echo PATH.$this->storeurl;?>">Home</a> / <a href="<?php echo PATH.$this->storeurl."/today-deals.html";?>">Deals</a> / <?php echo  $this->product->deal_title; ?>
      </ul>
      <div class="cont span_2_of_3">
        <div class="grid images_3_of_2">
          <ul id="etalage">
              
              
              
              <?php $image_count = 1;
				$products = $this->product;
				for ($i = 1; $i <= 5; $i++) { ?>
							  <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
				              $image_count +=1;
				}
				} ?>
                
              
                
              <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
               <?php if($image_count == 1 ){?>
                      <li><a href="#"> <img class="etalage_source_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
              
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" /></a></li>
              
              <?php break; ?>
                
                <?php } ?>
                
              <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
              <li><a href="#">
              <img class="etalage_source_image img-responsive" style="max-width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; max-height:<?php echo PRODUCT_DETAIL_HEIGHT?>" src="<?php echo PATH .'images/auction/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              <img style="max-width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; max-height:<?php echo PRODUCT_DETAIL_HEIGHT?>"class="etalage_thumb_image img-responsive" src="<?php echo PATH .'images/auction/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              </a></li>
			  <?php } else { ?>
              <li><a href="#">
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" class="etalage_source_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" class="etalage_thumb_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
               </a></li>              <?php } ?>
              <?php } ?>
              
               <?php }?>
              
          
           	    <!--<li> <a href="#"> 
              <img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              </a></li>-->
              
                <!--<li> <a href="#"> 
              <img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              </a></li>-->
              
                <!--<li> <a href="#"> 
              <img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              </a></li>-->
              
               	<!--<li> <a href="#"> 
              <img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              </a></li>-->
              
               	<!--<li> <a href="#"> 
              <img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img.jpg"  />
              </a></li>-->
              	
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
            <!--<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img1.jpg"  />
								<img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s2.jpg"  title="" />
							</li>
							<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img2.jpg"  />
								<img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s3.jpg"   />
							</li>--> 
            <!--<li>
								<img class="etalage_thumb_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s4.jpg"   />
								<img class="etalage_source_image img-responsive" src="<?php echo PATH."themes/default/images/leo/"; ?>s-img3.jpg"  />
							</li>-->
          </ul>
          <div class="clearfix"></div>
        </div>
        
        <div class="desc1 span_3_of_2">
          <h3 class="m_3"> <?php echo $this->product->deal_title; ?></h3>
          <p class="m_5">
          <?php echo CURRENCY_SYMBOL.$this->product->deal_value; ?>
          </p>
          
          <!--<div class="btn_form deal_details swifta" style="">
          
          <div class="price_common" style=" text-align:center;"><p>Value</p><p class = "price_common_v" ><?php echo $symbol . " " . number_format($deals->deal_price); ?></p></div>
          <div class="price_common" style=" text-align:center;"><p>Discount</p><p class = "price_common_v" >%</p></div>
          <div class="price_common" style=" text-align:center;"><p>You save</p><p class = "price_common_v" ><?php echo $symbol . " " . number_format($deals->deal_savings); ?></p></div>
          
           
         
             
          </div>-->
          
    
                                
         <!-- <div class="btn_form deal_details swifta" style="background:#063;">
          <div class="price_common" style="background: #039; text-align:center;"><p>Day(s)</p><p class = "price_common_v" >788</p> </div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>   
          <div class="price_common" style="background: #039; text-align:center;"><p>HH</p><p class = "price_common_v" >88</p></div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>  
          <div class="price_common" style="background: #039; text-align:center;"><p>MM</p><p class = "price_common_v" >N 200</p></div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>   
          <div class="price_common" style="background: #039; text-align:center;"><p>SS</p><p class = "price_common_v" >N 200</p></div> -->
         
           
           
          <!-- Winning bidder -->
        	 <div class="btn_form deal_details auction_start" style="backgroundx:#00F;">
             
               <?php if (count($this->transaction_details)) { ?>
                                            <?php
                                            $i = 0;
                                            $saving = 0;
											
                                            foreach ($this->transaction_details as $tran) {
                                              ?>
            <?php if ($i == 0) { ?>
            
            <div class="close_time"><b>Winning Bidder: </b><i><?php echo ucfirst($tran->firstname); ?></i></div>
            <!--<li class="leads_topper"><p><?php echo $this->Lang['LAED_BIDD']; ?>: </p><span><?php echo ucfirst($tran->firstname); ?></span></li>-->
                        <?php
            } $i++;
        }
    } else {
        ?> <div class="close_time"><b>Winning Bidder: </b><i>No bidder yet. (Be the 1st)</i></div>
                                        <!--<li class="leads_topper"><p><?php echo $this->Lang['LAED_BIDD']; ?>:<span> <?php echo $this->Lang['NOT_YET_BID']; ?></span></p></li>-->
                                        <?php } ?>
         
          	
          
          </div>
          
          <?php $url = PATH .'auction/' . $deals->deal_key . '/' . $deals->url_title . '.html'; ?>
          
          <!-- Bid Now -->
         	 <!--<div class="btn_form">
            <form onSubmit="buy_now('<?php echo PATH; ?>deals_payment/p/<?php echo $deals->deal_key;?>/<?php echo $deals->url_title?>.html'); return false">
             <input type="submit"  value="BID NOW" title="Bid Now" />
             <label   title="Bid Now" >with min. of N 45</label>
            </form>
            
            
          </div>-->
          
          <!-- Highest bidder and amount -->
          
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
          
          <?php if ($deals->winner != 0 && $deals->auction_status == 0) { ?>
                                            <!--<a class="buy_it auction_buy_it"  id="sold" title="<?php echo $this->Lang['SOLD_OUT2']; ?>" style="cursor:default;"><?php echo $this->Lang['SOLD_OUT2']; ?></a>-->
                                            <div class="btn_form">
            <form onSubmit="return false">
             <input type="submit"  value="Sold Out" title="Sold Out" />
            
            </form>
          </div>
          <?php } else {?>	
                  <div class="btn_form">
            <form onSubmit="bid_now('<?php if (isset($this->UserID)) {
                                    echo $this->UserID;
                                } ?>','<?php echo $deals->deal_key; ?>','<?php echo $deals->url_title; ?>'); return false">
             <input type="submit"  value="BID NOW" title="Bid Now" />
             <label   title="Bid Now" >with min. of <i id="next_bid_bid"><?php echo $symbol." ".number_format($next_bid_amount); ?> </i></label>
            </form>
            
            
          </div>
          	<?php } ?>
          
          
          
          
          <!-- Auction close time -->
          
           <?php if ($deals->winner == 0 && $deals->auction_status != 0){?>
			    <?php var_dump($deals->auction_status); exit;?>
   <?php } else { ?>
                                    
            <div class="btn_form deal_details close" style="backgroundx:#00F;">
         
          	<div class="close_time"><b>Auction Close Time: </b><i><?php echo date('d-m-Y h:i:s A', $deals->enddate); ?></i></div>
          
          </div>
                                   
                                    
                                    
          	 <!--<div class="btn_form deal_details close" style="backgroundx:#00F;">
         
          	<div class="close_time"><b>Auction Close Time: </b><i>29-10-2015 07:30:00 PM</i></div>
          
          </div>-->
          
          
          <!-- Auction timer -->
         	 	<div class="btn_form deal_details " style="backgroundx:#00F;">
          <span time="<?php echo $deals->enddate; ?>" class="kkcount-down-detail" ></span>
          <!--<div class="close_time"><b>Auction Close Time: </b><i>29-10-2015 07:30:00 PM</i></div>-->
          
          </div>
          
           <?php } ?>
           
           
           
          
           
          <!-- Bid guide -->
          <!--<div class="close_time bid_guide">
          
           <span class="head">Bid guide</span>
           <div class="bid content">
           
           <table>
           <tr><td class="label">&nbsp;</td><td class="label">&nbsp;</td><td class="value">&nbsp;</td></tr>
           <tr><td class="label">Starting Bid</td><td class="label">&nbsp;- &nbsp;</td><td class="value">N 449</td></tr>
           <tr><td class="label">Bid Increment</td><td class="label">&nbsp;- &nbsp;</td><td class="value">N 10</td></tr>
           <tr><td class="label">Retail Price:</td><td class="label">&nbsp;- &nbsp;</td><td class="value">N 999</td></tr>
           <tr><td class="label">Auction Type(s):</td><td class="label">&nbsp;- &nbsp;</td><td class="value">Reservation</td></tr>
          
           <tr><td colspan="3" style="text-align:center" class="label to_bid">To bid next, enter: <b>N 459</b> and more</td></tr>
           </table>
           
           
           </div>
           
           
           
          </div>-->
		   <?php if ($deals->winner != 0 && $deals->auction_status == 1) {?>
           			
                    
           <?php }else{?><div class="close_time bid_guide">
          
           <span class="head">Bid guide</span>
           <div class="bid content">
           
           <table>
           <tr><td class="label">&nbsp;</td><td class="label">&nbsp;</td><td class="value">&nbsp;</td></tr>
           <tr><td class="label">Starting Bid</td><td class="label">&nbsp;- &nbsp;</td><td class="value"><?php echo $symbol . " " . number_format($deals->deal_value); ?></td></tr>
           <tr><td class="label">Bid Increment</td><td class="label">&nbsp;- &nbsp;</td><td class="value"><?php echo $symbol . " " . number_format($deals->bid_increment); ?></td></tr>
           <tr><td class="label">Retail Price</td><td class="label">&nbsp;- &nbsp;</td><td class="value"><?php echo $symbol . " " . number_format($deals->product_value); ?></td></tr>
           <tr><td class="label">Auction Type(s)</td><td class="label">&nbsp;- &nbsp;</td><td class="value"><?php echo $this->Lang['RESE_AUC']; ?></td></tr>
          
           <tr><td colspan="3" style="text-align:center" class="label to_bid">To bid next, enter: <b><?php echo $symbol." ".number_format($next_bid_amount); ?></b> and more</td></tr>
           </table>
           
          
           
           
           </div>
           
           
           
          </div><?php }?>
           <div class="clear"></div>
          
          
          <!-- 
           <span time="1446057000" class="kkcount-down-detail shadow">
           
           <span class="show_timer">
           <p class="show_close_time_detail">
           <span><i>8</i><b>Days</b></span>
           <span class="time_divider">:</span>
           <span><i>05</i><b>Hours</b></span>
           <span class="time_divider">:</span>
           <span><i>59</i><b>Min</b></span>
           <span class="time_divider">:</span>
           <span><i>58</i><b>Sec</b></span>
           </p>
           </span>
           </span>-->
           
           
         
         
             
          
          
          
          <div class="clear"></div>
          
          
          
          <!--<span class="m_link"><a href="#">login to save in wishlist</a> </span>-->
          <!--<p class="m_text2"><?php echo $this->product->deal_description;?>. </p>-->
          
          
          
          
          <a href="#id_prod_details">
          <p class="m_text2"></p>
          </a>
          			   
        </div>
        <div class="clear"></div>
        <?php $this->get_product_categories = $this->all_deals_list;?>
        <div class="clients">
          <?php if (count($this->get_product_categories) > 0) { ?>
          <h3 class="m_3">
            <?php  echo count($this->get_product_categories)-1; ?>
            Other Product(s) in the same category</h3>
          <ul id="flexiselDemo3">
           
            <?php if (count($this->get_product_categories) > 0) { ?>
            <?php
                     $k = 1;
                     foreach ($this->get_product_categories as $products) {
                     $symbol = CURRENCY_SYMBOL;
                     ?>
            
            <li><a href="<?php echo PATH . $products->store_url_title . '/auction/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <?php if (file_exists(DOCROOT . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/auction/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } else { ?>
              <img src="<?php echo PATH .'images/auction/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
              <?php } ?>
              <?php } else { ?>
              <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } ?>
              
              <!-- <div class="sale-box"><span class="on_sale title_shop">All</span></div>--> 
              <!--<div class="price">
					   <div class="cart-left">
							<p class="title swifta" style="text-wrap:normal;"><?php echo $products->deal_title; ?></p>
							<div class="price1">
							  <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>--> 
              <!--</div>--> 
              
              </a>
              <p style="font: 12px/15px arial; color: #888;width:101%; display:inline-block; text-align:center;"><i class="fa fa-clock-o">&nbsp;</i><span class="kkcountdown" data-time="<?php echo $products->enddate?>"> </span></p>
              <p style="white-space:nowrap"><?php echo common::truncate_item_name($products->deal_title); ?></p>
              <p> <?php if($products->deal_price > $products->deal_value){?> <span class="reducedfrom"><?php echo $symbol . " " . number_format($products->deal_price); ?></span><?php }?> <span class="actual"><?php echo $symbol . " " . number_format($products->deal_value); ?></span></p>
            </li>
            <!-- </div>-->
            
            <?php $k++; } ?>
            <!-- Ending 1st foreach -->
            
            <?php } ?>
            <!-- Ending 3rd if -->
            
            <?php } ?>
            <!-- Ending 2nd if --> 
            
            <!--<li><img src="images/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>--> 
            <!--<li><img src="images/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
			<li><img src="images/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
			<li><img src="images/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
			<li><img src="images/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>-->
          </ul>
        
          
        </div>
      
        <div class="toogle">
          <h3 class="m_3" id = "id_prod_details" >Auction Details</h3>
          <p class="m_text"><?php echo $this->product->deal_description;?>.</p>
        </div>
        
      </div>
      <div class="rsingle span_1_of_single swifta">
        <h5 class="m_1">Bid history</h5>
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
        <?php echo new View("themes/" . THEME_NAME . "/leo/auction/bid_history"); ?>
        </div>
        
        
        
        
        <!--<section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Rs 500 - Rs 700</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 700 - Rs 1000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1000 - Rs 1500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1500 - Rs 2000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 2000 - Rs 2500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Rs 2500 - Rs 3000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 3500 - Rs 4000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4000 - Rs 4500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4500 - Rs 5000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5000 - Rs 5500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5500 - Rs 6000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6000 - Rs 6500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6500 - Rs 7000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7000 - Rs 7500</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7500 - Rs 8000</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 8000 - Rs 8500</label>	
							</div>
						</div>
		        </section>--> 
        <!--<section  class="sky-form">
					<h4>Brand Name</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>John Jacobs</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tag Heuer</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lee Cooper</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mikli</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S Oliver</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Hackett</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Killer</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>IDEE</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vogue</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gunnar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Accu Reader</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>CAT</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Excellent</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Feelgood</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Odysey</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Animal</label>	
							</div>
						</div>
		       </section>--> 
        <!--<section  class="sky-form">
					<h4>Frame Shape</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Pilot</label>
							</div>
							<div class="col col-4">
							    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rectangle</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Square</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Round</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Others</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cat Eyes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wrap Around</label>
						    </div>
						</div>
		       </section>--> 
        <!--<section  class="sky-form">
					<h4>Frame Size</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Small</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
							</div>
						</div>
		       </section>--> 
        <!--<section  class="sky-form">
					<h4>Frame Type</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Full Rim</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
							</div>
						</div>
		       </section>--> 
        <!--<section  class="sky-form">
					<h4>Colors</h4>
						<ul class="color-list">
							<li><a href="#"> <span class="color1"> </span><p class="red">Red</p></a></li>
							<li><a href="#"> <span class="color2"> </span><p class="red">Green</p></a></li>
							<li><a href="#"> <span class="color3"> </span><p class="red">Blue</p></a></li>
							<li><a href="#"> <span class="color4"> </span><p class="red">Yellow</p></a></li>
							<li><a href="#"> <span class="color5"> </span><p class="red">Violet</p></a></li>
							<li><a href="#"> <span class="color6"> </span><p class="red">Orange</p></a></li>
							<li><a href="#"> <span class="color7"> </span><p class="red">Gray</p></a></li>
					   </ul>
		       </section>--> 
        <script src="<?php echo PATH."themes/default/js/leo/";?>/jquery.easydropdown.js"></script> 
      </div>
      <div class="clear"></div>
    </div>
    
    
    
  <div class="clear"></div>
  </div>
</div>                                         



<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script> 

<!--
    Add Item to cart 
	@Live
-->
<script type="text/javascript">

	
	var item_add_count = 0;
	var item_remove_count = 0;
	/*$('#id_cart_item_count').html('<li ><a href="#" >Cart('+item_add_count+')</a></li>');*/
	function leo_add_to_cart(){
			
			var cart_last_add = parseInt($('#id_cart_add_last_state').val());
			var cart_last_remove = parseInt($('#id_cart_remove_last_state').val());
			<?php if($this->session->get('count') == 0){?>
				 $('#id_cart_state').empty();
			<?php } ?>
				
			
			item_remove_count = cart_last_remove;
			
			var item_add_count = cart_last_add+1;
			item_count = item_add_count-item_remove_count; 
			$('#id_cart_add_last_state').val(item_add_count);
			/*$('#id_cart_item_count').html('<li ><a href="#" >Cart('+item_count+')</a></li>');*/
			
			
			
			var items_c = $('#id_cart_state');
			var items_c_in = items_c.html();
			
			items_c_in = items_c_in + '<i id = "id_item_no_<?php echo $this->product->deal_id ?>"><li><a href="#"><h3><?php echo $this->product->deal_title; ?></h3><a href=""></a></li><li><p><a onclick="leo_remove_cart_item(<?php echo $this->product->deal_id ?>); return false;" href="#" id="leo_id_remove_cart">Remove</a></p></li></i>';
			items_c.html(items_c_in);
		
			add_item_to_cart1();
		
		
		
		
		}
		
		</script>  
<script type="text/javascript">
	function add_item_to_cart1(){
	url = "<?php echo PATH ?>/leo/cart_items?deal_id=<?php echo $this->product->deal_id; ?>";
    $.ajax({
		        type:'GET',
		        url:url,
		        cache:false,
		        async:true,
		        global:false,
		        dataType:"text",
		        success:function(check)
		        {
					
					check_temp = -99;
						
					try{
						check_temp = parseInt(check);
					}catch(err){
						
					}
					
					check = check_temp;
					
					if(check < 0){
						
					switch(check){
						case -1:{
							
							<?php //$this->error_response = 'Invalid item data. Please try a different product';?>
							location.reload();
							break;
						}
						case -2:{
							
							<?php //$this->response = "This item is already in cart!";?>
							location.reload();
							break;
						}
						
						default:{
							
							<?php //$this->error_response = 'Invalid response';?>
							location.reload();
							return false;
							
						}
					}
					
					}else{
					
					$('#id_cart_item_count').html('<li ><a href="#" >Cart('+check+')</a></li>');
					<?php //$this->response = "Item has been successfully added to cart!";?>
					
					window.location.reload();
						
					}
					return false;
		          
		        },
		        error:function()
		        {
					
					<?php //$this->error_response = 'Error in connection. Please check your network.';?>
					location.reload();
					return false;
		        }

	         
			});
			
}





</script>

<script type="text/javascript">

	function bid_now(userid,auction_key,auction_title){
		
		if(!userid){
			
	        $('#fade').css({'visibility' : 'visible'});
	        $('.popup_auction').css({'display' : 'block'});
			
		}else{
			show_auction(userid,auction_key,auction_title);
		}
	}
	
	function leo_login(){
		
		window.location.href = "<?php echo PATH;?>leo_login.html";
		
	}
</script>



<script type="text/javascript">
$(document).ready(function(){
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer
}); 
</script>

<script type="text/javascript" >
	
	$(document).keyup(function(e) {
    if (e.keyCode == 27) { //  esc keycode
        $('.popup_auction').css({'display' : 'none'});
        $('#fade').css({'visibility' : 'hidden'});
        $('#new_bid').val('')
        return false;
    }
});

function show_place_my_bid()
{
$('.popup_auction').css({'display' : 'none'});
$('#fade').css({'visibility' : 'hidden'});
//return false;
}


</script>



</script>                   
                                
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
                                                                                    <h3><?php echo $this->Lang['BID_AMOU_LO_WIN']; ?></h3>
                                                                                    <p>Please enter new bid amount below</p>
                                                                                </div>
                                                                                <div class="place_bott_mid" style="text-align:center">
                                                                                   
                                                                                   <table style="text-align:center; margin: 0 auto; margin-bottom: 50px;">
                                                                                   <tr><td><div class="place_bot_left">
                                                                                        <p><label   title="minimum amount" >enter min. of <i id="next_bid_place"><?php echo $symbol." ".number_format($next_bid_amount); ?></i> and more</label></p>
                                                                                    </div></td></tr>
                                                                                    <tr><td><label style="margin-right: 10px; color: #888;"><?php echo $symbol; ?></label><input class="place_input"  id="new_bid" name="bid_deal_current_value" type="text" AUTOCOMPLETE="OFF" value="" maxlength="7" autofocus /></td></tr>
                                                                                     <tr><td colspan="2" style="padding-top: 10px; padding-right: 8px; text-align:right;"><input class="sign_submit" id="update" type="submit" value="<?php echo $this->Lang['UPDATE']; ?>" title="<?php echo $this->Lang['UPDATE']; ?>"/></td></tr>
                                                                                   
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
                                                    

