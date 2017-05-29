<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status')=="login"){
			redirect('Add_user');
		}

		
	}

	public function index()
	{
		$this->load->view('v_login');
	}

	public function autentikasi(){
		$userId = $_POST['userId'];
		$userPassword = md5($_POST['userPassword']);
		$where = array(
			'cia_user_id' => $userId,
			'cia_user_password' => $userPassword
			);
		$res = $this->M_login->cekLogin('cia_access',$where)->num_rows();
		if($res>=1){
			$data_session = array(
				'userId' => $userId,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect('Add_user');
		}else{
			$this->session->set_flashdata('pesanLogin','Access denied');
			redirect('Login');
		}
	}
}
