<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function tampilan_kategori()
	{
		$this->load->view('home/Kategori');
    }

    public function proses_kategori()
    {

    }

    public function proses_register()
    {
        
    }

    public function logout()
    {
        
    }
}
