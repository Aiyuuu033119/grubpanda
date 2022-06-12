<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function __construct(){
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Model', 'model');
        date_default_timezone_set('Asia/Manila');
	}

	public  function list()
	{
		$data = $this->model->get('employee_tbl', array('archive !=' => '1'));

		echo json_encode($data);
	}

	public  function add()
	{
		$employee_no = $this->input->post("employee_no");
		$last_name = $this->input->post("last_name");
		$first_name = $this->input->post("first_name");
		$middle_name = $this->input->post("middle_name");
		$age = $this->input->post("age");
		$sex = $this->input->post("sex");
		$contact = $this->input->post("contact");
		$address = $this->input->post("address");
		
		$fields = array(
			'employee_no' => $employee_no,
			'last_name' => $last_name,
			'first_name' => $first_name,
			'middle_name' => $middle_name,
			'age' => $age,
			'sex' => $sex,
			'contact' => $contact,
			'address' => $address,
			'archive' => '0',
		);

		$data = $this->model->insert('employee_tbl', $fields);

		echo json_encode($data);
	}

	public  function edit()
	{
		$employee_no = $this->input->post("employee_no");
		$last_name = $this->input->post("last_name");
		$first_name = $this->input->post("first_name");
		$middle_name = $this->input->post("middle_name");
		$age = $this->input->post("age");
		$sex = $this->input->post("sex");
		$contact = $this->input->post("contact");
		$address = $this->input->post("address");
		$id = $this->input->post("id");
		
		$fields = array(
			'employee_no' => $employee_no,
			'last_name' => $last_name,
			'first_name' => $first_name,
			'middle_name' => $middle_name,
			'age' => $age,
			'sex' => $sex,
			'contact' => $contact,
			'address' => $address,
		);

		$data = $this->model->update('employee_tbl', $fields, array('id' => $id));

		echo json_encode($data);
	}

	public  function delete()
	{
		$id = $this->input->post("id");
		
		$data = $this->model->delete('employee_tbl', array('id' => $id));

		echo json_encode($data);
	}

	public  function archive()
	{
		$id = $this->input->post("id");
		
		$fields = array(
			'archive' => '1',
		);

		$data = $this->model->update('employee_tbl', $fields, array('id' => $id));

		echo json_encode($data);
	}

	public  function archiveList()
	{
		$data['title'] = 'Archive';
        $this->load->view('application/archive', $data);
	}
	
}