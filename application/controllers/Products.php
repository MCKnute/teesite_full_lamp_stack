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
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/products', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function add_new_product()
	{
		$post_data = $this->input->post();

		$product = $this->Product->add_new_product($post_data);

		if(count($product) > 0)
		{	
			$product_data = array(
				'product_id' => $product->id,
				'product_name' => $product->name,
				'product_price' => $product->price,
				'product_description' => $product->description,
				// 'product_categories' => $product->categories
			);

			//session is being set in here with index session, remember session is in a form of array
			$data['product_created'] = TRUE;
			$data['success_message'] = "Product Added";
		}
		else
		{
			$data['product_created'] = FALSE;
			$data["error_message"] = "You didn't enter all the info. Try Again";
		}
		return $data;
	}

	public function search()
	{
		$searchterm = $this->input->post('keyword');
		$products = $this->Product->get_products_by_search($searchterm);
		$info['products'] = $products;
		$info['searchterm'] = $searchterm;
		$headerinfo['title'] = $searchterm . " Search | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/products', $info);
		$this->load->view('/admin/footer-admin');
	}

// STRETCH GOAL
	function do_upload()
	{
		$this->load->library('upload');

		$config['upload_path'] = '/assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '400';
		$config['max_height']  = '400';

		$this->load->library('upload', $config);
	}

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























