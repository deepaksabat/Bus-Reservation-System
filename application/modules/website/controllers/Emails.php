<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emails extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'Email_model'
		));		 
	}

    /*
    |____________________________________________________________________
    |  
    | email / 
    |____________________________________________________________________ 
    |
    */ 

    public function form()
    {
   
        $data['title'] = display('email');
        #-------------------------------#
        $this->form_validation->set_rules('protocol',display('protocol'),'required|max_length[50]');
        $this->form_validation->set_rules('smtp_host',display('smtp_host'),'required|max_length[50]');
        $this->form_validation->set_rules('smtp_pass',display('smtp_pass'),'required|max_length[50]');
         $this->form_validation->set_rules('smtp_user',display('smtp_user'),'required|max_length[50]');
       
        #-------------------------------# 

        $data['email'] = (object)$postData = [
            'id'           => $this->input->post('id'),
            'protocol'     => $this->input->post('protocol'),
            'smtp_host'    => $this->input->post('smtp_host'),
            'smtp_port'    => $this->input->post('smtp_port'),
            'smtp_user'    => $this->input->post('smtp_user'),
            'smtp_pass'    => $this->input->post('smtp_pass'),
            'mailtype'     => $this->input->post('mailtype'),
        ]; 
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            #if empty $id then insert data
        if (empty($postData['id'])) {
            if ($this->Email_model->create($postData)) {
                #set success message
                $this->session->set_flashdata('message',display('save_successfully'));
            } else {
                #set exception message
                $this->session->set_flashdata('exception',display('please_try_again'));
            }
        } else {
            if ($this->Email_model->update($postData)) {
                #set success message
                $this->session->set_flashdata('message',display('update_successfully'));
            } else {
                #set exception message
                $this->session->set_flashdata('exception', display('please_try_again'));
            } 
            }
 
            redirect('website/emails/form');

        } else { 

            if (empty($postData['id'])) {
                $data['email'] = $this->Email_model->read(); 
            }

            $data['module']     = "website";
            $data['page']       = "email/form";   
            echo Modules::run('template/layout', $data); 
        } 
    } 


    

}
