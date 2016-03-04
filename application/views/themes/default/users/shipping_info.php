<div class="contianer_outer1">
    <div class="contianer_inner">
        <div class="contianer">
            <div class="bread_crumb">
                <ul>
                    <li><p><a href="<?php echo PATH; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang['HOME']; ?></a></p></li>
                    <li><p><?php echo $this->Lang['MY_SHIPPING_ADD']; ?></p></li>
                </ul>
            </div>

            <!--content start-->
            <div class="content_abouts">
                <div class="all_mapbg_mid_common">
                    <div class="content_abou_common">
                        <div class="pro_top5">
                            <div class="common_ner_commont1">
                                <div class="common_ner_commont">     

                                    <h2><?php echo $this->Lang['MY_SHIPPING_ADD']; ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="all_mapbg_mid">   
                            <div class="myemai_mnu">
                                <div class="top_menu myemail_subbor">
                                    <a class="tab_navicon" href="#" title="Menu">Menu</a>
                                    <ul class="tab_nav">
                                    
                                        <li   >
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/my-account.html" title="<?php echo $this->Lang['MY_ACC']; ?>"><?php echo $this->Lang['MY_ACC']; ?></a></div>
                                            <div class="tab_rgt"></div>
                                        </li>
                                        
                                        <li>
                                        <div class="tab_left"></div>
                                        <div class="tab_mid"><a href="<?php echo PATH; ?>wishlist.html" title="<?php echo $this->Lang['MY_WISH']; ?>"><?php echo $this->Lang['MY_WISH']; ?></a></div>
                                        <div class="tab_rgt"></div>
                                    </li>
                                    
                                        <li>
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/my-coupons.html" title="<?php echo $this->Lang['MY_BUYS']; ?>"><?php echo $this->Lang['MY_BUYS']; ?></a></div>
                                            <div class="tab_rgt"></div>
                                        </li>
                                        <!--<li>
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/my-referral-list.html" title="<?php echo $this->Lang['MY_REFERAL']; ?>"><?php echo $this->Lang['MY_REFERAL']; ?></a></div>
                                            <div class="tab_rgt"></div>
                                        </li>-->
                                        
                                        <li>
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/email-subscribtions.html" title="<?php echo $this->Lang['MY_ELAL_SUB']; ?>"><?php echo $this->Lang['MY_ELAL_SUB']; ?></a></div> 
                                            <div class="tab_rgt"></div>
                                        </li>
                                        <li>
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/my-winner-list.html" title="<?php echo $this->Lang['WON_AUC']; ?>"><?php echo $this->Lang['WON_AUC']; ?></a></div> 
                                            <div class="tab_rgt"></div>
                                        </li>

                                        <li class="tab_act">
                                            <div class="tab_left"></div>
                                            <div class="tab_mid"><a href="<?php echo PATH; ?>users/my-shipping-address.html" title="<?php echo $this->Lang['MY_SHIPPING_ADD']; ?>"><?php echo $this->Lang['MY_SHIPPING_ADD']; ?></a></div> 
                                            <div class="tab_rgt"></div>
                                        </li>
                                         <?php  if($this->session->get('user_auto_key')) { ?>
                                        <li>
                                            <div class="tab_left"></div>
                                             <div class="tab_mid"><a href="<?php echo PATH;?>users/my-storecredit-purchase.html" title="<?php echo $this->Lang['STR_CRD_PURCH']; ?>"><?php echo $this->Lang['STR_CRD_PURCH']; ?></a></div>
                                            <div class="tab_rgt"></div>
                                        </li>
                                        <li >
                                            <div class="tab_left"></div>
                                             <div class="tab_mid"><a href="<?php echo PATH;?>users/my-storecredits.html" title="<?php echo $this->Lang['MY_STR_LIST']; ?>"><?php echo $this->Lang["MY_STR_LIST"]; ?></a></div>
                                            <div class="tab_rgt"></div>
                                        </li>
                                        <?php } ?>
                                    </ul>                                                                
                                </div> 
                            </div>
                        </div>
                        <div class="mybuys_content mybuys_products">                             
                            <?php foreach ($this->user_detail as $u) { ?>
                                <form method="post" class="admin_form" name="edit_users"  >
                                    <div class="payment_form_block clearfix">
                                        <div class="payment_form_section">
                                            <div class="payment_form payment_shipping_form">
                                                <p class="mandarory_txt"><span>*</span> = <?php echo $this->Lang['ALL_MANDATORY']; ?></p>
                 <ul class="clearfix">   
                                                                  
                    <li class="left">
                    
                        <label><?php echo $this->Lang['NAME']; ?> :<span class="form_star">*</span></label>
                        <div class="fullname"><input id="ship_nam_p1"  name="shipping_name" size="40" tabindex="2" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" type="text" value="<?php if($this->session->get('shipping_name')){ echo $this->session->get('shipping_name'); } ?>" class="required" maxlength="35" autofocus /></div>
                    </li>                             
                   	<li class ="right">
                        <label><?php echo $this->Lang['STATE']; ?> :<span class="form_star">*</span> </label>
                        <div class="fullname">
                            <select name="city"  id="ship_city_p1" tabindex="6" class="CityPAY required">
                            <option value="-99">Select state</option>
                            <?php if($this->session->get('shipping_city')){ ?>
                                <?php foreach ($this->all_city_list as $CityL) {  ?>                                
                                    <option <?php if ($CityL->city_id == $this->session->get('shipping_city')) {
                                        echo 'Selected="true"';
                                    }  ?> value="<?php echo $CityL->city_id; ?>"><?php echo ucfirst($CityL->city_name); ?></option>
                                <?php } ?>
                                <?php } else { ?>
                                <?php foreach ($this->all_city_list as $CityL) {  ?>                                
                                    <option <?php if ($CityL->city_url == $this->input->get('city')) {
                                        echo 'Selected="true"';
                                    }  ?> value="<?php echo $CityL->city_id; ?>"><?php echo ucfirst($CityL->city_name); ?></option>
                                <?php } ?>
                                
                                <?php } ?>
                            </select>
                            
                        </div>                        
                    </li>
                    
                    <li class="left">
                        <label><?php echo $this->Lang['ADDR1']; ?> :<span class="form_star">*</span></label>
                        <div class="fullname"><input id="ship_addr_p1" name="address1" tabindex="3" size="40" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" type="text" value="<?php if($this->session->get('shipping_address1')){ echo $this->session->get('shipping_address1'); } ?>" class="required" maxlength="100"/></div>
                    </li>
                    <li class="right">
                        <label><?php echo $this->Lang['COUNTRY']; ?> :<span class="form_star">*</span></label>
                        <div class="fullname">
                        <input type="text" value="Nigeria" readonly />
                        <input type="hidden" name="country" value="25" />
                        
                        </div>
                    </li>
                    
                    <li class="left">
                        <label><?php echo $this->Lang['ADDR2']; ?> : </label>
                        <div class="fullname"><input id="ship_addr_p2" name="address2" tabindex="4" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" type="text" value="<?php if($this->session->get('shipping_address2')){ echo $this->session->get('shipping_address2'); } ?>" size="40"  maxlength="100"/></div>
                    </li>
                    <li class="right">
                        <label><?php echo $this->Lang['PHONE']; ?> :<span class="form_star">*</span></label>
                        <div class="fullname"><input id="ship_phone_p1" name="phone" tabindex="9" size="40" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" type="text" value="<?php if($this->session->get('shipping_phone')){ echo $this->session->get('shipping_phone'); } ?>" class="required number" maxlength="16"/></div>
                        <em id="id_err_phone"></em>
                    </li>
                    
                    <li class="left">
                        <label>City :<span class="form_star">*</span></label>
<div class="fullname"><input id="ship_state_p1"  name="state" tabindex="7" AUTOCOMPLETE="OFF"  placeholder="Enter your city name here" type="text" value="<?php if($this->session->get('shipping_state')){ echo $this->session->get('shipping_state'); } ?>" size="40" class="required" maxlength="100"/></div>

                    </li>
                    <li class="right">
                        <label><?php echo $this->Lang['POSTAL_CODE']; ?> :</label>
                        <div class="fullname"><input id="ship_postal_code_p1" class="ignore required number"
                        name="postal_code" tabindex="8" size="40" AUTOCOMPLETE="OFF"  
                        placeholder="<?php echo $this->Lang['ENTER_POSTAL_CODE']; ?>" 
                        type="text" value="<?php if($this->session->get('shipping_postal_code')){ 
                            echo $this->session->get('shipping_postal_code'); } ?>" 
                            maxlength="8"/></div>
                    </li>
                    
                    </ul>

                                            </div> 
                                        </div>
                                        <div class="buy_it complete_order_button ">
                                            <input name="Submit" type="submit" value="<?php echo $this->Lang['UPDATE']; ?>" title="<?php echo $this->Lang['UPDATE']; ?>" class="preview_but" />            
                                        </div>   
                                    </div>

                                </form> 
<?php } ?>     

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>

var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".tab_nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		}
	});
	
	$(".tab_navicon").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".tab_nav").slideToggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 960 ) {
		$(".tab_navicon").css("display", "inline-block");
		if (!$(".tab_navicon").hasClass("active")) {
			$(".tab_nav").hide();
		} else {
			$(".tab_nav").show();
		}
		$(".tab_nav li").unbind('mouseenter mouseleave');
		$(".tab_nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 960) {
		$(".tab_navicon").css("display", "none");
		$(".tab_nav").show();
		$(".tab_nav li").removeClass("hover");
		$(".tab_nav li a").unbind('click');
		$(".tab_nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}


</script>
