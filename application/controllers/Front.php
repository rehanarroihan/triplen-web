<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	
	public function index(){
		$this->load->view('landing_view');
	}

	public function register() {
		$this->load->view('register_view');
	}
}
