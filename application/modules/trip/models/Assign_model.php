<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Assign_model extends CI_Model {
 
	private $table = "trip_assign";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table, $data);
	}

	public function read($limit = null, $start = null)
	{
		return $this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CASE WHEN t.closed_by_id THEN 'bg-success' ELSE NULL END AS isClosed
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->order_by('t.start_date','desc')
		->order_by('t.closed_by_id','asc')
        ->limit($limit, $start)
		->get()
		->result();
	} 

	public function findById($id = null)
	{
		return $this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CONCAT_WS(' ', a1.first_name, a1.second_name) AS assistant_1_name, 
			CONCAT_WS(' ', a2.first_name, a2.second_name) AS assistant_2_name, 
			CONCAT_WS(' ', a3.first_name, a3.second_name) AS assistant_3_name,
			CONCAT_WS(' ', u.firstname, u.lastname) AS closed_by_id
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->join('employee_history AS a1', 'a1.id = t.assistant_1', 'left')
		->join('employee_history AS a2', 'a2.id = t.assistant_2', 'left')
		->join('employee_history AS a3', 'a3.id = t.assistant_3', 'left')
		->join('user AS u', 'u.id = t.closed_by_id', 'left')
		->where('t.id', $id)
		->get()
		->row();
	} 
 

	public function findByIdNo($id_no = null)
	{
		return $this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CONCAT_WS(' ', a1.first_name, a1.second_name) AS assistant_1_name, 
			CONCAT_WS(' ', a2.first_name, a2.second_name) AS assistant_2_name, 
			CONCAT_WS(' ', a3.first_name, a3.second_name) AS assistant_3_name,
			CONCAT_WS(' ', u.firstname, u.lastname) AS closed_by_id
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->join('employee_history AS a1', 'a1.id = t.assistant_1', 'left')
		->join('employee_history AS a2', 'a2.id = t.assistant_2', 'left')
		->join('employee_history AS a3', 'a3.id = t.assistant_3', 'left')
		->join('user AS u', 'u.id = t.closed_by_id', 'left')
		->where('t.id_no', $id_no)
		->get()
		->row();
	} 
 
	public function update($data = [])
	{
		return $this->db->where('id',$data['id'])
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

 
	public function readOnlyClosedTrip($limit = null, $start = null)
	{
		return $this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			CASE WHEN t.closed_by_id THEN 'bg-success' ELSE NULL END AS isClosed
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->where_not_in('t.closed_by_id', ['', 0])
		->order_by('t.end_date','desc')
        ->limit($limit, $start)
		->get()
		->result();
	} 



	public function fleet_dropdown()
	{
		$data = $this->db->select("*")
			->from("fleet_registration")
			->where('status', 1) 
			->get()
			->result();

		$list[''] = display('select_option');
		if (!empty($data)) {
			foreach($data as $value)
				$list[$value->id] = $value->reg_no;
			return $list;
		} else {
			return false; 
		}
	}

	public function driver_dropdown()
	{
		$data = $this->db->select("id, CONCAT_WS(' ', first_name, second_name) AS name")
			->from("employee_history")
			->like('position','driver', 'both')
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

	public function assistant_dropdown()
	{
		$data = $this->db->select("id, CONCAT_WS(' ', first_name, second_name) AS name")
			->from("employee_history")
			->like('position','assistant', 'both')
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


}
