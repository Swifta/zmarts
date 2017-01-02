<?php defined('SYSPATH') OR die('No direct access allowed.');
class dbTester_Controller extends Template_Controller
{
    public $template = "themes/template";
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	public function index(){
		echo 11111;
		/*$m = new Store_credit_Model();
		$m2 = new Creditcard_paypal_Model();
		$m->get_products_merchant_list("AEPz3x1fIoNQzLsT", "132");
		$r = $m2->get_usr_details();
		var_dump($r->current());*/
       //$m = new Products_Model();
		//$m->get_storecredit_shipping("115");
		//$m->get_user_instalment_limit();
		
		$email = "pkigozi@swifta.com";
		
		$domain = substr($email, strpos($email, '@')+1, strlen($email));
		
		
		
		
		exit;
	}

	
}

?>