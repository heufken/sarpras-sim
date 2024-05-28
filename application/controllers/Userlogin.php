<?php
class userlogin extends CI_Controller
{
	public function index()
	{
		$this->load->view('Homepage/login');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('datauser', 'model');
		$this->table = 'user';
	}
	public function process()
	{
	//cek jika tombol diklik
	if(isset($_POST['login']))
	{
		//ambil data dari inputan pengguna
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//cek jika username dan password sudah terisi
		if($username and $password)
		{
			$data = [
					'username' => $username,
					'password' => $password
					];
			$user_account = $this->model->get_data($this->table, $data)->row();
			if($user_account)
			{
				$session_data = [
							'username' =>$user_account->username,
							'password' =>$user_account->password
							];
				$this->session->set_userdata($session_data);
				redirect('user/show');
			}
			else
			{
				$this->session->set_flashdata('error', 'username atau password tidak sesuai');
				redirect('Homepage/login');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'semua data harus diisi');
				redirect('Homepage/login');
		}
	}
	}
}