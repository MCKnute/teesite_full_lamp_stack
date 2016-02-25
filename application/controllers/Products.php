<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$products = $this->Product->get_all_products();
		$info['orders'] = $products;
		$headerinfo['title'] = "KMK Tees | Admin";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-admin', $headerinfo);
		$this->load->view('/admin/products', $info);
		$this->load->view('footer-admin');
	}

}























