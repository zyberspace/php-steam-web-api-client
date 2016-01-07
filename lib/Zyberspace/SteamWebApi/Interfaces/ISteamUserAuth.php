<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamUserAuth extends AbstractInterface
{
    /**
     * /ISteamUserAuth/AuthenticateUser/v1/
     *
     * @param uint64 $steamid Should be the users steamid, unencrypted.
     * @param rawbinary $sessionkey Should be a 32 byte random blob of data, which is then encrypted with RSA using the Steam system's public key.  Randomness is important here for security.
     * @param rawbinary $encrypted_loginkey Should be the users hashed loginkey, AES encrypted with the sessionkey.
     */
    public function AuthenticateUserV1($steamid, $sessionkey, $encrypted_loginkey)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'sessionkey' => $sessionkey, 'encrypted_loginkey' => $encrypted_loginkey));
    }
    /**
     * /ISteamUserAuth/AuthenticateUserTicket/v1/
     *
     * @param uint32 $appid appid of game
     * @param string $ticket Ticket from GetAuthSessionTicket.
     */
    public function AuthenticateUserTicketV1($appid, $ticket)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'ticket' => $ticket));
    }
}
