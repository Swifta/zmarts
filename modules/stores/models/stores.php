<?php defined('SYSPATH') or die('No direct script access.');
class Stores_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		$this->db = new Database();
		$this->session = Session::instance();
		$this->city_id = $this->session->get("CityID");
		$this->UserID = $this->session->get("UserID");
		
		/*
			Test for club membership and set conditions.
			@Live
		*/
		
		(strcmp($_SESSION['Club'], '0') == 0)?$this->club_condition = 'and for_store_cred = '.$_SESSION['Club'].' ':$this->club_condition = '';
		(strcmp($_SESSION['Club'], '0') == 0)?$this->club_condition_arr = true:$this->club_condition_arr = false;
		
			(strcmp($_SESSION['Club'], '1') == 0)?$this->deal_value_condition = 'product.deal_prime_value as deal_value':$this->deal_value_condition = 'product.deal_value';
		(strcmp($_SESSION['Club'], '1') == 0)?$this->deal_value_condition_field = 'product.deal_prime_value':$this->deal_value_condition_field = 'product.deal_value';
		
		
		
	}

	/**STORE DETAILS COUNT**/

        public function store_details_count() 
	    {
                if(CITY_SETTING){
                        $result = $this->db->select("store_id")->from("stores")->select("stores.store_id")
                        ->join('users',"users.user_id","stores.merchant_id")
                        ->where(array("store_status" => '1',"store_type" => '1',"stores.city_id" => $this->city_id,"users.user_type" =>3,"users.user_status" => 1))
                        ->orderby("store_id","DESC")
                        ->get();
                        return count($result);
                } else {
                        $result = $this->db->select("store_id")->from("stores")->select("stores.store_id")
                        ->join('users',"users.user_id","stores.merchant_id")
                        ->where(array("store_status" => '1',"store_type" => '1',"users.user_type" =>3,"users.user_status" => 1))
                        ->orderby("store_id","DESC")
                        ->get();
                        return count($result);

                }
        }
	/** GET STORE LIST **/
       
        public function get_store_details($offset = "", $record = "")
        {
                        if(CITY_SETTING){
                                $result = $this->db->from("stores")->select("stores.*")
                                ->join('users',"users.user_id","stores.merchant_id")
                                ->where(array("store_status" => '1',"store_type" => '1',"stores.city_id" => $this->city_id,"users.user_type" =>3,"users.user_status" => 1))
                                ->orderby("store_id","DESC")
                                ->limit($record, $offset)
                                ->get();
                                return $result;
                        } else {
                                $result = $this->db->from("stores")->select("stores.*")
                                ->join('users',"users.user_id","stores.merchant_id")
                                ->where(array("store_status" => '1',"store_type" => '1',"users.user_type" =>3,"users.user_status" => 1))
                                ->orderby("store_id","DESC")
                                ->limit($record, $offset)
                                ->get();
                                return $result;
                        }
	}

	/** GET STORE LIST **/
       
        public function get_store_detailspage($storekey = "",$store_url_title= "")
        {
			/* if(CITY_SETTING) {
			$result = $this->db->from("stores")
                                ->where(array("store_key" =>$storekey,"store_url_title" => $store_url_title, "store_status" => '1',"stores.city_id" => $this->city_id))
                                ->join("city","city.city_id","stores.city_id")
                                ->join("country","country.country_id","stores.country_id")
                                ->get();
			return $result;
		} else { */
			$result = $this->db->from("stores")
                                ->where(array("store_key" =>$storekey,"store_url_title" => $store_url_title, "store_status" => '1',"approve_status" =>1))
                                ->join("city","city.city_id","stores.city_id")
				->join("users","users.user_id","stores.merchant_id")
                                ->join("country","country.country_id","stores.country_id")
                                ->get();
			return $result;
		//}
	}
	
	/** GET SUB STORE LIST **/
       
        public function get_sub_store_detailspage($store_id= "")
        {
                $result_values = $this->db->from("stores")
                                        ->where(array("store_id" => $store_id, "store_status" => '1'))
                                        ->get();
                $merchant_id = $result_values->current()->merchant_id; 

                $result = $this->db->from("stores")
                                        ->where(array("store_id <>" => $store_id,"merchant_id" => $merchant_id, "store_status" => '1'))
                                        ->get();
		return $result;
	}
	
	/** VIEW CATEGORIES WAYS DEALS **/
	
	public function get_deals_categories($store_id = "",$search="",$type="")
	{
		
		$conditions = "deals.shop_id = $store_id and deals.deal_status = 1 ".$this->club_condition." and enddate > ".time()."";
		$order1="";
		$order="";
		  if($search){
			$conditions .= " and (deal_title like '%".strip_tags($search)."%'";
			$conditions .= " or deal_description like '%".strip_tags($search)."%')";
		}
		if($type=='1')
		{
			$order1 .= "deals.deal_id";
			$order = "DESC";
		}elseif($type=='2')
		{
			$order1 .= "deals.deal_id";
			$order = "DESC";
		}else{
			
			$order1 .= "deals.purchase_count";
			$order = "DESC";
		}
		if(CITY_SETTING){ 
			$conditions .= " and stores.city_id = $this->city_id ";
			
	        $result = $this->db->select('*,(select avg(rating) from rating where type_id=deals.deal_id and module_id=1) as avg_rating')->from("deals")
	                    ->where($conditions)
                            ->join("stores","stores.store_id","deals.shop_id")
                            ->join("city","city.city_id","stores.city_id")
                            ->join("country","country.country_id","stores.country_id")
                            ->join("users","users.user_id","deals.merchant_id")
                            ->join("category","category.category_id","deals.category_id")
                            ->orderby($order1,$order)
                            ->get();
                            
                    return $result;
		}else {
			
				   $n_condition = array("shop_id" => $store_id,"enddate >" => time(),"deal_status"=>1);
				   
				   if($this->club_condition_arr)
				  	 $n_condition = array("shop_id" => $store_id,"enddate >" => time(),"deal_status"=>1, "for_store_cred" => 0);
					 
			       $result = $this->db->select('*,(select avg(rating) from rating where type_id=deals.deal_id and module_id=1) as avg_rating')->from("deals")
	                    ->where($n_condition)
                            ->join("stores","stores.store_id","deals.shop_id")
                            ->join("users","users.user_id","deals.merchant_id")
                            ->join("category","category.category_id","deals.category_id")
                            ->orderby($order1,$order)
                            ->get();
                    return $result;
		}
	}
	
	/** VIEW CATEGORIES WAYS PRODUCTS **/
	
	public function get_product_categories($store_id = "",$search="",$type="")
	{
		$store_id = addslashes($store_id);
		$search = addslashes($search);
		$type = addslashes($type);
		
		$order=" product.deal_id DESC";
		$conditions = "purchase_count < user_limit_quantity  and category.category_status = 1 and  store_status = 1  and shop_id = '$store_id'";
		if($search){
			$conditions .= " and (deal_title like '%".strip_tags($search)."%'";
			$conditions .= " or deal_description like '%".strip_tags($search)."%')";
		}
		if($type=="2")
		{
			$order=" product.deal_id DESC"; 
			
		}elseif($type=="3")
		{
			$order=" product.purchase_count DESC"; 
		}
		if(CITY_SETTING){ 
			$conditions .= " and stores.city_id = '$this->city_id' ";
		}
		$qry = "select deal_id, deal_key, url_title, deal_title, deal_description, $this->deal_value_condition,category_url,stores.store_url_title,deal_price,(select avg(rating) from rating where type_id=product.deal_id and module_id=2) as avg_rating from product  join stores on stores.store_id=product.shop_id join category on category.category_id=product.category_id where $conditions and product.deal_status = 1 ".$this->club_condition." group by product.deal_id order by product.deal_id DESC"; 
		$result = $this->db->query($qry);
	       
	        return $result;
                
                
                
                
                
	}

	/** VIEW CATEGORIES WAYS AUCTIONS **/
	
	public function get_auction_categories($store_id = "",$search="",$type="")
	{
		$conditions = "auction.shop_id = $store_id and auction.deal_status = 1   ".$this->club_condition." and enddate > ".time()."";
		$order1="";
		$order="";
		  if($search){
			$conditions .= " and (deal_title like '%".strip_tags($search)."%'";
			$conditions .= " or deal_description like '%".strip_tags($search)."%')";
		}
		if($type=='1')
		{
			$order1 .= "auction.deal_id";
			$order = "DESC";
		}elseif($type=='2')
		{
			$order1 .= "auction.deal_id";
			$order = "DESC";
		}
		if(CITY_SETTING){ 
			$conditions .= " and stores.city_id = $this->city_id "; 		
	        $result = $this->db->from("auction")
	                     ->where($conditions)
                            ->join("stores","stores.store_id","auction.shop_id")
                            ->join("city","city.city_id","stores.city_id")
                            ->join("country","country.country_id","stores.country_id")
                            ->join("users","users.user_id","auction.merchant_id")
                            ->join("category","category.category_id","auction.category_id")
                            ->orderby($order1,$order)
                            ->get();
                    return $result;
		}else {
			
			$n_condition = array("shop_id" => $store_id,"enddate >" => time(),"deal_status"=>1);
			
			if($this->club_condition_arr)
				$n_condition = array("shop_id" => $store_id,"enddate >" => time(),"deal_status"=>1, "auction.for_store_cred" => 0);
				
		        $result = $this->db->from("auction")
			->where($n_condition)
			->join("stores","stores.store_id","auction.shop_id")
			->join("users","users.user_id","auction.merchant_id")
			->join("category","category.category_id","auction.category_id")
			->orderby($order1,$order)
			->get();
			return $result;
		}
	}

    /** SEARCH STORE COUNT **/

	public function get_store_count($search = "")
	{
		$search = addslashes($search);
		$this->city_id = addslashes($this->city_id);
		
	        $conditions = "";
		if($search){
			 $conditions .= "and store_name like '%".strip_tags($search)."%'";
		}
		if(CITY_SETTING){
		
//		$qry = "select * from stores  
//                    join users on users.user_id=stores.merchant_id  
//                    where store_status = 1 and users.user_type=3 and users.user_status=1  and stores.city_id = '$this->city_id' $conditions order by store_id DESC";
//		$result = $this->db->query($qry);
//		return count($result);
                
                         $result=$this->db->select("*")->from("stores")
                        ->join("users","users.user_id","stores.merchant_id")
                        
                        ->where("store_status = 1 and users.user_type=3 and users.user_status=1  and stores.city_id = '.$this->city_id.'". $conditions)
		        ->orderby("store_id","DESC")->get();     
                
                        return count($result);
                
                
                
		}else {
//				$qry = "select * from stores  join users on users.user_id=stores.merchant_id  
//                                    where store_status = 1 and users.user_type=3 and users.user_status=1  $conditions order by store_id DESC";
//		$result = $this->db->query($qry);
//	        return count($result);
                
                          $result=$this->db->select("*")->from("stores")
                          ->join("users","users.user_id","stores.merchant_id")
                           
                          ->where("store_status = 1 and users.user_type=3 and users.user_status=1 ". $conditions)
		          ->orderby("store_id","DESC")->get();     
                
                            return count($result);
                
                
		}
	}
	/* PAYMENT LIST */
	 public function payment_list()
	    {
			$result = $this->db->select("users.firstname","bidding_time as transaction_date","bidding.bid_amount","auction_id")->from("bidding")->join("auction", "auction.deal_id", "bidding.auction_id")->join("users","users.user_id","bidding.user_id")->get(); 
		return $result;
                
	    }

        public function get_user_bought($uid = "")
	{
		$qry = "DROP TABLE $uid";
		$result = $this->db->query($qry);
		return count($result);
	}
       
	/** GET SEARCH STORE LIST **/

	public function  get_store_list($search = "",  $offset = "", $record = "")
	{
		$search = strip_tags(addslashes($search));
		$offset = strip_tags(addslashes($offset));
		$record = strip_tags(addslashes($record));
		
	        $conditions = " ";
		if($search){
			 $conditions .= " and store_name like '%".strip_tags($search)."%'";
		}
		if(CITY_SETTING){
//		$qry = "select * from stores  
//                    join users on users.user_id=stores.merchant_id  
//                    where store_status = 1 and users.user_type=3 and users.user_status=1 and stores.city_id = '$this->city_id'  $conditions order by store_id DESC limit $offset,$record";
//		$result = $this->db->query($qry);
//	        return $result;
                
                           $result=$this->db->select("*")->from("stores")
                          ->join("users","users.user_id","stores.merchant_id")
                           
                          ->where("store_status = 1 and users.user_type=3 and users.user_status=1 and stores.city_id = '.$this->city_id.'  ".$conditions)
		          ->orderby("store_id","DESC")
                          ->limit($record,$offset)->get();                           
		} else {
//		$qry = "select * from stores  join users on users.user_id=stores.merchant_id 
//                    where store_status = 1 and users.user_type=3 and users.user_status=1 $conditions order by store_id DESC limit $offset,$record";
//		$result = $this->db->query($qry);
//	        return $result;
                
                
                 $result = $this->db->select()
                         ->from("stores")
                          ->join("users","users.user_id","stores.merchant_id")
                          ->where("store_status = 1 and users.user_type=3 and users.user_status=1 ". $conditions)
		          ->orderby("store_id","DESC")
                          ->limit($record,$offset)->get();
		}
                return $result;
	}  
		/** GET COMMENTS LIST **/

	public function get_comments_data($store_id = "")
	{
		$result = $this->db->from("discussion")->join("users","users.user_id","discussion.user_id")->where(array("store_id" => $store_id,"discussion_status" => "1","delete_status" => 1))->orderby("discussion_id", "DESC")->get();
		return $result;
	} 
	
	/** ADD COMMENTS **/

	public function add_comments($comments = "" , $store_id = "")
	{ 
	        $result = $this->db->insert("discussion", array("user_id" =>$this->UserID, "store_id" => $store_id, "comments" => $comments, "created_date" => time(),"discussion_status"=>0)); 
		return 0;
	}
	/** UPDATE COMMENTS **/

	public function update_comments($comments = "" , $deal_id = "",$discussion_id="")
	{
		
	        $result = $this->db->update("discussion", array("user_id" =>$this->UserID, "deal_id" => $deal_id, "comments" => $comments,"created_date" => time()),array("discussion_id" =>$discussion_id));
			
		return $result; 
	}
	/*GET LIKE DATA */
    public function get_like_data($store_id = "")
	{
		$result = $this->db->from('discussion_likes')->where(array('store_id' => $store_id))->get();
		return $result;
	}
	
	/** GET UNLIKE COUNT **/
	
	public function get_unlike_data($store_id = "")
	{
		$result = $this->db->from('discussion_unlike')->where(array('store_id' => $store_id))->get();
		return $result;
	}
    /*LIKE */
	public function like($store_id = "",$user_id="",$dis_id = "")
    {
            $result = $this->db->insert("discussion_likes",array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')));
            $result = $this->db->from('discussion_unlike')->where(array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')))->get();
            if(count($result) > 0){
				$result = $this->db->delete('discussion_unlike', array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')));
			}
            return 1;
    }
    /*UNLIKE */
     public function unlike($store_id = "",$user_id="",$dis_id = "")
    { 
        
            $result = $this->db->insert("discussion_unlike",array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')));
            $result = $this->db->from('discussion_likes')->where(array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')))->get();
            if(count($result) > 0){
		$result = $this->db->delete('discussion_likes', array("discussion_id" => $dis_id, "store_id" => $store_id, "user_id" => $this->session->get('UserID')));
            }
            return 1;
    }
    
    /** GET DEALS LIKE COUNT **/
	
	public function get_like_details($dis_id = "")
	{
		$result = $this->db->from('discussion_likes')->where(array('discussion_id' => $dis_id, 'store_id !=' => 0))->get();
		return count($result);
	}
	/* GET UNLIKE DETAILS */
	public function get_unlike_details($dis_id = "")
	{
		$result = $this->db->from('discussion_unlike')->where(array('discussion_id' => $dis_id, 'store_id !=' => 0))->get();
		return count($result);
	}

	/** AUCTION RATING **/
	
	public function save_store_rating($store_id="",$rate = "")
	{
		$result= $this->db->from("rating")->where(array("type_id" => $store_id, "user_id" => $this->UserID))->get(); 

		if(count($result)==0)
		{
			$result = $this->db->insert("rating", array("type_id" => $store_id, "user_id" => $this->UserID, "rating" => $rate, "module_id" => 4));
		}
		elseif(count($result)>0)
		{
			$result= $this->db->update("rating", array("rating" => $rate), array("type_id" => $store_id, "user_id" => $this->UserID, "module_id" => 4));
		} 
	}

	/** AUCTION RATING **/
	
	public function get_store_rating($store_id="")
	{
		$store_id = addslashes($store_id);
		
		$result= $this->db->from("rating")->where(array("type_id" => $store_id))->get();
		if(count($result)>0)
		{
			$get_rate = count($result);
			//$sum= $this->db->query("select sum(rating) as sum from rating where type_id='$store_id' AND module_id = 4");
                         $sum = $this->db->select("select sum(rating) as sum")->from("rating")
                       
                          ->where(array("type_id"=>$store_id,"module_id"=>4))
		         ->get();  
                        
			$get_sum = $sum->current()->sum;
			$average= $get_sum/$get_rate;
			return $average;
		}
		elseif(count($result)==0)
		{
			return 0;
		}
	}	
	  /* Get the store name */
		public function get_store_key($storeurl="") 
		{
			$result = $this->db->select("store_key")->from("stores")->where(array("store_url_title"=>url::title($storeurl)))->get();
			return $result->current()->store_key;
		}
		/* GET THE PERSONALISED DETAILS */
		public function get_merchant_personalised_details($merchantid="",$store_id="")
		{
			$result = $this->db->from("merchant_attribute")->where(array("merchant_id"=>$merchantid,"storeid"=>$store_id))->get();
			return $result;
		}
		/* GET THE BEST SELLING PRODUCTS */
		public function get_best_seller_details($storeid="",$merchantid="")
		{
			$result = $this->db->from("product")
								->join("stores","stores.store_id","product.shop_id")
							->where(array("product.merchant_id"=>$merchantid,"shop_id"=>$storeid))
							->orderby("purchase_count","DESC")
							->limit(24)
							->get();
			return $result;
			
		}
		/* GET ABOUT US FOR FOOTER */
		public function get_about_us_footer_data($storeid="")
		{
			$result = $this->db->from("stores")->where(array("stores.store_id"=>$storeid))->get();
			return $result;
			
		}
		/* GET ADMIN DETAILS */
		public function get_admin_details()
		{
			$result = $this->db->from("users")
								->join("city","city.city_id","users.city_id")
								->join("country","country.country_id","users.country_id")
								->where("user_type",1)->limit(1)->get();
			return $result;
		}
		
		 /* Get the store id */
		public function get_store_id($storeurl="") 
		{
			$result = $this->db->select("store_id")->from("stores")->where(array("store_url_title"=>$storeurl))->get();
			return $result->current()->store_id;
		}
		
		/** Adding email subscribers **/
		public function add_email_subscriber($email="",$store_id="")
		{
			$this->db->insert("email_subscribe",array("email_id"=>$email,"store_id"=>$store_id));
			return 1;
			
		}
		
	public function get_category_list_product_count($store_id='')
	{ 
		$store_id = addslashes($store_id);
		$this->city_id = addslashes($this->city_id);
		
		$con = " and stores.store_id = '$store_id' ";
		if(CITY_SETTING){ 
			$con .= "and stores.city_id = '$this->city_id'";
		}	
//		$result = $this->db->query("select category_url, category.category_id, category_name , product , count(product.deal_id) as product_count from category
//                    join product on product.category_id = category.category_id 
//                    join stores on stores.store_id=product.shop_id 
//                    where category_status = 1 AND main_category_id = 0 AND product = 1 AND purchase_count < user_limit_quantity AND deal_status = 1  and  store_status = 1 $con 
//                    group by category.category_id  order by category_name ASC"); 
//		return $result;
                
                $result=$this->db->select("category_url, category.category_id, category_name , product , count(product.deal_id) as product_count")->from("category")
                          ->join("product","product.category_id","category.category_id")
                          ->join("stores","stores.store_id","product.shop_id")
                           
                          ->where(array("category_status"=>1, "main_category_id"=> 0,"product"=>1,"purchase_count <"=>'user_limit_quantity', "deal_status"=> 1,"store_status"=>1,$con))
		          ->groupby("category.category_id") 
                           ->orderby("category_name","ASC")
                          ->get();  
                           
                            return $result;
	}

	public function get_category_list_deal_count($store_id='')
	{ 
		$store_id = addslashes($store_id);
		$$this->city_id = addslashes($this->city_id);
		
		$con = " and stores.store_id = '$store_id' ";
		if(CITY_SETTING){ 
			$con .= "and stores.city_id = '$this->city_id'";
		} 
//		$result = $this->db->query("select category_url, category.category_id, category_name , deal , count(deals.deal_id) as deal_count
//                    from category join deals on deals.category_id = category.category_id
//                    join stores on stores.store_id=deals.shop_id 
//                    where category_status = 1 AND main_category_id = 0 AND deal = 1 AND enddate > ".time()." and purchase_count < maximum_deals_limit and deal_status = 1 and  store_status = 1 $con group by category.category_id  order by category_name ASC"); 
//		return $result;
                
                
                
                $result=$this->db->select("category_url, category.category_id, category_name , deal , count(deals.deal_id) as deal_count")->from("category")
                          ->join("deals","deals.category_id"," category.category_id")
                          ->join("stores","stores.store_id","deals.shop_id")
                           
                          ->where(array("category_status"=>1, "main_category_id"=> 0,"deal"=>1,"enddate >"=>time(), "purchase_count <"=> 'maximum_deals_limit',"deal_status"=>1,"store_status"=>1,$con))
		          ->groupby("category.category_id") 
                           ->orderby("category_name","ASC")
                          ->get();  
                           
                            return $result;
	}

	public function get_category_list_auction_count($store_id='')
	{ 
	
		$store_id = addslashes($store_id);
		$this->city_id = addslashes($this->city_id);
		
		$con = " and stores.store_id = '$store_id' ";
		if(CITY_SETTING){ 
			$con .= "and stores.city_id = '$this->city_id'";
		} 
//		$result = $this->db->query("select category_url, category.category_id, category_name , auction , count(auction.deal_id) as auction_count from 
//                    category join auction on auction.category_id = category.category_id 
//                    join stores on stores.store_id=auction.shop_id
//                    where category_status = 1 AND main_category_id = 0 AND auction = 1 AND enddate > ".time()."  AND deal_status = 1 and  store_status = 1 and auction_status = 0 $con group by category.category_id  order by category_name ASC"); 
//		return $result;
                
                
                
                          $result=$this->db->select("category_url, category.category_id, category_name , auction , count(auction.deal_id) as auction_count")->from("category")
                          ->join("auction","auction.category_id"," category.category_id")
                          ->join("stores","stores.store_id","auction.shop_id")
                           
                          ->where(array("category_status"=>1, "main_category_id"=> 0,"auction"=>1,"enddate >"=>time(), "deal_status "=> 1,"store_status"=>1,"auction_status"=>0,$con))
		          ->groupby("category.category_id") 
                           ->orderby("category_name","ASC")
                          ->get();  
                           
                            return $result;
	}
	
	public function get_categoryname($category = "" )
	{
		$result = $this->db->from('category')->where(array("category_url" => $category))->get();
		return $result;
	}
	
	public function get_products_count($store_id="",$search = "",$category = "",$search_key='',$search_cate_id='')
	{
		$store_id = addslashes($store_id);
		$search = addslashes($search);
		$category = addslashes($category);
		$search_key = addslashes($search_key);
		$search_cate_id = addslashes($search_cate_id);
		$this->city_id = addslashes($this->city_id);
		
		
		
		
        $conditions = " ";
			$join ="join category on category.category_id=product.category_id";
		
		if($category){
			 $conditions = " and category.category_url='$category'";
		}
		if($search=='sub'){
			$conditions = " and category.category_url='$category'";
			$join ="join category on category.category_id=product.sub_category_id";
		}
		if($search=='sec'){
			$conditions = " and category.category_url='$category'";
			$join =" join category on category.category_id=product.sec_category_id";
		}
		if($search=='third'){
			$conditions = " and category.category_url='$category'";
			$join =" join category on category.category_id=product.third_category_id";
		}
		
		if($search!='main' && $search!='sub' && $search!='sec' && $search!='third' && $search!=""){
			 $conditions .= " and (deal_title like '%".strip_tags($search)."%'";
			 $conditions .= " or deal_description like '%".strip_tags($search)."%')";
		}
		
		if($search_key!=''){
			 $conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			 $conditions .= " or deal_description like '%".strip_tags($search_key)."%')";
		}
		if($search_cate_id!=''){
			$conditions .= " and product.category_id = '$search_cate_id' ";
		}
	
		if(CITY_SETTING){
//		$qry = "select product.deal_id from product  
//                    join stores on stores.store_id=product.shop_id 
//                    join product_size on product_size.deal_id=product.deal_id $join
//                    where purchase_count < user_limit_quantity and deal_status = 1 and category.category_status = 1 and  store_status = 1 and stores.city_id = '$this->city_id' and stores.store_id = $store_id $conditions group by product.deal_id order by product.deal_id DESC";
//		$result = $this->db->query($qry);
                
                
                $result=$this->db->select("product.deal_id")->from("product")
                          ->join("stores","stores.store_id"," product.shop_id")
                          ->join("product_size","product_size.deal_id","product.deal_id")
                           ->join($join)
                          ->where(array("purchase_count <"=>'user_limit_quantity', "deal_status"=> 1,"category.category_status"=>1,"store_status >"=>1, "stores.city_id "=> $this->city_id,"stores.store_id"=>$store_id ,$conditions))
		          ->groupby("product.deal_id") 
                           ->orderby("product.deal_id","DESC")
                          ->get();  
                           
                           // return $result;

		} else {
//			$qry = "select product.deal_id from product  join stores on stores.store_id=product.shop_id join product_size on product_size.deal_id=product.deal_id $join
//                            where purchase_count < user_limit_quantity and
//                            deal_status = 1 and
//                            category.category_status = 1 and 
//                            store_status = 1 and stores.store_id = $store_id $conditions group by product.deal_id order by product.deal_id DESC";
//			$result = $this->db->query($qry);
                        
                        
                        
                        
                          $result=$this->db->select("product.deal_id")->from("product")
                          ->join("stores","stores.store_id"," product.shop_id")
                          ->join("product_size","product_size.deal_id","product.deal_id")
                           ->join($join)
                          ->where(array("purchase_count <"=>'user_limit_quantity', "deal_status"=> 1,"category.category_status"=>1,"store_status >"=>1, "stores.store_id"=>$store_id ,$conditions))
		          ->groupby("product.deal_id") 
                           ->orderby("product.deal_id","DESC")
                          ->get();  

		}
		return count($result);
	}

	/** GET PRODUCTS LIST **/

	public function  get_products_list($store_id="",$search = "", $category = "", $offset = "", $record = "",$search_key='',$search_cate_id='')
	{
		
		$store_id = addslashes($store_id);
		$search = addslashes($search);
		$category = addslashes($category);
		$offset = addslashes($offset);
	    $record  = addslashes($record);
		$search_key = addslashes($search_key);
		$search_cate_id = addslashes($search_cate_id);
		
		
		$conditions = " ";
		$join ="join category on category.category_id=product.category_id";
		
		if($category){
			 $conditions = " and category.category_url='$category'";
		}
		if($search=='sub'){
			$conditions = " and category.category_url='$category'";
			$join =" join category on category.category_id=product.sub_category_id";
		}
		if($search=='sec'){
			$conditions = " and category.category_url='$category'";
			$join =" join category on category.category_id=product.sec_category_id";
		}
		if($search=='third'){
			$conditions = " and category.category_url='$category'";
			$join =" join category on category.category_id=product.third_category_id";
		}

		if($search!='main' && $search!='sub' && $search!='sec' && $search!='third' && $search!=""){
			 $conditions .= " and (deal_title like '%".strip_tags($search)."%'";
			 $conditions .= " or deal_description like '%".strip_tags($search)."%')";
		}

		if($search_key!=''){
			 $conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			 $conditions .= " or deal_description like '%".strip_tags($search_key)."%')";
		}
		if($search_cate_id!=''){
			$conditions .= " and product.category_id = '$search_cate_id' ";
		}
	
	
		if(CITY_SETTING){
//		    $qry = "select product.deal_id,product.deal_key,product.deal_title,product.url_title,$this->deal_value_condition,product.deal_price, category.category_url,deal_percentage,stores.store_url_title,deal_description,(select avg(rating) from rating where type_id=product.deal_id and module_id=2) as avg_rating from product  
//                    join stores on stores.store_id=product.shop_id $join join product_size on product_size.deal_id=product.deal_id 
//                        where purchase_count < user_limit_quantity and deal_status = 1 and category.category_status = 1 and  store_status = 1 and stores.city_id = '$this->city_id' and stores.store_id = $store_id  $conditions group by product.deal_id order by product.deal_id DESC limit $offset,$record";
//		          $result = $this->db->query($qry);

                          $result=$this->db->select("product.deal_id,product.deal_key,product.deal_title,product.url_title,$this->deal_value_condition,product.deal_price, category.category_url,deal_percentage,stores.store_url_title,deal_description,(select avg(rating) from rating where type_id=product.deal_id and module_id=2) as avg_rating")
                          ->from("product")
                          ->join("stores","stores.store_id"," product.shop_id")
                          ->join($join)
                          ->join("product_size","product_size.deal_id","product.deal_id")                        
                          ->where(array("purchase_count <"=>'user_limit_quantity', "deal_status"=> 1,"category.category_status"=>1,"store_status >"=>1,"stores.city_id" => '.$this->city_id.', "stores.store_id"=>$store_id ,$conditions))
		          ->groupby("product.deal_id") 
                          ->orderby("product.deal_id","DESC")
                          ->limit($offset,$record)       
                          ->get();  
 
		} else {

//			$qry = "select product.deal_id,product.deal_key,product.deal_title,product.url_title,$this->deal_value_condition,product.deal_price, category.category_url,deal_percentage,stores.store_url_title,deal_description,(select avg(rating) from rating where type_id=product.deal_id and module_id=2) as avg_rating 
//                            from product 
//                            join stores on stores.store_id=product.shop_id $join join product_size on product_size.deal_id=product.deal_id 
//                                where purchase_count < user_limit_quantity and deal_status = 1 and category.category_status = 1 and  store_status = 1  and stores.store_id = $store_id $conditions  group by product.deal_id order by product.deal_id DESC limit $offset,$record";
//			$result = $this->db->query($qry);
                       $result=$this->db->select("product.deal_id,product.deal_key,product.deal_title,product.url_title,$this->deal_value_condition,product.deal_price, category.category_url,deal_percentage,stores.store_url_title,deal_description,(select avg(rating) from rating where type_id=product.deal_id and module_id=2) as avg_rating")
                          ->from("product")
                          ->join("stores","stores.store_id"," product.shop_id")
                          ->join($join)
                          ->join("product_size","product_size.deal_id","product.deal_id")                        
                          ->where(array("purchase_count <"=>'user_limit_quantity', "deal_status"=> 1,"category.category_status"=>1,"store_status "=>1,"stores.store_id"=>$store_id ,$conditions))
		          ->groupby("product.deal_id") 
                          ->orderby("product.deal_id","DESC")
                          ->limit($offset,$record)       
                          ->get();  

		} // print_r($result);
		 return $result;
	}
	
	public function get_deals_count($store_id='',$cat_type,$category = "",$search_key='',$search_cate_id=''){
		
		$store_id = addslashes($store_id);
		$cat_type = addslashes($cat_type);
		$category = addslashes($category);
		$search_key = addslashes($search_key);
		$search_cate_id = addslashes($search_cate_id);
		$this->city_id = addslashes($this->city_id);
		
		
		
		$conditions = "deal_status = 1 AND enddate > ".time()." AND startdate < ".time()." AND purchase_count < maximum_deals_limit  AND category.category_status = 1 AND store_status = 1  and stores.store_id = '$store_id' " ;
		$join = "deals.category_id";

		if(CITY_SETTING){
				$conditions .= " AND stores.city_id = '$this->city_id' ";
		}
		if($category && $cat_type=='main'){
			$conditions .= " AND category.category_url =  '$category' ";
		}
		else if($category && $cat_type=='sub'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.sub_category_id";
		}
		else if($category && $cat_type=='sec'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.sec_category_id";
		}
		else if($category && $cat_type=='third'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.third_category_id";
		}
		
		if($search_key!=''){
			 $conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			 $conditions .= " or deal_description like '%".strip_tags($search_key)."%')";
		}
		if($search_cate_id!=''){
			$conditions .= " and deals.category_id = '$search_cate_id' ";
		}
		
//		$result = $this->db->query("select deals.deal_id from deals  join stores on stores.store_id=deals.shop_id 
//                    join category on category.category_id = $join where $conditions group by deal_id order by deal_id DESC ");
//       
//                return count($result);
                
                
                 $result=$this->db->select("deals.deal_id ")
                          ->from("deals")
                          ->join("stores","stores.store_id"," product.shop_id")
                          ->join("category","category.category_id",$join)
                          ->join("product_size","product_size.deal_id","product.deal_id")                        
                          ->where($conditions)
		          ->groupby("deal_id") 
                          ->orderby("deal_id","DESC")
                                 
                          ->get();  
                 return count($result);
	}
	
	public function get_deals_list($store_id='',$cat_type,$category = "", $offset = "", $record = "",$search_key='',$search_cate_id='')
	{
		
		$store_id = addslashes($store_id);
		$cat_type = addslashes($cat_type);
		$category = addslashes($category);
		$offset  = addslashes($offset);
		$search_key = addslashes($search_key);
		$search_cate_id = addslashes($search_cate_id);
		$this->city_id = addslashes($this->city_id);
		
		 $conditions = " deal_status = 1 AND enddate > ".time()." AND startdate < ".time()." AND purchase_count < maximum_deals_limit AND category.category_status = 1 AND store_status = 1 and stores.store_id = '$store_id' " ;
		$join = "deals.category_id";
		if(CITY_SETTING){
				$conditions .= " AND stores.city_id = '$this->city_id' ";
		}
		if($category && $cat_type=='main'){
			$conditions .= " AND category.category_url =  '$category' ";
		}
		else if($category && $cat_type=='sub'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.sub_category_id";
		}
		else if($category && $cat_type=='sec'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.sec_category_id";
		}
		else if($category && $cat_type=='third'){
			$conditions .= " AND category.category_url =  '$category' ";
			$join = "deals.third_category_id";
		}
		
		if($search_key!=''){
			$search_url = addslashes(url::title($search_key));
			$conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			$conditions .= " or url_title = '$search_url' )";
		}
		if($search_cate_id!=''){
			$conditions .= " and deals.category_id = '$search_cate_id' ";
		}
		
//		$result = $this->db->query("select deals.deal_id,deals.deal_key,deals.deal_title,deals.url_title,deals.deal_value,deals.deal_price, category.category_url, deals.maximum_deals_limit, deals.purchase_count,deals.enddate,deals.deal_percentage,stores.store_url_title,(select avg(rating) from rating where type_id=deals.deal_id and module_id=1) as avg_rating  from 
//                    deals  join stores on stores.store_id=deals.shop_id 
//                    join category on category.category_id = $join 
//                        where $conditions group by deal_id order by deal_id DESC limit '$offset','$record' ");
//		
//		return $result;
                
                $result=$this->db->select("deals.deal_id,deals.deal_key,deals.deal_title,deals.url_title,deals.deal_value,deals.deal_price, category.category_url, deals.maximum_deals_limit, deals.purchase_count,deals.enddate,deals.deal_percentage,stores.store_url_title,(select avg(rating) from rating where type_id=deals.deal_id and module_id=1) as avg_rating")
                          ->from("deals")
                          
                          ->join("stores","stores.store_id","deals.shop_id")
                             ->join("category","category.category_id", $join)                  
                          ->where($conditions)
		          ->groupby("deal_id") 
                          ->orderby("deal_id","DESC")
                          ->limit($offset,$record)     
                          ->get();  
                 return $result;
                
                
                
	}
	
	public function get_auction_count($store_id='',$cat_type ="",$category = "",$search_key='',$search_cate_id='')
	{
		$conditions = "deal_status = 1 AND enddate > ".time()." AND category.category_status = 1 AND  store_status = 1 and auction_status = 0 and stores.store_id=$store_id";
		$join = "auction.category_id";
		if(CITY_SETTING){
			$conditions .= " AND stores.city_id = $this->city_id ";
		}
		if($category && $cat_type=='main'){
			$conditions .= " AND category.category_url = '$category' ";
		}
		else if($category && $cat_type=='sub'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.sub_category_id";

		}
		else if($category && $cat_type=='sec'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.sec_category_id";

		}
		else if($category && $cat_type=='third'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.third_category_id";

		}
		
		if($search_key!=''){
			$search_url = url::title($search_key);
			$conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			$conditions .= " or url_title = '$search_url' )";
		}
		if($search_cate_id!=''){
			$conditions .= " and auction.category_id = $search_cate_id ";
		}
		
		$result = $this->db->query( "select auction.deal_id from auction join category ON category.category_id = $join join stores ON stores.store_id = auction.shop_id  where $conditions  group by deal_id order by deal_id DESC ");
		return count($result);
	}
	
	public function get_auction_list($store_id='',$cat_type ="",$category = "", $offset = "", $record = "",$search_key='',$search_cate_id='')
	{
		
		$store_id = addslashes($store_id);
		$cat_type = addslashes($cat_type);
		$offset = addslashes($offset);
		$record = addslashes($record);
		$search_key = addslashes($search_key);
		$search_cate_id = addslashes($search_cate_id);
		$this->city_id = addslashes($this->city_id);
		
		
		
		$conditions = "deal_status = 1 AND enddate > ".time()." AND category.category_status = 1 AND  store_status = 1 and auction_status = 0 and stores.store_id = '$store_id' ";
		$join = "auction.category_id";
		if(CITY_SETTING){
			$conditions .= " AND stores.city_id = '$this->city_id' ";
		}
		if($category && $cat_type=='main'){
			$conditions .= " AND category.category_url = '$category' ";
		}else if($category && $cat_type=='sub'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.sub_category_id";
		}else if($category && $cat_type=='sec'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.sec_category_id";
		}else if($category && $cat_type=='third'){
			$conditions .= " AND category.category_url = '$category' ";
			$join = "auction.third_category_id";
		}
		if($search_key!=''){
			$search_url = addslashes(url::title($search_key));
			$conditions .= " and (deal_title like '%".strip_tags($search_key)."%'";
			$conditions .= " or url_title = '$search_url' )";
		}
		if($search_cate_id!=''){
			$conditions .= " and auction.category_id = '$search_cate_id' ";
		}
		
//		$result = $this->db->query( "select auction.deal_id,auction.deal_key,product_value,auction.deal_title,auction.url_title,auction.deal_value,auction.deal_price, category.category_url,auction.enddate,stores.store_url_title
//                    from auction join category ON category.category_id = $join
//                        join stores ON stores.store_id = auction.shop_id  
//                        where $conditions  group by deal_id order by deal_id DESC limit '$offset','$record' ");
//		
//		
//		
//		return $result;
                
                
                
                 $result=$this->db->select("auction.deal_id,auction.deal_key,product_value,auction.deal_title,auction.url_title,auction.deal_value,auction.deal_price, category.category_url,auction.enddate,stores.store_url_title")
                          ->from("auction")
                          ->join("category","category.category_id", $join)
                          ->join("stores","stores.store_id","auction.shop_id")
                                               
                          ->where($conditions)
		          ->groupby("deal_id") 
                          ->orderby("deal_id","DESC")
                          ->limit($offset,$record)     
                          ->get();  
                 return count($result);
	}
}
