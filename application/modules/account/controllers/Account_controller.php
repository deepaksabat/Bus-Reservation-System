<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_controller extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model(array(
            'account_model','price/price_model'
        ));      
    }
   
    public function create_account()
    { 
        $this->permission->module('account','read')->redirect();
        $data['title'] = display('account');
        #-------------------------------#
        $this->form_validation->set_rules('account_name',display('account_name'),'required|max_length[150]');
        $this->form_validation->set_rules('account_type',display('account_type'),'required|max_length[10]');
        
      
        #-------------------------------#
        if ($this->form_validation->run() === true) 
        {

            $postData = [
                'account_name'      => $this->input->post('account_name',true),
                'account_type'      => $this->input->post('account_type',true),
            ];   

            if ($this->account_model->account_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/account_controller/create_account");

        } else {
            $data['title']  = display('account');
            $data['module'] = "account";
            $data['acview'] = $this->account_model->account_view();
            $data['page']   = "account_form";   
          echo Modules::run('template/layout', $data); 
        }   
    }

    public function account_delete($id=null)
    {
        $this->permission->module('account','delete')->redirect();
        if($this->account_model->delete_account($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('account/account_controller/create_account');
    }

    public function account_update($id = null)
    { 
        $this->permission->module('account','update')->redirect();
        $data['title'] = display('price');
        #-------------------------------#
         $this->form_validation->set_rules('account_id',display('account_id'));
        $this->form_validation->set_rules('account_name',display('account_name'),'required|max_length[150]');
        $this->form_validation->set_rules('account_type',display('account_type'),'required|max_length[20]');
        #-------------------------------#
        if ($this->form_validation->run() === true) {

            $Data = [    
            'account_id'   =>$this->input->post('account_id',true),
            
            'account_name' => $this->input->post('account_name',true),
            'account_type' => $this->input->post('account_type',true),
            ];   

            if ($this->account_model->update_account($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/account_controller/create_account");



        } else {
           $data['title']      = display('update');
            $data['data']      =$this->account_model->account_updateForm($id);
            $data['module']    = "account";    
            $data['page']      = "update_account_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }
 

    public function create_transaction()
    { 
        $this->permission->module('account','read')->redirect();
        $data['title'] = display('account');
        #-------------------------------#
        $this->form_validation->set_rules('account_id',display('account_id'),'required|max_length[150]');
        $this->form_validation->set_rules('transaction_description',display('transaction_description'),'max_length[200]');

         $this->form_validation->set_rules('amount',display('amount'),'required|max_length[150]');
        $this->form_validation->set_rules('pass_book_id',display('pass_book_id'),'max_length[200]');
         $this->form_validation->set_rules('trip_id',display('trip_id'),'max_length[150]');
        $this->form_validation->set_rules('payment_id',display('payment_id'),'max_length[200]');

        $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
        #-------------------------------#
        if ($this->form_validation->run()) 
        {

            $postData = [
                'account_id'       => $this->input->post('account_id',true),
                'transaction_description'   => $this->input->post('transaction_description',true),

                'amount'        => $this->input->post('amount',true),
                'pass_book_id'  => $this->input->post('pass_book_id',true),
                'trip_id'       => $this->input->post('trip_id',true),
                'payment_id'    => $this->input->post('payment_id',true),
                'create_by_id'  => $this->session->userdata('id'),
            ];   

            if ($this->account_model->trans_create($postData)) { 
                $this->session->set_flashdata('message', display('successfully_saved'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/account_controller/create_transaction");

        } else { 
            $data['title']      = display('account_transaction');
            $data['module']     = "account";
            $data['currency']   = $currency;
            $data['accountlist']=$this->account_model->accountlist();
            $data['acc']        =$this->account_model->acc();
            $data['acctrans']   =$this->account_model->trans_view(); 
            $data['page']       = "transaction_form";   
            echo Modules::run('template/layout', $data);  
        }   
    } 

    public function transaction_delete($id = null)
    {
        $this->permission->module('account','delete')->redirect();
        if($this->account_model->delete_trans($id)) {
            #set success message
            $this->session->set_flashdata('message',display('delete_successfully'));
        } else {
            #set exception message
            $this->session->set_flashdata('exception',display('please_try_again'));
        }
        redirect('account/account_controller/create_transaction');
    }

    public function transaction_update($id = null, $account_type = null)
    { 
        $this->permission->module('account','update')->redirect();
        $data['title'] = display('transaction');
        #-------------------------------#
         $this->form_validation->set_rules('account_tran_id',display('account_tran_id'));
         $this->form_validation->set_rules('account_id',display('account_id'),'required|max_length[150]');
        $this->form_validation->set_rules('transaction_description',display('transaction_description'),'max_length[200]');

         $this->form_validation->set_rules('amount',display('amount'),'required|max_length[150]');
        $this->form_validation->set_rules('pass_book_id',display('pass_book_id'),'max_length[200]');
         $this->form_validation->set_rules('trip_id',display('trip_id'),'max_length[150]');
        $this->form_validation->set_rules('payment_id',display('payment_id'),'max_length[200]');
        #-------------------------------#
        if ($this->form_validation->run()) {

            $Data = [    
                'account_tran_id'     =>$this->input->post('account_tran_id',true),
                'account_id'          => $this->input->post('account_id',true),
                'transaction_description' => $this->input->post('transaction_description', true),
                'amount'              => $this->input->post('amount',true),
                'pass_book_id'        => $this->input->post('pass_book_id',true),
                'trip_id'             => $this->input->post('trip_id',true),
                'payment_id'          => $this->input->post('payment_id',true),
                'create_by_id'        => $this->session->userdata('id'),
            ];   

            if ($this->account_model->update_trans($Data)) { 
                $this->session->set_flashdata('message', display('successfully_updated'));
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
            redirect("account/account_controller/create_transaction");
        } else {
            $data['title']     = display('update');
            $data['module']    = "account";  
            $data['data']      = $this->account_model->details($id);
            $data['accountlist']=$this->account_model->acdropdown($account_type); 
            $data['page']      = "update_trans_form";   
            echo Modules::run('template/layout', $data);  
        }   
    }
 

    public function view_details()
    {
        $this->permission->module('account','read')->redirect();
         $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
        $id = $this->uri->segment(4);
        $data['title']    = display('details');  
        $data['detail']   = $this->account_model->details($id); 
        $data['currency'] = $currency;
        $data['module']   = "account";
        $data['page']     = "account_details";   
        echo Modules::run('template/layout', $data); 
    }

}
