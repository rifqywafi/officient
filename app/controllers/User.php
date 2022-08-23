<?php
class User extends Controller
{
    public function index()
    {
        $data['judul'] = "Lihat Data Karyawan";
        $this->view('templates/style', $data);
        $this->view('user/index');
        $this->view('templates/js');
    }
    public function daftar()
    {
        $data['judul'] = "Input Data Karyawan";
        $this->view('templates/header', $data);
        $this->view('user/daftar');
        $this->view('templates/footer');
    }
}
