<?php

class Cetak_perbaikan extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Laporan Perbaikan";
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('v_admin/filter_perbaikan');
        $this->load->view('templates_admin/footer');
    }


    public function cetaklaporanperbaikan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['print_perbaikan'] = $this->M_perbaikan->filter_perbaikan($bulan, $tahun);
        $this->load->view('templates_admin/header', $data);
        $this->load->view('v_admin/cetak_perbaikan');
        $this->load->view('templates_admin/footer');
    }
}
