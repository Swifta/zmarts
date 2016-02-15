<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="foot_out fl clr">
    	<div class="foot_in">
        <div class="login_footer">
   <?php /*?>     <ul>
            <li><a href="#" title="Privacy Policy">Privacy Policy</a></li><li>|</li>
            <li><a href="#" title="Affiliates">Affiliates</a></li><li>|</li>
            <li><a href="#" title="Contact Us">Contact Us</a></li><li>|</li>
            <li><a href="#" title="Links Page">Links Page</a></li><li>|</li>
            <li><a href="#" title="Tell a Friend">Tell a Friend</a></li><li>|</li>
            <li><a href="#" title="Site Map">Site Map</a></li>
        </ul><?php */?>
        <p style="margin-left: -35px"> <?php echo $this->Lang["FOOTER_COPYRIGHT"]."&nbsp;".SITENAME.".&nbsp;".$this->Lang["FOOTER_ALLRIGHT"]; ?></p>

        </div>
        </div>
</div>

<?php /* chat code starts */ ?>
<?php if($this->session->get("chatuserid")) { ?>
<script type="text/javascript" src="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/js/chat/chat.js"></script>
<link type="text/css" rel="stylesheet" media="all" href="<?php echo PATH; ?>themes/<?php echo THEME_NAME; ?>/css/chat/chat.css" />
<?php } ?>
<?php /* chat code ends */ ?>
