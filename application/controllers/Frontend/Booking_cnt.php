 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_cnt extends CI_Controller {


    public function index()
    {
		$this->load->model('Room');
		$data['Rooms'] = $this->Room->get_properties();
		
       $this->load->view('Frontend/Include/header');
        $this->load->view('Frontend/Booking_view',$data);
       $this->load->view('Frontend/Include/footer');
    }
	
	public function booking_form()
	{
		
		$fromArray['name'] = $this->input->post('name');
		$fromArray['email'] = $this->input->post('email');
		$fromArray['phone'] = $this->input->post('phone');
		$fromArray['arrival_date'] = $this->input->post('from');
		$fromArray['departure_date'] = $this->input->post('to');
		$fromArray['room_id'] = $this->input->post('room');
		$this->load->model('Booking');
		$result = $this->Booking->insert_blog($fromArray);
		if($result)
		{
			echo "<script>alert('successfull Received!');</script>"; 
			$url = base_url()."/Home";
			$this->load->model('Mail_send');
			$this->Mail_send->admin_alart();
			echo '<script>window.location.href = "'.$url.'";</script>';
		}
		
		
	}
	public function booking_form2($id)
	{
		
		$fromArray['name'] = $this->input->post('name');
		$fromArray['email'] = $this->input->post('email');
		$fromArray['phone'] = $this->input->post('phone');
		$fromArray['arrival_date'] = $this->input->post('from');
		$fromArray['departure_date'] = $this->input->post('to');
		$fromArray['room_id'] =$id;
		$this->load->model('Booking');
		$result = $this->Booking->insert_blog($fromArray);
		if($result)
		{
			echo "<script>alert('successfull Received!');</script>"; 
			$url = base_url()."/Home";
			$this->load->model('Mail_send');
			$this->Mail_send->admin_alart();
			echo '<script>window.location.href = "'.$url.'";</script>';
		}
		
		
	}
}
