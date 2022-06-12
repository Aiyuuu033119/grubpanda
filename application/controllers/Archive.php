<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model', 'model');
        date_default_timezone_set('Asia/Manila');
	}

	public  function list()
	{
		$data = $this->model->get('employee_tbl', array('archive' => '1'));

		echo json_encode($data);
	}

	public  function revert()
	{
		$id = $this->input->post("id");
		
		$fields = array(
			'archive' => '0',
		);

		$data = $this->model->update('employee_tbl', $fields, array('id' => $id));

		echo json_encode($data);
	}
	
}