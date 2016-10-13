<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconItems_570 extends AbstractInterface
{
    /**
     * /IEconItems_570/GetEquippedPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     * @param uint32 $class_id Return items equipped for this class id
     */
    public function GetEquippedPlayerItemsV1($steamid, $class_id)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid, 'class_id' => $class_id));
    }
    /**
     * /IEconItems_570/GetPlayerItems/v1/
     *
     * @param uint64 $steamid The Steam ID to fetch items for
     */
    public function GetPlayerItemsV1($steamid)
    {
        return $this->_call(__METHOD__, 'GET', array('steamid' => $steamid));
    }
    /**
     * /IEconItems_570/GetSchema/v1/
     *
     * @param string $language The language to return the names in. Defaults to returning string keys.
     */
    public function GetSchemaV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconItems_570/GetSchemaURL/v1/
     *
     */
    public function GetSchemaURLV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IEconItems_570/GetStoreMetaData/v1/
     *
     * @param string $language The language to results in.
     */
    public function GetStoreMetaDataV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
}
