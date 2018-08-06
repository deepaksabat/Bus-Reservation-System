<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Close extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'assign_model',
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('trip','read')->redirect();
		$data['title']    = display('list'); 
		#-------------------------------#
		#
        #pagination starts
        #
        $config["base_url"] = base_url('trip/close/index');
        $config["total_rows"] = $this->db->where_not_in('closed_by_id', ['', 0])
        						->get('trip_assign')->num_rows();
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
        $data["closes"] = $this->assign_model->readOnlyClosedTrip($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
		$data['module'] = "trip";
		$data['page']   = "close/list";   
		echo Modules::run('template/layout', $data); 


		
	}  

 	public function form($id = null)
	{  
		$data['title'] = display('update');
		#-------------------------------#
		$this->form_validation->set_rules('sold_ticket',display('sold_ticket')  ,'max_length[11]');
		$this->form_validation->set_rules('total_income',display('total_income')  ,'max_length[11]');
		$this->form_validation->set_rules('total_expense',display('total_expense')  ,'required|max_length[11]');
		$this->form_validation->set_rules('total_fuel',display('total_fuel')  ,'required|max_length[11]');
		$this->form_validation->set_rules('status',display('status') ,'required');	
		/*-----------------------------------*/
		$date = $this->input->post('date'); 
		#-------------------------------#
		$postData = [
			'id' 	        => $this->input->post('id'), 
			'sold_ticket'   => $this->input->post('sold_ticket'), 
			'total_income'  => $this->input->post('total_income'), 
			'total_expense' => $this->input->post('total_expense'), 
			'total_fuel'    => $this->input->post('total_fuel'),  
			'trip_comment'  => $this->input->post('trip_comment'), 
			'closed_by_id'  => $this->session->userdata('id'), 
			'date'      	=> date('Y-m-d H:i'), 
			'status'        => $this->input->post('status'), 
		]; 
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if (!empty($postData['id'])) {

        		$this->permission->method('trip','create')->redirect();

				if ($this->assign_model->update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("trip/close/form/".$postData['id']);  

			} else {

				$this->session->set_flashdata('exception',  display('please_try_again'));

				redirect(base_url('trip/assign/index'));
			}

		} else { 
			$data['close']  = $this->assign_model->findById($id);
			$data['module'] = "trip";
			$data['page']   = "close/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}

	public function view($id_no = null) 
	{ 
        $this->permission->method('trip','read')->redirect();
        $data['title'] = display('close');
		$data['close'] = $this->assign_model->findByIdNo($id_no);
		$data['module'] = "trip";
		$data['page']   = "close/view";   
		echo Modules::run('template/layout', $data); 
	} 
}
