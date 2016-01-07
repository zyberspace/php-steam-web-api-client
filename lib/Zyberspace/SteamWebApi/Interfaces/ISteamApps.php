<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamApps extends AbstractInterface
{
    /**
     * /ISteamApps/GetAppList/v1/
     *
     */
    public function GetAppListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /ISteamApps/GetAppList/v2/
     *
     */
    public function GetAppListV2()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /ISteamApps/GetServersAtAddress/v1/
     *
     * @param string $addr IP or IP:queryport to list
     */
    public function GetServersAtAddressV1($addr)
    {
        return $this->_call(__METHOD__, 'GET', array('addr' => $addr));
    }
    /**
     * /ISteamApps/UpToDateCheck/v1/
     *
     * @param uint32 $appid AppID of game
     * @param uint32 $version The installed version of the game
     */
    public function UpToDateCheckV1($appid, $version)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'version' => $version));
    }
}
