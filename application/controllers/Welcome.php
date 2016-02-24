<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('store_message');
		$this->load->view('footer-store');
	}
	public function product($id)
	{
		$headerinfo['productid'] = $id;
		$headerinfo['title'] = "Product $id | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$productinfo['productname'] = "Cool Shirt!";
		$productinfo['proddescrip'] = "This is an awesome shirt!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('product_message', $productinfo);
		$this->load->view('footer-store');
	}
}
