<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	public function process_transaction($charge){

		$ordervals=[
			'transaction_id' => $charge->balance_transaction,
			'tracking_num' => 0,
			'user_id' => $_SESSION['user_id'],
			'address_id' => 1,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s'),
			'paid' => $charge->paid
					];
		$this->db->insert('orders', $ordervals);
		return $this->db->insert_id();
	}
	
}

