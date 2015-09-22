<?php
require_once 'php-wsdl-2.3/class.phpwsdl.php';
try{
    PhpWsdl::RunQuickMode ();
}
catch(Exception $e){
    //var_dump($e);
}
?>
