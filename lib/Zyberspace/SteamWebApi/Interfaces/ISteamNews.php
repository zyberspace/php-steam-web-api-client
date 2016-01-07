<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ISteamNews extends AbstractInterface
{
    /**
     * /ISteamNews/GetNewsForApp/v1/
     *
     * @param uint32 $appid AppID to retrieve news for
     * @param uint32 $maxlength Maximum length for the content to return, if this is 0 the full content is returned, if it's less then a blurb is generated to fit.
     * @param uint32 $enddate Retrieve posts earlier than this date (unix epoch timestamp)
     * @param uint32 $count # of posts to retrieve (default 20)
     */
    public function GetNewsForAppV1($appid, $maxlength = null, $enddate = null, $count = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'maxlength' => $maxlength, 'enddate' => $enddate, 'count' => $count));
    }
    /**
     * /ISteamNews/GetNewsForApp/v2/
     *
     * @param uint32 $appid AppID to retrieve news for
     * @param uint32 $maxlength Maximum length for the content to return, if this is 0 the full content is returned, if it's less then a blurb is generated to fit.
     * @param uint32 $enddate Retrieve posts earlier than this date (unix epoch timestamp)
     * @param uint32 $count # of posts to retrieve (default 20)
     * @param string $feeds Comma-seperated list of feed names to return news for
     */
    public function GetNewsForAppV2($appid, $maxlength = null, $enddate = null, $count = null, $feeds = null)
    {
        return $this->_call(__METHOD__, 'GET', array('appid' => $appid, 'maxlength' => $maxlength, 'enddate' => $enddate, 'count' => $count, 'feeds' => $feeds));
    }
}
