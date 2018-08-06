<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model(array(
			'passenger_model',
			'country_model'
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
        $config["base_url"] = base_url('ticket/passenger/index');
        $config["total_rows"]  = $this->db->count_all('tkt_passenger');
        $config["per_page"]    = 25;
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
        $data["passengers"] = $this->passenger_model->read($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        #
        #pagination ends
        #   
		$data['module'] = "ticket";
		$data['page']   = "passenger/list";   
		echo Modules::run('template/layout', $data); 
	}  

 public function form($id = null)
	{ 
		$data['title'] = display('add');
		#-------------------------------#
		$this->form_validation->set_rules('firstname', display('firstname')  ,'required|max_length[50]');
		$this->form_validation->set_rules('lastname', display('lastname')  ,'required|max_length[50]');
		$this->form_validation->set_rules('middle_name', display('middle_name')  ,'max_length[50]');
		$this->form_validation->set_rules('phone', display('phone')  ,'max_length[30]');
		$this->form_validation->set_rules('email', display('email')  ,'valid_email|max_length[100]');
		$this->form_validation->set_rules('password', display('password')  ,'max_length[100]');
		$this->form_validation->set_rules('address_line_1', display('address_line_1')  ,'max_length[255]');
		$this->form_validation->set_rules('address_line_2', display('address_line_2')  ,'max_length[255]');
		$this->form_validation->set_rules('city', display('city')  ,'max_length[50]');
		$this->form_validation->set_rules('zip_code', display('zip_code')  ,'max_length[6]');
		$this->form_validation->set_rules('country', display('country')  ,'max_length[20]');
		$this->form_validation->set_rules('status', display('status') ,'required');	
		/*-----------------------------------*/
        if ($image = $this->fileupload->do_upload('./application/modules/ticket/assets/images/passenger/', 'image')) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
        } 

		#-------------------------------#
		$date_of_birth = $this->input->post('date_of_birth');
		$date_of_birth = date('Y-m-d', strtotime((!empty($date_of_birth)?$this->input->post('date_of_birth'):date('Y-m-d'))));
		#-------------------------------#		
		$ids = $this->input->post('id');
			$password=$this->input->post('password');
		if($password){
		    $pass=md5($password);
		}else{
		    $pass= $this->input->post('old_password');
		}
		$id_no = (!empty($ids)?$this->input->post('id_no'):$this->randID());
		#-------------------------------#
		$data['passenger'] = (Object) $postData = [
			'id' 	 	 => $this->input->post('id'), 
			'id_no' 	 => $id_no, 
			'firstname'  => $this->input->post('firstname'), 
			'lastname' 	 => $this->input->post('lastname'), 
			'middle_name' => $this->input->post('middle_name'), 
			'phone' 	 => $this->input->post('phone'), 
			'email' 	 => $this->input->post('email'), 
			'password' 	 => $pass, 
			'remember_token' => $this->input->post('remember_token'), 
			'date_of_birth' => $date_of_birth, 
			'image'   	 => (!empty($image)?$image:$this->input->post('old_image')),
			'address_line_1' => $this->input->post('address_line_1'), 
			'address_line_2' => $this->input->post('address_line_2'), 
			'city' 	     => $this->input->post('city'), 
			'zip_code' 	 => $this->input->post('zip_code'), 
			'country' 	 => $this->input->post('country'), 
			'status'     => $this->input->post('status'), 
		]; 
		#-------------------------------#
		if ($this->form_validation->run()) { 

			if (empty($postData['id'])) {

        		$this->permission->method('ticket','create')->redirect();

      if ($image = $this->fileupload->do_upload('./application/modules/ticket/assets/images/passenger/', 'image',$this->input->post('id'))) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
				if ($this->passenger_model->create($postData)) { 
					$id = $this->db->insert_id();
					$this->session->set_flashdata('message', display('save_successfully'));
					redirect('ticket/passenger/view/'. $id);
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("ticket/passenger/form");
				}else{
					$this->session->set_flashdata('exception', 'please upload gif|jpg|png|jpeg|ico type image');
	redirect("ticket/passenger/form/");

				} 

			} else {

        		$this->permission->method('ticket','update')->redirect();

        		if ($image = $this->fileupload->do_upload('./application/modules/ticket/assets/images/passenger/', 'image',$this->input->post('id'))) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
        

				if ($this->passenger_model->update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("ticket/passenger/form/".$postData['id']); 

} else{
	$this->session->set_flashdata('exception', 'please upload gif|jpg|png|jpeg|ico type image');
	redirect("ticket/passenger/form/".$postData['id']);
}

			}
 

		} else { 
			if(!empty($id)) {
				$data['title'] = display('update');
				$data['passenger']   = $this->passenger_model->findById($id);
			}
			$data['country_list'] = $this->country_model->country();
			$data['module'] = "ticket";
			$data['page']   = "passenger/form";   
			echo Modules::run('template/layout', $data); 
		}   
	}


 
	public function view($id = null) 
	{ 
        $this->permission->method('ticket','read')->redirect();
        $data['title'] = display('passenger');
		$data['passenger'] = $this->passenger_model->findById($id);
		$data['module'] = "ticket";
		$data['page']   = "passenger/view";   
		echo Modules::run('template/layout', $data); 
	}


	public function delete($id = null) 
	{ 
        $this->permission->method('ticket','delete')->redirect();

		if ($this->passenger_model->delete($id)) {
			#set success message
			$this->session->set_flashdata('message',display('delete_successfully'));
		} else {
			#set exception message
			$this->session->set_flashdata('exception',display('please_try_again'));
		}
		redirect('ticket/passenger/index');
	}


    /*
    |----------------------------------------------
    |        id genaretor
    |----------------------------------------------     
    */
    public function randID()
    {
        $result = ""; 
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        $charArray = str_split($chars);
        for($i = 0; $i < 7; $i++) {
                $randItem = array_rand($charArray);
                $result .="".$charArray[$randItem];
        }
        return "P".$result;
    }
    /*
    |----------------------------------------------
    |         Ends of id genaretor
    |----------------------------------------------
    */


}
