<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct() 
	{
		parent::__construct();

		$this->load->library(array('session'));
		$this->load->model('admin_model');
	}

	public function login() 
	{
		if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) {
			redirect('/dashboard');
		} else {
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if ($this->form_validation->run() == false) {
				$this->load->view('login');
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				if ($this->admin_model->resolveAdminLogin($username, $password)) {
					$admin_id = $this->admin_model->getAdminIdFromUsername($username);
					$admin    = $this->admin_model->getAdmin($admin_id);

					$this->session->set_userdata('user_id', (int)$admin->id);
					$this->session->set_userdata('username', (string)$admin->username);
					$this->session->set_userdata('email', (string)$admin->email);
					$this->session->set_userdata('avatar', (string)$admin->avatar);
					$this->session->set_userdata('logged_in', (bool)true);
					
					redirect('/dashboard');
				} else {
					$this->load->view('login');
				}
			}
		}
	}
	
	public function register() 
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[tbl_admin.username]', 
			array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[tbl_admin.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			$this->load->view('register');
		} else {
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->admin_model->createAdmin($username, $email, $password)) {
				redirect('/dashboard');
			} else {
				$this->load->view('register');
			}
		}
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		$this->login();
		redirect('/');
	}
}
