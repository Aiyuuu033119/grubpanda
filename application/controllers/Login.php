<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model', 'model');
        date_default_timezone_set('Asia/Manila');
	}

	public  function index()
	{
		redirect('login/login');
	}

    public  function login()
	{
        $this->load->view('application/index');
	}

	public function userLogin()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		
		$fields = array(
			'email' => $email,
			'password' => $password,
		);
	
		$query = $this->model->get('user_tbl', $fields);
		
		if(count($query) > 0){
            $data = array('msg' => 'success');
        }
		else if(count($query) == 0){
			$data = array('msg' => 'invalid');
		} else{
            $data = array('msg' => 'error');
        }

		echo json_encode($data);
	}

}