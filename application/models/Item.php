<?php
class Item extends Ci_model
{
    public function insert_item()
    {
        $image = $_FILES['image']['tmp_name'];

        if ($image = '') {
            echo "image null";
            die();
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload');
            $this->upload->initialize($config);
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data('file_name');
                $data = array(
                    'id_user' => $this->input->post('iduser'),
                    'name' => $this->input->post('name'),
                    'start_date' => $this->input->post('opendate') . " " . $this->input->post('opentime'),
                    'close_date' => $this->input->post('closedate') . " " . $this->input->post('closetime'),
                    'start_bid' => $this->input->post('openprice'),
                    'description' => $this->input->post('description'),
                    'image' => $image,
                );
                $this->db->insert('item', $data);
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                die();
            }
        }
    }

    public function insert_bid($id, $iduser)
    {
        // return var_dump($this->input->post("bid-price"));
        $data = array(
            'id_item' => $id,
            'id_user' => $iduser,
            'bid' => $this->input->post('bid-price'),
            'time_bid' => date("Y-m-d H:i:s"),
        );

        $this->db->insert('item_bid', $data);
    }

    public function get_item($id)
    {
        $query = $this->db->query('SELECT item.id, item.name, item.start_date, item.close_date, item.start_bid, item.description, item.image, user.name as "user" FROM item, user WHERE item.id_user = user.id AND item.id =' . $id);
        return $query->result();
    }

    public function get_allitem()
    {
        $query = $this->db->query('SELECT item.id,   item.name, item.start_date, item.close_date, item.start_bid, item.close_bid, item.description, item.image, user.name as `seller` FROM `item`,user WHERE item.id_user = user.id');
        return $query->result();
    }

    public function get_bid($id)
    {
        $query = $this->db->query('SELECT item_bid.id_item, item_bid.id_bid, item_bid.id_user, item_bid.bid, user.name FROM `item_bid`, user WHERE item_bid.id_user = user.id AND item_bid.id_item =' . $id . ' ORDER BY `item_bid`.`bid` DESC');
        return $query->result();
    }
}
