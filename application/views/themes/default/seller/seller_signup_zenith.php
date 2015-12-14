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
         <form id="zenith_account_open" name="zenith_offer" method="POST"  autocomplete="off">
                    <div class="payouter_block pay_br">
                        <h3 class="paybr_title pay_titlebg">Merchant bank account opening : </h3>
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_sections">
                                <div class="payment_forms">
                              
                              <ul>                               
                            <li>
                              
                                <div class="">
                                     <span class="asterisks_input">  </span>
                                    <input class="swifta_input" name="f_name" type="text" id="fname"  tabindex="1"  placeholder="<?php echo $this->Lang['ENTER_NAME']; ?>" value="" autofocus required/>
                                   <em id="f_name_err"></em>
                                </div> 
                            </li><br><br><br><br>
                             <li>
                             
                                
                                <div class="" style="margin-top:-30px;">
                                     <span class="asterisks_input">  </span>
                                   <input name="l_name" class="swifta_input" type="text" tabindex="7" id="lname"   placeholder="<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" value="" required/>
                                   <em id="l_name_err"></em>
                                </div>  
                                
                                
                            </li><br><br><br><br>
                            <li>
                                
                                <div class="" style="margin-top:-55px;">
                                     <span class="asterisks_input">  </span>
                                  <input name="email" class="swifta_input" type="text" maxlength="64" id="email" tabindex="2" placeholder="<?php echo $this->Lang['ENTER_EMAIL']; ?>" value="" required/>
                                  <em id="email_err"></em>
                                </div>     
                            </li><br><br><br><br>
                             <li>
                                
                                <div class="" style="margin-top:-75px;">
                                     <span class="asterisks_input">  </span>
                                   <input name="phone" class="swifta_input" type="text" maxlength="11" tabindex="8" id="mob"  onkeypress="return isNumberKey(event)" placeholder="<?php echo $this->Lang['ENTER_PHONE']; ?>" value=""  required/>
                                   <em id="phone_err"></em>
                                </div>  
                            </li><br><br><br><br><br>
                            <li>
                                
                                
                                
                                <div class="" style="margin-top:-120px;">
                                     <span class="asterisks_input">  </span>
                                   <input name="addr" class="swifta_input" type="text"  tabindex="3" id="addrss"  placeholder="<?php echo $this->Lang['ENTER_ADD']; ?>" value="" required />
                                   <em id="addr_err"></em>
                                </div>   
                                
                                  <div class="" style="margin-top:15px;">
                                    <select name="gender" class="swifta_input" tabindex="4" required>
                                            <option value="-99"><?php echo $this->Lang['SEL_GENDER']; ?></option>
                                           
                                             <option  title="<?php echo $this->Lang['MALE']; ?>" value="M" ><?php echo $this->Lang['MALE']; ?></option>
                                             <option  title="<?php echo $this->Lang['FEMALE']; ?>" value="F" ><?php echo $this->Lang['FEMALE']; ?></option>
   
                                    </select>
                                     <em id="gender_err"></em>
                                </div>  
                                
                                 <div class="" style="margin-top:15px;" >
                                        <div id="CitySD_log">
                                      <select name="branch_no" id="id_z_branch" tabindex="5"  class="swifta_input" required>
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_BRANCH']; ?></option>
                                            <?php
                                            echo $this->branch_options;
                                            ?>
                                    </select>
                                    </div>
                                     <em id="branch_no_err"></em>
                                </div>
                                
                                 <div class="" style="margin-top:15px;">
                                        <div id="CitySD_log">
                                      <select name="class_code" id = "id_z_class" class="swifta_input" tabindex="6" required>
                                            <option value="-99"><?php echo $this->Lang['ZENITH_SEL_CLASS']; ?></option>
                                            <?php
                                            echo $this->class_code_options;
                                            ?>
                                    </select>
                                    </div>
                                     <em id="class_code_err"></em>
                                </div>
                            </li>
                          </ul>  
                            
                            <div>
                            <li>
                               
                               
                            </li>

                            <br />
                            <li>
                            
                            
                               
                               
                                
                            </li>
                            <br />
                            <li>
                            
                            
                              
                               
                                
                           </li>
                            <br />
			    <!--<li>
                                <label><?php echo $this->Lang['UNIQ_IDEN'];?>:<span class="form_star"></span></label>
                                <div class="fullname">
                                    <input name="unique_identifier" maxlength="15" placeholder="<?php echo $this->Lang['ENTER_UNIQ_IDEN']; ?>" type="text" value="" />
                                </div>   
                                <label></label>
                            </li>-->
                           <li class="check_box">
                                  <p><input type="checkbox" name="terms" id="id_terms" class="" value="0" required><?php echo $this->Lang['Z_BY_CLICKING_SUBMIT']; ?> 									
                                <a class="forget_link" target="_blank" title="<?php echo $this->Lang['TEMRS']; ?>" data-toggle="modal" data-target="#confirm-delete" href="<?php //echo PATH; ?>"><?php echo $this->Lang['TEMRS']; ?></a>
                         	<p id="id_terms" style="color:red;"></p>
                                </p>
                                <em id="terms_err"></em>
                            </li>
                            <br />
                            <div class="buy_it complete_order_button">                                  
                                 <input class="sign_submit" type="submit" value="Open Account" title="Open Account">
                                 
                            </div>
                            
                            &nbsp;&nbsp;&nbsp; <a href="<?php echo PATH."merchant-signup-step1.html"; ?>" class="sign_cancel">Go Back</a>
                            </div>
                            
                                </div>
                                </div>
                            </div>
                        </div>
                                                             <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:20px;">
  
      <div class="modal-dialog" style="overflow-y: scroll; max-height:85%;  margin-top: 30px;  width: 85%;">
          
  <div class="modal-content">
            
               
 <div class="modal-header">
   
<!--                 <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
                
    <h4 class="modal-title" id="myModalLabel">TERMS AND CONDITIONS</h4>
                </div>
            
               
 <div class="modal-body">
                   
 <div>
 <h style="color:red;">TERMS AND CONDITIONS FOR THE ZENITH MARKETPLACE<h>
 <p style="color:black;">This serves to verify that you have had adequate opportunity to read and 
     
     understand the terms and conditions, and that you are aware of all the terms printed in bold.
     Please contact us if you need further explanation of anything referred to herein or related to the use of the Zenith MarketPlace. 
     We can be reached via our email address <h style="color:red;">zenithmarketplacesupport@Zenith Bank PLC.com,</h> you can speak with a Zenith Direct consultant 
     via our interactive call center helpline- 0000000700  or visit any Zenith Bank Branch.

By using the Zenith MarketPlace, you unconditionally agree to be bound by the laws, rules, regulations and official issuances 
applicable on the matter, now existing or which may hereinafter be enacted, issued or enforced. These terms and conditions comprise 
the agreement between Zenith Bank PLC (“Zenith Bank PLC”) and the Merchant in connection with the display of its goods and services on 
the Zenith MarketPlace.</p>

<h style="text-align: center; color: red;">Obligations of the merchant</h><br>
<p style="color:black;">The Merchant shall establish and maintain its Webpage, including the contents of same in line with the terms of this Agreement and
as specified by Zenith Bank PLC from time to time.<br><br>

The Merchant shall ensure that information provided on its Webpage is accurate and complete and in the form specified by Zenith Bank
PLC from time to time.<br><br>

The Merchant shall keep its Account details confidential and shall promptly notify Zenith Bank PLC of any unauthorized use of its Account.<br>

The Merchant shall be available upon request by Zenith Bank PLC to resolve any issues relating to its Webpage and resolution of complaints 
and disputes from individuals patronizing the Merchant's webpage.<br><br>

The Merchant shall comply with requests from Zenith Bank PLC to conduct due diligence and establish the true identity, nature, ownership,
source of funds, operational and transaction history of the business<br><br>

The Merchant shall publicly disclose on its Webpage its delivery, fulfillment exchange and returns policies and also ensure that it is at 
all times compliant with same.<br><br>

The Merchant is prohibited from the display, sale of any products or engagement in any activity declared illegal under the Law including but
not limited to narcotics, hard drugs, firearms, tobacco or tobacco products, armament productions, casino or companies where the principal 
source of income is gambling, immoral and illegal activities, including but not limited to the display of pornographic photographs or materials
or the sale of pornographic products, production or activities involving harmful or exploitative forms of forced labor and/or child labor, trade 
in wildlife or wildlife products that have been expressly prohibited by Law for public sale, production or trade in radioactive materials, unbounded 
asbestos fibers, and hazardous chemicals; and investments harmful to the environment or any item which may cause public offence or has been expressly 
prohibited by Law.<br><br>

The Merchant shall ensure that sizes of the images pasted on its Webpage shall be as prescribed by Zenith Bank PLC from time to time to ensure 
that the Platform functions at optimal capacity.<br><br>

The Merchant shall not switch from the sale of one category of Products to the other without the express written permission of Zenith Bank PLC.<br><br>

The Merchant shall ensure the safety and security of all data or any information stored on its Webpage<br><br>

The Merchant shall pay a non- refundable annual Platform Membership Fee(“PlatformFee”) of N10,000.00 ( ten thousand Naira only).
The Platform Fee shall be subject to periodic review at the sole discretion of Zenith Bank PLC. Any such reviews shall be communicated to
the merchant and shall become binding from the effective date.<br><br></p>
     
<p>
    
<h style="text-align: center; color: red;">  Obligations of Zenith Bank Plc </h>
<p style="color:black;">Zenith Bank PLC shall be responsible for the provision of the Services and shall grant the Merchant non-exclusive access to the use of the Services provided that the Merchant is in compliance with the terms of this Agreement.<br><br>

Zenith Bank PLC shall provide parameters for the provision of images and videos of the Products to be displayed on the Platform and the content of the information to be uploaded on the Platform and Webpage Zenith Bank PLC shall as much as it is within its ability, endeavors to provide necessary administrative and technical support for the Platform.<br><br>

Zenith Bank PLC may revise the terms and conditions of this Agreement from time to time and such revised terms and conditions shall automatically be binding on the parties and shall replace the current provisions of this Agreement accordingly affected thereby..<br><br>
</p>   
    
<h style="color:red"> Representation and warranties <h>
<p style="color:black;">The Merchant hereby represents and warrants to Zenith Bank PLC as follows:<br><br>

That the Merchant is duly incorporated, validly existing and in good standing under the laws of Nigeria and has the legal authority to enter into this Agreement<br><br>

That the Merchant has the requisite skills, experienced management, certified personnel and technology to execute the services stated herein.;<br><br>

That all the information relating to the Merchant or otherwise relevant to the matters contemplated by this Agreement which have been provided to Zenith Bank PLC by the Merchant are true and correct in all respects and shall notify Zenith Bank PLC of any material change in such information;<br><br>

The Merchant represents that it shall comply with all applicable privacy, consumer protection and other laws and regulations with respect to the Services<br><br>
  
</p>
<h style="color:red;"> Event of default </h>
<p style="color:black;">The following provisions and a breach of any of the terms of this Agreement by the Merchant shall constitute an event of default under this Agreement:<br><br>

If any representation, warranty or information provided or statement made or deemed to be made by the Merchant is or proves to be incorrect or misleading false in any material respect;<br><br>

If any corporate action, legal proceedings or other adverse procedure or step is taken against the Merchant.<br><br>

If any event, fact or circumstance which has or could in the opinion of Zenith Bank PLC be likely to have a material adverse effect on the ability of the Merchant to perform any of its obligations under this Agreement;<br><br>

Any other reasons which in the sole opinion of Zenith Bank PLC constitutes an event of default and such decision is taken in the best interest of the general public.<br><br>

In the event of any default of any obligation by the Merchant pursuant to this Agreement, Zenith Bank PLC reserves the right to terminate this Agreement immediately without notice and Merchants shall lose their access to its Webpage and Services therein terminated immediately and Zenith Bank Plc will not be liable whatsoever for such termination.    <br><br>
<p> 
 
<h style="color:red;">Termination</>
<p style="color:black;">Without prejudice to any remedy or right reserved by the Parties, Zenith Bank PLC may terminate this Agreement or suspend the Merchant's access to the Services at anytime without notice to the Merchant for the violation of any of the terms of this Agreement.<br><br>

The Merchant shall give Zenith Bank PLC minimum a 14 days notice of its intention to discontinue the use of the Services.<br><br>

This Agreement shall automatically terminate if:<br><br>

The Merchant is wound up or goes into liquidation or for any reason ceases or threatens is likely to cease to carry on its business or transfers its business;<br><br>

The obligations of the Merchant become prohibited by law or any other regulatory authority;<br><br>

The Merchant fails to perform its obligations under this Agreement in accordance with the agreed terms and conditions of this Agreement and any further terms and conditions as may be advised by Zenith Bank PLC from time to time.<br><br>

If any event or series of events occurs which may render the Merchant unable to comply with its obligations under the terms of this Agreement, or any other agreement between the Parties;<br><br>

If the Merchant carries out any act that will or is likely to have a material adverse effect on the reputation, image and goodwill of Zenith Bank PLC;<br><br>

Upon termination of this Agreement, the Merchant shall return to Zenith Bank PLC all the properties and materials of Zenith Bank PLC that are in the Merchant's possession.<br><br>
    </p>
    
 
    <h style="color:red;">Indemnification</h>
<p style="color:black;"> 
    The Merchant recognizes and acknowledges that Zenith Bank PLC shall be providing the Services on the Platform on an “as is” basis.<br><br>

The Merchant agrees to indemnify and keep Zenith Bank PLC fully indemnified against all losses, liabilities, damages, claims, costs, adverse judgment, legal costs, professional or attorney's fees and other expenses of any nature whatsoever incurred or suffered by Zenith Bank PLC whether direct or consequential (including any economic loss on turnover, profit, business or goodwill) as a result of or in connection with or in any way related to the use of the Platform under this Agreement or the use of its website which users on the Platform may be directed to access and the Merchant shall be liable for any loss or damage suffered by<br>
Zenith Bank PLC as a result of such action and upon demand reimburse Zenith Bank PLC for any such loss or damages.<br><br>

In the event of any proceeding, litigation or suit against Zenith Bank PLC by any regulatory agency or in the event of any court action or other legal or judicial proceeding challenging or otherwise arising out of any matter herein contemplated, the Merchant shall co-operate fully with Zenith Bank PLC in the preparation of the defense of such action or proceeding and also co-operate with Zenith Bank PLC and its attorneys, as may be required.
<br><br>
The foregoing indemnification obligations shall survive the termination of this Agreement. <br><br></p>

<h style="color:red;">Intellectual property</h>
<p style="color:black;">The Merchant agrees that except as otherwise set forth herein, all rights, title and interest in and to all registered and unregistered trademarks, service marks and logos, patent, patent applications and patentable ideas, inventions, trade secrets, proprietary information and know-how, registered and unregistered copyrights including without limitation to any forms, images, audio-visual displays, text, soft-ware and all other intellectual property, proprietary rights or rights related to intangible property which are used, developed, embodied in the Services are owned by Zenith Bank PLC and agrees to make no claim of interest in or ownership of any such Zenith Bank PLC's intellectual property.<br><br> The Merchant further agrees
that no title to Zenith Bank PLC's proprietary right is transferred to the Merchant, and that the Merchant does not obtain any rights, express or implied by use of the Platform.<br><br>

The Merchant shall be authorized to use its trademarks on the Platform and shall not infringe on the rights of third parties. The Merchant agrees that the display of its products or designs on the Platform shall not infringe on the intellectual rights of third parties and that it shall not rent, sell, resell, lease, sublicense or loan the components of the Service therefrom.<br><br>
</p>

    
<h style="color:red;"> Account registration </h><p style="color:black;">
The Merchant shall establish an Account with Zenith Bank PLC for the Products. Such Account shall not in any way be misleading, offensive or infringing. The Merchant shall be responsible for keeping its Account and password secure and prevent same from unauthorized use. The Merchant is responsible for all activities relating to its Account.
</p>


<h style="color:red;">Management of the platform </h>

<p <p style="color:black;">Zenith Bank PLC shall appoint a team to handle the platform/Website Management and Quality Control. The team will have the responsibility of auditing and maintaining the Platform from time to time to ensure the Platform is being operated legally and that no offensive contents or images are posted on the Merchant's 
    Webpage.The Website Manager reserves the right upon giving prior notice to Zenith Bank PLC to suspend or delete the Webpage 
    of any Merchant who breaches any term of this Agreement.<br><br>

Zenith Bank PLC shall provide sample images, website themes/templates, newsletters, text messages or any other items as may be needed to upload on the Website.<br><br>
</p>

<h style="color:red;">Eligibility to use the service</h>
<p style="color:black;">The Merchants represents that he/she is not less than 21 years of Age in the case of the<br>
Proprietor of a Business Enterprise or persons representing Merchants who are Limited Liability Companies are not less than 21 years of Age.<br><br>
</p>

<h style="color:red;">Confidentiality</h>

<p style="color:black;">Zenith Bank PLC may provide the Merchant with its confidential information in oral or electronic form in furtherance of this Agreement. The Merchant agrees to keep any such confidential information confidential and not to disclose it to any third party, other than its employees and directors on a need-to-know basis, without the prior written consent of Zenith Bank PLC, save as required by law or regulation. The confidential information shall exclude any information that is in the public domain in the same format or context. This clause shall survive the expiration or termination of this Agreement.<br><br>

The Merchant acknowledges that the unauthorized disclosure of confidential information to a third party may cause pecuniary loss or damage to Zenith Bank PLC. Accordingly the Merchant hereby indemnifies Zenith Bank PLC against any loss, claim or damage arising from a breach of the confidentiality obligations under this Agreement;</p><br><br>

<h style="color:red">Non-assignment</h>
<p style="color:black;">The Merchant hereby covenants that it shall not during the subsistence of this Agreement, assign all or any portion of its obligations under this Agreement to any other individual, body or corporation.</p><br><br>


<h style="color:red;">Disclaimers and limitation of warranty and liability</h>

<p style="color:black;">Except as expressly set forth above; Zenith Bank PLC or any of its directors, employees and agents make no warranty of any kind, express, implied or statutory regarding the Services or this Platform.<br><br>

In no event will Zenith Bank Plc be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this the Platform nor do Zenith Bank Plc commit to ensuring that the Platform shall remain available or un-interrupted, error free or that the material on the Platform is kept up-to-date or that all errors shall be corrected.<br><br>

</p>

<h style="color:red;">Force majeure </h>
<p style="color:black;">Notwithstanding anything to the contrary herein contained, neither Party shall be liable or responsible for failure to perform or delay in performance of any of its obligations under this Agreement if such failure or delay is due to or attributable to any act of God, war, warlike conditions, hostilities, riots, civil commotion, system downtime, glitches, malfunction, strikes or any other cause or circumstance of whatsoever nature beyond the reasonable control of either Party. Such Force Majeure situation shall be notified to the other Party within 15 business days from the occurrence of the same. If such situation continues for a period of 1 month the other party shall be entitled to terminate the Agreement on the expiry of the said period after duly intimating the same to the other Party;</p><br><br>

<h style="color:red;">Severability<h>
<p style="color:black;">If any provision of this Agreement is held by a court of law to be unlawful, void or unenforceable, such provision shall to the extent required be severed from this Agreement and rendered ineffective as far as possible without modifying the remaining provision of this Agreement and without having any effect whatsoever on the validity or enforceability of this Agreement. </p>  <br><br>


<h style="color:red;">Glossary</h>
<p style="color:black;">“Account” : This means the unique user identification and password assigned to each Merchant by Zenith Bank PLC for use on the Platform.<br>
Disclaimer: This absolves Zenith Bank PLC of transactions done between the merchant and the subscriber/shopper.<br>
"Agreement” means these Terms and Conditions and any annexures hereto,<br>
“Commencement Date” means the date of execution of this Agreement by the Parties or the date of signing up to the Platform by the Merchant.<br>
“Intellectual Property” means “any patent, copyright, registered design, trademark or other industrial or intellectual property right in respect of the Platform and/or any other applications.<br>
“Merchant, You or Your” means the Customer of Zenith Bank PLC desirous of displaying its goods and services on the Zenith MarketPlace<br>
“Parties” means Zenith Bank PLC and the Merchant<br>
“Services” mean features provided by Zenith Bank PLC on the Platform and all other aspects of the Platform including Merchant user content which may be subject to change from time to time.<br>
“Zenith MarketPlace” means the Zenith Bank PLC Multi-merchant e-commerce platform where Merchants can display their goods and services for the general public to view and purchase same.<br>
“Webpage” means the space provided by and allocated to the Merchant on the Platform where a Merchant can display its Products for the general public to view and purchase same.<br>
“Website Manager” means a designated web manager appointed by Zenith Bank PLC to audit or carry out other services on the Platform on a periodic basis or as directed by Zenith Bank PLC from time to time.<br>
COMMENCEMENT AND TENURE This Agreement shall take effect from the date hereof and shall continue and be in force until terminated in line with the provisions of this Agreement.<br><br>
</p>
<h style="red;">Nigerian law and general provisions</h>

<p style="color:black;">This Agreement shall be governed by the laws of the Federal Republic of Nigeria and any disputes arising therefrom shall be subject to the Nigerian Courts.;

Zenith Bank PLC and The Merchant hereby expressly acknowledge and agree that regarding the relationship between the parties created by this Agreement:

The parties are not, and shall not be deemed, joint ventures or partners;

The Merchant is not, and shall not be deemed, an agent of Zenith Bank PLC.

I (We) have read the Terms and Conditions as stated above and I (We) agree to its contents.<br>

Company:........................................................................<br>

Name...............................................................................<br>

Designation:.....................................................................<br>

Signature and Date:.......................................................<br>



Company:........................................................................<br>

Name...............................................................................<br>

Designation:.....................................................................<br>

Signature and Date:.......................................................<br>



Company:........................................................................<br>

Name...............................................................................<br>

Designation:.....................................................................<br>

Signature and Date:.......................................................<br>



Company:........................................................................<br>

Name...............................................................................<br>

Designation:.....................................................................<br>

Signature and Date:.......................................................<br></p>
</div>
   
                
                    
<p class="debug-url"></p>
               
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
       
     
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    
</script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  
        
        
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
		$('#id_terms').html("<?php echo "* You must agree to terms and condition"; ?>");
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