<?php 

class TermsAndConditions_Controller extends Controller{
	
	function index(){
		$v = new View('termsandconditions');
		$v->render(true);
		exit;
	}
}
 
?>