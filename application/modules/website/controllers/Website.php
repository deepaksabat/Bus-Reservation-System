<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->autocancel();
		$this->load->model(array(
			'website_model'
		));

		// unset transection token data
        $this->session->unset_userdata('_tran_token');


        #-----------Setting-------------# 
		$setting = $this->website_model->read_setting();
        // redirect if website status is disabled
        if ($setting->status == 0) 
            redirect(base_url('login'));
        #-----------Section-------------# 
	}

	
	public function index()
	{   
		$data['title'] = display("home");
		#---------------GET DATA------------------
		$getStartPoint = $this->input->get('start_point');
		$getEndPoint   = $this->input->get('end_point');
		$getDate       = $this->input->get('date');
		$getFleetType  = $this->input->get('fleet_type');
		#---------------POST DATA------------------
		$postStartPoint = $this->input->post('start_point');
		$postEndPoint   = $this->input->post('end_point');
		$postDate       = $this->input->post('date');
		$postFleetType  = $this->input->post('fleet_type');
		#---------------FINAL DATA------------------
		$data['search'] = (object) $postData = array(
			'start_point' => (!empty($postStartPoint)?$postStartPoint:$getStartPoint),
			'end_point'   => (!empty($postEndPoint)?$postEndPoint:$getEndPoint),
			'date'        => (!empty($postDate)?$postDate:$getDate),
			'fleet_type'  => (!empty($postFleetType)?$postFleetType:$getFleetType),
		);
		#--------------------------------------------- 
		$data['location_dropdown'] = $this->website_model->location_dropdown();
		$data['fleet_dropdown']    = $this->website_model->fleet_dropdown();
		$data['ratings']           = $this->website_model->read_rating();
		$data['offers']            = $this->website_model->read_offer();
		$data['notifications']     = $this->website_model->read_notification();
		$data['appSetting'] = $this->website_model->read_setting();
		#-----------------------------------
		$data['module'] = "website";
		$data['page']   = "pages/home";   
		$this->load->view('layout', $data);
	}  
  /*Booking cancel automaticallay
    |
    */
public function autocancel(){
       $downtime=$this->db->select('*')->from('booking_downtime')->get()->result();
       
       foreach ($downtime as $down) {}
       $dntime=$down->downtime;
        $cancele = $this->db->select('*')->from('tkt_booking')->where('payment_status',1)->get()->result();

        if ($cancele) {
            foreach ($cancele as $can) { }

            $day1 = $can->date;
            $day1 = strtotime($day1);
            $day2 = $date = date('Y-m-d h:i:s', time());
            $day2 = strtotime($day2);
            $diffHours = round(($day2 - $day1) / 3600);

            $sql = "DELETE FROM tkt_booking WHERE $diffHours > $dntime AND payment_status=1";

            if ($this->db->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

}
