<?php
class Home extends CI_Controller
{

    public function index()
    {

        if ($this->session->userdata('status') == 'login') {
            $data['status'] = 'login';
            $this->load->view('component/header', $data);
            $this->load->view('home/index');
            $this->load->view('component/footer');
        } else {
            $data['status'] = '';
            $this->load->view('component/header', $data);
            $this->load->view('home/index');
            $this->load->view('component/footer');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
