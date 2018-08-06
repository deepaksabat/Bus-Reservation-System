<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fleet_registration extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'fleet_registration_model',
			'fleet_facilities_model',
			'fleet_type_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('fleet','read')->redirect();
		$data['title']    = display('list'); 
		#-------------------------------#
		$data['fleet_registrations'] = $this->fleet_registration_model->read();
		$data['module'] = "fleet";
		$data['page']   = "registration/list";   
		echo Modules::run('template/layout', $data); 
	}  

 	public function form($id = null)
	{ 
		$data['title'] = display('add');
		#-------------------------------#
		if ($this->input->post('id') == null) {
			$this->form_validation->set_rules('reg_no',display('reg_no') ,'required|is_unique[fleet_registration.reg_no]');
		} else {
			$this->form_validation->set_rules('reg_no',display('reg_no') ,'required');
		}
		$this->form_validation->set_rules('fleet_type_id',display('fleet_type') ,'required');
		$this->form_validation->set_rules('ac_available', display('ac_available') ,'required');
		$this->form_validation->set_rules('status',display('status') ,'required');
		#-------------------------------#
		$data['fleet_registration'] = (Object) $postData = [
			'id' 	         => $this->input->post('id'), 
			'reg_no' 	     => $this->input->post('reg_no'), 
			'fleet_type_id'  => $this->input->post('fleet_type_id'), 
			'engine_no' 	 => $this->input->post('engine_no'), 
			'model_no' 	     => $this->input->post('model_no'), 
			'chasis_no' 	 => $this->input->post('chasis_no'), 
			'layout'         => $this->input->post('layout'),
			'lastseat' 	     => $this->input->post('lastseat'),
			'total_seat' 	 => $this->input->post('total_seat'), 
			'seat_numbers' 	 => $this->input->post('seat_numbers'), 
			'fleet_facilities'=> $this->input->post('fleet_facilities'), 
			'owner' 	     => $this->input->post('owner'), 
			'company' 	     => $this->input->post('company'), 
			'ac_available'   => $this->input->post('ac_available'), 
			'status'         => $this->input->post('status'), 
		];  
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if (empty($postData['id'])) {

        		$this->permission->method('fleet','create')->redirect();

				if ($this->fleet_registration_model->create($postData)) { 
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("fleet/fleet_registration/form"); 

			} else {

        		$this->permission->method('fleet','update')->redirect();

				if ($this->fleet_registration_model->update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("fleet/fleet_registration/form/".$postData['id']);  
			}
 

		} else { 
			if(!empty($id)) {
				$data['title'] = display('update');
				$data['fleet_registration']   = $this->fleet_registration_model->findById($id);
			}
			$data['fleet_type_list']   = $this->fleet_type_model->dropdown();
			$data['fleet_facilities_list']   = $this->fleet_facilities_model->dropdown();
			$data['module'] = "fleet";
			$data['page']   = "registration/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}

 

	public function delete($id = null) 
	{ 
        $this->permission->method('fleet','delete')->redirect();

		if ($this->fleet_registration_model->delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('fleet/fleet_registration/index');
	}
	 

}
