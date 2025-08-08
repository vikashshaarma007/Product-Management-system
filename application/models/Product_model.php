<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{

    public function get_all_products()
    {
        return $this->db->get('products')->result();
    }

    public function insert_product($data)
    {
        return $this->db->insert('products', $data);
    }

    public function get_product($id)
    {
        return $this->db->get_where('products', ['id' => $id])->row();
    }

    public function update_product($id, $data)
    {
        return $this->db->where('id', $id)->update('products', $data);
    }

    public function delete_product($id)
    {
        return $this->db->delete('products', ['id' => $id]);
    }

    public function get_product_count()
    {
        return $this->db->count_all('products');
    }


    public function get_paginated_products($limit, $start)
    {
        $this->db->limit($limit, $start);
        return $this->db->get('products')->result();
    }
}
