<?php 

session_start();

echo "<title>Twitter oAuth Application by 1stwebdesigner | Login to your Twitter Account</title>";

include APPPATH."/vendor/twitter/EpiCurl.php";
include APPPATH."/vendor/twitter/EpiOAuth.php";
include APPPATH."/vendor/twitter/EpiTwitter.php";
include APPPATH."/vendor/twitter/secret.php";
$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);
$oauth_tkn = strip_tags(addslashes($_GET['oauth_tkn']));
        if($oauth_tkn == '')
  	  { 
	  	$url = $twitterObj->getAuthorizationUrl();
  		echo "<div style='width:200px;margin-top:200px;margin-left:auto;margin-right:auto'>";
                echo "<a href='$url'>Sign In with Twitter</a>";
                echo "</div>";
          } 
	else
	  {
		//$twitterObj->setToken($_GET['oauth_tkn']);
                $twitterObj->setToken(strip_tags(addslashes($_GET['oauth_tkn'])));
		$tkn = $twitterObj->getAccessToken();
		$twitterObj->setToken($tkn->oauth_tkn, $tkn->oauth_tkn_secret);	  	
		$_SESSION['ot'] = $tkn->oauth_tkn;
		$_SESSION['ots'] = $tkn->oauth_tkn_secret;
		$twitterInfo= $twitterObj->get_accountVerify_credentials();
		$twitterInfo->response;
		
		$usrname = $twitterInfo->screen_name;
		$profilepic = $twitterInfo->profile_image_url;

		include 'update.php';
        
     } 

if(isset($_POST['submit']))
	  {
	  	$msg = htmlentities($_REQUEST['tweet'],  ENT_QUOTES,  "utf-8");
		
		$twitterObj->setToken($_SESSION['ot'], $_SESSION['ots']);
		$update_status = $twitterObj->post_statusesUpdate(array('status' => $msg));
		$temp = $update_status->response;
		
		echo "<div align='center'>Updated your Timeline Successfully .</div>";
		
	  }
	  echo "<div style='margin-top:100px;'>";
	  echo "<p>";
	  echo "<center>";
	  echo "<a href='http://www.1stwebdesigner.com/tutorials/how-to-update-twitter-using-php-and-twitter-api/'>Back to Tutorial</a>";
	  echo "</center>";
	  echo "</p>";
	  echo "</div>";
?> 
