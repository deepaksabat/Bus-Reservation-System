<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downtime extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Downtime_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('ticket','read')->redirect();
		$data['title']    = display('list'); 
		
         //$data['downtime'] = $this->downtime_model->read();
        
		$data['module'] = "ticket";
		$data['page']   = "downtime/list";   
		echo Modules::run('template/layout', $data); 
	}  
  

    /*
    |____________________________________________________________________
    |  
    | downtime / 
    |____________________________________________________________________ 
    |
    */ 

    public function form()
    {
   
        $data['title'] = display('downtime');
        #-------------------------------#
        $this->form_validation->set_rules('downtime',display('downtime'),'required|max_length[50]');
        
       
        #-------------------------------# 

        $data['downtime'] = (object)$postData = [
            'id'          => $this->input->post('id'),
            'downtime'    => $this->input->post('downtime'),
        ]; 
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            #if empty $id then insert data
            if (empty($postData['id'])) {
                if ($this->Downtime_model->create($postData)) {
                    #set success message
                    $this->session->set_flashdata('message',display('save_successfully'));
                } else {
                    #set exception message
                    $this->session->set_flashdata('exception',display('please_try_again'));
                }
            } else {
                if ($this->Downtime_model->update($postData)) {
                    #set success message
                    $this->session->set_flashdata('message',display('update_successfully'));
                } else {
                    #set exception message
                    $this->session->set_flashdata('exception', display('please_try_again'));
                } 
            }
 
            redirect('ticket/downtime/form');

        } else { 

            if (empty($postData['id'])) {
                $data['downtime'] = $this->Downtime_model->read(); 
            }

            $data['module']     = "ticket";
            $data['page']       = "downtime/list";   
            echo Modules::run('template/layout', $data); 
        } 
    } 


    public function update()
    { 
        $this->form_validation->set_rules('id', display('add_to_website')  ,'max_length[11]');
        #-------------------------------# 
        $postData = [
            'id'             => $this->input->post('id'), 
            'add_to_website' => $this->input->post('data'),  
        ]; 
        $data['result'] = $postData; 
        #-------------------------------#
        if ($this->form_validation->run()) { 

            if ($this->downtime_model->update($postData)) { 
                $data['status'] = true;
                $data['success'] = display('update_successfully');
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




	public function delete($id = null) 
	{ 
        $this->permission->method('ticket','delete')->redirect();

		if ($this->downtime_model->delete($id)) { 
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('ticket/downtime/index');
	}
	  

}
