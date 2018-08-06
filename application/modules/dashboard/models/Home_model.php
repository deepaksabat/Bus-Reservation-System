<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {


	public function checkUser($data = array())
	{
		return $this->db->select("
				user.id, 
				CONCAT_WS(' ', user.firstname, user.lastname) AS fullname,
				user.email, 
				user.image, 
				user.last_login,
				user.last_logout, 
				user.ip_address, 
				user.status, 
				user.is_admin, 
				IF (user.is_admin=1, 'Admin', 'User') as user_level
			")
			->from('user')
			->where('email', $data['email'])
			->where('password', md5($data['password']))
			->get();
	}

	public function userPermission($id = null)
	{
		return $this->db->select("
			module.controller, 
			module_permission.fk_module_id, 
			module_permission.create, 
			module_permission.read, 
			module_permission.update, 
			module_permission.delete
			")
			->from('module_permission')
			->join('module', 'module.id = module_permission.fk_module_id', 'full')
			->where('module_permission.fk_user_id', $id)
			->get()
			->result();
	}


	public function last_login($id = null)
	{
		return $this->db->set('last_login', date('Y-m-d H:i:s'))
			->set('ip_address', $this->input->ip_address())
			->where('id',$this->session->userdata('id'))
			->update('user');
	}

	public function last_logout($id = null)
	{
		return $this->db->set('last_logout', date('Y-m-d H:i:s'))
			->where('id', $this->session->userdata('id'))
			->update('user');
	}

	public function profile($id = null)
	{
		return $this->db->select("
			*, 
				CONCAT_WS(' ', firstname, lastname) AS fullname,
				IF (user.is_admin=1, 'Admin', 'User') as user_level
			")
			->from("user")
			->where("id", $id)
			->get()
			->row();
	}

	public function setting($data = array())
	{
		return $this->db->where('id', $data['id'])
			->update('user', $data);
	}


	public function schedule($limit = null, $start = null)
	{
		return $this->db->select("
			t.*, 
			fr.reg_no AS fleet_registration_name,
			tr.name AS trip_route_name,
			CONCAT_WS(' ', d.first_name, d.second_name) AS driver_name,
			DATE_FORMAT(t.start_date, '%d/%m/%Y %H:%i %p') AS start_date 
		")->from("trip_assign AS t")
		->join('fleet_registration AS fr', 'fr.id = t.fleet_registration_id', 'left')
		->join('trip_route AS tr', 'tr.id = t.trip_route_id', 'left')
		->join('employee_history AS d', 'd.id = t.driver_id', 'left')
		->where('t.status', 1)
		->group_start()
			->where('t.closed_by_id', null)
			->or_where('t.closed_by_id', '')
			->or_where('t.closed_by_id', 0)
		->group_end()
		->where('DATE(t.start_date)', date('Y-m-d'))
		->order_by('t.start_date','desc')
        ->limit($limit, $start)
		->get()
		->result();
	} 

	public function enquiries()
	{
		return $this->db->select("*")
			->from('enquiry')
			->where('checked_by', null)
			->order_by('enquiry_id','desc')
			->limit(3)
			->get()
			->result();
	} 


	public function chart()
	{
		$data['assign'] = $this->db->query("
			SELECT 
				COUNT(*) AS count, start_date, 
				EXTRACT(YEAR_MONTH FROM start_date) AS ym,
				MONTH(start_date) AS m
			FROM 
				trip_assign
			WHERE 
				YEAR(start_date) = YEAR(CURDATE()) 
			GROUP BY ym
		")->result();


		$data['booking'] = $this->db->query("
			SELECT 
				COUNT(*) AS count, booking_date, 
				EXTRACT(YEAR_MONTH FROM booking_date) AS ym,
				MONTH(booking_date) AS m
			FROM 
				tkt_booking
			WHERE 
				YEAR(booking_date) = YEAR(CURDATE()) 
			GROUP BY ym
		")->result(); 


		return $data;
	}


}
 