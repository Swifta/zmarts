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
    /*$this->creditcard_paypal_pay = new Creditcard_paypal_Model;
						if($p->type == 5) {
							$this->product_list1 = $this->creditcard_paypal_pay->get_products_merchant_list($p->transactionid, $this->merchant_id,"COD");
						} else {
						//	$this->creditcard_paypal_pay = new Creditcard_paypal_Model;
							$this->product_list1 = $this->creditcard_paypal_pay->get_products_merchant_list($p->transactionid, $this->merchant_id);
						}*/
						
						
						
						
						$this->storecredit = new Store_credit_Model;
						$this->creditcard_paypal_pay = new Creditcard_paypal_Model;
						if($p->type == 5) {
							$this->product_list1 = $this->storecredit->get_products_merchant_list($p->transactionid, $this->merchant_id,"COD");
						} else {
						//	$this->creditcard_paypal_pay = new Creditcard_paypal_Model;
							$this->product_list1 = $this->storecredit->get_products_merchant_list($p->transactionid, $this->merchant_id);
						}
						
						
						
						 								$merchant_firstneme = "";
                                                        $merchant_lastname = "";
                                                        $merchant_email = "";                                                        
                                                        $this->get_merchant_details = $this->creditcard_paypal_pay->get_usr_details();
														
                                                        $merchant_firstneme = $this->get_merchant_details->current()->firstname;
                                                        $merchant_lastname = $this->get_merchant_details->current()->lastname;
                                                        $merchant_email = $this->get_merchant_details->current()->email; 
														$domain = substr($merchant_email, strpos($merchant_email, '@')+1, strlen($merchant_email));
														$merchant_phone =   $this->get_merchant_details->current()->phone_number;
														
														$c_addr1 = htmlspecialchars($p->saddr1,ENT_QUOTES,"UTF-8");
														$c_addr2 = htmlspecialchars($p->saddr2,ENT_QUOTES,"UTF-8");
														$c_city = htmlspecialchars($p->city_name,ENT_QUOTES,"UTF-8");
														$c_state = htmlspecialchars($p->state,ENT_QUOTES,"UTF-8");
														$c_country = htmlspecialchars($p->country,ENT_QUOTES,"UTF-8");
														$c_zipcode = htmlspecialchars($p->postal_code,ENT_QUOTES,"UTF-8");
														$c_s_mobile = htmlspecialchars($p->phone,ENT_QUOTES,"UTF-8");
														$c_name = htmlspecialchars($p->name,ENT_QUOTES,"UTF-8");                                                        
														
														$p_m = "Installments";
														
														
														
														
    
    ?>

  <tr height="63">
    <td colspan="8" valign="middle" align="left"><div style="margin:0 auto;width:50px;"> <a style="text-decoration:none" href="<?php echo PATH; ?>" title="<?php echo SITENAME;?>"> <img src="<?php echo THEME; ?>images/logo.png"  alt="<?php echo SITENAME; ?>" /> </a> </div></td>
  </tr>
  <tr  style="text-align:left;  padding:20px 15px 15px 15px; ;margin:0 0 20px; background:#e2e2e2;" >
    <td colspan="8" style="padding:30px 15px 15px 15px;" ><strong style="font-size: 13px; font-weight:bold; font-family: Arial;color:#666;">Dear <?php echo $this->UserName; ?>,</strong></td>
  </tr>
  
  <?php if(isset($this->is_initial) && $this->is_initial){?>
  <tr style="text-align:left; margin:0 0 20px; background:#e2e2e2;" >
  <td colspan="8"  style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; padding: 0px 15px 15px 15px "> This mail is confirmation that your store credit request has been received on  <a style="text-decoration:none; color:666" href="<?php echo PATH; ?>"><?php echo SITENAME; ?>. </a> Kindly await approval from merchant. </td>
</tr>
  <?php }else { ?>
  		<tr style="text-align:left; margin:0 0 20px; background:#e2e2e2;" >
    <td colspan="8"  style="font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:12px; padding: 0px 15px 15px 15px "> This email is to confirm that your payment on <a style="text-decoration:none" href="<?php echo PATH; ?>"><?php echo SITENAME; ?></a> has been received. Please find the details below: </td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  
  <!-- <tr>
  
    <td>-->
  
  <!--<tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
    <td colspan="8" width="50%" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Customer Details</span></td>
  </tr>-->
  <!--<tr>
    <td colspan="8" ><table class="printtable" cellpadding="0" cellspacing="0" width="100%;" >
        <tbody>
          <tr>
            <td colspan="8" width="700" >&nbsp;</td>
          </tr>
          <tr style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666; width:100%">
            <td   align="left" style="padding:10px;" >Buyer Name: </td>
            <td align="left"  style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;">Merchant 1st name.&nbsp;</td>
            <td align="left" style="padding:10px" > Email: </td>
            <td align="left" style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;">Merchant email.&nbsp;</td>
            <td align="left"   style="padding:10px;">phone: </td>
            <td align="left"  style="padding:10px; font-size:12px;font-weight:normal;font-family:Arial;color:#666;">Merchant phone.&nbsp;</td>
          </tr>
        </tbody>
      </table></td>
  </tr>-->
  <!--<tr>
    <td>&nbsp;</td>
  </tr>-->
  
    	  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
            <td colspan="8" width="700" align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Transaction Details</span></td
              >
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
          
          <?php if(isset($this->is_initial) && $this->is_initial){?>
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
          <?php }else{ ?>
         		 <tr style="font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
            <td  align="center">Transaction id: </td>
            <td   align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->transactionid; ?></td>
            <td colspan="1">&nbsp;</td>
            <td align="center"> Payment date: </td>
            <td  align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo date('d-m-Y H:i:s A',$p->transaction_date); ?></td>
            <td colspan="3">&nbsp;</td>
            <!--<td  align="center">Delivery: </td>
            <td align="center" style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $p->delivery_period." ".$this->Lang['DELI_DAYS']; ?></td>-->
          </tr>
          <?php }?>
          <tr>
            <td>&nbsp;</td>
          </tr>
          
           <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          
          <td colspan="4" width="80%" align="center" style="padding:10px"><span style="padding-right: 15px;">Shipping Address:</span> <?php echo $c_name;?><span style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"> <?php echo $c_addr1;?>, <?php echo$c_addr2;?>, <?php echo  " ".$c_city." "; ?> - <?php echo $c_city." ".$c_state;?> <?php echo $c_country;?>.</span></td>
          <td colspan="4" width="80%" align="center" style="padding:10px"><span style="padding-right: 15px;">Company Domain:</span> <span style="font-size:12px;font-weight:normal;font-family:Arial;color:#666"><?php echo $domain; ?></span></td>
          
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
					$p->type = 6;
					
					
					
					
					
					foreach($this->product_list1 as $u) { 
					
														$c_addr1 = htmlspecialchars($u->saddr1,ENT_QUOTES,"UTF-8");
														$c_addr2 = htmlspecialchars($u->saddr2,ENT_QUOTES,"UTF-8");
														$c_city = htmlspecialchars($u->city_name,ENT_QUOTES,"UTF-8");
														$c_state = htmlspecialchars($u->state,ENT_QUOTES,"UTF-8");
														$c_country = htmlspecialchars($u->country,ENT_QUOTES,"UTF-8");
														$c_zipcode = htmlspecialchars($u->postal_code,ENT_QUOTES,"UTF-8");
														$c_s_mobile = htmlspecialchars($u->phone,ENT_QUOTES,"UTF-8");
														$c_name = htmlspecialchars($u->name,ENT_QUOTES,"UTF-8");
														
														
														
					
					?>
                    
                    
  
        
         
       
  
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="700"  align="left" style="padding:10px; border-bottom: solid 1px #000000;"><span style="padding-right: 15px;">Ordered Item(s)</span></td>
        </tr>
       
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="2" align="center">Item</td>
          <td width="13%" align="center">Color</td>
          <td width="13%" align="center">Size</td>
          <td width="13%" align="center">Quantity</td>
          <td width="13%" align="center">Unit price</td>
          <td width="13%" align="center">Discounted Price</td>
          <td width="13%" align="center">Sub Total</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center"><?php echo $j.". ".ucfirst($u->deal_title); ?></td>
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
          <td width="13%" align="center"> - </td>
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
          <td width="40%" colspan="4" align="center" style=" padding:10px; border-right:#000  dotted 1px" ><?php echo $ship_dispay; ?>
            <?php if(($u->shipping_methods != 1) && ($u->shipping_methods != 5) ){ ?>
            ( <?php echo CURRENCY_SYMBOL.$u->shipping; ?> )
            <?php } ?></td>
          <td width="40%" colspan="4" style=" padding:10px;" align="left">Store: <a style="text-decoration:none" href="<?php echo PATH.$u->store_url_title;?>"><?php echo $u->store_name; ?></a></td>
        </tr>
        
        <?php if($u->bulk_discount!=0 && $p->prime_customer!=0 && $u->total_discount!=0){?>
        <tr  height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td  colspan="8"width="80%" align="center"><?php echo "Offer : ".$this->Lang['BUY_ONE']. "  ".$u->bulk_discount_buy."  ".$this->Lang['GET']."  ".$u->bulk_discount_get?>(<?php echo $this->Lang['CUSTOMER'];?> <?php echo $u->total_discount+$u->quantity;?><?php echo " ".$this->Lang['PRODUCTS'];?>)</td>
        </tr>
        <?php } ?>
        <?php if($u->store_credit_period!="" && $u->store_credit_period!=0){?>
        
        
        <!--<tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="80%" align="center"><?php echo "Store Credit Duration : ".$u->store_credit_period?></td>
        </tr>-->
        <?php } ?>
        <?php $this->gift=$this->creditcard_paypal_pay->get_gift($p->gift_id);?>
        <?php if(count($this->gift)>0 && $p->prime_customer!=0){?>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="8" width="80%" align="center"><?php echo $this->Lang['GIFT'].' : '.$this->gift->current()->gift_name; ?></td>
        </tr>
        <?php } ?>
        <?php if($u->shipping_methods == 5){ ?>
        <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
          <td colspan="4" width="40%" align="center"><?php echo $this->Lang['CUUR_CODE']; ?> ( <?php echo $u->aramex_currencycode; ?> ) </td>
          <td colspan="4" width="40%" align="center"><?php echo $this->Lang['ARAMEX_COST']; ?> ( <?php echo $u->aramex_value; ?> ) </td>
        </tr>
        <?php } ?>
        
        <?php 	$val_tot += $u->deal_value * $u->quantity; 
			$tax_tot += $u->tax_amount; 
			$tot_ship += $u->shipping;
			//$grand_tot = $val_tot +$tot_ship + $tax_tot; 
			$grand_tot = $val_tot +$tot_ship; 
			$j++; 
    
    }} ?>
    
  <tr height="30" valign="middle" style="background: #fff;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
 
    <td colspan="2">&nbsp;</td>
    <td colspan="3" align="right" style="color:#144F5D; font: bold 12px arial; padding: 5px;  padding-bottom: 0;"><div style="text-align:right; color:#144F5D; font: bold 12px arial;">Order Total</div></td>
    <td  colspan="3" align="center" style="color:#666666; font: bold 12px arial; padding:5px;  padding-bottom: 0;">
    <div style="text-align:left; color:#666666; font: bold 12px arial;"><b><?php echo CURRENCY_SYMBOL.$val_tot; ?></b></div>
    </td>
  </tr>
  <tr height="30" valign="middle" style="background: #fff;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; padding:20px;">
 
    <td colspan="2">&nbsp;</td>
    <td colspan="3" align="right" style="color:#144F5D; font: bold 12px arial; padding: 5px; padding-top: 0;"><div style="text-align:right; color:#144F5D; font: bold 12px arial;">Shipping</div></td>
    <td  colspan="3" align="center" style="color:#666666; font: bold 12px arial; padding:5px; padding-top: 0; text-align:le">
    <div style="text-align:left; color:#666666; font: bold 12px arial;"><b><?php if($tot_ship > 0 ){ echo CURRENCY_SYMBOL.$tot_ship; } else {echo "-";}?></b></div>
    </td>
  </tr>
  
  <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666; padding:20px;">
 
    <td colspan="2">&nbsp;</td>
    <td colspan="3" align="right" style="color:#144F5D; font: bold 12px arial; padding:5px;"><?php if($p->type == 5 || $p->type == 6 ) { echo $this->Lang['AMO_TO_B_PAID']; } else { echo $this->Lang['AMTPAID']; } ?></td>
    <td  colspan="3" align="left" style="color:#666666; font: bold 12px arial; padding:5px"><?php echo CURRENCY_SYMBOL.$grand_tot; ?></td>
  </tr>
       
  <tr height="30">
    <td colspan="8"><hr style="border: 1px dotted black;margin:0 auto;"></td>
  </tr>
  
  <tr>
    <td colspan="8">&nbsp;</td>
  </tr>
  
 
 
 
	<?php   
			$instalment_value =0;
			if($p->duration_period!="" && $p->duration_period!=0){ 
				$instalment_value = $grand_tot/$p->duration_period;
			} 
		?>  
	
    
    
		<?php if($p->duration_period!=""){?>
		 <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
		<td colspan="8" align="center" ><?php echo "Store Credit Duration";?> - <?php echo $p->duration_period." Month(s)"; ?></td>
        </tr>
		<?php } ?>
		<?php if($p->duration_period!=""){ 
			for($i=1;$i<=$p->duration_period;$i++) { ?>

		 <tr height="30" valign="middle" style="background: #eaeaea;font-size: 12px; font-weight:bold; font-family: Arial;color:#666;">
		<td colspan="8" align="center" style="padding-left:10px;"><?php echo "Installment ".$i." : ";?> 
        <?php if(!isset($this->is_initial) || !$this->is_initial) { echo CURRENCY_SYMBOL.number_format($instalment_value, 2)." => "; } else{ echo CURRENCY_SYMBOL.number_format($instalment_value, 2); } ?>
        
        
        <?php if(!isset($this->is_initial) || !$this->is_initial) { ?>
		<?php if($p->installments_paid>=$i) { ?>
        
			<span style="color:#000">Paid </span>
            
		<?php } elseif($p->installments_paid+1==$i) { ?>
			<span style="color:#FDB713"> Next Installment Payment </span>
		<?php } else { ?>
		<span style="color:#A61C00"> Yet to Pay</span>
		<?php } ?>
        <?php } ?>
		</td></tr>
		<?php } } ?>
		

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

<!--<?php echo "store credit product payment (customermm)";?>->

