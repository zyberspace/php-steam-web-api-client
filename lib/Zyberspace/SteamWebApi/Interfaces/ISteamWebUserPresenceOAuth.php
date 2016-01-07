<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamWebUserPresenceOAuth extends AbstractInterface
{
    /**
     * /ISteamWebUserPresenceOAuth/PollStatus/v1/
     *
     * @param string $steamid Steam ID of the user
     * @param uint64 $umqid UMQ Session ID
     * @param uint32 $message Message that was last known to the user
     * @param uint32 $pollid Caller-specific poll id
     * @param uint32 $sectimeout Long-poll timeout in seconds
     * @param uint32 $secidletime How many seconds is client considering itself idle, e.g. screen is off
     * @param uint32 $use_accountids Boolean, 0 (default): return steamid_from in output, 1: return accountid_from
     */
    public function PollStatusV1($steamid, $umqid, $message, $pollid = null, $sectimeout = null, $secidletime = null, $use_accountids = null)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'umqid' => $umqid, 'message' => $message, 'pollid' => $pollid, 'sectimeout' => $sectimeout, 'secidletime' => $secidletime, 'use_accountids' => $use_accountids));
    }
}
