<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
	}

	public function index()
	{
		$products = $this->Product->get_all_products();
		$info['products'] = $products;
		$headerinfo['title'] = "KMK Tees | Admin";
		$headerinfo['description'] = "Products";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/products', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function add_new_product()
	{
		$this->load->library("form_validation");

		$this->load->helper(array('form', 'url'));

   		$this->form_validation->set_rules("name", "name", "trim|required");
		$this->form_validation->set_rules('price', 'price', 'integer|required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');

		// post data
		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("error_message", validation_errors());
		}
		else
		{
			$post_data = $this->input->post();

			$product = $this->Product->add_new_product($post_data);

			// image upload
			$config['upload_path'] = './assets/img/products/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['file_name'] = '';
			// var_dump($config['file_name']); die;
			// $config['overwrite'] = TRUE;
			$config["max_size"] = 1024;
	        $config["max_width"] = 400;
	        $config["max_height"] = 400;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("image"))
			{
				$error = array('error' => $this->upload->display_errors());
				// $this->session->set_flashdata("error_message", "Something isn't right, try adding again.");
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
			
				if(count($product) > 0)
				{
					//session is being set in here with index session, remember session is in a form of array
					$this->session->set_flashdata("success_message", "Product Added");
				}
				else
				{
					$this->session->set_flashdata("error_message", "You didn't enter all the info. Try Again");
				}
			}
		}
		redirect('/Products');
	}

	public function edit_product()
	{
		$post_data = $this->input->post();

		$this->load->library("form_validation");

   		$this->form_validation->set_rules("name", "name", "trim|required");
		$this->form_validation->set_rules('price', 'price', 'required');
		$this->form_validation->set_rules('description', 'description', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
		    $this->session->set_flashdata("error_message", validation_errors());
		    redirect('/Products/index');
		}
		else
		{
			$edited_product = $this->Product->edit_product($post_data);

			if ($edited_product) 
			{
				$this->session->set_flashdata("success_message", "Product info updated!");
				redirect('/Products');
			}
			else
			{
				$this->session->set_flashdata("error_message", "Something isn't right, try updating again.");
			}
		}
	}

	public function get_all_products_admin_html() {
		$data["products"] = $this->Product->get_all_products();
		$this->load->view("partials/admin_products_partials", $data);
	}

	public function search_admin_html() 
	{
		$searchterm = $this->input->post('keyword');
		$data["products"] = $this->Product->get_products_by_search_ajax($searchterm);
		$this->load->view("partials/admin_products_partials", $data);
	}

	// public function search()
	// {
	// 	$searchterm = $this->input->post('keyword');
	// 	$products = $this->Product->get_products_by_search($searchterm);
	// 	$info['products'] = $products;
	// 	$info['searchterm'] = $searchterm;
	// 	$this->load->view('/admin/header-admin');
	// 	$this->load->view('/admin/products', $info);
	// 	$this->load->view('/admin/footer-admin');
	// }

	public function delete_product($product_id)
	{
		if(is_numeric($product_id))
		{
			$delete = $this->Product->delete_product($product_id);

			if($delete){
				redirect("/Products");
			}else{
				show_404();
			}
		}
		else
		{
			show_404();
		}
	}

}