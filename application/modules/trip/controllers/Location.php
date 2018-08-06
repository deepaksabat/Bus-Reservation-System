<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'location_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('trip','read')->redirect();
		$data['title']    = display('list'); 
		#-------------------------------#
		$data['locations'] = $this->location_model->read();
		$data['module'] = "trip";
		$data['page']   = "location/list";   
		echo Modules::run('template/layout', $data); 
	}  

 	public function form($id = null)
	{ 
		$data['title'] = display('add');
		#-------------------------------#
		if (!empty($id)) {   
       		$this->form_validation->set_rules('name', display('location'), "required|max_length[255]");
		} else {
			$this->form_validation->set_rules('name', display('location'),'required|is_unique[trip_location.name]|max_length[255]');
		}
		#------------------------#

		$this->form_validation->set_rules('status',display('status') ,'required');	
		/*-----------------------------------*/
        if ($image = $this->fileupload->do_upload('./application/modules/trip/assets/images/location/', 'image')) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
        }
		#-------------------------------#
		$data['location'] = (Object) $postData = [
			'id' 	 => $this->input->post('id'), 
			'name' 	 => $this->input->post('name'), 
			'description' => $this->input->post('description'), 
			'google_map'  => $this->input->post('google_map'), 
			'image'   	  => (!empty($image)?$image:$this->input->post('old_image')),
			'status' => $this->input->post('status'), 
		]; 
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if (empty($postData['id'])) {

        		$this->permission->method('trip','create')->redirect();

				if ($this->location_model->create($postData)) { 
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("trip/location/form"); 

			} else {

        		$this->permission->method('trip','update')->redirect();

				if ($this->location_model->update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("trip/location/form/".$postData['id']);  
			}
 

		} else { 
			if(!empty($id)) {
				$data['title'] = display('update');
				$data['location']   = $this->location_model->findById($id);
			}
			$data['module'] = "trip";
			$data['page']   = "location/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}

 

	public function delete($id = null) 
	{ 
        $this->permission->method('trip','delete')->redirect();

		if ($this->location_model->delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('trip/location/index');
	}
	 

}
