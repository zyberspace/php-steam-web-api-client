<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamUserStats extends AbstractInterface
{
    /**
     * /ISteamUserStats/GetGlobalAchievementPercentagesForApp/v1/
     *
     * @param uint64 $gameid GameID to retrieve the achievement percentages for
     */
    public function GetGlobalAchievementPercentagesForAppV1($gameid)
    {
        return $this->_call(__METHOD__, 'GET', array('gameid' => $gameid));
    }
    /**
     * /ISteamUserStats/GetGlobalAchievementPercentagesForApp/v2/
     *
     * @param uint64 $gameid GameID to retrieve the achievement percentages for
     */
    public function GetGlobalAchievementPercentagesForAppV2($gameid)
    {
        return $this->_call(__METHOD__, 'GET', array('gameid' => $gameid));
    }
    /**
     * /ISteamUserStats/GetGlobalStatsForGame/v1/
     *
     * @param uint32 $appid AppID that we're getting global stats for
     * @param uint32 $count Number of stats get data for
     * @param string $name Names of stat to get data for
     * @param uint32 $startdate Start date for daily totals (unix epoch timestamp)
     * @param uint32 $enddate End date for daily totals (unix epoch timestamp)
     */
    public function GetGlobalStatsForGameV1($appid, $count, $name, $startdate = null, $enddate = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'count' => $count, 'name[0]' => $name, 'startdate' => $startdate, 'enddate' => $enddate));
    }
    /**
     * /ISteamUserStats/GetNumberOfCurrentPlayers/v1/
     *
     * @param uint32 $appid AppID that we're getting user count for
     */
    public function GetNumberOfCurrentPlayersV1($appid)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid));
    }
    /**
     * /ISteamUserStats/GetPlayerAchievements/v1/
     *
     * @param uint64 $steamid SteamID of user
     * @param uint32 $appid AppID to get achievements for
     * @param string $l Language to return strings for
     */
    public function GetPlayerAchievementsV1($steamid, $appid, $l = null)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'appid' => $appid, 'l' => $l));
    }
    /**
     * /ISteamUserStats/GetSchemaForGame/v1/
     *
     * @param uint32 $appid appid of game
     * @param string $l localized langauge to return (english, french, etc.)
     */
    public function GetSchemaForGameV1($appid, $l = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'l' => $l));
    }
    /**
     * /ISteamUserStats/GetSchemaForGame/v2/
     *
     * @param uint32 $appid appid of game
     * @param string $l localized language to return (english, french, etc.)
     */
    public function GetSchemaForGameV2($appid, $l = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'l' => $l));
    }
    /**
     * /ISteamUserStats/GetUserStatsForGame/v1/
     *
     * @param uint64 $steamid SteamID of user
     * @param uint32 $appid appid of game
     */
    public function GetUserStatsForGameV1($steamid, $appid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'appid' => $appid));
    }
    /**
     * /ISteamUserStats/GetUserStatsForGame/v2/
     *
     * @param uint64 $steamid SteamID of user
     * @param uint32 $appid appid of game
     */
    public function GetUserStatsForGameV2($steamid, $appid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'appid' => $appid));
    }
}
