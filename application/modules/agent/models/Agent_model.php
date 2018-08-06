<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agent_model extends CI_Model {
 
    public function agent_view()
	{
		return $this->db->select('*')	
			->from('agent_info')
			->order_by('agent_id', 'desc')
			->get()
			->result();
	}
	public function agent_create($data = array())
	{
		return $this->db->insert('agent_info', $data);
	}

	public function delete_agent($id = null)
	{
		$this->db->where('agent_id',$id)
			->delete('agent_info');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

   public  function get_id($id)
    {
        $query=$this->db->get_where('agent_info',array('agent_id'=>$id));
        return $query->row_array();
    } 

public function update_agent($data = array())
	{
		return $this->db->where('agent_id', $data["agent_id"])
			->update("agent_info", $data);
	}
	public function agent_updateForm($id){
        $this->db->where('agent_id',$id);
        $query = $this->db->get('agent_info');
        return $query->row();
    }


	

public function details($id)
	{
		return $this->db->select('*')	
			->from('agent_info')

			->where('agent_id',$id)
			->get()
			->result();
	}

}
