<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
$this->session = Session::instance();
$this->UserName = $this->session->get("UserName");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<table width="800" cellpadding="0" align="center" cellspacing="0" border="0" bgcolor="#ffffff">
    <tbody>
<tr height="63">
  <td colspan="8" valign="middle" align="left"><div style="margin:0 auto;width:636px;"> <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>"  /> </a> </div></td>
</tr>
<tr  style="text-align:left;  padding:20px 15px 15px 15px; ;margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8" style="padding:30px 15px 15px 15px;" ><strong style="font-size: 13px; font-weight:bold; font-family: Arial;color:#666;">Dear <?php echo trim($this->UserName);?>,</strong></td>
</tr>
  <td>&nbsp;</td>
</tr>

</tr>
  <td colspan="8" width="100%" align="left">Find below your completed transaction details:</td>
</tr>
</tr>
  <td colspan="8" width="100%" align="left">Transaction ID: <?php echo $id; ?></td>
</tr>
</tr>
  <td colspan="8" width="100%" align="left">Status: <?php if($amount > 0){echo "Successful";}else{echo "Failed";}  ?></td>
</tr>
</tr>
  <td colspan="8" width="100%" align="left">Transaction Description: <?php echo $interswitch->ResponseDescription; ?></td>
</tr>
</tr>
  <td colspan="8" width="100%" align="left">Transaction Reference: <?php echo $interswitch->PaymentReference; ?></td>
</tr>
</tr>
<td colspan="8" width="100%" align="left">Amount: &#8358; <?php echo number_format($amount/100); ?></td>
</tr>
</tr>
  <td colspan="8" width="100%" align="left"></td>
</tr>

  <tr>
    <td colspan="8" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:12px" > You received this message because you are a registered member on <a style="text-decoration:none" href="<?php echo PATH; ?>"  ><?php echo SITENAME; ?> </a></td>
  </tr>
  <tr>
    <td colspan="8" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:10px" > If you received this in error, please contact us through this <a style="text-decoration:none" href="<?php echo PATH."contactus.html"; ?>"  >link</a>.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
    </tbody>
</table>
</body>
</html>



