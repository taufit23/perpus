<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'dashboard Admin';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('admin_templates/footer');
    }
    public function about()
    {
        $data['visi_misi'] = $this->model_visi_misi->tampil_data()->result();
        $data['title'] = 'About Perpustakaan-A';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/about', $data);
        $this->load->view('admin_templates/footer');
    }
    public function edit_visi_misi($id)
    {
        $where = array('id' => $id);
        $data['visi_misi'] = $this->model_visi_misi->edit_visi_misi($where, 'visi_misi')->result();
        $data['title'] = 'Edit Visi Misi - Admin';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/edit_visi_misi', $data);
        $this->load->view('admin_templates/footer');
    }
    public function update()
    {
        $id         = $this->input->post('id');
        $visi1   = $this->input->post('visi1');
        $visi2   = $this->input->post('visi2');
        $visi3   = $this->input->post('visi3');
        $visi4   = $this->input->post('visi4');
        $misi1 = $this->input->post('misi1');
        $misi2 = $this->input->post('misi2');
        $misi3 = $this->input->post('misi3');
        $misi4 = $this->input->post('misi4');
        // jika ada gambar yang akan di upload
        // $gambar     = $_FILES['gambar']['name'];
        // if ($gambar = '') {
        // } else {
        //     $config['upload_path'] = './uploads';
        //     $config['allowed_types'] = 'jpg|jpeg';
        //     $config['file_name'] = 'gambar_visi_misi';
        //     $config['overwrite'] = TRUE;
        //     $config['detect_mime'] = TRUE;
        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('gambar')) {
        //         echo "Gambar Gagal DiUpload";
        //     } else {
        //         $gambar = $this->upload->data('file_name');
        //     }
        // }

        $data = array(
            'visi1' => $visi1,
            'visi2' => $visi2,
            'visi3' => $visi3,
            'visi4' => $visi4,
            'misi1' => $misi1,
            'misi2' => $misi2,
            'misi3' => $misi3,
            'misi4' => $misi4,
        );

        $where = array(
            'id' => $id
        );
        $this->model_visi_misi->update_data($where, $data, 'visi_misi');
        redirect('admin/dashboard_admin/about');
    }
    public function data_buku()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $data['title'] = 'Data buku - Admin';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/data_buku', $data);
        $this->load->view('admin_templates/footer');
    }
    public function cari_buku()
    {
        $keyword = $this->input->post('keyword');
        $data['buku'] = $this->model_buku->cari_data_buku($keyword);
        $data['title'] = 'Data Buku';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/data_buku', $data);
        $this->load->view('admin_templates/footer');
    }

    public function tambah_aksi()
    {
        $judul   = $this->input->post('judul');
        $pengarang = $this->input->post('pengarang');
        $penerbit   = $this->input->post('penerbit');
        $tahun_terbit      = $this->input->post('tahun_terbit');
        $jumlah_buku       = $this->input->post('jumlah_buku');
        $lokasi       = $this->input->post('lokasi');
        $update       = $this->input->post('update');
        $gambar     = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $judul;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal DiUpload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'jumlah_buku' => $jumlah_buku,
            'lokasi' => $lokasi,
            'tanggal_input' => $update,
            'gambar' => $gambar
        );
        $this->model_buku->tambah_buku($data, 'buku');
        redirect('admin/dashboard_admin/data_buku');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_buku->hapus_data($where, 'buku');
        redirect('admin/dashboard_admin/data_buku');
    }
    public function detail($id)
    {
        $data['buku'] =  $this->model_buku->detail_buku($id);
        $data['title'] = 'Detail Buku';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('detail_buku', $data);
        $this->load->view('admin_templates/footer');
    }
    public function edit_buku($id)
    {
        $where = array('id' => $id);
        $data['buku'] = $this->model_buku->edit_buku($where, 'buku')->result();
        $data['title'] = 'Edit buku - Admin';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/edit_buku', $data);
        $this->load->view('admin_templates/footer');
    }

    public function update_buku()
    {
        $id             = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $pengarang      = $this->input->post('pengarang');
        $penerbit       = $this->input->post('penerbit');
        $tahun_terbit   = $this->input->post('tahun_terbit');
        $jumlah_buku    = $this->input->post('jumlah_buku');
        $lokasi         = $this->input->post('lokasi');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar     = '') {
            set_value($gambar);
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg';
            $config['file_name'] = $judul;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal DiUpload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul' => $judul,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'tahun_terbit' => $tahun_terbit,
            'jumlah_buku' => $jumlah_buku,
            'lokasi' => $lokasi,
            'gambar' => $gambar,
        );
        $where = array(
            'id' => $id
        );

        $this->model_buku->update_buku($where, $data, 'buku');
        redirect('admin/dashboard_admin/data_buku');
    }
    public function detail_buku($id)
    {
        $data['buku'] =  $this->model_buku->detail_buku($id);
        $data['title'] = 'Detail Buku - Admin';
        $this->load->view('admin_templates/header', $data);
        $this->load->view('admin_templates/sidebar');
        $this->load->view('admin/detail_buku', $data);
        $this->load->view('admin_templates/footer');
    }
}
