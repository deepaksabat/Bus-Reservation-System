<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'hr_model'
        ));      
    }
 
    public function hrView()
    {   
        $this->permission->method('hr','read')->redirect();
        $data['title']  = display('employee_list');  
        $data['hr']   = $this->hr_model->hr_view();
        $data['module'] = "hr";
        $data['page']   = "viewhr";   
        echo Modules::run('template/layout', $data); 
    }    


    public function create_hr()
    { 
        $this->permission->method('hr','create')->redirect();
        $data['title'] = display('create_hr');
        #-------------------------------#
        $this->form_validation->set_rules('first_name',display('first_name'),'required|max_length[50]');
        $this->form_validation->set_rules('second_name',display('second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('position',display('position'),'required|max_length[50]');
        $this->form_validation->set_rules('phone_no',display('phone_no ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('email_no',display('email_no ')  ,'max_length[200]');
        $this->form_validation->set_rules('document_id',display('document_id ')  ,'max_length[200]');
         $this->form_validation->set_rules('address_line_1',display('address_line_1'),'max_length[50]');
        $this->form_validation->set_rules('address_line_2',display('address_line_2 ')  ,'max_length[200]');
            $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/hr/assets/images/', 
            'picture'

        );
           $this->load->library('Myupload');
        $doc = $this->myupload->do_upload(
            './application/modules/hr/assets/images/', 
            'document_pic'

        );
        $this->form_validation->set_rules('blood_group',display('blood_group')  ,'max_length[20]');
       
        $this->form_validation->set_rules('country',display('country ')  ,'max_length[30]');
       
         $this->form_validation->set_rules('city',display('city'),'max_length[50]');
        $this->form_validation->set_rules('zip',display('zip ')  ,'max_length[200]');
         
      
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'first_name'   => $this->input->post('first_name',true),
                'second_name'  => $this->input->post('second_name',true),
                'position'     => $this->input->post('position',true),
                'phone_no'     => $this->input->post('phone_no',true),
                'picture'  => $img,
                'document_pic'=> $doc,
                'email_no'    => $this->input->post('email_no',true),
                'document_id'  => $this->input->post('document_id',true),
                'address_line_1'=> $this->input->post('address_line_1',true),
                'address_line_2'    => $this->input->post('address_line_2',true),
                'blood_group'      => $this->input->post('blood_group',true),
                'country'      => $this->input->post('country',true),
                'city'      => $this->input->post('city',true),
                'zip'      => $this->input->post('zip',true),
            ];   

            if ($this->hr_model->hr_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("hr/hr_controller/create_hr");
        } else {
            $data['module'] = "hr";
            $data['hr']   = $this->hr_model->hr_view();
            $data['cat']   = $this->hr_model->catagory();
            $data['page']   = "hr_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }


    public function hr_delete($id = null)
    {
        $this->permission->method('hr','delete')->redirect();
        if($this->hr_model->delete_hr($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('hr/hr_controller/hrView');
    }

    public function hr_update($id = null)
    { 
        $this->permission->method('hr','update')->redirect();
        $data['title'] = display('hr');
        #-------------------------------#
         $this->form_validation->set_rules('id',display('id'));
         $this->form_validation->set_rules('first_name',display('first_name'),'max_length[50]');
        $this->form_validation->set_rules('second_name',display('second_name ')  ,'required|max_length[200]');
        $this->form_validation->set_rules('position',display('position'),'max_length[50]');
        $this->form_validation->set_rules('phone_no',display('phone_no ')  ,'required|max_length[30]');
        $this->form_validation->set_rules('email_no',display('email_no ')  ,'max_length[30]');
        $this->form_validation->set_rules('document_id',display('document_id ')  ,'max_length[200]');
         $this->form_validation->set_rules('address_line_1',display('address_line_1'),'max_length[50]');
        $this->form_validation->set_rules('address_line_2',display('address_line_2')  ,'max_length[200]');
        $this->load->library('Fileupload');
          $img = $this->fileupload->do_upload(
            './application/modules/hr/assets/images/', 
            'picture'

        ); 

        $this->load->library('Myupload');
        $doc = $this->myupload->do_upload(
            './application/modules/hr/assets/images/', 
            'document_pic'

        );
        $this->form_validation->set_rules('blood_group',display('blood_group')  ,'max_length[20]');
        $this->form_validation->set_rules('country',display('country ')  ,'max_length[30]');
        $this->form_validation->set_rules('city',display('city'),'max_length[50]');
        $this->form_validation->set_rules('zip',display('zip ')  ,'max_length[200]');
        #-------------------------------#
        if ($this->form_validation->run() === true) 
        {
            $Data = [
                'id'  =>$this->input->post('id',true),
                'first_name'   => $this->input->post('first_name',true),
                'second_name'  => $this->input->post('second_name',true),
                'position'     => $this->input->post('position',true),
                'phone_no'     => $this->input->post('phone_no',true),
                'picture'  =>(!empty($img) ? $img : $this->input->post('picture')),
                'document_pic' =>(!empty($doc) ? $doc : $this->input->post('document_pic')),
                'email_no'    => $this->input->post('email_no',true),
                'document_id'  => $this->input->post('document_id',true),
                'address_line_1'=> $this->input->post('address_line_1',true),
                'address_line_2'    => $this->input->post('address_line_2',true),
                'blood_group'      => $this->input->post('blood_group',true),
                'country'      => $this->input->post('country',true),
                'city'      => $this->input->post('city',true),
                'zip'      => $this->input->post('zip',true),
            ];   

            if ($this->hr_model->update_hr($Data)) { 
                $this->session->set_flashdata('message', display('update_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("hr/hr_controller/hrView");

        } else {
           $data['title']      = display('update');
            $data['data']      =$this->hr_model->hr_updateForm($id);
            $data['cat']   = $this->hr_model->catagory();
            $data['bb']   = $this->hr_model->get_id($id);
            $data['module']    = "hr";    
            $data['page']      = "update_hr_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }



    public function create_emtype()
    { 
        $this->permission->method('hr','create')->redirect();
        $data['title'] = display('employee_type'); 
        #-------------------------------#
        $this->form_validation->set_rules('type_name',display('type_name'),'required|max_length[50]');
        $this->form_validation->set_rules('details',display('details'),'max_length[100]');
        #-------------------------------#
        if ($this->form_validation->run()) {
            $postData = [
                'type_name'   => $this->input->post('type_name',true),
                'details'    => $this->input->post('details',true),
            ];   

            if ($this->hr_model->type_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("hr/hr_controller/create_emtype");
 
        } else {
            $data['module'] = "hr";
            $data['hr']   = $this->hr_model->emptype_view();
            $data['page']   = "emtype_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }
    
    public function typeView()
    {   
        $this->permission->method('hr','read')->redirect();
        $data['title']  = display('employee_type');  
        $data['type']   = $this->hr_model->emptype_view();
        $data['module'] = "hr";
        $data['page']   = "type_view";   
        echo Modules::run('template/layout', $data); 
    } 

    public function type_delete($id=null)
    {
        $this->permission->method('hr','delete')->redirect();
        if($this->hr_model->delete_emtype($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('hr/hr_controller/typeView');
    }


    public function type_update($id = null)
    {  
        $this->permission->method('hr','update')->redirect();
        #-------------------------------#
         $this->form_validation->set_rules('type_id',display('type_id'));
        $this->form_validation->set_rules('type_name',display('type_name'),'required|max_length[50]');
        $this->form_validation->set_rules('details',display('details'),'max_length[100]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                'type_id'   =>$this->input->post('type_id',true),
                'type_name' => $this->input->post('type_name',true),
                'details' => $this->input->post('details',true),
            ];   

            if ($this->hr_model->update_type($Data)) { 
                $this->session->set_flashdata('message', display('update_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("hr/hr_controller/typeView"); 

        } else {
            $data['title']  = display('employee_type');  
            $data['data']      =$this->hr_model->type_updateForm($id);
            $data['module']    = "hr";    
            $data['page']      = "update_type_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }


    public function emp_details($id = null)
    {  
        $this->permission->method('hr','read')->redirect();
        $data['title']  = display('details');  
        $data['details']   = $this->hr_model->details($id);
        $data['module'] = "hr";
        $data['page']   = "empl_details";   
        echo Modules::run('template/layout', $data);  
    }


    public function download() 
    {
        $this->load->helper('download');
        $filepath = $this->input->get('file');
        if (file_exists($filepath)) {
            return force_download($filepath, null);
        } else {
            return false;
        }
    } 


}
