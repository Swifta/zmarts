<?php defined('SYSPATH') or die('No direct script access.');
class Merchant_chat_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();
		$this->user_id = $this->session->get("user_id");
		$this->user_id1 = $this->session->get("user_id1");
	}
	 /** GET offline count DATA  **/

	public function get_offline_count($name = "")
	{
				$contitions = "where status=1 and chat_type=2 and seller_chatid = $this->user_id and reply_id=0";
					if($name){

			$contitions .= ' AND name like "%'.mysql_real_escape_string($name).'%"';
					$contitions .= ' OR email like "%'.mysql_real_escape_string($name).'%"';
					}
				   $result = $this->db->query("select offline_id from chat_offline $contitions order by offline_id DESC ");
			return count($result);
	}
	
	/** GET offline DATA  **/
	public function get_offline_list($offset = "", $record = "",  $name= "",$limit="")
	{
		$limit1 = $limit !=1 ?"limit $offset,$record":"";

				$contitions = "where status=1 and chat_type=2 and seller_chatid = $this->user_id and reply_id=0";
					if($name){
					$contitions .= ' AND name like "%'.mysql_real_escape_string($name).'%"';
					$contitions .= ' OR email like "%'.mysql_real_escape_string($name).'%"';
					}
				   $result = $this->db->query("select * from chat_offline $contitions order by last_update DESC $limit1 ");
			return $result;
	}
	
	/** DELETE  OFFLINE CHAT **/

	public function delete_offline($offline_id = "")
	{
		$result = $this->db->update("chat_offline",array("status" => 0),array("offline_id" => $offline_id));
		return count($result);
	}
	
	 /** GET online count DATA  **/

	public function get_online_count()
	{
		$contitions = "where chat_type=2 and sellerid = $this->user_id and sender.chat_email !='' ";
		$result = $this->db->query("select sender.chat_email from chat left join chat_users as sender on sender.chat_name = chat.from1 left join chat_users as receiver on receiver.chat_name = chat.to1  $contitions  group by sender.chat_name order by id ASC");		
		return count($result);
	}
	/** GET online DATA  **/
	public function get_online_list($offset = "", $record = "",$limit="")
	{
		$limit1 = $limit !=1 ?"limit $offset,$record":"";
		$contitions = "where chat_type=2 and sellerid = $this->user_id and sender.chat_email !='' ";
		$result = $this->db->query("select *,sender.chat_email,sender.chat_userid,sender.chat_user_status,sender.last_update from chat left join chat_users as sender on sender.chat_name = chat.from1 left join chat_users as receiver on receiver.chat_name = chat.to1  $contitions  group by sender.chat_name order by sender.last_update DESC $limit1 ");
		
		return $result;
	}
	
	/* GET CHAT HISTORY */
	public function get_chat_history($sellerid="",$from_name="")
	{
		$contitions = "where chat_type=2 and sellerid = $sellerid and (from1 = '$from_name' or to1 = '$from_name') ";
		$result = $this->db->query("select * from chat $contitions order by id ASC");
		//print_r($result);
		return $result;
	}
	/* REPLY SAVE FOR OFFLINE CHAT */
	public function reply_offline_chat($name="",$message="",$email="",$offlineid="")
	{
		$insert = $this->db->insert("chat_offline", array("name" =>$this->session->get("name"),"email" => $email, "message" => $message,"seller_chatid" => $this->user_id,"chat_type" =>2,"sent"=>date('Y-m-d H:i:s', time()),"reply_id" =>$offlineid));
		$result = $this->db->update("chat_offline",array("last_update" => date('Y-m-d H:i:s', time())),array("offline_id" => $offlineid,"chat_type" =>2));
		return 1;
	}
	/* VIEW OFFLINE REPLY */
	public function get_offline_chat($offlineid="")
	{
		$result = $this->db->query("select * from chat_offline where reply_id = $offlineid or offline_id = $offlineid order by offline_id ASC");
		return $result;
	}
	/* REPLY SAVE FOR ONLINE CHAT */
	public function reply_online_chat($to="",$message="")
	{
		
		$insert = $this->db->insert("chat", array("from1" =>$this->session->get("name"),"to1" => $to, "message" => $message,"sellerid" => $this->user_id,"chat_type" =>2,"sent"=>date('Y-m-d H:i:s', time()),"recd" =>1));
		$result = $this->db->update("chat_users",array("last_update" => date('Y-m-d H:i:s', time())),array("chat_name" => $to));
		return 1;
		
	}
	

}
