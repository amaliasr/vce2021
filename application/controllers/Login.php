<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('backup/header');
		$this->load->view('backup/login');
		$this->load->view('backup/footer');
	}

}

/* End of file login.php */
/* Location: ./application/views/backup/login.php */