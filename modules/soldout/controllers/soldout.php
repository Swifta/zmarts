<?php defined('SYSPATH') OR die('No direct access allowed.');
class Soldout_Controller extends Layout_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();
		/*if(LANGUAGE == "french" ){
			$this->template->style .= html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/french_style.css',PATH.'themes/'.THEME_NAME.'/css/fr_multi_style.css')); 
		}else if(LANGUAGE == "spanish"){
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
		$this->is_soldout = 1;
		$this->sold = new Soldout_Model();
		if(!$this->past_deal_setting){
		        url::redirect(PATH);
		}
	}
	
	/* ALL SOLDOUT */
	public function all_soldout($cityid="")
	{
		$cityid = $this->session->get('CityID');
		
		$this->get_sold_deals = $this->sold->get_solddeals_list($cityid);
		$this->get_sold_products = $this->sold->get_soldproducts_list($cityid);
		$this->get_sold_auction = $this->sold->get_soldauction_list($cityid);
		
		//$this->get_city = $this->home->get_all_city_list();
		//$this->products_details = $this->home->products_details($cityid);		
		//$this->deals_details = $this->home->deals_details($cityid);
		$this->template->title = $this->Lang['SOLD_OUT2']." | ".SITENAME;
		$this->template->content = new View("themes/".THEME_NAME."/soldout/all_soldout");
	}
	
	public function store_all_soldout($storeurl=''){
		$this->storeurl = $storeurl;
		$store_details = $this->sold->get_store_details($storeurl);
		if(count($store_details)==0){
			common::message(-1,"Error: No Data Found");
			url::redirect(PATH);
		}else{
			foreach($store_details as $store){
				$this->storeid = $store->store_id;
				$this->theme_name = $this->sold->get_theme_name($this->storeid);
				$this->merchant_personalised_details = $this->sold->get_merchant_personalised_details($store->merchant_id,$this->storeid);
				$this->merchant_cms = $this->sold->get_merchant_cms($store->merchant_id);
				$this->store_name = $store->store_name;
				$this->footer_merchant_details = $this->sold->get_merchant_details($store->merchant_id);
			}
		}
		$cityid = $this->session->get('CityID');
		$this->get_sold_deals = $this->sold->get_solddeals_list($cityid,$this->storeid);
		$this->get_sold_products = $this->sold->get_soldproducts_list($cityid,$this->storeid);
		$this->get_sold_auction = $this->sold->get_soldauction_list($cityid,$this->storeid);
		 
		$this->template->title = $this->Lang['SOLD_OUT2']." | ".$this->store_name;
		$this->about_us_footer = $this->sold->get_about_us_footer($storeurl);
		
		$this->get_theme_name = common::get_theme($storeurl);
		if(count($this->get_theme_name)>0) { 
			$this->sector = $this->get_theme_name->current()->sector_name;
		} else {
			$this->sector ="";
		}
		
		if($this->theme_name) { 
                        if($this->theme_name == "fashion9"){
                            //echo "was here"; die;
                            $style_sheets = array();
                            $style_sheets[0] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css';
                            $style_sheets[1] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css';
                            $style_sheets[2] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/bootstrap/css/bootstrap.min.css';
                            $style_sheets[3] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/bootstrap/css/bootstrap-responsive.min.css';
                            $style_sheets[4] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/themes/css/bootstrappage.css';
                            $style_sheets[5] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/themes/css/flexslider.css';
                            $style_sheets[6] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/themes/css/main.css';
                            $this->template->style = html::stylesheet($style_sheets);
                            $java_scripts = array();
                            $java_scripts[0] = PATH.'bootstrap/themes/js/jquery-1.7.2.min.js';
                            $java_scripts[1] = PATH.'themes/'.THEME_NAME.'/js/public.js'; //this is some parent js 
                            $java_scripts[2] = PATH.'bootstrap/js/bootstrap.min.js';
                            $java_scripts[3] = PATH.'bootstrap/themes/js/jquery.scrolltotop.js';
                            $java_scripts[4] = PATH.'js/timer/kk_countdown_1_2_jquery_min.js';
                            $java_scripts[5] = PATH.'js/timer/kk_countdown_1_2_jquery_min_detail.js';
                            $java_scripts[6] = PATH.'bootstrap/themes/js/superfish.js';
                            $this->template->javascript = html::script($java_scripts);
                        }
                        else if($this->theme_name == "manufacturing1"){
                            $style_sheets = array();
                            $style_sheets[0] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/alt_style.css';
                            $style_sheets[1] = PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css';
                            $this->template->style = html::stylesheet($style_sheets);
                        }
                        else{
                            $this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
                        }
			//$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/multi_style.css'));
			$this->template->content = new View("themes/".THEME_NAME."/".$this->theme_name."/all_soldout");
		}
                else {
			$this->template->content = new View("themes/".THEME_NAME."/soldout/all_soldout");
		}
	}
}
