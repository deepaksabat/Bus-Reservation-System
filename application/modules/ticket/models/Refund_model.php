<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Refund_model extends CI_Model {
 
	private $table = "tkt_refund";


	public function create($data = [])
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read($limit = null, $start = null)
	{
		return $this->db->select("*")
			->from($this->table)
        	->limit($limit, $start)
			->order_by('date','desc')
			->get()
			->result();
	}   

	public function delete($id = null)
	{
		$this->db->where('tkt_booking_id_no',$id)
			->delete($this->table);

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

}
