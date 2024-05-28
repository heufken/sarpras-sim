<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_sarpras extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kondisi_sarpras_model');
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('Homepage/login');
        }
        $data['kondisi_sarpras'] = $this->Kondisi_sarpras_model->get_all_kondisi_sarpras();
        $this->load->view('kondisi_sarpras_list', $data);
    }

    public function add() {
        // Tampilkan halaman tambah data kondisi sarana dan prasarana
        $this->load->view('add_kondisi_sarpras');
    }

    public function insert() {
        // Tangani penyisipan data kondisi sarana dan prasarana ke dalam database
        $data = array(
            'id_sarpras' => $this->input->post('id_sarpras'),
            'tgl_pengecekan' => $this->input->post('tgl_pengecekan'),
            'kondisi' => $this->input->post('kondisi'),
            'ruangan' => $this->input->post('ruangan'),
            'keterangan' => $this->input->post('keterangan')
        );
    
        // Panggil model untuk menambahkan kondisi sarpras ke database
        $this->Kondisi_sarpras_model->add_kondisi_sarpras($data);
    
        // Redirect kembali ke halaman daftar kondisi sarpras
        redirect('kondisi_sarpras');
    }

    public function edit($id) {
        // Tampilkan halaman edit data kondisi sarana dan prasarana
        $data['kondisi_sarpras'] = $this->Kondisi_sarpras_model->get_kondisi_sarpras_by_id($id);
        $this->load->view('edit_kondisi_sarpras', $data);
    }

    public function update($id) {
        // Tangani pembaruan data kondisi sarana dan prasarana di database
        $data = array(
            'id_sarpras' => $this->input->post('id_sarpras'),
            'tgl_pengecekan' => $this->input->post('tgl_pengecekan'),
            'kondisi' => $this->input->post('kondisi'),
            'ruangan' => $this->input->post('ruangan'),
            'keterangan' => $this->input->post('keterangan')
        );
    
        // Panggil model untuk memperbarui data kondisi sarpras di database
        $this->Kondisi_sarpras_model->update_kondisi_sarpras($id, $data);
    
        // Redirect kembali ke halaman daftar kondisi sarpras
        redirect('kondisi_sarpras');
    }

    public function delete($id) {
        // Hapus data kondisi sarana dan prasarana dari database
        $this->Kondisi_sarpras_model->delete_kondisi_sarpras($id);
    
        // Redirect kembali ke halaman daftar kondisi sarpras
        redirect('kondisi_sarpras');
    }
}
?>
