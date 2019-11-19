<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {

	function __construct() {
        parent::__construct();

    }

	public function index(){

		$this->load->view("common/header");
		$this->load->view("register");
		$this->load->view("common/footer");
	}

	public function submitForm(){

		$this->form_validation->set_rules('first_name', 'First Name', 'required');


		$data['nonxssData']= array(
		      'first_name' => $this->input->post('first_name'),
		      'last_name' => $this->input->post('last_name'), 
		      'email' => $this->input->post('email'),
		      'message' => $this->input->post('password'),
		      'status' => '1'
	    	);

		$data['xssData'] = $this->security->xss_clean($data['nonxssData']);
	}


}