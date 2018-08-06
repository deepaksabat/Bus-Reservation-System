<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Refund extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'refund_model',
			'price/price_model'
		));		 
	}
 
	public function index()
	{   
        $this->permission->method('ticket','read')->redirect();
        $currency_details = $this->price_model->retrieve_setting_editdata();
        foreach ($currency_details as $price) {
        }
        $currency=$price['currency'];
		$data['title']    = display('list'); 
		#-------------------------------#
        #
        #pagination starts
        #
        $config["base_url"] = base_url('ticket/refund/index');
        $config["total_rows"] = $this->db->count_all('tkt_refund');
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
        $data["refunds"] = $this->refund_model->read($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        # 
        $data['currency']   = $currency;  
		$data['module'] = "ticket";
		$data['page']   = "refund/list";   
		echo Modules::run('template/layout', $data); 
	}  

 	public function form()
	{ 
		$this->permission->method('ticket','create')->redirect();
		$data['title'] = display('add');
		#-------------------------------#
		$this->form_validation->set_rules('tkt_booking_id_no', display('booking_id')  ,'required|max_length[30]|is_unique[tkt_refund.tkt_booking_id_no]');
		$this->form_validation->set_rules('tkt_passenger_id_no', display('passenger_id')  ,'required|max_length[30]');
		$this->form_validation->set_rules('cancelation_fees', display('cancelation_fees')  ,'required|max_length[11]');
		#-------------------------------#
		$postBid = $this->input->post('tkt_booking_id_no');
		$postPid = $this->input->post('tkt_passenger_id_no');
		$getBid  = $this->input->get('bid');
		$getPid  = $this->input->get('pid');
		#-------------------------------#
		$data['refund'] = (Object) $postData = [
			'id' 	 			  => $this->input->post('id'), 
			'tkt_booking_id_no'   => (!empty($getBid)?$getBid:$postBid), 
			'tkt_passenger_id_no' => (!empty($getPid)?$getPid:$postPid),  
			'cancelation_fees'    => $this->input->post('cancelation_fees'), 
			'causes' 			  => $this->input->post('causes'), 
			'comment' 			  => $this->input->post('comment'), 
			'refund_by_id' 		  => $this->session->userdata('id'), 
			'date' 			 	  => date("Y-m-d H:i:s"), 
		];  
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if ($this->refund_model->create($postData)) { 

				$refundId = $this->db->insert_id();

				$this->session->set_flashdata('message', display('save_successfully'));

				//updating refund id in booking
				$this->load->model('booking_model');
				$this->booking_model->update(array(
					'id_no'         => $postData['tkt_booking_id_no'],
					'tkt_refund_id' => $refundId,
				));

			} else {
				$this->session->set_flashdata('exception',  display('please_try_again'));
			}

			redirect("ticket/refund/form"); 

		} else {  
			$data['module'] = "ticket";
			$data['page']   = "refund/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}

 

	public function delete($id = null) 
	{ 
        $this->permission->method('ticket','delete')->redirect();

		if ($this->refund_model->delete($id)) {

			//updating refund id in booking
			$this->load->model('booking_model');
			$this->booking_model->update(array(
				'id_no'         => $id,
				'tkt_refund_id' => null,
			));

			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('ticket/refund/index');
	}
	 

}
