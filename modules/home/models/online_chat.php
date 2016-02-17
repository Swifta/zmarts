<?php defined('SYSPATH') or die('No direct script access.');
class Online_chat_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();
		$this->UserID = $this->session->get("UserID");
	}
	
	/* GET ONLINE USERS */
	public function get_online_users_list($type="")
	{
		
		if($type==1) {
			$user_type = "7";
		} elseif($type==2){
			$user_type = "3";
		}
		$result = $this->db->query("select user_id,firstname,nickname,online_status,nickname_url from users where user_type = $user_type and user_status = 1 order by online_status DESC");
		return $result;					 
		
	}
	/* CHECK USER LOGIN */
	public function chat_login_users($email = "",$name = "")
	{
		
		$result = $this->db->select("chat_id")->from("chat_users")->where(array("chat_email" => $email,"chat_name" =>  $name))->get();
		if(count($result) == 0){
			$insert_users = $this->db->insert("chat_users",array("chat_name"=>$name,"chat_email"=>$email,"chat_user_status" =>1));
			$userid = $insert_users->insert_id();
//			setcookie("username",$name);
//			setcookie("uid",$userid);
                        
                        
                        cookie::set("username",$name);
			cookie::set("uid",$userid);
			$this->session->set("chatuserid",$userid);
			$this->session->set("chatusername",$name);
			$this->session->set("chatuseremail",$email);
			//$this->session->set("UserID",$userid);
			//$this->session->set("UserName",$name);
			return $userid;
		}  else if(count($result) > 0){
			$user_update = $this->db->update("chat_users", array("chat_user_status" =>1),array("chat_id" =>$result->current()->chat_id));		
			$userid = $result->current()->chat_id;
			cookie::set("username",$name);
			cookie::set("uid",$userid);
			$this->session->set("chatuserid",$userid);
			$this->session->set("chatusername",$name);
			$this->session->set("chatuseremail",$email);
			//$this->session->set("UserID",$userid);
			//$this->session->set("UserName",$name);
			return $userid;
		}
		
		return -1;
		
	}
	/** Offline chat **/

	public function offlinechat_details($post)
	{

		$result = $this->db->insert("chat_offline", array("name" =>$post->name, "email" => $post->email, "subject" => $post->subject, "message" => $post->message,"customer_careid"=>$post->customercareid,"seller_chatid"=>$post->seller_chatid,"chat_type"=>$post->chat_usertype,"sent"=>date('Y-m-d H:i:s', time()),"last_update"=>date('Y-m-d H:i:s', time())));
			if($result){
			$message = "Name :".ucfirst($post->name)."<br /><br />Email :".$post->email."<br /><br /> Message :<br />".$post->message;
			$this->email = $post->email;
			$this->names = $post->name;
			$this->subject = $post->subject;
			$this->message = $post->message;
			
			$message = new View("themes/".THEME_NAME."/chat/chat_mail_template");
			$from = CONTACT_EMAIL;
			if(EMAIL_TYPE==2){
			   // email::smtp($post->email,CONTACT_EMAIL, "Customer Inquiry", $message);
			}else{
			   // email::sendgrid($post->email,CONTACT_EMAIL, "Customer Inquiry", $message);
			}
			    return 1;
			}
			else{
			    return 0;
			}
	}
	
	
}
