<?php

class Akun extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Pengguna";
		$data['akun'] = $this->M_akun->get_data('tb_akun')->result();
		$data['akun'] = $this->M_akun->show_data()->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/akun', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data()
	{
		$data['level'] = $this->M_akun->tampil_level()->result();
		$data['ruangan'] = $this->M_akun->tampil_ruangan()->result();
		$data['title'] = "Tambah Data Pengguna";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/tambah_akun', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$nip			  	= $this->input->post('nip');
			$nama_akun 			= $this->input->post('nama_akun');
			$id_ruangan 	  	= $this->input->post('id_ruangan');
			$id_level	 		= $this->input->post('id_level');
			$username   		= $this->input->post('username');
			$password   		= $this->input->post('password');
			$foto		  		= $_FILES['foto']['name'];
			if ($foto = '') {
			} else {
				$config['upload_path']		= './assets/foto';
				$config['allowed_types']		= 'jpg|jpeg|png|tiff';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					echo "Foto Gagal diupload !!!";
				} else {
					$foto = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nip'			=> $nip,
				'nama_akun'		=> $nama_akun,
				'id_ruangan'	=> $id_ruangan,
				'id_level'		=> $id_level,
				'username'		=> $username,
				'password'		=> md5($password),
				'foto'			=> $foto,
			);

			$this->M_akun->insert_data($data, 'tb_akun');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/akun');
		}
	}

	public function update_data($id)
	{
		$where = array('id_akun' => $id);
		$data['level'] = $this->M_akun->tampil_level()->result();
		$data['ruangan'] = $this->M_akun->tampil_ruangan()->result();
		$data['akun'] = $this->db->query("SELECT * FROM tb_akun WHERE id_akun = '$id'")->result();
		$data['title'] = "Edit Data Pengguna";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_akun', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_data;
		} else {
			$id			 		= $this->input->post('id_akun');
			$nip			  	= $this->input->post('nip');
			$nama_akun 			= $this->input->post('nama_akun');
			$id_ruangan 	  	= $this->input->post('id_ruangan');
			$id_level	 		= $this->input->post('id_level');
			$username   		= $this->input->post('username');
			$password   		= $this->input->post('password');
			$foto		  		= $_FILES['foto']['name'];
			if ($foto = '') {
			} else {
				$config['upload_path']		= './assets/foto';
				$config['allowed_types']		= 'jpg|jpeg|png|tiff';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('foto')) {
					$data = array(
						'nip'			=> $nip,
						'nama_akun'		=> $nama_akun,
						'id_ruangan'	=> $id_ruangan,
						'id_level'		=> $id_level,
						'username'		=> $username,
						'password'		=> md5($password),
					);

					$where = array(
						'id_akun' => $id
					);

					$this->M_akun->update_data('tb_akun', $data, $where);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data berhasil diupdate !</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>');
					redirect('petugas/akun');
				} else {
					$foto = $this->upload->data('file_name');
					$data = array(
						'nip'			=> $nip,
						'nama_akun'		=> $nama_akun,
						'id_ruangan'	=> $id_ruangan,
						'id_level'		=> $id_level,
						'username'		=> $username,
						'password'		=> md5($password),
						'foto'			=> $foto,
					);

					$where = array(
						'id_akun' => $id
					);

					$this->M_akun->update_data('tb_akun', $data, $where);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
					redirect('petugas/akun');
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nip', 'NIP/NRPB', 'required');
		$this->form_validation->set_rules('nama_akun', 'Nama Pengguna', 'required');
		$this->form_validation->set_rules('id_ruangan', 'Ruangan', 'required');
		$this->form_validation->set_rules('id_level', 'Level', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_akun' => $id);
		$this->M_akun->delete_data($where, 'tb_akun');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/akun');
	}

	public function detail_data($id_akun)
	{
		$data['title'] = "Detail Data Akun";
		$detail = $this->M_akun->detail_data($id_akun);
		$data['detail'] = $detail;
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/detail_akun', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function search()
	{
		$data['title'] = "Hasil Pencarian Data";
		$keyword = $this->input->post('keyword');
		$data['akun'] = $this->M_akun->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/akun', $data);
		$this->load->view('templates_petugas/footer');
	}
}
