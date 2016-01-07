<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Ticket_205790 extends AbstractInterface
{
    /**
     * /IDOTA2Ticket_205790/SetSteamAccountPurchased/v1/
     *
     * @param uint32 $eventid Event ID
     * @param uint64 $steamid The 64-bit Steam ID
     */
    public function SetSteamAccountPurchasedV1($eventid, $steamid)
    {
        return $this->_call(__METHOD__, 'POST', array('eventid' => $eventid, 'steamid' => $steamid));
    }
    /**
     * /IDOTA2Ticket_205790/SteamAccountValidForEvent/v1/
     *
     * @param uint32 $eventid Event ID
     * @param uint64 $steamid The 64-bit Steam ID
     */
    public function SteamAccountValidForEventV1($eventid, $steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('eventid' => $eventid, 'steamid' => $steamid));
    }
}
