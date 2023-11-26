<?php

class Jabatan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Jabatan";
		$data['jabatan'] = $this->M_jabatan->get_data('tb_jabatan')->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/jabatan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Jabatan";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/tambah_jabatan', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$id			  = $this->input->post('id_jabatan');
			$nama_jabatan = $this->input->post('nama_jabatan');

			$data = array(
				'id_jabatan' 	=> $id,
				'nama_jabatan'	=> $nama_jabatan,
			);

			$this->M_jabatan->insert_data($data, 'tb_jabatan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/jabatan');
		}
	}

	public function update_data($id)
	{
		$where = array('id_jabatan' => $id);
		$data['jabatan'] = $this->db->query("SELECT * FROM tb_jabatan WHERE id_jabatan = '$id'")->result();
		$data['title'] = "Edit Data Jabatan";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_jabatan', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_data;
		} else {
			$id			  = $this->input->post('id_jabatan');
			$nama_jabatan = $this->input->post('nama_jabatan');

			$data = array(
				'nama_jabatan'	=> $nama_jabatan,
			);

			$where = array(
				'id_jabatan' => $id
			);

			$this->M_jabatan->update_data('tb_jabatan', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Data berhasil diupdate !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/jabatan');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_jabatan', 'ID', 'required');
		$this->form_validation->set_rules('nama_jabatan', 'Nama Jabatan', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_jabatan' => $id);
		$this->M_jabatan->delete_data($where, 'tb_jabatan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/jabatan');
	}

	public function search()
	{
		$data['title'] = "Hasil Pencarian Data";
		$keyword = $this->input->post('keyword');
		$data['jabatan'] = $this->M_jabatan->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/jabatan', $data);
		$this->load->view('templates_petugas/footer');
	}
}
