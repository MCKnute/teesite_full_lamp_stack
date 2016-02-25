<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('cart');
		$headerinfo['carttotal'] = $this->cart->total();
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message');
		$this->load->view('footer-store');
	}
	public function product($id)
	{
		$this->load->library('cart');
		$headerinfo['productid'] = $id;
		$headerinfo['title'] = "Product $id | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$productinfo['productname'] = "Cool Shirt!";
		$productinfo['proddescrip'] = "This is an awesome shirt!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('product_message', $productinfo);
		$this->load->view('footer-store');
	}
		public function signin_register()
	{
		$this->load->library('cart');
		$headerinfo['title'] = "Sign In| KMK Tees";
		$headerinfo['description'] = "Sign in or register or more excellent tees!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('signin_register_message');
		$this->load->view('footer-store');
	}
}
