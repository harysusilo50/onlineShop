<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
		$this->load->view('homepage');
		$this->load->view('templates/footer');
    }

}

/* End of file Controllername.php */
