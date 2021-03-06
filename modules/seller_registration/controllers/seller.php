<?php defined('SYSPATH') OR die('No direct access allowed.');
class Seller_Controller extends Layout_Controller {

	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();
			$this->seller = new Seller_Model();
	        $this->UserID = $this->session->get("UserID");
	    /*if(LANGUAGE == "french" ){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/french_style.css',PATH.'themes/'.THEME_NAME.'/css/fr_multi_style.css')); 
		} else if(LANGUAGE == "spanish") {
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/spanish_style.css',PATH.'themes/'.THEME_NAME.'/css/sp_multi_style.css'));
		}
		else{
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
		}*/
		if(isset($_SESSION['select_lang'])){
			if($_SESSION['select_lang']==2){
				$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/ha_style.css',PATH.'themes/'.THEME_NAME.'/css/ha_multi_style.css'));
			}else if($_SESSION['select_lang']==3){
				$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/ig_style.css',PATH.'themes/'.THEME_NAME.'/css/ig_multi_style.css'));
			}else if($_SESSION['select_lang']==4){
				$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/yo_style.css',PATH.'themes/'.THEME_NAME.'/css/yo_multi_style.css'));
			}else{
				$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
			}
		}else{
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
		}
	        $this->is_seller = 1;
	        $this->seller_signup = 0;
	}
	
        
        public function merchant_account_open_complete(){
            $this->template->title = "Merchant Account Opening Completed";
            $this->template->content = new View("themes/".THEME_NAME."/seller/seller_account_open_completed");   
        }
        
	public function seller_signup_zenith()
	{
			
		  

                     
            if($_POST){
				
          		
				$userPost = utf8::clean($this->input->post());
		 			 $testPost = Validation::factory($userPost)
					 ->add_rules('f_name', 'required')
					 ->add_rules('l_name', 'required')
					 ->add_rules('email', 'required','valid::email')
					 ->add_rules('phone', 'required', array($this, 'validphone'), array($this, 'z_validphone'), 'chars[0-9-+(). ]')
					 ->add_rules('addr', 'required')
					 ->add_rules('gender', 'required',  array($this, 'no_minus_99'))
					 ->add_rules('branch_no', 'required', array($this, 'no_minus_99'))
					 ->add_rules('class_code', 'required', array($this, 'no_minus_99'));
					
		  
		  if($testPost->validate()){
			   $arg = array();
         	   $arg['userName'] = ZENITH_TEST_USER;
         	   $arg['Pwd'] = ZENITH_TEST_PASS;
			   $soap = new SoapClient(ZENITH_TEST_ENDPOINT, array('trace' => 1));
			  
		 
				
				
                $f_name = strip_tags(addslashes($_REQUEST['f_name']));
                $l_name = strip_tags(addslashes($_REQUEST['l_name']));
                $email = strip_tags(addslashes($_REQUEST['email']));
                $phone = strip_tags(addslashes($_REQUEST['phone']));
                $addr = strip_tags(addslashes($_REQUEST['addr']));
                $gender = strip_tags(addslashes($_REQUEST['gender']));
                $branch_no = strip_tags(addslashes($_REQUEST['branch_no']));
                $class_code = strip_tags(addslashes($_REQUEST['class_code']));
                
                $arg['FirstName'] = $f_name;
                $arg['LastName'] = $l_name;
                $arg['EmailAddress'] = $email;
                $arg['MobilePhoneNo'] = $phone;
                $arg['AddressLine'] = $addr;
                $arg['Sex'] = $gender;
                $arg['Branchno'] = $branch_no;
                $arg['ClassCode'] = $class_code;
                //var_dump($arg);
                $fun_resp = $soap->CreateAccount($arg);
                if(!isset($fun_resp->CreateAccountResult->errorMessage)){
                    $this->session->set("alert_msg", "<p style='text-align:center;clear:both; width:100%;margin:8px auto;color:green'>"
                            . "Your bank account creation has been initiated. Contact your chosen branch to complete the process!</p>");
                    common::message(1, "Your bank account as been opened. Wait for bank to get intouch !");
                    url::redirect(PATH."merchant-account-open-complete.html");                    
                }
                else{
                    //error occured
                    $this->session->set("alert_msg", "<p style='text-align:center;clear:both; width:100%;margin:8px auto;color:red'>"
                            . "Account opening failed. Please, choose a different account class and try again !</p>");
                    common::message(-1, "Something went wrong when trying to complete your request. Please try again.");
                    url::redirect(PATH."merchant-signup-account-opening.html");  
                }
                //var_dump($fun_resp);
            
			
			
			
			 
			
			}else{
				$this->form_error = error::_error($testPost->errors());	
			}
			
			}
            $this->branch_options= "";
            $this->class_code_options= "";
			
			/*
				Disabled the code below to decouple branch and class loading from page loading
				for better error api call management.
				@Live
			*/

              /*try{
                $fun_resp_branch = @$soap->getBranchList($arg);
                $fun_resp_class = @$soap->getAccountClass($arg);
                if($fun_resp_branch == ""|| $fun_resp_class == ""){
                    $this->session->set("alert_msg", "<p style='text-align:center;clear:both; width:100%;margin:8px auto;color:red'>"
                            . "Something went wrong when trying to load this service. Please try again.</p>");
                    common::message(-1, "Something went wrong when trying to load this service. Please try again.");
                    //url::redirect(PATH."merchant-account-open-complete.html");                    
                }
                foreach($fun_resp_branch->getBranchListResult->Branches as $value){
                    $this->branch_options.= '<option value="'.@$value->BranchNo.'">'.@$value->BranchName.'</option>';
                }
                foreach($fun_resp_class->getAccountClassResult->ClassCode as $value){
                    $this->class_code_options.= '<option value="'.@$value->ClassCodes.'">'.@$value->ClassName.'</option>';
                }
              }
              catch(Exception $e){
                $this->session->set("alert_msg", "<p style='text-align:center;clear:both; width:100%;margin:8px auto;color:red'>"
                        . "Something went wrong when trying to load this service. Please try again.</p>");
		common::message(-1, "Something went wrong when trying to load this service. Please try again.");
		//url::redirect(PATH."merchant-signup-step2.html");
              }*/

		$this->template->title = $this->Lang['MER_SIGN_1'];
		
		
		$this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_zenith");
		
	}
        
        
	/** SELLER  SIGNUP STEP 1 **/

	public function seller_signup_step1()
	{
		$this->template->title = $this->Lang['MER_SIGN_1'];
		$this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_step1");
		
	}

        public function merchant_completed(){
                $this->template->title = "Merchant Sign Up Complete";
                $this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_completed");
				//common::message(1, "Signup complete. Thanks you!");
        }
	/** SELLER  SIGNUP STEP 2 **/

	public function seller_signup_step2()
	{
			if($_POST){ 
			//$_POST['nuban'] ='9999999999';
			$this->userPost = utf8::clean($this->input->post());
                        //var_dump($this->userPost); die;
			$post = new Validation(utf8::clean($_POST));
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
						
						->add_rules('firstname', 'required')
						->add_rules('mr_mobile', 'required',array($this, 'validphone'), array($this, 'z_validphone'), 'chars[0-9-+(). ]')
						->add_rules('mr_address1', 'required')
						->add_rules('lastname', 'required')
						->add_rules('nuban', 'required')
						->add_rules('sector', 'required')
						->add_rules('subsector', 'required')
						->add_rules('email', 'required','valid::email',array($this, 'email_available'))
						->add_rules('t_n_c', 'required')
						->add_rules('free', array($this, 'validate_shipping'))
						->add_rules('flat', array($this, 'validate_shipping'))
						->add_rules('product', array($this, 'validate_shipping'))
						->add_rules('quantity', array($this, 'validate_shipping'));
						
						
						//->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');
						if(isset($_POST['sector']) && $post->sector!=0)
						{
							$post->add_rules('subsector', 'required');
						}
						
						if(isset($_FILES['image'])){
							$post->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');
						}
						
						$shipping = false;
						if(!$shipping && isset($_POST['free']))
							$shipping = true;
						if(!$shipping && isset($_POST['flat']))
							$shipping = true;
						if(!$shipping && isset($_POST['product']))
							$shipping = true;
						if(!$shipping && isset($_POST['quantity']))
							$shipping = true;
							
						
							
						
						
						
						
                                   
					if($post->validate())
					{
						
						
					
					        					$free = "0";
                                                if(isset($post->free)){
                                                $free = $post->free;
                                                }
                                                $flat = "0";
                                                if(isset($post->flat)){
                                                $flat = $post->flat;
                                                }
                                                $product = "0";
                                                if(isset($post->product)){
                                                $product = $post->product;
                                                }
                                                $quantity = "0";
                                                if(isset($post->quantity)){
                                                $quantity = $post->quantity;
                                                }
                                                $aramex = "0";
                                                if(isset($post->aramex)){
                                                $aramex = $post->aramex;
                                                }
                                                
						 $this->session->set(array("firstname" => $post->firstname,"lastname" => $post->lastname, 
                                                     'mraddress1' => $post->mr_address1, 'mraddress2' => $post->mr_address2, 
                                                     'mphone_number' => $post->mr_mobile,"memail"=>$post->email,
                                                     "nuban_session" => $post->nuban,"free" => $free,"flat" => $flat, 
                                                     "product" => $product,'quantity' => $quantity, 'aramex' => $aramex,
                                                     "sector"=>$post->sector,"sub_sector"=>$post->subsector));
													 
                                                 
							common::message(1, $this->Lang['SUCC_COM_STEP2']);
                                                        //echo "Got here"; die;
							url::redirect(PATH."merchant-signup-step3.html");
							
					} else {
							$this->form_error = error::_error($post->errors());	
							
					}
			}
		        $this->all_setting_module = $this->seller->get_setting_module_list();
		        $this->sector_list=$this->seller->get_sector_list();
		        $this->sub_sector_list=$this->seller->get_all_sub_sectors();
		        foreach($this->all_setting_module as $setting){
                                $this->free_shipping_setting = $setting->free_shipping;
                                $this->flat_shipping_setting = $setting->flat_shipping;
                                $this->per_product_setting = $setting->per_product;
                                $this->per_quantity_setting = $setting->per_quantity;
                                $this->aramex_setting = $setting->aramex;
		        }
				
                        //var_dump($this->sub_sector_list); die;	
						
		$this->template->title = $this->Lang['MER_SIGN_2'];
		$this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_step2");
		
	}
	/** SELLER  SIGNUP STEP 3 **/
	public function seller_signup_step4()
	{
		if(($this->session->get('firstname') != "") && ($this->session->get('memail') != "") && ($this->session->get('payment_acc') != "")){
			if($_POST){ 
				$this->userPost = utf8::clean($this->input->post());
				$post = new Validation(utf8::clean($_POST));
				$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('sector', 'required');
							if($post->validate())
					{
						
						$this->session->set(array("sector"=>$post->sector));
							common::message(1, $this->Lang['SUCC_COM_STEP3']);
							url::redirect(PATH."merchant-signup-step3.html");
						
					}else {
							$this->form_error = error::_error($post->errors());	
					}
			
			
		}
		$this->sector_list=$this->seller->get_sector_list();
		$this->template->title = $this->Lang['MER_SIGN_3'];
		
		$this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_step4");
		
		
	}
	else{
			 common::message(1, $this->Lang['PLZ_CORR_FILL']);
			 url::redirect(PATH."merchant-signup-step2.html");
		}
		
			
		
	}
	
	/** SELLER  SIGNUP STEP 4 **/

	public function seller_signup_step3($seller_id = "", $async = FALSE)
	{
		
		
	  	//$this->session->set('nuban_session', '9999999999');
		if(($this->session->get('firstname') != "") && ($this->session->get('memail') != "") && ($this->session->get('nuban_session') != "") ){
			
				
				if($_POST){ 
				
				
				$this->userPost = utf8::clean($this->input->post());
				$post = new Validation(utf8::clean($_POST));
                                //htmlspecialchars($_POST['idBox'], ENT_QUOTES, "UTF-8")
				$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('city', 'required')
							->add_rules('mobile', 'required', array($this, 'validphone'), array($this, 'z_validphone'), 'chars[0-9-+(). ]')
							->add_rules('address1', 'required')
							//->add_rules('address2', 'required')
							->add_rules('storename', 'required',array($this,'check_store_exist'))
							//->add_rules('zipcode', 'required', 'chars[0-9.]')
							//->add_rules('website','required'/*,'valid::url'*/)
							//->add_rules('latitude', 'required','chars[0-9.-]')
							//->add_rules('longitude', 'required','chars[0-9.-]')
							//->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]')
							//->add_rules('store_email_id', 'required',array($this,'check_store_admin'),array($this,'check_store_admin_with_supplier'))
							//->add_rules('username', 'required');
							;
							if(isset($_FILES['image']))
								$post->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');
								
							if(isset($_POST['store_email_id'])){
								$post->add_rules('store_email_id',array($this,'check_store_admin'),array($this,'check_store_admin_with_supplier'));
							}
							
							//if(isset($_POST['website'])){
							//	$post->add_rules('website','valid::url');
							//}
							
							if(isset($_POST['zipcode'])){
			
								$post->add_rules('zipcode', 'chars[0-9.]');
							}
							
							if(isset($_POST[''])){
							}
						if($post->validate()){    
							
							
							
							
							$store_key = text::random($type = 'alnum', $length = 8);
							$pswd = text::random($type = 'alnum', $length = 8);
							$store_admin_password = text::random($type = 'alnum', $length = 10);
							$storename = strip_tags(addslashes($this->input->post('storename')));
							$status = $this->seller->add_merchant(arr::to_object($this->userPost),$store_key,$pswd,$store_admin_password); 
							//DELETE
							//$status = array("email"=>"livetest172@gmail.com", "image" =>"77_26");
							
			  
							  
								if($status){
									
									
									 
									//$to=($status['email'])?$status['email']:CONTACT_EMAIL;
										$from = CONTACT_EMAIL;
										$this->country_list = $this->seller->getcountrylist();
										$country_name = "";
										$city_name = ""; 
										foreach($this->country_list as $count){
												if($count->country_id == $post->country ){
                                                                                                        $city_list = $this->seller->get_city_by_country($post->country);
                                                                                                        foreach($city_list as $cit){
                                                                                                            if($cit->city_id == $post->city){
//                                                                                                                $city_name = $city_list->current()->city_name;
                                                                                                                $city_name = $cit->city_name;
                                                                                                            }
                                                                                                        }
                                                                                                        $country_name = $count->country_name;
												}
										} 
										$modules_name = 'stores';
										if($this->session->get("sub_sector")!='')
										{
											$subsector = $this->session->get("sub_sector");
											$sector_details = $this->seller->get_subsector_name($subsector);
											$modules_name = strtolower($sector_details[0]->sector_name);	
										}


										$main_routes = DOCROOT.'modules/'.$modules_name.'/config/main_routes.php';
										$f = fopen($main_routes, "r");

										$file = DOCROOT.'modules/'.$modules_name.'/config/routes.php';
										$fp = fopen($file, "a");
							
										$i = 1;	
										while ( $line = fgets($f, 1000) ) {
											$change_line = str_replace("CHANGE",url::title($storename),$line);
											fputs($fp, $change_line);	
										}

										fclose($f);
										fclose($fp);     
										/* $file = DOCROOT.'modules/stores/config/routes.php';
										 $str = '$config[\''.url::title($post->storename).'\'] ="/stores/stores_home_page/'.url::title($post->storename).'";';
										 
										$str1 = '$config[\''.url::title($storename).'/products.html\'] = "'.$modules_name.'"/stores/product_list/'.url::title($storename).'";';										
										$str2 = '$config[\''.url::title($storename).'/today-deals.html\'] = "'.$modules_name.'"/stores/deal_list/'.url::title($storename).'";';
										$str3 = '$config[\''.url::title($storename).'/auction.html\'] = "'.$modules_name.'"/stores/auction_list/'.url::title($storename).'";';
										
										$str11 = '$config[\''.url::title($storename).'/products/c/(.*)/(.*).html\'] = "'.$modules_name.'"/stores/product_list/'.url::title($storename).'/$1/$2";';
										$str12 = '$config[\''.url::title($storename).'/deal/c/(.*)/(.*).html\'] = "'.$modules_name.'"/stores/deal_list/'.url::title($storename).'/$1/$2";';
										$str13 = '$config[\''.url::title($storename).'/auction/c/(.*)/(.*).html\'] = "'.$modules_name.'"/stores/auction_list/'.url::title($storename).'/$1/$2";';
										
										$f = fopen($file, 'a');
										fputs($f, '');
										fputs($f, PHP_EOL.$str);
										
										fputs($f, PHP_EOL.$str1);
										fputs($f, PHP_EOL.$str2);
										fputs($f, PHP_EOL.$str3);
										fputs($f, PHP_EOL.$str11);
										fputs($f, PHP_EOL.$str12);
										fputs($f, PHP_EOL.$str13);
										
										fclose($f);   */
										/** for send mail to the admin  **/
										
										$subject=$this->Lang['NEW_MERCHANT_ADD']." on ".SITENAME;
										$admin_message = "<table>
										<tr><th colspan=\"3\">New Merchant Just Registered on <a title = \"".SITENAME."\" href=\"".PATH."\"> ".SITENAME."!</a></th></tr>
										<tr><td colspan=\"3\">Below are the merchant details: </td></tr>
										<!--<b>".$this->Lang['NEW_MERCHANT_ADD']." on ".SITENAME."  </b>-->
										<tr>
										<td align=\"left\">".$this->Lang['EMAIL1']." : </td>
										<td>".$this->session->get('memail')."</td> 
										<td align=\"left\">".$this->Lang['STORE_NAME']." : </td>
										<td> ".$post->storename."</td>
										<td>&nbsp;</td>
										
										</tr>
										<tr>
										<td align=\"left\">Account Number   : </td>
										<td> ".$this->session->get("merchant_reg_nuban")." </td>
										<td>&nbsp;</td>
										
										</tr>
										
										<tr>
										<td align=\"left\">".$this->Lang['SHOP_ADDR']."   : </td>
										<td> ".$post->address1.",".$post->address2." </td>
										<td align=\"left\">State    : </td>
										<td> ".$city_name." </td>
										<td align=\"left\">".$this->Lang['COUNTRY']."    : </td>
										<td> ".$country_name." </td>
										</tr>
										
										
										<tr>
										<td align=\"left\">".$this->Lang['ZIP_CODE']."   : </td>
										<td> ".$post->zipcode." </td>
										<td align=\"left\">".$this->Lang['SHOP_WEB']."   : </td>
										<td> ".$post->website." </td>
										<td>&nbsp;</td>
										
										</tr>
										
										<tr>
										<td align=\"left\" colspan=\"3\">".$this->Lang['STORE_URL']."  : </td>
										<td> <a href=".PATH.url::title($post->storename).">".PATH.url::title($post->storename)."</a>
										 </td>
										  </tr></table>									 ";
										 ?><?php 
$admin_message	= '									 

<table>										 
  <tr>
    <td colspan="2" style="font-family: Arial, Helvetica, sans-serif bold 12px;color:#666;">A new merchant just registered on <a style = "text-decoration: none; color: #666;" title = "SITE" href="<?php echo PATH ?>"> '.SITENAME.'</a> and awaiting approval.</td>
  </tr>
  <tr>
    <td colspan="2" style="font-family: Arial, Helvetica, sans-serif normal 12px ;color:#666;">Below are the details: </td>
  </tr>
 
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ;color:#666;">Email : </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666;padding-left: 15px; "><a style="color: #666; text-decoration: none;">'.$this->session->get('memail').'</a></td>
    </tr><tr>
    
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ; color:#666;">Store Name: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; ">'. $post->storename.'</td>
    
  </tr>
  
    </tr>
    <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ; color:#666;">Account Number   : </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; "> '.$this->session->get("merchant_reg_nuban").' </td>
    </tr>
    
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ;color:#666;" >Addres 1: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; " >'.$post->address1.'</td>
     </tr>
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ;color:#666;">Addres 2: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; ">'.$post->address2.'</td>
     </tr>
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ;color:#666;">State: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; ">'.$city_name.'</td>
     </tr>
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ; color:#666;">Country: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; ">'. $country_name.'</td>
  </tr>
  <tr>
    <td style="font-family: Arial, Helvetica, sans-serif bold 12px ;color:#666;">Zip code: </td>
    <td style="font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; ">'.$post->zipcode.'</td>
    </tr>
  <tr>
    <td style=" font-family: Arial, Helvetica, sans-serif bold 12px ; color:#666;">Store website: </td>
    <td style=" font-family: Arial, Helvetica, sans-serif normal 12px ; color:#666; padding-left: 15px; "> <a style="color: #666; text-decoration: none;">'. $post->website.'</a></td>
    </tr>
  <tr>
   
  </tr>
  <tr>
    <td style=" font-family: Arial,  sans-serif bold 12px ; color:#666;">Store url: </td>
    <td style=" font-family: Arial,  normal 12px ; color:#666; padding-left: 15px; " ><a href="'.PATH.url::title($post->storename).'" style="text-decoration:none; color: #666; ">'.PATH.url::title($post->storename).'</a></td>
  </tr>
  
</table';?>

<?php

								
										 
										

										/** for send mail to the merchant  **/
										$merchant_subject = $this->Lang['MERCHANT_ADD_SUC'];
										
										/*
											Rush fix.
											@Live
										*/
										
										/*$merchant_message = "<p><b>".$this->Lang['MERCHANT_ADD_SUC']." </b> </p><p></p><p> ".$this->Lang['YOR_EMAIL']." : ".$this->session->get('memail')."</p> <p>".$this->Lang['YOUR_PASS'].": ".$pswd."</p> <p>".$this->Lang['YOUR_SHOP_NAM']." : ".$post->storename."<p/><p>".$this->Lang['SHOP_ADDR']."   : ".$post->address1.",".$post->address2." <p/><p>".$this->Lang['CITY']."   : ".$city_name." <p/><p>".$this->Lang['COUNTRY']."   : ".$country_name." <p/><p>".$this->Lang['ZIP_CODE']."   : ".$post->zipcode." <p/><p>".$this->Lang['SHOP_WEB']."  : ".$post->website." <p/><p>".$this->Lang['STORE_URL']." : <a href=".PATH.url::title($post->storename)."/>".PATH.url::title($post->storename)."/ </p>";*/
										
										$merchant_message = "<p><b> Congratulations! </b> </p><p> Your Merchant account on <a style=\"color:#666; text-decoration: none;\" href=\"".PATH."\">".SITENAME."</a> has been successfully created!</p><p> Please await approval which will contain your login and setup details.</p><p></p><a style=\"color:#666; text-decoration: none;\" href=\"".PATH."\">".SITENAME."</a>";
										
										$merchant_message = "<p><b> Congratulations! </b> </p><p>You have successfully registered your merchant account.You will receive an email shortly containing approval of your registration as well as your access details on the platform.</p>
										<p>Merchant Account Email: <a style=\"color: #666; text-decoration: none;\">".$this->session->get('memail')."</a></p>";

										
										$this->adminname = $this->Lang['ADMIN'];
										$this->admin_message = $admin_message;
										
										$this->name = ucfirst($this->session->get('firstname'));//." ".ucfirst($this->session->get('lastname'));
										$this->merchant_message = $merchant_message;
										
										$adminmessage = new View("themes/".THEME_NAME."/merchant_signup_admin_mail_template");
										$merchantmessage = new View("themes/".THEME_NAME."/merchant_signup_mail_template");
										
										
		
										
										
										
                                                                                //echo "admin subject: ".$subject." and merchant_subject:".$merchant_subject."<br />";
                                                                                //echo "admin msg: ".$admin_message." and merchant_msg:".$merchant_message."<br />";
                                                                                //die;
										//echo $adminmessage; echo "<br> <br> <br>"; echo $merchantmessage; exit;
										
										/*
										
										if($_FILES['image']['name']){
											$filename = upload::save('image'); 						
											$IMG_NAME = $status['image'].'.png';	
											common::image($filename, STORE_DETAIL_WIDTH, STORE_DETAIL_HEIGHT, DOCROOT.'images/merchant/600_370/'.$IMG_NAME);
											common::image($filename, STORE_LIST_WIDTH, STORE_LIST_HEIGHT, DOCROOT.'images/merchant/290_215/'.$IMG_NAME);
											unlink($filename);
										}

										*/
                                                                                
                                                                                
						if($_FILES['image']['name']){
							$filename =$_FILES["image"]["name"];
							$uploadedfile = $_FILES['image']['tmp_name'];
							
							$extension = $this->getExtension($filename);
							$extension = strtolower($extension);
							
							if (!(($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))){
								if($extension=="jpg" || $extension=="jpeg" ){
									$uploadedfile = $_FILES["image"]['tmp_name'];
									$src = $this->LoadJpeg($uploadedfile);
								}else if($extension=="png"){
									$uploadedfile = $_FILES["image"]['tmp_name'];
									$src = $this->LoadPNG($uploadedfile);
								}else{
									$src = $this->LoadGif($uploadedfile);
								}
								
								list($width,$height)=getimagesize($uploadedfile);
								
								$max_width0=244;
								$max_height0=150;
								
								$width0 = $width;
								$height0 = $height;				
								if ($height0 > $max_height0) {
									$width0 = ($max_height0 / $height0) * $width0;
									$height0 = $max_height0;
								}
								if ($width0 > $max_width0) {
									$height0 = ($max_width0 / $width0) * $height0;
									$width0 = $max_width0;
								}
								$tmp0=imagecreatetruecolor($width0,$height0);
								
								$white = imagecolorallocate($tmp0, 255, 255, 255);
								imagefill($tmp0, 0, 0, $white);
								
								$max_width1=210;
								$max_height1=75;
								
								$width1 = $width;
								$height1 = $height;				
								if ($height1 > $max_height1) {
									$width1 = ($max_height1 / $height1) * $width1;
									$height1 = $max_height1;
								}
								if ($width1 > $max_width1) {
									$height1 = ($max_width1 / $width1) * $height1;
									$width1 = $max_width1;
								}
								//$IMG_NAME = $merchantid."_".$storeid.'.png';
                                                                $IMG_NAME = $status['image'].'.png';
								$tmp1=imagecreatetruecolor($width1,$height1);
								
								$white = imagecolorallocate($tmp1, 255, 255, 255);
								imagefill($tmp1, 0, 0, $white);
								
								imagecopyresampled($tmp0,$src,0,0,0,0,$width0,$height0,$width,$height);
								imagecopyresampled($tmp1,$src,0,0,0,0,$width1,$height1,$width,$height);

								$filename0 = DOCROOT."images/merchant/600_370/". $IMG_NAME;
								$filename1 = DOCROOT."images/merchant/290_215/". $IMG_NAME;

								imagejpeg($tmp0,$filename0,100,777);
								imagejpeg($tmp1,$filename1,100,777);

								imagedestroy($src);
								imagedestroy($tmp0);
								imagedestroy($tmp1);
							}
							
							/*$filename = upload::save('image'); 						
							$IMG_NAME = $merchantid."_".$storeid.'.png';
							common::image($filename, STORE_DETAIL_WIDTH, STORE_DETAIL_HEIGHT, DOCROOT.'images/merchant/600_370/'.$IMG_NAME);
						    common::image($filename, STORE_LIST_WIDTH, STORE_LIST_HEIGHT, DOCROOT.'images/merchant/290_215/'.$IMG_NAME);
							unlink($filename);*/
						}										
										
										
										
										
										if(EMAIL_TYPE==2){
                                                                                    foreach($status['email'] as $single_admin){
											email::smtp($from, $single_admin, $subject , $adminmessage);
                                                                                    }
											/*if(email::smtp($from, $this->session->get('memail'), $merchant_subject , "<p>".$this->Lang['CRT_MER_ACC']."</p>".$merchantmessage))
												email::add_account_to_sendinblue("merchant", $this->session->get('memail'));*/
												
												email::smtp($from, $this->session->get('memail'), $merchant_subject , "<p>".$this->Lang['CRT_MER_ACC']."</p>".$merchantmessage);
											
										}
										else{
                                                                                    foreach($status['email'] as $single_admin){
											email::sendgrid($from, $single_admin, $subject , $adminmessage);
                                                                                    }
											email::sendgrid($from, $this->session->get('memail'), $merchant_subject , "<p>".SITENAME ." - ".$this->Lang['CRT_MER_ACC']."</p>".$merchantmessage);
										}
										
										
										
										
										
										
									$this->password = $store_admin_password;
									if(isset($_POST['store_email_id'])){
										$this->email = $_POST['store_email_id'];
										$from = CONTACT_EMAIL;
										$this->name = @$_POST['username'];
										$this->store_admin = 1;
										$message = new View("themes/".THEME_NAME."/mail_template");
										if(EMAIL_TYPE==2){				
											email::smtp($from, $this->email, SITENAME ." - ".$this->Lang['CRT_STORE_ADMIN_ACC'] , $message);
										}
										else{
											email::sendgrid($from, $this->email, SITENAME ." - ".$this->Lang['CRT_STORE_ADMIN_ACC'] , $message);
										}
										
									}
										
										 
										//  unset the merchant session for next merchant
										
										
										
										$this->session->delete('firstname');
										$this->session->delete('lastname');
										$this->session->delete('memail');
										$this->session->delete('mraddress1');
										$this->session->delete('mraddress2');
										$this->session->delete('mphone_number');
										$this->session->delete('payment_acc');
                                        $this->session->delete('nuban');
										$this->session->delete('sector'); 
										$this->session->delete('subsector'); 
                                        $this->session->delete('nuban_session');
										$this->session->delete('merchant_reg_nuban');
										
										                                  
                                                                                
						 /*$this->session->set(array("firstname" => $post->firstname,"lastname" => $post->lastname, 
                                                     'mraddress1' => $post->mr_address1, 'mraddress2' => $post->mr_address2, 
                                                     'mphone_number' => $post->mr_mobile,"memail"=>$post->email,
                                                     "nuban_session" => $post->nuban,"free" => $free,"flat" => $flat, 
                                                     "product" => $product,'quantity' => $quantity, 'aramex' => $aramex,
                                                     "sector"=>$post->sector,"sub_sector"=>$post->subsector));*/
											common::message(1, $this->Lang['SUCC_COM_FINAL']);
											//url::redirect(PATH);
											
											
										
											
											if($async){
												echo 0;
												exit;
											}else{
                                                url::redirect(PATH."merchant-signup-completed.html");
											}
								}
								else{
									common::message(-1, $this->Lang['PLZ_TRY_ONS']);
									//url::redirect(PATH);
								}
						}else{
								if($async){
										$this->form_error = error::_error($post->errors());
										$errors = (array)($this->form_error);
										$arr = array();
										$i = 0;
										foreach($errors as $key => $value){
											$arr[$i] = $key;
											$i++;
											$arr[$i] = $value;
											$i++;
										}
										//i commented out below since we are not using async on merchant sign up
										//echo htmlentities(json_encode($arr), ENT_NOQUOTES, "UTF-8");
										exit;
									}else{
									$this->form_error = error::_error($post->errors());
								}
										
						}
				
			}
			
			$this->country_list = $this->seller->getcountrylist();
			$this->template->title = $this->Lang['MER_SIGN_3'];
			$this->template->content = new View("themes/".THEME_NAME."/seller/seller_signup_step3");
		}
		else{
			 common::message(1, $this->Lang['PLZ_CORR_FILL']);
			 if($async){
				 	echo 1;
					exit;
				 }else{
			 	url::redirect(PATH."merchant-signup-step2.html");
			 }
		}
		
	}
	
	
	
	/** CHECK VALID PHONE OR NOT **/
	
	public function validphone($phone = "")
	{
		if(valid::phone($phone,array(7,10,11)) == TRUE){
			return 1;
		}
		return 0;
	}
	
	public function z_validphone($phone = "")
	{
		if(valid::z_phone($phone) == TRUE){
			return 1;
		}
		return 0;
	}
        
	/** CHECK VALID NUBAN OR NOT **/
	
	public function validnuban($nuban = "")
	{
		if(valid::phone($nuban,array(7,10,11)) == TRUE){
			return 1;
		}
		return 0;
	}
	
	/** CHECK EMAIL EXIST **/
	 
	public function email_available($email= "", $async = FALSE)
	{
	
		$exist = $this->seller->exist_email($email);
		if($async){
			if($exist)
				echo 1;
			else
				echo 0;
			exit;
		}
		return ! $exist;
		
	}
        
        public function nuban_available($nuban = ""){
            $ret = false;
            $ret = $this->seller->validate_nuban($nuban);
            //var_dump($ret);die;
            return true;
        }
        
	public function check_store_exist($store_name = "", $async = FALSE){
		if($async){
			 $exist = $this->seller->exist_name($store_name);
			 if($exist == 0){
				 echo 0;
			 }else {
				 echo 1;
			 }
			exit;
		}
	   
	    $exist = $this->seller->exist_name($this->input->post("storename"));
	    return ($exist == 0)?true:false; 
	}
	
	public function change_sector($sector = "")
	{
		if($sector == -1 || $sector == "" ){
			//$list = '<td><label>'.$this->Lang["SEL_CITY"].'*</label></td><td><label>:</label></td><td><select name="city" class="CityPAY select required" >';
			$list ='<option value="" >'.$this->Lang["SELECT_SECTORS_FIRST"].'</option>';
			//echo $list .='</select></td>';
			echo $list .='';
		exit;
		} else {
		        $CitySlist = $this->seller->get_sub_sectors($sector);
		        if(count($CitySlist) == 0){
			        $list ='<option value="">'.$this->Lang["SELECT_SECTORS_FIRST"].'</option>';
			        echo $list .='';
		                exit;
		        } else {
		                foreach($CitySlist as $s) {	
                                        if($s->sector_id != 0)
                                        {
                                                $list = '<select name="subsector" class="subSector" onchange="previewTheme(this.text);">';
                                        }
                                }
                                $list.='<option value="">'.$this->Lang['SELECT_A_SUB_SECTOR'].'</option>';
		                foreach($CitySlist as $s){
			                $list .='<option value="'.$s->sector_id.'">'.ucfirst($s->sector_name).'</option>';
		                }
		                echo $list .='</select>';
		                exit;
		          }
		}
	}
	
	
	public function get_themes($sector = "")
	{
		if($sector == -1 || $sector == "" ){
			//$list = '<td><label>'.$this->Lang["SEL_CITY"].'*</label></td><td><label>:</label></td><td><select name="city" class="CityPAY select required" >';
			$list ='<option value="" >'.$this->Lang["SELECT_SECTORS_FIRST"].'</option>';
			//echo $list .='</select></td>';
			echo $list .='';
		exit;
		} else {
		        $themes = $this->seller->get_sub_sectors($sector);
		        if(count($themes) == 0){
			        	echo 0;
		                exit;
		        } else {
						$arr = array();
						$i = 0;
		               	foreach($themes as $theme){
							
							$arr[$i] = $theme->sector_id;
							$i++;
							$arr[$i] = $theme->sector_name;
							$i++; 
							$img_url = DOCROOT."custom/images/themes/".$theme->sector_name.".jpg"; 
							$img_http_url = NULL;
							$img_exists = FALSE;
							if(file_exists($img_url)){
									$img_exists = TRUE;
									$img_http_url = PATH."custom/images/themes/".$theme->sector_name.".jpg";
							}
							
							if(!$img_exists){
								
								$img_url = DOCROOT."custom/images/themes/".$theme->sector_name.".png"; 
								$img_exists = FALSE;
								
								if(file_exists($img_url)){
									$img_exists = TRUE;
									$img_http_url = PATH."custom/images/themes/".$theme->sector_name.".png";
								}
							}
							
							if(!$img_exists){
								$img_http_url = PATH."themes/default/images/noimage_products_details.png"; 
								
							}
							
								
							 $arr[$i] = $img_http_url; 	
							 $i++;
						}
						
						echo json_encode($arr);
		                exit;
		          }
		}
	}
	
	public function check_store_admin(){
		$exist = $this->seller->exist_store_admin($this->input->post("store_email_id"));
	    return ($exist == 0)?true:false;
	}
	
	public function check_store_admin_with_supplier()
	{
		if(($this->input->post("store_email_id"))!= $this->session->get('memail')){
			return 1;
		}
		return 0;
		
	}
        
	public function getExtension($str)
	{
		// $i = strrpos($str,".");
		$i = strrpos($str,".");
        if (!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
	}
	
	public function LoadPNG($imgname)
	{
		/* Attempt to open */
		$im = @imagecreatefrompng($imgname);
		
		/* See if it failed */
		if(!$im)
		{
		/* Create a blank image */
		$im  = imagecreatetruecolor(150, 30);
		$bgc = imagecolorallocate($im, 255, 255, 255);
		$tc  = imagecolorallocate($im, 0, 0, 0);
		
		imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
		
		/* Output an error message */
		imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
		}
		
		return $im;
	}


	public function LoadJpeg($imgname)
	{
		/* Attempt to open */
		$im = @imagecreatefromjpeg($imgname);
		
		/* See if it failed */
		if(!$im)
		{
		/* Create a black image */
		$im  = imagecreatetruecolor(150, 30);
		$bgc = imagecolorallocate($im, 255, 255, 255);
		$tc  = imagecolorallocate($im, 0, 0, 0);
		
		imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
		
		/* Output an error message */
		imagestring($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
		}
		
		return $im;
	}
	
	public function LoadGif($imgname)
	{
		/* Attempt to open */
		$im = @imagecreatefromgif($imgname);
		
		/* See if it failed */
		if(!$im)
		{
		/* Create a blank image */
		$im = imagecreatetruecolor (150, 30);
		$bgc = imagecolorallocate ($im, 255, 255, 255);
		$tc = imagecolorallocate ($im, 0, 0, 0);
		
		imagefilledrectangle ($im, 0, 0, 150, 30, $bgc);
		
		/* Output an error message */
		imagestring ($im, 1, 5, 5, 'Error loading ' . $imgname, $tc);
		}
		
		return $im;
	}
	
	
	 public function no_minus_99($sel_option = ""){
		 
		  
		  if(!$sel_option){
			  return 0;
		  }
		  
		  $sel_option = trim($sel_option);
		  
		  if($sel_option == "" || $sel_option == "0" || $sel_option == "-99" ){
			  return 0;
		  }
		  
		  return 1;
		  
	  }
	  
	  
	  public function validate_shipping(){
		  
		$shipping = false;
		if(!$shipping && isset($_POST['free']))
			$shipping = true;
		if(!$shipping && isset($_POST['flat']))
			$shipping = true;
		if(!$shipping && isset($_POST['product']))
			$shipping = true;
		if(!$shipping && isset($_POST['quantity']))
			$shipping = true;
			
		if($shipping)
			return 1;
		return 0;
		  
	  }
	
	
	

}
