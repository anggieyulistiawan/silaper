<?php

class Instalasi extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Instalasi";
		$data['bulan'] = "";
		$data['instalasi'] = $this->M_instalasi->get_data('tb_instalasi')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/instalasi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function filter_instalasi()
	{

		$data['title'] = "Kelola Data Instalasi";
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] = $bulan;
		$data['tahun2'] = $tahun;
		$data['instalasi'] = $this->M_instalasi->filter_instalasi($bulan, $tahun);
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/instalasi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail_data($id_instalasi)
	{
		$data['title'] = "Detail Data Instalasi";
		$detail = $this->M_instalasi->detail_data($id_instalasi);
		$data['detail'] = $detail;
		// var_dump($data['detail'], $id_instalasi);
		// die;
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/detail_instalasi', $data);
		$this->load->view('templates_admin/footer');
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
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/instalasi', $data);
		$this->load->view('templates_admin/footer');
	}
}
