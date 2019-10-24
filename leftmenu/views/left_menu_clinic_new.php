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
					$menu .="Commands";
				  $menu .="</a>";
				  $menu .="<a href='".base_url()."index.php/clinic/view/".$clinic_patient_info["PID"]."/?CONTINUE=".$clinic_patient_info["clinic"]."' class='list-group-item'><span class='glyphicon glyphicon-user'></span>&nbsp;Clinic overview</a>";
				 if($clinic_visit_info["status"]==null){
				  $menu .="<a href='".base_url()."index.php/form/create/pomr/".$clinic_patient_info["PID"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-eye-open'></span>&nbsp;Add/edit diagnoses</a>";
				 // $menu .="<a href='".base_url()."index.php/form/create/patient_treatment/".$pid."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-list'></span>&nbsp;New treatments</a>";
				  $menu .="<a href='".base_url()."index.php/clinic/new_prescribe/".$clinic_patient_info["clinic_visits_id"]."/CLN/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-list-alt'></span>&nbsp;New Prescription</a>";
				  $menu .="<a href='".base_url()."index.php/form/create/clinic_treatment/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-list'></span>&nbsp;New Procedure</a>";
  				  $menu .="<a href='".base_url()."index.php/laboratory/clinic_order/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-tint'></span>&nbsp;New Order Lab</a>";
                                  $menu .="<a href='".base_url()."index.php/form/create/clinic_ecg/".$clinic_patient_info["PID"]."/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-signal'></span>&nbsp;Order ECG</a>";
                                  $menu .="<a href='".base_url()."index.php/form/create/patient_injection/".$clinic_patient_info["PID"]."/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-pushpin'></span>&nbsp;Order an Injection</a>";
				  $menu .="<a href='".base_url()."index.php/form/create/dicom/".$clinic_patient_info["PID"]."/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-picture'></span>&nbsp;DICOM</a>";
//$menu .="<a href='".base_url()."index.php/form/create/patient_exam/".$clinic_patient_info["PID"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-check'></span>&nbsp;Add Examination</a>";
				  $menu .="<a href='".base_url()."index.php/form/create/patient_alergy/".$clinic_patient_info["PID"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item'><span class='glyphicon glyphicon-bell'></span>&nbsp;Add Allergy</a>";
				  $menu .="<a href='".base_url()."index.php/clinic/close_visit_confirm/".$clinic_patient_info["clinic_visits_id"]."/?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' class='list-group-item' style='color:#FF0000;'><span class='glyphicon glyphicon-stop'></span>&nbsp;Close this visit</a>";
				  }
				$menu .="</div>";
                // REPORTS
                $menu .="<div class='list-group'>";
                $menu .="<a href='' class='list-group-item active'>";
                $menu .="Reports";
                $menu .="</a>";
                $menu .= "<a class='list-group-item' onclick=\"openWindow('" . site_url(
                        "report/pdf/clinicSummary/print/".$clinic_patient_info["clinic_visits_id"]
                    ) . "')\" href='#'>Clinic summary</a>";

                $menu .="</div>";


		if($clinic_visit_info["status"]==null){
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					$menu .="Generic Modules";
				  $menu .="</a>";
				  
				  if (isset($pmodule)&&count($pmodule)>0){
                                    	for($i=0; $i<count($pmodule); ++$i){
                                              	$clinics = explode("|", $pmodule[$i]["show_in_clinic"]);
						if(!in_array($clinic_visit_info["clinic"],$clinics)){continue;} //exit if the questionare not to show in this screen
						$label = '';
                                                
						if ($pmodule[$i]["soap_type"]!=""){
                                                    
							$letter = substr($pmodule[$i]["soap_type"],2,1);
							
							if ($this->config->item($letter)!=""){
								$label = '<span class="badge" style="background:'.$this->config->item($letter).';">'.$letter.'</span>';
							}
							else{
								$label = '<span class="badge">'.$letter.'</span>';
							}
						}
						if (($patient_info["Gender"] == $pmodule[$i]['applicable_to'])||($pmodule[$i]['applicable_to']=="Both")){
                                                    	$menu .=" <a ";
							$menu .=" href='".base_url()."index.php/questionnaire/load/".$pmodule[$i]["qu_questionnaire_id"]."/".$patient_info["PID"]."/patient/".$clinic_patient_info["PID"]."?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' ";
							$menu .=" title='".$pmodule[$i]["description"]."' ";
							$menu .=" class='list-group-item'>".$label.$pmodule[$i]["name"];
							$menu .=" </a>";
						}
					}	
				  }				  
				$menu .="</div>";					
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					$menu .="SOAP Modules";
				  $menu .="</a>";
				  if (isset($module)&&count($module)>0){
					
					for($i=0; $i<count($module); ++$i){
						$clinics = explode("|", $module[$i]["show_in_clinic"]);
						if(!in_array($clinic_visit_info["clinic"],$clinics)){continue;} //exit if the questionare not to show in this screen
						$label = '';
						if ($module[$i]["soap_type"]!=""){
							$letter = substr($module[$i]["soap_type"],2,1);
							if ($this->config->item($letter)!=""){
								$label = '<span class="badge" style="background:'.$this->config->item($letter).';">'.$letter.'</span>';
							}
							else{
								$label = '<span class="badge">'.$letter.'</span>';
							}
						}
						if (($patient_info["Gender"] == $module[$i]['applicable_to'])||($module[$i]['applicable_to']=="Both")){
							$menu .=" <a ";
							$menu .=" href='".base_url()."index.php/questionnaire/load/".$module[$i]["qu_questionnaire_id"]."/".$patient_info["PID"]."/clinic_visits/".$clinic_patient_info["clinic_visits_id"]."?CONTINUE=clinic/visit_view/".$clinic_patient_info["clinic_visits_id"]."' ";
							$menu .=" title='".$module[$i]["description"]."' ";
							$menu .=" class='list-group-item'>".$label.$module[$i]["name"];
							$menu .=" </a>";
						}
					}	
				  }				  
				$menu .="</div>";				
		}

				
			$menu .=" </div> \n";
        echo $menu ;	  
?>
