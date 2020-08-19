<?php

class Dashboard extends CI_Controller {

	public function index(){
		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('dashboard');
		$this->load->view('templetes/footer');
	}
}