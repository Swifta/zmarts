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
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" bgcolor="#144F5D" >
                                    <tr>
                                        <td>
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr height="68">
                                                    <td width="10"></td>
                                                    <td align="center" width="235" bgcolor="#fff"><a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>"><img src="<?php echo PATH;?>themes/<?php echo THEME_NAME; ?>/images/logo.png" border="0" alt="" /></a></td>
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
                                <table  border="0" width="100%" style="border:1px solid #e3e3e3;padding:20px;color:#666666;font:normal 13px/19px arial;">
                                    <tr>
                                       <!-- <td style="font:normal 18px/21px arial;color:#000;">-->
                                        <td colspan="2" >
                                        <?php if(isset($this->signup) || isset($this->forgot) || isset($this->moderator) || isset($this->store_admin)) { ?>
                                           <?php echo $this->Lang['DEAR']; ?> <?php echo ucfirst($this->name);?>,
                                           
                                            <?php } ?>
                                            
                                            <?php if(isset($this->admin_signup)) { ?>
                                           <?php echo $this->Lang['DEAR']; ?> <?php if(isset($_POST['firstname'])) { echo strtoupper((htmlentities($_POST['firstname'],  ENT_QUOTES,  "utf-8"))); } ?>,
                                          
											<?php } ?>
                                            
                                        </td> 
                                    </tr>
                                    <tr height="10">
                                        <td></td>
                                    </tr>
                               <tr>
                               <td colspan="2">
                               
                               
                                <?php if(isset($this->signup)) { ?>
			        <!--<?php echo $this->Lang['YOUR']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['REG_COMP_SUCCESS']; 
					?>-->
                    <p>You have successfully registered on <?php echo SITENAME; ?>.</p>
                    <p>Please find your login details below: </p>
			        <?php } elseif(isset($this->admin_signup)) { ?>
			        <?php echo $this->Lang['REG_ADMIN']; ?>
			        <?php } elseif(isset($this->forgot)) { ?>
			        <!--<?php echo $this->Lang['YOUR_PASS_RE_SUCC']; ?>-->
                    Your password has been successfully reset.
			        <?php } elseif(isset($this->subscribe_city)) { ?>
			        <?php echo $this->Lang['SUCC_SUB']; ?> <?php echo SITENAME; ?>
			        <?php }elseif(isset($this->moderator)){ ?>
			        <?php echo $this->Lang['MER_MOD_REGISTRATION'];?>
			        <?php }else if(isset($this->store_admin)){?>
			       		 You have successfully created a new Store Admin Account.
			        <?php }?>
                                </td>
                                </tr>
                             
                                    <tr>
                                    <td>
                                    <table >
                                    <tr>
                                    
                                        <td >
                                        Email: 
                                        </td>
                                        <td style="padding-left: 20px;"><a style=" font:normal 12px/25px arial; color:#666;" title="<?php if(isset($this->email)) { echo $this->email; } ?>" ><?php if(isset($this->email)) { echo $this->email; }  ?></a> 
                                        </td>
                                    </tr>
                                    <tr >
                                     
                                       
              
                                        <?php if(isset($this->signup) || isset($this->forgot)|| isset($this->admin_signup) || isset($this->moderator) || isset($this->store_admin)) { ?>
                                        
                                        <?php /*if(isset($this->signup) || isset($this->forgot)|| isset($this->admin_signup) || isset($this->moderator) || isset($this->store_admin)) {
											 
										 }*/?>
                                        
<!--                                        <?php //if(isset($this->forgot)){?> <td colspan="1" >Password: </td><?php //}else{?><td><?php //echo $this->Lang['E_Y_PASS'];?>: </td><?php// }?> <td style=" padding-left: 20px;" ><a style=" font:normal 12px/25px arial; color:#666;" ><?php// if(isset($this->pswd)) { echo $this->pswd; ?></a></td> <?php //} ?>
                                           <?php// } else { ?>
                                           
                                           <?php //} ?>
                                       -->
                                       
                                       
                                        <?php if(isset($this->forgot)){?> <td colspan="1" >Password: </td><?php }else{?><td><?php echo $this->Lang['E_Y_PASS'];?>: </td><?php }?> <td style=" padding-left: 20px;" ><a style=" font:normal 12px/25px arial; color:#666;" ><?php if(isset($this->password)) { echo $this->password; ?></a></td> <?php } ?>
                                           <?php } else { ?>
                                       <?php } ?>
                                       
                                    </tr>
                                    <?php if(isset($this->forgot)){?>
                                    
                                    <?php } ?>
                                    </table>
                                    </td>
                                    
                                    
                                    </tr>
                                    <tr>
                                    <td colspan="2">You can change this password to something more memorable in the Settings area of your account.</td>
                                    </tr>
                                    <tr height="10">
                                        <td></td>
                                    </tr>
                                    
				     <tr>
                                        <td>
                                        <?php if(isset($this->moderator) ||  isset($this->admin_signup)) { ?>
					    Login URL: <a href="<?php  echo PATH.'admin-login.html'; ?>"><input type="button" value="Click to login" style="background: #930;" /></a>
                                           <?php } else if(isset($this->store_admin)) { ?>
                                           <a href="<?php  echo PATH.'store-admin-login.html'; ?>"><input type="button" value="Click to login" style="background: #930;" /></a>
                                           <?php } ?>
                                        </td>
                                    </tr>
                                     <?php if(isset($this->moderator_privileges)) { ?>
                                    <tr>
										<td style="font:normal 18px/21px arial;color:#666;">Your privileges are below :</td>
                                    </tr>
                                    <tr>
										<td><?php echo $this->moderator_privileges; ?></td>
                                    </tr>
                                    <?php } ?>
                                    
                                   
                                </table>
                            </td>
                        </tr>
                        <tr height="30">
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td align="left" style="font:normal 13px/19px arial;color:#666;">
                               <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; color:#666; text-decoration:none;"><?php echo SITENAME; ?></a>,
                            </td> 
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>      
                            <td align="left" style="font:normal 13px/19px arial;color:#666;">
                            <?php if(isset($this->signup)){
								echo $this->Lang['M_SIGNUP_THK_U']." ".SITENAME;
							}else{?>
                             <?php echo $this->Lang['THK_U'];
							}?>,
                            </td>
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>
                            <td align="left" style="font:normal 13px/19px arial; color:#666;">
                              <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; text-decoration:none; color:#666;"><?php echo $this->Lang['THE']." ".SITENAME; ?></a> <?php echo $this->Lang['TEAM']; ?>.
                            </td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>


