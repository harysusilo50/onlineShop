<?php

class Registrasi extends CI_Controller
{

	public function index(){
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		

		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header');
		$this->load->view('regist');
		$this->load->view('templates/footer');
		}
	
	else {
		$data = array(
			'id'		=> '',
			'nama'		=> $this->input->post('nama'),
			'username'	=> $this->input->post('username'),
			'password'	=> $this->input->post('password'),
			'role_id'	=> 2,
		);

		$this->db->insert('akun',$data);
		redirect('auth/login');
		}
	}
}
