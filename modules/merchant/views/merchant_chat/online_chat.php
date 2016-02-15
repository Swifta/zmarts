<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="bread_crumb"><a href="<?php echo PATH.'admin.html'; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
      
    <?php if(count($this->contacts_list)>0){?>
        <div class="table_over_flow">
        <table class="list_table fl clr mt15">
            <tr>
                <th align="left" ><?php echo $this->Lang['S_NO']; ?></th>
                <th align="left" ><?php echo $this->Lang['NAME']; ?></th>
                <th align="left" ><?php echo $this->Lang['EMAIL_F']; ?></th>
                 
                <th align="left" ><?php echo $this->Lang['CONV']; ?></th>
               <th align="left" ><?php echo $this->Lang['MSGG']; ?></th>
				<th align="left" ><?php echo $this->Lang['DAT_TIM']; ?></th>
                
            </tr>
            <?php $i=0; $first_item = $this->pagination->current_first_item;

                foreach($this->contacts_list as $u){ ?>
                <tr>    
                <td align="left"><?php echo $i+$first_item; ?></td>
                <td align="left"><?php echo htmlspecialchars($u->from1); ?></td>
                <td align="left"><?php echo $u->chat_email; ?></td>
				
                <td align="left" ><a href='<?php echo PATH."merchant/view-conversation/".$u->sellerid."/".$u->from1.".html"; ?>'><?php echo $this->Lang['VIEW_DET']; ?></a></td>	
 <td align="left"> 
 <script>
		
		 $(document).keyup(function(e) {
                if (e.keyCode == 27) 
                  {
                        $('.popup_block_con').hide();
                        $('.popup_show1').hide();
                 } 
                });
                $(document).ready(function(){
                $('.popup_show1').hide();
                $('a#show-panel<?php echo $u->id; ?>').click(function(){ 
                //$('div#panel').hide();
                $('#fade').css({'visibility' : 'visible'});
                $('#lightbox-panel<?php echo $u->id; ?>').show();
                })
                $('a#showmessage-panel<?php echo $u->id; ?>').click(function(){ 
                //$('div#panel').hide();
                $('#showmessage-panel<?php echo $u->id; ?>').show();
                })
                $('a#showmessage-panel-close<?php echo $u->id; ?>').click(function(){ 
                //$('div#panel').hide();
                $('#showmessage-panel<?php echo $u->id; ?>').hide();
                 $('.popup_show1').hide();
                })


$('#cancel').click(function(){ 
$('#em').text(''); 

})

});

</script>
	<?php if($u->chat_userid !=0) { 
				if($u->chat_user_status ==1) {   ?> 
				<?php /*
				<a href="javascript:chatWith('<?php echo $u->from1; ?>','<?php echo $u->chat_userid; ?>',1);" > <?php  echo $this->Lang["ON_LINE"];  ?> </a>
				*/ ?>
				<a id="show-panel<?php echo $u->id; ?>" title="<?php echo $this->Lang['SEND_MAIL']; ?>"  href="javascript:;"><img src="<?php echo PATH;?>images/mail.png"><input type="hidden" name="email1" id="mail" value="<?php echo $u->chat_email; ?>"></a>
			<?php	} elseif($u->chat_user_status==0) { ?> 
				<a id="show-panel<?php echo $u->id; ?>" title="<?php echo $this->Lang['SEND_MAIL']; ?>"  href="javascript:;"><img src="<?php echo PATH;?>images/mail.png"><input type="hidden" name="email1" id="mail" value="<?php echo $u->chat_email; ?>"></a>
			<?php } } else {  ?>
				<a id="show-panel<?php echo $u->id; ?>" title="<?php echo $this->Lang['SEND_MAIL']; ?>"  href="javascript:;"><img src="<?php echo PATH;?>images/mail.png"><input type="hidden" name="email1" id="mail" value="<?php echo $u->chat_email; ?>"></a>
			<?php } ?>
	<div class="popup_show popup_block_con" id="lightbox-panel<?php echo $u->id; ?>" style="display:none;">
	<form method="post"  class="admin_form">
                <table>
			
                        <tr>
                            <td><label><?php echo $this->Lang['EMAIL_F']; ?></label></td>
                            <td><label>:</label></td>
		            <td><input type="text" name="email" value="<?php echo $u->chat_email; ?> " readonly >
		             <input type="hidden" name="name" value="<?php echo htmlspecialchars($u->from1); ?>" readonly >
                            </td>
                        </tr>
	
                        <tr>
                            <td><label><?php echo $this->Lang['ENTR_MSG']; ?></label></td>
                            <td><label>:</label></td>
		            <td><textarea class="TextArea" name="message" id="msg" cols=15 rows=10 /></textarea>
		                 <em id="em"><?php if(isset($this->form_error['message'])){ echo $this->form_error["message"]; }?></em>
			    </td>
                        </tr>
                        <tr>
                             <td></td>
                             <td></td>
                             <td><input type="submit" value="<?php echo $this->Lang['SEND']; ?>" id="submit<?php echo $u->id; ?>"> <input type="reset" id="cancel" value="<?php echo $this->Lang['CANCEL']; ?>" onclick="javascript:window.location='<?php echo PATH; ?>merchant/online-chat.html'" />
			     </td>
                        </tr>
                </table>
        </form>
	</div>
 </td>
 <td align="left"><?php echo $u->last_update; ?></td>
				
               
                </tr>
            <?php $i++;} ?>   
        </table>
    </div>
<?php } else{?><p class="nodata"><?php echo $this->Lang["NO_DATA"]; ?></p><?php }?>
     <?php echo $this->pagination; ?>    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
 
</div>



