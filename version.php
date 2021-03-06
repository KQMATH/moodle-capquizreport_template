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
 * CAPQuiz attempts report version information.
 *
 * @package     capquizreport_attempts
 * @author      André Storhaug <andr3.storhaug@gmail.com>
 * @copyright   2019 Norwegian University of Science and Technology (NTNU)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2019071900;    // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2016120500;    // Requires this Moodle version.
$plugin->component = 'capquizreport_template';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = 'v0.1.0';
$plugin->dependencies = array(
    'mod_capquiz' => 2019071800,   // The CAPQuiz plugin version 2019071800 or higher must be present.
);
