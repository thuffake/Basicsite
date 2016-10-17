<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	
	public function index()
	{
		$this->home();
	}
		
	public function home(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	
	public function about(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
	
	public function admin_login_view(){
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("admin_login");
		$this->load->view("site_footer");
	}
	
	public function login(){
		$this->load->model('model_submit');
        $result = $this->model_submit->login(); 
		if($result==true){
			$this->admin();
		} else {
			$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("admin_login");
		$this->load->view("admin_login_wrong");
		$this->load->view("site_footer");
		}
	}
	
	public function admin(){
		$this->load->model('model_submit');
        $data ['query'] = $this->model_submit->view_request(); 
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_admin");
		$this->load->view('admin_table_view', $data);
		$this->load->view("site_footer");
	}
	
	public function submit(){
		
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->library('recaptcha');
        //Store the captcha HTML for correct MVC pattern use.     
        $data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
		$this->load->view("content_submit",$data);
		$this->load->view("site_footer");
	}
	
	public function submit_form(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->load->library('recaptcha');
		$this->recaptcha->recaptcha_check_answer();
		
			

		if($this->form_validation->run() == FALSE|!$this->recaptcha->getIsValid()){
			$this->submit();
		} else {
			$this->load->model('model_submit');
			$user=$this->model_submit->insert_user();
			mkdir('uploads/'. $user); 
			$this->do_upload($user);
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("submit_true");
			$this->load->view("site_footer");
		} 
	}
	
	function approve_request(){
		$this->load->model('model_submit');
		$user=$this->model_submit->approve_request();
		$this->load->model('model_submit');
        $data ['query'] = $this->model_submit->view_request(); 
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_admin_approve");
		$this->load->view('admin_table_view', $data);
		$this->load->view("site_footer");	
	}
	
	function deny_request(){
		$this->load->model('model_submit');
		$user=$this->model_submit->deny_request();
		$this->load->model('model_submit');
        $data ['query'] = $this->model_submit->view_request(); 
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_admin_deny");
		$this->load->view('admin_table_view', $data);
		$this->load->view("site_footer");	
	}
	
	 function do_upload($userpath){
    	       
    $this->load->library('upload');

    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options($userpath));
        $this->upload->do_upload();
    }
}

private function set_upload_options($userpath)
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = 'uploads/' . $userpath;
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}
	 
}
	

