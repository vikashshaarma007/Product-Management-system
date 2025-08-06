<?php
defined('BASEPATH') or exit('No direct script access allowed');
#[\AllowDynamicProperties]
class Products extends CI_Controller
{
    //public $Product_model; 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Product_model');
        $this->load->helper('url');
    }



    public function index()
    {
        $data['products'] = $this->Product_model->get_all_products();
        $this->load->view('products/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price')
            ];
            $this->Product_model->insert_product($data);
            redirect('products');
        }
        $this->load->view('products/create');
    }

    public function edit($id)
    {
        $data['product'] = $this->Product_model->get_product($id);
        if ($this->input->post()) {
            $update_data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price')
            ];
            $this->Product_model->update_product($id, $update_data);
            redirect('products');
        }
        $this->load->view('products/edit', $data);
    }

    public function delete($id)
    {
        $this->Product_model->delete_product($id);
        redirect('products');
    }
}
