<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="bread_crumb"><a href="<?php echo PATH."admin.html"; ?>" title="<?php echo $this->Lang['HOME']; ?>"><?php echo $this->Lang["HOME"]; ?> <span class="fwn">&#155;&#155;</span></a><p><?php echo $this->template->title; ?></p></div>
<div class="cont_container mt15 mt10">
    <div class="content_top"><div class="top_left"></div><div class="top_center"></div><div class="top_rgt"></div></div>
    <div class="content_middle">

        <form action="" method="post" class="admin_form">
            <table>
                <tr>
                <td><label><?php echo $this->Lang["OLD_PSWD"]; ?> :</label><span>*</span></td>
                <td><input name="oldpassword" type="password" value="" size="30" placeholder="<?php echo $this->Lang["OLD_PSWD"]; ?>" autofocus /><em><?php if(isset($this->form_error['oldpswd'])){ echo $this->form_error['oldpswd']; }?></em></td>
                <tr>
                <td><label><?php echo $this->Lang["NEW_PSWD"]; ?> :</label><span>*</span></td>
                <td><input name="password" type="password" value="" size="30" placeholder="<?php echo $this->Lang["NEW_PSWD"]; ?>" /><em><?php if(isset($this->form_error['pswd'])){ echo $this->form_error["pswd"]; }?></em></td>
                </tr>
                <tr>
                <td><label><?php echo $this->Lang["CONFIRM_PSWD"]; ?> :</label><span>*</span></td>
                <td><input name="cpassword" type="password" value="" size="30" placeholder="<?php echo $this->Lang["CONFIRM_PSWD"]; ?> " /><em><?php if(isset($this->form_error['cpswd'])){ echo $this->form_error["cpswd"]; }?></em></td>
                 <tr>
                    <td></td>
                    <td><input type="submit" value="<?php echo $this->Lang['UPDATE']; ?>" /><input type="button" value="<?php echo $this->Lang['CANCEL']; ?>" onclick='window.location.href="<?php echo PATH?>admin/settings.html"'/></td>
                </tr>
             </table>
        </form>

    </div>
    <div class="content_bottom"><div class="bot_left"></div><div class="bot_center"></div><div class="bot_rgt"></div></div>
</div>
