<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'home_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->module('enquiry','read')->redirect();

		$data['title']    = display('enquiry_list');  ;
		$data['enquirys'] = $this->home_model->read();
		$data['module'] = "enquiry";
		$data['page']   = "home";   
		echo Modules::run('template/layout', $data); 
	} 

 
	public function view($enquiry_id = null)
	{  
        $this->permission->module('enquiry','read')->redirect();

		$data['title'] = display('enquiry_information');
		#-------------------------------#
		#check enquiry is already checked  
		if ($this->home_model->check_exists($enquiry_id) === true) {
			//update checked and checked_by field
			$this->home_model->update([
				'enquiry_id' => $enquiry_id,
				'checked' 	 => 1,
				'checked_by' => $this->session->userdata('id'),
			]);
		}
		#-------------------------------#
		$data['enquiry'] = $this->home_model->read_by_id($enquiry_id);

		$data['module'] = "enquiry";
		$data['page']   = "view";   
		echo Modules::run('template/layout', $data); 
	} 



	public function form()
	{
        $this->permission->module('enquiry','read')->redirect();

		$data['title'] = display('setting');
		$data['module'] = "enquiry";
		$data['page']   = "setting";   
		echo Modules::run('template/layout', $data); 
	}

 
	public function delete($enquiry_id = null) 
	{ 
        $this->permission->module('enquiry','delete')->redirect();

		if ($this->home_model->delete($enquiry_id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('enquiry/home/index');
	} 



	public function iframe()
	{
		$data['title'] = display('setting');
		$data['module'] = "enquiry";
		$this->load->view('iframe');
	}


 	public function create()
	{ 
		$data['title'] = display('enquiry');
		#-------------------------------#
		$this->form_validation->set_rules('name',display('name'),'required|max_length[50]');
		$this->form_validation->set_rules('email',display('email')  ,'required|max_length[100]|valid_email');
		$this->form_validation->set_rules('phone',display('phone')  ,'max_length[20]');
		$this->form_validation->set_rules('enquiry',display('enquiry') ,'required');
		#-------------------------------#
		$postData = [
			'email' 	 => $this->input->post('email',true),
			'phone' 	 => $this->input->post('phone',true),
			'name' 		 => $this->input->post('name',true),
			'enquiry' 	 => $this->input->post('enquiry',true),
			'ip_address' => $this->input->ip_address(),
			'user_agent' => $this->input->user_agent(),
			'created_date' => date('Y-m-d H:i:s'),
			'status'     => 1
		];   
        #-------------------------------#  
        if ($this->form_validation->run()) { 

            if ($this->home_model->create($postData)) { 
                $data['status'] = true;
                $data['success'] = display('submit_successfully');
            } else {
                $data['status'] = false;
                $data['exception'] = display('please_try_again');
            }
        } else {  
            $data['status'] = false;
            $data['exception'] = validation_errors();
        } 

        echo json_encode($data);    
	}
}
