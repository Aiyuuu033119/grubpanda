<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_Model extends CI_Model {
    
    public function __construct(){
		$this->load->database();
	}

    public function check_email($email, $type)
	{   
        switch ($type) {
            case '_teacher':
                $this->db->where(array('email' => $email));
                $query = $this->db->get('teacher_tbl');
                return $query->result();
                break;
            case '_parent':
                $this->db->where(array('email' => $email));
                $query = $this->db->get('parent_tbl');
                return $query->result();
                break;
            case '_student':
                $this->db->where(array('email' => $email));
                $query = $this->db->get('student_tbl');
                return $query->result();
                break;
            case '_guard':
                $this->db->where(array('email' => $email));
                $query = $this->db->get('guard_tbl');
                return $query->result();
                break;
        }

	}
}

?>