<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style type="text/css">
<?php include Kohana::find_file('views', 'kohana_errors', FALSE, 'css') ?>
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Application Error</title>
</head>
<body>
<div id="framework_error" style="width:42em;margin:20px auto; padding-top:20px; text-align: center;">
    <img src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/logo.png" />
<h3>The platform just encountered an application error</h3>
<p>The error has been captured and logged appropriately.</p>
<p>Please, try again later.</p>
<p style="font-size:89%;">If this error persists, contact 
        <a href="mailto:<?php echo CONTACT_EMAIL;?>"><?php echo CONTACT_EMAIL;?></a></p>
<h3><a style="color:white;" href="javascript:window.history.back();">click here to go back</a></h3>
</div>
</body>
</html>