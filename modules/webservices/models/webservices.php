<?php defined('SYSPATH') or die('No direct script access.');
class Webservices_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db = new Database();
	}
        
        public function get_details($admin, $key, $transaction_id, $amount){
            $ret = array();
            $ret['success'] = false;
            $ret['msg'] = "Invalid User Credentials/Priviledge";
            $product_breakdown = array();
            $merchant_breakdown = array();
            //$result = $this->db->query("SELECT * FROM users WHERE email='".$admin."' AND password=md5('".$key."') AND user_type=7");
            $result = $this->db->select()->from("users")
                    ->where(array("email"=>$admin, "password"=>md5($key), "user_type"=>7))
                    ->get();
//var_dump($result);
            if(count($result) == 1){
	         $result = $this->db->from("transaction")
                            ->where(array("transaction.transaction_id"=>$transaction_id))
                            ->join("product","product.deal_id","transaction.product_id")
                            ->join("users","users.user_id","product.merchant_id")
                            ->join("city","city.city_id","users.city_id")
                            ->get();
                if(count($result) > 0){
                    $total_amount = 0;
                    $loop = 0;
                    foreach($result as $row){
                        if($row->approve_status != 1){
                            $ret['success'] = false;
                            $ret['msg'] = "User Account Blocked or Suspended";
                            break;
                        }

                        $data['fullname'] = $row->firstname;
                        $data['address'] = $row->address1.", ".$row->address2.". ".$row->city_name;
                        $data['telephone'] = $row->phone_number;
                        $data['email'] = $row->email;
                        $data['currency_code'] = $row->currency_code;
                        $data['transaction_date'] = $row->transaction_date;
                        $data['transaction_type'] = $row->transaction_type;

                        $product = array();
                        $product['transaction_id'] = $transaction_id;
                        $product['product_id'] = $row->product_id;
                        $product['product_descr'] = $row->deal_title;
                        $product['quantity'] = $row->quantity;
                        $product['merchant_id'] = $row->merchant_id;
                        $product['shop_id'] = $row->shop_id;
                        $product['payment_status'] = $row->payment_status;
                        $product['amount'] = $row->amount;
                        $product['merchant_account'] = $row->nuban;

                        $product_breakdown[$loop] = $product;

                        $total_amount += $row->amount;
                        //var_dump($result);
                        $loop++;
                    }
                    if($total_amount == $amount){
                        //break merchant pay
                        $looper = 0;
                        $merchant_breakdown_tmp = array();
                        foreach ($product_breakdown as $value){
                            $found = false;
                            $id_found = 0;
                            $amount_to_add = 0;
                            foreach($merchant_breakdown_tmp as $v){
                                if($v->isSame($value['merchant_id'],$value['shop_id'])){
                                    $found= true;
                                    $amount_to_add = $value['amount'];
                                    break;
                                }
                                else{
                                    $id_found++;
                                }
                            }
                            if($found){
                                $merchant_breakdown_tmp[$id_found]->addPay($amount_to_add);
                            }
                            else{
                                $merchant_breakdown_tmp[$looper] = new Merchant($value['merchant_id'], $value['shop_id'],
                                        $value['merchant_account'], $value['amount']);
                                $looper++;
                            }
                        }
                        $y = 0;
                        foreach($merchant_breakdown_tmp as $value){
                            $merchant_breakdown[$y] = $value->getArray();
                            $y++;
                        }
                        $ret['success'] = true;
                        $ret['msg'] = "OK";
                        $data['total_amount'] = $total_amount;
                        $data['product_breakdown'] = $product_breakdown;
                        $data['merchant_breakdown'] = $merchant_breakdown;
                        $ret['data'] = $data;
                    }
                    else{
                        $ret['msg'] = "Transaction Not Found [INVALID AMOUNT]";
                    }
                }
                else{
                    $ret['msg'] = "No Such Transaction Found [INVALID]";
                }
            }
            return json_encode($ret);
        }
        
        public function pay($admin = "", $key = "", $transaction_id = "", $amount = "", $transaction_description = ""){
            $ret = array();
            $ret['status'] = false;
            $ret['description'] = "Authentication Failed";
            $ret['data'] = array();
            //$result = $this->db->query("SELECT * FROM users WHERE email='".$admin."' AND password=md5('".$key."') AND user_type=7");
            $result = $this->db->select()->from("users")
                    ->where(array("email"=>$admin, "password"=>md5($key), "user_type"=>7))
                    ->get();
            if(count($result) == 1){
	         $result = $this->db->from("transaction")
                            ->where(array("transaction.transaction_id"=>$transaction_id))
                            ->join("product","product.deal_id","transaction.product_id")
                            ->join("users","users.user_id","product.merchant_id")
                            ->join("city","city.city_id","users.city_id")
                            ->get();
                if(count($result) > 0){
                    $total_amount = 0;
                    $payment_status = "";
                    foreach($result as $row){
                        $total_amount += $row->amount;
                        $payment_status = $row->payment_status;
                    }
                    if($amount == $total_amount){
                        if($payment_status == "Success"){
                            $ret['description'] = "Internal Error: Cannot Complete Payment Request or Duplicate Payment";
                        }
                        else{
                            $result = $this->db->update("transaction", array("payment_status" => "Success", 
                                "pending_reason" => $transaction_description), 
                                    array("transaction_id"=>$transaction_id));
                            if(count($result) > 0){
                                $ret['description'] = "Payment Successful";
                                $ret['status'] = true;
                            }
                            else{
                                $ret['description'] = "Internal Error: Cannot Complete Payment Request or Duplicate Payment";
                            }
                        }
                        //var_dump($result);
                    }
                    else{
                        $ret['description'] = "Amount Paid not Whats on the Invoice";
                    }
                   
                }
                else{
                    $ret['description'] = "No Such Transaction Found [INVALID]";
                }
            }
            return json_encode($ret);            
        }
}


class Merchant{
    private $merchant_id;
    private $shop_id;
    private $nuban;
    private $pay = 0;
    
    public function __construct($m, $s, $n, $a) {
        $this->merchant_id = $m;
        $this->shop_id = $s;
        $this->nuban = $n;
        $this->pay = $a;
    }
    
    public function isSame($m, $s){
        if($this->merchant_id == $m && $this->shop_id == $s){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function addPay($am){
        $this->pay += $am;
    }
    
    public function getArray(){
        $ret = array();
        $ret['merchant_id'] = $this->merchant_id;
        $ret['shop_id'] = $this->shop_id;
        $ret['pay'] = $this->pay;
        $ret['nuban'] = $this->nuban;
        return $ret;
    }
    
}