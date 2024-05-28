<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi_sarpras_model extends CI_Model {
    
    public function get_all_kondisi_sarpras() {
        return $this->db->get('kondisi_sarpras')->result_array();
    }

    public function get_kondisi_sarpras_by_id($id) {
        return $this->db->get_where('kondisi_sarpras', array('id' => $id))->row_array();
    }

    public function add_kondisi_sarpras($data) {
        $this->db->insert('kondisi_sarpras', $data);
        return $this->db->insert_id();
    }

    public function update_kondisi_sarpras($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('kondisi_sarpras', $data);
    }

    public function delete_kondisi_sarpras($id) {
        $this->db->where('id', $id);
        $this->db->delete('kondisi_sarpras');
    }
}
?>
