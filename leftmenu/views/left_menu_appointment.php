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
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//print_r($user_menu);
      // $mdsPermission = MDSPermission::GetInstance();
           $menu = "";
           $menu .="<div id='left-sidebar1' style='position:fixed1;'>\n";
			$menu .="<div class='list-group'>";
			  $menu .="<a href='' class='list-group-item active'>";
				$menu .="Commands";
			  $menu .="</a>";
			  $menu .="<a href='javascript:launch_qdisplay();' class='list-group-item ' style='color:green'><span class='glyphicon glyphicon-play'></span>&nbsp;<b>QDisplay</b></a>";
                          $menu .="<a href='javascript:launch_laboratory_qdisplay();' class='list-group-item ' style='color:green'><span class='glyphicon glyphicon-play'></span>&nbsp;<b>Laboratory QDisplay</b></a>";
			  $menu .="<a href='".site_url('form/edit/qdisplay_conf/1/?CONTINUE=appointment')."' class='list-group-item'><span class='glyphicon glyphicon-cog'></span>&nbsp;QDisplay Settings</a>";
			 $menu .="<a href='".base_url()."index.php/appointment/load/opd_room' class='list-group-item'><span class='glyphicon glyphicon-cog'></span>&nbsp;Add/Edit OPD Room</a>";
                         if($this->session->userdata("UserGroup")=='Programmer'){ $menu .="<a href='".base_url()."index.php/appointment/opd_queue' style='color:blue' class='list-group-item'><span class='glyphicon glyphicon-cog'></span>&nbsp;<b>OPD Queue Settings</b></a>";}
             $menu .="<hr><a href='".site_url("kiosk/token")."' class='list-group-item ' style='color:red'><span class='glyphicon glyphicon-barcode'></span>&nbsp;<b>Launch QToken</b></a>";
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

	var qdisplay = window.open("<?php echo site_url("qdisplay");?>","qdisplay",params);
	qdisplay.focus();
	setTimeout(function(){
	   qdisplay.location.reload();
	}, 2000);
}

function launch_laboratory_qdisplay(){
	var params = [
            'height='+screen.height,
            'width='+screen.width,
            'fullscreen=yes' // only works in IE, but here for completeness
            ].join(',');

	var qdisplay = window.open("<?php echo site_url("qdisplay/laboratory");?>","qdisplay_proc",params);
	qdisplay.focus();
	setTimeout(function(){
	   qdisplay.location.reload();
	}, 2000);
}

</script>