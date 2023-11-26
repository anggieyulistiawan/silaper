<?php

class Perbaikan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Perbaikan";
		$data['bulan'] = "";
		$data['perbaikan'] = $this->M_perbaikan->get_data('tb_perbaikan')->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/perbaikan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function filter_perbaikan()
	{

		$data['title'] = "Kelola Data Perbaikan";
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] = $bulan;
		$data['tahun1'] = $tahun;
		$data['perbaikan'] = $this->M_perbaikan->filter_perbaikan($bulan, $tahun);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/perbaikan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function update_data($id)
	{
		$data['title'] = "Edit Data Perbaikan";
		$data['petugas'] = $this->M_perbaikan->tampil_petugas()->result();
		$data['perbaikan'] = $this->M_perbaikan->detail_data_update($id);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_perbaikan', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		// $this->_rules();
		// if ($this->form_validation->run() == FALSE) {
		// 	$this->update_data;
		// } else {
		$id			  		= $this->input->post('id_perbaikan');
		$tanggal_perbaik 	= $this->input->post('tanggal_perbaik');
		$id_petugas		  	= $this->input->post('id_petugas');
		$tindakan 			= $this->input->post('tindakan');
		$status 			= $this->input->post('status');

		$data = array(
			'tanggal_perbaik'	=> $tanggal_perbaik,
			'id_petugas'		=> $id_petugas,
			'tindakan'			=> $tindakan,
			'status'			=> $status,
		);

		$where = array(
			'id_perbaikan' => $id
		);

		$this->M_perbaikan->update_data('tb_perbaikan', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/perbaikan');
		// }
	}


	public function delete_data($id)
	{
		$where = array('id_perbaikan' => $id);
		$this->M_perbaikan->delete_data($where, 'tb_perbaikan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/perbaikan');
	}

	public function detail_data($id_perbaikan)
	{
		$data['title'] = "Detail Data Perbaikan";
		$detail = $this->M_perbaikan->detail_data($id_perbaikan);
		$data['detail'] = $detail;
		// var_dump($data['detail'], $id_perbaikan);
		// die;
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/detail_perbaikan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function search()
	{
		$data['title'] = "Hasil Pencarian Data";
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;
		$keyword = $this->input->post('keyword');
		$data['perbaikan'] = $this->M_perbaikan->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/perbaikan', $data);
		$this->load->view('templates_petugas/footer');
	}
}
