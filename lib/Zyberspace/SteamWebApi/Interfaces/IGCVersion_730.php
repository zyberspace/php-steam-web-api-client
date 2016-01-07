<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IGCVersion_730 extends AbstractInterface
{
    /**
     * /IGCVersion_730/GetServerVersion/v1/
     *
     */
    public function GetServerVersionV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
