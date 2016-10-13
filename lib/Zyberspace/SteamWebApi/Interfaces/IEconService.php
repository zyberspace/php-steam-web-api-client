<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IEconService extends AbstractInterface
{
    /**
     * /IEconService/GetTradeHistory/v1/
     *
     * @param uint32 $max_trades The number of trades to return information for
     * @param uint32 $start_after_time The time of the last trade shown on the previous page of results, or the time of the first trade if navigating back
     * @param uint64 $start_after_tradeid The tradeid shown on the previous page of results, or the ID of the first trade if navigating back
     * @param bool $navigating_back The user wants the previous page of results, so return the previous max_trades trades before the start time and ID
     * @param bool $get_descriptions If set, the item display data for the items included in the returned trades will also be returned
     * @param string $language The language to use when loading item display data
     * @param bool $include_failed
     * @param bool $include_total If set, the total number of trades the account has participated in will be included in the response
     */
    public function GetTradeHistoryV1($max_trades, $start_after_time, $start_after_tradeid, $navigating_back, $get_descriptions, $language, $include_failed, $include_total)
    {
        return $this->_call(__METHOD__, 'GET', array('max_trades' => $max_trades, 'start_after_time' => $start_after_time, 'start_after_tradeid' => $start_after_tradeid, 'navigating_back' => $navigating_back, 'get_descriptions' => $get_descriptions, 'language' => $language, 'include_failed' => $include_failed, 'include_total' => $include_total));
    }
    /**
     * /IEconService/GetTradeOffers/v1/
     *
     * @param bool $get_sent_offers Request the list of sent offers.
     * @param bool $get_received_offers Request the list of received offers.
     * @param bool $get_descriptions If set, the item display data for the items included in the returned trade offers will also be returned.
     * @param string $language The language to use when loading item display data.
     * @param bool $active_only Indicates we should only return offers which are still active, or offers that have changed in state since the time_historical_cutoff
     * @param bool $historical_only Indicates we should only return offers which are not active.
     * @param uint32 $time_historical_cutoff When active_only is set, offers updated since this time will also be returned
     */
    public function GetTradeOffersV1($get_sent_offers, $get_received_offers, $get_descriptions, $language, $active_only, $historical_only, $time_historical_cutoff)
    {
        return $this->_call(__METHOD__, 'GET', array('get_sent_offers' => $get_sent_offers, 'get_received_offers' => $get_received_offers, 'get_descriptions' => $get_descriptions, 'language' => $language, 'active_only' => $active_only, 'historical_only' => $historical_only, 'time_historical_cutoff' => $time_historical_cutoff));
    }
    /**
     * /IEconService/GetTradeOffer/v1/
     *
     * @param uint64 $tradeofferid
     * @param string $language
     */
    public function GetTradeOfferV1($tradeofferid, $language)
    {
        return $this->_call(__METHOD__, 'GET', array('tradeofferid' => $tradeofferid, 'language' => $language));
    }
    /**
     * /IEconService/GetTradeOffersSummary/v1/
     *
     * @param uint32 $time_last_visit The time the user last visited.  If not passed, will use the time the user last visited the trade offer page.
     */
    public function GetTradeOffersSummaryV1($time_last_visit)
    {
        return $this->_call(__METHOD__, 'GET', array('time_last_visit' => $time_last_visit));
    }
    /**
     * /IEconService/DeclineTradeOffer/v1/
     *
     * @param uint64 $tradeofferid
     */
    public function DeclineTradeOfferV1($tradeofferid)
    {
        return $this->_call(__METHOD__, 'POST', array('tradeofferid' => $tradeofferid));
    }
    /**
     * /IEconService/CancelTradeOffer/v1/
     *
     * @param uint64 $tradeofferid
     */
    public function CancelTradeOfferV1($tradeofferid)
    {
        return $this->_call(__METHOD__, 'POST', array('tradeofferid' => $tradeofferid));
    }
}
