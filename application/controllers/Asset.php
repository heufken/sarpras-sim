<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asset_model');
        $this->load->library('session');
    }

    public function index()
    {
        if (!$this->session->userdata('username')) {
            redirect('Homepage/login');
        }
        $data['assets'] = $this->Asset_model->get_assets();
        $this->load->view('asset_list', $data);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'quantity' => $this->input->post('quantity'),
                'spesifikasi' => $this->input->post('spesifikasi'),
                'merk' => $this->input->post('merk'),
                'bahan' => $this->input->post('bahan'),
                'jenis_barang' => $this->input->post('jenis_barang'),
                'asal_barang' => $this->input->post('asal_barang'),
                'tanggal_perolehan' => $this->input->post('tanggal_perolehan'),
                'harga' => $this->input->post('harga'),
            );
            $this->Asset_model->add_asset($data);
            redirect('asset');
        } else {
            $this->load->view('add_asset');
        }
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $data = array(
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'quantity' => $this->input->post('quantity'),
                'spesifikasi' => $this->input->post('spesifikasi'),
                'merk' => $this->input->post('merk'),
                'bahan' => $this->input->post('bahan'),
                'jenis_barang' => $this->input->post('jenis_barang'),
                'asal_barang' => $this->input->post('asal_barang'),
                'tanggal_perolehan' => $this->input->post('tanggal_perolehan'),
                'harga' => $this->input->post('harga'),
            );
            $this->Asset_model->update_asset($id, $data);
            redirect('asset');
        } else {
            $data['asset'] = $this->Asset_model->get_asset_by_id($id);
            $this->load->view('edit_asset', $data);
        }
    }

    public function delete($id)
    {
        $this->Asset_model->delete_asset($id);
        redirect('asset');
    }
}
?>