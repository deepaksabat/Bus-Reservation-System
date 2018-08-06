<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'bank_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('account','read')->redirect();
		$data['title']    = display('list'); 
		#-------------------------------#
		$data['bank'] = $this->bank_model->read();
		$data['module'] = "account";
		$data['page']   = "bank/list";   
		echo Modules::run('template/layout', $data); 
	}  

 	public function form($id = null)
	{ 
		$data['title'] = display('add');
		#-------------------------------#
		$this->form_validation->set_rules('bank_name',display('bank')  ,'required|max_length[255]');
		$this->form_validation->set_rules('account_details',display('account_details'));
		$this->form_validation->set_rules('instruction',display('instruction'));
		if ($bank_logo = $this->fileupload->do_upload('./application/modules/account/assets/images/', 'bank_logo')) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
        }
		#-------------------------------#
		$data['bank'] = (Object) $postData = [
			'id' 	        => $this->input->post('id'), 
			'bank_name' 	 => $this->input->post('bank_name'), 
			'account_details' => $this->input->post('account_details'),
			'instruction' => $this->input->post('instruction'), 
			'bank_logo' => (!empty($bank_logo)?$bank_logo:$this->input->post('old_image')),  
		];  
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if (empty($postData['id'])) {

        		$this->permission->method('account','create')->redirect();


			$this->session->set_flashdata('message', display('image_upload_successfully'));

				if ($this->bank_model->create($postData)) { 
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("account/bank/form"); 



			} else {

        		$this->permission->method('account','update')->redirect();


  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
              
				if ($this->bank_model->update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("account/bank/form/".$postData['id']);  

          


			}
 

		} else { 
			if(!empty($id)) {
				$data['title'] = display('update');
				$data['bank']   = $this->bank_model->findById($id);
			}
			$data['module'] = "account";
			$data['page']   = "bank/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}
 

	public function delete($id = null) 
	{ 
        $this->permission->method('account','delete')->redirect();

		if ($this->bank_model->delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('account/bank/index');
	}
	 

}
