<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger_model extends CI_Model {
 
	private $table = "tkt_passenger";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read($limit = null, $start = null)
	{
		return $this->db->select("
				t.*,
				CONCAT_WS(' ', t.firstname, t.middle_name, t.lastname) AS name
			")->from("tkt_passenger AS t")
			->order_by('t.id', 'desc')
    		->limit($limit, $start)
			->get()
			->result();
	} 

	public function findById($id = null)
	{ 
		return $this->db->select("
				t.*,
				CONCAT_WS(' ', t.firstname, t.middle_name, t.lastname) AS name
			")->from("tkt_passenger AS t")
			->where('id',$id) 
    		->limit($limit, $start)
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
