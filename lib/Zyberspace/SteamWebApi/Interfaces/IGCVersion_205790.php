<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IGCVersion_205790 extends AbstractInterface
{
    /**
     * /IGCVersion_205790/GetClientVersion/v1/
     *
     */
    public function GetClientVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IGCVersion_205790/GetServerVersion/v1/
     *
     */
    public function GetServerVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
