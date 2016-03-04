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
		$query = "SELECT * FROM products WHERE id = ?";
		$values = $id;
		return $this->db->query($query, $values)->row_array();
	}

	public function get_product_by_id($post_data)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$values = $product['id'];
		return $this->db->query($query, $values)->row_array();
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

	public function get_reccomend_products($currid)
	{
		$query = "SELECT * FROM products WHERE id != $currid ORDER BY RAND() LIMIT 4";
		return $this->db->query($query)->result_array();
	}

	public function get_products_by_category($category)
	{

		if ($category == 'featured') {
			$query = "SELECT * FROM products";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'mostpopular') {

			$query = "SELECT DISTINCT products.id AS id, products.name AS name, products.price AS price, products_has_orders.product_id, SUM(products_has_orders.qty) AS quantity FROM products LEFT JOIN products_has_orders ON products.id = products_has_orders.product_id GROUP BY id ORDER BY quantity DESC, name";
			return $this->db->query($query)->result_array();

			// $query = "SELECT * FROM products";
			// return $this->db->query($query)->result_array();

		}
		if ($category == 'newest') {
			$query = "SELECT * FROM products ORDER BY created_at DESC";
			return $this->db->query($query)->result_array();
		}
		if ($category == 'cheapest') {
			$query = "SELECT * FROM products ORDER BY price";
			return $this->db->query($query)->result_array();
		}
		if ($category === 'fanciest') {
			$query = "SELECT * FROM products ORDER BY price DESC";
			return $this->db->query($query)->result_array();
		}
		if ($category === 'alphabetical') {
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
			$post_data["description"]
			// 'categories' => $post_data["categories"]
		);
		$query='SET foreign_key_checks = 0';
		$this->db->query($query);
		$insert_product = $this->db->query($insert, $values);
		$query='SET foreign_key_checks = 1';
		$this->db->query($query);

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

	function edit_product($product_data)
	{
		$update_query = "UPDATE products SET name = ?, price = ?, description = ?, updated_at = ? WHERE id = ?";
		$values = array($product_data['name'], $product_data['price'], $product_data['description'], date("Y-m-d, H:i:s"), $product_data['id']);
		return $this->db->query($update_query, $values);
	}

	// public function get_products_by_search($searchterm)
	// {
	// 	$keyword = strtolower($searchterm);
	// 	$uppercase = ucfirst($keyword);
	// 	$query = "SELECT * FROM products 
	// 		WHERE name OR description LIKE '%$keyword%' OR '%$uppercase%'";
	// 	return $this->db->query($query)->result_array();
	// }

	public function get_products_by_search_ajax($searchterm)
	{
		$keyword = strtolower($searchterm);
		$uppercase = ucwords($keyword);
		// echo $keyword;
		// echo $uppercase;
		// die();
		$query = "SELECT * FROM products 
			WHERE name OR description LIKE '%$keyword%'";
		return $this->db->query($query)->result_array();
	}




	public function delete_product($product_id)
	{
		return $this->db->delete('products', array('id' => $product_id));
	}

}
