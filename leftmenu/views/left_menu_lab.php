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
				$menu .="Departments";
			  $menu .="</a>";
			  $menu .="<a href='".base_url()."index.php/search/lab_orders/OPD' class='list-group-item'>OPD Lab Orders</a>";
			  $menu .="<a href='".base_url()."index.php/search/adm_lab_orders' class='list-group-item'>Admission Lab Orders</a>";
			  $menu .="<a href='".base_url()."index.php/search/lab_orders/CLN' class='list-group-item'>Clinic Lab Orders</a>";
			  $menu .="<a href='".base_url()."index.php/form/create/instrument_interface/?CONTINUE=search/lab_orders/' class='list-group-item'><span class='glyphicon glyphicon-paperclip'></span>&nbsp;Instrument Interface</a>";
			$menu .="<a href='".base_url()."LIS_to_HHIMS.php' class='list-group-item'>Fetch Results</a>";
                          $menu .="<a href='".site_url("laboratory/receive_sample")."' class='list-group-item '><span class='glyphicon glyphicon-barcode'></span>&nbsp;<b>Receive Samples</b></a>";
                          
			$menu .="</div>";
			
			$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="Reports";
			  $menu .="</a>";
// daily drugs dispensed
$menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/laboratoryTestsDone/view"
    ) . "\" data-target=\"#labtests\">Laboratory tests carried out</a>";




			$menu .="</div>";
			
			$menu .=" </div> \n";
        echo $menu ;
?>
