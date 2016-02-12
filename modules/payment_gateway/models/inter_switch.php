<?php defined('SYSPATH') or die('No direct script access.');
class Inter_switch_Model extends Model
{
	public function __construct()
	{	
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();	
		$this->UserID = $this->session->get("UserID");
		$this->UserName = $this->session->get("UserName");
		
			(strcmp($_SESSION['Club'], '1') == 0)?$this->deal_value_condition = 'product.deal_prime_value as deal_value':$this->deal_value_condition = 'product.deal_value';
		(strcmp($_SESSION['Club'], '1') == 0)?$this->deal_value_condition_field = 'product.deal_prime_value':$this->deal_value_condition_field = 'product.deal_value';
	}

	/** GET PRODUCT PAYMENT DETAILS  **/
	
	public function get_product_payment_details($deal_id = "")
	{
		//$result = $this->db->query("select *, $this->deal_value_condition from product  join category on category.category_id=product.category_id where deal_status = 1 and category.category_status = 1 and deal_id = $deal_id ");
	        $result = $this->db->select("*, $this->deal_value_condition")
                        ->from("product")
                        ->join("category","category.category_id","product.category_id")
                        ->where("deal_status = 1 and category.category_status = 1 and deal_id = ". $deal_id)
                        ->get();
                return $result;

	}

	/** INSERT TRANSACTION DETAILS TO TRANSACTION TABLE - CASH ON DELIVERY **/

	public function insert_cash_delivery_transaction_details($deal_id = "", $referral_amount = "", $qty = "",$type ="", $captured = "",$purchase_qty = "",$paymentType = "",$product_amount = "",$merchant_id = "",$product_size = "",$product_color = "",$tax_amount = "",$shipping_amount = "",$shipping_methods = "",$post="",$TRANSACTIONID="",$bulk_discount="",$free_gift="",$store_credit_id="",$store_credit_period="",$bulk_discount="",$free_gift="",$prime_customer=0,$bulk_discount1="",$total_bulk_discount="",$product_offer="",$gift_type="")
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
		$data = file_get_contents($url);
		$dat = explode(";",$data);
		if($dat[3] != "-"){
		        $ip_country_code=$dat[3];
		        $ip_country_name=$dat[4];
		        $ip_city_name=$dat[5];
		} else {
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
		$result = $this->db->insert("transaction",array("user_id" => $this->UserID , "product_id" => $deal_id, "firstname" => $this->UserName, "lastname" => $this->UserName, "order_date" => time(), "amount" => $product_amount, "payment_status" => 'Pending', "pending_reason" => 'None', "country_code" => COUNTRY_CODE, "currency_code" => CURRENCY_CODE,"transaction_id" => $TRANSACTIONID,"referral_amount" => $referral_amount,"transaction_type" => $paymentType, "quantity" => $qty, "type" => $type, "captured" => $captured,"transaction_date" =>time(),'deal_merchant_commission' => $commission_amount,"friend_gift_status" => $post->friend_gift,"product_size" => $product_size, "product_color"=>$product_color,"shipping_amount"=>$shipping_amount, "tax_amount"=>$tax_amount, "shipping_methods"=>$shipping_methods, "aramex_currencycode"=>$aramex_currencycode, "aramex_value"=>$aramex_value,"ip"=>$ip,"ip_country_code" => $ip_country_code, "ip_country_name" => $ip_country_name, "ip_city_name"=>$ip_city_name,"bulk_discount" =>$bulk_discount,"gift_id" =>$free_gift,"store_credit_id"=>$store_credit_id,"store_credit_period"=>$store_credit_period,"bulk_discount" =>$bulk_discount,"gift_id" =>$free_gift,"prime_customer" =>$prime_customer,"bulk_buy"=>$bulk_discount1,"total_discount"=>$total_bulk_discount));

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
         
		$purchase_count_total = $purchase_qty + $qty+$total_bulk_discount;
		$quantity=$qty+$total_bulk_discount;
	    $result_deal = $this->db->update("product", array("purchase_count" => $purchase_count_total), array("deal_id" => $deal_id)); 
		 //$this->db->query("update product_size set quantity = quantity - $quantity where deal_id = $deal_id and size_id = $product_size");
		 $this->db->update("product_size",array("quantity" => new Database_Expression("quantity -". $quantity)),array("deal_id" => $free_gift, "size_id" => $product_size));
		if($product_offer==2 )
		{
			//$this->db->query("update free_gift set purchased_quantity=purchased_quantity+1 where gift_id=$free_gift ");
                        $this->db->update("free_gift",array("purchased_quantity" => new Database_Expression("purchased_quantity+1")),array("gift_id" => $free_gift));
		}
		return $trans_ID;
		return $trans_ID;

	}

	/** GET PURCHASED USERID **/

	public function get_purchased_user_details()
	{
		$result = $this->db->from("users")->where(array("user_id" => $this->UserID))->get();
		return $result;
	}
	
	/** UPDATE AMOUNT TO REFERED USER **/

	public function update_referral_amount($ref_user_id = "")
	{
		$referral_amount = REFERRAL_AMOUNT;
		$this->db->update("users", array("user_referral_balance"=>new Database_Expression('user_referral_balance+ '.$referral_amount)),
                        array("user_id" => $ref_user_id));
		//$this->db->query("update users set user_referral_balance = user_referral_balance+$referral_amount where user_id = $ref_user_id");
		return;
	}

	/** GET DEALS DETAILS **/

	public function get_deals_details($deal_id = "")
	{
            $result = $this->db->select()->from("product")
                    ->join("stores", "stores.store_id", "product.shop_id")
                    ->join("category", "category.category_id", "product.category_id")
                    ->where(array("deal_status" => 1, "category.category_status" => 1, "store_status" => 1,
                        "product.deal_id" => $deal_id))
                    ->get();
		//$result = $this->db->query("select * from product  join stores on stores.store_id=product.shop_id join category on category.category_id=product.category_id where deal_status = 1 and category.category_status = 1 and  store_status = 1 and product.deal_id = $deal_id");
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

		$result = $this->db->select('*',$this->deal_value_condition,'shipping_info.adderss1 as saddr1','shipping_info.address2 as saddr2','users.phone_number','transaction.id as trans_id','transaction.transaction_id as transactionid','users.address1 as addr1','users.address2 as addr2','users.phone_number as str_phone','transaction.shipping_amount as shipping','transaction.prime_customer')->from("shipping_info")
                                ->where(array("shipping_type"=>1,"shipping_info.user_id" => $this->UserID,"transaction.id" =>$transaction,"transaction.product_id" =>$deal_id))
                                ->join("users","users.user_id","shipping_info.user_id")
                                ->join("transaction","transaction.id","shipping_info.transaction_id")
                                ->join("product","product.deal_id","transaction.product_id")
                                ->join("city","city.city_id","shipping_info.city")
                                ->orderby("shipping_id","DESC")
                                ->get();
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
		$condition = "AND t.type != 5";				
		if($type){
			$condition = " AND t.type = 5 ";
		}
		/*$result = $this->db->query("select *,$this->deal_value_condition, s.adderss1 as saddr1,s.address2 as saddr2,u.phone_number,t.id as trans_id,stores.address1 as addr1,stores.address2 as addr2,stores.phone_number as str_phone,t.shipping_amount as shipping,stores.city_id as str_city_id from shipping_info as s join transaction as t on t.id=s.transaction_id join product on product.deal_id=t.product_id join city on city.city_id=s.city join stores on stores.store_id = product.shop_id join users as u on u.user_id=s.user_id  where shipping_type = 1 and t.transaction_id ='$trans_id' and product.merchant_id ='$merchant_id' $condition order by shipping_id DESC "); */
		
			
		//$result = $this->db->query("select *,$this->deal_value_condition,s.adderss1 as saddr1,s.address2 as saddr2,u.phone_number,t.id as trans_id,stores.address1 as addr1,stores.address2 as addr2,stores.phone_number as str_phone,t.shipping_amount as shipping,stores.city_id as str_city_id,t.bulk_discount,t.store_credit_period  from product join transaction as t on product.deal_id=t.product_id join shipping_info as s on t.id=s.transaction_id  join city on city.city_id=s.city join stores on stores.store_id = product.shop_id join users as u on u.user_id=s.user_id  where shipping_type = 1 and t.transaction_id ='$trans_id' and product.merchant_id ='$merchant_id' $condition order by shipping_id DESC ");  
                $result = $this->db->select("*,$this->deal_value_condition,s.adderss1 as saddr1,s.address2 as saddr2,u.phone_number,t.id as trans_id,stores.address1 as addr1,stores.address2 as addr2,stores.phone_number as str_phone,t.shipping_amount as shipping,stores.city_id as str_city_id,t.bulk_discount,t.store_credit_period")
                                ->from("product")
                                ->join("transaction as t","product.deal_id","t.product_id")
                                ->join("shipping_info as s","t.id","s.transaction_id")
                                ->join("city","city.city_id","s.city")
                                ->join("stores","stores.store_id","product.shop_id")
                                ->join("users as u","u.user_id","s.user_id")
                                ->where("shipping_type = 1 and t.transaction_id =" .$trans_id . " and product.merchant_id =" .$merchant_id . " " .$condition)
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
	
	
	public function get_free_gift($gift_amount="",$merchant_id="",$deal_id="")
	{
	//$result=$this->db->query("select gift_offer from product join free_gift on free_gift.merchant_id=product.merchant_id where gift_Amount<= $gift_amount and free_gift.merchant_id=$merchant_id and gift_status=1 and product.deal_id=$deal_id order by gift_Amount DESC limit 1");
        $result=  $this->db->select("gift_offer")
                    ->from("product")
                    ->join("free_gift","free_gift.merchant_id","product.merchant_id")
                    ->where("gift_Amount<=" .$gift_amount . " and free_gift.merchant_id=" .$merchant_id . " and gift_status=1 and product.deal_id=" .$deal_id)
                    ->orderby("gift_Amount", "DESC")
                    ->limit(1)
                    ->get();
		/*$result=$this->db->select("gift_id")->from("free_gift")->where(array("gift_Amount <=" => $gift_amount))->orderby("gift_Amount","DESC")->limit(1,0)->get();*/
		
		return $result;
		
	}
	
	/**  TO GET THE PRODUCT GIFT TYPE **/
	public function get_product_gift_type($merchant_id="",$deal_id="",$gift_offer="")
	{
		$result=$this->db->select("gift_type")
		->join("product","product.merchant_id","free_gift.merchant_id")
		->from("free_gift")
		->where(array("free_gift.merchant_id" =>$merchant_id,"product.deal_id" => $deal_id,"free_gift.gift_id" => $gift_offer ))
		->get();
		return $result;
	} 
	public function get_free_gft_not_per_amount($merchant_id="",$deal_id="",$product_offer="")
	{
		$result=$this->db->select("gift_offer")/*->join("free_gift","free_gift.merchant_id","product.merchant_id")*/->from("product")->where(array("product.merchant_id" => $merchant_id,"product.deal_id" => $deal_id,"product.product_offer" => $product_offer/*,"free_gift.gift_status"=>1*/))->get();
		return $result;
	}

}
