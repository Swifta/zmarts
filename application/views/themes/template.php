<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta property="og:image"  content="<?php echo $this->template->metaimage; ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title><?php echo $this->template->title; ?></title>
<meta name="description" content="<?php echo $this->template->description; ?>" />
<meta name="keywords" content="<?php echo $this->template->keywords; ?>" />
<link rel="shortcut icon" href="<?php echo PATH . 'resize.php'; ?>?src=<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/images/favicon.png&w=<?php echo FAVICON_WIDTH; ?>&h=<?php echo FAVICON_HEIGHT; ?>" type="image/x-icon" />
<?php
        if ($this->city_id) {
            foreach ($this->all_city_list as $CX) {
                if ($this->city_id == $CX->city_id) {
                    ?>
<link rel="alternate" type="application/atom+xml" title="<?php echo ucfirst($CX->city_name); ?> deals" href="<?php echo PATH . 'deals/rss/' . $this->city_id . '/' . $CX->city_url; ?>"  />
<?php
                }
            }
        }
        ?>
<?php 
        echo $this->template->style;
        echo $this->template->javascript;
?>


 
            

</head>

</html>
