<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model', 'model');
        date_default_timezone_set('Asia/Manila');
	}

	public  function index()
	{
		redirect('auth/landing');
	}

	public  function landing()
	{
		$data['title'] = 'Home';
        $this->load->view('application/index', $data);
	}

    public  function login()
	{
		$data['title'] = 'Login';
        $this->load->view('application/login', $data);
	}

	public  function signup()
	{
		$data['title'] = 'Sign Up';
        $this->load->view('application/signup', $data);
	}

	public function userLogin()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		
		$fields = array(
			'email' => $email,
			'password' => md5($password),
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

	public function userSignup()
	{

		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$contact = $this->input->post("contact");
		$password = $this->input->post("password");
		
		$fields = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'password' => md5($password),
		);
		
		$query = $this->model->get('user_tbl', array('email' => $email));

		if(count($query) >= 1){
			$data = array('msg' => 'existed');
		}else if (count($query) == 0){
			$data = $this->model->insert('user_tbl', $fields);
		}else {
			$data = array('msg' => 'error');
		}

		echo json_encode($data);

	}

	public function userLogout()
	{
		redirect('auth/landing');
	}

}