<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<link rel="stylesheet" href="<?php echo PATH;?>css/netdna-bootstrap.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/style.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/reset.css" />
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
    
    .merchant_intro{font:normal 16px/21px arial;color:#666666;}
	
	
</style>


<style>
    /*test style*/
/*  .box{
        padding: 0px;
        display: none;
        margin-top: -20px;
        margin-left: 0px;
        border: 1px solid #000;
        width: 240px;
        height: 27px;
        border-top:none;
        font-size: 15px;
        border-radius:5px;
       padding-left: 30px;
            }
    .white{ background: #ff0000; }*/
       
    

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

 /*color: #1abc9c;*/
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

/*  margin-left: 340px;*/
  
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
input[type=text],input[type=password]{border:#ccc solid 0px; border-bottom: 1px thin #ccc;}

</style>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>-->
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
                    <div class="payouter_block pay_br">
<!--                        <h3 class="paybr_title pay_titlebg"><?php echo $this->Lang['CRTE_YR_STRE']; ?>: <?php echo $this->Lang['INTRO']; ?></h3>-->
                        <div class="p_inner_block clearfix">
                            <p class="merchant_intro">
<!--                            <?php echo $this->Lang['SELLER_INTRODUCTION']; ?> <a  style="text-decoration: underline;"href="<?php echo $this->Lang['ZMART AGREEMENT URL']; ?>"><?php echo $this->Lang['ZMART AGREEMENT']; ?></a>
                            <br><input type="checkbox" id="toggle" checked/> <?php echo $this->Lang['ZMART CHECKBOX']; ?> <b><?php echo $this->Lang['ZMART AGREEMENT']; ?></b>
                            -->
                            <img style="width:100%" src="<?php echo PATH; ?>custom/images/WelcomeToZmart.png"></img>
                            
<!--                            <img style="width:100%" src="..\zmartst\images\zmarts.jpg"></img>-->
                        
                            
           
                 <div class="container-fluid text-center custorm">
  <h1 style="color:#A61C00 ; font-family:'Actor', sans-serif;">Why you should sell on Zmart!</h1>
  
  <div class="row">
      <div class="col-sm-4" style="background-color:#fff; font-family: 'Actor', sans-serif; "><h4 style="color:#60532f;font-family: 'Actor', sans-serif; font-weight:  bold; ">Sell More Earn More</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/pla.png" class="img-circle" alt="Cinque Terre"> <p style="text-align:  justify;  margin-top:10px;">Zmart comes with a built-in customer base, leveraging the over 3 million high quality customers of Zenith Bank spread across every state in Nigeria.</p></div>
    <div class="col-sm-4" style="background-color:#fff; font-family: 'Actor', sans-serif; ">  <h4 style="color:#60532f;font-weight:  bold; ">Contacting buyers is a breeze</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/breeze.png" class="img-circle" alt="Cinque Terre"><p style="text-align:  justify; margin-top:10px;">Communication between you and your buyers is crucial and we have made it easy to exchange messages with buyers who may need to contact you.</p> </div>
    <div class="col-sm-4" style="background-color:#fff;font-family: 'Actor', sans-serif;"><h4 style="color:#60532f;font-weight:  bold; ">Low transaction fees</h4>
<img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/lowtrans.png" class="img-circle" alt="Cinque Terre"><p style="text-align:  justify;margin-top:10px;">Transaction fees are as low as 1.5%, and you are only charged when you actually make a successful sale and collect payment on the site.</p> </div>
  </div>
  
   <div class="row">
    <div class="col-sm-4" style="background-color:#fff;font-family: 'Actor', sans-serif;"><h4 style="color:#60532f;font-weight:  bold; ">Dedicated Support 24/7</h4>
    <img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/supports.png" class="img-circle" alt="Cinque Terre" > <p style="text-align:  justify;margin-top:10px;">Zmart provides a dedicated merchant support team to ensure you have all the help you need to make a success of your store on Zmart.</p>  </div>
    <div class="col-sm-4" style="background-color:#fff;font-family: 'Actor', sans-serif;"><h4 style="color:#60532f;font-weight:  bold; ">You decide everything</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/whyusezmart-01n.png" class="img-circle" alt="Cinque Terre" ><p style="text-align:justify;margin-top:10px;" >Everything is in your control: your pricing, what payment methods to accept, your return policy, how your goods are delivered, and other important decisions.</p> </div>
    <div class="col-sm-4" style="background-color:#fff;font-family: 'Actor', sans-serif;"><h4 style="color:#60532f;font-weight:  bold; ">It's bank-secure</h4><img style="border:1px solid #ccc;" src="<?php echo PATH; ?>custom/images/secure.png" class="img-circle" alt="Cinque Terre" > <p style=" text-align:  justify;margin-top:10px;">Zmart is among the safest and most trusted platforms to buy and sell online in Nigeria. Safety and security are huge priorities for both buyers and sellers and  we have put in place stringent measures to ensure our community is safe and secure.</p></div>
  </div>
</div>          
                            
<p style="font-size: 15px; margin-top: 5px;margin-top: -10px; font-style: italic; color: red; font-weight: bold;"> <br  >* Kindly note that you will be required to open a Corporate/Business Account with Zenith Bank to be registered
                          
                           <form name="formName" method="post"><p style="font-size:20px; margin-left:5px;margin-top: 10px; font-family: sans-serif;">Do you have a Zenith Bank account ? </p><p style="margin-left:10px;">
<input type="checkbox" name="priorityHigh" id="priorityHigh" onclick="if(this.checked)  {document.formName.priorityLow.checked=false;}" />&nbsp;<label for="priorityHigh" >Yes</label>
<input type="checkbox" name="priorityLow" id="priorityLow"  value="yes" onclick="if(this.checked)  {document.formName.priorityHigh.checked=false; }" /> <label for="priorityLow"> No</label><br></p>
 
<br>
<!--<a href="#" data-href="" data-toggle="modal" data-target="#confirm-delete">No</a>-->
<div id="autoUpdate" class="autoUpdate" style="display:none">

<!-- Account validation div starts here-->
    <div style="margin-top: 20px;">  
        <input type = "textbox" name="acctnum" id="acctnum" maxlength="10"  onkeypress="return isNumberKey(event)" placeholder="Enter Nuban Account Number"  class="swifta_input2" autofocus required/>
        
        <input type="submit"  name="submit" value="Proceed" id="submit_acc" class="swifta_button2" onclick="show_gif(this);">
        
    </div>
    
    
<!--   <input type="submit"  name="submit" value="proceed" class="swifta_button " onclick="validateForm();">-->

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

    
<!--<a href="#" data-href="" data-toggle="modal" data-target="#confirm-delete">No</a><br>-->
    
   
 
  
</div>

<em id="z_acc_error"></em>
<div id="" class="red box"><a href="<?php echo PATH; ?>merchant-signup-account-opening.html"></a></div>
   
                           </form>
                            </p>
                        </div>
                    
                               <div style="margin-top: 15px; text-align: center; height: 80px;">
                                   <h3 style="font-size: larger; font-style: italic;">If you have already registered as a merchant, <a style="color:blue;" href="<?php echo PATH . 'merchant-login.html'; ?>">click here</a> to login.</h3>
                                   
                               </div>
                                            
                    </div>   
                    
                    <div class="merchant_submit_buttons clearfix" id="sendNewSms">                      
                        <!--<a href="<?php echo PATH; ?>merchant-signup-step2.html" title="<?php echo $this->Lang['ACC']; ?>" class="buy_it"><?php echo $this->Lang['ACC']; ?></a>-->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo PATH; ?>js/timer/jquery-2.0.3.min.js"></script>-->


    
<script src="<?php echo PATH;?>js/script.js"></script>
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
        "KINDLY VISIT ANY OF OUR BANK BRANCHES. CLICK ON THE LINK BELOW TO VIEW A LIST OF OUR BRANCHES",  
imageUrl:src="<?php echo PATH; ?>custom/images/ZenithBanklogo.jpg",
//imageSize: '100x180',
showCancelButton: true,
confirmButtonColor: "#DD6B55",   
confirmButtonText: "VIEW A LIST OF BRANCHES",   
cancelButtonText: "DOWNLOAD A/C OPENING FORM",   
closeOnConfirm: false,   
closeOnCancel: false}, 
function(isConfirm){ 
    if (isConfirm) {     
        location.href ="http://www.zenithbank.com/ViewAllBranches.aspx?id=1"  
    } else {     
      //swal("Cancelled", "Please, come back and complete your merchant sign up" , "error" );
        location.href ="http://www.zenithbank.com/Corporate%20Current%20Account%20Form.pdf"
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
		cancelButtonText: "Open A New Account",   
		closeOnConfirm: true,   
		closeOnCancel: true,
		}, 
		function(isConfirm){ 
			if (isConfirm) {     
				
			} else {     
			  location.href ="<?php echo PATH; ?>merchant-signup-account-opening.html";
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
});


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
			sub_btn_parent.html("<img src = \"<?php echo PATH."images/anim/6.gif";?>\" /><p>verifying...</p>");
			
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
							validation_failed();
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

<link rel="stylesheet" href="<?php echo PATH;?>css/netdna-bootstrap.css" />
<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/style.css" />
<!--<link rel="stylesheet" href="<?php echo PATH;?>themes/default/css/reset.css" />-->
  

