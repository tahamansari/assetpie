<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login');
		}else if(!$this->ion_auth->is_admin()){
			redirect('auth/login');
		}
	}

	public function index(){
		$this->load->view('admin/dashboard');
	}

	public function testindex(){
		$this->load->view('admin/testdashboard');
	}

	public function _example_output($output = null){
		$this->load->view('admin/users',$output);
	}

	
}

