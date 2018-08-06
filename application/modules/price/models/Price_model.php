<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Price_model extends CI_Model {
 
    public function price_view()
	{
		return $this->db->select('pri_price.*, trip_route.name, fleet_type.type')	
			->from('pri_price')
            ->join('trip_route', 'trip_route.id = pri_price.route_id', 'left')
            ->join('fleet_type', 'fleet_type.id = pri_price.vehicle_type_id', 'left')
			->order_by('price_id', 'desc')
			->get()
			->result();
	}
	public function price_create($data = array())
	{
		return $this->db->insert('pri_price', $data);
	}

	public function delete_price($id = null)
	{
		$this->db->where('price_id',$id)
			->delete('pri_price');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
	} 

    public function update_price($data = array())
	{
		return $this->db->where('price_id', $data["price_id"])
			->update("pri_price", $data);
	}
	public function price_updateForm($id){
        $this->db->where('price_id',$id);
        $query = $this->db->get('pri_price');
        return $query->row();
    }
public  function get_id($id)
    {
        $query=$this->db->get_where('pri_price',array('price_id'=>$id));
        return $query->row_array();
    } 

    public function rout(){
        $this->db->select('*');
        $this->db->from('trip_route');
        $query=$this->db->get();
        $data=$query->result();
        $list=array();
        if(!empty($data)){
            foreach ($data as  $value) {
                $list[$value->id]=$value->name;
            }
        }
        return $list;
    }

    public function vehicles(){
        $this->db->select('*');
        $this->db->from('fleet_type');
        $query=$this->db->get();
        $data=$query->result();
        $list=array();
        if(!empty($data)){
            foreach ($data as  $value) {
                $list[$value->id]=$value->type;
            }
        }
        return $list;
    }
    // currency and web information
     public function retrieve_setting_editdata()
    {
        $this->db->select('*');
        $this->db->from('ws_setting');
        $this->db->where('id',1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();  
        }
        return false;
    }
	

}
