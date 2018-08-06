<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Website_model extends CI_Model {

    /*
    |____________________________________________________________________
    |  
    | NOTIFICATIONS [trip_assign, tkt_passenger, fleet_registration]
    |____________________________________________________________________ 
    |
    */ 

    public function read_notification()
    {
    	$data['passenger'] = $this->db->select('COUNT(id) AS total')
    		->from('tkt_passenger')
    		->get()
    		->row();

    	$data['fleet'] = $this->db->select('COUNT(id) AS total')
    		->from('fleet_registration')
    		->get()
    		->row();

    	$data['trip'] = $this->db->select('COUNT(id) AS total')
    		->from('trip_assign')
    		->where('DATE(start_date)', date('Y-m-d'))
    		->get()
    		->row();

    	return (object)$data;

    }

    /*
    |____________________________________________________________________
    |  
    | SETTING 
    |____________________________________________________________________ 
    |
    */ 
 
	public function read_setting() 
	{
		// return $this->db->get('ws_setting')->row();
		return $this->db->query("
			SELECT ws_setting.* , setting.footer_text 
			FROM ws_setting, setting
		")->row();
	}


	public function create_setting($data) 
	{
		return $this->db->insert('ws_setting', $data);
	}

 
	public function update_setting($data) 
	{
		return $this->db->where('id', $data['id'])
			->update('ws_setting', $data);
	}

    /*
    |____________________________________________________________________
    |  
    | OFFER 
    |____________________________________________________________________ 
    |
    */ 
 
 
	public function create_offer($data) 
	{
		return $this->db->insert('ws_offer', $data);
	}

 
	public function read_offer() 
	{
		return $this->db->order_by('position', 'asc')
			->get('ws_offer')->result();
	}

	public function delete_offer($id = null) 
	{
		return $this->db->where('id', $id)
			->delete('ws_offer');
	}

    /*
    |____________________________________________________________________
    |  
    | RATING 
    |____________________________________________________________________ 
    |
    */ 
 
	public function read_rating()
	{
		return $this->db->select("*")
			->from('tkt_feedback')
			->where_not_in('add_to_website', array(0,''))
			->order_by('id', 'desc')
			->get()
			->result();
	}   

    /*
    |____________________________________________________________________
    |  
    | LOCATION 
    |____________________________________________________________________ 
    |
    */ 

	public function location_dropdown()
	{
		$data = $this->db->select("*")
			->from("trip_location")
			->where('status', 1) 
			->order_by('name', 'asc')
			->get()
			->result();

		$list[''] = null;
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
		} 
		return $list;
	}

    /*
    |____________________________________________________________________
    |  
    | FLEET 
    |____________________________________________________________________ 
    |
    */ 

	public function fleet_dropdown()
	{
		$data = $this->db->select("*")
			->from("fleet_type")
			->where('status', 1) 
			->get()
			->result();

		$list[''] = null;
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->type;
		} 
		return $list;
	}
 

    /*
    |____________________________________________________________________
    |  
    | TRIP LIST 
    |____________________________________________________________________ 
    |
    */ 

    public function trip_list($data = array())
    {
    	$this->db->select("
			ta.id_no AS trip_id_no,
			ta.fleet_registration_id,
			ta.trip_route_id,
			tr.name AS trip_route_name, 
			tl1.name AS pickup_trip_location,
			tl2.name AS drop_trip_location,
			fr.fleet_type_id,
			fr.reg_no AS fleet_registration_no, 
            fr.total_seat AS fleet_seats, 
			pp.price AS price,
			TIME_FORMAT(ta.start_date, '%h:%i %p') AS start_time,
			TIME_FORMAT(ta.end_date, '%h:%i %p') AS end_time,
			tr.approximate_time AS duration,
			ta.start_date AS booking_date
		")->from('trip_assign AS ta')
		->join('trip_route AS tr', 'tr.id = ta.trip_route_id','left')
		->join('fleet_registration AS fr', 'fr.id = ta.fleet_registration_id','left')
		->join('pri_price AS pp', 'pp.route_id = ta.trip_route_id AND pp.vehicle_type_id = fr.fleet_type_id','left')
		->join('trip_location AS tl1', 'tl1.id = tr.start_point','left')
		->join('trip_location AS tl2', 'tl2.id = tr.end_point','left')
		->where_in('closed_by_id', array('',NULL,0)) 
		->where('start_date >= CURDATE()', null, false)
		->where("DATE(ta.start_date)", $data['date']);

		if (!empty($data['start_point'])) {
			$this->db->like('tr.start_point', $data['start_point']);
		} 
		if (!empty($data['end_point'])) {
			$this->db->like('tr.end_point', $data['end_point']);
		}
		if (!empty($data['fleet_type'])) {
			$this->db->like('fr.fleet_type_id', $data['fleet_type']);
		}


		return $this->db->group_by('ta.id')
		->get()
		->result();
    }


    /*
    |____________________________________________________________________
    |  
    | BOOKING FROM WS_BOOKING_HISTOERY
    |____________________________________________________________________ 
    |
    */ 

	public function createBooking($data = [])
	{	 
		return $this->db->insert("ws_booking_history", $data);
	}

	public function updateBooking($data = [])
	{
		return $this->db->where('id_no',$data['id_no'])
			->update("ws_booking_history",$data); 
	} 

	public function getBooking($booking_id_no = null)
	{
		// return booking data
    	return $this->db->select("
                bh.pickup_trip_location,
                bh.drop_trip_location,
                CONCAT_WS(' ', tp.firstname, tp.lastname) AS passenger_name, 
                bh.tkt_passenger_id_no AS tkt_passenger_id_no,
                bh.trip_id_no AS trip_id_no,
                bh.id_no AS booking_id_no,
                DATE_FORMAT(bh.booking_date, '%m/%d/%Y %h:%i %p') as booking_date,
                tr.name AS route_name,
                bh.request_facilities AS request_facilities,
                bh.price AS price,
                bh.total_seat AS quantity,
                bh.discount AS discount,
                bh.seat_numbers AS seat_serial 
            ")
            ->from('ws_booking_history AS bh')
            ->join('tkt_passenger AS tp', 'bh.tkt_passenger_id_no = tp.id_no' ,'full')
            ->join('trip_route AS tr', 'tr.id = bh.trip_route_id','full')
            ->where('bh.id_no', $booking_id_no)
            ->get()
            ->row();
	} 

	// |
	// |loacal payment data detrieve
	// |
public function getlocal($booking_id_no = null)
	{
		// return booking data
    	return $this->db->select("tp.email,bh.*,
                bh.pickup_trip_location,
                bh.drop_trip_location,
                CONCAT_WS(' ', tp.firstname, tp.lastname) AS passenger_name, 
                bh.tkt_passenger_id_no AS tkt_passenger_id_no,
                bh.trip_id_no AS trip_id_no,
                bh.id_no AS booking_id_no,
                bh.booking_date,
                tr.name AS route_name,
                bh.request_facilities AS request_facilities,
                bh.price AS price,
                bh.total_seat AS quantity,
                bh.discount AS discount,
                bh.seat_numbers AS seat_serial 
            ")
            ->from('ws_booking_history AS bh')
            ->join('tkt_passenger AS tp', 'bh.tkt_passenger_id_no = tp.id_no' ,'full')
            ->join('trip_route AS tr', 'tr.id = bh.trip_route_id','full')
            ->where('bh.id_no', $booking_id_no)
            ->get()
            ->row();
	} 

    /*
    |____________________________________________________________________
    |  
    | PASSENGER
    |____________________________________________________________________ 
    |
    */ 

	public function createPassenger($data = array())
	{
	    $checkExists = $this->db->select("*")
	        ->from('tkt_passenger')
	        ->where('id_no',$data['id_no'])
	        ->get() 
	        ->num_rows();

	    if ($checkExists < 1) 
	    {
			return $this->db->insert("tkt_passenger", $data); 
	    } 
	    else 
	    {
			return $this->db->where('id_no',$data['id_no'])
			->update("tkt_passenger", $data); 
	    }
	} 



    /*
    |____________________________________________________________________
    |  
    | TICKET
    |____________________________________________________________________ 
    |
    */ 

    public function getTicket($booking_id_no = null)
    {  
    	//get current booking history
		$rowData = $this->db->select('
		    id_no,trip_id_no, tkt_passenger_id_no, trip_route_id, pickup_trip_location,
		    drop_trip_location, request_facilities, price,
		    discount, total_seat,seat_numbers,offer_code,tkt_refund_id, agent_id,
		    booking_date,date
		')
		->where('id_no', $booking_id_no)
		->get('ws_booking_history')
		->row();
		  
		// if booking history available then copy to tkt_booking and delete the history
        
		  
		$paysettings = $this->db->select('*')->from('ws_setting')->get()->row();
	
		
		if (sizeof($rowData) > 0) 
		{
		    if($paysettings->payment_type != 'disable'){
		    $this->db->insert('tkt_booking', $rowData);
		    $this->db->where('id_no', $booking_id_no)->delete('ws_booking_history');
		} 
		}


		// return booking data
    	return $this->db->select("
                tb.pickup_trip_location,
                tb.drop_trip_location,
                CONCAT_WS(' ', tp.firstname, tp.lastname) AS passenger_name, 
                tb.tkt_passenger_id_no AS tkt_passenger_id_no,
                tb.trip_id_no AS trip_id_no,
                tb.id_no AS booking_id_no,
                DATE_FORMAT(tb.booking_date, '%m/%d/%Y %h:%i %p') as booking_date,
                tr.name AS route_name,
                tb.request_facilities AS request_facilities,
                tb.price AS price,
                tb.total_seat AS quantity,
                tb.discount AS discount,
                tb.seat_numbers AS seat_serial 
            ")
            ->from('tkt_booking AS tb')
            ->join('tkt_passenger AS tp', 'tb.tkt_passenger_id_no = tp.id_no' ,'full')
            ->join('trip_route AS tr', 'tr.id = tb.trip_route_id','full')
            ->where('tb.id_no', $booking_id_no)
            ->get()
            ->row();
    }
    /// select webstie  settings data 
    public function retrieve_setting_editdata()
	{
		$this->db->select('*');
		$this->db->from('ws_setting');
		$this->db->where('id',1);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();	
		}
		return false;
	}


}
