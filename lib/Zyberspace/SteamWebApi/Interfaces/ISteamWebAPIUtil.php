<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamWebAPIUtil extends AbstractInterface
{
    /**
     * /ISteamWebAPIUtil/GetServerInfo/v1/
     *
     */
    public function GetServerInfoV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /ISteamWebAPIUtil/GetSupportedAPIList/v1/
     *
     */
    public function GetSupportedAPIListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
