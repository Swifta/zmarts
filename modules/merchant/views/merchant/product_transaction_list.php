<?php defined('SYSPATH') OR die("No direct access allowed."); ?>
<?php 
$tranx_id = ""; //empty transaction id.
$interswitch_tranx_ref = "";
$more_details_btn = "";
$requery_btn = "";

if(($this->uri->segment(2)=='view-products')){	
								
		 if(count($this->product_transaction_list) > 0){ ?>

		<a class="fr" style="float:right;text-decoration: underline; cursor: pointer;position:relative; z-index:2;" href="<?php echo PATH.'merchant/view-products/'.$this->product_key.'/'.$this->product_id.'.html?id='.$this->Lang['SEARCH'];  ?>" title="<?php echo $this->Lang['EXP_PRO']; ?>"><img src="<?php echo PATH ?>images/csv.png" class="image" alt="<?php echo $this->Lang['EXP_PRO']; ?>"/></a>

		<?php } } ?>

<?php if(count($this->product_transaction_list) > 0){ ?>
<div class="table_over_flow">
       <table class="list_table fl clr mt20">
        	<tr>
			<th align="left" ><?php echo $this->Lang["S_NO"]; ?></span></th>
			<?php if(($this->uri->segment(2) != "view-deal")&&($this->uri->segment(2) != "view-products")){  ?>
			<th align="left" ><div class="arrow"><a href="<?php echo $this->sort_url;?>param=username&sort=<?php if($this->input->get('sort')=='DESC'){ echo 'ASC'; }else{ echo 'DESC'; } ?>" title="<?php echo $this->Lang['SORT_BY_NAME']; ?>" ><?php echo $this->Lang["USERS"]; ?></a></div></th>
			
			<th align="left" ><div class="arrow1"><a href="<?php echo $this->sort_url;?>param=title&sort=<?php if($this->input->get('sort')=='DESC'){ echo 'ASC'; }else{ echo 'DESC'; } ?>" title="<?php echo $this->Lang['SORT_B_DEAL_TIT']; ?>" ><?php echo $this->Lang["PRODUCT_TITLE"]; ?></a></div></span></th>
			
			<th align="lefft" > <?php echo $this->Lang["QUAN"]; ?> </th>
			
			<?php /** <th align="left" ><div class="arrow3"><a href="<?php echo $this->sort_url;?>param=quantity&sort=<?php if($this->input->get('sort')=='DESC'){ echo 'ASC'; }else{ echo 'DESC'; } ?>" title="Sort By  Quantity" ><?php echo $this->Lang["QUAN"]; ?></a></div></th> **/?>
			<th align="left" ><div class="arrow3"><a href="<?php echo $this->sort_url;?>param=amount&sort=<?php if($this->input->get('sort')=='DESC'){ echo 'ASC'; }else{ echo 'DESC'; } ?>" title="<?php echo $this->Lang['SORT_B_AMOUNT']; ?>" ><?php echo $this->Lang["AMOUNT"]; ?><?php echo '('.CURRENCY_SYMBOL.')';?></a></div></th>
		
		
					
				<?php   } else { ?>
			<th align="lefft" > <?php echo $this->Lang['USERS']; ?> </th>
			<?php if(($this->uri->segment(2) != "view-deal") && ($this->uri->segment(2) != "view-products")){  ?>
			<th align="lefft" > <?php echo $this->Lang["PRODUCT_TITLE"]; ?> </th>
			<?php } ?>
			<th align="lefft" > <?php echo $this->Lang["QUAN"]; ?> </th>
			
			<th align="lefft" > <?php echo $this->Lang["AMOUNT"]; ?><?php echo '('.CURRENCY_SYMBOL.')';?> </th>
			<?php   }  ?>
			
			<?php /*if($this->uri->segment(2) != "view-user"){  ?>	
			<th align="left" ><?php echo $this->Lang["ADMIN_COMMISSION"]; ?><?php echo '('.CURRENCY_SYMBOL.')';?></th>
			<?php } */?>
			<th align="lefft" > <?php echo $this->Lang['SHIP_ING']; ?> <?php echo '('.CURRENCY_SYMBOL.')';?></th>
			<?php /**<th align="lefft" > <?php echo $this->Lang['TAX']; ?> <?php echo '('.CURRENCY_SYMBOL.')';?></th> */ ?>
			<?php if(($this->uri->segment(2) == "view-deal")&&($this->uri->segment(2) == "view-products")){  ?>	
			<th align="left" ><?php echo $this->Lang["TRANS_ID"]; ?></span></th>
			<?php } ?>
                        
                        <th align="left" >Transaction ID</th>
                        <th align="left" >REF</th>
                        
			<?php if(($this->uri->segment(2) == "view-deal")||($this->uri->segment(2) == "view-products")||($this->uri->last_segment() == "all-transaction.html")||($this->uri->segment(2) == "all-transaction")){  ?>			
			<th align="left" ><?php echo $this->Lang["STATUS"]; ?></th> 
			<?php } ?>
			<th align="left" ><?php echo $this->Lang["TRANS_DATE"]; ?></th>
			<th align="left" ><?php echo $this->Lang["TRANS_TYPE"]; ?></th>
			
                </tr>
                
                
                
                <?php $i = 0;  if(($this->uri->segment(2) == "view-deal") ||($this->uri->segment(2) == "view-products")) {  $first_item = 1; } else { $first_item = $this->pagination->current_first_item; }
                
                        $tot_quan = 0; 
			$tot_amount = 0;
                        $tot_amount_success = 0;
			$tot_commission = "";
			$tot_reff = "";
			$tot_shipping = "";
			$tot_tax = "";
			
			foreach($this->product_transaction_list as $u){?>
                <tr> 
         	    <td align="center"><?php echo $i+$first_item; ?></span></td>	
		    <td align="left" > <?php echo ucfirst(htmlspecialchars($u->firstname)); ?> </td>
		    
		    <?php if(($this->uri->segment(2) != "view-deal") && ($this->uri->segment(2) != "view-products")){  ?>
		   
		    <td align="left">
		    <?php echo htmlspecialchars($u->deal_title); ?></td>
			<?php } ?>
		    <td align="center"><?php echo $u->quantity; ?></td> 
		    
		    
		    <?php $tot_quan +=$u->quantity; ?>
		    
		     <?php $commission_val=$u->deal_merchant_commission; ?> 
		    <?php  
		        $commission=0; //$u->deal_value *($commission_val/100);
		    ?>	   
		     
		    <td align="center"><span class="align"><?php 
                    //echo ($u->deal_value-$commission)*$u->quantity; 
                    echo ($u->amount-$commission)*$u->quantity; 
                    ?></span></td>
		    <?php 
                    //$tot_amount +=($u->deal_value)*$u->quantity; 
                    $tot_amount +=($u->amount)*$u->quantity; 
                    ?>
                    
                        
                        
                    <?php
                        //my code snippet to manage interswitch transactions and patches
                        $interswitch_tranx_ref = "-";
                        $requery_btn = "";
                        $more_details_btn = "";
                        $tranx_id = $u->transaction_id;

                        if($u->type=="7"){
                            $interswitch_tranx_ref = $u->captured_transaction_id;
                            //if($u->payment_status=="Success"){
                                $clickfunction = 'reQueryEvent("'.$tranx_id.'")';
                                $requery_btn = "<a style='color:blue' href='javascript:".$clickfunction."'>ReQuery</a>";
                            //}
                        }
                        $clickfunctionM = 'moreDetailsEvent("'.$tranx_id.'")';
                        $more_details_btn = "<a href='javascript:".$clickfunctionM."'>MoreDetails</a>";
                    
                    ?>	  
		   		    
		    <!--<td align="center"><span class="align"><?php echo $commission*$u->quantity; ?></span></td>  -->
		    <?php /*$tot_commission +=$commission*$u->quantity; */ ?>
		    <td align="center"><?php echo $u->shippingamount; ?></td>
		    <?php /**<td align="center"><?php echo $u->tax_amount; ?></td> */ ?>
		    <?php $tot_shipping +=$u->shippingamount; ?>
		    <?php $tot_tax +=$u->tax_amount; ?>
		    <?php if(($this->uri->segment(2) == "view-deal")&&($this->uri->segment(2) == "view-products")){  ?>	
		    <td ><span class="align"><?php echo $u->transaction_id; ?></span></td>
		   <?php }?>
                    
                    <td><?php echo $tranx_id; ?></td>
                    <td style="text-align: center"><?php echo $interswitch_tranx_ref; ?></td>
                    
                    
		    <?php if(($this->uri->segment(2) == "view-deal")||($this->uri->segment(2) == "view-products")||($this->uri->last_segment() == "all-transaction.html")||($this->uri->segment(2) == "all-transaction")){  ?>
                    <td style="text-align: center;">
                        
                    <?php if($u->payment_status=="Completed") {
                        //$tot_amount_success +=($u->deal_value)*$u->quantity;
                        $tot_amount_success +=($u->amount)*$u->quantity;
                                echo "<span style='color:green'>".$this->Lang['COMPLETED']."</span>";
                            ?>

                    <?php } elseif($u->payment_status=="Failed") {
                                echo "<span style='color:red'>".$this->Lang['FAILED']."</span>";
                            } else { ?>
                            <select onchange="return product_change_status('<?php echo @$u->email; ?>','<?php echo $u->firstname; ?>',this.value,'<?php echo $u->transaction_id; ?>','<?php echo $u->product_id; ?>','<?php echo $u->merchant_id; ?>','1')">
                                <option value="Pending" <?php if($u->payment_status=="Pending"){ ?> selected <?php } ?>><?php echo $this->Lang['PENDING']; ?></option>
                                    <option value="Completed" <?php if($u->payment_status=="Completed"){ ?> selected <?php } ?>><?php echo $this->Lang['COMPLETED']; ?></option>
                                    <option value="Failed" <?php if($u->payment_status=="Failed"){ ?> selected <?php } ?>><?php echo $this->Lang['FAILED']; ?></option>
                            </select>
                            <?php } ?>                        
                    <!--<span class="align">
		    <?php if($u->payment_status=="SuccessWithWarning"){ echo '<span class="clor">'. $this->Lang["SUCCESS"] .'</span>'; } ?>
		    <?php if($u->payment_status=="Completed"){ echo '<span class="clor3">'. $this->Lang["COMPLETED"] .'</span>'; } ?>
		    <?php if($u->payment_status=="Success"){ echo '<span class="clor">'. $this->Lang["SUCCESS"] .'</span>'; } ?>
		    <?php if($u->payment_status=="Pending"){ echo '<span class="clor4">'.$this->Lang["PENDING"].'</span>'; } ?>
                    <?php if($u->payment_status=="Pending"){ echo '<span class="clor4"></span>'; } ?>
		    <?php if($u->payment_status=="Failed"){ echo '<span class="clor4">Failed</span>'; } ?>
		    </span>-->
                        
                        
                        
                        <br /><?php echo $more_details_btn; ?></td>
		    <?php } ?>

			
                    <td align="left"><?php echo date('d-M-Y h:i:s',$u->transaction_date); ?></td>
                    <td style="text-align: center"><span class="align">
		    <?php if($u->type=="1"){ echo '<span class="clor2">'. $this->Lang["PPAL_CRDT"] .'</span>'; } ?>
		    <?php if($u->type=="2"){ echo '<span class="clor2">'. $this->Lang["PPAL"] .'</span>'; } ?>
		    <?php if($u->type=="3"){ echo '<span class="clor2">'. $this->Lang["REF_PAYMENT"] .'</span>'; } ?>
		    <?php if($u->type=="4"){ echo '<span class="clor2">'. "Authorize.net(".$u->transaction_type.")" .'</span>'; } ?>
		    <?php if($u->type=="5"){ echo '<span class="clor2">'.$u->transaction_type.'</span>'; } ?>
		     <?php if($u->type=="6"){ echo '<span class="clor2">'. $this->Lang["PAY_LATER"] .'</span>'; } ?>
		    <?php if($u->type=="7"){ echo '<span class="clor2">'. $u->transaction_type .
                            '</span><br /><span style="font-size:89%; color:blue;">'.$requery_btn.'<span>'; } ?>
		    </span></td>
		   
            <?php  $i++;} ?> 
        </table> 
</div>
                <div class="table_over_flow">
        <table class="list_table fl clr mt20">
            
           <th align="left" >
           <fieldset>
    		<legend><?php echo $this->Lang["PAYMENT_DETAILS"]; ?></legend>
         <div class="value_total_in">
           
           <div class="value_amount"><p align="left"> <?php echo $this->Lang["TOT_PURC_QUAN"]; ?> </p> <b>:</b><span align="center"><?php echo $tot_quan; ?></span></div>
            <div class="value_amount"><p align="left"><?php echo $this->Lang["TOT_PURC_AMOUNT"]; ?> </p><b>:</b><span align="center"> <?php echo CURRENCY_SYMBOL.number_format($tot_amount+$tot_shipping+$tot_tax); ?> </span></div>
            
           <!--<div class="value_amount"><p align="left"><?php echo $this->Lang["TOT_ADM_COMM"]; ?> </p><b>:</b><span align="center"> <?php echo CURRENCY_SYMBOL.$tot_commission; ?> </span></div>-->
           
            <div class="value_amount"><p align="left"><?php echo $this->Lang["TOT_MER_AMOU"]; ?> </p><b>:</b><span align="center"> <?php echo CURRENCY_SYMBOL.  number_format($tot_amount_success-$tot_commission); ?> </span></div>
           
           <div class="value_amount"><p align="left"><?php echo $this->Lang['TOTA_SHIPP_AMOUNT']; ?> </p><b>:</b><span align="center"> <?php echo CURRENCY_SYMBOL.number_format($tot_shipping); ?> </span></div>
           
           <?php /**<div class="value_amount"><p align="left"><?php echo $this->Lang['TOT_TAX_AMOUN']; ?> </p><b>:</b><span align="center"> <?php echo CURRENCY_SYMBOL.($tot_tax); ?> </span></div> */ ?>
             </th>       
             
            </div> 
           </fieldset>
            </table>
                </div> 
<div id="dialog" title="ReQuery / ReConfirm Transaction" style="display:none;">
    <div id="dialog_content" style="margin:5px auto; width:100%; text-align:center;">Please wait ....... </div>
</div>

  <?php } else{?><p class="nodata"><?php echo $this->Lang['NOTRANSFOUND']; ?></p><?php }?>
  <script>
  $(function() {
    $( "#dialog" ).dialog({
        width: 500,
      autoOpen: false,
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
  });
  
  function moreDetailsEvent(tranx_id){
      transact_id = tranx_id;
      $('#dialog').dialog('option', 'title', 'More Details for Transaction ID : '+tranx_id);
      $("#dialog_content").html("Please wait .......");
      $( "#dialog" ).dialog( "open" );
      setTimeout(loadMoreDetails, 1000);
  }
  var transact_id = "";
  function reQueryEvent(tranx_id){
      transact_id = tranx_id;
      $('#dialog').dialog('option', 'title', 'ReQuery / ReConfirm Transaction ID : '+tranx_id);
      $("#dialog_content").html("Please wait .......");
      $( "#dialog" ).dialog( "open" );
      setTimeout(loadConfirm, 1000);
  }
  
  function loadConfirm(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { 
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    //alert("here");
    var params = "transaction_id="+transact_id;
    xmlhttp.open("POST","<?php echo PATH; ?>/webpay/ajax_confirm.html",false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", params.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(params);
    $("#dialog_content").html(xmlhttp.responseText); 
  }
  
  function loadMoreDetails(){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { 
        // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    //alert("here");
    var params = "transaction_id="+transact_id;
    xmlhttp.open("POST","<?php echo PATH; ?>/webpay/ajax_more_details.html",false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", params.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(params);
    $("#dialog_content").html(xmlhttp.responseText);       
  }

  </script>
