<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Asset_model');
    }

    public function index() {
        $data['assets'] = $this->Asset_model->get_assets();
        $this->load->view('asset_list', $data);
    }

    public function add() {
        // Cek apakah ada data yang dikirim melalui form
        if ($this->input->post()) {
            // Ambil data dari form
            $name = $this->input->post('name');
            $category = $this->input->post('category');
            $quantity = $this->input->post('quantity');
            
            // Validasi data (jika diperlukan)
            // Contoh validasi sederhana
            if (empty($name) || empty($category) || empty($quantity)) {
                echo "Semua field harus diisi.";
                return;
            }
            
            // Panggil model untuk menambahkan aset ke database
            $data = array(
                'name' => $name,
                'category' => $category,
                'quantity' => $quantity
            );
            $this->Asset_model->add_asset($data);

            // Redirect kembali ke halaman asset list
            redirect('asset');
        } else {
            // Jika tidak ada data yang dikirim, tampilkan halaman tambah aset
            $this->load->view('add_asset');
        }
    }

    public function edit($id) {
        // Cek apakah ada data yang dikirim melalui form
        if ($this->input->post()) {
            // Ambil data dari form
            $name = $this->input->post('name');
            $category = $this->input->post('category');
            $quantity = $this->input->post('quantity');
            
            // Validasi data (jika diperlukan)
            // Contoh validasi sederhana
            if (empty($name) || empty($category) || empty($quantity)) {
                echo "Semua field harus diisi.";
                return;
            }
            
            // Panggil model untuk mengupdate aset di database
            $data = array(
                'name' => $name,
                'category' => $category,
                'quantity' => $quantity
            );
            $this->Asset_model->update_asset($id, $data);

            // Redirect kembali ke halaman asset list
            redirect('asset');
        } else {
            // Jika tidak ada data yang dikirim, tampilkan halaman edit aset
            $data['asset'] = $this->Asset_model->get_asset_by_id($id);
            $this->load->view('edit_asset', $data);
        }
    }

    public function delete($id) {
        // Panggil model untuk menghapus aset dari database
        $this->Asset_model->delete_asset($id);

        // Redirect kembali ke halaman asset list
        redirect('asset');
    }
}
