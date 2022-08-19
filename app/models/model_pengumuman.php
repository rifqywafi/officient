<?php


public function tambahDataPengumuman($data)

   $query = " INSERT INTO  pengumuman
   
               values 
               ('', :id_user, :isi_pengumuman, :lampiran, :tanggal_pengumuman)";

$this->db->query($query);
$this->db->bind('id_user', $data['id_user']);
$this->db->bind('isi_pengumuman', $data['isi_pengumuman']);
$this->db->bind('lampiran', $data['lampiran']);
$this->db->bind('tanggal_pengumuman', $data['tanggal_pengumuman']);


$this->db->execute();