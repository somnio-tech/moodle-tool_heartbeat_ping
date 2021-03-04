<?php

/**
 * @package     tool_heartbeat_ping
 * @copyright   2021 Somnio Technology Solutions <info@somniotech.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_heartbeat_ping\task;

use lang_string;
use tool_heartbeat_ping\HTTPMessage;

class ping extends \core\task\scheduled_task {

    /**
     * Get name.
     * @return string
     */
    public function get_name() {
        return get_string('name', 'tool_heartbeat_ping');
    }

    /**
     * Execute.
     */
    public function execute() {
        mtrace("CronPing Started");
        $run_url=get_config('tool_heartbeat_ping', 'run_url');
        $completed_url=get_config('tool_heartbeat_ping', 'complete_url');
        if($run_url!=''&&$completed_url!='') {
            $client = new HTTPMessage($run_url);
            mtrace("Running Url: " . $run_url);
            $res = $client->send();
            mtrace('Run response: ' . $res);
            sleep(1);
            $client = new HTTPMessage($completed_url);
            mtrace("Completed Url: " . $completed_url);
            $res = $client->send();
            mtrace('Completed response: ' . $res);

        }else{
            mtrace("Run/Complete Url is empty! Be sure to set values on the ".new lang_string('name', 'tool_heartbeat_ping'));
        }
        mtrace("CronPing Finished");

    }

}
