<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2MatchStats_570 extends AbstractInterface
{
    /**
     * /IDOTA2MatchStats_570/GetRealtimeStats/v1/
     *
     * @param uint64 $server_steam_id
     */
    public function GetRealtimeStatsV1($server_steam_id)
    {
        return $this->_call(__METHOD__, 'GET', array('server_steam_id' => $server_steam_id));
    }
}
