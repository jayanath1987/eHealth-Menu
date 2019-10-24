<?php
/*
--------------------------------------------------------------------------------
HHIMS - Hospital Health Information Management System
Copyright (c) 2011 Information and Communication Technology Agency of Sri Lanka
<http: www.icta.lk />
----------------------------------------------------------------------------------
This program is free software: you can redistribute it and/or modify it under the
terms of the GNU Affero General Public License as published by the Free Software 
Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,but WITHOUT ANY 
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR 
A PARTICULAR PURPOSE. See the GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License along 
with this program. If not, see <http://www.gnu.org/licenses/> 




---------------------------------------------------------------------------------- 
Date : June 2016
Author: Mr. Jayanath Liyanage   jayanathl@icta.lk
Programme Manager: Shriyananda Rathnayake
URL: http://www.govforge.icta.lk/gf/project/hhims/
----------------------------------------------------------------------------------
*/
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
//print_r($user_menu);
// $mdsPermission = MDSPermission::GetInstance();
$menu = "";
$menu .= "<div id='left-sidebar1' style='position:fixed1;'>\n";
$menu .= "<div class='list-group'>";
$menu .= "<a href='' class='list-group-item active'>";
$menu .= "Patient";
$menu .= "</a>";

// encounter statistics
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/encounters/view"
) . "\" data-target=\"#encounter-stats\">Encounter Statistics</a>";

// visit details
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/visitDetails/view"
) . "\" data-target=\"#visit-details\">Visit Details</a>";

// visit complaint treated
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/visitComplaints/view"
) . "\" data-target=\"#visit-complaints\">Visit Complaint Treated</a>";

// Trauma Surveillance Report
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/traumaSurveillance/view"
) . "\" data-target=\"#trauma-survelinace\">Trauma Surveillance Report</a>";


// Trauma Data Bank
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/traumaDataBank/view"
) . "\" data-target=\"#traumaDataBank\">Trauma Data Bank</a>";


// opd registry
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/opdRegistryReport/view"
) . "\" data-target=\"#traumaDataBank\">OPD Registry</a>";

// Trauma Statistic Report
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/traumaStatistic/view"
) . "\" data-target=\"#trauma-survelinace\">Trauma Statistic Report</a>";

// visit ILI
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/visitDetailsILI/view"
) . "\" data-target=\"#visit-complaints\">Visit Complaint ILI</a>";

$menu .= "</div>";

$menu .= "<div class='list-group'>";
$menu .= "<a href='' class='list-group-item active'>";
if ($this->config->item('purpose') !="PP"){
	$menu .= "Hospital";
}else{
	$menu .= "Private practice";
}
$menu .= "</a>";
// current stock balance
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/pharmacyCurrentStock/view"
) . "\" data-target=\"#order\">Current stock balance</a>";

//create drug order
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/drugOrder/view"
) . "\" data-target=\"#order\">Create drug order</a>";
// daily drugs dispensed
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/pharmacyBalance/view"
) . "\" data-target=\"#daily\">Daily drugs dispensed</a>";

// daily drugs dispensed userwise
/*$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/UserpharmacyBalance/view"
    ) . "\" data-target=\"#daily\">User drugs dispensed</a>";*/
// immr
if ($this->config->item('purpose') !="PP"){
	$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
	    "report/pdf/immr/view"
	) . "\" data-target=\"#immr\">Hospital IMMR</a>";
	
	// immr
	$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
	    "report/pdf/hospitalPerformance/view"
	) . "\" data-target=\"#performance\">Hospital performance</a>";
}
$menu .= "</div>";

$menu .= " </div> \n";
echo $menu;
?>