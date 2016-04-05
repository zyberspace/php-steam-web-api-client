<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2AutomatedTourney_570 extends AbstractInterface
{
    /**
     * /IDOTA2AutomatedTourney_570/GetActiveTournamentList/v1/
     *
     */
    public function GetActiveTournamentListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
