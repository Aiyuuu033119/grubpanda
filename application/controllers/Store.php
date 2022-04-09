<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model', 'model');
        date_default_timezone_set('Asia/Manila');
	}

	public  function index()
	{
		redirect('store/list');
	}

	public  function list()
	{
		$data['title'] = 'Restaurant';
        $this->load->view('application/restaurant/index', $data);
	}

	public  function detail()
	{
		$data['title'] = 'Store Detail';
        $this->load->view('application/restaurant/detail', $data);
	}

	public  function order()
	{
		$data['title'] = 'Order';
        $this->load->view('application/restaurant/order', $data);
	}

	public  function confirm()
	{
		$data['title'] = 'Confirm Order';
        $this->load->view('application/restaurant/confirm', $data);
	}
	
}