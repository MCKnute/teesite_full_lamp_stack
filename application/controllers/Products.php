<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->model('Product');
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
		$this->load->model('Product');
		$post_data = $this->input->post();

		$products = array(
				'name' => $post_data["name"], 
				'description' => $post_data["description"],
				'categories' => $post_data['categories'],
			);

		$product = $this->Product->add_new_product($product);

		if(count($product) > 0)
		{	
			$product_data = array(
				'product_id' => $product->id,
				'product_name' => $product->name,
				'product_description' => $product->description,
				'product_categories' => $product->categories
			);

			//session is being set in here with index user session, remember session is in a form of array
			$this->$_SESSION('product_session', $product_data);
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

}























