<?php
class Register extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->view('register/index');
	}

	public function insert()
	{
		$this->User->insert_data();
		redirect(base_url("login"));
	}


}
