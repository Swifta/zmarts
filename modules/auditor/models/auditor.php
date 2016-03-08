<?php defined('SYSPATH') or die('No direct script access.');
class Auditor_Model extends Model
{
	public function __construct()
	{	
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();	
                $this->user_id = $this->session->get("user_id");//admin id
                
//                $create_table_sql = "CREATE TABLE IF NOT EXISTS audit (".
//                    "id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,".
//                    "admin_id int(11) NOT NULL,".
//                    "user_id int(11) NOT NULL,".
//                    "event varchar(225) NOT NULL,".
//                    "timing int(10) NOT NULL".
//                  ") ENGINE=InnoDB DEFAULT CHARSET=latin1;";
//                $this->db->query($create_table_sql);
//                ALTER TABLE `audit` ADD `ip` VARCHAR(25) NOT NULL AFTER `timing`, ADD `more_info` MEDIUMTEXT NOT NULL AFTER `ip`;
	}
        
        public function log($admin_id, $user_id, $event, $ip="127.0.0.1", $desc=""){
            $result = $this->db->insert("audit", array("timing"=>time(), "admin_id"=>$admin_id, 
                "user_id"=>$user_id, "event"=>$event, "ip"=>$ip, "more_info"=>$desc));
            //var_dump($result);die;
            return count($result);
        }
        
        public function fetchUserLog($user_id){
            $result = $this->db->select()->from("audit")
                    ->join("users", "audit.admin_id", "users.user_id")
                    ->where(array("audit.user_id"=>$user_id))
                    ->get();
            return $result;         
        }
        
        public function getStorename($merchant_id){
            $result = $this->db->select("store_name")->from("stores")
                    ->where(array("merchant_id"=>$merchant_id))
                    ->get();
            return $result->current()->store_name;
        }
}
