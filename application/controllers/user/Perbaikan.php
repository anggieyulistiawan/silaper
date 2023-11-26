<?php

class Perbaikan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Laporkan Kerusakan Unit IT";
		$data['bulan'] = "";
		$data['perbaikan'] = $this->M_perbaikan->get_data_perbaikanuser('tb_perbaikan')->result();
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/perbaikan', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Kerusakan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/tambah_perbaikan', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_data_aksi()
	{
		$tanggal_lapor	 		= $this->input->post('tanggal_lapor');
		$masalah   				= $this->input->post('masalah');
		$id_akun   				= $this->session->userdata('id_akun');

		$data = array(
			'tanggal_lapor'			=> $tanggal_lapor,
			'masalah'				=> $masalah,
			'id_akun'				=> $id_akun,
			'status'				=> 'Sedang di Proses',
		);

		$this->M_perbaikan->insert_data($data, 'tb_perbaikan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('user/perbaikan');
	}

	public function update_data($id)
	{
		$data['perbaikan'] = $this->M_perbaikan->update_data_perbaikanuser($id);
		$data['title'] = "Edit Data Kerusakan";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/update_perbaikan', $data);
		$this->load->view('templates_user/footer');
	}


	public function update_data_aksi()
	{
		$id			  		= $this->input->post('id_perbaikan');
		$masalah 			= $this->input->post('masalah');

		$data = array(
			'masalah'			=> $masalah,
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
		redirect('user/perbaikan');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('masalah', 'masalah', 'required');
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
		redirect('user/perbaikan');
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
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/perbaikan', $data);
		$this->load->view('templates_user/footer');
	}
}
