<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Memuat model User_model di dalam konstruktor
        $this->load->model('User_model');
    }

    public function add()
    {
        $this->load->view('user_add'); // Tampilkan view user_add.php
    }

    public function create()
    {
        // Ambil data dari formulir
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');

        // Validasi data (jika diperlukan)

        // Panggil model untuk menyimpan data ke database
        $this->User_model->add_user($nama, $username);

        // Redirect kembali ke halaman show
        redirect('user/show');
    }

    public function show()
    {
        // Load model User_model
        $this->load->model('User_model');

        // Ambil data user dari model
        $data['users'] = $this->User_model->get_users();

        // Tampilkan view user_show.php dengan data
        $this->load->view('user_show', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
        $this->load->view('user_edit', $data);
    }

    public function update()
    {
        if (isset($_POST['ubah'])) {
            //ambil data
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $id = $this->input->post('id');
            //cek keterisian nama, username, dan password
            if ($username and $password and $nama) {
                //cek apakah password sudah lebih dari 6 karakter
                if (strlen($password) > 6) {
                    $data = [
                        'nama' => $nama,
                        'username' => $username,
                        'password' => $password
                    ];
                    //panggil function update_data pada model
                    $this->model->update_data($this->table, $data, ['id' => $id]);
                }
                redirect('user/show');
            }
        }
    }
}
