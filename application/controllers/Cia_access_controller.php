<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cia_access_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('v_login');
	}

	public function do_insert(){
		$userId = $_POST['userId'];
		$userPassword = md5($_POST['userPassword']);
		$userName = $_POST['userName'];
		$userGroup = $_POST['userGroup'];
		$userRole = $_POST['userRole'];
		$userStatus = 0;
		$data_insert = array(
			'cia_user_id' => $userId,
			'cia_user_password' => $userPassword,
			'cia_user_name' => $userName,
			'fk_para_group_id' => $userGroup,
			'fk_para_role_id' => $userRole,
			'cia_user_status' => $userStatus
		);
		$res = $this->Cia_access_model->insertCiaAccess('cia_access',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Data berhasil disimpan');
			redirect('Cia_access_controller/index');
		}else{
			$this->session->set_flashdata('pesan','Data gagal disimpan');
			redirect('Cia_access_controller/index');
		}
	}
}
