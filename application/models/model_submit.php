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
			$address1=$this->input->post('address1');
			$address2=$this->input->post('address2');
			$city=$this->input->post('city');
			$state=$this->input->post('state');
			$zip=$this->input->post('zip');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$companyname=$this->input->post('companyname');
			$companyaddress=$this->input->post('companyaddress');
			$companycity=$this->input->post('companycity');
			$companystate=$this->input->post('companystate');
			$companyzip=$this->input->post('companyzip');
			$companyphone=$this->input->post('companyphone');
			$approved = 'A';
			
			$sql="INSERT INTO users(firstname,lastname,address1,address2,city,state,zip,phone,email,companyname,
			companyaddress,companycity,companystate,companyzip,companyphone,approved) 
				VALUES ('".$firstname."',
						'".$lastname."',
						'".$address1."',
						'".$address2."',
						'".$city."',
						'".$state."',
						'".$zip."',
						'".$phone."',
						'".$email."',
						'".$companyname."',
						'".$companyaddress."',
						'".$companycity."',
						'".$companystate."',
						'".$companyzip."',
						'".$companyphone."',
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