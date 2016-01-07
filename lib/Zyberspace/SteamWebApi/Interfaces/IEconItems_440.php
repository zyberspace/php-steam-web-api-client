<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconItems_440 extends AbstractInterface
{
    /**
     * /IEconItems_440/GetPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     */
    public function GetPlayerItemsV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IEconItems_440/GetSchema/v1/
     *
     * @param string $language The language to return the names in. Defaults to returning string keys.
     */
    public function GetSchemaV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconItems_440/GetSchemaURL/v1/
     *
     */
    public function GetSchemaURLV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IEconItems_440/GetStoreMetaData/v1/
     *
     * @param string $language The language to results in.
     */
    public function GetStoreMetaDataV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconItems_440/GetStoreStatus/v1/
     *
     */
    public function GetStoreStatusV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
}
