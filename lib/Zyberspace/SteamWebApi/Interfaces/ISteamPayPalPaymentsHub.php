<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamPayPalPaymentsHub extends AbstractInterface
{
    /**
     * /ISteamPayPalPaymentsHub/PayPalPaymentsHubPaymentNotification/v1/
     *
     */
    public function PayPalPaymentsHubPaymentNotificationV1()
    {
        return $this->_call(__METHOD__, 'POST', array());
    }
}
