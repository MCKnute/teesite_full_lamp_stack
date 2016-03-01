<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		// We don't currently have addresses setup, I thought this was a stretch goal.
		// I'll add it soon, taking it out for now to see if this works.
		//
		// -David
		//
		// $query = "SELECT orders.id, products_has_orders.product_id, products.name, products.price, products_has_orders.qty, users.first_name, users.last_name, users.email, addresses.street, addresses.city, addresses.state, addresses.zipcode
		// 		FROM products_has_orders
		// 		INNER JOIN products ON products.id = products_has_orders.product_id 
		// 		INNER JOIN orders ON orders.id = products_has_orders.order_id 
  		//		INNER JOIN users ON users.id = orders.user_id
  		//		INNER JOIN addresses ON addresses.id =  orders.address_id
		// 		WHERE orders.id = ?";
		// $values = $id;
		// return $this->db->query($query, $values)->result_array();


		$query = "SELECT orders.id, products_has_orders.product_id, products.name, products.price, products_has_orders.qty, users.first_name, users.last_name, users.email
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id 
                INNER JOIN users ON users.id = orders.user_id
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
		// We don't currently have addresses setup, I thought this was a stretch goal.
		// I'll add it soon, taking it out for now to see if this works.
		//
		// -David
		//
		// $query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, addresses.street, addresses.city, addresses.state, addresses.zipcode, orders.transaction_id 
		// 		FROM orders
		// 		JOIN users ON orders.user_id = users.id
		// 		JOIN addresses ON orders.address_id = addresses.id
		// 		ORDER BY orders.id
		// 		";
		// return $this->db->query($query)->result_array();

		$query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, orders.transaction_id 
				FROM orders
				JOIN users ON orders.user_id = users.id
				ORDER BY orders.id
				";
		return $this->db->query($query)->result_array();
	}


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

	public function process_transaction($charge){

		$ordervals=[
			'transaction_id' => $charge->balance_transaction,
			'tracking_num' => 0,
			'user_id' => $_SESSION['user_id'],
			// 'address_id' => $_SESSION['user_id'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'paid' => $charge->paid
					];
		$query='SET foreign_key_checks = 0';
		$this->db->query($query);
		$this->db->insert('orders', $ordervals);
		$query='SET foreign_key_checks = 1';
		$this->db->query($query);
		return $this->db->insert_id();
	}

	public function add_product_into_order($product){
		$productvals=[
			'product_id' => (int)$product['size']['ShirtID'],
			'order_id' => $_SESSION['insert_id'],
			'qty' => $product['qty'],
			'size' => $product['size']['Size']
					];
		$query='SET foreign_key_checks = 0';
		$this->db->query($query);
		$this->db->insert('products_has_orders', $productvals);
		$_SESSION['insert_id']=$this->db->insert_id();
		$query='SET foreign_key_checks = 1';
		return $this->db->query($query);
	}

}























