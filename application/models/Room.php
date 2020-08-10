<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Model {

//Insert Property
  function insert_property($formArray)
  {
   		print_r($formArray);
   		$result = $this->db->insert('allrooms',$formArray);
   		if($result)
	   	{
	   		echo "scuce";
	   	 	$last_id = $this->db->insert_id();
	   	 	return $last_id;
	   	}
	   	else
	   	{
	   		return 0;
	   	}
  }

//Update Property 
  public function update_property($formArray)
  {
    $result = $this->db->set('main_image_id',$formArray['main_image_id'])
         			->where('id',$formArray['id'])
        			->update('allrooms');
	  return $result;
  }


//Get All Property
  public function get_properties()
  {
    $query = $this->db->select('*')
            ->from( 'allrooms' )
            ->get()->result();
         
            return $query;
           
  }

  //Get Rent Property
  public function get_rent_properties()
  {
    $query = $this->db->select('*')
            ->from( 'allrooms' )
            ->where('Offer','rent')
            ->get()->result();
         
            return $query;
           
  }

  //Get Sale Property
  public function get_sale_properties()
  {
    $query = $this->db->select('*')
            ->from( 'allrooms' )
            ->where('Offer', 'sale')
            ->get()->result();
         
            return $query;
           
  }
//Get Property By Id 
  public function get_properties_By_id($id)
  {

    $query = $this->db->select('*')
            ->from( 'allrooms' )
            ->where('id', $id)
            ->get()->result();
         
            return $query;
           
  }
// Search for Property
  Public function search_property($formArray)
  {
       $query = $this->db->select('*')
            ->from( 'allrooms' )
            ->where($formArray)
            ->get()->result();
             return $query;

  }
  Public function edit_room($formArray)
  {
    $result = $this->db->set($formArray )
              ->where('id',$formArray['id'])
              ->update('allrooms');
    return $result;

  }

   Public function Delete($id)
  {
    $this->db->where('id', $id);
    $result = $this->db->delete('allrooms');
    return $result;

  }
}