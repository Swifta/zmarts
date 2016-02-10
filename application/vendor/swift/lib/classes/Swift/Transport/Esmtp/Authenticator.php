<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 * An Authentication mechanism.
 * @package Swift
 * @subpackage Transport
 * @author Chris Corbyn
 */
interface Swift_Transport_Esmtp_Authenticator
{
  
  /**
   * Get the name of the AUTH mechanism this Authenticator handles.
   * @return string
   */
  public function getAuthKeyword();
  
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
    $usrname, $pswd);
=======
    $username, $pswd);
>>>>>>> test
  
}
