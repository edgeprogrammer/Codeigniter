 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


    public function index()
    {

        $this->load->view('Frontend/Include/header');
        $this->load->view('Frontend/Contact_Us');
        $this->load->view('Frontend/Include/footer');
    }
}
