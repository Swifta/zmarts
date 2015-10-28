<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="maincontainer">
    
    <?php 
				$font_color = "";
				$bg_color ="";
				$font_size ="";
								 
                                ?>
            
            
            
 <div class="container">
	<!-- Products -->
    <div class="products">
        <?php echo new View("themes/" . THEME_NAME . "/".$this->theme_name."/store_deal_list"); ?>
        <span  id="product">
        </span>
    </div>
    <?php if(($this->all_deals_count > 12)) { ?>
        <div id="loading">
        <?php if (($this->pagination) != "") { ?>
                    <div class="feature_viewmore text-center">
                            <div class="fea_view_more text-center">                                                
                                    <a class="view_more view_more1 view_more_but">
                                            <span class="view_more_icon">- - -</span><?php echo $this->Lang['SEE_M_DEALS']; ?><span class="view_more_icon">- - -</span>
                                    </a> 
                            </div>
                    </div>
                <?php } ?>
        </div>
    <?php } ?>
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
<!-- Footer -->
