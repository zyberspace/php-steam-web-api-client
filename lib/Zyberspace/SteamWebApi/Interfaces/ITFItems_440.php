<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ITFItems_440 extends AbstractInterface
{
    /**
     * /ITFItems_440/GetGoldenWrenches/v2/
     *
     */
    public function GetGoldenWrenchesV2()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
