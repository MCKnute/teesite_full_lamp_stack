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

	public function get_products_by_category()
	{
		$query = "SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

}























