<?php defined('SYSPATH') OR die('No direct access allowed.');
class Store_credit_Controller extends Layout_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();
		$this->cash = new Store_credit_Model;
	}

	/** STORE CREDIT PRODUCT  **/

	public function storecredit()
	{
	$cart_merchant=array();
	$cart_merchant=array();
    $merchant_id_array=array();
	
	foreach($_SESSION as $key=>$value)
        {
            if(($key=='product_cart_id'.$value)){
            
            $deal_id = $_SESSION[$key];
            $item_qty = $this->session->get('product_cart_qty'.$deal_id);
            $main_storecreditid = $this->session->get('main_storecreditid'.$deal_id);
            $product_size = "1";
                foreach($_SESSION as $key=>$value)
                {
                    if(($key=='product_size_qty'.$deal_id)){
                        $product_size = $value;
                    }
                    if(($key=='product_quantity_qty'.$deal_id)){
                        $product_quantity = $value;
                    }
                    if(($key=='store_credit_id'.$deal_id)){
						$store_credit_id = $value;
					}
					if(($key=='store_credit_period'.$deal_id)){
						$store_credit_period = $value;
					}
				}
				$this->check_installment_period = $this->cash->check_installment($deal_id,$main_storecreditid);
				$installment_paid = $this->check_installment_period->current()->installments_paid;
				if($installment_paid >= $store_credit_period) {
					common::message(-1, "Check Installment Period");
                    url::redirect(PATH."cart.html");
				}
                $this->product_size_details = $this->cash->product_size_details($deal_id, $product_size);
                $dbquantity=$this->product_size_details->current()->quantity;

                if($dbquantity < $item_qty){
                    $this->session->set('product_quantity_qty'.$deal_id,$dbquantity);
                    common::message(-1, $this->Lang['CHE_PRO_QTY']);
                    url::redirect(PATH."cart.html");
                }
            }
        }

		if($_POST){
			$referral_amount = 0;
			$prime_customer = strip_tags(addslashes($this->input->post("prime_customer")));
		        $this->userPost = utf8::clean($this->input->post());
				
				$this->is_initial = $this->userPost["install_no"] == 0;
				
				
			$product_color="";
			$paymentType = "Storecredit";
			$captured = 0;
			$total_amount="";
		        $total_qty="";
		        $product_title="";
		        $produ_qty="";
		        $total_shipping="";
		        $pay_amount1=0; // for total transaction amount for success page
		         $bulk_discount="";
		         $bulk_discount1="";
		         $total_bulk_discount=0;
		        $TRANSACTIONID = text::random($type = 'alnum', $length = 16);
				foreach($_SESSION as $key=>$value)
                {
                    if(($key=='product_cart_id'.$value)){
						$product_color = 0;
                        $product_size = 0;
                        $store_credit_id = 0;
                        $store_credit_period = 0;
                        $instalment_value =0;
						
					
					
                    $deal_id = $_SESSION[$key];
                    $main_storecreditid = $this->session->get('main_storecreditid'.$deal_id);
					
                    $item_qty = $this->session->get('product_cart_qty'.$deal_id);
                    $this->session->set('product_cart_qty'.$deal_id,$item_qty);
                    $amount = $this->input->post("amount");
					
					
			        $this->deals_payment_deatils = $this->cash->get_product_payment_details($deal_id);
					
					

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
                                        $merchant_id = $UL->merchant_id;
                                        $product_shipping = $UL->shipping_amount;
                                        $shipping_methods = $UL->shipping;
                                        $end_date=$UL->end_date;
										$start_date=$UL->start_date;
										$product_offer=$UL->product_offer;
										$gift_offer=$UL->gift_offer;
                                         if($item_qty>=$UL->bulk_discount_buy && $this->session->get('prime_customer')==1 && $UL->end_date > time() && $UL->start_date < time()&& $UL->bulk_discount_buy!=0)
                                        {
                                        $bulk_discount = $UL->bulk_discount_get;
                                        $bulk_discount1 = $UL->bulk_discount_buy;
                                        $r=(int)($item_qty / $bulk_discount1);
                                        $total_bulk_discount=$r*$bulk_discount;
										}else{
											$bulk_discount=0;
											$bulk_discount1=0;
											$total_bulk_discount=0;
										}
                                }
                                $this->gift_type=$this->cash->get_product_gift_type($merchant_id,$deal_id,$gift_offer);
								$gift_type=isset($this->gift_type[0]->gift_type)?$this->gift_type[0]->gift_type:0;


                                 if($shipping_methods  == 1){
                                        $shipping_amount = 0;
                                }  elseif($shipping_methods  == 2){
                                        $merchant_flat_amount = $this->cash->get_userflat_amount($merchant_id);
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
                                        if(($key=='store_credit_id'.$deal_id)){
											$store_credit_id = $value;
                                        }
                                        if(($key=='store_credit_period'.$deal_id)){
											$store_credit_period = $value;
                                        }
                                        
                                }
                                
								
								
                                
								if($store_credit_period!=""){ 
									 $pay_amount1 = $instalment_value = $taxdeal_amount/$store_credit_period;
								} 
								
                                 if($this->session->get('prime_customer')==1){
											if($product_offer==2 && $gift_type==1 &&  $end_date > time() && $start_date < time())
											{
												$this->free_gift=$this->cash->get_free_gift($product_amount,$merchant_id,$deal_id);
											}elseif($product_offer==2 && $gift_type==0 &&  $end_date > time() && $start_date < time()){

												$this->free_gift=$this->cash->get_free_gft_not_per_amount($merchant_id,$deal_id,$product_offer);
											}
												$this->free_gift=isset($this->free_gift[0]->gift_offer)?$this->free_gift[0]->gift_offer:0;
												
												
									if($this->is_initial){
										$instalment_value = 0;
									}
										
									
                                $transaction = $this->cash->insert_cash_delivery_transaction_details($deal_id, $referral_amount, $item_qty, 1, $captured, $purchase_qty,$paymentType,$product_amount,$merchant_id,$product_size,$product_color,$tax_amount,$shipping_amount,$shipping_methods, arr::to_object($this->userPost),$TRANSACTIONID,$bulk_discount,$this->free_gift,$store_credit_id,$store_credit_period,$bulk_discount,$this->free_gift,$prime_customer,$bulk_discount1,$total_bulk_discount,$product_offer,$gift_type,$instalment_value,$installment_paid,$main_storecreditid, $this->is_initial);
								
				   	
								

				$status = $this->do_captured_transaction($captured, $deal_id,$item_qty,$transaction);
			//}
		}else{
			$this->free_gift="";
			
			$transaction = $this->cash->insert_cash_delivery_transaction_details($deal_id, $referral_amount, $item_qty, 7, $captured, $purchase_qty,$paymentType,$product_amount,$merchant_id,$product_size,$product_color,$tax_amount,$shipping_amount,$shipping_methods, arr::to_object($this->userPost),$TRANSACTIONID,$bulk_discount,$this->free_gift,$store_credit_id,$store_credit_period,$bulk_discount,$this->free_gift,$prime_customer,$bulk_discount1,$total_bulk_discount,$product_offer,$gift_type,$instalment_value,$installment_paid,$main_storecreditid);

				$status = $this->do_captured_transaction($captured, $deal_id,$item_qty,$transaction);
			
		}
			       }
	            }
	            $status = $this->do_captured_transaction1($captured, $deal_id,$item_qty,$transaction,$TRANSACTIONID);

	            $this->transaction_result = array("TIMESTAMP" => date('m/d/Y h:i:s a', time()), "ACK" => $this->Lang['SUCCESS'] ,"AMT"=> $pay_amount1,"CURRENCYCODE"=>CURRENCY_CODE);
	                $this->result_transaction = arr::to_object($this->transaction_result);
	                $this->session->set('payment_result', $this->result_transaction);
	               // url::redirect(PATH.'transaction.html');

				url::redirect(PATH."payment_product/cart_payment_paypal.html");


			}
	}



	/** DOCAPTURED PAYMENT, UPDATED AMOUNT TO REFERED USERS, POST PURCHASE DEALS TO FACEBOOK WALL and SEND MAIL **/

	public function do_captured_transaction($captured = "", $deal_id = "", $qty = "",$transaction = "", $is_init = false)
	{

	        $from = CONTACT_EMAIL;
		$this->products_list = $this->cash->get_products_coupons_list($transaction,$deal_id);
		
		
		$this->product_size = $this->cash->get_shipping_product_size();
		$this->product_color = $this->cash->get_shipping_product_color();
		
		

                $this->merchant_id = $this->products_list->current()->merchant_id;
                $this->get_merchant_details = $this->cash->get_merchant_details($this->merchant_id);
                $this->merchant_firstneme = $this->get_merchant_details->current()->firstname;
                $this->merchant_lastname = $this->get_merchant_details->current()->lastname;
                $this->merchant_email = $this->get_merchant_details->current()->email;
				$message_merchant = new View("themes/".THEME_NAME."/storecredit_product_merchant");

		if(EMAIL_TYPE==2) {
			email::smtp($from,$this->merchant_email, $this->Lang['INSTALL_PAY'] ,$message_merchant);
		}else{
			email::sendgrid($from,$this->merchant_email, $this->Lang['INSTALL_PAY'] ,$message_merchant);
		}

		$user_details = $this->cash->get_purchased_user_details();
		foreach($user_details as $U){
			if($U->referred_user_id && $U->deal_bought_count == $qty){
				$update_reff_amount = $this->cash->update_referral_amount($U->referred_user_id);
			}
			$deals_details = $this->cash->get_deals_details($deal_id);
			/*if($U->facebook_update == 1){
				foreach($deals_details as $D){
					$dealURL = PATH."product/".$D->deal_key.'/'.$D->url_title.".html";
					$message = $this->Lang['PRO_PURCASH'].$D->deal_title." ".$dealURL;
					$post_arg = array("access_token" => $U->fb_session_key, "message" => $message, "id" => $U->fb_user_id, "method" => "post");
					common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);
				}
			}*/

			/** Send Purchase details to user Email **/
			/*foreach($deals_details as $D){
			    $deal_title = $D->deal_title;
			    $deal_amount = $D->deal_value;
			}

			$friend_details = $this->cash->get_friend_transaction_details($deal_id, $transaction);
            $friend_email = $friend_details->current()->friend_email;
            $friend_name = $friend_details->current()->friend_name;
            if($friend_email != "xxxyyy@zzz.com"){
                $from = CONTACT_EMAIL;
                $this->transaction_mail =array("deal_title" => $deal_title, "item_qty" => $qty ,"total" => ($deal_amount * $qty) ,"amount"=> ($deal_amount * $qty),"ref_amount"=> "0","value" =>$deal_amount,"friend_name" => $friend_name,"value" =>$deal_amount);
                $this->result_mail = arr::to_object($this->transaction_mail);
                $friend_message = new View("themes/".THEME_NAME."/friend_buyit_mail");
                 if(EMAIL_TYPE==2) {
					email::smtp($from,$friend_email, "You Got Product Gift from your Friend". SITENAME ,$friend_message);
				}else{
					email::sendgrid($from,$friend_email, "You Got Product Gift from your Friend". SITENAME ,$friend_message);
				}

            } else {
                $from = CONTACT_EMAIL;
				$this->products_list = $this->cash->get_products_coupons_list($transaction,$deal_id);
				$this->product_size = $this->cash->get_shipping_product_size();
				$this->product_color = $this->cash->get_shipping_product_color();
                $message = new View("themes/".THEME_NAME."/payment_mail_product");
               if(EMAIL_TYPE==2) {
					email::smtp($from,$U->email, "Thanks for buying from ". SITENAME ,$message);

				}else{
					email::sendgrid($from,$U->email, "Thanks for buying from ". SITENAME ,$message);
				}
            } */


		}
		return;
	}

	/** DOCAPTURED PAYMENT, UPDATED AMOUNT TO REFERED USERS, POST PURCHASE DEALS TO FACEBOOK WALL and SEND MAIL **/

	public function do_captured_transaction1($captured = "", $deal_id = "", $qty = "",$transaction = "",$transid ="")
	{
		$user_details = $this->cash->get_purchased_user_details();
		foreach($user_details as $U){

		$deals_details = $this->cash->get_deals_details($deal_id);
		/** Send Purchase details to user Email **/
		foreach($deals_details as $D){
		    $deal_title = $D->deal_title;
		    $deal_amount = $D->deal_value;
		}

                $friend_details = $this->cash->get_friend_transaction_details($deal_id, $transaction);
                $friend_email = $friend_details->current()->friend_email;
                $friend_name = $friend_details->current()->friend_name;
            if($friend_email != "xxxyyy@zzz.com"){
                $from = CONTACT_EMAIL;
                $this->transaction_mail =array("deal_title" => $deal_title, "item_qty" => $qty ,"total" => ($deal_amount * $qty) ,"amount"=> ($deal_amount * $qty),"ref_amount"=> "0","value" =>$deal_amount,"friend_name" => $friend_name,"value" =>$deal_amount);
                $this->result_mail = arr::to_object($this->transaction_mail);
                $this->admin_list = $this->cash->get_admin_list();
		$this->admin_email = $this->admin_list->current()->email;
		$this->products_list = $this->cash->get_products_coupons_list($transaction,$deal_id);
				$this->product_size = $this->cash->get_shipping_product_size();
				$this->product_color = $this->cash->get_shipping_product_color();
                $friend_message = new View("themes/".THEME_NAME."/friend_buyit_mail");
                $message_admin = new View("themes/".THEME_NAME."/storecredit_payment_mail_product_admin");
                 if(EMAIL_TYPE==2) {
			//email::smtp($from,$friend_email, $this->Lang['PRO_GIFT']. SITENAME ,$friend_message);
			//email::smtp($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}else{
			email::sendgrid($from,$friend_email, $this->Lang['PRO_GIFT']. SITENAME ,$friend_message);
			email::sendgrid($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}

            } else {
                $from = CONTACT_EMAIL;
				$this->products_list = $this->cash->get_products_coupons_list($transaction,$deal_id);
				$this->product_size = $this->cash->get_shipping_product_size();
				$this->product_color = $this->cash->get_shipping_product_color();

				$this->admin_list = $this->cash->get_admin_list();
				$this->admin_email = $this->admin_list->current()->email;
               $message = new View("themes/".THEME_NAME."/storecredit_payment_mail_product");
              
               $message_admin = new View("themes/".THEME_NAME."/storecredit_payment_mail_product_admin");
               

        if(EMAIL_TYPE==2) {
			email::smtp($from,$U->email, $this->Lang['INSTALL_PAY'] ,$message);
			email::smtp($from,$this->admin_email,$this->Lang['INSTALL_PAY'] ,$message_admin);
		}else{
			email::sendgrid($from,$U->email, $this->Lang['THANKS_BUY'] ,$message);
			email::sendgrid($from,$this->admin_email, $this->Lang['USER_BUY'] ,$message_admin);
		}
            }
         }
		return;
	}
	
	


}
