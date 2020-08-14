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
	}

	public function read()
	{
		$data["users"] = $this->User->get_users();
		$this->load->view("table/index", $data);
	}
}
