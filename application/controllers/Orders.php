<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function myorders()
	{
		$this->load->library('cart');
		$headerinfo['carttotal'] = $this->cart->total();
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('user_orders');
		$this->load->view('footer-store');
	}


}
