<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllRooms extends CI_Controller {


	public function index()
	{
		 $this->load->model('Room');
		$this->load->model('images');

		$data['images'] = $this->images->get_all_images();
 		$data['Rooms'] = $this->Room->get_properties();

		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/allRooms_view',$data);
		$this->load->view('Backend/Include/footer');
	}

	public function delete_room($id)
	{
		$this->load->model('Room');
		$result = $this->Room->Delete($id);
		if($result)
		{
			echo "<script>alert('successfully deleted!');</script>";
			$url = base_url()."/Backend/allRooms";
			redirect($url);
		}
		else{
			echo "<script>alert('failed added!');</script>";
			$url = base_url()."/Backend/allRooms";
			redirect($url);
		}

	}
}

 