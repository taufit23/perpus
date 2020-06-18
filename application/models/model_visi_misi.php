<?php
class Model_visi_misi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('visi_misi');
    }
    public function edit_visi_misi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
