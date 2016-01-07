<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2StreamSystem_570 extends AbstractInterface
{
    /**
     * /IDOTA2StreamSystem_570/GetBroadcasterInfo/v1/
     *
     * @param uint64 $broadcaster_steam_id 64-bit Steam ID of the broadcaster
     * @param uint32 $league_id LeagueID to use if we aren't in a lobby
     */
    public function GetBroadcasterInfoV1($broadcaster_steam_id, $league_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('broadcaster_steam_id' => $broadcaster_steam_id, 'league_id' => $league_id));
    }
}
