<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddRoom extends CI_Controller {


	public function index()
	{
		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/addRoom_view');
		$this->load->view('Backend/Include/footer');
	}

	Public function form_submit()
	{
		echo "helo";
		$Formarray['title'] = $this->input->Post('title'); 
		$Formarray['price'] = $this->input->Post('Price');
		$Formarray['view'] = $this->input->Post('View');
		$Formarray['address'] = $this->input->Post('Address');
		$Formarray['beds'] = $this->input->Post('Beds');
		$Formarray['bathroom'] = $this->input->Post('Bathroom');
		$Formarray['occupancy'] = $this->input->Post('occupancy');
		$Formarray['children'] = $this->input->Post('children');
		$Formarray['adult'] = $this->input->Post('Adult');
		$Formarray['lawn'] = $this->input->Post('lawn');
		$Formarray['microwave'] = $this->input->Post('Microwave');
		$Formarray['gym'] = $this->input->Post('Gym');
		$Formarray['barbecue'] = $this->input->Post('Barbecue');
		$Formarray['roomService'] = $this->input->Post('RoomService');
		$Formarray['tvCable'] = $this->input->Post('TVCable');
		$Formarray['description'] = $this->input->Post('Description');
		$this->load->model('Room');
		$result = $this->Room->insert_property($Formarray);
        if($result)
        {
        	$id = $result;
        	echo $id;
         
        }

        
        $data = array();
        if(!empty($_FILES['upload_Files']['name']))
        {
        	 
            $filesCount = count($_FILES['upload_Files']['name']);
            for($i = 0; $i < $filesCount; $i++)
            	{
            	     $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
            	     $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
            	     $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
            	     $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
            	     $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
            	     $uploadPath = './asserts/Rooms/';
            	     $config['upload_path'] = $uploadPath;
            	     $config['allowed_types'] = 'gif|jpg|png|jpeg|aspx';
            	     $this->load->library('upload', $config);
	                 $this->upload->initialize($config);
	                 if($this->upload->do_upload('upload_File')){
	                    $fileData = $this->upload->data();
	                    $uploadData[$i]['image'] = $fileData['file_name'];
	                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
	                    $uploadData[$i]['room_id'] = $id;

	                    echo "image_upload_testing";
	                 }
	                 else{
	                 	 $error = $this->upload->display_errors();

	                 	 
	                 }
                }            
           		if(!empty($uploadData) && !empty($Formarray))
           		{
	                //Insert file information into the database
	                $this->load->model('Images');
	                $result = $this->Images->insert_image($uploadData);
	               // $statusMsg = $result?'Files uploaded successfully.':'Some problem occurred, please try again.';
	               //$this->session->set_flashdata('statusMsg',$statusMsg);
	            	if($result)
	            	{
	            		$image_id = $this->Images->get_image_id_by_image_name($uploadData['0']['image']);
	            		//select image id from the data base and set if as main image of the porperty 
	            		$updateMainImage['id'] = $id;
	            		$updateMainImage['main_image_id'] = $image_id;
	            		$updateMainImageresult = $this->Room->update_property($updateMainImage);
	            		
	            		if($updateMainImageresult)
	            		{
	            			echo "<script>alert('successfully added!');window.location = 'index';</script>";
	            		}
	            	}
	                
           		 }
        }
        
      
    }
}