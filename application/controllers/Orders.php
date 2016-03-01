<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Order');
	}

	public function index()
	{
		$orders = $this->Order->get_all_orders_admin_page();
		$info['orders'] = $orders;
		$headerinfo['title'] = "KMK Tees | Admin";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/orders', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function get_products_from_order($id)
	{
		$orders = $this->Order->get_products_from_order($id);

		if ($orders > 0) 
		{
			$info['orders'] = $orders;
			$headerinfo['title'] = "KMK Tees | Admin";
			$headerinfo['description'] = "Get excellent tees from us!";
			$this->load->view('/admin/header-admin', $headerinfo);
			$this->load->view('/admin/orders_id', $info);
			$this->load->view('/admin/footer-admin');
		}
		else
		{
			$data['redirect_url'] = base_url('/');
		}
	}

// STRETCH GOAL
	public function search()
	{
		$searchterm = $this->input->post('keyword');
		$orders = $this->Order->get_orders_by_search($searchterm);
		$info['orders'] = $orders;
		$info['searchterm'] = $searchterm;
		$headerinfo['title'] = $searchterm . " Search | KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/orders', $info);
		$this->load->view('/admin/footer-admin');
	}

}
