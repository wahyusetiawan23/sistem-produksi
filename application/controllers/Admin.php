<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_produksi');
    }
    public function index()

    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }
    // master data
    function leader()
    {
        $data['title'] = 'Admin';
        $a['leader'] = $this->m_produksi->get_data('leader')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/leader', $a);
        $this->load->view('templates/footer', $data);
    }

    function line()
    {
        $data['title'] = 'Admin';
        $b['line'] = $this->m_produksi->get_data('line')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/line', $b);
        $this->load->view('templates/footer', $data);
    }

    function product()
    {
        $data['title'] = 'Admin';
        $c['product'] = $this->m_produksi->get_data('product')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/product', $c);
        $this->load->view('templates/footer', $data);
    }

    function customer()
    {
        $data['title'] = 'Admin';
        $d['customer'] = $this->m_produksi->get_data('customer')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/customer', $d);
        $this->load->view('templates/footer', $data);
    }
    // schedule
    function schedule()
    {
        $data['title'] = 'Admin';
        $sc['schedule'] = $this->m_produksi->get_data('schedule')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/schedule', $data);
        $this->load->view('templates/footer', $data);
    }

    // data produksi
    function data_produksi()
    {
        $data['title'] = 'Admin';
        $e['data_produksi'] = $this->m_produksi->get_data('data_produksi')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/data_produksi', $e);
        $this->load->view('templates/footer', $data);
    }

    // laporan
    function laporan()
    {
        $data['title'] = 'Admin';
        $f['laporan'] = $this->m_produksi->get_data('data_produksi')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $f);
        $this->load->view('templates/footer', $data);
    }
    // aturuser
    function atur_user()
    {
        $data['title'] = 'Admin';
        $i['atur_user'] = $this->m_produksi->get_data('user')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/atur_user', $i);
        $this->load->view('templates/footer', $data);
    }

    // aturprofil
    function atur_profil()
    {
        $data['title'] = 'Admin';
        $j['atur_profil'] = $this->m_produksi->get_data('user')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/atur_profil', $j);
        $this->load->view('templates/footer', $data);
    }

    // tambah leader
    function tambahleader()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahleader');
        $this->load->view('templates/footer', $data);
    }

    function tambahline()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahline');
        $this->load->view('templates/footer', $data);
    }

    function tambahproduct()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahproduct');
        $this->load->view('templates/footer', $data);
    }

    function tambahcustomer()
    {
        $data['title'] = 'Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambahcustomer');
        $this->load->view('templates/footer', $data);
    }

    public function laporan_print_produksi()
    {
        $f['data_produksi'] = $this->m_produksi->get_data('data_produksi')->result();

        $this->load->view('admin/laporan_print_produksi', $f);
    }
}
