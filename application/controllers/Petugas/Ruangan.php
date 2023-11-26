<?php

class Ruangan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Ruangan";
		$data['ruangan'] = $this->M_ruangan->get_data('tb_ruangan')->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/ruangan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Ruangan";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/tambah_ruangan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$id			  = $this->input->post('id_ruangan');
			$nama_ruangan = $this->input->post('nama_ruangan');
			$nip_ruangan   		  = $this->input->post('nip_ruangan');
			$nama_pj 	  = $this->input->post('nama_pj');
			$keterangan   = $this->input->post('keterangan');

			$data = array(
				'id_ruangan' 	=> $id,
				'nama_ruangan'	=> $nama_ruangan,
				'nip_ruangan'			=> $nip_ruangan,
				'nama_pj'		=> $nama_pj,
				'keterangan'	=> $keterangan,
			);

			$this->M_ruangan->insert_data($data, 'tb_ruangan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/ruangan');
		}
	}

	public function update_data($id)
	{
		$where = array('id_ruangan' => $id);
		$data['ruangan'] = $this->db->query("SELECT * FROM tb_ruangan WHERE id_ruangan = '$id'")->result();
		$data['title'] = "Edit Data Ruangan";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_ruangan', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_data;
		} else {
			$id			  = $this->input->post('id_ruangan');
			$nama_ruangan = $this->input->post('nama_ruangan');
			$nip_ruangan   		  = $this->input->post('nip_ruangan');
			$nama_pj 	  = $this->input->post('nama_pj');
			$keterangan   = $this->input->post('keterangan');

			$data = array(
				'nama_ruangan'	=> $nama_ruangan,
				'nip_ruangan'			=> $nip_ruangan,
				'nama_pj'		=> $nama_pj,
				'keterangan'	=> $keterangan,
			);

			$where = array(
				'id_ruangan' => $id
			);

			$this->M_ruangan->update_data('tb_ruangan', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/ruangan');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nama_ruangan', 'nama ruangan', 'required');
		$this->form_validation->set_rules('nama_pj', 'nama penanggung jawab', 'required');
		$this->form_validation->set_rules('nip_ruangan', 'NIP/NRPB', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_ruangan' => $id);
		$this->M_ruangan->delete_data($where, 'tb_ruangan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/ruangan');
	}

	public function search()
	{
		$data['title'] = "Hasil Pencarian Data";
		$keyword = $this->input->post('keyword');
		$data['ruangan'] = $this->M_ruangan->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/ruangan', $data);
		$this->load->view('templates_petugas/footer');
	}
}
