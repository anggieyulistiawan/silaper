<?php
class M_perbaikan extends CI_Model
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

    public function get_data_perbaikanuser()
    {
        // return $this->db->get($table);
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->where('tb_perbaikan.id_akun', $id_akun);
        return $this->db->get();
    }

    public function get_data()
    {
        // return $this->db->get($table);
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        // $this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_perbaikan.id_petugas', 'right');
        $this->db->where('YEAR(tanggal_lapor)', date('Y'));
        $this->db->where('MONTH(tanggal_lapor)', date('m'));
        $this->db->where('DAY(tanggal_lapor)', date('d'));
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

    public function update_data_perbaikanuser($id)
    {
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->where('id_perbaikan', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data_update($id_perbaikan)
    {
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        // $this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_perbaikan.id_petugas', 'right');
        $this->db->where('id_perbaikan', $id_perbaikan);
        $query = $this->db->get();
        return $query->row();
        // $query = $this->db->query("SELECT * FROM tb_perbaikan 
        //     RIGHT JOIN tb_akun on tb_perbaikan.id_akun=tb_akun.id_akun
        //     RIGHT JOIN tb_petugas on tb_perbaikan.id_petugas=tb_petugas.id_petugas 
        //     RIGHT JOIN tb_ruangan on tb_ruangan.id_ruangan=tb_akun.id_ruangan WHERE id_perbaikan='$id_perbaikan'")->row();
        // return $query;
    }
    public function detail_data($id_perbaikan)
    {
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas=tb_perbaikan.id_petugas', 'right');
        $this->db->where('id_perbaikan', $id_perbaikan);
        $query = $this->db->get();
        return $query->row();
        // $query = $this->db->query("SELECT * FROM tb_perbaikan 
        //     RIGHT JOIN tb_akun on tb_perbaikan.id_akun=tb_akun.id_akun
        //     RIGHT JOIN tb_petugas on tb_perbaikan.id_petugas=tb_petugas.id_petugas 
        //     RIGHT JOIN tb_ruangan on tb_ruangan.id_ruangan=tb_akun.id_ruangan WHERE id_perbaikan='$id_perbaikan'")->row();
        // return $query;
    }

    public function filter_perbaikan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->where('YEAR(tanggal_lapor)', $tahun);
        $this->db->where('MONTH(tanggal_lapor)', $bulan);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_perbaikan');
        $this->db->join('tb_akun', 'tb_akun.id_akun=tb_perbaikan.id_akun');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->like('nama_ruangan', $keyword);
        $this->db->or_like('nama_akun', $keyword);
        $this->db->or_like('masalah', $keyword);
        $this->db->or_like('tindakan', $keyword);
        $this->db->or_like('status', $keyword);
        return $this->db->get()->result();
    }
}
