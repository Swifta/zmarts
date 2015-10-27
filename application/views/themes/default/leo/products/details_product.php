

<?php 

	if(!isset($this->get_product_categories)){
		
		$this->stores = new Leo_Model();
		
		$store_url_title = $this->storeurl;
		$this->is_store_details = 1;
		$store_url_title;
		$search="";
		
		$this->type = "products";
		$storeurl = $this->storeurl;
		
		if(count($this->product_deatils)==0){
		        common::message(-1, $this->Lang["PAGE_NOT"]);
		        url::redirect(PATH);
		}
		$this->home = new Home_Model();
		$this->about_us_footer = $this->home->get_about_us_footer($storeurl);
		$this->stores = new Stores_Model();
		$this->admin_details = $this->stores->get_admin_details();
		
		$this->product = null;
		
		
		
		foreach($this->product_deatils as $Deal){
						$this->product = $Deal;
                        $this->avg_rating =$this->products->get_product_rating($Deal->deal_id);
                        $this->sum_rating =$this->products->get_product_rating_sum($Deal->deal_id);
                        $this->delivery_details =$this->products->get_product_delivery($Deal->deal_id);
                        $this->all_products_list = $this->products->get_related_category_products_list($Deal->deal_id, $Deal->sec_category_id);
                        $this->products_list_name = $this->Lang['REL_PRODUCT'];
                        if(count($this->all_products_list) < 3){        
                        $this->all_products_list = $this->products->get_hot_all_products_view($Deal->deal_id);
                         $this->products_list_name = $this->Lang['HOT_PRODUCT'];
                                 if(count($this->all_products_list) < 3){ 
                                        $this->all_products_list = $this->products->get_related_category_products_list($Deal->deal_id, $Deal->sec_category_id);
                                         $this->products_list_name = $this->Lang['REL_PRODUCT'];
                                  }
                        }
						
						
						$this->get_product_categories = $this->all_products_list;
						
                        $userflat_deatils = $this->products->get_userflat_amount($Deal->merchant_id);
                        $this->userflat_amount = $userflat_deatils->flat_amount;
                        $this->color_deatils = $this->products->get_color_data($Deal->deal_id);
                        $this->size_deatils = $this->products->get_size_data($Deal->deal_id);
                        $this->product_size = $this->products->get_product_one_size($Deal->deal_id);
                        $this->product_color = $this->products->get_product_color($Deal ->deal_id);
                        $this->merchant_cms = $this->products->get_merchant_cms($Deal ->merchant_id);
			$this->template->title = $Deal->deal_title."/".$Deal->category_name."/".CURRENCY_SYMBOL.$Deal->deal_value." | ".SITENAME;
			if($Deal->meta_description){
				$this->template->description = $Deal->meta_description;
			}
			if($Deal->meta_keywords){
				$this->template->keywords = $Deal->meta_keywords;
			}
			if($Deal->deal_key){
				$this->template->metaimage = PATH.'images/products/1000_800/'.$Deal->deal_key.'_1.png';
			}
			
			$this->theme_name = $this->products->get_theme_name($Deal->shop_id);
			$this->footer_merchant_details = $this->products->get_merchant_details($Deal->merchant_id);
		}
		$this->storeid = $this->products->get_store_id($storeurl);
		
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

<link href="<?php echo PATH.'themes/'.THEME_NAME.'/font-awesome-4.4.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css" />
 

<div class="mens">
  <div class="main">
  
  
  
  
  
    <div class="wrap">
      <ul class="breadcrumb breadcrumb__t">
        <a class="home" href="<?php echo PATH.$this->storeurl;?>">Home</a> / <a href="<?php echo PATH.$this->storeurl."/products.html";?>">Products</a> / <?php echo  $this->product->deal_title; ?>
      </ul>
      <div class="cont span_2_of_3">
        <div class="grid images_3_of_2">
          <ul id="etalage">
              
              
              
              <?php $image_count = 1;
				$products = $this->product;
				for ($i = 1; $i <= 5; $i++) { ?>
							  <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) {
				              $image_count +=1;
				}
				} ?>
                
              
                
              <?php for ($i = 1; $i <=  $image_count; $i++) { ?>
             
               <?php if($image_count == 1 ){?>
                      <li><a href="#">
                       <img class="etalage_source_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
                       
                       
             		   <img class="etalage_thumb_image img-responsive" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/noimage_products_list.png" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo $this->product->deal_title; ?>" />
                      
              
              </a></li>
              
              <?php break; ?>
                
                <?php } ?>
                
              <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_' . $i . '.png')) { 
			  					$image_url = PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i.'.png';  
                                $size = getimagesize($image_url);  ?>
              <?php if(($size[0] > PRODUCT_DETAIL_WIDTH) && ($size[1] > PRODUCT_DETAIL_HEIGHT)) { ?>
              <li><a href="#">
              <img class="etalage_source_image img-responsive" style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" src="<?php echo PATH .'images/products/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>"class="etalage_thumb_image img-responsive" src="<?php echo PATH .'images/products/1000_800/'. $this->product->deal_key.'_'.$i.'.png'?>" />
              </a></li>
			  <?php } else { ?>
              <li><a href="#">
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>"  class="etalage_source_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
              <img style="width:<?php echo PRODUCT_DETAIL_WIDTH; ?>; height:<?php echo PRODUCT_DETAIL_HEIGHT?>" class="etalage_thumb_image img-responsive" src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $this->product->deal_key . '_'.$i. '.png' ?>&w=<?php echo PRODUCT_DETAIL_WIDTH; ?>&h=<?php echo PRODUCT_DETAIL_HEIGHT;?>" alt="<?php echo  $this->product->deal_title; ?>" title="<?php echo  $this->product->deal_title; ?>" />
              
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
          <p class="m_5"><?php echo CURRENCY_SYMBOL.$this->product->deal_value; ?>&nbsp;
            <?php if($this->product->deal_value < $this->product->deal_price){?>
            <span class="reducedfrom"><?php echo CURRENCY_SYMBOL.$this->product->deal_price; ?></span>
            <?php } ?>
          </p>
          
          <p>&nbsp;</p>
          <div>
          
          
          
         
         
         
          
          
          
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
                		<p><span class="color_space">&nbsp;</span>
          <i class="color_header">Choose Size</i>
           <span class="color_space">&nbsp;</span>
          <div class="color size">
          
                		<?php foreach ($this->product_size as $size) { ?>
                        			
                        			 <?php if ($size->quantity != 0) { ?>
                                     	<?php $i++;?>
                                     	<a onclick="javascript:select_size('<?php echo $size->size_id;?>', '<?php echo $this->product->deal_id?>', '<?php echo $size->quantity?>' ); return false;" href="#">
                                        <div id="id_leo_size_<?php  echo $size->size_id?>"<?php if(strcmp($size->size_id, $this->session->get('product_size_qty' . $this->product->deal_id)) == 0){?> style ="background-color:#777; color:#FFF; border-color: #777;" <?php }?>>
										
										<?php  $len = strlen($size->size_name);
												$s_name = $size->size_name;
												switch($len){
													case 1:{
														$s_name = "&nbsp;".$s_name."&nbsp;";
														break;
													}
													
													case 2:{
														$s_name = $s_name."&nbsp;";
														break;
													}
													
													case 3:
													default:{
														break;
													}
												}
										 echo $s_name;?>
                                        
                                        
                                        </div></a>	
                                        
                                     <?php }else {?>
                                      <!-- Size sold out -->
									 <?php } ?>
                        <?php } ?>
                        </div>
         				 </p>
				<?php }?>
                
                
		  <?php };?>
         
         <?php $color_count = 0;
		 	if (count($this->product_color) > 0) {
       		 $color_count = 1; ?>
             <?php if($c != 0){?>
             		 <p>&nbsp;</p>
         			 <p>
                     <i class="color_header">Choose Color</i>
                     <span class="color_space">&nbsp;</span>
                     <div class="color">
             		<?php foreach($this->product_color as $color){?>
                    	<a href="#" onclick="select_color('<?php echo $color->color_code_id?>','<?php echo $this->product->deal_id?>'); return false;"><div id="id_leo_selected_color_<?php echo $color->color_code_id;?>" style="background:#<?php echo $color->color_name;?> 
                        <?php if($color->color_code_id == $this->session->get('product_color_qty'.$this->product->deal_id)){?>;border-color:#777 <?php } ?>">&nbsp;</div></a>
					<?php }?>
                    </div></p>
             <?php } ?>
             
		 <?php }?>
          <!--<p>&nbsp;</p>-->
          <!--<p>
          <i class="color_header">Choose Color</i>
           <span class="color_space">&nbsp;</span>
          <div class="color">
          <a href="#"><div style="background:#3C6;">&nbsp;</div></a><a href="#"><div style="background:#936;">&nbsp;</div></a><a href="#"><div style="background:#F0F;">&nbsp;</div></a>
          </div>
          </p>-->
          
          
          
          
             <input type="hidden" name="nosize" id="no_size" value="<?php echo $nosize; ?>">
             <input type="hidden" name="color_count" id="color_count" value="<?php echo $color_count; ?>" />
             <input type="hidden" name="select_color" id="sel_color" value="<?php echo $this->session->get('product_color_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_size" id="sel_size" value="<?php echo $this->session->get('product_size_qty' . $this->product->deal_id); ?>" />
			<input type="hidden" name="select_quantity" id="sel_quant" value="<?php echo $this->session->get('product_quantity_qty' . $this->product->deal_id); ?>" />
          
          <!--<p>
           <span class="color_space">&nbsp;</span>
          <i class="color_header">Choose Size</i>
           <span class="color_space">&nbsp;</span>
          <div class="color size">
          <a href="#"><div>XL</div></a><a href="#"><div >&nbsp; M &nbsp;</div></a><a href="#"><div >XXL</div></a>
          </div>
          </p>-->
          
          <p>&nbsp;</p>
          
           <p class="item_axillary"><a  href="javascript:add_to_wishlist('<?php echo $this->product->deal_id; ?>','<?php echo $this->product->url_title; ?>');"><i title="add to favorites" class="fa fa-heart" ></i>&nbsp;</a> | <a href="javascript:add_to_compare('<?php echo $this->product->deal_id; ?>','','detail');"><i class="fa fa-balance-scale" title="add to compare"></i>&nbsp;</a></p>
         
          </div>
        
          <div class="btn_form">
            <form onSubmit="return false;">
              <input type="submit" id="id_leo_add_to_cart" onClick="leo_add_to_cart();"  value="Add to Cart" title="">
            </form>
            <p>&nbsp;</p>
             <p>&nbsp;</p>
             
          	<i class="rating">
          								<link href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/jRating.jquery.css" rel="stylesheet" type="text/css"/>
                                        <script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/jRating.jquery.js"></script>
                                     	<script type="text/javascript">
                                            $(document).ready(function(){
                                                $(".basic<?php echo $this->product->deal_id; ?>").jRating({
                                                    bigStarsPath : '<?php echo PATH; ?>images/star_03.png', // path of the icon stars.png
                                                    smallStarsPath : '<?php echo PATH; ?>images/small.png', // path of the icon small.png
                                                    phpPath : '<?php echo PATH; ?>product-rating.html', // path of the php file jRating.php
                                                    length : 5,
                                                    rateMax : 5,
                                                    step:true,

                                                    //decimalLength:1,
                                                    showRateInfo: false,
                                                    canRateAgain : true,
                                                    nbRates : 10,
                                                    onError : function(){
														
                                                        //$('.jStar').css({backgroundColor: 'white'});
                                                        //showlogin();
                                                    }
                                                });
                                            });
                                        </script>
                                        <?php if($this->session->get('UserID')){ ?>
                                        <label class="basic<?php echo $this->product->deal_id; ?>" id="<?php echo $this->avg_rating; ?>" title="<?php echo $this->avg_rating; ?> / 5">
                                        <?php } ?>
                                            <!--
                                                    Check the images folder for 'black_star.png' and 'white_star.png'
                                            -->
                                        </label>
                                        <span class="p_rating"><?php echo $this->sum_rating; ?> rating(s)</span>
                                        
                                       
          </i>
            
          </div>
         
         


          <!--<span class="m_link"><a href="#">login to save in wishlist</a> </span>-->
          <!--<p class="m_text2"><?php echo $this->product->deal_description;?>. </p>-->
          <a href="#id_prod_details">
          <p class="m_text2"> View Details</p>
          </a>
          
          
        </div>
        
        <div class="clear"></div>
        <div class="clients">
          <?php if (count($this->get_product_categories) > 0) { ?>
          <h3 class="m_3">
            <?php  echo count($this->get_product_categories); ?>
            Other Product(s) in the same category</h3>
          <ul id="flexiselDemo3">
            <?php if ($this->product_setting) { ?>
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
              <?php if (file_exists(DOCROOT . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png')) { $image_url = PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png';
												$size = getimagesize($image_url); if(($size[0] > PRODUCT_LIST_WIDTH) && ($size[1] > PRODUCT_LIST_HEIGHT)) { ?>
              <img src="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH . 'images/products/1000_800/' . $products->deal_key . '_1' . '.png' ?>&w=<?php echo PRODUCT_LIST_WIDTH; ?>&h=<?php echo PRODUCT_LIST_HEIGHT; ?>" alt="<?php echo $products->deal_title; ?>" title="<?php echo $products->deal_title; ?>" />
              <?php } else { ?>
              <img src="<?php echo PATH .'images/products/1000_800/'.$products->deal_key.'_1'.'.png'?>" />
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
          <?php } ?>
          <!-- Ending 1st if --> 
          
        </div>
      
        <div class="toogle">
          <h3 class="m_3" id = "id_prod_details" >Product Details</h3>
          <p class="m_text"><?php echo $this->product->deal_description;?>.</p>
        </div>
        
      </div>
      <div class="rsingle span_1_of_single swifta">
        <h5 class="m_1">Categories</h5>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Products</option>
          <?php 
				
				
				if($this->product_setting) {
				?>
          <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
                 $cat1 = array_unique($cat);
				 
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
          
          <?php }?>
          <!-- Ending 2nd if -->
          
          <?php }else{ ?>
          <!-- (Ending 1st if) Products custom menu ending here -->
          <option value="4"> No products in this store yet.</option>
          <?php } ?>
          <!-- End else of 1st if -->
          
        </select>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Deals</option>
          <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
                 $cat1 = array_unique($cat);
				 
				?>
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
        <option value="1" onclick="alert(888);"> <a onclick ="alert(22);"> Auctions</a></option>
          <?php 
				$cat = explode(",", substr($this->session->get('categoryID'), 0, -1));
                 $cat1 = array_unique($cat);
				 
				?>
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
			items_c_in = items_c_in + "<i id = 'id_item_no_<?php echo $this->product->deal_id ?>'><li><a href='#'><h3><?php echo $this->product->deal_title; ?></h3><a href=''></a></li><li><p><a onclick='leo_remove_cart_item(<?php echo $this->product->deal_id ?>); return false;' href='#' id='leo_id_remove_cart'>Remove</a></p></li></i>";
			items_c.html(items_c_in);
		
			add_item_to_cart1();
			
			
		
		
		
		
		}
		
		</script>  
<script type="text/javascript">
	function add_item_to_cart1(){
		 
		
	url = "<?php echo PATH ?>/leo/cart_items?deal_id=<?php echo $this->product->deal_id; ?>";
			var sel_color = $('#sel_color').val();
			var sel_size = $('#sel_size').val();
	<?php if($c != 0 && $color_count != 0){?>
			
			if(!sel_size){
				url = "<?php echo PATH ?>/leo/cart_items?sel_size=error";
			}else if(!sel_color){
				url = "<?php echo PATH ?>/leo/cart_items?sel_color=error";
			}
		<?php }?>
		 
	
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
function select_size(size_id, product_id, quantity){
	
	var size_sel = $("#sel_size").val();
	if(size_sel!=size_id){
		var url = "<?php echo PATH; ?>products/addmore_size/"+size_id+"/"+product_id+'/'+quantity;
		$.post(url, function(check){
				
				if(check && !isNaN(check)){
					
					obj_arr = $('.size > a > div');
					for(i = 0; i <  obj_arr.length; i++){
						
						$(obj_arr[i]).css({'background-color':'#FFF', 'color':'#777', 'border-color':'#4CB1CA'});
					}
				
					$('#'+'id_leo_size_'+size_id).css({'background-color':'#777', 'color':'#FFF', 'border-color':'#777'});
					$("#sel_size").val(size_id);
					
					
					
				}
				
				return false;
				
				$(".size_"+check).addClass("act");
				$(".size_"+size_sel).removeClass("act");
				$("#sel_size").val(size_id);
				$("#sel_quant").val(quantity);
				$('.error_size').hide();
                                $('.error_color').hide();
                                $('.error_all').hide();
		});
   }
}



function select_color(color_id, product_id)
{
	var color_sel = $("#sel_color").val();
	if(color_sel!=color_id){
		var url = "<?php echo PATH;?>products/addmore_color/"+color_id+"/"+product_id;
		 $.post(url,function(check){
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

<script type="text/javascript" >
$(document).ready(function(e) {
	
	/*
	$('.jRatingAverage').css({'z-index': 999});
	alert($('.jStar'));
	$('.jRatingAverage').hover(function (e){
		
		$('.jRatingAverage').css({'background':'#F00'});
		
	}, function(e){
		
		$('.jRatingAverage').css({'background':'#FFF'});
		
	});
    
});*/



</script>





    
      
 



