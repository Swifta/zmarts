<?php

/*

Copyright (c) 2009 Anant Garg (anantgarg.com | inscripts.com)

This script may be used for non-commercial purposes only. For any
commercial purposes, please contact the author at
anant.garg@inscripts.com

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

*/
/*
define ('DBPATH','192.168.1.243');
define ('DBUSER','svnuser');
define ('DBPASS','pXc9nbmrnCnpXhza');
define ('DBNAME','Emarketplace');

*/
define ('DBPATH','localhost');
define ('DBUSER','root');
define ('DBPASS','mysql');
define ('DBNAME','chatapp');

?>

<?php

$username = $_COOKIE['username'];
/* if($username=='') {
$username = $_SESSION['chatusername']; // remove
}
*/
$_SESSION['username'] = $username;

$userid = $_COOKIE['uid'];
if($userid=='') {
$userid = $_SESSION['chatuserid']; // change to common user id fr cc and user and seller
}
$_SESSION['uid'] = $userid;

$chat_type = $_COOKIE['chat_type'];
if($chat_type=='') {
$chat_type = $_SESSION['chat_type'];
}

$_SESSION['chattype'] = $chat_type;

$sel_userid = $_COOKIE['sel_id'];
if($sel_userid=='') {
$sel_userid = $_SESSION['chatuserid'];
}
$_SESSION['sel_id'] = $sel_userid;

global $dbh;
$dbh = mysql_connect(DBPATH,DBUSER,DBPASS);
mysql_selectdb(DBNAME,$dbh);

if ($_GET['action'] == "chatheartbeat") { chatHeartbeat(); }
if ($_GET['action'] == "sendchat") { sendChat(); }
if ($_GET['action'] == "closechat") { closeChat(); }
if ($_GET['action'] == "startchatsession") { startChatSession(); }

if (!isset($_SESSION['chatHistory'])) {
	$_SESSION['chatHistory'] = array();
}

if (!isset($_SESSION['openChatBoxes'])) {
	$_SESSION['openChatBoxes'] = array();
}

function chatHeartbeat() {
	$sql = "select *,sellerid from chat where (chat.to1 = '".mysql_real_escape_string($_SESSION['username'])."' AND recd = 0) order by id ASC";
	$query = mysql_query($sql);
	if($_SESSION['sel_id']) {

		$Sell_ID = $_SESSION['sel_id'];
	}else {

		$Sell_ID = $_GET['sel_id'];
	}
	if($_GET['cus_id']=="undefined") {

		$Cust_ID = 1;
	}else {

		$Cust_ID = $_GET['cus_id'];
	}
	$items = '';

	$chatBoxes = array();

	while ($chat = mysql_fetch_array($query)) {
		if (!isset($_SESSION['openChatBoxes'][$chat['from']]) && isset($_SESSION['chatHistory'][$chat['from']])) {
			$items = $_SESSION['chatHistory'][$chat['from']];
		}

		$chat['message'] = sanitize($chat['message']);

		$items .= <<<EOD
					   {
			"s": "0",
			"f": "{$chat['from1']}",
			"m": "{$chat['message']}",
			"t": "{$chat['to1']}",
			"ct": "{$chat['chat_type']}",
			"cus_id": "{$chat['userid']}",
			"sel": "{$chat['sellerid']}"
			

	   },
EOD;

	if (!isset($_SESSION['chatHistory'][$chat['from']])) {
		$_SESSION['chatHistory'][$chat['from']] = '';
	}

	$_SESSION['chatHistory'][$chat['from']] .= <<<EOD
						   {
			"s": "0",
			"f": "{$chat['from1']}",
			"m": "{$chat['message']}",
			"t": "{$chat['to1']}",
			"ct": "{$chat['chat_type']}",
			"cus_id": "{$chat['userid']}",
			"sel": "{$chat['sellerid']}"
			

	   },
EOD;

		unset($_SESSION['tsChatBoxes'][$chat['from']]);
		$_SESSION['openChatBoxes'][$chat['from']] = $chat['sent'];
	}

	$sql = "update chat set recd = 1 , sellerid ='".mysql_real_escape_string($Sell_ID)."',userid = '".mysql_real_escape_string($_SESSION['uid'])."'where chat.to1 = '".mysql_real_escape_string($_SESSION['username'])."' and recd = 0";

	$query = mysql_query($sql);

	if ($items != '') {
		$items = substr($items, 0, -1);
	}
header('Content-type: application/json');
?>
{
		"items": [
			<?php echo $items;?>
        ]
}

<?php
			exit(0);
}

function chatBoxSession($chatbox) {

	$items = '';

	if (isset($_SESSION['chatHistory'][$chatbox])) {
		$items = $_SESSION['chatHistory'][$chatbox];
	}

	return $items;
}

function startChatSession() {

	$items = '';
	if (!empty($_SESSION['openChatBoxes'])) {
		foreach ($_SESSION['openChatBoxes'] as $chatbox => $void) {
			$items .= chatBoxSession($chatbox);
		}
	}


	if ($items != '') {
		$items = substr($items, 0, -1);
	}

header('Content-type: application/json');
?>
{

		"username": "<?php echo $_SESSION['username'];?>",
		
		"items": [
			<?php echo $items;?>
        ]
}

<?php

	exit(0);
}

function sendChat() {

	//$from = $_SESSION['username'];
	$from = $_POST['customer_name'];
	$to = $_POST['to'];
	$message = $_POST['message'];
    $buyerprofile = $_SESSION['image'];
    $UserID = $_SESSION['uid']; //  replace  with common $_SESSION['UserID']
    //$UserID = $_SESSION['chatuserid'];
    $Sell_ID = $_POST['sellid'];
    $_SESSION['sel_id'] = $Sell_ID;
    $chat_type = $_POST['chattype'];
	if($chat_type=='' || $chat_type =='undefined') {
		$chat_type = $_SESSION['chattype'];
	}
      // $sellerprofile = $_SESSION['sellerimage'];

	$_SESSION['openChatBoxes'][$_POST['to']] = date('Y-m-d H:i:s', time());

	$messagesan = sanitize($message);

	if (!isset($_SESSION['chatHistory'][$_POST['to']])) {
		$_SESSION['chatHistory'][$_POST['to']] = '';
	}

	$_SESSION['chatHistory'][$_POST['to']] .= <<<EOD
					   {
			"s": "1",
			"f": "{$to}",
			"m": "{$messagesan}"

	   },
EOD;


	unset($_SESSION['tsChatBoxes'][$_POST['to']]);
	$sql = "insert into chat (chat.from1,chat.to1,message,sent,chat.userid,chat.sellerid,chat.chat_type) values ('".mysql_real_escape_string($from)."', '".mysql_real_escape_string($to)."','".mysql_real_escape_string($message)."',NOW(),'".$UserID."','".$Sell_ID."','".$chat_type."')";
	$query = mysql_query($sql);
	
	$sql1 = "update chat_users set last_update = NOW() where chat_name = '".mysql_real_escape_string($from)."'";

	$query1 = mysql_query($sql1);

	echo "1";
	exit(0);
}

function closeChat() {

	unset($_SESSION['openChatBoxes'][$_POST['chatbox']]);

	echo "1";
	exit(0);
}

function sanitize($text) {
	$text = htmlspecialchars($text, ENT_QUOTES);
	$text = str_replace("\n\r","\n",$text);
	$text = str_replace("\r\n","\n",$text);
	$text = str_replace("\n","<br>",$text);
	return $text;
}
 ?>
