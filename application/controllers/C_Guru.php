<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Guru extends CI_Controller {

    function __construct() {
        parent::__construct();       
        // Load url helper
        $this->load->helper('url');
    }

	public function index()
	{
        $data['judul'] = 'Ruang Guru';
		$this->load->view('templates/header');
		$this->load->view('guru/V_DaftarGuru');
		$this->load->view('templates/footer');
    }
    

   
}
