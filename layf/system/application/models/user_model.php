<?php

class User_model extends Model {

    function User_model()
    {
        parent::Model();
		$this->load->database();
    }
	
	function login($username,$password){
	    
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query= $this->db->get();
		
		if($query->num_rows() <= 0) return 0; //if user and password is invalid
		else{
			$this->db->query("UPDATE users SET status = '1' WHERE username = '{$username}'"); //sets user status to logged-in
			return 1;
		}
	}
	
	function register($data){
		$this->db->insert('users',$data);
	}
}
?>