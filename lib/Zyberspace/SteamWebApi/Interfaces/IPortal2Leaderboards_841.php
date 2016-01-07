<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IPortal2Leaderboards_841 extends AbstractInterface
{
    /**
     * /IPortal2Leaderboards_841/GetBucketizedData/v1/
     *
     * @param string $leaderboardName The leaderboard name to fetch data for.
     */
    public function GetBucketizedDataV1($leaderboardName)
    {
        return $this->_call(__METHOD__, 'GET', array('leaderboardName' => $leaderboardName));
    }
}
