<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		$query = "SELECT orders.id,orders.transaction_id, products_has_orders.product_id, products.name, products.price, products_has_orders.qty, users.first_name, users.last_name, users.email
				FROM products_has_orders
				INNER JOIN products ON products.id = products_has_orders.product_id 
				INNER JOIN orders ON orders.id = products_has_orders.order_id 
                INNER JOIN users ON users.id = orders.user_id
				WHERE orders.id = ?";
		$values = $id;
		$prodsfromorder=$this->db->query($query, $values)->result_array();
		
		////////////////////////////////////////
		//// STRIPE RETRIEVE ADDRESS ///////////
		require_once 'vendor/stripe_key.php';

		//This loop pulls the transaction id (or charge id)
		//from the Stripe API, then modifies the array by
		//reference (e.g.the '&' in &$prod) with the attr
		//retrieved. Once all are complete, the modified
		//object is returned.
		foreach ($prodsfromorder as &$prod){
			
			$address = Stripe_Charge::retrieve($prod['transaction_id']);
			$prod['street']=$address->source->address_line1;
			$prod['city']=$address->source->address_city;
			$prod['state']=$address->source->address_state;
			$prod['zipcode']=$address->source->address_zip;
		}

		////////////////////////////////////////

		return $prodsfromorder;

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
		

		$query = "SELECT orders.id, orders.created_at, users.first_name, users.last_name, orders.transaction_id 
				FROM orders
				JOIN users ON orders.user_id = users.id
				ORDER BY orders.id
				";
		$allorders=$this->db->query($query)->result_array();

		////////////////////////////////////////
		//// STRIPE RETRIEVE ADDRESS ///////////
		require_once 'vendor/stripe_key.php';

		//This loop pulls the transaction id (or charge id)
		//from the Stripe API, then modifies the array by
		//reference (e.g.the '&' in &$order) with the attr
		//retrieved. Once all are complete, the modified
		//object is returned.
		foreach ($allorders as &$order){
			
			$address = Stripe_Charge::retrieve($order['transaction_id']);
			// var_dump($address);
			$order['street']=$address->source->address_line1;
			$order['city']=$address->source->address_city;
			$order['state']=$address->source->address_state;
			$order['zipcode']=$address->source->address_zip;
		}
		// die;
		////////////////////////////////////////
		return $allorders;

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
			'transaction_id' => $charge->id,
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























