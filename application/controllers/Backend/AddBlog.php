<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddBlog extends CI_Controller {


	public function index()
	{
		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/addBlog_view');
		$this->load->view('Backend/Include/footer');
	}

	Public function form_submit()
	{
		echo "helo";
		$Formarray['title'] = $this->input->Post('title');
		$Formarray['description'] = $this->input->Post('Description');


	     $uploadPath = './asserts/Blogs/';
	     $config['upload_path'] = $uploadPath;
	     $config['allowed_types'] = 'gif|jpg|png|jpeg|aspx';
	     $this->load->library('upload', $config);
         if($this->upload->do_upload('upload_File')){
            
            echo "image_upload_testing";
			$upload_data = $this->upload->data(); 
			 $Formarray['image'] = $upload_data['file_name'];
			 print_r($Formarray);
         }
         else{
         	 $error = $this->upload->display_errors();

         	 
         }
         $this->load->model('Blog');
		 $result = $this->Blog->insert_blog($Formarray);
         if($result)
         {
        	echo "<script>alert('successfully added!');window.location = 'index';</script>";
         }
         else{
         	echo "<script>alert('Failed!');window.location = 'index';</script>";
         } 
      
    }
}