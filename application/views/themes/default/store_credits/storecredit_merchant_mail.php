<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<table width="700" cellpadding="0" align="center" cellspacing="0" border="0" bgcolor="#ffffff">
<tr height="63">
  <td valign="middle" align="left"><div style="margin:0 auto;width:636px;"> <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>"  /> </a> </div></td>
</tr>
<tr  style="text-align:left;  padding:20px 15px 15px 15px; ;margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8" style="padding:30px 15px 15px 15px;" ><strong style="font-size: 13px; font-weight:bold; font-family: Arial;color:#666;">Dear <?php echo $this->merchant_name; ?>, </strong></td>
</tr>
<tr style="text-align:left; margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8"  style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; padding: 0px 15px 15px 15px "> You have received a store credit request on <a style="text-decoration:none; color:666" href="<?php echo PATH; ?>"><?php echo SITENAME; ?></a>. Kindly review and take the necessary steps to approve/disapprove.. </td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
<td colspan="8" width="100%" valign="top">
<table cellpadding="0" cellspacing="0" width="100%">
    <tbody>
  
  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
    <td colspan="8" width="800" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Ordered Item(s) Details</span></td
              >
  </tr>
  <?php
										
				
					$j=1;
					$val_tot = 0;
					$tax_tot =0;
					$tot_ship =0;
					$grand_tot=0;
					foreach($this->product_list1 as $u) { ?>
                    
                  
  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
    <td width="13%" align="center">Item</td>
    <td width="13%" align="center"><?php echo $this->Lang['COLOR']; ?></td>
    <td width="13%" align="center"><?php echo $this->Lang['SIZE']; ?></td>
    <td width="13%" align="center"><?php echo $this->Lang['QUAN']; ?></td>
    <!--<td width="13%" align="center"><?php echo $this->Lang['UNIR_PR']; ?></td>-->
    <td width="13%" align="center"><?php echo $this->Lang['DEALVALUE']; ?></td>
    <td width="13%" align="center"><?php echo $this->Lang['SUB_TOT']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr style="font-size: 12px; font-weight: normal; font-family: Arial;color:#666;">
    <td width="13%" align="center" ><?php echo $j.". ".$u->deal_title; ?></td>
    <td width="13%" align="center"><?php if($u->colorid !=0 ) { foreach($this->product_color as $pro){ ?>
      <?php if($u->colorid == $pro->id){ ?>
      <?php echo ucfirst($pro->color_name); ?>
      <?php } } } else echo "--";?></td>
    <td width="13%" align="center"><?php if($u->sizeid != 0 ){ foreach($this->product_size as $size){ ?>
      <?php if($u->sizeid == $size->size_id){ ?>
      <?php echo $size->size_name; ?>
      <?php } } } else echo"-"; ?></td>
    <td width="13%" align="center"><?php echo $u->product_quantity; ?></td>
    <td width="13%" align="center"><?php echo CURRENCY_SYMBOL.$u->product_value; ?></td>
    <td width="13%" align="center"><?php echo CURRENCY_SYMBOL.$u->product_value * $u->product_quantity; ?></td>
  </tr>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  <?php $ship_dispay = ""; if($u->shipping_method == 1){ 
                                                                $ship_dispay = $this->Lang['FREE_SHIPP_PROD'];
                                                                } ?>
  <?php if($u->shipping_method == 2){ 
                                                                $ship_dispay = $this->Lang['FLAT_SHIPP_T_PRO'];
                                                                } ?>
  <?php if($u->shipping_method == 3){ 
                                                                $ship_dispay = $this->Lang['PER_PRO_SHIPP_PRODUCT_SHIPP'];
                                                                } ?>
  <?php if($u->shipping_method == 4){ 
                                                                $ship_dispay = $this->Lang['PER_ITEM_PRODU_SHIPPING_AMOU'];
                                                                } ?>
  <?php if($u->shipping_method == 5){ 
                                                                $ship_dispay = $this->Lang['ARAMEX_SHIPP_PROD'];
																
                                                                } ?>
    <tr>
  
    <td colspan="8">
  <table cellpadding="0" cellspacing="0" width="100%">
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td colspan="8"  align="center" ><?php echo $ship_dispay; ?>
        <?php if(($u->shipping_method != 1) && ($u->shipping_method != 5) ){ ?>
        ( <?php echo CURRENCY_SYMBOL.$u->shipping_amount; ?> )
        <?php } ?></td>
    </tr>
    <?php   $val_tot += $u->product_value * $u->product_quantity; 
			//$tax_tot += $u->tax_amount; 
			$tot_ship += $u->shipping_amount;
			//$grand_tot = $val_tot +$tot_ship + $tax_tot; 
			$grand_tot = $val_tot +$tot_ship; 
	?>
	<?php
			$instalment_value =0;
			if($u->duration_period!=""){ 
				$instalment_value = $grand_tot/$u->duration_period;

			} ?>
            
            
    <?php if($u->duration_period!=""){?>
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td width="40%" align="right"><?php echo "Store Credit Duration : ";?></td>
      <td align="left" style="padding-left:20px"><?php echo $u->duration_period." Month(s)"; ?></td>
    </tr>
    <?php } ?>
    <?php if($u->duration_period!=""){ 
																	for($i=1;$i<=$u->duration_period;$i++) { ?>
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td width="40%" align="right"><?php echo "Installment ".$i." : ";?></td>
      <td width="40%" align="left" style="padding-left:23px">
      <?php echo CURRENCY_SYMBOL.$instalment_value.""; ?>
      </td>
      </tr>
    
    <?php } } ?>
    <?php 
			$j++; } ?>
 
  </table>
    </td>
    </tr>
  
  <tr height="30">
    <td colspan="8"><hr style="border: 1px dotted black;margin:0 auto;"></td>
  </tr>
  
  </tbody></table></td></tr>
<tr><td colspan="7">
  <table class="printtable" cellpadding="0" cellspacing="0" width="100%" style="background: #fff;">
    <tr height="30" valign="middle" style="background: #fff;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%;">
      <td colspan="7" align="right" style="color:#144F5D; font: bold 12px arial; padding-right:15px;">Order Total</td>
      <td colspan="1" align="center" style="color:#666666; font: bold 12px arial; "><?php echo CURRENCY_SYMBOL.$val_tot; ?></td>
    </tr>
    
     <tr height="30" valign="middle" style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%; padding-bottom:15px;">
      <td colspan="7" align="right" style="color:#144F5D; font: bold 12px arial; padding-right:15px;"><?php echo $this->Lang['SHIP_ING']; ?></td>
      <td colspan="1" align="center" style="color:#666666; font: bold 12px arial; "> <?php if($tot_ship != 0 ) echo CURRENCY_SYMBOL.$tot_ship; else echo '-'; ?></td>
    </tr>
    
  
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%;">
      <td colspan="7" align="right" style="color:#144F5D; font: bold 12px arial; padding:15px;"><?php  echo $this->Lang['AMO_TO_B_PAID']; ?></td>
      <td colspan="1" align="center" style="color:#666666; font: bold 12px arial; "><?php echo CURRENCY_SYMBOL.$grand_tot; ?></td>
    </tr>
  </table></td></tr>
  
  
   
  
    
  <tr>
    <td c>&nbsp;</td>
  </tr>

  <tr>
    <td colspan="8" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:12px" > You received this message because you are a registered member on <a style="text-decoration:none" href="<?php echo PATH; ?>"  ><?php echo SITENAME; ?> </a></td>
  </tr>
  <tr>
    <td colspan="8" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:10px" > If you received this in error, please contact us through this <a style="text-decoration:none" href="<?php echo PATH."contactus.html"; ?>"  >link</a>.</td>
  </tr>
  <tr>
    <td c>&nbsp;</td>
  </tr>
</table>
</body>
</html>
<!--<?php echo "store credit payment mail(merchant)";?>-->