        <section class="navbar main-menu">
                <div class="navbar-inner main-menu">				
                        <nav id="menu" class="pull-right">
                                    
                                    
                                    
                                    
                                                                                                                                   
                        <?php if(isset($this->is_home)||isset($this->is_product)||isset($this->is_todaydeals)||isset($this->is_auction)){ ?>
                        <?php if(isset($this->is_details)){ ?>
                        
                        <?php } else { ?>
                        
		        
		        <?php } } else { ?>
		        
		        <?php } ?>
                            
			        <li <?php
				        if (isset($this->is_home)) {
					        echo "class='active'";
				        }
				        ?>>

				        <a href="<?php echo PATH.$this->storeurl; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?>
				        </a>
			        </li>

        <?php if ($this->product_setting) { ?>

        <li class="<?php if (isset($this->is_product)) echo "active"; ?>"> <a href="<?php echo PATH.$this->storeurl; ?>/products.html" title="<?php echo $this->Lang['PRODUCTS']; ?>"><?php echo $this->Lang['PRODUCTS']; ?>

        </a>
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
								<!--<h2><?php echo ucfirst($d->category_name); ?></h2>-->
								<ul>
									<?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a href="javascript:filtercategory_store('<?php echo $sub_cate->category_url; ?>', 'products', '<?php echo base64_encode("sub"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
									<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
									<li ><a href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'products', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									<?php break;}
									}
									
									}
									}?>
								</ul>
					<?php }}}?>
         </li>



        <?php } ?>

        <?php if ($this->deal_setting) { ?>
        <li class="<?php if (isset($this->is_todaydeals)) echo "active"; ?> "><a href="<?php echo PATH.$this->storeurl; ?>/today-deals.html" title="<?php echo $this->Lang['DEALS']; ?>">
	        <?php echo $this->Lang['DEALS']; ?>
        </a>
        <?php $de = 0; $dea = 0;  $val_de ="";
        foreach ($this->categeory_list_deal as $d) {
		        //$check_sub_cat = common::get_subcat_count($d->category_id, 2, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
		        $check_sub_cat = $d->deal_count;
		        $val_de .= $check_sub_cat.","; 
		        if($check_sub_cat != 0){
		        $dea = $de + 1;
		        $de ++;
		        } }
		        $arr_deal = explode(",", substr($val_de,0,-1));
        ?>
 
				<?php if($this->categeory_list_deal){  
					foreach ($this->categeory_list_deal as $d) {
						$check_sub_cat = $d->deal_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
								<!--<h2><?php echo ucfirst($d->category_name); ?></h2>-->
								<ul>
									<?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a href="javascript:filtercategory_store('<?php echo $sub_cate->category_url; ?>', 'deal', '<?php echo base64_encode("sub"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
									<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
									<li class="cate_view_more"><a href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'deal', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									<?php break;}
									}
									
									}
									}?>
								</ul>

					<?php }}}?>   
        </li>


        <?php } ?>

        <?php if ($this->auction_setting) { ?>
        <li class="<?php if (isset($this->is_auction)) echo "active"; ?>"><a href="<?php echo PATH.$this->storeurl; ?>/auction.html" title="<?php echo $this->Lang['AUCTION']; ?>">
        <?php echo $this->Lang['AUCTION']; ?>

        </a>
        <?php $au = 0; $aut = 0; $val = "";
        foreach ($this->categeory_list_auction as $d) {
        //$check_sub_cat = common::get_subcat_count($d->category_id, 4, "main", $d->category_url); /*   COUNT OF SUBCATEGORY   */
        $check_sub_cat = $d->auction_count;
        $val .= $check_sub_cat.","; 
        if($check_sub_cat != 0){
        $aut = $au + 1;
        $au ++;
        } }
        $arr_auction = explode(",", substr($val,0,-1));
        ?>
				<?php if($this->categeory_list_auction){  
					foreach ($this->categeory_list_auction as $d) {
						$check_sub_cat = $d->auction_count;
						if(($check_sub_cat !=-1 )&&($check_sub_cat !=0)) { ?>
								<h2><?php echo ucfirst($d->category_name); ?></h2>
								<ul>
									<?php if(count($this->subcategories_list)>0){
										$hdn_second_cnt = 1;
										foreach($this->subcategories_list as $sub_cate){
											if($sub_cate->main_category_id == $d->category_id){
												if($hdn_second_cnt<5){?>
												<li><a href="javascript:filtercategory_store('<?php echo $sub_cate->category_url; ?>', 'auction', '<?php echo base64_encode("sub"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo ucfirst($sub_cate->category_name);?></a></li> 
									<?php $hdn_second_cnt++;}
									if($hdn_second_cnt==5){?>
									<li class="cate_view_more"><a href="javascript:filtercategory_store('<?php echo $d->category_url; ?>', 'auction', '<?php echo base64_encode("main"); ?>','<?php echo $this->storeurl; ?>');" title="<?php echo ucfirst($sub_cate->category_name);?>"><?php echo $this->Lang['VIW_MRE'];?></a></li> 
									<?php break;}
									}
									
									}
									}?>
								</ul>
					<?php }}}?>
        </li>
        <?php } ?>

        <?php if ($this->past_deal_setting) { ?>

	        <li <?php
		        if (isset($this->is_soldout)) {
			        echo "class='active'";
		        }
		        ?>>
		        <a  href="<?php echo PATH.$this->storeurl; ?>/soldout.html" title=" <?php echo $this->Lang['SOLD_OUT2']; ?>">
			        <?php echo $this->Lang['SOLD_OUT2']; ?>
		        </a>
	        </li>
        <?php } ?>

        <?php if ($this->store_setting) { ?>
	        <li <?php
		        if (isset($this->is_store)) {
			        echo "class='active'";
		        }
		        ?>>
		        <a href="<?php echo PATH; ?>stores.html" title="<?php echo $this->Lang['STORES']; ?>">
			        <?php echo $this->Lang['STORES']; ?>
		        </a></li>
        <?php } ?>
        <?php if (($this->deal_setting == 1 || $this->product_setting == 1 || $this->auction_setting == 1 ) && $this->map_setting) { ?>
	        <li <?php
		        if (isset($this->is_map)) {
			        echo "class='active'";
		        }
		        ?>>
		        <a href="<?php echo PATH; ?>near-map.html" title="<?php echo $this->Lang['NEAR_MAP']; ?>">
			        <?php echo $this->Lang['NEAR_MAP']; ?>
		        </a>
	        </li>
        <?php } ?>

        <?php if ($this->blog_setting) { ?>
        <li <?php
	        if (isset($this->is_blog)) {
		        echo "class='active'";
	        }
	        ?>>
	        <a href="<?php echo PATH; ?>blog" title="<?php echo $this->Lang['BLOG']; ?>">
		        <?php echo $this->Lang['BLOG']; ?>
	        </a>
        </li>
        <?php } ?>
                                        
                                        
                                        
                                </ul>
                        </nav>
                </div>
        </section>