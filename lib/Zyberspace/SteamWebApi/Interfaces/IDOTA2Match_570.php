<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IDOTA2Match_570 extends AbstractInterface
{
    /**
     * /IDOTA2Match_570/GetLeagueListing/v1/
     *
     */
    public function GetLeagueListingV1()
    {
        return $this->_call(__METHOD__, 'GET', array());
    }
    /**
     * /IDOTA2Match_570/GetLiveLeagueGames/v1/
     *
     * @param uint32 $league_id Only show matches of the specified league id
     * @param uint64 $match_id Only show matches of the specified match id
     */
    public function GetLiveLeagueGamesV1($league_id = null, $match_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('league_id' => $league_id, 'match_id' => $match_id));
    }
    /**
     * /IDOTA2Match_570/GetMatchDetails/v1/
     *
     * @param uint64 $match_id Match id
     */
    public function GetMatchDetailsV1($match_id)
    {
        return $this->_call(__METHOD__, 'GET', array('match_id' => $match_id));
    }
    /**
     * /IDOTA2Match_570/GetMatchHistory/v1/
     *
     * @param uint32 $hero_id The ID of the hero that must be in the matches being queried
     * @param uint32 $game_mode Which game mode to return matches for
     * @param uint32 $skill The average skill range of the match, these can be [1-3] with lower numbers being lower skill. Ignored if an account ID is specified
     * @param string $min_players Minimum number of human players that must be in a match for it to be returned
     * @param string $account_id An account ID to get matches from. This will fail if the user has their match history hidden
     * @param string $league_id The league ID to return games from
     * @param uint64 $start_at_match_id The minimum match ID to start from
     * @param string $matches_requested The number of requested matches to return
     * @param string $tournament_games_only Whether or not tournament games should only be returned
     */
    public function GetMatchHistoryV1($hero_id = null, $game_mode = null, $skill = null, $min_players = null, $account_id = null, $league_id = null, $start_at_match_id = null, $matches_requested = null, $tournament_games_only = null)
    {
        return $this->_call(__METHOD__, 'GET', array('hero_id' => $hero_id, 'game_mode' => $game_mode, 'skill' => $skill, 'min_players' => $min_players, 'account_id' => $account_id, 'league_id' => $league_id, 'start_at_match_id' => $start_at_match_id, 'matches_requested' => $matches_requested, 'tournament_games_only' => $tournament_games_only));
    }
    /**
     * /IDOTA2Match_570/GetMatchHistoryBySequenceNum/v1/
     *
     * @param uint64 $start_at_match_seq_num
     * @param uint32 $matches_requested
     */
    public function GetMatchHistoryBySequenceNumV1($start_at_match_seq_num = null, $matches_requested = null)
    {
        return $this->_call(__METHOD__, 'GET', array('start_at_match_seq_num' => $start_at_match_seq_num, 'matches_requested' => $matches_requested));
    }
    /**
     * /IDOTA2Match_570/GetScheduledLeagueGames/v1/
     *
     * @param uint32 $date_min The starting time stamp to collect scheduled games from. If ignored, it will use the current time
     * @param uint32 $date_max The ending time stamp. If this is more than 7 days past the starting time stamp, it will be clamped to 7 days.
     */
    public function GetScheduledLeagueGamesV1($date_min = null, $date_max = null)
    {
        return $this->_call(__METHOD__, 'GET', array('date_min' => $date_min, 'date_max' => $date_max));
    }
    /**
     * /IDOTA2Match_570/GetTeamInfoByTeamID/v1/
     *
     * @param uint64 $start_at_team_id
     * @param uint32 $teams_requested
     */
    public function GetTeamInfoByTeamIDV1($start_at_team_id = null, $teams_requested = null)
    {
        return $this->_call(__METHOD__, 'GET', array('start_at_team_id' => $start_at_team_id, 'teams_requested' => $teams_requested));
    }
    /**
     * /IDOTA2Match_570/GetTopLiveGame/v1/
     *
     * @param int32 $partner Which partner's games to use.
     */
    public function GetTopLiveGameV1($partner)
    {
        return $this->_call(__METHOD__, 'GET', array('partner' => $partner));
    }
    /**
     * /IDOTA2Match_570/GetTopWeekendTourneyGames/v1/
     *
     * @param int32 $partner Which partner's games to use.
     * @param int32 $home_division Prefer matches from this division.
     */
    public function GetTopWeekendTourneyGamesV1($partner, $home_division = null)
    {
        return $this->_call(__METHOD__, 'GET', array('partner' => $partner, 'home_division' => $home_division));
    }
    /**
     * /IDOTA2Match_570/GetTournamentPlayerStats/v2/
     *
     * @param string $account_id
     * @param string $league_id
     * @param string $hero_id
     * @param string $time_frame
     * @param uint64 $match_id
     * @param uint32 $phase_id
     */
    public function GetTournamentPlayerStatsV2($account_id, $league_id = null, $hero_id = null, $time_frame = null, $match_id = null, $phase_id = null)
    {
        return $this->_call(__METHOD__, 'GET', array('account_id' => $account_id, 'league_id' => $league_id, 'hero_id' => $hero_id, 'time_frame' => $time_frame, 'match_id' => $match_id, 'phase_id' => $phase_id));
    }
}
