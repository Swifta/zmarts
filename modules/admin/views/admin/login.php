<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript">
window.onload=function() {
document.forms[0][0].focus();
}
</script>

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



	<div class="" id="login">
    
  
     <div class=""> 
		<div class="">
    		
                <div class="">
                     <div class="">
                    <form  style="background:#fff" class="swifta_form" method="post">
                   
                    <h1 class="swifta_h1"><?php if(isset($this->is_merchat)){echo  $this->Lang["MERCHANT_LOGIN_TITLE"];}else if(isset($this->is_store_admin)){ echo $this->Lang['STORE_ADMIN_LOGIN']; }else{echo $this->Lang["VIEW_LOGIN_TITLE"]; }?></h1><?php if(isset($this->error_login)){ ?><span class="login_error"><?php echo $this->error_login; ?></span><?php } ?>
                   </h1>

                      <input  class="swifta_input" name="email" placeholder="Email" type="text" value="<?php if(isset($this->postemail)){ echo $this->postemail; }?>" required>

                      <input class="swifta_input" name="password" placeholder="Password" type="password" required>
                      
            <?php if(isset($this->is_merchat) || isset($this->is_store_admin) || isset($this->is_admin) ){?> <span style="cursor:pointer; color:black; margin-left: 25px;" >
        <a <?php if(isset($this->is_merchat)){?> onclick="window.location.href='<?php echo PATH; ?>merchant/forgot-password.html'" <?php }
        else if(isset($this->is_admin)){?> onclick="window.location.href='<?php echo PATH; ?>admin/forgot-password.html'" 
    <?php }else{ ?> onclick="window.location.href='<?php echo PATH; ?>store-admin/forgot-password.html'"<?php }?> title="<?php echo $this->Lang['FORGOT_PSWD']; ?>"> <?php echo $this->Lang['FORGOT_PSWD']; ?></a> </span><?php }else { ?> <?php }?>   
<!--                       <button class="swifta_button" title="<?php //echo $this->Lang['LOGIN']; ?>">Submit</button>-->
                       <input type="submit" class="swifta_button" value="LOGIN"  title="<?php echo $this->Lang['LOGIN']; ?>" />

</form>
                                        </div>
						<?php /* if(isset($this->is_merchat)){?> <span style="cursor:pointer; color:white; float:right; margin-top:-37px;" >
<a onclick="window.location.href='<?php echo PATH; ?>merchant/forgot-password.html'" title="Forgot Password"> Forgot Password</a> </span><?php }else{ } */ ?>
                   
                     </div>
                    	
                 </div>
    </div>
    </div>
    </div>

   
    </div>  
