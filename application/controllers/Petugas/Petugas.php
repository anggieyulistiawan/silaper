<?php

class Petugas extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Petugas";
		$data['petugas'] = $this->M_petugas->get_data('tb_petugas')->result();
		$data['petugas'] = $this->M_petugas->show_data()->result();
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/petugas', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data()
	{
		$data['jabatan'] = $this->M_petugas->tampil_jabatan()->result();
		$data['title'] = "Tambah Data Petugas";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/tambah_petugas', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$tanggal_masuk 	  	= $this->input->post('tanggal_masuk');
			$id_jabatan	 		= $this->input->post('id_jabatan');
			$nip_petugas			  	= $this->input->post('nip_petugas');
			$nama_petugas 		= $this->input->post('nama_petugas');
			$tempat_lahir   	= $this->input->post('tempat_lahir');
			$tanggal_lahir   	= $this->input->post('tanggal_lahir');
			$jenis_kelamin   	= $this->input->post('jenis_kelamin');
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
				'tanggal_masuk'	=> $tanggal_masuk,
				'id_jabatan'	=> $id_jabatan,
				'nip_petugas'			=> $nip_petugas,
				'nama_petugas'	=> $nama_petugas,
				'tempat_lahir'	=> $tempat_lahir,
				'tanggal_lahir'	=> $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				'foto'			=> $foto,
			);

			$this->M_petugas->insert_data($data, 'tb_petugas');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data berhasil ditambahkan !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('petugas/petugas');
		}
	}

	public function update_data($id)
	{
		$where = array('id_petugas' => $id);
		$data['jabatan'] = $this->M_petugas->tampil_jabatan()->result();
		$data['petugas'] = $this->db->query("SELECT * FROM tb_petugas WHERE id_petugas = '$id'")->result();
		$data['title'] = "Edit Data Petugas";
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/update_petugas', $data);
		$this->load->view('templates_petugas/footer');
	}


	public function update_data_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->update_data;
		} else {
			$id			 		= $this->input->post('id_petugas');
			$tanggal_masuk 	  	= $this->input->post('tanggal_masuk');
			$id_jabatan	 		= $this->input->post('id_jabatan');
			$nip_petugas			  	= $this->input->post('nip_petugas');
			$nama_petugas 		= $this->input->post('nama_petugas');
			$tempat_lahir   	= $this->input->post('tempat_lahir');
			$tanggal_lahir   	= $this->input->post('tanggal_lahir');
			$jenis_kelamin   	= $this->input->post('jenis_kelamin');
			$foto		  		= $_FILES['foto']['name'];
			if ($foto = '') {
			} else {
				$config['upload_path']		= './assets/foto';
				$config['allowed_types']		= 'jpg|jpeg|png|tiff';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('foto')) {
					$data = array(
						'tanggal_masuk'	=> $tanggal_masuk,
						'id_jabatan'	=> $id_jabatan,
						'nip_petugas'			=> $nip_petugas,
						'nama_petugas'	=> $nama_petugas,
						'tempat_lahir'	=> $tempat_lahir,
						'tanggal_lahir'	=> $tanggal_lahir,
						'jenis_kelamin' => $jenis_kelamin,
					);

					$where = array(
						'id_petugas' => $id
					);
					$this->M_petugas->update_data('tb_petugas', $data, $where);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
					redirect('petugas/petugas');
				} else {
					$foto = $this->upload->data('file_name');
					$data = array(
						'tanggal_masuk'	=> $tanggal_masuk,
						'id_jabatan'	=> $id_jabatan,
						'nip_petugas'			=> $nip_petugas,
						'nama_petugas'	=> $nama_petugas,
						'tempat_lahir'	=> $tempat_lahir,
						'tanggal_lahir'	=> $tanggal_lahir,
						'jenis_kelamin' => $jenis_kelamin,
						'foto'			=> $foto,
					);

					$where = array(
						'id_petugas' => $id
					);

					$this->M_petugas->update_data('tb_petugas', $data, $where);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Data berhasil diupdate !</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>');
					redirect('petugas/petugas');
				}
			}
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
		$this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('nip_petugas', 'NIP/NRPB', 'required');
		$this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_petugas' => $id);
		$this->M_petugas->delete_data($where, 'tb_petugas');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Data berhasil dihapus !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
		redirect('petugas/petugas');
	}


	public function detail_data($id_petugas)
	{
		$data['title'] = "Detail Data Petugas";
		$detail = $this->M_petugas->detail_data($id_petugas);
		$data['detail'] = $detail;
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/detail_petugas', $data);
		$this->load->view('templates_petugas/footer');
	}

	public function search()
	{
		$data['title'] = "Hasil Pencarian Data";
		$keyword = $this->input->post('keyword');
		$data['petugas'] = $this->M_petugas->get_keyword($keyword);
		$this->load->view('templates_petugas/header', $data);
		$this->load->view('templates_petugas/sidebar');
		$this->load->view('v_petugas/petugas', $data);
		$this->load->view('templates_petugas/footer');
	}
}
