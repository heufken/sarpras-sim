<?php
class Homepage extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		 $this->load->helper('url');
	}
	
	public function index(){
		$data['judul'] = "Welcome to Budi Mulia Dua Elementary School";
		$this->load->view('sidebar',$data);
		$this->load->view('header',$data);
		$this->load->view('home2',$data);
		$this->load->view('footer',$data);
	}
	
	public function login(){
		$data['judul'] = "Halaman Login";
		$this->load->view('sidebar',$data);
		$this->load->view('header',$data);
		$this->load->view('login',$data);
		$this->load->view('footer',$data);
	}

}