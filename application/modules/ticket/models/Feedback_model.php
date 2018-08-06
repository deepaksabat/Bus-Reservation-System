<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback_model extends CI_Model {
 
	private $table = "tkt_feedback";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read($limit = null, $start = null)
	{
		return $this->db->select("*")
			->from($this->table)
        	->limit($limit, $start)
        	->order_by('id', 'desc')
			->get()
			->result();
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

}
