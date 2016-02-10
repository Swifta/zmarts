<?php
session_start();
if($_POST){
	require_once 'AuthorizeNet.php'; 
	define("AUTHORIZENET_API_LOGIN_ID", "86jrDx8naX49");
	define("AUTHORIZENET_TRANSACTION_KEY", "8x88td44D8PFgeS5");
	define("AUTHORIZENET_SANDBOX", true);
	$sale = new AuthorizeNetAIM;
    
        //check deal quantity availability
	require_once($_SERVER['DOCUMENT_ROOT']."/system/includes/transaction.php");

        $USERID = strip_tags(addslashes($_SESSION['userid']));
        //check whether deal is expired or closed
        is_deal_expired(strip_tags(addslashes($_POST['couponid'])));
	check_max_deal_purchase(strip_tags(addslashes($_POST['couponid'])),strip_tags(addslashes($_POST["friendname"])),
                strip_tags(addslashes($_POST["friendemail"])),strip_tags(addslashes($_POST['qty'])),$USERID);
	check_deal_quantity(strip_tags(addslashes($_POST['couponid'])),strip_tags(addslashes($_POST["friendname"])),
                strip_tags(addslashes($_POST["friendemail"])),strip_tags(addslashes($_POST['qty'])));

        $USERID = $userid = $_SESSION['userid'];
	if($_POST['ref_amt2'] > 0) { 

     $user = "SELECT * FROM coupons_users where userid='".intval($USERID)."'";
                
                $userSet = mysql_query($user);
                while($r = mysql_fetch_array($userSet)) 
                {
                        $account_balance = round($r['referral_earned_amount'],2);
                }

			$deductable_ref_amt = round(strip_tags(addslashes($_POST['ref_amt2'])),2); 

			//referral amount validation			
			if($deductable_ref_amt > $account_balance)
			{

				// Include language file
				$lang = $_SESSION["site_language"];
				if($lang)
				{
					include(DOCUMENT_ROOT."/system/language/".$lang.".php");
				}
				else
				{
					include(DOCUMENT_ROOT."/system/language/en.php");
				}
				
				$cid = $_POST['couponid'];

				if($_POST["friendname"]!='' && $_POST["friendemail"]!='')
				{
					set_response_mes(-1, $language['insufficient_referral_amount']); 
					url_redirect(DOCROOT."purchase.html?cid=".$cid."&type=gift");
				}
				else
				{
					set_response_mes(-1, $language['insufficient_referral_amount']); 
					url_redirect(DOCROOT."purchase.html?cid=".$cid);
				}

			}
		
	                $_SESSION['deductable_ref_amt'] = round(strip_tags(addslashes($_POST['ref_amt2'])),2); 
	}else { 
		$_SESSION['deductable_ref_amt'] = 0;
	}

	
	// authorize
        $qty = htmlspecialchars($_POST['qty'],ENT_QUOTES,"UTF-8");
	//$qty =  strip_tags(addslashes( $_POST['qty']));	
	//$couponid =  strip_tags(addslashes($_POST['couponid'])) ;
        $couponid = htmlspecialchars($_POST['couponid'],ENT_QUOTES,"UTF-8");
       // $sale->cust_id = strip_tags(addslashes($_POST['user']));
          $sale->cust_id = htmlspecialchars($_POST['user'],ENT_QUOTES,"UTF-8");
        //$amount = strip_tags(addslashes($_POST['amount']));
        $amount = htmlspecialchars($_POST['amount'],ENT_QUOTES,"UTF-8");
        //if payable amount is equal to zero then process the customer directly
	if($_POST['amount'] == 0) 
        {
               //check deal quantity availability
			require_once(DOCUMENT_ROOT."/system/includes/transaction.php");
			$L_QTY0 = $qty;	
			$COUPONID = strip_tags(addslashes($couponid));	
                        
			$USERID = strip_tags(addslashes($_SESSION['userid']));
			check_max_deal_purchase($COUPONID,$_POST["friendname"],$_POST["friendemail"],$L_QTY0,$USERID);
			check_deal_quantity($COUPONID,$_POST["friendname"],$_POST["friendemail"],$L_QTY0);
                        $USERID = strip_tags(addslashes($_SESSION['userid']));

			$_SESSION['pay_mod_id'] = strip_tags(addslashes($_POST['pay_mod_id']));
			if(! isset($_SESSION['pay_mod_id'])) {
				if($_POST["friendname"]!='' && $_POST["friendemail"]!='')
				{
					url_redirect(DOCROOT."purchase.html?cid=".$COUPONID."&type=gift");
				}
				else
				{
					url_redirect(DOCROOT."purchase.html?cid=".$COUPONID);
				}
			}
	
                        $user = "SELECT * FROM coupons_users where userid='".intval($USERID)."'";
                        
                        $userSet = mysql_query($user);
                        while($r = mysql_fetch_array($userSet)) 
                        {
                                $FIRSTNAME = html_entity_decode($r['firstname'], ENT_QUOTES);
                                $LASTNAME = html_entity_decode($r['lastname'], ENT_QUOTES);
                                $EMAIL = html_entity_decode($r['email'], ENT_QUOTES);
                        }
                        $PAYERID = '';
                        $TRANSACTIONID = '';
                        $CORRELATIONID = '';;
                        $PAYERSTATUS = '';
                        $COUNTRYCODE = '';			
                        $USERID = $uid = $_SESSION['userid'];
                        $TYPE = strip_tags(addslashes($_POST['pay_mod_id']));
                        $_SESSION['COUPONID'] = $cid = $COUPONID;
			$REFERRAL_AMOUNT = $_SESSION['deductable_ref_amt'];
					//get the coupon value of the coupon and verify the amount
			
			$coupon_details = mysql_query("select * from coupons_coupons where coupon_id='".
                        strip_tags(addslashes($COUPONID))."'");	
			if(mysql_num_rows($coupon_details) > 0)
			{
			        while($coupon_info = mysql_fetch_array($coupon_details))
			        {
			                $coupon_value = $coupon_info["coupon_value"];
			        }
			}
			
			$amount =  ($coupon_value * $L_QTY0) - $_SESSION['deductable_ref_amt'];
			
			
			
		       $queryString = "insert into transaction_details(PAYERID, PAYERSTATUS, ACK, COUNTRYCODE, COUPONID, FIRSTNAME, LASTNAME, TRANSACTIONID, L_QTY0, USERID, EMAIL, TYPE, CORRELATIONID,TRANSACTIONTYPE,PAYMENTTYPE,ORDERTIME,CURRENCYCODE,PAYMENTSTATUS,CAPTURED,AMT,REFERRAL_AMOUNT) values ('".
                       strip_tags(addslashes($PAYERID))."','".strip_tags(addslashes($PAYERSTATUS))."','Success', '".strip_tags(addslashes($COUNTRYCODE)).
                               "', '".strip_tags(addslashes($COUPONID))."', '".strip_tags(addslashes($FIRSTNAME))."', '".strip_tags(addslashes($LASTNAME)).
                               "', '".strip_tags(addslashes($TRANSACTIONID))."', '".strip_tags(addslashes($L_QTY0))."', '".strip_tags(addslashes($USERID)).
                               "', '".strip_tags(addslashes($EMAIL))."','0','".strip_tags(addslashes($CORRELATIONID))."','auth_only','cc',now(),'','Success','1','0','".
                               strip_tags(addslashes($REFERRAL_AMOUNT))."')";
			require_once(DOCUMENT_ROOT."/system/includes/dboperations.php");	
			$resultSet = mysql_query($queryString);
			$_SESSION['txn_id'] = $txnid = mysql_insert_id();

			$resArray = $_SESSION['reshash'] = array();
                        $txn_amt = $_SESSION['txn_amt'] = $_POST['AMT']+$REFERRAL_AMOUNT;

			$_SESSION['deal_quantity'] = $deal_quantity = $L_QTY0;
			check_deal_status($COUPONID); //check deal status if it reached max limit close the deal
			$_SESSION['reshash']["ACK"] = 'SUCCESS';
                        $tot_cquantity = $L_QTY0;
			$cid=$_SESSION['COUPONID'];
			$txnid=$_SESSION['txn_id'];
			$deal_quantity=$_SESSION['deal_quantity'];
			$txn_amt=$_SESSION['txn_amt'];
			$gift_recipient_id=$_SESSION['gift_recipient_id'];
			$resArray["AMT"] = $txn_amt;
	                $resArray["TRANSACTIONID"] = $txnid;
			//calling the transaction method for amount deduction
			include(DOCUMENT_ROOT."/system/includes/process_transaction.php");
                
			$location = DOCROOT.'orderdetails.html';
			header("Location: $location"); 
			exit;
			
        }
	if($_SESSION['deductable_ref_amt'] > 0){
		//$amount = $amount-$_SESSION['deductable_ref_amt'];
	}
	
        $sale->amount = $amount;
        $sale->card_num = strip_tags(addslashes($_POST['creditCardNumber']));
	$sale->card_code = strip_tags(addslashes($_POST['cvv2Number']));
        $sale->exp_date = strip_tags(addslashes($_POST['expDateMonth'])).'/'.strip_tags(addslashes($_POST['expDateYear']));
	$sale->first_name = strip_tags(addslashes($_POST['firstName']));
	$sale->last_name = strip_tags(addslashes($_POST['lastName']));
	
	$sale->address = strip_tags(addslashes($_POST['address1']));
        $sale->city = strip_tags(addslashes($_POST['city']));
        $sale->state = strip_tags(addslashes($_POST['state']));
	$sale->zip = strip_tags(addslashes($_POST['zip']));
	$sale->country = strip_tags(addslashes($_POST['country']));
	$sale->email = strip_tags(addslashes($_POST['mail']));
	$sale->invoice_num = substr(time(), 0, 6);
	$sale->description = strip_tags(addslashes($_POST['description']));
	$query = "select * from coupons_coupons where coupon_id='$couponid'";
            $resultset = mysql_query($query);
	    while($row=mysql_fetch_array($resultset)){
			$DESC = html_entity_decode($row['coupon_name'],ENT_QUOTES);
		        $total_payable_amount = $row["coupon_value"]; 

			if(ctype_digit($total_payable_amount)) { 
				$total_payable_amount = $total_payable_amount;
			} 					  
			else { 

				$total_payable_amount = number_format($total_payable_amount, 2,',','');
				$total_payable_amount = explode(',',$total_payable_amount);
				$total_payable_amount = $total_payable_amount[0].'.'.$total_payable_amount[1];

			}                
		}
            $amount = (($total_payable_amount * $L_QTY0) - $_SESSION['deductable_ref_amt']);
            
	
        $response = $sale->authorizeOnly(); 
 
	if ($response->approved) {
		
		$transaction_id = $response->transaction_id;
		$responseheader = array('Order Status'=>$response->response_reason_text,'Invoice Number'=>$response->invoice_number,'Authorization Code'=>$response->authorization_code,'Credit card'=>$response->card_type,'Billing Address'=>$response->address);

		//$TYPE = strip_tags(addslashes($_POST['pay_mod_id']));
                $TYPE = htmlspecialchars($_POST['pay_mod_id'],ENT_QUOTES,"UTF-8");
		$REFERRAL_AMOUNT = $_SESSION['deductable_ref_amt'];
		require_once($_SERVER['DOCUMENT_ROOT']."/system/includes/dboperations.php"); 
		$sql = "insert into transaction_details (PAYERID,COUPONID,TIMESTAMP,CORRELATIONID,ACK,FIRSTNAME,LASTNAME,TRANSACTIONID,TRANSACTIONTYPE,PAYMENTTYPE,ORDERTIME,AMT,PAYMENTSTATUS,REASONCODE,L_QTY0,USERID,EMAIL,TYPE,CAPTURED,REFERRAL_AMOUNT) values ('$response->customer_id','$couponid',now(),'$response->authorization_code','$response->response_reason_text','$response->first_name','$response->last_name','$response->transaction_id','$response->transaction_type','$response->method',now(),'$response->amount','$response->response_reason_text','$response->response_reason_code','$qty','$userid','$response->email_address','$TYPE','0','$REFERRAL_AMOUNT')";
		$result = mysql_query($sql);
		$txnid = mysql_insert_id();
		$_SESSION['txn_id'] = $txnid;
		check_deal_status($couponid);
		$cid = $couponid;
		$_SESSION['COUPONID'] = $couponid;
		$deal_quantity=$_SESSION['deal_quantity'] = $qty;
		$txn_amt = $response->amount;
		$_SESSION['txn_amt'] = $response->amount;
		$_SESSION['reshash']=$responseheader;
	        $txnid=$_SESSION['txn_id'];
	        $resArray["AMT"] = $response->amount;
	        $resArray["TRANSACTIONID"] = $response->transaction_id;
	        $gift_recipient_id=$_SESSION['gift_recipient_id'];
	        
		include($_SERVER['DOCUMENT_ROOT']."/system/includes/process_transaction.php");
		
		$location = "/orderdetails.html";
		header("Location: $location");
		exit;
     }else{
	$responseheader = array('Error'=>$response->response_reason_text,'Error code'=>$response->response_reason_code,'Authorization Code'=>'Not Authorized','Credit card'=>$response->card_type,'Billing Address'=>$response->address);
	$_SESSION['reshash']=$responseheader;
	$location = "/orderdetails.html";
	header("Location: $location");
	exit;

     }
	
}
?>
<?php
session_start();
if($_POST){
	require_once 'AuthorizeNet.php'; 
	define("AUTHORIZENET_API_LOGIN_ID", "86jrDx8naX49");
	define("AUTHORIZENET_TRANSACTION_KEY", "8x88td44D8PFgeS5");
	define("AUTHORIZENET_SANDBOX", true);
	$sale = new AuthorizeNetAIM;
    
        //check deal quantity availability
	require_once($_SERVER['DOCUMENT_ROOT']."/system/includes/transaction.php");

        $USERID = strip_tags(addslashes($_SESSION['userid']));
        //check whether deal is expired or closed
        is_deal_expired(strip_tags(addslashes($_POST['couponid'])));
	check_max_deal_purchase(strip_tags(addslashes($_POST['couponid'])),strip_tags(addslashes($_POST["friendname"])),strip_tags(addslashes($_POST["friendemail"])),strip_tags(addslashes($_POST['qty'])),$USERID);
	check_deal_quantity(strip_tags(addslashes($_POST['couponid'])),strip_tags(addslashes($_POST["friendname"])),strip_tags(addslashes($_POST["friendemail"])),strip_tags(addslashes($_POST['qty'])));

        $USERID = $userid = strip_tags(addslashes($_SESSION['userid']));
	if($_POST['ref_amt2'] > 0) { 

     $user = "SELECT * FROM coupons_users where userid='$USERID'";
                
                $userSet = mysql_query($user);
                while($r = mysql_fetch_array($userSet)) 
                {
                        $account_balance = round($r['referral_earned_amount'],2);
                }

			$deductable_ref_amt = round($_POST['ref_amt2'],2); 

			//referral amount validation			
			if($deductable_ref_amt > $account_balance)
			{

				// Include language file
				$lang = strip_tags(addslashes($_SESSION["site_language"]));
				if($lang)
				{
					include(DOCUMENT_ROOT."/system/language/".$lang.".php");
				}
				else
				{
					include(DOCUMENT_ROOT."/system/language/en.php");
				}
				
				$cid = strip_tags(addslashes($_POST['couponid']));

				if($_POST["friendname"]!='' && $_POST["friendemail"]!='')
				{
					set_response_mes(-1, $language['insufficient_referral_amount']); 
					url_redirect(DOCROOT."purchase.html?cid=".$cid."&type=gift");
				}
				else
				{
					set_response_mes(-1, $language['insufficient_referral_amount']); 
					url_redirect(DOCROOT."purchase.html?cid=".$cid);
				}

			}
		
	               // $_SESSION['deductable_ref_amt'] = round($_POST['ref_amt2'],2); 
                         $_SESSION['deductable_ref_amt'] = round(strip_tags(addslashes($_POST['ref_amt2'],2))); 
                       // $_SESSION['deductable_ref_amt'] =  htmlspecialchars(round($_POST['ref_amt2'],2),ENT_QUOTES,'UTF-8'); 
	}else { 
		$_SESSION['deductable_ref_amt'] = 0;
	}

	
	// authorize
       
	//$qty = strip_tags(addslashes($_POST['qty']));	
        $qty = htmlspecialchars($_POST['qty'],ENT_QUOTES,"UTF-8");
        $couponid = htmlspecialchars($_POST['couponid'],ENT_QUOTES,"UTF-8");
	//$couponid = strip_tags(addslashes($_POST['couponid']));
	//$sale->cust_id = strip_tags(addslashes($_POST['user']));
        $sale->cust_id = htmlspecialchars($_POST['user'],ENT_QUOTES,"UTF-8");
        $amount = htmlspecialchars($_POST['amount'],ENT_QUOTES,"UTF-8");
        //$amount = strip_tags(addslashes($_POST['amount']));
        //if payable amount is equal to zero then process the customer directly
	if($_POST['amount'] == 0) 
        {
               //check deal quantity availability
			require_once(DOCUMENT_ROOT."/system/includes/transaction.php");
			$L_QTY0 = $qty;	
			$COUPONID = $couponid;	
			$USERID = strip_tags(addslashes($_SESSION['userid']));
			check_max_deal_purchase($COUPONID,strip_tags(addslashes($_POST["friendname"])),strip_tags(addslashes($_POST["friendemail"])),$L_QTY0,$USERID);
			check_deal_quantity($COUPONID,strip_tags(addslashes($_POST["friendname"])),strip_tags(addslashes($_POST["friendemail"])),$L_QTY0);
                        $USERID = strip_tags(addslashes($_SESSION['userid']));

			$_SESSION['pay_mod_id'] = $_POST['pay_mod_id'];
			if(! isset($_SESSION['pay_mod_id'])) {
				if($_POST["friendname"]!='' && $_POST["friendemail"]!='')
				{
					url_redirect(DOCROOT."purchase.html?cid=".$COUPONID."&type=gift");
				}
				else
				{
					url_redirect(DOCROOT."purchase.html?cid=".$COUPONID);
				}
			}
	
                        $user = "SELECT * FROM coupons_users where userid='$USERID'";
                        
                        $userSet = mysql_query($user);
                        while($r = mysql_fetch_array($userSet)) 
                        {
                                $FIRSTNAME = html_entity_decode($r['firstname'], ENT_QUOTES);
                                $LASTNAME = html_entity_decode($r['lastname'], ENT_QUOTES);
                                $EMAIL = html_entity_decode($r['email'], ENT_QUOTES);
                        }
                        $PAYERID = '';
                        $TRANSACTIONID = '';
                        $CORRELATIONID = '';;
                        $PAYERSTATUS = '';
                        $COUNTRYCODE = '';			
                        $USERID = $uid = strip_tags(addslashes($_SESSION['userid']));
                        $TYPE = strip_tags(addslashes($_POST['pay_mod_id']));
                        $_SESSION['COUPONID'] = $cid = $COUPONID;
			$REFERRAL_AMOUNT = strip_tags(addslashes($_SESSION['deductable_ref_amt']));
					//get the coupon value of the coupon and verify the amount
			
			$coupon_details = mysql_query("select * from coupons_coupons where coupon_id='$COUPONID'");	
			if(mysql_num_rows($coupon_details) > 0)
			{
			        while($coupon_info = mysql_fetch_array($coupon_details))
			        {
			                $coupon_value = $coupon_info["coupon_value"];
			        }
			}
			
			$amount =  ($coupon_value * $L_QTY0) - $_SESSION['deductable_ref_amt'];
			
			
			
		       $queryString = "insert into transaction_details(PAYERID, PAYERSTATUS, ACK, COUNTRYCODE, COUPONID, FIRSTNAME, LASTNAME, TRANSACTIONID, L_QTY0, USERID, EMAIL, TYPE, CORRELATIONID,TRANSACTIONTYPE,PAYMENTTYPE,ORDERTIME,CURRENCYCODE,PAYMENTSTATUS,CAPTURED,AMT,REFERRAL_AMOUNT) values ('".
                       strip_tags(addslashes($PAYERID))."','".strip_tags(addslashes($PAYERSTATUS))."','Success', '".strip_tags(addslashes($COUNTRYCODE))."', '".
                               strip_tags(addslashes($COUPONID))."', '".strip_tags(addslashes($FIRSTNAME))."', '".strip_tags(addslashes($LASTNAME))."', '".strip_tags(addslashes($TRANSACTIONID)).
                               "', '".strip_tags(addslashes($L_QTY0))."', '".strip_tags(addslashes($USERID))."', '".strip_tags(addslashes($EMAIL))."','0','".strip_tags(addslashes($CORRELATIONID)).
                               "','auth_only','cc',now(),'','Success','1','0','".strip_tags(addslashes($REFERRAL_AMOUNT))."')";
			require_once(DOCUMENT_ROOT."/system/includes/dboperations.php");	
			$resultSet = mysql_query($queryString);
			$_SESSION['txn_id'] = $txnid = mysql_insert_id();

			$resArray = $_SESSION['reshash'] = array();
                        $txn_amt = $_SESSION['txn_amt'] = $_POST['AMT']+$REFERRAL_AMOUNT;

			$_SESSION['deal_quantity'] = $deal_quantity = $L_QTY0;
			check_deal_status($COUPONID); //check deal status if it reached max limit close the deal
			$_SESSION['reshash']["ACK"] = 'SUCCESS';
                        $tot_cquantity = $L_QTY0;
			$cid=$_SESSION['COUPONID'];
			$txnid=$_SESSION['txn_id'];
			$deal_quantity=$_SESSION['deal_quantity'];
			$txn_amt=$_SESSION['txn_amt'];
			$gift_recipient_id=$_SESSION['gift_recipient_id'];
			$resArray["AMT"] = $txn_amt;
	                $resArray["TRANSACTIONID"] = $txnid;
			//calling the transaction method for amount deduction
			include(DOCUMENT_ROOT."/system/includes/process_transaction.php");
                
			$location = DOCROOT.'orderdetails.html';
			header("Location: $location"); 
			exit;
			
        }
	if($_SESSION['deductable_ref_amt'] > 0){
		//$amount = $amount-$_SESSION['deductable_ref_amt'];
	}
	
        $sale->amount = $amount;
        $sale->card_num = strip_tags(addslashes($_POST['creditCardNumber']));
	$sale->card_code = strip_tags(addslashes($_POST['cvv2Number']));
        $sale->exp_date = strip_tags(addslashes($_POST['expDateMonth'])).'/'.strip_tags(addslashes($_POST['expDateYear']));
	$sale->first_name = strip_tags(addslashes($_POST['firstName']));
	$sale->last_name = strip_tags(addslashes($_POST['lastName']));
	
	$sale->address = strip_tags(addslashes($_POST['address1']));
        $sale->city = strip_tags(addslashes($_POST['city']));
        $sale->state = strip_tags(addslashes($_POST['state']));
	$sale->zip = strip_tags(addslashes($_POST['zip']));
	$sale->country = strip_tags(addslashes($_POST['country']));
	$sale->email = strip_tags(addslashes($_POST['mail']));
	$sale->invoice_num = substr(time(), 0, 6);
	$sale->description = strip_tags(addslashes($_POST['description']));
	$query = "select * from coupons_coupons where coupon_id='$couponid'";
            $resultset = mysql_query($query);
	    while($row=mysql_fetch_array($resultset)){
			$DESC = html_entity_decode($row['coupon_name'],ENT_QUOTES);
		        $total_payable_amount = $row["coupon_value"]; 

			if(ctype_digit($total_payable_amount)) { 
				$total_payable_amount = $total_payable_amount;
			} 					  
			else { 

				$total_payable_amount = number_format($total_payable_amount, 2,',','');
				$total_payable_amount = explode(',',$total_payable_amount);
				$total_payable_amount = $total_payable_amount[0].'.'.$total_payable_amount[1];

			}                
		}
            $amount = (($total_payable_amount * $L_QTY0) - $_SESSION['deductable_ref_amt']);
            
	
        $response = $sale->authorizeOnly(); 
 
	if ($response->approved) {
		
		$transaction_id = $response->transaction_id;
		$responseheader = array('Order Status'=>$response->response_reason_text,'Invoice Number'=>$response->invoice_number,'Authorization Code'=>$response->authorization_code,'Credit card'=>$response->card_type,'Billing Address'=>$response->address);

		//$TYPE = strip_tags(addslashes($_POST['pay_mod_id']));
                $TYPE = htmlspecialchars($_POST['pay_mod_id'],ENT_QUOTES,"UTF-8");
		$REFERRAL_AMOUNT = $_SESSION['deductable_ref_amt'];
		require_once($_SERVER['DOCUMENT_ROOT']."/system/includes/dboperations.php"); 
		$sql = "insert into transaction_details (PAYERID,COUPONID,TIMESTAMP,CORRELATIONID,ACK,FIRSTNAME,LASTNAME,TRANSACTIONID,TRANSACTIONTYPE,PAYMENTTYPE,ORDERTIME,AMT,PAYMENTSTATUS,REASONCODE,L_QTY0,USERID,EMAIL,TYPE,CAPTURED,REFERRAL_AMOUNT) values ('$response->customer_id','$couponid',now(),'$response->authorization_code','$response->response_reason_text','$response->first_name','$response->last_name','$response->transaction_id','$response->transaction_type','$response->method',now(),'$response->amount','$response->response_reason_text','$response->response_reason_code','$qty','$userid','$response->email_address','$TYPE','0','$REFERRAL_AMOUNT')";
		$result = mysql_query($sql);
		$txnid = mysql_insert_id();
		$_SESSION['txn_id'] = $txnid;
		check_deal_status($couponid);
		$cid = $couponid;
		$_SESSION['COUPONID'] = $couponid;
		$deal_quantity=$_SESSION['deal_quantity'] = $qty;
		$txn_amt = $response->amount;
		$_SESSION['txn_amt'] = $response->amount;
		$_SESSION['reshash']=$responseheader;
	        $txnid=$_SESSION['txn_id'];
	        $resArray["AMT"] = $response->amount;
	        $resArray["TRANSACTIONID"] = $response->transaction_id;
	        $gift_recipient_id=$_SESSION['gift_recipient_id'];
	        
		include($_SERVER['DOCUMENT_ROOT']."/system/includes/process_transaction.php");
		
		$location = "/orderdetails.html";
		header("Location: $location");
		exit;
     }else{
	$responseheader = array('Error'=>$response->response_reason_text,'Error code'=>$response->response_reason_code,'Authorization Code'=>'Not Authorized','Credit card'=>$response->card_type,'Billing Address'=>$response->address);
	$_SESSION['reshash']=$responseheader;
	$location = "/orderdetails.html";
	header("Location: $location");
	exit;

     }
	
}
?>
