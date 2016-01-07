<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IGCVersion_570 extends AbstractInterface
{
    /**
     * /IGCVersion_570/GetClientVersion/v1/
     *
     */
    public function GetClientVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IGCVersion_570/GetServerVersion/v1/
     *
     */
    public function GetServerVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
