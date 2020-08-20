<?php

class pelanggan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//load Helper for Form
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
	}

	public function index()
	{

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
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('pelanggan', $data);
		$this->load->view('templetes/footer');
	}

	public function tambah()
	{

		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('pelanggan');
		$this->load->view('templetes/footer');
	}

	public function tambah_aksi()
	{
		$Id_pelanggan					= $this->input->post('Id_pelanggan');
		$nomor_agenda					= $this->input->post('nomor_agenda');
		$nama							= $this->input->post('nama');
		$alamat							= $this->input->post('alamat');
		$tarif							= $this->input->post('tarif');
		$daya							= $this->input->post('daya');
		$tanggal_permohonan				= $this->input->post('tanggal_permohonan');
		$status_kelengkapan_berkas		= $this->input->post('status_kelengkapan_berkas');
		$nomor_lemari					= $this->input->post('nomor_lemari');
		$nomor_rak						= $this->input->post('nomor_rak');
		$berkas							= $_FILES['berkas'];
		if ($berkas = '') {
		} else {
			$config['upload_path'] 		= './assets/berkas';
			$config['max_size']         = '5012';
			$config['allowed_types']	= 'zip|rar|pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('berkas')) {
				echo "Upload Gagal";
				die();
			} else {
				$berkas = $this->upload->data('file_name');
			}
		}
		$data = array(
			'Id_pelanggan'		 		=> $Id_pelanggan,
			'nomor_agenda'		 		=> $nomor_agenda,
			'nama' 		  		 		=> $nama,
			'alamat'	   		 		=> $alamat,
			'tarif' 	  		 		=> $tarif,
			'daya' 		  			    => $daya,
			'tanggal_permohonan'	    => $tanggal_permohonan,
			'status_kelengkapan_berkas' => $status_kelengkapan_berkas,
			'nomor_lemari' 				=> $nomor_lemari,
			'nomor_rak' 				=> $nomor_rak,
			'berkas' 					=> $berkas,
		);

		$this->m_pelanggan->input_data($data, 'tb_pelanggan');
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Data Berhasil Ditambahkan</div>');
		redirect('pelanggan/index');
	}

	public function do_download()
	{
		force_download('berkas', NULL);
	}

	public function hapus($Id)
	{

		$where = array('Id' => $Id);
		$this->m_pelanggan->hapus_data($where, 'tb_pelanggan');
		$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		Data Berhasil Dihapus
		</div>');

		redirect('pelanggan/index');
	}
	public function edit($Id)
	{

		$where = array('Id' => $Id);
		$data['pelanggan'] = $this->m_pelanggan->edit_data($where, 'tb_pelanggan')->result();
		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templetes/footer');
	}

	public function update()
	{
		$data = array();
		$Id = $this->input->post('Id');
		$Id_pelanggan = $this->input->post('Id_pelanggan');
		$nomor_agenda = $this->input->post('nomor_agenda');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tarif = $this->input->post('tarif');
		$daya = $this->input->post('daya');
		$tanggal_permohonan = $this->input->post('tanggal_permohonan');
		$status_kelengkapan_berkas = $this->input->post('status_kelengkapan_berkas');
		$nomor_lemari = $this->input->post('nomor_lemari');
		$nomor_rak = $this->input->post('nomor_rak');

		$upload = $this->m_pelanggan->upload_berkas();
		#if($this->upload->do_upload('berkasku')){
		#$dataku = array('upload_data' => $this->upload->data());
		if ($upload['result'] == "success") {
			$data = array(
				'Id_pelanggan' 				=> $Id_pelanggan,
				'nomor_agenda'			 	=> $nomor_agenda,
				'nama' 						=> $nama,
				'alamat' 					=> $alamat,
				'tarif' 					=> $tarif,
				'daya' 						=> $daya,
				'tanggal_permohonan' 		=> $tanggal_permohonan,
				'status_kelengkapan_berkas' => $status_kelengkapan_berkas,
				'nomor_lemari' 				=> $nomor_lemari,
				'nomor_rak' 				=> $nomor_rak,
				'berkas'					=> $upload['file']['file_name']
			);

			$where = array('Id' => $Id);
			$this->m_pelanggan->update_data($where, $data, 'tb_pelanggan');
			redirect('pelanggan/index');
		} else {
			$data = array(
				'Id_pelanggan' 				=> $Id_pelanggan,
				'nomor_agenda'			 	=> $nomor_agenda,
				'nama' 						=> $nama,
				'alamat' 					=> $alamat,
				'tarif' 					=> $tarif,
				'daya' 						=> $daya,
				'tanggal_permohonan' 		=> $tanggal_permohonan,
				'status_kelengkapan_berkas' => $status_kelengkapan_berkas,
				'nomor_lemari' 				=> $nomor_lemari,
				'nomor_rak' 				=> $nomor_rak
			);

			$where = array('Id' => $Id);
			$this->m_pelanggan->update_data($where, $data, 'tb_pelanggan');
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			Data Berhasil Diubah
		  </div>');
			redirect('pelanggan/index');
		}
	}
	public function detail($Id)
	{

		$this->load->model('m_pelanggan');
		$detail = $this->m_pelanggan->detail_data($Id);
		$data['detail'] = $detail;
		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templetes/footer');
	}
	public function dashboard()
	{

		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('templetes/footer');
	}
	public function search()
	{

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
		$data['pagination'] = $this->pagination->create_links();



		$keyword = $this->input->post('keyword');
		$data['pelanggan'] = $this->m_pelanggan->get_keyword($keyword);



		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('pelanggan', $data);
		$this->load->view('templetes/footer');
	}
	public function print()
	{
		$data['pelanggan'] = $this->m_pelanggan->tampil_data("tb_pelanggan")->result();
		$this->load->view('print_pelanggan', $data);
	}

	public function cetak()
	{
		$this->load->view('templetes/header');
		$this->load->view('templetes/sidebar');
		$this->load->view('cetak_pdf');
		$this->load->view('templetes/footer');
	}

	public function pdf_bulanan()
	{
		$this->load->library('dompdf_gen');

		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');


		$data['pelanggan'] = $this->db->query("SELECT * FROM tb_pelanggan WHERE EXTRACT(MONTH FROM tanggal_permohonan) = '$bulan' AND EXTRACT(YEAR FROM tanggal_permohonan) = '$tahun' ORDER BY tanggal_permohonan DESC")->result();


		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pelanggan.pdf", array('Attachment' => 0));
	}

	public function pdf_tahunan()
	{
		$this->load->library('dompdf_gen');


		$tahun = $this->input->post('tahun');


		$data['pelanggan'] = $this->db->query("SELECT * FROM tb_pelanggan WHERE EXTRACT(YEAR FROM tanggal_permohonan) = '$tahun' ORDER BY tanggal_permohonan DESC")->result();


		$this->load->view('laporan_pdf', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pelanggan.pdf", array('Attachment' => 0));
	}

	// public function pdf()
	// {
	// 	$this->load->library('dompdf_gen');
	// 	$data['pelanggan'] = $this->m_pelanggan->tampil_data('tb_pelanggan')->result();

	// 	$this->load->view('laporan_pdf', $data);

	// 	$paper_size = 'A4';
	// 	$orientation = 'landscape';
	// 	$html = $this->output->get_output();
	// 	$this->dompdf->set_paper($paper_size, $orientation);

	// 	$this->dompdf->load_html($html);
	// 	$this->dompdf->render();
	// 	$this->dompdf->stream("laporan_pelanggan.pdf", array('Attachment' => 0));
	// }


	public function excel()
	{

		$data['pelanggan'] = $this->m_pelanggan->tampil_data('tb_pelanggan')->result_array();

		$this->load->view('laporan_excel', $data);
	}
}
