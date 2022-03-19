<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
		parent::__construct();

        $this->load->helper('url');
        $this->load->model('Reset_Model', 'reset');
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



}