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


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73394226-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>
<?php if(isset($this->sector)) {
				if($this->theme_name) { 
					$sector =$this->theme_name; 
				} else{
				    $sector="default";
				 }?>

<!--sector header start-->
<?php if($sector =="default" || $sector =="fashion9" ) { 
 if($sector =="default" ) { 
				     echo new View("themes/" . THEME_NAME . "/header");
				}else{
					
				    echo new View("themes/" . THEME_NAME ."/".$sector."/header"); 
				} ?>
<div class="mt10" style="display:none;" id="citylist">
  <ul>
    <?php
                    $a = '';
                    foreach ($this->all_city_list as $city) {
                        ?>
    <li <?php if ($a != $city->country_name) { ?>  style="clear:both; color:#E14948;float:left;" <?php } ?> >
      <?php
                            if ($a != $city->country_name) {
                                $a = $city->country_name;
                                echo ucfirst($city->country_name);
                            } else {
                                ?>
      <p>&nbsp;</p>
      <?php } ?>
      <a  onclick="return changecity('<?php echo $city->city_id; ?>', '<?php echo $city->city_url; ?>');" ><?php echo ucfirst($city->city_name); ?> </a></li>
    <?php } ?>
  </ul>
</div >
<?php }else{
	
	 echo new View("themes/" . THEME_NAME ."/".$sector."/header");
	
}?>

<!--Sector header End-->
<?php } else {  ?>

<!-- header start--> 
<?php echo new View("themes/" . THEME_NAME . "/header"); ?> 

<!--header End-->
<?php }
	 ?>

<!--
            <span id="success_message"></span>
<?php if (!empty($this->response)) { ?>
                <div class="msg_show"  id="messagedisplay">            
                    <div class="session_wrap">
                        <div class="session_container">
                            <div class="success_session">
                                <p><span ><?php echo $this->response; ?>.</span></p>
                                <div class="close_session_2">
                                    <a class="closestatus cur" title="Close"  onclick="return closeerr();" >&nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
<?php if (!empty($this->error_response)) { ?>
                <div class="msg_show" id="error_messagedisplay">  
                    <div class="session_wrap">
                        <div class="session_container">
                            <div class="failure_session">
                                <p ><span><?php echo $this->Lang['ERROR']; ?>!&nbsp;</span> <?php echo $this->error_response; ?></p>
                                <div class="close_session">
                                    <a  title="<?php echo $this->Lang['CLOSE']; ?>" title="Close" onclick="return closeerr('err');" > &nbsp;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            -->



<!--container start--> 
<?php echo $this->template->content;?> 
<!--container_end-->



<?php if(isset($this->sector)) {
				if($this->theme_name) { 
					$sector =$this->theme_name; 
				} else{
				    $sector="default";
				    }?>

<!--sector header start-->
<?php if($sector =="default") { 
				     echo new View("themes/" . THEME_NAME . "/footer");
				}else{
				    echo new View("themes/" . THEME_NAME ."/".$sector."/footer"); 
				} ?>

<!--Sector header End-->
<?php } else {  ?>
<!--footer start--> 
<?php echo new View("themes/" . THEME_NAME . "/footer"); ?> 
<!--footer end-->
<?php } ?>




<script src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/toastr/jquery.jnotify.js"></script> 
<script type="text/javascript">
<?php
 
        if($this->response != "" || $this->error_response != ""){
            $success_alert = false;
            $msg_to_alert = $this->error_response;
			
            if($this->response != ""){
                $success_alert = true;
                $msg_to_alert = $this->response;
				
				
            }
			
			
		
    ?>

	

	
	
    $(document).ready(function() {
		
		
        var jNotify = $.JNotify({

          // addional CSS class
          'className':'JNotify-success', 

          // warning, info, success or error
          'theme':'error', 

          // background color
          'backgroundColor':'#FFFFFF', 

          // border color
          'borderColor':'#f5791f',

          // border radius
          'borderRadius':'3px', 

          // left, center or right
          'position':'center',

          // max width
          'maxWidth':'390px',

          // top position
          'top':140, 

          // z-index
          'zIndex': 888,


          // height
          'height':null, 

          // padding
          'padding':'8px',

          // custom message
          'message':'<?php echo $msg_to_alert; ?>',

          // font size
          'fontSize':'19px', 

          // font color
          'fontColor': '#f5791f', 

          // auto close
          'autoClose':true,

          // shows a close button
          'showCloseButton':false,

          // show / close duration
          'showDuration':25000,  
          'closeDuration':1000

        });
        <?php if($success_alert){ ?>
		
        jNotify.setTheme('success');
		
        <?php } ?>
    });
    <?php
	
	$this->response = null;
	$this->error_response = null;
	
        }
    ?>
				
			</script> 
<script type="text/javascript">
$(window).load(function() {
					$(".wloader_img").fadeOut("slow");
					$(".wloader_img").css("visibility:visible");
				});
				
</script>

<script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/chat/chat.js"></script>
	<link type="text/css" rel="stylesheet" media="all" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/chat/chat.css" />

				<?php echo new View("themes/" . THEME_NAME . '/chat/online_chat'); ?>
				
				<div class="chatpopup" style="display:none;">
					<?php echo new View("themes/" . THEME_NAME . '/chat/online_chat_popup'); ?>
				</div>
				<div class="offlinechatpopup" style="display:none;">
					<?php echo new View("themes/" . THEME_NAME . '/chat/offline_chat_popup'); ?>
				</div>
				
            <script type="text/javascript">
				$(document).ready(function () {
					<?php if(isset($_COOKIE["username"])) {  ?>
						chatHeartbeat();
					<?php } ?>
				});
            </script>


</body>
</html>
