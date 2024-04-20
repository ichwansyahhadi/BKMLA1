<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->helper('directory');
		$this->load->helper(array('form','url'));
		$this->load->library(array('session'));
		$this->load->model(array('Admin'));
    }

	public function index()
	{
		$data['dataAdmin']=$this->Admin->getAllData();
		$this->load->view('Home/Admin/AdminManagement', $data);
	}


	public function insert(){
		$this->load->view('Home/Admin/AdminAdd', $data);
	}

	public function insertDB(){
		$arrayData = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
						'birthday' => $this->input->post('birthday'),
						'address' => $this->input->post('address'),
						'created_at' => getdate(),
						'updated_at' => getdate()
					);
		$data['result'] = $this->Admin->insert($arrayData);
		$this->load->view('Home/Admin/AdminManagement', $data);
	}

	public function update($id){
		$data['dataAdmin']=$this->Admin->getDataById($id);
		$this->load->view('Home/Admin/AdminUpdate', $data);	
	}

	public function updateDB($id){
		$arrayData = array(
						'username' => $this->input->post('username'),
						'password' => $this->input->post('password'),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
						'birthday' => $this->input->post('birthday'),
						'address' => $this->input->post('address'),
						'updated_at' => getdate()
					);
		$data['result'] = $this->Admin->update($id,$arrayData);
		$this->load->view('Home/Admin/AdminManagement', $data);
	}

	public function deleteDB($id){
		$data['result'] = $this->Admin->delete($id);
		$this->load->view('Home/Admin/AdminManagement', $data);	
	}
}