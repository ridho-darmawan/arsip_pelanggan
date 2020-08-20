<?php

class M_pelanggan extends CI_Model
{

	/*public function get_data($limit, $start){

		$query =  $this->db->get('tb_pelanggan',$limit, $start);
		return $query;
	}*/

	public function get_data($limit, $start)
	{
		$this->db->from('tb_pelanggan');
		$this->db->order_by('tanggal_permohonan', 'asc');
		$this->db->limit($limit, $start);
		return $this->db->get();
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function detail_data($Id = NULL)
	{
		$query = $this->db->get_where('tb_pelanggan', array('Id' => $Id))->row();
		return $query;
		$berkas = $this->db->get_where('tb_pelanggan', array('berkas' => $berkas))->row();
		return $berkas;
	}
	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_pelanggan');
		$this->db->like('nama', $keyword);
		$this->db->or_like('Id_pelanggan', $keyword);
		$this->db->or_like('nomor_agenda', $keyword);
		$this->db->or_like('alamat', $keyword);
		return $this->db->get()->result();
	}
	public function tampil_data()
	{
		return $this->db->get('tb_pelanggan');
	}

	public function showPdfBulan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$query = "SELECT * FROM tb_pelanggan WHERE EXTRACT(MONTH FROM tanggal_permohonan) = '$bulan' AND EXTRACT(YEAR FROM tanggal_permohonan) = '$tahun' ORDER BY tanggal_permohonan DESC";

		return $query->result();
	}


	public function upload_berkas()
	{
		$config['upload_path'] = './assets/berkas/';
		$config['allowed_types'] = 'rar|zip';
		#$config['max_size'] = '2048';
		$config['remove_space'] = true;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('berkas')) {
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
}
