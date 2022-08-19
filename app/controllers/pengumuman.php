<?php

class pengumuman extends controller {

    public function index()
    {
        $data['judul'] = 'PENGUMUMAN';
        $data['pmm'] = $this->model('pengumuman_model')->GetALLpengumuman();
        $this->view('templates/header', $data);
        $this->view('pengumuman/index', $data);
        $this->view('templates/footer');
    }
}