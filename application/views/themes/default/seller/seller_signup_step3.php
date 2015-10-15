<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
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


.asterisk_input:after
{
content:"*"; 
color: #e32;
position: absolute; 
margin: 0px 0px 0px -57px; 
font-size: large; 
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

.swifta_input {
    

 margin: 5px 0px;
 
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


.swift_input {

 margin: 5px 0px;
 
  width: 100px;

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

input[type=text],input[type=password]
{border:#ccc solid 0px; border-bottom: 1px solid #ccc;
  }
/*test style closed*/

</style>

<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>css/map/jquery-gmaps-latlon-picker.css"/>
	<script src="<?php echo PATH; ?>js/map/jquery-gmaps-latlon-picker.js"></script>
  
<!-- SELLER SIGNUP -->
    <div class="contianer_outer">
        <div class="contianer_inner">
            <div class="contianer seller_t">
                <h2 class="seller_sign_title"><?php echo $this->Lang['WEL_SEL_SIGN']; ?></h2>
                <p class="seller_sign_info"><?php echo $this->Lang['YOU_GUIDED_CRTE_STRE']; ?></p>
                <div class="seller_signup">
                       <div class="seller_signup_menu clearfix">
                        <div class="seller_signup_introduction">
                            <span>01</span>
                            <p style=" font-weight: bold; color:#000000"><a href = "<?php echo PATH; ?>merchant-signup-step1.html"><?php echo $this->Lang['INTRO']; ?></a></p>
                        </div>
                        <div class="seller_signup_form_submit">
                            <span>02</span>
                            <p style=" font-weight: bold; color:#000000"><a href = "<?php echo PATH; ?>merchant-signup-step2.html">Merchant <?php echo $this->Lang['SIGN_UP']; ?></a></p>                            
                        </div>
                        <?php /*<div class="seller_signup_finish">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['SECTOR_SEL']; ?></p>                            
                        </div>*/?>
                        <div class="seller_signup_finish active_tab">                            
                            <span>03</span>
                            <p><?php echo $this->Lang['FINISH']; ?></p>                            
                        </div>
                        
                    </div>
               <form action="" method="post" name="signup4"  id="signup4" enctype="multipart/form-data" >
		<div class="payouter_block pay_br">
<!--                   <h3 class="paybr_title pay_titlebg"><?php echo $this->Lang['CRTE_YR_STRE']; ?>: <?php echo $this->Lang['FINISH']; ?></h3>-->
                        <div class="p_inner_block clearfix">
                            <div class="payment_form_section">
<!--                            <div class="payment_form merchant_paymet_form">-->
<div class="payment_form payment_shipping_form">
                                <ul>
                                    <li>
                                    
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" name="storename" id="storename" tabindex="1" class="swifta_input" placeholder="<?php echo $this->Lang["ENTER_STORE_NAME"]; ?>"  value="<?php if(!isset($this->form_error['storename']) && isset($this->userPost['storename'])){echo $this->userPost['storename'];}?>" autofocus required />
				<em><?php if(isset($this->form_error['storename'])){ echo $this->form_error["storename"]; }?></em>
<!--                                    <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
 
                              <li>
                               
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" name="username" id="username" tabindex="2" class="swifta_input"  placeholder="<?php echo $this->Lang["ENTER_STORE_USER_NAME"]; ?>"  value="<?php if(!isset($this->form_error['username']) && isset($this->userPost['username'])){echo $this->userPost['username'];}?>" autofocus required/>
				<em><?php if(isset($this->form_error['username'])){ echo $this->form_error["username"]; }?></em>
<!--                                     <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
                              
                             
                    
                          
                            
                                 <li>                                
                                    <div class="">
                                        <span class="asterisks_input">  </span>
                                        
                                    <select name="country" id="country" tabindex="7"  onchange="return city_change_payment_step(this.value);" class="swifta_input" required>
                                    <option value=""><?php echo $this->Lang["SEL_COUNTRY"]; ?></option> 
                                    <?php foreach ($this->country_list as $c) { ?>
                                    <option <?php  if(isset($this->userPost['country'])){ if ($c->country_id == $this->userPost['country']) { ?> selected <?php } } ?>  title="<?php echo $c->country_name; ?>" value="<?php echo $c->country_id; ?>" ><?php echo $c->country_name; ?></option>
                                    <?php } ?>
                                    </select> 
                                    </div>
                                    <em><?php if (isset($this->form_error['country'])) {
                                    echo $this->form_error["country"];
                                    } ?></em>
                                </li>
                            
                                     
                                <li>                           
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                     <input type="text" name="mobile" maxlength="11" tabindex="3" id="phone" maxlength="11" onkeypress="return isNumberKey(event)" class="swifta_input" placeholder="<?php echo $this->Lang["ENTER_PHONE"]; ?>" value="<?php if(!isset($this->form_error['mobile']) && isset($this->userPost['mobile'])){echo $this->userPost['mobile'];}?>" required autofocus/>
                                     <em><?php if(isset($this->form_error['mobile'])){ echo $this->form_error["mobile"]; }?></em>
                                 </div>
                                </li>
                                    
                                <li>
                                
                                <div class="">
                                    <span class="asterisks_input">  </span>
                                    
                                <select name="city" id="CitySD"  tabindex="8" class="swifta_input" required>
                                <option value=""><?php echo $this->Lang["COUNTRY_FIRST"]; ?></option>
                                <?php foreach ($this->all_city_list as $c) { ?>
                                <option  <?php  if(isset($this->userPost['city'])){ if ($c->city_id == $this->userPost['city']) { ?> selected <?php } } ?> title="<?php echo $c->city_name; ?>"value="<?php echo $c->city_id; ?>" ><?php echo $c->city_name; ?></option>
                                <?php } ?>
                                </select> 
                                </div>
                                <em><?php if (isset($this->form_error['city'])) {
                                echo $this->form_error["city"];
                                } ?></em>

                                </li>
                                
                                 <li>
                                    
                                 <div>
                                     <span class="asterisks_input">  </span>
                                     <input type="text" name="address1" class="swifta_input" id="addrs1" tabindex="4" value="<?php if(isset($this->userPost['address1'])){echo $this->userPost['address1'];}?>" placeholder="<?php echo $this->Lang["ENTER_ADDR1"]; ?>" required autofocus />
                            
								<em><?php if(isset($this->form_error['address1'])){ echo $this->form_error["address1"]; }?></em>
<!--                                    <span class="asterisk_input">  </span>-->
                                 </div>
                                </li>
                                <li>
                                        
                                 <div class="">
                                     <span class="asterisks_input">  </span>
									<input type="text" name="zipcode" tabindex="9" onkeypress="return isNumberKey(event)" maxlength="10" id="zipcode" class="swifta_input" value="<?php if(!isset($this->form_error['zipcode']) && isset($this->userPost['zipcode'])){echo $this->userPost['zipcode'];}?>" placeholder="<?php echo $this->Lang["ENTER_ZIP_CODE"]; ?>" required autofocus />
									<em><?php if(isset($this->form_error['zipcode'])){ echo $this->form_error["zipcode"]; }?></em>
                                 </div>
                                  </li>
                                
                                <li>
                                        
				 <div class="">		
                                     <span class="asterisks_input">  </span>
                            <input type="text" name="address2" class="swifta_input" tabindex="5" id="addrs2" value="<?php if(isset($this->userPost['address2'])){echo $this->userPost['address2'];}?>" placeholder="<?php echo $this->Lang["ENTER_ADDR2"]; ?>"  autofocus />
                            
								<em><?php if(isset($this->form_error['address2'])){ echo $this->form_error["address2"]; }?></em>
<!--                                  <span class="asterisk_input">  </span>-->
                                 </div>
                                 </li>
                                <li class="frm_clr">
                                        <label style="width:480px"><?php echo $this->Lang["SEARCH_LOCATION"]; ?> <span style="color:red">*</span>:</label>
                                        <div class="fullname map_loc_section map_re_w">
                                        <div class="gllpLatlonPicker">
                                        <div class="top_popup_select2">        
                                            <input type="text" class="gllpSearchField required" tabindex="6"  id="gf" style="width:370px" placeholder="Locate Your Store (Enter Full Address Below & Search) " required>
                                        <input type="button" class="gllpSearchButton sign_submit"  value="<?php echo $this->Lang['SEARCH']; ?>">
                                        </div>
                                        <br/>
                                        
                                        <div class="gllpMap" style="width:480px"><?php echo $this->Lang['GOOG_MAP']; ?></div>
                                        <br/>
                                        
                                        <div class="">
                                        <input type="text" name="latitude" class="gllpLatitude required" placeholder="<?php echo $this->Lang["LATITUDE"]; ?>"  readonly value="<?php if(!isset($this->form_error['latitude']) && isset($this->userPost['latitude'])){echo $this->userPost['latitude'];}?>"/>
                                      
                                        <input type="text" name="longitude" class="gllpLongitude required" placeholder="<?php echo $this->Lang["LONGITUDE"]; ?>"  readonly value="<?php if(!isset($this->form_error['longitude']) && isset($this->userPost['longitude'])){echo $this->userPost['longitude'];}?>" />
                                          <em><?php if(isset($this->form_error['latitude'])){ echo $this->form_error["latitude"]; }?></em>
                                        <em><?php if(isset($this->form_error['longitude'])){ echo $this->form_error["longitude"]; }?></em>
                                        </div>
                                        <input type="hidden" class="gllpZoom" value="3"/>
                                        <input type="hidden" class="gllpUpdateButton" value="update map">
                                        </div>
                                        </div>
                                </li>
                                
                                    
                                    
                                     <li>   
                                 <div class="" style='margin-top:-1px;'>
                                    
                                     <input type="text" name="website" class="swifta_input" tabindex="10" id="website" placeholder="<?php echo $this->Lang["STORE_WEBSITE"]; ?>" value="<?php if(!isset($this->form_error['website']) && isset($this->userPost['website'])){echo $this->userPost['website'];}?>"  autofocus />
									
									<em><?php if(isset($this->form_error['website'])){ echo $this->form_error["website"]; }?></em>
                                 
                                 
                                 </div>
                                    </li>    
					 <li>
<!--					<label><?php echo $this->Lang["ABT"]; ?>:</label>-->
					<div class="">
                                            <span class="asterisks_input">  </span>
                                            <textarea required  name="data" tabindex="11"  class="swifta_input" id="knwu" placeholder="<?php echo $this->Lang['HELP_TOKNOW'];?>" maxlength="1000"><?php if(!isset($this->form_error['data']) && isset($this->userPost['data'])){echo $this->userPost['data'];}?></textarea>

					<em><?php if(isset($this->form_error['data'])){ echo $this->form_error["data"]; }?></em>
<!--					   <span class="asterisk_input">  </span>-->
                                        </div>
				    </li>
                                    <li>
                                        <label><?php echo $this->Lang['LOGO_UP']; ?> *:</label>
                                 <div class="fullname">
                                     <input type="file" name="image" class="required" tabindex="12" required id="fil" />
									
									<em><?php if(isset($this->form_error["image"])){ echo $this->form_error["image"]; }?></em>
                                 <label><?php echo $this->Lang['IM_UP_S']; ?> <?php echo STORE_DETAIL_WIDTH; ?> X <?php echo STORE_DETAIL_HEIGHT; ?> </label>
                                 </div>
                                   </li>
                                   
                             <li>
                                  
                                  <label style="color:blue;">Have a store admin representative ? 
                                      
                                      <em style="font-size:90%"><input type="checkbox" id="store_email_id"  id="have_store_admin" style="margin-top:px;" />Check this box if you want to register someone to manage this store for you. </em>
                                     
                                  </label>
                              
                             </li> 
                             
                              <li id="store_admin_email_li" style="display: none;">
<!--                                <label><?php echo $this->Lang["EMAIL_ID"]; ?> <span style="color:red">*</span>:</label>-->
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" value="<?php echo "@yahoo.com" ?>" name="store_email_id" id="store_email_ids" class="swifta_input"  placeholder="<?php echo @$this->Lang['STORE_EMAIL_ID'];?>"  />
<!--                                   <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
                                   
                             <script>
$('#store_email_id').click(function () {
    $("#store_admin_email_li").toggle(this.checked);
})
                             </script>
                                </ul>
                                <div class="merchant_submit_buttons step3_new" id="submit32">
                                    <label>&nbsp;</label><input type="submit" id="merchant_step3" value="<?php echo $this->Lang['FINISH'];?>" onclick="comfirm_click()"  class="sign_submit" />
                                    <a href="<?php echo PATH; ?>merchant-signup-step2.html" title="<?php echo $this->Lang['GO_BACK'];?>" class="sign_cancel"><?php echo $this->Lang['GO_BACK'];?></a>                        
                                
                                </div>
                            </div>
                        </div>
                    </div>                    
               </form>
                </div>
            </div>
        </div>
    </div>
    <!-- SELLER SIGNUP -->
 <script>
 
     $(document).ready(function(){

});
 
 
 </script>
 
 <script>
function comfirm_click(){
    //alert("here");
    //<?php echo PATH; ?>logout.html
    var x = document.forms["signup4"]["storename"].value;
   // var x1 = document.forms["signup4"]["store_email_id"].value;
    var x2 = document.forms["signup4"]["username"].value;
    var x3 = document.forms["signup4"]["phone"].value;
     var x4 = document.forms["signup4"]["storename"].value;
    var x5 = document.forms["signup4"]["addrs1"].value;
   // var x6 = document.forms["signup4"]["addrs2"].value;
    var x7 = document.forms["signup4"]["zipcode"].value;
   // var x8 = document.forms["signup4"]["website"].value;
     var x9 = document.forms["signup4"]["knwu"].value;
    var x10 = document.forms["signup4"]["gf"].value;
    var x11 = document.forms["signup4"]["fil"].value;
    
    
    if (x == null || x == "" || x2 == null || x2 == "" || x3 == null || x3 == "" || x4 == null || x4 == "" || x5 == null || x5 == "" || x7 == null || x7 == "" || x9 == null || x9 == "" || x10 == null || x10 == "" || x11 =="" || x11 == "" ) {
        //alert("Name must be filled out");
        return false;
    }
    
    swal({   
        title: "Registration Completed",   
        text: "You have successfully completed your sign up, Kindly wait for approval from Zmart admin",   
        type: "success",   
        showCancelButton: false,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Thank You!",   
       /* cancelButtonText: "No, Proceed!",   */
        closeOnConfirm: false,   
        closeOnCancel: true 
    }, function(isConfirm){   
        if (isConfirm) {
            //$('#signup4').submit();
            location.href = "<?php echo PATH; ?>"; 
        } else {     
            location.href = "<?php echo PATH; ?>"; 
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



InvalidInputHelper(document.getElementById("storename"), {
    defaultText: "Please enter your storename!",
    emptyText: "Please enter your storename!",
    invalidText: function (input) {
        return 'The storename  "' + input.value + '" is invalid!';
    }
    
    
}

);
InvalidInputHelper(document.getElementById("username"), {
    defaultText: "Please enter your store username!",
    emptyText: "Please enter your store username!",
    invalidText: function (input) {
        return 'The username  "' + input.value + '" is invalid!';
    }
    
    
}

); 

InvalidInputHelper(document.getElementById("store_email_ids"), {
    defaultText: "Please enter your store_email_id!",
    emptyText: "Please enter your store_email_id!",
    invalidText: function (input) {
        return 'The email  "' + input.value + '" is invalid!';
    }
    
    
}

); 

InvalidInputHelper(document.getElementById("phone"), {
    defaultText: "Please enter your phone!",
    emptyText: "Please enter your phone!",
    invalidText: function (input) {
        return 'The phone  "' + input.value + '" is invalid!';
    }
    
    
}

); 
    
    
    InvalidInputHelper(document.getElementById("addrs1"), {
    defaultText: "Please enter your address!",
    emptyText: "Please enter your address!",
    invalidText: function (input) {
        return 'The address  "' + input.value + '" is invalid!';
    }
    
    
}

);

InvalidInputHelper(document.getElementById("Zipcode"), {
    defaultText: "Please enter your zipcode!",
    emptyText: "Please enter your zipcode!",
    invalidText: function (input) {
        return 'The email  "' + input.value + '" is invalid!';
    }
    
    
}

);

//  
//    InvalidInputHelper(document.getElementById("addrs2"), {
//    defaultText: "Please enter your address!",
//    emptyText: "Please enter your address!",
//    invalidText: function (input) {
//        return 'The address  "' + input.value + '" is invalid!';
//    }
//    
//    
//}
//
//);

  
//    InvalidInputHelper(document.getElementById("website"), {
//    defaultText: "Please enter your website!",
//    emptyText: "Please enter your phone website!",
//    invalidText: function (input) {
//        return 'The website  "' + input.value + '" is invalid!';
//    }
//    
//    
//}
//
//);

 InvalidInputHelper(document.getElementById("fil"), {
    defaultText: "Please upload a file!",
    emptyText: "Please upload a file!",
    invalidText: function (input) {
        return 'The file  "' + input.value + '" is invalid!';
    }
    
    
}

);

 InvalidInputHelper(document.getElementById("gf"), {
    defaultText: "Please Find your location!",
    emptyText: "Please Find your location!",
    invalidText: function (input) {
        return 'The Location  "' + input.value + '" is invalid!';
    }
    
    
}

);

 InvalidInputHelper(document.getElementById("knwu"), {
    defaultText: "Please let us know your better!",
    emptyText: "Please let us know your better!",
    invalidText: function (input) {
        return 'The Location  "' + input.value + '" is invalid!';
    }
    
    
}

);
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".show1").click(function() {
            $(".arro").toggle("slow", "linear");
            $(".drop_down").toggle("slow", "linear");
        });


    });
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

function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
        </script>