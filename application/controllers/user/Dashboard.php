<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('id_level') != '3') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Anda Belum Login !</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			redirect('login');
		}
	}

	public function index()
	{
		$id = $this->session->userdata('id_akun');
		$data['aakun'] = $this->db->query("SELECT * FROM tb_akun WHERE id_akun='$id'")->result();

		$this->load->view('templates_user/header');
		$this->load->view('templates_user/sidebar');
		$this->load->view('v_user/dashboard', $data);
		$this->load->view('templates_user/footer');
	}
}
