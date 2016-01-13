<ul>
<?php 
if(count($this->online_users_list)>0) {
	foreach($this->online_users_list as $u) { 
		 ?>
	 <li>      
	<a  <?php if($u->online_status==1) { if($this->session->get("chatuserid")) {  ?> class="online" href="javascript:chatWith('<?php echo $u->nickname_url; ?>','<?php echo $u->user_id; ?>',1,'<?php echo $this->session->get("chatusername"); ?>','<?php echo $this->session->get("chatuserid"); ?>');" <?php } else { ?> class="online" href="javascript:chat_detail_popup('<?php echo $u->nickname_url; ?>','<?php echo $u->user_id; ?>');"   <?php } } else {  ?> class="offline" href="javascript:chat_offline(<?php echo $u->user_id; ?>,1);" <?php }?> title="<?php echo $u->nickname_url; ?>">
	<span><?php echo $u->nickname; ?></span>
	</a>
</li>
<?php 		
	}
} else { ?>
	 <li>  <span style="text-align:center; float:right;"> Sorry.Currently service is unavailable !</span>
<?php } ?>
</ul>

