<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fitness_model extends CI_Model {

	public function read_fitness()
	{
		return $this->db->select("*")
			->from('fit_fitness')
			->get()
			->result();
	}

	public function fitness_create($data = array())
	{
		return $this->db->insert('fit_fitness', $data);
	}

	public function fitness_delete($id = null)
	{
		$this->db->where('fitness_id',$id)
			->delete('fit_fitness');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

   

	public function update_fit($data = array())
	{
		return $this->db->where('fitness_id', $data["fitness_id"])
			->update("fit_fitness", $data);
	}

	public function fitness_updateForm($id){
        $this->db->where('fitness_id',$id);
        $query = $this->db->get('fit_fitness');
        return $query->row();
    }

  	public function fit_pr_view()
	{
		return $this->db->select('ftn_fitness_period.*, fit_fitness.fitness_name, fleet_registration.reg_no')	
		->from('ftn_fitness_period')
        ->join('fit_fitness', 'fit_fitness.fitness_id = ftn_fitness_period.fitness_id', 'left')
        ->join('fleet_registration', 'fleet_registration.id = ftn_fitness_period.vehicle_id', 'left')
		->order_by('id', 'desc')
		->get()
		->result();
	}
	

	public function fitness_period_create($data = array())
	{
		return $this->db->insert('ftn_fitness_period', $data);
	}

	public function fit_period_delete($id = null)
	{
		$this->db->where('id',$id)
			->delete('ftn_fitness_period');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

	public function update_fit_period($data = array())
	{
		return $this->db->where('id', $data["id"])
			->update("ftn_fitness_period", $data);
	}

	public function fit_period_updateForm($id){
        $this->db->where('id',$id);
        $query = $this->db->get('ftn_fitness_period');
        return $query->row();
    }

 	public  function get_id($id)
    {
        $query=$this->db->get_where('ftn_fitness_period',array('id'=>$id));
        return $query->row_array();
    } 

    public function fitness_dropdown(){
    	$this->db->select('*');
    	$this->db->from('fit_fitness');
    	$query=$this->db->get();
    	$data=$query->result();
    	$list=array();
    	if(!empty($data)){
    		foreach ($data as  $value) {
    			$list[$value->fitness_id]=$value->fitness_name;
    		}
    	}
    	return $list;
    }

    public function vehiclesNo(){
    	$this->db->select('*');
    	$this->db->from('fleet_registration');
    	$query=$this->db->get();
    	$data=$query->result();
    	$list=array();
    	if(!empty($data)){
    		foreach ($data as  $value) {
    			$list[$value->id] = $value->reg_no;
    		}
    	}
    	return $list;
    }

    public function vehicles_create($data = array())
	{
		return $this->db->insert('fleet_registration', $data);
	}

	
}
