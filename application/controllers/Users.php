<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		$this->load->library(array('session'));
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) {
			$res['data_users'] = $this->user_model->getAllUsers();
            $this->load->view('users', $res);
		} else {
			redirect('/login');
		}
	}

	public function add() {
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$status = $this->input->post("status");
		
		$data = array(
			'name' => $name, 
			'email' => $email, 
			'status' => $status
		);
		
		$result = $this->user_model->addUser($data);
		echo json_encode($result);
	}

	public function deleteMultiple() {
		$ids = $this->input->post("ids");

		$result = $this->user_model->deleteUsers(explode(',', $ids));
        echo json_encode($result);
	}

	public function deleteSingle() {
		$id = $this->input->post("id");

		$result = $this->user_model->deleteUser($id);
        echo json_encode($result);
	}

	public function edit() {
		$id = $this->input->post("id");
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$status = $this->input->post("status");
		
		$data = array(
			'id' => $id, 
			'name' => $name, 
			'email' => $email, 
			'status' => $status
		);
		
		$result = $this->user_model->updateUser($id, $data);
        echo json_encode($result);
	}
}
