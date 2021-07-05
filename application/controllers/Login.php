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
		if ($this->session->userdata('status') == 'login') {
			$data['status'] = 'login';
			$this->load->view('component/header', $data);
			$this->load->view('login/index');
			$this->load->view('component/footer');
		} else {
			$data['status'] = '';
			$this->load->view('component/header', $data);
			$this->load->view('login/index');
			$this->load->view('component/footer');
		}
	}

	public function actionlogin()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$where = array(
			'email' => $email,
			'password' => $password
		);

		$user = $this->User->check_login($where);

		if (!empty($user)) {
			$data_session = array(
				'id' => $user[0]->id,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("home"));
		} else {
			echo "Username dan password salah !";
		}
	}
}
