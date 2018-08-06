<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fitness_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'fitness_model'
        ));      
    } 

    public function create_fitness()
    {  
        $this->permission->method('fitness','read')->redirect();
        #-------------------------------#
        $this->form_validation->set_rules('fitness_name',display('fitness_name'),'required|max_length[50]');
        $this->form_validation->set_rules('fitness_description',display('fitness_description ')  ,'max_length[200]');
        #-------------------------------#


        if ($this->form_validation->run()) 
        {

            $postData = [
                'fitness_name'         => $this->input->post('fitness_name',true),
                'fitness_description'  => $this->input->post('fitness_description',true),
            ];   

            if ($this->fitness_model->fitness_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("fitness/fitness_controller/create_fitness");

        } else {
            $data['title']  = display('fitness');
            $data['module'] = "fitness";
            $data['result'] = $this->fitness_model->read_fitness();
            $data['page']   = "fit_form";   
            echo Modules::run('template/layout', $data); 
        }   
    }

    public function fit_delete($id = null){
        $this->permission->method('fitness','delete')->redirect();
        if($this->fitness_model->fitness_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('fitness/fitness_controller/create_fitness');
    }

    public function update_fitness($id = null)
    { 
        $this->permission->method('fitness','update')->redirect();
        $this->form_validation->set_rules('fitness_id',display('fitness_id'));
        $this->form_validation->set_rules('fitness_name',display('fitness_name'),'required|max_length[50]');
        $this->form_validation->set_rules('fitness_description',display('fitness_description ')  ,'max_length[200]');
        #-------------------------------#
        if ($this->form_validation->run()) {

            $Data = [
                'fitness_id'        =>$this->input->post('fitness_id'),
                'fitness_name'     => $this->input->post('fitness_name',true),
                'fitness_description'=>$this->input->post('fitness_description',true),
            ];   

            if ($this->fitness_model->update_fit($Data)) { 
                $this->session->set_flashdata('message', display('update_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("fitness/fitness_controller/create_fitness");

        } else {
            $data['title']      = display('update');
            $data['data']      =$this->fitness_model->fitness_updateForm($id);
            $data['module']    = "fitness";    
            $data['page']      = "update_fitness_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }


    public function create_fit_period()
    { 
        $this->permission->method('fitness','create')->redirect();
        $data['title'] = display('fitness_period');
        #-------------------------------#
        $this->form_validation->set_rules('fitness_id',display('fitness_id'),'required|max_length[50]');
        $this->form_validation->set_rules('vehicle_id',display('vehicle_id ')  ,'required|max_length[200]');
         $this->form_validation->set_rules('start_date',display('start_date'),'required|max_length[50]');
        $this->form_validation->set_rules('end_date',display('end_date')  ,'required|max_length[200]');
         $this->form_validation->set_rules('start_milage',display('start_milage'));
        $this->form_validation->set_rules('end_milage',display('end_milage '));
        #-------------------------------#
        if ($this->form_validation->run()) {

            $postData = [
                'fitness_id'   => $this->input->post('fitness_id',true),
                'vehicle_id'   => $this->input->post('vehicle_id',true),
                'start_date'   => $this->input->post('start_date',true),
                'end_date'     => $this->input->post('end_date',true),
                'start_milage' => $this->input->post('start_milage',true),
                'end_milage'   => $this->input->post('end_milage',true),
            ];   

            if ($this->fitness_model->fitness_period_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("fitness/fitness_controller/create_fit_period");

        } else {
            $data['module']    = "fitness";
            $data['dropdown']  = $this->fitness_model->fitness_dropdown();
            $data['vehicle']   = $this->fitness_model->vehiclesNo();
            $data['period']    = $this->fitness_model->fit_pr_view();
            $data['page']      = "fit_period_form";   
            echo Modules::run('template/layout', $data); 
        }   
    }  

    public function delete_fitperiod($id=null){
        $this->permission->method('fitness','delete')->redirect();
        if($this->fitness_model->fit_period_delete($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('fitness/fitness_controller/create_fit_period');
    } 

    public function update_fitness_period($id = null)
    { 
        $this->permission->method('fitness','update')->redirect();
        $this->form_validation->set_rules('id',display('id'),'required'); 
        $this->form_validation->set_rules('fitness_id',display('fitness_id'),'required|max_length[50]');
        $this->form_validation->set_rules('vehicle_id',display('vehicle_id ')  ,'required|max_length[200]');
         $this->form_validation->set_rules('start_date',display('start_date'),'required|max_length[50]');
        $this->form_validation->set_rules('end_date',display('end_date')  ,'required|max_length[200]');
         $this->form_validation->set_rules('start_milage',display('start_milage'));
        $this->form_validation->set_rules('end_milage',display('end_milage '));
        #-------------------------------#
        if ($this->form_validation->run()) {

        $Data = [
            'id'             =>$this->input->post('id',true),
            'fitness_id'      => $this->input->post('fitness_id',true),
            'vehicle_id'      => $this->input->post('vehicle_id',true),
            'start_date'      => $this->input->post('start_date',true),
            'end_date'       => $this->input->post('end_date',true),
            'start_milage'    => $this->input->post('start_milage',true),
            'end_milage'     => $this->input->post('end_milage',true),
        ];   

        if ($this->fitness_model->update_fit_period($Data)) { 
            $this->session->set_flashdata('message', display('update_successfully'));
        } else {
            $this->session->set_flashdata('exception', display('please_try_again'));
        }
        redirect("fitness/fitness_controller/create_fit_period");

        } else {
            $data['title']     = display('update');
            $data['data']      =$this->fitness_model->fit_period_updateForm($id);
            $data['module']    = "fitness"; 
            $data['dropdown']  =$this->fitness_model->fitness_dropdown();
            $data['vehicle']  =$this->fitness_model->vehiclesNo();
            $data['bb']       = $this->fitness_model->get_id($id);    
            $data['page']      = "update_fitness_period_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }


    public function create_n_vehicles()
    { 
        $this->permission->method('fitness','create')->redirect();
        $data['title'] = display('fitness_period');
        $this->form_validation->set_rules('reg_no',display('reg_no'),'required|max_length[100]|is_unique[fleet_registration.reg_no]');
        #-------------------------------#
        $this->form_validation->set_rules('engine_no',display('engine_no'),'max_length[50]');
        $this->form_validation->set_rules('model_no',display('model_no')  ,'required|max_length[200]');
        $this->form_validation->set_rules('owner',display('owner'),'max_length[50]');
        #-------------------------------#
        if ($this->form_validation->run()) {

            $postData = [
                'reg_no'    =>  $this->input->post('reg_no',true),
                'engine_no'      => $this->input->post('engine_no',true),
                'model_no'       => $this->input->post('model_no',true),
                'owner'    => $this->input->post('owner',true),
            ];   

            if ($this->fitness_model->vehicles_create($postData)) { 
                $this->session->set_flashdata('message', display('save_successfully'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("fitness/fitness_controller/create_fit_period");

        } else {
            $data['dropdown']  = $this->fitness_model->fitness_dropdown();
            $data['vehicle']   = $this->fitness_model->vehiclesNo();
            $data['period']    = $this->fitness_model->fit_pr_view();
            $data['module']    = "fitness";  
            $data['page']      = "fit_period_form";    
            echo Modules::run('template/layout', $data); 
        }   
    }  


}
