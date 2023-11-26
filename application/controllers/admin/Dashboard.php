<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('id_level') != '1') {
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
		$data['title'] = "SI-LAPER - ADMIN";
		$ruangan = $this->db->query("SELECT * FROM tb_ruangan");
		$data['ruangan'] = $ruangan->num_rows();

		$akun = $this->db->query("SELECT * FROM tb_akun");
		$data['akun'] = $akun->num_rows();

		$perbaikan = $this->db->query("SELECT * FROM tb_perbaikan");
		$data['perbaikan'] = $perbaikan->num_rows();

		$instalasi = $this->db->query("SELECT * FROM tb_instalasi");
		$data['instalasi'] = $instalasi->num_rows();

		$id = $this->session->userdata('id_akun');
		$data['aakun'] = $this->db->query("SELECT * FROM tb_akun WHERE id_akun='$id'")->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
	}
}
