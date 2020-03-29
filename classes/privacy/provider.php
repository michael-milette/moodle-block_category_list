<?php
// This file is part of Category List plugin for Moodle - http://moodle.org/
//
// Category List is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Category List is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Category List.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Privacy Subsystem implementation for block_category_list.
 *
 * @package    block_category_list
 * @copyright  2016-2020 TNG Consulting Inc. - www.tngconsulting.ca
 * @copyright  2018 Zig Tan <zig@moodle.com>
 * @author     Michael Milette
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_category_list\privacy;

defined('MOODLE_INTERNAL') || die();

/**
 * Privacy Subsystem for block_category_list implementing null_provider.
 *
 * @copyright  2016-2020 TNG Consulting Inc. <www.tngconsulting.ca>
 * @copyright  2018 Zig Tan <zig@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {

    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason() : string {
        return 'privacy:metadata';
    }
}
