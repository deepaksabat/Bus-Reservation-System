<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {
 
	private $table = "tkt_booking";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}


	public function read($limit = null, $start = null)
	{
		return $this->db->select("tb.*, tr.name AS route_name")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
        	->limit($limit, $start)
        	->order_by('id', 'desc')
			->get()
			->result();
	} 


	public function findById($id_no = null)
	{
		return $this->db->select("
				tb.*, 
				tr.name AS route_name, 
				tp.image, 
				trf.cancelation_fees, 
				trf.causes, 
				CONCAT_WS(' ', u.firstname, u.lastname) AS refund_by

			")->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("tkt_passenger AS tp", "tp.id_no = tb.tkt_passenger_id_no", "left") 
			 ->join('tkt_refund AS trf', 'trf.tkt_booking_id_no = tb.id_no', "left")
			 ->join('user AS u', 'u.id = trf.refund_by_id', "left")
			->where('tb.id_no',$id_no) 
        	->limit($limit, $start)
			->get()
			->row();
	} 

	public function ticket($id_no = null)
	{
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
                tb.seat_numbers AS seat_serial,
                tb.payment_status
            ")
            ->from('tkt_booking AS tb')
            ->join('tkt_passenger AS tp', 'tb.tkt_passenger_id_no = tp.id_no' ,'full')
            ->join('trip_route AS tr', 'tr.id = tb.trip_route_id','full')
            ->where('tb.id_no', $id_no)
            ->get()
            ->row();
	}


	public function website_setting() 
	{
		return $this->db->get('ws_setting')->row();
	}

 
	public function update($data = [])
	{
		return $this->db->where('id_no',$data['id_no'])
			->update($this->table,$data); 
	} 


	public function delete($id = null)
	{
		$this->db->where('id',$id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function location_dropdown()
	{
		$data = $this->db->select("*")
			->from("trip_location")
			->where('status', 1) 
			->order_by('name', 'ASC')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}

	public function route_dropdown()
	{
		$data = $this->db->select("*")
			->from("trip_route")
			->where('status', 1) 
			->order_by('name', 'ASC')
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}
 
	public function facilities_dropdown()
	{
		$data = $this->db->select("*")
			->from("fleet_facilities")
			->where('status', 1) 
			->order_by('name', 'ASC')
			->get()
			->result();

		$list = array();
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->name;
			return $list;
		} else {
			return false; 
		}
	}
 
// paid information
	public function ticket_paid($id_no = null)
	{
		
		// return booking data
    	return $this->db->select("*")
            ->from('tkt_booking')
            ->where('id_no',$id_no)
            ->get()
            ->result();
	}

	public function confirmation()
	{
		return $this->db->select("btr.*,btr.id as ids, tr.*")
			->from("bank_transaction AS btr")
			->join("tkt_booking AS tr", "tr.id_no = btr.booking_id", "left")
        	->order_by('btr.id', 'desc')
			->get()
			->result();
	} 
	// confirmation delete 
	public function confirmation_delete($id = null)
	{
		$this->db->where('id',$id)
			->delete('bank_transaction');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

}

 