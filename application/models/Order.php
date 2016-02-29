<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		$query = "SELECT * FROM products JOIN products_has_orders ON products.id = products_has_orders.product_id 
			JOIN orders ON orders.id = products_has_orders.product_id 
			WHERE orders.id = ?";
		return $this->db->query($query, array($id))->result_array();
	}
	public function get_orders_from_user($id)
	{
		$query = "SELECT * FROM orders
				  JOIN users ON orders.user_id = users.id 
				  WHERE users.id = ?";
		return $this->db->query($query, array($id))->result_array();
	}

	public function get_all_orders_admin_page()
	{

		$query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, addresses.street, addresses.city, addresses.state, addresses.zipcode, orders.transaction_id 
				FROM orders
				JOIN users ON orders.user_id = users.id
				JOIN addresses ON orders.address_id = addresses.id
				ORDER BY orders.id
				";
		// Get payment info from STRIPE API
		// transaction_id queries the API from STRIPE for the status
		return $this->db->query($query)->result_array();
	}

}























