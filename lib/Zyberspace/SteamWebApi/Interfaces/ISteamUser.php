<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamUser extends AbstractInterface
{
    /**
     * /ISteamUser/GetFriendList/v1/
     *
     * @param uint64 $steamid SteamID of user
     * @param string $relationship relationship type (ex: friend)
     */
    public function GetFriendListV1($steamid, $relationship = null)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'relationship' => $relationship));
    }
    /**
     * /ISteamUser/GetPlayerBans/v1/
     *
     * @param string $steamids Comma-delimited list of SteamIDs
     */
    public function GetPlayerBansV1($steamids)
    {
        return $this->_call(__METHOD__, 'GET', array('steamids' => $steamids));
    }
    /**
     * /ISteamUser/GetPlayerSummaries/v1/
     *
     * @param string $steamids Comma-delimited list of SteamIDs
     */
    public function GetPlayerSummariesV1($steamids)
    {
        return $this->_call(__METHOD__, 'GET', array('steamids' => $steamids));
    }
    /**
     * /ISteamUser/GetPlayerSummaries/v2/
     *
     * @param string $steamids Comma-delimited list of SteamIDs (max: 100)
     */
    public function GetPlayerSummariesV2($steamids)
    {
        return $this->_call(__METHOD__, 'GET', array('steamids' => $steamids));
    }
    /**
     * /ISteamUser/GetUserGroupList/v1/
     *
     * @param uint64 $steamid SteamID of user
     */
    public function GetUserGroupListV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /ISteamUser/ResolveVanityURL/v1/
     *
     * @param string $vanityurl The vanity URL to get a SteamID for
     * @param int32 $url_type The type of vanity URL. 1 (default): Individual profile, 2: Group, 3: Official game group
     */
    public function ResolveVanityURLV1($vanityurl, $url_type = null)
    {
        return $this->_call(__METHOD__, 'GET', array('vanityurl' => $vanityurl, 'url_type' => $url_type));
    }
}
