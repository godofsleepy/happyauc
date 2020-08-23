<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->view('login/index');
	}

	public function actionlogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$where = array(
			'email' => $email,
			'password' => $password
		);

		$cek = $this->User->check_login($where)->num_rows();

		if ($cek > 0) {
			$data_session = array(
				'email' => $email,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("detail"));
		} else {
			echo "Username dan password salah !";
		}
	}
}
