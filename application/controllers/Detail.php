<?php
class Detail extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item');
		$this->load->helper('url');
	}

	public function item($id)
	{
		if ($this->session->userdata('status') == 'login') {
			$data['items'] = $this->Item->get_item($id);
			$data['bids'] = $this->Item->get_bid($id);
			$data['id_user'] = $this->session->userdata('id');
			$data['id_item'] = $id;
			$data['status'] = 'login';
			$this->load->view('component/header', $data);
			$this->load->view('detail/index', $data);
			$this->load->view('component/footer');
		} else {
			redirect('login/');
		}
	}

	public function bid($id)
	{
		$this->Item->insert_bid($id, $this->session->userdata('id'));
		// redirect('detail/item/' . $id);
	}
}
