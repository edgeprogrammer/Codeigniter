<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_room extends CI_Controller {


	public function index($id)
	{
		 $this->load->model('Room');
		$this->load->model('images');

		$data['images'] = $this->images->get_all_images();
 		$data['Rooms'] = $this->Room->get_properties_By_id($id);

		$this->load->view('Frontend/Include/header');
		$this->load->view('Frontend/Single_room',$data);
		$this->load->view('Frontend/Include/footer');
	}
}
