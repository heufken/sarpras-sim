<?php
class userlogin extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('user');
        $this->table = 'user';
    }
}