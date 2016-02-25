<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Teams_570 extends AbstractInterface
{
    /**
     * /IDOTA2Teams_570/GetTeamInfo/v1/
     *
     * @param uint32 $team_id Team ID that you're requesting info about
     * @param uint32 $league_id League ID for which you're requesting all regisered teams info
     */
    public function GetTeamInfoV1($team_id = null, $league_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('team_id' => $team_id, 'league_id' => $league_id));
    }
}
