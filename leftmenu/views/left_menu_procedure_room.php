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
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//print_r($user_menu);
      // $mdsPermission = MDSPermission::GetInstance();
           $menu = "";
           $menu .="<div id='left-sidebar1' style='position:fixed1;'>\n";
			$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="OPD";
			  $menu .="</a>";
			  $menu .="<a href='".base_url()."index.php/search/procedures_order' class='list-group-item'>Procedure Room</a>";
			  $menu .="<a href='".base_url()."index.php/search/opd_sample_order' class='list-group-item'>Collection Room</a>";
			  $menu .="<a href='".base_url()."index.php/search/injection_order' class='list-group-item'>Injection Room</a>";
			  //$menu .="<a href='".base_url()."index.php/search/opd_ecg_order' class='list-group-item'>OPD ECG Room</a>";
	
			$menu .="</div>";
                        
                        $menu .="<div class='list-group'>";
			$menu .="<a href='' class='list-group-item active'>";
			$menu .="Clinic";
			$menu .="</a>";
			  
			  $menu .="<a href='".base_url()."index.php/search/clinic_procedure_order' class='list-group-item'>Procedure Room</a>";
                          $menu .="<a href='".base_url()."index.php/search/clinic_sample_order' class='list-group-item'>Collection Room</a>";
			  //$menu .="<a href='".base_url()."index.php/search/clinic_ecg_order' class='list-group-item'>Clinic ECG Room</a>";


			$menu .="</div>";
	$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="Reports";
			  $menu .="</a>";
// daily drugs dispensed

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/ProceduresDone/view"
    ) . "\" data-target=\"#procedureorder\">Procedures Done</a>";
			

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/CollectionDone/view"
    ) . "\" data-target=\"#collectionorder\">Colection Done</a>";
			
                        
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/InjectionDone/view"
    ) . "\" data-target=\"#injectionorder\">Injection Done</a>";
			
		
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/InjectionDetails/view"
    ) . "\" data-target=\"#injectionorder\">Injection Details</a>";

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/InjectionGiven/view"
    ) . "\" data-target=\"#injectionorder\">Injection Given</a>";

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/ProcedureDetails/view"
    ) . "\" data-target=\"#injectionorder\">Procedure Details</a>";

$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/ProcedureGiven/view"
    ) . "\" data-target=\"#injectionorder\">Procedure Given</a>";
			$menu .="</div>";
		
                        
			
			$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="Commands";
			  $menu .="</a>";
			  $menu .="<a href='javascript:launch_qdisplay();' class='list-group-item ' style='color:green'><span class='glyphicon glyphicon-play'></span>&nbsp;<b>Launch QDisplay</b></a>";
			  $menu .="<a href='".site_url('form/edit/qdisplay_conf/3/?CONTINUE=search/procedures_order')."' class='list-group-item'><span class='glyphicon glyphicon-cog'></span>&nbsp;QDisplay Settings</a>";
            $menu .="</div>";
			
			$menu .=" </div> \n";
        echo $menu ;
?>
<script>
function launch_qdisplay(){
	var params = [
            'height='+screen.height,
            'width='+screen.width,
            'fullscreen=yes' // only works in IE, but here for completeness
            ].join(',');

	var qdisplay = window.open("<?php echo site_url("qdisplay/procedure_room");?>","qdisplay_proc",params);
	qdisplay.focus();
	setTimeout(function(){
	   qdisplay.location.reload();
	}, 2000);
}
</script>
