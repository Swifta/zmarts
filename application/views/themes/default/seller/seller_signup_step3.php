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
                            <p><?php echo $this->Lang['INTRO']; ?></p>
                        </div>
                        <div class="seller_signup_form_submit">
                            <span>02</span>
                            <p>Merchant <?php echo $this->Lang['SIGN_UP']; ?></p>                            
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
<!--                                       <div class="">
								          <span class="asterisks_input">  </span>
									<input type="text" name="lastname" class="swifta_input" placeholder= "<?php echo $this->Lang['ENTER_LAST_NAME']; ?>" 
									value="" autofocus required />
								<span class="asterisk_input">  </span> 
                                                                        <em><?php if(isset($this->form_error['lastname'])){ echo $this->form_error["lastname"]; }?></em>
                                                                </div>-->
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" name="storename" class="swifta_input" placeholder="<?php echo $this->Lang["ENTER_STORE_NAME"]; ?>"  value="<?php if(!isset($this->form_error['storename']) && isset($this->userPost['storename'])){echo $this->userPost['storename'];}?>" autofocus required />
				<em><?php if(isset($this->form_error['storename'])){ echo $this->form_error["storename"]; }?></em>
<!--                                    <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
                             
                              <li>
                               
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" name="username" class="swifta_input"  placeholder="<?php echo $this->Lang["ENTER_STORE_USER_NAME"]; ?>"  value="<?php if(!isset($this->form_error['username']) && isset($this->userPost['username'])){echo $this->userPost['username'];}?>" autofocus required/>
				<em><?php if(isset($this->form_error['username'])){ echo $this->form_error["username"]; }?></em>
<!--                                     <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
                             
                              <li>
                                  
                                  <label style="color:blue;">Have a store admin representative ? 
                                      <br />
                                      <em style="font-size:90%">Check this box if you want to register someone to manage this store for you.</em>
                                  </label>
                                <div class="">
                                    <input type="checkbox" id="store_email_id" id="have_store_admin" style="margin-top:15px;"/>
                                 </div>
                             </li>                         
                              <li id="store_admin_email_li" style="display: none;">
<!--                                <label><?php echo $this->Lang["EMAIL_ID"]; ?> <span style="color:red">*</span>:</label>-->
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                 <input type="text" name="store_email_id" id="store_email_id" class="swifta_input"  placeholder="<?php echo @$this->userPost['store_email_id'];?>" required autofocus />
<!--                                   <span class="asterisk_input">  </span>-->
                                 </div>
                             </li>
                             <script>
$('#store_email_id').click(function () {
    $("#store_admin_email_li").toggle(this.checked);
})
                             </script>
                            <li>
                            
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                     <input type="text" name="mobile" maxlength="15" class="swifta_input" placeholder="<?php echo $this->Lang["ENTER_PHONE"]; ?>" value="<?php if(!isset($this->form_error['mobile']) && isset($this->userPost['mobile'])){echo $this->userPost['mobile'];}?>" required autofocus/>
                                     <em><?php if(isset($this->form_error['mobile'])){ echo $this->form_error["mobile"]; }?></em>
                                 </div>
                                </li>
                            
                                 <li>
                                    
                                 <div class="">
                                     <span class="asterisks_input">  </span>
                                     <input type="text" name="address1" class="swifta_input" value="<?php if(isset($this->userPost['address1'])){echo $this->userPost['address1'];}?>" placeholder="<?php echo $this->Lang["ENTER_ADDR1"]; ?>" required autofocus />
                            
								<em><?php if(isset($this->form_error['address1'])){ echo $this->form_error["address1"]; }?></em>
<!--                                    <span class="asterisk_input">  </span>-->
                                 </div>
                                     </li>
                                    <li>
                                        
				 <div class="">		
                                     <span class="asterisks_input">  </span>
                            <input type="text" name="address2" class="swifta_input" value="<?php if(isset($this->userPost['address2'])){echo $this->userPost['address2'];}?>" placeholder="<?php echo $this->Lang["ENTER_ADDR2"]; ?>" required autofocus />
                            
								<em><?php if(isset($this->form_error['address2'])){ echo $this->form_error["address2"]; }?></em>
<!--                                  <span class="asterisk_input">  </span>-->
                                 </div>
                                 </li>
                                 
                                <li>
                                
                                <div class="">
                                <select name="country" id="country"  onchange="return city_change_payment_step(this.value);" class="swifta_input">
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
                            
                                <li class="frm_clr">
                                
                                <div class="">
                                <select name="city" id="CitySD"  class="swifta_input">
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

                                <li class="frm_clr">
                                        <label style="width:480px"><?php echo $this->Lang["SEARCH_LOCATION"]; ?> <span style="color:red">*</span>:</label>
                                        <div class="fullname map_loc_section map_re_w">
                                        <div class="gllpLatlonPicker">
                                        <div class="top_popup_select2">        
                                        <input type="text" class="gllpSearchField required" style="width:370px" placeholder="Locate Your Store (Enter Full Address Below & Search) ">
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
                                        
                                 <div class="">
                                     <span class="asterisks_input">  </span>
									<input type="text" name="zipcode" maxlength="10" class="swifta_input" value="<?php if(!isset($this->form_error['zipcode']) && isset($this->userPost['zipcode'])){echo $this->userPost['zipcode'];}?>" placeholder="<?php echo $this->Lang["ENTER_ZIP_CODE"]; ?>" required autofocus />
									<em><?php if(isset($this->form_error['zipcode'])){ echo $this->form_error["zipcode"]; }?></em>
                                 </div>
                                        </li>
                                    <li>
                                       
                                 <div class="">
                                     
                                     <input type="text" name="website" class="swifta_input" placeholder="<?php echo $this->Lang["STORE_WEBSITE"]; ?>" value="<?php if(!isset($this->form_error['website']) && isset($this->userPost['website'])){echo $this->userPost['website'];}?>" required autofocus />
									
									<em><?php if(isset($this->form_error['website'])){ echo $this->form_error["website"]; }?></em>
                                 </div>
                                        </li>
					 <li>
<!--					<label><?php echo $this->Lang["ABT"]; ?>:</label>-->
					<div class="">
                                            <span class="asterisks_input">  </span>
					<textarea  name="data"  class="swifta_input" placeholder="<?php echo $this->Lang['HELP_TOKNOW'];?>" maxlength="1000"><?php if(!isset($this->form_error['data']) && isset($this->userPost['data'])){echo $this->userPost['data'];}?></textarea>

					<em><?php if(isset($this->form_error['data'])){ echo $this->form_error["data"]; }?></em>
<!--					   <span class="asterisk_input">  </span>-->
                                        </div>
				    </li>
                                    <li>
                                        <label><?php echo $this->Lang['LOGO_UP']; ?> *:</label>
                                 <div class="fullname">
									<input type="file" name="image" class="required" />
									
									<em><?php if(isset($this->form_error["image"])){ echo $this->form_error["image"]; }?></em>
                                 <label><?php echo $this->Lang['IM_UP_S']; ?> <?php echo STORE_DETAIL_WIDTH; ?> X <?php echo STORE_DETAIL_HEIGHT; ?> </label>
                                 </div>
                                   </li>
				   
                                </ul>
                                <div class="merchant_submit_buttons step3_new" id="submit32">
                                    <label>&nbsp;</label><input type="submit" id="merchant_step3" value="<?php echo $this->Lang['FINISH'];?>" onclick="comfirm_click()" class="sign_submit" />
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
<script src="<?php echo PATH.'themes/'.THEME_NAME.'/js/jquery.validate.js'; ?>" type="text/javascript"></script>
 <script>
 
    $(document).ready(function(){
         $("form#signup4").validate({
			 rules: {
				website: {
				  //required: true,
				  //url: true
				}
				
			  },
  
			 messages: {
				 
		   storename: {
			   required: "<?php echo $this->Lang['PLS_ENT_STR_NAM']; ?>"                         
		   },
		   
		    username: {
			   required: "<?php echo $this->Lang['ENTER_STORE_USER_NAME']; ?>"                         
		   },
		   
		   // store_email_id: {
			//   required: "<?php echo $this->Lang['ENTER_STORE_EMAIL_ID']; ?>"                         
		   //},

		   city: {
			   required: "<?php echo $this->Lang['SELECT UR CITY HERE']; ?>"                         
		   },
		   
		   country: {
			   required: "<?php echo $this->Lang['SELECT UR COUNTRY HERE']; ?>"                         
		   },

		   /*latitude: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
			},
			
			longitude: {
				required:"<?php echo $this->Lang['PLS_ENT_EMAIL']; ?>",
			}, */
		   
		   address1: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
			address2: {
			   required: "<?php echo $this->Lang['PLS_ENT_VLD_ADDR']; ?>"                         
		   },
		  mobile : {
			   required: "<?php echo $this->Lang['PLZ_ETR_PHO']; ?>",
			   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
			},
		zipcode : {
		   required: "<?php echo $this->Lang['PLS_ENT_ZIP']; ?>",
		   number: "<?php echo $this->Lang['PLS_ENT_NO']; ?>"                             
		},
		//website : {
		   //required: "<?php echo $this->Lang['PLS_ENT_URL']; ?>",
		   //url: "<?php echo $this->Lang['PLS_ENT_URL']; ?>"                             
		//},
		data : {
		   required: "<?php echo $this->Lang['PLZ_DESCRIBE']; ?>"
		},
		
    },
 submitHandler: function(form) {
     
   // some other code
   // maybe disabling submit button
   // then:
	$('div#submit').hide();
   form.submit();
 }
});
});
 
 </script>
 
 <script>
function comfirm_click(){
    //alert("here");
    //<?php echo PATH; ?>logout.html
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
            location.href = "<?php echo PATH; ?>#"; 
        } else {     
            location.href = "<?php echo PATH; ?>"; 
        } 
    });
}
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".show1").click(function() {
            $(".arro").toggle("slow", "linear");
            $(".drop_down").toggle("slow", "linear");
        });


    });
