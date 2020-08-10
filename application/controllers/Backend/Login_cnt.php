<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_cnt extends CI_Controller
{
	public function index()
	{
		 
        
		$this->load->view('Backend/Login_view');
	 
	}

	public function check_login()
	{
		$data['Username'] = $this->input->post('email');
		$data['Password'] = $this->input->post('pass');
		print_r($data);

		$this->load->model('Login');
		$result = $this->Login->check_login_data($data);
		
        if($result > 0)
        {
			
			
        	$this->session->set_userdata('user',$data['Username']);
			
        	$url = base_url()."Backend/AllRooms";
			
        	 
            echo '<script>window.location.href = "'.$url.'";</script>';
			 
			echo $this->session->userdata['user'];
        }
		
	}


	Public function un_set_login()
	{
		 
          $this->session->unset_userdata('user');
           
		  $url = base_url()."Backend/Login_cnt/index";
          
          echo '<script>window.location.href = "'.$url.'";</script>';
	}
}