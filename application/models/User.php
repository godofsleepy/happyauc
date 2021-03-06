<?php
class User extends Ci_model
{
    public function insert_data()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'idcard' => $this->input->post('idcard'),
            'datebirth' => $this->input->post('datebirth'),
            'creditcard' => $this->input->post('creditcard'),
            'cardholder' => $this->input->post('cardholder'),
            'expire' => $this->input->post('monthcard') . "/" . $this->input->post('yearcard')
        );

        $this->db->insert('user', $data);
    }

    public function get_users()
    {
        $data = $this->db->get('user');
        return $data->result();
    }

    function check_login($where)
    {
        $data =  $this->db->get_where('user', $where);
        return $data->result();
    }
}
