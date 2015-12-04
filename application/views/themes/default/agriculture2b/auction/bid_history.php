
           <div class="bid content history" style="backgroundx: #F00; width:auto;">
           
           <table style="backgroundx: #F0F;">
              
           <tr ><td colspan="3" style="text-align:center; backgroundx:#009;" class="to_bid"><b>Latest bidder(s)</b></td></tr>
          <!-- <tr class="gray"><td >O'neal McJon <i>---21-09-2015 03:06:27 PM---</i></td><td class="value">N 449</td></tr>
           <tr class="gray"><td >O'neal McJon <i>---21-09-2015 03:06:27 PM---</i></td><td class="value">N 449</td></tr>-->
          	<?php $i = 1;  foreach ($this->transaction_details as $tran) { ?>
            
            <?php if($i == 10){ break; }?>
            
            <?php if($i%2 ==1){?>
            <tr class="gray"><td class="name"><?php echo $tran->firstname; ?> <?php echo $tran->lastname; ?><i>---<?php echo date("d-m-Y h:i:s A", $tran->transaction_date); ?>---</i></td><td class="space-dots">-------</td><td class="value"><?php echo CURRENCY_SYMBOL . " " . $tran->bid_amount; ?></td></tr>
			<?php } else {?>
			 <tr class="normal"><td class="name"><?php echo $tran->firstname; ?> <?php echo $tran->lastname; ?> <i>---<?php echo date("d-m-Y h:i:s A", $tran->transaction_date); ?>---</i></td><td class="space-dots">-------</td><td class="alt value"><?php echo CURRENCY_SYMBOL . " " . $tran->bid_amount; ?></td></tr>
			<?php } ?>
             
             <?php $i++; } ?>
            
            
            <tr><td colspan="3" style="text-align:center" class="to_bid last_msg">Overall Total of <b><?php echo count($this->transaction_details); ?></b> bid(s) made so far.</td></tr>
            
           </table>
           </div>
           
           
           
            <!-- Highest bidder and amount -->
          
        
          
          <!-- Refresh popup with details -->
          
          
           
           
           
