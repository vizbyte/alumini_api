<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Database_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		  // Load database library 
		  $this->load->database(); 
 
		  // Database table name 
		  $this->tbl_name = 'user_login'; 
	}
	
	public function insertContactUsData($data)
	{
		$result= $this->db->insert('contact_us',$data);
		return $result;
	}
	public function fetchStudentData($id)
	{
		$sql="SELECT * FROM student_data where id=$id";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getLoginData($username,$pass)
	{
		$sql="SELECT * FROM user_login where username='$username' AND password='$pass'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function insert($data = array()) { 
        $insert = $this->db->insert($this->tbl_name, $data); 
        if($insert){ 
            return $this->db->insert_id(); 
        }else{ 
            return false; 
        } 
    } 
}