<?php
class Dosen_model extends CI_Model {
    public $id, $nama, $gender, $tmp_lahir, $tgl_lahir, $nidn, $pendidikan;

    public function getAll(){
        //menampilkan seluruh data
        $query = $this->db->get('dosen');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('dosen', ['id' => $id]);
        return $query->row();
    }
}
?>