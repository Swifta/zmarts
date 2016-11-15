<?php defined('SYSPATH') OR die('No direct access allowed.'); ?><head>
	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>css/map/jquery-gmaps-latlon-picker.css"/>
	<script src="<?php echo PATH; ?>js/map/jquery-gmaps-latlon-picker.js"></script>
	<SCRIPT language="Javascript">
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode        
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
         return true;
      }
   </SCRIPT>
	
</head>
<script> 
	function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              return false;
          }
}
	</script>



 <div class="bread_crumb"><a href="<?php echo PATH.'admin.html'; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
    <div class="gllpLatlonPicker">
            <form method="post" onclick="return atleast_onecheckbox(event)" class="admin_form" enctype="multipart/form-data">
    		<div class="mergent_det">
            <fieldset>
            <legend><?php echo $this->Lang["MERCHANT_ACC"]; ?></legend>

                <table>
                
                	    <!-- nuban -->
                        <tr class="error_double">
                                <td><label>Zenith Bank Account Number<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input onChange="validateAcc(this.value)" type="text" name="payment_acc" maxlength="10" value="<?php if(!isset($this->form_error['payment_acc']) && isset($this->userPost['payment_acc'])){echo $this->userPost['payment_acc'];}?>"/>

                                <em><?php if(isset($this->form_error['payment_acc'])){ echo $this->form_error["payment_acc"]; }?></em>
                                
                                <em id="nuban_err"></em>
                                </td>
                        </tr>  
                        <!-- company name -->
                        <tr>
                                <td><label>Company Name<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input id="company" placeholder="None retrieved yet. Enter account no. 1st" readonly type="text" name="firstname" maxlength="255" value="<?php if(!isset($this->form_error['firstname']) && isset($this->userPost['firstname'])){echo $this->userPost['firstname'];}?>"/>
                                <em><?php if(isset($this->form_error['firstname'])){ echo $this->form_error["firstname"]; }?></em>
                                
                                </td>
                        </tr>  
                       <!-- 1st name -->
                        <tr>
                                <td><label>Full Name<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input autofocus type="text" name="lastname" maxlength="32"  value="<?php if(!isset($this->form_error['lastname']) && isset($this->userPost['lastname'])){echo $this->userPost['lastname'];}?>"/>
                                <em><?php if(isset($this->form_error['lastname'])){ echo $this->form_error["lastname"]; }?></em>
                                </td>
                        </tr>
                        
                       <!-- email -->
                        <tr>
                                <td><label>Email<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="email" maxlength="255" value="<?php if(!isset($this->form_error['email']) && isset($this->userPost['email'])){echo $this->userPost['email'];}?>"/>
                                <em><?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?></em>
                                </td>
                        </tr>
                       <!-- phone -->
                        <tr>
                                <td><label><?php echo $this->Lang["PHONE"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>

                                <td><input type="text" name="mr_mobile" maxlength="15"  value="<?php if(!isset($this->form_error['mr_mobile']) && isset($this->userPost['mr_mobile'])){echo $this->userPost['mr_mobile'];}?>"/>
                                <em><?php if(isset($this->form_error['mr_mobile'])){ echo $this->form_error["mr_mobile"]; }?></em>
                                </td>
                        </tr>
                       <!-- address -->
                        <tr>
                                <td><label>Address<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mr_address1" maxlength="100" value="<?php if(isset($this->userPost['mr_address1'])){echo $this->userPost['mr_address1'];}?>"/>
                                <em><?php if(isset($this->form_error['mr_address1'])){ echo $this->form_error["mr_address1"]; }?></em>
                                </td>
                        </tr>
                      
  
                       <!-- shipping methods -->
                        <tr>
                                <td><label>Shipping method<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td>
                                 <table style="border: 1px solid #999; border-collapse: collapse; width:242px;">
                                        <?php if($this->free_shipping_setting == 1){ ?>
                                       <tr><td> <input type="checkbox" name="free" value="1" checked>Free Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="free" value="0" >
                                        <?php } if($this->flat_shipping_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="flat" value="1" checked>Flat Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="flat" value="0" >
                                         <?php } if($this->per_product_setting == 1){ ?>
                                       <tr><td> <input type="checkbox" name="product" value="1" checked>Per product base Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="product" value="0" >
                                         <?php } if($this->per_quantity_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="quantity" value="1" checked>Per quantity base Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="quantity" value="0" >
                                         <?php } if($this->aramex_setting == 1){ ?>
                                        <tr><td><input type="checkbox" name="aramex" value="1" checked>Aramex Shipping</td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="aramex" value="0" >
                                        <?php } ?>
                                 </table>
                                 </td>
                        </tr>
                        
                       </table>
            
                       </fieldset>
                       </div>
                       <div class="mergent_det2">
                       <fieldset>
                       <legend><?php echo $this->Lang["STORE_DETAILS"]; ?></legend>
     
                     <table>
                       
                         <!-- store name -->
                         <tr class="error_double2">
                                <td width="110px;"><label><?php echo $this->Lang["STORE_NAME"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input onChange="checkStoreName(this.value)" type="text" name="storename" maxlength="255"  value="<?php if(!isset($this->form_error['storename']) && isset($this->userPost['storename'])){echo $this->userPost['storename'];}?>"/>
                                <em><?php if(isset($this->form_error['storename'])){ echo $this->form_error["storename"]; }?></em>
                                <em id="store_err"></em>
                                </td>
                        </tr>
                        
                         <!-- username x -->
                         <!--<tr>
                                <td><label>Username<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="username" maxlength="255" value="<?php if(!isset($this->form_error['username']) && isset($this->userPost['username'])){echo $this->userPost['username'];}?>" />
                                <em><?php if(isset($this->form_error['username'])){ echo $this->form_error["username"]; }?></em>
                                </td>
                        </tr>-->
                        
                         <!-- email address x -->
                         <tr>
                                <td><label>Email <span style="font-weight:normal; font-size:11px">(Specify if different from merchant's email above )</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="store_email" maxlength="255" value="<?php if(!isset($this->form_error['store_email']) && isset($this->userPost['store_email'])){echo $this->userPost['store_email'];}?>" />
                                <em><?php if(isset($this->form_error['store_email'])){ echo $this->form_error["store_email"]; }?></em>
                                </td>
                        </tr>
						  
                         <!-- sector -->
                         <tr>
                        <td><label><?php echo $this->Lang["SECTOR"]; ?></label><span>*</span></td>
                        <td><label>:</label></td>
                        <td>
                                <select autofocus name="sector" onchange="return change_sector(this.value);">
				     
                                <?php 
                                if(!isset($this->form_error["sector"]) && isset($this->userPost["sector"])){ 
				    
				    if($this->userPost["sector"] != 0){ ?>
				       
                                      <?php   foreach($this->sector_list as $c){
                                                if($c->sector_id == $this->userPost["sector"]){ ?>
                                                <option value="<?php echo $c->sector_id; ?>" selected="selected"><?php echo ucfirst($c->sector_name); ?></option> 
                                                <?php 
                                                }
                                        }
				    }
                                } else { ?>
                                        <option value=""> <?php echo $this->Lang['SELECT_SECTOR']; ?> </option>
					            <?php } foreach($this->sector_list as $c){ ?>
                                        <option value="<?php echo $c->sector_id; ?>"><?php echo ucfirst($c->sector_name); ?></option>  

                                <?php } ?>
                                </select>
                                <em><?php if(isset($this->form_error["sector"])){ echo $this->form_error["sector"]; }?></em>
                        </td>
                        </tr>
                        
                         <!-- subsector x -->
                         <!--<tr id="subsector" class="subsector_list">
                                <td><label><?php echo $this->Lang["SUBSECTOR"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>

                                <td>
									 <?php if(!isset($this->form_error['sector']) && isset($_POST['sector'])){ ?>
									 <select name="subsector" >
									 <?php foreach($this->sub_sector_list as $s){  ?>

				<?php if($s->main_sector_id == $_POST['sector']){
						$theme_check = true;
						$theme_name = strtolower($s->sector_name);
						if(!file_exists(DOCROOT.'modules/'.$theme_name.'/controllers/'.$theme_name.'.php'))
							$theme_check = false;
						if(!file_exists(DOCROOT.'modules/'.$theme_name.'/models/'.$theme_name.'.php'))
							$theme_check = false;
						if(!file_exists(DOCROOT.'modules/'.$theme_name.'/config/routes.php'))
							$theme_check = false;
						if(!is_dir(DOCROOT.'themes/'.THEME_NAME.'/css/'.$theme_name))
							$theme_check = false;
						if(!is_dir(DOCROOT.'application/views/themes/'.THEME_NAME.'/'.$theme_name))
							$theme_check = false;
						if($theme_check==true){ ?>
			                <option value="<?php echo $s->sector_id; ?>" <?php if(isset($_POST['subsector'])){ if($_POST['subsector'] == $s->sector_id){ ?> selected <?php } } ?> > <?php echo $s->sector_name; ?></option>
				<?php }} } ?>
				 </select>
			<?php } else{ ?>
			<select name="subsector" >
                                <option value=""><?php echo $this->Lang['SELECT_SECTORS_FIRST']; ?></option>
                               
                                </select>
                                 <?php }?>
                                <em><?php if(isset($this->form_error['subsector'])){ echo $this->form_error["subsector"]; }?></em>
                                </td>
                        </tr>-->
                         <tr style="display:none;">
                                <td><label><?php echo $this->Lang["SUBSECTOR"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>

                                <td>
									 
			<select name="subsector" >
            <option value="107" selected>Store</option>
            </select>
                                
                                
                                </td>
                        </tr>

                         <!-- store phone -->
                         <tr>
                                <td><label><?php echo $this->Lang["PHONE"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="mobile" maxlength="15"  value="<?php if(!isset($this->form_error['mobile']) && isset($this->userPost['mobile'])){echo $this->userPost['mobile'];}?>"/>
                                <em><?php if(isset($this->form_error['mobile'])){ echo $this->form_error["mobile"]; }?></em>
                                </td>
                        </tr>
                         <!-- store address -->
                         <tr>
                                <td>Address<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="address1" maxlength="255" value="<?php if(isset($this->userPost['address1'])){echo $this->userPost['address1'];}?>"/>
                                <em><?php if(isset($this->form_error['address1'])){ echo $this->form_error["address1"]; }?></em>
                                </td>
                        </tr>
                       
                         <!-- store country -->
                         <tr>
                                <td><label><?php echo $this->Lang["SEL_COUNTRY"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td class="co">
                                <select name="country" onchange="return city_change_merchant_shop(this.value);">
                                <option value=""><?php echo $this->Lang["SEL_COUNTRY"]; ?></option>
                                <?php foreach($this->country_list as $d){ ?>
                                <option value="<?php echo $d->country_id ?>" <?php if(!isset($this->form_error['country']) && isset($_POST['country'])){ if($_POST['country'] == $d->country_id){ ?> selected <?php } } ?>><?php echo $d->country_name; ?></option>
                                <?php } ?>
                                </select>
                                <em><?php if(isset($this->form_error["country"])){ echo $this->form_error["country"]; }?></em>
                                </td>
                        </tr>

						 <!-- store state -->
                         <tr>
                                <td><label><?php echo $this->Lang["SEL_CITY"]; ?><span>*</span></label></td>
                                <td><label>:</label></td>
                                <td>
                                <span id="CitySD">
                               <?php if(!isset($this->form_error['city']) && isset($_POST['city'])){ ?>
				<select name="city">
				<?php foreach($this->city_list as $s){ ?>
				<?php if($s->city_id == $_POST['city']){ ?>
			                <option value="<?php echo $s->city_id; ?>" <?php if(isset($_POST['city'])){ if($_POST['city'] == $s->city_id){ ?> selected <?php } } ?>><?php echo $s->city_name; ?></option>
				<?php } } ?>
		                </select>
			<?php } else{ ?>
		                <select name="city">
		                <option value=""> <?php echo $this->Lang["CITY_FIRST"]; ?></option>
		                </select>
                        <?php } ?> </span>
                                <em><?php if(isset($this->form_error["city"])){ echo $this->form_error["city"]; }?></em>
                               </td>
                        </tr> 
                        
                         <!-- company city -->
                         <tr>
                                <td><label>City<span></span></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="t_city" maxlength="255" value="<?php if(!isset($this->form_error['t_city']) && isset($this->userPost['t_city'])){echo $this->userPost['t_city'];}?>"/>

                                <em><?php if(isset($this->form_error['t_city'])){ echo $this->form_error["t_city"]; }?></em>
                                </td>
                        </tr>  
                        
                         <!-- store zip code -->
                         <tr>
                                <td><label><?php echo $this->Lang["ZIP_CODE"]; ?></label></td>
                                <td><label>:</label></td>
                                <td><input type="text" name="zipcode" maxlength="10" value="<?php if(!isset($this->form_error['zipcode']) && isset($this->userPost['zipcode'])){echo $this->userPost['zipcode'];}?>"/>
                                <em><?php if(isset($this->form_error['zipcode'])){ echo $this->form_error["zipcode"]; }?></em>
                                </td>
                        </tr>
                        
                         <!-- store business description -->
			             <tr>
                                <td><label>Business Descriptions<span>*</span></label></td>
                                <td><label>:</label></td>
                                <td>
                                <textarea name="about_us" maxlength="1000"><?php if(!isset($this->form_error["about_us"])&&isset($this->userPost["about_us"])){ echo $this->userPost["about_us"]; }?></textarea>
                                <em><?php if(isset($this->form_error["about_us"])){ echo $this->form_error["about_us"]; }?></em>
                                </td>
                        </tr>
                        
                         <!-- store website -->
                         <tr>
                                <td><label><?php echo $this->Lang["WEBSITE"]; ?></label></td>
                                <td><label>:http://</label></td>
                                <td><input type="text" name="website" maxlength="100" value="<?php if(!isset($this->form_error['website']) && isset($this->userPost['website'])){echo $this->userPost['website'];}?>"/>
                                <em><?php if(isset($this->form_error['website'])){ echo $this->form_error["website"]; }?></em>
                                </td>
                        </tr>
                        
                         <!-- store map search x -->
						 <tr >
                              <td><label><?php echo $this->Lang['MAP_SEARCH_LO']; ?></label></td>
                              <td><label>:</label></td>
                              <td >
                   
               
                <input type="text" class="gllpSearchField">
                <input type="button" class="gllpSearchButton" value="<?php echo $this->Lang['SEARCH']; ?>">
                <br/><br/><br/>
                <div class="gllpMap" ><?php echo $this->Lang['GOOG_MAP']; ?></div>
               
                   
                    </td>
						</tr>  
                        
                         <!-- store latitude x -->
                         <tr>
							   <td><label><?php echo $this->Lang["LATITUDE"]; ?></label></td>
								<td><label>:</label></td>
								<td>
								<input type="text" onclick="show_popup();" name="latitude" class="gllpLatitude" readonly value="<?php if(!isset($this->form_error['latitude']) && isset($this->userPost['latitude'])){echo $this->userPost['latitude'];}?>"/>
								<em><?php if(isset($this->form_error['latitude'])){ echo $this->form_error["latitude"]; }?></em>
								</td>
								</tr>  
                                
                         <!-- store longitude x -->    
						 <tr>
								<td><label><?php echo $this->Lang["LONGITUDE"]; ?></label></td>
								<td><label>:</label></td>
								<td>
								<input type="text" name="longitude" class="gllpLongitude" readonly value="<?php if(!isset($this->form_error['longitude']) && isset($this->userPost['longitude'])){echo $this->userPost['longitude'];}?>"/>
								<em><?php if(isset($this->form_error['longitude'])){ echo $this->form_error["longitude"]; }?></em>
								<input type="hidden" class="gllpZoom" value="3"/>
								<input type="hidden" class="gllpUpdateButton" value="update map">
								</td>
						</tr>
                     
                        
                         <!-- Logo x -->
                         <tr>
                                <td><label>Logo</label></td>
                                <td><label>:</label></td>
                                <td>
                                <input type="file" name="image" />
                                <em><?php if(isset($this->form_error["image"])){ echo $this->form_error["image"]; }?></em>
                                 <label><?php echo $this->Lang['IM_UP_S']; ?> <?php echo STORE_DETAIL_WIDTH; ?> X <?php echo STORE_DETAIL_HEIGHT; ?> </label>
                                </td>
                        </tr>   
                        
                        <input type="hidden" name="meta_keywords" value="" />   
                        <input type="hidden" name="meta_description" value="" />        
                     
                         <!-- form controls -->
                         <tr>
                                <td></td>
                                <td></td>
                                <td><input type="submit" id="submit" value="<?php echo $this->Lang['SUBMIT']; ?>" /><input type="button" value="<?php echo $this->Lang['RESET']; ?>" onclick="javascript:window.location='<?php echo PATH; ?>admin/add-merchant.html'"/></td>
                        </tr>
                </table>
        </form>
        
        </div>
        
        
        
    </div>
        
</div>
<div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>


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
			 $errorField.text("Fatal error occured. Please try again");
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
  
  function checkStoreName(val){
	 
	 var $errorField = $('#store_err');
	 $errorField.text("");
	 $('.error_double2 em').text('');
	 
	 if(val === ""){
		$errorField.text('Required');
	 	return;
	 }
	 
	 val = $.trim(val);
	 if(val === null){
		$errorField.text('Required');
	 	return;
	 }
		
	 console.log("Acc: ", val);
	 var data = {nuban:val};
	 var url = "<?php echo PATH?>admin_merchant/check_store_exist/"+val+"/true"
	 $.ajax(
	 {
		 method: "POST",
		 data: data,
		 url:url,
		 success: function(response)
		 {
			 console.log("data: ", response);
			 if(response === "1"){
				 console.log("Success: ", "Existing storename.");
				 $('#store_err').text('Store name already in use.');
			 } else {
				$('.error_double2 em').text('');
			 }
		 },
		 error: function(response) 
		 {
			 console.log("Error: ", "Fatal error occured.");
		 }
		 
		 	
	});
 }
  
  
 
</script>

