<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ICSGOServers_730 extends AbstractInterface
{
    /**
     * /ICSGOServers_730/GetGameServersStatus/v1/
     *
     */
    public function GetGameServersStatusV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
