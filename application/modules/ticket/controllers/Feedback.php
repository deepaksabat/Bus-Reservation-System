<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'feedback_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('ticket','read')->redirect();
		$data['title']    = display('list'); 
		#-------------------------------#
        #
        #pagination starts
        #
        $config["base_url"] = base_url('ticket/feedback/index');
        $config["total_rows"] = $this->db->count_all('tkt_feedback');
        $config["per_page"] = 25;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last"; 
        $config["first_link"] = "First"; 
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';  
        $config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["feedbacks"] = $this->feedback_model->read($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #    
		$data['module'] = "ticket";
		$data['page']   = "feedback/list";   
		echo Modules::run('template/layout', $data); 
	}  
  

    /*
    |____________________________________________________________________
    |  
    | FEEDBACK / RATING 
    |____________________________________________________________________ 
    |
    */ 

    public function form()
    { 
        $this->form_validation->set_rules('tkt_booking_id_no', display('booking_id')  ,'required|max_length[30]');
        $this->form_validation->set_rules('name', display('name')  ,'required|max_length[30]');
        $this->form_validation->set_rules('rating', display('rating')  ,'max_length[11]');
        #-------------------------------# 
        $postData = [
            'tkt_booking_id_no' => $this->input->post('tkt_booking_id_no'), 
            'name'              => $this->input->post('name'), 
            'comment'           => $this->input->post('comment'), 
            'rating'            => $this->input->post('rating'),  
        ];  
        #-------------------------------#
        if ($this->form_validation->run()) { 

            if ($this->feedback_model->create($postData)) { 
                $data['status'] = true;
                $data['success'] = display('submit_successfully');
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

            if ($this->feedback_model->update($postData)) { 
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

		if ($this->feedback_model->delete($id)) { 
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('ticket/feedback/index');
	}
	  

}
