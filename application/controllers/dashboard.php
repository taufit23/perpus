<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dahboard Perpustakaan-A';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
    public function about()
    {
        $data['visi_misi'] = $this->model_visi_misi->tampil_data()->result();
        $data['title'] = 'About Perpustakaan-A';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('about', $data);
        $this->load->view('templates/footer');
    }
    public function buku()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $data['title'] = 'Data Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('buku', $data);
        $this->load->view('templates/footer');
    }
    public function cari_buku()
    {
        $keyword = $this->input->post('keyword');
        $data['buku'] = $this->model_buku->cari_data_buku($keyword);
        $data['title'] = 'Data Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('buku', $data);
        $this->load->view('templates/footer');
    }
    public function detail_buku($id)
    {
        $data['buku'] =  $this->model_buku->detail_buku($id);
        $data['title'] = 'Detail Buku';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('detail_buku', $data);
        $this->load->view('templates/footer');
    }
}
