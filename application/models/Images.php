<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Model {

  function insert_image($uploadData)
  {
  	
  	$count =  count($uploadData);
  	for($i=0;$i<$count;$i++)
  	{
		$image = $uploadData[$i]['image'];
		$created = $uploadData[$i]['created'];
		$room_id = $uploadData[$i]['room_id'];
		$query="INSERT INTO images (image, created, room_id) VALUES ('$image', '$created', '$room_id')";
		$result = $this->db->query($query);
  	}
  	return $result;
  }

  function get_image_id_by_image_name($image)
  {  
            $q = $this->db->select('*')
                  ->get_where('images', array('image' => $image))
                  ->result();
   			$room_id =  $q['0']->id;
   			return $room_id;
  }

  function get_image_name_by_id($image)
  {
    $q = $this->db->select('*')
          ->get_where('images',array('id'=> $image))
          ->result();

          $image_name = $q['0']->image;
          echo $image_name;
          return $image_name;
  }

   public function get_all_images()
  {
    $query = $this->db->select('*')
            ->from( 'images' )
            ->get()->result();
           return $query;
           
  }

}