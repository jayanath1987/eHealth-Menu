<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
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

class Leftmenu extends MX_Controller {

    function __construct() {
        parent::__construct();
    }

    public function preference() {
        $this->load->view('left_menu_preference');
    }

    public function appointment() {
        $this->load->view('left_menu_appointment');
    }

    public function pharmacy() {
        $this->load->view('left_menu_pharmacy');
    }
    
    public function pharmacy_chief() {
        $this->load->view('left_menu_pharmacy_chief');
    }

    public function lab() {
        $this->load->view('left_menu_lab');
    }

    public function procedure_room() {
        $this->load->view('left_menu_procedure_room');
    }

    public function ecg_room() {
        $this->load->view('left_menu_ecg_room');
    }

    public function questionnaire() {
        $this->load->view('left_menu_questionnaire');
    }

    public function ward($wid) {
        $data["wid"] = $wid;
        $this->load->vars($data);
        $this->load->view('left_menu_ward');
    }

    public function chat() {
        $this->load->view('left_menu_chat');
    }

    public function report() {
        $this->load->view('left_menu_report');
    }

    public function notification() {
        $this->load->view('left_menu_notification');
    }

    public function registry() {
        $this->load->view('left_menu_registry');
    }

    public function patient($id = null, $module = null, $admid = null) {
        $data['id'] = $id;
        $data['module'] = $module;
        //Laura
        if ($admid) {
            $data['admid'] = $admid;
        }
        $this->load->vars($data);
        $this->load->view('left_menu_patient');
    }

    public function patient_pc($id = null, $module = null) {
        $data['id'] = $id;
        $data['module'] = $module;
        $this->load->vars($data);
        $this->load->view('left_menu_patient_pc');
    }

    public function opd($opdid = null, $pid = null, $opd_info = null) {

        $data['pid'] = $pid;
        $data['opdid'] = $opdid;
        $data['opd_info'] = $opd_info;

        $data["d_day"] = $opd_info["days"];
        $this->load->vars($data);
        $this->load->view('left_menu_opd');
    }

//	public function clinic($clinic_id=null,$pid=null,$clinic_patient_info=null,$module=null)
    public function clinic($id = null, $clinic_id = null, $module = null, $admid = null) {

        $data['pid'] = $id;
        $data['clinic_id'] = $clinic_id;
        //$data['clinic_patient_info']=$clinic_patient_info;
        $data['module'] = $module;
        $this->load->vars($data);
        $this->load->view('left_menu_clinic');


        /* $data['id']=$id;
          $data['module']=$module;
          //Laura
          if ($admid){
          $data['admid']=$admid;
          }
          $this->load->vars($data);
          $this->load->view('left_menu_clinic'); */
    }
    
        public function cardiology($id = null, $clinic_id = null, $module = null, $admid = null) {

        $data['pid'] = $id;
        $data['clinic_id'] = $clinic_id;
        $this->load->vars($data);
        $this->load->view('left_menu_cardiology');


        /* $data['id']=$id;
          $data['module']=$module;
          //Laura
          if ($admid){
          $data['admid']=$admid;
          }
          $this->load->vars($data);
          $this->load->view('left_menu_clinic'); */
    }

    public function doctor() {
        $data['user_group'] = $this->session->userdata('UserGroup');
        ;
        $data['full_name'] = $this->session->userdata('FullName');
        ;
        $this->load->vars($data);
        $this->load->view('left_menu_doctor');
    }

    public function clinic_new($clinic_id = null, $pid = null, $clinic_patient_info = null, $module = null, $pmodule = null) {

        $data['pid'] = $pid;
        $data['clinic_id'] = $clinic_id;
        $data['clinic_patient_info'] = $clinic_patient_info;
        $data['module'] = $module;
        $data['pmodule'] = $pmodule;
        $this->load->vars($data);
        $this->load->view('left_menu_clinic_new');
    }

    public function clinic_patient() {
        //$this->load->vars($data);
        $this->load->view('left_menu_clinic_patient');
    }

    public function clinic_refer() {
        $this->load->model("mpersistent");
        $data["clinic_list"] = $this->mpersistent->table_select("
		SELECT clinic_id,name  as Clinic 
		FROM clinic WHERE (Active = TRUE)
		 ORDER BY name 
		");
        $this->load->vars($data);
        $this->load->view('left_menu_clinic_refer');
    }

    public function clinic_patient_search() {
        $this->load->model("mpersistent");
        $data["clinic_list"] = $this->mpersistent->table_select("
		SELECT clinic_id,name  as Clinic 
		FROM clinic WHERE (Active = TRUE)
		 ORDER BY name 
		");
        $this->load->vars($data);
        $this->load->view('left_menu_clinic_patient_search');
    }

    public function admission($admission = null, $patient_info = null, $order = null, $admission_questionnaire_list, $admission_soap_questionnaire_list) {

        $data['pid'] = $patient_info["PID"];
        $data['patient_info'] = $patient_info;

        $data['admid'] = $admission["ADMID"];
        $data['admission'] = $admission;
        $data['module'] = $admission_questionnaire_list;
        $data['smodule'] = $admission_soap_questionnaire_list;
        $data['order_id'] = isset($order["admission_prescription_id"]) ? $order["admission_prescription_id"] : null;
        $this->load->vars($data);
        $this->load->view('left_menu_admission');
    }
    
    public function dicom_pending_list() {
        $this->load->view('left_menu_dicom');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
