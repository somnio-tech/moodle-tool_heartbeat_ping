<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     tool_heartbeat_ping
 * @category    admin
 * @copyright   2021 Somnio Technology Solutions <info@somniotech.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
if ($hassiteconfig) {

    $settings = new admin_settingpage('tool_heartbeat_ping_settings', new lang_string('pluginname', 'tool_heartbeat_ping'));

    $settings->add(new admin_setting_configtext(
        'tool_heartbeat_ping/run_url',
        new lang_string('name', 'tool_heartbeat_ping'),
        new lang_string('config_run_url', 'tool_heartbeat_ping'),
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configtext(
        'tool_heartbeat_ping/complete_url',
        new lang_string('name', 'tool_heartbeat_ping'),
        new lang_string('config_complete_url', 'tool_heartbeat_ping'),
        '',
        PARAM_URL
    ));

    $ADMIN->add('tools', $settings);

}
