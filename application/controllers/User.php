<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_produksi');
    }


    public function index()

    {
        $data['title'] = 'Produksi';
        $a['schedule'] = $this->m_produksi->get_data('schedule')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('User/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $a);
        $this->load->view('templates/footer', $data);
    }

    // hasil produksi
    public function hasil()

    {
        $data['title'] = 'Produksi';
        $e['hasil'] = $this->m_produksi->get_data('data_produksi')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('user/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/hasil', $e);
        $this->load->view('templates/footer', $data);
    }
}
