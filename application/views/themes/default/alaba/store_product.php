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
                        <section class="col-lg-9 col-md-9 col-sm-9">
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
                        <!--<div id="loading">
                        <?php if (($this->pagination) != "") { ?>
                                        <div class="feature_viewmore text-center">
                                                <div class="fea_view_more text-center">                                                
                                                        <a class="view_more view_more1 view_more_but" onclick="viewMore();">
                                                                <span class="view_more_icon">- - -</span><?php echo $this->Lang['SEE_M_PROD']; ?><span class="view_more_icon">- - -</span>
                                                        </a> 
                                                </div>
                                        </div>
                                <?php } ?>
                        </div>-->
                    <?php } ?>
                         <hr class="m_bottom_10 divider_type_3">
                    </section>
                        
                    <!--right column-->
                    


                    <aside class="col-lg-3 col-md-3 col-sm-3">
                            <!--widgets-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                            <h3 class="color_light">Filter</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                            <!--filter form-->
                                            <form>
                                                    <!--checkboxes-->
                                                    <fieldset class="m_bottom_15">
                                                            <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
                                                                    <b class="f_left">Manufacturers</b>
                                                                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                                            </legend>
                                                            <input type="checkbox" name="" id="checkbox_1" class="d_none"><label for="checkbox_1">Chanel</label><br>
                                                            <input type="checkbox" checked name="" id="checkbox_2" class="d_none"><label for="checkbox_2">Calvin Klein</label><br>
                                                            <input type="checkbox" name="" id="checkbox_3" class="d_none"><label for="checkbox_3">Prada</label><br>
                                                    </fieldset>
                                                    <!--price-->
                                                    <fieldset class="m_bottom_20">
                                                            <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
                                                                    <b class="f_left">Price</b>
                                                                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                                            </legend>
                                                            <div id="price" class="m_bottom_10"></div>
                                                            <div class="clearfix range_values">
                                                                    <input class="f_left first_limit" readonly name="" type="text" value="$0">
                                                                    <input class="f_right last_limit t_align_r" readonly name="" type="text" value="$250">
                                                            </div>
                                                    </fieldset>
                                                    <!--size-->
                                                    <fieldset class="m_bottom_15">
                                                            <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
                                                                    <b class="f_left">Size</b>
                                                                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                                            </legend>
                                                            <input type="radio" name="size" id="radio_1" class="d_none"><label for="radio_1">S</label><br>
                                                            <input type="radio" name="size" checked id="radio_2" class="d_none"><label for="radio_2">M</label><br>
                                                            <input type="radio" name="size" id="radio_3" class="d_none"><label for="radio_3">L</label><br>
                                                    </fieldset>
                                                    <!--color-->
                                                    <fieldset class="m_bottom_25 m_sm_bottom_20">
                                                            <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
                                                                    <b class="f_left">Color</b>
                                                                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                                            </legend>
                                                            <ul class="horizontal_list clearfix">
                                                                    <li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color red r_corners color_dark active"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
                                                                    <li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color blue r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
                                                                    <li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color green r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
                                                                    <li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color grey r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
                                                                    <li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color yellow r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
                                                            </ul>
                                                    </fieldset>
                                                    <fieldset class="m_bottom_25">
                                                            <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
                                                                    <b class="f_left">Weight</b>
                                                                    <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
                                                            </legend>
                                                            <div class="clearfix">
                                                                    <input type="text" name="" class="r_corners f_left type_2">
                                                                    <input type="text" name="" class="r_corners f_left type_2 m_left_10">
                                                            </div>
                                                    </fieldset>
                                                    <button type="reset" class="color_dark bg_tr text_cs_hover tr_all_hover"><i class="fa fa-refresh lh_inherit m_right_10"></i>Reset</button>
                                            </form>
                                    </div>
                            </figure>
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                            <h3 class="color_light">Categories</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                            <!--Categories list-->
                                            <ul class="categories_list">
                                                    <li class="active">
                                                            <a href="#" class="f_size_large scheme_color d_block relative">
                                                                    <b>Women</b>
                                                                    <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                            </a>
                                                            <!--second level-->
                                                            <ul>
                                                                    <li class="active">
                                                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                            </a>
                                                                            <!--third level-->
                                                                            <ul>
                                                                                    <li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Party Dresses</a></li>
                                                                            </ul>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                            </a>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                            </a>
                                                                    </li>
                                                            </ul>
                                                    </li>
                                                    <li>
                                                            <a href="#" class="f_size_large color_dark d_block relative">
                                                                    <b>Men</b>
                                                                    <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                            </a>
                                                            <!--second level-->
                                                            <ul class="d_none">
                                                                    <li>
                                                                            <a href="#" class="d_block f_size_large color_dark relative">
                                                                                    Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                                            </a>
                                                                            <!--third level-->
                                                                            <ul class="d_none">
                                                                                    <li><a href="#" class="color_dark d_block">Evening</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Casual</a></li>
                                                                                    <li><a href="#" class="color_dark d_block">Party</a></li>
                                                                            </ul>
                                                                    </li>
                                                            </ul>
                                                    </li>
                                                    <li>
                                                            <a href="#" class="f_size_large color_dark d_block relative">
                                                                    <b>Kids</b>
                                                                    <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                                                            </a>
                                                    </li>
                                            </ul>
                                    </div>
                            </figure>
                            <!--compare products-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                            <h3 class="color_light">Compare Products</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                            You have no product to compare.
                                    </div>
                            </figure>
                            <!--banner-->
                            <a href="#" class="d_block r_corners m_bottom_30">
                                    <img src="images/banner_img_6.jpg" alt="">
                            </a>
                            <!--Bestsellers-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                            <h3 class="color_light">Bestsellers</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                            <div class="clearfix m_bottom_15">
                                                    <img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                                    <a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
                                                    <!--rating-->
                                                    <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li>
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                    </ul>
                                                    <p class="scheme_color">$61.00</p>
                                            </div>
                                            <hr class="m_bottom_15">
                                            <div class="clearfix m_bottom_15">
                                                    <img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                                    <a href="#" class="color_dark d_block bt_link">Elementum vel</a>
                                                    <!--rating-->
                                                    <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li>
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                    </ul>
                                                    <p class="scheme_color">$57.00</p>
                                            </div>
                                            <hr class="m_bottom_15">
                                            <div class="clearfix m_bottom_5">
                                                    <img src="images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
                                                    <a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
                                                    <!--rating-->
                                                    <ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li class="active">
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                            <li>
                                                                    <i class="fa fa-star-o empty tr_all_hover"></i>
                                                                    <i class="fa fa-star active tr_all_hover"></i>
                                                            </li>
                                                    </ul>
                                                    <p class="scheme_color">$24.00</p>
                                            </div>
                                    </div>
                            </figure>
                            <!--tags-->
                            <figure class="widget shadow r_corners wrapper m_bottom_30">
                                    <figcaption>
                                            <h3 class="color_light">Tags</h3>
                                    </figcaption>
                                    <div class="widget_content">
                                            <div class="tags_list">
                                                    <a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
                                                    <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
                                                    <a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
                                                    <a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">short,</a>
                                                    <a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
                                                    <a href="#" class="color_dark d_inline_b v_align_b">top,</a>
                                                    <a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
                                            </div>
                                    </div>
                            </figure>
                    </aside>
                    
                    
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
