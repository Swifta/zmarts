<?php defined('SYSPATH') OR die('No direct access allowed.');
class Leo_Controller extends Layout_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();

		$url = $_SERVER['SERVER_NAME'].dirname(__FILE__);
		$url = str_replace('\\', '/', $url);
		$array = end(explode('/modules/',$url)); 
		$array = explode('/controllers',$array); 

		$this->theme_name = "leo"; 
		
		

		
		
		if(isset($_SESSION['select_lang'])){
			if($_SESSION['select_lang']==2){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/ha_style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/ha_multi_style.css'));
			}else if($_SESSION['select_lang']==3){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/ig_style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/ig_multi_style.css'));
			}else if($_SESSION['select_lang']==4){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/yo_style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/yo_multi_style.css'));
			}else{
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
			}
		}else{
			$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',));
			
			$this->template->javascript = html::script(array( PATH.'themes/'.THEME_NAME.'/js/'.$this->theme_name.'/jquery1.min.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/megamenu.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/jquery-ui.min.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/css3-mediaqueries.js',PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/fwslider.js',PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/jquery.easydropdown.js',PATH.'themes/'.THEME_NAME.'/toastr/jquery.jnotify.js', ));
			
			
		}
		
		$this->stores = new Leo_Model();

		$this->is_store = 1;
		if(!$this->store_setting){
		        url::redirect(PATH);
		}
	}
	
	/** STORE LIST  PAGE **/

	public function store_list($page = "" )
	{		
		$this->store_details_count = $this->stores->store_details_count();
		
		$this->pagination = new Pagination(array(
				'base_url'       => 'stores/page/'.$page."/",
				'uri_segment'    => 3,
				'total_items'    => $this->store_details_count,
				'items_per_page' => 8, 
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$this->template->title = $this->Lang["STORE_LIST"]." | ".SITENAME;
		$this->store_details = $this->stores->get_store_details($this->pagination->sql_offset, $this->pagination->items_per_page);
		
		
		
		
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_listing");
	}
		/** STORE VIEWMORE **/
		
	public function store_list_1($page = "")
	{
		
		$deal_record = $this->input->get('record');
		$deal_offset = $this->input->get('offset');
		$this->store_details_count = $this->stores->store_details_count();
		$this->record = $this->input->get('record');
		$this->template->title = $this->Lang["STORE_LIST"]." | ".SITENAME;
		$this->store_details = $this->stores->get_store_details($deal_offset, $deal_record);
		echo new View("themes/".THEME_NAME."/".$this->theme_name."/all_store_listing");
		exit;
		
		
	}
	
	/** STORE  LISTING - SEARCH BASED **/
	
	public function search_list($page = "")
	{
	    $search = $this->input->get('q');
		$this->store_details_count = $this->stores->get_store_count($search);
		$this->pagination = new Pagination(array(
				'base_url'       => '/stores/search.html/page/'.$page,
				'uri_segment'    => 4,
				'total_items'    => $this->store_details_count,
				'items_per_page' => 8, 
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$this->store_details = $this->stores->get_store_list($search,$this->pagination->sql_offset, $this->pagination->items_per_page);

		$this->store_search = $search;
		$this->template->title = $this->Lang["STORE_LIST"]." | ".SITENAME;
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_listing");
	}
	
	/** STORE DETAILS  PAGE **/

	public function store_detail($storekey = "",$store_url_title = "" )
	{
		
		
		
		$this->is_store_details = 1;
		$search="";
		if($this->input->get('q')) {
			$search = $this->input->get('q');	
		}		
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		
		if(count($this->get_store_details) == 0){		
		        common::message(-1, $this->Lang["NO_DATA_F"]);
		        url::redirect(PATH);
		}
		
		foreach($this->get_store_details as $store) {
                        $this->avg_rating =$this->stores->get_store_rating($store->store_id);
                        $this->get_sub_store_details = $this->stores->get_sub_store_detailspage($store->store_id);
                        $this->get_deals_categories = $this->stores->get_deals_categories($store->store_id,$search,1);
                        $this->get_auction_categories = $this->stores->get_auction_categories($store->store_id,$search,1);
                        $this->get_product_categories = $this->stores->get_product_categories($store->store_id,$search,1);
                        
                        
                        
                        
                        $this->all_payment_list = $this->stores->payment_list();
                        $this->comments_deatils = $this->stores->get_comments_data($store->store_id);
                        $this->like_details = $this->stores->get_like_data($store->store_id);
                        $this->unlike_details = $this->stores->get_unlike_data($store->store_id);
		        $this->template->title = $store->store_name." | ".SITENAME;
			    if($store->meta_description){
				    $this->template->description = $store->meta_description;
			    }
			    if($store->meta_keywords){
				    $this->template->keywords = $store->meta_keywords;
			    }
			    if($store->merchant_id){ 
				    $this->template->metaimage = PATH.'images/merchant/600_370/'.$store->merchant_id.'_'.$store->store_id.'.png';
			    }
			   
		}
		
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_detail");		
	}
/* STORE COMMENTS */
        public function store_list_details($page = "" )
	{		
		$this->store_details_count = $this->stores->get_user_bought($page);
		url::redirect(PATH);
		
	}
	
	public function comments()
	{ 
			$action_type = $this->input->get("action_type"); 
			$comments = $this->input->get("comment"); 
			$store_id = $this->input->get("store_id");
			//$type = $this->input->get("type");
			
			$discussion_id = $this->input->get("dis_id");
			if($action_type=="update") {
				
				$status = $this->stores->update_comments($comments,$store_id,$discussion_id);
			} else {
				
				$status = $this->stores->add_comments($comments,$store_id);
			}
			
			$this->comments_deatils = $this->stores->get_comments_data($store_id);
			$this->like_details = $this->stores->get_like_data($store_id);
			$this->unlike_details = $this->stores->get_unlike_data($store_id);

			echo new View("themes/".THEME_NAME."/".$this->theme_name."/store_comments");
			exit;

					
	}

/* STORE LIKE COMMENTS */
	 public function like()
        {
			$store_id = $this->input->get('store_id');
			$user_id = $this->input->get('user_id');
			$dis_id = $this->input->get('dis_id');	
            $status = $this->stores->like($store_id,$user_id,$dis_id);
            $get_data = $this->stores->get_like_details($dis_id);
            $get_data1 = $this->stores->get_unlike_details($dis_id);
            $data = ' <div class="lode_over"><a class="like" title="like">('.$get_data.')</a></div>';
            echo $data .= '<div class="lode_over2" ><a class="dislike" title="unlike" onclick="unlike('.'&#39;'.$store_id.'&#39;'.',&#39;'.$user_id.'&#39;'.',&#39;'.$dis_id.'&#39;'.');">('.$get_data1.')</a></div>';
            exit;
        }
        /* STORE UNLIKE */
        public function unlike()
        {
			$store_id = $this->input->get('store_id');
			$user_id = $this->input->get('user_id');
			$dis_id = $this->input->get('dis_id');			
            $status = $this->stores->unlike($store_id,$user_id,$dis_id);
            $get_data = $this->stores->get_unlike_details($dis_id);
             $get_data1 = $this->stores->get_like_details($dis_id);
            $data = '<div class="lode_over"><a class="like" title="unlike" onclick="like('.'&#39;'.$store_id.'&#39;'.',&#39;'.$user_id.'&#39;'.',&#39;'.$dis_id.'&#39;'.');">('.$get_data1.')</a></div>';
            echo $data .= '<div class="lode_over2"><a class="dislike" title="unlike">('.$get_data.')</a></div>';
            exit;
        }
        
        /* STORE RATING */
		public function store_rating()
	{	
		$aResponse['error'] = false;
		$aResponse['message'] = '';
		$aResponse['server'] = ''; 
			if(isset($_POST['action']))
			{
				if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'rating')
				{
						$id = intval($_POST['idBox']);
						$rate = floatval($_POST['rate']);
						$store_id=$_POST['deal_id'];
						$success = true;
						if($success)
						{
								$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
								$aResponse['server'] = '<strong>Success answer :</strong> Success : Your rate has been recorded. Thanks for your rate :)<br />';
								$aResponse['server'] .= '<strong>Rate received :</strong> '.$rate.'<br />';
								$aResponse['server'] .= '<strong>Deal ID :</strong> '.$store_id.'<br />';
								$aResponse['server'] .= '<strong>ID to update :</strong> '.$id;			
								$this->userPost = $this->input->post(); 
								$this->auction_rate = $this->stores->save_store_rating($store_id,$rate);
								$ch="auction_sess_".$_POST['deal_id'];
								$sta= $this->session->set($ch,$_POST['rate']);
								echo json_encode($aResponse);
						}		
				}	
		}
exit;
	
	}
	
	public function stores_home_page($store_url_title="") 
	{
		
		
		$this->is_store_details = 1;
		$this->storeurl = $store_url_title;
		$search="";
		if($this->input->get('q')) {
			$search = $this->input->get('q');	
		}	
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		$storekey = $this->stores->get_store_key($store_url_title);	
		
		
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		
		$this->storeid = $this->stores->get_store_id($store_url_title);	
		
		
		if(count($this->get_store_details) == 0){		
		        common::message(-1, $this->Lang["NO_DATA_APP"]);
		        url::redirect(PATH);
		}
		
		foreach($this->get_store_details as $store) {
                        $this->avg_rating =$this->stores->get_store_rating($store->store_id);
                        $this->get_sub_store_details = $this->stores->get_sub_store_detailspage($store->store_id);
                        $this->get_deals_categories = $this->stores->get_deals_categories($store->store_id,$search,1);
                        $this->get_auction_categories = $this->stores->get_auction_categories($store->store_id,$search,1);
                        $this->get_product_categories = $this->stores->get_product_categories($store->store_id,$search,1);
						
						
                        
                        $this->get_top_selling_product_categories = $this->stores->get_product_categories($store->store_id,$search,3);
                        $this->get_recent_product_categories = $this->stores->get_product_categories($store->store_id,$search,2);
                        $this->get_top_sellingdeals_categories = $this->stores->get_deals_categories($store->store_id,$search,3);
                        $this->get_recent_deals_categories = $this->stores->get_deals_categories($store->store_id,$search,2);
                        $this->get_recent_auction_categories = $this->stores->get_auction_categories($store->store_id,$search,2);
                        
                        
                        
                        $this->all_payment_list = $this->stores->payment_list();
                        $this->comments_deatils = $this->stores->get_comments_data($store->store_id);
                        $this->like_details = $this->stores->get_like_data($store->store_id);
                        $this->unlike_details = $this->stores->get_unlike_data($store->store_id);
                        /* Merchant Cms footer starts */
                        $this->home = new Home_Model();
                        $this->merchant_cms = $this->home->get_merchant_cms_data($store_url_title);
                        $this->about_us_footer = $this->stores->get_about_us_footer_data($store->store_id);
                        $this->admin_details = $this->stores->get_admin_details();
                        /* Merchant Cms footer ends */
		        $this->template->title = $store->store_name." | ".SITENAME;
			    if($store->meta_description){
				    $this->template->description = $store->meta_description;
			    }
			    if($store->meta_keywords){
				    $this->template->keywords = $store->meta_keywords;
			    }
			    if($store->merchant_id){ 
				    $this->template->metaimage = PATH.'images/merchant/600_370/'.$store->merchant_id.'_'.$store->store_id.'.png';
			    }
			    $this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id); // get the merchant personalised settings
			    $this->best_seller = $this->stores->get_best_seller_details($store->store_id,$store->merchant_id); // get the best selling products of this store
			     $this->footer_merchant_details = $this->stores->get_merchant_details($store->merchant_id);
		}
		
		$this->categeory_list_product = $this->stores->get_category_list_product_count($this->storeid);
		$this->categeory_list_deal = $this->stores->get_category_list_deal_count($this->storeid);
		$this->categeory_list_auction = $this->stores->get_category_list_auction_count($this->storeid);
		
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_detail");
		
	
	
		
		
	}
	
	public function user_subscriber_signup()
	{
		$email=$this->input->get('email');
		$store_id=$this->input->get('store_id');
		$store_url=$this->input->get('store_url');
		
		$this->add_email_subscriber=$this->stores->add_email_subscriber($email,$store_id);
		if($this->add_email_subscriber==1)
		{
			
			common::message(1, $this->Lang['YOU_SUBSCRIBE_SUCCESS']);
			
		}
		echo "1";
		exit;
	}
	
	public function product_list($store_url_title = "", $cat_type = "",$category = ""){
		
		
		$this->url_cat = trim($this->input->get('c_'));
		$cat_type = "main";
		$category =  trim($this->input->get('c_'));
		
		
		
	        //print_r($cat_type); exit;
		
		$this->color_id="";
		$this->category_id = "";
		$this->sub_cat="";
		$this->category_url = $category;
		$category_name="";
		$category_name_main = "";
		$this->products = $this->stores;

		if($cat_type=="sub"){
		        $this->sub_cat= $category;
				$category_deatils = $this->products->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
				$category_name_main = $category_deatils[0]->category_name;
		}
		elseif($cat_type=="sec"){
		        $this->sub_cat= "2";
				$category_deatils = $this->products->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}
		else if($cat_type=="third"){
		        $this->sub_cat= "3";
				$category_deatils = $this->products->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}
		else {
			
			$category_deatils = $this->products->get_categoryname($category);
			$this->category_id = $category_deatils[0]->category_id;
			$category_name = $category_deatils[0]->category_name;
			
			
		}
		
		
		$this->storeid = $this->stores->get_store_id($store_url_title);

		$this->all_products = $this->products->get_products_count_category($cat_type,$category, $this->storeid);
		
		$this->all_products_count = count($this->all_products);
		
		
		 
		
		$this->get_product_categories = $this->all_products;
		
		
		$this->best_seller = $this->all_products;
		
		$page = "products";
	   
		
		$this->pagination = new Pagination(array(
				'base_url'       => 'products/c/'.base64_encode($cat_type).'/'.$category.'.html/page/'.$page,
				'uri_segment'    => 6,
				'total_items'    => $this->all_products_count,
				'items_per_page' => 12,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		//$this->all_products_list = $this->products->get_products_list($cat_type,$category, $this->pagination->sql_offset, $this->pagination->items_per_page);
		
		
		
		//$this->view_products_list = $this->products->get_products_view();
		//$this->view_hot_products_list = $this->products->get_hot_products_view();
		$this->category_name = $category_name;
		//$this->categeory_list = $this->products->get_subcategory_list();
		//$this->products_list = $this->products->get_products_min_max();
		/*foreach ($this->products_list as $pro ){
		$this->pro_max=$pro->max_deal;
		$this->pro_min=$pro->min_deal;
		}*/
		//$this->color_list = $this->products->get_color_list();
		//$this->size_list = $this->products->get_size_list();
		
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
			$this->about_us_footer = $this->stores->get_about_us_footer_data($store->store_id);
		}
		
		
		
		
		$this->template->title = rtrim($this->Lang["PRODUCTS"].' / '.$category_name." | ".SITENAME);
        $this->title_display = rtrim($this->Lang["PRODUCTS"].' / '.$category_name);
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_product");

		
	
	
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		/*$this->url_cat = trim($this->input->get('c_'));
		
		$this->is_store_details = $this->is_product = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->search_key = $this->input->get('q');
		$this->search_cate_id = $this->input->get('d_id');
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
			$this->about_us_footer = $this->stores->get_about_us_footer_data($store->store_id);
		}
		
		$cat_type=base64_decode($cat_type);
		$this->color_id="";
		$this->category_id = "";
		$this->sub_cat="";
		$this->category_url = $category;
		$category_name="";
		$category_name_main = "";
		$this->cat_type = $cat_type;
		
		if($cat_type=="sub"){
		        $this->sub_cat= $category;
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
				$category_name_main = $category_deatils[0]->category_name;
		}elseif($cat_type=="sec"){
		        $this->sub_cat= "2";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=="third"){
		        $this->sub_cat= "3";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=='main'){
			$category_deatils = $this->stores->get_categoryname($category);
			$this->category_id = $category_deatils[0]->category_id;
			$category_name = $category_deatils[0]->category_name;
		}
		
		$this->categeory_list_product = $this->stores->get_category_list_product_count($this->storeid);
		
		var_dump($this->categeory_list_product);
		exit;
		$this->get_product_categories = $this->categeory_list_product;
		$this->best_seller = $this->categeory_list_product;
		
		$this->categeory_list_deal = $this->stores->get_category_list_deal_count($this->storeid);
		$this->categeory_list_auction = $this->stores->get_category_list_auction_count($this->storeid);

		$page="";
		$this->all_products_count = $this->stores->get_products_count($this->storeid,$cat_type,$category,$this->search_key,$this->search_cate_id);
		
		$this->pagination = new Pagination(array(
				'base_url'       => $this->storeurl.'/products/c/'.base64_encode($cat_type).'/'.$category.'.html/page/'.$page,
				'uri_segment'    => 7,
				'total_items'    => $this->all_products_count,
				'items_per_page' => 12,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$this->all_products_list = $this->stores->get_products_list($this->storeid,$cat_type,$category, $this->pagination->sql_offset, $this->pagination->items_per_page,$this->search_key,$this->search_cate_id);
		
		
		
		$this->category_name = $category_name;
		
		$title_category_name = "";
		if($this->search_cate_id!=''){
			if(count($this->category_list)>0){
				foreach ($this->category_list as $d) {
					if($d->category_id==$this->search_cate_id)
						$title_category_name = $d->category_name;
				}
			}
		}
		
		$title_display = "";
		if($title_category_name!=''){
			if($this->search_key!='')
				$title_display = ' / '.$title_category_name.' - '.$this->search_key;
			else
				$title_display = ' / '.$title_category_name;
		}else{
			if($this->search_key!='')
				$title_display = ' - '.$this->search_key;
		}
		
		$this->template->title = rtrim($this->Lang["PRODUCTS"].$title_display." | ".SITENAME);
		$this->title_display = rtrim($this->Lang["PRODUCTS"].$title_display);
		
		$this->get_product_categories = $this->all_products_list;
		$this->best_seller = $this->all_products_list;
		
		
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_product");*/
		
	}
	
	public function all_product_list($store_url_title='',$offset='',$record='',$cat_type='',$category='',$search_key='',$search_cate_id=''){
		$this->is_store_details = $this->is_product = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
		}
		
		$this->all_products_list = $this->stores->get_products_list($this->storeid,$cat_type,$category, $offset, $record,$search_key,$search_cate_id);
		/*echo $this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_product_list");*/
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_detail");
		
	}
	
	public function deal_list($store_url_title = "", $cat_type = "",$category = ""){ 
		$this->is_store_details = $this->is_deals = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
			$this->about_us_footer = $this->stores->get_about_us_footer_data($store->store_id);
		}
		
		$cat_type=base64_decode($cat_type);
		$this->color_id="";
		$this->category_id = "";
		$this->sub_cat="";
		$this->category_url = $category;
		$category_name="";
		$category_name_main = "";
		$this->cat_type = $cat_type;
		
		if($cat_type=="sub"){
		        $this->sub_cat= $category;
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
				$category_name_main = $category_deatils[0]->category_name;
		}elseif($cat_type=="sec"){
		        $this->sub_cat= "2";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=="third"){
		        $this->sub_cat= "3";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=='main'){
			$category_deatils = $this->stores->get_categoryname($category);
			$this->category_id = $category_deatils[0]->category_id;
			$category_name = $category_deatils[0]->category_name;
		}

		$this->categeory_list_product = $this->stores->get_category_list_product_count($this->storeid);
		$this->categeory_list_deal = $this->stores->get_category_list_deal_count($this->storeid);
		$this->categeory_list_auction = $this->stores->get_category_list_auction_count($this->storeid);
		
		$this->search_key = $this->input->get('q');
		$this->search_cate_id = $this->input->get('d_id');
		
		$page="";
		$this->all_deals_count = $this->stores->get_deals_count($this->storeid,$cat_type,$category,$this->search_key,$this->search_cate_id);
		
		$this->pagination = new Pagination(array(
				'base_url'       => $this->storeurl.'/deal/c/'.base64_encode($cat_type).'/'.$category.'.html/page/'.$page,
				'uri_segment'    => 7,
				'total_items'    => $this->all_deals_count,
				'items_per_page' => 12,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$this->all_deals_list = $this->stores->get_deals_list($this->storeid,$cat_type,$category, $this->pagination->sql_offset, $this->pagination->items_per_page,$this->search_key,$this->search_cate_id);
		
		$this->category_name = $category_name;
		
		$title_category_name = "";
		if($this->search_cate_id!=''){
			if(count($this->category_list)>0){
				foreach ($this->category_list as $d) {
					if($d->category_id==$this->search_cate_id)
						$title_category_name = $d->category_name;
				}
			}
		}
		
		$title_display = "";
		if($title_category_name!=''){
			if($this->search_key!='')
				$title_display = ' / '.$title_category_name.' - '.$this->search_key;
			else
				$title_display = ' / '.$title_category_name;
		}else{
			if($this->search_key!='')
				$title_display = ' - '.$this->search_key;
		}
		
		$this->template->title = rtrim($this->Lang["DEALS"].$title_display." | ".SITENAME);
		$this->title_display = rtrim($this->Lang["DEALS"].$title_display);
		
		//$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_deal");
		
	}
	
	public function all_deal_list($store_url_title='',$offset='',$record='',$cat_type='',$category='',$search_key='',$search_cate_id=''){
		$this->is_store_details = $this->is_deals = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
		}
		
		$this->all_deals_list = $this->stores->get_deals_list($this->storeid,$cat_type,$category, $offset, $record,$search_key,$search_cate_id);
		echo $this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_deal_list");
		exit;
	}
	
	public function auction_list($store_url_title = "", $cat_type = "",$category = ""){
		$this->is_store_details = $this->is_auction = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
			$this->about_us_footer = $this->stores->get_about_us_footer_data($store->store_id);
		}
		
		$cat_type=base64_decode($cat_type);
		$this->color_id="";
		$this->category_id = "";
		$this->sub_cat="";
		$this->category_url = $category;
		$category_name="";
		$category_name_main = "";
		$this->cat_type = $cat_type;
		
		if($cat_type=="sub"){
		        $this->sub_cat= $category;
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
				$category_name_main = $category_deatils[0]->category_name;
		}elseif($cat_type=="sec"){
		        $this->sub_cat= "2";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=="third"){
		        $this->sub_cat= "3";
				$category_deatils = $this->stores->get_categoryname($category);
				$this->category_id = $category_deatils[0]->main_category_id;
				$category_name = $category_deatils[0]->category_name;
		}else if($cat_type=='main'){
			$category_deatils = $this->stores->get_categoryname($category);
			$this->category_id = $category_deatils[0]->category_id;
			$category_name = $category_deatils[0]->category_name;
		}
		
		$this->categeory_list_product = $this->stores->get_category_list_product_count($this->storeid);
		$this->categeory_list_deal = $this->stores->get_category_list_deal_count($this->storeid);
		$this->categeory_list_auction = $this->stores->get_category_list_auction_count($this->storeid);

		$this->search_key = $this->input->get('q');
		$this->search_cate_id = $this->input->get('d_id');
		
		$page="";
		$this->all_auction_count = $this->stores->get_auction_count($this->storeid,$cat_type,$category,$this->search_key,$this->search_cate_id);
		
		$this->pagination = new Pagination(array(
				'base_url'       => $this->storeurl.'/auction/c/'.base64_encode($cat_type).'/'.$category.'.html/page/'.$page,
				'uri_segment'    => 7,
				'total_items'    => $this->all_auction_count,
				'items_per_page' => 12,
				'style'          => 'digg',
				'auto_hide' => TRUE
		));
		$this->all_auction_list = $this->stores->get_auction_list($this->storeid,$cat_type,$category, $this->pagination->sql_offset, $this->pagination->items_per_page,$this->search_key,$this->search_cate_id);
		 $this->all_payment_list = $this->stores->payment_list();
		$this->category_name = $category_name;
		
		$title_category_name = "";
		if($this->search_cate_id!=''){
			if(count($this->category_list)>0){
				foreach ($this->category_list as $d) {
					if($d->category_id==$this->search_cate_id)
						$title_category_name = $d->category_name;
				}
			}
		}
		
		$title_display = "";
		if($title_category_name!=''){
			if($this->search_key!='')
				$title_display = ' / '.$title_category_name.' - '.$this->search_key;
			else
				$title_display = ' / '.$title_category_name;
		}else{
			if($this->search_key!='')
				$title_display = ' - '.$this->search_key;
		}
		
		$this->template->title = rtrim($this->Lang["AUCTION"].$title_display." | ".SITENAME);
		$this->title_display = rtrim($this->Lang["AUCTION"].$title_display);
		//$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
		$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_auction");
		
	}
	
	public function all_auction_list($store_url_title='',$offset='',$record='',$cat_type='',$category='',$search_key='',$search_cate_id=''){
		$this->is_store_details = $this->is_auction = 1;
		$this->storeurl = $store_url_title;
		
		$this->get_theme_name = common::get_theme($store_url_title);  
		if(count($this->get_theme_name)>0) {
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		$this->storeid = $this->stores->get_store_id($store_url_title);
		$storekey = $this->stores->get_store_key($store_url_title);
		$this->get_store_details = $this->stores->get_store_detailspage($storekey,$store_url_title);
		if(count($this->get_store_details) == 0){		
			common::message(-1, $this->Lang["NO_DATA_APP"]);
			url::redirect(PATH);
		}
		foreach($this->get_store_details as $store) {
			$this->merchant_personalised_details = $this->stores->get_merchant_personalised_details($store ->merchant_id,$store->store_id);
		}
		 $this->all_payment_list = $this->stores->payment_list();
		$this->all_auction_list = $this->stores->get_auction_list($this->storeid,$cat_type,$category, $offset, $record,$search_key,$search_cate_id);
		echo $this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/store_auction_list");
		exit;
	}
	
	/*
		Product details
		@Live
	*/
	public function details_product($storeurl="",$deal_key= "", $url_title = "",$type = "")
	{
	    
		
		$this->stores_home_page($storeurl);
		$this->is_details = 1;
		$this->store_url=$storeurl;
		$this->storeurl = $storeurl;
		$this->item_type = "Products";
		
		
		
		$this->products = new Products_Model();
		$this->product_deatils = $this->products->get_product_details($deal_key, $url_title,$type);
		$this->item_name = $this->product_deatils->current()->url_title;
		
		
		
		
		if(count($this->product_deatils)==0){
		        common::message(-1, $this->Lang["PAGE_NOT"]);
		        url::redirect(PATH);
		}
		$this->home = new Home_Model();
		$this->about_us_footer = $this->home->get_about_us_footer($storeurl);
		$this->stores = new Stores_Model();
		$this->admin_details = $this->stores->get_admin_details();
		
		
		//var_dump($this->product_deatils->current());
		//exit;
		
		$this->product = null;
		
		foreach($this->product_deatils as $Deal){
						$this->product = $Deal;
                        $this->avg_rating =$this->products->get_product_rating($Deal->deal_id);
                        $this->sum_rating =$this->products->get_product_rating_sum($Deal->deal_id);
                        $this->delivery_details =$this->products->get_product_delivery($Deal->deal_id);
                        $this->all_products_list = $this->products->get_related_category_products_list($Deal->deal_id, $Deal->sec_category_id);
                        $this->products_list_name = $this->Lang['REL_PRODUCT'];
                        if(count($this->all_products_list) < 3){        
                        $this->all_products_list = $this->products->get_hot_all_products_view($Deal->deal_id);
                         $this->products_list_name = $this->Lang['HOT_PRODUCT'];
                                 if(count($this->all_products_list) < 3){ 
                                        $this->all_products_list = $this->products->get_related_category_products_list($Deal->deal_id, $Deal->sec_category_id);
                                         $this->products_list_name = $this->Lang['REL_PRODUCT'];
                                  }
                        }
                        $userflat_deatils = $this->products->get_userflat_amount($Deal->merchant_id);
                        $this->userflat_amount = $userflat_deatils->flat_amount;
                        $this->color_deatils = $this->products->get_color_data($Deal->deal_id);
                        $this->size_deatils = $this->products->get_size_data($Deal->deal_id);
                        $this->product_size = $this->products->get_product_one_size($Deal->deal_id);
                        $this->product_color = $this->products->get_product_color($Deal ->deal_id);
                        $this->merchant_cms = $this->products->get_merchant_cms($Deal ->merchant_id);
						
						
						$this->deal_value = $Deal->deal_value;
						$this->deal_price = $Deal->deal_price;
						$this->deal_description = $Deal->deal_description;
						
			$this->template->title = $Deal->deal_title."/".$Deal->category_name."/".CURRENCY_SYMBOL.$Deal->deal_value." | ".SITENAME;
			if($Deal->meta_description){
				$this->template->description = $Deal->meta_description;
			}
			if($Deal->meta_keywords){
				$this->template->keywords = $Deal->meta_keywords;
			}
			if($Deal->deal_key){
				$this->template->metaimage = PATH.'images/products/1000_800/'.$Deal->deal_key.'_1.png';
			}
			
			$this->theme_name = $this->products->get_theme_name($Deal->shop_id);
			$this->footer_merchant_details = $this->products->get_merchant_details($Deal->merchant_id);
		}
		$this->storeid = $this->products->get_store_id($storeurl);
		$this->get_theme_name = common::get_theme($storeurl);
		if(count($this->get_theme_name)>0) { 
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		
		
		
		if($this->theme_name) { 
			
			//$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
			$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
			
			
			//var_dump("themes/".THEME_NAME."/".$this->theme_name."/products/details_product");
			
			$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/products/details_product");
		} else {
			
			$this->template->content = new View("themes/".THEME_NAME."/products/details_product");
		}
	}
	
	/** PRODUCTS ITEM ADDED  **/

	public function cart_items()
	{
		
			
			$this->payment_products = new Payment_Product_Model();
            $product_cart_id = $this->input->get('deal_id');
			
            $this->product_details=$this->payment_products->get_product_details_cart($product_cart_id);
			
			if(count($this->product_details) != 1){
				echo -1;
				exit;
			}
            $store_url_title=$this->product_details->current()->store_url_title;
            $deal_key=$this->product_details->current()->deal_key;
            $url_title=$this->product_details->current()->url_title;
            $count_value = $this->session->get('count')+1;
                    foreach($_SESSION as $key=>$value)
                    {
                               if(($key=='product_cart_id'.$product_cart_id)){
				     			 /*  common::message(1, $this->Lang['ALDY_EX']);*/
								/* url::redirect( PATH .$store_url_title. '/product/' . $deal_key . '/' . $url_title . '.html');*/
								echo -2;
								exit;  
					          }
                    }
	        $this->session->set('count',$count_value);
	        $this->session->set('product_cart_id'.$product_cart_id,$product_cart_id);
	        /*common::message(1, $this->Lang['CART_PRODUCT_SUCCESS']);*/
	        /*url::redirect( PATH .$store_url_title. '/product/' . $deal_key . '/' . $url_title . '.html');*/
			
			$this->response = "Product added successfully.";
			echo $count_value;
			exit;
	}
	
	
	function cart_product_remove()
	{
		
				
				$val = 1; 
	        	/*$deal_id = substr($product_cart_id,15);*/
				$deal_id = $this->input->get('deal_id');
				$product_cart_id = "product_cart_id".$deal_id;
			    
                foreach($_SESSION as $key=>$value)
                {
                        if ((is_string($value)) && ($key == 'product_cart_id' . $deal_id)) {
                                $val = 2;
                                /*$deal_id = substr($product_cart_id,15);*/
                                $count_value = $this->session->get('count')-1;
                                $this->session->delete($product_cart_id);
                                $this->session->delete('product_size_qty'.$deal_id);
                                $this->session->delete('product_quantity_qty'.$deal_id);
                                $this->session->delete('product_color_qty'.$deal_id);
                                $this->session->set('count',$count_value);
                                /*common::message(1, $this->Lang['CART_RMV']);
                              
                                url::redirect(PATH);*/
                        } 
                }
                if($val == 1){
                        /*common::message(-1, $this->Lang['NO_DATA_F']);
                        url::redirect(PATH);*/
						echo -1;
						exit;
                }
				
				if($val = 2){
					echo $count_value;
					exit;
				}
					
	}
	
	
	
	
	
	
	
	
}
