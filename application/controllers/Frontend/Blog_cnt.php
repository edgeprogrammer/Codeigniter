 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_cnt extends CI_Controller {


    public function index()
    {
         $this->load->model('Blog');
        $data['Blogs'] = $this->Blog->get_blogs();

        $this->load->view('Frontend/Include/header');
        $this->load->view('Frontend/blog_view',$data);
        $this->load->view('Frontend/Include/footer');
    }
}
