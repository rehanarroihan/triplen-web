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

	public function board() {
		$boardId = $this->uri->segment(3);
		if ($boardId == null || $boardId == '') {
			$newURL = base_url().'app';
			header('Location: '.$newURL);
		} else {
			$this->load->view('board_detail_app_view');
		}
	}
}
