<?php
class dosen extends CI_Controller{
    public function index(){ 
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        //render data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    
    public function detail($id){
        $this->load->model('dosen_model');
        $dsn = $this->dosen_model->getById($id);
        $data['dsn'] = $dsn;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>