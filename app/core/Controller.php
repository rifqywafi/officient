<?php
class Controller{
    public function view($view, $data = []){
        require '../app/views/'.$view.'.php';
    }
    public function model($model){
        require '../app/views/'.$model.'.php';
        return $model;
    }

    public function pengumuman($pengumuman){
        require '../app/views/'.$pengumuman.'.php';
        return $pengumuman;
    }
}