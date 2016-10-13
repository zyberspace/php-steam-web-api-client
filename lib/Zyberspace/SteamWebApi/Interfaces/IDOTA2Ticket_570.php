<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Ticket_570 extends AbstractInterface
{
    /**
     * /IDOTA2Ticket_570/ClaimBadgeReward/v1/
     *
     * @param uint32 $eventid Event ID
     * @param string $BadgeID The badge ID
     */
    public function ClaimBadgeRewardV1($eventid, $BadgeID)
    {
        return $this->_call(__METHOD__, 'GET', array('eventid' => $eventid, 'BadgeID' => $BadgeID));
    }
    /**
     * /IDOTA2Ticket_570/GetSteamIDForBadgeID/v1/
     *
     * @param string $BadgeID The badge ID
     */
    public function GetSteamIDForBadgeIDV1($BadgeID)
    {
        return $this->_call(__METHOD__, 'GET', array('BadgeID' => $BadgeID));
    }
    /**
     * /IDOTA2Ticket_570/SetSteamAccountPurchased/v1/
     *
     * @param uint32 $eventid Event ID
     * @param uint64 $steamid The 64-bit Steam ID
     */
    public function SetSteamAccountPurchasedV1($eventid, $steamid)
    {
        return $this->_call(__METHOD__, 'POST', array('eventid' => $eventid, 'steamid' => $steamid));
    }
    /**
     * /IDOTA2Ticket_570/SteamAccountValidForEvent/v1/
     *
     * @param uint32 $eventid Event ID
     * @param uint64 $steamid The 64-bit Steam ID
     */
    public function SteamAccountValidForEventV1($eventid, $steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('eventid' => $eventid, 'steamid' => $steamid));
    }
}
