<?php 

class Help_Controller extends Controller{
	
	function index(){
		$v = new View('disclaimer');
		$v->render(true);
		exit;
	}
}
 
?>