<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconItems_238460 extends AbstractInterface
{
    /**
     * /IEconItems_238460/GetPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     */
    public function GetPlayerItemsV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
}
