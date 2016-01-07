<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ITFPromos_730 extends AbstractInterface
{
    /**
     * /ITFPromos_730/GetItemID/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     * @param uint32 $PromoID The promo ID to grant an item for
     */
    public function GetItemIDV1($steamid, $PromoID)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'PromoID' => $PromoID));
    }
    /**
     * /ITFPromos_730/GrantItem/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     * @param uint32 $PromoID The promo ID to grant an item for
     */
    public function GrantItemV1($steamid, $PromoID)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'PromoID' => $PromoID));
    }
}
