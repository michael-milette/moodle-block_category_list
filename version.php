<?php
// This file is for block_category_list for Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    block_category_list
 * @copyright  2016 TNG Consulting Inc. - www.tngconsulting.ca
 * @copyright  1999 onwards Martin Dougiamas (http://dougiamas.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @detail     This is identical to the Moodle block_course_list except that $CFG->disablemycourses = true;
 * @detail     and the plugin has been renamed. For those who can't or don't want change their config.php file.
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2016120500;            // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2015111000;            // Requires this Moodle version
$plugin->component = 'block_category_list'; // Full name of the plugin (used for diagnostics)
