<?php
class Mahasiswa_model extends CI_Model {
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;
    
    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
    public function getAll(){
        //menampilkan seluruh data
        $query = $this->db->get('mahasiswa');
        return $query->result();
    }
    public function getById($id){
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row();
    }
}
?>