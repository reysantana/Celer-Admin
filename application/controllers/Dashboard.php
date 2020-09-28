<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		$this->load->library('session');
	}

	public function index()
	{
		if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) {
			$this->load->view('dashboard');
		} else {
			redirect('/login');
		}
	}
}
