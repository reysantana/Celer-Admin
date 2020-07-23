<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model 
{
	public function __construct() 
	{
		parent::__construct();

		$this->load->database();
	}

	public function createAdmin($username, $email, $password) 
	{
		$data = array(
			'username'   => $username,
			'email'      => $email,
			'password'   => $this->hashPassword($password),
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('tbl_admin', $data);
		
	}
	
	public function resolveAdminLogin($username, $password) 
	{
		$this->db->select('password');
		$this->db->from('tbl_admin');
        $this->db->where('username', $username);
        $this->db->where('is_deleted', 0);

		$hash = $this->db->get()->row('password');
		
		return $this->verifyPasswordHash($password, $hash);
	}
	
	public function getAdminIdFromUsername($username) 
	{
		$this->db->select('id');
		$this->db->from('tbl_admin');
        $this->db->where('username', $username);
        $this->db->where('is_deleted', 0);

		return $this->db->get()->row('id');
	}
	
	public function getAdmin($user_id) 
	{
		$this->db->from('tbl_admin');
        $this->db->where('id', $user_id);
        $this->db->where('is_deleted', 0);

		return $this->db->get()->row();
	}

	private function hashPassword($password) 
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}
	
	private function verifyPasswordHash($password, $hash)
	{
		return password_verify($password, $hash);
	}
}
