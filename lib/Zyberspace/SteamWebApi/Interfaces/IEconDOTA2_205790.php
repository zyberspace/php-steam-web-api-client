<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconDOTA2_205790 extends AbstractInterface
{
    /**
     * /IEconDOTA2_205790/GetEventStatsForAccount/v1/
     *
     * @param uint32 $eventid The League ID of the compendium you're looking for.
     * @param uint32 $accountid The account ID to look up.
     * @param string $language The language to provide hero names in.
     */
    public function GetEventStatsForAccountV1($eventid, $accountid, $language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('eventid' => $eventid, 'accountid' => $accountid, 'language' => $language));
    }
    /**
     * /IEconDOTA2_205790/GetGameItems/v1/
     *
     * @param string $language The language to provide item names in.
     */
    public function GetGameItemsV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconDOTA2_205790/GetHeroes/v1/
     *
     * @param string $language The language to provide hero names in.
     * @param bool $itemizedonly Return a list of itemized heroes only.
     */
    public function GetHeroesV1($language = null, $itemizedonly = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language, 'itemizedonly' => $itemizedonly));
    }
    /**
     * /IEconDOTA2_205790/GetItemIconPath/v1/
     *
     * @param string $iconname The item icon name to get the CDN path of
     * @param uint32 $icontype The type of image you want. 0 = normal, 1 = large, 2 = ingame
     */
    public function GetItemIconPathV1($iconname, $icontype = null)
    {
        return $this->_call(__METHOD__, 'GET', array('iconname' => $iconname, 'icontype' => $icontype));
    }
    /**
     * /IEconDOTA2_205790/GetRarities/v1/
     *
     * @param string $language The language to provide rarity names in.
     */
    public function GetRaritiesV1($language = null)
    {
        return $this->_call(__METHOD__, 'GET', array('language' => $language));
    }
    /**
     * /IEconDOTA2_205790/GetTournamentPrizePool/v1/
     *
     * @param uint32 $leagueid The ID of the league to get the prize pool of
     */
    public function GetTournamentPrizePoolV1($leagueid = null)
    {
        return $this->_call(__METHOD__, 'GET', array('leagueid' => $leagueid));
    }
}
