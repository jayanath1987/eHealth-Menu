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
__________________________________________________________________________________
Private Practice configuration :

Date : July 2015		ICT Agency of Sri Lanka (www.icta.lk), Colombo
Author : Laura Lucas
Programme Manager: Shriyananda Rathnayake
Supervisors : Jayanath Liyanage, Erandi Hettiarachchi
URL: http://www.govforge.icta.lk/gf/project/hhims/
----------------------------------------------------------------------------------
*/
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//print_r($user_menu);
      // $mdsPermission = MDSPermission::GetInstance();
           $menu = "";
		    $menu .="<div id='left-sidebar1' style='position:fixed;'>\n";
			
					
				  
						$menu .="<div class='list-group'>";
						  $menu .="<a href='' class='list-group-item active'>";
							$menu .="Commands";
						  $menu .="</a>";
						  $menu .="<a href='".base_url()."index.php/patient/view/".$pid."' class='list-group-item'><span class='glyphicon glyphicon-user'></span>&nbsp;Patient overview</a>";
						if ($this->config->item('block_opd_after') >= $d_day){	
							 if (($opd_visits_info["referred_admission_id"] == 0) &&($opd_visits_info["is_refered"] == 0) && ($this->config->item('purpose') != "PP" )){
								$menu .="<a href='".base_url()."index.php/opd/reffer_to_admission/".$opdid."' class='list-group-item '><span class='glyphicon glyphicon-export'></span>&nbsp;Refer to admission</a>";
							  }
                                                          
                                                           if (($opd_visits_info["referred_clinic_id"] == 0) &&($opd_visits_info["is_refered"] == 0) && ($this->config->item('purpose') != "PP" )){
								$menu .="<a href='".base_url()."index.php/opd/reffer_to_clinic/".$opdid."' class='list-group-item '><span class='glyphicon glyphicon-export'></span>&nbsp;Refer to Clinic</a>";
							  }
							  
							  $menu .="<a href='".base_url()."index.php/form/create/patient_history/".$pid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-header'></span>&nbsp;Add History</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/patient_alergy/".$pid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-bell'></span>&nbsp;Add Allergy</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/patient_exam/".$pid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-check'></span>&nbsp;Add Examination</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/opd_ecg/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-signal'></span>&nbsp;Order ECG</a>";
							  //$menu .="<a href='".base_url()."index.php/form/create/opd_ecg/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-signal'></span>&nbsp;Order ECG</a>";
							  $menu .="<a href='".base_url()."index.php/laboratory/opd_order/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-tint'></span>&nbsp;New Order Lab</a>";
							  $menu .="<a href='".base_url()."index.php/opd/new_prescribe/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-list-alt'></span>&nbsp;New Prescription</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/opd_treatment/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-list'></span>&nbsp;Treatments</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/patient_injection/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-pushpin'></span>&nbsp;Order an Injection</a>";
							  $menu .="<a href='".base_url()."index.php/form/create/dicom/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-picture'></span>&nbsp;DICOM</a>";
							 // $menu .="<a href='".base_url()."index.php/form/create/patient_injection/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-cadastral-map'></span>&nbsp;IMMR</a>";
                                                          $menu .="<a href='".base_url()."index.php/form/create/opd_notes/".$pid."/".$opdid."/?CONTINUE=opd/view/".$opdid."' class='list-group-item'><span class='glyphicon glyphicon-leaf'></span>&nbsp;Nursing notes</a>";
						}
						$menu .="</div>";
						
						
				
$menu .="<div class='list-group'>";
						  $menu .="<a href='' class='list-group-item active'>";
							$menu .="Prints";
						  $menu .="</a>";				
// Print patient slip
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/patientSlip/print/$pid"
) . "')\" href='#'>Print patient slip</a>";

// Print patient card
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/patientCard/print/$pid"
) . "')\" href='#'>Print patient card</a>";

// Print patient summery
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/patientSummery/print/$pid"
) . "')\" href='#'>Print patient summary</a>";

// Print visit summery
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/patientVisitSummary/print/$pid/$opdid"
) . "')\" href='#'>Print visit summary</a>";

// Print OPD Prescription
//$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
//    "report/pdf/opdPrescription/print/$opdid"
//) . "')\" href='#'>Prescription</a>";

// Print OPD Labtests
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/opdLabtests/print/$opdid"
) . "')\" href='#'>Print Lab test</a>";

// Print clinic book
$menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
    "report/pdf/clinicBook/print/$opdid"
) . "')\" href='#'>Print Clinic Book</a>";

				$menu .="</div>";
				
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					$menu .="Generic Modules";
				  $menu .="</a>";
				$menu .="</div>";				
			
			$menu .=" </div> \n";
        echo $menu ;	  
?>
