<?php
class Matakuliah_model extends CI_Model {
    public $id, $nama, $sks, $kode;

    public function getAll(){
        //menampilkan seluruh data
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('matakuliah', ['id' => $id]);
        return $query->row();
    }
}
?>