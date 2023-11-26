<?php
class M_ruangan extends CI_Model
{

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

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_ruangan');
        $this->db->like('id_ruangan', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('nama_pj', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}
