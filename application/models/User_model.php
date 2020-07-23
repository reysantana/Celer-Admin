<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
	public function __construct() 
	{
		parent::__construct();

		$this->load->database();
	}

	public function generateLicense() {
		
		$num_segments = 4;
		$segment_chars = 4;
		$suffix = "-";

		$tokens = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$license_string = '';
		
		for ($i = 0; $i < $num_segments; $i++) {
			$segment = '';
			for ($j = 0; $j < $segment_chars; $j++) {
				$segment .= $tokens[rand(0, strlen($tokens) - 1)];
			}

			$license_string .= $segment;
			if ($i < ($num_segments - 1)) {
				$license_string .= '-';
			}
		}

		return $license_string;
	}

	public function addUser($user) 
	{
		$data = array(
			'name' => $user['name'],
			'email' => $user['email'],
			'license' => $this->generateLicense(), 
			'status' => $user['status']
		);

		if ($user['status'] == 'PENDING') {
			$data['is_deleted'] = 0;
			$data['created_at'] = date('Y-m-j H:i:s');
		} else if ($user['status'] == 'ACTIVE') {
			$data['is_deleted'] = 0;
			$data['created_at'] = date('Y-m-j H:i:s');
			$data['updated_at'] = date('Y-m-j H:i:s');
		} else if ($user['status'] == 'INACTIVE') {
			$data['is_deleted'] = 1;
			$data['created_at'] = date('Y-m-j H:i:s');
			$data['deleted_at'] = date('Y-m-j H:i:s');
		}
		
		$this->db->select('id');
    	$this->db->from('tbl_users');
    	$this->db->where('email', $user['email']);
    	$query = $this->db->get();
		$num = $query->num_rows();
		if ($num > 0) {
			return 0;
		} else {
			$this->db->insert('tbl_users', $data);
			return $this->db->insert_id();
		}
	}

	public function getUserIdFromLicense($license) {

		$this->db->select('id');
    	$this->db->from('tbl_users');
    	$this->db->where('license', $license);
    	$query = $this->db->get();
		$num = $query->num_rows();
		if ($num > 0) {
			return $query->row()->id;
		} else {
			return 0;
		}
	}

	public function getActiveUser($id) 
	{
		$this->db->from('tbl_users');
        $this->db->where('id', $id);
        $this->db->where('is_deleted', 0);

		return $this->db->get()->row();
	}

	public function getAnyUser($id) 
	{
		$this->db->from('tbl_users');
        $this->db->where('id', $id);

		return $this->db->get()->row();
	}

	public function getAllUsers() 
	{
		$this->db->from('tbl_users');

		return $this->db->get()->result();
	}

	public function deleteUser($id) {
		$this->db->where('id', $id);
		$data = array('is_deleted' => 1,
					  'status' => 'INACTIVE', 
					  'deleted_at' => date('Y-m-j H:i:s'));
		$this->db->update('tbl_users', $data);
		return $this->db->affected_rows();
	}

	public function deleteUsers($ids) {; 
		$this->db->where_in('id', $ids);
		$data = array('is_deleted' => 1, 
		              'status' => 'INACTIVE', 
					  'deleted_at' => date('Y-m-j H:i:s'));
		$this->db->update('tbl_users', $data);
		return $this->db->affected_rows();
	}

	public function updateUser($id, $data) {
		$this->db->where('id', $id);
		if ($data['status'] == 'PENDING') {
			$data['is_deleted'] = 0;
			$data['updated_at'] = date('Y-m-j H:i:s');
		} else if ($data['status'] == 'ACTIVE') {
			$data['is_deleted'] = 0;
			$data['updated_at'] = date('Y-m-j H:i:s');
		} else if ($data['status'] == 'INACTIVE') {
			$data['is_deleted'] = 1;
			$data['deleted_at'] = date('Y-m-j H:i:s');
		}
		$this->db->update('tbl_users', $data);
		return $this->db->affected_rows();
	}
}

?>