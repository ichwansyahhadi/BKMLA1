<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->helper('directory');
		$this->load->helper(array('form','url','html'));
		$this->load->library(array('session','form_validation'));
		$this->load->model(array('Admin'));
    }

	public function index()
	{
		  $username = $this->input->post("txtUsername");
          $password = $this->input->post("txtPassword");

          //set validations
          $this->form_validation->set_rules("txtUsername", "Username", "trim|required");
          $this->form_validation->set_rules("txtPassword", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('admin/login');
          }else{
          	   $result=$this->Admin->getDataByUserPass($username,$password);
          	   if ($result > 0) //active user record is present
               {
               		$sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE,
                              'id' => $result->id
                         );
                    $this->session->set_userdata($sessiondata);
               		redirect("Admin/Home/dashboard");
               }else{
               		$this->session->set_flashdata('msg', '<div class="col-sm-3"></div><div class="col-sm-6"><div class="alert alert-danger text-center">Invalid username and password!</div></div><div class="col-sm-3"></div>');
                    redirect('Admin/Home/index');
               }	
          }
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Admin/Home/index');
	}

	public function dashboard()
	{
		$data['sessionData']=$this->session->userdata();
		
		if($this->session->loginuser == NULL){
			redirect('Admin/Home/index');
			exit;	
		}
		

        $data['notification'] = $this->Admin->getNotification();
		
		$this->load->view('admin/dashboard',$data);
	}

}
