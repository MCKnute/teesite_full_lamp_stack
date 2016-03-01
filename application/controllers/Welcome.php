<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Product');
	}

	public function index()
	{
		// if (!$orderby){
		// 	$orderby = 0;
		// }
		$products = $this->Product->get_all_products();
		$info['products'] = $products;
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message', $info);
		$this->load->view('footer-store');
	}

	public function category($category)
	{
		$products = $this->Product->get_products_by_category($category);
		$info['products'] = $products;

		$info['category'] = $category;
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message', $info);
		$this->load->view('footer-store');
	}

	public function search()
	{
		$searchterm = $this->input->post('keyword');
		$products = $this->Product->get_products_by_search($searchterm);
		$info['products'] = $products;
		$info['searchterm'] = $searchterm;
		$headerinfo['title'] = $searchterm." Search | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message', $info);
		$this->load->view('footer-store');
	}

	public function product($id)
	{

		$thisproduct = $this->Product->get_one_product($id);
		$suggestprods = $this->Product->get_reccomend_products($id);
		$productinfo['thisid'] = $id;
		$productinfo['thisproduct'] = $thisproduct;
		$productinfo['suggestprods'] = $suggestprods;
		$headerinfo['title'] = $thisproduct['name']." | KMK Tees";
		$headerinfo['description'] = $thisproduct['name'].", only from KTK Tees!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('product_message', $productinfo);
		$this->load->view('footer-store');
	}
		public function signin_register()
	{
		
		$headerinfo['title'] = "Sign In | KMK Tees";
		$headerinfo['description'] = "Sign in or register or more excellent tees!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('signin_register_message');
		$this->load->view('footer-store');
	}

	public function about_us()
	{
		
		$headerinfo['carttotal'] = $this->cart->total();
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('about_us');
		$this->load->view('footer-store');
	}
}
