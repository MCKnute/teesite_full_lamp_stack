<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Product');
	}

	public function add_items() {

		$checksizes=["small_w","small_m","medium_w","medium_m","large_w","large_m","xlarge_m","xlarge_m"];

		foreach ($checksizes as $checksize) {

			if ($this->input->post($checksize) != "0") {

				// echo "I am $checksize ! My quantity is ".$this->input->post($checksize)."!! ";


				$productid = $this->input->post('productid');
				$productname = $this->input->post('productid');
				$productprice = $this->input->post('price');
				$productquantity = $this->input->post($checksize);
				$productsize = $checksize;

				$insert_data[] = array(
					'id' => $productid."_".$productsize,
					'name' => $productname,
					'price' => $productprice,
					'qty' => $productquantity,
					'size' => array('Size' => $productsize,'ShirtID' => $productid)
				);
			}
		}
		// var_dump($insert_data);
		// die();

		$this->cart->insert($insert_data);
		// die();
		// 'id' => $this->input->post('id'),
		// 'name' => $this->input->post('name'),
		// 'price' => $this->input->post('price'),

		// This function add items into cart.
		

		// This will show insert data in cart.
		redirect('product/'.$this->input->post('productid'));
	}

	public function remove_items($rowid) {

		if ($rowid==="all"){
			$this->cart->destroy();
		} else {
			$data = array(
				'rowid' => $rowid,
				'qty' => 0
			);
			$this->cart->update($data);
		}
		redirect('/');
	}
}
