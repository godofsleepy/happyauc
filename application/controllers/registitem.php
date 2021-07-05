<?php
class Registitem extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item');
    }

    public function index()
    {
        if ($this->session->userdata('status') == 'login') {
            $data['id_user'] = $this->session->userdata('id');
            $this->load->view('registitem/index', $data);
        } else if ($this->session->userdata('status') != 'login') {
            redirect('login/');
        }
    }

    public function insert()
    {
        $this->Item->insert_item();
        redirect('home');
    }
}
