<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class allBlogs extends CI_Controller {


	public function index()
	{
		$this->load->model('blog');
 		$data['Blogs'] = $this->blog->get_blogs();
		$this->load->view('Backend/Include/header');
        $this->load->view('Backend/Include/menu');
		$this->load->view('Backend/allBlogs_view',$data);
		$this->load->view('Backend/Include/footer');
	}


	public function Delete($id)
	{
		$this->load->model('blog');
 		$result = $this->blog->Delete_blog($id);
 		if($result)
 		{
           echo "<script>alart('successfully Delted!');</script>";
           $url =base_url()."Backend/allBlogs/";
           redirect($url); 
 		}
		 
	}
 		
}