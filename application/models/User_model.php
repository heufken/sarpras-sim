<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_users()
    {
        // Ambil data user dari tabel user
        return $this->db->get('user');
    }

    public function add_user($nama, $username)
    {
        // Data yang akan disimpan
        $data = array(
            'nama' => $nama,
            'username' => $username
        );

        // Simpan data ke database
        $this->db->insert('user', $data);
    }
    public function get_data($table, $data)
    {
        return $this->db->get_where($table, $data);
    }

    public function update_data($table, $set, $where)
    {
        return $this->db->where($where)
            ->update($table, $set);
    }
}
