<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script>
$(document).ready(function(){
$('.hideerror').hide();
 $(".CityPAY_new").hide();
 $("#commentForm_deals").validate({
	 messages: {
		
			firstName: {
			   required: "<?php echo $this->Lang['PLS_ENT_CARD_NAM']; ?>"                         
		   },
		   creditCardNumber: {
			   required: "<?php echo $this->Lang['PLS_ENT_VAL_NO']; ?>" ,
			   creditcard: "<?php echo $this->Lang['PLS_ENT_VAL_NO']; ?>"                         
		   },
		   cvv2Number: {
			   required: "<?php echo $this->Lang['PLS_ENT_NO']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
								   
		   },
		   address1: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		   city : {
			   required: "<?php echo $this->Lang['PLS_ENT_CITY']; ?>"                         
		   },
		   state : {
			   required: "<?php echo $this->Lang['PLS_ENT_STATE']; ?>"                         
		   },
		   zip : {
			   required: "<?php echo $this->Lang['PLS_ENT_ZIP']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
			
			shipping_name: {
			   required: "<?php echo $this->Lang['PLS_ENT_NAM']; ?>"                         
		   },
		  
		   shipping_adderss1: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		    
		    shipping_state : {
			   required: "<?php echo $this->Lang['PLS_ENT_STATE1']; ?>"                         
		   },
		   shipping_postal_code : {
			   required: "<?php echo $this->Lang['PLS_ENT_ZIP']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
		  shipping_phone : {
			   required: "<?php echo $this->Lang['PLZ_ETR_PHO']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
    },
 submitHandler: function(form) {
                if (document.getElementById('ship_cityp2').value == ' ') { 
                        $('.hideerror').show();
                        $('div#submit').show();
                        return false; 
                }    else {
                $('div#submit').hide();
                form.submit();
                }
            }
});

$("#shipping_address").change(function() { 
                $(".CityPAY").show();
	     $(".CityPAY_new").hide();
		if($(this).is(':checked')) { 
			 $("#ship_nam1").val($("#ship_nam").val());
			 $("#ship_addr2").val($("#ship_address2").val());
			 $("#ship_postal_code1").val($("#ship_zipcode").val());
			 $("#ship_addr1").val($("#ship_address1").val()); 
			  $("#ship_cityp1").val($("#ship_city").val());
			  city_change_payment($("#ship_country").val());
			 $("#ship_countryp1").val($("#ship_country").val());
			 $("#ship_state1").val($("#ship_state").val());
			 $("#ship_phone1").val($("#ship_phone").val());
			
		} else { 
			 $("#ship_nam1").val('');
			 $("#ship_addr2").val('');
			 $("#ship_postal_code1").val('');
			 $("#ship_addr1").val('');
			 $("#ship_state1").val('');
			 city_change_payment("");
			  $("#ship_cityp1").val('');
			 $("#ship_countryp1").val('');
			 $("#ship_phone1").val('');
		
		
	}
	});
	

});
</script>
<?php  foreach($this->deals_payment_deatils as $payment) {  ?>
<form name="payment" method="POST" id="commentForm_deals" action="<?php echo PATH;?>auction_paypal/dodirectpayment">
	<input name="P_QTY" id="PC_QTY_VAL" value="1" type="hidden" >
	<input name="deal_id"  type="hidden" value="<?php echo $payment->deal_id; ?>" >
	<input name="merchant_id"  type="hidden" value="<?php echo $payment->merchant_id; ?>" >
	<input name="bid_id"  type="hidden" value="<?php echo $this->bid_id; ?>" >
	<input name="deal_key" type="hidden" value="<?php echo $payment->deal_key; ?>" >
	<input name="url_title" type="hidden" value="<?php echo $payment->url_title; ?>" >
	<input name="deal_value" type="hidden" value="<?php echo $payment->deal_value; ?>" >
	<input name="shipping_amount"  type="hidden" value="<?php echo $payment->shipping_fee; ?>" >
	<input name="amount" id="PC_AMOUNT"  type="hidden" value="<?php echo $this->current_bid_value; ?>" >     
  
				
				<!--content start-->
                    
                        <h3 class="paybr_title pay_titlebg"><?php echo $this->Lang['ACC_INFO']; ?></h3>
                        <div class="p_inner_block">
                        <div class="payment_form_block clearfix">                                                       
                                <div class="payment_form">
                                    <ul>
                                        <li>
                                            <label>  <?php echo $this->Lang['CAR_HOLDER']; ?> :<span class="form_star">*</span></label>
                                            <div class="fullname">
                                                <input type="text" value="" autofocus tabindex="1" maxlength="35" AUTOCOMPLETE="OFF"  name="firstName" class="required" placeholder="<?php echo $this->Lang['ENTER_CAR_HOLDER']; ?>"/>
                                            </div>
                                            <em><?php if(isset($this->form_error['firstName'])){ echo $this->form_error["firstName"]; }?></em>
                                        </li>
                                        <li>
                                            <label><?php echo $this->Lang['CARD_NUMBER']; ?>:<span class="form_star">*</span></label>
                                            <div class="fullname">
                                                <input type="text" maxlength="19" tabindex="2" AUTOCOMPLETE="OFF" name="creditCardNumber" class="required creditcard" placeholder="<?php echo $this->Lang['ENTER_CARD_NUMBER']; ?>"/>
                                            </div>
                                            <em><?php if(isset($this->form_error['creditCardNumber'])){ echo $this->form_error["creditCardNumber"]; }?></em>
                                            <div class="security_cards_img">   </div>   
                                        </li>
                                        
                                         <li>
                                            <label><?php echo $this->Lang['EXPI_DATE']; ?>:<span class="form_star">*</span></label>
                                            <div class="exp_date_outer"><div class="expir_date"> 
												<select name=expDateMonth tabindex="3">
													<?php for($m=1; $m<=12; $m++){ ?>
														<option value="<?php echo $m;?>" <?php if(date("n",time()) == $m){echo "Selected";}?>><?php echo $m;?></option>
													<?php } ?>
									  			</select>
                                            </div>
                                                <div class="expir_date"> 
													<select name=expDateYear tabindex="4">
														<?php for($y=2012; $y<=2024; $y++){ ?>
															<option value="<?php echo $y;?>"   <?php if(date("Y",time()) == $y){echo "Selected";}?>><?php echo $y;?></option>
														<?php } ?>
													</select>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <label><?php echo $this->Lang['SECU_CODE']; ?> :<span class="form_star">*</span></label>
                                            <div class="security_code_outer">
                                                <div class="security_code">
                                                    <input type="password" maxlength="4" tabindex="5" AUTOCOMPLETE="OFF"  name="cvv2Number" class="required number" placeholder="<?php echo $this->Lang['ENTER_SECU_CODE']; ?>"/>
                                                </div>
                                                 <div class="card_img">  </div>
                                                <em><?php if(isset($this->form_error['cvv2Number'])){ echo $this->form_error["cvv2Number"]; }?></em>
                                               
                                                
                                            </div>


                                        </li>

                                       
                                    </ul>

                                </div>

                                <div class="payment_form">
                                    <ul>
                                        <li>
                                            <label> <?php echo $this->Lang['BILL_ADD']; ?> :<span class="form_star">*</span></label>
                                            <div class="fullname">
                                                <input tabindex="6" type="text" maxlength="100" AUTOCOMPLETE="OFF"  name="address1" class="required" placeholder="<?php echo $this->Lang['ENTER_BILL_ADD']; ?>" />
                                            </div>
                                            <em><?php if(isset($this->form_error['address1'])){ echo $this->form_error["address1"]; }?>	</em>
                                        </li>
                                        <li>
                                            <label><?php echo $this->Lang['CITY']; ?> :<span class="form_star">*</span></label>
                                            <div class="fullname">
                                                <input tabindex="7" type="text" maxlength="40" AUTOCOMPLETE="OFF"  name="city" class="required" placeholder="<?php echo $this->Lang['ENTER_CITY']; ?>"/>
                                            </div>
                                            <em><?php if(isset($this->form_error['city'])){ echo $this->form_error["city"]; }?></em>
                                        </li>
                                        <li>
											<label><?php echo $this->Lang['STATE_PROVINCE']; ?> :<span class="form_star">*</span></label>
											<div class="fullname">
												<input type="text" tabindex="8" maxlength="2" AUTOCOMPLETE="OFF"  name="state" class="required" placeholder="<?php echo $this->Lang['ENTER_STATE_PROVINCE']; ?>"/>
											</div>
											<em><?php if(isset($this->form_error['state'])){ echo $this->form_error["state"]; }?></em>     
                                            
                                        </li>

                                        <li>
											<label><?php echo $this->Lang['POSTAL_CODE']; ?> :<span class="form_star">*</span></label>
											<div class="fullname">
												<input tabindex="9" type="text" maxlength="10" name="zip" AUTOCOMPLETE="OFF"  class="required number" placeholder="<?php echo $this->Lang['ENTER_POSTAL_CODE']; ?>" />
											</div>
											<em><?php if(isset($this->form_error['zip'])){ echo $this->form_error["zip"]; }?></em>
                                            
                                        </li>
                                    </ul>
                                </div>
                            

                        </div>
                        <div class="payment_form_block clearfix">
                            <h3 class="type_form_sub_title"><?php echo $this->Lang['SHIPPING_INFO']; ?></h3>
                             <div class="shipping_copy_address">
                                <input type="checkbox" id="shipping_address" tabindex="10" />
                               <label><?php echo $this->Lang['COPY_SHIP_ADDR']; ?></label>
                            </div>							 
                            <div class="payment_form_section clearfix">
                                <div class="payment_form payment_shipping_form">
                                    <ul>
                                        <li>
                                            <label> <?php echo $this->Lang['NAME']; ?>  :<span class="form_star">*</span></label>
                                            <div class="fullname"><input tabindex="11" id="ship_nam1" name="shipping_name" size="40" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" type="text" value="" class="required" maxlength="50"/>
                                            </div>
                                        </li>
                                        <li>
											<label><?php echo $this->Lang['ADDR1']; ?> :<span class="form_star">*</span></label>
												<div class="fullname"><input tabindex="12" id="ship_addr1" name="shipping_adderss1" size="40" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" type="text" value="" class="required" maxlength="100"/></div>
                                           
                                        </li>
                                        <li class="frm_clr">
                                            <label> <?php echo $this->Lang['ADDR2']; ?>  :</label>
                                            <div class="fullname"><input tabindex="13" id="ship_addr2" name="shipping_address2" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" type="text" value="" size="40"  maxlength="100"/>
                                            </div>
                                        </li>
                                        <li>
                            <label><?php echo $this->Lang['COUNTRY']; ?> :<span class="form_star">*</span> </label>
                            <div class="fullname">
                                <select name="shipping_country" id="ship_countryp1" tabindex="14" onchange="return city_change_payment(this.value);" >
                                  <option value=""><?php echo $this->Lang['SELECT_Y_COUNTRY']; ?></option>
                    <?php foreach ($this->all_country_list as $countryL) { ?>
                                        <option  value="<?php echo $countryL->country_name; ?>"><?php echo ucfirst($countryL->country_name); ?></option>
    <?php } ?>
                                </select>

                        </li>           
                        <li class="frm_clr">
                            <label><?php echo $this->Lang['SEL_CITY']; ?> :<span class="form_star">*</span></label>
                            <div class="fullname">
                                <select name="shipping_city"  id="ship_cityp1" tabindex="15" class="CityPAY required">
                                <option value=""><?php echo $this->Lang['COUNTRY_FIRST']; ?></option>
                                    <?php 
                                    foreach ($this->all_city_list as $CityL) {
                                        ?>
                                        <option  value="<?php echo $CityL->city_id; ?>"><?php echo ucfirst($CityL->city_name); ?></option>
    <?php } ?>
                                </select>
                                
 <div class="hideerror" id="city_validation">This Field Is Required.</div>    
                            </div>

                        </li>
                                        <li>
                                            <label><?php echo $this->Lang['STATE']; ?> :<span class="form_star">*</span> </label>
												<div class="fullname"><input tabindex="16" id="ship_state1" name="shipping_state" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_STATE']; ?>" type="text" value="" size="40" class="required" maxlength="256"/></div>
                                        </li>                                        
											
										<li class="frm_clr">
                                            <label><?php echo $this->Lang['POSTAL_CODE']; ?> :<span class="form_star">*</span></label>
												<div class="fullname"><input tabindex="17" id="ship_postal_code1" name="shipping_postal_code" size="40" AUTOCOMPLETE="OFF"  placeholder="<?php echo $this->Lang['ENTER_POSTAL_CODE']; ?>" type="text" value="" class="required number" maxlength="8"/></div>
                                        </li>	
										<li>
												<label><?php echo $this->Lang['PHONE']; ?> :<span class="form_star">*</span></label>
												<div class="fullname"><input tabindex="18" id="ship_phone1" name="shipping_phone" size="40" AUTOCOMPLETE="OFF"  placeholder="Your Phone Number (e.g. 070..,080..)" type="text" value="" class="required number" maxlength="18"/></div>
										</li>

                                    </ul>
                                </div>
                                    <div class="buy_it complete_order_button" id="submit">                                        
                                        <input type="submit" tabindex="19" value="<?php echo $this->Lang['COMP_ODR']; ?>" title="<?php echo $this->Lang['COMP_ODR']; ?>" />												
                                    </div> 
                                    <?php if(count($this->cms_tc) > 0){ ?>
                                    <div class="payment_terms_outer"><p class="terms-conditons-text"> <span class="fl font_myriad_pro"><?php echo $this->Lang['BY_CLICK']; ?> </span> <a onclick="show_dis_tc();"  tabindex="20" title="<?php echo $this->Lang['TEMRS']; ?>" class="font_myriad_pro mt5"><?php echo $this->Lang['TEMRS']; ?>.</a></p> </div>
                                    <?php } ?>
                            </div>

                        </div>
                    
                    
                    <!--end-->
                        </div>                
</form>
<?php } ?>
				
