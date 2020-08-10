
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms_cnt extends CI_Controller {


	public function index()
	{
		 $this->load->model('Room');
		$this->load->model('images');

		$data['images'] = $this->images->get_all_images();
 		$data['Rooms'] = $this->Room->get_properties();


		$this->load->view('Frontend/Include/header');
		$this->load->view('Frontend/Rooms',$data);
		$this->load->view('Frontend/Include/footer')                                                    ;
	}
}
