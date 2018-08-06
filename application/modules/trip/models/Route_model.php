<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Route_model extends CI_Model {
 
	private $table = "trip_route";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}


	public function read()
	{
		return $this->db->query("
				SELECT 
					r.*,
					l1.name AS start_location,
					l2.name AS end_location
				FROM 
					trip_route r
				LEFT JOIN 
					trip_location AS l1
				ON 
					l1.id = r.start_point
				LEFT JOIN 
					trip_location AS l2
				ON 
					l2.id = r.end_point
				ORDER BY
					r.name ASC
			")
			->result();
	} 


	public function findById($id = null)
	{
		return $this->db->select("*")
			->from($this->table)
			->where('id',$id) 
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

	public function dropdown()
	{
		$data = $this->db->select("*")
			->from($this->table)
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
 


}
