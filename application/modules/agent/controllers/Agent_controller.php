<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'agent_model'
        ));      
    }

    public function create_agent()
    { 
        $this->permission->method('agent','read')->redirect();
        $data['title'] = display('agent');//agent_picture
        #-------------------------------#
        $this->form_validation->set_rules('agent_first_name',display('agent_first_name'),'required|max_length[50]');
        $this->form_validation->set_rules('agent_second_name',display('agent_second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('agent_company_name',display('agent_company_name'),'max_length[50]');
        $this->form_validation->set_rules('agent_document_id',display('agent_document_id ')  ,'max_length[200]');
            $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/agent/assets/images/', 
            'agent_pic_document'

        );
        $this->load->library('Fileupload');
          $agpic = $this->fileupload->do_upload(
            './application/modules/agent/assets/images/', 
            'agent_picture'

        );
        $this->form_validation->set_rules('agent_phone',display('agent_phone')  ,'required|max_length[200]');
        $this->form_validation->set_rules('agent_mobile',display('agent_mobile'),'max_length[50]');
        $this->form_validation->set_rules('agent_email',display('agent_email ')  ,'max_length[200]');
        $this->form_validation->set_rules('agent_address_line_1',display('agent_address_line_1'),'max_length[50]');
        $this->form_validation->set_rules('agent_address_line_2',display('agent_address_line_2 ')  ,'max_length[200]');
         $this->form_validation->set_rules('agent_address_city',display('agent_address_city'),'max_length[50]');
        $this->form_validation->set_rules('agent_address_zip_code',display('agent_address_zip_code ')  ,'max_length[200]');
         $this->form_validation->set_rules('agent_country',display('agent_country'),'max_length[50]');
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
            'agent_first_name'       => $this->input->post('agent_first_name',true),
            'agent_second_name'      => $this->input->post('agent_second_name',true),
            'agent_company_name'     => $this->input->post('agent_company_name',true),
                'agent_document_id'  => $this->input->post('agent_document_id',true),
                'agent_pic_document' => $img,
                'agent_picture'      =>$agpic,
                'agent_phone'        => $this->input->post('agent_phone',true),
                'agent_mobile'       => $this->input->post('agent_mobile',true),
                'agent_email'        => $this->input->post('agent_email',true),
              'agent_address_line_1' => $this->input->post('agent_address_line_1',true),
              'agent_address_line_2' => $this->input->post('agent_address_line_2',true),
                'agent_address_city' => $this->input->post('agent_address_city',true),
            'agent_address_zip_code' => $this->input->post('agent_address_zip_code',true),
                'agent_country'      => $this->input->post('agent_country',true),
            ];   

            if ($this->agent_model->agent_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_created'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("agent/agent_controller/create_agent"); 

        } else {
            $data['title']  = display('agent');
            $data['module'] = "agent";
            $data['agen']   = $this->agent_model->agent_view();
            $data['page']   = "agent_form";   
            echo Modules::run('template/layout', $data); 
        }   
    }


    public function agent_delete($id = null)
    {
        $this->permission->method('agent','delete')->redirect();
        if($this->agent_model->delete_agent($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('agent/agent_controller/create_agent');
    }

    public function agent_update($id = null)
    { 
        $this->permission->method('agent','update')->redirect();
        $data['title'] = display('agent');
        #-------------------------------#
        $this->form_validation->set_rules('agent_id',display('agent_id'), 'required');
        $this->form_validation->set_rules('agent_first_name',display('agent_first_name'),'required|max_length[50]');
        $this->form_validation->set_rules('agent_second_name',display('agent_second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('agent_company_name',display('agent_company_name'),'max_length[50]');
        $this->form_validation->set_rules('agent_document_id',display('agent_document_id ')  ,'max_length[200]');
            $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/agent/assets/images/', 
            'agent_pic_document'

        );
           $this->load->library('Fileupload');
          $agpic = $this->fileupload->do_upload(
            './application/modules/agent/assets/images/', 
            'agent_picture'

        );
        $this->form_validation->set_rules('agent_phone',display('agent_phone')  ,'required|max_length[200]');
        $this->form_validation->set_rules('agent_mobile',display('agent_mobile'),'max_length[50]');
        $this->form_validation->set_rules('agent_email',display('agent_email')  ,'max_length[200]');
        $this->form_validation->set_rules('agent_address_line_1',display('agent_address_line_1'),'max_length[250]');
        $this->form_validation->set_rules('agent_address_line_2',display('agent_address_line_2')  ,'max_length[250]');
         $this->form_validation->set_rules('agent_address_city',display('agent_address_city'),'max_length[50]');
        $this->form_validation->set_rules('agent_address_zip_code',display('agent_address_zip_code ')  ,'max_length[200]');
         $this->form_validation->set_rules('agent_country',display('agent_country'),'max_length[50]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                'agent_id'  =>$this->input->post('agent_id',true),
                'agent_first_name'       => $this->input->post('agent_first_name',true),
                'agent_second_name'     => $this->input->post('agent_second_name',true),
                'agent_company_name'    => $this->input->post('agent_company_name',true),
                'agent_document_id' => $this->input->post('agent_document_id',true),
                'agent_pic_document'=>(!empty($img) ? $img : $this->input->post('agent_pic_document')),
                'agent_picture'      =>(!empty($agpic) ? $agpic : $this->input->post('agent_picture')),
                'agent_phone'       => $this->input->post('agent_phone',true),
                'agent_mobile'      => $this->input->post('agent_mobile',true),
                'agent_email'       => $this->input->post('agent_email',true),
                'agent_address_line_1' => $this->input->post('agent_address_line_1',true),
                'agent_address_line_2'=> $this->input->post('agent_address_line_2',true),
                'agent_address_city'=> $this->input->post('agent_address_city',true),
                'agent_address_zip_code'=> $this->input->post('agent_address_zip_code',true),
                'agent_country'     => $this->input->post('agent_country',true),
            ];   

            if ($this->agent_model->update_agent($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("agent/agent_controller/create_agent");



        } else {
           $data['title']      = display('update');
            $data['data']      =$this->agent_model->agent_updateForm($id);
            $data['bb']      =$this->agent_model->get_id($id);
            $data['module']    = "agent";    
            $data['page']      = "update_agent_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }

    public function agent_details()
    { 
        $this->permission->method('agent','read')->redirect();
        $id = $this->uri->segment(4);
        $data['title']  = display('details');  
        $data['detls']   = $this->agent_model->details($id);
        $data['module'] = "agent";
        $data['page']   = "agent_details";   
        echo Modules::run('template/layout', $data); 

    }

}
