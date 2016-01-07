<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamEconomy extends AbstractInterface
{
    /**
     * /ISteamEconomy/GetAssetClassInfo/v1/
     *
     * @param uint32 $appid Must be a steam economy app.
     * @param string $language The user's local language
     * @param uint32 $class_count Number of classes requested. Must be at least one.
     * @param uint64 $classid0 Class ID of the nth class.
     * @param uint64 $instanceid0 Instance ID of the nth class.
     */
    public function GetAssetClassInfoV1($appid, $language = null, $class_count, $classid0, $instanceid0 = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'language' => $language, 'class_count' => $class_count, 'classid0' => $classid0, 'instanceid0' => $instanceid0));
    }
    /**
     * /ISteamEconomy/GetAssetPrices/v1/
     *
     * @param uint32 $appid Must be a steam economy app.
     * @param string $currency The currency to filter for
     * @param string $language The user's local language
     */
    public function GetAssetPricesV1($appid, $currency = null, $language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'currency' => $currency, 'language' => $language));
    }
}
