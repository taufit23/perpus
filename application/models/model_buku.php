<?php
class Model_buku extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('buku');
    }
    public function cari_data_buku($keyword)
    {
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->like('judul', $keyword);
        return $this->db->get()->result();
    }
    public function detail_buku($id)
    {
        $result = $this->db->where('id', $id)->get('buku');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function tambah_buku($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_buku($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_buku($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
