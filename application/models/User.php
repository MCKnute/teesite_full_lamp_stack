<?php

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function update_user($user_id, $user_data)
	{
		return $this->db->where('id', $user_id)
				    ->update('users', $user_data); 
	}

	public function delete_user($user_id)
	{
		return $this->db->delete('users', array('id' => $user_id)); 
	}

	// function for getting user/users information
	public function get_user($user = NULL)
	{
		if($user != NULL)
		{
			//for user login
			if(is_array($user))
			{
				return $this->db->where('email', $user['email'])
							->where('password', $user['password'])
							->get('users')
							->row();
			}
			else
				return $this->db->where('id', $user)->get('users')->row();
		}
		else
			return $this->db->get('users')->result();
	}
	
	public function add_user($user_data)
	{
		$user = array(
			'email'	=> $user_data["email"],
			'password' => md5($user_data["password"]),
			'first_name' => $user_data["first_name"],
			'last_name'	=> $user_data["last_name"],
			'is_admin' => FALSE,
			'created_at' => date("Y-m-d H:i:s")
		);
		
		return $this->db->insert('users', $user);
	}
	public function make_user_admin($user_id)
	{
		$user_data = array(
			'is_admin' => TRUE,
			'updated_at' => date("Y-m-d H:i:s")
		);

		return $this->db->where('id', $user_id)
				    ->update('users', $user_data); 
	}
}