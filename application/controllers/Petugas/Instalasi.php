<?php

class Instalasi extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Instalasi";
		$data['bulan'] = "";
		$data['instalasi'] = $this->M_instalasi->get_data('tb_instalasi')->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/instalasi', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function filter_instalasi()
	{

		$data['title'] = "Kelola Data Instalasi";
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] = $bulan;
		$data['tahun2'] = $tahun;
		$data['instalasi'] = $this->M_instalasi->filter_instalasi($bulan, $tahun);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/instalasi', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function update_data($id)
	{
		$data['title'] = "Edit Data Instalasi";
		$data['petugas'] = $this->M_instalasi->tampil_petugas()->result();
		$data['instalasi'] = $this->M_instalasi->detail_data_update($id);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_instalasi', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		$id			  		= $this->input->post('id_instalasi');
		$tanggal_instal 	= $this->input->post('tanggal_instal');
		$id_petugas		  	= $this->input->post('id_petugas');
		$keterangan_instal 			= $this->input->post('keterangan_instal');
		$status_instal 			= $this->input->post('status_instal');

		$data = array(
			'tanggal_instal'	=> $tanggal_instal,
			'id_petugas'		=> $id_petugas,
			'keterangan_instal'			=> $keterangan_instal,
			'status_instal'			=> $status_instal,
		);

		$where = array(
			'id_instalasi' => $id
		);

		$this->M_instalasi->update_data('tb_instalasi', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/instalasi');
	}

	public function delete_data($id)
	{
		$where = array('id_instalasi' => $id);
		$this->M_instalasi->delete_data($where, 'tb_instalasi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/instalasi');
	}

	public function detail_data($id_instalasi)
	{
		$data['title'] = "Detail Data Instalasi";
		$detail = $this->M_instalasi->detail_data($id_instalasi);
		$data['detail'] = $detail;
		// var_dump($data['detail'], $id_instalasi);
		// die;
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/detail_instalasi', $data);
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
		$data['instalasi'] = $this->M_instalasi->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/instalasi', $data);
		$this->load->view('templates_petugas/footer');
	}
}
