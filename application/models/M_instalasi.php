<?php
class M_instalasi extends CI_Model
{

    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_perbaikan JOIN tb_ruangan on tb_perbaikan.id_ruangan=tb_ruangan.id_ruangan');
    }

    // menampilkan data petugas
    public function tampil_petugas()
    {
        return  $this->db->query("SELECT * FROM tb_petugas");
    }

    // menampilkan data ruangan
    public function tampil_ruangan()
    {
        return  $this->db->query("SELECT * FROM tb_ruangan");
    }

    public function get_data_instalasiuser()
    {
        // return $this->db->get($table);
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->where('tb_instalasi.id_akun', $id_akun);
        return $this->db->get();
    }

    public function get_data()
    {
        // return $this->db->get($table);
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        // $this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_perbaikan.id_petugas', 'right');
        $this->db->where('YEAR(tanggal_lapor_instal)', date('Y'));
        $this->db->where('MONTH(tanggal_lapor_instal)', date('m'));
        $this->db->where('DAY(tanggal_lapor_instal)', date('d'));
        return $this->db->get();
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function update_data_instalasiuser($id)
    {
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->where('id_instalasi', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data_update($id_instalasi)
    {
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->where('id_instalasi', $id_instalasi);
        $query = $this->db->get();
        return $query->row();
    }

    public function detail_data($id_instalasi)
    {
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_instalasi.id_petugas', 'right');
        $this->db->where('id_instalasi', $id_instalasi);
        $query = $this->db->get();
        return $query->row();
    }

    public function filter_instalasi($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->where('YEAR(tanggal_lapor_instal)', $tahun);
        $this->db->where('MONTH(tanggal_lapor_instal)', $bulan);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_instalasi');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_instalasi.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->like('nama_ruangan', $keyword);
        $this->db->or_like('nama_akun', $keyword);
        $this->db->or_like('nama_instal', $keyword);
        $this->db->or_like('keterangan_instal', $keyword);
        $this->db->or_like('status_instal', $keyword);
        return $this->db->get()->result();
    }
}
