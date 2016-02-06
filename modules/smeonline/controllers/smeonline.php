<?php defined('SYSPATH') OR die('No direct access allowed.');
class Smeonline_Controller extends Layout_Controller
{
	//const ALLOW_PRODUCTION = TRUE;
	public function __construct()
	{
		parent::__construct();
                
		$this->webpay = new Smeonline_Model;
                $this->currency = 566;
                
                //smeonline parameters bellow
                $this->auth_request_url = "https://www.smeonline.zenithbank.com/payconnect/auth.aspx";
                $this->in_merchant_number = "3S57T008"; //merchant facility number
                $this->in_merchant_username = "kotegbeye";
                $this->in_merchant_password = "Yb7Jf17j5S";
                $this->in_amount = intval("5000"); //kobo amount converted
                $this->in_billercode = "1000447";
                $this->in_crn1 = "12345678";//customer reference 1
                $this->in_receipt_page_url = PATH."smeonline/confirmed.html";
                //end of smeonline parameters
                
                $this->add_a_token_url = "https://www.smeonline.zenithbank.com/payconnect/authv2.aspx";
                $this->token_payment_page = "https://www.smeonline.zenithbank.com/payments/ZmartOnline.adddv";
                $this->token_lookup = "https://www.smeonline.zenithbank.com/payconnect/lookup.aspx";
                
                $this->cust_id = $this->session->get('UserEmail'); //$this->session->get('UserID');
                $this->cust_id_desc = $this->session->get('UserID');
                $this->cust_name = $this->session->get('UserName');
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
        
        public function init(){
            $ch = curl_init();
            $params = array();
            $params['in_merchant_number'] = $this->in_merchant_number;
            $params['in_merchant_username'] = $this->in_merchant_username;
            $params['in_merchant_password'] = $this->in_merchant_password;
            $params['in_crn1_name'] = "Transaction ID";
            $params['in_crn2_name'] = "Total Transaction Amount (Naira)";
            $params['in_crn3_name'] = "Monthly Recurring Amount (Naira)";
            $params['in_crn1'] = "TRXID".  rand(100, 999); //this is the transaction id
            $params['in_crn2'] = 6000;
            $params['in_crn3'] = 90;           
            $params['in_receipt_page_url'] = $this->in_receipt_page_url;
            $params['in_billercode'] = $this->in_billercode;
            
            curl_setopt($ch, CURLOPT_URL,$this->add_a_token_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 
                      http_build_query($params));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec ($ch);

            curl_close ($ch);
            if($this->startsWith($response, "out_request_resp_code=0")){
                $slash_space = explode("\n", $response);
                $slash_equals = explode("=", $slash_space[1]);
                $token = $slash_equals[1];
                url::redirect($this->token_payment_page."?in_sessionid=".$token);
            }
            else{
                //redirect user to SMEOnline Platform is down
                var_dump($response);
            }
            die;
        }

        public function confirm(){
            $out_request_resp_code = $_REQUEST['out_request_resp_code'];
            $out_errortext = @$_REQUEST['out_errortext'];
            $out_lookup_sessionid = $_REQUEST['out_lookup_sessionid'];
            echo $out_request_resp_code." : ".$out_errortext." : ".$out_lookup_sessionid;
            //a86e5c89-4b4c-4c10-b6ea-31de4ae77261
            $this->getTokenizedCard($out_lookup_sessionid);
            die;
        }
        
        private function getTokenizedCard($out_lookup_sessionid=""){
            $ch = curl_init();
            $params = array();
            $params['in_merchant_number'] = $this->in_merchant_number;
            $params['in_merchant_username'] = $this->in_merchant_username;
            $params['in_merchant_password'] = $this->in_merchant_password;
            $params['in_token'] = urlencode($out_lookup_sessionid);
            
            curl_setopt($ch, CURLOPT_URL,$this->token_lookup);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 
                      http_build_query($params));

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec ($ch);

            curl_close ($ch);
            var_dump($response);
        }
        
        
        private function startsWith($haystack, $needle) {
            // search backwards starting from haystack length characters from the end
            return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
        }
        private function endsWith($haystack, $needle) {
            // search forward starting from end minus needle length characters
            return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
        }

}
