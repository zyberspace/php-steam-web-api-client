<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2MatchStats_205790 extends AbstractInterface
{
    /**
     * /IDOTA2MatchStats_205790/GetRealtimeStats/v1/
     *
     * @param uint64 $server_steam_id
     */
    public function GetRealtimeStatsV1($server_steam_id)
    {
        return $this->_call(__METHOD__, 'GET', array('server_steam_id' => $server_steam_id));
    }
}
