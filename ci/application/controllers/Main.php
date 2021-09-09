<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'FAQ';
        // $data['user'] = $this->db->get_where('users', ['email' =>
        // $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('main/index', $data);
        $this->load->view('templates/footer');
    }
}
