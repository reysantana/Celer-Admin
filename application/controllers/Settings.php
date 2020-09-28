<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();

		$this->load->library(array('session'));
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('username') == 'admin' && $this->session->userdata('logged_in') === true) {
			// $res['data_leads'] = $this->lead_model->get_leads();
			// $res['data_vips'] = $this->vip_model->get_vips();
			// $res['data_rewards'] = $this->reward_model->get_rewards();
            // $this->load->view('dashboard', $res);
            $this->load->view('settings');
		} else {
			redirect('/login');
		}
	}
}
