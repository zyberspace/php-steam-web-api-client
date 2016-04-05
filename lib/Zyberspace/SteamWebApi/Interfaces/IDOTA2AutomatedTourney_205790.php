<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2AutomatedTourney_205790 extends AbstractInterface
{
    /**
     * /IDOTA2AutomatedTourney_205790/GetActiveTournamentList/v1/
     *
     */
    public function GetActiveTournamentListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
