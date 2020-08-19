<?php

class Dashboard_user extends CI_Controller {

	public function index(){

		$this->load->view('templetes/header');
		$this->load->view('templetes/side_user');
		$this->load->view('v_user');
		$this->load->view('templetes/footer');
	}
}