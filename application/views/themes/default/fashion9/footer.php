<section id="footer-bar">
<?php if(count($this->about_us_footer)>0) { 
    foreach($this->about_us_footer as $stores) { ?>
        <div class="row">
                <div class="span3 ">
              <?php if(isset($this->footer_merchant_details) && count($this->footer_merchant_details)>0){
				foreach($this->footer_merchant_details as $admin){ ?>
				<div class="footer_three footer_list">
               <h2 class="footer_title"></h2>
               <ul>
                   <li>
                       <div class="foot_location">
                           <p><?php echo $admin->address1; ?>, </p>
                           <p><?php echo $admin->address2; ?></p>
                           <p><?php echo $admin->city_name; ?></p>
                           <p><?php echo $admin->country_name; ?></p>
                       </div>
                   </li>
                   <li><p class="call_icon"><?php echo $admin->phone_number;?></p></li>
                   <li><a class="foot_mail_icon" href="mailto:<?php echo $admin->email; ?>" title="<?php echo $admin->email; ?>"><?php echo $admin->email; ?></a></li>
               </ul>
            </div>
            <?php }
            }else if(count($this->admin_details)>0) { foreach($this->admin_details as $admin) { ?>
            <div class="footer_three footer_list">
               <h2 class="footer_title"></h2>
               <ul>
                   <li>
                       <div class="foot_location">
                           <p><?php echo $admin->address1; ?>, </p>
                           <p><?php echo $admin->address2; ?></p>
                           <p><?php echo $admin->city_name; ?></p>
                           <p><?php echo $admin->country_name; ?></p>
                       </div>
                   </li>
                   <li><p class="call_icon"><?php echo PHONE1;?>,<?php echo PHONE2;?></p></li>
                   <li><a class="foot_mail_icon" href="mailto:<?php echo CONTACT_EMAIL; ?>" title="<?php echo CONTACT_EMAIL; ?>"><?php echo  CONTACT_EMAIL; ?></a></li>
               </ul>
            </div>
            <?php } } ?>
					
                </div>
                <div class="span4">
                        <h4>Shopping Guide</h4>
                    <ul>
                        <li><a href="<?php echo PATH; ?>" title="Home">Home</a></li>
                         <?php if ($this->cms_setting == 0) {
            foreach ($this->get_all_cms_title as $d) { ?>
            <?php if($d->cms_title != "Help"){ ?>
                                    <li> <a <?php if ($d->type == 3) { ?>href="<?php echo $d->cms_desc; ?>" <?php } else { ?> href="<?php echo PATH . $d->cms_url . '.php' ?>" <?php } ?> title="<?php echo $d->cms_title; ?>"> <?php echo $d->cms_title; ?></a></li>
                            <?php } ?>
                        <?php }
                    } ?>
                    </ul>
                </div>
                <div class="span5">
                    <p class="logo">
<a href="<?php echo PATH.$stores->store_url_title.'/';?>"  title = "<?php echo $stores->store_name; ?>">
    <img alt="<?php echo $this->Lang['LOGO']; ?>" src="<?php echo PATH .'images/merchant/290_215/'.$stores->merchant_id.'_'.$stores->store_id.'.png'?>"/>
</a>
                    </p>
                        <p><?php echo $stores->about_us; ?> </p>
                        <p>i want to debug this </p>
                </div>					
        </div>
<?php
    }
}
?>
</section>
<section id="copyright">
        <span><?php echo $this->Lang['FOOTER_COPYRIGHT']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['FOOTER_ALLRIGHT']; ?></span>
</section>

</div>

