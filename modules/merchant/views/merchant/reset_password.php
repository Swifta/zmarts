<?php defined('SYSPATH') or die('No direct script access.'); ?>

<style>
    /*test style*/

.swifta_h1, .swifta_input::-webkit-input-placeholder, button {

 font-family: 'roboto', sans-serif;

 -webkit-transition: all 0.40s ease-in-out;

 transition: all 0.40s ease-in-out;

}

.mv{
    
    margin-left: 20px;
}


.swifta_h1 {
	height: 80px;
	width: 100%;
	font-size: 18px;
	/*background: #18aa8d;*/
  
	background: #A61C00;
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

 margin: 15px 20px;
 
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

 /* color: #0e6252;*/
 color: A61C00;

}

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

input[type=text],input[type=password]{border:#ccc solid 0px; border-bottom: 1px solid #ccc;}
/*test style closed*/

</style>
<div class=""  >
		
    		
                <div class="">
                   <div class="">
                    <div class="">
                    <div class="">
<!--                        <h1><?php echo $this->Lang['FORGOT_PASS']; ?></h1>-->
                        <div class="">
                        <form action="<?php echo PATH;?>merchant/reset-password.html" method="post" class="swifta_form" style="background:#fff">
                             <p class="swifta_h1">Welcome, the security of your account is important. <br />  Kindly change your password to continue.</p>
                             
                             
                          <ul>
                            
                               <!--<li>
                                    <div class="">
                                    
                                    
                                    <input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" class="swifta_input" placeholder="Enter new password" maxlength="256" style="margin-top:40px" required />
                                    <em style=" margin-left:20px; padding-left: 0;"><?php if(isset($this->form_error['email'])){ echo $this->form_error["email"]; }?></em></div>
                                    
                                    
                                </li>-->
                                
                               <li>
                                    <div  class="" style="margin-top:40px;"><input style="margin-top: 10px; margin-bottom: 10px;" type="password" name="pass1" value="<?php if(isset($_POST['pass1'])){ echo $_POST['pass1'];}?>" class="swifta_input" placeholder="Enter new password" maxlength="256"  required />
                                   <em style=" margin-left:20px; padding-left: 0;"><?php if(isset($this->form_error['pass1'])){ echo $this->form_error["pass1"]; }?></em></div>
                                    
                                    
                                </li>
                                
                                
                                <li>
                                    <div  class=""><input style="margin-top: 10px; margin-bottom: 10px;" type="password" name="pass2" value="<?php if(isset($_POST['pass2'])){ echo $_POST['pass2'];}?>" class="swifta_input" placeholder="Re-enter new password" maxlength="256"  required />
                                   <em style=" margin-left:20px; padding-left: 0;"><?php if(isset($this->form_error['pass2'])){ echo $this->form_error["pass2"]; }?></em></div>
                                    
                                    
                                </li>
                                
                                <!--<li class="mv"><img height="35" width="150" src="<?php echo PATH; ?>/captcha/default" alt="<?php echo $this->Lang['CAPTCHA']; ?>"  /></li>
                                <li class="mv"><p><?php echo $this->Lang['ETR_TXT_BLW']; ?></p></li>
                                <li class="mv"><strong ><?php echo $this->Lang['CAPTCHA']; ?> : </strong></li>
                                <li>
                                    <div class="login_capcta_bg"> <input class="swifta_input" placeholder="Enter Your Captcha" type="text" name="captcha"  maxlength="32" required autofocus/> </div>
                                    <div class="captcha_error_msg"><?php if(isset($this->captcha_error)){ echo "<em>".$this->captcha_error."</em>"; } ?></div>
                                    <div class="captcha_error_msg"><em><?php if(isset($this->form_error['captcha'])){ echo $this->form_error["captcha"]; }?></em></div>
                                 </li>-->
                                <li class="mv"  style="margin-top: 20px;">
                                    <input class="submit" type="submit" value="" title="<?php echo $this->Lang['SUBMIT']; ?>"/> 
                                    <input class="cancel" type="button"  title="<?php echo $this->Lang['CANCEL']; ?>"  onclick="window.location.href='<?php echo PATH; ?>merchant-login.html'"/>
                                </li>
                            </ul>
                     </form>
                        </div>
                     </div>
                    </div>
                 
                 </div>
                 
                 <div class="login_form_bottom">  </div>
                 
        	
            
    </div>

   

