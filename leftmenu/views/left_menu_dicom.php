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

           $menu = "";
           $menu .="<div id='left-sidebar1' style='position:fixed1;'>\n";
			$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="List";
			  $menu .="</a>";
			 $menu .="<a href='".base_url()."index.php/search/dicom_pending_list' class='list-group-item'>Exposure List</a>";
                         $menu .="</a>";
			 $menu .="<a href='".base_url()."index.php/search/dicom_exposure_pending_list' class='list-group-item'>DICOM List</a>";

				$menu .="</div>";

			/*$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="Reports";
			  $menu .="</a>"; */
// daily dicom done

/* $menu .= "<a class='list-group-item' data-toggle=\"modal\" href=\"" . site_url(
        "report/pdf/dicomDone/view"
    ) . "\" data-target=\"#procedureorder\">dicom Done</a>"; */

			$menu .="</div>";
			
			$menu .=" </div> \n";
        echo $menu ;
?>
