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
$menu .= "Departments";
$menu .= "</a>";
$menu .= "<a href='" . base_url() . "index.php/pharmacy/show_list/OPD' class='list-group-item'>OPD Pharmacy</a>";
if ($this->config->item('purpose') !="PP"){
	$menu .= "<a href='" . base_url() . "index.php/pharmacy/show_list/CLN' class='list-group-item'>Clinic Pharmacy</a>";
}
//$menu .= "<a href='" . base_url() . "index.php/pharmacy' class='list-group-item'>InPatient</a>";
$menu .= "</div>";

		$menu .="<div id='left-sidebar1' style='position:fixed1;'>\n";
		$menu .="<div class='list-group'>";
		  $menu .="<a href='' class='list-group-item active'>";
			$menu .="Commands";
		  $menu .="</a>";
		  $menu .="<a href='javascript:launch_qdisplay();' class='list-group-item ' style='color:green'><span class='glyphicon glyphicon-play'></span>&nbsp;<b>Launch QDisplay</b></a>";
		  $menu .="<a href='".site_url('form/edit/qdisplay_conf/2/?CONTINUE=pharmacy')."' class='list-group-item'><span class='glyphicon glyphicon-cog'></span>&nbsp;QDisplay Settings</a>";
		$menu .="<a href='".base_url()."index.php/preference/load/pharmacy_counter' class='list-group-item'>Add/Edit Pharm. counter</a>";

        $menu .="</div>";

			$menu .=" </div> \n";
$menu .= "<div class='list-group'>";
$menu .= "<a href='' class='list-group-item active'>";
$menu .= "Reports";
$menu .= "</a>";

// daily drugs dispensed
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/pharmacyBalance/view"
    ) . "\" data-target=\"#daily\">Daily drugs dispensed</a>";
// drugs request by pahmacy
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/DrugRequestfromphamacy/view"
    ) . "\" data-target=\"#daily\">Drug Request from phamacy</a>";

// drugs return by pahmacy
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/DrugReturnfromphamacy/view"
    ) . "\" data-target=\"#daily\">Drug Return from phamacy</a>";

// daily drugs dispensed (me)
if($this->session->userdata("UserGroup")=='Pharm'){

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/MypharmacyBalance/view"
    ) . "\" data-target=\"#daily\">Daily drugs dispensed (Me)</a>";

// drugs dispensed
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/Drugs_dispensed/view"
    ) . "\" data-target=\"#prescription-by-drug\">Drugs Dispensed</a>";


$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/Myprescription/view"
    ) . "\" data-target=\"#daily\">Daily Prescription (Me)</a>";


// prescription by drug (me)
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/myprescriptionsByDrug/view"
    ) . "\" data-target=\"#prescription-by-drug\">Prescription by Drug (Me)</a>";

}

// prescriptions
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/myprescriptions/view"
) . "\" data-target=\"#prescription\">Prescriptions (Me)</a>";

// current stock balance
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/pharmacyCurrentStock/view"
    ) . "\" data-target=\"#current-stock\">Current stock balance</a>";
/**
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
        "report/pdf/pharmacyCurrentStock/print"
    ) . "')\" href='#'>Current stock balance</a>";
 **/

//create drug order
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/drugOrder/view"
    ) . "\" data-target=\"#order\">Create drug order</a>";

// prescriptions
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
    "report/pdf/prescriptions/view"
) . "\" data-target=\"#prescription\">Prescriptions</a>";

// prescription by drug
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/prescriptionsByDrug/view"
    ) . "\" data-target=\"#prescription-by-drug\">Prescription by Drug</a>";



$menu .= "</div>";

$menu .= "<div class='list-group'>";
$menu .= "<a href='' class='list-group-item active'>";
$menu .= "Maintain";
$menu .= "</a>";
$menu .= "<a href='" . base_url() . "index.php/preference/load/who_drug' class='list-group-item'>Drugs</a>";
$menu .= "<a href='" . base_url() . "index.php/preference/load/drugs_frequency' class='list-group-item'>Drugs frequency</a>";
$menu .= "<a href='" . base_url() . "index.php/drug_stock/view' class='list-group-item'>Stock management</a>";

$DS=$this->session->userdata("DS");
if($DS != null){
$menu .="<a href='".base_url()."index.php/preference/load/drug_request' class='list-group-item'>Drug Request</a>";
$menu .="<a href='".base_url()."index.php/preference/load/drug_return' class='list-group-item'>Drug Return</a>";
$menu .="<a href='".base_url()."index.php/preference/load/manual_lot_balancing' class='list-group-item'>Manual Lot Balancing</a>";
}
$menu .= "</div>";

$menu .= " </div> \n";

echo $menu

?>
<script>
function launch_qdisplay(){
	var params = [
            'height='+screen.height,
            'width='+screen.width,
            'fullscreen=yes' // only works in IE, but here for completeness
            ].join(',');

	var qdisplay = window.open("<?php echo site_url("qdisplay/pharmacy");?>","qdisplay_phar",params);
	qdisplay.focus();
	setTimeout(function(){
	   qdisplay.location.reload();
	}, 2000);
}
</script>
