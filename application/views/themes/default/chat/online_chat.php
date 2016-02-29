<?php /* chat code starts */ ?>
<!--<div class="live_chat">
    <a class="cancle" style="float:right;" href="javascript:chat_hide();" title="<?php  ?>"> <?php echo "-"; ?></a>
    <a class="live_online" href="javascript:chat_popup();"> Online Live Chat </a>
    <div class="online_options_userlist">
        <div id="online_users" class="online_users">
        </div>
    </div>
</div>-->

<script type="text/javascript" >
function chat_hide()
{
	$('.online_users').hide();
}

function chat_popup() {
		var type = 1;
		$.post(Path+'online_chat/login_lists?type='+type, {
			}, function(response){
				$("#online_users").html(response);
				$('.online_users').show();
				
			});
}
</script>

<?php /* chat code ends */ ?>
