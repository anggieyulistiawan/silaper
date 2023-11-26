<?php
class M_akun extends CI_Model
{
    public function show_data()
    {
        return $this->db->query('SELECT * FROM tb_akun JOIN tb_ruangan on tb_akun.id_ruangan=tb_ruangan.id_ruangan
                JOIN tb_level on tb_akun.id_level=tb_level.id_level');
    }

    // menampilkan data level
    public function tampil_level()
    {
        return  $this->db->query("SELECT * FROM tb_level");
    }

    // menampilkan data ruangan
    public function tampil_ruangan()
    {
        return  $this->db->query("SELECT * FROM tb_ruangan");
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id_akun)
    {
        $query = $this->db->query("SELECT * FROM tb_akun JOIN tb_ruangan on tb_akun.id_ruangan=tb_ruangan.id_ruangan
                JOIN tb_level on tb_akun.id_level=tb_level.id_level WHERE id_akun='$id_akun'")->row();
        // $query = $this->db->get_where('tb_akun', array('id_akun' => $id_akun))->row();
        return $query;
    }

    public function cek_login()
    {
        $username   = set_value('username');
        $password   = set_value('password');

        $result     = $this->db->where('username', $username)
            ->where('password', md5($password))
            ->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan')
            ->limit(1)
            ->get('tb_akun');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_akun');
        $this->db->join('tb_level', 'tb_level.id_level=tb_akun.id_level');
        $this->db->join('tb_ruangan', 'tb_ruangan.id_ruangan=tb_akun.id_ruangan');
        $this->db->like('nama_level', $keyword);
        $this->db->or_like('nama_ruangan', $keyword);
        $this->db->or_like('nama_akun', $keyword);
        $this->db->or_like('tb_akun.nip', $keyword);
        $this->db->or_like('username', $keyword);
        return $this->db->get()->result();
    }
}
