<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
<script type="text/javascript">

function load_branches(sel) {
	
	if(is_branch_api_running){
	   return false;
   }
   is_branch_api_running = true;
   var sel_branch = $(sel);
   var sel_opt_label = sel_branch.children('option').first();
   sel_opt_label.text("Loading branches...");
   sel_branch.css({'color':'#384'});
  
   javascript:get_zenith_branches(sel_branch);
   return;
   
	}
	
  function load_classes(sel) {
			
			if(is_class_api_running){
			   return false;
		   }
		
		   is_class_api_running = true;
		   var sel_class = $(sel);
		   var sel_opt_label = sel_class.children('option').first();
		   sel_opt_label.text("Loading classes...");
		   sel_class.css({'color':'#384'});
		  
		   javascript:get_zenith_class(sel_class);
		   return;
		   
		}

</script>
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

.payment_form_sections {
    width: 100%;
    /*float: left;*/
    margin-left: -240px;
     height: 620px;
}

.payment_forms{
    
    width:50%;float:right;
    margin-left: -240px;
    height: 620px;
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

  border: none;

  padding: 10px 0;
  
  outline:none;
  
  width: 40%;

  
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
margin: 10px 0px 0px 0px; 
font-size: small; 
padding: 0 5px 0 0;

 }
 .asterisks_input:after
{
	content:"*"; 
	color: #e32;
	position: absolute; 
	margin: -5px 0px 0px 438px; 
	font-size: small; 
	padding: 0 5px 0 0;

 }
 
 .payment_shipping_form ul li {
	 float:none;
	 width: 100%;
 }
 
 
 
 .payment_form ul li {
	 float:none;
 }
 
 .payment_form ul {
	 float:none;
 }
 
 ul li em {
	 padding-left: 30%;
	 text-align: left;
	
 }
 
  ul li div.swifta_controls {
	   padding-left: 41%;
	   text-align: left;
  }
 
 
input[type=text],input[type=password]{border:#ccc solid 0px; border-bottom: 1px solid #ccc;}
/*test style closed*/
/*.fullname input[type=text],.fullname input[type=password],.fullname textarea{border: 1px solid #d9d9d9;font:normal 12px arial;  width:220px;color:#000;  padding: 7px;
    box-shadow: 1px 1px 1px 0 #EEEEEE inset;-moz-box-shadow: 1px 1px 1px 0 #EEEEEE inset;-webkit-box-shadow: 1px 1px 1px 0 #EEEEEE inset;background: #fff;
}*/
</style>

<!-- SELLER SIGNUP -->
    <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer seller_t">                
                <h2 class="seller_sign_title"><?php echo $this->Lang['WEL_M_Z_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_ACCT_OPEN']; ?></p>
                <div class="seller_signup clearfix">
                    <div class="seller_signup_menu">
                        <div class="seller_signup_introduction">
                            <span>01</span>
                            <p style=" font-weight: bold; color:#000000"><?php echo $this->Lang['INTRO']; ?></p>
                        </div>
                        <div class="seller_signup_form_submit active_tab">
                            <span>02</span>
                            <p>Merchant [A/C Opening]</p>                            
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
                    <div class="payment_form payment_shipping_form ">
         <!--<form id="zenith_account_open" name="zenith_offer" method="POST"  autocomplete="off">
                    <div class="payouter_block pay_br">
                        <h3 class="paybr_title pay_titlebg">Merchant bank account opening : </h3>
                        <div class="p_inner_block clearfix">
                            
                             <div class="payment_forms" style="margin: 0; float:none; height:auto;">
                              
                              <ul>                               
                            <li>
                            <?php //var_dump($this->form_error);?>
                              
                                <div class="">
                                     <span class="asterisks_input">  </span>
                                    <input class="swifta_input" name="f_name" type="text" id="fname"  tabindex="1"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="<?php if(isset($_POST['f_name'])){echo htmlentities($_POST['f_name'],  ENT_QUOTES,  "utf-8");}?>" autofocus  />
                                   <em id="f_name_err"><?php if(isset($this->form_error['f_name'])){echo $this->form_error['f_name'];}?></em>
                                </div> 
                            </li>
                             <li>
                             
                                
                                <div class="">
                                     <span class="asterisks_input">  </span>
                                   <input name="l_name" class="swifta_input" type="text" tabindex="2" id="lname"   placeholder="<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" value="<?php if(isset($_POST['l_name'])){echo htmlentities($_POST['l_name'],  ENT_QUOTES,  "utf-8");}?>" required/>
                                   <em id="l_name_err"><?php if(isset($this->form_error['l_name'])){echo $this->form_error['l_name'];}?></em>
                                </div>  
                                
                                
                            </li>
                            <li>
                                
                                <div >
                                     <span class="asterisks_input">  </span>
                                  <input name="email" class="swifta_input" type="text" maxlength="64" id="email" tabindex="3" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'],  ENT_QUOTES,  "utf-8");}?>" required/>
                                  <em id="email_err"><?php if(isset($this->form_error['email'])){echo $this->form_error['email'];}?></em>
                                </div>     
                            </li>
                             <li>
                                
                                <div class="">
                                     <span class="asterisks_input">  </span>
                                   <input name="phone" class="swifta_input" type="text" maxlength="11" tabindex="4" id="mob"  onkeypress="return isNumberKey(event)" placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" value="<?php if(isset($_POST['phone'])){echo htmlentities($_POST['phone'],  ENT_QUOTES,  "utf-8");}?>"  required/>
                                   <em id="phone_err"><?php if(isset($this->form_error['phone'])){echo $this->form_error['phone'];}?></em>
                                </div>  
                            </li>
                            <li>
                                
                                
                                
                                <div class="">
                                     <span class="asterisks_input">  </span>
                                   <input name="addr" class="swifta_input" type="text"  tabindex="5" id="addrss"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" value="<?php if(isset($_POST['addr'])){echo htmlentities($_POST['addr'],  ENT_QUOTES,  "utf-8");}?>" required />
                                   <em id="addr_err"><?php if(isset($this->form_error['addr'])){echo $this->form_error['addr'];}?></em>
                                </div>   
                                
                                  <div class="" style="margin-top:15px;">
                                                   <select name="gender" class="swifta_input" tabindex="6" required="required" value="<?php if(isset($_POST['gender'])){echo htmlentities($_POST['gender'],  ENT_QUOTES,  "utf-8");}?>">
                                            <option value="-99"><?php echo $this->Lang['SEL_GENDER']; ?></option>
                                           
                                             <option  title="<?php echo $this->Lang['MALE']; ?>" value="M" ><?php echo $this->Lang['MALE']; ?></option>
                                             <option  title="<?php echo $this->Lang['FEMALE']; ?>" value="F" ><?php echo $this->Lang['FEMALE']; ?></option>
   
                                    </select>
                                     <em id="gender_err"><?php if(isset($this->form_error['gender'])){echo $this->form_error['gender'];}?></em>
                                </div>  
                                
                                 <div class="" >
                                        <div id="CitySD_log">
                                      <select name="branch_no" id="id_z_branch" value="<?php if(isset($_POST['branch_no'])){echo htmlentities($_POST['branch_no'],  ENT_QUOTES,  "utf-8");}?>" tabindex="6"  class="swifta_input" required="required">
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_BRANCH']; ?></option>
                                            <?php
                                            //echo $this->branch_options;
                                            ?>
                                    </select>
                                    </div>
                                     <em id="branch_no_err"><?php if(isset($this->form_error['branch_no'])){echo $this->form_error['branch_no'];}?></em>
                                </div>
                                
                                 <div class="">
                                        <div id="CitySD_log">
                                      <select name="class_code" id = "id_z_class" class="swifta_input" tabindex="7" required="required" value ="<?php if(isset($_POST['class_code'])){echo htmlentities($_POST['class_code'],  ENT_QUOTES,  "utf-8");}?>">
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_CLASS']; ?></option>
                                            <?php
                                            //echo $this->class_code_options;
                                            ?>
                                    </select>
                                    <em id="class_code_err"><?php if(isset($this->form_error['class_code'])){echo $this->form_error['class_code'];}?></em>
                                    </div>
                                     
                                </div>
                            </li>
                            
                            
                         
                           <li class="check_box">
                                  <p><input type="checkbox" name="terms" id="id_terms" class="" value="0" required><?php echo $this->Lang['Z_BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" data-toggle="modal" data-target="#confirm-delete" href="<?php //echo PATH; ?>"><?php echo $this->Lang['TEMRS']; ?></a>
                         	<p id="id_terms" style="color:red;"></p>
                                </p>
                                <em id="terms_err"></em>
                            </li>
                            
                            </ul>
                           	  <div class="buy_it complete_order_button">                                  
                                 <input class="sign_submit" type="submit" value="Open Account" title="Open Account">
                                 
                            </div>
                            
                            &nbsp;&nbsp;&nbsp; <a href="<?php echo PATH."merchant-signup-step1.html"; ?>" class="sign_cancel">Go Back</a>
                            </div>
                            
                            
                        </div>
                    </div>
                   
          </form>-->
          <form style="text-align:center" id="zenith_account_open" name="zenith_offer" method="POST"  autocomplete="off">
          <div style="backgroundx: #f00;  margin: 10px 0px 0px; border: 1px solid #D3D2D1; ">
          <h3 class="paybr_title pay_titlebg" style=" text-align:left;">Merchant bank account opening : </h3>
          <ul>
          <li><div>
                                     <span class="asterisks_input">  </span>
                                    <input class="swifta_input" name="f_name" type="text" id="fname"  tabindex="1"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="<?php if(isset($_POST['f_name'])){echo htmlentities($_POST['f_name'],  ENT_QUOTES,  "utf-8");}?>" autofocus required="required"  />
                                   <em id="f_name_err"><?php if(isset($this->form_error['f_name'])){echo $this->form_error['f_name'];}?></em>
                                </div></li>
          <li><div>
                                     <span class="asterisks_input">  </span>
                                   <input name="l_name" class="swifta_input" type="text" tabindex="2" id="lname"   placeholder="<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" value="<?php if(isset($_POST['l_name'])){echo htmlentities($_POST['l_name'],  ENT_QUOTES,  "utf-8");}?>" required/>
                                   <em id="l_name_err"><?php if(isset($this->form_error['l_name'])){echo $this->form_error['l_name'];}?></em>
                                </div></li>
          <li><div> <span class="asterisks_input">  </span>
                                  <input name="email" class="swifta_input" type="text" maxlength="64" id="email" tabindex="3" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'],  ENT_QUOTES,  "utf-8");}?>" required/>
                                  <em id="email_err"><?php if(isset($this->form_error['email'])){echo $this->form_error['email'];}?></em>
                                </div></li>
          <li><div><span class="asterisks_input"></span><input name="phone" class="swifta_input" type="text" maxlength="11" tabindex="4" id="mob"  onkeypress="return isNumberKey(event)" placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" value="<?php if(isset($_POST['phone'])){echo htmlentities($_POST['phone'],  ENT_QUOTES,  "utf-8");}?>"  required/><em id="phone_err"><?php if(isset($this->form_error['phone'])){echo $this->form_error['phone'];}?></em></div></li>
		  <li><div class=""><span class="asterisks_input"></span>
          <input name="addr" class="swifta_input" type="text"  tabindex="5" id="addrss"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" value="<?php if(isset($_POST['addr'])){echo htmlentities($_POST['addr'],  ENT_QUOTES,  "utf-8");}?>" required />
          <em id="addr_err"><?php if(isset($this->form_error['addr'])){echo $this->form_error['addr'];}?></em>
          </div></li>
          <li><div class="" style="margin-top:15px;"><span class="asterisks_input">  </span>
                                    <select name="gender" class="swifta_input" tabindex="6" required="required" value="<?php if(isset($_POST['gender'])){echo htmlentities($_POST['gender'],  ENT_QUOTES,  "utf-8");}?>">
                                            <option value="-99"><?php echo $this->Lang['SEL_GENDER']; ?></option>
                                           
                                             <option  title="<?php echo $this->Lang['MALE']; ?>" value="M" ><?php echo $this->Lang['MALE']; ?></option>
                                             <option  title="<?php echo $this->Lang['FEMALE']; ?>" value="F" ><?php echo $this->Lang['FEMALE']; ?></option>
   
                                    </select>
                                    <em id="gender_err"><?php if(isset($this->form_error['gender'])){echo $this->form_error['gender'];}?></em>
                                </div></li>                     
          <li><div id="CitySD_log"><span class="asterisks_input">  </span><select name="branch_no" onfocus="load_branches(this)" id="id_z_branch" value="<?php if(isset($_POST['branch_no'])){echo htmlentities($_POST['branch_no'],  ENT_QUOTES,  "utf-8");}?>" tabindex="6"  class="swifta_input" required="required">
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_BRANCH']; ?></option>
                                            <?php
                                            //echo $this->branch_options;
                                            ?>
                                    </select>
                                   <em id="branch_no_err"><?php if(isset($this->form_error['branch_no'])){echo $this->form_error['branch_no'];}?></em></div></li>                        
          <li><div id="CitySD_log"><span class="asterisks_input">  </span><span class="asterisks_input">  </span>
                                      <select name="class_code" onfocus="load_classes(this)" id = "id_z_class" class="swifta_input" tabindex="7" required="required" value ="<?php if(isset($_POST['class_code'])){echo htmlentities($_POST['class_code'],  ENT_QUOTES,  "utf-8");}?>">
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_CLASS']; ?></option>
                                            <?php
                                            //echo $this->class_code_options;
                                            ?>
                                    </select>
                                      <em id="class_code_err"><?php if(isset($this->form_error['class_code'])){echo $this->form_error['class_code'];}?></em></div></li>
          <li class="check_box"><p><input type="checkbox" name="terms" id="id_terms" class="" value="0" required><i>&nbsp;</i><?php echo $this->Lang['Z_BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" data-toggle="modal" data-target="#confirm-delete" href="<?php //echo PATH; ?>"><?php echo $this->Lang['TEMRS']; ?></a>
                         	<p id="id_terms" style="color:red;"></p>
                                </p>
                                <em id="terms_err"></em>
          </li>  
          
          <li><div class="swifta_controls">
          			<div class="buy_it complete_order_button">                                  
                                 <input class="sign_submit" type="submit" value="Open Account" title="Open Account" >
                                 
                            </div>                                
                                 <!--<input class="sign_submit" type="submit" value="Open Account"  title="Open Account" />-->
                                 <a href="<?php echo PATH."merchant-signup-step1.html"; ?>" style=" text-decoration:none; margin-left: 50px;">Go Back</a>
                                 
                            </div></li> 
                            
                              
                  
          </ul>
          </div>
          </form>
 		 <div class="modal fade" style="display:none" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:20px;">
  
      <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 30px;  width: 85%;">
          
  <div class="modal-content">
            
               
 <div class="modal-header">
   
<!--                 <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                
    <h4 class="modal-title" id="myModalLabel">TERMS AND CONDITIONS</h4>
                </div>
            
               
 <div class="modal-body">
 <h style="color:red;">TERMS AND CONDITIONS FOR THE ZENITH MARKETPLACE<h>
 <p style="color:black;">This serves to verify that you have had adequate opportunity to read and 
     understand the terms and conditions, and that you are aware of all the terms print in bold.
     Please contact us if you need further explanation of anything referred to herein or related 
     to the use of the ZMART. We can be reached via our email <h style="color:red;">info@zmart.com.ng</h> 
 you can speak with a ZMART Direct consultant via our interactive call center 
 helpline- 01 292 7000.
<br /><br />
By using the ZMART, you unconditionally and irrevocably agree to be bound by this terms and 
conditions, including but not limited to the laws, rules, regulations and official issuances 
applicable on the matter, now existing or which may hereinafter be enacted, issued or enforced. 
These terms and conditions comprise the agreement between Zenith Bank PLC (“Zenith Bank PLC”) 
and the Merchant in connection with the display of its goods and services on the ZMART</p>

<h style="text-align: center; color: red;">Obligations of the merchant</h><br>
<p style="color:black;">The Merchant shall establish, maintain and keep its Webpage valid at all 
    times, including the contents of same in line with the terms of this Agreement and as 
    specified or may be prescribed by Zenith Bank PLC from time to time.<br><br>

The Merchant shall provide all the information necessary when listing a product on its Webpage,
including but not limited to a detailed title and sub-title, price, quantity, picture and 
description. <br><br>

The Merchant shall ensure that all information provided on its Webpage is/are accurate, 
complete and in the form specified by Zenith Bank PLC from time to time.<br><br>

The Merchant shall keep its Account details confidential and shall promptly notify Zenith Bank 
PLC of any unauthorized use of its Account.<br><br>

The Merchant shall be responsible for any issues relating to its Webpage and shall be available 
upon request by Zenith Bank PLC to resolve any issues relating to its Webpage and for the 
resolution of all complaints and disputes from individuals patronizing the Merchant's webpage.<br><br>

The Merchant shall be solely responsible to conduct due diligence and establish the true identity, nature, 
ownership, source of funds, operational and transaction history of the business<br><br>

The Merchant shall publicly disclose on its Webpage its delivery process and timing, its fulfillment 
exchange and its return policies and also ensure that it is at all times compliant with same.<br><br>

The Merchant is prohibited from the display, sale of any products or engagement in any activity 
declared illegal under Nigerian Law including but not limited to narcotics, 
hard drugs, firearms, tobacco or tobacco products, armament productions, casino or companies 
where the principal source of income is gambling, Immoral and illegal activities, including but 
not limited to the display of pornographic photographs or materials or the sale of pornographic 
products, production or activities involving harmful or exploitative forms of forced labor 
and/or child labor, trade in wildlife or wildlife products that have been expressly prohibited 
by Law from public sale, production or trade in radioactive materials, unbounded asbestos fibers,
and hazardous chemicals; and investments harmful to the environment or any item which may cause 
public offence or has been expressly prohibited by Law. (See list of prohibited items on Appendix 1 below)<br><br>

The Merchant shall ensure that sizes of the images pasted on its Webpage shall be as prescribed 
by Zenith Bank PLC from time to time to ensure that the Platform functions at optimal capacity.<br><br>

The Merchant shall not switch from the sale of one category of Products to the other without the 
prior written approval of Zenith Bank PLC.<br><br>

The Merchant shall ensure the safety, correctness and security of all data and/or any 
information stored on its Webpage.<br><br>

The Merchant shall not host, display, upload, modify, publish, transmit, update or share any 
information that belongs to another Merchant or infringes upon or violates any third party’s 
rights including but not limited to intellectual property rights, rights of privacy or rights 
of publicity.<br><br>

The Merchant shall pay a non- refundable annual Platform Membership Fee (“PlatformFee”) 
of <strong>N10,000.00</strong> ( ten thousand Naira only). The Platform Fee shall be subject to 
periodic review at the sole discretion of Zenith Bank PLC. Any such reviews shall be communicated
to the merchant and shall become binding from the effective date communicated to the Merchant.<br><br>

The Merchant shall be solely responsible for timely delivery of goods and/or services to their 
customers. Zenith Bank shall not be involved in the delivery and logistics of goods sold on ZMART.<br><br>
</p>
     
<p>
    
<h style="text-align: center; color: red;">  Obligations of Zenith Bank Plc </h>
<p style="color:black;">
Zenith Bank PLC shall be responsible for the provision of the ZMART Services and shall grant the 
Merchant a non-exclusive access to the use of the Services provided that the Merchant is in 
strict compliance with the terms of this Agreement.
<br><br>

Zenith Bank PLC shall provide parameters/conditions for the provision of images and videos of the
Products to be displayed on the Platform and the content requirement of the information to be 
uploaded on the Platform and Webpage.
<br><br>

Zenith Bank PLC shall as much as it is within its ability, endeavor to provide necessary 
administrative and technical support for the Platform.
<br><br>

Zenith Bank PLC reserves the right, at its sole discretion to change, modify, revise, add or 
remove portions of the terms and conditions of this Agreement from time to time and such revised 
terms and conditions shall automatically become effective and binding on the Merchants and shall 
replace the current provisions of this Agreement accordingly affected thereby.
<br><br>
</p>   
    
<h style="color:red"> Representation and warranties <h>
<p style="color:black;">The Merchant hereby represents and warrants to Zenith Bank PLC as follows:<br><br>

That the Merchant is duly incorporated, validly existing and in good standing under the laws of 
Nigeria and has the legal authority to enter into this Agreement<br><br>

That the Merchant has the requisite skills, experienced management, certified personnel and 
technology to execute the services stated herein.<br><br>

That all the information relating to the Merchant or otherwise relevant to the matters 
contemplated by this Agreement which have been provided to Zenith Bank PLC by the Merchant are 
true and correct in all respects and shall notify Zenith Bank PLC of any material change in such 
information;<br><br>

The Merchant represents that it shall comply with all applicable privacy, consumer protection and 
other laws and regulations with respect to the Services.<br><br>
  
</p>
<h style="color:red;"> Event of default </h>
<p style="color:black;">The following provisions and a breach of any of the terms of this Agreement by the Merchant shall constitute an event of default under this Agreement:<br><br>

If any representation, warranty or information provided or statement made or deemed to be made 
by the Merchant is or proves to be incorrect, misleading or false in any material respect or if 
Zenith Bank PLC is unable to authenticate any information provided by the Merchant;<br><br>

If any corporate action, legal proceedings or other adverse procedure or step is taken against the Merchant;<br><br>

If the Merchant engages in any activity which would be considered illegal under Nigerian Law,
or engages in any activity that could be considered as fraudulent or misleading.<br><br>

If any event, fact or circumstance which has or could in the opinion of Zenith Bank PLC be 
likely to have a material adverse effect on the ability of the Merchant to perform any of 
its obligations under this Agreement;<br><br>

Any other reasons which in the sole opinion of Zenith Bank PLC constitutes an event of 
default and such decision is taken in the best interest of the general public.<br><br>

In the event of any default of any obligation by the Merchant pursuant to this Agreement,
Zenith Bank PLC reserves the right without limitation to other remedies to terminate this 
Agreement immediately without notice and the Merchant shall automatically lose their access 
to its Webpage/platform and Services therein terminated immediately and Zenith Bank Plc will 
not be liable whatsoever for such termination.<br><br>
<p> 
 
<h style="color:red;">Termination</>
<p style="color:black;">
Without prejudice to any remedy or right reserved by the Parties, Zenith Bank PLC may terminate 
this Agreement and/or suspend the Merchant's access to the Services at anytime without notice to 
the Merchant for breach of any of the terms of this Agreement.<br><br>

The Merchant shall give Zenith Bank PLC minimum a of 14 days’ notice of its 
intention to discontinue the use of the Services.<br><br>

This Agreement shall automatically terminate if:<br><br>

The Merchant is wound up or goes into liquidation or for any reason ceases or is 
likely to cease to carry on its business or transfers its business;<br><br>

The obligations of the Merchant become prohibited by law or any other regulatory authority;<br><br>

The Merchant fails to perform its obligations under this Agreement in accordance with the agreed 
terms and conditions of this Agreement and any further terms and conditions as may be advised 
by Zenith Bank PLC from time to time.The Merchant fails to perform its obligations under this
Agreement in accordance with the agreed terms and conditions of this Agreement and any further 
terms and conditions as may be advised by Zenith Bank PLC from time to time.<br><br>

Any of the event of default mentioned above occurs.<br><br>

If any event or series of events occurs which may render the Merchant unable to comply
with its obligations under the terms of this Agreement, or any other agreement between the 
Parties;<br><br>

If the Merchant carries out any act that will or is likely to have a material adverse
effect on the reputation, image and goodwill of Zenith Bank PLC;<br>
Upon termination of this Agreement, the Merchant shall return to Zenith Bank PLC all 
the properties and materials of Zenith Bank PLC that are in the Merchant's possession.<br><br>

    </p>
    
 
    <h style="color:red;">Indemnification</h>
<p style="color:black;"> 
The Merchant recognizes and acknowledges that Zenith Bank PLC shall be providing the Services on the Platform on an “as is” and “as available” basis.<br><br>

The Merchant indemnifies and keeps Zenith Bank PLC fully indemnified against all losses, 
liabilities, damages, claims, costs, charges, fees, actions adverse judgment, legal costs, 
professional or attorney's fees and other expenses of any nature whatsoever incurred or suffered 
by Zenith Bank PLC whether direct or consequential (including any economic loss on turnover,
profit, business or goodwill) as a result of or in connection with or in any way related to 
the use of the Platform under this Agreement or the use of its website which users on the
Platform may be directed to access and the Merchant shall be liable for any loss or damage 
suffered by Zenith Bank PLC as a result of such action and upon first written demand by Zenith 
Bank PLC, the Merchant shall promptly reimburse Zenith Bank PLC for any such loss or damages.<br><br>

In the event of any proceeding, litigation or suit against Zenith Bank PLC by any regulatory 
agency or in the event of any court action or other legal or judicial proceeding challenging or 
otherwise arising out of any matter herein contemplated, the Merchant shall co-operate fully 
with Zenith Bank PLC in the preparation of the defense of such action or proceeding and also 
co-operate with Zenith Bank PLC and its attorneys, as may be required.
<br><br>

The foregoing indemnification obligations shall survive the termination of this Agreement. <br><br></p>

<h style="color:red;">Intellectual property</h>
<p style="color:black;">
The Merchant agrees that except as otherwise set forth herein, all rights, title and interest 
in and to all registered and unregistered trademarks, service marks and logos, patent, patent 
applications and patentable ideas, inventions, trade secrets, proprietary information and 
know-how, registered and unregistered copyrights including without limitation to any forms, 
images, audio-visual displays, text, soft-ware and all other intellectual property, proprietary 
rights or rights related to intangible property which are used, developed, embodied in the 
Services are owned by Zenith Bank PLC and agrees to make no claim of interest in or ownership 
of any such Zenith Bank PLC's intellectual property. The Merchant further agrees that no title 
to Zenith Bank PLC's proprietary right is transferred to the Merchant, and that the Merchant 
does not obtain any rights, express or implied by use of the Platform.<br><br>

The Merchant shall be authorized to use its trademarks on the Platform and shall not infringe 
on the rights of third parties. The Merchant agrees that the display of its products or designs
on the Platform shall not infringe on the intellectual rights of third parties and that it shall
not rent, sell, resell, lease, sublicense or loan the components of the Service therefrom.<br><br>
</p>

    
<h style="color:red;"> Account registration </h><p style="color:black;">
The Merchant shall establish and operate an Account with Zenith Bank PLC for the Products.
Such Account shall not in any way be misleading, offensive or an infringement on any third 
party’s copyright. The Merchant shall be responsible for keeping its Account and password 
secure and prevent same from unauthorized use.
The Merchant is fully responsible for all activities relating to its Account.
</p>


<h style="color:red;">Management of the platform </h>
<p style="color:black;">
Zenith Bank PLC shall appoint a team to handle the platform/Website
Management and Quality Control. The team will have the responsibility of auditing and maintaining
the Platform from time to time to ensure the Platform is being operated legally and that no 
offensive contents or images are posted on the Merchant's Webpage. The Website Manager reserves 
the right upon giving prior written notice to Zenith Bank PLC to suspend or delete the Webpage 
of any Merchant who breaches any term of this Agreement.<br><br>

Zenith Bank PLC shall provide sample images, website themes/templates, newsletters, text messages or 
any other items as may be needed to be uploaded on the Website.<br><br>
</p>

<h style="color:red;">Eligibility to use the service</h>
<p style="color:black;">
The Merchant represents that he/she is not less than 18 years of Age in the case of the 
Proprietor of a Business Enterprise or persons representing Merchants who are Limited Liability 
Companies are not less than 18 years of Age, as the use of the platform is available only to 
persons who can form legally binding contracts under Nigerian Laws.<br><br>
</p>

<h style="color:red;">Confidentiality</h>

<p style="color:black;">
Zenith Bank PLC may provide the Merchant with its confidential information in oral, written or 
electronic form in furtherance of this Agreement. The Merchant acknowledge and agrees that the 
scope of work and all documents and information relating to this platform or Website 
(“Confidential Information) are valuable trade secrets of Zenith Bank PLC. 
The Merchant hereby agrees to keep any such confidential information in confidence and shall not 
at any time during or after the terms of this Agreement, without Zenith Bank’s prior written 
consent disclose it or otherwise make it available to any third party, either directly or 
indirectly, all aor any part of the Confidential Information other than its employees and 
directors on a need-to-know basis, save as required by law or enforceable regulation. 
The confidential information shall exclude any information that is in the public domain in the 
same format or context. This clause shall survive the expiration or termination of this Agreement.<br><br>

The Merchant acknowledges that the unauthorized disclosure of confidential information to a third 
party may cause pecuniary loss or damage to Zenith Bank PLC. Accordingly the Merchant hereby 
indemnifies Zenith Bank PLC against any loss, claim or damage arising from a breach of the 
confidentiality obligations under this Agreement;</p><br><br>

<h style="color:red">Non-assignment</h>
<p style="color:black;">
The Merchant hereby covenants that it shall not during the subsistence of this Agreement, 
assign all or any portion of its obligations under this Agreement to any other individual, 
body or corporation.</p><br><br>


<h style="color:red;">Disclaimers and limitation of warranty and liability</h>

<p style="color:black;">
Except as expressly set forth above; Zenith Bank PLC or any of its directors, employees and 
agents makes no warranty of any kind, express, implied or statutory regarding the Services or 
this Platform except otherwise specified in writing.<br><br>

In no event will Zenith Bank Plc be liable for any loss or damage including without limitation, 
indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of 
data or profits arising out of, or in connection with, the use of the Platform nor do Zenith Bank 
Plc commit to ensuring that the Platform shall remain constantly available or un-interrupted, 
error free, true, accurate, complete or that the material on the Platform is kept up-to-date or 
that all errors shall be corrected.<br><br>

</p>

<h style="color:red;">Force majeure </h>
<p style="color:black;">
Notwithstanding anything to the contrary herein contained, neither Party shall be liable or 
responsible for failure to perform or delay in performance of any of its obligations under 
this Agreement if such failure or delay is due to or attributable to any act of God, war, 
warlike conditions, hostilities, riots, civil commotion, system downtime, glitches, 
malfunction, server failure, virus attack, strikes or any other cause or circumstance of 
whatsoever nature beyond the reasonable control of either Party. Such Force Majeure situation 
shall be notified to the other Party within 15 days business from the occurrence of the same. 
If such situation subsists for more than one (1) month the party affected by such force majeure 
event shall be deemed to have voluntarily excused itself from the transaction contemplated by 
this Agreement. </p><br><br>

<h style="color:red;">Severability<h>
<p style="color:black;">
If any provision of this Agreement is held by a court of law to be unlawful, void or 
unenforceable, such provision shall to the extent required be severed from this Agreement and 
rendered ineffective as far as possible without modifying the remaining provision of this 
Agreement and without having any effect whatsoever on the validity or enforceability of this 
Agreement and other clauses hereto.</p>  <br><br>


<h style="color:red;">Glossary</h>
<p style="color:black;"><strong>“Account”</strong> : This means the unique user identification and password assigned to each Merchant by Zenith Bank PLC for use on the Platform.<br>
 <strong>"Disclaimer"</strong> This absolves Zenith Bank PLC of transactions done between the merchant and the subscriber/shopper.<br>
 <strong>"Agreement”</strong> means these Terms and Conditions and any annexures hereto,<br>
 <strong>“Commencement Date”</strong> means the date of execution of this Agreement by the Parties or the date of signing up to the Platform by the Merchant.<br>
 <strong>“Intellectual Property”</strong> means “any patent, copyright, registered design, trademark or other industrial or intellectual property right in respect of the Platform and/or any other applications.<br>
 <strong>“Merchant, You or Your”</strong> means the Customer of Zenith Bank PLC desirous of displaying its goods and services on the Zenith MarketPlace<br>
 <strong>“Parties”</strong> means Zenith Bank PLC and the Merchant<br>
 <strong>“Services”</strong> mean features provided by Zenith Bank PLC on the Platform and all other aspects of the Platform including Merchant user content which may be subject to change from time to time.<br>
 <strong>“ZMART”</strong> means the Zenith Bank PLC Multi-merchant e-commerce platform where Merchants can display their goods and services for the general public to view and purchase same.<br>
 <strong>“Webpage”</strong> means the space provided by and allocated to the Merchant on the Platform where a Merchant can display its Products for the general public to view and purchase same.<br>
 <strong>“Website Manager”</strong> means a designated web manager appointed by Zenith Bank PLC to audit or carry out other services on the Platform on a periodic basis or as directed by Zenith Bank PLC from time to time.<br>
 <strong>"COMMENCEMENT AND TENURE"</strong> This Agreement shall take effect from the date hereof and shall continue and be in force until terminated in line with the provisions of this Agreement.<br><br>
</p>
<h style="color:red;">Nigerian law and general provisions</h>

<p style="color:black;">
This Agreement shall be governed by the laws of the Federal Republic of Nigeria and any disputes arising therefrom shall be subject to the Nigerian Courts.;<br><br>

Zenith Bank PLC and The Merchant hereby expressly acknowledge and agree that regarding the relationship between the parties created by this Agreement:<br><br>

The parties hereby enter into this Agreement as independent contractors and this Agreement 
will not be construed or deemed to create a partnership, joint venture, or employment 
relationship between them.<br>
The Merchant is not, and shall not be deemed, an agent of Zenith Bank PLC.<br>
I (We) have read the Terms and Conditions as stated above and I (We) agree to its contents.
</p>
<h2 style="color:black;"><strong>APPENDIX 1</strong></h2>
<h2 style="color:black;"><strong>PROHIBITED MERCHANT AND SUB-MERCHANT BUSINESS</strong></h2>
        <p style="color:black;">
Prohibited Merchant businesses and activities on the ZMART include, but are not limited to, 
the following sales transactions:<br><br></p>
        <ul style="list-style-type: circle;color:black;">
            <li>1) Collectibles</li>
            <ol type="I">
                <li>&nbsp;&nbsp;&nbsp; i. Coins</li>
<li>&nbsp;&nbsp;&nbsp; ii. Faces, Names and Signatures</li>
<li>&nbsp;&nbsp;&nbsp; iii. Stamps</li>
</ol>
<li>2) Moving companies</li>
<li>3) Precious metals (Bars, coins, etc.)</li>
<li>4) Private Investigators</li>
<li>5) Artifacts, Graver-Related and Native American Crafts</li>
<li>6) Audio/video text services (adult oriented)</li>
<li>7) Bidding fee auctions (a.k.a. penny auctions)</li>
<li>8) Business physically located outside the country Nigeria (offshore acquiring)</li>
<li>9) Business/Investment opportunities operating as "get rich quick schemes" (e.g. real estate purchase with No Money Down, government grants)</li>
<li>10) Businesses selling age or legally restricted products or services</li>
<li>11) Credit card and identity theft protection</li>
<li>12) Credit cards</li>
<li>13) Currency (In and out of circulation)</li>
<li>14) Decryption and descrambler products including mod chips</li>
<li>15) Fake IDs, Government Identification, Government Uniforms, and Police-Related Items</li>
<li>16) Fake references and other services/products that foster deception</li>
<li>17) Financial transactions, including but not limited to: quasi cash, stored value foreign currency, money orders, wire transfers, securities and check cashing.</li>
<li>18) Fireworks and fire crackers</li>
<li>19) Gambling and gambling services, including but not limited to the following:</li>
<ol type="I">
<li>&nbsp;&nbsp;&nbsp; i. Legal gambling where the Cardholder is not present when the bet is made as well as for direct purchase of wagers/chips via payment card</li>
<li>&nbsp;&nbsp;&nbsp; ii. Lotteries</li>
<li>&nbsp;&nbsp;&nbsp; iii. Illegal gambling including internet gambling</li>
<li>&nbsp;&nbsp;&nbsp; iv. Sports forecasting or odds making</li>
<li>&nbsp;&nbsp;&nbsp; v. Betting</li>
<li>&nbsp;&nbsp;&nbsp; vi. Casino gaming</li>
<li>&nbsp;&nbsp;&nbsp; vii. Off track betting</li>
<li>&nbsp;&nbsp;&nbsp; viii. Gambling chips or gambling credits</li>
</ol>
<li>20) HD DVD and Blu-ray Disc Decryption Devices</li>
<li>21) Human body parts and remains</li>
<li>22) Illegal products/services</li>
<ol type="I">
<li>&nbsp;&nbsp;&nbsp; i. Amyl Nitrite Inhalants</li>
<li>&nbsp;&nbsp;&nbsp; ii. Any service providing peripheral support of illegal activities (i.e. drugs)</li>
<li>&nbsp;&nbsp;&nbsp; iii. Bootleg Recordings</li>
<li>&nbsp;&nbsp;&nbsp; iv. Counterfeit, Imitation or Knock-off Items</li>
<li>&nbsp;&nbsp;&nbsp; v. Drugs and Paraphernalia</li>
<li>&nbsp;&nbsp;&nbsp; vi. Embargoed Goods, Prohibited Countries</li>
<li>&nbsp;&nbsp;&nbsp; vii. Good or services in violation of intellectual property rights</li>
<li>&nbsp;&nbsp;&nbsp; viii. Psilocybin Mushrooms and Spices</li>
<li>&nbsp;&nbsp;&nbsp; ix. Psychoactive Herbal Products</li>
<li>&nbsp;&nbsp;&nbsp; x. Stolen property</li>
<li>&nbsp;&nbsp;&nbsp; xi. Unauthorized Copies</li>
</ol>
        </ul>
</div>
              
  
                <div class="modal-footer">
    
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
   
<!--                 <a class="btn btn-danger btn-ok">Yes</a>-->
                </div>
            </div>
      
 
 </div>
    </div>

<script>
        $('#confirm-delete').on('show.bs.modal', function(e)
 {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
       
     
            //$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    
</script>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  
        
        
        <div class='popup_block_theme' style="display:none;"><?php echo new View("themes/" . THEME_NAME . '/seller/preview_theme_popup'); ?></div>
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
     function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
function atleast_onecheckbox(e) {
          if ($("input[type=checkbox]:checked").length === 0) {
              e.preventDefault();
              alert('Shipping Method Should be Mandatory, You should choose any one of the shipping method');
              return false;
          }
}

	</script>
	
<script>
        
          $('form').each(function(){
    var list  = $(this).find('*[tabindex]').sort(function(a,b){ return a.tabIndex < b.tabIndex ? -1 : 1; }),
        first = list.first();
    list.last().on('keydown', function(e){
        if( e.keyCode === 9 ) {
            first.focus();
            return false;
        }
    });
});
        </script>
        <script>
        function checkCheckBoxes(zenith_account_open) {
	if (signup2.ch1.checked == false ) 
	{
		$('#id_terms').html("<?php echo "* You are required to agree to the terms and conditions here"; ?>");
                <?php // $tcmsg = "You must agree to terms and condition"; ?>
		return false;
	} else { 	
		return true;
	}
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
        //input.setCustomValidity(valOrFunction(options.defaultText, window, [input]));

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




InvalidInputHelper(document.getElementById("fname"), {
    defaultText: "Please enter your firstname!",
    emptyText: "Please enter your firstname!",
    invalidText: function (input) {
        return 'The firstname  "' + input.value + '" is invalid!';
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

InvalidInputHelper(document.getElementById("email"), {
    defaultText: "Please enter your email!",
    emptyText: "Please enter your email!",
    invalidText: function (input) {
        return 'The email  "' + input.value + '" is invalid!';
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

    

</script>

