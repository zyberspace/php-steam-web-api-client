<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ITFPromos_440 extends AbstractInterface
{
    /**
     * /ITFPromos_440/GetItemID/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     * @param uint32 $promoid The promo ID to grant an item for
     */
    public function GetItemIDV1($steamid, $promoid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'promoid' => $promoid));
    }
    /**
     * /ITFPromos_440/GrantItem/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     * @param uint32 $promoid The promo ID to grant an item for
     */
    public function GrantItemV1($steamid, $promoid)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'promoid' => $promoid));
    }
}
