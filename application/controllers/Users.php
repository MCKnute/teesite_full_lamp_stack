<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
	public function index()
	{
		$this->load->view('store_message');
	}

	public function user_registration()
	{	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmpw', 'Confirm Password', 'trim|required|matches[password]');
		
		if($this->form_validation->run() === FALSE)
		{
			$data['status'] = FALSE;
			$data['error_message'] = validation_errors();
		}
		else
		{
			$this->load->model('User');
			$register_user = $this->User->add_user($this->input->post());
			if($register_user)
			{
				$data["status"] = TRUE; 

				if($_SERVER['HTTP_REFERER'] == base_url("/register"))
					$data["success_message"] = "Registration successful! You can now <a href='signin'>login</a>!";
				else
					$data["success_message"] = "User is successfully added!";
			}
			else
			{
				$data["status"] = FALSE;
				$data["error_message"] = "Registration failed! Please Try Again!";
			}	
		}

		echo json_encode($data);
	}

	public function admin_index()
	{
		$this->load->model('User');
		$users = $this->User->get_all_users();
		$info['users'] = $users;
		$headerinfo['title'] = "KMK Tees | Admin";
		$headerinfo['description'] = "Users";
		$this->load->view('/admin/header-admin', $headerinfo);
		$this->load->view('/admin/users', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function add_new()
	{	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmpw', 'Confirm Password', 'trim|required|matches[password]');
		
		if($this->form_validation->run() === FALSE)
		{
			$data['status'] = FALSE;
			$data['error_message'] = validation_errors();
		}
		else
		{
			$this->load->model('User');
			$register_user = $this->User->add_user($this->input->post());
			if($register_user)
			{
				$data["status"] = TRUE;
				$data["success_message"] = "User is successfully added!";
			}
			else
			{
				$data["status"] = FALSE;
				$data["error_message"] = "Registration failed! Please Try Again!";
			}	
		}
		echo json_encode($data);
		redirect('/Users/admin_index');
	}

	public function update_user()
	{
		$user_data = $this->input->post();
		$this->load->library('form_validation');

		//array key exist allows you to check if certain index exist on an array
		if(array_key_exists("email", $user_data))
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('first_name', 'First name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
			// $this->form_validation->set_rules('is_admin', 'User Level', 'trim|required');
		}
		elseif(array_key_exists("password", $user_data))
		{
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[re_password]');
			unset($user_data['re_password']);
			$user_data['password'] = md5(HASH_START . $user_data["password"] . HASH_END);
		}
		elseif(array_key_exists("description", $user_data))
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if($this->form_validation->run() === FALSE)
		{
			$data['status'] = FALSE;
			$data['error_message'] = validation_errors();
		}
		else
		{	
			$this->load->model('User');
			$update_user = $this->User->update_user($user_data);

			if($update_user)
			{
				$data["status"] = TRUE;
				$data["success_message"] = "User information was updated successfully!";
			}
			else
			{
				$data["status"] = FALSE;
				$data["error_message"] = "Update failed! Please Try Again!";
			}	
		}
		echo json_encode($data);
		redirect('users/admin_index');
		// return json_encode($data);
	}

	public function get_all_users_admin_html() {
		$users = $this->User->get_all_users();
		$this->load->view("partials/admin_users_partials", $users);
	}

	public function user_login()
	{	
		// var_dump($post_data);
		

		$post_data = $this->input->post();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() === FALSE)
		{
			$data['status'] = FALSE;
			$data['error_message'] = validation_errors();
		}
		else
		{	
			
			$user = array(
				'email' => $post_data["email"], 
				'password' => md5($post_data["password"])
			);

			$this->load->model('User');
			$user = $this->User->get_user($user);

			if(count($user) > 0)
			{	

				$user_data = array(
					'user_id' => $user->id,
					'email' => $user->email,
					'is_admin' => $user->is_admin,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'is_logged_in' => TRUE
				);

				//session is being set in here with index user session, remember session is in a form of array

				$this->session->set_userdata($user_data);

				$data['status'] = TRUE;

				if ($this->session->userdata('is_admin') == 1) 
				{
					$data['redirect_url'] = base_url('/Orders/index');
				}
				else
				{
					$data['redirect_url'] = base_url('/');
				}
			}
			else
			{
				$data['status'] = FALSE;
				$data["error_message"] = "Invalid email and Password! Please Try Again!";
			}
		}
		
		echo json_encode($data);
	}

	public function search_admin_html() 
	{
		$searchterm = $this->input->post('keyword');
		$users = $this->User->get_users_by_search_ajax($searchterm);
		$this->load->view("partials/admin_users_partials", $users);
	}

	public function search_admin()
	{
		$searchterm = $this->input->post('keyword');
		$users = $this->User->get_users_by_search($searchterm);
		$info['users'] = $users;
		$info['searchterm'] = $searchterm;
		$this->load->view('/admin/header-admin');
		$this->load->view('/admin/users/admin_index', $info);
		$this->load->view('/admin/footer-admin');
	}

	public function admin_delete_user($user_id)
	{
		if(is_numeric($user_id) && $this->is_admin=1)
		{
			$this->load->model('User');
			$delete = $this->User->delete_user($user_id);

			if($delete)
				redirect(base_url('/users/admin_index'));
			else
				show_404();
		}
		else
			show_404();
	}

	public function delete_user($user_id)
	{
		if(is_numeric($user_id) && $this->is_admin=1)
		{
			$this->load->model('User');
			$delete = $this->User->delete_user($user_id);

			if($delete)
				redirect(base_url('/'));
			else
				show_404();
		}
		else
			show_404();
	}

	public function logout()
	{
	    $this->session->sess_destroy();
	    redirect("/");
	}

}