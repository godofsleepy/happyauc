<?php
class Admin extends Ci_model
{
    public function insert_data()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'nik' => $this->input->post('nik'),
            'datebirth' => $this->input->post('datebirth'),
            'gender' => $this->input->post('gender'),
        );

        $this->db->insert('admin', $data);
    }

    public function get_admins()
    {
        $data = $this->db->get('admin');
        return $data->result();
    }

    function check_login($where)
    {
        return $this->db->get_where('admin', $where);
    }

    // hapus pengaduan
    public function delete_admin($id)
    {
        $where = array('id' => $id);
        $this->db->where($where);
        $this->db->delete('admin');
    }

    public function edit_admin($id)
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'nik' => $this->input->post('nik'),
            'datebirth' => $this->input->post('datebirth'),
            'gender' => $this->input->post('gender'),
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('admin');
    }
}
