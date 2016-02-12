<?php defined('SYSPATH') OR die('No direct access allowed.');
class Store_admin_Controller extends website_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public $template = 'admin_template/template';
	public function __construct()
	{
		parent::__construct();
		
		$actual_link = $_SERVER['HTTP_HOST'];                
                $serverurl= $_SERVER['HTTP_HOST']; 
                if( $actual_link != $serverurl)
                { 
                        echo  DEFAULT_WEBSITE_MESSAGE;
                        exit;
                }
                else
                {
		        /*if((!$this->user_id || ( $this->user_type != 9 )) && $this->uri->last_segment() != "merchant-login.html" && $this->uri->last_segment() != "forgot-password.html"){
			        url::redirect(PATH);
		        }*/
		        if($this->user_type==1||$this->user_type==7)
		        {
					$this->session->destroy();
					url::redirect(PATH);
				}
		        $this->merchant = new Store_admin_Model();
		        $this->store_admin_panel="1";
		
		        if(DEFAULT_LANGUAGE == "french" ){
			        $this->template->style = html::stylesheet(array(PATH.'css/french_merchant.css'));
		        } elseif(DEFAULT_LANGUAGE == "spanish"){
			        $this->template->style = html::stylesheet(array(PATH.'css/spanish_merchant.css'));
		        } else {
			        $this->template->style = html::stylesheet(array(PATH.'css/merchant.css'));
		        }
		}
	}

	/** MERCHANT LOGIN **/

	public function login()
	{
		
		
		 if($this->user_id && $this->user_type == 9){
			url::redirect(PATH."store-admin.html");
		 }
		if($_POST){
			
		

//			$email = trim($this->input->post("email"));
//			$pswd = $this->input->post("password");
//                        
                       $email =  strip_tags(addslashes(trim($this->input->post("email"))));
			$pswd = strip_tags(addslashes($this->input->post("password")));
			if($email){
				
				$status = $this->merchant->merchant_login($email, $pswd);
				
				if($status == 10){
					common::message(1, $this->Lang["LOGIN_SUCCESS"] );
					url::redirect(PATH."store-admin.html");
					
				}
				elseif($status == 11){
					common::message(1, $this->Lang["LOGIN_SUCCESS"] );
					url::redirect(PATH."store-admin.html");
				}
				elseif($status == 9){
					$this->error_login = $this->Lang["ACCOUNT_BLOCKED"];
				}
				elseif($status == 8){
					$this->error_login = $this->Lang["EMAIL_NOT_EXIST"];
				}
				elseif($status == 7){
					$this->postemail = $email;
					$this->error_login = $this->Lang["PASSWORD_NOT_MATCH"];
				}else if($status==99){
					$this->error_login = $this->Lang["STORE_ADMIN_NOT_AVAILABLE"];
				}else{
					common::message(-1,$this->Lang["CANT_LOGIN"]);
					url::redirect(PATH);
				}
			} else {
				$this->error_login = $this->Lang["EMAIL_REQUIRED"];
			}
 		}
		$this->is_store_admin = 1;
		$this->template->content = new View("admin/login");
		$this->template->title = $this->Lang["STORE_ADMIN_LOGIN"];
	}

	/** MERCHANT HOME **/

	public function index()
	{
		$this->merchant_dashboard_data = $this->merchant->get_merchant_dashboard_data();
		$this->balance = $this->merchant->get_merchant_balance1();
		$this->balance_list_fund = $this->merchant->get_merchant_balance_fund();
		$this->deals_transaction_list = $this->merchant->get_merchant_deal_transaction_chart_list();
		$this->products_transaction_list = $this->merchant->get_merchant_product_transaction_chart_list();
		$this->auctions_transaction_list = $this->merchant->get_merchant_auction_transaction_chart_list();
		$this->template->content = new View("store_admin/home");
		$this->template->title = $this->Lang["STORE_ADMIN_DASHBOARD"];
	}

	/** MERCHANT SETTINGS **/

	public function merchant_settings()
	{
		$this->mer_settings_act="1";
		$this->merchant_settings ="1";
		$this->user_detail = $this->merchant->user_details();
		$this->template->content = new View("store_admin/merchant_settings");
		$this->template->title = $this->Lang["STORE_ADMIN_SET"];
	}

      /** MERCHANT UPDATE **/

    public function edit_merchant()
    {
		$this->mer_settings_act="1";
		$this->edit_merchant="1";
		$userid = $this->store_admin_id;
			if($_POST){
				$this->userpost = utf8::clean($this->input->post());
				$post = new Validation(utf8::clean($_POST));
				$post = Validation::factory(utf8::clean($_POST))
							
							->add_rules('firstname','required')
							->add_rules('lastname','required')
							->add_rules('email','required','valid::email')
							->add_rules('mobile','required',array($this, 'validphone'), array($this, 'z_validphone'), 'chars[0-9-+(). ]')
							->add_rules('address1','required')
							->add_rules('address2','required')
							->add_rules('city','required');

				if($post->validate()){

					$status = $this->merchant->edit_merchant($userid, arr::to_object($this->userpost));
						if($status){

							common::message(1, $this->Lang["MERCHANT_SET_SUC"]);
						}
					url::redirect(PATH.'store-admin/settings.html');
				}
				else{
					$this->form_error = error::_error($post->errors());
				}
			}

			$this->city_list = $this->merchant->getCityList();
			$this->user_data = $this->merchant->get_users_data();
		if(count($this->user_data) == 0){
			common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
			url::redirect(PATH."store-admin/settings.html");
		}
		$this->country_list = $this->merchant->getcountrylist();
		$this->template->title = $this->Lang["EDIT_STORE_ADMIN"];
		$this->template->content = new View("store_admin/edit_merchant");
	}

	/** MERCHANT CHANGE PASSWORD **/

	public function merchant_password()
	{
		$this->mer_settings_act="1";
		$this->merchant_password="1";
		$userid = $this->store_admin_id;

			if($_POST){

				$this->userpost = utf8::clean($this->input->post());
				$post = new Validation(utf8::clean($_POST));
				$post = Validation::factory(utf8::clean($_POST))
							
							->add_rules('oldpassword','required',array($this, 'check_password'))
							->add_rules('password','length[5,32]','required')
							->add_rules('cpassword','required','matches[password]');
				if($post->validate()){
					$status = $this->merchant->change_password($userid, arr::to_object($this->userpost));
					if($status == 1){
						common::message(1, $this->Lang["PWD_UPD"]);
					}
					url::redirect(PATH.'store-admin/settings.html');
				}
				else{
					$this->form_error = error::_error($post->errors());
				}
			}
		$this->city_list = $this->merchant->getCityList();
		$this->user_data = $this->merchant->get_users_data($userid);
		$this->template->title = $this->Lang["CHANGE_PASS"];
		$this->template->content = new View("store_admin/change_pass");
	}
	

	/** ADD DEALS **/

	public function add_deals()
	{
		if(PRIVILEGES_DEALS_ADD!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	    $this->mer_deals_act="1";
	    $this->add_deal="1";
		$this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
		if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
					
			        ->add_rules('title', 'required')
			        ->add_rules('description', array($this,'check_required'),'required')
			        ->add_rules('category', 'required')
			        ->add_rules('sub_category', 'required')
			        ->add_rules('sec_category', 'required')
			        ->add_rules('price', 'required', 'chars[0-9.]',array($this,'check_price_val_lmi'))
			        ->add_rules('deal_value', 'required', array($this, 'check_price_lmi'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
			        ->add_rules('start_date', 'required')
			        ->add_rules('end_date', 'required', array($this, 'check_end_date'))
			        ->add_rules('expiry_date', 'required', array($this, 'check_expiry_date'))
		           	->add_rules('minlimit', 'required',array($this,'check_min_lmi'),'chars[0-9]')
			        ->add_rules('maxlimit', 'required','chars[0-9]',array($this,'check_maxlimit_lmi'))
			        ->add_rules('deal_type', 'required')
			        ->add_rules('quantity', 'required', array($this,'check_purchace_lmi'),'chars[0-9]')
			        ->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');
			if($post->validate()){
				$deal_key = text::random($type = 'alnum', $length = 8);
				$status = $this->merchant->add_deals(arr::to_object($this->userPost),$deal_key);
				if($status > 0 && $deal_key){
					if($_FILES['image']['name']['0'] != "" )
					{
						$i=1;
						foreach(arr::rotate($_FILES['image']) as $files){
							if($files){
								$filename = upload::save($files);
								if($filename!=''){
									$IMG_NAME = $deal_key."_".$i.'.png';
                                                                        common::image($filename, 620,752, DOCROOT.'images/deals/1000_800/'.$IMG_NAME);
									unlink(realpath($filename));
								}
							}
							$i++;
						}
					}
			                /**DEAL AUTOPOST FACEBOOK WALL**/
					if($this->input->post('autopost')==1){
					$dealurl=url::title($this->input->post('title'));
					$dealURL = PATH."deals/".$deal_key.'/'.$dealurl.".html";
						$message = "A new deal published onthe site"." ".$this->input->post('title')." ".$dealURL." limited offer hurry up!";
						$fb_access_token = $this->session->get("fb_access_token");
						$fb_user_id = $this->session->get("fb_user_id");
						$post_arg = array("access_token" => $fb_access_token, "message" => $message, "id" => $fb_user_id, "method" => "post");
						common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);
					}
			                /**DEAL AUTOPOST FACEBOOK WALL END HERE**/

					common::message(1, $this->Lang["DEAL_ADD_SUC"]);
					url::redirect(PATH."store-admin/manage-deals.html");
				}
				$this->form_error["city"] = $this->Lang["DEAL_EXIST"];
			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
		$this->sub_category_list = $this->merchant->get_sub_category_list();
		$this->sec_category_list = $this->merchant->get_sec_category_list();
		$this->third_category_list = $this->merchant->get_third_category_list();
		$this->category_list = $this->merchant->get_gategory_list();
		$this->shop_list = $this->merchant->get_shop_list();
	   	$this->template->title = $this->Lang["ADD_DEALS"];
		$this->template->content = new View("store_admin/add_deals");
	}

	/** MANAGE DEALS **/

	public function manage_deals($type = "", $page = "")
	{
		if(PRIVILEGES_DEALS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	        $this->mer_deals_act="1";
           	 $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;

	        if($type == 1){
				$this->archive_deals="1";
				$this->template->title = $this->Lang["ARCHIVE_DEALS"];
				$this->url = "store-admin/archive-deals.html";
				$this->sort_url= PATH.'store-admin/archive-deals.html?';
			}
			else{
				$this->manage_deals="1";
				$this->template->title = $this->Lang["MANAGE_DEALS"];
				$this->url = "store-admin/manage-deals.html";
				$this->sort_url= PATH.'store-admin/manage-deals.html?';
			}
			$this->count_deal_all_record = $this->merchant->get_all_deals_count($type,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,$this->today,$this->startdate,$this->enddate);
			$this->city_list = $this->merchant->get_city_lists();
			$this->search_key = arr::to_object($this->input->get());
			$search = $this->input->get("id");
			$this->pagination = new Pagination(array(
				'base_url'       => $this->url.'/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_deal_all_record,
				'items_per_page' => 25,
				'style'          => 'digg',
				'auto_hide' => TRUE
			));

		$this->all_deal_list = $this->merchant->get_all_deals_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,0,$this->today,$this->startdate,$this->enddate);
		if($search == 'all'){
			$this->all_deal_list = $this->merchant->get_all_deals_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,1,$this->today,$this->startdate,$this->enddate);
		}

		if($search){
			$out = '"S.No","Title","Category","Original Price","Discount Price","Savings","Discount Percentage","Start Date","End Date","Expiry Date","Purchase Count","Merchant Name","Shop Name","Country","City","Image"'."\r\n";
			$i=0;
			$first_item = $this->pagination->current_first_item;
				foreach($this->all_deal_list as $d){
					if(file_exists(DOCROOT.'images/deals/1000_800/'.$d->deal_key.'_1.png'))
					{
						$deal_image =PATH.'images/deals/1000_800/'.$d->deal_key.'_1.png';
					}
					else
					{
						$deal_image =PATH.'images/no-images.png';
					}
			$out .= $i + $first_item.',"'.$d->deal_title.'","'.$d->category_name.'","'.(CURRENCY_SYMBOL.$d->deal_price).'","'.(CURRENCY_SYMBOL.$d->deal_value).'","'.(CURRENCY_SYMBOL.$d->deal_savings).'","'.round($d->deal_percentage)."%".'","'.date('m/d/Y H:i:s',$d->startdate).'","'.date('m/d/Y H:i:s',$d->enddate).'","'.date('m/d/Y H:i:s',$d->expirydate).'","'.$d->purchase_count.'","'.$d->firstname.'","'.$d->store_name.'","'.$d->country_name.'","'.$d->city_name.'","'.$deal_image.'"'."\r\n";
			$i++;
				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Deals.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
		}
		$this->template->content = new View("store_admin/manage_deals");
	}

	/** VIEW DEALS **/

	public function view_deals($deal_key  = "", $deal_id = "")
	{
		if(PRIVILEGES_DEALS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->deal_key=$deal_key;
		$this->deal_id=$deal_id;
	    	$this->mer_deals_act="1";
		$this->manage_deals="1";
		$this->deal_deatils = $this->merchant->get_deals_data($deal_key, $deal_id);
		$this->transaction_list= $this->merchant->get_transaction_data($deal_id);
			if(count($this->deal_deatils) == 0){
				common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
				$lastsession = $this->session->get("lasturl");
		                if($lastsession){
		                url::redirect(PATH.$lastsession);
		                } else {
		                url::redirect(PATH."store-admin/manage-deals.html");
		                }
			}
			$search=$this->input->get("id");

		if($search){
				$out = '"S.No","Customers","Deal Title","Quantity","Amount","Admin Commission","Status","Transaction Date","Transaction Type"'."\r\n";
				$i=0;
				$first_item = $i+1;
				foreach($this->transaction_list as $d)
				{
					if($d->payment_status=="SuccessWithWarning"){	$status=$this->Lang["SUCCESS"]; }
					elseif($d->payment_status=="Completed"){ $status=$this->Lang["COMPLETED"]; }
					elseif($d->payment_status=="Success"){ $status=$this->Lang["SUCCESS"]; }
					elseif($d->payment_status=="Pending"){ $status=$this->Lang["PENDING"]; }

					if($d->type=="1"){ $transaction_type=$this->Lang["PPAL_CRDT"]; }
					elseif($d->type=="2"){ $transaction_type=$this->Lang["PPAL"]; }
					elseif($d->type=="3"){ $transaction_type=$this->Lang["REF_PAYMENT"]; }
					elseif($d->type=="4"){ $transaction_type="Authorize.net(".$d->transaction_type.")"; }
					elseif($d->type=="5"){ $transaction_type="Cash On Delivery"; }
					elseif($d->type=="6"){ $transaction_type=$this->Lang["PAY_LATER"]; }

					$commission_val=$d->deal_merchant_commission;
					 $commission=$d->deal_value *($commission_val/100);
					 $Amount=($d->deal_value-$commission)*$d->quantity;
					$out .= $i + $first_item.',"'.$d->firstname.'","'.$d->deal_title.'","'.$d->quantity.'","'.($d->deal_value-$commission)*$d->quantity.'","'.$commission*$d->quantity.'","'.$status.'","'.date('d-M-Y h:i:s A',$d->transaction_date).'","'.$transaction_type.'"'."\r\n";
					$i++;
				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Deals.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
			}
		$this->category_list = $this->merchant->all_category_list();
		$this->commission_list = $this->merchant->get_merchant_balance();
		$this->template->title = $this->Lang["DEAL_DET"];
		$this->template->content = new View("store_admin/view_deal");
	}

	/** EDIT DEALS **/

	public function edit_deals($deal_id = "", $deal_key = "")
	{
		if(PRIVILEGES_DEALS_EDIT!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	        $deal_id = base64_decode($deal_id);
	        $this->mer_deals_act="1";
			$this->manage_deals="1";
			$adminid=$this->session->get('user_id');
			$this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
			$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
		if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('title', 'required')
							->add_rules('description', 'required',array($this,'check_required'))
							->add_rules('category', 'required')
							->add_rules('sub_category', 'required')
							->add_rules('sec_category', 'required')
							->add_rules('price', 'required', 'chars[0-9.]',array($this,'check_price_val_lmi'))
							->add_rules('deal_value', 'required', array($this, 'check_price_lmi'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
							->add_rules('start_date', 'required')
							->add_rules('end_date', 'required', array($this, 'check_end_date'))
							->add_rules('expiry_date', 'required', array($this, 'check_expiry_date'))
						        ->add_rules('minlimit', 'required', array($this,'check_min_lmi'),'chars[0-9]')
							->add_rules('maxlimit', 'required','chars[0-9]',array($this,'check_maxlimit_lmi'))
							->add_rules('quantity', 'required', array($this,'check_purchace_lmi'),'chars[0-9]')
							->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');

				if($post->validate()){
		        	$status = $this->merchant->edit_deals($deal_id, $deal_key, arr::to_object($this->userPost),$adminid);
                        if($status == 1 && $deal_key){

                                if($_FILES['image']['name'] != "" ){
                                    $i=1;
                                    foreach(arr::rotate($_FILES['image']) as $files){

                                                        if($files){
                                                                $filename = upload::save($files);
                                                                if($filename!=''){
                                                                        if($i==1){
                                                                                $IMG_NAME = $deal_key."_1.png";
                                                                                common::image($filename, 620,752, DOCROOT.'images/deals/1000_800/'.$IMG_NAME);
                                                                        } else { // replace if the 1st image s empty with the next successive image
                                                                                for($j=2;$j<=$i;$j++) {
                                                                                $IMG_NAME1 = $deal_key."_".$i;
                                                                                common::image($filename, 620,752, DOCROOT.'images/deals/1000_800/'.$IMG_NAME1.'.png');
                                                                                }
                                                                        }
                                                                        $IMG_NAME = $deal_key."_".$i.'.png';
                                                                        common::image($filename, 620,752, DOCROOT.'images/deals/1000_800/'.$IMG_NAME);
                                                                        unlink(realpath($filename));
                                                                }
                                                        }
                                                        $i++;
			                        }
			                }

					common::message(1, $this->Lang["DEAL_EDIT_SUC"]);
					$lastsession = $this->session->get("lasturl");
	                                if($lastsession){
	                                url::redirect(PATH.$lastsession);
	                                } else {
	                                url::redirect(PATH."store-admin/manage-deals.html");
	                                }
					}
					elseif($status == 8){
						common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
						$lastsession = $this->session->get("lasturl");
		                                if($lastsession){
		                                url::redirect(PATH.$lastsession);
		                                } else {
		                                url::redirect(PATH."store-admin/manage-deals.html");
		                                }
					}
				$this->form_error["title"] = $this->Lang["DEAL_EXIST"];
			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
		$this->category_list = $this->merchant->get_gategory_list();

		$this->sub_category_list = $this->merchant->get_sub_category_list();
		$this->sec_category_list = $this->merchant->get_sec_category_list();
		$this->third_category_list = $this->merchant->get_third_category_list();
		$this->shop_list = $this->merchant->get_shop_list();
		$this->deal = $this->merchant->get_edit_deal($deal_id,$deal_key);
		if(($this->deal->current()->enddate) <  time() ){
				common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
				$lastsession = $this->session->get("lasturl");
                                if($lastsession){
                                url::redirect(PATH.$lastsession);
                                } else {
                                url::redirect(PATH."store-admin/manage-deals.html");
                                }
	        }
		$this->template->title = $this->Lang["EDIT_DEAL"];
		$this->template->content = new View("store_admin/edit_deal");
	}

	/** BLOCK UNBLOCK DEALS **/

        public function block_deals($type = "", $key = "", $deal_id = "")
        {
			if(PRIVILEGES_DEALS_BLOCK!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
            $this->mer_deals_act="1";
	        $status = $this->merchant->blockunblockdeal($type, $key, $deal_id);
	        	if($status == 1){
		        	if($type == 1){
			        	common::message(1, $this->Lang["DEAL_UNB_SUC"]);
		        	}
		        	else{
			        	common::message(1, $this->Lang["DEAL_B_SUC"]);
		        	}
	        	}
	        	else{
		        	common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
	        	}
	        	$lastsession = $this->session->get("lasturl");
		        if($lastsession){
		        url::redirect(PATH.$lastsession);
		        } else {
		        url::redirect(PATH."store-admin/manage-deals.html");
		        }
			
        }

	/** CLOSED COUPON LIST  **/

	public function closed_coupon($page = "")
	{
		if(PRIVILEGES_DEALS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->page = $page ==""?1:$page; // for export per page
		$this->url ="store-admin/close-couopn-list.html";
		$this->mer_deals_act=1;
		$this->close_code = 1;
		$search=$this->input->get("id");
		$count = $this->merchant->get_coupon_count($this->input->get("coupon_code"), $this->input->get('name'));
		$this->search_key = arr::to_object($this->input->get());
		$this->pagination = new Pagination(array(
				'base_url'       => 'store-admin/close-couopn-list.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $count,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));

		$this->all_coupon_list = $this->merchant->get_coupon_list($this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("coupon_code"), $this->input->get('name'),0);

		if($search == 'all'){
			$this->all_coupon_list = $this->merchant->get_coupon_list($this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("coupon_code"), $this->input->get('name'),1);
		}
		if($search){
		$out = '"S.No","Deal Name","User Name","Coupon Code","Date","Image"'."\r\n";

		$i=0;
		$first_item = $this->pagination->current_first_item;
		foreach($this->all_coupon_list as $d)
		{

			if(file_exists(DOCROOT.'images/deals/1000_800/'.$d->deal_key.'_1.png'))
    		{
     		    $deal_image =PATH.'images/deals/1000_800/'.$d->deal_key.'_1.png';
    		}
    		else
   		    {
     		    $deal_image =PATH.'images/no-images.png';
    		}
			$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->coupon_code.'","'.date('m/d/Y H:i:s',$d->transaction_date).'","'.$deal_image.'"'."\r\n";
		$i++;
		}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Redem-coupon-lists.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
		}
		$this->template->title = $this->Lang['REDEM_COU_LI'];
		$this->template->content = new View("store_admin/closed_coupon_list");

	}

	/**SEND EMAIL COPUONS **/

        public function deal_send_email($deal_id = "", $deal_key = "")
        {
			$this->mer_deals_act="1";
			$this->manage_deals="1";
			$this->url="merchant/manage-deals.html";
			$this->deal_deatils = $this->merchant->get_dealsmail_data($deal_key, $deal_id);
			if(count($this->deal_deatils) == 0){
		        common::message(-1, $this->Lang["DEAL_BLOCKED"]);		
		        $lastsession = $this->session->get("lasturl");
		        if($lastsession){
		        url::redirect(PATH.$lastsession);
		        } else {
		        url::redirect(PATH."store-admin/manage-deals.html");
		        }
		        }
				if($_POST){
						$this->deal_deatils = $this->merchant->get_deals_data($deal_key, $deal_id);
						$this->userPost = utf8::clean($this->input->post());
						$users = strip_tags(addslashes($this->input->post("users")));
						$fname = strip_tags(addslashes($this->input->post("firstname")));
						$email = trim(strip_tags(addslashes($this->input->post("email"))));
						$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
										
										->add_rules('users', 'required')
										->add_rules('email','required')
										->add_rules('subject', 'required','chars[a-zA-z0-9- _,/.+]')
										->add_rules('message', 'required');
							if($post->validate()){

								foreach($email as $mail){
									$mails = explode("__",$mail);
									$useremail = $this->mail= $mails[0];
									$usrname =  $mails[1];
									if(isset($usrname) && isset($useremail))
										$message = " <p> ".$post->message." </p>";
										$message .= new View ("admin_deal/mail_deal");
										 $this->email_id = $useremail;
                                                                                $this->name = $usrname;
                                                                                $this->message = $message;
                                                                                $fromEmail = NOREPLY_EMAIL;
                                                                                $message = new View("themes/".THEME_NAME."/admin_mail_template");
                                                                
										$fromEmail = NOREPLY_EMAIL;
										if(EMAIL_TYPE==2){
										email::smtp($fromEmail,$useremail,$post->subject,$message);
		}								else {
										email::sendgrid($fromEmail,$useremail,$post->subject,$message);
										}
										common::message(1, $this->Lang["MAIL_SENDED"]);

								}
								$lastsession = $this->session->get("lasturl");
		                                                if($lastsession){
		                                                url::redirect(PATH.$lastsession);
		                                                } else {
		                                                url::redirect(PATH."store-admin/manage-deals.html");
		                                                }
							}
							else{
								$this->form_error = error::_error($post->errors());
							}
				}
			$this->template->title = $this->Lang["EMAIL_NEWS"];
			$this->template->content = new View("store_admin/send_mail");
        }


	
	public function check_store_exist(){
	    $exist = $this->merchant->exist_name($this->input->post("storename"));
	    return ($exist == 0)?true:false; 
	}
	public function check_store_exist1(){
	    $exist = $this->merchant->exist_name($this->input->post("storename"),$this->input->post("storeid"));
	    return ($exist == 0)?true:false; 
	}

	

	/** CITY SELECT SCRIPT **/

	public function CitySS($country = "")
	{
		if($country == -1){
			$list = '<td><label>'.$this->Lang["SEL_CITY"].'*</label></td><td><label>:</label></td><td><select name="city">';
			$list .='<option value=" " >'.$this->Lang["CITY_FIRST"].'</option>';

			echo $list .='</select></td>';
			exit;
		}
		else{
		        $CitySlist = $this->merchant->get_city_by_country($country);
		        	if(count($CitySlist) == 0){
		               $list = '<td><label>'.$this->Lang["SEL_CITY"].'*</label></td><td><label>:</label></td><td><select name="city">';
			           $list .='<option value="">'.$this->Lang["NO_CITY"].'</option>';
			        	echo $list .='</select></td>';
		                exit;
		        }
		        else{
		                foreach($CitySlist as $s) {
		               		if($s->city_id != 0)
		                	{
                			   $list = '<td><label>'.$this->Lang["SEL_CITY"].'*</label></td>
                            		<td><label>:</label></td>
                            		<td><select name="city">';

                            }
						}
		                //$list .='<option value="all">Nationwide</option>';
		                foreach($CitySlist as $s){

			                	$list .='<option value="'.$s->city_id.'">'.ucfirst($s->city_name).'</option>';
		               	}
		                echo $list .='</select></td>';
		                exit;
		      }
		}
	}

	
        /** CHECK PASSWORD EXIST **/

	public function check_password($pswd = "")
	{
		$exist = $this->merchant->exist_password($pswd, $this->store_admin_id);
		return $exist;
	}

	/** CHECK EXPIRY DATE GREATER ENDDATE **/

	public function check_expiry_date($expiry_date = "")
	{
		if(strtotime($this->input->post("end_date")) <= strtotime($expiry_date)){
			return 1;
		}
		return 0;
	}

	/** CHECK ENDDATE GREATER STARTDATE **/

	public function check_end_date($end_date = "")
	{
		if(strtotime($this->input->post("start_date")) < strtotime($end_date)){
			return 1;
		}
		return 0;
	}

	/** CHECK MIN USER LIMIT LESS THAN MAX USER LIMIT **/
	
	public function check_min_lmi()
	{
		if(($this->input->post("minlimit"))<=$this->input->post("maxlimit")){
			return 1;
		}
		return 0;
	}

	/** CHECK MAX  USER PURCHACE LIMIT LESS THAN MAX USER LIMIT**/

	public function check_purchace_lmi()
	{
		if(($this->input->post("maxlimit"))>=$this->input->post("quantity")){
			return 1;
		}
		return 0;
	}

	/** CHECK VALID PHONE OR NOT **/

	public function validphone($phone = "")
	{
		if(valid::numeric($phone)){
		        if(valid::phone($phone,array(7,10,11)) == TRUE){
			        return 1;
		        }
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

	/** CHECK DISCOUNT PRICE  LESS THAN ORGINAL PRICE **/

	public function check_price_lmi()
	{
		if(($this->input->post("deal_value"))<=$this->input->post("price")){
			return 1;
		}
		return 0;
	}

	/** ADD PRODUCTS **/

	public function add_products()
	{
		if(PRIVILEGES_PRODUCTS_ADD!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	    $this->mer_products_act="1";
		$this->add_product="1";
		$this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
			if($_POST){
				$this->userPost = utf8::clean($this->input->post());
				$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('title', 'required')
							->add_rules('description', 'required',array($this,'check_required'))
							->add_rules('category', 'required')
							->add_rules('sub_category', 'required')
							->add_rules('sec_category', 'required')
							->add_rules('price', 'required', 'chars[0-9.]',array($this,'check_price_val_lmi'))
							//->add_rules('deal_value', 'required', array($this, 'check_price_lmi'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
							
							->add_rules('deal_value', 'required',array($this, 'check_prime_price_lmi_prd'), array($this, 'check_price_lmi_prd'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
							
							//->add_rules('size_tag[]', 'required')
							->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]')
							//->add_rules('stores','required')
							->add_rules('delivery_days','required');
							
							
							$price_s = $post->price;
							if(isset($price_s)){
								$price_s = trim($price_s);
								if($price_s != "")
								$post->add_rules('price','chars[0-9.]',array($this,'check_price_val_lmi'));
							}
							
							$prime_price_s = $post->prime_price;
							if(isset($prime_price_s)){
								$prime_price_s = trim($prime_price_s);
								if($prime_price_s != "")
								$post->add_rules('prime_price','chars[0-9.]',array($this,'check_price_val_lmi'));
							}
							
							
							if($post->buy_bulk!="")
							{
							$post->add_rules('get_bulk','required');
							}
							if($post->get_bulk!="")
							{
								$post->add_rules('buy_bulk','required');
							}
							if($post->buy_bulk!="" || $post->free_gift!="")
							{
								$post->add_rules('start_date','required');
								$post->add_rules('end_date','required',array($this, 'check_end_date'));
							}
				 	if($post->validate()){
						$deal_key = text::random($type = 'alnum', $length = 8);
						$size_quantity = $this->input->post("size_quantity");
						$status = $this->merchant->add_products(arr::to_object($this->userPost),$deal_key,$size_quantity);
						if($status > 0 && $deal_key){
							if($_FILES['image']['name']['0'] != "" ){
								$i=1;
								foreach(arr::rotate($_FILES['image']) as $files){
									if($files){
										$filename = upload::save($files);
										if($filename!=''){

											$IMG_NAME = $deal_key."_".$i.'.png';

											common::image($filename, 620,752, DOCROOT.'images/products/1000_800/'.$IMG_NAME);
											unlink(realpath($filename));
										}
									}
								$i++;
								}
							}
								/**PRODUCT AUTOPOST FACEBOOK WALL**/

							/*	if($this->input->post('autopost')==1){

								$producturl=url::title($this->input->post('title'));
								$productURL = PATH."product/".$deal_key.'/'.$producturl.".html";
									$message = "A new product published onthe site"."".$this->input->post('title')." ".$productURL." limited offer hurry up!";
									$fb_access_token = $this->session->get("fb_access_token");
									$fb_user_id = $this->session->get("fb_user_id");
									$post_arg = array("access_token" => $fb_access_token, "message" => $message, "id" => $fb_user_id, "method" => "post");

									common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);


								} */
								 /**PRODUCT AUTOPOST FACEBOOK WALL END HERE**/
								 
							/**PRODUCT AUTOPOST FACEBOOK WALL**/

							if($this->input->post('autopost')==1){
                                                        $producturl=url::title($this->input->post('title'));
                                                        $productURL = PATH."product/".$deal_key.'/'.$producturl.".html";
                                                        $message = "A new product published onthe site"." ".strip_tags(addslashes($this->input->post('title')))." ".$productURL." limited offer hurry up!";
                                                        $fb_access_token = $this->session->get("fb_access_token");
                                                        $fb_user_id = $this->session->get("fb_user_id");
                                                        $post_arg = array("access_token" => $fb_access_token, "message" => $message, "id" => $fb_user_id, "method" => "post");
                                                        common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);
							}
							
						        /**PRODUCT AUTOPOST FACEBOOK WALL END HERE**/
						        
					$this->product_deatils = $this->merchant->get_products_data($deal_key, $status);
					  $store_key =$this->product_deatils->current()->store_url_title;
					  $producturl =$this->product_deatils->current()->url_title;
					   if($this->input->post('status')==2){
							url::redirect(PATH.$store_key."/product/".$deal_key.'/'.$producturl."/store-admin-preview.html");
					  }else{
						common::message(1, $this->Lang["PRODUCT_ADD_SUC"]);
						url::redirect(PATH."store-admin/manage-products.html");
					  }
					  
					}
						$this->form_error["city"] = $this->Lang["PRODUCT_EXIST"];
				}
				else{
					$this->form_error = error::_error($post->errors());
				}
		}

		/** For attrbute adding **/
		$this->all_attributes=$this->merchant->getProductAttributes();

		$prdatr = $this->merchant->GetAttributes();
		$this->product_attributes = array();
		foreach($prdatr as $a){
			$this->product_attributes [$a->attribute_id]= $a->name ;
		}
                $this->shipping_data = $this->merchant->get_shipping_data();
		$this->sub_category_list = $this->merchant->get_sub_category_list();
		$this->sec_category_list = $this->merchant->get_sec_category_list();
		$this->third_category_list = $this->merchant->get_third_category_list();
		$this->category_list = $this->merchant->get_gategory_list();
		$this->shop_list = $this->merchant->get_shop_list();
		$this->color_code = $this->merchant->get_shipping_product_color();
		$this->product_size = $this->merchant->get_product_size();
		$this->gift_list=$this->merchant->get_gift_list1();
		$this->merchant_duration = $this->merchant->get_duration_values(); // store credits options
	        $this->template->title = $this->Lang["ADD_PRODUCTS"];
		$this->template->content = new View("store_admin/add_products");
	}
	
	public function check_prime_price_lmi_prd()
	{
		if($this->input->post("prime_price")!='')
		{
		
		
		if($this->input->post("deal_value")<$this->input->post("prime_price"))
		{
		return 0;
		}
		}
		return 1;
	}

         public function confirm_product($product_id = "",$preview_type='')
	{
	        $this->product = $this->merchant->change_product_status($product_id);
	         if(base64_decode($preview_type)=='preview'){
				common::message(1, $this->Lang["PRODUCT_ADD_SUC"]);
				url::redirect(PATH."store-admin/add-products.html");
			}else{
				common::message(1, $this->Lang["PRODUCT_EDIT_SUC"]);
				url::redirect(PATH."store-admin/manage-products.html");
			}
	}
	
	
	/** MANAGE PRODUCTS **/

	public function manage_products($type = "", $page = "")
	{
		if(PRIVILEGES_PRODUCTS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->mer_products_act="1";
            	 $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
	        if($type == 1){
				$this->archive_product = "1";
				$this->template->title = $this->Lang["ARCHIVE_PRODUCTS"];
				$this->url = "store-admin/sold-products.html";
				$this->sort_url= PATH.'store-admin/sold-products.html?';
			}
			else{
				$this->manage_product = "1";
				$this->template->title = $this->Lang["MANAGE_PRODUCTS"];
				$this->url = "store-admin/manage-products.html";
				$this->sort_url= PATH.'store-admin/manage-products.html?';
			}
			$search=$this->input->get("id");
			$this->count_deal_all_record = $this->merchant->get_all_products_count($type,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,$this->today,$this->startdate,$this->enddate,$this->input->get('product_duration'));
			$this->city_list = $this->merchant->get_city_lists();
			$this->search_key = arr::to_object($this->input->get());
			
			$this->pagination = new Pagination(array(
				'base_url'       => $this->url.'/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_deal_all_record,
				'items_per_page' => 25,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
			$this->all_product_list = $this->merchant->get_all_product_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,0,$this->today,$this->startdate,$this->enddate,$this->input->get('product_duration'));

			if($search =='all'){
				$this->all_product_list = $this->merchant->get_all_product_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,1,$this->today,$this->startdate,$this->enddate,$this->input->get('product_duration'));
			}
			if($search){
					$out = '"S.No","Title","Category","Original Price","Discount Price","Savings","Discount Percentage","Purchase Count","Merchant Name","Shop Name","Country","City","Image"'."\r\n";

					$i=0;
					$first_item = $this->pagination->current_first_item;
					foreach($this->all_product_list as $d){
						if(file_exists(DOCROOT.'images/products/1000_800/'.$d->deal_key.'_1.png')){
		         			$deal_image =PATH.'images/products/1000_800/'.$d->deal_key.'_1.png';
		        		}
		        		else{
		         			$deal_image =PATH.'images/no-images.png';
		        		}

					$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->category_name.'","'.(CURRENCY_SYMBOL.$d->deal_price).'","'.(CURRENCY_SYMBOL.$d->deal_value).'","'.(CURRENCY_SYMBOL.$d->deal_savings).'","'.round($d->deal_percentage)."%".'","'.$d->purchase_count.'","'.$d->firstname.'","'.$d->store_name.'","'.$d->country_name.'","'.$d->city_name.'","'.$deal_image.'"'."\r\n";
					$i++;

					}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Products.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}

		$this->template->content = new View("store_admin/manage_products");
	}

	/** EDIT PRODUCTS **/

	public function edit_products($deal_id = "", $deal_key = "",$preview_type="")
	{
		if(PRIVILEGES_PRODUCTS_EDIT!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->preview_type = base64_decode($preview_type);
	        $deal_id = base64_decode($deal_id);
	        $this->mer_products_act="1";
		$this->manage_product = "1";
		$this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
		if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
						
				        ->add_rules('title', 'required')
				        ->add_rules('description','required',array($this,'check_required'))
				        ->add_rules('category', 'required')
				        ->add_rules('sub_category', 'required')
				        ->add_rules('sec_category', 'required')
				        ->add_rules('price', 'required', 'chars[0-9.]',array($this,'check_price_val_lmi'))
				        //->add_rules('deal_value', 'required', array($this, 'check_price_lmi'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
						 ->add_rules('deal_value', 'required',array($this, 'check_prime_price_lmi_prd'), array($this, 'check_price_lmi_prd'),'chars[0-9.]',array($this,'check_deal_value_lmi'))
				        ->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]')
				        //->add_rules('stores','required')
				        ->add_rules('delivery_days','required');
						
						
						 $price_s = $post->price;
						if(isset($price_s)){
							$price_s = trim($price_s);
							if($price_s != "")
							$post->add_rules('price','chars[0-9.]',array($this,'check_price_val_lmi'));
						}
							
						$prime_price_s = $post->prime_price;
						if(isset($prime_price_s)){
							$prime_price_s = trim($prime_price_s);
							if($prime_price_s != "")
							$post->add_rules('prime_price','chars[0-9.]',array($this,'check_price_val_lmi'));
						}
						
						
						
				        if($post->buy_bulk!="")
							{
							$post->add_rules('get_bulk','required');
							}
							if($post->get_bulk!="")
							{
								$post->add_rules('buy_bulk','required');
							}
							if($post->buy_bulk!="" || $post->free_gift!="")
							{
								$post->add_rules('start_date','required');
								$post->add_rules('end_date','required',array($this, 'check_end_date'));
							}
			if($post->validate()){
			    $size_quantity = $this->input->post("size_quantity");
				$status = $this->merchant->edit_product($deal_id, $deal_key, arr::to_object($this->userPost),$size_quantity,$this->preview_type);
				if($status == 1 && $deal_key){
					if($_FILES['image']['name'] != "" ){
						$i=1;
						foreach(arr::rotate($_FILES['image']) as $files){
							if($files){
								$filename = upload::save($files);
								if($filename!=''){
									if($i==1){
										$IMG_NAME = $deal_key."_1.png";
										common::image($filename, 620,752, DOCROOT.'images/products/1000_800/'.$IMG_NAME);
									}  else { // replace if the 1st image s empty with the next successive image
										for($j=2;$j<=$i;$j++) {
										$IMG_NAME1 = $deal_key."_".$i;
										common::image($filename, 620,752, DOCROOT.'images/products/1000_800/'.$IMG_NAME1.'.png');
										}
									}
									$IMG_NAME = $deal_key."_".$i.'.png';
									common::image($filename, 620,752, DOCROOT.'images/products/1000_800/'.$IMG_NAME);
									unlink(realpath($filename));
								}
							}
							$i++;
						}
					}
					
					$this->product_deatils = $this->merchant->get_products_data($deal_key, $deal_id);
					  $store_key =$this->product_deatils->current()->store_url_title;
					  $producturl =$this->product_deatils->current()->url_title;
					  if($this->input->post('status') == 2){
						url::redirect(PATH.$store_key."/product/".$deal_key.'/'.$producturl."/store-admin-preview.html");
					  }else{
						common::message(1, $this->Lang["PRODUCT_EDIT_SUC"]);
						url::redirect(PATH."store-admin/manage-products.html");
					  }
					  
                                        /*common::message(1, $this->Lang["PRODUCT_EDIT_SUC"]);
                                        $lastsession = $this->session->get("lasturl");
                                        if($lastsession){
                                                url::redirect(PATH.$lastsession);
                                        } else {
                                                url::redirect(PATH."store-admin/manage-products.html");
                                        }*/
				}
				elseif($status == 8){
                                        common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
                                        $lastsession = $this->session->get("lasturl");
	                                if($lastsession){
	                                        url::redirect(PATH.$lastsession);
	                                } else {
	                                        url::redirect(PATH."store-admin/manage-products.html");
	                                }
				}
				$this->form_error["title"] = $this->Lang["PRODUCT_EXIST"];
			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
		$this->all_attributes=$this->merchant->getProductAttributes();
		$prdatr = $this->merchant->GetAttributes();
		$this->product_attributes = array();
		foreach($prdatr as $a){
			$this->product_attributes [$a->attribute_id]= $a->name ;
		}
                $this->shipping_data = $this->merchant->get_shipping_data();
		$this->selectproduct_attr = $this->merchant->get_product_attributes($deal_id);
		$this->selectproduct_policy = $this->merchant->get_product_policy($deal_id);
		$this->product_color = $this->merchant->get_product_color($deal_id);
		$this->selectproduct_size = $this->merchant->get_product_one_size($deal_id);
		$this->category_list = $this->merchant->get_gategory_list();
		$this->sub_category_list = $this->merchant->get_sub_category_list();
		$this->sec_category_list = $this->merchant->get_sec_category_list();
		$this->third_category_list = $this->merchant->get_third_category_list();
		$this->shop_list = $this->merchant->get_shop_list();
		$this->color_code = $this->merchant->get_shipping_product_color();
		$this->product_size = $this->merchant->get_product_size();
		$this->merchant_duration = $this->merchant->get_duration_values(); // store credits options
		$this->product = $this->merchant->get_edit_product($deal_id,$deal_key);
		$this->gift_list=$this->merchant->get_gift_list1();
		if(($this->product->current()->purchase_count) >= ($this->product->current()->user_limit_quantity) ){
			common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
			$lastsession = $this->session->get("lasturl");
                        if($lastsession){
                                url::redirect(PATH.$lastsession);
                        } else {
                                url::redirect(PATH."store-admin/manage-products.html");
                        }
		}
		$this->template->title = $this->Lang["EDIT_PRODUCT"];
		$this->template->content = new View("store_admin/edit_products");
	}
	
	

	/** BLOCK UNBLOCK PRODUCTS **/

        public function block_products($type = "", $key = "", $deal_id = "")
        {
			if(PRIVILEGES_PRODUCTS_BLOCK!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
            $this->mer_products_act="1";
	        $status = $this->merchant->blockunblockproducts($type, $key, $deal_id);
	        if($status == 1){
		        if($type == 1){
			        common::message(1, $this->Lang["PRODUCT_UNB_SUC"]);
		        }
		        else{
			        common::message(1, $this->Lang["PRODUCT_B_SUC"]);
		        }
	        }
	        else{
		        common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
	        }
                $lastsession = $this->session->get("lasturl");
	        if($lastsession){
	        url::redirect(PATH.$lastsession);
	        } else {
	        url::redirect(PATH."store-admin/manage-products.html");
	        }
	        
        }

	/** VIEW PRODUCTS **/

	public function view_products($deal_key  = "", $deal_id = "")
	{
		if(PRIVILEGES_PRODUCTS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->product_key = $deal_key;
		$this->product_id = $deal_id;
                $this->mer_products_act="1";
		$this->manage_product = "1";
		$this->product_deatils = $this->merchant->get_products_data($deal_key, $deal_id);
			if(count($this->product_deatils) == 0){
				common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
				 $lastsession = $this->session->get("lasturl");
	                        if($lastsession){
	                        url::redirect(PATH.$lastsession);
	                        } else {
	                        url::redirect(PATH."store-admin/manage-products.html");
	                        }
			}
		$this->category_list = $this->merchant->all_category_list();
		$this->selectproduct_policy = $this->merchant->get_product_policy($deal_id);
		$this->product_transaction_list = $this->merchant->get_product_transaction_data($deal_id);
		$this->cod_transaction_list = $this->merchant->get_cod_transaction_data($deal_id);
		$this->commission_list = $this->merchant->get_merchant_balance();
		$search=$this->input->get("id");

		if($search){
			if($search=='Search') {
				$out = '"S.No","Customers","Quantity","Amount","Admin Commission","Shipping","Status","Transaction Date","Transaction Type"'."\r\n";
					$i=0;
					$first_item = $i+1;
					foreach($this->product_transaction_list as $d)
					{
						if($d->payment_status=="SuccessWithWarning"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Completed"){ $status=$this->Lang["COMPLETED"]; }
						elseif($d->payment_status=="Success"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Pending"){ $status=$this->Lang["PENDING"]; }
						elseif($u->payment_status=="Failed"){ $tran_type = $this->Lang["FAILED"]; }

						if($d->type=="1"){ $transaction_type=$this->Lang["PPAL_CRDT"]; }
						elseif($d->type=="2"){ $transaction_type=$this->Lang["PPAL"]; }
						elseif($d->type=="3"){ $transaction_type=$this->Lang["REF_PAYMENT"]; }
						elseif($d->type=="4"){ $transaction_type="Authorize.net(".$d->transaction_type.")"; }
						elseif($d->type=="5"){ $transaction_type=$d->transaction_type; }
						elseif($d->type=="6"){ $transaction_type=$this->Lang["PAY_LATER"]; }
						elseif($d->type=="7"){ $transaction_type=$d->transaction_type; }

						$commission_val=$d->deal_merchant_commission;
						 $commission=$d->deal_value *($commission_val/100);
						 $Amount=($d->deal_value-$commission)*$d->quantity;

						$out .= $i + $first_item.',"'.$d->firstname.'","'.$d->quantity.'","'.($d->deal_value-$commission)*$d->quantity.'","'.$commission*$d->quantity.'","'.$d->shippingamount.'","'.$status.'","'.date('d-M-Y h:i:s A',$d->transaction_date).'","'.$transaction_type.'"'."\r\n";
						$i++;
					}
				} elseif($search=='COD') {
					$out = '"S.No","Customers","Quantity","Amount","Admin Commission","Shipping","Status","Transaction Date","Transaction Type"'."\r\n";

					$i=0;
					$first_item = $i+1;
					foreach($this->cod_transaction_list as $d)
					{
						if($d->payment_status=="SuccessWithWarning"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Completed"){ $status=$this->Lang["COMPLETED"]; }
						elseif($d->payment_status=="Success"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Pending"){ $status=$this->Lang["PENDING"]; }

						if($d->type=="1"){ $transaction_type=$this->Lang["PPAL_CRDT"]; }
						elseif($d->type=="2"){ $transaction_type=$this->Lang["PPAL"]; }
						elseif($d->type=="3"){ $transaction_type=$this->Lang["REF_PAYMENT"]; }
						elseif($d->type=="4"){ $transaction_type="Authorize.net(".$d->transaction_type.")"; }
						elseif($d->type=="5"){ $transaction_type=$d->transaction_type; }
						elseif($d->type=="7"){ $transaction_type=$d->transaction_type; }

						 $commission_val=$d->deal_merchant_commission;
						 $commission=$d->deal_value *($commission_val/100);
						 $Amount=($d->deal_value-$commission)*$d->quantity;

						$out .= $i + $first_item.',"'.$d->firstname.'","'.$d->quantity.'","'.($d->deal_value-$commission)*$d->quantity.'","'.$commission*$d->quantity.'","'.$d->shippingamount.'","'.$status.'","'.date('d-M-Y h:i:s A',$d->transaction_date).'","'.$transaction_type.'"'."\r\n";
						$i++;
					}
				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Products.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
			}
		$this->template->title = $this->Lang["PRODUCT_DET"];
		$this->template->content = new View("store_admin/view_products");
	}

	/** PRODUCT SHIPPING DELIVERY **/

	public function shipping_delivery($page = "")
	{
		if(PRIVILEGES_PRODUCTS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->page = $page ==""?1:$page; // for export per page
		$this->url="store-admin/shipping-delivery.html";
		$this->mer_products_act="1";
		$this->shipping_delivery="1";
 	        $search=$this->input->get("id"); // Export CSV format
		$this->count_shipping = $this->merchant->get_shipping_count($this->input->get("search"));
			$this->pagination = new Pagination(array(
			'base_url'       => 'store-admin/shipping-delivery.html/page/'.$page."/",
			'uri_segment'    => 4,
			'total_items'    => $this->count_shipping,
			'items_per_page' => 10,
			'style'          => 'digg',
			'auto_hide'      => TRUE
			));
		$this->search = $this->input->get();
		$this->search_key = arr::to_object($this->search);

		$this->shipping_list = $this->merchant->get_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"",0);

		if($search){ // For Export all in CSV format
			$this->shipping_list = $this->merchant->get_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"",1);
		}
		$this->product_size = $this->merchant->get_shipping_product_size();
		$this->product_color = $this->merchant->get_shipping_product_color();
		if($_POST){
			$email_id = $this->input->post('email');
			$message = $this->input->post('message');
			$fromEmail = NOREPLY_EMAIL;
			if(EMAIL_TYPE==2){
			email::smtp($fromEmail,$email_id, SITENAME, $message);
			}else{
			email::sendgrid($fromEmail,$email_id, SITENAME, $message);
			}
			common::message(1, $this->Lang["MAIL_SENDED"]);
			$status = $this->merchant->update_shipping_status($this->input->post('id'));
			if($status){
			        $lastsession = $this->session->get("lasturl");
                                if($lastsession){
                                url::redirect(PATH.$lastsession);
                                } else {
				url::redirect(PATH."store-admin/shipping-delivery.html");
				}
			}
		}

		if($search){ // Export in CSV format
				$out = '"S.No","Product Title","Name","Email","Date & Time","Phone Number","Address","Delivery Status"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->shipping_list as $d)
				{
					if($d->delivery_status == 0 ){
						$delivery = $this->Lang['PENDING'];
					}
					else if($d->delivery_status == 1 ){
							$delivery = $this->Lang['ORDER_PACKED'];
					}
					else if($d->delivery_status == 2 ){
							$delivery = $this->Lang['SHIPPED_DELI_CENT'];
					}
					else if($d->delivery_status == 3 ){
							$delivery = $this->Lang['OR_OUT_DELI'];
					}
					else if($d->delivery_status == 4 ){
							$delivery = $this->Lang['DELIVERED'];
					}

					$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->email.'","'.date('d-M-Y h:i:s A',$d->shipping_date).'","'.$d->phone.'","'.$d->adderss1.",".$d->address2.'","'.$delivery.'"'."\r\n";
					$i++;

				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Product-shipping.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->title = $this->Lang["SHIP_DEL"];
		$this->template->content = new View("store_admin/shipping_delivery");
	}

	/**SEND EMAIL COPUONS **/

    public function product_send_email($deal_id = "", $deal_key = "")
    {
		$this->mer_products_act="1";
		$this->manage_product = "1";
		$this->url="merchant/manage-products.html";
		$this->product_deatils = $this->merchant->get_productsmail_data($deal_key, $deal_id);
		if(count($this->product_deatils) == 0){
		common::message(-1, $this->Lang["PRODUCT_BLOCKED"]);		
		 $lastsession = $this->session->get("lasturl");
	        if($lastsession){
	        url::redirect(PATH.$lastsession);
	        } else {
	        url::redirect(PATH."store-admin/manage-products.html");
	        }
		}

		if($_POST){
			$this->product_deatils = $this->merchant->get_products_data($deal_key, $deal_id);
			$this->userPost = utf8::clean($this->input->post());
			$users = strip_tags(addslashes($this->input->post("users")));
			$fname = strip_tags(addslashes($this->input->post("firstname")));
			$email = trim(strip_tags(addslashes($this->input->post("email"))));
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('users', 'required')
							->add_rules('email','required')
							->add_rules('subject', 'required','chars[a-zA-z0-9- _,/.+]')
							->add_rules('message', 'required');
				if($post->validate()){
					foreach($email as $mail){
						$mails = explode("__",$mail);
						$useremail =$this->mail=  $mails[0];
						$usrname =  $mails[1];
						if(isset($usrname) && isset($useremail))
							$message = " <p> ".$post->message." </p>";
							$message .= new View ("admin_product/mail_product");
							$this->email_id = $useremail;
                                                $this->name = $usrname;
                                                $this->message = $message;
                                                $fromEmail = NOREPLY_EMAIL;
                                                $message = new View("themes/".THEME_NAME."/admin_mail_template");
							$fromEmail = NOREPLY_EMAIL;
							if(EMAIL_TYPE==2){
							email::smtp($fromEmail,$useremail,$post->subject,$message);
							}else{
							email::sendgrid($fromEmail,$useremail,$post->subject,$message);
							}
							common::message(1, "Mail Send Successfully");
					}
					 $lastsession = $this->session->get("lasturl");
	                                if($lastsession){
	                                url::redirect(PATH.$lastsession);
	                                } else {
	                                url::redirect(PATH."store-admin/manage-products.html");
	                                }
				}
				else{
					$this->form_error = error::_error($post->errors());
				}
		}
	$this->template->title = $this->Lang["SEND_PRO"];
    $this->template->content = new View("store_admin/send_mail");
    }

	

	/** PRODUCT CASH ON DELIVERY **/

	public function cash_on_delivery($page = "")
	{
		if(PRIVILEGES_PRODUCTS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->page = $page ==""?1:$page; // for export per page
		$this->url="merchant/cash-delivery.html";

		$this->cash_delivery="1";
	 	$this->mer_products_act="1";
 	    $search=$this->input->get("id"); // Export CSV format
		$this->count_shipping = $this->merchant->get_shipping_count($this->input->get("search"),"COD");


				$this->pagination = new Pagination(array(
				'base_url'       => 'merchant/cash-delivery.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_shipping,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide'      => TRUE
				));
		$this->search = $this->input->get();
		$this->search_key = arr::to_object($this->search);

		$this->shipping_list = $this->merchant->get_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"COD",0);
		if($search){ // Export all in CSV format
			$this->shipping_list = $this->merchant->get_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"COD",1);
		}

		$this->product_size = $this->merchant->get_shipping_product_size();
		$this->product_color = $this->merchant->get_shipping_product_color();

		if($_POST){

					$email_id = $this->input->post('email');
					$this->shipping_id = $this->input->post('id');
					$message = $this->input->post('message');
					$message.= new View("admin_product/shipping_mail_template");
					$fromEmail = NOREPLY_EMAIL;
					if(EMAIL_TYPE==2){
					email::smtp($fromEmail,$email_id, SITENAME, $message);
					}else{
					email::sendgrid($fromEmail,$email_id, SITENAME, $message);

					}
					common::message(1, $this->Lang["MAIL_SENDED"]);
					$status = $this->merchant->update_shipping_status($this->input->post('id'));
						if($status){
						        $lastsession = $this->session->get("lasturl");
                                                        if($lastsession){
                                                        url::redirect(PATH.$lastsession);
                                                        } else {
							url::redirect(PATH."store-admin/cash-delivery.html");
							}
						}


		}

		if($search){ // Export in CSV format
				$out = '"S.No","Product Title","Name","Email","Date & Time","Phone Number","Address","Delivery Status"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->shipping_list as $d)
				{
					if($d->delivery_status == 0 ){
						$delivery = $this->Lang['PENDING'];
					}
					else if($d->delivery_status == 4 ){
							$delivery = $this->Lang['COMPLETED'];
					}
					else if($d->delivery_status == 5 ){
							$delivery = $this->Lang['FAILED'];
					}

					$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->email.'","'.date('d-M-Y h:i:s A',$d->shipping_date).'","'.$d->phone.'","'.$d->adderss1.",".$d->address2.'","'.$delivery.'"'."\r\n";
					$i++;

				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Product-COD.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->title = 'Cash On Delivery';
		$this->template->content = new View("store_admin/cash_on_delivery");
	}
/** VALIDATE COUPON **/
	public function validate_coupon()
	{
			$coupon = $this->input->get('coupon');
			$amount = base64_decode($this->input->get('amount'));
			$trans_id = base64_decode($this->input->get('trans_id'));
			$coupon_check = $this->merchant->validate_coupon($coupon,$amount,$trans_id);
			echo $coupon_check; exit;
	}
	/*** ADD AUCTION   ***/

	public function add_auction()
	{
		if(PRIVILEGES_AUCTIONS_ADD!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->mer_auction_act = "1";
	    $this->add_auction="1";
		$adminid=$this->session->get('user_id');
		$this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
		if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('title', 'required')
							->add_rules('description', 'required',array($this,'check_required'))
							->add_rules('category', 'required')
							->add_rules('sub_category', 'required')
							->add_rules('sec_category', 'required')
							->add_rules('bid_increment', 'required','chars[0-9.]',array($this,'check_price_val_lmi'),array($this,'check_bid_increment_val'))
							//->add_rules('quantity', 'required','chars[0-9]')
							->add_rules('shipping_fee', 'required','chars[0-9.]')
							->add_rules('shipping_info', 'required')
							->add_rules('product_price', 'required','chars[0-9.]',array($this,'check_price_val_lmi'))
							->add_rules('deal_value', 'required','chars[0-9.]',array($this,'check_deal_value_lmi'),array($this,'check_deal_price'))
							->add_rules('start_date', 'required')
							->add_rules('end_date', 'required', array($this, 'check_end_date'))
							->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');
							//->add_rules('users', 'required');

			 if($post->validate()){

				$deal_key = text::random($type = 'alnum', $length = 8);
				$status = $this->merchant->add_auction_products(arr::to_object($this->userPost),$deal_key);

			     if($status > 0 && $deal_key){
			            if($_FILES['image']['name']['0'] != "" )
                                    {
                                        $i=1;
                                            foreach(arr::rotate(basename($_FILES['image'])) as $files){
	                                         if($files){
                                                        $filename = upload::save($files);
				                        if($filename!=''){
                                                                $IMG_NAME = $deal_key."_".$i.'.png';
			                            		common::image($filename, 620,752, DOCROOT.'images/auction/1000_800/'.$IMG_NAME);
					                        unlink(realpath($filename));
				                        }
                                                   }
                                                $i++;
			                       }
			               }
			                
	                               /**Auction AUTOPOST FACEBOOK WALL**/
					if($this->input->post('autopost')==1){

					        $producturl=url::title($this->input->post('title'));
						$productURL = PATH."auction/".$deal_key.'/'.$producturl.".html";
						$message = "A new auction published onthe site"." ".strip_tags(addslashes($this->input->post('title')))." ".$productURL." limited offer hurry up!";
						$fb_access_token = $this->session->get("fb_access_token");
						$fb_user_id = $this->session->get("fb_user_id");
						$post_arg = array("access_token" => $fb_access_token, "message" => $message, "id" => $fb_user_id, "method" => "post");
						common::fb_curl_function("https://graph.facebook.com/feed", "POST", $post_arg);

					}
					/**Auction AUTOPOST FACEBOOK WALL END HERE**/
							
			                
			              	common::message(1, $this->Lang["AUCTION_ADD_SUC"]);
					url::redirect(PATH."store-admin/manage-auction.html");
				}
				$this->form_error["city"] = $this->Lang["AUCTION_EXIST"];
			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
		$this->sub_category_list = $this->merchant->get_sub_category_list();
		$this->sec_category_list = $this->merchant->get_sec_category_list();
		$this->third_category_list = $this->merchant->get_third_category_list();
		$this->category_list = $this->merchant->get_category_list_order(3);
		$this->shop_list = $this->merchant->get_shop_list();
	    $this->template->title = $this->Lang['ADD_ACT_PRO'];
		$this->template->content = new View("store_admin/add_auction");
	}

	/** MANAGE AUCTION **/

	public function manage_auction($type= "", $page = "")
	{
		if(PRIVILEGES_AUCTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->mer_auction_act = "1";
		 $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search = $this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
		$this->more_action = "";
	    if($type == 1){
	        $this->archive_auction="1";
			$this->template->title = "Archive Auction Products";
			$this->url = "store-admin/archive-auction.html";
			$this->sort_url= PATH.'store-admin/archive-auction.html?';
		}
		else{
		    $this->manage_auction="1";
			$this->template->title = "Manage Auction Products";
			$this->url = "store-admin/manage-auction.html";
			$this->sort_url= PATH.'store-admin/manage-auction.html?';
		}

	    $this->count_deal_all_record = $this->merchant->get_all_auction_count($type, $this->input->get("city"), $this->input->get('name'),$this->type,$this->sort,$this->today,$this->startdate,$this->enddate);
		$this->city_list = $this->merchant->get_city_lists();
		$this->search_key = arr::to_object($this->input->get());
		$this->pagination = new Pagination(array(
				'base_url'       => $this->url.'/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_deal_all_record,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));

		$this->all_deal_list = $this->merchant->get_all_auction_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"),$this->input->get('name'),$this->type,$this->sort,0,$this->today,$this->startdate,$this->enddate);

		if($search =='all'){ // for export all in csv format
			$this->all_deal_list = $this->merchant->get_all_auction_list($type, $this->pagination->sql_offset, $this->pagination->items_per_page ,$this->input->get("city"),$this->input->get('name'),$this->type,$this->sort,1,$this->today,$this->startdate,$this->enddate);
		}
		if($search){
		$out = '"S.No","Title","Category","Auction Price","Start Date","End Date","Bid Count","Bid Increment","Merchant Name","Shop Name","Country","City","Image"'."\r\n";

		$i=0;
		$first_item = $this->pagination->current_first_item;
		foreach($this->all_deal_list as $d)
		{
			if(file_exists(DOCROOT.'images/auction/1000_800/'.$d->deal_key.'_1.png'))
    		{
     		    	$deal_image =PATH.'images/auction/1000_800/'.$d->deal_key.'_1.png';
    		}
    		else
   		{
     		    $deal_image =PATH.'images/no-images.png';
    		}

		$out .= $i + $first_item.',"'.$d->deal_title.'","'.$d->category_name.'","'.(CURRENCY_SYMBOL.$d->deal_value).'","'.date('m/d/Y H:i:s',$d->startdate).'","'.date('m/d/Y H:i:s',$d->enddate).'","'.$d->bid_count.'","'.$d->bid_increment.'","'.$d->firstname.'","'.$d->store_name.'","'.$d->country_name.'","'.$d->city_name.'","'.$deal_image.'"'."\r\n";
		$i++;
		}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=Auctions.xls');
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			echo "\xEF\xBB\xBF"; // UTF-8 BOM
			echo $out;
			exit;
		}

		$this->template->content = new View("store_admin/manage_auction");
	}

	/** VIEW AUCTION **/

	public function view_auction($deal_key= "", $deal_id = "")
	{
		if(PRIVILEGES_AUCTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->auction_key=$deal_key;
                $this->auction_id=$deal_id;
                $this->mer_auction_act = "1";
                $this->manage_auction="1";
                $this->deal_deatils = $this->merchant->get_auction_data($deal_key, $deal_id);
		if(count($this->deal_deatils) == 0){
			common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
			$lastsession = $this->session->get("lasturl");
		        if($lastsession){
		        url::redirect(PATH.$lastsession);
		        } else {
		        url::redirect(PATH."store-admin/manage-auction.html");
		        }
		}
		$this->category_list = $this->merchant->all_category_list();
		$this->transaction_auction_list = $this->merchant->get_auction_transaction_data($deal_id);
		$this->commission_list = $this->merchant->get_merchant_balance();
		$this->bidding_list =  $this->merchant->get_bidding_list($deal_id);
		$this->highest_bid =  $this->merchant->get_highest_bid($deal_id);
		$search=$this->input->get("id");

		if($search){
			if($search=='Search') {
					$out = '"S.No","Auction Name","User Name","Starting Bid('.CURRENCY_SYMBOL.')","Bid Amount('.CURRENCY_SYMBOL.')","Bid Time"'."\r\n";
					$i=0;
					$first_item = $i+1;
					foreach($this->bidding_list as $d)
					{
	 					$out .= $i + $first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->deal_value.'","'.$d->bid_amount.'","'.date("d-M-Y h:i:s A", $d->bidding_time).'"'."\r\n";
						$i++;
					}
				}elseif($search=='BID') {
					$out = '"S.No","Customers","Auction Title","Bidding Price('.CURRENCY_SYMBOL.')","Shipping Fee('.CURRENCY_SYMBOL.')","Pay Amount('.CURRENCY_SYMBOL.')","Status","Transaction Date","Transaction Type"'."\r\n";
					$i=0;
					$first_item = $i+1;
					foreach($this->transaction_auction_list as $d)
					{
						if($d->payment_status=="SuccessWithWarning"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Completed"){ $status=$this->Lang["COMPLETED"]; }
						elseif($d->payment_status=="Success"){ $status=$this->Lang["SUCCESS"]; }
						elseif($d->payment_status=="Pending"){ $status=$this->Lang["PENDING"]; }
						elseif($d->payment_status=="Failed"){ $status=$this->Lang["FAILED"]; }

                                                if($d->type=="1"){ $transaction_type=$this->Lang["PPAL_CRDT"]; }
                                                elseif($d->type=="2"){ $transaction_type=$this->Lang["PPAL"]; }
                                                elseif($d->type=="3"){ $transaction_type=$this->Lang["REF_PAYMENT"]; }
                                                elseif($d->type=="4"){ $transaction_type="Authorize.net(".$d->transaction_type.")"; }
                                                elseif($d->type=="5"){ $transaction_type=$d->transaction_type; }
                                                elseif($d->type=="6"){ $transaction_type=$this->Lang["PAY_LATER"]; }

	 					$out .= $i + $first_item.',"'.$d->firstname.'","'.$d->deal_title.'","'.$d->bid_amount.'","'.$d->shipping_amount.'","'.$d->amount.'","'.$status.'","'.date('d-M-Y h:i:s',$d->transaction_date).'","'.$transaction_type.'"'."\r\n";
						$i++;
					}
				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Auctions.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->title = "Auction Product Details";
		$this->template->content = new View("store_admin/view_auction");
	}

	/** EDIT AUCTION **/

	public function edit_auction($deal_id = "", $deal_key = "")
	{
		if(PRIVILEGES_AUCTIONS_EDIT!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	        $deal_id = base64_decode($deal_id);
                $this->mer_auction_act = "1";
                $this->manage_auction="1";
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js', PATH.'js/multiimage.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
	        if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
					
					->add_rules('title', 'required')
					->add_rules('description', 'required',array($this,'check_required'))
					->add_rules('category', 'required')
					->add_rules('sub_category', 'required')
					->add_rules('sec_category', 'required')
					->add_rules('bid_increment', 'required','chars[0-9.]',array($this,'check_price_val_lmi'),array($this,'check_bid_increment_val'))
					//->add_rules('quantity', 'required','chars[0-9]')
					->add_rules('shipping_fee', 'required','chars[0-9.]')
					->add_rules('shipping_info', 'required')
					->add_rules('product_price', 'required','chars[0-9.]',array($this,'check_price_val_lmi'))
					->add_rules('deal_value', 'required','chars[0-9.]',array($this,'check_deal_value_lmi'),array($this,'check_deal_price'))
					->add_rules('start_date', 'required')
					->add_rules('end_date', 'required', array($this, 'check_end_date'))
					->add_rules('image', 'upload::valid', 'upload::type[gif,jpg,png,jpeg]', 'upload::size[1M]');

			if($post->validate()){
		        $status = $this->merchant->edit_auction($deal_id, $deal_key, arr::to_object($this->userPost));

                                if($status == 1 && $deal_key){

					if($_FILES['image']['name'] != "" )
                     {
                                    $i=1;
                                    foreach(arr::rotate($_FILES['image']) as $files){
                                                if($files){
                                                $filename = upload::save($files);
                                                        if($filename!=''){
                                                                if($i==1)
                                                                {
                                                                        $IMG_NAME = $deal_key."_1.png";
                                                                        common::image($filename, 620,752, DOCROOT.'images/auction/1000_800/'.$IMG_NAME);
                                                                } else { // replace if the 1st image s empty with the next successive image
                                                                        for($j=2;$j<=$i;$j++) {
                                                                        $IMG_NAME1 = $deal_key."_".$i;
                                                                        common::image($filename, 620,752, DOCROOT.'images/auction/1000_800/'.$IMG_NAME1.'.png');
                                                                        }
                                                                }
                                                                $IMG_NAME = $deal_key."_".$i.'.png';
                                                                common::image($filename, 620,752, DOCROOT.'images/auction/1000_800/'.$IMG_NAME);
                                                                unlink(realpath($filename));
                                                        }
                                                }
                                                $i++;
			                  }
			         }
					common::message(1, $this->Lang["AUCTION_EDIT_SUC"]);
					$lastsession = $this->session->get("lasturl");
		                        if($lastsession){
		                        url::redirect(PATH.$lastsession);
		                        } else {
		                        url::redirect(PATH."store-admin/manage-auction.html");
		                        }
				}
				elseif($status == 8){
					common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
					$lastsession = $this->session->get("lasturl");
		                        if($lastsession){
		                        url::redirect(PATH.$lastsession);
		                        } else {
		                        url::redirect(PATH."store-admin/manage-auction.html");
		                        }
				}
			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
        //$this->category_list = $this->merchant->get_gategory_list();
        $this->category_list = $this->merchant->get_category_list_order(3);
	$this->sub_category_list = $this->merchant->get_sub_category_list();
	$this->sec_category_list = $this->merchant->get_sec_category_list();
	$this->third_category_list = $this->merchant->get_third_category_list();
        $this->shop_list = $this->merchant->get_shop_list();
        $this->deal = $this->merchant->get_edit_auction($deal_id,$deal_key);
        if(($this->deal->current()->enddate) <  time() ){
		common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
		$lastsession = $this->session->get("lasturl");
                if($lastsession){
                url::redirect(PATH.$lastsession);
                } else {
                url::redirect(PATH."store-admin/manage-auction.html");
                }
	}
        $this->template->title = $this->Lang["EDIT_AUCTION"];
        $this->template->content = new View("store_admin/edit_auction");
	}

	/** BLOCK UNBLOCK AUCTION **/

	public function block_auction($type = "", $key = "", $deal_id = "")
	{
		if(PRIVILEGES_AUCTIONS_BLOCK!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$status = $this->merchant->blockunblockauction($type, $key, $deal_id);

		if($status == 1){
		        if($type == 1){
				common::message(1, $this->Lang["AUCTION_UNB_SUC"]);
			}
			else{
				common::message(1, $this->Lang["AUCTION_B_SUC"]);
			}
		}
		else{
		        common::message(-1, $this->Lang["NO_RECORD_FOUND"]);
		}
		$lastsession = $this->session->get("lasturl");
	        if($lastsession){
	        url::redirect(PATH.$lastsession);
	        } else {
	        url::redirect(PATH."store-admin/manage-auction.html");
	        }
	}

	/** SELECT SUB CATEGORY AND UNDER CATEGORY USER **/

     public function merchant_change_category($category= "")
     {

		if($category == -1){
			$list = '<td><label>Select Main Category*</label></td><td><label>:</label></td><td><select name="sub_category">';
			$list .='<option value="">Select Category First</option>';
			echo $list .='</select></td>';
		    exit;
		}
		else {
		        $categorylist = $this->merchant->get_sub_category($category);
		        if(count($categorylist) > 0){
					$list = '<td><label>Select Main Category*</label></td>
								<td><label>:</label></td>
								<td><select name="sub_category" onchange="return merchant_sec_change_category(this.value);">
								<option value="">Select Any Category</option>';
					foreach($categorylist as $s){
						$list .='<option value="'.$s->category_id.'">'.ucfirst($s->category_name).'</option>';
					}
					echo $list .='</select></td>';
				}
				else {
					$list = '<td><label>Select Main Category*</label></td><td><label>:</label></td><td><select name="sub_category">';
					$list .='<option value="">No Main Category</option>';
					echo $list .='</select></td>';
				}
				exit;
		}
	}

	public function merchant_sec_change_category($category= "")
	{
		if($category == -1){
			$list = '<td><label>Select Sub Category*</label></td><td><label>:</label></td><td><select name="sub_category">';
			$list .='<option value="">Select Main Category First</option>';
			echo $list .='</select></td>';
		    exit;
		}
		else {
		        $categorylist = $this->merchant->get_sec_category($category);
		        if(count($categorylist) > 0){
					$list = '<td><label>Select Sub Category*</label></td>
								<td><label>:</label></td>
                                                                <td><select name="sec_category" onchange="return merchant_third_change_category(this.value);">
								<option value="">Select Any Category</option>';
					foreach($categorylist as $s){
						$list .='<option value="'.$s->category_id.'">'.ucfirst($s->category_name).'</option>';
					}
					echo $list .='</select></td>';
				}
				else {
					$list = '<td><label>Select Sub Category*</label></td><td><label>:</label></td><td><select name="sec_category">';
					$list .='<option value="">No Sub Category</option>';
					echo $list .='</select></td>';
				}
				exit;
		}
	}

	public function merchant_third_change_category($category= "")
	{
		if($category == -1){
			$list = '<td><label>Select Second Sub Category</label></td><td><label>:</label></td><td><select name="third_category">';
			$list .='<option value="">Select Sub Category First</option>';
			echo $list .='</select></td>';
		    exit;
		}
		else {
		        $categorylist = $this->merchant->get_third_category($category);
		        if(count($categorylist) > 0){
					$list = '<td><label>Select Second Sub Category</label></td>
								<td><label>:</label></td>
                                                                <td><select name="third_category" > <option value="">Select Any Category</option> ';
					foreach($categorylist as $s){
						$list .='<option value="'.$s->category_id.'">'.ucfirst($s->category_name).'</option>';
					}
					echo $list .='</select></td>';
				}
				else {
					$list = '<td><label>Select Second Sub Category</label></td><td><label>:</label></td><td><select name="third_category">';
					$list .='<option value="">No Sub Category</option>';
					echo $list .='</select></td>';
				}
				exit;
		}
	}

        /** SELECT EMAIL UNDER THE USER **/

        public function user_select($users= "")
	{
		if($users == 4){
	            $shoplistlist = $this->merchant->get_auction_users_data($users);
	        }
	        else if($users == 10){
                echo $list = '<div class="input-text1 clearfix"><label>Select Email* :</label>
                <div class="search-input1"><div class="add_pt">
                <ul>
                <li><span>No Email Under the Option</span></li></ul></div></div> </div>'; exit;
                }
                if(count($shoplistlist) > 0){
                        $list = '<div class="input-text1 clearfix"><label>Select Email* :</label>
                        <div class="search-input1" ><div class="add_pt">
                        <ul>
                        <li><input type="checkbox" name="email" onclick="checkboxcheckAll(&#39;newsletter&#39;,&#39;email&#39;)" /><span>Select all</span></li>';
                        foreach($shoplistlist as $s){
                        $list .= '<li><input type="hidden" name="firstname[]" value="'.$s->firstname.'" /><input type="checkbox" name="email[]" class="case" value="'.$s->email.'__'.$s->firstname.'" /><span>'.$s->email.'</span></li>';
                        }
                        echo $list .='</ul></div></div></div>';
                }
		exit;
	}

	/*** SEND AUCTION IN EMAIL  ***/

	 public function send_email($deal_id = "", $deal_key = "")
        {
		$this->mer_auction_act = "1";
		$this->manage_auction="1";
		$this->url="merchant/manage-auction.html";
		$this->deatils = $this->merchant->get_auctionmail_data($deal_key, $deal_id);
		if(count($this->deatils) == 0){
		        common::message(-1, $this->Lang["AUCTION_BLOCKED"]);		
		        $lastsession = $this->session->get("lasturl");
	                if($lastsession){
	                url::redirect(PATH.$lastsession);
	                } else {
	                url::redirect(PATH."store-admin/manage-auction.html");
	                }
		}
                if($_POST){
	  		$this->userPost = $this->deal_deatils = utf8::clean($this->input->post());
			$users = strip_tags(addslashes($this->input->post("users")));
			$fname = strip_tags(addslashes($this->input->post("firstname")));
			$email = trim(strip_tags(addslashes($this->input->post("email"))));
			$post = Validation::factory(array_merge(utf8::clean($_POST),utf8::clean($_FILES)))
							
							->add_rules('users', 'required')
							->add_rules('email','required')
							->add_rules('subject', 'required','chars[a-zA-z0-9- _,/.+]')
							->add_rules('message', 'required');
				if($post->validate()){
					foreach($email as $mail){
					$mails = explode("__",$mail);
					$useremail = $this->mail= $mails[0];
					$usrname =  $mails[1];
					if(isset($usrname) && isset($useremail))
					$message = " <p> ".$post->message." </p>";
						$message .= new View ("admin_auction/mail_auction");
						$this->email_id = $useremail;
                                                $this->name = $usrname;
                                                $this->message = $message;
                                                $fromEmail = NOREPLY_EMAIL;
                                                $message = new View("themes/".THEME_NAME."/admin_mail_template");
                                                
					$fromEmail = NOREPLY_EMAIL;
					if(EMAIL_TYPE==2){
					email::smtp($fromEmail,$useremail,$post->subject,$message);
					}else{
					email::sendgrid($fromEmail,$useremail,$post->subject,$message);
					}
					common::message(1, $this->Lang["MAIL_SENDED"]);
					}
		               		$lastsession = $this->session->get("lasturl");
		                        if($lastsession){
		                        url::redirect(PATH.$lastsession);
		                        } else {
		                        url::redirect(PATH."store-admin/manage-auction.html");
		                        }
		        }
		        else{
		            $this->form_error = error::_error($post->errors());
		        }
		    }
		$this->template->title = $this->Lang["EMAIL_NEWS"];
		$this->template->content = new View("store_admin/send_mail");
        }

		/** AUCTION SHIPPING DELIVERY **/

	public function auction_shipping_delivery($page = "")
	{
		if(PRIVILEGES_AUCTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->page = $page ==""?1:$page; // for export per page
                $this->url="store-admin-auction/shipping-delivery.html";
                $this->mer_auction_act = "1";
                $this->shipping_delivery="1";
                $search=$this->input->get("id"); // Export CSV format

		$this->count_shipping = $this->merchant->get_auction_shipping_count($this->input->get("search"));
				$this->pagination = new Pagination(array(
				'base_url'       => 'store-admin-auction/shipping-delivery.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_shipping,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide'      => TRUE
				));
		$this->search = $this->input->get();
		$this->search_key = arr::to_object($this->search);

		$this->shipping_list = $this->merchant->get_auction_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"",0);

		if($search == 'all'){ // Export all in CSV format
			$this->shipping_list = $this->merchant->get_auction_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),"",1);
		}
		if($search){ // Export in CSV format
				$out = '"S.No","Auction Title","Name","Email","Date & Time","Phone Number","Address","Delivery Status"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->shipping_list as $d)
				{
					if($d->delivery_status == 0 ){
						$delivery = $this->Lang['PENDING'];
					}
					else if($d->delivery_status == 1 ){
							$delivery = $this->Lang['ORDER_PACKED'];
					}
					else if($d->delivery_status == 2 ){
							$delivery = $this->Lang['SHIPPED_DELI_CENT'];
					}
					else if($d->delivery_status == 3 ){
							$delivery = $this->Lang['OR_OUT_DELI'];
					}
					else if($d->delivery_status == 4 ){
							$delivery = $this->Lang['DELIVERED'];
					}

					$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->email.'","'.date('d-M-Y h:i:s A',$d->shipping_date).'","'.$d->phone.'","'.$d->adderss1.",".$d->address2.'","'.$delivery.'"'."\r\n";
					$i++;
				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Auction-Shipping.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->title = $this->Lang["SHIP_DEL"];
		$this->template->content = new View("store_admin/auction_shipping_delivery");
	}

	/** AUCTION SHIPPING DELIVERY **/

	public function auction_cash_on_delivery($page = "")
	{
		if(PRIVILEGES_AUCTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->page = $page ==""?1:$page; // for export per page
                $this->url="merchant-auction/cod-delivery.html";
                $this->mer_auction_act = "1";
                $this->cod_delivery="1";
                $search=$this->input->get("id"); // Export CSV format
		$this->count_shipping = $this->merchant->get_auction_shipping_count($this->input->get("search"),5);
				$this->pagination = new Pagination(array(
				'base_url'       => 'merchant-auction/cod-delivery.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_shipping,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide'      => TRUE
				));
		$this->search = $this->input->get();
		$this->search_key = arr::to_object($this->search);

		$this->shipping_list = $this->merchant->get_auction_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),5,0);

		if($search == 'all'){ // Export all in CSV format
			$this->shipping_list = $this->merchant->get_auction_shipping_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),5,1);
		}
		if($search){ // Export in CSV format
				$out = '"S.No","Auction Title","Name","Email","Date & Time","Phone Number","Address","Delivery Status"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->shipping_list as $d)
				{
					if($d->delivery_status == 0 ){
						$delivery = $this->Lang['PENDING'];
					}
					else if($d->delivery_status == 4 ){
							$delivery = $this->Lang['COMPLETED'];
					}
					else if($d->delivery_status == 5 ){
							$delivery = $this->Lang['FAILED'];
					}

					$out .= $i+$first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.$d->email.'","'.date('d-M-Y h:i:s A',$d->shipping_date).'","'.$d->phone.'","'.$d->adderss1.",".$d->address2.'","'.$delivery.'"'."\r\n";
					$i++;
				}
                                header('Content-Description: File Transfer');
                                header('Content-Type: application/octet-stream');
                                header('Content-Disposition: attachment; filename=Auction-COD-Shipping.xls');
                                header('Content-Transfer-Encoding: binary');
                                header('Expires: 0');
                                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                                header('Pragma: public');
                                echo "\xEF\xBB\xBF"; // UTF-8 BOM
                                echo $out;
                                exit;
			}
		$this->template->title = $this->Lang["SHIP_DEL"];
		$this->template->content = new View("store_admin/auction_cash_on_delivery");
	}

	/** DASHBOARD AUCTION **/
		
	public function dashboard_auction()
	{
		if(PRIVILEGES_AUCTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->mer_auction_act = "1";
                $this->auction_products = 1;
                $this->start_date = "";
                $this->end_date = "";
                if($_GET){
	                $this->start_date = $this->input->get('start_date');
	                $this->end_date = $this->input->get('end_date');
                }
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js',PATH.'js/jquery.js'));
                $this->start_date = $this->input->get("start_date");
                $this->end_date = $this->input->get("end_date");
                $this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->transaction_list = $this->merchant->get_auction_transaction_chart_list();
                $this->biding_data = $this->merchant->get_bidding_data_list();
                $this->deals_dashboard_data = $this->merchant->get_auction_chart_list();
                $this->template->content = new View("store_admin/auction_dashboard");
                $this->template->title = "Auction Dashboard";
	}

        /** AUCTION END **/

	/** CHECK MAX USER PURCHACE LIMIT GREATER THEN ZERO**/

	public function check_product_purchace_lmi()
	{
		if(($this->input->post("quantity"))!= '0'){
			return 1;
		}
		return 0;
	}

	/*** MERCHANT TRANSACTION***/

	public function admin_transaction($type = "", $page = "" )
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		} else if(PRIVILEGES_DEALS != 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}

                $this->mer_transactions_act="1";
                $this->deal_trans = 1;
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
		if($type == "Success"){
			$this->success_transaction = "1";
			$this->template->title = $this->Lang["SUCC_TRAN"];
			$base_URL = $this->base= 'store-admin/success-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin/success-transaction.html?';
		}
		elseif($type == "Completed"){
			$this->completed_transaction = "1";
			$this->template->title = $this->Lang["COMP_TRAN"];
			$base_URL = $this->base= 'store-admin/completed-transaction/page/'.$page."/";

			$this->sort_url= PATH.'store-admin/completed-transaction.html?';
		}
		elseif($type == "Faild"){
			$this->failed_transaction = "1";
			$this->template->title = $this->Lang["FAI_TRAN"];
			$base_URL = $this->base= 'store-admin/failed-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin/failed-transaction.html?';
		}
		elseif($type == "Pending"){
			$this->hold_transaction = "1";
			$this->template->title = $this->Lang["HOLD_TRAN"];
			$base_URL = $this->base= 'store-admin/hold-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin/hold-transaction.html?';
		}
		else{
			$this->all_transaction = "1";
			$this->template->title = $this->Lang["ALL_TRAN"];
			$base_URL = $this->base= 'store-admin/all-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin/all-transaction.html?';
		}
		$this->search_key = $this->input->get('name');
		$this->count_transaction_list = $this->merchant->count_transaction_deal_list($type,$this->search_key,$this->type,"",$this->sort,$this->today,$this->startdate,$this->enddate);

		$this->pagination = new Pagination(array(
			'base_url'       => $base_URL,
			'uri_segment'    => 4,
			'total_items'    => $this->count_transaction_list,
			'items_per_page' => 25,
			'style'          => 'digg',
			'auto_hide'      => TRUE
		));

		$this->transaction_list = $this->merchant->get_transaction_deal_list($type, $this->search_key, $this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,"",0,$this->today,$this->startdate,$this->enddate);
		if($search == 'all'){ // Export in CSV format
			$this->transaction_list = $this->merchant->get_transaction_deal_list($type, $this->search_key, $this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,"",1,$this->today,$this->startdate,$this->enddate);
		}
		$this->commission_list = $this->merchant->get_merchant_balance();
		if($search){ // Export in CSV format
				$out = '"S.No","Name","Deal Title","Quantity","Amount('.CURRENCY_SYMBOL.')","Admin Commission('.CURRENCY_SYMBOL.')","Status","Transaction Date & Time","Transaction Type"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->transaction_list as $u)
				{

                                        if($u->payment_status=="SuccessWithWarning"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Completed"){ $tran_type = $this->Lang["COMPLETED"]; }
                                        if($u->payment_status=="Success"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Pending"){$tran_type = $this->Lang["PENDING"];}
                                        if($u->type=="1"){ $tran_type1 = $this->Lang["PPAL_CRDT"]; }
                                        if($u->type=="2"){ $tran_type1 = $this->Lang["PPAL"]; }
                                        if($u->type=="3"){ $tran_type1 = $this->Lang["REF_PAYMENT"]; }
                                        if($u->type=="4"){ $tran_type1 = "Authorize.net(".$u->transaction_type.")"; }

					$out .= $i+$first_item.',"'.$u->firstname.'","'.$u->deal_title.'","'.$u->quantity.'","'.($u->deal_value-($u->deal_value *($u->deal_merchant_commission/100)))*$u->quantity.'","'.($u->deal_value *($u->deal_merchant_commission/100))*$u->quantity.'","'.$tran_type.'","'.date('d-M-Y h:i:s A',$u->transaction_date).'","'.$tran_type1.'"'."\r\n";
					$i++;
				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Deal-Transactions.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->content = new View("store_admin/transaction");
	}

	/*** ADMIN TRANSACTION***/

	public function product_transaction($type = "", $page = "" )
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}elseif(PRIVILEGES_PRODUCTS!=1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");
		}
                $this->mer_transactions_act="1";
                $this->pro_trans = 1;
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
		if($type == "Success"){
			$this->template->title = "Products ".$this->Lang["SUCC_TRAN"];
			$base_URL = $this->base= 'store-admin-product/success-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-product/success-transaction.html?';
		}
		elseif($type == "Completed"){
			$this->template->title = "Products ".$this->Lang["COMP_TRAN"];
			$base_URL = $this->base= 'store-admin-product/completed-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-product/completed-transaction.html?';
		}
		elseif($type == "Faild"){
			$this->template->title = "Products ".$this->Lang["FAI_TRAN"];
			$base_URL = $this->base= 'store-admin-product/failed-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-product/failed-transaction.html?';
		}
		elseif($type == "Pending"){
			$this->template->title = "Products ".$this->Lang["HOLD_TRAN"];
			$base_URL = $this->base= 'store-admin-product/hold-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-product/hold-transaction.html?';
		}
		else{
			$this->template->title = "Products ".$this->Lang["ALL_TRAN"];
			$base_URL = $this->base= 'store-admin-product/all-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-product/all-transaction.html?';
		}       
		$this->search_key = $this->input->get('name');
		$this->count_transaction_list = $this->merchant->count_transaction_product_list($type,$this->search_key,$this->type,$this->sort,"",$this->today,$this->startdate,$this->enddate);
		$this->pagination = new Pagination(array(
			'base_url'       => $base_URL,
			'uri_segment'    => 4,
			'total_items'    => $this->count_transaction_list,
			'items_per_page' => 25,
			'style'          => 'digg',
			'auto_hide'      => TRUE
		));

                $this->product_transaction_list = $this->merchant->get_transaction_product_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,2,$this->type,$this->sort,"",0,$this->today,$this->startdate,$this->enddate);

                if($search == 'all'){ // Export in CSV format
	                $this->product_transaction_list = $this->merchant->get_transaction_product_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,2,$this->type,$this->sort,"",1,$this->today,$this->startdate,$this->enddate);
                }

			if($search){ // Export all in CSV format
				$out = '"S.No","Name","Deal Title","Quantity","Amount('.CURRENCY_SYMBOL.')","Admin Commission('.CURRENCY_SYMBOL.')","Shipping Amount('.CURRENCY_SYMBOL.')","Status","Transaction Date & Time","Transaction Type"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->product_transaction_list as $u)
				{
                                        if($u->payment_status=="SuccessWithWarning"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Completed"){ $tran_type = $this->Lang["COMPLETED"]; }
                                        if($u->payment_status=="Success"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Pending"){$tran_type = $this->Lang["PENDING"];}
                                        if($u->payment_status=="Failed"){ $tran_type = $this->Lang["FAILED"]; }
                                        if($u->type=="1"){ $tran_type1 = $this->Lang["PPAL_CRDT"]; }
                                        if($u->type=="2"){ $tran_type1 = $this->Lang["PPAL"]; }
                                        if($u->type=="3"){ $tran_type1 = $this->Lang["REF_PAYMENT"]; }
                                        if($u->type=="4"){ $tran_type1 = "Authorize.net(".$u->transaction_type.")"; }

					$out .= $i+$first_item.',"'.$u->firstname.'","'.$u->deal_title.'","'.$u->quantity.'","'.($u->deal_value-($u->deal_value *($u->deal_merchant_commission/100)))*$u->quantity.'","'.($u->deal_value *($u->deal_merchant_commission/100))*$u->quantity.'","'.$u->shippingamount.'","'.$tran_type.'","'.date('d-M-Y h:i:s A',$u->transaction_date).'","'.$tran_type1.'"'."\r\n";
					$i++;

				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Product-Transactions.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->content = new View("store_admin/product_transaction");
        }

	/*** MERCHANT COD TRANSACTION***/

	public function cod_transaction($type = "", $page = "" )
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->mer_transactions_act="1";
		$this->cod_trans = 1;
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
			if($type == "Completed"){
				$this->template->title = "COD ".$this->Lang["SUCC_TRAN"];
				$base_URL = $this->base= 'merchant-cod/success-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod/success-transaction.html?';
			}
			elseif($type == "Failed"){
				$this->template->title = "COD ".$this->Lang["FAI_TRAN"];
				$base_URL = $this->base= 'merchant-cod/failed-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod/failed-transaction.html?';
			}
			elseif($type == "Pending"){
				$this->template->title = "COD ".$this->Lang["HOLD_TRAN"];
				$base_URL = $this->base= 'merchant-cod/hold-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod/hold-transaction.html?';
			}
			else{
				$this->template->title = "COD ".$this->Lang["ALL_TRAN"];
				$base_URL = $this->base= 'merchant-cod/all-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod/all-transaction.html?';
			}
		$this->search_key = $this->input->get('name');
		$this->count_transaction_list = $this->merchant->count_transaction_product_list($type,$this->search_key,$this->type,$this->sort,5,$this->today,$this->startdate,$this->enddate);
		$this->pagination = new Pagination(array(
			'base_url'       => $base_URL,
			'uri_segment'    => 4,
			'total_items'    => $this->count_transaction_list,
			'items_per_page' => 25,
			'style'          => 'digg',
			'auto_hide'      => TRUE
		));

		$this->cod_transaction_list = $this->merchant->get_transaction_product_list($type, $this->search_key, $this->pagination->sql_offset, $this->pagination->items_per_page,2,$this->type,$this->sort,5,0,$this->today,$this->startdate,$this->enddate);

		if($search == 'all'){ // Export all in CSV format
			$this->cod_transaction_list = $this->merchant->get_transaction_product_list($type, $this->search_key, $this->pagination->sql_offset, $this->pagination->items_per_page,2,$this->type,$this->sort,5,1,$this->today,$this->startdate,$this->enddate);
		}
		if($search){ // Export in CSV format
				$out = '"S.No","Name","Deal Title","Quantity","Amount('.CURRENCY_SYMBOL.')","Admin Commission('.CURRENCY_SYMBOL.')","Shipping Amount('.CURRENCY_SYMBOL.')","Status","Transaction Date & Time"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->cod_transaction_list as $u)
				{
                                        if($u->payment_status=="SuccessWithWarning"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Completed"){ $tran_type = $this->Lang["COMPLETED"]; }
                                        if($u->payment_status=="Success"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Pending"){$tran_type = $this->Lang["PENDING"];}
                                        if($u->payment_status=="Failed"){ $tran_type = $this->Lang["FAILED"]; }

					$out .= $i+$first_item.',"'.$u->firstname.'","'.$u->deal_title.'","'.$u->quantity.'","'.($u->deal_value-($u->deal_value *($u->deal_merchant_commission/100)))*$u->quantity.'","'.($u->deal_value *($u->deal_merchant_commission/100))*$u->quantity.'","'.$u->shippingamount.'","'.$tran_type.'","'.date('d-M-Y h:i:s A',$u->transaction_date).'"'."\r\n";
					$i++;
				}
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=Product-COD-Transactions.xls');
					header('Content-Transfer-Encoding: binary');
					header('Expires: 0');
					header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
					header('Pragma: public');
					echo "\xEF\xBB\xBF"; // UTF-8 BOM
					echo $out;
					exit;
			}
		$this->template->content = new View("store_admin/cod_transaction");
        }

		/** WINNER LIST  **/

	public function winner($page = "")
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->page = $page ==""?1:$page; // for export per page
		$this->url="store-admin-auction/winner-list.html";
			$this->mer_auction_act = "1";
			$this->winner = 1;
		if($_POST){
			$this->type="winner";
			$email_id = strip_tags(addslashes($this->input->post('email')));
			$message = strip_tags(addslashes($this->input->post('message')));
			//$this->deal_deatils = $this->merchant->get_deals_data($this->input->post('deal_key'), $this->input->post('deal_id'));
			$this->deal_deatils = utf8::clean($this->input->post());
			$message .= new View ("store_admin/mail_auction");
			$message .= "<p></p><p>Thanks & Regards</p> <p>". SITENAME ." Merchant</p>";
			$fromEmail = NOREPLY_EMAIL;
			if(EMAIL_TYPE==2){
			email::smtp($fromEmail,$email_id, SITENAME, $message);
			}else{
			email::sendgrid($fromEmail,$email_id, SITENAME, $message);
			}
			common::message(1, $this->Lang["MAIL_SENDED"]);
                        $lastsession = $this->session->get("lasturl");
                        if($lastsession){
                        url::redirect(PATH.$lastsession);
                        } else {
			url::redirect(PATH."store-admin-auction/winner-list.html");
			}
		}
		$this->search_key = arr::to_object(utf8::clean($this->input->get()));
		$count = $this->merchant->get_winner_count(strip_tags(addslashes($this->input->get('name'))));
		$this->pagination = new Pagination(array(
				'base_url'       => 'store-admin-auction/winner-list.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $count,
				'items_per_page' => 20,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$search=$this->input->get("id");
		$this->winner_list = $this->merchant->get_winner_list($this->pagination->sql_offset,$this->pagination->items_per_page, strip_tags(addslashes($this->input->get('name'))),0);

		if($search =='all'){ // for export all
			$this->winner_list = $this->merchant->get_winner_list($this->pagination->sql_offset,$this->pagination->items_per_page, strip_tags(addslashes($this->input->get('name'))),1);
		}
		if($search){
		$out = '"S.No","Auction Name","User name","Retail Price","Auction Price","Savings","Image"'."\r\n";
		$saving = 0;
		$i=0;
		$first_item = $this->pagination->current_first_item;
		foreach($this->winner_list as $d)
		{
			if(file_exists(DOCROOT.'images/auction/1000_800/'.$d->deal_key.'_1.png'))
    		{
     		    	$deal_image =PATH.'images/auction/1000_800/'.$d->deal_key.'_1.png';
    		}
    		else
   		{
     		    $deal_image =PATH.'images/no-images.png';
    		}
			$saving = round((($d->product_value - $d->deal_value) / $d->product_value) * 100) ;
			if($saving<0) $saving = 0;

		$out .= $i + $first_item.',"'.$d->deal_title.'","'.$d->firstname.'","'.(CURRENCY_SYMBOL.$d->product_value).'","'.(CURRENCY_SYMBOL.$d->deal_value).'","'.$saving.'%'.'","'.$deal_image.'"'."\r\n";
		$i++;
		}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=Auction-winners.xls');
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			echo "\xEF\xBB\xBF"; // UTF-8 BOM
			echo $out;
			exit;
		}
		$this->template->title = 'Winner List';
		$this->template->content = new View("store_admin/winner_list");
	}
		/*** ADMIN AUCTION TRANSACTION***/

	public function auction_transaction($type = "", $page = "" )
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}elseif(PRIVILEGES_AUCTIONS!=1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");
		}
                $this->mer_transactions_act="1";
                $this->act_trans = 1;                
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
		if($type == "Success"){
			$this->template->title = "Auction ".$this->Lang["SUCC_TRAN"];
			$base_URL = $this->base= 'store-admin-auction/success-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-auction/success-transaction.html?';
		}
		elseif($type == "Completed"){
			$this->template->title = "Auction ".$this->Lang["COMP_TRAN"];
			$base_URL = $this->base= 'store-admin-auction/completed-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-auction/completed-transaction.html?';

		}
		elseif($type == "Faild"){
			$this->template->title = "Auction ".$this->Lang["FAI_TRAN"];
			$base_URL = $this->base= 'store-admin-auction/failed-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-auction/failed-transaction.html?';

		}
		elseif($type == "Pending"){
			$this->template->title = "Auction ".$this->Lang["HOLD_TRAN"];
			$base_URL = $this->base= 'store-admin-auction/hold-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-auction/hold-transaction.html?';
		}
		else{
			$this->template->title = "Auction ".$this->Lang["ALL_TRAN"];
			$base_URL = $this->base= 'store-admin-auction/all-transaction/page/'.$page."/";
			$this->sort_url= PATH.'store-admin-auction/all-transaction.html?';
		}
		$this->search_key = $this->input->get('name');
		$this->count_transaction_list = $this->merchant->count_transaction_list($type,$this->search_key,$this->type,$this->sort,"",$this->today,$this->startdate,$this->enddate);
		$this->pagination = new Pagination(array(
			'base_url'       => $base_URL,
			'uri_segment'    => 4,
			'total_items'    => $this->count_transaction_list,
			'items_per_page' => 25,
			'style'          => 'digg',
			'auto_hide'      => TRUE
		));
		$this->transaction_auction_list = $this->merchant->get_transaction_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,"",0,$this->today,$this->startdate,$this->enddate);
		if($search == 'all'){ // Export all in CSV format
			$this->transaction_auction_list = $this->merchant->get_transaction_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,"",1,$this->today,$this->startdate,$this->enddate);
		}
		if($search){ // Export in CSV format
				$out = '"S.No","Name","Auction Title","Bidding Price('.CURRENCY_SYMBOL.')","Shipping Fee('.CURRENCY_SYMBOL.')","Pay Amount('.CURRENCY_SYMBOL.')","Admin Commission('.CURRENCY_SYMBOL.')","Status","Transaction Date & Time","Transaction Type"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->transaction_auction_list as $u)
				{

                                        if($u->payment_status=="SuccessWithWarning"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Completed"){ $tran_type = $this->Lang["COMPLETED"]; }
                                        if($u->payment_status=="Success"){ $tran_type = $this->Lang["SUCCESS"]; }
                                        if($u->payment_status=="Pending"){$tran_type = $this->Lang["PENDING"];}
                                        if($u->payment_status=="Failed"){ $tran_type = $this->Lang["FAILED"]; }

                                        if($u->type=="1"){ $tran_type1 = $this->Lang["PPAL_CRDT"]; }
                                        if($u->type=="2"){ $tran_type1 = $this->Lang["PPAL"]; }
                                        if($u->type=="3"){ $tran_type1 = $this->Lang["REF_PAYMENT"]; }
                                        if($u->type=="4"){ $tran_type1 = "Authorize.net(".$u->transaction_type.")"; }
					$out .= $i+$first_item.',"'.$u->firstname.'","'.$u->deal_title.'","'.$u->bid_amount.'","'.$u->shipping_amount.'","'.$u->amount.'","'.($u->bid_amount *($u->deal_merchant_commission/100)).'","'.$tran_type.'","'.date('d-M-Y h:i:s A',$u->transaction_date).'","'.$tran_type1.'"'."\r\n";
					$i++;

				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Auction-Transactions.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
			}
		$this->template->content = new View("store_admin/bid_transaction");
        }

         /*** CASH ON DELIVERY TRANSACTION FOR AUCTION ***/

	public function auction_cod_transaction($type = "", $page = "" )
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}else if(PRIVILEGES_AUCTIONS != 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
		$this->auction_cod_trans = 1;
		$this->mer_transactions_act="1";
		
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js'));
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->page = $page ==""?1:$page; // for export per page
                $this->type = $this->input->get('sort');
                $this->sort = $this->input->get('param');
                $search=$this->input->get("id");
                $this->today = $this->input->get("today");
		$this->startdate  = $this->input->get("startdate");
		$this->enddate  = $this->input->get("enddate");	
		$this->date_range = isset($_GET['date_range'])?1:0;
 	        $search=$this->input->get("id"); // Export CSV format
			if($type == "Success"){
				$this->template->title = "COD ".$this->Lang["SUCC_TRAN"];
				$base_URL = $this->base = 'merchant-cod-auction/success-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod-auction/success-transaction.html?';
			}
			else if($type == "Completed"){
				$this->template->title = "COD ".$this->Lang["SUCC_TRAN"];
				$base_URL = $this->base = 'merchant-cod-auction/success-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod-auction/success-transaction.html?';
			}
			elseif($type == "Failed"){
				$this->template->title = "COD ".$this->Lang["FAI_TRAN"];
				$base_URL = $this->base = 'merchant-cod-auction/failed-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod-auction/failed-transaction.html?';
			}
			elseif($type == "Pending"){
				$this->template->title = "COD ".$this->Lang["HOLD_TRAN"];
				$base_URL = $this->base = 'merchant-cod-auction/hold-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod-auction/hold-transaction.html?';
			}
			else{
				$this->template->title = "COD ".$this->Lang["ALL_TRAN"];
				$base_URL = $this->base = 'merchant-cod-auction/all-transaction/page/'.$page."/";
				$this->sort_url= PATH.'merchant-cod-auction/all-transaction.html?';
			}

		$this->search_key = $this->input->get('name');
		$this->count_transaction_list = $this->merchant->count_transaction_list($type,$this->search_key,$this->type,$this->sort,5,$this->today,$this->startdate,$this->enddate);
		$this->pagination = new Pagination(array(
			'base_url'       => $base_URL,
			'uri_segment'    => 4,
			'total_items'    => $this->count_transaction_list,
			'items_per_page' => 25,
			'style'          => 'digg',
			'auto_hide'      => TRUE
		));

		$this->transaction_auction_list = $this->merchant->get_transaction_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,5,0,$this->today,$this->startdate,$this->enddate);

		if($search == 'all'){ // Export all in CSV format
			$this->transaction_auction_list = $this->merchant->get_transaction_list($type, $this->search_key,$this->pagination->sql_offset, $this->pagination->items_per_page,$this->type,$this->sort,5,1,$this->today,$this->startdate,$this->enddate);
		}
		if($search){ // Export in CSV format
				$out = '"S.No","Name","Auction Title","Bidding Price('.CURRENCY_SYMBOL.')","Shipping Fee('.CURRENCY_SYMBOL.')","Pay Amount('.CURRENCY_SYMBOL.')","Admin Commission('.CURRENCY_SYMBOL.')","Status","Transaction Date & Time"'."\r\n";
				$i=0;
				$first_item = $this->pagination->current_first_item;
				foreach($this->transaction_auction_list as $u)
				{

                                if($u->payment_status=="SuccessWithWarning"){ $tran_type = $this->Lang["SUCCESS"]; }
                                if($u->payment_status=="Completed"){ $tran_type = $this->Lang["COMPLETED"]; }
                                if($u->payment_status=="Success"){ $tran_type = $this->Lang["SUCCESS"]; }
                                if($u->payment_status=="Pending"){$tran_type = $this->Lang["PENDING"];}
                                if($u->payment_status=="Failed"){ $tran_type = $this->Lang["FAILED"]; }

					$out .= $i+$first_item.',"'.$u->firstname.'","'.$u->deal_title.'","'.$u->bid_amount.'","'.$u->shipping_amount.'","'.$u->amount.'","'.($u->bid_amount *($u->deal_merchant_commission/100)).'","'.$tran_type.'","'.date('d-M-Y h:i:s A',$u->transaction_date).'"'."\r\n";
					$i++;
				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Auction-Transactions.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
			}
		$this->template->content = new View("store_admin/auction_cod_transaction");
        }

    /** GET  DEALS COUPON **/
	public function couopn_code()
	{
	    $this->mer_deals_act="1";
		$this->couopn_code="1";
		$code= $this->input->get('code');
			if($_POST){
				$code= $this->input->post('code');
				$post = new Validation($_POST);
				$post = Validation::factory(array_merge($_POST))
							 
							 ->add_rules('code', 'required');
					if($post->validate()){
						$this->deal_list=$this->merchant->coupon_code_validate($code);
							if(count($this->deal_list) == 0){
								common::message(-1, $this->Lang["COUPON_VERIFIED"]);
								url::redirect(PATH."store-admin/couopn_code.html");
						   	}
					}
					else{
						$this->form_error = error::_error($post->errors());
					}
			}
		if($code!=''){
			$this->deal_list=$this->merchant->coupon_code_validate($code);
		}
		$this->template->title = $this->Lang["COUPON_VALIDATE"];
		$this->template->content = new View("store_admin/coupon_code");

	}

   /** CLOSE DEALS COUPON **/

        public function close_deals($type = "",$coupon_code="",$deal_id="",$trans_id=0,$act)
        {
                $this->mer_deals_act="1";
                $status = $this->merchant->close_coupon_status($type,$coupon_code,$deal_id,$trans_id,$act);
                if($status){
                        common::message(1, $this->Lang["COUPON_CLOSED"]);
                } else {
                        common::message(-1, $this->Lang["COUPON_ALREADY"]);
                }
	        url::redirect(PATH."store-admin/couopn_code.html");
        }

	/**  CHECK PRICE LIMIT  **/


    public function check_price_val_lmi($price = "")
	{
		if($price!= '0'){
			return 1;
		}
		return 0;
	}

	/** CHECK DEAL VALUE LIMIT  **/

	public function check_deal_value_lmi()
	{
		if(($this->input->post("deal_value"))!= '0'){
			return 1;
		}
		return 0;
	}

	/** CHECK MAXIMUM LIMIT  **/

	public function check_maxlimit_lmi()
	{
		if(($this->input->post("maxlimit"))!= '0'){
			return 1;
		}
		return 0;
	}
	/** CHECK BID PRICE LESS THAN AUCTION PRICE **/

	public function check_bid_increment_val($price = "")
	{

		if($price < $this->input->post('deal_value')){
			return 1;
		}
		return 0;
	}

	/** CHECK AUCTION PRICE LESS THAN PRODUCT PRICE **/

	public function check_deal_price($price = "")
	{

		if($price < $this->input->post('product_price')){
			return 1;
		}
		return 0;
	}


	/** FORGOT PASSWORD **/

	public function forgot_password()
	{
		$this->captcha = new Captcha;
		if($_POST){
			$this->userPost = utf8::clean($this->input->post());
			$post = new Validation(utf8::clean($_POST));
			$post = Validation::factory(utf8::clean($_POST))
				
				->add_rules('email', 'required','valid::email')
				->add_rules('captcha', 'required');
			if($post->validate()){
				$email = strip_tags(addslashes(trim($this->input->post("email"))));
				if(Captcha::valid($this->input->post('captcha'))){
				        $pswd = text::random($type = 'alnum', $length = 10);
					$status = $this->merchant->forgot_password($email,$pswd);
						if($status == 1){				
						        
					        $users = $this->merchant->get_usr_details_list($email);
					        $userid = $users->current()->user_id;
							$name = $users->current()->firstname;
							$email = $users->current()->email;

			                        $this->forgot=1;
						$from = CONTACT_EMAIL;  
						$subject = $this->Lang['YOUR_PASS_RE_SUCC'];
						$this->name =$name;
						$this->password = $pswd;
						$this->email = $email;
						$message = new View("themes/".THEME_NAME."/mail_template");

						if(EMAIL_TYPE==2){
						email::smtp($from, $post->email,$subject, $message);
						}else{
						email::sendgrid($from, $post->email,$subject, $message);
						} 
						
						common::message(1,$this->Lang["PWD_RESET"]);
						url::redirect(PATH."store-admin-login.html");

						}
						elseif($status == -1){
							$this->email_error = $this->Lang["INV_EMAIL"];
						}
						elseif($status == 0){
							$this->email_error = $this->Lang["MER_EMAIL_EXIT"];
						}
						else {
							$this->email_error = $this->Lang["EMAIL_NOT_EXIST"];
						}
				}
				else{
					$this->captcha_error = $this->Lang["CODE_NOT"];
				}

			}
			else{
				$this->form_error = error::_error($post->errors());
			}
		}
		$this->template->title = $this->Lang['STORE_ADMIN'];
		$this->template->content=new View("store_admin/forgot_pass");
	}

	/** DEALS DASHBOARD   **/

	public function dashboard_deals()
	{
		if(PRIVILEGES_DEALS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
	    $this->mer_deals_act="1";
		$this->dashboard_deals="1";

		$this->start_date = "";
	     $this->end_date = "";

		if($_GET){
			$this->start_date = $this->input->get('start_date');
			$this->end_date = $this->input->get('end_date');
		}
	    $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js',PATH.'js/jquery.js'));
	    $this->start_date = $this->input->get("start_date");
	    $this->end_date = $this->input->get("end_date");
		$this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
		$this->transaction_list = $this->merchant->get_transaction_chart_list();
		$this->deals_transaction_list = $this->merchant->get_transaction_chart_list();
		$this->deals_dashboard_data = $this->merchant->get_deals_chart_list();
		$this->template->content = new View("store_admin/deals_dashboard");
		$this->template->title = $this->Lang['DEAL_DASH'];
	}

	/**  PRODUCTS DASHBOARD   **/

	public function dashboard_products()
	{
		if(PRIVILEGES_PRODUCTS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->mer_products_act="1";
                $this->dashboard_products = 1;
                $this->start_date = "";
                $this->end_date = "";
                if($_GET){
                        $this->start_date = $this->input->get('start_date');
                        $this->end_date = $this->input->get('end_date');
                }
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js',PATH.'js/jquery.js'));
                $this->start_date = $this->input->get("start_date");
                $this->end_date = $this->input->get("end_date");
                $this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->transaction_list = $this->merchant->get_product_transaction_chart_list();
                $this->deals_transaction_list = $this->merchant->get_product_transaction_chart_list();
                $this->deals_dashboard_data = $this->merchant->get_products_chart_list();
                $this->template->content = new View("store_admin/products_dashboard");
                $this->template->title = $this->Lang['PRODUCT_DASH'];
	}

	/** TRASACTION DASHBOARD  **/

	public function dashboard_transaction()
	{
		if(PRIVILEGES_TRANSACTIONS!= 1){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}
                $this->mer_transactions_act="1";
                $this->dashboard_transaction = "1";
                $this->start_date = "";
                $this->end_date = "";
		if($_GET){
			$this->start_date = $this->input->get('start_date');
			$this->end_date = $this->input->get('end_date');
		}
                $this->template->javascript .= html::script(array(PATH.'js/jquery-1.5.1.min.js', PATH.'js/jquery-ui-1.8.11.custom.min.js', PATH.'js/jquery-ui-timepicker-addon.js',PATH.'js/jquery.js'));
                $this->start_date = $this->input->get("start_date");
                $this->end_date = $this->input->get("end_date");
                $this->template->style .= html::stylesheet(array(PATH.'css/datetime.css'));
                $this->d_transaction_list = $this->merchant->get_transaction_chart_list();
                $this->p_transaction_list = $this->merchant->get_product_transaction_chart_list();
                $this->a_transaction_list = $this->merchant->get_auction_transaction_chart_list();
                $this->deals_transaction_list = $this->merchant->get_merchant_deal_transaction_chart_list();
                $this->products_transaction_list = $this->merchant->get_merchant_product_transaction_chart_list();
                $this->auctions_transaction_list = $this->merchant->get_auction_transaction_chart_list();
                $this->template->content = new View("store_admin/transaction_dashboard");
                $this->template->title = $this->Lang['TRANS_DASH'];
	}

	/** ADMIN DEAL AUTO POST FACEBOOK CONNECT **/

	public function facebook_auto_post()
	{
		if($this->user_type!= 3){
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."store-admin.html");	        
		}

		$fb_access_token = $this->session->get("fb_access_token");
		$redirect_url = PATH."store-admin/facebook_auto_post";
		if(!$fb_access_token){
			if($this->input->get("code")){
				$token_url = "https://graph.facebook.com/oauth/access_token?client_id=".FB_APP_ID."&redirect_uri=".$redirect_url."&client_secret=".FB_APP_SECRET."&code=".$this->input->get("code");
				$access_token = $this->curl_function($token_url);
				$FBtoken = str_replace("access_token=","", $access_token);
				$FBtoken = explode("&expires=", $FBtoken);
					if(isset($FBtoken[0])){
						$profile_data_url = "https://graph.facebook.com/me?access_token=".$FBtoken[0];
						$Profile_data = json_decode($this->curl_function($profile_data_url));

							if(isset($Profile_data->error)){
								echo $this->Lang["PROB_FB_CONNECT"]; exit;
							}
							else{
								$status = $this->merchant->register_autopost($Profile_data,$FBtoken[0]);
								common::message(1,"Updated");
							}
					}
					else{
						echo $this->Lang["PROB_FB_CONNECT"]; exit;
					}
				?><script>window.close();</script><?php
			}
			else{
				url::redirect("https://www.facebook.com/dialog/oauth?client_id=".FB_APP_ID."&redirect_uri=".urlencode($redirect_url)."&scope=email,read_stream,publish_stream,offline_access&display=popup");
				die();
			}
		}
		else{
			?><script>window.close();</script><?php
		 }
	}

	/** CURL GET AND POST**/

	private function curl_function($req_url = "" , $type = "", $arguments =  array())
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $req_url);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ch, CURLOPT_TIMEOUT, 100);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		if($type == "POST"){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $arguments);
		}
		$result = curl_exec($ch);
		curl_close ($ch);
		return $result;
	}

         /** UPDATE AUTO POST  DEAL IN TO FACEBOOK**/

	public function autopost()
	{
		$value = $this->input->get("value");
		$status = $this->merchant->update_autopost($value);
		$this->session->delete("facebook_status");
		$this->session->delete("fb_access_token");
		$this->session->delete("fb_user_id");
		exit;
	}

	/*MULTIPLE IMAGE DELETE  */
	public function delete_deal_images()
	{
		$this->type=$this->input->get("type");
		$this->img=$this->input->get("img");
		$this->deal_id=$this->input->get("id");
		$IMG_NAME=base64_decode($this->img);
		$this->deal_key=$this->input->get("deal_key");
		if($this->type=="auction"){
			$a = explode('_',$IMG_NAME);
			if($a[1] == 1) {
				if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png')) {
				for($i=2;$i<=5;$i++) {
					$IMG_NAME1 = $this->deal_key."_".$i;
					if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
					break;
					}
				}
				if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
				$filename= DOCROOT."images/".$this->type."/1000_800/".$IMG_NAME1.".png";
				//common::image($filename, PRODUCT_LIST_WIDTH, PRODUCT_LIST_HEIGHT, DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png');
				} 
			}
			}
			else{
				for($i=1;$i<=5;$i++) {
					$IMG_NAME1 = $this->deal_key."_".$i;
					if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
					break;
					}
				}
				if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
				$filename= DOCROOT."images/".$this->type."/1000_800/".$IMG_NAME1.".png";
				//common::image($filename, PRODUCT_LIST_WIDTH, PRODUCT_LIST_HEIGHT, DOCROOT.'images/'.$this->type.'/1000_800/'.$this->deal_key.'_1.png');
				}
			}
		} else {
			$a = explode('_',$IMG_NAME);
			if($a[1] == 1) {
				if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png')) {
					for($i=2;$i<=5;$i++) {
						$IMG_NAME1 = $this->deal_key."_".$i;
						if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
						break;
						}
					}
					if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
					$filename= DOCROOT."images/".$this->type."/1000_800/".$IMG_NAME1.".png";
					//common::image($filename, PRODUCT_LIST_WIDTH, PRODUCT_LIST_HEIGHT, DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png');
					} 	
				}
			}
			else{
				for($i=1;$i<=5;$i++) {
					$IMG_NAME1 = $this->deal_key."_".$i;
					if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
					break;
					}
				}
				if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME1.'.png')) {
				$filename= DOCROOT."images/".$this->type."/1000_800/".$IMG_NAME1.".png";
				//common::image($filename, PRODUCT_LIST_WIDTH, PRODUCT_LIST_HEIGHT, DOCROOT.'images/'.$this->type.'/1000_800/'.$this->deal_key.'_1.png');
				}
			}
		}
		if(file_exists(DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png')) {
			$filename= DOCROOT.'images/'.$this->type.'/1000_800/'.$IMG_NAME.'.png';
			unlink($filename);
		}
		if($this->type=="deals") {
			url::redirect(PATH."store-admin/edit-deal/".base64_encode($this->deal_id)."/".$this->deal_key.".html");
		}elseif($this->type=="auction"){
			url::redirect(PATH."store-admin/edit-auction/".base64_encode($this->deal_id)."/".$this->deal_key.".html");
		}elseif($this->type=="products"){
			url::redirect(PATH."store-admin/edit-products/".base64_encode($this->deal_id)."/".$this->deal_key.".html");
		}
	}
	/* UPDATE STATUS DELIVERY FOR PRODUCT */
	public function update_delivery_status($email_id="",$name="",$type="",$shippingid="",$mod_type="")
	{
		
		$this->shipping_id=$shippingid;
		$this->shipping_list = $this->merchant->get_shipping_list1();
		$this->product_size = $this->merchant->get_shipping_product_size();
		$this->product_color = $this->merchant->get_shipping_product_color();
		$status = $this->merchant->update_shipping_status($shippingid,$type);
                if($type==4) {
	                $message = "Thank You For Your Purchase";
	                $message.= new View("admin_product/shipping_mail_template");
	                 $this->email_id = $email_id;
                        $this->name = $this->Lang["CUST"];
                        $this->message = $message;
                        $fromEmail = NOREPLY_EMAIL;
                        $message = new View("themes/".THEME_NAME."/admin_mail_template");
	                $fromEmail = NOREPLY_EMAIL;
	                if(EMAIL_TYPE==2){
		                email::smtp($fromEmail,$email_id, SITENAME, $message);
	                }else{
		                email::sendgrid($fromEmail,$email_id, SITENAME, $message);
	                }
	                common::message(1, $this->Lang["MAIL_SENDED"]);
                }
                if($status){
	                common::message(1, "Status updated successfully!");
	                $lastsession = $this->session->get("lasturl");
                        if($lastsession){
                        url::redirect(PATH.$lastsession);
                        } else {
	                url::redirect(PATH."store-admin/shipping-delivery.html");
	                }
                }
	}

	/* UPDATE COD STATUS DELIVERY FOR PRODUCT */
	public function update_cod_delivery_status($email_id="",$name="",$type="",$shippingid="",$trans_id=0,$pro_id=0,$merchant_id=0)
	{
		$this->shipping_id=$shippingid;
		$this->shipping_list = $this->merchant->get_shipping_list1();
		$this->product_size = $this->merchant->get_shipping_product_size();
		$this->product_color = $this->merchant->get_shipping_product_color();
		$status = $this->merchant->update_cod_shipping_status($shippingid,$type,$trans_id,$pro_id,$merchant_id);
                        if($type==4) {
                        $message = "Thank You For Your Purchase";
                        $message.= new View("admin_product/shipping_mail_template");
                        $this->email_id = $email_id;
                        $this->name = $this->Lang["CUST"];
                        $this->message = $message;
                        $fromEmail = NOREPLY_EMAIL;
                        $message = new View("themes/".THEME_NAME."/admin_mail_template");
                        $fromEmail = NOREPLY_EMAIL;
                                if(EMAIL_TYPE==2){
                                email::smtp($fromEmail,$email_id, SITENAME, $message);
                                }else{
                                email::sendgrid($fromEmail,$email_id, SITENAME, $message);
                                }
                        common::message(1, $this->Lang["MAIL_SENDED"]);
                        }
                        if($status){
                        common::message(1, "Status updated successfully!");
                        $lastsession = $this->session->get("lasturl");
                        if($lastsession){
                        url::redirect(PATH.$lastsession);
                        } else {
                        url::redirect(PATH."store-admin/cash-delivery.html");
                        }
                        }
	}

	/* UPDATE STATUS DELIVERY FOR AUCTION */
	public function auction_update_delivery_status($email_id="",$name="",$type="",$shippingid="",$auction_id="",$trans_id="")
	{
		$status = $this->merchant->update_shipping_status($shippingid,$type);
                if($type==4) {
                        $message = "<b>".$this->Lang['THK_PUR']."</b></br>";
                        $this->auction_details = $this->merchant->get_auction_mail_data($auction_id,$trans_id,$shippingid);
                        $message .= new View("themes/".THEME_NAME."/auction/admin_auction_payment_mail"); 
                        $subject="Your order has been delivered";
	                $this->email_id = $email_id;
                        $this->name = $this->Lang["CUST"];
                        $this->message = $message;
                        $fromEmail = NOREPLY_EMAIL;
                        $message = new View("themes/".THEME_NAME."/admin_mail_template");
	                $fromEmail = CONTACT_EMAIL;
	                if(EMAIL_TYPE==2){
		                email::smtp($fromEmail,$email_id, $subject, $message);
	                }else{
		                email::sendgrid($fromEmail,$email_id, $subject, $message);
	                }
	                //common::message(1, $this->Lang["MAIL_SENDED"]);
                }
                if($status){
	                common::message(1, $this->Lang['STA_UPD']);
	                $lastsession = $this->session->get("lasturl");
                        if($lastsession){
                        url::redirect(PATH.$lastsession);
                        } else {
	                url::redirect(PATH."store-admin-auction/shipping-delivery.html");
	                }
                }
	}

	/* UPDATE COD STATUS DELIVERY FOR PRODUCT */
	public function auction_update_cod_delivery_status($email_id="",$name="",$type="",$shippingid="",$auction_id=0,$trans_id=0,$merchant_id=0)
	{
		$status = $this->merchant->auction_update_cod_shipping_status($shippingid,$type,$trans_id,$auction_id,$merchant_id);
                if($type==4) {
                        $message = "<b>".$this->Lang['THK_PUR']."</b></br>";
                        $this->auction_details = $this->merchant->get_auction_mail_data($auction_id,$trans_id,$shippingid);
                        $message .= new View("themes/".THEME_NAME."/auction/admin_auction_payment_mail"); 
                        $subject="Your order has been delivered";
                        $this->email_id = $email_id;
                        $this->name = $this->Lang["CUST"];
                        $this->message = $message;
                        $fromEmail = NOREPLY_EMAIL;
                        $message = new View("themes/".THEME_NAME."/admin_mail_template");
                        $fromEmail = CONTACT_EMAIL;
                        if(EMAIL_TYPE==2){
                        email::smtp($fromEmail,$email_id, $subject, $message);
                        }else{
                        email::sendgrid($fromEmail,$email_id, $subject, $message);
                        }
                        //common::message(1, $this->Lang["MAIL_SENDED"]);
                }
                if($status){
                common::message(1, $this->Lang['STA_UPD']);
                $lastsession = $this->session->get("lasturl");
                if($lastsession){
                url::redirect(PATH.$lastsession);
                } else {
                url::redirect(PATH."store-admin-auction/cod-delivery.html");
                }
                }
	}
	
	public function check_required($val = "")
	{
		if(strip_tags($val) == "") return 0;return 1;
	}
	
		/** PRODUCT IMPORT **/
	
	public function product_import()
		{
			$this->import_product = "1";
		$this->mer_products_act="1";
		//$this->postal_code_settings ="1";
		
		$adminid=$this->session->get('user_id');   
		
		if($_FILES){ 
		
				$post = Validation::factory($_FILES)
							->add_rules('im_product','upload::required',array($this,'check_file_type'));
		 	if($post->validate()){
				$row = 1;
				$add_import = "";
					$file_name = upload::save('im_product'); //$_FILES['im_product']['tmp_name'];
					
					$excel_name = '';
					if(isset($_FILES['im_product']['name']) && $_FILES['im_product']['name'] !='')
					{
						$temp = basename(explode('.',  basename($file_name)));
						$ext = end($temp);
						$excel_name = time().'.'.$ext;
						$path = realpath(DOCROOT.'upload/merchant_excel/');
						move_uploaded_file($file_name,$path.$excel_name);
						$temp = explode('.',basename($_FILES['im_product']['name']));
						$ext = end($temp);
						$excel_name = time().'.'.$ext;
						$path = realpath(DOCROOT.'upload/merchant_excel/');
						
						move_uploaded_file($_FILES["im_product"]["tmp_name"],$path.$excel_name);*/
						
						$source = upload::save('im_product');
						$temp = basename(explode('.',  basename($source)));
						$ext = end($temp);
						$excel_name = time().'.'.$ext;
						$path = realpath(DOCROOT.'upload/merchant_excel/');
						
						move_uploaded_file($source,$path.$excel_name);
						
						unlink($source);
						
						
						
