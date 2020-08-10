<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends CI_Model {

   public function insert_blog($formArray)
   {
   	      
   		$result = $this->db->insert('booking',$formArray);
   		if($result)
	   	{
	   	 	return true;
	   	}
	   	else
	   	{
	   		return 0;
	   	}
   }
    public function get_bookings()
   {
   	       
   	       $query = $this->db->select('*')
            ->from( 'booking')
			->where("booking_status !=","3")
            ->get()->result();
         
            return $query;
   		
   }
     
   public function edit_Blog($formArray)
   { 
      $result = $this->db->set($formArray )
              ->where('id',$formArray['id'])
              ->update('blogs');
      return $result;
   }
   
   Public function Update_status_approve($id)
   {  
		$formArray['booking_status'] = 1;
	   $result = $this->db->set($formArray)
              ->where('id',$id)
              ->update('booking');
			  return $result;
        
   }
    Public function Update_status_CheckInn($id)
   {  
		$formArray['booking_status'] = 2;
	   $result = $this->db->set($formArray)
              ->where('id',$id)
              ->update('booking');
			  return $result;
        
   }
    Public function Update_status_CloseBooking($id)
   {  
		$formArray['booking_status'] = 3;
	   $result = $this->db->set($formArray)
              ->where('id',$id)
              ->update('booking');
			  return $result;
        
   }
    Public function Cancel_booking($id)
   {   
		 
	   $result = $this->db->where('id',$id)
							->delete('booking');
			  return $result;
        
   }
    public function get_completed_bookings()
	{
   	       $query = $this->db->select('*')
            ->from( 'booking')
			->where("booking_status =","3")
            ->get()->result();
			
         
            return $query;
	}

 

}