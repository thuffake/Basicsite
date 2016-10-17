<?php
    class Model_Submit extends CI_Model{
    	
		function construct(){
			parent::__construct();
		}
		
		public function login(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->db->where('username', $username);
		    $this->db->where('password', $password);
			
			$query = $this->db->get('admin');
			
			if($query->num_rows() == 1){
			return true;
		} else {
			return false;
		}
		
		}
		
		public function insert_user(){
			
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$email=$this->input->post('email');
			$approved = 'A';
			
			$sql="INSERT INTO users(firstname, lastname,email,approved) 
				VALUES ('".$firstname."',
						'".$lastname."',
						'".$email."',
						'".$approved."')";
						
			$this->db->query($sql);
			
			if($this->db->affected_rows()==1){
				return $firstname . $lastname;
			} else{
				return $false="Form Failed";
			}
		}
		
		function view_request(){
        $query = $this->db->select('*')->from('users')->where('approved','A')->get();
    	return $query->result();
		}
		
		function approve_request(){
			$id=$this->input->post('id');
			$sql="UPDATE users SET approved='Y' WHERE id='".$id."'";
			$this->db->query($sql);
			
		}
		
		function deny_request(){
			$id=$this->input->post('id');
			$sql="UPDATE users SET approved='N' WHERE id='".$id."'";
			$this->db->query($sql);
			
		}
		
		
    }
?>