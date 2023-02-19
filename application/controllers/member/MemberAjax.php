<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberAjax extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('member_authStatus') != AuthStatus::AUTHORIZED) {
			redirect('member/login');
		}
	}

	public function verifyMemberPhoneNumber(){

		$input	= $this->input->post(NULL, TRUE);

		$csrf_token  	= $this->security->get_csrf_hash();
		if(isset($input["dataMemberPhoneNumber"]) && !empty($input["dataMemberPhoneNumber"])){
			$where			= array("member_phone_number" => $input["dataMemberPhoneNumber"]);
			$dataCount		= $this->CrudModel->cw("member", $where);
		} else {
			$dataCount = 1;
		}

		$result 		= array ('data'			=> $dataCount,
								'csrf_token' 	=> $csrf_token);

		echo json_encode($result);
		die();
	}
}
