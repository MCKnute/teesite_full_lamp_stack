<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function get_all_products()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}
	public function get_one_product($id)
	{
		$query = "SELECT * FROM products WHERE id = $id";
		return $this->db->query($query)->row_array();
	}
	public function get_product_by_name($product)
	{
		$query = "SELECT * FROM products WHERE name = ?";
		$values = $product['name'];
		return $this->db->query($query, $values)->row_array();
	}

	public function get_some_products($num, $offset)
	{
		$query = "SELECT * FROM products LIMIT $num OFFSET $offset";
		return $this->db->query($query)->result_array();
	}

	public function get_products_by_category()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function get_product_inventory_total()
	{
		$query = "SELECT products.id, inventories.id, inventories.total_qty
				FROM inventories
				JOIN products ON products.id = inventories.id
				ORDER BY products.id
				";
		return $this->db->query($query)->result_array();
	}

	public function add_new_product($product)
	{
		$product = array(
			'name' => $product_data["name"],
			'description' => $product_data["description"],
			'categories' => $product_data["categories"],
			'created_at' => date("Y-m-d H:i:s")
		);
		
		return $this->db->insert('products', $product);
	}

}























