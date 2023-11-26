<?php

class Cetak_instalasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Laporan Instalasi";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('v_admin/filter_instalasi');
        $this->load->view('templates_admin/footer');
    }


    public function cetaklaporaninstalasi()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['print_instalasi'] = $this->M_instalasi->filter_instalasi($bulan, $tahun);
        $this->load->view('templates_admin/header', $data);
        $this->load->view('v_admin/cetak_instalasi');
        $this->load->view('templates_admin/footer');
    }
}
