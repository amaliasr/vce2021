<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Countdown extends CI_Controller {

	public function index()
	{
		$this->load->view('countdown/index');
	}

}

/* End of file Countdown.php */
/* Location: ./application/controllers/Countdown.php */