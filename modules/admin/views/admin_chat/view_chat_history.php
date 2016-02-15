<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="bread_crumb"><a href="<?php echo PATH.'admin.html'; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">
		<div class="history_scroll">
		<?php if(count($this->online_chat_history)>0){ 
			foreach($this->online_chat_history as $h) { ?>
			<div class="msg_history">
				<b><?php echo $h->from1; ?></b>
				<span><?php echo $h->sent; ?></span>
				<div class="history_bg">
				<p><?php echo $h->message; ?></p>
				</div>
			</div>
		
		<?php } } ?>
		</div>
		<a class="back_offline" href="<?php echo PATH.'admin/online-chat.html'; ?>" ><?php echo $this->Lang['BACK']; ?></a>
	</div>
	<div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>


