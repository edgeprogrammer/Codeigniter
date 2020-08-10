<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_send extends CI_Model 
{
	public function Approve($id)
	{
	
			$query = $this->db->select('*')
            ->from( 'booking')
			->where("id",$id)
            ->get()->result();
			print_r($query);
			foreach($query as $row)
			{
				$to = $row->email;
				$name = $row->name;
				$booking_id = $row->id;
				$phone = $row->phone;
				$from = $row->arrival_date;
				$to_date = $row->departure_date;
			}
		

		   
		  $From = 'support@bisheshomestay.com';
		  $emailcontent = "<b>Dear ".$name." </b><br>
		                   Your Booking Has been Approved <br>
						   Deatail:
						   <br>Name = ".$name."
						   <br>Booking_id = ".$booking_id."
						   <br>Phone = ".$phone."
						   <br>From = ".$from."
						   <br>To = ".$to_date."
						   for any type of query pls contact us at support@bisheshomestay.com
						   <br>Regard 
						   <br>Deepak Sharma
						   <br>7840046570";
		  $subject = "Booking Approved ";
			  
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
	      	 
	      }
	      else{
			echo "<script>alert('Mail can't send!');</script>"; 
		  }
	      
	}
	public function CheckInn($id)
	{
	

			$query = $this->db->select('*')
            ->from( 'booking')
			->where("id",$id)
            ->get()->result();
			print_r($query);
			foreach($query as $row)
			{
				$to = $row->email;
				$name = $row->name;
				$booking_id = $row->id;
				$phone = $row->phone;
				$from = $row->arrival_date;
				$to_date = $row->departure_date;
			}
		
  
		  $From = 'support@bisheshomestay.com';
		  $emailcontent = "<b>Dear ".$name." </b><br>
		   
		                   Your Has been checked in BisheshHomestay <br>
						   Deatail:
						   <br>Name = ".$name."
						   <br>Booking_id = ".$booking_id."
						   <br>Phone = ".$phone."
						   <br>From = ".$from."
						   <br>To = ".$to_date."
						   for any type of query pls contact us at support@bisheshomestay.com
						   <br>Regard ";
		 
		  $subject = "Cheded Inn BisheshHomestay ";
			  
			  
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
	      	 
	      }
	      else{
			echo "<script>alert('Mail can't send!');</script>"; 
		  }
	      
	}
	public function Canceled($id)
	{
		 
   	       $query = $this->db->select('*')
            ->from( 'booking')
			->where("id",$id)
            ->get()->result();
			print_r($query);
			foreach($query as $row)
			{
				$to = $row->email;
				$name = $row->name;
				$booking_id = $row->id;
				$phone = $row->phone;
				$from = $row->arrival_date;
				$to_date = $row->departure_date;
			}
		
			
         
          
		  $From = 'support@bisheshomestay.com';
		  $emailcontent = "<b>Dear ".$name." </b><br>
		                   Your Booking Has been Canceled <br>
						   Deatail:
						   <br>Name = ".$name."
						   <br>Booking_id = ".$booking_id."
						   <br>Phone = ".$phone."
						   <br>From = ".$from."
						   <br>To = ".$to_date."
						   for any type of query pls contact us at support@bisheshomestay.com
						   <br>Regard 
						   <br>Deepak Sharma
						   <br>7840046570";
		  $subject = "Booking Canceled ";
			  
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
	      	 
	      }
	      else{
			echo "<script>alert('Mail can't send!');</script>"; 
		  }
		  
	      
	}
	public function closed($id)
	{
	
			$query = $this->db->select('*')
            ->from( 'booking')
			->where("id",$id)
            ->get()->result();
			print_r($query);
			foreach($query as $row)
			{
				$to = $row->email;
				$name = $row->name;
			}
		

		   
		  $From = 'support@bisheshomestay.com';
		  $emailcontent = "<br>
		                 Dear ".$name."<br>

Thank you for choosing <strong>BisheshHomestay</strong> for your recent stay in Sikkim.<br>

Come back soon and remember to use our exclusive return guest offer from our website [Bisheshomestay.com].<br>

Looking forward to welcoming you again soon.";
		  $subject = "Thanks for comming";
			  
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
	      	 
	      }
	      else{
			echo "<script>alert('Mail can't send!');</script>"; 
		  }
	      
	}
	public function admin_alart()
	{
	

		  $From = 'support@bisheshomestay.com';
		  $to = "deepaksharma111998@gmail.com";
		  $emailcontent = "<b>Dear Admin </b><br>
		                   Pls check for new query<br> ";
		  $subject = "New Booking ";
			  
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
	      	 
	      }
	      else{
			echo "<script>alert('Mail can't send!');</script>"; 
		  }
	      
	}
}

