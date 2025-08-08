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
        $this->load->library('session');
        $this->load->library('pagination');
    }



    /*
    public function index()
    {
        $data['products'] = $this->Product_model->get_all_products();
        $this->load->view('products/index', $data);
    }
*/
    public function index()
    {
        $this->load->library('pagination');
        $this->load->model('Product_model');

        $config['base_url'] = site_url('products/index');
        $config['total_rows'] = $this->Product_model->get_product_count();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        // Get current page offset
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // Fetch data
        $data['products'] = $this->Product_model->get_paginated_products($config['per_page'], $page);
        $data['pagination_links'] = $this->pagination->create_links();

        $this->load->view('products/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            // Load upload library
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);
            $image = null;

            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $image = $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    return redirect('products/create');
                }
            }

            $data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'image' => $image
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
            // Image upload config
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);
            $image = $data['product']->image; // default to old image

            // If new image uploaded, replace old
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $image = $upload_data['file_name'];

                    // Optional: delete old image file
                    if (!empty($data['product']->image) && file_exists('./uploads/' . $data['product']->image)) {
                        unlink('./uploads/' . $data['product']->image);
                    }
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    return redirect('products/edit/' . $id);
                }
            }

            $update_data = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'image' => $image
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
