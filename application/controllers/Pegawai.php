<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('Homepage/login');
        }
        $data['pegawai'] = $this->Pegawai_model->get_all_pegawai();
        $this->load->view('pegawai_list', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'pendidikan' => $this->input->post('pendidikan'),
                'tahun_masuk' => $this->input->post('tahun_masuk'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp')
            );
            $this->Pegawai_model->tambah_pegawai($data);
            redirect('pegawai');
        } else {
            $this->load->view('add_pegawai');
        }
    }

    public function edit($id) {
        if ($this->input->post()) {
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'pendidikan' => $this->input->post('pendidikan'),
                'tahun_masuk' => $this->input->post('tahun_masuk'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp')
            );
            $this->Pegawai_model->edit_pegawai($id, $data);
            redirect('pegawai');
        } else {
            $data['pegawai'] = $this->Pegawai_model->get_pegawai_by_id($id);
            $this->load->view('edit_pegawai', $data);
        }
    }

    public function hapus($id) {
        $this->Pegawai_model->hapus_pegawai($id);
        redirect('pegawai');
    }
}
