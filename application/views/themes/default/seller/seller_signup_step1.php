<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo PATH;?>css/netdna-bootstrap.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/reset.css" />

<!--<script type="text/javascript" src="<?php echo PATH;?>js/popup/js/jquery-1.11.0.min.js"></script>-->

<script type="text/javascript" src="<?php echo PATH;?>js/Popup/js/jquery.leanModal.min.js" ></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo PATH;?>js/Popup/css/style.css" />
    <!-- Bootstrap core CSS -->
<!--<link rel="stylesheet" href="<?php echo PATH; ?>css/netdna-bootstrap.css" />-->
<!--<link rel="stylesheet" href="<?php echo PATH; ?>themes/default/css/style.css" />-->
<link rel="stylesheet" href="<?php echo PATH; ?>themes/default/css/reset.css" />
<link rel="stylesheet" href="<?php echo PATH; ?>themes/default/css/animate.css" />
    
    
    <link href="<?php echo PATH;?>js/login/css/font-awesome.min.css" rel="stylesheet"><!--
    <link href="<?php echo PATH;?>js/login/css/style.css" rel="stylesheet"> -->
    <script type="text/javascript">
window.onload=function() {
document.forms[0][0].focus();
}
</script>
  <script>
     
     
    function disable1(){
        
        if (document.getElementById("yes").checked){
            
            
            document.getElementById("no").disable = true;
        }
        else{
            
            document.getElementById("no").disable = true;
        }
    }
    
    function disable2(){
        
        if (document.getElementById("no").checked){
            
            
            document.getElementById("yes").disable = true;
        }
        else{
            
            document.getElementById("yes").disable = true;
        }
    }
    

    </script>
<style>
    
 @import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";

    
.merchant_intro{font:normal 16px/21px arial;color:#666666;}

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

    #htext{
        color:#A61C00;
        font-size:24px;
        margin-top:25px;
        font-family:"Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif !important;
    }
    
    .sell_title{
        font-size:17px;
        color:#616769 !important;
        margin: 10px 0px 5px;
        font-family:"Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif !important;
        font-weight: 500 !important;
    }

    .sell_text{
        font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif;
        font-size:14px;
        color:#616769 !important;
    } 
    
    .note_red{
        font-size: 15px;
        margin-top: 5px;
        color: red; 
        font-family:"Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif !important;
    }
    
    .zenith_question{
        font-size:20px; 
        margin-left:5px;
        margin-top: 10px; 
        font-family:"Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif !important;
    }
    
    .click_here_btn{
        background:transparent; 
        padding:0px 10px 0px; 
        color:#A61C00;
    }
    
    .click_here_btn:hover{
        background:#A61C00;  
        color:#fff;
    }
    
    .breaker{
        display:none;
    }
    
    #acctnums{
        width:250px;
    }



.swifta_input  {

 margin: 5px 0px;
 
  width: 250px;

  display: block;

  border: none;

  padding: 10px 0;
  
  outline:none;

  
 border-bottom: solid 1px #F1F1F1;

   /* border-bottom: thin 1px #A61C00;*/
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -250px 0;

  background-size: 250px 100%;

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

  width: 100px;

  color: white;

  margin-left: 350px;
  
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);

}

.swifta_button:hover {

  -webkit-transform: translateY(-3px);

  -ms-transform: translateY(-3px);

  transform: translateY(-3px);

  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);

}



.swifta_input2  {

/* margin: 5px 0px;*/
 
  width: 250px;

  display: inline;

  border: none;
  
  outline:none;

  
 border-bottom: solid 1px #F1F1F1;

   /* border-bottom: thin 1px #A61C00;*/
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);

  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #A61C00 4%);

  background-position: -250px 0;

  background-size: 250px 100%;

  background-repeat: no-repeat;

 
 /*color: #A61C00;*/
 font-size:large;

}


.swifta_input2:focus, .swifta_input2:valid {

 box-shadow: none;

 outline: none;

 background-position: 0 0;

}

.swifta_input2:focus::-webkit-input-placeholder, swifta_input2:valid::-webkit-input-placeholder {

 color:#A61C00;
 font-size: 11px;

 -webkit-transform: translateY(-20px);

 transform: translateY(-20px);

 visibility: visible !important;
 

}

.swifta_button2 {
    
  margin-left: 5px;

  border: none;

  /*background: #1abc9c;*/
  background:#A61C00;
  cursor: pointer;

  border-radius: 3px;

  padding: 6px;

  width: 100px;

  color: white;
/*  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.1);*/

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
input[type=text],input[type=password]{
    border:#ccc solid 0px; 
    border-bottom: 1px thin #ccc;
}

/* Large desktops and laptops */
@media (min-width: 1200px) {

}

/* Landscape tablets and medium desktops */
@media (min-width: 992px) and (max-width: 1199px) {

}

/* Portrait tablets and small desktops */
@media (min-width: 768px) and (max-width: 991px) {

}

/* Landscape phones and portrait tablets */
@media (max-width: 767px) {

}

/* Portrait phones and smaller */
@media (max-width: 480px) {
     .sell_title{
        margin: 15px 0px 10px;
        font-weight: bold;
    }
    
    .bdr_bottom_mobile{
        border-bottom: 1px solid #f0f0f0;
        padding:5px 0px 10px;
    }
    
    .note_red{
        font-size: 13px;
        margin-top: 5px;
        color: #e32; 
        text-justify: auto;
        font-family:"Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif !important;
    }
    .zenith_question{
        font-size:14px;
        margin-top: 10px; 
    }
        
    #submit_acc{
      margin-top:5px;
    }
    
    .breaker{
        display:block;
    }
    
/*    #acctnums{
        width:80%;
    }
    
    #acctnum{
        width:80%;
    }*/
    
    .htext{
        font-size:18px;
        font-weight:bold;
        margin-top:35px;
    }

}   

</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
 <!--  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>-->
 <!-- SELLER SIGNUP -->
    <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer">
                <h2 class="seller_sign_title" style="text-align: center; font-size:30px;"><?php //echo $this->Lang['WEL_SEL_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_STRE']; ?></p>
                <div class="seller_signup clearfix">
                    <div class="seller_signup_menu">
                        <div class="seller_signup_introduction active_tab">
                            <span>01</span>
                            <p><?php echo $this->Lang['INTRO']; ?></p>
                        </div>
                        <div class="seller_signup_form_submit">
                            <span>02</span>
                            <p style=" font-weight: bold; color:#000000">Merchant <?php echo $this->Lang['SIGN_UP']; ?></p>
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
                    
      
 	<!-- - Login Model Ends Here -->
                    <div class="payouter_block pay_br">
<!--                        <h3 class="paybr_title pay_titlebg"><?php echo $this->Lang['CRTE_YR_STRE']; ?>: <?php echo $this->Lang['INTRO']; ?></h3>-->
                        <div class="p_inner_block clearfix">
                            <p class="merchant_intro">
<!--                            <?php echo $this->Lang['SELLER_INTRODUCTION']; ?> <a  style="text-decoration: underline;"href="<?php echo $this->Lang['ZMART AGREEMENT URL']; ?>"><?php echo $this->Lang['ZMART AGREEMENT']; ?></a>
                            <br><input type="checkbox" id="toggle" checked/> <?php echo $this->Lang['ZMART CHECKBOX']; ?> <b><?php echo $this->Lang['ZMART AGREEMENT']; ?></b>
                            -->
                            <img style="width:100%" src="<?php echo PATH; ?>custom/images/WelcomeToZmart.png"></img>
                            
                        
           <div style="background-color: #FFFBEF; opacity: .8; border:1px solid #ccc; min-height:30px; padding:5px 5px 8px; ">
                        
                        <div class="row">
                            
                              <form name="formName" method="post">
                            <div class="col-md-12">
                                <h1 class="zenith_question">Do you have a Zenith Bank account ?
                                    <div class="breaker"></div>
                                        <span style="font-size:16px;"><input type="radio" name="Account_info_radio" id="radio1_yes" />&nbsp;<label for="radio1_yes" >Yes</label></span>
                                        <span style="font-size:16px;"><input type="radio" name="Account_info_radio" id="radio1_no" /> <label for="radio1_no"> No</label></span>
                               </h1>
                            </div>                 
                            <div class="col-md-4" style="margin-top:10px;">
                                <div id="autoUpdate" class="autoUpdate" style="display:none">
                                
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="submit_accs">Enter <strong>NUBAN</strong> account name : </label>
                                            <input type = "textbox" name="acctnums" id="acctnums" maxlength="10" onkeypress="return isNumberKey(event)" placeholder="Enter Nuban Account Number"  class="form-control bdr" autofocus required/>
                                        </div>
                                        <input type="submit"  name="submit" value="Proceed" id="submit_accs" class="swifta_button2" onclick="show_gifs(this);" >
                                    </form>
                                
                                    <div class="merchant_submit_buttons clearfix" id="sendNewSms">                      
                                        <input style="display:none;" type="submit"  name="submit" value="Proceed" id="submit_acc" class="swifta_button " onclick="show_gif(this);">  
                                        <a style="display:none;" id="shw" href="<?php echo PATH; ?>merchant-signup-step2.html" title="<?php echo $this->Lang['ACC']; ?>" class="buy_it"><?php echo $this->Lang['ACC']; ?></a>
                                   </div>
                                </div>
                            </div>
       
                         </div>
                    </div>
                      
                    <div class="container-fluid text-center custorm">
                            <h1 class="animated bounce" id="htext" >Why you should sell on Zmart!</h1>

                            <div class="row" style="margin-top:20px;">
                                <div class="col-sm-4 col-md-4 col-lg-4 bdr_bottom_mobile" style="background-color:#fff;"><h4 class="sell_title" style="color:#60532f;font-weight:bold; ">Sell More, Earn More</h4>
                                    <img style="border:1px solid #E6E9EB;" src="<?php echo PATH; ?>custom/images/pla.png" class="img-circle" alt="Cinque Terre"> <p class="sell_text" style="text-align:  justify;  margin-top:10px;">Zmart comes with a built-in customer base, leveraging the over 3 million high quality customers of Zenith Bank spread across every state in Nigeria.</p></div>
                                <div class="col-sm-4 col-md-4 col-lg-4 bdr_bottom_mobile" style="background-color:#fff; ">  <h4 class="sell_title" style="color:#60532f;font-weight:  bold; ">Contacting buyers is a breeze</h4>
                                    <img style="border:1px solid #E6E9EB;" src="<?php echo PATH; ?>custom/images/breeze.png" class="img-circle" alt="Cinque Terre"><p class="sell_text" style="text-align:  justify; margin-top:10px;">Communication between you and your buyers is crucial and we have made it easy to exchange messages with buyers who may need to contact you.</p> </div>
                                <div class="col-sm-4 col-md-4 col-lg bdr_bottom_mobile" style="background-color:#fff;"><h4 class="sell_title" style="color:#60532f;font-weight:  bold; ">Low transaction fees</h4>
                                    <img style="border:1px solid #E6E9EB;" src="<?php echo PATH; ?>custom/images/lowtrans.png" class="img-circle" alt="Cinque Terre"><p class="sell_text" style="text-align:  justify;margin-top:10px;">Transaction fees are as low as 1.5%, and you are only charged when you actually make a successful sale and collect payment on the site.</p> </div>
                            </div>

                            <div class="row" style="margin-top:15px;">
                                <div class="col-sm-4 col-md-4 bdr_bottom_mobile" style="background-color:#fff;"><h4 class="sell_title" style="color:#60532f;font-weight:  bold; ">Dedicated Support 24/7</h4>
                                    <img style="border:1px solid #E6E9EB;" src="<?php echo PATH; ?>custom/images/supports.png" class="img-circle" alt="Cinque Terre"> <p class="sell_text" style="text-align:  justify;margin-top:10px;">Zmart provides a dedicated merchant support team to ensure you have all the help you need to make a success of your store on Zmart.</p>  </div>
                                <div class="col-sm-4 col-md-4 bdr_bottom_mobile" style="background-color:#fff;"><h4 class="sell_title" style="color:#60532f;font-weight:  bold; ">You decide everything</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/whyusezmart-01n.png" class="img-circle" alt="Cinque Terre" ><p class="sell_text" style="text-align:justify;margin-top:10px;" >Everything is in your control: your pricing, what payment methods to accept, your return policy, how your goods are delivered, and other important decisions.</p> </div>
                                <div class="col-sm-4 col-md-4 " style="background-color:#fff;"><h4 class="sell_title" style="color:#60532f;font-weight:  bold; ">It's bank-secure</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/secure.png" class="img-circle" alt="Cinque Terre" > <p class="sell_text" style=" text-align:  justify;margin-top:10px;">Zmart is among the safest and most trusted platforms to buy and sell online in Nigeria. Safety and security are huge priorities for both buyers and sellers and  we have put in place stringent measures to ensure our community is safe and secure.</p></div>
                            </div>
                        </div>               
                            <br>
                            <p class="note_red">* Kindly note that you will be required to open a Corporate/Business Account with Zenith Bank to be registered</p>
                          
                            <form name="formName" method="post"><p class="zenith_question">Do you have a Zenith Bank account ? </p><p style="margin-left:10px;">
                                 <input type="radio" name="priorityHigh" id="radio2_yes" />&nbsp;<label for="priorityHigh" >Yes</label>
                                <input type="radio" name="priorityHigh" id="radio2_no"/> <label for="priorityLow"> No</label><br></p>
                                <br>
                        
                        <div id="autoUpdate2" class="autoUpdate" style="display:none">
                   
                             <div class="col-md-4">
                                    <form class=""> 
                                        <div class="form-group">
                                            <label for="acctnum">Enter <strong>NUBAN</strong> account name : </label>
                                            <input type = "textbox" name="acctnum" id="acctnum" maxlength="10"  onkeypress="return isNumberKey(event)" placeholder="Enter Nuban Account Number"  class="form-control bdr" autofocus required >
                                        </div>
                                        <input type="submit"  name="submit" value="Proceed" id="submit_acc" class="swifta_button2" onclick="show_gif(this);" >
                                    </form>
                            </div>

                         <div class="merchant_submit_buttons clearfix" id="sendNewSms">                      
                                              <!--<input style="display:none;" type="submit"  name="submit" value="Proceed" id="submit_acc" class="swifta_button " onclick="show_gif(this);">-->  
                             <a style="display:none;" id="shw" href="<?php echo PATH; ?>merchant-signup-step2.html" title="<?php echo $this->Lang['ACC']; ?>" class="buy_it"><?php echo $this->Lang['ACC']; ?></a>
                        </div>
                            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:20px;">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Confirm</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>You are about to Create An Account.</p>
                                            <p>Do you want to proceed?</p>
                                            <p class="debug-url"></p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"> No</button>
                                            <a class="btn btn-danger btn-ok" href="<?php echo PATH; ?>merchant-signup-step3.html"> Yes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                <em id="z_acc_error"></em>
                                <div id="" class="red box"><a href="<?php echo PATH; ?>merchant-signup-account-opening.html"></a></div>
                        </form>
                            </p>
                        </div>
                    
                               <div style="margin-top: 15px; text-align: center; height: 80px;">
<!--                                   <h3 style="font-size: larger; font-style: italic;">If you have already registered as a merchant, <a style="color:blue;" href="<?php echo PATH . 'merchant-login.html'; ?>">click here</a> to login.</h3>-->
                                   <h3 class="zenith_question">If you have already registered as a merchant,
                                       <button id="modal_trigger" class="btn btn-default zenith_question click_here_btn" href="#modal">Click here to login.</button>
                                       <button id="modal_trigger2" style="display:none;" class="" href="#modal2"></button>
                                       <button id="modal_trigger3" style="display:none;" class="" href="#modal3"></button>
                                   </h3>                           
<!--                                   <a id="modal_trigger" class="btn" style="color:blue; font-style: italic" href="#modal">click here</a> -->
                               </div>
                                            
                    </div>   
                    
                    <div class="merchant_submit_buttons clearfix" id="sendNewSms">                      
                        <!--<a href="<?php echo PATH; ?>merchant-signup-step2.html" title="<?php echo $this->Lang['ACC']; ?>" class="buy_it"><?php echo $this->Lang['ACC']; ?></a>-->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 
 

    <div class="container">
<!--	<a id="modal_trigger" href="#modal" class="btn">Click here to Login or register</a>-->

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Merchant Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
            <section class="popupBody">
			<!-- Social Login  #7f8c8d-->
			<div class="social_login">
				<div class="clearfix"></div>
			</div>
                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 user_login mrg-left">
                                   <form class="form-horizontal" method="post" action="<?php echo PATH; ?>/merchant-login.html">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-8">
                                          <input type="email" name="email" class="form-control bdr" id="inputEmail3" placeholder="Enter your email"  value="<?php if(isset($this->postemail)){ echo $this->postemail; }?>" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputEmail" class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-8">
                                        <input type="password" name="password" class="form-control bdr" id="inputEmail" placeholder="Enter your password" required>
                                      </div>
                                    </div> 
                                       <div class="form-group">
                                       <label for="" class="col-sm-2 control-label"></label>    
                                        <div class="col-sm-6">
                                            <p style="font-size:16px; color:#7f8c8d; line-height: 40px" id="forgot_pwd" class="back_btn">Forgot Password?</p>
                                        </div>
                                         <div class="col-sm-2 ">
                                             <button type="submit" style="padding-left:18px; padding-right:18px;" id="sign_in" class="btn btn-danger red_btn">Sign in</button>
                                         </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 user_register mrg-left">
                                   <form class="form-horizontal" method="post" action="<?php echo PATH;?>merchant/forgot-password.html">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-8">
                                          <input type="text" name="email" class="form-control bdr" id="inputEmail3" placeholder="Email your email"  value="<?php if(isset($this->postemail)){ echo $this->postemail; }?>" required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Captcha</label>
                                        <div class="col-sm-3">
                                            <img height="50" width="140" src="<?php echo PATH; ?>/captcha/default" alt="captcha"/>
                                            <?php if(isset($this->email_error)){ echo "<em>".$this->email_error."</em>"; } ?>
                                            <p class="help-block"><?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?></p>
                                        </div>
                                        <div class="col-sm-5">
                                          <input type="text" name="captcha" class="form-control bdr" id="inputcaptcha" placeholder="Enter the captcha code here"  maxlength="32" required autofocus>
                                          <p class="help-block"><?php if(isset($this->captcha_error)){ echo "<em>".$this->captcha_error."</em>"; } ?></p>
                                          <p class="help-block"><?php if(isset($this->form_error['captcha'])){ echo $this->form_error["captcha"]; }?></p>
                                      </div>
                                    </div>
                                       
                                    <div class="form-group ">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6 col-sm-offset-2">
                                            <button type="submit" style="padding-left:40px; padding-right:40px;" class="btn btn-default back_btns button_left"><i class="fa fa-angle-double-left"></i> Back</button>
                                        
                                            <button type="submit" id="sign_in" style="margin-left: 5px; padding-left:40px; padding-right:40px;" class="btn btn-danger red_btn button_right" title="<?php echo $this->Lang['SUBMIT']; ?>">Submit</button>
                                         </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                                
                            </div>
                        </section>
                        </div>
    </div>

                   
<!--dont have a zenith bank account form-->
<div class="container">
	<div id="modal2" class="popupForm col-md-6 col-xs-12" style="display:none;">
		<header class="popupHeader2">
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
            <section class="popupBody2">           
                    <div class="container-fluid">
                            <div class="row disclaimerform" >
                                <div class="col-md-12"  style="margin-bottom:30px;">
                                     <div class="text-center">
                                        <h1><img width="60px" height="60px" src="<?php echo PATH; ?>custom/images/ZenithLogo.png"/></h1>
                                        <h2>PLEASE NOTE</h2>
                                        <div>
                                            <p>YOU REQUIRE A ZENITH BANK CORPORATE ACCOUNT TO REGISTER AS A MERCHANT ON ZMART 
                                            KINDLY VISIT ANY OF OUR BANK BRANCHES. CLICK ON THE LINK BELOW TO VIEW A LIST OF OUR BRANCHES<br></p>
                                        </div>  
                                     </div>
                                    <div style="margin-top:20px;">
                                        <div class="col-md-6 col-sm-12">
                                            <button onClick="window.open('http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf','_blank');" class="btn btn-default"><span style="color:red;" class="fa fa-file-pdf-o"></span> Download A/C Opening Form</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <button onClick="window.open('http://www.zenithbank.com/ViewAllBranches.aspx?id=1','_blank');" class="btn btn-default"><span class="fa fa fa-list"></span> View A List of All Our Branches</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>                      
                    
            </section>
        </div>
    </div>
<!--dont have a zenith bank account form-->

<!--Account Verification failed-->
<div class="container">
	<div id="modal3" class="popupForm col-md-6 col-xs-12" style="display:none;">
		<header class="popupHeader2">
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
            <section class="popupBody2">           
                    <div class="container-fluid">
                            <div class="row disclaimerform" >
                                <div class="col-md-12"  style="margin-bottom:30px;">
                                     <div class="text-center">
                                        <h1><img width="60px" height="60px" src="<?php echo PATH; ?>custom/images/ZenithLogo.png"/></h1>
                                        <h2>VERIFICATION FAILED</h2>
                                        <div>
                                            <p>Please try again . . .<br></p>
                                        </div>  
                                     </div>
                                </div>
                            </div>
                    </div>                      
                    
            </section>
        </div>
    </div>
<!-- Account verification failed -->

 <script type="text/javascript">
	$("#modal_trigger").leanModal({top : 50, overlay : 0.6, closeButton: ".modal_close" });
        $("#modal_trigger2").leanModal({top : 50, overlay : 0.6, closeButton: ".modal_close" });
        $("#modal_trigger3").leanModal({top : 50, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
            
                $("#radio1_no").click(function(){
                     $('#autoUpdate').hide();
//                     $(this).ch
                    this.checked = false;       
                    
                    $("#modal_trigger2").click();
                   
                });
                
                $("#radio2_no").click(function(){
                     $('#autoUpdate2').hide();
//                     $(this).ch
                    this.checked = false;       
                    
                    $("#modal_trigger2").click();
                   
                });
                
                $('#radio1_yes').click(function(){;
                    $('#autoUpdate').fadeIn('slow')
                });
                
                 $('#radio2_yes').click(function(){
                    $('#autoUpdate2').fadeIn('slow')
                });
                
//                $("#priorityc2").click(function(){
//                     $('#autoUpdate2').hide();
////                     $(this).ch
//                    this.checked = false;       
//                    
//                    $("#modal_trigger2").click();
//                   
//                });
                
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
  			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
                        $(".user_login").hide();
			$(".user_register").show();
			$(".social_login").show();
                        
			$(".header_title").text('Password Recovery');
			return false;
		});
                
                
                $(".back_btns").click(function(){
                        $(".user_login").show();
			$(".user_register").hide();
			$(".social_login").show();
                        
			$(".header_title").text('Merchant Login');
			return false;
		});

	})
</script>

    <!-- SELLER SIGNUP -->
   
<!--    <script>
    $(document).ready(function(){
$('#checkbox1').change(function(){
if(this.checked)
$('#autoUpdate').fadeIn('slow');
else
$('#autoUpdate').fadeOut('slow');

});
});
    
    
    
    </script>  -->
    <!--<script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery-2.0.3.min.js"></script>-->


    
<script src="<?php echo PATH;?>js/script.js"></script>

<script type="text/javascript">
    
    
   $(document).ready(function () {
    $('#priorityHigh2').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate2').fadeIn('slow') ;//&& $('#g').hide('slow')
        else 
            $('#autoUpdate2').fadeOut('slow');
    });
});

 $(document).ready(function () {
    $('#priorityLows').change(function () {
        if (this.checked) 
        //  ^
            
         {    swal({   
       title: "Do you want to open a new account?",  
text: "",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
//imageSize: '100x180',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "Yes, Proceed!",   
cancelButtonText: "No, Later!",   
closeOnConfirm: false,   
closeOnCancel: false}, 
function(isConfirm){ 
    if (isConfirm) {     
        location.href ="<?php echo PATH; ?>merchant-signup-account-opening.html"  
    } else {     
      //swal("Cancelled", "Please, come back and complete your merchant sign up" , "error" );
        location.href ="<?php echo PATH; ?>"
   }

     
 
//   if(cancelButtonText = 'ok')
//{
//    //alert("try");
//    location.href ="<?php echo PATH; ?>"  
//} 


    });
      
   

$('#autoUpdates').hide('slow') //&& $('#g').fadeIn('slow') ; 
            //$('#g').hide('slow');
       } else 
            $('#autoUpdates').hide('slow');
    });
	
	 $('#priorityLows').change(function () {
        if (this.checked) 
        //  ^
            
         {    swal({   
       title: "PLEASE NOTE",  
text: "YOU REQUIRE A ZENITH BANK CORPORATE ACCOUNT TO REGISTER AS A MERCHANT ON ZMART. "+
        "KINDLY VISIT ANY OF OUR BANK BRANCHES. CLICK ON THE LINK BELOW TO VIEW A LIST OF OUR BRANCHES<br>\n\
        <a href='http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf' target='_blank' class='btn btn-info'>DOWNLOAD A/C OPENING FORM</a>",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
//imageSize: '100x180',
//text:"<a href='http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf' target='_blank' class='btn btn-info'>DOWNLOAD A/C OPENING FORM</a>",
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "VIEW A LIST OF BRANCHES",   
//cancelButtonText: "DOWNLOAD A/C OPENING FORM",
html:true,
closeOnConfirm: false,   
closeOnCancel: true}, 
function(isConfirm){ 
    if (isConfirm) {     
        //location.href ="http://www.zenithbank.com/ViewAllBranches.aspx?id=1" 
        window.open(
  "http://www.zenithbank.com/ViewAllBranches.aspx?id=1",
  '_blank' // <- This is what makes it open in a new window.
);
    }
//    else {     
//      //swal("Cancelled", "Please, come back and complete your merchant sign up" , "error" );
//        ///location.href ="http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf"
//        window.open(
//  "http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf",
//  '_blank' // <- This is what makes it open in a new window.
//);
//   }

     
 
//   if(cancelButtonText = 'ok')
//{
//    //alert("try");
//    location.href ="<?php echo PATH; ?>"  
//} 


    });
      
   

$('#autoUpdates').hide('slow') //&& $('#g').fadeIn('slow') ; 
            //$('#g').hide('slow');
       } else 
            $('#autoUpdates').hide('slow');
    });
});


function validation_failed(){
	
	
        swal({   
        title: "Verification failed. Please try again.",  
		text: "",  
		imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
		//imageSize: '100x180',
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Try again",   
		cancelButtonText: "Cancel",   
		closeOnConfirm: true,   
		closeOnCancel: true,
		}, 
		function(isConfirm){ 
			if (isConfirm) {     
				
			} else {     
//                          location.href ="<?php echo PATH; ?>merchant-signup-account-opening.html";
                          location.href ="<?php echo PATH; ?>";
		   }

   

    });
}



 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
       
  
</script>



<script type="text/javascript">
    
    
   $(document).ready(function () {
    $('#priorityHigh').change(function () {
        if (this.checked) 
        //  ^
           $('#autoUpdate').fadeIn('slow') ;//&& $('#g').hide('slow')
        else 
            $('#autoUpdate').fadeOut('slow');
    });
});

 $(document).ready(function () {
    $('#priorityLow').change(function () {
        if (this.checked) 
        //  ^
            
         {    swal({   
       title: "Do you want to open a new account?",  
text: "",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
//imageSize: '100x180',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "Yes, Proceed!",   
cancelButtonText: "No, Later!",   
closeOnConfirm: false,   
closeOnCancel: false}, 
function(isConfirm){ 
    if (isConfirm) {     
        location.href ="<?php echo PATH; ?>merchant-signup-account-opening.html"  
    } else {     
      //swal("Cancelled", "Please, come back and complete your merchant sign up" , "error" );
        location.href ="<?php echo PATH; ?>"
   }

     
 
//   if(cancelButtonText = 'ok')
//{
//    //alert("try");
//    location.href ="<?php echo PATH; ?>"  
//} 


    });
      
   

$('#autoUpdate').hide('slow') //&& $('#g').fadeIn('slow') ; 
            //$('#g').hide('slow');
       } else 
            $('#autoUpdate').hide('slow');
    });
	
	 $('#priorityLow').change(function () {
        if (this.checked) 
        //  ^
            
         {    swal({   
       title: "PLEASE NOTE",  
text: "YOU REQUIRE A ZENITH BANK CORPORATE ACCOUNT TO REGISTER AS A MERCHANT ON ZMART. "+
        "KINDLY VISIT ANY OF OUR BANK BRANCHES. CLICK ON THE LINK BELOW TO VIEW A LIST OF OUR BRANCHES\n\<br>\n\
<a href='http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf' target='_blank' class='btn btn-info'>DOWNLOAD A/C OPENING FORM</a>",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
//imageSize: '100x180',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "VIEW A LIST OF BRANCHES",   
//cancelButtonText: "DOWNLOAD A/C OPENING FORM",   
html:true,
closeOnConfirm: false,   
closeOnCancel: true}, 
function(isConfirm){ 
    if (isConfirm) {     
       // location.href ="http://www.zenithbank.com/ViewAllBranches.aspx?id=1" 
       window.open(
  "http://www.zenithbank.com/ViewAllBranches.aspx?id=1",
  '_blank' // <- This is what makes it open in a new window.
);
    } 
//    else {     
//      //swal("Cancelled", "Please, come back and complete your merchant sign up" , "error" );
//        ///location.href ="http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf"
//         window.open(
//  "http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf",
//  '_blank' // <- This is what makes it open in a new window.
//);
//   }

     
 
//   if(cancelButtonText = 'ok')
//{
//    //alert("try");
//    location.href ="<?php echo PATH; ?>"  
//} 


    });
      
   

$('#autoUpdate').hide('slow') //&& $('#g').fadeIn('slow') ; 
            //$('#g').hide('slow');
       } else 
            $('#autoUpdate').hide('slow');
    });
});


function validation_failed(){
	
	
        swal({   
        title: "Verification failed. Please try again.",  
		text: "",  
		imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
		//imageSize: '100x180',
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",   
		confirmButtonText: "Try again",   
		cancelButtonText: "Cancel",   
		closeOnConfirm: true,   
		closeOnCancel: true,
		}, 
		function(isConfirm){ 
			if (isConfirm) {     
				
			} else {     
			//  location.href ="<?php echo PATH; ?>merchant-signup-account-opening.html";
                         location.href ="<?php echo PATH; ?>";
		   }

   

    });
}



 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
       //-->
       
  
</script>  
<script>

$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        if($(this).attr("value")=="ye"){
            $(".red").toggle();
        }
        if($(this).attr("value")=="green"){
            $(".green").toggle();
        }
        if($(this).attr("value")=="blue"){
            $(".blue").toggle();
        }
    });
});


(function (exports) {
    function valOrFunction(val, ctx, args) {
        if (typeof val == "function") {
            return val.apply(ctx, args);
        } else {
            return val;
        }
    }

    function InvalidInputHelper(input, options) {
       // input.setCustomValidity(valOrFunction(options.defaultText, window, [input]));

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



InvalidInputHelper(document.getElementById("acctnum"), {
    defaultText: "Please enter A Nuban Account Number!",
    emptyText: "Please enter A Nuban Account Number!",
    invalidText: function (input) {
        return 'The Account  "' + input.value + '" is invalid!';
    }
}



);

InvalidInputHelper(document.getElementById("acctnums"), {
    defaultText: "Please enter A Nuban Account Number!",
    emptyText: "Please enter A Nuban Account Number!",
    invalidText: function (input) {
        return 'The Account  "' + input.value + '" is invalid!';
    }
}



);

    function validateForm() {
        var x = document.forms["formName"]["acctnum"].value;
        if (x.length == 11  ) {
            //alert("First name must be filled out");
            //return false;
         // return  'localhost/zmartst/merchant-signup-step2.html';
         window.location.assign("<?php echo PATH; ?>/merchant-signup-step2.html")
        }
        if (x < 11 || x == "" ) {
           // alert("First name must be filled out");
            return false;
        }
    }

$(".confirm").confirm({
    text: "Are you sure you want to delete that comment?",
    title: "Confirmation required",
    confirm: function(button) {
       // delete();
    },
    cancel: function(button) {
        // nothing to do
    },
    confirmButton: "Yes I am",
    cancelButton: "No",
    post: true,
    confirmButtonClass: "btn-danger",
    cancelButtonClass: "btn-default",
    dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 				   		   
//Close Popups and Fade Layer
$('#close_verify_acc').live('click', function() {
		$('.popup_block3_0').css({'display' : 'none'});
		
		$('#fade').css({'visibility' : 'hidden'});
			//  location.reload();
	
	return false;
});

$(document).keyup(function(e) { 
	if (e.keyCode == 27) { // esc keycode
		$('.popup_block3_0').css({'display' : 'none'});
		$('#fade').css({'visibility' : 'hidden'});
	
	
	return false;
	}
});


/*if(password == '')
{
	$('#password_error').html("<?php //echo $this->Lang['PLS_ENT_PASS']; ?>");
}*/


$('#id_z_branch').focus(function(e) {
	
	if(is_branch_api_running){
	   return false;
   }
   is_branch_api_running = true;
   var sel_branch = $('#id_z_branch');
   var sel_opt_label = sel_branch.children('option').first();
   sel_opt_label.text("Loading branches...");
   sel_branch.css({'color':'#384'});
  
   javascript:get_zenith_branches(sel_branch);
   return;
   
});

$('#id_z_class').focus(function(e) {
	
	if(is_class_api_running){
	   return false;
   }
   is_class_api_running = true;
   var sel_class = $('#id_z_class');
   var sel_opt_label = sel_class.children('option').first();
   sel_opt_label.text("Loading classes...");
   sel_class.css({'color':'#384'});
  
   javascript:get_zenith_class(sel_class);
   return;
   
});




$('#id_z_open_accountx').click(function(e) {
	
	alert("XYM");
	
	
	
});




/*


	var sub_btn = $('#id_z_open_account').parent();
	var sub_btn_parent = sub_btn.parent().parent().parent().parent();
	var sub_btn_parent_bak = sub_btn_parent.html();
	
	sub_btn_parent.html("<div style = \"text-align:center\" ><img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>Processing...</p></div>");
	
	
	$('#f_name_err').text("");
	$('#l_name_err').text("");
	$('#email_err').text("");
	$('#phone_err').text("");
	$('#addr_err').text("");
	$('#gender_err').text("");
	$('#branch_no_err').text("");
	$('#class_code_err').text("");
	
	if(!document.getElementById('id_terms').checked){
		alert("Please accept terms before submitting");
		exit;
	}
	

	if(is_z_open_account_api_running){
	   return false;
   }
   
    is_z_open_account_api_running = true;
   
   var url = <?php echo PATH;?>+'users/club_open_bank_account_user'; 
	
	var fs = $($('.z_acc_input'));
	
	//var n1 = $(fs[0]).attr('name'); 
	var v1 = $(fs[0]).val();
	
	//var n2 = $(fs[1]).attr('name'); 
	var v2 = $(fs[1]).val();
	
	//var n3 = $(fs[2]).attr('name'); 
	var v3 = $(fs[2]).val();
	
	//var n4 = $(fs[3]).attr('name'); 
	var v4 = $(fs[3]).val();
	
	//var n5 = $(fs[4]).attr('name'); 
	var v5 = $(fs[4]).val();
	
	//var n6 = $(fs[5]).attr('name'); 
	var v6 = $(fs[5]).val();
	
	//var n7 = $(fs[6]).attr('name'); 
	var v7 = $(fs[6]).val();
	
	//var n8 = $(fs[7]).attr('name'); 
	var v8 = $(fs[7]).val();
	
	//var n9 = $(fs[8]).attr('name'); 
	var v9 = $(fs[8]).val();
	
	$('#terms_err').text('');
	
	var params_obj = {
		
		f_name:v1,
		l_name:v2,
		email:v3,
		phone:v4,
		addr:v5,
		gender:v6,
		branch_no:v7,
		class_code:v8,
		terms:v9
	}
	

	
	      $.ajax({
		        type:'POST',
		        url:url,
				data:params_obj,
		        cache:true,
		        async:true,
		        global:false,
		        dataType:"html",
		        success:function(response){
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_open_account_api_running = false;
					var res;
					try{
					var res = $(response);
					}catch(e){
					}
					
					
					if(isNaN(response) && res){
						var error_obj = res.children();
						if(error_obj){
							var errors = error_obj.children().children();
							if(errors)
							for(i = 0; i < errors.length; i++){
								var error_f_part = $(errors[i]).attr('key');
								var error_f = error_f_part+"_err";
								$("#"+error_f).text($(errors[i]).attr('value'));
							}
							exit;
						}
					
					}
					
					
					if(isNaN(response)){
						
						return false;
						
					}else{
						$('#terms_err').text("Sorry, something went wrong opening your account. Please try again.");
						
						exit;
						
					}
					
				
				return;
		
		        },
		       	 error:function(){
					 sub_btn_parent.html(sub_btn_parent_bak);
					is_z_open_account_api_running = false;
			        alert('No data found.');
		        }
		  });
*/


$('#submit_accxm').click(function() {
	
		
			var sub_btn = $('#submit_acc').parent();
			var sub_btn_parent = sub_btn.parent();
			var sub_btn_parent_parent_bak = sub_btn_parent.parent();
			var sub_btn_parent_bak = sub_btn_parent.html();
			
			$('#z_acc_error').html('');
			
			var nuban = $('#acctnum').val();
                        //alert(nuban);
			if(nuban == ''){
				alert("Empty field");
				return false;
			}
			
			var reg = /\d{10}/;
			var is_no = reg.exec(nuban);
			if(!is_no){
				if(nuban.length != 10){
					alert("Zenith A/C number must be 10 digits.");
					return false;
				}
				
				alert("Only digits (i.e. 0,1, 2... 9)");
				return false;
			}
			
			if(is_z_verify_account_api_running){
				return false;	
			}
			
			
	
			is_z_verify_account_api_running = true;
			
			var url = Path+'users/club_registration_logged_in_users/'; 
                        //alert(url);
			sub_btn_parent.html("<img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>verifying...</p>");
			

	            
		});
		
		
		

	
	
});







$(document).ready(function(){
$('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer 				   		   
//Close Popups and Fade Layer
$('#close_verify_acc').live('click', function() {
		$('.popup_block3_0').css({'display' : 'none'});
		
		$('#fade').css({'visibility' : 'hidden'});
			//  location.reload();
	
	return false;
});

$(document).keyup(function(e) { 
	if (e.keyCode == 27) { // esc keycode
		$('.popup_block3_0').css({'display' : 'none'});
		$('#fade').css({'visibility' : 'hidden'});
	
	
	return false;
	}
});


/*if(password == '')
{
	$('#password_error').html("<?php //echo $this->Lang['PLS_ENT_PASS']; ?>");
}*/


$('#id_z_branch').focus(function(e) {
	
	if(is_branch_api_running){
	   return false;
   }
   is_branch_api_running = true;
   var sel_branch = $('#id_z_branch');
   var sel_opt_label = sel_branch.children('option').first();
   sel_opt_label.text("Loading branches...");
   sel_branch.css({'color':'#384'});
  
   javascript:get_zenith_branches(sel_branch);
   return;
   
});

$('#id_z_class').focus(function(e) {
	
	if(is_class_api_running){
	   return false;
   }
   is_class_api_running = true;
   var sel_class = $('#id_z_class');
   var sel_opt_label = sel_class.children('option').first();
   sel_opt_label.text("Loading classes...");
   sel_class.css({'color':'#384'});
  
   javascript:get_zenith_class(sel_class);
   return;
   
});




$('#id_z_open_accountx').click(function(e) {
	
	alert("XYM");
	
	
	
});




/*


	var sub_btn = $('#id_z_open_account').parent();
	var sub_btn_parent = sub_btn.parent().parent().parent().parent();
	var sub_btn_parent_bak = sub_btn_parent.html();
	
	sub_btn_parent.html("<div style = \"text-align:center\" ><img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>Processing...</p></div>");
	
	
	$('#f_name_err').text("");
	$('#l_name_err').text("");
	$('#email_err').text("");
	$('#phone_err').text("");
	$('#addr_err').text("");
	$('#gender_err').text("");
	$('#branch_no_err').text("");
	$('#class_code_err').text("");
	
	if(!document.getElementById('id_terms').checked){
		alert("Please accept terms before submitting");
		exit;
	}
	

	if(is_z_open_account_api_running){
	   return false;
   }
   
    is_z_open_account_api_running = true;
   
   var url = <?php echo PATH;?>+'users/club_open_bank_account_user'; 
	
	var fs = $($('.z_acc_input'));
	
	//var n1 = $(fs[0]).attr('name'); 
	var v1 = $(fs[0]).val();
	
	//var n2 = $(fs[1]).attr('name'); 
	var v2 = $(fs[1]).val();
	
	//var n3 = $(fs[2]).attr('name'); 
	var v3 = $(fs[2]).val();
	
	//var n4 = $(fs[3]).attr('name'); 
	var v4 = $(fs[3]).val();
	
	//var n5 = $(fs[4]).attr('name'); 
	var v5 = $(fs[4]).val();
	
	//var n6 = $(fs[5]).attr('name'); 
	var v6 = $(fs[5]).val();
	
	//var n7 = $(fs[6]).attr('name'); 
	var v7 = $(fs[6]).val();
	
	//var n8 = $(fs[7]).attr('name'); 
	var v8 = $(fs[7]).val();
	
	//var n9 = $(fs[8]).attr('name'); 
	var v9 = $(fs[8]).val();
	
	$('#terms_err').text('');
	
	var params_obj = {
		
		f_name:v1,
		l_name:v2,
		email:v3,
		phone:v4,
		addr:v5,
		gender:v6,
		branch_no:v7,
		class_code:v8,
		terms:v9
	}
	

	
	      $.ajax({
		        type:'POST',
		        url:url,
				data:params_obj,
		        cache:true,
		        async:true,
		        global:false,
		        dataType:"html",
		        success:function(response){
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_open_account_api_running = false;
					var res;
					try{
					var res = $(response);
					}catch(e){
					}
					
					
					if(isNaN(response) && res){
						var error_obj = res.children();
						if(error_obj){
							var errors = error_obj.children().children();
							if(errors)
							for(i = 0; i < errors.length; i++){
								var error_f_part = $(errors[i]).attr('key');
								var error_f = error_f_part+"_err";
								$("#"+error_f).text($(errors[i]).attr('value'));
							}
							exit;
						}
					
					}
					
					
					if(isNaN(response)){
						
						return false;
						
					}else{
						$('#terms_err').text("Sorry, something went wrong opening your account. Please try again.");
						
						exit;
						
					}
					
				
				return;
		
		        },
		       	 error:function(){
					 sub_btn_parent.html(sub_btn_parent_bak);
					is_z_open_account_api_running = false;
			        alert('No data found.');
		        }
		  });
*/


$('#submit_accxm').click(function() {
	
		
			var sub_btn = $('#submit_accs').parent();
			var sub_btn_parent = sub_btn.parent();
			var sub_btn_parent_parent_bak = sub_btn_parent.parent();
			var sub_btn_parent_bak = sub_btn_parent.html();
			
			$('#z_acc_error').html('');
			
			var nuban = $('#acctnums').val();
                        //alert(nuban);
			if(nuban == ''){
				alert("Empty field");
				return false;
			}
			
			var reg = /\d{10}/;
			var is_no = reg.exec(nuban);
			if(!is_no){
				if(nuban.length != 10){
					alert("Zenith A/C number must be 10 digits.");
					return false;
				}
				
				alert("Only digits (i.e. 0,1, 2... 9)");
				return false;
			}
			
			if(is_z_verify_account_api_running){
				return false;	
			}
			
			
	
			is_z_verify_account_api_running = true;
			
			var url = Path+'users/club_registration_logged_in_users/'; 
                        //alert(url);
			sub_btn_parent.html("<img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>verifying...</p>");
			

	            
		});
		
		
		

	
	
});











function show_gif(obj){
	
			var sub_btn = $(obj).parent();
			var sub_btn_parent = sub_btn.parent();
			var sub_btn_parent_bak = sub_btn_parent.html();
			
			
			$('#z_acc_error').html('');
			
			var nuban = $('#acctnum').val();
			if(nuban == ''){
				alert("Empty field");
				return false;
			}
			
			var reg = /\d{10}/;
			var is_no = reg.exec(nuban);
			if(!is_no){
				if(nuban.length != 10){
					alert("Zenith A/C number must be 10 digits.");
					return false;
				}
				
				alert("Only digits (i.e. 0,1, 2... 9)");
				return false;
			}
			
			if(is_z_verify_account_api_running){
				return false;	
			}
			
			
	
			//is_z_verify_account_api_running = true;
			var url = Path+'users/merchant_registration_validation/'; 
                        //alert(url);
//			sub_btn_parent.html("<img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>verifying...</p>");
                        sub_btn_parent.html("<img src = \"<?php echo PATH."custom/images/loadingGif.gif";?>\" /><p>verifying...</p>");
                        
//			src="<?php echo PATH; ?>custom/images/pla.png"
                        
			$.ajax(
	            {
		        type:'POST',
		        url:url,
				data:{nuban:nuban},
		        cache:false,
		        async:true,
		        global:false,
		        dataType:"html",
		        success:function(check)
		        {
					
                           
                            if(check == 1){
								

				swal({   
title: "Account verification successful",  
text: "Proceed to Merchant Registration.",
//type: "success",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
imageSize: '90x90',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "Yes, Proceed!",   
cancelButtonText: "No, Later!",   
closeOnConfirm: false,   
closeOnCancel: false}, 
				function(isConfirm){   
					if (isConfirm) {     
						location.href ="<?php echo PATH; ?>merchant-signup-step2.html";   
					} else {     
						swal("Cancelled", "Please, come back and complete your merchant sign up", "warning");
					}
				});
                 }else{
					 
					
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_verify_account_api_running = false;
                                        //alert("Your account cannot be validated. Please try again");
					//$('#z_acc_error').html("<?php echo ""; ?>");
//							validation_failed();
                                                        $("#modal_trigger3").click();
                            }
                            return false;
						
			
				 
		          
		        },
		        error:function()
		        {
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_verify_account_api_running = false;
					$('#z_acc_error').text("<?php echo "Something went wrong. Please contact site admin."; ?>");
					return false;
		        }

	         });
			 //alert(11112222);
			$('#z_acc_error').html("Something went wrong. Please contact site admin.");
			return false;
	
}





function show_gifs(obj){
	
			var sub_btn = $(obj).parent();
			var sub_btn_parent = sub_btn.parent();
			var sub_btn_parent_bak = sub_btn_parent.html();
			
			
			$('#z_acc_error').html('');
			
			var nuban = $('#acctnums').val();
			if(nuban == ''){
				alert("Empty field");
				return false;
			}
			
			var reg = /\d{10}/;
			var is_no = reg.exec(nuban);
			if(!is_no){
				if(nuban.length != 10){
					alert("Zenith A/C number must be 10 digits.");
					return false;
				}
				
				alert("Only digits (i.e. 0,1, 2... 9)");
				return false;
			}
			
			if(is_z_verify_account_api_running){
				return false;	
			}
			
			
	
			//is_z_verify_account_api_running = true;
			var url = Path+'users/merchant_registration_validation/'; 
                        //alert(url);
			sub_btn_parent.html("<img src = \"<?php echo PATH."custom/images/loadingGif.gif";?>\" /><p>verifying...</p>");
			
			$.ajax(
	            {
		        type:'POST',
		        url:url,
				data:{nuban:nuban},
		        cache:false,
		        async:true,
		        global:false,
		        dataType:"html",
		        success:function(check)
		        {
					
                           
                            if(check == 1){
								

				swal({   
title: "Account verification successful",  
text: "Proceed to Merchant Registration.",
//type: "success",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
imageSize: '90x90',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "Yes, Proceed!",   
cancelButtonText: "No, Later!",   
closeOnConfirm: false,   
closeOnCancel: false}, 
				function(isConfirm){   
					if (isConfirm) {     
						location.href ="<?php echo PATH; ?>merchant-signup-step2.html";   
					} else {     
						swal("Cancelled", "Please, come back and complete your merchant sign up", "warning");
					}
				});
                 }else{
					 
					
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_verify_account_api_running = false;
                                        //alert("Your account cannot be validated. Please try again");
					//$('#z_acc_error').html("<?php echo ""; ?>");
							$("#modal_trigger3").click();
                            }
                            return false;
						
			
				 
		          
		        },
		        error:function()
		        {
					sub_btn_parent.html(sub_btn_parent_bak);
					is_z_verify_account_api_running = false;
					$('#z_acc_error').text("<?php echo "Something went wrong. Please contact site admin."; ?>");
					return false;
		        }

	         });
			 //alert(11112222);
			$('#z_acc_error').html("Something went wrong. Please contact site admin.");
			return false;
	
}

</script>

<script src="<?php echo PATH;?>js/netdna-bootstrap.js"></script>
<!--
<link rel="stylesheet" href="<?php echo PATH;?>css/netdna-bootstrap.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/style.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/reset.css" />-->
  


