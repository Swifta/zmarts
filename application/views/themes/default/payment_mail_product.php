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
<tr height="63">
  <td colspan="8" valign="middle" align="left"><div style="margin:0 auto;width:636px;"> <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>"  /> </a> </div></td>
</tr>
<tr  style="text-align:left;  padding:20px 15px 15px 15px; ;margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8" style="padding:30px 15px 15px 15px;" ><strong style="font-size: 13px; font-weight:bold; font-family: Arial;color:#666;">Dear <?php echo $this->UserName;?>, </strong></td>
</tr>
<tr style="text-align:left; margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8"  style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; padding: 0px 15px 15px 15px "> Thanks for your order on <a style="text-decoration:none" href="<?php echo PATH; ?>"><?php echo SITENAME; ?></a> This email is confirmation that we have received your order of the details below. Kindly await shipping updates. </td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<?php foreach($this->products_list as $p ) { 
  		$p_m = "-";
  		if($p->type == 5)
			$p_m = "Pay Later";
		else if($p->type == 6)
			$p_m = "Cash On Delivery";
		else if($p->type == 7)
			$p_m = "Interswitch";
		
		
		
  ?>

<!-- <tr height="63">
    <td colspan="8" valign="middle" align="left"><div style="margin:0 auto;width:636px;"> <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>"  /> </a> </div></td>
  </tr>--> 
<!--<tr>
    <td colspan="8"><div style="width:636px;margin:0 auto;">
        <div style="text-align:center;margin:0 0 20px;padding:10px 0;background:#e2e2e2;"> <strong style="font-size: 20px; font-weight:bold; font-family: Arial;color:#666;"><?php echo $this->Lang['SHIP_DET']; ?></strong> <b style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666;"><?php echo $this->Lang['NOTE']; ?>:</b><b style="font-size: 12px; font-weight: normal;font-family: Arial;color:#666;"> <?php echo $this->Lang['THIS_SH_CON_FO_IT']; ?> </b> </div>
      </div></td></tr>-->
<tr>
<td colspan="8">
<table width="100%" cellpadding="0" cellspacing="0">
  <table width="800" cellpadding="0" align="center" cellspacing="0" border="0" bgcolor="#ffffff">
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td colspan="8" width="800" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Transaction Details</span></td
              >
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td  align="center">Transaction id: </td>
      <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->transactionid; ?></td>
      <td  align="center">Payment method: </td>
      <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p_m;?></td>
      <td  align="center"> Order date: </td>
      <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo date('d-m-Y H:i:s A',$p->transaction_date); ?></td>
      <td  align="center">Delivery: </td>
      <td align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->delivery_period." ".$this->Lang['DELI_DAYS']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
      <td colspan="8" width="80%" align="center" style="padding:10px"><span style="padding-right: 15px;">Shipping Address:</span> <strong style="padding:15px 0 0 0;font-size: 12px;font-family: arial; color: #666;"><?php echo ucfirst($p->name); ?> </strong>, <span style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"> <?php echo $p->saddr1?>, <?php echo " ".$p->saddr2?>, <?php echo  " ".$p->city_name." "; ?> - <?php echo $p->postal_code." ".$p->state.", "; ?> <?php echo $p->country?>.</span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
    </td>
  
    </tr>
  
  <tr>
    <td colspan="8" width="100%" valign="top"><table cellpadding="0" cellspacing="0" width="100%">
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="800" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Ordered Item(s) Details</span></td
              >
        </tr>
       
        <?php
                                        $this->creditcard_paypal_pay = new Creditcard_paypal_Model;
                                        if($p->type == 5) {
                                                $this->product_list1 = $this->creditcard_paypal_pay->get_products_list($p->transactionid,"COD");
                                        } else {
                                                $this->product_list1 = $this->creditcard_paypal_pay->get_products_list($p->transactionid);
                                        }
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
          <td width="13%" align="center"><?php echo $this->Lang['UNIR_PR']; ?></td>
          <td width="13%" align="center"><?php echo $this->Lang['DEALVALUE']; ?></td>
          <td width="13%" align="center"><?php echo $this->Lang['SUB_TOT']; ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        
        <!-- Item Name start --> 
        
        <!--<tr>
                                                <td colspan="8"><b style="font-size: 15px; font-weight:bold; font-family: Arial;color:#144F5D;"><?php echo $j.". ".$u->deal_title; ?>  </b></td>
                                            </tr>--> 
        
        <!-- Item Name end --> 
        
        <!--<tr>
                <td colspan="8"><table cellpadding="0" cellspacing="0" width="100%">
                    <tr> --> 
        
        <!-- shop address start --> 
        
        <!-- <td width="20%" valign="top">
                                                                <b style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo $this->Lang['SHOP_ADDR']; ?> : </b><br> <div style=" float:left;width: 80%; text-align:left;color:#666; font: bold 12px arial;">
																<b style="padding-top:5px;display:block;"><?php echo $u->store_name ; ?>,</b>
                                                                <b style="padding-top:5px;display:block;"><?php echo $u->addr1; ?>,</b>
                                                                <b style="padding-top:5px;display:block;"><?php echo $u->addr2 ; ?>,</b>
                                                                <b style="padding-top:5px;display:block;"><?php echo common::get_city_name($u->str_city_id)." - ".$u->zipcode; ?></b>
                                                                <b style="padding-top:5px;display:block;">Phone: <?php echo $u->str_phone; ?>.</b>
                                                                
                                                                </div>
                                                            </td>-->
        
        <tr style="font-size: 12px; font-weight: normal; font-family: Arial;color:#666;">
          <td width="13%" align="center" ><?php echo $j.". ".$u->deal_title; ?></td>
          <td width="13%" align="center"><?php if($u->product_color !=0 ) { foreach($this->product_color as $pro){ ?>
            <?php if($u->product_color == $pro->id){ ?>
            <?php echo ucfirst($pro->color_name); ?>
            <?php } } } else echo "--";?></td>
          <td width="13%" align="center"><?php if($u->product_size != 0 ){ foreach($this->product_size as $size){ ?>
            <?php if($u->product_size == $size->size_id){ ?>
            <?php echo $size->size_name; ?>
            <?php } } } else echo"-"; ?></td>
          <td width="13%" align="center"><?php echo $u->quantity; ?></td>
          <td width="13%" align="center"><?php if($u->deal_price!=0){ echo CURRENCY_SYMBOL.$u->deal_price; } else { echo CURRENCY_SYMBOL.$u->deal_value; } ?></td>
          <td width="13%" align="center"><?php  if($u->deal_price!=0){  echo CURRENCY_SYMBOL.$u->deal_value; } else { echo "-"; } ?></td>
          <td width="13%" align="center"><?php echo CURRENCY_SYMBOL.$u->deal_value * $u->quantity; ?></td>
        </tr>
        <tr>
          <td colspan="8">&nbsp;</td>
        </tr>
        <?php $ship_dispay = ""; if($u->shipping_methods == 1){ 
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
        <tr>
          <td colspan="8"><table cellpadding="0" cellspacing="0" width="100%">
              <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
                <td width="40%" align="center" style="border-right:#000  dotted 1px;"><?php echo $ship_dispay; ?>
                  <?php if(($u->shipping_methods != 1) && ($u->shipping_methods != 5) ){ ?>
                  ( <?php echo CURRENCY_SYMBOL.$u->shipping; ?> )
                  <?php } ?></td>
                <td width="40%" colspan="3" style=" padding:10px;" align="left">Store: <a style="text-decoration:none" href="<?php echo PATH.$u->store_url_title;?>"><?php echo $u->store_name; ?></a></td>
              </tr>
              <?php if($u->bulk_discount!=0 && $p->prime_customer!=0 && $u->total_discount!=0){?>
              <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
                <td width="80%" align="center"><?php echo "Offer : ".$this->Lang['BUY_ONE']. "  ".$u->bulk_discount_buy."  ".$this->Lang['GET']."  ".$u->bulk_discount_get;?>(<?php echo $this->Lang['YOU_GOT_DISCOUNT'];?> <?php echo $u->total_discount+$u->quantity;?><?php echo " ".$this->Lang['PRODUCTS'];?>)</td>
              </tr>
              <?php } ?>
              <?php if($u->store_credit_period!="" && $u->store_credit_period!=0){?>
              <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
                <td width="80%" align="center"><?php echo "Store Credits : ".$u->store_credit_period." Months"; ?></td>
              </tr>
              <?php } ?>
              <?php if($u->shipping_methods == 5){ ?>
              <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
                <td width="40%" align="center"><?php echo $this->Lang['CUUR_CODE']; ?> ( <?php echo $u->aramex_currencycode; ?> ) </td>
                <td width="40%" align="center"><?php echo $this->Lang['ARAMEX_COST']; ?> ( <?php echo $u->aramex_value; ?> ) </td>
              </tr>
              <?php } ?>
              <?php $this->gift=$this->creditcard_paypal_pay->get_gift($u->gift_id);?>
              <?php if($u->gift_id>0 && count($this->gift)>0 && $u->prime_customer!=0){?>
              <tr height="18">
                <td colspan="2"></td>
              </tr>
              <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
                <td width="100%" colspan="2"><div style="width:100%">
                    <h1 style="font:14px arial;color:#5BB110;padding-bottom:5px;border-bottom:1px dashed #ddd;float:left;width:100%;margin-bottom:10px;"><?php echo $this->Lang['GIFT'].' : '.$this->gift->current()->gift_name; ?></h1>
                    <?php if(file_exists(DOCROOT.'images/merchant/gift/'.$this->gift->current()->gift_id.'.png')){?>
                    <div class="offer_det_left" style="float:left;width:18%;margin-right:2%;"> <img src="<?php echo PATH.'images/merchant/gift/'.$this->gift->current()->gift_id.'.png';?>"> </div>
                    <?php }?>
                    <?php if(!file_exists(DOCROOT.'images/merchant/gift/'.$this->gift->current()->gift_id.'.png')){?>
                    <div style="float:left;width:80%;">
                      <p style="float:left;font:12px/19px arial;color:#888;width:100%;"><?php echo substr(ucfirst($this->gift->current()->gift_description), 0, 100)."...";?></p>
                    </div>
                  </div>
                  <?php }?></td>
              </tr>
              <?php } ?>
            </table></td>
        </tr>
        <?php 	$val_tot += $u->deal_value * $u->quantity; 
			$tax_tot += $u->tax_amount; 
			$tot_ship += $u->shipping;
			//$grand_tot = $val_tot +$tot_ship + $tax_tot; 
			$grand_tot = $val_tot +$tot_ship; 
			$j++; ?>
			
		<tr>
    		<td colspan="8">&nbsp;</td>
  		</tr>	
			
			
		<?php	} ?>
      </table></td>
  </tr>
  <tr height="30">
    <td colspan="8"><hr style="border: 1px dotted black;margin:0 auto;"></td>
  </tr>
  <div style="clear:both;"></div>
  <div style="width:100%;  line-height: 2em; text-align:left; page-break-before: auto;">
    <div style="float:left; width: 74%">&nbsp;</div>
    <div style="float:left; width: 13%; text-align:right; color:#144F5D; font: bold 12px arial;">Order Total</div>
    <div style="float:left; width: 13%; text-align:center; color:#666666; font: bold 12px arial;"><b><?php echo CURRENCY_SYMBOL.$val_tot; ?></b></div>
    <div style="clear:both;"></div>
    <div style="float:left; width: 72%">&nbsp;</div>
    <div style="float:left; width: 15%; text-align:right; color:#144F5D; font: bold 12px arial;"><?php echo $this->Lang['SHIP_ING']; ?></div>
    <div style="float:left; width: 13%; text-align:center; color:#666666; font: bold 12px arial;"><b>
      <?php if($tot_ship != 0 ) echo CURRENCY_SYMBOL.$tot_ship; else echo '-'; ?>
      </b></div>
  </div>
  <div style="clear:both;"></div>
  <?php /*<div style="float:left; width: 72%">&nbsp;</div>
                            <div style="float:left; width: 15%; text-align:right; color:#144F5D; font: bold 12px arial;"><?php echo $this->Lang['TAX']; ?></div>
                            <div style="float:left; width: 13%; text-align:center; color:#666666; font: bold 12px arial;"><b><?php if($tax_tot != 0 ) echo CURRENCY_SYMBOL.$tax_tot; else echo '-'; ?> </b></div>
                            <div style="clear:both;"></div> */ ?>
  <table class="printtable" cellpadding="0" cellspacing="0" width="100%">
    <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%;">
      <td width="74%">&nbsp;</td>
      <td width="13%"  align="right" style=" padding:15px; color:#144F5D; font: bold 12px arial;"><?php if($p->type == 5 || $p->type == 6 ) { echo $this->Lang['AMO_TO_B_PAID']; } else { echo $this->Lang['AMTPAID']; } ?></td>
      <td width="13%" align="center" style=" padding:15px; color:#666666; font: bold 12px arial;"><?php echo CURRENCY_SYMBOL.$grand_tot; ?></td>
    </tr>
  </table>
  <div style="clear:both"></div>
    </td>
  
    </tr>
  
  <tr>
    <td style="padding:15px 0;"><div style="width:636px;margin:0 auto;">
      <div style="width:100%;"> 
        <!--<div style="float:left; width: 40%; font-size:12px; border-right: 1px dotted #666666; text-align: center;">
            <?php /* <strong style="display:block;font-size: 20px;font-family: arial;font-weight: bold;color: #666;">CASH ON DELIVERY</strong> */ ?>
            <strong style="display:block;padding:15px 0 0 0;font-size: 14px;font-family: arial;font-weight: bold;color: #666;">
            <?php if($p->type == 5) { echo $this->Lang['AMO_TO_B_PAID']; } else { echo $this->Lang['AMTPAID']; } ?>
            : <?php echo CURRENCY_SYMBOL.$grand_tot; ?></strong> <span style="font-size: 12px;font-family: arial;color: #666;">(inclusive of all charges)</span><br>
            <br>
            <strong style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo $this->Lang['TRANS_ID']; ?> : <?php echo $p->transactionid; ?></strong><br>
            <span style="font-size: 12px;font-family: arial;color: #666;"> <?php echo $this->Lang['OR_DATE']; ?>: <?php echo date('d-m-Y H:i:s A',$p->transaction_date); ?></span></br>
            <strong style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo "DELIVERY"; ?> : </strong><br>
            <span style="font-size: 12px;font-family: arial;color: #666;"> <?php echo $p->delivery_period." ".$this->Lang['DELI_DAYS']; ?></span></br>
            </br>
            </br>
            <br>
            <strong style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo $this->Lang['IP']; ?> : <?php echo $p->ip; ?> </strong><br>
            <?php if($p->ip_city_name != ""){ ?>
            <strong style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo $this->Lang['IP_CITY']; ?> : <?php echo $p->ip_city_name; ?></strong><br>
            <?php } ?>
            <strong style="font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo $this->Lang['IP_COUNTRY']; ?> : <?php echo $p->ip_country_name; ?></strong><br>
          </div>
          <div <?php if(isset($this->set_pay_later) && $this->set_pay_later==1){ ?> style="float:left; width: auto; margin-left: 30px;border-right: 1px dotted #666666;padding-right:20px;" <?php }else{?> style="float:left; width: auto; margin-left: 30px;"  <?php }?>>
         <!-- <strong style="font-size: 20px;font-family: arial;font-weight: bold;color: #666; text-align: center;display:block;"><?php echo $this->Lang['SHIP_ADDR']; ?></strong> <strong style="display:block;padding:15px 0 0 0;font-size: 14px;font-family: arial;font-weight: bold;color: #666;"><?php echo ucfirst($p->name); ?> </strong>--> 
        <!--<div style="float:left;"> <span style="font-size: 12px;font-family: arial;color: #666;float:left;"> <b style="padding-top:5px;display:block;"> <?php echo $p->saddr1; ?>,</b> <b style="padding-top:5px;display:block;"><?php echo $p->saddr2; ?>,</b> <b style="padding-top:5px;display:block;"><?php echo $p->city_name." - ".$p->postal_code; ?></b> <b style="padding-top:5px;display:block;"> <?php echo $p->state; ?> , <?php echo $p->country; ?>.</b> <b style="padding-top:5px;display:block;"> <?php echo $p->phone; ?>.</b> </span> </div>
        </div>-->
        <?php if(isset($this->set_pay_later) && $this->set_pay_later==1 && $p->type == 5){?>
        <div style="float:left; font-size:12px; text-align: center;margin-left:25px;"> <strong style="font-size: 20px;font-family: arial;font-weight: bold;color: #666; text-align: center;display:block;"><?php echo "Methods for ".$this->Lang['PAY_LATER']; ?></strong>
          <div style="float:left;"> <span style="font-size: 12px;font-family: arial;color: #666;float:left;"> <b style="padding-top:5px;display:block;"> <?php echo PAY_LATER; ?></b> </span> </div>
        </div>
        <?php }?>
      </div></td>
  </tr>
  <!-- <tr height="80" bgcolor="#e2e2e2">
    <td valign="middle"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="color:#777;font-size: 14px;font-family: arial;">
        <tr>
          <td width="41"></td>
          <td width="618" align="center"><?php echo $this->Lang['YOU_REC_MSG']; ?> <?php echo SITENAME; ?></td>
          <td width="41"></td>
        </tr>
        <tr height="3">
          <td colspan="3"></td>
        </tr>
      </table></td>
  </tr>-->
  <?php } ?>
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
