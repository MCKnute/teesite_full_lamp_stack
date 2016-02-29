<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('Product');
	}

	public function index()
	{
		$headerinfo['title'] = "KMK Tees";
		$headerinfo['description'] = "Get excellent tees from us!";
		$this->load->view('header-store', $headerinfo);
		$this->load->view('user_cart');
		$this->load->view('footer-store');
	}

	public function add_items() {


		$checksizes=["small_w","small_m","medium_w","medium_m","large_w","large_m","xlarge_w","xlarge_m"];


		foreach ($checksizes as $checksize) {
			
			if ($this->input->post($checksize) != "0") {
				// echo "I am $checksize ! My quantity is ".$this->input->post($checksize)."!! ";

				$productid = $this->input->post('productid');
				$productname = $this->input->post('productname');
				$productprice = $this->input->post('price');
				$productquantity = $this->input->post($checksize);
				$productsize = $checksize;

				

				$insert_data[] = array(
					'id' => $productid."_".$productsize,
					'name' => $productname,
					'price' => $productprice,
					'qty' => $productquantity,
					'size' => array('Size' => $productsize,
					'ShirtID' => $productid)
				);
			}
		}

		
		if($insert_data){
			$this->cart->insert($insert_data);
		}
		else{
			die("Cart is empty, must add item... also.. get around to catching this and displaying a proper error notification to the user");
		}
		// die();
		// 'id' => $this->input->post('id'),
		// 'name' => $this->input->post('name'),
		// 'price' => $this->input->post('price'),

		// This function add items into cart.
		

		// This will show insert data in cart.
		redirect('product/'.$this->input->post('productid'));
	}
	public function remove_item($rowid) {
		$data = array(
			'rowid' => $rowid,
			'qty' => 0
		);
	$status=$this->cart->update($data);
	redirect("/Carts");
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
		redirect('/Carts');
	}

	public function process(){
		require_once 'vendor/stripe_key.php';
		
		if (isset($_SESSION['user_id']))
		{
			$this->load->model('User');
			$customer = $this->User->get_user($_SESSION['user_id']);
			if($customer->customer_id===0 && isset($_POST['stripeToken']))
			{
				var_dump($customer->customer_id);
				die("It thinks customer_id is 0");
				$newcustomer = Stripe_Customer::create(array(
					'card' => $_POST['stripeToken'],
					'email' => $_SESSION['email']
				));
				$customer->customer_id = $newcustomer->id;
				$this->User->update_user($_SESSION['user_id'],$customer);
			}

			try
			{
				$array=[
					'customer' => $customer->customer_id,
					'amount' => $_SESSION['amount'],
					'currency' => 'usd',
					'description' => $_SESSION['email'],
					'receipt_email' => $_SESSION['email']
					];
				$charge=Stripe_Charge::create($array);
				$this->load->model('Cart_model');
				$_SESSION['insert_id']=$this->Cart_model->process_transaction($charge);
				foreach($this->cart->contents() as $item){
					$data = array(
							'rowid' => $item['rowid'],
							'qty' => 0
						);
					$status=$this->cart->update($data);
				}
				
				redirect("/Orders/confirmation");
			}
			catch(Stripe_CardError $e)
			{
			  $body = $e->getJsonBody();
			  $err  = $body['error'];

			  print('Status is:' . $e->getHttpStatus() . "\n");
			  print('Type is:' . $err['type'] . "\n");
			  print('Code is:' . $err['code'] . "\n");
			  print('Param is:' . $err['param'] . "\n");
			  print('Message is:' . $err['message'] . "\n");
			} 
		}
		else
		{ //if $_SESSION['user_id'] not set, have them sign in.
			redirect('/signin_register');
		}	
	}

}

