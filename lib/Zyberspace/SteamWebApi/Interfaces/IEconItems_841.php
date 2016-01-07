<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconItems_841 extends AbstractInterface
{
    /**
     * /IEconItems_841/GetPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     */
    public function GetPlayerItemsV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IEconItems_841/GetSchema/v1/
     *
     * @param string $language The language to return the names in. Defaults to returning string keys.
     */
    public function GetSchemaV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
}
