
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
		 
		$this->load->view('Frontend/Include/header');
		$this->load->view('Frontend/AboutUs');
		$this->load->view('Frontend/Include/footer');
	}
}

