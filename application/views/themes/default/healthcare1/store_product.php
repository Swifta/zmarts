<div id="maincontainer">
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
<?php 
    $font_color = "";
    $bg_color ="";
    $font_size ="";
    ?>
    <section id="product" style="<?php echo $bg_color; ?>">
    <div class="container">
     <!--  breadcrumb --> 
      
      <!-- Contact Us-->
<!--      <h1 class="heading1"><span class="maintext">Contact</span><span class="subtext"> Contact Us for more</span></h1>-->
      <div class="row">
        <div class="span12">
          <ul class="thumbnails text-center">
        


    <?php echo new View("themes/" . THEME_NAME . "/".$this->theme_name."/store_product_list"); ?>
                
            
                
                    <span  id="product">
                    </span>
                

</ul>
        </div>
        
        <!-- Sidebar Start-->
<!--        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>Contact Info</span></h2>
              <p> Lorem Ipsum is simply<br>
                Lorem Ipsum is simply<br>
               Lorem Ipsum is simply<br>
                <br>
                Phone: (012) 333-7890<br>
                Fax: (123) 444-7890<br>
                Email: test@contactus.com<br>
                Web: yourcompanyname.com<br>
              </p>
            </div>
          </aside>
        </div>-->
        <!-- Sidebar End-->
        
      </div>
    </div>
  </section>
</div>
