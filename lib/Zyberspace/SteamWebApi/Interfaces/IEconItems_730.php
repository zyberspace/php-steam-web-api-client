<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconItems_730 extends AbstractInterface
{
    /**
     * /IEconItems_730/GetPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     */
    public function GetPlayerItemsV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IEconItems_730/GetSchema/v2/
     *
     * @param string $language The language to return the names in. Defaults to returning string keys.
     */
    public function GetSchemaV2($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconItems_730/GetSchemaURL/v2/
     *
     */
    public function GetSchemaURLV2()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IEconItems_730/GetStoreMetaData/v1/
     *
     * @param string $language The language to results in.
     */
    public function GetStoreMetaDataV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
}
