<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
<style>
.error{float: left;width: 50%; } 
</style>

<style>
    /*test style*/

.swifta_h1, .swifta_input::-webkit-input-placeholder, button {

 font-family: 'roboto', sans-serif;

 -webkit-transition: all 0.40s ease-in-out;

 transition: all 0.40s ease-in-out;

}




.swifta_h1 {

  height: 70px;

  width: 100%;

  font-size: 18px;

  /*background: #18aa8d;*/
  
  background:#A61C00;

  color: white;

  line-height: 150%;

  border-radius: 3px 3px 0 0;

  box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.2);

}




.swifta_form {

 box-sizing: border-box;

  width: 570px;

  margin: 150px auto 0;

  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);

  padding-bottom: 40px;

  border-radius: 3px;

}




.swifta_form .swifta_h1  {

  box-sizing: border-box;

  padding: 20px;

}




.swifta_input  {

 margin: 5px 0px;
 
  width: 500px;

  display: block;

  border: none;

  padding: 10px 0;
  
  outline:none;

  
/*  border-bottom: solid 1px #A61C00;*/

    border-bottom: thin 1px #A61C00;
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -500px 0;

  background-size: 500px 100%;

  background-repeat: no-repeat;

 
 /*color: #A61C00;*/
 font-size:large;

}


/*.swifta_input  {

  margin: 40px 25px;

  width: 500px;

  display: block;

  border: none;

  padding: 10px 0;
  
  outline:none;

  
  border-bottom: solid 1px #A61C00;

  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -500px 0;

  background-size: 500px 100%;

  background-repeat: no-repeat;

  color: #0e6252;
 color: A61C00;

}*/
.swifta_input:focus, .swifta_input:valid {

 box-shadow: none;

 outline: none;

 background-position: 0 0;

}

.swifta_input:focus::-webkit-input-placeholder, swifta_input:valid::-webkit-input-placeholder {

 /*color: #1abc9c;*/
 color:#A61C00;
 font-size: 11px;

 -webkit-transform: translateY(-20px);

 transform: translateY(-20px);

 visibility: visible !important;
 

}




.swifta_button {

  border: none;

  /*background: #1abc9c;*/
 background:#A61C00;
  cursor: pointer;

  border-radius: 3px;

  padding: 6px;

  width: 200px;

  color: white;

  margin-left: 205px;

  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);

}




.swifta_button:hover {

  -webkit-transform: translateY(-3px);

  -ms-transform: translateY(-3px);

  transform: translateY(-3px);

  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);

}

.asterisk_input:after
{
content:"*"; 
color: #e32;
position: absolute; 
margin: 10px 0px 0px -57px; 
font-size: small; 
padding: 0 5px 0 0;

 }
 .asterisks_input:after
{
content:"*"; 
color: #e32;
position: absolute; 
margin: -5px 0px 0px 492px; 
font-size: small; 
padding: 0 5px 0 0;

 }
input[type=text],input[type=password]{border:#ccc solid 0px; border-bottom: 1px solid #ccc;}

</style>




<!-- SELLER SIGNUP -->
    <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer seller_t">                
                <h2 class="seller_sign_title"><?php echo $this->Lang['WEL_SEL_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_STRE']; ?></p>
                <div class="seller_signup clearfix">
                    <div class="seller_signup_menu">
                        <div class="seller_signup_introduction">
                            <span>01</span>
                            <p><?php echo $this->Lang['INTRO']; ?></p>
                        </div>
                        <div class="seller_signup_form_submit active_tab">
                            <span>02</span>
                            <p>Merchant <?php echo $this->Lang['SIGN_UP']; ?></p>                            
                        </div>
                        
                        <?php /*<div class="seller_signup_finish">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['SECTOR_SEL']; ?></p>                            
                        </div>*/?>
                        <div class="seller_signup_finish">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['FINISH']; ?></p>                            
                        </div>
                    </div>
                <form action="" method="post" name="signup2" id="signup2"  onclick="return atleast_onecheckbox(event)" >
                    <div class="payouter_block pay_br">
<!--                        <h3 class="paybr_title pay_titlebg">Merchant account: <?php echo $this->Lang['SIGN_UP']; ?></h3>-->
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_section">
                                <div class="payment_form payment_shipping_form ">
                                <ul>
                                    <li>
                                        
                                <div class="">
                                    <span class="asterisks_input">  </span>
                                    
<!--                                     <div class="">
                                    <input class="swifta_input" name="f_name" type="text" maxlength="20"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus required/>
                                   <em id="f_name_err"></em>
                                </div> -->
<input class="swifta_input" type="text" name="firstname"  placeholder= "<?php echo $this->Lang['ENTER_FIRST_NAME']; ?>" value="" autofocus required />
									
                                          <em><?php if(isset($this->form_error['firstname'])){ echo $this->form_error["firstname"]; }?></em>
<!--									<span class="asterisk_input">  </span> -->
								</div>
                                    </li>
					<li>			
                                           
								<div class="">
								          <span class="asterisks_input">  </span>
									<input type="text" name="lastname" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" 
									value="" autofocus required />
<!--								<span class="asterisk_input">  </span> -->
                                                                        <em><?php if(isset($this->form_error['lastname'])){ echo $this->form_error["lastname"]; }?></em>
                                                                </div>
                                    </li>
                                    <li>
                                        
								<div class="">
                                                                      <span class="asterisks_input">  </span>
									<input type="text" name="email"  class="swifta_input" placeholder= "<?php echo $this->Lang['ENTE_EMAIL_F']; ?>"
									value="" autofocus required />
                                                                        <em> <?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?> </em>
<!--								<span class="asterisk_input">  </span> -->
                                                                        
                                                                </div>
                                    </li>
                                    <li style="display: none;">
                                        
                                <div class="">
                                  <span class="asterisks_input">  </span>
									<input type="text" name="payment_acc" class="swifta_input" 
									value="" autofocus required />
                                                                        <em><?php if(isset($this->form_error['payment_acc'])){ echo $this->form_error["payment_acc"]; }?></em>
<!--                               <span class="asterisk_input">  </span> -->
                                </div>
                                    </li>
                                    
                                    
                                    
                                <li >
                                       
				<div class="">
                                      <span class="asterisks_input">  </span>
                                        <input type="text" name="nuban" class="swifta_input" placeholder= "<?php echo $this->Lang['ZENITH_ACCOUNT_ENTER_PLACEHOLDER']; ?>"
                                       value="" autofocus required />
                                        <em><?php if(isset($this->form_error['error_nuban'])){ echo $this->form_error["error_nuban"]; }?></em>
                                        <br /><span style="font-size:92%;"><strong style="color:blue;">Don't have a Zenith Bank Account? </strong> 
                                            <a href="<?php echo PATH; ?>merchant-signup-account-opening.html" style="color:green;">Open an Account Here</a></span>
                              
                                </div>
                                </li>
                                
					<li class="frm_clr">			
                                            
								<div class="">
                                                                      <span class="asterisks_input">  </span>
									<input type="text" name="mr_address1" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_ADDR1']; ?>"
									value="" required autofocus/>
									<em><?php if(isset($this->form_error['mr_address1'])){ echo $this->form_error["mr_address1"]; }?></em>
<!--                                        <span class="asterisk_input">  </span> -->
                                                                </div>
                                    </li>
                                    
                                <li>
                                    
                                 <div class="">
					  <span class="asterisks_input">  </span>			
                                     <input type="text" name="mr_address2" class="swifta_input" value="<?php  echo $this->session->get('mraddress2'); ?>" placeholder= "<?php echo $this->Lang['ENTER_ADDR2']; ?>" value="" required autofocus /> 			
									<em><?php if(isset($this->form_error['mr_address2'])){ echo $this->form_error["mr_address2"]; }?></em>
                                
                                 </div>
                                </li>
                                <li class="frm_clr">
                                    
								<div class="">
                                                                      <span class="asterisks_input">  </span>
									<input type="text" name="mr_mobile" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_PHONE']; ?>" value="" required autofocus/>
									
									<em><?php if(isset($this->form_error['mr_mobile'])){ echo $this->form_error["mr_mobile"]; }?></em>
                                 
                                                                </div>
                                </li>

                                 <li >
                               
				<div class="">
                                <select name="sector" id="sector"  class="swifta_input"  onchange="changing_sectors(this.value)">
                                <option value=""><?php echo $this->Lang["SECTOR_SEL"]; ?></option>
                               
                                <?php foreach ($this->sector_list as $c) { ?>
                                <option  <?php  if($this->session->get('sector')){ if ($c->sector_id ==$this->session->get('sector')) { ?> selected <?php } } ?> title="<?php echo $c->sector_name; ?>"value="<?php echo $c->sector_id; ?>" ><?php echo $c->sector_name; ?></option>
                                <?php } ?>
                                </select>									
				<em><?php if(isset($this->form_error['sector'])){ echo $this->form_error["sector"]; }?></em>
                                </div>
                                </li>
                                <li class="subsector_list">
                                
                                <div class="">
				<?php if($this->session->get('sector')){ ?>
                                <select name="subsector" id="subSector"  class="swifta_input" onchange="previewTheme(this.text);">
                                            
                                <?php foreach ($this->sub_sector_list as $c) { ?>
                                <?php if($this->session->get('sector')==$c->main_sector_id){?>
                                <option  value="<?php echo $c->sector_id; ?>"<?php if($this->session->get('sub_sector')){ if ($this->session->get('sub_sector')==$c->sector_id ){ ?> selected <?php }}  ?> title="<?php echo $c->sector_name; ?>" ><?php echo $c->sector_name; ?></option>
                                <?php }} ?>
                                </select> 
                                <?php }else{ ?>
                                
                                <select name="subsector" id="subSector" class="swifta_input" onchange="previewTheme(this.text);">
                                <option value=""><?php echo $this->Lang['SELECT_SECTORS_FIRST']; ?></option>
                               
                                </select>
                                <?php } ?>
                                </div>
                                <em><?php if (isset($this->form_error['subSector'])) {
                                echo $this->form_error["subSector"];
                                } ?></em>

                                </li>


                                
                                <li class="frm_clr" style="float:left; margin-top: -5px;">
                                    <label><?php echo $this->Lang["STORE_PREVIEW"]; ?> :</label>
                                    <a href="javascript:openMainView();">
                                        <img src="" class="preview_theme_selected" style="width:150px;height:150px;"/>
                                    </a>
                                </li>
                                
                                
                                <li >
                                    <label>Shipping method <span style="color:red;">*</span>:
                                      <br />
                                      <em style="font-size:110%">Select shipping methods you offer customers respectively.</em>
                                    </label>
                         <table> 
                                 <label>
                                        <?php if($this->free_shipping_setting == 1){ ?>
                                        <tr><td><label><input type="checkbox" name="free" value="1" 
                                        <?php if($this->session->get('payment_acc')) { if($this->session->get('free')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Free Shipping<a id="id_ship_desc_free_qtn"  onclick="show_ship_desc(this);return false;" href="#">&nbsp;<i class="fa fa-question-circle"></i><i></i></a><span class="class_ship_desc" id="id_ship_free_desc"  style=" font-family:Arial, Helvetica, sans-serif; font-weight:normal; display: none; width: 200px; word-wrap: break-word; margin: 4px; border-bottom: 1px solid rgb(166, 28, 0); border-left: 1px solid rgb(166, 28, 0); border-radius: 4px; padding: 4px 4px 6px 6px; color: rgb(102, 102, 102); text-transform:none">
                                        NO shipping cost incurred by customer to ship the item.
                                        </span></label></td>
                                        <?php } else { ?>
                                        <input type="hidden" name="free" value="0" >
                                        <?php } if($this->flat_shipping_setting == 1){ ?>
                                       <td><label><input type="checkbox" name="flat" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('flat')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Flat Rate Shipping<a id="id_ship_desc_free_qtn"  onclick="show_ship_desc(this);return false;" href="#">&nbsp;<i class="fa fa-question-circle"></i><i></i></a><span class="class_ship_desc" id="id_ship_free_desc"  style=" font-family:Arial, Helvetica, sans-serif; font-weight:normal; display: none; width: 200px; word-wrap: break-word; margin: 4px; border-bottom: 1px solid rgb(166, 28, 0); border-left: 1px solid rgb(166, 28, 0); border-radius: 4px; padding: 4px 4px 6px 6px; color: rgb(102, 102, 102); text-transform:none; ">
                                       The shipping cost value is the same on all types of items.
                                        </span></label></td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="flat" value="0" >
                                        <?php } if($this->per_product_setting == 1){ ?>
                                        <tr><td><label><input type="checkbox" name="product" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('product')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Per product base Shipping<a id="id_ship_desc_free_qtn"  onclick="show_ship_desc(this);return false;" href="#">&nbsp;<i class="fa fa-question-circle"></i><i></i></a><span class="class_ship_desc" id="id_ship_free_desc"  style=" font-family:Arial, Helvetica, sans-serif; font-weight:normal; display: none; width: 200px; word-wrap: break-word; margin: 4px; border-bottom: 1px solid rgb(166, 28, 0); border-left: 1px solid rgb(166, 28, 0); border-radius: 4px; padding: 4px 4px 6px 6px; color: rgb(102, 102, 102);  text-transform:none; ">
                                        The shipping cost value varies from item to item.
                                        </span></label></td>
                                        <?php } else { ?>
                                        <input type="hidden" name="product" value="0" >
                                        <?php } if($this->per_quantity_setting == 1){ ?>
                                        <td><label><input type="checkbox" name="quantity" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('quantity')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Per quantity base Shipping<a id="id_ship_desc_free_qtn"  onclick="show_ship_desc(this);return false;" href="#">&nbsp;<i class="fa fa-question-circle"></i><i></i></a><span class="class_ship_desc" id="id_ship_free_desc"  style=" font-family:Arial, Helvetica, sans-serif; font-weight:normal; display: none; width: 200px; word-wrap: break-word; margin: 4px; border-bottom: 1px solid rgb(166, 28, 0); border-left: 1px solid rgb(166, 28, 0); border-radius: 4px; padding: 4px 4px 6px 6px; color: rgb(102, 102, 102);  text-transform:none; ">
                                        The shipping cost value varies basing on the quantity of items purchased.
                                        </span></label></td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="quantity" value="0" >
                                        <?php } if($this->aramex_setting == 1){ ?>
                                        <tr><td><label><input type="checkbox" name="aramex" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('aramex')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Aramex Shipping</label></td><td></td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="aramex" value="0" >
                                        <?php } ?>
                                        </label>
                                        </table>
                                </li>
                                
                                
                                    </ul>
                                    <div>
                            </div>
                        </div>
                    </div>
                    <div class="buy_it complete_order_button">
                        <input type="submit" id="merchant_step1" title="<?php echo $this->Lang['SAVE']; ?> & <?php echo $this->Lang['CONTINUE']; ?>" value="<?php echo $this->Lang['SAVE']; ?> & <?php echo $this->Lang['CONTINUE']; ?>" >
                    </div>
               </form>
                </div>
            </div>
        </div>
    </div>
        </div>
        
        
        <div class='popup_block_theme'><?php echo new View("themes/" . THEME_NAME . '/seller/preview_theme_popup'); ?></div>
    <!-- SELLER SIGNUP -->
    
 <script>
 
function openMainView(){
	$('#fade').css({'visibility' : 'visible'});
	$('.popup_block_theme').css({'display' : 'block'});
}

function previewTheme(s){
    
    var select = document.getElementById("subSector");
    var value = "";
    var image_path = "<?php echo PATH; ?>custom/images/themes/";
    //alert(value);
    //preview_theme_selected
    if (select.selectedIndex !== -1){
        value = select.options[select.selectedIndex].text;
        image_path+=value.toLowerCase()+".jpg";
    }
    else{
        value = "";
        image_path+="default.jpg";
    }
    
    $(".preview_theme_selected").attr("src", image_path);
    //document.getElementById("preview_theme_selected").src= image_path;
    //alert(image_path);
    
}

    $(document).ready(function(){
        $('.popup_block_theme').css({'display' : 'none'});
         $("#signup2").validate({
			 messages: {				 
		   firstname: {
			   required: "<?php echo $this->Lang['PLS_ENT_FNAM']; ?>"                         
		   },

		   lastname: {
			   required: "<?php echo $this->Lang['PLS_ENT_LNAM']; ?>"                         
		   },

		   email: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
				email:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>"                       
			},
		   
		   mr_address1: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		     mr_address2: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		  mr_mobile : {
			   required: "<?php echo $this->Lang['PLZ_ETR_PHO']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
		  error_nuban : {
			   required: "<?php echo $this->Lang['PLZ_ETR_NUBAN']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NUBAN']; ?>"                             
			},
			payment_acc: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
				email:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>"                       
			},
    },
 submitHandler: function(form) {
   // some other code
   // maybe disabling submit button
   // then:
	// $('div#submit').hide();
   form.submit();
 }
});
});
   


 function submit_form()
 {
	document.signup2.submit();
	
	 
	 
 }
 
 function show_ship_desc(desc){
	var descs = $('.class_ship_desc');
	for(i = 0; i < descs.length; i++)
	 $($(descs[i])).css({'display':'none'});
	 
	 var desc = $(desc).next('span');
	 desc.css({'display':'block', 'opacity':1}).animate({'opacity': 1}, 4000, function(){
		 
		 		desc.animate({'opacity': 0}, 1000, function(){
					desc.css({'display':'none'})
				});
				
		 });
	 
	 
	 return false;
 }
 </script>
 
 <script> 
function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              return false;
          }
}

	</script>
	
