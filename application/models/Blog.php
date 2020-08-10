<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Model {

   public function insert_blog($formArray)
   {
   	      print_r($formArray);
   		$result = $this->db->insert('blogs',$formArray);
   		if($result)
	   	{
	   		echo "scuce";
	   	 	$last_id = $this->db->insert_id();
	   	 	return $last_id;
	   	}
	   	else
	   	{
	   		echo "failed";
	   		return 0;
	   	}
   }
    public function get_blogs()
   {
   	       
   	       $query = $this->db->select('*')
            ->from( 'blogs' )
            ->get()->result();
         
            return $query;
   		
   }

   public function get_blog_By_id($id)
   {
        $query = $this->db->select('*')
            ->from( 'blogs' )
            ->where('id', $id)
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

   public function Delete_blog($id)
   {
        $this->db->where('id', $id);
          $result = $this->db->delete('blogs');
          return $result;
   }

}