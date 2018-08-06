<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();

 		$this->load->model(array(
 			'user_model'
 		));	
 	}
 	public function index()
	{  
		if ($this->session->userdata('isLogIn'))
			redirect('website/User/user_info');
		$data['title']    = display('login'); 
		#-------------------------------------#
		$this->form_validation->set_rules('email', display('email'), 'required|valid_email|max_length[100]|trim');
		$this->form_validation->set_rules('password', display('password'), 'required|max_length[32]|md5|trim');
	
		#-------------------------------------#
		$data['user'] = (object)$userData = array(
			'email' 	 => $this->input->post('email'),
			'password'   => $this->input->post('password'),
		);
		#-------------------------------------#
		if ( $this->form_validation->run())
		{
			

			$user = $this->user_model->checkUser($userData);

			if($user->num_rows() > 0) {
 /// user session data
				$sData = array(
					'isLogIn' 	  => true,
					'id' 		  => $user->row()->id,
					'firstname'	  => $user->row()->firstname,
					'lastname'	  => $user->row()->lastname,
					'phone'       => $user->row()->phone,
					'email' 	  => $user->row()->email,
					'image' 	  => $user->row()->image,
					'phone'       => $user->row()->phone
					);	

					//store date to session 
					$this->session->set_userdata($sData);
					//update database status
					 
					$this->session->set_flashdata('message', display('welcome_back').' '.$user->row()->firstname);
					redirect('website/user/'.$user->row()->id);

			} else {
				$this->session->set_flashdata('exception', display('incorrect_email_or_password'));
				redirect('userlog');
			} 

		} else {

			echo Modules::run('website/user/login_form', $data);
		}
	}

 	public function user_log(){
 		$data['title']    = display('login'); 
		$data['module'] = "website";
		//$data['page']   = "user/login_form";   
		$this->load->view("user/login_form"); 
 	}

 	public function user_info(){
 		$email=$this->input->post('email');
 		$phone=$this->input->post('phone_no');
 		$test=$this->user_model->user_info($email,$phone);
 		 if($test){
 		 	 redirect("website/User/user_details/". $phone);

 		 }else{
 		 	$this->session->set_flashdata('exception', display('incorrect_email_or_password'));
 		 	redirect("website/User/user_log");
 		 }
          
 	}
 	public function user_details(){
 		$this->load->model('website/website_model');
 	    $data['title']     = display('user_information'); 
		$data['module']    = "website";
		$data['details']   = $this->user_model->user_details();
		$data['setting']   = $this->website_model->read_setting();
		$this->load->view('website/user/user_details', $data);  

 	}
 	// ticket view information
 	 public function view($id = null)
    { 
         
        $data['title'] = display('view');
        #-------------------------------#
        $data['ticket'] = $this->user_model->ticket($id);
        $data['appSetting'] = $this->user_model->website_setting();
        $data['module'] = "website"; 
       $this->load->view('website/user/ticket', $data);   
    }
   
	public function delete_booking($id = null) 
	{ 
   

	if ($this->user_model->delete($id)) {
		#set success message
		$this->session->set_flashdata('message',display('delete_successfully'));
	} else {
		#set exception message
		$this->session->set_flashdata('exception',display('please_try_again'));
	}
	 redirect("website/User/user_details/". $id);
	}

		public function passenger_form($id = null)
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
        $oldpass=$this->input->post('old_password');
	    if($oldpass){
	    	$password=md5($oldpass);
	    }else{
	    	$password= $this->input->post('password');
	    }
		#-------------------------------#
		$date_of_birth = $this->input->post('date_of_birth');
		$date_of_birth = date('Y-m-d', strtotime((!empty($date_of_birth)?$this->input->post('date_of_birth'):date('Y-m-d'))));
		#-------------------------------#		
		$ids = $this->input->post('id');
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
			'password' 	 => $password, 
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

 if ($image = $this->fileupload->do_upload('./application/modules/ticket/assets/images/passenger/', 'image')) {  
			$this->session->set_flashdata('message', display('image_upload_successfully'));
       	if ($this->user_model->passenger_update($postData)) { 
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception',  display('please_try_again'));
				}
				redirect("website/User/upform_pasenger/".$postData['id_no']);  
				 }else{
				 	$this->session->set_flashdata('exception', 'please upload gif|jpg|png|jpeg|ico type image');
				 	redirect("website/User/upform_pasenger/".$postData['id_no']);
				 }
			

		} else { 
			if(!empty($id)) {
				$data['title'] = display('update');
				$data['passenger']   = $this->user_model->findById($id);
			}
			$data['country_list'] = $this->country_model->country();
			$data['module'] = "website";
			$data['setting']   = $this->website_model->read_setting();
			$data['page']   = "user/passenger_upform";   
			echo Modules::run('template/layout', $data); 
		}   
	}
	public function upform_pasenger($id = null){
		    $data['title'] = display('update');
		    $this->load->model('website/website_model');
		    $data['passenger']   = $this->user_model->findpassinfo($id);
			$data['country_list'] = $this->user_model->country();
			$data['setting']   = $this->website_model->read_setting();
			$data['module'] = "website";
			$this->load->view('website/user/passenger_upform', $data);

	}

  
	public function logout()
	{
		//destroy session
		$this->session->sess_destroy();
		redirect('login');
	}
	// new login from ticket
	 public function newlog()
    {  

        $this->form_validation->set_rules('emails', display('email')  ,'valid_email|max_length[100]');
        $this->form_validation->set_rules('passwords', display('password')  ,'max_length[255]');

        #-------------------------------#
        $userData = array(
        	'email'      => $this->input->post('emails'), 
            'password'   => md5($this->input->post('passwords'))
        );
        #-------------------------------#

        if ($this->form_validation->run()) {

        	//Check user information
           	$user = $this->user_model->checkUser2($userData);
			if($user->num_rows() > 0) {
				$sData = array(
					'isLogIn' 	  => true,
					'id' 		  => $user->row()->id,
					'id_no'       => $user->row()->id_no,
					'firstname'	  => $user->row()->firstname,
					'lastname'    => $user->row()->lastname,
					'email' 	  => $user->row()->email,
					'image' 	  => $user->row()->image,
					'password'    => $user->row()->password,
					'phone'       => $user->row()->phone,
					'address'     => $user->row()->address_line_1
				);

				//store date to session 
				$this->session->set_userdata($sData);
            	$sData['message'] = 'Successfully login ';
               //$sData['firstname'] = $arr['firstname'];
				//Json encode for user data
        		echo json_encode($sData);
	        }else{
	        	$data['exception'] = 'User name or password wrong !';
	        	echo json_encode($data);
	        }
    	}else {  
	        $data['exception'] = validation_errors();
	        //Json encode for user data
        	echo json_encode($data);
	    }
	}


// user bank and payment information
	public function payment_confirm(){
  $this->form_validation->set_rules('bank_id',display('bank_id'),'required|max_length[150]');
  if ($this->form_validation->run() === true) 
        {
		$data = [
      'booking_id'     =>$this->input->post('booking_id',true),
      'bank_id'        =>$this->input->post('bank_id',true),
      'payer_name'     =>$this->input->post('payname',true),
      'transaction_id' =>$this->input->post('tran_num',true),
      'b_account_no'   =>$this->input->post('bank_acc',true),
      'amount'         =>$this->input->post('amount',true),
      'note'           =>$this->input->post('note',true)
		];

	     if ($this->user_model->confirm_ticket($data)) { 
                $this->session->set_flashdata('message', display('transaction_successfully_send'));
                redirect("website/User/user_details");
            } else {
                $this->session->set_flashdata('exception',  display('please_try_again'));
            }
        }else{
        	redirect("website/User/user_details");
        }
	}
 }