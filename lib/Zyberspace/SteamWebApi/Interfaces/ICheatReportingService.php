<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class ICheatReportingService extends AbstractInterface
{
    /**
     * /ICheatReportingService/ReportCheatData/v1/
     *
     * @param uint64 $steamid steamid of the user running and reporting the cheat.
     * @param uint32 $appid The appid.
     * @param string $pathandfilename path and file name of the cheat executable.
     * @param string $webcheaturl web url where the cheat was found and downloaded.
     * @param uint64 $time_now local system time now.
     * @param uint64 $time_started local system time when cheat process started. ( 0 if not yet run )
     * @param uint64 $time_stopped local system time when cheat process stopped. ( 0 if still running )
     * @param string $cheatname descriptive name for the cheat.
     * @param uint32 $game_process_id process ID of the running game.
     * @param uint32 $cheat_process_id process ID of the cheat process that ran
     * @param uint64 $cheat_param_1 cheat param 1
     * @param uint64 $cheat_param_2 cheat param 2
     */
    public function ReportCheatDataV1($steamid, $appid, $pathandfilename, $webcheaturl, $time_now, $time_started, $time_stopped, $cheatname, $game_process_id, $cheat_process_id, $cheat_param_1, $cheat_param_2)
    {
        return $this->_call(__METHOD__, 'POST', array('steamid' => $steamid, 'appid' => $appid, 'pathandfilename' => $pathandfilename, 'webcheaturl' => $webcheaturl, 'time_now' => $time_now, 'time_started' => $time_started, 'time_stopped' => $time_stopped, 'cheatname' => $cheatname, 'game_process_id' => $game_process_id, 'cheat_process_id' => $cheat_process_id, 'cheat_param_1' => $cheat_param_1, 'cheat_param_2' => $cheat_param_2));
    }
}
