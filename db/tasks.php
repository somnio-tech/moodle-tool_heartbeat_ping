<?php
/**
 * @package     tool_heartbeat_ping
 * @copyright   2021 Somnio Technology Solutions <info@somniotech.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$tasks = [
    [
        'classname' => 'tool_heartbeat_ping\task\ping',
        'blocking' => 0,
        'minute' => 0,
        'hour' => '*/2',
        'day' => '*',
        'month' => '*',
        'dayofweek' => '*'
    ]
];
