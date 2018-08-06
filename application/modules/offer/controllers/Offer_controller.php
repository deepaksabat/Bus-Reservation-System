<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'offer_model','price/price_model'
        ));      
    }
    

    public function create_offer()
    { 
        $this->permission->method('offer','read')->redirect();
        $data['title'] = display('offer');
        #-------------------------------#
        $this->form_validation->set_rules('offer_name',display('offer_name'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_start_date',display('offer_start_date')  ,'required|max_length[20]');
        $this->form_validation->set_rules('offer_end_date',display('offer_end_date'),'required|max_length[20]');
        $this->form_validation->set_message('is_unique', '%s is already exits Please try another!!.');
        $this->form_validation->set_rules('offer_code',display('offer_code')  ,'required|is_unique[ofr_offer.offer_code]|max_length[50]');
        $this->form_validation->set_rules('offer_discount',display('offer_discount'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_terms',display('offer_terms')  ,'max_length[200]');
        $this->form_validation->set_rules('offer_route_id',display('offer_route_id'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_number',display('offer_number')  ,'required|max_length[20]');
        
      $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $postData = [
                'offer_name'             => $this->input->post('offer_name',true),
                'offer_start_date'       => $this->input->post('offer_start_date',true),
                'offer_end_date'         => $this->input->post('offer_end_date',true),
                'offer_code'             => $this->input->post('offer_code',true),
                'offer_discount'     => $this->input->post('offer_discount',true),
                'offer_terms'        => $this->input->post('offer_terms',true),
                'offer_route_id'         => $this->input->post('offer_route_id',true),
                'offer_number'       => $this->input->post('offer_number',true),
            ];   

            if ($this->offer_model->offer_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("offer/offer_controller/create_offer"); 
        } else {
            $data['title']  = display('offer');
            $data['module'] = "offer";
            $data['currency']   = $currency;
            $data['rout'] = $this->offer_model->rout(); 
            $data['page']   = "offer_form";  
            $data['ofer']   = $this->offer_model->offer_view(); 
          echo Modules::run('template/layout', $data); 
        }   
    }


    public function offer_delete($id=null){
        $this->permission->method('offer', 'delete')->redirect();
        if($this->offer_model->delete_offer($id)) 
        {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('offer/offer_controller/create_offer');
    }

    public function offer_update($id = null)
    { 
        $this->permission->method('offer', 'update')->redirect();
        $data['title'] = display('offer');
        #-------------------------------#
         $this->form_validation->set_rules('offer_id', display('offer_id'), 'required'); 
        $this->form_validation->set_rules('offer_name', display('offer_name'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_start_date',display('offer_start_date')  ,'required|max_length[20]');
        $this->form_validation->set_rules('offer_end_date',display('offer_end_date'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_code',display('offer_code')  ,'required|max_length[50]');
        $this->form_validation->set_rules('offer_discount',display('offer_discount'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_terms',display('offer_terms')  ,'max_length[200]');
        $this->form_validation->set_rules('offer_route_id',display('offer_route_id'),'required|max_length[20]');
        $this->form_validation->set_rules('offer_number',display('offer_number')  ,'required|max_length[20]');

        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
                'offer_id'  =>$this->input->post('offer_id',true),
                'offer_name'       => $this->input->post('offer_name',true),
                'offer_start_date' => $this->input->post('offer_start_date',true),
                'offer_end_date'   => $this->input->post('offer_end_date',true),
                'offer_code'       => $this->input->post('offer_code',true),
                'offer_discount'   => $this->input->post('offer_discount',true),
                'offer_terms'      => $this->input->post('offer_terms',true),
                'offer_route_id'   => $this->input->post('offer_route_id',true),
                'offer_number'     => $this->input->post('offer_number',true),
            ];   

            if ($this->offer_model->update_offer($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("offer/offer_controller/create_offer");

        } else {
            $data['title']      = display('update');
            $data['data']      =$this->offer_model->offer_updateForm($id);
            $data['rout'] = $this->offer_model->rout();
            $data['bb'] = $this->offer_model->get_id($id);
            $data['module']    = "offer";    
            $data['page']      = "update_offer_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }

   
    public function offer_code(){
        $offer_code=$this->input->post('offer_code');
        $result = $this->db->get('ofr_offer')->where('offer_code',$offer_code);

        if ($result->num_rows() > 0) {
            echo 0;
        } else {
            echo 1;
        }
        echo Modules::run('template/layout', $data); 
   }

    public function view_details(){ 
        $this->permission->method('offer', 'read')->redirect();
        $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
        $id = $this->uri->segment(4);
        $data['title']  = display('Details');  
        $data['detls']   = $this->offer_model->details($id);
        $data['module'] = "offer";
        $data['currency']   = $currency;
        $data['page']   = "offer_details";   
        echo Modules::run('template/layout', $data); 
    }
}
