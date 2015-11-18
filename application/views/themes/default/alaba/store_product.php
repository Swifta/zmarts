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

<section class="breadcrumbs">
    <div class="container">
        <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">Products</a></li>
        </ul>
    </div>
</section>






<!--content-->
<div class="page_content_offset">
        <div class="container">
                <div class="row clearfix">
                        <!--left content column-->
                        <section class="col-lg-12 col-md-12 col-sm-12">
                                <hr class="m_bottom_10 divider_type_3">
                                <!--products-->
                            <section class="products_container category_grid clearfix m_bottom_15">
                    <!--<div class="productsss">-->
                            <?php echo new View("themes/" . THEME_NAME . "/".$this->theme_name."/store_product_list"); ?>
                            <span  id="product">
                            </span>
                    <!--</div>-->
                            </section>
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
                            <hr class="m_bottom_10 divider_type_3">

                    </section>
                    <!--right column-->
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
