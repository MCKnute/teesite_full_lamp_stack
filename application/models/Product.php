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

	public function get_products_by_category($category)
	{

		if ($category == 'featured') {
			$query = "SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'popularshirts') {

			// $query = "SELECT products.id AS productid, products.name AS productname, products.price AS price, products_has_orders.product_id, products_has_orders.quantity AS quantity FROM products JOIN products_has_orders ON products.id = products_has_orders.product_id";
			// return $this->db->query($query)->result_array();

			$query = "SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'newshirts') {
			$query = "SELECT * FROM products ORDER BY created_at DESC";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'cheapshirts') {
			$query = "SELECT * FROM products ORDER BY price";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'fancyshirts') {
			$query = "SELECT * FROM products ORDER BY price DESC";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'alphabetical') {
			$query = "SELECT * FROM products ORDER BY name";
			return $this->db->query($query)->result_array();
		}

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

	public function add_new_product($post_data)
	{
		$insert = "INSERT INTO products (name, price, description, created_at)
				VALUES (?,?,?,NOW())";

		$values = array(
			$post_data["name"],
			$post_data["price"], 
			$post_data["description"],
			// 'categories' => $post_data["categories"]
		);

		$insert_product = $this->db->query($insert, $values);

		if($insert_product)
		{
			$data["product_created"] = TRUE;
			$data["success_message"] = "New product created";
			redirect("/Products");
		}
		else
		{    
			$data["product_created"] = FALSE;
			$data["error_message"] = "Can't add new product. Try Again";
			redirect("/Products");
		}
	}


	public function get_products_by_search($searchterm)
	{
		$keyword = strtolower($searchterm);
		$uppercase = ucfirst($keyword);
		$query = "SELECT * FROM products 
			WHERE name OR description LIKE '%$keyword%' OR '%$uppercase%'";
		return $this->db->query($query)->result_array();
	}

	public function delete_product($product_id)
	{
		return $this->db->delete('products', array('id' => $product_id));
	}

}
