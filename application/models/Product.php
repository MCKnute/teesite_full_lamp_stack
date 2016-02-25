<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function index()
	{
		$this->load->view('admin/products');
	}


}























