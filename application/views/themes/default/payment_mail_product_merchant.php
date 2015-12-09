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

<table width="700" cellpadding="0" align="center" cellspacing="0" border="0" bgcolor="#ffffff">
<?php
  foreach($this->products_list as $p ) { 
    $this->creditcard_paypal_pay = new Creditcard_paypal_Model;
						if($p->type == 5) {
							$this->product_list1 = $this->creditcard_paypal_pay->get_products_merchant_list($p->transactionid, $this->merchant_id,"COD");
						} else {
						//	$this->creditcard_paypal_pay = new Creditcard_paypal_Model;
							$this->product_list1 = $this->creditcard_paypal_pay->get_products_merchant_list($p->transactionid, $this->merchant_id);
						}
						
						 								$merchant_firstneme = "";
                                                        $merchant_lastname = "";
                                                        $merchant_email = "";                                                        
                                                        $this->get_merchant_details = $this->creditcard_paypal_pay->get_user_details();
														
                                                        $merchant_firstneme = $this->get_merchant_details->current()->firstname;
                                                        $merchant_lastname = $this->get_merchant_details->current()->lastname;
                                                        $merchant_email = $this->get_merchant_details->current()->email; 
														$merchant_phone =   $this->get_merchant_details->current()->phone_number;
														
														$c_addr1 = $this->get_merchant_details->current()->ship_address1;
														$c_addr2 = $this->get_merchant_details->current()->ship_address2;
														$c_city = $this->get_merchant_details->current()->ship_city;
														$c_state = $this->get_merchant_details->current()->ship_state;
														$c_country = $this->get_merchant_details->current()->ship_country;
														$c_zipcode = $this->get_merchant_details->current()->ship_zipcode;
														$c_s_mobile = $this->get_merchant_details->current()->ship_mobileno;
														$c_name = $this->get_merchant_details->current()->ship_name;
    
    ?>

  <tr height="63">
    <td colspan="7" valign="middle" align="left"><div style="margin:0 auto;width:50px;"> <a style="text-decoration:none" href="http://localhost/zmarts/" title="<?php echo SITENAME;?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>" /> </a> </div></td>
  </tr>
  <tr  style="text-align:left;  padding:20px 15px 15px 15px; ;margin:0 0 20px; background:#e2e2e2;" >
    <td colspan="7" style="padding:30px 15px 15px 15px;" ><strong style="font-size: 13px; font-weight:bold; font-family: Arial;color:#666;">Dear <?php echo $this->merchant_firstneme; ?> <?php echo $this->merchant_lastname;?>,</strong></td>
  </tr>
  <tr style="text-align:left; margin:0 0 20px; background:#e2e2e2;" >
    <td colspan="7"  style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; padding: 0px 15px 15px 15px "> You have receive an order on <a style="text-decoration:none" href="<?php echo PATH; ?>"><?php echo SITENAME; ?></a> with the following details.</td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  
  <!-- <tr>
  
    <td>-->
  
  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
    <td colspan="7" width="50%" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Customer Details</span></td>
  </tr>
  <tr>
    <td colspan="7" ><table class="printtable" cellpadding="0" cellspacing="0" width="100%;" >
        <tbody>
          <tr>
            <td colspan="7" width="700" >&nbsp;</td>
          </tr>
          <tr style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%">
            <td   align="left" style="padding:10px;" >Buyer Name: </td>
            <td align="left"  style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;"><?php echo ucfirst($merchant_lastname);?>&nbsp;</td>
            <td align="left" style="padding:10px" > Email: </td>
            <td align="left" style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;"><?php echo $merchant_email; ?>&nbsp;</td>
            <td align="left"   style="padding:10px;">phone: </td>
            <td align="left"  style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;"><?php echo $merchant_phone; ?>&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <?php 	
			
		
	
	
					$j=1;
					$val_tot = 0;
					$tax_tot =0;
					$tot_ship =0;
					$grand_tot=0;
					foreach($this->product_list1 as $u) { ?>
  <tr>
    <td colspan="7"><table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
          <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
            <td colspan="7" width="700" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Transaction Details</span></td
              >
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
            <td  align="center">Transaction id: </td>
            <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->transactionid; ?></td>
            <td  align="center"> Order date: </td>
            <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo date('d-m-Y H:i:s A',$p->transaction_date); ?></td>
            <td  align="center">Delivery: </td>
            <td align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->delivery_period." ".$this->Lang['DELI_DAYS']; ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
            <td colspan="7" width="80%" align="center" style="padding:10px"><span style="padding-right: 15px;">Shipping Address:</span> <?php echo $c_name.", "; ?><span style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"> <?php echo $c_addr1?>, <?php echo " ".$c_addr2?>, <?php echo  " ".$c_city." "; ?> - <?php echo $c_zipcode." ".$c_state.", "; ?> <?php echo $c_country?>.</span></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
  </tr>
  <tr>
    <td colspan="7"><table cellpadding="0" cellspacing="0" width="100%">
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="7" width="700"  align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Ordered Item(s)</span></td>
        </tr>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td width="13%" align="center">Item</td>
          <td width="13%" align="center">Color</td>
          <td width="13%" align="center">Size</td>
          <td width="13%" align="center">Quantity</td>
          <td width="13%" align="center">Unit price</td>
          <td width="13%" align="center">Discounted Price</td>
          <td width="13%" align="center">Sub Total</td>
        </tr>
        <tr>
          <td colspan="7">&nbsp;</td>
        </tr>
        <tr style="font-size: 12px; font-weight: normal; font-family: Arial;color:#666;">
          <td width="13%" align="center"><?php echo $j.". ".ucfirst($u->deal_title); ?></td>
          <?php	
					if($u->product_color !=0 ) {
						 foreach($this->product_color as $pro){ 
						 if($u->product_color == $pro->id){
							 ?>
          <td width="13%" align="center"><?php echo $pro->color_name; ?></td>
          <?php 
						 }
						 ?>
          <?php
					}
					}else{
						?>
          <td width="13%" align="center"> --</td>
          <?php 
					}
				 ?>
          <?php if($u->product_size != 0 ){ foreach($this->product_size as $size){ ?>
          <?php if($u->product_size == $size->size_id){ ?>
          <td width="13%" align="center"><?php echo $size->size_name; ?></td>
          <?php } } } else {?>
          <td width="13%" align="center"> -- </td>
          <?php
									}?>
          <td width="13%" align="center"><?php echo $u->quantity; ?></td>
          <td width="13%" align="center"><?php if($u->deal_price!=0){ echo CURRENCY_SYMBOL.$u->deal_price; } else { echo CURRENCY_SYMBOL.$u->deal_value; } ?></td>
          <td width="13%" align="center"><?php  if($u->deal_price!=0){  echo CURRENCY_SYMBOL.$u->deal_value; } else { echo "-"; } ?></td>
          <td width="13%" align="center"><?php echo CURRENCY_SYMBOL.$u->deal_value * $u->quantity; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <?php $ship_dispay =""; if($u->shipping_methods == 1){ 
                                                                $ship_dispay = $this->Lang['FREE_SHIPP_PROD'];
                                                                } ?>
        <?php if($u->shipping_methods == 2){ 
                                                                $ship_dispay = $this->Lang['FLAT_SHIPP_T_PRO'];
                                                                } ?>
        <?php if($u->shipping_methods == 3){ 
                                                                $ship_dispay = $this->Lang['PER_PRO_SHIPP_PRODUCT_SHIPP'];
                                                                } ?>
        <?php if($u->shipping_methods == 4){ 
                                                                $ship_dispay = $this->Lang['PER_ITEM_PRODU_SHIPPING_AMOU'];
                                                                } ?>
        <?php if($u->shipping_methods == 5){ 
                                                                $ship_dispay = $this->Lang['ARAMEX_SHIPP_PROD'];
                                                                } ?>
        <tr height="30"  valign="middle" style=" background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="4" align="center" style=" padding:10px; border-right:#000  dotted 1px" ><?php echo $ship_dispay; ?>
            <?php if(($u->shipping_methods != 1) && ($u->shipping_methods != 5) ){ ?>
            ( <?php echo CURRENCY_SYMBOL.$u->shipping; ?> )
            <?php } ?></td>
          <td  colspan="4" style=" padding:10px;" align="left">Store: <a style="text-decoration:none" href="<?php echo PATH.$u->store_url_title;?>"><?php echo $u->store_name; ?></a></td>
        </tr>
        <?php if($u->bulk_discount!=0 && $p->prime_customer!=0 && $u->total_discount!=0){?>
        <tr  height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td  colspan="8"	width="80%" align="center"><?php echo "Offer : ".$this->Lang['BUY_ONE']. "  ".$u->bulk_discount_buy."  ".$this->Lang['GET']."  ".$u->bulk_discount_get?>(<?php echo $this->Lang['CUSTOMER'];?> <?php echo $u->total_discount+$u->quantity;?><?php echo " ".$this->Lang['PRODUCTS'];?>)</td>
        </tr>
        <?php } ?>
        
        <?php $this->gift=$this->creditcard_paypal_pay->get_gift($p->gift_id);?>
        <?php if(count($this->gift)>0 && $p->prime_customer!=0){?>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="80%" align="center" style="padding:10px;"><?php echo $this->Lang['GIFT'].' : '.$this->gift->current()->gift_name; ?></td>
        </tr>
        <?php } ?>
        
        
        <?php if($u->store_credit_period!="" && $u->store_credit_period!=0){?>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="80%" align="center"><?php echo "Store Credit Duration : ".$u->store_credit_period?></td>
        </tr>
        <?php } ?>
        
        <?php if($u->shipping_methods == 5){ ?>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="3" width="40%" align="center"><?php echo $this->Lang['CUUR_CODE']; ?> ( <?php echo $u->aramex_currencycode; ?> ) </td>
          <td colspan="4" width="40%" align="center"><?php echo $this->Lang['ARAMEX_COST']; ?> ( <?php echo $u->aramex_value; ?> ) </td>
        </tr>
        <?php } ?>
      </table></td>
  </tr>
  <?php 	$val_tot += $u->deal_value * $u->quantity; 
			$tax_tot += $u->tax_amount; 
			$tot_ship += $u->shipping;
			//$grand_tot = $val_tot +$tot_ship + $tax_tot; 
			$grand_tot = $val_tot +$tot_ship; 
			$j++; 
    
    }} ?>
  <tr height="30">
    <td colspan="7"><hr style="border: 1px dotted black;margin:0 auto;"></td>
  </tr>
  <tr>
    <td colspan="7"><div style="clear:both;"></div>
      <div style="width: 100%;  line-height: 2em; text-align:left; page-break-before: auto;">
        <div style="float:left; width: 48%">&nbsp;</div>
        <div style="float:left; width: 26%; text-align:right; color:#144F5D; font: bold 12px arial; white-space:nowrap">Order Total</div>
        <div style="float:left; width: 26%; text-align:center; color:#666666; font: bold 12px arial; white-space:nowrap"><b style="white-space:nowrap"><?php echo CURRENCY_SYMBOL.$val_tot; ?></b></div>
        <div style="clear:both;"></div>
        <div style="float:left; width: 48%">&nbsp;</div>
        <div style="float:left; width: 26%; text-align:right; color:#144F5D; font: bold 12px arial; white-space:nowrap">Shipping</div>
        <div style="float:left; width: 26%; text-align:center; color:#666666; font: bold 12px arial; white-space:nowrap"><b style="white-space:nowrap">
          <?php if($tot_ship != 0 ) echo CURRENCY_SYMBOL.$tot_ship; else echo '-'; ?>
          </b></div>
      </div></td>
  </tr>
  <div style="clear:both;"></div>
  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%; padding:20px;">
    <td  width="74%">&nbsp;</td>
    <td width="13%" align="right" style="color:#144F5D; font: bold 12px arial; padding: 15px; white-space:nowrap"><?php if($p->type == 5 || $p->type == 6 ) { echo $this->Lang['AMO_TO_B_PAID']; } else { echo $this->Lang['AMTPAID']; } ?></td>
    <td  width="13%" align="center" style="color:#666666; font: bold 12px arial; padding:15px; white-space:nowrap"><?php echo CURRENCY_SYMBOL.$grand_tot; ?></td>
  </tr>
  <tr>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:12px" > You received this message because you are a registered member on <a style="text-decoration:none" href="<?php echo PATH; ?>"  ><?php echo SITENAME; ?> </a></td>
  </tr>
  <tr>
    <td colspan="7" width="100%" align="center" style="text-align:center; color:#AAA; font-family:Arial, Helvetica, sans-serif; font-size:10px" > If you received this in error, please contact us through this <a style="text-decoration:none" href="<?php echo PATH."contactus.html"; ?>"  >link</a>.</td>
  </tr>
  <tr>
    <td c>&nbsp;</td>
  </tr>
</table>


</body>
</html>

<?php //exit; ?>
