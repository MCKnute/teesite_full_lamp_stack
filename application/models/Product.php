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
	public function get_some_products($num, $offset)
	{
		$query = "SELECT * FROM products LIMIT $num OFFSET $offset";
		return $this->db->query($query)->result_array();
	}

	public function get_products_by_category($category)
	{

		if ($category == 'featuredtees') {
			$query = "SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'popularshirts') {

			$query = "SELECT products.id AS id, products.name AS name, products.price AS price, products_has_orders.product_id, SUM(products_has_orders.qty) AS quantity FROM products LEFT JOIN products_has_orders ON products.id = products_has_orders.product_id GROUP BY id ORDER BY quantity DESC, name";
			return $this->db->query($query)->result_array();

			// $query = "SELECT * FROM products";
			// return $this->db->query($query)->result_array();



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

	public function get_products_by_search($searchterm)
	{
		$keyword = strtolower($searchterm);
		$uppercase = ucfirst($keyword);
		$query = "SELECT * FROM products 
			WHERE name OR description LIKE '%$keyword%' OR '%$uppercase%'";
		return $this->db->query($query)->result_array();
	}

}
