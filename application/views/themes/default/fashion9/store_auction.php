<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>js/timer/kk_countdown_1_2_jquery_min_detail.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("body").kkCountDowndetail({
            colorText: '#7b7b7b',
            addClass: 'shadow'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("body").kkCountDown({
            colorText:'#000000',
            colorTextDay:'#000000'	
        });
         $('.submit-link')
               .click(function(e){ 
			$('input[name="c"]').val(btoa($(this).attr('id').replace('sample-','')));
			$('input[name="c_t"]').val('<?php echo base64_encode("main"); ?>');
                       e.preventDefault();
                       $(this).closest('form')
                               .submit();                                               
                });
        });
$(function() {
$(".slidetabs").tabs(".images > div", {
	effect: 'fade',
	fadeOutSpeed: "medium",
	rotate: true
}).slideshow();
});
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#messagedisplay1').hide();
    });
</script>
<!--Carousel Script-->
<!-- banner start-->
<section  class="homepage-slider" id="home-slider">
    <div class="flexslider">
            <ul class="slides">

<?php
$banner_check ="";
if(count($this->merchant_personalised_details)>0) { 
	foreach($this->merchant_personalised_details as $m) {  
                $tabs=0;
                for ($i = 1; $i <= 3; $i++) {
                    if (file_exists(DOCROOT . 'images/merchant/banner/' . $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png')) { 
                            $banner_link="";

                            if($m->banner_1_link !="" || $m->banner_2_link !="" || $m->banner_3_link !="") { 
                                $banner_check = 1;
                                if($i==1) { 
                                    $banner_link = $m->banner_1_link; 
                                } else if($i==2) { 
                                    $banner_link = $m->banner_2_link; 
                                } else if($i==3) { 
                                    $banner_link = $m->banner_3_link; 
                                }
                                
                            }
?>
<li>                                                                                
    <a href="<?php echo $banner_link; ?>"  title = "<?php echo $banner_link; ?>">
        <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH; ?>images/merchant/banner/<?php echo $m->storeid.'_'.$m->sector_name.'_'.$i.'_banner.png'; ?>"/>
    </a>
</li>
<?php
                    }
                    else{
                        //echo "No Image file";
?>
                <li>
                        <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-<?php echo $i; ?>.jpg" alt="" />
                </li>
<?php
                    }
                }
        }
}
else{?>

    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-1.jpg" alt="" />
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-2.jpg" alt="" />
            <div class="intro">
                    <h1>Mid season sale</h1>
                    <p><span>Up to 50% Off</span></p>
                    <p><span>On selected items online and in stores</span></p>
            </div>
    </li>
    <li>
            <img src="<?php echo PATH; ?>bootstrap/themes/images/carousel/banner-3.jpg" alt="" />
    </li>

<!-- display default banners-->
<?php
}
?>
            </ul>
    </div>
</section>

            <!-- banner end-->
 <?php 
				$font_color = "";
				$bg_color ="";
				$font_size ="";
				
//				if(count($this->merchant_personalised_details)>0) { 
//					foreach($this->merchant_personalised_details as $m) {  
//						$font_color = "color:".$m->font_color.";";
//						$bg_color ="background:".$m->bg_color.";";
//						$font_size = $m->font_size."px";
//					} 
//				}	 
                                
                                ?>
            
            
<section class="main-content" style="<?php echo $bg_color; ?>">
    <div class="row text-center">
        <h2 class=""><?php echo $this->title_display; ?></h2> 
    </div>
                <i class="wloader_img" style="min-height: 525px;">&nbsp;</i>
                <!--<div class="store_product" id="product">-->
<div class="row">
    <div class="span12">
<div class="row">
            <div class="span12">
<ul class="thumbnails text-center">
        


    <?php echo new View("themes/" . THEME_NAME . "/".$this->theme_name."/store_auction_list"); ?>
                
            
                
                    <span  id="product">
                    </span>
                

</ul>
                </div>
</div>
</div>
                <!--</div>-->
     
    <?php if(($this->all_auction_count > 12)) { ?>
        <div id="loading">
        <?php if (($this->pagination) != "") { ?>
                    <div class="feature_viewmore text-center">
                            <div class="fea_view_more text-center">                                                
                                    <a class="view_more view_more1 view_more_but">
                                            <span class="view_more_icon">- - -</span><?php echo $this->Lang['SEE_M_AUC']; ?><span class="view_more_icon">- - -</span>
                                    </a> 
                            </div>
                    </div>
                <?php } ?>
        </div>
    <?php } ?>
</div>
</section>
            



<section  id="messagedisplay1" style="display:none;">      
    <div class="session_wrap">
        <div class="session_container">
            <div class="success_session">
                <p><span ><?php echo $this->Lang['COMM_POST_SUCC']; ?>.</span></p>
                <div class="close_session_2">
                    <a class="closestatus cur" title="<?php echo $this->Lang['CLOSE']; ?>"  onclick="return closeerr();" >&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
</section>
            
            
<div class="store_subscribe_part_outer">
    <div class="store_subscribe_part">
        <div class="store_subscribe_part_inner">
            <h2>Subscribe</h2>
            <p>Subscribe to receive our news everyday !</p>
            <div class="sub_cont">
                <div class="sub_cont_inner">
                    <input type="text" name="store_subscriber" id="store_subscriber1"  placeholder="Enter Email Address" onkeypress="return check_color();" />
                     <input type="submit" onclick="return store_subscriber_validate1('<?php echo $this->storeurl;?>');" value=""/>
                    <input type="hidden" name="subscriber_store_id" id="subscriber_store_id1" value="<?php echo $this->storeid;?>"/>
                </div>  
                <em id="email_subscriber_error1"></em>
            </div>
        </div>
    </div>    
</div>
<input type="hidden" name="offset" id="offset" value="12">
<input type="hidden" name="record" id="record" value="12">
<input type="hidden" name="record" id="record1" value="<?php echo $this->all_auction_count; ?>">
<script>
function store_subscriber_validate1(store_url)
{
	var email = $("#store_subscriber1").val();
	var atpos=email.indexOf("@");
	var dotpos=email.lastIndexOf(".");
	var x=0;
	if(email == '') {
			$('.sub_cont_inner').css('border','1px solid red');
			x++;
		}
		else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
		{
			x++;
			$('.sub_cont_inner').css('border','1px solid red');
		}else {
			x=0;
			$('#email_subscriber_error1').html('');
		}
		if(x==0){
		var url= Path+'users/check_user_signup/?email='+email;
		$.post(url,function(check){
			if(check == -1){
				$('.sub_cont_inner').css('border','1px solid red');
				$("#store_subscriber1").val('');
				$("#store_subscriber1").attr('placeholder','<?php echo $this->Lang['EMAIL_EXIST']; ?>');
				return false;
			}
			add_store_email_subscriber(email,store_url);
			
		});
	}
	
}
function add_store_email_subscriber(email,store_url)
{
	var store_id=$("#subscriber_store_id1").val();
	var url= Path+'stores/user_subscriber_signup/?email='+email+'&store_id='+store_id+'&store_url='+store_url;
	$.ajax(
	{
		type:'POST',
		url:url,
		cache:false,
		async:true,
		global:false,
		dataType:"html",
		success:function(check)
		{
			window.location.href=Path+store_url+'/';
			
		},
		error:function()
		{
			
		}
	});
}
function check_color(){
	$('.sub_cont_inner').css('border','none');
	$('.sub_cont_inner').css('border-bottom','2px solid #404040');
}

$(document).ready(function() {
	$('a.view_more1').live("click", function(e) {
		var offset = 0;
		offset = document.getElementById('offset').value;
		var record = document.getElementById('record').value;
		var record1 = document.getElementById('record1').value;
		var url = '<?php echo PATH; ?>' + '<?php echo $this->theme_name;?>/all_auction_list/<?php echo $this->storeurl;?>/'+ offset + '/' + record+'/'+'<?php echo $this->cat_type; ?>'+'/'+'<?php echo $this->category_url; ?>'+'/'+'<?php echo $this->search_key;?>' + '/' + '<?php echo $this->search_cate_id;?>';
		$.post(url, function(check) {
			if (check) {
				$('#product').append(check);
				$('#loading').show();
				$('.wloader_img').hide();
				offset = parseInt(offset) + 12;
				$("#offset").val(offset);
				if (offset >= record1) {
					$('#loading').hide();
				}
			} 
		});  
	}); 
});
</script>

<style>
	.store_pro_list li{width:285px !important;}
</style>
