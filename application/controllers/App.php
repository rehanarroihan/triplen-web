<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {
	
	public function index(){
		$data = array(
			'board_view' => 'components/board_view',
			'new_plan_modal_view' => 'components/new_plan_modal',
			'new_board_modal_view' => 'components/new_board_modal'
		);
		$this->load->view('app_view', $data);
	}
}
