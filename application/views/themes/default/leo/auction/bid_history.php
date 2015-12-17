
           <div class="bid content history">
           
           <table>
              
           <tr><td colspan="2" style="text-align:center" class="label to_bid">Latest bidder(s).</td></tr>
          	<?php $i = 1;  foreach ($this->transaction_details as $tran) { ?>
            
            <?php if($i == 10){ break; }?>
            
            <?php if($i%2 ==1){?>
            <tr class="gray"><td class="label"><?php echo $tran->firstname; ?> <?php echo $tran->lastname; ?><br /><i><?php echo date("d-m-Y h:i:s A", $tran->transaction_date); ?></i></td><td class="value"><?php echo CURRENCY_SYMBOL . " " . $tran->bid_amount; ?></td></tr>
			<?php } else {?>
			 <tr class="normal"><td class="label"><?php echo $tran->firstname; ?> <?php echo $tran->lastname; ?> <br /><i><?php echo date("d-m-Y h:i:s A", $tran->transaction_date); ?></i></td><td class="value"><?php echo CURRENCY_SYMBOL . " " . $tran->bid_amount; ?></td></tr>
			<?php } ?>
             
             <?php $i++; } ?>
            
            <!--<tr class="gray"><td class="label">O'neal McJon <i>21-09-2015 03:06:27 PM</i></td><td class="value">N 449</td></tr>-->
            <tr><td colspan="2" style="text-align:center" class="label to_bid">Total of <b><?php echo count($this->transaction_details); ?></b> bid(s) made so far.</td></tr>
            
           </table>
           </div>
           
           
           
            <!-- Highest bidder and amount -->
          
        
          
          <!-- Refresh popup with details -->
          
          
           
           
           
