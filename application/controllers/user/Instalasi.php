<?php

class Instalasi extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Permintaan Instalasi IT Baru";
		$data['bulan'] = "";
		$data['instalasi'] = $this->M_instalasi->get_data_instalasiuser('tb_instalasi')->result();
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/instalasi', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Instalasi";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/tambah_instalasi', $data);
		$this->load->view('templates_user/footer');
	}

	public function tambah_data_aksi()
	{
		$tanggal_lapor_instal	= $this->input->post('tanggal_lapor_instal');
		$nama_instal   			= $this->input->post('nama_instal');
		$id_akun   				= $this->session->userdata('id_akun');

		$data = array(
			'tanggal_lapor_instal'	=> $tanggal_lapor_instal,
			'nama_instal'			=> $nama_instal,
			'id_akun'				=> $id_akun,
			'status_instal'			=> 'Sedang di Proses',
		);

		$this->M_instalasi->insert_data($data, 'tb_instalasi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('user/instalasi');
		// }
	}

	public function update_data($id)
	{
		$data['instalasi'] = $this->M_instalasi->update_data_instalasiuser($id);
		$data['title'] = "Edit Data Instalasi";
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/update_instalasi', $data);
		$this->load->view('templates_user/footer');
	}


	public function update_data_aksi()
	{
		$id			  		= $this->input->post('id_instalasi');
		$nama_instal 			= $this->input->post('nama_instal');

		$data = array(
			'nama_instal'			=> $nama_instal,
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
		redirect('user/instalasi');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_instal', 'Instalasi', 'required');
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
		redirect('user/instalasi');
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
		$this->load->view('templates_user/header', $data);
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/instalasi', $data);
		$this->load->view('templates_user/footer');
	}
}
