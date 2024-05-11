<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		// $this->load->helper('directory');
		$this->load->helper(array('form','url','html'));
		// $this->load->library(array('session','form_validation'));
		$this->load->model(array('Newsletter_model'));
    }
 
	public function regist()
	{
		$registEmail = $this->input->post("registEmail");
		$dateCreated = date('y-m-d HH:ii:ss');
		$arrayData = array('email' => $registEmail,
		                'created_at' => $dateCreated,
		                'approved' => null,
		                'approved_by' => null,
		                'approved_at' => null,
		                'api' => null
		                 );
		$this->Newsletter_model->insert($arrayData);
		redirect(base_url('ver2'));
		
	}
}
?>