<?php defined('SYSPATH') OR die('No direct access allowed.');
class Agriculture2_Controller extends Leo_Controller
{
	const ALLOW_PRODUCTION = FALSE;
	public function __construct()
	{
		parent::__construct();

		$url = $_SERVER['SERVER_NAME'].dirname(__FILE__);
		$url = str_replace('\\', '/', $url);
		$array = end(explode('/modules/',$url)); 
		$array = explode('/controllers',$array); 

		$this->theme_name = "sasa"; 
		
		
		
		
		if(isset($_SESSION['select_lang'])){
			if($_SESSION['select_lang']==2){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/ha_style.css',PATH.'themes/'.THEME_NAME.'/css/ha_multi_style.css'));
			}else if($_SESSION['select_lang']==3){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/ig_style.css',PATH.'themes/'.THEME_NAME.'/css/ig_multi_style.css'));
			}else if($_SESSION['select_lang']==4){
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/yo_style.css',PATH.'themes/'.THEME_NAME.'/css/yo_multi_style.css'));
			}else{
				$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/cs/style.css',PATH.'themes/'.THEME_NAME.'/css/multi_style.css'));
			}
		}else{
			$this->template->style = html::stylesheet(array(PATH.'themes/'.THEME_NAME.'/css/'.$this->theme_name.'/style.css',));
			$this->template->javascript = html::script(array());
			/*
			$this->template->javascript = html::script(array( PATH.'themes/'.THEME_NAME.'/js/'.$this->theme_name.'/jquery1.min.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/megamenu.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/jquery-ui.min.js', PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/css3-mediaqueries.js',PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/fwslider.js',PATH.'themes/'.THEME_NAME.'/'.$this->theme_name.'/js/jquery.easydropdown.js',PATH.'themes/'.THEME_NAME.'/toastr/jquery.jnotify.js', ));
			*/
			
		}
		
		$this->stores = new Agriculture2_Model();

		$this->is_store = 1;
		if(!$this->store_setting){
		        url::redirect(PATH);
		}
	}
}
