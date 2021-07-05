<?php

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {

        redirect('/dashboard/pages/home');
    }

    public function pages($page)
    {
        if ($this->session->userdata('status_admin') == 'login') {
            if ($page == "admin") {
                $this->load->model('Admin');
                $data['admins'] = $this->Admin->get_admins();
                $this->load->view('dashboard/admin', $data);
            } else if ($page == "home") {
                $this->load->view('dashboard/home');
            } else if ($page == "activeitem") {
                $this->load->model('Item');
                $data['items'] = $this->Item->get_allitem();
                $this->load->view('dashboard/activeitem', $data);
            }
        } else {
            redirect('/dashboard/login', 'refresh');
        }
    }

    public function addAdmin()
    {
        $this->load->model('Admin');
        $this->Admin->insert_data();
        redirect('/dashboard/pages/admin', 'refresh');
    }

    public function deleteAdmin($id)
    {
        $this->load->model('Admin');
        $this->Admin->delete_admin($id);
        redirect('/dashboard/pages/admin', 'refresh');
    }

    public function editAdmin($id)
    {
        $this->load->model('Admin');
        $this->Admin->edit_admin($id);
        redirect('/dashboard/pages/admin', 'refresh');
    }

    public function login()
    {
        $this->load->view('dashboard/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/dashboard/pages/login', 'refresh');
    }

    public function actionLogin()
    {
        $this->load->model('Admin');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $where = array(
            'email' => $email,
            'password' => $password
        );

        $check = $this->Admin->check_login($where)->num_rows();

        if ($check > 0) {
            $data_session = array(
                'email' => $email,
                'status_admin' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect('/dashboard/pages/home', 'refresh');
        } else {
            echo "Username dan password salah !";
        }
    }

    public function exportpdf($pages)
    {
        $this->load->model('Admin');
        if ($pages == "admin") {
            $this->load->model('Admin');
            $data['admins'] = $this->Admin->get_admins();
            $this->load->library('pdf');
            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->filename = "reportadmin.pdf";
            $this->pdf->load_view('exportpdf/adminpdf', $data);
        }
    }

    public function exportexcel($pages)
    {
        if ($pages == "admin") {
            $this->load->model('Admin');
            $data = $this->Admin->get_admins(); // ambil data dari model
            $spreadsheet = new Spreadsheet(); // panggil library
            $sheet = $spreadsheet->getActiveSheet();

            // set header
            $sheet->setCellValue('A1', 'NIK');
            $sheet->setCellValue('B1', 'Name');
            $sheet->setCellValue('C1', 'Email');
            $sheet->setCellValue('D1', 'Phone');
            $sheet->setCellValue('E1', 'Gender');
            $sheet->setCellValue('F1', 'Address');

            // baris
            $rexcel = 2;

            // masukkan data
            foreach ($data as $row) {
                $sheet->setCellValue('A' . $rexcel, $row->nik);
                $sheet->setCellValue('B' . $rexcel, $row->name);
                $sheet->setCellValue('C' . $rexcel, $row->email);
                $sheet->setCellValue('D' . $rexcel, $row->phone);
                $sheet->setCellValue('E' . $rexcel, $row->gender);
                $sheet->setCellValue('F' . $rexcel, $row->address);
                $rexcel++; // tambah baris
            }

            $writer = new Xlsx($spreadsheet);
            $filename = 'reportadmin';

            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
            header('Cache-Control: max-age=0');

            $writer->save('php://output');
        }
    }
}
