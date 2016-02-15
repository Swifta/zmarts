<?php defined('SYSPATH') OR die('No direct access allowed.');
class Merchant_chat_Controller extends website_Controller
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
		        if((!$this->user_id && ( $this->user_type != 3||$this->user_type != 8)) && $this->uri->last_segment() != "merchant-login.html" && $this->uri->last_segment() != "forgot-password.html"){
			        url::redirect(PATH);
		        }
		        if($this->user_type==1||$this->user_type==7)
		        {
					$this->session->destroy();
					url::redirect(PATH);
				}
		        $this->merchant_panel="1";
				$this->chat_act =1;
				$this->mer_settings_act="1";
				$this->chat = new Merchant_chat_Model();	
		        if(DEFAULT_LANGUAGE == "french" ){
			        $this->template->style = html::stylesheet(array(PATH.'css/french_merchant.css'));
		        } elseif(DEFAULT_LANGUAGE == "spanish"){
			        $this->template->style = html::stylesheet(array(PATH.'css/spanish_merchant.css'));
		        } else {
			        $this->template->style = html::stylesheet(array(PATH.'css/merchant.css'));
		        }
		}
	}
	
	/* OFFLINE CHAT */
	public function offline_chat_history($page="")
	{
		if(!$this->session->get("chatuserid")) {
			url::redirect(PATH."merchant.html");
		}
		$this->page = $page ==""?1:$page; // for export per page

		$this->url="merchant/offline-chat.html"; // for export

		if($_POST){
				$post = Validation::factory($_POST)->pre_filter('trim')
						->add_rules('message', 'required','chars[a-zA-Z0-9 _-]');
			if($post->validate()){
	
				$this->email_id = $this->input->post('email');
				$this->name = $this->input->post('name');
				$this->message = $this->input->post('message');
				$this->offlineid = $this->input->post('offlineid');
				$this->reply_chat_save = $this->chat->reply_offline_chat($this->name,$this->message,$this->email_id,$this->offlineid);
				$message = new View("themes/".THEME_NAME."/admin_mail_template");
				
				$fromEmail = NOREPLY_EMAIL;
				if(EMAIL_TYPE==2){
				email::smtp($fromEmail,$this->email_id, SITENAME, $message);
				}else{
				email::sendgrid($fromEmail,$this->email_id, SITENAME, $message);
				}
				common::message(1,$this->Lang["MAIL_SENDED"]);
				$lastsession = $this->session->get("lasturl");
				if($lastsession){
					url::redirect(PATH.$lastsession);
				} else {
					url::redirect(PATH."merchant_chat/offline-chat.html");
				}

			}
			else{
				$this->form_error = error::_error($post->errors());
			}

		}
		$this->count_user = $this->chat->get_offline_count($this->input->get("search"));

				$this->pagination = new Pagination(array(
				'base_url'       => 'merchant_chat/offline-chat.html/page/'.$page."/",
				'uri_segment'    => 4,
				'total_items'    => $this->count_user,
				'items_per_page' =>20,
				'style'          => 'digg',
				'auto_hide'      => TRUE
				));
		$search = $this->input->get('id');
		$this->search = $this->input->get();
		$this->search_key = arr::to_object($this->search);

		$this->contacts_list = $this->chat->get_offline_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),0);
		if($search =='all'){ // for export all
				$this->contacts_list = $this->chat->get_offline_list($this->pagination->sql_offset, $this->pagination->items_per_page,$this->input->get("search"),1);
		}
		if($search){  // Export conatcts in CSV format //
			$out = '"S.no","Name","E-Mail","Subject","Message"'."\r\n";
			$i=0;
			$first_item = $this->pagination->current_first_item;
				foreach($this->contacts_list as $d)
				{
					$out .= $i+$first_item.',"'.$d->name.'","'.$d->email.'","'.$d->subject.'","'.$d->message.'"'."\r\n";
					$i++;
				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename=Contacts.xls');
				header('Content-Transfer-Encoding: binary');
				header('Expires: 0');
				header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
				header('Pragma: public');
				echo "\xEF\xBB\xBF"; // UTF-8 BOM
				echo $out;
				exit;
		}
		
		$this->template->title = $this->Lang["OFF_LINE_CHT"];
		$this->template->content = new View("merchant_chat/offline_chat");
	}
	
	/** DELETE Offline chat **/

	public function delete_offlinechat($offline_id = "")
	{
		if($this->user_type != 7)
		{
			common::message(-1, $this->Lang["YOU_CAN_NOT_MODULE"]);        
			url::redirect(PATH."merchant.html");
		}
		$status = $this->chat->delete_offline($offline_id);
		if($status == 1){

				common::message(1, $this->Lang["SUCC_OFF_DEL"]);
				}

		$lastsession = $this->session->get("lasturl");
                if($lastsession){
                url::redirect(PATH.$lastsession);
                } else {
                url::redirect(PATH."merchant_chat/offline-chat.html");
                }
	}
	/* ONLINE CHAT HISTORY */
	public function online_chat_history($page="")
	{
		 if($_POST){
				$post = Validation::factory($_POST)->pre_filter('trim')
						->add_rules('message', 'required','chars[a-zA-Z0-9 _-]');
			if($post->validate()){
				$this->email_id = $this->input->post('email');
				$this->name = $this->input->post('name');
				$this->message = $this->input->post('message');
				$this->reply_chat_save = $this->chat->reply_online_chat($this->name,$this->message);
				$message = new View("themes/".THEME_NAME."/admin_mail_template");
				$fromEmail = NOREPLY_EMAIL;
				if(EMAIL_TYPE==2){
				email::smtp($fromEmail,$this->email_id, SITENAME, $message);
				}else{
				email::sendgrid($fromEmail,$this->email_id, SITENAME, $message);
				}
				common::message(1,$this->Lang["MAIL_SENDED"]);
				
				url::redirect(PATH."merchant/online-chat.html");

			}
			else{
				$this->form_error = error::_error($post->errors());
			}

		}
		$this->count_chat = $this->chat->get_online_count();
		$this->pagination = new Pagination(array(
		'base_url'       => 'merchant_chat/online-chat.html/page/'.$page."/",
		'uri_segment'    => 4,
		'total_items'    => $this->count_chat,
		'items_per_page' =>20,
		'style'          => 'digg',
		'auto_hide'      => TRUE
		));
		
		$this->contacts_list = $this->chat->get_online_list($this->pagination->sql_offset, $this->pagination->items_per_page);
		$this->template->title = $this->Lang["ON_LINE_CHT"];
		$this->template->content = new View("merchant_chat/online_chat");
		
	}
	
	/* View chat History */
	 public function view_chat_history($sellerid ="",$from_name="")
	 {
		
		$this->online_chat_history = $this->chat->get_chat_history($sellerid,$from_name);
		$this->template->title = $this->Lang["VIEW_HIST"];
		$this->template->content = new View("merchant_chat/view_chat_history");
		 
	 }
	  /* View chat History */
	 public function view_offlinereply($offlineid ="")
	 {
		 
		$this->offline_chat_history = $this->chat->get_offline_chat($offlineid);
		$this->template->title = $this->Lang["VIEW_RPLY"];
		$this->template->content = new View("merchant_chat/view_offline_history");
		 
	 }
	
	

}
