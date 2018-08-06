<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'price_model'
        ));      
    }

    public function create_price()
    { 
        $this->permission->method('price', 'read')->redirect();
        #-------------------------------#
        $this->form_validation->set_rules('route_id',display('route_id'),'required|max_length[20]');
        $this->form_validation->set_rules('vehicle_type_id',display('vehicle_type_id ')  ,'required|max_length[20]');
        $this->form_validation->set_rules('price',display('price'),'required|max_length[20]');
        $this->form_validation->set_rules('group_price_per_person',display('group_price_per_person')  ,'max_length[20]');
        $this->form_validation->set_rules('group_size',display('group_size'),'max_length[20]');
        $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
      
        #-------------------------------#
        if ($this->form_validation->run()) {

            $postData = [
                'route_id'       => $this->input->post('route_id',true),
                'vehicle_type_id'=> $this->input->post('vehicle_type_id',true),
                'price'       => $this->input->post('price',true),
                'group_price_per_person' => $this->input->post('group_price_per_person',true),
                'group_size' => $this->input->post('group_size',true),
            ];   

            if ($this->price_model->price_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("price/price_controller/create_price");
        } else {
            $data['title'] = display('price_list');
            $data['module']= "price";
            $data['currency'] = $currency;
            $data['rout']  = $this->price_model->rout();
            $data['vehc']  = $this->price_model->vehicles();
            $data['pri']    = $this->price_model->price_view();
            $data['page']  = "price_form";   
            echo Modules::run('template/layout', $data); 
        }   
    }

    public function price_delete($id=null){
        $this->permission->method('price','delete')->redirect();
        if($this->price_model->delete_price($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('price/price_controller/create_price');
    }

    public function price_update($id = null)
    { 
        $this->permission->method('price','update')->redirect();
        #-------------------------------#
         $this->form_validation->set_rules('price_id',display('price_id'));
        $this->form_validation->set_rules('route_id',display('route_id'),'required|max_length[20]');
        $this->form_validation->set_rules('vehicle_type_id',display('vehicle_type_id ')  ,'required|max_length[20]');
        $this->form_validation->set_rules('price',display('price'),'required|max_length[20]');
        $this->form_validation->set_rules('group_price_per_person',display('group_price_per_person ')  ,'required|max_length[20]');
        $this->form_validation->set_rules('group_size',display('group_size'),'required|max_length[20]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                'price_id'  =>$this->input->post('price_id',true),
                'route_id' => $this->input->post('route_id',true),
                'vehicle_type_id'=> $this->input->post('vehicle_type_id',true),
                'price'  => $this->input->post('price',true),
                'group_price_per_person' => $this->input->post('group_price_per_person',true),
                'group_size'    => $this->input->post('group_size',true),
            ];   

            if ($this->price_model->update_price($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("price/price_controller/create_price");

        } else {
            $data['title']     = display('update');
            $data['data']      =$this->price_model->price_updateForm($id);
            $data['rout']      = $this->price_model->rout();
            $data['vehc']      = $this->price_model->vehicles();
            $data['bb']        =$this->price_model->get_id($id);
            $data['module']    = "price";    
            $data['page']      = "update_price_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }



}
