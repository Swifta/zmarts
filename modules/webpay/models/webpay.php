<?php defined('SYSPATH') or die('No direct script access.');
class Webpay_Model extends Model
{
	public function __construct()
	{	
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();	
		$this->UserID = $this->session->get("UserID");
		$this->UserName = $this->session->get("UserName");
	}
        
        public function addStockBack($transaction_id){
            $get_detail = $this->db->select("deal_merchant_commission,shipping_amount,tax_amount,amount,product_size,product_id,deal_id,auction_id,quantity")->
                    from('transaction')->where(array("transaction_id" =>$transaction_id))->get();
            if(count($get_detail)){
                $product_id = $get_detail[0]->product_id;
                $quantity=$get_detail[0]->quantity;
                $size_id = $get_detail[0]->product_size;
                $this->db->update("product_size", array("quantity"=>new Database_Expression('quantity + '.$quantity)),
                        array("deal_id" => $product_id, "size_id" =>$size_id));
                //$this->db->query("update product_size set quantity = quantity + $quantity where deal_id = '$product_id' and size_id = '$size_id' ");
                
                $this->db->update("product", array("user_limit_quantity"=>new Database_Expression('user_limit_quantity + '.$quantity)),
                        array("deal_id" => $product_id));
                //$this->db->query("update product set user_limit_quantity = user_limit_quantity + $quantity where deal_id = '$product_id'");

                $this->db->update('transaction',array('payment_status' => 'Failed','pending_reason' =>'Not paid'),array('transaction_id' => $transaction_id));
            }
        }
        
        public function payUpdate($tranx_id, $response_code, $response_discription, $PaymentReference, $CardNumber, $status){
            //$ret = array();
            $payment_status = "Pending";
            if($status){
                $payment_status = "Success";
                //$this->session->delete("count");
            }
            $this->db->update("transaction", array("payment_status" => $payment_status, "reason_code" => $response_code, 
                "pending_reason" => $response_discription, "captured_transaction_id" => $PaymentReference, 
                "captured_ack" => $CardNumber, "type" => 7), 
                    array("transaction_id" => $tranx_id));
            //return json_encode($ret);
        }
        
        public function getTotalAmountOnTransaction($transaction_id=""){
            $total = 0;
            $result = $this->db->from("transaction")
                        ->where(array("transaction_id"=>$transaction_id))->get();
                //var_dump(count($result));
            if(count($result) > 0){
                foreach($result as $row){
                    $total+=($row->amount + $row->shipping_amount);
                }
            }
            return intval($total*100);
        }
        
        public function getTransactionDetails($transaction_id=""){
            $ret = array();
            $result = $this->db->from("transaction")
                        ->where(array("transaction_id"=>$transaction_id))->get();
                //var_dump(count($result));
            if(count($result) > 0){
                foreach($result as $row){
                    $ret['status'] = $row->payment_status;
                    $ret['reason'] = $row->pending_reason;
                    $ret['type'] = $row->transaction_type;
                }
            }
            return json_encode($ret);
        }
        
        public function updateTransaction($transaction_id="", $status="", $ResponseCode="", 
                $ResponseDescription="", $PaymentReference="", $CardNumber=""){
            $this->db->update("transaction", array("payment_status" => $status, "reason_code" => $ResponseCode, 
                "pending_reason" => $ResponseDescription, "captured_transaction_id" => $PaymentReference, 
                "captured_ack" => $CardNumber, "type" => 7), 
                    array("transaction_id" => $transaction_id));
        }

        public function get_split_marchant_xml($transaction_id, $total_amount_shopped, $last=false, $soFar=0, $totalCommission=0){
            //ceil($input / 10) * 10;
//            $total_item_in_cart = $this->session->get("count");
//            $real_amount_to_be_charged_as_commission = 0;
//            $tmp_webpay_loop = 1;
//            if($this->session->get("tmp_webpay_loop")){
//                
//                $tmp_webpay_loop = intval($this->session->get("tmp_webpay_loop"))+1;
//                $this->session->set("tmp_webpay_loop", $tmp_webpay_loop);
//                //echo $tmp_webpay_loop." so "; die;
//            }
//            else{
//                $this->session->set("tmp_webpay_loop", 1);
//            }
            $ret = ""; //array("xml"=>"", "commission"=>0);
//            $is_above_2k = false;
//            //$tmp_2k = 0.015 * ceil($total_amount_shopped / 10) * 10;
//            $tmp_2k = 0.015 * ($total_amount_shopped*100);
//            //echo ($total_amount_shopped*100)." against ".$tmp_2k;die;
//            if($tmp_2k > 200000){
//                $is_above_2k = true;
//                //$real_amount_to_be_charged_as_commission = (2000*100);
////                if(is_float($tmp_2k)){
////                    $op = explode(".", $tmp_2k);
////                    $real_num = $op[0];
////                }
//            }
//            else{
//                //$real_amount_to_be_charged_as_commission = (int)$tmp_2k;
//            }
//     
        //$commission_webpay = 0;
        $commission_webpay_summed = 0;
        $loop = 0;
        $total_item_in_cart = $this->session->get("count");
        
        $commission_webpay = round(0.015 * ($total_amount_shopped*100));
        if($commission_webpay > 200000){
            $commission_webpay = 200000;
        }
                
            $result = $this->db->from("transaction")
                        ->where(array("transaction.transaction_id"=>$transaction_id))
                        ->join("product","product.deal_id","transaction.product_id")
                        ->join("users","users.user_id","transaction.user_id")
                        ->join("city","city.city_id","users.city_id")
                        ->join("stores", "product.shop_id", "stores.store_id")
                        ->get();
            if(count($result) > 0){
                foreach($result as $row){
                    $loop++;
                    $isLast = false;
                    if($loop == $total_item_in_cart){
                        $isLast = true;
                        //echo $row->amount;die;
                    }
//                        if($row->approve_status != 1){
//                            $ret['success'] = false;
//                            $ret['msg'] = "User Account Blocked or Suspended";
//                            break;
//                        }
//<item_detail item_id="2" item_name="Grape" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4351189876" />

                    $item_id = $row->product_id;
                    $item_name = urlencode($row->deal_title." (".$row->quantity.")");
                    $acct_num = "";
                    /*
                     * get this merchant/shop account number to settle
                     */
                    $qu = $this->db->from("users")
                            ->where(array("user_id"=>$row->store_admin_id))->get();
                    foreach($qu as $merch){
                        $acct_num = $merch->nuban;
                    }
                    //$acct_num = $row->nuban;
                    if(strlen($acct_num) < 10){
                        $acct_num = rand(1000000000, 9999999999);//comment this out on production because merchants are supposed to have a
                    }
                    //nuban number set in there profile
                    $temp_item_amt = (($row->amount*$row->quantity)+$row->shipping_amount) * 100;
                    //$temp_item_amt = ceil($total_amount_shopped / 10) * 10 * 100;
                    //if($total_amount > )
//                    if(!$is_above_2k){
//                        //if not above 2k cap
//                        $transaction_fee = floor(0.015 * $temp_item_amt);
//                        //$this->session->delete("tmp_webpay_loop");
////                        if($total_item_in_cart == $tmp_webpay_loop){
////                            //this is the last item in the cart.
////                            $transaction_fee = $real_amount_to_be_charged_as_commission -
////                                     $this->session->get("tmp_webpay_commission_store");
////                        }
////                        else{
////                            $store_back_commission= $this->session->get("tmp_webpay_commission_store")+$transaction_fee;
////                            $this->session->get("tmp_webpay_commission_store", $store_back_commission);
////                        }
//                        //$item_amt = $temp_item_amt - intval(0.015 * $temp_item_amt); //remove transaction fee
//                    }
//                    else{
//
//
//                    }
                    $weight_fraction_of_sales = $temp_item_amt / ($total_amount_shopped * 100);
                    //$weight_fraction_of_sales = ($temp_item_amt / (ceil($total_amount_shopped / 10) * 10 *100));
                    $transaction_fee = (int)($weight_fraction_of_sales * $commission_webpay); //from 2,000naira. whats my transaction fee here  
                    $commission_webpay_summed += $transaction_fee;
                    if($isLast && ($total_item_in_cart > 1)){
                        
                        $transaction_fee += $commission_webpay - $commission_webpay_summed;
                        //echo $transaction_fee." was here ".$commission_webpay." and ".$commission_webpay_summed; die;
                    }
                    //echo $tmp_webpay_loop." seen "; die;
//                    if($tmp_webpay_loop >= ($total_item_in_cart-1)){
//                        //this is the last item in the cart.
//                        //echo "here 2 ".$this->session->get("tmp_webpay_commission_store"); die;
//                        if($this->session->get("tmp_webpay_commission_store") != $real_amount_to_be_charged_as_commission){
//                            $add_up = $real_amount_to_be_charged_as_commission -
//                                 $this->session->get("tmp_webpay_commission_store"); 
//                            echo " here ".$add_up;die;
//                        }
//                        //echo "here ".$transaction_fee." ".$real_amount_to_be_charged_as_commission." ".
//                         //      $this->session->get("tmp_webpay_commission_store");
//            $this->session->delete("tmp_webpay_loop");
//            $this->session->delete("tmp_webpay_commission_store");
//                        //die;
//                    }
//                    else{
//                        $web_commision = 0;
//                        if($this->session->get("tmp_webpay_commission_store")){
//                            $web_commision = $this->session->get("tmp_webpay_commission_store");
//                        }
//                        $store_back_commission = $web_commision + $transaction_fee;
//                        //echo "here ".$store_back_commission."\n";die;
//                        $this->session->set("tmp_webpay_commission_store", $store_back_commission);
//                    }
//                    if(strpos($transaction_fee, ".")){
//                        $op = explode(".", $transaction_fee);
//                        $real_num = intval($op[0]); //convert to kobo
//                        $decimal_part = intval($op[1]);
//                        $transaction_fee = $real_num + $decimal_part;
//                    }
                    $item_amt = $temp_item_amt - $transaction_fee;
                    //echo $item_amt; die;
                    $xml = '<item_detail item_id="'.$item_id.'" item_name="'.$item_name.'" item_amt="'.
                            $item_amt.'" bank_id="117" acct_num="'.$acct_num.'" />';
                    $ret .= $xml;
                    //$product['quantity'] = $row->quantity;

                }
            }
            return $ret;
        }
        
        public function get_split_marchant_xml_auction($transaction_id, $total_amount_shopped){
            $ret = "";
            $is_above_2k = false;
            $tmp_2k = 0.015 * $total_amount_shopped;
            //echo $total_amount_shopped." against ".$tmp_2k;die;
            if($tmp_2k > 2000){
                $is_above_2k = true;
//                if(is_float($tmp_2k)){
//                    $op = explode(".", $tmp_2k);
//                    $real_num = $op[0];
//                }
            }
              
            $result = $this->db->from("transaction")
                        ->where(array("transaction.transaction_id"=>$transaction_id))
                        ->join("auction","auction.deal_id","transaction.auction_id")
                        ->join("users","users.user_id","transaction.user_id")
                        ->join("city","city.city_id","users.city_id")
                        ->join("stores", "auction.shop_id", "stores.store_id")
                        ->get();
            if(count($result) > 0){
                $total_amount = 0;
                $loop = 0;
                foreach($result as $row){
//                        if($row->approve_status != 1){
//                            $ret['success'] = false;
//                            $ret['msg'] = "User Account Blocked or Suspended";
//                            break;
//                        }
//<item_detail item_id="2" item_name="Grape" item_amt="'.(($pay_amount1/2)*100).'" bank_id="117" acct_num="4351189876" />

                    $item_id = $row->product_id;
                    $item_name = urlencode($row->deal_title." (".$row->quantity.")");
                    $acct_num = "";
                    /*
                     * get this merchant/shop account number to settle
                     */
                    $qu = $this->db->from("users")
                            ->where(array("user_id"=>$row->store_admin_id))->get();
                    foreach($qu as $merch){
                        $acct_num = $merch->nuban;
                    }
                    //$acct_num = $row->nuban;
                    if(strlen($acct_num) < 10){
                        $acct_num = rand(1000000000, 9999999999);//comment this out on production because merchants are supposed to have a
                    }
                    //nuban number set in there profile
                    //$temp_item_amt = intval($row->amount * 100);
                    $temp_item_amt = (int)((($row->amount*$row->quantity)+$row->shipping_amount) * 100);
                    //if($total_amount > )
                    if(!$is_above_2k){
                        //if not above 2k cap
                        $transaction_fee = round(0.015 * $temp_item_amt);
                        //$item_amt = $temp_item_amt - intval(0.015 * $temp_item_amt); //remove transaction fee
                    }
                    else{
                        //$weight_fraction_of_sales = $temp_item_amt / ($total_amount_shopped * 100);
                        $weight_fraction_of_sales = ($temp_item_amt / ($total_amount_shopped*100));
                        $transaction_fee = round($weight_fraction_of_sales * (2000*100)); //from 2,000naira. whats my transaction fee here           
                    }
//                    if(strpos($transaction_fee, ".")){
//                        $op = explode(".", $transaction_fee);
//                        $real_num = intval($op[0]); //convert to kobo
//                        $decimal_part = intval($op[1]);
//                        $transaction_fee = $real_num + $decimal_part;
//                    }
                    $item_amt = intval($temp_item_amt - $transaction_fee);
                    //echo $item_amt; die;
                    $xml = '<item_detail item_id="'.$item_id.'" item_name="'.$item_name.'" item_amt="'.
                            $item_amt.'" bank_id="117" acct_num="'.$acct_num.'" />';
                    $ret.=$xml;
                    //$product['quantity'] = $row->quantity;

                }
            }
            return $ret;
        }
//        
//        public function reduceProductQty($deal_id, $referral_amount, $item_qty, 5, 
//                $captured, $purchase_qty,$paymentType,$product_amount,$merchant_id,
//                $product_size,$product_color,$tax_amount){
//            
//        }
        
	/** INSERT TRANSACTION DETAILS TO TRANSACTION TABLE **/
	public function insert_transaction_details($deal_id = "", $referral_amount = "", $qty = "",$type ="", $captured = "",$purchase_qty = "",$paymentType = "",$product_amount = "",$merchant_id = "",$product_size = "",$product_color = "",$tax_amount = "",$shipping_amount = "",$shipping_methods = "",$post="",$TRANSACTIONID="")
	{
	    $merchant_commission = $this->db->select("merchant_commission")->from("users")->where(array("user_id" => $merchant_id))->get();
		$commission_amount=$merchant_commission->current()->merchant_commission; 
	        $aramex_currencycode = "0";
	        $aramex_value = "0";
	        if($shipping_methods ==  "5"){
	                $aramex_currencycode = $this->session->get('aramex_currencycode' . $deal_id);
	                $aramex_value = $this->session->get('aramex_value' . $deal_id);
	        }
		 $ip=$_SERVER['REMOTE_ADDR'];
	        //$ip = "41.184.34.101"; //Nigeria
	        $ip_country_code="";
	        $ip_country_name="";
	        $ip_city_name="";		
		$url = "http://api.ipinfodb.com/v3/ip-city/?key=8042c4ccb295723ec0791f306df5f9e92632e9b1ba0beda3e1ff399f207d2767&ip=$ip";
		
                $data = @file_get_contents($url);
                if($data){
                    $dat = explode(";",$data);
                    if($dat[3] != "-"){
                            $ip_country_code=$dat[3];
                            $ip_country_name=$dat[4];
                            $ip_city_name=$dat[5];
                    } 
                }
                else {
                        $geodata = Kogeoip::getRecord($ip);
                        if(isset($geodata->country_code)){
                                $ip_country_code=$geodata->country_code;
                                $ip_country_name=$geodata->country_name;
                                $ip_city_name="";
                        } else {
                                $ip_country_code = "Other";
                                $ip_country_name="Other";
                                $ip_city_name="Other";
                        }
		}
                
		$result = $this->db->insert("transaction",array("user_id" => $this->UserID , "product_id" => $deal_id, "firstname" => $this->UserName, 
                    "lastname" => $this->UserName, "order_date" => time(), "amount" => $product_amount, "payment_status" => 'Pending', 
                    "pending_reason" => 'INTERSWITCH', "country_code" => COUNTRY_CODE, "currency_code" => CURRENCY_CODE,
                    "transaction_id" => $TRANSACTIONID,"referral_amount" => $referral_amount,"transaction_type" => $paymentType,
                    "quantity" => $qty, "type" => $type, "captured" => $captured,"transaction_date" =>time(),
                    'deal_merchant_commission' => $commission_amount,"friend_gift_status" => $post->friend_gift,
                    "product_size" => $product_size, "product_color"=>$product_color,"shipping_amount"=>$shipping_amount,
                    "tax_amount"=>$tax_amount, "shipping_methods"=>$shipping_methods, "aramex_currencycode"=>$aramex_currencycode,
                    "aramex_value"=>$aramex_value,"ip"=>$ip,"ip_country_code" => $ip_country_code, "ip_country_name" => $ip_country_name, 
                    "ip_city_name"=>$ip_city_name));

		$trans_ID = $result->insert_id();
		
		$this->db->insert("shipping_info", array("transaction_id" => $trans_ID , "user_id" => $this->UserID, "adderss1" => $post->adderss1 , "address2" => $post->address2, "city" => $post->city ,"state" => $post->state ,"country" => $post->country,"name" => $post->shipping_name ,"postal_code" => $post->postal_code ,"phone" => $post->phone,"shipping_type" =>1,"shipping_date" => time()));

		//for($q=1; $q <= $qty; $q++){
			$coupon_code = text::random($type = 'alnum', $length = 8);
			$this->db->insert("transaction_mapping", array("product_id" => $deal_id , "user_id" => $this->UserID, "transaction_id" => $trans_ID , "coupon_code" => $coupon_code , "coupon_code_status" => 1,"transaction_date"=>time(),"friend_name" =>$post->friend_name, "friend_email" => $post->friend_email,"product_size" => $product_size, "product_color"=>$product_color));
		//}

		 $total_pay_amount = ($product_amount + $shipping_amount + $tax_amount); 
		 $commission=(($product_amount)*($commission_amount/100));
                 $merchantcommission = $total_pay_amount - $commission ; 
                 //$this->db->query("update users set merchant_account_balance = merchant_account_balance + $merchantcommission where user_type = 3 and user_id = $merchant_id ");

                //$this->db->query("update users set merchant_account_balance = merchant_account_balance + $total_pay_amount where user_type = 1");	     
                /*
                 commended this out. and make it available on successful payments onlu
                 if($qty == ""){
                    $qty = 1;
                }
		$purchase_count_total = $purchase_qty + $qty;
                //echo $qty; die;
	    $result_deal = $this->db->update("product", array("purchase_count" => $purchase_count_total), array("deal_id" => $deal_id)); 
		 $this->db->query("update product_size set quantity = quantity - $qty where deal_id = $deal_id and size_id = $product_size");
                 * 
                 */
		return $trans_ID;

	}
        
	/** GET PURCHASED USERID **/

	public function get_purchased_user_details()
	{
		$result = $this->db->from("users")->where(array("user_id" => $this->UserID))->get();
		return $result;
	}
        
	public function get_purchased_user_details_email_sending()
	{
		$result = $this->db->from("users")
                        ->join("shipping_info", "shipping_info.user_id", "users.user_id")
                        ->where(array("user_id" => $this->UserID))->get();
		return $result;
	}
	
	/** UPDATE AMOUNT TO REFERED USER **/

	public function update_referral_amount($ref_user_id = "")
	{
		$referral_amount = REFERRAL_AMOUNT;
		$this->db->update("users", array("user_referral_balance"=>new Database_Expression('user_referral_balance+'.$referral_amount)),
                        array("user_id" => $ref_user_id));
		//$this->db->query("update users set user_referral_balance = user_referral_balance+$referral_amount where user_id = $ref_user_id");
		return;
	}

	/** GET DEALS DETAILS **/

	public function get_deals_details($deal_id = "")
	{
		//$result = $this->db->query("select * from product  join stores on stores.store_id=product.shop_id join category on category.category_id=product.category_id where deal_status = 1 and category.category_status = 1 and  store_status = 1 and product.deal_id = $deal_id");
	        $result = $this->db->select()->from("product")
                        ->join("stores", "stores.store_id", "product.shop_id")
                        ->join("category", "category.category_id", "product.category_id")
                        ->where(array("deal_status" => 1, "category.category_status" => 1, "store_status" => 1,
                            "product.deal_id" => $deal_id))->get();
                return $result;
	}
	
	/** GET FRIEND DETAILS **/

	public function get_friend_transaction_details($deal_id = "", $transaction_id = "")
	{
	        $result = $this->db->select("transaction_mapping.friend_name", "transaction_mapping.friend_email")
					->from("transaction_mapping")
					->where(array("transaction_id" => $transaction_id, "product_id" => $deal_id))
					->get();
		return $result;
	
	}

	/** GET PRODUCT SIZE **/
	
	public function product_size_details($deal_id = "", $size_id = "")
	{
		$result = $this->db->from("product_size")
				->where(array("deal_id" => $deal_id,"size_id" => $size_id))
		     		->get();
		return $result;
	}


	/**GET PRODUCTS LIST**/

	public function get_products_coupons_list($transaction = "",$deal_id = "")
	{

		$result = $this->db->select('*, shipping_info.adderss1 as saddr1,shipping_info.address2 as saddr2,users.phone_number,transaction.id as trans_id,transaction.transaction_id as transactionid,users.address1 as addr1,users.address2 as addr2,users.phone_number as str_phone,transaction.shipping_amount as shipping')
                        ->from("shipping_info")
                                ->where(array("shipping_type"=>1,"shipping_info.user_id" => $this->UserID,"transaction.id" =>$transaction,"transaction.product_id" =>$deal_id))
                                ->join("users","users.user_id","shipping_info.user_id")
                                ->join("transaction","transaction.id","shipping_info.transaction_id")
                                ->join("product","product.deal_id","transaction.product_id")
                                ->join("city","city.city_id","shipping_info.city")
                                ->orderby("shipping_id","DESC")
                                ->get();
                        //var_dump($result);die;
		return $result;	
                
	}

	public function get_shipping_product_color()
	{
		$result = $this->db->from("color_code")->get();
		return $result;
	}
	
	public function get_shipping_product_size()
	{
		$result = $this->db->from("size")->get();
		return $result;
	}
	
	public function get_products_merchant_list($trans_id="",$merchant_id = "", $type="") 
	{
		$condition = "shipping_type = 1 and t.transaction_id ='".$trans_id."' and d.merchant_id ='".$merchant_id."'";				
		if($type){
                    $condition .= " AND t.type = 5 ";
		}
                else{
                    $condition.=" AND t.type != 5";
                }
		//$result = $this->db->query("select *,s.adderss1 as saddr1,s.address2 as saddr2,u.phone_number,t.id as trans_id,stores.address1 as addr1,stores.address2 as addr2,stores.phone_number as str_phone,t.shipping_amount as shipping,stores.city_id as str_city_id from shipping_info as s join transaction as t on t.id=s.transaction_id join product as d on d.deal_id=t.product_id join city on city.city_id=s.city join stores on stores.store_id = d.shop_id join users as u on u.user_id=s.user_id  where  $condition order by shipping_id DESC "); 
		$result = $this->select("*,s.adderss1 as saddr1,s.address2 as saddr2,u.phone_number,t.id as trans_id,stores.address1 as addr1,stores.address2 as addr2,stores.phone_number as str_phone,t.shipping_amount as shipping,stores.city_id as str_city_id")
                        ->from("shipping_info as s")
                        ->join("transaction as t", "t.id", "s.transaction_id")
                        ->join("product as d", "d.deal_id", "t.product_id")
                        ->join("city", "city.city_id", "s.city")
                        ->join("stores", "stores.store_id", "d.shop_id")
                        ->join("users as u", "u.user_id", "s.user_id")
                        ->where($condition)
                        ->orderby("shipping_id", "DESC")
                        ->get();
		return $result;
	}
	
	public function get_merchant_details($merchant = "")
	{
		$result = $this->db->from("users")->where(array("user_id" => $merchant))->get();
		return $result;
	}
	
	public function get_admin_list()
	{
		$result = $this->db->from("users")->where(array("user_type" => "1"))->get();
		return $result;
	}
	
	public function get_userflat_amount($userid)
	{
		$result = $this->db->select("flat_amount")->from("users")->where(array("user_id" => $userid))->get()->current();
		return $result;
	}
        
	public function get_product_payment_details($deal_id = "")
	{
		//$result = $this->db->query("select * from product  join category on category.category_id=product.category_id where deal_status = 1 and category.category_status = 1 and deal_id = $deal_id ");
	        $result = $this->db->select()->from("product")
                        ->join("category", "category.category_id", "product.category_id")
                        ->where(array("deal_status" => 1, "category.category_status" => 1,
                            "deal_id" => $deal_id))->get();
                return $result;

	}
        
        public function getMarchantNuban($marchant){
		$result = $this->db->from("users")->where(array("user_id" => $marchant))->get();
		return $result;     
        }

}
