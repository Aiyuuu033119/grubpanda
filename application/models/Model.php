<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function get($tableName, $whereArray)
	{

        $query = $this->db->get_where($tableName, $whereArray);

		return $query->result();
	}

    public function counts($tableName, $whereArray)
	{

        $this->db->from($tableName);
        $this->db->where($whereArray);
        $result = $this->db->count_all_results();

        return $result;
	}

    
    public function sum($tableName, $whereArray)
    {
        $this->db->select_sum('total');
        $this->db->where($whereArray);
        $query = $this->db->get($tableName);

		return $query->result();
    }

	public function insert($tableName, $dataArray){
        $insert = $this->db->insert($tableName, $dataArray);

        if($insert){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

	public function update($tableName, $dataArray, $where){
        $this->db->where($where);

        $update = $this->db->update($tableName, $dataArray);

        if($update){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }
        
		return $data;
    }

	public function delete($tableName,$whereArray){
        $this->db->where($whereArray);
        $delete = $this->db->delete($tableName);

        if($delete){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }

        return $data;
    }

	public function group($tableName, $group, $order)
	{

        // $this->db->order_by($order);
		$this->db->select('date');
        $this->db->group_by($group);
        $this->db->order_by($order);

        $query = $this->db->get($tableName);

		return $query->result();
	}

	public function verify($tableName, $arrayWhere)
	{

        $query = $this->db->get_where($tableName,$arrayWhere);

		return $query->result();
	}

    public function display($tableName, $whereArray = array(), $limit = array(), $order="", $group=array())
	{
		if (!empty($limit)) {
			$this->db->limit($limit[0]);
		}
		if(!empty($order)){
			$this->db->order_by($order, 'DESC');
		}
		if(!empty($group)){
			$this->db->group_by($group[0]);
		}
		if (empty($whereArray)) {
			$query = $this->db->get($tableName);
		} else {
			$query = $this->db->get_where($tableName, $whereArray);
		}
		
		return $query->result();
	}

    public function list($tableName, $orderby, $sort)
    {
        $this->db->order_by($orderby, $sort);
        $query = $this->db->get($tableName);
		return $query->result();
    }

    public function insert_batch($tableName, $data)
    {
        $batch = $this->db->insert_batch($tableName, $data);
		
        if($batch){
            $data = array('msg' => 'success');
        }else{
            $data = array('msg' => 'error');
        }

        return $data;
    }

    public function update_batch($tableName, $data, $key)
    {
        $batch = $this->db->update_batch($tableName, $data, $key);
		
        // if($batch){
            $data = array('msg' => 'success');
        // }else{
        //     $data = array('msg' => 'error1');
        // }

        return $data;
    }

    public function signUp($tableName, $data){

        $data = array(
            'name' => $name,
            'email' => $title,
            'contactNumber' => $contactNumber,
            'password' => $password,
            'date' => $date,
    );

    $query = $this->db->insert('mytable', $data);

    return $query;

    }

}

?>