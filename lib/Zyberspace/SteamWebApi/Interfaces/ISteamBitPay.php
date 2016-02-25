<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamBitPay extends AbstractInterface
{
    /**
     * /ISteamBitPay/BitPayPaymentNotification/v1/
     *
     */
    public function BitPayPaymentNotificationV1()
    {
        return $this->_call(__METHOD__, 'POST', array());
    }
}
