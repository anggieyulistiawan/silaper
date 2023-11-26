<?php

class Perbaikan extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Kelola Data Perbaikan";
		$data['bulan'] = "";
		$data['perbaikan'] = $this->M_perbaikan->get_data('tb_perbaikan')->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/perbaikan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function filter_perbaikan()
	{

		$data['title'] = "Kelola Data Perbaikan";
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$data['bulan'] = $bulan;
		$data['tahun1'] = $tahun;
		// var_dump($tahun1, $bulan);
		// die;
		$data['perbaikan'] = $this->M_perbaikan->filter_perbaikan($bulan, $tahun);
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/perbaikan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail_data($id_perbaikan)
	{
		$data['title'] = "Detail Data Perbaikan";
		$detail = $this->M_perbaikan->detail_data($id_perbaikan);
		$data['detail'] = $detail;
		// var_dump($data['detail'], $id_perbaikan);
		// die;
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/detail_perbaikan', $data);
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
		$data['perbaikan'] = $this->M_perbaikan->get_keyword($keyword);
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('v_admin/perbaikan', $data);
		$this->load->view('templates_admin/footer');
	}
}
