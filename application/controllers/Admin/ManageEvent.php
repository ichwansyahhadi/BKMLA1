<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageEvent extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->helper('directory');
		$this->load->helper(array('form','url','date'));
		$this->load->library(array('session','pagination'));
		$this->load->model(array('Event','Admin','Provinsi'));
    }

    public function index(){
       $data['sessionData']=$this->session->userdata();

        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }

		$config['base_url'] = site_url('Admin/ManageEvent/index');
        $config['total_rows'] = $this->Event->getNumData(NULL);
        $config['per_page'] = 10;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '«';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '»';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
        $data['dataEvent'] = $this->Event->getAllData($config["per_page"], $data['page'], NULL);
        
        $data['pagination'] = $this->pagination->create_links();


        $data['notification'] = $this->Admin->getNotification();

		$this->load->view('admin/event', $data);
    }

    public function search(){
       $data['sessionData']=$this->session->userdata();

        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }

        $search = ($this->input->post("txtSearch"))? $this->input->post("txtSearch") : NULL;

        $search = ($this->uri->segment(4)) ? $this->uri->segment(4) : $search;

        // pagination settings
        $config = array();
        $config['base_url'] = site_url("Admin/ManageEvent/search/$search");
        $config['total_rows'] = $this->Event->getNumData($search);
        $config['per_page'] = "2";
        $config["uri_segment"] = 5;
        $choice = $config["total_rows"]/$config["per_page"];
        $config["num_links"] = floor($choice);

        // integrate bootstrap pagination
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;
        
        $data['dataEvent'] = $this->Event->getAllData($config["per_page"], $data['page'], $search);
        
        $data['pagination'] = $this->pagination->create_links();


        $data['notification'] = $this->Admin->getNotification();

        $this->load->view('admin/event', $data);
    }

    public function create(){
        $data['sessionData']=$this->session->userdata();

        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }
        $data['notification'] = $this->Admin->getNotification();

        $data['provinsi'] = $this->Provinsi->getAllData();

        $this->load->view('Admin/event_create', $data);
    }

    public function edit($id){
        $data['sessionData']=$this->session->userdata();
        $data['eventData'] = $this->Event->getDataById($id);

        $event = $this->Event->getDataById($id);
        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }

        $data['notification'] = $this->Admin->getNotification();

        $data['provinsi'] = $this->Provinsi->getAllData();

        $data['id_provinsi'] = $this->Event->getDataById($id)->province;

        $this->load->view('Admin/event_edit', $data);
    }    

    public function insert(){
        
        $data['sessionData']=$this->session->userdata();

        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }
        $data['notification'] = $this->Admin->getNotification();

            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size']     = '100';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('image')){
                $dateArr = explode(' - ',$this->input->post('date'));
                $arrayData = array('title' => $this->input->post('title'),
                                    'description' => $this->input->post('description'),
                                    'date_start' => nice_date($dateArr[0], 'Y-m-d'),
                                    'date_end' => nice_date($dateArr[1], 'Y-m-d'),
                                    'geo_lang' => $this->input->post('lang'),
                                    'geo_long' => $this->input->post('long'),
                                    'province' => $this->input->post('provinsi'),
                                    'city' => NULL,
                                    'created_by' => $this->session->userdata('id'),
                                    'created_at' => date('y-m-d'),
                                    'updated_at' => date('y-m-d')
                                     );
                $this->Event->insert($arrayData);
                redirect('Admin/ManageEvent/');
            }else{
                $uploadfile = $this->upload->data();
                $dateArr = explode(' - ',$this->input->post('date'));
                $arrayData = array('img_path' => 'assets/upload/'.$uploadfile['file_name'],
                                    'title' => $this->input->post('title'),
                                    'description' => $this->input->post('description'),
                                    'date_start' => nice_date($dateArr[0], 'Y-m-d'),
                                    'date_end' => nice_date($dateArr[1], 'Y-m-d'),
                                    'geo_lang' => $this->input->post('lang'),
                                    'geo_long' => $this->input->post('long'),
                                    'province' => $this->input->post('provinsi'),
                                    'city' => NULL,
                                    'created_by' => $this->session->userdata('id'),
                                    'created_at' => date('y-m-d'),
                                    'updated_at' => date('y-m-d')
                                     );
                $this->Event->insert($arrayData);                
                redirect('Admin/ManageEvent/');
            }        
    }

    public function update($id){
        
        $data['sessionData']=$this->session->userdata();

        if($this->session->loginuser == NULL){
            redirect('Admin/Home/index');
            exit;   
        }
     
           $data['notification'] = $this->Admin->getNotification();

            $config['upload_path'] = './assets/upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            //$config['max_size']     = '100';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';

            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('image')){
                $dateArr = explode(' - ',$this->input->post('date'));
                $arrayData = array( 'title' => $this->input->post('title'),
                                    'description' => $this->input->post('description'),
                                    'date_start' => nice_date($dateArr[0], 'Y-m-d'),
                                    'date_end' => nice_date($dateArr[1], 'Y-m-d'),
                                    'geo_lang' => $this->input->post('lang'),
                                    'geo_long' => $this->input->post('long'),
                                    'province' => $this->input->post('provinsi'),
                                    'city' => NULL,
                                    'updated_at' => date('y-m-d')
                                     );
                $this->Event->update($id,$arrayData);
                redirect('Admin/ManageEvent/');
            }
            else{
                $uploadfile = $this->upload->data();
                $dateArr = explode(' - ',$this->input->post('date'));
                $arrayData = array('img_path' => 'assets/upload/'.$uploadfile['file_name'],
                                    'title' => $this->input->post('title'),
                                    'description' => $this->input->post('description'),
                                    'date_start' => nice_date($dateArr[0], 'Y-m-d'),
                                    'date_end' => nice_date($dateArr[1], 'Y-m-d'),
                                    'geo_lang' => $this->input->post('lang'),
                                    'geo_long' => $this->input->post('long'),
                                    'province' => $this->input->post('provinsi'),
                                    'city' => NULL,
                                    'updated_at' => date('y-m-d')
                                     );
                $this->Event->update($id,$arrayData);
                redirect('Admin/ManageEvent/');
            }        
    }

    public function delete($id){
        $this->Event->delete($id);
        redirect('Admin/ManageEvent/');
    }

}
?>