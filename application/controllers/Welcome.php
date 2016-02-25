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
		$products = $this->Product->get_some_products(8,0);
		$info['products'] = $products;
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message', $info);
		$this->load->view('footer-store');
	}
	public function product($id)
	{

		$thisproduct = $this->Product->get_one_product($id);
		$suggestprods = $this->Product->get_some_products(4,0);
		$productinfo['thisid'] = $id;
		$productinfo['thisproduct'] = $thisproduct;
		$productinfo['suggestprods'] = $suggestprods;
		$headerinfo['title'] = " | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('product_message', $productinfo);
		$this->load->view('footer-store');
	}
		public function signin_register()
	{
		
		$headerinfo['title'] = "Sign In| KMK Tees";
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
