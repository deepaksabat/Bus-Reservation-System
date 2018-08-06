<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer_model extends CI_Model {
 
    public function offer_view()
	{
             return $this->db->select('ofr_offer.*,trip_route.*')   
            ->from('ofr_offer')
            ->join('trip_route', 'trip_route.id = ofr_offer.offer_route_id', 'left')
            ->order_by('offer_id', 'desc')
            ->get()
            ->result();
	}
	public function offer_create($data = array())
	{
		return $this->db->insert('ofr_offer', $data);
	}

	public function delete_offer($id = null)
	{
		$this->db->where('offer_id',$id)
			->delete('ofr_offer');

		if ($this->db->affected_rows()) {
			return true;
		} else {
			return false;
		}
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
public  function get_id($id)
    {
        $query=$this->db->get_where('ofr_offer',array('offer_id'=>$id));
        return $query->row_array();
    } 
    public function update_offer($data = array())
	{
		return $this->db->where('offer_id', $data["offer_id"])
			->update("ofr_offer", $data);
	}

	public function offer_updateForm($id){
        $this->db->where('offer_id',$id);
        $query = $this->db->get('ofr_offer');
        return $query->row();
    }

    public function of_enddate()
    {
        return $this->db->select('*')   
            ->from('ofr_offer')
            ->get()
            ->result();
    }

    public function details($id)
    {

        return $this->db->select('ofr_offer.*,trip_route.*')   
            ->from('ofr_offer')
            ->where('offer_id',$id)
            ->join('trip_route', 'trip_route.id = ofr_offer.offer_route_id', 'left')
            ->get()
            ->result();
    }
     
}
