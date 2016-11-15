<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script> 
	function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              $('.processing_image').hide();
              return false;
          } 
}
	</script>
	<SCRIPT language="Javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode        
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
      }
   </SCRIPT>
<div class="bread_crumb"><a href="<?php echo PATH."admin.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
      
        <?php foreach($this->user_data as $u){ ?>
	
        <form method="post" class="admin_form" action = "" onclick="return atleast_onecheckbox(event)" name="edit_users" enctype="multipart/form-data">
                <table>
                
                        <!-- nuban -->
                        <tr class="error_double">
                                <td><label>Zenith Bank Account Number<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input onChange="validateAcc(this.value)" type="text" name="payment_acc" maxlength="10" value="<?php if(!isset($this->form_error['payment_acc']) && isset($this->userPost['payment_acc'])){echo $this->userPost['payment_acc'];}else{ echo $u->nuban; }?>"/>

                                <em><?php if(isset($this->form_error['payment_acc'])){ echo $this->form_error["payment_acc"]; }?></em>
                                
                                <em id="nuban_err"></em>
                                </td>
                        </tr>  
                        
                        <!--<tr>
                                <td><label><?php echo $this->Lang["M_ACC_NO"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input readonly type="text" name="payment_acc" maxlength="255" value="<?php echo $u->nuban;?>"/>
                                <em><?php if(isset($this->form_error['payment_acc'])){ echo $this->form_error["payment_acc"]; }?></em>
                                </td>
                        </tr>-->
                        
                        <!-- company name -->
                        <tr>
                                <td><label>Company Name<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input id="company" placeholder="None retrieved yet. Enter account no. 1st" readonly type="text" name="firstname" maxlength="255" value="<?php if(!isset($this->form_error['firstname']) && isset($this->userPost['firstname'])){echo $this->userPost['firstname'];}else{echo $u->firstname;}?>"/>
                                <em><?php if(isset($this->form_error['firstname'])){ echo $this->form_error["firstname"]; }?></em>
                                
                                </td>
                        </tr>  
                        
                        <!--<tr> 
                                <td><label>Company Name<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="firstname" maxlength="32"  value="<?php echo $u->firstname;?>" autofocus />
                                <em><?php if(isset($this->form_error['firstname'])){ echo $this->form_error["firstname"]; }?></em>
                                </td>
                        </tr>-->
                        
                        <tr> 
                                <td><label>Merchant Name<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="lastname" maxlength="32"  value="<?php echo $u->lastname;?>"/>
                                <em><?php if(isset($this->form_error['lastname'])){ echo $this->form_error["lastname"]; }?></em>
                                </td>
                        </tr>
                        
                        <tr>
                                <td><label><?php echo $this->Lang["EMAIL_F"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="email"  maxlength="255" value="<?php echo $u->email;?>"/>
                                <em><?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?></em>
                                </td>
                        </tr>

                        
                 
                        <tr>
                                <td><label><?php echo $this->Lang["PHONE"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mer_mobile" maxlength="15" value="<?php echo $u->user_phone_number;?>"/>
                                <em><?php if(isset($this->form_error['mer_mobile'])){ echo $this->form_error["mer_mobile"]; }?></em>
                                </td>
                        </tr>
                         
                        <tr>
                                <td><label><?php echo $this->Lang["ADDR1"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mer_address1" maxlength="100" value="<?php echo $u->user_address1;?>"/>
                                </td>
                        </tr>
                        
                        <!--<tr>
                                <td><label><?php echo $this->Lang["ADDR2"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mer_address2" maxlength="100" value="<?php echo $u->user_address2;?>"/>
                                </td>
                        </tr>-->  
                        <input type="hidden" name="address2" value="0"/>
                                                  
                       <tr>
                    <td><label><?php echo $this->Lang["SEL_COUNTRY"]; ?><span>*</span></label></td>
                    <td><label>:</label></td>
                    <td>
                        <select name="country" onchange="return city_change_merchant(this.value);">
                        <option value=""><?php echo $this->Lang["SEL_COUNTRY"]; ?></option>
                        
                        
                        <?php foreach($this->country_list as $d){ ?>
                        <option value="<?php echo $d->country_id ?>" <?php if($d->country_id==$u->user_country_id) { ?> selected="selected" <?php } ?>><?php echo $d->country_name; ?></option>
                          <?php }  ?>
                        </select>
                        <em><?php if(isset($this->form_error["country"])){ echo $this->form_error["country"]; }?></em>
                      
                     </td>
                     </tr>   
                                              
                       <tr id="CitySD">
                    <td><label><?php echo $this->Lang["SEL_CITY"]; ?><span>*</span></label></td>
                    <td><label>:</label></td>
                    <td>
                        <select name="city">
                        <option value="" <?php if($u->city_id==0){ ?>selected="selected" <?php } ?>><?php echo $this->Lang["CITY_FIRST"]; ?></option>
	                <?php foreach($this->city_list as $d){ if($u->user_country_id == $d->country_id) { ?>
	                <option value=<?php echo $d->city_id; ?> <?php if($u->user_city_id==$d->city_id) { ?> selected="selected" <?php  } ?>><?php echo $d->city_name; ?></option>                                     
	                <?php } }  ?> 
                        </select>
                        <em><?php if(isset($this->form_error["city"])){ echo $this->form_error["city"]; }?></em>
					</td>
                        </tr>
                                                                
                       <input type="hidden" name="store_id" value="<?php echo $u->store_id;?>"/>
                      
                      <input type="hidden" name="commission" value="0"/>
                      
                      <input type="hidden" name="mer_address2" value="0"/>
			 
                       <?php foreach($this->shipping_data as $ship){ ?>
                       <tr>
                                <td><label>Shipping method<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td>
                                <table style="border: 1px solid #999; border-collapse: collapse; width:242px;">
                                        <?php if($this->free_shipping_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="free" value="1" <?php if($ship->free){ ?>checked <?php } ?>>Free Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="free" value="<?php echo $ship->free; ?>">
                                        <?php } if($this->flat_shipping_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="flat" value="1" <?php if($ship->flat){ ?>checked <?php } ?>>Flat Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="flat" value="<?php echo $ship->flat; ?>">
                                         <?php } if($this->per_product_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="product" value="1" <?php if($ship->per_product){ ?>checked <?php } ?>>Per product base Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="product" value="<?php echo $ship->per_product; ?>">
                                         <?php } if($this->per_quantity_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="quantity" value="1" <?php if($ship->per_quantity){ ?>checked <?php } ?>>Per quantity base Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="quantity" value="<?php echo $ship->per_quantity; ?>">
                                         <?php } if($this->aramex_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="aramex" value="1" <?php if($ship->aramex){ ?>checked <?php } ?>>Aramex Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="aramex" value="<?php echo $ship->aramex; ?>">
                                        <?php } ?>
                                        </table>
                                </td>
                        </tr>
                       
                       <?php } ?>
			<tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" value="<?php echo $this->Lang['SUBMIT']; ?>" /><input type="button" value="<?php echo $this->Lang['CANCEL']; ?>" onclick='window.location.href="<?php echo PATH?>admin/merchant.html"'/></td>
                        </tr>
                      
                </table>
        </form>
          <?php  }?>
    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>

<script>
 $('.co select').val(25);
 $('.co select').trigger('change');
 
  function validateAcc(val){
	 
	 var $errorField = $('#nuban_err');
	 $errorField.text("");
	 $('.error_double em').text('');
	 
	 if(val === ""){
		$errorField.text('Required to verify and retrieve company name');
	 	return;
	 }
	 
	 val = $.trim(val);
	 if(val === null){
		$errorField.text('Required to verify and retrieve company name');
	 	return;
	 }
	 
	  if(!isValidNumber(val)){
		$errorField.text('Account number should contain only digits [ i.e. 0-9 ].');
	 	return;
	 }
	 
	 if(val.length !== 10){
		$errorField.text('Account number should be 10 digits.');
	 	return;
	 }
		
	console.log("Acc: ", val);
	 var data = {nuban:val};
	 var url = "<?php echo PATH?>users/merchant_registration_validation"
	 $.ajax(
	 {
		  type:'POST',
		  url:url,
		  data:{nuban:val},
		 success: function(response)
		 {
			 console.log("data: ", response);
			 if(response === "1"){
				 console.log("Success: ", "Acc. no. verified, and company name retrieved successfully.");
				 $errorField.text("");
				 getAccountCompany();
			 } else {
				 $errorField.text("Could not verify acc. no.");
			 }
		 },
		 error: function(response) 
		 {
			 console.log("Error: ", "Fatal error occured.");
			 $errorField.text('Fatal error occured. Please try again');
		 }
		 
		 	
	});
 }
 
  function getAccountCompany(){
	 
	 var url = "<?php echo PATH?>users/get_merchant_account_company"
	 $.ajax(
	 {
		 method: "GET",
		 url:url,
		 success: function(response)
		 {
			 console.log("data: ", response);
			 if( response !==  null ){
				 console.log("Success: ", "Acc. co. name retrieved successfully.");
				 $('#company').val(response);
			 } else {
				 $('#company').val("");
				 console.log("Error: ", "Could not retrieve Acc. co. name.");
			 }
		 },
		 error: function(response) 
		 {
			 console.log("Error: ", "Fatal error occured.");
		 }
		 
		 	
	});
 }
 
  function isValidNumber(val){
	  var reg = /^\d+$/;
	  return reg.test(val);
  }
  
 
  
 
</script>
