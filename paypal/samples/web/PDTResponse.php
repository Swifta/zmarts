<?php
/**
* DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
*/

require_once "utility.php";
require_once "constants.php";

if(!array_key_exists("tx", $_GET)) {
	Utils::PPError("PDT received an HTTP GET request without a transaction ID.", 0);
	exit;
}

$url = "https://www.".DEFAULT_ENV.".paypal.com/cgi-bin/webscr";
$postFields =	"cmd=".urlencode("_notify-synch").
				"&tx=".urlencode(htmlspecialchars($_GET["tx"])).
				"&at=".urlencode(DEFAULT_IDENTITY_TOKEN);
$ppResponseAr = Utils::PPHttpPost($url, $postFields, true);

if(!$ppResponseAr["status"]) {
	Utils::PPError($ppResponseAr["error_msg"], $ppResponseAr["error_no"]);
	exit;
}
$httpParsedResponseAr = $ppResponseAr["httpParsedResponseAr"];

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>PDT Response</title>
    <link href="sdk.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table cellSpacing="0" cellPadding="0" width="600" align="center" border="0">
<tr>
<td>
<TABLE width="600" align="center">
<TBODY>
	<TR>
	<TD align="center" colSpan="2"><FONT face="Verdana" color="black" size="2"><B>Payment Success Landing Page</B>
	<table cellSpacing="6" cellPadding="2" border="0">
		<TBODY>
		   <tr>
			<td align="left"><FONT face="Verdana" color="black" size="2">This page is a placeholder. Once your buyers complete a payment at PayPal, PayPal redirects
															your buyers back to a URL you specify.</FONT>
			</td>
		   </tr>
		   <tr>
			<td align="left"><FONT face="Verdana" color="black" size="2">This URL where your buyers are sent is declared as a variable in the buy now button. PayPal includes a
																subset of transaction information in the GET statement:</FONT>
			</td>
		    </tr>
		    <tr>
			<td align="center"><FONT face="Verdana" color="black" size="2"><b>Variables returned from HTTP GET</b></FONT></td>
		    </tr>

		    <table cellpadding="2" cellspacing="2" border="1">

		    <tr>
			<td align="left">Transaction ID:</td>
<!--			<td align="left"><?php //echo htmlspecialchars($_GET["tx"]); ?></td>-->
                        <td align="left"><?php echo urldecode(htmlspecialchars($_GET["tx"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		    <tr>
			<td align="left">Currency Code: </td>
<!--			<td align="left"><?php //echo urldecode(htmlspecialchars($_GET['cc'])); ?></td>-->
                          <td align="left"><?php echo urldecode(htmlspecialchars($_GET["cc"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		    <tr>
			<td align="left">Status:</td>
<!--			<td align="left"><?php //echo urldecode(htmlspecialchars($_GET["st"])) ?></td>-->
                        <td align="left"><?php echo urldecode(htmlspecialchars($_GET["st"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		    <tr>
			<td align="left">Amount: </td>
<!--			<td align="left"><?php //echo urldecode(htmlspecialchars($_GET["amt"])) ?></td>-->
                         <td align="left"><?php echo urldecode(htmlspecialchars($_GET["amt"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		    <tr>
			<td align="left">Custom Message: </td>
<!--			<td align="left"><?php //echo urldecode(htmlspecialchars($_GET["cm"])) ?></td>-->
                         <td align="left"><?php echo urldecode(htmlspecialchars($_GET["cm"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		    <tr>
			<td align="left">Signature: </td>
<!--			<td align="left"><?php //echo urldecode(htmlspecialchars($_GET["sig"])) ?></td>-->
                        <td align="left"><?php echo urldecode(htmlspecialchars($_GET["sig"] ,ENT_QUOTES,"UTF-8")); ?></td>
		    </tr>
		  </table>

		<tr>
			<td align="left"><FONT face="Verdana" color="black" size="2">PayPal also includes
					detailed transactional information through two different methods, IPN and PDT.</FONT></td>
		</tr>
	</TR>
		<tr>
			<td align="center"><B><SPAN style="FONT-SIZE: 10pt; COLOR: black; FONT-FAMILY: Verdana">IPN</SPAN></B></td>
		</tr>
			</tr>
			<tr>
				<td align="left"><FONT face="Verdana" color="black" size="2">IPN is an asynchronous
						notification method through HTTP. In this process PayPal sends a form post back
						to you asynchronously showing the status of this transaction. Under most
						circumstances the payment details are sent to your server within a few minutes.<BR>
					</SPAN><A id=IPNLink href="paypal-ipn.log" >Click here to view
						IPN logs for this transaction</A></FONT>
				</td>
			</tr>
			</TR>
			<tr>
				<td align="center"><FONT face="Verdana" color="black" size="2"><b>PDT</b></FONT></td>
			</tr>
			<tr>
				<td align="left"><FONT face="Verdana" color="black" size="2">PDT is a synchronous
						method through HTTP. In this process, the GET statement from PayPal includes a
						transaction token. This token can be passed back to PayPal to get further
						details on the transaction. A listing of PDT variables from this transaction
						are displayed below.</FONT>
				</td>
			</tr>
			<tr>
				<td align="left"><FONT face="Verdana" color="black" size="2">PayPal recommends using
						IPN over using the transaction token when fulfilling orders or reconciling your
						payments because PDT is triggered only when a buyer returns back to your
						website. If the buyer closes his browser before returning, PDT will not
						complete.</FONT></td>
			</tr>
		</table>
		</FONT></TD></TR>
		<TR>
			<TD align="center"><FONT face="Verdana" color="black" size="2"><!---!--><B>Variables returned from HTTP Post </B></FONT>
			</TD>
		</TR>
		<tr>
		<CENTER>
				<table  cellpadding="2" cellspacing="2" border="1">
				    <tr>
					<td align="left">SUCCESS</td>
				    </tr>
				    <tr>
					<td align="left">payment_date:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payment_date"]) ?></td>-->
                                        <td align="left"><?php echo  htmlspecialchars(urldecode($httpParsedResponseAr["payment_date"]) ,ENT_QUOTES,"UTF-8");  ?></td>
                                       
				    </tr>
				    <tr>
					<td align="left">txn_type:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["txn_type"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["txn_type"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">last_name:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["last_name"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["last_name"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">residence_country:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["residence_country"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["residence_country"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">item_name:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["item_name"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["item_name"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payment_gross :</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payment_gross"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payment_gross"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">mc_currency :</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["mc_currency"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["mc_currency"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">business:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["business"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["business"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payment_type:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payment_type"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payment_type"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payer_status:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payer_status"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payer_status"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">tax:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["tax"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["tax"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payer_email:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payer_email"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payer_email"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">txn_id:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["txn_id"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["txn_id"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">quantity:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["quantity"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["quantity"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">receiver_email:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["receiver_email"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["receiver_email"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">first_name:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["first_name"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["first_name"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payer_id:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payer_id"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payer_id"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">receiver_id:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["receiver_id"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["receiver_id"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">item_number:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["item_number"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["item_number"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">payment_status:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["payment_status"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["payment_status"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">shipping:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["shipping"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["shipping"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">mc_gross:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["mc_gross"]) ?></td>-->
                                         <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["mc_gross"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">custom:</td>
					<td align="left"><?php //echo urldecode($httpParsedResponseAr["custom"]) ?></td>
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["custom"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				    <tr>
					<td align="left">charset:</td>
<!--					<td align="left"><?php //echo urldecode($httpParsedResponseAr["charset"]) ?></td>-->
                                        <td align="left"><?php echo htmlspecialchars(urldecode($httpParsedResponseAr["charset"]) ,ENT_QUOTES,"UTF-8");  ?></td>
				    </tr>
				</table>
		</CENTER>
		</TBODY></TABLE>
	</TD></TR></TBODY></TABLE><font face="Verdana" color="black" size="2"><A href="index.html">Home</A></font>
	</body>
</html>