<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamCDN extends AbstractInterface
{
    /**
     * /ISteamCDN/SetClientFilters/v1/
     *
     * @param string $cdnname Steam name of CDN property
     * @param string $allowedipblocks comma-separated list of allowed IP address blocks in CIDR format - blank for not used
     * @param string $allowedasns comma-separated list of allowed client network AS numbers - blank for not used
     * @param string $allowedipcountries comma-separated list of allowed client IP country codes in ISO 3166-1 format - blank for not used
     */
    public function SetClientFiltersV1($cdnname, $allowedipblocks = null, $allowedasns = null, $allowedipcountries = null)
    {
        return $this->_call(__METHOD__, 'POST', array('cdnname' => $cdnname, 'allowedipblocks' => $allowedipblocks, 'allowedasns' => $allowedasns, 'allowedipcountries' => $allowedipcountries));
    }
    /**
     * /ISteamCDN/SetPerformanceStats/v1/
     *
     * @param string $cdnname Steam name of CDN property
     * @param uint32 $mbps_sent Outgoing network traffic in Mbps
     * @param uint32 $mbps_recv Incoming network traffic in Mbps
     * @param uint32 $cpu_percent Percent CPU load
     * @param uint32 $cache_hit_percent Percent cache hits
     */
    public function SetPerformanceStatsV1($cdnname, $mbps_sent = null, $mbps_recv = null, $cpu_percent = null, $cache_hit_percent = null)
    {
        return $this->_call(__METHOD__, 'POST', array('cdnname' => $cdnname, 'mbps_sent' => $mbps_sent, 'mbps_recv' => $mbps_recv, 'cpu_percent' => $cpu_percent, 'cache_hit_percent' => $cache_hit_percent));
    }
}
