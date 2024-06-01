<?php
class About extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datauser', 'model');
		$this->load->view = 'home';
		$this->load->library('session');
		if(!$this->session->userdata('username'))
		{
		redirect('homepage/index');
		}
	}

    public function index()
    {
				$data['judul']="Budi Mulia Dua Elementary School Yogyakarta";
				$this->load->view('sidebar',$data);
				$this->load->view('header',$data);
                $this->load->view('about',$data);
				$this->load->view('footer',$data);
    }
}