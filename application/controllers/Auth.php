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

	public  function dashboard()
	{
		$data['title'] = 'Employee';
        $this->load->view('application/dashboard', $data);
	}

	public  function change()
	{
		$data['title'] = 'Change Password';
        $this->load->view('application/changePassword', $data);
	}

	public function userLogin()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		$fields = array(
			'username' => $username,
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
		$username = $this->input->post("username");
		// $contact = $this->input->post("contact");
		$password = $this->input->post("password");
		
		$fields = array(
			'name' => $name,
			'username' => $username,
			// 'contact' => $contact,
			'password' => md5($password),
		);
		
		$query = $this->model->get('user_tbl', array('username' => $username));

		if(count($query) >= 1){
			$data = array('msg' => 'existed');
		}else if (count($query) == 0){
			$data = $this->model->insert('user_tbl', $fields);
		}else {
			$data = array('msg' => 'error');
		}

		echo json_encode($data);

	}

	public  function reset()
	{
		$oldpassword = $this->input->post("oldpassword");
		$password = $this->input->post("password");
		$username = $this->input->post("username");
		
		$fields = array(
			'password' => md5($password),
		);
		
		$query = $this->model->get('user_tbl', array('password' => md5($oldpassword), 'username' => $username));

		if(count($query) == 0){
			$data = array('msg' => 'invalid');
		}else {
			$data = $this->model->update('user_tbl', $fields, array('username' => $username));
		}

		echo json_encode($data);
	}

	public function userLogout()
	{
		redirect('auth/login');
	}

}