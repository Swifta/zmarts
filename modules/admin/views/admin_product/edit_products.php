<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
     <script type="text/javascript"> 
    $(document).ready(function(){
		$('.wholesaleprice').hide();
		$('.aramexshipping').hide();
        $("#yourFormId").submit(function() {
        var textVal = $(".txtChar").val();
        if(textVal == "") {
            alert('Fill this field');
            return false;
        }
		
    });

    $("#ui-datepicker-div").hide();
              
    $("#check2").click(function(){
        $('#status').val(1);
       
         var a = 0, rdbtn=document.getElementsByName("shipping")
        for(i=0;i<rdbtn.length;i++) {
                if(rdbtn.item(i).checked == false) {
                        a++;
                }
        }
        
        if(a == rdbtn.length) {
                alert("No way you submit it without choose shipping method");
                return false;
        } 
        
        /*if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('weightaramex').value == '') ||  (document.getElementById('weightaramex').value == '0')) { 
                document.getElementById("weightaramex").focus();
                      alert("Please enter product weight");
                      return false; 
        } 
        }
        
        if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('lengtharamex').value == '') ||  (document.getElementById('lengtharamex').value == '0')) { 
                document.getElementById("lengtharamex").focus();
                      alert("Please enter product length");
                      return false; 
        }
        } 
        
        if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('heightaramex').value == '') ||  (document.getElementById('heightaramex').value == '0')) { 
                document.getElementById("heightaramex").focus();
                      alert("Please enter product heigh");
                      return false; 
        }
        } 
        
        if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('widtharamex').value == '') ||  (document.getElementById('widtharamex').value == '0')) { 
                document.getElementById("widtharamex").focus();
                      alert("Please enter product width");
                      return false; 
        }
        }
        
         if ((document.getElementById('perquantity').checked)) {         
         if ((document.getElementById('Wholesale').value == '') ||  (document.getElementById('Wholesale').value == '0')) { 
                document.getElementById("Wholesale").focus();
                      alert("Please enter your shipping amount");
                      return false; 
        } 
        }
        
        if ((document.getElementById('perproduct').checked)) {
        if ((document.getElementById('Wholesale').value == '') ||  (document.getElementById('Wholesale').value == '0')) { 
                document.getElementById("Wholesale").focus();
                      alert("Please enter your shipping amount");
                      return false; 
        }
        } */
 	
        if($("input[name=color_val]:checked").val() == 1){
			
			
                       var c = $("input[name='color[]']:checked").length>0; 
                               if(!c){
								   	
									
                                       alert("<?php echo $this->Lang["PLS_COL"]; ?>");
                                       return false;
									
                               } 
               }    
                
         
         
    });
    

    });
    </script>
    <SCRIPT language="Javascript">
        
          function isNumberKey(evt)
          {
             var charCode = (evt.which) ? evt.which : event.keyCode        
             if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                
             return true;
              
          }
          
          function shippingNumberKey(evt)
          {
             var charCode = (evt.which) ? evt.which : event.keyCode        
             if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
             return true;
          }
    </SCRIPT>
    <style>
#fade { background: #000; position: fixed; left: 0; top: 0; width: 100%; height: 100%; opacity: 0.5; z-index: 9999; }
.popup{ float: left;position: fixed; width:40%;  z-index: 99999; background: white; border-color:red;clear:both;top:200px; left:580px;  padding: 0px; }

</style>

<link rel="stylesheet" type="text/css" href="<?php echo PATH ?>css/jquery.cleditor.css">
<script type="text/javascript" src="<?php echo PATH ?>js/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>js/multiimage.js"></script>

<div class="bread_crumb"><a href="<?php echo PATH."admin.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
<?php /* <div class="chart_2 fl">
    <ul>
    <li  id="userdate" class=" selected fl"> 
      <div class="tab1"></div>
      <div class="tab2" ><a  onclick="return User_date();" id="userdate"><?php echo $this->Lang['PRODU_DETAILS']; ?></a></div>
      <div class="tab3"></div>
    </li>
    
    <li class=" fl" id="reflist">
      <div class="tab1"></div>
      <div class="tab2" ><a onclick="return User_ref();"  id="reflist"><?php echo $this->Lang['P_IM']; ?></a></div>
      <div class="tab3"></div>
    </li>
      
    <li class=" fl" id="useryear">
      <div class="tab1"></div>
      <div class="tab2" ><a onclick="return User_year();"  id="useryear"><?php echo $this->Lang['SHIP_CO_SIZE']; ?></a></div>
      <div class="tab3"></div>
    </li>
    
     <li class=" fl" id="attribute">
      <div class="tab1"></div>
      <div class="tab2" ><a onclick="return ShowAttributes();"  id="attribute"><?php echo $this->Lang['ATTR_TXT']; ?> </a></div>
      <div class="tab3"></div>
    </li>
    
     <li class=" fl" id="usermonth">
      <div class="tab1"></div>
      <div class="tab2" ><a onclick="return User_month();"  id="usermonth"><?php echo $this->Lang['SEO_FE']; ?></a></div>
      <div class="tab3"></div>
    </li>

  </ul>
</div>  */ ?>
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
        <form action="" method="post" class="admin_form" enctype="multipart/form-data" id="yourFormId" >
        <?php foreach($this->product as $u){?>
            <div class="mergent_det2 user_date">
            <table>
            
         
                <tr>
                
                    <td><label><?php echo $this->Lang["PRODUCT_TITLE"]; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                    	<input type="text" name="title" maxlength="255" value="<?php echo $u->deal_title; ?>" autofocus />
                      	<em><?php if(isset($this->form_error["title"])){ echo $this->form_error["title"]; }?></em>
                   	</td>
                </tr>              
                <tr>
                    <td><label><?php echo $this->Lang["CATEGORY"]; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                    	<select name="category" onchange="return change_category(this.value);">
                        	<option value=""><?php echo $this->Lang['SEL_CATEGORY']; ?></option>
							<?php foreach($this->category_list as $main){ if($main->product == 1 ) { ?>
                                    <option value="<?php echo $main->category_id?>" <option value="<?php echo $main->category_id?>" <?php if($main->category_id == $u->category_id){ ?>selected<?php } ?>><?php echo ucfirst($main->category_name); ?></option>    
                            <?php } } ?>
                    	</select>
                    	<em><?php if(isset($this->form_error["category"])){ echo $this->form_error["category"]; }?></em>
					</td>
                </tr>
                     
                <tr id="category">
                    <td><label><?php echo $this->Lang['SEL_MAIN_CAT']; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
				 
                        <select name="sub_category" onchange="return sec_change_category(this.value);">
			<?php $cat_ids = explode(',',$u->sub_category_id); foreach($this->sub_category_list as $d){ if($u->category_id == $d->main_category_id) { ?>
			                <option value="<?php echo $d->category_id; ?>" <?php foreach($cat_ids as $ci){ if($d->category_id == $ci){ ?> selected <?php } } ?> > <?php echo $d->category_name; ?></option>
				<?php } }  ?>
		                </select>
			
                        <em><?php if(isset($this->form_error["sub_category"])){ echo $this->form_error["sub_category"]; }?></em>
					</td>
		
                </tr>      
                
                <tr id="sub_category">
                    <td><label><?php echo $this->Lang['SEL_SUB_CAT']; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
				 
                        <select name="sec_category" onchange="return third_change_category(this.value);">
			<?php $cat_ids = explode(',',$u->sec_category_id); foreach($this->sec_category_list as $d){ if($u->category_id == $d->main_category_id) {  if($u->sub_category_id == $d->sub_category_id) { ?>
			                <option value="<?php echo $d->category_id; ?>" <?php foreach($cat_ids as $ci){ if($d->category_id == $ci){ ?> selected <?php } } ?> > <?php echo $d->category_name; ?></option>
				<?php } } } ?>
		                </select>
			
                        <em><?php if(isset($this->form_error["sec_category"])){ echo $this->form_error["sec_category"]; }?></em>
					</td>
		
                </tr>
                
                <tr id="sec_category">
                    <td><label><?php echo $this->Lang['SEL_SEC_SUB_CAT']; ?></label></td>
                    <td><label>:</label></td>
                    <td>
				 
                        <select name="third_category">
			<?php $cat_ids = explode(',',$u->third_category_id); $i = 1; foreach($this->third_category_list as $d){ if($u->sec_category_id == $d->sub_category_id) { ?>
			                <option value="<?php echo $d->category_id; ?>" <?php foreach($cat_ids as $ci){ if($d->category_id == $ci){ ?> selected <?php } } ?> > <?php echo $d->category_name; ?></option>
				<?php } else{ if($i ==1) {?>
		                <option value=""><?php echo $this->Lang['SUB_CAT_FIRST']; ?></option>
                        <?php } } $i++; } ?>
		                </select>
			
                        <em><?php if(isset($this->form_error["third_category"])){ echo $this->form_error["third_category"]; }?></em>
					</td>
		
                </tr>      
                
                <tr> 
                  <td>
                      <input type="hidden" name="deal_type" value="2" <?php if($u->deal_type == 2){ ?>checked="checked" <?php } ?>/> 
                    </td>
                </tr>
                           
                <tr>
                    <td><label><?php echo $this->Lang["PRICE"]; ?> </label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
						<input type="text" name="deal_value" maxlength="8" value="<?php if($u->deal_price !=0) { echo $u->deal_price; } else { echo $u->deal_value; }  ?>" />
                        <em><?php if(isset($this->form_error["deal_value"])){ echo $this->form_error["deal_value"]; }?></em>
                    </td>
                </tr>
                
				<!--<tr>
                    <td><label><?php echo $this->Lang["DEALVALUE"]; ?></label><span></span></td>
                    <td><label>:</label></td>
                    <td>
						<?php if($u->deal_price!=0) { ?>
                        <input type="text" name="price" maxlength="8" value="<?php echo $u->deal_value; ?>" />
                       <?php /* <em><?php if(isset($this->form_error["price"])){ echo $this->form_error["price"]; }?></em> */?>
                       <?php } else{ ?>
                       <input type="text" name="price" maxlength="8" value="" />
                       <?php } ?>
                    </td>
                </tr>-->
                 <tr>
                    <td><label>Discounted Price (Ordinary)</label><span></span></td>
                    <td><label>:</label></td>
                    <td>
                   	<?php if($u->deal_price!=0) { ?>
                      <input type="text" name="price" maxlength="8" value="<?php echo $u->deal_value; ?>" />
					
					<?php }else{?>
						 <input type="text" name="price" maxlength="8" value="" />
					<?php }?>
						 
                        <?php /* <em><?php if(isset($this->form_error["price"])){ echo $this->form_error["price"]; }?></em> */?>
                       
                        
                    </td>
                </tr>
                
               	 <tr>
                    <td><label>Discounted Price (<b>Prime Customers Only</b>)</label><span></span></td>
                    <td><label>:</label></td>
                    <td>
                   	<?php if($u->deal_price!=0) { ?>
                      <input type="text" name="prime_price" maxlength="8" value="<?php echo $u->deal_prime_value; ?>" />
					
					<?php }else{?>
						 <input type="text" name="price" maxlength="8" value="" />
					<?php }?>
						 
                        <?php /* <em><?php if(isset($this->form_error["price"])){ echo $this->form_error["price"]; }?></em> */?>
                       
                        
                    </td>
                </tr>
                
                <tr>
                <td><label></label></td>
                <td><label></label></td>
                <td>
                <label>
                        <input type="checkbox" name="Including_tax" value="1" <?php  if($u->Including_tax == "1") { ?>checked <?php } ?>>
                        <?php echo $this->Lang['INC_TAX_AMOUNT']; ?>  </label>
                </td>
                </tr>
                
                <?php /*   <tr id="shipping" >
                    <td><label><?php echo $this->Lang['SHIP_AMOU']; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <input type="text" name="shipping_amount" maxlength="18" value="<?php echo $u->shipping_amount; ?>" />
                        <em><?php if(isset($this->form_error["shipping_amount"])){ echo $this->form_error["shipping_amount"]; }?></em>
					</td>
                </tr>  
                
                <tr>
                    <td><label><?php echo $this->Lang["WT"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input type="text" name="weight"  value="<?php echo $u->weight; ?>" /> <?php echo $this->Lang["KG"]; ?>
                        <em><?php if(isset($this->form_error["weight"])){ echo $this->form_error["weight"]; }?></em>
                    </td>
                </tr>                           

                   <tr>
                    <td><label><?php echo $this->Lang["LEN"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input type="text" name="length"  value="<?php echo $u->length; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["length"])){ echo $this->form_error["length"]; }?></em>
                    </td>
                </tr>
                <tr>
                    <td><label><?php echo $this->Lang["HEI"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input type="text" name="height"  value="<?php echo $u->height; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["height"])){ echo $this->form_error["height"]; }?></em>
                    </td>
                </tr>
                <tr>
                    <td><label><?php echo $this->Lang["WID"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input type="text" name="width"  value="<?php echo $u->width; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["width"])){ echo $this->form_error["width"]; }?></em>
                    </td>
                </tr>
                */ ?>

				<tr>
                    <td><label><?php echo $this->Lang["DESC"]; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                       <textarea name="description" class="TextArea" ><?php echo $u->deal_description;?></textarea>
						<em><?php if(isset($this->form_error["description"])){ echo $this->form_error["description"]; }?></em>
                    </td>
                </tr> 
                
                 <!-- attribute start --> 
						
				      <tr>
                    <td><label><?php echo $this->Lang['WNT_ADD_ATTR']; ?> </label><span>*</span></td>
                    <td><label>:</label></td>
                    <td> 
                        <input type="radio" name="attr_option" <?php if($u->attribute ==0) {?> checked <?php } ?> onclick="shospe(0)" value="0"> <?php echo $this->Lang['NO']; ?>
                        <input type="radio" name="attr_option" value="1" <?php if($u->attribute ==1) {?> checked <?php } ?> onclick="shospe(1)"> <?php echo $this->Lang['YES']; ?>
                    </td>
                 </tr>
                 
                 <script type="text/javascript"> 
    $(document).ready(function(){
        var textVal = <?php echo $u->attribute; ?>;
        if(textVal == "1") {
            $('.spe_show').show();
        }
        if(textVal == "0") {
            $('.spe_show').hide();
        }
    });
    </script>
				

                <tr class="spe_show">
                    <td><label><?php echo $this->Lang["ENTRY_ATTRIBUTE"]; ?></label></td>
                    <td>&nbsp;</td>
					<td><label><?php echo $this->Lang["TXT_LABEL"]; ?></label>   ( <label><?php echo $this->Lang['MORE_CUS_SPECIFI']; ?>  <a href="<?php echo PATH; ?>admin/manage-attribute.html"> <?php echo $this->Lang['ADD']; ?></a></label> ) </td>
			   </tr>
					<?php
					$atr_option =$u->attribute;
					$inc=1;
					if(count($this->selectproduct_attr) > 0){
						foreach($this->selectproduct_attr as $sel_atr){ 
						?> 
					<tr class="atrmain spe_show" id="row-<?php echo $inc;?>" > 
					<td>&nbsp;</td>
						 <td>&nbsp;</td>
                    <td class="spe_show">
                        <select name="attribute[]">
						<?php
						 $attr= $this->all_attributes;
						  
 						  $totrow= count($attr);
						 if(count($attr) > 0){
						   $attrow=1;
							foreach($attr as $a){
							   if(count($a['attribute']) > 0){
								   $group_name = $a['name'];
								   echo '<optgroup label="'.$group_name.'">';
									 foreach($a['attribute'] as $atr){

						  ?>
									 <option value="<?php echo $atr['attribute_id'];?>" <?php echo ($sel_atr->attribute_id==$atr['attribute_id'])?"selected='selected'":"";?>><?php echo $atr['name'];?></option>
						 <?php
									}//end of attribte foreach
							   }else{ // end of attribute count
							   ?>
									 <option value="-1"><?php echo $this->Lang['NO_ATTR'];?></option>
							   <?php
							   }//end of attribute list if
						   } //end of attribute group loop
						 }else{
						  ?>
								<option value="-1"><?php echo $this->Lang['NO_ATTR'];?></option>
						  <?php
						 }
						 ?>
						  
						</select> 
                        <input type="text" name="attribute_value[]" value="<?php echo $sel_atr->text;?>"> 
                    
					<?php if($inc!=1){?>
					 <input type="button" name="remove" onclick="RemoveAttribute(<?php echo $inc;?>)" class="btn_remove" value="Remove">   </td>
					<?php  } ?>
					</tr>
					
					<?php
						$inc++; }
						
					}else{
						 ?>
						 <tr class="atrmain" id="row-<?php echo $inc;?>"> 
						 <td>&nbsp;</td>
						 <td>&nbsp;</td>
                    <td class="spe_show">
                        <select name="attribute[]" style="margin:0 5px 0 0;">
                        <option value=""><?php echo $this->Lang['SEL_SPECI']; ?></option>
						 <?php
						 $attr= $this->all_attributes;
						  
 						  $totrow= count($attr);
						 if(count($attr) > 0){

						   $attrow=1;
							foreach($attr as $a){
							   if(count($a['attribute']) > 0){
								   $group_name = $a['name'];
								   echo '<optgroup label="'.$group_name.'">';
									 foreach($a['attribute'] as $atr){

						  ?>
 						 <option value="<?php echo $atr['attribute_id'];?>"><?php echo $atr['name'];?></option>
						 <?php
									}//end of attribte foreach
							   }else{ // end of attribute count
							   ?>
							   <option value="-1"><?php echo $this->Lang['NO_ATTR'];?></option>
							   <?php
							   }//end of attribute list if
						   } //end of attribute group loop
						 }else{
						  ?>
						  <option value="-1"><?php echo $this->Lang['NO_ATTR'];?></option>
						  <?php
						 }
						 ?>
						</select> 
                        <input type="text" name="attribute_value[]" value=""> 
                    </td>
					<?php				
					}
					?>
					
                <tr id="btns" class="spe_show">
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
				 <td> <input id="btn_add" type="button" name="addmore" value="<?php echo $this->Lang['ADDMORE'];?>" onclick="addAttribute()">  </td>
				</tr>
                  
                  
                  
                  
				 <tr>
                    <td><label><?php echo $this->Lang['DEL_DAYS']; ?> </label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                        <input type="text" name="delivery_days" maxlength="255"  value="<?php echo $u->delivery_period;  ?>" />
                        <em><?php if(isset($this->form_error["delivery_days"])){ echo $this->form_error["delivery_days"]; }?></em>
                    </td>
                </tr>
                 <tr>
                    <td><span></span></td>
                    <td><label></label></td>
                    <td>
                      <label><?php echo "Ex : ( 2 - 5 ) "; ?> </label>
                    </td>
                </tr>
                
               
                <!-- policy start --> 
					<?php
					$atr_option =$u->attribute;
					$policymain=1;
					if(count($this->selectproduct_policy) > 0){
						foreach($this->selectproduct_policy as $sel_policy){ 
						?> 
					<tr class="policymain" id="row-<?php echo $policymain;?>"> 
					<td><label><?php echo $this->Lang['DEL_POLICY']; ?> </label><span>*</span></td>
                    <td><label>:</label></td>
					<td>
                        <!--<input type="text" name="Delivery_value[]"  value="<?php echo $sel_policy->text;?>"> -->
                        <!--<input type="text" name="Delivery_value[]" value=""> -->
                    
                        <textarea name="Delivery_value[]" rows="4"><?php echo $sel_policy->text;?></textarea>
                        <em><?php if(isset($this->form_error["Delivery_value"])){ echo $this->form_error["Delivery_value"]; }?></em>
                    
					<?php if($policymain!=1){?>
					 <input type="button" name="remove" onclick="RemoveAttribute(<?php echo $policymain;?>)" class="btn_remove" value="Remove">   </td>
					<?php  } ?>
					</tr>
					
					<?php
						$policymain++; }
						
					}else{
						 ?>
					 <tr class="policymain">
                 <td><label><?php echo $this->Lang['DEL_POLICY']; ?> </label></td>
                    <td><label>:</label></td>
                    <td> 
                        <!--<input type="text" name="Delivery_value[]" value=""> -->
                    
                        <textarea name="Delivery_value[]" rows="4"><?php echo $sel_policy->text;?></textarea>  
                    </td>
		    </tr>                 
                 <tr>
					<?php				
					}
					?>
					
                <tr id="Delivery">
				 <td>&nbsp;</td>
				  <td>&nbsp;</td>
				 <!--<td> <input id="Delivery_add" type="button" name="addmore" value="<?php echo $this->Lang['ADDMORE'];?>" onclick="addDelivery()">  </td>-->
				</tr>
		    
                

			  
			  <!-- policy end -->
				<tr>
                    <td><label><?php echo $this->Lang["SELECT_MERCHANT"]; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                        <select name="users" onchange="return shop_products_change(this.value);" onclick="return shipping_change_pro(this.value,'<?php echo $u->deal_id; ?>');">
                        <option value=""><?php echo $this->Lang["SELECT_MERCHANT"]; ?></option>

                    <?php foreach($this->get_marchant_list as $d){ ?> 
                        <option value="<?php echo $d->user_id ?>"<?php if($d->user_id==$u->merchant_id) { ?> selected="selected" <?php } ?>><?php echo $d->firstname; ?></option>
                          <?php } ?>
                        </select>
                       <em><?php if(isset($this->form_error["users"])){ echo $this->form_error["users"]; }?></em>
                     </td>
                 </tr>
                 
                     <tr id="shop" >
                    <td><label><?php echo $this->Lang["SEL_SHOP"]; ?><span>*</span></label></td>
                    <td><label>:</label></td>
                    <td>
                        <select name="stores">
                        <option value="" <?php if($u->shop_id==0){ ?>selected="selected" <?php } ?>><?php echo $this->Lang["USER_FIRST"]; ?></option>
					<?php foreach($this->shop_list as $d){ if($u->merchant_id == $d->user_id) { ?>
	                <option value=<?php echo $d->store_id; ?> <?php if($u->shop_id==$d->store_id) { ?> selected="selected" <?php  } ?>><?php echo $d->store_name; ?></option>
	                <?php } }  ?> 
                        </select>
                        <em><?php if(isset($this->form_error["stores"])){ echo $this->form_error["stores"]; }?></em>
					</td>
                 </tr> 
                  <?php      $submit = "0"; 
                                        $free = "0"; 
                                        $flat = "0"; 
                                        $per_product = "0"; 
                                        $per_quantity = "0"; 
                                        $aramex = "0"; 
                                        foreach($this->shipping_data as $ship){ 
                                        $free = $ship->free;
                                        $flat = $ship->flat;
                                        $per_product = $ship->per_product;
                                        $per_quantity = $ship->per_quantity;
                                        $aramex = $ship->aramex;
                         } ?>
                       <tr>
                                <td><label>Shipping method <span>*</span></label></td>
                                <td><label>:</label></td>
                                <td id="change_shipping" >
                                        <table style="border: 1px solid #999; border-collapse: collapse; width:242px;">
                                        <?php if($this->free_shipping_setting == 1 && $free == 1){ $submit = "1"; ?>
                                        <tr><td><input type="radio" name="shipping" value="1" onchange="return checkedretailprice(this)" <?php if($u->shipping == 1){ ?>checked <?php } ?>>Free Shipping</td></tr>
                                        <?php } if($this->flat_shipping_setting == 1 && $flat == 1){ $submit = "1"; ?>
                                        <tr><td><input type="radio" name="shipping" value="2" onchange="return checkedretailprice(this)" <?php if($u->shipping == 2){ ?>checked <?php } ?>>Flat Shipping</td></tr>
                                         <?php } if($this->per_product_setting == 1 && $per_product == 1){ $submit = "1"; ?>
                                        <tr><td><input type="radio" name="shipping" value="3" id="perproduct" onchange="return checkedwholesaleprice(this)" <?php if($u->shipping == 3){ ?>checked <?php } ?>>Per product base Shipping</td></tr>
                                         <?php } if($this->per_quantity_setting == 1 && $per_quantity == 1){ $submit = "1"; ?>
                                        <tr><td><input type="radio" name="shipping" value="4" id="perquantity" onchange="return checkedwholesaleprice(this)" <?php if($u->shipping == 4){ ?>checked <?php } ?>>Per quantity base Shipping</td></tr>
                                         <?php } if($this->aramex_setting == 1 && $aramex == 1){ $submit = "1"; ?>
                                        <tr><td><input type="radio" name="shipping" value="5" id="productaramex" onchange="return checkedaramex(this)" <?php if($u->shipping == 5){ ?>checked <?php } ?>>Aramex Shipping</td></tr>
                                        <?php }  if($submit == "0"){ ?>
                                        <tr><td><label><font size="2" color="red"><?php echo $this->Lang["PLZ_CONT_ADMIN_SHIPP_METHODS"]; ?></font> </label></td></tr>
                                        <?php } ?>
                                        </table>
                                </td>
                        </tr>

                 
                 <?php if(($u->shipping == 4) || ($u->shipping == 3)) { ?>
                        <script type="text/javascript">
                                        $(document).ready(function(){
                                        $('.wholesaleprice').show();
                                });
                        </script>
                 <?php } elseif(($u->shipping == 1) || ($u->shipping == 2)) { ?>
                        <script type="text/javascript">
                                        $(document).ready(function(){
                                        $('.wholesaleprice').hide();
                                });
                        </script>
                        <?php } elseif($u->shipping == 5) { ?>
                        <script type="text/javascript">
                                        $(document).ready(function(){
                                        $('.aramexshipping').show();
                                });
                        </script>
                 <?php } ?>
                 
                 <tr class="wholesaleprice">
                    <td><label>Shipping Amount</label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                        <input id="Wholesale" type="text" name="shipping_amount" maxlength="8" onkeypress="return shippingNumberKey(event)" value="<?php echo $u->shipping_amount; ?>" />
                        <em><?php if(isset($this->form_error["shipping_amount"])){ echo $this->form_error["shipping_amount"]; }?></em>
                                                
                    </td>
                </tr>
                
                
                <tr  class="aramexshipping">
                    <td><label><?php echo $this->Lang["WT"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input  id="weightaramex" type="text" name="weight" maxlength="8"  onkeypress="return shippingNumberKey(event)" value="<?php echo $u->weight; ?>" /> <?php echo $this->Lang["KG"]; ?>
                        <em><?php if(isset($this->form_error["weight"])){ echo $this->form_error["weight"]; }?></em>
                    </td>
                </tr>                           

                   <tr  class="aramexshipping">
                    <td><label><?php echo $this->Lang["LEN"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input id="lengtharamex" type="text" name="length" maxlength="8"  onkeypress="return shippingNumberKey(event)"  value="<?php echo $u->length; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["length"])){ echo $this->form_error["length"]; }?></em>
                    </td>
                </tr>
                
                <tr  class="aramexshipping">
                    <td><label><?php echo $this->Lang["HEI"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input id="heightaramex" type="text" name="height" maxlength="8"  onkeypress="return shippingNumberKey(event)"  value="<?php echo $u->height; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["height"])){ echo $this->form_error["height"]; }?></em>
                    </td>
                </tr>
                
                <tr  class="aramexshipping">
                    <td><label><?php echo $this->Lang["WID"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                         <input id="widtharamex" type="text" name="width" maxlength="8"  onkeypress="return shippingNumberKey(event)"  value="<?php echo $u->width; ?>" /><?php echo $this->Lang["INCM"]; ?>
                        <em><?php if(isset($this->form_error["width"])){ echo $this->form_error["width"]; }?></em>
                    </td>
                </tr>
                
                <input type="hidden" onchange="return checkedsizeadd(this)" name="size_val" value="1" >
                
                
                
    <tr>
                    <td><label><?php echo "Product Size"; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                        <input type="radio" id="id_no_size" name="size_val" onclick="shosize()" checked value="0"> None
                        <input type="radio" id="id_sel_size" name="size_val" value="1"  onclick="shosize()"> Specify
                        
                        
                    </td>
                 </tr>
   	
   <?php if(isset($this->form_error["size"])){?><tr class="size_show"><td>&nbsp;</td><td>&nbsp;</td><td><em><?php echo $this->form_error["size"]; ?></em></td></tr><?php }?>
    <tr class="display_div">
                    <td><label><?php echo $this->Lang['QUAN']; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td>
                    	<input style='width:auto; display:none' type='text' name='size[]' class="quantity_size txtChar" maxlength='8' value='1' >
                        
                        <input style='width:auto;' type='text' placeholder="<?php echo $this->Lang['MENTION_SIZE_ENTER_Q'];?>" name='size_quantity[]' class="quantity_size txtChar" maxlength='8' value='<?php if(isset($this->form_error['size_quantity[0]'])){ echo '';}else if(isset($_POST['size_quantity'][0])){ echo htmlentities($_POST['size_quantity'][0],  ENT_QUOTES,  "utf-8"); } else{	echo $this->product->current()->user_limit_quantity;}?>' onkeypress='return isNumberKey(event)'>
                      <?php if(isset($this->form_error['size_quantity[0]'])){?><em> <?php echo $this->form_error['size_quantity[0]']; ?></em><?php }?>  
                        
                    </td>
                    
                </tr>
    <!--<tr class="size_show" >
                    <td><label>&nbsp;</label></td>
                    <td></td>
					
                     <td>
                                <label><?php echo $this->Lang['MORE_CUS_SIZE']; ?>  <a href="<?php echo PATH; ?>admin/manage-sizes.html"> <?php echo $this->Lang['ADD']; ?></a></label>
                    </td>
			   </tr>-->
	<tr class="size_main size_show"> 
					<td><label><?php echo "Select Size & Quantity"; ?><span>*</span></label></td>
					<td><label>:</label></td>
                    <td>
                    	<?php $append_select_size = '<option value="">Select size</option>';?>
                       <select name="size[]" id="id_size_default" class="sel_size_class" onChange="check_dup(this);">
                       <option value=""><?php echo "Select size"; ?></option>
                       <?php foreach($this->product_size as $size){
			            ?>
                        <?php if($size->size_id != 1){?>
                        	
                            <?php if(isset($_POST['size'][1]) && $_POST['size'][1] == $size->size_id.''){?>
			            	<option selected  value="<?php echo $size->size_id; ?>" ><?php echo $size->size_name; ?></option>
                            
                            <?php }else if(isset($_POST['size'])) {?>
                            		<option value="<?php echo $size->size_id; ?>" ><?php echo $size->size_name; ?></option>
							<?php }else {?>
										<?php if(count($this->selectproduct_size) > 0 && $this->selectproduct_size[0]->size_id == $size->size_id.'') { ?>
                                        		<option selected  value="<?php echo $size->size_id; ?>" ><?php echo $size->size_name; ?></option>
                                        <?php }else{?>
                                        		<option  value="<?php echo $size->size_id; ?>" ><?php echo $size->size_name; ?></option>
										<?php } ?>
							<?php }?>
                            <?php $append_select_size .= '<option value="'.$size->size_id.'">'.$size->size_name.'</option>';?>
                        <?php } ?>
			            <?php 
			            } ?>
						</select> 
                        <i> &nbsp;</i> <input type="text" name="size_quantity[]" placeholder="<?php echo $this->Lang['MENTION_SIZE_ENTER_Q'];?>" onkeypress='return isNumberKey(event)' value="<?php if(isset($_POST['size_quantity'][1])){echo htmlentities($_POST['size_quantity'][1],  ENT_QUOTES,  "utf-8");}else if(isset($this->selectproduct_size[0])){echo $this->selectproduct_size[0]->quantity; }?>"> 
                    </td>
                </tr>
    <tr id="btns_s" class="size_show" >
				 <td>&nbsp;</td>
				 <td>&nbsp;</td>
				 <td> <input id="btn_add" type="button" name="addmore" value="<?php echo $this->Lang['ADDMORE'];?>" onclick="addSize()">  </td>
				</tr>   
                
                
                
                
                
               <?php //var_dump(count($this->product_size));
			   		  //var_dump($this->selectproduct_size);?>
                <?php if(count($this->product_size)>0) { ?>
                <!--<tr>
                        <td><label><?php echo $this->Lang['PRODU_SIZ']; ?></label><span></span></td>
                        <td><label>:</label></td>
                        <td >
                        <?php $user_city=""; foreach($this->selectproduct_size as $city1){
			                $user_city .= $city1->size_id.",";
			            }
			            $city_Tags=explode(",", substr($user_city, 0, -1));
			            ?>
                        <select name="Size_tag[]" id="SizeText">			  
			            <option value=""><?php echo $this->Lang['SELE__S']; ?> [Optional]</option>
			            <?php $i=1;
			            foreach($this->product_size as $CityL){
	 		             // if(!in_array($CityL->size_id, $city_Tags)){
							 //if($CityL->size_id != 1){
			            ?>
			            <option  value="<?php echo $CityL->size_id; ?>"><?php echo ucfirst($CityL->size_name); ?> </option> 
			            <?php  //}
			            } ?>
			            </select>
			            </td>
                    </tr>-->
                    <?php 
                    } else {?>
                    <!--<tr >
                    <td><label><?php echo $this->Lang['PRODU_SIZ']; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <select name="city_size[]" id="SizeText" >
			            <option value=""><?php echo $this->Lang['SELE__S']; ?> [Optional]</option>
			            <?php foreach($this->selectproduct_size as $CityL){ ?>
			            <option value="<?php echo $CityL->size_id; ?>"><?php echo ucfirst($CityL->size_name); ?></option>
			            <?php } ?>
			            </select>
                    </td>
                </tr>-->
                <?php } ?>
                <!--<tr>
                    <td ></td>
                    <td></td>
                    <td>
                                <label><?php echo $this->Lang['MORE_CUS_SIZE']; ?>  <a href="<?php echo PATH; ?>admin/manage-sizes.html"> <?php echo $this->Lang['ADD']; ?></a></label>
                    </td>
                </tr>-->   
                 <!--<tr>
                    <td><label><?php echo $this->Lang['YOUR_SELE_S_QU']; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td class='select_size_pro'>
                    <?php if(count($this->selectproduct_size)>0) { ?>
                         <span id="size_display"> 
                        <?php 
                            foreach($this->selectproduct_size as $c){
								
								if($c->size_id == 1){
									echo "<p id = 'id_none' style='float:left;'><span style='width:3px;padding:3px;'> " .$this->Lang['SELE__S']." = ".ucfirst($c->size_name)." <input type='checkbox'  name='size[]' checked='checked'  onchange='toggle_size_display(this)' value='".$c->size_id."'></span> <br> <span style='width:3px;padding:3px;'><input style='width:auto;' type='text' name='size_quantity[]' maxlength='8'   value='".$c->quantity."' class='txtChar' onkeypress='return isNumberKey(event)'></span> </p> ";
									
									}else{
                            echo "<p style='float:left;'><span style='width:3px;padding:3px;'> " .$this->Lang['SELE__S']." = ".ucfirst($c->size_name)." <input type='checkbox'  name='size[]' checked='checked'  onchange='toggle_size_display(this)' value='".$c->size_id."'></span> <br> <span style='width:3px;padding:3px;'><input style='width:auto;' type='text' name='size_quantity[]' maxlength='8'   value='".$c->quantity."' class='txtChar' onkeypress='return isNumberKey(event)'></span> </p> ";
								}
                        } ?> </span> <?php } else { ?>
                        <span id="size_display" > </span>
                        <?php }?>
                    </td>
                </tr>-->
                    <script language="javascript"> 
                    function toggle() {
                        var ele = document.getElementById("SizeText");
                        var text = document.getElementById("displayText");
                            if(ele.style.display == "none") {
                                ele.style.display = "block";
                                text.style.display = "none";
                            }
                            else {
                                ele.style.display = "none";
                                text.style.display = "block";
                            }
                    } 

                    $(document).ready(function() {
                        $('#SizeText').change(function() {
                            var none = $('#id_none');
							if(none){
								none.remove();
							}
								
                            var count=$(this).val();
							if(count == 1){
								$('#size_display p').remove();
								var no_size = '<p id="id_none" style="float:left;"><span style="width:3px;padding:3px;">  Select size = None <input name="size[]" checked="checked" onchange="toggle_size_display(this)" value="1" type="checkbox"></span> <br> <span style="width:3px;padding:3px;"><input style="width:auto;" name="size_quantity[]" maxlength="8" value="1" class="txtChar" onkeypress="return isNumberKey(event)" type="text"></span> </p>'
								$("#size_display").append(no_size);
								
								return false;
								
							}
							
                            $.post("<?php echo PATH;?>admin_products/editmore_size?count="+count+"&deal="+<?php echo $u->deal_id; ?>,{
                            }, function(response){ 
							//alert(response);
							
								var check = 1;
									$("#size_display input:checked").each(function() {
											if(count == this.value){
												check=2;
											}	
									});
									if(check == 1){
										$("#size_display").append(response);
									 }else{
										
											alert('<?php echo $this->Lang['SIZE_ALREADY_SELE']; ?>');
										
									 }
									 
									 $('#SizeText').val("");
                            });
                        });
                    });
					
					
					function toggle_size_display(size_checkbox){
			
		$(size_checkbox).parent().parent().remove();
		var size = $("#size_display p").size();
		$('#SizeText').val("");
		if(size == 0){
			var no_size = '<p id="id_none" style="float:left;"><span style="width:3px;padding:3px;">  Select size = None <input name="size[]" checked="checked" onchange="toggle_size_display(this)" value="1" type="checkbox"></span> <br> <span style="width:3px;padding:3px;"><input style="width:auto;" name="size_quantity[]" maxlength="8" value="1" class="txtChar" onkeypress="return isNumberKey(event)" type="text"></span> </p>'
			$("#size_display").append(no_size);
			
		}
		
	}
                    </script>
                  <tr>
                    <td><label><?php echo $this->Lang['AD_CO_FI']; ?></label><span>*</span></td>
                    <td><label>:</label></td>
                    <td class="overlay"> 
                        <input type="radio" id="id_rm_color" onchange="return checkedcolorremove(this)" id="color_val_co" name="color_val" value="0" <?php if(count($this->product_color)== 0) { ?> checked <?php } ?>><?php echo $this->Lang['NO']; ?>
                        <input type="radio" id="id_add_color" onchange="return checkedcoloradd(this)" id="color_val_co1" name="color_val" value="1" <?php if(count($this->product_color)>0) { ?> checked <?php } ?>><?php echo $this->Lang['YES']; ?>
                    </td>
                 </tr>
                
    <input type="hidden" id="id_color_count" name="color_count" readonly value="<?php echo count($this->product_color); ?>" />
                 <?php if(count($this->product_color)>0) { ?>
                    
                    <tr class="addcolor">
                        <td><label><?php echo $this->Lang['PRODUC_COLOR']; ?></label></td>
                        <td><label>:</label></td>
                        <td >
                        
                        
                        
                        <?php $user_city=""; foreach($this->product_color as $city1){
			                $user_city .= $city1->color_code_id.",";
	 		                
			            }
			            $city_Tags=explode(",", substr($user_city, 0, -1));
			            ?>
                        <select name="city_tag[]" id="toggleText">			  
			            <option value=""><?php echo $this->Lang['S_PRODU_COLOR']; ?></option>
			            <?php $i=1;
			            
			            foreach($this->color_code as $CityL){
			            	
	 		              if(!in_array($CityL->id, $city_Tags)){
			            	
			            ?>
			            <option  value="<?php echo $CityL->color_code; ?>" style='color:#<?php echo $CityL->color_code; ?>';><?php echo ucfirst($CityL->color_name); ?> </option>
			            <?php  }
			            } ?>
			            </select>
			            </td>
                    </tr>
                    <?php 
                    } else {?>
                    
                    <tr class="addcolor">
                    <td><label><?php echo $this->Lang['PRODUC_COLOR']; ?></label></td>
                    <td><label>:</label></td>
                                
                    <td>
                        <select name="city_tag[]" id="toggleText" >
			              <option value=""><?php echo $this->Lang['S_PRODU_COLOR']; ?></option>
			            <?php foreach($this->color_code as $CityL){
			            ?>
			            <option value="<?php echo $CityL->color_code; ?>" style='color:#<?php echo $CityL->color_code; ?>' ><?php echo ucfirst($CityL->color_name); ?></option>
			            <?php 
			            } ?>
			            </select>
                    </td>
                </tr>
                    
                    <?php } ?>
                    
                     <tr >
                    <td ></td>
                    <td></td>
                    <td>
                                <label><?php echo $this->Lang['MORE_CUS_COLOR']; ?>  <a href="<?php echo PATH; ?>admin/manage-colors.html"> <?php echo $this->Lang['ADD']; ?></a></label>
                    </td>
                </tr>
                
                <?php if(count($this->product_color)>0) { ?>
                <tr class="addcolor">
                    <td><label><?php echo $this->Lang['Y_S_CO']; ?></label></td>
                    <td><label>:</label></td>
                    <td class="product_color_selection">
                     
                         <span id="city_display"> </span>
                        <?php 
                            foreach($this->product_color as $color){
                            echo "<span onchange ='toggle_color(this)' style='padding:3px;margin:2px;width:auto;height:20px;vetical-align:top;display:inline-block;border:3px solid #$color->color_name;'><input type='checkbox' name='color[]' checked='checked' value='".$color->color_name."'>".ucfirst($color->color_code_name)."</span> ";
                        } ?>
                    </td>
                    
                </tr>
				<?php } else{ ?>
					
                <tr class="addcolor">
                    <td><label><?php echo $this->Lang['Y_S_CO']; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <span id="city_display"> </span>
                        
                    </td>
                    
                </tr>
                
                <?php }?>
                <script language="javascript"> 
                function toggle() {
                var ele = document.getElementById("toggleText");
                var text = document.getElementById("displayText");
                if(ele.style.display == "none") {
                ele.style.display = "block";
                text.style.display = "none";
                }
                else {
                ele.style.display = "none";
                text.style.display = "block";
                }
                } 

                $(document).ready(function() {
					$('#toggleText').change(function() {
						var count=$(this).val();
							$.post("<?php echo PATH;?>admin_products/editmore_color?count="+count+"&deal="+<?php echo $u->deal_id; ?>,{
							}, function(response){ 
								var check1 = 1;
									$("#city_display input:checked").each(function() {
											if(count == this.value){
												check1=2;
											}	
									});
									if(check1 == 1){ 
									
										$("#city_display").append(response);
										var color_c = $('#id_color_count');
										var c = parseInt(color_c.val())+1;
										color_c.val(c);
										
									}else{
										alert('<?php echo $this->Lang['CO_ALREADY_SELE']; ?>');
									}
									
									$('#toggleText').val("");
							});
					});
                });
				
				function toggle_color(color){
					  $(color).remove();
					  var color_c = $('#id_color_count');
					  var c = parseInt(color_c.val())-1;
					  color_c.val(c);
					  $('#toggleText').val("");
					  var len = $('#city_display span').size();
					  if(len == 0){
						  $('#id_rm_color').trigger('click');
						  $('#toggleText').val("");
						  
					  }
		  }
                </script>
                

		    
               
                
                <tr>
                    <td><label><?php echo $this->Lang["META_KEY"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <textarea name="meta_keywords"><?php echo $u->meta_keywords; ?></textarea>
                        <em><?php if(isset($this->form_error["meta_keywords"])){ echo $this->form_error["meta_keywords"]; }?></em>
                    </td>
                </tr>
                
                 <tr>
                    <td><label><?php echo $this->Lang["META_DESC"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <textarea name="meta_description"><?php echo $u->meta_description; ?></textarea>
                        <em><?php if(isset($this->form_error["meta_description"])){ echo $this->form_error["meta_description"]; }?></em>
                    </td>
                </tr>
                
                
                <tr>
                
                    <td><label><?php echo $this->Lang["PRODUCT_IMG"]; ?></label></td>
                    <td><label>:</label></td>
                    <td>
                        <div class = "inputs">
                        <?php /*<input type="file" name="image[]"  id="first" onchange="return validateFileExtension(this)" /></div>

                        <input type="button" id="add" value="<?php echo $this->Lang['MRE_IMG']; ?>" >
                        <input type="button" id="remove" value="<?php echo $this->Lang['RMV']; ?>" >
                        <em><?php if(isset($this->form_error["image"])){ echo $this->form_error["image"]; }?></em> */ ?>
                         <label><?php echo $this->Lang['IMG_UP_S']; ?>  </label>
                    </td>
                </tr>

                <tr>
                <td></td>
                <td></td>
               
                  <?php /* $con=0; 
                        for($i=1; $i<=5; $i++){ 
                                if(file_exists(DOCROOT.'images/deals/466_347/'.$u->deal_key.'_'.$i.'.png')) { 

                                        $con=$con+1; 
                                } 
                         } */ ?>
                
               
                <?php for($i=1; $i<=5; $i++){ ?>
                <td style="float:left;">
					<div class="merchant_store_img_edit">
							<div class="popup">
							<div class = "inputs">
								
								</div>
								<input type="button" id="remove<?php echo '_'.$i;?>" value="<?php echo $this->Lang['CANCEL']; ?>" >
								<input type="button" id="upload<?php echo '_'.$i;?>" value="<?php echo $this->Lang['ADD']; ?>" onchange="return validateFileExtension1(this,<?php echo $i;?>)">
								
							</div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="uploadWrapper">
                                                            <span class="image_upload">
                                                                <img src="<?php echo PATH.'images/image_upload.png';?>" alt="<?php echo $this->Lang['EDIT']; ?>" title="<?php echo $this->Lang['EDIT']; ?>" />
                                                            </span>
                                                        <input type="file" name="image[]"  class="first" id="first<?php echo '_'.$i;?>" onchange="return validateFileExtension1(this,<?php echo $i;?>)"  style="width:24px;"  title="<?php echo $this->Lang['EDIT']; ?>"/>                                                        
                                                            <?php if($i!=1){ ?>
                                                            <?php  if(file_exists(DOCROOT.'images/products/1000_800/'.$u->deal_key.'_'.$i.'.png'))  { ?>

                                                            <a class="image_delete" href="<?php echo PATH; ?>delete-product-images.html?id=<?php echo $u->deal_id; ?>&img=<?php echo base64_encode($u->deal_key.'_'.$i);?>&deal_key=<?php echo $u->deal_key; ?>" onclick="return confirm('<?php echo $this->Lang["ARE_U_DEL"]; ?>')" title="<?php echo $this->Lang['DELETE']; ?>">
                                                                <img src="<?php echo PATH.'images/image_delete.png';?>" alt="<?php echo $this->Lang['DELETE']; ?>" title="<?php echo $this->Lang['DELETE']; ?>" />
                                                            </a>
                                                                        <?php } ?>
                                                                         <?php } ?>
                                                        </div>
                                                            

							
							
							
							
						</div>
                <?php  if(file_exists(DOCROOT.'images/products/1000_800/'.$u->deal_key.'_'.$i.'.png'))  { ?>
 <img id="del<?php echo '_'.$i;?>" border="0" src= "<?php echo PATH.'resize.php';?>?src=<?php echo PATH.'images/products/1000_800/'.$u->deal_key.'_'.$i.'.png';?>&w=100&h=125" alt="" class="class_img<?php echo $i;?>"/>
                       <?php /* <img id="del<?php echo '_'.$i;?>" border="0" src= "<?php echo PATH.'images/products/466_347/'.$u->deal_key.'_'.$i.'.png';?>" alt="" width="100" /> */ ?>
                <?php } else {  ?>
<img style="float:left;" border="0" src= "<?php echo PATH.'resize.php';?>?src=<?php echo PATH.'/images/no-images.png';?>&w=100&h=125" alt="" class="class_img<?php echo $i;?>" />
						
                <?php } ?>   
               
                 <p id="img_name<?php echo '_'.$i; ?>"></p>
                                   
				<script>
$(document).ready(function(){
       //$('#first<?php echo '_'.$i;?>').hide();
       $('#remove<?php echo '_'.$i;?>').hide();
       $('.popup').hide();
       $('#upload<?php echo '_'.$i;?>').hide();
       var i = $('inputs').size() + 0;
       
        
    $("#show-panel<?php echo '_'.$i;?>").click(function() { 
		$('#first<?php echo '_'.$i;?>').show();
		$('.popup').show();
        $('#remove<?php echo '_'.$i;?>').show();
        $('#upload<?php echo '_'.$i;?>').show();
        $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
		$('#fade').css({'filter' : 'alpha(opacity=100)'}).fadeIn();
		$('#fade').css({'visibility' : 'visible'});
        
        
        if(i != 4)  {
			
		i++;
        if(i == 4)  {
                $('#add').hide();
        }
        }else{ $('#add').hide(); } 
    });
    
    $('#remove<?php echo '_'.$i;?>').click(function() {
        if(i > 0) { 
			$('#first<?php echo '_'.$i;?>').val('');
        $('#first<?php echo '_'.$i;?>').hide();
        $('#upload<?php echo '_'.$i;?>').hide();
         $('.popup').hide();
         
         
		$('#fade').css({'filter' : 'alpha(opacity=100)'}).fadeOut();
		$('#fade').css({'visibility' : 'invisibe'});
        i--;
        if(i==0)
        { 
		$('#first<?php echo '_'.$i;?>').val('');
        $('#remove<?php echo '_'.$i;?>').hide();
        $('#upload<?php echo '_'.$i;?>').hide();
         $('.popup').hide();
         
        }
        }else if(i == 0){
        alert('No more to remove');
        i = 1;
        return false;
        }
    });
         
         
         
    $("#upload<?php echo '_'.$i;?>").click(function() { 
		if($('#first<?php echo '_'.$i;?>').val()=='') {
			alert("Please add some Image file");
			
		} else {
	$('#first<?php echo '_'.$i;?>').hide();
        $('#remove<?php echo '_'.$i;?>').hide();
        $('#first<?php echo '_'.$i;?>').val();
        var img_name_dis = $('#first<?php echo '_'.$i;?>').val();
        var res = "..."+img_name_dis.substr(img_name_dis.length - 13);
        $('#img_name<?php echo '_'.$i; ?>').html(res);
        $('#upload<?php echo '_'.$i;?>').hide();
        $('#fade').css({'filter' : 'alpha(opacity=100)'}).fadeOut();
		$('#fade').css({'visibility' : 'invisibe'});
        
		}
		
       
    });
    

});

function validateFileExtension1(input,idvalue) {
        var resdis = ".class_img"+idvalue;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(resdis)
                    .attr('src', e.target.result)
                    .width(100)
                    .height(125);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script></td>
                <?php } ?>
                
                </tr> 
                 </table>
                </div>
                 <div class="mergent_det2 user_date">
					<fieldset>
						<legend><?php echo $this->Lang["FR_STR_TRANS_ONLY"]; ?></legend>
						<table>
							    <?php  $duration = unserialize($u->product_duration); 
                               $this->merchant_duration = $this->products->get_duration_values($u->merchant_id); // store credits options ?>
						 <?php if(count($this->merchant_duration)>0) { ?>        
						<tr id="duration1">
							<td><label><?php echo $this->Lang["STR_CRD"]; ?></label><span></span></td>
							<td><label>:</label></td>
							<td>
								<?php $i=0; foreach($this->merchant_duration as $dur) {  if(isset($duration[$i])) {  if($dur->duration_id.','.$dur->duration_period == $duration[$i]) { ?>
										<input type="checkbox" <?php if($dur->duration_id.','.$dur->duration_period == $duration[$i]) { ?> checked <?php } ?> name="duration[]" value="<?php echo $dur->duration_id.','.$dur->duration_period; ?>" />	<?php echo $dur->duration_period; ?><?php echo $this->Lang['MTHS']; ?>
							   <?php $i++; } else { ?> 
										<input type="checkbox"  name="duration[]" value="<?php echo $dur->duration_id.','.$dur->duration_period; ?>" />	<?php echo $dur->duration_period; ?><?php echo $this->Lang['MTHS']; ?>
							   <?php } } else { ?> 
										<input type="checkbox"  name="duration[]" value="<?php echo $dur->duration_id.','.$dur->duration_period; ?>" />	<?php echo $dur->duration_period; ?><?php echo $this->Lang['MTHS']; ?>
							   <?php } } ?>
								<em></em>
							</td>
						</tr>
						<?php }else{ ?>
						
							<tr id="duration1">
							<td><label><?php echo $this->Lang["STR_CRD"]; ?></label><span></span></td>
							<td><label>:</label></td>
							<td>
								<label><?php echo $this->Lang['NO_SHOP_CREDITS'];?></label>	
								
								<em></em>
							</td>
						</tr>
						<?php } ?>
							  
						</table>
					</fieldset>
                </div>
                <table>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="hidden" id="status" name="status" value="<?php if($this->preview_type=='edit'){ echo $u->deal_status; }else{ echo "2";}?>">
							<input type="submit" value="<?php if($this->preview_type=='edit'){ echo $this->Lang['UPDATE']; }else{ echo $this->Lang['SUBMIT']; }?>" id="check2">
							<input type="button" value="<?php echo $this->Lang['PREVIEW']; ?>"  onclick="check_validation();"/>
							<input type="button" value="<?php echo $this->Lang['CANCEL']; ?>" onclick='window.location.href="<?php echo PATH?>admin/manage-products.html"'/>
						</td>
					</tr>
                </table>
                <?php }?>
        </form>
        
    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>

<?php // for attribute 
						 $attr= $this->all_attributes;
						  $append_select= "";
 						 if(count($attr) > 0){
 						 $append_select.= '<option value=""> '.$this->Lang['SEL_SPECI'].'</option>';
 							foreach($attr as $a){
							   if(count($a['attribute']) > 0){
								   $group_name = $a['name'];
									$append_select.= '<optgroup label="'.$group_name.'">';
									foreach($a['attribute'] as $atr){
									   $append_select.= '<option value="'.$atr['attribute_id'].'"> '.$atr['name'].'</option>';
									}//end of attribte foreach
							   } // end of attribute count
							   else{
							   $append_select.= '<option value="-1">'.$this->Lang['NO_ATTR'].'</option>';
							   }
							   
						   } //end of attribute group loop
						 }else{
						  $append_select.= '<option value="-1">'.$this->Lang['NO_ATTR'].'</option>';
						   
						 } 
						 
						 ?>

 <script type="text/javascript">

function RemoveAttribute(val) {
 
  $("#row-"+val).remove();
}

 
var totrow=  <?php echo count($this->product_attributes);?>;
 
var sel= '<?php echo $append_select;?>';

function addAttribute() {
 var addedrow = $('.atrmain').length;

 if (totrow > addedrow){
		 html  = '<tr class="atrmain" id="row-'+addedrow+'"> <td>&nbsp;</td><td>&nbsp;</td> <td> ';
		 html += '<select name="attribute[]" style="margin:0 5px 0 0;">';
		 html += sel;
		 html += '  </select>  ';
		 html+= '<input type="text" name="attribute_value[]" value="">  ' ;
		html+= ' <input type="button" name="remove" onclick="RemoveAttribute('+addedrow+')" class="btn_remove" value="Remove">   </td> </tr>' ;
		 
		 $('#btns').before(html);
	   }else{
		alert("Maximum limit reached");
		return false;
		
	   }
 
 
}

function addDelivery() {
 var Deliverydrow = $('.policymain').length;

		 html  = '<tr class="policymain" id="row-'+Deliverydrow+'">  ';
                  html+= '<td><label><?php echo $this->Lang["DEL_POLICY"]; ?> </label></td>';
                  html+= ' <td><label>:</label></td>';
		 html+= '<td> <input type="text" name="Delivery_value[]" value="">' ;
		html+= ' <input type="button" name="remove" onclick="RemoveDelivery('+Deliverydrow+')" class="Delivery_remove" value="Remove">   </td> </tr>' ;
		 
		 $('#Delivery').before(html);
 
 
}

function RemoveDelivery(val) {
 
  $("#row-"+val).remove();
}

function showatr(value) {
    //var value = $('input:radio[name=attr_option]:checked').val();
	 
	 if(value==1) {
	  $(".attribute").show();
	 }else{
	  $(".attribute").hide();
	 }
}

function shospe(value) {
    //var value = $('input:radio[name=attr_option]:checked').val();
	 
	 if(value==1) {
	  $(".spe_show").show();
	 }else{
	  $(".spe_show").hide();
	 }
}
function check_validation(){
	$('#status').val(2);
	
	 var value = $('input:radio[name=size_val]:checked').val();
	 var has_size = false;
	 if(value == 1){
		 var checked = $(".size_show select");
			for(var i = 0; i <checked.length; i++){
				if($(checked[i]).val()){
					has_size = true;
					break;
				};
			}
			
			if(!has_size){
				alert("<?php echo $this->Lang["PLS_CHK"]; ?>");
				return false;
			}
	 }
	
	
	 var a = 0, rdbtn=document.getElementsByName("shipping")
	for(i=0;i<rdbtn.length;i++) {
			if(rdbtn.item(i).checked == false) {
					a++;
			}
	}

	if(a == rdbtn.length) {
			alert("No way you submit it without choose shipping method");
			return false;
	}
	/*if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('weightaramex').value == '') ||  (document.getElementById('weightaramex').value == '0')) { 
			document.getElementById("weightaramex").focus();
            alert("Please enter product weight");
            return false; 
		} 
	}
	if ((document.getElementById('productaramex').checked)) {
		if ((document.getElementById('lengtharamex').value == '') ||  (document.getElementById('lengtharamex').value == '0')) { 
			document.getElementById("lengtharamex").focus();
            alert("Please enter product length");
            return false; 
        }
	} 
    if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('heightaramex').value == '') ||  (document.getElementById('heightaramex').value == '0')) { 
			document.getElementById("heightaramex").focus();
            alert("Please enter product heigh");
            return false; 
        }
	}
	if ((document.getElementById('productaramex').checked)) {
        if ((document.getElementById('widtharamex').value == '') ||  (document.getElementById('widtharamex').value == '0')) { 
			document.getElementById("widtharamex").focus();
            alert("Please enter product width");
            return false; 
        }
	}*/
	if ((document.getElementById('perquantity').checked)) {         
		if ((document.getElementById('Wholesale').value == '') ||  (document.getElementById('Wholesale').value == '0')) { 
			document.getElementById("Wholesale").focus();
            alert("Please enter your shipping amount");
            return false; 
		} 
	}
	if ((document.getElementById('perproduct').checked)) {
		if ((document.getElementById('Wholesale').value == '') ||  (document.getElementById('Wholesale').value == '0')) { 
			document.getElementById("Wholesale").focus();
            alert("Please enter your shipping amount");
            return false; 
        }
	}
	if($("input[name=color_val]:checked").val() == 1){
		var c = $("input[name='color[]']:checked").length>0; 
        if(!c){
			alert("<?php echo $this->Lang["PLS_COL"]; ?>");
            return false;
		} 
	}
	$('#yourFormId').submit();    
}

$('document').ready(function(e) {
			  
			  <?php if(isset($this->form_error["city_tag[]"])){ ?>
			  
			  			
						$('#id_rm_color').trigger('click');
						$('#id_add_color').trigger('click');
						//$('#id_add_color').attr("checked", "checked");
						
			  <?php }else{ ?>
			  			if($('#id_color_count').val() == "0"){
						
				  		$('#id_add_color').trigger('click');
						$('#id_rm_color').trigger('click');
						$('#id_rm_color').attr("checked", "checked");
						
						}else{
							$('#id_rm_color').trigger('click');
							$('#id_add_color').trigger('click');
							$('#id_add_color').attr("checked", "checked");
						}
			  <?php }?>
				
				
				
				
			
        });
 </script>
 
<script type="application/javascript">

$(document).ready(function(e) {
    
      set_selected_size();
                   
});


function set_selected_size(){
	
	<?php
	
	if(isset($_POST['size'])){?>
			<?php $sizes =  $_POST['size'];
			$size_q = $_POST['size_quantity'];
	 for($i = 2; $i < count($_POST['size']); $i++){
		 ?>
			addSize("<?php echo $sizes[$i]?>", "<?php echo $size_q[$i]?>");
	<?php }?>
	
	<?php if($_POST['size_val'].'' === '1'){?>
				$('#id_no_size').trigger('click');
				$('#id_sel_size').trigger('click');
				shosize();
			<?php }else{?>
			
					$('#id_sel_size').trigger('click');
					$('#id_no_size').trigger('click');
					shosize();
			
			<?php }?>
			
	<?php }else{?>
		
		
		<?php if(count($this->selectproduct_size) > 0) { ?>
                        <?php 
                            for($i = 1; $i < count($this->selectproduct_size); $i++){?>
									addSize("<?php echo $this->selectproduct_size[$i]->size_id; ?>", "<?php echo $this->selectproduct_size[$i]->quantity;?>");
                       <?php } ?>
					   	$('#id_no_size').trigger('click');
						$('#id_sel_size').trigger('click');
						shosize();
					   <?php }else{?>
						   	$('#id_sel_size').trigger('click');
							$('#id_no_size').trigger('click');
							shosize();
							<?php
					   }?>
				
		
	<?php }?>
}


function shosize() {
    var value = $('input:radio[name=size_val]:checked').val();
	 if(value==1) {
	  $(".size_show").show();
	   $(".display_div").hide();
	   
	 }else{
	  $(".size_show").hide();
	  $(".display_div").show();
	  
	 }
	 
}

function check_dup(sel){
	var sel = $(sel);
	$(sel).removeClass('sel_size_class');
	var sels = $('.sel_size_class');
	
	
	for(var i = 0; i < sels.length; i++){
		
		if($(sels[i]).val() == $(sel).val()){
			$(sel).val("");
			alert("Duplicate size, please select a new size");
			return false;
		}
		
		
	}
	
	$(sel).addClass('sel_size_class');
}

function addSize(size_id, q) {
		
		
		var sel_s= '<?php echo $append_select_size;?>';
		var addedrow = $('.size_main').length;

		 html  = '<tr class="size_main size_show " id="row_s-'+addedrow+'"><td></td><td></td>  <td> ';
		 html += '<select name="size[]" class = "sel_size_class" onchange ="check_dup(this);">';
		 html += sel_s;
		 html += '  </select>  ';
		 html+= '<input type="text" name="size_quantity[]" placeholder="<?php echo $this->Lang['MENTION_SIZE_ENTER_Q'];?>" onkeypress="return isNumberKey(event)">  ' ;
		 html+= '<input type="button" name="remove" onclick="RemoveSize('+addedrow+')" class="btn_remove" value="Remove">   </td> </tr>' ;
		 $('#btns_s').before(html);
		 if(size_id)
		 $('#row_s-'+addedrow+' select').val(size_id);
		 
		 if(q)
		 $('#row_s-'+addedrow+' input:text').val(q);
		 
		
		
	  
}

function RemoveSize(val) {
        $("#row_s-"+val).remove();
}



</script>

