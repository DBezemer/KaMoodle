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
 * Mobile failed event
 *
 * @package    local_kaltura
 * @copyright  2014 David Bezemer <info@davidbezemer.nl>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_kaltura\event;

class check_mobile_failed extends \core\event\base {
    /**
    * Init method.
    *
    * @return void
    */
    protected function init() {
    $this->context = \context_system::instance();
    $this->data['crud'] = 'c';
    $this->data['edulevel'] = self::LEVEL_OTHER;
    }

    /**
    * Return localised event name.
    *
    * @return string
    */
    public static function get_name() {
    return get_string('checkmobile', 'local_kaltura');
    }

    /**
    * Returns non-localised event description with id's for admin use only.
    *
    * @return string
    */
    public function get_description() {
    $description = $this->other;
    return $description;
    }

    /**
    * Get URL related to the action.
    *
    * @return \moodle_url
    */
    public function get_url() {
    return new \moodle_url('/admin/settings.php?section=local_kaltura');
    }

    /**
    * Return legacy data for add_to_log().
    *
    * @return array
    */
    protected function get_legacy_logdata() {
    return array(SITEID, 'local_kaltura', 'test mobile flavor', '/admin/settings.php?section=local_kaltura');
    }
}