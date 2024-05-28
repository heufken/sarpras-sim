<?php
class user extends CI_Controller
{
	public function add()
	{
		$data['judul'] = "Tambah Data";
		$this->load->view('header',$data);
		$this->load->view('user_add');
		$this->load->view('footer',$data);
	} 
	public function show()
	{
	$data['users'] = $this->model->get_all_data($this->table);
	$data['judul'] = "Data User";
	$this->load->view('header',$data); 
	$this->load->view('user_show', $data);
	$this->load->view('footer',$data); 
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->model('datauser', 'model');
		$this->table = 'user'; 
		$this->load->library('session');
		if(!$this->session->userdata('username'))
		{
		redirect('Homepage/login');
		}
	}
	public function save()
	{
		if(isset($_POST['kirim']))
		{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			//mengecek nama, username, dan password apakah sudah terisi
			if($nama and $username and $password)
			{
				//mengecek password apakah sudah lebih dari 6 karakter
				if(strlen($password) > 6)
				{
					$data = [
					'nama'=>$nama,
					'username'=>$username,
					'password'=>$password
					];
					
					$this->model->insert_data($this->table, $data);
					
				}
			} 
			
			redirect('user/show');
		}
		
	}
	
	public function edit($id)
	{
	//ambil data berdasarkan id
	$data['user'] = $this->model->get_data($this->table, ['id' => $id])->row();
	
	//kirim data user ke view
	$data['judul'] = "Edit Data";
	$this->load->view('header',$data);
	$this->load->view('user_edit', $data);
	$this->load->view('footer',$data);
	}
	public function update()
	{
	if(isset($_POST['ubah']))
	{
		//ambil data
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$id = $this->input->post('id');
		//cek keterisian nama, username, dan password
		if($username and $password and $nama)
	{
		//cek apakah password sudah lebih dari 6 karakter
		if(strlen($password) > 6)
		{
			$data = [
			'nama'=>$nama,
			'username'=>$username,
			'password'=>$password
			];
			//panggil function update_data pada model
			$this->model->update_data($this->table, $data, ['id' => $id]);
		}
	}
	redirect('user/show');
	}
	}
	public function delete($id)
	{
	//meminta model untuk menghapus data berdasarkan id yang dipilih
	$delete = $this->model->delete_data($this->table, ['id'=>$id]);
	
	if($delete)
		redirect('user/show');
	}
}