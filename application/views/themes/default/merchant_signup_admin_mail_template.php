<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
        <title></title>
    </head>

    <body>
        <table cellspacing="0" cellpadding="0" border="0" width="700" bgcolor="#ffffff" style="border:1px solid #d3d2d1;">
            <tr>
                <td style="padding:15px;">
                    <table cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#144F5D">
                                    <tr>
                                        <td>
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr height="68">
                                                    <td width="10"></td>
                                                    <td align="center" width="235" bgcolor="#fff"><a style="text-decoration:none; color:#666;" href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"><img src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png" border="0" alt="" /></a></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr height="20">
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="border:1px solid #e3e3e3;padding:10px;color:#666666;font:normal 13px/19px arial;">
                                    <tr>
                                        <td style="font:bold 12px arial;color:#666; text-decoration:none;">
                                         <?php if(isset($this->adminname)) { ?>
                                           <?php echo $this->Lang['DEAR']; ?> <?php echo $this->adminname; ?>,
                                           <?php } ?>
                                        </td> 
                                    </tr>
                                    <tr height="10">
                                        <td></td>
                                    </tr>
                               <tr>
                               <td>
                                <?php if(isset($this->admin_message)) { ?>
			        <?php echo $this->admin_message; ?>
			        <?php } ?>
                                </td>
                                </tr>
                                                               
                                   
                                </table>
                            </td>
                        </tr>
                        <tr height="30">
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td align="left" style="font:normal 13px/19px arial;color:#333;">
                               <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; color:#666; text-decoration:none;"><?php echo PATH; ?></a> ,
                            </td> 
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>      
                            <td align="left" style="font:normal 13px/19px arial;color:#666;">
                             <?php echo $this->Lang['THK_U']; ?>,
                            </td>
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>
                            <td align="left" style="font:normal 12px arial;color:#333;">
                              <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; color:#666; text-decoration:none;"><?php echo SITENAME; ?></a> <?php echo $this->Lang['TEAM']; ?> .
                            </td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
