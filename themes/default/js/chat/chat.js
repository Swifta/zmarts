/*

Copyright (c) 2009 Anant Garg (anantgarg.com | inscripts.com)

This script may be used for non-commercial purposes only. For any
commercial purposes, please contact the author at
anant.garg@inscripts.com

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

*/
/* var scripts = document.getElementsByTagName("script");
SrcPath = scripts[0].src;
Path = SrcPath.replace("/js/jquery.js","");*/
var windowFocus = true;
var username;
var image;
var chatHeartbeatCount = 0;
var minChatHeartbeat = 1000;
var maxChatHeartbeat = 33000;
var chatHeartbeatTime = minChatHeartbeat;
var originalTitle;
var blinkOrder = 0;

var chatboxFocus = new Array();
var newMessages = new Array();
var newMessagesWin = new Array();
var chatBoxes = new Array();

	
$(document).ready(function(){

	originalTitle = document.title;
	startChatSession();

	$([window, document]).blur(function(){
		windowFocus = false;
	}).focus(function(){
		windowFocus = true;
		document.title = originalTitle;
	});
});

function restructureChatBoxes() {
	align = 0;
	for (x in chatBoxes) {
		chatboxtitle = chatBoxes[x];

		if ($("#chatbox_"+chatboxtitle).css('display') != 'none') {
			if (align == 0) {
				$("#chatbox_"+chatboxtitle).css('right', '245px');
			} else {
				width = (align)*(225+7)+20;
				$("#chatbox_"+chatboxtitle).css('right', width+'px');
			}
			align++;
		}
	}
}

function chatWith(chatuser,sellerid,chattype,cus_name,cus_id) {

	createChatBox(chatuser,'',sellerid,chattype,cus_name,cus_id);
	$("#chatbox_"+chatuser+" .chatboxtextarea").focus();
}

function createChatBox(chatboxtitle,minimizeChatBox,sellerid,chattype,cus_name,cus_id) {
	if ($("#chatbox_"+chatboxtitle).length > 0) {
		if ($("#chatbox_"+chatboxtitle).css('display') == 'none') {
			$("#chatbox_"+chatboxtitle).css('display','block');
			restructureChatBoxes();
		}
		$("#chatbox_"+chatboxtitle+" .chatboxtextarea").focus();
		return;
	}


	$(" <div />" ).attr("id","chatbox_"+chatboxtitle)
	.addClass("chatbox")
      //.html('<div class="chatboxhead"><div class="chatboxtitle">'+chatboxtitle+'</div><div class="chatboxoptions"><a href="javascript:void(0)" onclick="javascript:toggleChatBoxGrowth(\''+chatboxtitle+'\')">-</a> <a href="javascript:void(0)" onclick="javascript:closeChatBox(\''+chatboxtitle+'\')">X</a></div><br clear="all"/></div><div class="chatboxcontent"></div><div class="chatboxinput"><textarea class="chatboxtextarea" onkeydown="javascript:return checkChatBoxInputKey(event,this,\''+chatboxtitle+'\');"></textarea></div>')
	.html('<form><div class="chatboxhead"><div class="chatboxtitle"><h1><a class="maxmize" onclick="javascript:MinimizeChatBox(\''+chatboxtitle+'\',2)">Support</a></h1><a class="minimize" onclick="javascript:MinimizeChatBox(\''+chatboxtitle+'\',1)"> - </a></div></div><div class="online_options_userlist"><div class="chat_title_top"><div class="chat_title_des"><span>'+chatboxtitle+'</span><div class="chatboxoptions"><a href="javascript:void(0)" onclick="javascript:closeChatBox(\''+chatboxtitle+'\')">X</a></div></div></div><div class="chat_title_top_scroll"><ul><li><div class="chatboxcontent"></div></li></ul></div><div class="chatboxinput"><textarea class="chatboxtextarea" onkeydown="javascript:return checkChatBoxInputKey(event,this,\''+chatboxtitle+'\',\''+sellerid+'\',\''+chattype+'\',\''+cus_name+'\',\''+cus_id+'\');"></textarea></div><input type="hidden" name="sel_id" value="'+sellerid+'" ><input type="hidden" name="chattype" value="'+chattype+'" ><input type="hidden" name="receiver_name" id="receiver_name" value="'+chatboxtitle+'" ><input type="hidden" name="cus_id" id="cus_id" value="'+cus_id+'" ></div></div></div></form>')
	.appendTo($( "body" ));

	$("#chatbox_"+chatboxtitle).css('bottom', '0px');

	chatBoxeslength = 0;

	for (x in chatBoxes) {
		if ($("#chatbox_"+chatBoxes[x]).css('display') != 'none') {
			chatBoxeslength++;
		}
	}

	if (chatBoxeslength == 0) {
		$("#chatbox_"+chatboxtitle).css('right', '245px');
	} else {
		width = (chatBoxeslength)*(453+7)+20;
		$("#chatbox_"+chatboxtitle).css('right', width+'px');
	}

	chatBoxes.push(chatboxtitle);

	if (minimizeChatBox == 1) {
		minimizedChatBoxes = new Array();

		if ($.cookie('chatbox_minimized')) {
			minimizedChatBoxes = $.cookie('chatbox_minimized').split(/\|/);
		}
		minimize = 0;
		for (j=0;j<minimizedChatBoxes.length;j++) {
			if (minimizedChatBoxes[j] == chatboxtitle) {
				minimize = 1;
			}
		}

		if (minimize == 1) {
			$('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display','none');
			$('#chatbox_'+chatboxtitle+' .chatboxinput').css('display','none');
		}
	}

	chatboxFocus[chatboxtitle] = false;

	$("#chatbox_"+chatboxtitle+" .chatboxtextarea").blur(function(){
		chatboxFocus[chatboxtitle] = false;
		$("#chatbox_"+chatboxtitle+" .chatboxtextarea").removeClass('chatboxtextareaselected');
	}).focus(function(){
		chatboxFocus[chatboxtitle] = true;
		newMessages[chatboxtitle] = false;
		$('#chatbox_'+chatboxtitle+' .chatboxhead').removeClass('chatboxblink');
		$("#chatbox_"+chatboxtitle+" .chatboxtextarea").addClass('chatboxtextareaselected');
	});

	$("#chatbox_"+chatboxtitle).click(function() {
		if ($('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display') != 'none') {
			$("#chatbox_"+chatboxtitle+" .chatboxtextarea").focus();
		}
	});

	$("#chatbox_"+chatboxtitle).show();
}


function chatHeartbeat(){

	var itemsfound = 0;
	var sel_id = $('input[name=sel_id]').val();
	var chattype = $('input[name=chattype]').val();
	var receiver_name = $('input[name=receiver_name]').val();
	var cust_id = $('input[name=cus_id]').val();
	//var sel_id = 0;
	if((sel_id == '') || (sel_id == 'undefined')) {
		sel_id=1;
	}
	if (windowFocus == false) {

		var blinkNumber = 0;
		var titleChanged = 0;
		for (x in newMessagesWin) {
			if (newMessagesWin[x] == true) {
				++blinkNumber;
				if (blinkNumber >= blinkOrder) {
					document.title = x+' says...';
					titleChanged = 1;
					break;
				}
			}
		}

		if (titleChanged == 0) {
			document.title = originalTitle;
			blinkOrder = 0;
		} else {
			++blinkOrder;
		}

	} else {
		for (x in newMessagesWin) {
			newMessagesWin[x] = false;
		}
	}

	for (x in newMessages) {
		if (newMessages[x] == true) {
			if (chatboxFocus[x] == false) {
				//FIXME: add toggle all or none policy, otherwise it looks funny
				$('#chatbox_'+x+' .chatboxhead').toggleClass('chatboxblink');
			}
		}
	}

	$.ajax({
	  url: Path+"/chat.php?action=chatheartbeat&receiver_name="+receiver_name+"&sel_id="+sel_id+"&cust_id="+cust_id,
	  cache: false,
	  dataType: "json",
	  success: function(data) {
		$.each(data.items, function(i,item){
			if (item)	{ // fix strange ie bug

				chatboxtitle = item.f;
				seller_name = item.t;
				chattype = item.ct;
				seller_id = item.sel;
				cust_id = item.cus_id;
				if ($("#chatbox_"+chatboxtitle).length <= 0) {
					startChatSession();
					//createChatBox(chatboxtitle);
					//createChatBox('pp','','14',chattype,'vinod','17');
					createChatBox(chatboxtitle,'',seller_id,chattype,seller_name,cust_id);
					
				}
				if ($("#chatbox_"+chatboxtitle).css('display') == 'none') {
					$("#chatbox_"+chatboxtitle).css('display','block');
					restructureChatBoxes();
				}

				if (item.s == 1) {
					item.f = username;

				}

				if (item.s == 2) {
					$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chatboxmessage"><span class="chatboxinfo">'+item.m+'</span></div>');
				} else {
					newMessages[chatboxtitle] = true;
					newMessagesWin[chatboxtitle] = true;

					//$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chatboxmessage"><span class="chatboxmessagefrom">'+item.f+'<br/>&nbsp;&nbsp;</span><span class="chatboxmessagecontent">'+item.m+'</span></div>');
					$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chat_title_top_scroll_common"><div class="seller_common scr_img_des_common"><span>'+item.f+'</span><div class="reply_box_1"><p>'+item.m+'</p></div></div></div>');

				}

				$("#chatbox_"+chatboxtitle+" .chatboxcontent").scrollTop($("#chatbox_"+chatboxtitle+" .chatboxcontent")[0].scrollHeight);
					$(".chat_title_top_scroll").animate({ scrollTop: $(".chat_title_top_scroll ul").height() }, "fast");
				itemsfound += 1;
			}
		});

		chatHeartbeatCount++;

		if (itemsfound > 0) {
			chatHeartbeatTime = minChatHeartbeat;
			chatHeartbeatCount = 1;
		} else if (chatHeartbeatCount >= 10) {
			chatHeartbeatTime *= 2;
			chatHeartbeatCount = 1;
			if (chatHeartbeatTime > maxChatHeartbeat) {
				chatHeartbeatTime = maxChatHeartbeat;
			}
		}

		setTimeout('chatHeartbeat();',chatHeartbeatTime);
	}});
}

function closeChatBox(chatboxtitle) {
	var id = $('input[name=sel_id]').val();
	var conversation = "";

	/*$('.chat_title_top_scroll_common').each( function(){

			alert($(this).find('.buyer_common a').html());
			alert($(this).find('.seller_common p').html());
			alert($(this).find('.seller_common a').html());
			/*alert($(this+'.buyer_common a').html());
			alert($(this+'.seller_common p').html());
			alert($(this+'.seller_common p').html()); */


	//	});
	var conversation = $('#chatbox_'+chatboxtitle+' .chatboxcontent').html();
	//conversation = conversation.split('<div class="chat_title_top_scroll_common">');
	//console.log(conversation); return false;
	$('#chatbox_'+chatboxtitle).css('display','none');
	restructureChatBoxes();

	$.post(Path+"/chat.php?action=closechat", { chatbox: chatboxtitle , msg: message} , function(data){
	});
	$.post(Path+"online_chat/chat_conversation?action=closechat", { chatbox: chatboxtitle , msg: message,conv: conversation,id:id} , function(data){	 //alert(data);

	});

}

function toggleChatBoxGrowth(chatboxtitle) {
	if ($('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display') == 'none') {

		var minimizedChatBoxes = new Array();

		if ($('chatbox_minimized').cookie) {
			minimizedChatBoxes = $.cookie('chatbox_minimized').split(/\|/);
		}

		var newCookie = '';

		for (i=0;i<minimizedChatBoxes.length;i++) {
			if (minimizedChatBoxes[i] != chatboxtitle) {
				newCookie += chatboxtitle+'|';
			}
		}

		newCookie = newCookie.slice(0, -1)


		//$.cookie('chatbox_minimized', newCookie);
		$('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display','block');
		$('#chatbox_'+chatboxtitle+' .chatboxinput').css('display','block');
		$("#chatbox_"+chatboxtitle+" .chatboxcontent").scrollTop($("#chatbox_"+chatboxtitle+" .chatboxcontent")[0].scrollHeight);
	} else {

		var newCookie = chatboxtitle;

		if ($('chatbox_minimized').cookie) {
			newCookie += '|'+$.cookie('chatbox_minimized');
		}


		//$.cookie('chatbox_minimized',newCookie);
		$('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display','none');
		$('#chatbox_'+chatboxtitle+' .chatboxinput').css('display','none');
	}

}

function checkChatBoxInputKey(event,chatboxtextarea,chatboxtitle,sellerid,chattype,cus_name,cus_id) {
	var id = $('input[name=sel_id]').val();
	if(event.keyCode == 13 && event.shiftKey == 0)  {
		message = $(chatboxtextarea).val();
		message = message.replace(/^\s+|\s+$/g,"");

		$(chatboxtextarea).val('');
		$(chatboxtextarea).focus();
		$(chatboxtextarea).css('height','44px');
		if (message != '') {
			$.post(Path+"/chat.php?action=sendchat", {to: chatboxtitle, message: message,customer_name: cus_name,customer_id :cus_id,sellid: sellerid,id:id,chattype: chattype, } , function(data){
				message = message.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\"/g,"&quot;");
				//item.im = image;
				//$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chatboxmessage"><span class="chatboxmessagefrom">'+username+'<br/></span><span class="chatboxmessagecontent">'+message+'</span></div>');
				$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chat_title_top_scroll_common"><div class="buyer_common scr_img_des"><span >'+cus_name+'</span><div class="reply_box"><p>'+message+'</p></div></div></div>');
				$("#chatbox_"+chatboxtitle+" .chatboxcontent").scrollTop($("#chatbox_"+chatboxtitle+" .chatboxcontent")[0].scrollHeight);
				$(".chat_title_top_scroll").animate({ scrollTop: $(".chat_title_top_scroll ul").height() }, "fast");
			});
		}
		chatHeartbeatTime = minChatHeartbeat;
		chatHeartbeatCount = 1;

		return false;
	}

	var adjustedHeight = chatboxtextarea.clientHeight;
	var maxHeight = 94;

	if (maxHeight > adjustedHeight) {
		adjustedHeight = Math.max(chatboxtextarea.scrollHeight, adjustedHeight);
		if (maxHeight)
			adjustedHeight = Math.min(maxHeight, adjustedHeight);
		if (adjustedHeight > chatboxtextarea.clientHeight)
			$(chatboxtextarea).css('height',adjustedHeight+8 +'px');
	} else {
		$(chatboxtextarea).css('overflow','auto');
	}

}

function startChatSession(){
	$.ajax({
	  url: Path+"/chat.php?action=startchatsession",
	  cache: false,
	  dataType: "json",
	  success: function(data) {

		username = data.username;
		image = data.image;

		$.each(data.items, function(i,item){
			if (item)	{ // fix strange ie bug

				chatboxtitle = item.f;

				if ($("#chatbox_"+chatboxtitle).length <= 0) {
					createChatBox(chatboxtitle,1);
				}

				if (item.s == 1) {
					item.f = username;
				}

				if (item.s == 2) {
					$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chatboxmessage"><span class="chatboxinfo">'+item.m+'</span></div>');
				} else {
					$("#chatbox_"+chatboxtitle+" .chatboxcontent").append('<div class="chatboxmessage"><span class="chatboxmessagefrom">'+item.f+':&nbsp;&nbsp;</span><span class="chatboxmessagecontent">'+item.m+'</span></div>');

				}
			}
		});

		for (i=0;i<chatBoxes.length;i++) {
			chatboxtitle = chatBoxes[i];
			$("#chatbox_"+chatboxtitle+" .chatboxcontent").scrollTop($("#chatbox_"+chatboxtitle+" .chatboxcontent")[0].scrollHeight);
			setTimeout('$("#chatbox_"+chatboxtitle+" .chatboxcontent").scrollTop($("#chatbox_"+chatboxtitle+" .chatboxcontent")[0].scrollHeight);', 100); // yet another strange ie bug
		}

	setTimeout('chatHeartbeat();',chatHeartbeatTime);
	
	}});
}

/**
 * Cookie plugin
 *
 * Copyright (c) 2006 Klaus Hartl (stilbuero.de)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 */

jQuery.cookie = function(name, value, options) {
    if (typeof value != 'undefined') { // name and value given, set cookie
        options = options || {};
        if (value === null) {
            value = '';
            options.expires = -1;
        }
        var expires = '';
        if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
            var date;
            if (typeof options.expires == 'number') {
                date = new Date();
                date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
            } else {
                date = options.expires;
            }
            expires = '; expires=' + date.toUTCString(); // use expires attribute, max-age is not supported by IE
        }
        // CAUTION: Needed to parenthesize options.path and options.domain
        // in the following expressions, otherwise they evaluate to undefined
        // in the packed version for some reason...
        var path = options.path ? '; path=' + (options.path) : '';
        var domain = options.domain ? '; domain=' + (options.domain) : '';
        var secure = options.secure ? '; secure' : '';
        document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
    } else { // only name given, get cookie
        var cookieValue = null;
        if (document.cookie && document.cookie != '') {
            var cookies = document.cookie.split(';');
            for (var i = 0; i < cookies.length; i++) {
                var cookie = jQuery.trim(cookies[i]);
                // Does this cookie string begin with the name we want?
                if (cookie.substring(0, name.length + 1) == (name + '=')) {
                    cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                    break;
                }
            }
        }
        return cookieValue;
    }
};
/* offline chat popup box */
function chat_offline(userid,type) 
{
	if(type==1) { // customer care
		document.offline_chat.customercareid.value=userid;
		document.offline_chat.seller_chatid.value='';
	} else if(type==2) { //seller
		document.offline_chat.customercareid.value='';
		document.offline_chat.seller_chatid.value=userid;
	}
	document.offline_chat.chat_usertype.value=type;
	$('#fade').css({'visibility' : 'visible'});
	$('.offlinechatpopup').css({'display' : 'block'});
}
/* Minimize and Expand chat box */
function MinimizeChatBox(chatboxtitle,minimizeChatBox) {
	if (minimizeChatBox == 1) {
		$('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display','none');
		$('#chatbox_'+chatboxtitle+' .chatboxinput').css('display','none');
	} else if (minimizeChatBox == 2) {
		$('#chatbox_'+chatboxtitle+' .chatboxcontent').css('display','block');
		$('#chatbox_'+chatboxtitle+' .chatboxinput').css('display','block');
	}
}

/* CHAT POPUP FOR NEW USERS */
function chat_detail_popup(chatuser,sellerid)
{
	
	document.chat.chat_email.value='';
	document.chat.chat_name.value='';
	$('#chat_email_error').html('');
	$('#chat_name_error').html('');
	$('#fade').css({'visibility' : 'visible'});
	$('.chatpopup').css({'display' : 'block'});
}

function chat_test()
{
	alert("testing");
}


