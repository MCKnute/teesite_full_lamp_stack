<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		$query = "SELECT orders.id, products_has_orders.product_id, products.name, products.price, products_has_orders.qty, users.first_name, users.last_name, users.email, addresses.street, addresses.city, addresses.state, addresses.zipcode
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id 
                INNER JOIN users ON users.id = orders.user_id
                INNER JOIN addresses ON addresses.id =  orders.address_id
				WHERE orders.id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
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

// STRETCH GOAL
	public function get_orders_by_search($searchterm)
	{
		$keyword = strtolower($searchterm);
		$uppercase = ucfirst($keyword);
		$query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, addresses.street, addresses.city, addresses.state, addresses.zipcode, orders.transaction_id 
				FROM orders
				JOIN users ON orders.user_id = users.id
				JOIN addresses ON orders.address_id = addresses.id 
			WHERE users.first_name OR users.last_name LIKE '%$keyword%' OR '%$uppercase%'";
		return $this->db->query($query)->result_array();
	}

}























