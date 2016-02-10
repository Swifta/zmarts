<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Handles LOGIN authentication.
 * @package Swift
 * @subpackage Transport
 * @author Chris Corbyn
 */
class Swift_Transport_Esmtp_Auth_LoginAuthenticator
  implements Swift_Transport_Esmtp_Authenticator
{
  
  /**
   * Get the name of the AUTH mechanism this Authenticator handles.
   * @return string
   */
  public function getAuthKeyword()
  {
    return 'LOGIN';
  }
  
  /**
   * Try to authenticate the user with $usrname and $pswd.
   * @param Swift_Transport_SmtpAgent $agent
   * @param string $usrname
   * @param string $pswd
   * @return boolean
   */
  public function authenticate(Swift_Transport_SmtpAgent $agent,
    $usrname, $pswd)
  {
    try
    {
      $agent->executeCommand("AUTH LOGIN\r\n", array(334));
      $agent->executeCommand(sprintf("%s\r\n", base64_encode($usrname)), array(334));
      $agent->executeCommand(sprintf("%s\r\n", base64_encode($pswd)), array(235));
      return true;
    }
    catch (Swift_TransportException $e)
    {
      $agent->executeCommand("RSET\r\n", array(250));
      return false;
    }
  }
  
}
