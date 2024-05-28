<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {
    
    public function get_all_pegawai() {
        return $this->db->get('pegawai')->result_array();
    }

    public function tambah_pegawai($data) {
        $this->db->insert('pegawai', $data);
    }

    public function edit_pegawai($id, $data) {
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
    }

    public function hapus_pegawai($id) {
        $this->db->where('id_pegawai', $id);
        $this->db->delete('pegawai');
    }

    public function get_pegawai_by_id($id) {
        return $this->db->get_where('pegawai', array('id_pegawai' => $id))->row_array();
    }
}
