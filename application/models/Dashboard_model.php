<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    
    public function count_users() {
        return $this->db->count_all('users');
    }

    public function count_items() {
        return $this->db->count_all('items');
    }

    public function count_orders() {
        return $this->db->count_all('orders');
    }
}
