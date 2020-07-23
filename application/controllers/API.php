<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller
{
	public function __construct() 
	{
		parent::__construct();

        $this->load->library(array('session'));
        $this->load->model('user_model');
	}

    public function login() {
        $license = $this->input->post('license');

        $res = array(
            'status' => 0, 
            'message' => 'Invalid License Key.', 
            'name' => '', 
            'email' => ''
        );

        $userId = $this->user_model->getUserIdFromLicense($license);
        if ($userId == 0) {
            echo json_encode($res);
            return;
        }
        
        $user = $this->user_model->getAnyUser($userId);

        if ($user->status == 'PENDING') {
            $res['message'] = 'Your License is not approved yet.';
            echo json_encode($res);
            return;
        }

        if ($user->status == 'ACTIVE') {
            $res['status'] = 1;
            $res['message'] = 'Success';
            $res['name'] = $user->name;
            $res['email'] = $user->email;
            echo json_encode($res);
            return;
        }

        echo json_encode($res);
        return;
    }
}
