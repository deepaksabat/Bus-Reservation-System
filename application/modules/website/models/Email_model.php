<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {
 
	private $table = "email_config";


	public function create($data)
	{	 
		return $this->db->insert($this->table,$data);
	}

	public function read()
	{
		return $this->db->select("*")
			->from($this->table)
			->get()
			->row();
	}   

	public function update($data)
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
