<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
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
<div class="wrapper">
    <div class="container">
        <div class="row ">
           

            
        </div>
    </div>
</div>

 <?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";

//    if(count($this->merchant_personalised_details)>0) { 
//            foreach($this->merchant_personalised_details as $m) {  
//                    $font_color = "color:".$m->font_color.";";
//                    $bg_color ="background:".$m->bg_color.";";
//                    $font_size = $m->font_size."px";
//            } 
//    }	 
?>
<!-- BAR -->
<div class="bar-wrap">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="title-bar">
                    <h1><?php echo $this->title_display; ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BAR -->
                
<div class="product_wrap">
    <div class="container">
        <div class="row">
            <div class="span10">
                <div class=" clearfix">
                    <div class="productsss">
                    <?php echo new View("themes/" . THEME_NAME . "/".$this->theme_name."/store_product_list"); ?>
                            <span  id="product">
                            </span>
                    </div>
                    <?php if(($this->all_products_count > 12)) { ?>
                        <div id="loading">
                        <?php if (($this->pagination) != "") { ?>
                                        <div class="feature_viewmore text-center">
                                                <div class="fea_view_more text-center">                                                
                                                        <a class="view_more view_more1 view_more_but" onclick="viewMore();">
                                                                <span class="view_more_icon">- - -</span><?php echo $this->Lang['SEE_M_PROD']; ?><span class="view_more_icon">- - -</span>
                                                        </a> 
                                                </div>
                                        </div>
                                <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="span2">
 <?php if (count($this->ads_details) > 0) { ?>   
        <?php foreach ($this->ads_details as $ads) { ?>    
    <?php if ($ads->ads_position == "hr1" && $ads->page_position==1) {  ?>                     
      <div class="banner_right_add wloader_parent">
          <i class="wloader_img" style="min-height:250px;">&nbsp;</i>
                                                     <a   href="<?php echo $ads->redirect_url; ?>" target="_blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
                                                    <?php /*<iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138286787903644940' frameborder=0 height=250 width=300></iframe>  */ ?>
      </div>
 <?php } } }?>
                <div class='clearfix' ></div>
 <?php if (count($this->ads_details) > 0) { ?>   
    <?php foreach ($this->ads_details as $ads) {
          if($ads->ads_position == "hr2" && $ads->page_position==1) {  ?>   
 <div class="banner_right_add2 wloader_parent" style='margin-top: 10px; margin-bottom:10px;'>
              <i class="wloader_img" style="min-height:250px;">&nbsp;</i>
                                                         <a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
                                                        <?php /*<iframe src='http://www.flipkart.com/affiliate/displayWidget?affrid=WRID-138286787903644940' frameborder=0 height=250 width=300></iframe>  */ ?>
          </div>
 <?php } } } ?>  
                    <?php if (count($this->ads_details) > 0 ) {
						foreach ($this->ads_details as $ads) {
							if ($ads->ads_position == "hs1" && $ads->page_position==1) {  ?>
							<div class="new_list_rgt">
								<a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
							</div>
                    <?php }}}?>
                    <?php if (count($this->ads_details) > 0 ) {
						foreach ($this->ads_details as $ads) {
							if ($ads->ads_position == "hs2" && $ads->page_position==1) {  ?>
                <div class="new_list_rgt" style="margin-top:10px;">
								<a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
							</div>
                    <?php }}}?>
                    <?php if (count($this->ads_details) > 0 ) {
						foreach ($this->ads_details as $ads) {
							if ($ads->ads_position == "hs7" && $ads->page_position==1) {  ?>
							<div class="new_list_rgt" style="margin-top:10px;">
								<a href="<?php echo $ads->redirect_url; ?>" target="blank" title="<?php echo ucfirst($ads->ads_title); ?>"><img src="<?php echo PATH; ?>images/ad_image/<?php echo $ads->ads_id; ?>.png " /></a>
							</div>
                    <?php }}}?>
            </div>
        </div>
    </div>
</div>
            
            
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


<input type="hidden" name="offset" id="offset" value="12" />
<input type="hidden" name="record" id="record" value="12" />
<input type="hidden" name="record1" id="record1" value="<?php echo $this->all_products_count; ?>" />
<script>
function viewMore(){
		var offset = 0;
		offset = document.getElementById('offset').value;
		var record = document.getElementById('record').value;
		var record1 = document.getElementById('record1').value;
                
		var url = '<?php echo PATH; ?>' + '<?php echo $this->theme_name;?>/all_product_list/<?php echo $this->storeurl;?>/'+ offset + '/' + record+'/'+'<?php echo $this->cat_type; ?>'+'/'+'<?php echo $this->category_url; ?>'+'/'+'<?php echo $this->search_key;?>' + '/' + '<?php echo $this->search_cate_id;?>';
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
}

$(document).ready(function() {
//	$('a.view_more1').live("click", function(e) {
// 
//	}); 
});
</script>
