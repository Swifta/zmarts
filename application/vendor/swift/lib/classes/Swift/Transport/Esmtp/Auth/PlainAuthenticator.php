<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * Handles PLAIN authentication.
 * @package Swift
 * @subpackage Transport
 * @author Chris Corbyn
 */
class Swift_Transport_Esmtp_Auth_PlainAuthenticator
  implements Swift_Transport_Esmtp_Authenticator
{
  
  /**
   * Get the name of the AUTH mechanism this Authenticator handles.
   * @return string
   */
  public function getAuthKeyword()
  {
    return 'PLAIN';
  }
  
  /**
<<<<<<< HEAD
   * Try to authenticate the user with $usrname and $pswd.
   * @param Swift_Transport_SmtpAgent $agent
   * @param string $usrname
=======
   * Try to authenticate the user with $username and $pswd.
   * @param Swift_Transport_SmtpAgent $agent
   * @param string $username
>>>>>>> test
   * @param string $pswd
   * @return boolean
   */
  public function authenticate(Swift_Transport_SmtpAgent $agent,
<<<<<<< HEAD
    $usrname, $pswd)
  {
    try
    {
      $message = base64_encode($usrname . chr(0) . $usrname . chr(0) . $pswd);
=======
    $username, $pswd)
  {
    try
    {
      $message = base64_encode($username . chr(0) . $username . chr(0) . $pswd);
>>>>>>> test
      $agent->executeCommand(sprintf("AUTH PLAIN %s\r\n", $message), array(235));
      return true;
    }
    catch (Swift_TransportException $e)
    {
      $agent->executeCommand("RSET\r\n", array(250));
      return false;
    }
  }
  
}
