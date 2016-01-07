<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IGameServersService extends AbstractInterface
{
    /**
     * /IGameServersService/GetAccountList/v1/
     *
     */
    public function GetAccountListV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IGameServersService/CreateAccount/v1/
     *
     * @param uint32 $appid The app to use the account for
     * @param string $memo The memo to set on the new account
     */
    public function CreateAccountV1($appid, $memo)
    {
        return $this->_call(__METHOD__, 'POST', array('appid' => $appid, 'memo' => $memo));
    }
    /**
     * /IGameServersService/SetMemo/v1/
     *
     * @param uint64 $steamid The SteamID of the game server to set the memo on
     * @param string $memo The memo to set on the new account
     */
    public function SetMemoV1($steamid, $memo)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'memo' => $memo));
    }
    /**
     * /IGameServersService/ResetLoginToken/v1/
     *
     * @param uint64 $steamid The SteamID of the game server to reset the login token of
     */
    public function ResetLoginTokenV1($steamid)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid));
    }
    /**
     * /IGameServersService/DeleteAccount/v1/
     *
     * @param uint64 $steamid The SteamID of the game server account to delete
     */
    public function DeleteAccountV1($steamid)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid));
    }
    /**
     * /IGameServersService/GetAccountPublicInfo/v1/
     *
     * @param uint64 $steamid The SteamID of the game server to get info on
     */
    public function GetAccountPublicInfoV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IGameServersService/QueryLoginToken/v1/
     *
     * @param string $login_token Login token to query
     */
    public function QueryLoginTokenV1($login_token)
    {
        return $this->_call(__METHOD__, 'GET', array('login_token' => $login_token));
    }
    /**
     * /IGameServersService/GetServerSteamIDsByIP/v1/
     *
     * @param string $server_ips
     */
    public function GetServerSteamIDsByIPV1($server_ips)
    {
        return $this->_call(__METHOD__, 'GET', array('server_ips' => $server_ips));
    }
    /**
     * /IGameServersService/GetServerIPsBySteamID/v1/
     *
     * @param uint64 $server_steamids
     */
    public function GetServerIPsBySteamIDV1($server_steamids)
    {
        return $this->_call(__METHOD__, 'GET', array('server_steamids' => $server_steamids));
    }
}
