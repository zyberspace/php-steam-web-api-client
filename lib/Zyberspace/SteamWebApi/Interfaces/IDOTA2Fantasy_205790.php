<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Fantasy_205790 extends AbstractInterface
{
    /**
     * /IDOTA2Fantasy_205790/GetFantasyPlayerStats/v1/
     *
     * @param uint32 $FantasyLeagueID The fantasy league ID
     * @param uint32 $StartTime An optional filter for minimum timestamp
     * @param uint32 $EndTime An optional filter for maximum timestamp
     * @param uint64 $matchid An optional filter for a specific match
     * @param uint32 $SeriesID An optional filter for a specific series
     * @param uint32 $PlayerAccountID An optional filter for a specific player
     */
    public function GetFantasyPlayerStatsV1($FantasyLeagueID, $StartTime = null, $EndTime = null, $matchid = null, $SeriesID = null, $PlayerAccountID = null)
    {
        return $this->_call(__METHOD__, 'GET', array('FantasyLeagueID' => $FantasyLeagueID, 'StartTime' => $StartTime, 'EndTime' => $EndTime, 'matchid' => $matchid, 'SeriesID' => $SeriesID, 'PlayerAccountID' => $PlayerAccountID));
    }
    /**
     * /IDOTA2Fantasy_205790/GetPlayerOfficialInfo/v1/
     *
     * @param uint32 $accountid The account ID to look up
     */
    public function GetPlayerOfficialInfoV1($accountid)
    {
        return $this->_call(__METHOD__, 'GET', array('accountid' => $accountid));
    }
    /**
     * /IDOTA2Fantasy_205790/GetProPlayerList/v1/
     *
     */
    public function GetProPlayerListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
