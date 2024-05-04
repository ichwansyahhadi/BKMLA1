<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api extends CI_Controller {
	function __construct()
	{
		parent::__construct();	
		$this->load->helper('directory');
		$this->load->library(array('session','pagination'));
   		$this->load->helper(array('form','url'));
        $this->load->database();
		$this->load->model(array('Event'));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['dataEvent'] = $this->Event->getDataForShow();
		$data['highestrating'] = $this->Event->getAllData(1,0);
		$data['announcement'] = $this->Event->getAllData(4,1);
		$data['magazine'] = $this->Event->getAllData(2,3);
		$newvalue = array_values( (array)$data );
		echo json_encode($newvalue);
	}
}
