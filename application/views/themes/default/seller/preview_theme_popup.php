	
    
    <div class="shadow_bg"></div>
    <div class="sign_up_outer" style="text-align: center; width:100%;">  
            <div class="sign_up_logo" style="width:100%;">
                <a href="<?php echo PATH;?>"><img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png"/></a>        	
                <a class="close2" title="<?php echo $this->Lang['CLOSE']; ?>" id="close_preview_theme" onclick="closeDialog()">&nbsp;</a>                
            </div>
            <div class="signup_content clearfix"></div>
                  
                 <div> <img src="" class="preview_theme_selected" style="width:600px; height: 550px; text-align: center; margin:2px auto;" /></div>

            
        </div>
<script type="text/javascript">
    function closeDialog(){
                    $('.popup_block_theme').css({'display' : 'none'});

                    $('#fade').css({'visibility' : 'hidden'});
                            //  location.reload();

            return false;        
    }
</script>