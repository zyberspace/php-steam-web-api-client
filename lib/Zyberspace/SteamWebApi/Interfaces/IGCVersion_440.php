<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IGCVersion_440 extends AbstractInterface
{
    /**
     * /IGCVersion_440/GetClientVersion/v1/
     *
     */
    public function GetClientVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IGCVersion_440/GetServerVersion/v1/
     *
     */
    public function GetServerVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
