<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamDirectory extends AbstractInterface
{
    /**
     * /ISteamDirectory/GetCMList/v1/
     *
     * @param uint32 $cellid Client's Steam cell ID
     * @param uint32 $maxcount Max number of servers to return
     */
    public function GetCMListV1($cellid, $maxcount = null)
    {
        return $this->_call(__METHOD__, 'GET', array('cellid' => $cellid, 'maxcount' => $maxcount));
    }
}
