<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ITFSystem_440 extends AbstractInterface
{
    /**
     * /ITFSystem_440/GetWorldStatus/v1/
     *
     */
    public function GetWorldStatusV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
