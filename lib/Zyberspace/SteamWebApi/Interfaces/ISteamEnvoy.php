<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamEnvoy extends AbstractInterface
{
    /**
     * /ISteamEnvoy/PaymentOutNotification/v1/
     *
     */
    public function PaymentOutNotificationV1()
    {
        return $this->_call(__METHOD__, 'POST', array());
    }
    /**
     * /ISteamEnvoy/PaymentOutReversalNotification/v1/
     *
     */
    public function PaymentOutReversalNotificationV1()
    {
        return $this->_call(__METHOD__, 'POST', array());
    }
}
