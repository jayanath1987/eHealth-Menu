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
		   
			   $menu .="<div id='left-sidebar1' style='position:fixed1;'>\n";
                           if (Modules::run('security/haveAccess',$this->session->userdata('UGID'),'systems_table_New')){
			   if (Modules::run('security/check_leftmenu_access','preference','system_table')){
					$menu .="<div class='list-group'>";
					  $menu .="<a href='' class='list-group-item active'>";
						$menu .="System Tables";
					  $menu .="</a>";
                                          $menu .="<a href='".base_url()."index.php/preference/load/user' class='list-group-item'>Add/Edit Users</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/user_group' class='list-group-item'>Add/Edit Group</a>";
                                          $menu .="<a href='".base_url()."index.php/preference/load/user_post' class='list-group-item'>Add/Edit Post</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/permission' class='list-group-item'>Permission allocation</a>";
					  
					  $menu .="<a href='".base_url()."index.php/preference/load/visit_type' class='list-group-item'>Add/Edit Visit Type</a>";
                                          $menu .="<a href='".base_url()."index.php/preference/load/workstation_type' class='list-group-item'>Add/Edit Workstation Type</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/opd_room' class='list-group-item'>Add/Edit OPD Room</a>";
                                          $menu .="<a href='".base_url()."index.php/preference/load/procedure_room' class='list-group-item'>Add/Edit Procedure Room</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/pharmacy_counter' class='list-group-item'>Add/Edit Pharm. counter</a>";
					 
					  $menu .="<a href='".base_url()."index.php/preference/load/user_menu' class='list-group-item'>Add/Edit Menu</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/institution' class='list-group-item'>Add/Edit Institutions</a>";
                                         
					  if ($this->config->item('purpose') !="PP"){
					  		$menu .="<a href='".base_url()."index.php/preference/load/clinic' class='list-group-item'>Add/Edit Clinic</a>";
					  		$menu .="<a href='".base_url()."index.php/preference/load/hospital' class='list-group-item'>Hospital Settings</a>";
					  }else{
					  		$menu .="<a href='".base_url()."index.php/preference/load/hospital' class='list-group-item'>PMI Settings</a>";
					  }
                                        $menu .="<a href='".base_url()."index.php/patient/update_hin' class='list-group-item'>PHN Update</a>";
                                        $menu .="<a href='".base_url()."index.php/patient/encryptor' class='list-group-item'>Encryptor</a>";
                                        $menu .="<a href='".base_url()."index.php/dashboard/dashboard_home' class='list-group-item'>Dashboard</a>";
                                        //$menu .="<a href='".base_url()."index.php/dashboard/dsview' class='list-group-item'>DS Dashboard</a>";
					$menu .="</div>";
                           }
				}	
			
			if (Modules::run('security/check_leftmenu_access','preference','clinic_table')){
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					
//PP configuration			
					if ($this->session->UserData("Config") == 'config_admin'){
						$menu .="Configure Clinical Tables";
					}else{
						$menu .="Clinical Tables";
					}
						
						$menu .="</a>";
                                                if($this->session->userdata('UserGroup')=='Programmer'){
						  
						  $menu .="<a href='".base_url()."index.php/preference/load/treatment' class='list-group-item'>Treatments</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/injection' class='list-group-item'>Injection</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/who_drug' class='list-group-item'>Drugs</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/drugs_dosage' class='list-group-item'>Drugs dosage</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/drugs_frequency' class='list-group-item'>Drugs frequency</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/drugs_period' class='list-group-item'>Drugs period</a>";
                                                  $menu .="<a href='".base_url()."index.php/preference/load/dose_comment' class='list-group-item'>Dose comment</a>";
                        }
                                                  $menu .="<a href='".base_url()."index.php/preference/load/complaints' class='list-group-item'>Complaints</a>";
                                                  if($this->session->userdata('UserGroup')=='Doctor' || $this->session->userdata('UserGroup')=='Programmer'){ $menu .="<a href='".base_url()."index.php/preference/mydrug_list' class='list-group-item'>My Drug List</a>";}
                                                  
//$menu .="<a href='".base_url()."index.php/preference/load/drug_stock' class='list-group-item'>Drug Stock</a>";
                                                  if($this->session->userdata('UserGroup')=='Programmer'){
						  $menu .="<a href='".base_url()."index.php/drug_stock/view' class='list-group-item'>Stock management</a>";
						  $menu .="<a href='".base_url()."index.php/preference/load/canned_text' class='list-group-item'>Canned text</a>";
                                                  
					
									  
				  if ($this->config->item('purpose') !="PP"){
				 
					  $menu .="<a href='".base_url()."index.php/preference/load/lab_tests' class='list-group-item'>Lab tests</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/lab_test_group' class='list-group-item'>Lab test groups</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/lab_test_department' class='list-group-item'>Lab departments</a>";
					  $menu .="<a href='".base_url()."index.php/preference/load/ward' class='list-group-item'>Wards</a>";
				  }
                                                  }
				  $DS=$this->session->userdata("DS");
                                  if($DS != null){
				  $menu .="<a href='".base_url()."index.php/preference/load/drug_request' class='list-group-item'>Drug Request</a>";
                                  $menu .="<a href='".base_url()."index.php/preference/load/drug_return' class='list-group-item'>Drug Return</a>";
				  //$menu .="<a href='".base_url()."index.php/module' class='list-group-item alert'>Generic Module</a>";
                                  }
                                  $menu .="</div>";
			
			}
			
			if (Modules::run('security/check_leftmenu_access','preference','application_table')){
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					$menu .="Application Tables";
				  $menu .="</a>";
				   $menu .="<a href='".base_url()."index.php/preference/load/icd10' class='list-group-item'>ICD 10</a>";
				  if ($this->config->item('purpose') !="PP"){ 						  		 
				  		$menu .="<a href='".base_url()."index.php/preference/load/immr' class='list-group-item'>IMMR</a>";
				  }
				  $menu .="<a href='".base_url()."index.php/preference/load/village' class='list-group-item'>Village</a>";
				$menu .="</div>";
			}
			
			
			if (Modules::run('security/check_leftmenu_access','preference','qmodule')){
				if ($this->config->item('purpose') !="PP"){
				$menu .="<div class='list-group'>";
				  $menu .="<a href='' class='list-group-item active'>";
					$menu .="Q Module";
				  $menu .="</a>";
				  
						  $menu .="<a href='".base_url()."index.php/question' class='list-group-item'>Question Repository</a>";
						  $menu .="<a href='".base_url()."index.php/questionnaire' class='list-group-item'>Questionnaires</a>";
				  		  $menu .="<a href='".base_url()."index.php/diagram' class='list-group-item'>Clinical Diagrams</a>";
				
				  //$menu .="<a href='".base_url()."index.php/module' class='list-group-item alert'>Generic Modules</a>";
				$menu .="</div>";
				 }
			}
			
			$menu .=" </div> \n";
        echo $menu ;
?>