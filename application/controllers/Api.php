<?php


// date("g:i a", strtotime($result_obj->closing_hours));

defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *'); 

class Api extends CI_Controller {

	public function index(){
		
		// $this->load->view('welcome_message');
		
	}

	public function jsonify($res) {

		echo json_encode((object) $res);
	}

	


}
