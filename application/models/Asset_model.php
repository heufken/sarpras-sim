<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset_model extends CI_Model {
    
    public function get_assets() {
        return $this->db->get('assets')->result_array();
    }

    public function add_asset($data) {
        $this->db->insert('assets', $data);
        return $this->db->insert_id();
    }

    public function update_asset($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('assets', $data);
    }

    public function delete_asset($id) {
        $this->db->where('id', $id);
        $this->db->delete('assets');
    }

    public function get_asset_by_id($id) {
        return $this->db->get_where('assets', array('id' => $id))->row_array();
    }
}
?>
