<?php

class Tentang extends CI_Controller {

	public function index(){
		$this->load->view('templetes/header');
		$this->load->view('templetes/side_user');
		$this->load->view('tentang');
		$this->load->view('templetes/footer');
	}
}