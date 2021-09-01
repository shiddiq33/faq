<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');//manggil model
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function tampilan_kategori()
	{
		$this->load->view('form/Kategori');//nampilin view

    }

    public function save()
    {
          $data = $this->KategoriModel->save();//manggil fun save yang ada di model
          echo json_encode($data);
    }
}
