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
		// $email = $this->input->post("email");
		// $password = $this->input->post("password");

		// try mo na lang ulit nan atleast ok 
		// mo pressure nan sabihan mo ko sa FRIDAY kapag tapos ka na
		// kunware may update ka ang gagawin mo na lang is
		// git add .
		// git commit -m "msg mo"
		// git push origin vincent
	}

}