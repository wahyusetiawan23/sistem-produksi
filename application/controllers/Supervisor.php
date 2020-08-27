<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supervisor extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('m_produksi');
  }
  function index()
  {
    $data['title'] = 'Supervisor';
    $f['laporan'] = $this->m_produksi->get_data('data_produksi')->result();
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('supervisor/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('supervisor/laporan', $f);
    $this->load->view('templates/footer', $data);
  }
}
