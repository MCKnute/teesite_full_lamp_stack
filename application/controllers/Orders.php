<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index()
	{
		$this->load->model('Order');
		$orders = $this->Order->get_all_orders_admin_page();
		$info['orders'] = $orders;
		$headerinfo['title'] = "KMK Tees | Admin";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/orders', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function addOrder()
	{
		;
	}

}
