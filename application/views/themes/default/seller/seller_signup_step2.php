<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
<style>
.error{float: left;width: 50%; } 
</style>                   
<!-- SELLER SIGNUP -->
    </style>

<style>
    
    .swifta_con{
        
        width: 300ppx;
        background-color: #fff;
        height: 850px;
        margin-left: 200px;
        
        
        
    }
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


.payment_form_sections {
    width: 100%;
    /*float: left;*/
    margin-left: -240px;
     height: 750px;
}

.payment_forms{
    
    width:50%;float:right;
    margin-left: -240px;
    height: 750px;
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

  padding: 5px 0;
  
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

 
 color: #000000;
 font-size:small;

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


                   <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer seller_t">                
                <h2 class="seller_sign_title"><?php echo $this->Lang['WEL_SEL_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_STRE']; ?></p>
                <div class="seller_signup clearfix">
                    <div class="seller_signup_menu">
                       <div class="seller_signup_introduction">
                            <span>01</span>
                            <p style=" font-weight: bold; color:#000000"><a href = "<?php echo PATH; ?>merchant-signup-step1.html"><?php echo $this->Lang['INTRO']; ?></a></p>
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
                            <p style=" font-weight: bold; color:#000000"><?php echo $this->Lang['FINISH']; ?></p>                            
                        </div>
                    </div>
                 <form action="" method="post" name="signup2" id="signup2"  onclick="return atleast_onecheckbox(event)" onsubmit="return checkCheckBoxes(this);" >
                    <div class="payouter_block pay_br">
<!--                        <h3 class="paybr_title pay_titlebg"><?php //echo $this->Lang['CRTE_YR_STRE']; ?>: <?php //echo $this->Lang['SIGN_UP']; ?></h3>-->
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_sections">
                                <div class="payment_form ">
                                <ul>
                                    <li>
                                       
                                <div class="">
                                    <span class="asterisks_input">  </span>
									<input autofocus type="text" name="firstname" id="fname" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_FIRST_NAME']; ?>" 
									<?php if($this->session->get('firstname')) { ?>
                                                                        value="<?php  echo $this->session->get('firstname');} ?>" required autofocus  /> 			
									<em><?php if(isset($this->form_error['firstname'])){ echo $this->form_error["firstname"]; }?></em>
									
								</div>
                                    </li>
					<li>			
                                            
								<div class="">
								        <span class="asterisks_input">  </span>
									<input type="text" name="lastname" class="swifta_input" id="lname" placeholder= "<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" 
									<?php if($this->session->get('lastname')) { ?>
									value="<?php  echo $this->session->get('lastname'); ?>" required autofocus/> 			                <?php } else { ?>
									value="<?php if(!isset($this->form_error['firstname']) && isset($this->userPost['lastname'])){echo $this->userPost['lastname'];}?>" placeholder= "<?php echo $this->Lang["LAST_NAME"]; ?>"  />
									<?php } ?>
									<em><?php if(isset($this->form_error['lastname'])){ echo $this->form_error["lastname"]; }?></em>
								</div>
                                    </li>
                                    <li>
                                       
								<div class="">
                                                                    <span class="asterisks_input">  </span>
									<input type="text" name="email" id="email"  class="swifta_input" placeholder= "<?php echo $this->Lang['ENTE_EMAIL_F']; ?>"
									<?php if($this->session->get('memail')) { ?>
									value="<?php  echo $this->session->get('memail'); ?>" required autofocus /> 			                <?php } else { ?>
									 value="<?php if(!isset($this->form_error['email']) && isset($this->userPost['email'])){echo $this->userPost['email'];}?>" placeholder= "<?php echo $this->Lang["EMAIL_F"]; ?>"  />
									 <?php  } ?>
									<em> <?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?> </em>
								</div>
                                    </li>
                                    <li style="display: none;">
                                        <label><?php echo $this->Lang['ADD_PAYPAL_ACC']; ?> <span style="color:red;">*</span>:</label>
                                <div class="">
                                
									<input type="text" name="payment_acc" class="swifta_input" 
									<?php if($this->session->get('payment_acc')) { ?>
									value="<?php  echo $this->session->get('payment_acc'); ?>" placeholder= "<?php echo $this->Lang['ADD_PAYPAL_ACC']; ?>" /> 			                        <?php } else { ?>
									value="<?php if(!isset($this->form_error['payment_acc']) && isset($this->userPost['payment_acc'])){echo $this->userPost['payment_acc'];}?>" placeholder="<?php echo $this->Lang['ADD_PAYPAL_ACC']; ?>" />
									<?php } ?>
									<em><?php if(isset($this->form_error['payment_acc'])){ echo $this->form_error["payment_acc"]; }?></em>
                                </div>
                                    </li>
                                    
                                    
                                    
                                <li >
                                        
								<div class="" style="display:none;">
									<input type="text" name="nuban" class="swifta_input" placeholder= "<?php echo $this->Lang['ZENITH_ACCOUNT_ENTER_PLACEHOLDER']; ?>"
									<?php if($this->session->get('nuban_session')) { ?>
                                                                        value="<?php  echo "1111111111"; }?>"  /> 			 
									<em><?php if(isset($this->form_error['error_nuban'])){ echo $this->form_error["error_nuban"]; }?></em>
                                </div>
                                </li>
                                
					<li class="frm_clr">			
                                            
								<div class="">
                                                                    <span class="asterisks_input">  </span>
									<input type="text" name="mr_address1" id="addrs1" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_ADDR1']; ?>"
									<?php if($this->session->get('mraddress1')) { ?>
									value="<?php  echo $this->session->get('mraddress1'); ?>"  required autofocus/> 			 <?php } else { ?>
									value="<?php if(isset($this->userPost['mr_address1'])){echo $this->userPost['mr_address1'];}?>" placeholder="<?php echo $this->Lang["ENTER_ADDR1"]; ?>" />
									<?php } ?>
									<em><?php if(isset($this->form_error['mr_address1'])){ echo $this->form_error["mr_address1"]; }?></em>
                                        </div>
                                    </li>
                                    
                                <li>
                                    
                                 <div class="" style="display:none;">
									<input type="text" name="mr_address2" class="swifta_input" 
									<?php if($this->session->get('mraddress2')) { ?>
                                                                        value="<?php  echo "address";} ?>" placeholder= "<?php echo $this->Lang['ENTER_ADDR2']; ?>" /> 			
									
									<em><?php if(isset($this->form_error['mr_address2'])){ echo $this->form_error["mr_address2"]; }?></em>
                                 </div>
                                </li>
                                <li class="frm_clr">
                                   
								<div class="">
                                                                    <span class="asterisks_input">  </span>
									<input type="text" name="mr_mobile" class="swifta_input" id="mob" placeholder= "<?php echo $this->Lang['ENTER_PHONE']; ?>"
									<?php if($this->session->get('mphone_number')) { ?>
									value="<?php  echo $this->session->get('mphone_number'); ?>" required autofocus /> 			 <?php } else { ?>
									value="<?php if(!isset($this->form_error['mr_mobile']) && isset($this->userPost['mr_mobile'])){echo $this->userPost['mr_mobile'];}?>" placeholder="<?php echo $this->Lang["ENTER_PHONE"]; ?>"  />
									<?php } ?>
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
                                <label><?php echo $this->Lang['SUBSECTOR']; ?> <span style="color:red;">*</span>: </label>
                                <div class="">
				<?php if($this->session->get('sector')){ ?>
                                <select name="subsector" id="subSector"  class="swifta_input" onchange="previewTheme(this.text);">
                                            
                                <?php foreach ($this->sub_sector_list as $c) { ?>
                                <?php if($this->session->get('sector')==$c->main_sector_id){?>
                                <option  value="<?php echo $c->sector_id; ?>"<?php if($this->session->get('sub_sector')){ if ($this->session->get('sub_sector')==$c->sector_id ){ ?> selected <?php }}  ?> title="<?php echo $c->sector_name; ?>" ><?php echo $c->sector_name; ?></option>
                                <?php }} ?>
                                </select> 
                                <?php }else{ ?>
                                
                                <select name="subsector" id="subSector" class="required" onchange="previewTheme(this.text);">
                                <option value=""><?php echo $this->Lang['SELECT_SECTORS_FIRST']; ?></option>
                               
                                </select>
                                <?php } ?>
                                </div>
                                <em><?php if (isset($this->form_error['subSector'])) {
                                echo $this->form_error["subSector"];
                                } ?></em>

                                </li>


                                
                                <li class="fullname" style="margin-top: -10px;">
                                    <label><?php echo $this->Lang["STORE_PREVIEW"]; ?> :</label>
                                    <a href="javascript:openMainView();">
                                        <img src="" class="preview_theme_selected" style="width:150px;height:150px;"/>
                                    </a>
                                </li>
                                
                                
                                <li >
                                    <label>Shipping method <span style="color:red;">*</span>:</label>
                         <table> 
                                 <label>
                                        <?php if($this->free_shipping_setting == 1){ ?>
                                        <tr><td><label><input type="checkbox" name="free" value="1" 
                                        <?php if($this->session->get('payment_acc')) { if($this->session->get('free')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Free Shipping</label></td>
                                        <?php } else { ?>
                                        <input type="hidden" name="free" value="0" >
                                        <?php } if($this->flat_shipping_setting == 1){ ?>
                                       <td><label><input type="checkbox" name="flat" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('flat')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Flat Shipping</label></td></tr>
                                        <?php } else { ?>
                                        <input type="hidden" name="flat" value="0" >
                                        <?php } if($this->per_product_setting == 1){ ?>
                                        <tr><td><label><input type="checkbox" name="product" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('product')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Per product base Shipping</label></td>
                                        <?php } else { ?>
                                        <input type="hidden" name="product" value="0" >
                                        <?php } if($this->per_quantity_setting == 1){ ?>
                                        <td><label><input type="checkbox" name="quantity" value="1" <?php if($this->session->get('payment_acc')) { if($this->session->get('quantity')) { ?>
                                        checked <?php } } else { ?> checked <?php } ?>>Per quantity base Shipping</label></td></tr>
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
                            
                     <div class="p_inner_block clearfix" style="margin-left:300px; margin-top:-50px;">
                            <p class="merchant_intro">
                               
                            <?php echo $this->Lang['SELLER_INTRODUCTION']; ?> <a data-toggle="modal" data-target="#confirm-delete" href="<?php echo $this->Lang['ZMART AGREEMENT URL']; ?>"><?php echo $this->Lang['ZMART AGREEMENT']; ?></a>
                            <br><input type="checkbox" id="ch1"  /> <?php echo $this->Lang['ZMART CHECKBOX']; ?> <b><?php echo $this->Lang['ZMART AGREEMENT']; ?></b>
                            
                            </p>
                        </div>       
                    <div class="buy_it complete_order_button" style="margin-left:300px;">
                        <input type="submit" id="merchant_step1" title="<?php echo $this->Lang['SAVE']; ?> & <?php echo $this->Lang['CONTINUE']; ?>" value="<?php echo $this->Lang['SAVE']; ?> & <?php echo $this->Lang['CONTINUE']; ?>" >
                    </div>
                            
                               <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:250px;">
  
      <div class="modal-dialog">
          
  <div class="modal-content">
            
               
 <div class="modal-header">
   
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
    <h4 class="modal-title" id="myModalLabel">Agreement</h4>
                </div>
            
               
 <div class="modal-body">
                   
 <p>Agreement.</p>
   
                 <p>Do you want to proceed?</p>
                    
<p class="debug-url"></p>
               
 </div>
              
  
                <div class="modal-footer">
    
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
   
                 <a class="btn btn-danger btn-ok">Yes</a>
                </div>
            </div>
      
 
 </div>
    </div>

<script>
        $('#confirm-delete').on('show.bs.modal', function(e)
 {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
       
     
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    
</script>
               </form>
                </div>
            </div>
        </div>
    </div>
        </div>
        
        
        <div class='popup_block_theme'><?php echo new View("themes/" . THEME_NAME . '/seller/preview_theme_popup'); ?></div>
    <!-- SELLER SIGNUP -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="style.css" />
    
<script src="script.js"></script>
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
 </script>
 
 <script> 
function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              return false;
          }
}

function checkCheckBoxes(signup2) {
	if (signup2.ch1.checked == false ) 
	{
		alert ('Please accept the terms and condition');
		return false;
	} else { 	
		return true;
	}
}

    function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
	</script>
        
        <script>
            
            
            (function (exports) {
    function valOrFunction(val, ctx, args) {
        if (typeof val == "function") {
            return val.apply(ctx, args);
        } else {
            return val;
        }
    }

    function InvalidInputHelper(input, options) {
        input.setCustomValidity(valOrFunction(options.defaultText, window, [input]));

        function changeOrInput() {
            if (input.value == "") {
                input.setCustomValidity(valOrFunction(options.emptyText, window, [input]));
            } else {
                input.setCustomValidity("");
            }
        }

        function invalid() {
            if (input.value == "") {
                input.setCustomValidity(valOrFunction(options.emptyText, window, [input]));
            } else {
               input.setCustomValidity(valOrFunction(options.invalidText, window, [input]));
            }
        }

        input.addEventListener("change", changeOrInput);
        input.addEventListener("input", changeOrInput);
        input.addEventListener("invalid", invalid);
    }
    exports.InvalidInputHelper = InvalidInputHelper;
})(window);



//InvalidInputHelper(document.getElementById("fnames"), {
//    defaultText: "Please enter your firstname!",
//    emptyText: "Please enter your firstname!",
//    invalidText: function (input) {
//       return 'The firstname  "' + input.value + '" is invalid!';
//    }
//    
//    
//}
//);
InvalidInputHelper(document.getElementById("fname"), {
    defaultText: "Please enter your firstname!",
    emptyText: "Please enter your firstname!",
    invalidText: function (input) {
       return 'Make sure "' + input.value + '" is valid!';
    }
    
    
}

);
InvalidInputHelper(document.getElementById("compname"), {
    defaultText: "Please enter your company!",
    emptyText: "Please enter your company!",
    invalidText: function (input) {
        return 'The company  "' + input.value + '" is invalid!';
    }
    
    
}

); 

InvalidInputHelper(document.getElementById("lname"), {
    defaultText: "Please enter your lastname!",
    emptyText: "Please enter your lastname!",
    invalidText: function (input) {
        return 'The lastname  "' + input.value + '" is invalid!';
    }
    
    
}

); 

InvalidInputHelper(document.getElementById("email"), {
    defaultText: "Please enter your email!",
    emptyText: "Please enter your email!",
    invalidText: function (input) {
        return 'The email  "' + input.value + '" is invalid!';
    }
    
    
}

); 
    
    
    InvalidInputHelper(document.getElementById("adrs1"), {
    defaultText: "Please enter your address!",
    emptyText: "Please enter your address!",
    invalidText: function (input) {
        return 'The address  "' + input.value + '" is invalid!';
    }
    
    
}

);

//InvalidInputHelper(document.getElementById("email"), {
//    defaultText: "Please enter your email!",
//    emptyText: "Please enter your email!",
//    invalidText: function (input) {
//        return 'The email  "' + input.value + '" is invalid!';
//    }
//    
//    
//}
//
//);

  
    InvalidInputHelper(document.getElementById("adrs2"), {
    defaultText: "Please enter your address!",
    emptyText: "Please enter your address!",
    invalidText: function (input) {
        return 'The address  "' + input.value + '" is invalid!';
    }
    
    
}

);

  
    InvalidInputHelper(document.getElementById("mob"), {
    defaultText: "Please enter your phone number!",
    emptyText: "Please enter your phone number!",
    invalidText: function (input) {
        return 'The phone number  "' + input.value + '" is invalid!';
    }
    
    
}

);

 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       
       function checkCheckBoxes(signup2) {
	if (signup2.ch1.checked == false ) 
	{
		alert ('Please check the box');
		return false;
	} else { 	
		return true;
	}
}

      
</script>