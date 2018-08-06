<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {

	public function read($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));


		$this->db->select("
				tb.*, 
				tr.name AS route_name, 
				eh.id AS driver_id,
				CONCAT_WS(' ', eh.first_name, eh.second_name) AS driver_name
			")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("trip_assign AS ta", "ta.id_no = tb.trip_id_no", "left") 
			->join("employee_history AS eh", "eh.id = ta.driver_id", "left") 
            ->group_start()
                ->where("tb.tkt_refund_id IS NULL", null, false)
                ->or_where("tb.tkt_refund_id", 0)
                ->or_where("tb.tkt_refund_id", null)
            ->group_end();
 
		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('tb.trip_id_no', $data->trip);
    			break; 
    		case 'route':
    			$this->db->where('tb.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('eh.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(tb.booking_date) BETWEEN '$start_date' AND '$end_date'", null, false);


        return $this->db->limit($data->limit, $data->offset)
        	->order_by('booking_date', 'desc')
			->get()
			->result(); 
	} 

	public function countRecord($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));


		$this->db->select("
				tb.*, 
				tr.name AS route_name, 
				eh.id AS driver_id,
				CONCAT_WS(' ', eh.first_name, eh.second_name) AS driver_name
			")
			->from("tkt_booking AS tb")
			->join("trip_route AS tr", "tr.id = tb.trip_route_id", "left") 
			->join("trip_assign AS ta", "ta.id_no = tb.trip_id_no", "left") 
			->join("employee_history AS eh", "eh.id = ta.driver_id", "left") 
            ->group_start()
                ->where("tb.tkt_refund_id IS NULL", null, false)
                ->or_where("tb.tkt_refund_id", 0)
                ->or_where("tb.tkt_refund_id", null)
            ->group_end();
 
		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('tb.trip_id_no', $data->trip);
    			break; 
    		case 'route':
    			$this->db->where('tb.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('eh.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(tb.booking_date) BETWEEN '$start_date' AND '$end_date'", null, false);


        return $this->db->get()->num_rows();
	} 


	public function routeList()
	{
		$data = $this->db->select("*")
			->from('trip_route')
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

	public function driverList()
	{
		$data = $this->db->select("id, CONCAT_WS(' ', first_name, second_name) AS name")
			->from("employee_history")
			->like('position','driver', 'both')
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
 
}

 