<?php defined('SYSPATH') OR die('No direct access allowed.');
class Webpay_Controller extends Layout_Controller
{
	//const ALLOW_PRODUCTION = TRUE;
	public function __construct()
	{
		parent::__construct();
                
		$this->webpay = new Webpay_Model;
                $this->paypal = new Auction_Paypal_Model;
                //interswitch constants.
                $this->mac_key = WEBPAY_MAC_KEY;
                $this->product_id = intval(WEBPAY_PRODUCT_ID);
                $this->currency = 566;
                $this->staging_url = WEBPAY_STAGING_URL."api/v1/";
                $this->payment_params = "payment_split";
                $this->site_redirect_url = PATH."webpay/confirmed.html";
                $this->site_name = WEBPAY_SITE_NAME;
                $this->cust_id = $this->session->get('UserEmail'); //$this->session->get('UserID');
                $this->cust_id_desc = $this->session->get('UserID');
                $this->cust_name = $this->session->get('UserName');
                $this->cust_name_desc = "";
                $this->txn_ref = "";
                $this->pay_item_id = WEBPAY_PAY_ITEM_ID;
                $this->pay_item_name = WEBPAY_PAY_ITEM_NAME;
                $this->xml_data = "";
                $this->hash = "";
                $this->xml_data = "";
                //constants ends here
                if(LANGUAGE == "french" ){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/french_style.css',PATH.'themes/'.THEME_NAME.'/css/fr_multi_style.css'));
		}else if(LANGUAGE == "spanish"){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/spanish_style.css',PATH.'themes/'.THEME_NAME.'/css/sp_multi_style.css'));
		}
		else{
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
		}
        }
        
        //webpay transaction response for ID
        //Dear Name
        
        public function ajax_more_details(){
            if(isset($_POST['transaction_id'])){
                $paint_red = "red";
                $details = json_decode($this->webpay->getTransactionDetails(strip_tags(addslashes($_POST['transaction_id']))));
                if($details->status == "Success"){
                    $paint_red = "green";
                }
                echo "<div style='width:100%;'>";
                echo "<div style='width:49%;float:left'>Transacton Status :</div>";
                echo "<div style='width:49%;float:right;color:".$paint_red.";font-weight:bold'>".htmlentities($details->status, ENT_QUOTES, "UTF-8")."</div><div style='clear:both;width:100%'><hr /></div>";
                echo "<div style='width:49%;float:left'>Reason :</div>";
                echo "<div style='width:49%;float:right;color:".$paint_red.";font-weight:bold'>".htmlentities($details->reason, ENT_QUOTES, "UTF-8")."</div><div style='clear:both;width:100%'><hr /></div>";
                echo "<div style='width:49%;float:left'>Transaction Type :</div>";
                echo "<div style='width:49%;float:right;color:".$paint_red.";font-weight:bold'>".htmlentities($details->type, ENT_QUOTES, "UTF-8")."</div><div style='clear:both;width:100%'><hr /></div>";
                echo "</div>";
            }
            die;
        }
             
        public function ajax_confirm(){
            //$transaction_id = "jTnUlW1RGrVUALj";
            if(isset($_POST['transaction_id'])){
                $transaction_id = strip_tags(addslashes($_POST['transaction_id']));
                $transaction_total = $this->webpay->getTotalAmountOnTransaction($transaction_id);
                $txnref = $transaction_id;
                $hash = hash("sha512", $this->product_id.$txnref.$this->mac_key);
                $url_call = $this->staging_url."gettransaction.json?productid=".$this->product_id."&transactionreference=".$txnref.
                        "&amount=".$transaction_total;
                $headers = array(
                    'Hash: '.$hash, 
                    'UserAgent: Mozilla/4.0 (compatible; MSIE 6.0; MS Web Services Client Protocol 4.0.30319.239)'
                );
                //var_dump($url_call); die;
                $ch = curl_init();
                // Set query data here with the URL
                curl_setopt($ch, CURLOPT_URL, $url_call); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //curl_setopt($ch, CURLOPT_USERAGENT, 'eMarketplace');
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $response = curl_exec($ch);

                if($response == false)
                {
                    //var_dump(curl_error($ch));
                    echo curl_error($ch);
                }
                else{
                    //var_dump(json_decode($response)); die;
                    $transaction_status = "FAILED TRANSACTION";
                    $status = "Failed";
                    $interswitch = json_decode($response);
                 
                    
                    //echo $url_call."<br />";
                    //echo $hash;
                    if($interswitch){
                        $this->response_code = $interswitch->ResponseCode;
                        $this->response_discription = $interswitch->ResponseDescription;
                        $this->PaymentReference = $interswitch->PaymentReference;
                        $this->CardNumber = $interswitch->CardNumber;
                        $paint_red = "red";
                        if($interswitch->Amount > 0){
                            $status = "Success";
                            $paint_red = "green";
                            $transaction_status = "SUCCESSFUL TRANSACTION";
                        }
                        $this->webpay->updateTransaction($transaction_id, $status, $interswitch->ResponseCode,
                                $interswitch->ResponseDescription,$interswitch->PaymentReference,
                                $interswitch->CardNumber);
                        echo "<div style='width:100%;'>";
                        echo "<div style='width:49%;float:left'>Transacton Status :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8').";font-weight:bold'>".htmlspecialchars($transaction_status,ENT_QUOTES,'UTF-8')."</div><div style='clear:both;width:100%'><hr /></div>";
                        echo "<div style='width:49%;float:left'>Response Code :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8').";font-weight:bold'>".htmlspecialchars($interswitch->ResponseCode,ENT_QUOTES,'UTF-8')."</div><div style='clear:both;width:100%'><hr /></div>";
                        echo "<div style='width:49%;float:left'>Description :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8').";font-weight:bold'>".htmlspecialchars($interswitch->ResponseDescription,ENT_QUOTES,'UTF-8')."</div><div style='clear:both;width:100%'><hr /></div>";
                        echo "<div style='width:49%;float:left'>Payment Reference :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8'); .";font-weight:bold'>".htmlspecialchars($interswitch->PaymentReference,ENT_QUOTES,'UTF-8')."</div><div style='clear:both;width:100%'><hr /></div>";
                        echo "<div style='width:49%;float:left'>Card Number :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8'); .";font-weight:bold'>".htmlspecialchars($interswitch->CardNumber,ENT_QUOTES,'UTF-8')."</div><div style='clear:both;width:100%'><hr /></div>";
                        echo "<div style='width:49%;float:left'>Retrieval Ref Number :</div>";
                        echo "<div style='width:49%;float:right;color:".htmlspecialchars($paint_red,ENT_QUOTES,'UTF-8'); .";font-weight:bold'>".htmlspecialchars($interswitch->RetrievalReferenceNumber,ENT_QUOTES,'UTF-8')."</div>";
                        echo "</div>"; 
                    }
                    else{
                        echo "<div style='width:100%;text-align:center;color:red'>";
                        echo "<h1 style='font-size:300%;'>Service Currently Unavailable</h1>";
                        echo "</div>";
                    }

//                    if($interswitch->Amount > 0){
//                        //successful payment.
//                        //then let me reduce the products respectively as its suppose to be
//                        
//                        //end of products reduction
//                        $this->success = true;
//                        $ack = "SUCCESSFUL TRANSACTION";
//                        $this->paid_amount = intval($interswitch->Amount/100);
//                    }
                }
                curl_close($ch);
            }
            die;
        }
        
        public function confirm(){
            $txnref = "";
            $ack = "FAILED TRANSACTION";
            $this->success = false;
            $this->response_code = "UNKNOWN";
            $this->response_discription = "";
            $this->PaymentReference = "FAILED";
            $this->CardNumber = "0000";
            $this->RetrievalReferenceNumber = 0;
            $this->paid_amount = 0;
//            echo "Interswitch Called Redirect URL HERE<br />"; 
//            echo $_REQUEST['resp']."<br />";
//            echo $_REQUEST['desc']."<br />";
            //txnref=1234567&payRef=&refRef=238477494594&cardNum=0&apprAmt=0
            if(isset($_REQUEST['resp'])){
                //echo "Response Details <br />";
                //echo $_REQUEST['resp']."<br />";
                //echo $_REQUEST['desc']."<br />";
                $txnref = strip_tags(addslashes($_REQUEST['txnref']));
                $payRef = strip_tags(addslashes($_REQUEST['payRef']));
                $retRef = strip_tags(addslashes($_REQUEST['retRef']));
                $cardNum = strip_tags(addslashes($_REQUEST['cardNum']));
                $apprAmt = strip_tags(addslashes($_REQUEST['apprAmt']));
                //echo "Gotten from WebPaypay: ".$txnref.", ".$payRef.", ".$retRef.", ".$cardNum.", ".$apprAmt;
                $hash = hash("sha512", $this->product_id.$txnref.$this->mac_key);
                $url_call = $this->staging_url."gettransaction.json?productid=".$this->product_id."&transactionreference=".$txnref.
                        "&amount=".$this->session->get('webpay_total');
                $headers = array(
                    'Hash: '.$hash, 
                    'UserAgent: Mozilla/4.0 (compatible; MSIE 6.0; MS Web Services Client Protocol 4.0.30319.239)'
                );
                $ch = curl_init();
                // Set query data here with the URL
                curl_setopt($ch, CURLOPT_URL, $url_call); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //curl_setopt($ch, CURLOPT_USERAGENT, 'eMarketplace');
                
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $response = curl_exec($ch);

                if($response == false)
                {
                    //var_dump(curl_error($ch));
                }
                else{
                    //var_dump(json_decode($response)); die;
                    $interswitch = json_decode($response);
                    //echo $url_call."<br />";
                    //echo $hash;
                    $this->response_code = $interswitch->ResponseCode;
                    $this->response_discription = $interswitch->ResponseDescription;
                    $this->PaymentReference = $interswitch->PaymentReference;
                    $this->CardNumber = $interswitch->CardNumber;
                    if(isset($_SESSION['count'])){
                        $this->sendInterswitchEmail($txnref, $interswitch->Amount, $interswitch);
                    }
                    if($interswitch->Amount > 0){
                        //successful payment.
                        //then let me reduce the products respectively as its suppose to be
                        
                        //end of products reduction
                        $this->success = true;
                        $ack = "SUCCESSFUL TRANSACTION";
                        $this->paid_amount = intval($interswitch->Amount/100);
                        //on successful transaction. empty the cart
                        //unset($_SESSION['count']);
                        //var_dump($_SESSION);
                        /*
                        foreach($_SESSION as $key=>$value){
                            if(true){
                                
                            $deal_id = $_SESSION[$key];
                            //unset($_SESSION[$key]);
                             $item_qty = $this->session->get('product_cart_qty'.$deal_id);
                             unset($_SESSION['product_cart_qty'.$deal_id]);
                             $product_size = "1";
                               foreach($_SESSION as $key=>$value) {
                                    if(($key=='product_size_qty'.$deal_id)){
                                        unset($_SESSION[$key]);
                                    }
                                    if(($key=='product_quantity_qty'.$deal_id)){
                                       unset($_SESSION[$key]);
                                    }
                                    if(($key=='store_credit_id'.$deal_id)){
                                        $this->session->delete('product_size_qty'.$deal_id);
                                        $this->session->delete('product_quantity_qty'.$deal_id);
                                        $this->session->delete('product_color_qty'.$deal_id);
                                        $this->session->delete('store_credit_period'.$deal_id);
                                        $this->session->delete('product_cart_qty'.$deal_id);
                                        $this->session->delete('product_cart_id'.$deal_id);
                                        unset($_SESSION[$key]);
                                    }
                                }
                                
                            }
                        }  
                        */
				 foreach($_SESSION as $key=>$value)
					{
						//if(!is_object($value) && !is_array($value)) {
								if((is_string($value)) && ($key=='product_cart_id'.$value)){
								$qty = $this->session->get('product_cart_qty'.$value);
								$deal_id = $_SESSION[$key];
								foreach($_SESSION as $key=>$value)
								{
								if(($key=='product_size_qty'.$deal_id)){
								   unset($_SESSION[$key]);
								}
								if(($key=='product_quantity_qty'.$deal_id)){
								   unset($_SESSION[$key]);
								}
								if(($key=='product_color_qty'.$deal_id)){
									unset($_SESSION[$key]);
								}
								if(($key=='store_credit_id'.$deal_id)){
									  
									unset($_SESSION[$key]);
								}
								if(($key=='store_credit_period'.$deal_id)){
									unset($_SESSION[$key]);
								}
								if(($key=='main_storecreditid'.$deal_id)){
									unset($_SESSION[$key]);
								}
								if(($key=='product_cart_qty'.$deal_id)){
									unset($_SESSION[$key]);
								}

								}
							 }
						//}
				   }

				foreach($_SESSION as $key=>$value)
				{
						if(((is_string($value)) && ($key=='product_cart_id'.$value))){
								unset($_SESSION[$key]);
						}
				}
                $this->session->delete("count");
                $this->session->delete('shipping_name');
                $this->session->delete('shipping_address1');
                $this->session->delete('shipping_address2');
                $this->session->delete('shipping_checkbox');
                $this->session->delete('shipping_country');
                $this->session->delete('shipping_state');
                $this->session->delete('shipping_city');
                $this->session->delete('shipping_postal_code');
                $this->session->delete('shipping_phone');
                $this->session->delete('aramex_currencycode');
                $this->session->delete('aramex_value');
                $this->session->delete('payment_result');
                
                
                    }
                    else{
                        $this->webpay->addStockBack($txnref); //add items back to stock
                    }
                }
                curl_close($ch);
            }
            
            $this->webpay->payUpdate($txnref, $this->response_code, $this->response_discription, $this->PaymentReference, 
                    $this->CardNumber, $this->success);
            
            //send an email on failed or success transaction here
            
            $this->transaction_result = array("TIMESTAMP" => date('m/d/Y h:i:s a', time()), "ACK" => $ack,"AMT"=> $this->paid_amount,"CURRENCYCODE"=>CURRENCY_CODE);
            $this->transaction_result['T_ID'] = $txnref;
            $this->result_transaction = arr::to_object($this->transaction_result);
            $this->session->set('payment_result', $this->result_transaction);
            $this->template->title = $this->result_transaction->ACK." Interswitch Payment System";
            $this->template->content = new View("themes/".THEME_NAME."/interswitch/payment_finished");   
            $this->session->delete('payment_result');
        }


        public function pay(){
            //var_dump($_SESSION);die;
        $commission_webpay = 0;
        $commission_webpay_summed = 0;
        $loop = 0;
        $total_item_in_cart = $this->session->get("count");
        
	    foreach($_SESSION as $key=>$value){
                if($value && (is_string($value)) && ($key=='product_cart_id'.$value)){

                $deal_id = $_SESSION[$key];
                 $item_qty = $this->session->get('product_cart_qty'.$deal_id);
                 $product_size = "1";
                   foreach($_SESSION as $key=>$value) {
                        if(($key=='product_size_qty'.$deal_id)){
                            $product_size = $value;
                        }
                        if(($key=='product_quantity_qty'.$deal_id)){
                            $product_quantity = $value;
                        }

                    }

                    $this->product_size_details = $this->webpay->product_size_details($deal_id, $product_size);

                   $dbquantity=$this->product_size_details->current()->quantity;

                    if($dbquantity < $item_qty){
                        $this->session->set('product_quantity_qty'.$deal_id,$dbquantity);
                        common::message(-1, $this->Lang['CHE_PRO_QTY']);
                        url::redirect(PATH."cart.html");
                    }
                }
            }

        
/////

		if($_POST){

			$referral_amount = strip_tags(addslashes($this->input->post("p_referral_amount")));
		        $this->userPost = utf8::clean($this->input->post());
			$product_color="";
			$paymentType = "INTERSWITCH";
			$captured = 0;
			$total_amount="";
		        $total_qty="";
		        $product_title="";
		        $produ_qty="";
		        $total_shipping="";
		        $pay_amount1=0; // for total transaction amount for success page
                        //var_dump($_SESSION); die;
				/*
					TODO
					I have changed transaction id for COD transactions
					From: One transaction id for all merchants
					To:   Unique transaction id(s) based on all merchants.
					This may be helpful in the pay late/and COD apis
					@Live
				*/
				
                //really fantastic to do the below . make sens
                $total_item_in_cart = $this->session->get("count");
                $loop = 0;
                $TRANSACTIONID = text::random($type = 'alnum', $length = 15);
                //while($loop < $total_item_in_cart){
		foreach($_SESSION as $key=>$value){
                  
                    //$value = $this->session->get("count");
                    if(!is_array($value)){
                    if(($value && $key=='product_cart_id'.$value)){
                        //echo "in ";
			$product_color = 0;
                        $product_size = 0;
                        $deal_id = $_SESSION[$key]; //$value = intval($loop+1); 
                        $item_qty = $this->session->get('product_cart_qty'.$deal_id);
                        $this->session->set('product_cart_qty'.$deal_id,$item_qty);
                        $amount = $this->input->post("amount");
                        //echo $deal_id;break;
                        $this->deals_payment_deatils = $this->webpay->get_product_payment_details($deal_id);
                        //var_dump($this->deals_payment_deatils); die;
                        //echo $deal_id." and ".$this->deals_payment_deatils->deal_title; die;
                        if(count($this->deals_payment_deatils) == 0){
                                        unset($_SESSION[$key]);
                                        $this->session->delete('product_cart_qty'.$value);
                                        $this->session->delete("count");
                                        common::message(-1, $this->Lang["PAGE_NOT"]);
                                        url::redirect(PATH."products.html");
                        }
                        foreach($this->deals_payment_deatils as $UL){

                                $purchase_qty = $UL->purchase_count;
                                $deal_title = $UL->deal_title;
                                $deal_key  = $UL->deal_key;
                                $url_title = $UL->url_title;
                                $deal_value = $UL->deal_value;
                                $product_amount = $UL->deal_value*$item_qty;
                                //echo $this->session->get('user_auto_key'); die;
                                if($this->session->get('user_auto_key')) {
                                    $product_amount = $UL->deal_prime_value*$item_qty;
                                    $deal_value = $UL->deal_prime_value;
                                }
                                $merchant_id = $UL->merchant_id;
                                $product_shipping = $UL->shipping_amount;
                                $shipping_methods = $UL->shipping;
                        }

                         if($shipping_methods  == 1){
                                $shipping_amount = 0;
                        }  elseif($shipping_methods  == 2){
                                $merchant_flat_amount = $this->webpay->get_userflat_amount($merchant_id);
                                $shipping_amount = $merchant_flat_amount->flat_amount;
                        } elseif($shipping_methods  == 3){
                                $shipping_amount =$product_shipping;
                        } elseif($shipping_methods  == 4){
                                $shipping_amount =$product_shipping*$item_qty;
                        } elseif($shipping_methods  == 5){
                                 $shipping_amount = 0;
                        }

                        $taxdeal_amount=($deal_value*$item_qty)+$shipping_amount;
                        $tax_amount = ((TAX_PRECENTAGE_VALUE/100)*$taxdeal_amount);
                        $pay_amount1 += ($taxdeal_amount+$tax_amount);

                        foreach($_SESSION as $key=>$value)
                        {
                                if(($key=='product_size_qty'.$deal_id)){
                                $product_size = $value;
                                }
                                if(($key=='product_color_qty'.$deal_id)){
                                $product_color = $value;
                                }
                        }
                        
                        $transaction = $this->webpay->insert_transaction_details($deal_id, $referral_amount, $item_qty, 7, $captured, $purchase_qty,$paymentType,$product_amount,$merchant_id,$product_size,$product_color,$tax_amount,$shipping_amount,$shipping_methods, arr::to_object($this->userPost),$TRANSACTIONID);
                        //var_dump($transaction);
                        //$status = $this->do_captured_transaction($captured, $deal_id,$item_qty,$transaction);
                        //echo "here"; die;
                        //break;
                       }
                        //$loop++;
                }
	            }
                    
                    
                $commission_webpay = (int)(0.015 * ($pay_amount1*100));
                if($commission_webpay > 200000){
                    $commission_webpay = 200000;
                }
                    //$this->product_id = $transaction;
                    $this->session->set('webpay_total', intval($pay_amount1*100));
                    //then run a code to get the splitting xml file and co

//                    $loop++;
//                    $isLast = false;
//                    if($loop == $total_item_in_cart){
//                        $isLast = true;
//                    }
                    //$split_info = $this->webpay->get_split_marchant_xml($TRANSACTIONID, $pay_amount1, 
                    //        $isLast, $commission_webpay_summed, $commission_webpay);
                    //$commission_webpay_summed += $split_info['commission'];
                    $this->xml_data = '<payment_item_detail>'. 
                        '<item_details detail_ref="'.$TRANSACTIONID.'" institution="Store" sub_location="Lagos" location="Lagos">';
                    $this->xml_data .= $this->webpay->get_split_marchant_xml($TRANSACTIONID, $pay_amount1);//pass in the transaction ID
                    //and the total amount to be paid here
                        //'<item_detail item_id="1" item_name="Butter" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4356789876" />'.
                        //    '<item_detail item_id="2" item_name="Grape" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4351189876" />'. 
                    $this->xml_data .= '</item_details></payment_item_detail>';
                    //var_dump($this->xml_data);die;
                    //var_dump($this->xml_data); die;
                    $combination = $TRANSACTIONID.$this->product_id.$this->pay_item_id.  intval($pay_amount1*100).
                            $this->site_redirect_url.$this->mac_key;
                    //echo $TRANSACTIONID.$this->product_id.$this->pay_item_id.intval($pay_amount1*100).
                            //$this->site_redirect_url; die;
                    $this->hash = hash("sha512", $combination);
                    
                    //die;
                    //var_dump($_SESSION);
                    //die;
                    //remove comment below
               $status = $this->do_captured_transaction1($captured, $deal_id,$item_qty,$transaction,$TRANSACTIONID);
                $this->transaction_result = array("TIMESTAMP" => date('m/d/Y h:i:s a', time()), "ACK" => $this->Lang['SUCCESS'] ,"AMT"=> $pay_amount1,"CURRENCYCODE"=>CURRENCY_CODE);
                $this->result_transaction = arr::to_object($this->transaction_result);
                //dont need the line of code below
                //$this->session->set('payment_result', $this->result_transaction);
                $this->txn_ref = $TRANSACTIONID;
                $this->total_amount_to_pay = $pay_amount1;
                $this->template->title = "Interswitch Payment System";
                $this->template->content = new View("themes/".THEME_NAME."/interswitch/payment_process");                     
                    //echo $this->txn_ref; die;
	            //$status = $this->do_captured_transaction1($captured, $deal_id,$item_qty,$transaction,$TRANSACTIONID);

	               // url::redirect(PATH.'transaction.html');

            }
            $this->session->delete("tmp_webpay_loop");
            $this->session->delete("tmp_webpay_commission_store");
            //exit;
           // $this->session->set('p_payment_type', 'INTERSWITCH');
                    //url::redirect(PATH."payment_product/cart_order_complete.html");
                   // var_dump($_SESSION);die;

            /*-- MODULE X --*/
 
        }
        
        
        public function pay_auction(){
            //var_dump($_SESSION);die;
		if($_POST){  
                    $deal_id = strip_tags(addslashes($this->input->post("deal_id")));
                    $merchant_id = strip_tags(addslashes($this->input->post("merchant_id"))); 
                    $bid_id = strip_tags(addslashes($this->input->post("bid_id"))); 
                    $deal_key = strip_tags(addslashes($this->input->post("deal_key"))); 
                    $url_title = strip_tags(addslashes($this->input->post("url_title")));   
                    $referral_amount = 0;
                    $item_qty = strip_tags(addslashes($this->input->post("P_QTY")));
                    $amount = strip_tags(addslashes($this->input->post("amount")));			
                    $deal_value = strip_tags(addslashes($this->input->post("deal_value")));
                    $shipping_amount = strip_tags(addslashes($this->input->post("shipping_amount")));
                    $tax_amount = 0;

                    $pay_amount1 = $tot_amount1 = $amount+$shipping_amount+$tax_amount;
                    $TRANSACTIONID = text::random($type = 'alnum', $length = 15);
                    
                    $post = arr::to_object(utf8::clean($this->input->post()));
                            $captured = 0;

                    $transaction = $this->paypal->insert_webpay_transaction_details($TRANSACTIONID, $deal_id,$referral_amount, $item_qty, 7, $captured, $item_qty, $post,$merchant_id,$tax_amount,$shipping_amount,$amount,$bid_id);

                    //$this->product_id = $transaction;
                    $this->session->set('webpay_total', intval($pay_amount1*100));
                    //then run a code to get the splitting xml file and co
                    
                    $this->xml_data = '<payment_item_detail>'. 
                        '<item_details detail_ref="'.$TRANSACTIONID.'" institution="ZMART" sub_location="Lagos" location="Lagos">';
                    $this->xml_data .= $this->webpay->get_split_marchant_xml_auction($TRANSACTIONID, $pay_amount1);//pass in the transaction ID
                    //and the total amount to be paid here
                        //'<item_detail item_id="1" item_name="Butter" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4356789876" />'.
                        //    '<item_detail item_id="2" item_name="Grape" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4351189876" />'. 
                    $this->xml_data .= '</item_details></payment_item_detail>';
                    //var_dump($this->xml_data);die;
                    //var_dump($this->xml_data); die;
                    $combination = $TRANSACTIONID.$this->product_id.$this->pay_item_id.  intval($pay_amount1*100).
                            $this->site_redirect_url.$this->mac_key;
                    //echo $TRANSACTIONID.$this->product_id.$this->pay_item_id.intval($pay_amount1*100).
                            //$this->site_redirect_url; die;
                    $this->hash = hash("sha512", $combination);
                    //die;
                    //var_dump($_SESSION);
                    //die;
               //$status = $this->do_captured_transaction1($captured, $deal_id,$item_qty,$transaction,$TRANSACTIONID);
                $this->transaction_result = array("TIMESTAMP" => date('m/d/Y h:i:s a', time()), "ACK" => $this->Lang['SUCCESS'] ,"AMT"=> $pay_amount1,"CURRENCYCODE"=>CURRENCY_CODE);
                $this->result_transaction = arr::to_object($this->transaction_result);
                //dont need the line of code below
                //$this->session->set('payment_result', $this->result_transaction);
                $this->txn_ref = $TRANSACTIONID;
                $this->total_amount_to_pay = $pay_amount1;
                $this->template->title = "Interswitch Payment System";
                $this->template->content = new View("themes/".THEME_NAME."/interswitch/payment_process");  
                    //$status = $this->payment_mail_function($deal_id,$transaction);
                    //$this->results = arr::to_object(array('TIMESTAMP'=> date('d/m/Y h:i:s A', time()),'ACK'=>$this->Lang['SUCCESS'],'AMT'=>$tot_amount1,'CURRENCYCODE'=>CURRENCY_CODE));
                    //        $this->session->set('payment_result', $this->results);
                    //        url::redirect(PATH.'transaction.html');

                } else {

                        common::message(-1, $this->Lang["PAGE_NOT"]);  
                        url::redirect(PATH."auction.html");	
                }
 
        }
        
        public function sendInterswitchEmail($tranx_id, $amount, $response){
            $from = CONTACT_EMAIL;
            $message = new View("themes/".THEME_NAME."/payment_mail_interswitch");
            $message->interswitch = $response;
            $message->id = $tranx_id;
            $message->amount = $amount;
            $user_details = $this->webpay->get_purchased_user_details();
            foreach($user_details as $U){
                if(EMAIL_TYPE==2) {
                    email::smtp($from,$U->email, "[Zmart] Payment Notification" ,$message);
                }else{
                    //email::sendgrid($from,$U->email, "[Zmart] Payment Notification" ,$message);
                }           
            }
        }
        
	/** DOCAPTURED PAYMENT, UPDATED AMOUNT TO REFERED USERS, POST PURCHASE DEALS TO FACEBOOK WALL and SEND MAIL **/

	public function do_captured_transaction($captured = "", $deal_id = "", $qty = "",$transaction = "")
	{
		
		
	           
            //var_dump($_SESSION);
	        $from = CONTACT_EMAIL;
		$this->products_list = $this->webpay->get_products_coupons_list($transaction,$deal_id);
		$this->product_size = $this->webpay->get_shipping_product_size();
		$this->product_color = $this->webpay->get_shipping_product_color();

                $this->merchant_id = $this->products_list->current()->merchant_id;
                $this->get_merchant_details = $this->webpay->get_merchant_details($this->merchant_id);
                $this->merchant_firstneme = $this->get_merchant_details->current()->firstname;
                $this->merchant_lastname = $this->get_merchant_details->current()->lastname;
                $this->merchant_email = $this->get_merchant_details->current()->email;
                $message_merchant = new View("themes/".THEME_NAME."/payment_mail_product_merchant");
				
			

		if(EMAIL_TYPE==2) {
			
			
				email::smtp($from,$this->merchant_email, $this->Lang['USER_BUY'] ,$message_merchant);
				
		}else{
			
						
		                //email::sendgrid($from,$this->merchant_email, $this->Lang['USER_BUY'] ,$message_merchant);
		}

		$user_details = $this->webpay->get_purchased_user_details();
		foreach($user_details as $U){
			if($U->referred_user_id && $U->deal_bought_count == $qty){
				$update_reff_amount = $this->webpay->update_referral_amount($U->referred_user_id);
			}
			$deals_details = $this->webpay->get_deals_details($deal_id);
			if($U->facebook_update == 1){
				foreach($deals_details as $D){
					$dealURL = PATH."product/".$D->deal_key.'/'.$D->url_title.".html";
					$message = $this->Lang['PRO_PURCASH'].$D->deal_title." ".$dealURL;
					$post_arg = array("access_token" => $U->fb_session_key, "message" => $message, "id" => $U->fb_user_id, "method" => "post");
					common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);
				}
			}

		}
		return;
	}
        
	public function do_captured_transaction1($captured = "", $deal_id = "", $qty = "",$transaction = "",$transid ="")
	{
		$user_details = $this->webpay->get_purchased_user_details();
		foreach($user_details as $U){

		$deals_details = $this->webpay->get_deals_details($deal_id);
		/** Send Purchase details to user Email **/
		foreach($deals_details as $D){
		    $deal_title = $D->deal_title;
		    $deal_amount = $D->deal_value;
		}

                $friend_details = $this->webpay->get_friend_transaction_details($deal_id, $transaction);
                $friend_email = $friend_details->current()->friend_email;
                $friend_name = $friend_details->current()->friend_name;
            if($friend_email != "xxxyyy@zzz.com"){
                $from = CONTACT_EMAIL;
                $this->transaction_mail =array("deal_title" => $deal_title, "item_qty" => $qty ,"total" => ($deal_amount * $qty) ,"amount"=> ($deal_amount * $qty),"ref_amount"=> "0","value" =>$deal_amount,"friend_name" => $friend_name,"value" =>$deal_amount);
                $this->result_mail = arr::to_object($this->transaction_mail);
                $this->admin_list = $this->webpay->get_admin_list();
		$this->admin_email = $this->admin_list->current()->email;
		$this->products_list = $this->webpay->get_products_coupons_list($transaction,$deal_id);
				$this->product_size = $this->webpay->get_shipping_product_size();
				$this->product_color = $this->webpay->get_shipping_product_color();
                $friend_message = new View("themes/".THEME_NAME."/friend_buyit_mail");
                //$message_admin = new View("themes/".THEME_NAME."/payment_mail_product_admin");
                 if(EMAIL_TYPE==2) {
			email::smtp($from,$friend_email, $this->Lang['PRO_GIFT']. SITENAME ,$friend_message);
		//	email::smtp($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}else{
			//email::sendgrid($from,$friend_email, $this->Lang['PRO_GIFT']. SITENAME ,$friend_message);
			//email::sendgrid($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}

            } else {
                $from = CONTACT_EMAIL;
				$this->products_list = $this->webpay->get_products_coupons_list($transaction,$deal_id);
				$this->product_size = $this->webpay->get_shipping_product_size();
				$this->product_color = $this->webpay->get_shipping_product_color();

				$this->admin_list = $this->webpay->get_admin_list();
				$this->admin_email = $this->admin_list->current()->email;
                $message = new View("themes/".THEME_NAME."/payment_mail_product");
                //$message_admin = new View("themes/".THEME_NAME."/payment_mail_product_admin");

                if(EMAIL_TYPE==2) {
			//email::sendgrid($from,$U->email, $this->Lang['THANKS_BUY'] ,$message);
			//email::sendgrid($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
			email::smtp($from,$U->email, $this->Lang['THANKS_BUY'] ,$message);
		//	email::smtp($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}else{
			//email::sendgrid($from,$U->email, $this->Lang['THANKS_BUY'] ,$message);
			//email::sendgrid($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}
            }
         }
		return;
	}
        
        
        
	private function payment_mail_function($deal_id = "", $transaction_id = "")
	{
		$this->auction_details = $this->paypal->get_auction_mail_data($deal_id,$transaction_id);

		 $message = new View("themes/".THEME_NAME."/auction/auction_payment_mail"); 

		foreach ($this->auction_details as $row) {

			if($row->facebook_update == 1){
				
					$dealURL = PATH."auction/".$row->deal_key.'/'.$row->url_title.".html";
					$message1 = $this->Lang['ACT_PURCASH'].$row->deal_title." ".$dealURL;
					$post_arg = array("access_token" => $row->fb_session_key, "message" => $message1, "id" => $row->fb_user_id, "method" => "post");
					common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg );
				
			}

			$from = CONTACT_EMAIL;
			$subject = $this->Lang['THANKS_BUY'];
				if(EMAIL_TYPE==2){
                    email::smtp($from,$row->email, $subject, $message);
			    }
			    else{
			      email::sendgrid($from,$row->email, $subject, $message);
			    }

 		}
		

		/*$from = NOREPLY_EMAIL;
	 	
		$transaction_details = $this->paypal->get_all_deal_captured_transaction($deal_id, $transaction_id, $captured);	
		foreach($transaction_details as $TD){	
		
		        $friend_details = $this->paypal->get_friend_transaction_details($deal_id, $TD->id);			        
                $friend_email = $friend_details->current()->friend_email;
                $friend_name = $friend_details->current()->friend_name;        
			    $this->result_mail = arr::to_object(array("deal_title" => $TD->deal_title, "shipping_amount" => $shipping_amount ,"total" => $TD->amount ,"ref_amount"=> $TD->referral_amount, "amount"=> $amount ,"friend_name" => $friend_name,"value" =>$TD->amount));
			    $subject = "Thanks for buying from ". SITENAME;		
			        if($friend_email != "xxxyyy@zzz.com"){
			                $friend_message = new View("themes/".THEME_NAME."/friend_buyit_mail");
			        } else {
			                $message = new View("themes/".THEME_NAME."/auction/auction_payment_mail");
			        }
			        if($friend_email != "xxxyyy@zzz.com"){
				    if(EMAIL_TYPE==2){
		                    email::smtp($from, $friend_email, "You Got Coupon Gift from your Friend" ,$friend_message);
				}else{
				   email::sendgrid($from, $friend_email, "You Got Coupon Gift from your Friend" ,$friend_message);
				}
		            } else {
				    if(EMAIL_TYPE==2){			        
		                    email::smtp($from,$TD->email, $subject, $message);
				    }
				    else{
				      email::sendgrid($from,$TD->email, $subject, $message);
				    }
		            }
			
		}	*/	
		return;
	}
 

	private function hash_call($methodName, $nvpStr)
	{
	        
		$nvpheader = $this->nvpHeader();
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_POST, 1);

		if($this->AUTH_token && $this->AUTH_signature && $this->AUTH_timestamp){
			$headers_array[] = "X-PP-AUTHORIZATION: ".$nvpheader;
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_array);
			curl_setopt($ch, CURLOPT_HEADER, false);
		}
		else {
			$nvpStr = $nvpheader.$nvpStr;
		}
		
		if(strlen(str_replace('VERSION=', '', strtoupper($nvpStr))) == strlen($nvpStr)) {
			$nvpStr = "&VERSION=" . $this->Api_Version . $nvpStr;	
		}
               

		$nvpreq = "METHOD=".urlencode($methodName).$nvpStr;
				

		curl_setopt($ch,CURLOPT_POSTFIELDS,$nvpreq);
		$response = curl_exec($ch);
		$nvpResArray = $this->deformatNVP($response);
		if(curl_errno($ch)) { 
			$_SESSION['curl_error_no']=curl_errno($ch) ;
			$_SESSION['curl_error_msg']=curl_error($ch);
		} else {
			curl_close($ch);
		}

		return $nvpResArray;
	}
}
