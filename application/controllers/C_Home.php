<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Home extends CI_Controller {

    function __construct() {
        parent::__construct();       
        // Load url helper
        $this->load->helper('url');
    }

	public function index()
	{
        $data['judul'] = 'Ruang Guru';
		$this->load->view('templates/header');
		$this->load->view('V_Home');
		$this->load->view('templates/footer');
    }
    
    public function Register()
	{
        $data['judul'] = 'Register';
		$this->load->view('templates/header');
		$this->load->view('V_Register');
		$this->load->view('templates/footer');
    }

    public function formRegister()
    {
        $data['judul'] = 'Form Register';
		$this->load->view('templates/header');
		$this->load->view('V_FormRegister');
		$this->load->view('templates/footer');
    }
}
