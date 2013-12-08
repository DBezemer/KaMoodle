<?php

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
 * My Media version file
 *
 * @package    local_mymedia
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!defined('MOODLE_INTERNAL')) {
    die('Direct access to this script is forbidden.');    ///  It must be included from a Moodle page
}

$plugin->version            = 2013041502;
$plugin->component          = 'local_mymedia';
$plugin->release            = 'Kaltura release 3.0.95 (RL: 2.4.1.2)';
$plugin->requires           = 2012120300;

$plugin->dependencies = array(
    'local_kaltura' => 2013041500,
    'repository_kaltura' => 2013041500
);
