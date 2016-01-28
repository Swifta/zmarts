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
                $this->in_merchant_number = "5353000000000000"; //merchant facility number
                $this->in_merchant_username = "";
                $this->in_merchant_password = "";
                $this->in_amount = intval("5000"); //kobo amount converted
                $this->in_billercode = "10009";
                $this->in_crn1 = "12345678";//customer reference 1
                $this->in_receipt_page_url = PATH."smeonline/confirmed.html";
                //end of smeonline parameters
                
                $this->add_a_token_url = "https://www.smeonline.zenithbank.com/payconnect/authv2.aspx";
                
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

            curl_setopt($ch, CURLOPT_URL,$this->add_a_token_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,
                        "postvar1=value1&postvar2=value2&postvar3=value3");

            // in real life you should use something like:
            // curl_setopt($ch, CURLOPT_POSTFIELDS, 
            //          http_build_query(array('postvar1' => 'value1')));

            // receive server response ...
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec ($ch);

            curl_close ($ch);

            // further processing ....
            
        }

}
