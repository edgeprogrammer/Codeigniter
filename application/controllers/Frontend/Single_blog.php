<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_blog extends CI_Controller {


	public function index($id)
	{
		 $this->load->model('Blog');
 		$data['Blog'] = $this->Blog->get_blog_By_id($id);
		
		$data['Allblogs'] = $this->Blog->get_blogs();
		

		$this->load->view('Frontend/Include/header');
		$this->load->view('Frontend/Single_blog',$data);
		$this->load->view('Frontend/Include/footer');
	}
}
