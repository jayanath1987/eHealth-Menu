<?php
/*
--------------------------------------------------------------------------------
HHIMS - Hospital Health Information Management System
Copyright (c) 2011 Information and Communication Technology Agency of Sri Lanka
<http: www.hhims.org/>
----------------------------------------------------------------------------------
This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Affero General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along 
with this program. If not, see <http://www.gnu.org/licenses/> or write to:
Free Software  HHIMS
ICT Agency,
160/24, Kirimandala Mawatha,
Colombo 05, Sri Lanka
---------------------------------------------------------------------------------- 
Author: Author: Mr. Jayanath Liyanage   jayanathl@icta.lk
                 
URL: http://www.govforge.icta.lk/gf/project/hhims/
----------------------------------------------------------------------------------
*/
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
$menu = "";
$menu .= "<div id='left-sidebar1' style='position:fixed1;'>\n";
	$menu .= "<div class='list-group'>";
	$menu .= "<a href='' class='list-group-item active'>";
	$menu .= "Commands";
	$menu .= "</a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/home_page' class='list-group-item'>My OPD patients</a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/ward_patient' class='list-group-item'>My ward patients</a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/clinic_patient' class='list-group-item'>My clinic patients</a>";
	$menu .= "<a href='#' class='list-group-item divider'></a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/lab_orders/OPD' class='list-group-item'>My OPD lab orders</a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/lab_orders/ADM' class='list-group-item'>My ward lab orders</a>";
	$menu .= "<a href='" . base_url() . "index.php/doctor/lab_orders/CLN' class='list-group-item'>My clinic lab orders</a>";
	$menu .= "</div>";
$menu .= "</div>";
echo $menu
?>

