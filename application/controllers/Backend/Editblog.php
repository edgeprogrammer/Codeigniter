<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editblog extends CI_Controller {


	public function edit($id)
	{
		$this->load->model('Blog');
 		$data['blog'] = $this->Blog->get_blog_By_id($id);

		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/editblog_view',$data);
		$this->load->view('Backend/Include/footer');
	}



	Public function form_submit($id)
	{
		echo "helo";
		$Formarray['title'] = $this->input->Post('title');
		 
		$Formarray['description'] = $this->input->Post('Description');
		 
		$Formarray['id'] = $id;
	 
		
        if(!empty($_FILES['upload_File']['name'])){
			  
			  $uploadPath = './asserts/Blogs/';
			     $config['upload_path'] = $uploadPath;
			     $config['allowed_types'] = 'gif|jpg|png|jpeg|aspx';
			     $this->load->library('upload', $config);
		         if($this->upload->do_upload('upload_File')){
		            
		            echo "image_upload_testing";
					$upload_data = $this->upload->data(); 
					 $Formarray['image'] = $upload_data['file_name'];
					 
		         }
		         else{
		         	 $error = $this->upload->display_errors();	 
		         }  

			}
	     
         $this->load->model('Blog');
		$result = $this->Blog->edit_Blog($Formarray);
		if($result){
			echo "<script>alart('Successfully added!'');</script>";
            $url = base_url()."/Backend/allBlogs/";
            redirect($url);        
             }
		}
         
         
           		 
}

