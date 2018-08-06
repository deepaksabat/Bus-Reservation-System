<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Assign_model extends CI_Model {
 
	public function read($data= array())
	{
		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));

		$this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CASE WHEN t.closed_by_id THEN 'bg-success' ELSE NULL END AS isClosed
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->where('t.status', 1)
		->order_by('t.start_date','desc') 
		->order_by('t.id','desc');

		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('t.id_no', $data->trip);
    			break; 
    		case 'fleet':
    			$this->db->where('t.fleet_registration_id', $data->fleet);
    			break; 
    		case 'route':
    			$this->db->where('t.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('d.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(t.start_date) BETWEEN '$start_date' AND '$end_date'", null, false);
		 
        return $this->db->limit($data->limit, $data->offset)
			->get()
			->result(); 
	}   

 
	public function countRecord($data= array())
	{

		$start_date = date('Y-m-d', strtotime($data->start_date));
		$end_date   = date('Y-m-d', strtotime($data->end_date));

		$this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CASE WHEN t.closed_by_id THEN 'bg-success' ELSE NULL END AS isClosed
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->where('t.status', 1);

		switch ($data->filter) 
		{
    		case 'trip':
    			$this->db->where('t.id_no', $data->trip);
    			break; 
    		case 'fleet':
    			$this->db->where('t.fleet_registration_id', $data->fleet);
    			break; 
    		case 'route':
    			$this->db->where('t.trip_route_id', $data->route);
    			break; 
    		case 'driver':
    			$this->db->where('d.id', $data->driver);
    			break; 
    	} 
        $this->db->where("DATE(t.start_date) BETWEEN '$start_date' AND '$end_date'", null, false);
		  
        return $this->db->get()->num_rows(); 
	}   



	public function fleetList()
	{
		$data = $this->db->select("*")
			->from('fleet_registration')
			->where('status', 1) 
			->get()
			->result();

		$list = array();
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->reg_no;
			return $list;
		} else {
			return false; 
		}
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

