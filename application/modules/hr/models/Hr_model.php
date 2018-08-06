<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr_model extends CI_Model {
 
    public function hr_view()
	{
		return $this->db->select('*')	
			->from('employee_history')
			->order_by('id', 'desc')
			->get()
			->result();
	}
	public function hr_create($data = array())
	{
		return $this->db->insert('employee_history', $data);
	}

	public function delete_hr($id = null)
	{
		$this->db->where('id',$id)
			->delete('employee_history');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

    public  function get_id($id)
    {
        $query=$this->db->get_where('employee_history',array('id'=>$id));
        return $query->row_array();
    } 

	public function update_hr($data = array())
	{
		return $this->db->where('id', $data["id"])
			->update("employee_history", $data);
	}

	public function hr_updateForm($id){
        $this->db->where('id',$id);
        $query = $this->db->get('employee_history');
        return $query->row();
    }

	public function type_create($data = array())
	{
		return $this->db->insert('employee_type', $data);
	}
	
 	public function emptype_view()
	{
		return $this->db->select('*')	
			->from('employee_type')
			->order_by('type_id', 'desc')
			->get()
			->result();
	}

	public function delete_emtype($id = null)
	{
		$this->db->where('type_id',$id)
			->delete('employee_type');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_type($data = array())
	{
		return $this->db->where('type_id', $data["type_id"])
			->update("employee_type", $data);
	}

	public function type_updateForm($id){
        $this->db->where('type_id',$id);
        $query = $this->db->get('employee_type');
        return $query->row();
    }

    public function catagory(){
    	$this->db->select('*');
    	$this->db->from('employee_type');
    	$query=$this->db->get();
    	$data=$query->result();
    	$list=array();
    	if(!empty($data)){
    		foreach ($data as  $value) {
    			$list[$value->type_name]=$value->type_name;
    		}
    	}
    	return $list;
    }
 
	public function details($id)
	{
		return $this->db->select('*')	
			->from('employee_history')

			->where('id',$id)
			->get()
			->row();
	}

 }
