<?php
class M_jabatan extends CI_Model
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
        $this->db->from('tb_jabatan');
        $this->db->like('id_jabatan', $keyword);
        $this->db->or_like('nama_jabatan', $keyword);
        return $this->db->get()->result();
    }
}
