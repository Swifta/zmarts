<?php defined('SYSPATH') OR die('No direct access allowed.');
class Online_chat_Controller extends Layout_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();
		$this->chat = new Online_chat_Model();
	
	}
	
	/* ONLINE LIST OF USERS */
	public function  login_lists($type="")
	{
		$type = $this->input->get('type');
		if($type !="" && ($type ==1 || $type ==2)) {
			
			$this->online_users_list = $this->chat->get_online_users_list($type);
			echo new View("themes/".THEME_NAME."/chat/online_user_list");
		}
		exit;
	}
	
	public function chat_conversation()
	{
		
		$msg="";
	//	echo $_POST['conv']; exit;

		$this->conv = $_POST['conv'];
		//$this->seller_id = $_POST['id'];
		if(strip_tags($this->conv)!=""){

		$email = $this->session->get('chatuseremail');
		$subject = $this->Lang['CHAT_HIS'];
		$logo = PATH."themes/".THEME_NAME."/images/logo.png";
		$message = "<table cellpadding='2' width='100%' border='0' style='list-style: none;width: 100%;padding: 0px;margin: 0px;background:#fff;border:3px solid #bbb;width:700px;margin:0 auto'><tr><td valign='center'><span style='font:bold 20px/60px arial;color:#333;padding:0 10px'>".$this->Lang['CHAT_HIS']."</span></td><td align='right'><img src='".$logo."' alt='logo'></td>
		</tr>";
		$content = explode('<div class="chat_title_top_scroll_common">',$this->conv);
		//print_r($message); exit;
		$span1="<span style='background:#EDF8FF;padding:5px 10px; border:1px solid #efefef;font:bold 14px/20px arial; color:#000;display:block;'>";
		$span2 = "<span style='background:#ccc;padding:5px 10px; border:1px solid #efefef;font:bold 14px/20px arial; color:#000;display:block;'>";
		$span3 = "<span style='background:#fff;padding:5px 30px;display:block;font:normal 14px/20px arial; color:#333;'>";
		$span4 = "</span></td></tr>";

		foreach ($content as $ad ){
				if($ad!=""){
					$message.="<tr><td colspan='2'>";
					 $numbers = array('<div class="buyer_common scr_img_des"><span>', '<div class="seller_common scr_img_des_common"><span>','<p>','</p>');
					 $words = array($span1, $span2,$span3,$span4);
					 $change = str_replace($numbers, $words, $ad);
					// $change = strip_tags($chage,'<span>');
					 $message.= strip_tags($change,'<span>');
					 $message .="</td></tr>";


			}
		}

		$message.="</table>";
		$from = CONTACT_EMAIL;
		if(count($email)){
			if(EMAIL_TYPE==2){
				email::smtp($from,$email,$subject, $message);
			}else{
				email::sendgrid($from,$email,$subject, $message);
			}
		}
		/*foreach($this->chat_history as $c) {
			$msg .= "Message : ".$c->message." <br/> ";
		} */

		echo "1";

		exit;
		}
	}
	/* CHECK USER LOGIN */
	public function chat_user_login()
	{
		
		$email = $this->input->get('chat_email');
		$name = $this->input->get('chat_name');
		$check_user_exist = $this->chat->chat_login_users($email,$name);
		if($check_user_exist>0) {
			common::message(1,$this->Lang["SUCC_REGIS_CHAT"]);
		}
		echo $check_user_exist;   
		exit;
		
	}
	
	/* OFFLINE CHAT */
	public function offline_chat()
	{
		if($_POST){
			$this->userPost = $this->input->post();
			$status = $this->chat->offlinechat_details(arr::to_object($this->userPost));
			if($status == 1){
				common::message(1, $this->Lang["THANK_CT"]);
				url::redirect(PATH);
			}
	    }
	}
	
	
	
}
