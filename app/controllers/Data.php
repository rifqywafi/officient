<?php 
class Data extends Controller{
    public function index(){
        $data['judul'] = "Lihat Data Karyawan";
        $this->view('templates/header', $data);
        $this->view('data/index');
    }
    public function input(){
        $data['judul'] = "Input Data Karyawan";
        $this->view('templates/header', $data);
        $this->view('data/input');
    }
}