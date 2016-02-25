<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IInventoryService extends AbstractInterface
{
    /**
     * /IInventoryService/GetPriceSheet/v1/
     *
     * @param int32 $ecurrency
     */
    public function GetPriceSheetV1($ecurrency)
    {
        return $this->_call(__METHOD__, 'GET', array('ecurrency' => $ecurrency));
    }
}
