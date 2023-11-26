<?php

class Cetak_instalasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Laporan Instalasi";
        $this->load->view('templates_petugas/header', $data);
        $this->load->view('templates_petugas/sidebar');
        $this->load->view('v_petugas/filter_instalasi');
        $this->load->view('templates_petugas/footer');
    }


    public function cetaklaporaninstalasi()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['print_instalasi'] = $this->M_instalasi->filter_instalasi($bulan, $tahun);
        $this->load->view('templates_petugas/header', $data);
        $this->load->view('v_petugas/cetak_instalasi');
        $this->load->view('templates_petugas/footer');
    }
}
