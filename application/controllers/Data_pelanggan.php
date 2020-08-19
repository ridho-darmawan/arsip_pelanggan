<?php

class Data_pelanggan extends CI_Controller {

	public function index(){

		$config['base_url'] = site_url('pelanggan/index');
		$config['total_rows'] = $this->db->count_all('tb_pelanggan');
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;
		$choice = $config["total_rows"] / $config['per_page'];
		$config["num_links"] = floor($choice);

		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav></div>';
		$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close'] = '<span aria-hidden="true">&raquo</span></li>';
		$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close'] = '</span>Next</li>';
		$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close'] = '</span></li>';


		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;



		$data['pelanggan'] = $this->m_pelanggan->get_data($config["per_page"], $data['page'])->result();
		$data ['pagination'] = $this->pagination->create_links();

		$this->load->view('templetes/header');
		$this->load->view('templetes/side_user');
		$this->load->view('data_pelanggan', $data);
		$this->load->view('templetes/footer');
	}
}