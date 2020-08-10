<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_cnt_back extends CI_Controller {


	public function index()
	{
		 $this->load->model('Booking');
		

		
 		$data['bookings'] = $this->Booking->get_bookings();

		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/AllBookings',$data);
		$this->load->view('Backend/Include/footer');
	}
	public function Completed_bookings() 
	{
		 $this->load->model('Booking');
		
 		$data['bookings'] = $this->Booking->get_completed_bookings();

		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/Complete_bookings_view',$data);
		$this->load->view('Backend/Include/footer');
	}

	public function Canceled_booking($id)
	{
		$this->load->Model('Mail_send');
		$this->Mail_send->Canceled($id);
		$this->load->model('Booking');
		$result = $this->Booking->Cancel_booking($id);
		if($result)
		{
			echo "<script>alert('Booking successfully Deleted');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			echo "<script>window.location.href='".$url."';</script>";
		}
		else{
			echo "<script>alert('Booking Failed to Delete');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			echo "<script>window.location.href='".$url."';</script>";
		}

	}
	public function stauts_Approve($id)
	{
		$this->load->Model('Mail_send');
		$this->Mail_send->Approve($id);
		$this->load->model('Booking');
		$result = $this->Booking->Update_status_approve($id);
		if($result)
		{
			echo "<script>alert('Booking successfully Approved');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
		 
			echo "<script>window.location.href='".$url."';</script>";
		}
		else{
			echo "<script>alert('Booking Failed to Approved');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			echo "<script>window.location.href='".$url."';</script>";
		}
		
	}
	public function stauts_CheckInn($id)
	{
		$this->load->Model('Mail_send');
		$this->Mail_send->CheckInn($id);
		$this->load->model('Booking');
		$result = $this->Booking->Update_status_CheckInn($id);
		if($result)
		{
			echo "<script>alert('Booking successfully Check Inn');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			 
			echo "<script>window.location.href='".$url."';</script>";
		}
		else{
			echo "<script>alert('Booking Failed to Check Inn');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			echo "<script>window.location.href='".$url."';</script>";
		}
		
	}
	public function stauts_CloseBooking($id)
	{
		$this->load->Model('Mail_send');
		$this->Mail_send->closed($id);
		$this->load->model('Booking');
		$result = $this->Booking->Update_status_CloseBooking($id);
		if($result)
		{
			echo "<script>alert('Booking successfully Closed ');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
		 
			echo "<script>window.location.href='".$url."';</script>";
		}
		else{
			echo "<script>alert('Booking Failed to Closed');</script>";
			$url = base_url()."/Backend/Booking_cnt_back";
			echo "<script>window.location.href='".$url."';</script>";
		}
		
	}
}

 