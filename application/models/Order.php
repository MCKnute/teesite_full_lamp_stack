<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		
		$query = "SELECT DISTINCT orders.id,orders.paid,orders.transaction_id, products_has_orders.product_id, products_has_orders.size, products.name, products.price, products_has_orders.qty, users.first_name, users.last_name, users.email,addresses.street, addresses.city, addresses.state, addresses.zipcode
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id
				INNER JOIN addresses ON orders.addresses_id = addresses.id 
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
		$query = "SELECT DISTINCT orders.id,orders.paid, orders.created_at, users.first_name, users.last_name, orders.transaction_id, orders.price, products_has_orders.qty,addresses.street, addresses.city, addresses.state, addresses.zipcode
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id
				INNER JOIN addresses ON orders.addresses_id = addresses.id
                INNER JOIN users ON users.id = orders.user_id
				GROUP BY orders.id
				ORDER BY orders.id;	
				";
		return $this->db->query($query)->result_array();
	}


	// public function get_orders_by_search($searchterm)
	// {
	// 	$keyword = strtolower($searchterm);
	// 	$uppercase = ucfirst($keyword);
	// 	$query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, orders.transaction_id 
	// 			FROM orders
	// 			LEFT JOIN users ON orders.user_id = users.id 
	// 			WHERE users.first_name OR users.last_name LIKE '%$keyword%' OR '%$uppercase%'";
	// 	return $this->db->query($query)->result_array();
	// }

	public function get_orders_by_search_ajax($searchterm)
	{
		$keyword = strtolower($searchterm);
		$uppercase = ucfirst($keyword);
		$query = "SELECT DISTINCT orders.id,orders.paid, orders.created_at, users.first_name, users.last_name, orders.transaction_id, orders.price, products_has_orders.qty,addresses.street, addresses.city, addresses.state, addresses.zipcode
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id
				INNER JOIN addresses ON orders.addresses_id = addresses.id
                INNER JOIN users ON users.id = orders.user_id
				WHERE users.first_name OR users.last_name LIKE '%$keyword%' OR '%$uppercase%'
				GROUP BY orders.id
				ORDER BY orders.id";

		return $this->db->query($query)->result_array();
	}

	public function delete_product($product_id)
	{
		return $this->db->delete('products', array('id' => $product_id));
	}

	public function process_transaction($charge)
	{
		// Insert address data	
		$query='SET foreign_key_checks = 0';
		$this->db->query($query);
		////////////////////////////

		$addressvals=[
			'street' => $charge->source->address_line1,
			'city' => $charge->source->address_city,
			'state' => $charge->source->address_state,
			'zipcode' => $charge->source->address_zip,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
			];
		$this->db->insert('addresses', $addressvals);
		$addresses_id=$this->db->insert_id();

		// var_dump($charge);
		// die;

		$ordervals=[
			'transaction_id' => $charge->id,
			'addresses_id' => $addresses_id,
			'tracking_num' => 0,
			'user_id' => $_SESSION['user_id'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'paid' => $charge->paid,
			'price' => $_SESSION['amount']/100
			];

		$this->db->insert('orders', $ordervals);
		$id=$this->db->insert_id();


		$query='SET foreign_key_checks = 1';
		$this->db->query($query);
		return $id;
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
		if(!isset($_SESSION['insert_id'])){$_SESSION['insert_id']=$this->db->insert_id();}
		$query='SET foreign_key_checks = 1';
		
		return $this->db->query($query);
	}

}























