<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller
{
	public function ContactUs()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phonenumber');
		$comment = $this->input->post('comment');

		  $From = $email;
		  $to = "deepaksharma111998@gmail.com";
		  $emailcontent = "<b>Hello Admin</b><br>
		                   New Enquiry form Realand.com
		                   <br>Name: ".$name.
		                   "<br>Phone: ".$phone.
		                   "<br>Message: ".$comment;
		  $subject = "Enquiry From Realand.com ";
			  
	      $config['protocol'] = 'smtp';
	      $config['smtp_host'] = 'ssl://smtp.gmail.com';
	      $config['smtp_port'] = '465';
	      $config['smtp_timeout'] = '60';

	      $config['smtp_user'] = 'deepak.sharma@devstringx.com';
	      $config['smtp_pass'] = 'devstringx@123';

	      $config['charset'] = 'utf-8';
	      $config['newline'] = "\r\n";
	      $config['mailtype'] = 'html';
	      $config['validation'] = TRUE;

	      $this->email->initialize($config);
	      $this->email->set_mailtype("html");
	      $this->email->from($From);
	      $this->email->to($to);
	      $this->email->subject($subject);
	      $this->email->message($emailcontent);
	      $result = $this->email->send();
	      if($result){
	      	echo "<script>alert('successfull Received!');</script>"; 
			$url = base_url()."/Home";
			redirect($url);
	      }
	      else{
			echo "<script>alert('Failed!');</script>"; 
			$url = base_url()."/Home";
			redirect($url);
	      }
	}
}

