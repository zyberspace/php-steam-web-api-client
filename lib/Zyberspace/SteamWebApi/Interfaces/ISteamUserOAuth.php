<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamUserOAuth extends AbstractInterface
{
    /**
     * /ISteamUserOAuth/GetTokenDetails/v1/
     *
     * @param string $access_token OAuth2 token for which to return details
     */
    public function GetTokenDetailsV1($access_token)
    {
        return $this->_call(__METHOD__, 'GET', array('access_token' => $access_token));
    }
}
