<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {

	public function get_products_from_order($id)
	{
		$query = "SELECT * FROM products JOIN products_has_orders ON products.id = products_has_orders.product_id JOIN orders ON orders.id = products_has_orders.product_id WHERE orders.id = ?";
		return $this->db->query($query, array($id))->result_array();
	}
	public function get_orders_from_user($id)
	{
		//placeholder
	}

}























