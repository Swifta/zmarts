<?php 


		if(!isset($this->product)){
			
			
		
		$storeurl = $this->storeurl;
		
		$this->is_todaydeals = 1;
                $this->is_details = 1;
		$deal_key = $this->deal_key;
        $url_title = $this->url_title;
		
		$type = $this->type;
		
		$this->type = "today-deals";
		
		$this->deals = new Deals_Model();
		
		$this->deals_deatils = $this->deals->get_deals_details($deal_key, $url_title,$type);
		if(count($this->deals_deatils) == 0){
			common::message(-1, $this->Lang["PAGE_NOT"]);
			url::redirect(PATH);
		}
		
		$this->product = null;
		foreach($this->deals_deatils as $Deal){
			
			$this->product = $Deal;
			$this->all_deals_list = $this->deals->get_related_category_deals_list($Deal->deal_id, $Deal->sec_category_id);
			$this->products_list_name = $this->Lang['REL_DEAL'];
			if(count($this->all_deals_list) < 3){     
			        $this->all_deals_list= $this->deals->get_hot_all_deals_view($Deal->deal_id);
			        $this->products_list_name = $this->Lang['HOT_DEAL'];
			         if(count($this->all_deals_list) < 3){     
			                $this->all_deals_list = $this->deals->get_related_category_deals_list($Deal->deal_id, $Deal->sec_category_id);
			                $this->products_list_name = $this->Lang['REL_DEAL'];
			         }
			}
			
			$this->get_related_categories = $this->all_deals_list;
			
 			$this->avg_rating =$this->deals->get_deal_rating($Deal->deal_id);
 			$this->sum_rating =$this->deals->get_deal_rating_sum($Deal->deal_id);
			$this->comments_deatils = $this->deals->get_comments_data($Deal->deal_id,1);
			$this->like_details = $this->deals->get_like_data($Deal->deal_id,1);
			$this->unlike_details = $this->deals->get_unlike_data($Deal->deal_id,1);
			$this->template->title = $Deal->deal_title."/".$Deal->category_name."/".CURRENCY_SYMBOL.$Deal->deal_value." | ".SITENAME;
				if($Deal->meta_description){
					$this->template->description = $Deal->meta_description;
				}
				if($Deal->meta_keywords){
					$this->template->keywords = $Deal->meta_keywords;
				}
				if($Deal->deal_key){
				        $this->template->metaimage = PATH.'images/deals/1000_800/'.$Deal->deal_key.'_1.png';
			    }
			    /* Merchant Cms footer starts */
				$this->home = new Home_Model();
				$this->merchant_cms = $this->home->get_merchant_cms_data($storeurl);
				$this->about_us_footer = $this->home->get_about_us_footer($storeurl);
				$this->stores = new Stores_Model();
				$this->admin_details = $this->stores->get_admin_details();
				/* Merchant Cms footer ends */
				$this->theme_name = $this->deals->get_theme_name($Deal->shop_id);
				$this->footer_merchant_details = $this->deals->get_merchant_details($Deal->merchant_id);
		   }
		   $this->storeid = $this->deals->get_store_id($storeurl);
		   
		   $this->categeory_list_product = $this->stores->get_category_list_product_count($this->storeid);
		   $this->categeory_list_deal = $this->stores->get_category_list_deal_count($this->storeid);
		   $this->categeory_list_auction = $this->stores->get_category_list_auction_count($this->storeid);
		
		   $this->get_theme_name = common::get_theme($storeurl);
			if(count($this->get_theme_name)>0) { 
				$this->sector = $this->get_theme_name->current()->sector_name;
			} else {
				$this->sector ="";
			}
			
			
		}
			
	
		
	


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

<?php $deals = $this->product;?>
<?php $symbol = CURRENCY_SYMBOL; ?>
<?php 
?>

 

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
							  <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
				              $image_count +=1;
				}
				} ?>
                
              
                
              <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
               <?php if($image_count == 1 ){?>
                      <li><a href="#"> <img class="etalage_source_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
              
              <img class="etalage_thumb_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" /></a></li>
              
              <?php break; ?>
                
                <?php } ?>
                
              <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/deals/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
              <li><a href="#">
              <img class="etalage_source_image img-responsive" style="max-width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; max-height:<?php echo PRODUCT_DETAIL_HEIGHT?>" src="<?php echo PATH .'images/deals/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              <img style="max-width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; max-height:<?php echo PRODUCT_DETAIL_HEIGHT?>"class="etalage_thumb_image img-responsive" src="<?php echo PATH .'images/deals/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              </a></li>
			  <?php } else { ?>
              <li><a href="#">
              
              <img class="etalage_source_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
               <img class="etalage_thumb_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
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
          <span class="deal_bought_price swifta" >(<?php echo round($deals->deal_percentage); ?>% <?php echo $this->Lang['OFFER']; ?>)</span>
          <p class="m_5">
            <?php if($this->product->deal_value < $this->product->deal_price){?>
            <span class="reducedfrom"><?php echo CURRENCY_SYMBOL.$this->product->deal_price; ?></span>
            
            <?php } ?>
            
            &nbsp;<?php echo CURRENCY_SYMBOL.$this->product->deal_value; ?>
          </p>
          
         
          
          <p class="deal_bought_price swifta" ><?php echo $this->Lang['INCLU_OF_TAXES']; ?></p>
         <?php if (($deals->maximum_deals_limit == $deals->purchase_count) || ($deals->maximum_deals_limit < $deals->purchase_count) || ($deals->enddate < time())) { ?><?php
			 
			  if (($deals->maximum_deals_limit == $deals->purchase_count) || ($deals->maximum_deals_limit < $deals->purchase_count) ) {?>
       				   <div class="btn_form">
            <form onSubmit="return false;">
              <input type="submit"  value="SOLD OUT" title="">
            </form>
          </div>
          
          <?php }else{
			  
			   ?>
          	
          <!--  <div class="btn_form">
            <form onSubmit="return false;">
              <input type="submit" id="id_leo_add_to_cart" onClick="leo_add_to_cart();"  value="Buy Now (NEED MORE CONTROL)" title="">
            </form>
          </div>-->
          
          <div class="btn_form">
            <form onSubmit="return false;">
              <input type="submit" onClick="return false"  value="Expired" title="">
            </form>
          </div>
          
          <?php 
		  } ?>
          
          <?php } else {?>
          
          <div class="btn_form">
            <form onSubmit="buy_now('<?php echo PATH; ?>deals_payment/p/<?php echo $deals->deal_key;?>/<?php echo $deals->url_title?>.html'); return false">
             <input style=" margin-bottom:20px;"type="submit"  value="Buy Now" title="Buy Now" />
            </form>
          </div>
		  <?php }?>
          
          
          
          <div class="btn_form deal_details swifta" style="">
          
          <div class="price_common" style=" text-align:center;"><p>Value</p><p class = "price_common_v" ><?php echo $symbol . " " . number_format($deals->deal_price); ?></p></div>
          <div class="price_common" style=" text-align:center;"><p>Discount</p><p class = "price_common_v" ><?php echo round($deals->deal_percentage); ?>%</p></div>
          <div class="price_common" style=" text-align:center;"><p>You save</p><p class = "price_common_v" ><?php echo $symbol . " " . number_format($deals->deal_savings); ?></p></div>
          
           
         
             
          </div>
          
            
          
           <?php if (($deals->maximum_deals_limit == $deals->purchase_count) || ($deals->maximum_deals_limit < $deals->purchase_count) || ($deals->enddate < time())) { ?>
                                <?php } else 
								{
									 ?>
                                     <div class="clear"></div>
                                      <div class="btn_form deal_details">
                                <?php if (($deals->purchase_count) < ($deals->minimum_deals_limit)) { ?>
                                <?php $total = ($deals->purchase_count * 100) / $deals->minimum_deals_limit; ?>
                                <h3><?php echo $deals->purchase_count; ?> <?php echo $this->Lang['BOUGHT']; ?></h3>
                                <div class="pg_bar"><div class="range_but" style="margin-left:<?php echo $total; ?>%"></div></div>
                                <p><span class="range_left">This deal has a limit of 0</span><span class="range_right"><?php echo $deals->minimum_deals_limit; ?></span></p>
                                <?php } else { ?>
                                <h3 style="font: 12px/15px arial;
color: #888;" class="success_deal_on">This deal is still on &nbsp;<img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/new/success_tick.png" alt="" title=""><div><?php echo $deals->purchase_count; ?> <?php echo $this->Lang['BOUGHT']; ?>. Check timer for closure time</div>
                                </h3>
                                <?php } ?>
                                <?php 
								} ?></div>
          
           <div class="clear"></div>
          
         
          
           <?php if (($deals->maximum_deals_limit == $deals->purchase_count) || ($deals->maximum_deals_limit < $deals->purchase_count) || ($deals->enddate < time())) { ?>
                                
                                <?php } else { ?>
                                
         <!-- <div class="btn_form deal_details swifta" style="background:#063;">
          <div class="price_common" style="background: #039; text-align:center;"><p>Day(s)</p><p class = "price_common_v" >788</p> </div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>   
          <div class="price_common" style="background: #039; text-align:center;"><p>HH</p><p class = "price_common_v" >88</p></div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>  
          <div class="price_common" style="background: #039; text-align:center;"><p>MM</p><p class = "price_common_v" >N 200</p></div> 
          <div class="price_common dot" style="background: #039; text-align:center;"> :  </div>   
          <div class="price_common" style="background: #039; text-align:center;"><p>SS</p><p class = "price_common_v" >N 200</p></div> -->
          <div class="clear"></div>
         <div class="btn_form deal_details">
          <span time="<?php echo $deals->enddate; ?>" class="kkcount-down-detail" ></span>
          </div>
          
           <div class="clear"></div>
          
           <?php } ?>
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
        <?php $this->get_product_categories = $this->get_related_categories;?>
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
            <?php if($products->deal_title == $this->product->deal_title){
								 continue; 
					 }
						 ?>
            <li><a href="<?php echo PATH . $products->store_url_title . '/store-product-item-details/' . $products->deal_key . '/' . $products->url_title . '.html'; ?>" title="<?php echo $products->deal_title; ?>">
              <?php if (file_exists(DOCROOT . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/deals/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } else { ?>
              <img src="<?php echo PATH .'images/deals/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
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
              <p style="white-space:nowrap"><?php echo common::truncate_item_name($products->deal_title); ?></p>
              <p><?php echo $symbol . " " . number_format($products->deal_value); ?></p>
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
          <h3 class="m_3" id = "id_prod_details" >Deal Details</h3>
          <p class="m_text"><?php echo $this->product->deal_description;?>.</p>
        </div>
        
      </div>
      <div class="rsingle span_1_of_single swifta">
        <h5 class="m_1">Categories</h5>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Products</option>
          <?php 
				
			
				?>
          <?php 
				 if(count($this->categeory_list_product)>0){?>
          <?php  foreach ($this->categeory_list_product as $d) {
                                $check_sub_cat = $d->product_count;
								
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
          <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
          <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
          <?php $type = "products";
								$categories = $d->category_url; ?>
          <option value="4"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></option>
          
          <!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php } ?>
          <!-- Ending 1st foreach -->
          
         
          <?php }else{ ?>
          <!-- (Ending 1st if) Products custom menu ending here -->
          <option value="4"> No products in this store yet.</option>
          <?php } ?>
          <!-- End else of 1st if -->
          
        </select>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Deals</option>
         
          <?php 
				 if(count($this->categeory_list_deal)>0){?>
          <?php  foreach ($this->categeory_list_deal as $d) {
                                $check_sub_cat = $d->deal_count;
								
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
          <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
          <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
          <?php $type = "deals";
								$categories = $d->category_url; ?>
          <option value="4"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></option>
          
          <!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php } ?>
          <!-- Ending 1st foreach -->
          
          <?php }else{?>
          <!-- Ending 2nd if -->
          <option value="4"> No Deals in this store yet.</option>
          <?php }?>
          <!-- Ending else of 2nd if -->
          
        </select>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Auction</option>
          
          <?php 
				 if(count($this->categeory_list_auction)>0){?>
          <?php  foreach ($this->categeory_list_auction as $d) {
                                $check_sub_cat = $d->auction_count;
								
								$subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id;
								?>
          <?php $subcate_count = 1;
								$subcat_style = ($subcate_count==0)?"background:none":"";
								$encode_catid = $d->category_id; ?>
          <?php if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) {
								?>
          <?php $type = "deals";
								$categories = $d->category_url; ?>
          <option value="4"> <?php echo ucfirst($d->category_name).' ('.$check_sub_cat.')'; ?></option>
          
          <!--<li><a href="mens.html">Daily-wear soft lenses</a></li>
									<li><a href="mens.html">Extended-wear</a></li>
									<li><a href="mens.html">Lorem ipsum </a></li>
									<li><a href="mens.html">Planned replacement</a></li>-->
          
          <?php } ?>
          <!-- Ending 3rd if -->
          
          <?php } ?>
          <!-- Ending 1st foreach -->
          
          <?php }else{?>
          <!-- Ending 2nd if -->
          <option value="4"> No Auctions in this store yet.</option>
          <?php }?>
          <!-- Ending else of 2nd if -->
          
        </select>
        
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

<script type="text/javascript" >

    function buy_now(url_buy_now){
		
		window.location.href = url_buy_now;
	}
</script>
    
      
 



