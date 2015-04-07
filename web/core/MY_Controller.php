<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();

        $this->load->view('common/header');
    }

    public function index()
    {
        
    }

}

/* End of file MY_Controller */
/* Location: ./application/controllers/MY_Controller */