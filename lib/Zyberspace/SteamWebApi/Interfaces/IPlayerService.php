<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IPlayerService extends AbstractInterface
{
    /**
     * /IPlayerService/RecordOfflinePlaytime/v1/
     *
     * @param uint64 $steamid
     * @param string $ticket
     * @param {message} $play_sessions
     */
    public function RecordOfflinePlaytimeV1($steamid, $ticket, $play_sessions)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'ticket' => $ticket, 'play_sessions' => $play_sessions));
    }
    /**
     * /IPlayerService/GetRecentlyPlayedGames/v1/
     *
     * @param uint64 $steamid The player we're asking about
     * @param uint32 $count The number of games to return (0/unset: all)
     */
    public function GetRecentlyPlayedGamesV1($steamid, $count)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'count' => $count));
    }
    /**
     * /IPlayerService/GetOwnedGames/v1/
     *
     * @param uint64 $steamid The player we're asking about
     * @param bool $include_appinfo true if we want additional details (name, icon) about each game
     * @param bool $include_played_free_games Free games are excluded by default.  If this is set, free games the user has played will be returned.
     * @param uint32 $appids_filter if set, restricts result set to the passed in apps
     */
    public function GetOwnedGamesV1($steamid, $include_appinfo, $include_played_free_games, $appids_filter)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'include_appinfo' => $include_appinfo, 'include_played_free_games' => $include_played_free_games, 'appids_filter' => $appids_filter));
    }
    /**
     * /IPlayerService/GetSteamLevel/v1/
     *
     * @param uint64 $steamid The player we're asking about
     */
    public function GetSteamLevelV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IPlayerService/GetBadges/v1/
     *
     * @param uint64 $steamid The player we're asking about
     */
    public function GetBadgesV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IPlayerService/GetCommunityBadgeProgress/v1/
     *
     * @param uint64 $steamid The player we're asking about
     * @param int32 $badgeid The badge we're asking about
     */
    public function GetCommunityBadgeProgressV1($steamid, $badgeid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'badgeid' => $badgeid));
    }
    /**
     * /IPlayerService/IsPlayingSharedGame/v1/
     *
     * @param uint64 $steamid The player we're asking about
     * @param uint32 $appid_playing The game player is currently playing
     */
    public function IsPlayingSharedGameV1($steamid, $appid_playing)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'appid_playing' => $appid_playing));
    }
}
