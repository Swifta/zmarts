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
                                <table cellspacing="0" cellpadding="0" border="0" width="100%" style="border:1px solid #e3e3e3;padding:10px;color:#666666;font:normal 13px/19px arial;">
                                    <tr>
                                        <td style="font:normal 18px/21px arial;color:#000;">
                                        <?php if(isset($this->signup) || isset($this->forgot) || isset($this->moderator) || isset($this->store_admin)) { ?>
                                           <?php echo $this->Lang['DEAR']; ?> <?php echo $this->name; ?>,
                                            <?php } ?>
                                            
                                            <?php if(isset($this->admin_signup)) { ?>
                                           <?php echo $this->Lang['DEAR']; ?> <?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>,
                                            <?php } ?>
                                        </td> 
                                    </tr>
                                    <tr height="10">
                                        <td></td>
                                    </tr>
                               <tr>
                               <td>
                                <?php if(isset($this->signup)) { ?>
			        <?php echo $this->Lang['YOUR']; ?> <?php echo SITENAME; ?> <?php echo $this->Lang['REG_COMP_SUCCESS']; ?>
			        <?php } elseif(isset($this->admin_signup)) { ?>
			        <?php echo "Admin Registration"; ?>
			        <?php } elseif(isset($this->forgot)) { ?>
			        <?php echo $this->Lang['YOUR_PASS_RE_SUCC']; ?>
			        <?php } elseif(isset($this->subscribe_city)) { ?>
			        <?php echo $this->Lang['SUCC_SUB']; ?> <?php echo SITENAME; ?>
			        <?php }elseif(isset($this->moderator)){ ?>
			        <?php echo $this->Lang['MER_MOD_REGISTRATION'];?>
			        <?php }else if(isset($this->store_admin)){?>
			        <?php echo $this->Lang['CRT_STORE_ADMIN_ACC'];?>
			        <?php }?>
                                </td>
                                </tr>
                                <tr height="10">
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <?php echo $this->Lang['EMAIL_F']; ?> : <a style=" font:normal 12px/25px arial; color:#144F5D;" title="<?php if(isset($this->email)) { echo $this->email; } ?>" ><?php if(isset($this->email)) { echo $this->email; }  ?></a> 
                                        </td>
                                    </tr>
                                    
                                    <tr height="10">
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <?php if(isset($this->signup) || isset($this->forgot)|| isset($this->admin_signup) || isset($this->moderator) || isset($this->store_admin)) { ?>
                                        <?php echo $this->Lang['YOUR_PASS']; ?> : <a style=" font:normal 12px/25px arial; color:#144F5D;" ><?php if(isset($this->password)) { echo $this->password; } ?></a>
                                           <?php } else { ?>
                                           
                                           <?php } ?>
                                        </td>
                                    </tr>
				     <tr>
                                        <td>
                                        <?php if(isset($this->moderator) ||  isset($this->admin_signup)) { ?>
					    <a href="<?php  echo PATH.'admin-login.html'; ?>"> <?php  echo PATH.'admin-login.html'; ?></a>
                                           <?php } else if(isset($this->store_admin)) { ?>
                                           <a href="<?php  echo PATH.'store-admin-login.html'; ?>"> <?php  echo PATH.'store-admin-login.html'; ?></a>
                                           <?php } ?>
                                        </td>
                                    </tr>
                                     <?php if(isset($this->moderator_privileges)) { ?>
                                    <tr>
										<td style="font:normal 18px/21px arial;color:#000;">Your can access below mentioned module privileges :</td>
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
                            <td align="left" style="font:normal 13px/19px arial;color:#333;">
                               <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; color:#000000; text-decoration:none;"><?php echo PATH; ?></a> ,
                            </td> 
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>      
                            <td align="left" style="font:normal 13px/19px arial;color:#333;">
                             <?php echo $this->Lang['THK_U']; ?>,
                            </td>
                        </tr>
                        <tr height="5">
                            <td></td>
                        </tr>
                         <tr>
                            <td align="left" style="font:normal 13px/19px arial;color:#333;">
                              <a href="<?php echo PATH; ?>" title="<?php echo SITENAME; ?>" style="font:normal 12px arial; color:#000000; text-decoration:none;"><?php echo SITENAME; ?></a> <?php echo $this->Lang['TEAM']; ?> .
                            </td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>













<?php 

	if(defined('SYSPATH') or die('No direct access allowed.'));
?>

<?php

	class Sample_Controller extends Controller {
		
public function index(){
		smtp("",array(),"HELLO","","");
}

public function smtp($from = "",$receiver = array(), $subject = "", $message = "",$file = ""){
	
	
	
	/*$to = array("pkigozi@swifta.com" => "CLIENT");
	$receiver = array();
	$subject = "TEST";
	
	/*$to = array("to@example.net"=>"to whom!"); //mandatory
	$subject = "My subject"; //mandatory
	$from = array("from@email.com","from email!"); //mandatory
	$html = "This is the <h1>HTML</h1>"; //mandatory
	$text = "This is the text";
	$cc = array("cc@example.net"=>"cc whom!"); 
	$bcc = array("bcc@example.net"=>"bcc whom!");
	$replyto = array("replyto@email.com","reply to!"); 
	$attachment = array(); //provide the absolute url of the attachment/s 
	$headers = array("Content-Type"=> "text/html; charset=iso-8859-1","X-Ewiufkdsjfhn"=> "hello","X-Custom" => "Custom");

	
	
   require_once(APPPATH.'vendor/mailin-sendinblue/V2.0/Mailin.php');
   $mail = new Mailin("https://api.sendinblue.com/v2.0","Kx4syT6qOJmWCbLU");
   
  
   
		$category = "TEST";
		$from_name = "support@zmart";
		$name = "campaign";
		$bat_sent = "pkigozi@swifta.com";
		$html_content = "<h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h><h>HELLO</h>";
		$html_url = "";
		$listid = array();
		$scheduled_date = "";
		$subject = "TESTING";
		$from_email = "pkigozi@swifta.com";
		$reply_to = "pkigozi@swifta.com";
		$to_field = "";
		$exclude_list = array();
		$attachmentUrl = "";
		$inline_image = 1;
		$mirror_active ="";
		$send_now = 1;
		  
   		
   
   		var_dump($mail->create_campaign(
		
									$category,
									$from_name,
									$name,
									$bat_sent,
									$html_content,
									$html_url,
									$listid,
									$scheduled_date,
									$subject,
									$from_email,
									$reply_to,
									$to_field,
									$exclude_list,
									$attachmentUrl,
									$inline_image,
									$mirror_active,
									$send_now
		));
		
		exit;
		
		
		
        try {
			$attachment = array();
            if($file != "")
			{
					$x = 0;
					foreach($file as $f){
						$attachment[x] = $f;
						$x++;

					}
			}
				
			$to = array("pkigozi@swifta.com"=>"CLIENT"); //mandatory
			$subject = "TEST";
			$from = array("pwndz172@gmail.com","support@zmart"); //mandatory
			$html = "This is the <h1>HTML</h1>"; //mandatory
			$text = "This is the text";
			$cc = array(); 
			$bcc = array();
			$replyto = array("noreply@zmart.com","NOREPLY"); 
			$attachment = array(); 
			$headers = array("Content-Type"=> "text/html; charset=iso-8859-1","X-Ewiufkdsjfhn"=> "hello","X-Custom" => "Custom");
			
            $r = $mail->send_email($to,$subject,$from,$message," ",$cc,$bcc,$replyto,$attachment,$headers);
			var_dump($r);
			exit;
			

        }
        catch(Expection $e) {
            common::message(-1,  $e->errorMessage());

        }
        catch (Exception $e) {
            common::message(-1,  $e->getMessage());
        }
        return;*/
    }


	}

?>
