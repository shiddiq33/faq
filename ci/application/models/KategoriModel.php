<?php

defined('BASEPATH') or exit('No direct script access allowed');

class KategoriModel extends CI_Model
{
    function tampil_data(){ 
        return $this->db->get('kategori');// harus di ubah jadi tb_kategori
    }

    public function save()
    {
        $data = [
            "judul" => $this->input->post('judul', true), 
            "nip" => $this->input->post('nip', true), //buat manggil trus yang satu lagi di disimpen dari nama fild
        ];
        return $this->db->insert('kategori', $data);//ngikut yang di komentar 8
    }
}