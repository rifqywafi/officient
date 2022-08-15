<?php 
class Home extends Controller{
    public function index(){
        $data['judul'] = "Home";
        $data['dpn'] = "Rifqy";
        $data['blkg'] = "Wafi";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}